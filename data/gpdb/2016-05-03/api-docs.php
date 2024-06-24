<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'gpdb',
    'version' => '2016-05-03',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 187873,
      'title' => 'RAG Service',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InitVectorDatabase',
        1 => 
        array (
          'id' => 192907,
          'title' => '管理命名空间',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateNamespace',
            1 => 'DescribeNamespace',
            2 => 'ListNamespaces',
            3 => 'DeleteNamespace',
          ),
        ),
        2 => 
        array (
          'id' => 192908,
          'title' => '管理文档',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 192909,
              'title' => '管理文档库',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateDocumentCollection',
                1 => 'ListDocumentCollections',
                2 => 'DeleteDocumentCollection',
              ),
            ),
            1 => 
            array (
              'id' => 192910,
              'title' => '上传文档',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'UpsertChunks',
                1 => 'UploadDocumentAsync',
                2 => 'GetUploadDocumentJob',
                3 => 'CancelUploadDocumentJob',
              ),
            ),
            2 => 
            array (
              'id' => 192911,
              'title' => '检索',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'QueryContent',
              ),
            ),
            3 => 
            array (
              'id' => 192912,
              'title' => '管理文档',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListDocuments',
                1 => 'DescribeDocument',
                2 => 'DeleteDocument',
              ),
            ),
          ),
        ),
        3 => 
        array (
          'id' => 192913,
          'title' => '管理向量',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 192914,
              'title' => '管理向量集',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateCollection',
                1 => 'DescribeCollection',
                2 => 'ListCollections',
                3 => 'DeleteCollection',
                4 => 'GrantCollection',
              ),
            ),
            1 => 
            array (
              'id' => 192915,
              'title' => '上传向量数据',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'UpsertCollectionData',
                1 => 'UpsertCollectionDataAsync',
                2 => 'GetUpsertCollectionDataJob',
                3 => 'CancelUpsertCollectionDataJob',
              ),
            ),
            2 => 
            array (
              'id' => 192916,
              'title' => '检索',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'QueryCollectionData',
              ),
            ),
            3 => 
            array (
              'id' => 192917,
              'title' => '管理向量数据',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'UpdateCollectionDataMetadata',
                1 => 'DeleteCollectionData',
              ),
            ),
          ),
        ),
        4 => 
        array (
          'id' => 192918,
          'title' => '索引管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateVectorIndex',
            1 => 'DeleteVectorIndex',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 192465,
      'title' => '实时数据消费',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 192466,
          'title' => '实时数据源',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListStreamingDataSources',
            1 => 'DeleteStreamingDataSource',
            2 => 'ModifyStreamingDataSource',
            3 => 'CreateStreamingDataSource',
            4 => 'DescribeStreamingDataSource',
          ),
        ),
        1 => 
        array (
          'id' => 192472,
          'title' => '实时数据服务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListStreamingDataServices',
            1 => 'CreateStreamingDataService',
            2 => 'ModifyStreamingDataService',
            3 => 'DescribeStreamingDataService',
            4 => 'DeleteStreamingDataService',
          ),
        ),
        2 => 
        array (
          'id' => 192478,
          'title' => '实时数据同步任务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ModifyStreamingJob',
            1 => 'DescribeStreamingJob',
            2 => 'CreateStreamingJob',
            3 => 'DeleteStreamingJob',
            4 => 'ListStreamingJobs',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 192537,
      'title' => '插件管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpgradeExtensions',
        1 => 'ListInstanceExtensions',
        2 => 'CreateExtensions',
        3 => 'DeleteExtension',
      ),
    ),
    3 => 
    array (
      'id' => 192538,
      'title' => '外部数据管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 192539,
          'title' => '异构数据源管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 192540,
              'title' => '外部数据服务',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'DescribeExternalDataService',
                1 => 'DeleteExternalDataService',
                2 => 'ListExternalDataServices',
                3 => 'CreateExternalDataService',
                4 => 'ModifyExternalDataService',
                5 => 'DescribeHadoopClustersInSameNet',
              ),
            ),
            1 => 
            array (
              'id' => 192541,
              'title' => '外部数据源',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListExternalDataSources',
                1 => 
                array (
                  'id' => 192542,
                  'title' => 'Hadoop数据源',
                  'type' => 'directory',
                  'children' => 
                  array (
                    0 => 'DescribeHadoopConfigs',
                    1 => 'CreateHadoopDataSource',
                    2 => 'DescribeHadoopDataSource',
                    3 => 'ModifyHadoopDataSource',
                    4 => 'CheckHadoopDataSource',
                    5 => 'DeleteHadoopDataSource',
                    6 => 'CheckHadoopNetConnection',
                  ),
                ),
                2 => 
                array (
                  'id' => 192543,
                  'title' => 'JDBC数据源',
                  'type' => 'directory',
                  'children' => 
                  array (
                    0 => 'CreateJDBCDataSource',
                    1 => 'ModifyJDBCDataSource',
                    2 => 'CheckJDBCSourceNetConnection',
                    3 => 'DescribeJDBCDataSource',
                    4 => 'DeleteJDBCDataSource',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    4 => 
    array (
      'id' => 183074,
      'title' => '创建实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBInstance',
      ),
    ),
    5 => 
    array (
      'id' => 2569,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteDBInstance',
        1 => 'ModifyDBInstanceDescription',
        2 => 'ModifyDBInstanceMaintainTime',
        3 => 'ModifyDBInstanceResourceGroup',
        4 => 'ModifyVectorConfiguration',
        5 => 'PauseInstance',
        6 => 'RebalanceDBInstance',
        7 => 'RestartDBInstance',
        8 => 'ResumeInstance',
        9 => 'UpgradeDBVersion',
      ),
    ),
    6 => 
    array (
      'id' => 183108,
      'title' => '实例变配',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDataReDistributeInfo',
        1 => 'ModifyDBInstanceConfig',
        2 => 'UpgradeDBInstance',
        3 => 'PauseDataRedistribute',
        4 => 'ResumeDataRedistribute',
      ),
    ),
    7 => 
    array (
      'id' => 183078,
      'title' => '查询实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterNode',
        1 => 'DescribeDBInstanceAttribute',
        2 => 'DescribeDBInstances',
        3 => 'DescribeDBVersionInfos',
        4 => 'DescribeSupportFeatures',
      ),
    ),
    8 => 
    array (
      'id' => 183079,
      'title' => '参数管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeModifyParameterLog',
        1 => 'DescribeParameters',
        2 => 'ModifyParameters',
      ),
    ),
    9 => 
    array (
      'id' => 183080,
      'title' => '备份管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeBackupPolicy',
        1 => 'DescribeDataBackups',
        2 => 'DescribeLogBackups',
        3 => 'ModifyBackupPolicy',
      ),
    ),
    10 => 
    array (
      'id' => 183081,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'DescribeAccounts',
        2 => 'DescribeDiagnosisDimensions',
        3 => 'ModifyAccountDescription',
        4 => 'ResetAccountPassword',
        5 => 'DescribeRoles',
      ),
    ),
    11 => 
    array (
      'id' => 183082,
      'title' => '数据共享',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDataShareInstances',
        1 => 'DescribeDataSharePerformance',
        2 => 'SetDataShareInstance',
      ),
    ),
    12 => 
    array (
      'id' => 183083,
      'title' => '诊断与优化',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterPerformance',
        1 => 'DescribeDBInstanceDataBloat',
        2 => 'DescribeDBInstanceDataSkew',
        3 => 'DescribeDBInstanceDiagnosisSummary',
        4 => 'DescribeDBInstanceIndexUsage',
        5 => 'DescribeDBInstancePerformance',
        6 => 'DescribeDiagnosisMonitorPerformance',
        7 => 'DescribeDiagnosisRecords',
        8 => 'DescribeDiagnosisSQLInfo',
        9 => 'DescribeDownloadRecords',
        10 => 'DescribeDownloadSQLLogs',
        11 => 'DescribeHealthStatus',
        12 => 'DescribeWaitingSQLInfo',
        13 => 'DescribeWaitingSQLRecords',
        14 => 'DownloadDiagnosisRecords',
        15 => 'DownloadSQLLogsRecords',
      ),
    ),
    13 => 
    array (
      'id' => 183084,
      'title' => '计划管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBInstancePlan',
        1 => 'DeleteDBInstancePlan',
        2 => 'DescribeDBInstancePlans',
        3 => 'SetDBInstancePlanStatus',
        4 => 'UpdateDBInstancePlan',
      ),
    ),
    14 => 
    array (
      'id' => 2574,
      'title' => '标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTags',
        1 => 'ListTagResources',
        2 => 'TagResources',
        3 => 'UntagResources',
      ),
    ),
    15 => 
    array (
      'id' => 183085,
      'title' => '安全管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckServiceLinkedRole',
        1 => 'CreateServiceLinkedRole',
        2 => 'DescribeDBInstanceIPArrayList',
        3 => 'DescribeDBInstanceSSL',
        4 => 'DescribeUserEncryptionKeyList',
        5 => 'ModifyDBInstanceSSL',
        6 => 'ModifySecurityIps',
      ),
    ),
    16 => 
    array (
      'id' => 183086,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBInstanceErrorLog',
        1 => 'DescribeSQLLogCount',
        2 => 'DescribeSQLLogsV2',
        3 => 'ModifySQLCollectorPolicy',
      ),
    ),
    17 => 
    array (
      'id' => 183087,
      'title' => '网络管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AllocateInstancePublicConnection',
        1 => 'DescribeDBInstanceNetInfo',
        2 => 'DescribeRdsVpcs',
        3 => 'DescribeRdsVSwitchs',
        4 => 'ModifyDBInstanceConnectionString',
        5 => 'ReleaseInstancePublicConnection',
        6 => 'SwitchDBInstanceNetType',
      ),
    ),
    18 => 
    array (
      'id' => 183088,
      'title' => '资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAvailableResources',
        1 => 'DescribeRegions',
      ),
    ),
    19 => 
    array (
      'id' => 183089,
      'title' => '样本数据集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSampleData',
        1 => 'DescribeSampleData',
        2 => 'UnloadSampleData',
      ),
    ),
    20 => 
    array (
      'id' => 191974,
      'title' => '资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableDBResourceGroup',
        1 => 'DisableDBResourceGroup',
        2 => 'CreateDBResourceGroup',
        3 => 'DeleteDBResourceGroup',
        4 => 'ModifyDBResourceGroup',
        5 => 'DescribeDBResourceGroup',
        6 => 'BindDBResourceGroupWithRole',
        7 => 'UnbindDBResourceGroupWithRole',
        8 => 'DescribeDBResourceManagementMode',
      ),
    ),
    21 => 
    array (
      'id' => 185591,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyMasterSpec',
        1 => 'DescribeSQLLogs',
        2 => 'HandleActiveSQLRecord',
        3 => 'DescribeDBInstanceSupportMaxPerformance',
        4 => 'ResetIMVMonitorData',
        5 => 'DescribeIMVInfos',
        6 => 'DescribeActiveSQLRecords',
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
    'InitVectorDatabase' => 
    array (
      'summary' => '初始化向量检索数据库。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。
> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '失败信息详情。',
                'type' => 'string',
                'example' => 'failed to connect database, detailMsg: getConnection fail::SQL State: 28P01, Error Code: 0, Error Message: FATAL: password',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"failed to connect database, detailMsg: getConnection fail::SQL State: 28P01, Error Code: 0, Error Message: FATAL: password\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '初始化向量数据库',
    ),
    'CreateNamespace' => 
    array (
      'summary' => '创建向量数据的命名空间。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 您可以调用[DescribeDBInstances](~~196830~~)接口查看目标地域下所有实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或调用[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要创建的命名空间名称，用于租户隔离（后端会自动创建同名的用户账号）。

> 名称需符合PostgreSQL对象名限制。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword2',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建命名空间',
    ),
    'DescribeNamespace' => 
    array (
      'summary' => '查询命名空间信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'mynamespace',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的Region ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'NamespaceInfo' => 
              array (
                'description' => '命名空间信息。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{}',
                  'description' => '命名空间信息。',
                ),
              ),
              'Namespace' => 
              array (
                'description' => '命名空间。',
                'type' => 'string',
                'example' => 'mynamespace',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp152460513z****',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"NamespaceInfo\\": {\\n    \\"key\\": \\"{}\\"\\n  },\\n  \\"Namespace\\": \\"mynamespace\\",\\n  \\"DBInstanceId\\": \\"gp-bp152460513z****\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Message\\": \\"Successful\\"\\n}","type":"json"}]',
      'title' => '查询命名空间信息',
    ),
    'ListNamespaces' => 
    array (
      'summary' => '查询命名空间列表。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Namespaces' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Namespace' => 
                  array (
                    'description' => '命名空间列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '命名空间。',
                      'type' => 'string',
                      'example' => '["mynamespace"]',
                    ),
                  ),
                ),
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp152460513z****',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Count\\": 1,\\n  \\"Namespaces\\": {\\n    \\"Namespace\\": [\\n      \\"[\\\\\\"mynamespace\\\\\\"]\\"\\n    ]\\n  },\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"DBInstanceId\\": \\"gp-bp152460513z****\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '查询命名空间列表',
    ),
    'DeleteNamespace' => 
    array (
      'summary' => '删除命名空间。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z7****',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'mynamespace',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除命名空间',
    ),
    'CreateDocumentCollection' => 
    array (
      'summary' => '创建文档库。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        4 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要创建的文档库名称。

> 名称需符合PostgreSQL对象名限制。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'EmbeddingModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量化算法。

> 支持的算法：
> - text-embedding-v1: 1536维
> - text-embedding-v2: 1536维
> - text2vec: 1024维
> - m3e-base: 768维
> - m3e-small: 512维
> - multimodal-embedding-one-peace-v1: 1536维, 图片向量化算法
> - clip-vit-b-32：CLIP ViT-B/32模型, 512维, 图片向量化算法
> - clip-vit-b-16：CLIP ViT-B/16模型, 512维, 图片向量化算法
> - clip-vit-l-14：CLIP ViT-L/14模型, 768维, 图片向量化算法
> - clip-vit-l-14-336px：CLIP ViT-L/14@336px模型, 768维, 图片向量化算法
> - clip-rn50：CLIP RN50模型, 1024维, 图片向量化算法
> - clip-rn101：CLIP RN101模型, 512维, 图片向量化算法
> - clip-rn50x4：CLIP RN50x4模型, 640维, 图片向量化算法
> - clip-rn50x16：CLIP RN50x16模型, 768维, 图片向量化算法
> - clip-rn50x64：CLIP RN50x64模型, 1024维, 图片向量化算法',
            'type' => 'string',
            'required' => false,
            'example' => 'text-embedding-v1',
            'default' => 'text-embedding-v1',
            'enum' => 
            array (
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'FullTextRetrievalFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于全文检索的字段，多个字段用英文逗号（,）分隔，且字段必须属于Metadata里定义的key。',
            'type' => 'string',
            'required' => false,
            'example' => 'title,page',
          ),
        ),
        8 => 
        array (
          'name' => 'Metadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量数据的元信息，为MAP格式的JSON字符串。其中key代表字段名，value代表数据类型。
><warning>id、vector、doc_name、content、loader_metadata、source、to_tsvector字段为保留字段，禁止使用。></warning>',
            'type' => 'string',
            'required' => false,
            'example' => '{"title":"text","page":"int"}',
          ),
        ),
        9 => 
        array (
          'name' => 'Parser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于全文检索的分词器，默认为zh_cn。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
            'default' => 'zh_cn',
          ),
        ),
        10 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量构建索引时的方法

取值说明：
- **l2**：欧氏距离。
- **ip**：点积（内积）距离。
- **cosine**（默认）：余弦相似度。',
            'type' => 'string',
            'required' => false,
            'example' => 'cosine',
            'default' => 'cosine',
          ),
        ),
        11 => 
        array (
          'name' => 'HnswM',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HNSW算法中的最大邻居数，范围为1～1000。接口会根据向量维度自动设置此值，一般不需要手动设置。


> 建议根据向量维度来设置：
>- 小于等于384：16
>- 大于384小于等于768：32
>- 大于768小于等于1024：64
>- 大于1024：128',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '64',
            'enum' => 
            array (
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'PqEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引是否开启PQ(Product quantization)算法加速，数据量大于50w时建议开启。取值说明：
- 0：关闭。
- 1：开启(默认)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'ExternalStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用mmap构建HNSW索引，默认为0。如果数据不需要删除，且对上传数据的速度性能有要求时，建议设置为1。

> 
> - 为0时，默认会采用段页式存储构建索引，这种模式可以使用PostgreSQL中的shared_buffer做缓存，支持删除和更新等操作。
> - 为1时，该索引会采用mmap构建索引，该模式不支持删除更新等操作。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'successs',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"successs\\"\\n}","type":"json"}]',
      'title' => '创建文档库',
    ),
    'ListDocumentCollections' => 
    array (
      'summary' => '查询文档库列表。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建命名空间，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Status' => 
              array (
                'description' => '创建状态，取值说明：
- **success**：成功
- **fail**：失败',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CollectionList' => 
                  array (
                    'description' => '文档库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文档库信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CollectionName' => 
                        array (
                          'description' => '文档库名称。',
                          'type' => 'string',
                          'example' => 'document',
                        ),
                        'EmbeddingModel' => 
                        array (
                          'description' => '向量化算法。',
                          'type' => 'string',
                          'example' => 'text-embeddding-v1',
                        ),
                        'Dimension' => 
                        array (
                          'description' => '向量维度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1536',
                        ),
                        'FullTextRetrievalFields' => 
                        array (
                          'description' => '用于全文检索的字段，多个字段用英文逗号（,）分隔。',
                          'type' => 'string',
                          'example' => 'title',
                        ),
                        'Metadata' => 
                        array (
                          'description' => '元数据。',
                          'type' => 'string',
                          'example' => '{\'page\': \'int\', \'title\': \'text\'}',
                        ),
                        'Parser' => 
                        array (
                          'description' => '用于全文检索的分词器。',
                          'type' => 'string',
                          'example' => 'zh_cn',
                        ),
                        'Metrics' => 
                        array (
                          'description' => '向量相似度算法。',
                          'type' => 'string',
                          'example' => 'cosine',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Count\\": 10,\\n  \\"Items\\": {\\n    \\"CollectionList\\": [\\n      {\\n        \\"CollectionName\\": \\"document\\",\\n        \\"EmbeddingModel\\": \\"text-embeddding-v1\\",\\n        \\"Dimension\\": 1536,\\n        \\"FullTextRetrievalFields\\": \\"title\\",\\n        \\"Metadata\\": \\"{\'page\': \'int\', \'title\': \'text\'}\\",\\n        \\"Parser\\": \\"zh_cn\\",\\n        \\"Metrics\\": \\"cosine\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询文档库列表',
    ),
    'DeleteDocumentCollection' => 
    array (
      'summary' => '删除文档库。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的文档库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => '状态，取值说明：
- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除文档库',
    ),
    'UpsertChunks' => 
    array (
      'summary' => '将切分后的文档列表向量化并上传到文档库。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        4 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        5 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名。

> 指定文件名不为空时，则会覆盖上传此文件名对应的数据；为空时，则直接将chunks数据追加上传到文档库中。',
            'type' => 'string',
            'required' => false,
            'example' => 'mydoc.txt',
          ),
        ),
        6 => 
        array (
          'name' => 'TextChunks',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '切分后的文档列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '单个文档对象。',
              'type' => 'object',
              'properties' => 
              array (
                'Content' => 
                array (
                  'description' => '文档内容。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '云原生数据仓库AnalyticDB PostgreSQL版提供简单、快速、经济高效的PB级云端数据仓库解决方案。',
                ),
                'Metadata' => 
                array (
                  'description' => '元数据。',
                  'type' => 'object',
                  'required' => false,
                  'example' => '{"title":"test"}',
                ),
              ),
              'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值说明：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'EmbeddingTokens' => 
              array (
                'description' => '向量化时使用的token数。

> token是指将输入的文本分割成的最小单位。token可以是一个单词、一个词组、一个标点符号、一个字符等。',
                'type' => 'string',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\",\\n  \\"EmbeddingTokens\\": \\"100\\"\\n}","type":"json"}]',
      'title' => '上传切分后的文档',
      'description' => '文档的向量化算法为创建知识库CreateDocumentCollection接口指定的算法。',
    ),
    'UploadDocumentAsync' => 
    array (
      'summary' => '使用本地文件或公网可免密访问的文件链接异步上传文档，服务端对文档做Loader、Chunk、Embedding然后入库，最大支持200MB。',
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
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启了向量引擎优化加速的实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文档库名称。


> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过CreateNamespace接口创建，通过ListNamespaces接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件名。

><notice>

- 文件建议带有文档类型后缀，如`.json`、`.md`或`.pdf`。如果不带后缀，将使用默认的非结构化加载器加载。
- 图片文件必须带有文件后缀，当前支持的图片后缀：`bmp`、`jpg`、`jpeg`、`png`和`tiff`。
- 图片文件支持上传压缩包，压缩包必须带有文件后缀，支持的压缩包格式：`tar`、`gz`和`zip`。

</notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'mydoc.txt',
          ),
        ),
        6 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公网可访问的文档URL地址。

> 
> - 建议使用SDK调用此接口，SDK帮封装了UploadDocumentAsyncAdvance方法可直接上传本地文件。
> - 如果是图片压缩包地址，当前压缩包里的图片数目最多为100张。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://xx/mydoc.txt',
            'isFileTransferUrl' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'Metadata',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '元数据信息，需和创建文档库（CreateDocumentCollection）时指定的Metadata字段一致。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'any',
              'description' => '元数据信息，需和创建文档库（CreateDocumentCollection）时指定的Metadata字段一致。',
              'example' => '{"title":"mytitle","page":1}',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ChunkSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '处理大型数据的切分策略：数据拆分成较小的部分时每个块的大小。最大值2048。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '250',
          ),
        ),
        9 => 
        array (
          'name' => 'ChunkOverlap',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '处理大型数据的切分策略：在分块处理时，连续的块之间重叠的数据量。最大值不能超过ChunkSize。

> 这是为了防止数据被截断而丢失上下文信息。例如，在处理一个长文本时，您可能希望确保两个连续的文本块有一定量的重叠文本，这样模型就可以更好地理解两个块之间的上下文关系。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        10 => 
        array (
          'name' => 'Separators',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理大型数据的切分策略：分隔符。

> - Seprators是影响切分效果的关键参数，且和TextSplitterName指定的切分器相关。
> - 一般情况下不许指定，服务端会按照TextSplitterName自动适配。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分隔符。',
              'type' => 'string',
              'required' => false,
              'example' => '。',
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只做文档理解和切分，不做向量化和入库。默认为false。

> 当不确定文档切分效果时，可先设置此值为true查看切分效果进行调优。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'ZhTitleEnhance',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启中文标题加强。

> 文档理解时，通过增加标题判断，判断哪些文本为标题，并在metadata中进行标记， 然后将文本与往上一级的标题进行拼合，实现文本信息的增强。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'TextSplitterName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '切分器名称。取值说明：

- **ChineseRecursiveTextSplitter**（默认值）：继承于RecursiveCharacterTextSplitter，默认以`["\\n\\n","\\n", "。|！|？","\\.\\s|\\!\\s|\\?\\s", "；|;\\s", "，|,\\s"]`作为分隔符，使用正则匹配，中文比RecursiveCharacterTextSplitter效果更好一些。
- **RecursiveCharacterTextSplitter**：默认以`["\\n\\n", "\\n", " ", ""]`作为分隔符。可以支持`c++/go/java/js/php/proto/python/rst/ruby/rust/scala/swift/markdown/latex/html/sol/csharp`等多种代码语言的切分。
- **SpacyTextSplitter**：默认分隔符为`\\n\\n`，使用Spacy库的en_core_web_sm模型来分隔；对全英文文档支持较好。
- **MarkdownHeaderTextSplitter**：针对markdown类型，使用` [ ("#", "head1"),  ("##", "head2"),  ("###", "head3"), ("####", "head4") ]`来切分。',
            'type' => 'string',
            'required' => false,
            'example' => 'ChineseRecursiveTextSplitter',
          ),
        ),
        14 => 
        array (
          'name' => 'DocumentLoaderName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '建议无需指定，会按照文件扩展名自动匹配加载器，支持的列表如下：
- UnstructuredHTMLLoader：`.html`
- UnstructuredMarkdownLoader：`.md`
- PyMuPDFLoader：`.pdf`
- PyPDFLoader：`.pdf`
- RapidOCRPDFLoader：`.pdf`
- PDFWithImageRefLoader: `.pdf` （具有图文关联功能）
- JSONLoader：`.json`
- CSVLoader：`.csv`
- RapidOCRLoader：`.png`、.`jpg`、`.jpeg`或`.bmp`
- UnstructuredFileLoader：`.eml`、`.msg`、`.rst`、`.txt`、`.docx`、`.epub`、`.odt`、`.pptx`或`.tsv`',
            'type' => 'string',
            'required' => false,
            'example' => 'PyMuPDFLoader',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => '创建状态，取值说明：
- **success**：成功
- **fail**：失败',
                'type' => 'string',
                'example' => 'success',
              ),
              'JobId' => 
              array (
                'description' => '任务ID，用于后续查看任务状态或者取消任务。',
                'type' => 'string',
                'example' => '231460f8-75dc-405e-a669-0c5204887e91',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'gpdb::2016-05-03::GetUploadDocumentJob',
        'callbackInterval' => 2000,
        'maxCallbackTimes' => 1000,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\",\\n  \\"JobId\\": \\"231460f8-75dc-405e-a669-0c5204887e91\\"\\n}","type":"json"}]',
      'title' => '异步上传文档',
      'description' => '服务端会自动按照文档后缀进行load和chunk，并按照创建文档库（CreateDocumentCollection）时指定的embedding模型向量化，然后写入指定的文档库中。支持多种格式的文本、图片多模态embedding。

相关API接口：
 - 通过GetUploadDocumentJob接口查看上传进度和结果。
- 通过CancelUploadDocumentJob接口取消上传任务。

><notice>

- 上传文档后会进入排队处理，同一个用户（子账号也视为主账号用户）的Pending+Running处理的文档数不能超过20。
- 文本文档切分后条数最大100,000条。
- 当文档库使用的是OnePeace模型时，单个用户当前上传和查询图片可以使用的配额为10000。></notice>',
    ),
    'GetUploadDocumentJob' => 
    array (
      'summary' => '通过JobId获取异步上传文档的任务的进度和结果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启了向量引擎优化的实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，用于租户隔离，默认为public。

> 可以通过[CreateNamespace](~~2401495~~)创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传文档的任务ID，由`UploadDocumentAsync`接口获得。',
            'type' => 'string',
            'required' => true,
            'example' => 'bf8f7bc4-9276-44f7-9c22-1d06edc8dfd1',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => '此接口状态，取值说明：
- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Job' => 
              array (
                'description' => '上传文档的任务的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => 'Job ID。',
                    'type' => 'string',
                    'example' => '231460f8-75dc-405e-a669-0c5204887e91',
                  ),
                  'Completed' => 
                  array (
                    'description' => '操作是否完成。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'string',
                    'example' => '2024-01-08 16:52:04.864664',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '任务更新时间。',
                    'type' => 'string',
                    'example' => '2024-01-08 16:53:04.864664',
                  ),
                  'Status' => 
                  array (
                    'description' => '任务状态。取值说明：
- Success：成功。
- Failed：失败，失败原因可查看Error字段。
- Cancelling：正在取消中。
- Cancelled：已取消。
- Start：开始。
- Running：执行中。
- Pending：等待中。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'Error' => 
                  array (
                    'description' => '当前操作异常或者失败时的错误信息。',
                    'type' => 'string',
                    'example' => 'Failed to connect database.',
                  ),
                  'Progress' => 
                  array (
                    'description' => '上传进度，此数值为进度百分比，值为100时表示完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                ),
              ),
              'ChunkResult' => 
              array (
                'description' => '切分结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ChunkFileUrl' => 
                  array (
                    'description' => '切分后的文件链接，有效期为2h。文件格式为JSONL，每一行的格式为`{"page_content":"*****", "metadata": {"**":"***","**":"***"}`',
                    'type' => 'string',
                    'example' => 'http://xxx/test.jsonl',
                  ),
                  'PlainChunkFileUrl' => 
                  array (
                    'description' => '切分后的不带metadata的文件链接，有效期为2h。文件格式为纯文本，每一行为一条切分块。此文件可方便的用于embedding。',
                    'type' => 'string',
                    'example' => 'http://xxx/test.txt',
                  ),
                ),
              ),
              'Usage' => 
              array (
                'description' => '文档理解或Embedding消耗的token或条数。',
                'type' => 'object',
                'properties' => 
                array (
                  'EmbeddingTokens' => 
                  array (
                    'description' => '向量化时使用的token数。

> token是指将输入的文本分割成的最小单位；token可以是一个单词、一个词组、一个标点符号、一个字符等。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '475',
                  ),
                  'EmbeddingEntries' => 
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Job\\": {\\n    \\"Id\\": \\"231460f8-75dc-405e-a669-0c5204887e91\\",\\n    \\"Completed\\": false,\\n    \\"CreateTime\\": \\"2024-01-08 16:52:04.864664\\",\\n    \\"UpdateTime\\": \\"2024-01-08 16:53:04.864664\\",\\n    \\"Status\\": \\"Running\\",\\n    \\"Error\\": \\"Failed to connect database.\\",\\n    \\"Progress\\": 20\\n  },\\n  \\"ChunkResult\\": {\\n    \\"ChunkFileUrl\\": \\"http://xxx/test.jsonl\\",\\n    \\"PlainChunkFileUrl\\": \\"http://xxx/test.txt\\"\\n  },\\n  \\"Usage\\": {\\n    \\"EmbeddingTokens\\": 475,\\n    \\"EmbeddingEntries\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '获取上传文档任务',
      'description' => '此接口为UploadDocumentAsync的相关接口。可通过UploadDocumentAsync创建一个上传任务，并得到一个JobId，然后通过此接口查看Job的执行信息。

> 使用建议
> - 按照文档复杂度和切分后的向量条数评估超时，一般不超过2小时。',
    ),
    'CancelUploadDocumentJob' => 
    array (
      'summary' => '通过JobId取消异步上传文档的任务。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已经开启向量引擎优化实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过CreateNamespace接口创建，通过ListNamespaces接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传文档的任务ID，由`UploadDocumentAsync`接口获得。',
            'type' => 'string',
            'required' => true,
            'example' => '231460f8-75dc-405e-a669-0c5204887e91',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '取消上传文档任务',
      'description' => '此接口为UploadDocumentAsync的相关接口。用于取消上传任务。

> 当任务已经处理成功、失败、已取消时，不能再次调用取消接口。调用取消接口仅中断上传任务，已经写的数据，需要用户自行或者调用DeleteCollectionData接口删除，或者再次使用相同FileName调用上传覆盖。',
    ),
    'QueryContent' => 
    array (
      'summary' => '用自然语句从指定文档库检索向量和元数据。',
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
        'abilityTreeCode' => '197792',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdb4XJLZD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于检索的文本内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'ADBPG是什么？',
          ),
        ),
        6 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的数据的过滤条件，格式为SQL的WHERE格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'title = \'test\'',
          ),
        ),
        7 => 
        array (
          'name' => 'RecallWindow',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '召回窗口。当该值不为空时，增加返回检索结果的上下文。格式为2个元素的数组：List<A, B>，其中-10<=A<=0，0<=B<=10。
> - 推荐当文档切分过碎、检索可能会丢失上下文信息时使用该参数。
> - 重排优先窗口化，即先rerank，再窗口化处理。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '召回窗口大小。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '[-5, 5]',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'TopK',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置返回top结果数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'RerankFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重排因子。当该值不为空时，会对向量检索结果再做一次重排。取值范围：1<RerankFactor<=5。
> - 当文档切分稀疏时，重排效率慢。
> - 建议重排个数（TopK*Factor（向上取整））不超过50。',
            'type' => 'number',
            'format' => 'double',
            'required' => false,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'UseFullTextRetrieval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用全文检索（双路召回）。默认为false，仅采用向量检索。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索时的相似度算法。此值为空时则采用创建知识库时指定的算法，建议如无特殊需求不需设置。

> 取值说明：
> - **l2**：欧氏距离。
> - **ip**：点积（内积）距离。
> - **cosine**：余弦相似度。',
            'type' => 'string',
            'required' => false,
            'example' => 'cosine',
          ),
        ),
        12 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图场景中，待搜索的图片源文件名。

> 图片文件必须带有文件后缀，当前支持的图片后缀：bmp、jpg、jpeg、png、 tiff。',
            'type' => 'string',
            'required' => false,
            'example' => 'test.jpg',
          ),
        ),
        13 => 
        array (
          'name' => 'FileUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图场景中，公网可访问的图片文件URL地址。

> 图片文件必须带有文件后缀，当前支持的图片后缀：bmp、jpg、jpeg、png、tiff。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://xx/myImage.jpg
',
            'isFileTransferUrl' => true,
          ),
        ),
        14 => 
        array (
          'name' => 'IncludeVector',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回向量。默认为false。
> - **false**：不返回向量。
> - **true**：返回向量。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'HybridSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '双路召回算法，默认为空(即直接将向量和全文的分数比较并排序)。

可选值：

- RRF：倒数排序融合(Reciprocal rank fusion)，有一个参数k控制融合效果，详见HybridSearchArgs配置；
- Weight：比重排序，采用一个参数alpha控制向量和全文的分数比重，然后再排序，参数详见HybridSearchArgs配置；
- Cascaded：先全文检索再在其基础上进行向量检索；',
            'type' => 'string',
            'required' => false,
            'example' => 'RRF',
          ),
        ),
        16 => 
        array (
          'name' => 'HybridSearchArgs',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '双路召回的算法参数。目前支持RRF和Weight两种：

- RRF：指定计算分数的算法的`1/(k+rank_i)`中的k常数，范围大于1的正整数，格式为：
```
{ 
   "RRF": {
    "k": 60
   }
}
```

- Weight: 计算公式`alpha * vector_score + (1-alpha) * text_score`，参数alpha表示向量和全文的检索分数比重，范围为0～1，其中0表示只全文，1表示只向量：
```
{ 
   "Weight": {
    "alpha": 0.5
   }
}
```',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'object',
              'additionalProperties' => 
              array (
                'type' => 'any',
                'example' => '{ 
   "RRF": {
    "k": 60
   }
}',
                'description' => '参数值。',
              ),
              'description' => '双路召回的参数名。',
            ),
          ),
        ),
        17 => 
        array (
          'name' => 'IncludeMetadataFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空，表示要返回的metadata字段，多个字段用逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'title,page',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => '状态，取值如下：

- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Matches' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MatchList' => 
                  array (
                    'description' => '匹配到的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '单条记录。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '向量数据的唯一Id。',
                          'type' => 'string',
                          'example' => 'doca-1234',
                        ),
                        'Content' => 
                        array (
                          'description' => '文本内容。',
                          'type' => 'string',
                          'example' => '云原生数据仓库AnalyticDB PostgreSQL版提供简单、快速、经济高效的PB级云端数据仓库解决方案。',
                        ),
                        'Metadata' => 
                        array (
                          'description' => '元数据Map。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => '{"title":"test"}',
                            'description' => '元数据。',
                          ),
                        ),
                        'Vector' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VectorList' => 
                            array (
                              'description' => '向量数据List。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '向量数据。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '[1.2123,-0.12314,...]',
                              ),
                            ),
                          ),
                        ),
                        'FileName' => 
                        array (
                          'description' => '文件名。',
                          'type' => 'string',
                          'example' => 'my_doc.txt',
                        ),
                        'Score' => 
                        array (
                          'description' => '此条数据的相似度分数，其分数算法和创建索引时指定的算法(l2/ip/cosine)相关。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.12345',
                        ),
                        'RetrievalSource' => 
                        array (
                          'description' => '检索结果的来源。1表示向量检索，2表示全文检索，3表示双路召回。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'LoaderMetadata' => 
                        array (
                          'description' => '文档加载器加载时的元信息。',
                          'type' => 'string',
                          'example' => '{"page_pos": 1}',
                        ),
                        'FileURL' => 
                        array (
                          'description' => '查询结果图片的公网URL地址，有效时长2小时。',
                          'type' => 'string',
                          'example' => 'https://xxx-cn-beijing.aliyuncs.com/image/test.png',
                        ),
                        'RerankScore' => 
                        array (
                          'description' => '重排分数。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '6.2345',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'WindowMatches' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'windowMatches' => 
                  array (
                    'description' => '窗口化匹配到的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WindowMatch' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'windowMatch' => 
                            array (
                              'description' => '单个top窗口化匹配到的列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Id' => 
                                  array (
                                    'description' => '向量数据的唯一ID。',
                                    'type' => 'string',
                                    'example' => 'doca-2345',
                                  ),
                                  'Content' => 
                                  array (
                                    'description' => '文本内容。',
                                    'type' => 'string',
                                    'example' => '云原生数据仓库AnalyticDB PostgreSQL版是一种大规模并行处理（MPP）数据仓库服务，可提供海量数据在线分析服务。',
                                  ),
                                  'Metadata' => 
                                  array (
                                    'description' => '元数据Map。',
                                    'type' => 'object',
                                    'additionalProperties' => 
                                    array (
                                      'type' => 'string',
                                      'description' => '元数据。',
                                      'example' => '{"title":"test"}',
                                    ),
                                  ),
                                  'FileName' => 
                                  array (
                                    'description' => '文件名。',
                                    'type' => 'string',
                                    'example' => 'my_doc.txt',
                                  ),
                                  'LoaderMetadata' => 
                                  array (
                                    'description' => '文档加载器加载时的元信息。',
                                    'type' => 'string',
                                    'example' => '{"page_pos": 2}',
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
              'EmbeddingTokens' => 
              array (
                'description' => '向量化时使用的token数。

> token是指将输入的文本分割成的最小单位；token可以是一个单词、一个词组、一个标点符号、一个字符等。',
                'type' => 'string',
                'example' => '100',
              ),
              'Usage' => 
              array (
                'description' => '本次查询的资源使用量',
                'type' => 'object',
                'properties' => 
                array (
                  'EmbeddingTokens' => 
                  array (
                    'description' => '向量化时使用的token数。

> token是指将输入的文本分割成的最小单位；token可以是一个单词、一个词组、一个标点符号、一个字符等。',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'EmbeddingEntries' => 
                  array (
                    'description' => '向量化时使用的条目数。

> 条目是指对文字、图片做向量化处理时的处理数目，如对文字做一次处理，条目数是1，对图片做一次处理是2。',
                    'type' => 'string',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Matches\\": {\\n    \\"MatchList\\": [\\n      {\\n        \\"Id\\": \\"doca-1234\\",\\n        \\"Content\\": \\"云原生数据仓库AnalyticDB PostgreSQL版提供简单、快速、经济高效的PB级云端数据仓库解决方案。\\",\\n        \\"Metadata\\": {\\n          \\"key\\": \\"{\\\\\\"title\\\\\\":\\\\\\"test\\\\\\"}\\"\\n        },\\n        \\"Vector\\": {\\n          \\"VectorList\\": [\\n            0\\n          ]\\n        },\\n        \\"FileName\\": \\"my_doc.txt\\",\\n        \\"Score\\": 0.12345,\\n        \\"RetrievalSource\\": 1,\\n        \\"LoaderMetadata\\": \\"{\\\\\\"page_pos\\\\\\": 1}\\",\\n        \\"FileURL\\": \\"https://xxx-cn-beijing.aliyuncs.com/image/test.png\\",\\n        \\"RerankScore\\": 6.2345\\n      }\\n    ]\\n  },\\n  \\"WindowMatches\\": {\\n    \\"windowMatches\\": [\\n      {\\n        \\"WindowMatch\\": {\\n          \\"windowMatch\\": [\\n            {\\n              \\"Id\\": \\"doca-2345\\",\\n              \\"Content\\": \\"云原生数据仓库AnalyticDB PostgreSQL版是一种大规模并行处理（MPP）数据仓库服务，可提供海量数据在线分析服务。\\",\\n              \\"Metadata\\": {\\n                \\"key\\": \\"{\\\\\\"title\\\\\\":\\\\\\"test\\\\\\"}\\"\\n              },\\n              \\"FileName\\": \\"my_doc.txt\\",\\n              \\"LoaderMetadata\\": \\"{\\\\\\"page_pos\\\\\\": 2}\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"EmbeddingTokens\\": \\"100\\",\\n  \\"Usage\\": {\\n    \\"EmbeddingTokens\\": \\"100\\",\\n    \\"EmbeddingEntries\\": \\"10\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询文档内容',
    ),
    'ListDocuments' => 
    array (
      'summary' => '查询文档库中的文档列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值说明：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DocumentList' => 
                  array (
                    'description' => '文档列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文档列表对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FileName' => 
                        array (
                          'description' => '文件名。',
                          'type' => 'string',
                          'example' => 'music.txt',
                        ),
                        'Source' => 
                        array (
                          'description' => '文档来源。',
                          'type' => 'string',
                          'example' => 'http://oss.xxx/music.txt',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Items\\": {\\n    \\"DocumentList\\": [\\n      {\\n        \\"FileName\\": \\"music.txt\\",\\n        \\"Source\\": \\"http://oss.xxx/music.txt\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询文档列表',
    ),
    'DescribeDocument' => 
    array (
      'summary' => '查看文档详细信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档库名称。

> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在 Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档名。

> 可以通过[ListDocuments](~~2618453~~)接口查看文档列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'music.txt',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'FileName' => 
              array (
                'description' => '文件名。',
                'type' => 'string',
                'example' => 'music.txt',
              ),
              'FileExt' => 
              array (
                'description' => '文件扩展名。',
                'type' => 'string',
                'example' => 'txt',
              ),
              'FileVersion' => 
              array (
                'description' => '文档版本。每次更新上传同一文档时，此值会+1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'FileMtime' => 
              array (
                'description' => '文档最新修改时间。',
                'type' => 'string',
                'example' => '2023-11-01 10:01:01.123456',
              ),
              'Source' => 
              array (
                'description' => '文档来源。',
                'type' => 'string',
                'example' => 'http://oss.xxx/music.txt',
              ),
              'DocumentLoader' => 
              array (
                'description' => '文档加载器名称。',
                'type' => 'string',
                'example' => 'RapidOCRPDFLoader',
              ),
              'TextSplitter' => 
              array (
                'description' => '文档切分器名称。',
                'type' => 'string',
                'example' => 'ChineseRecursiveTextSplitter',
              ),
              'FileSize' => 
              array (
                'description' => '文件大小，单位为字节。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
              'FileMd5' => 
              array (
                'description' => '文件MD5值。',
                'type' => 'string',
                'example' => 'b8078c9591413550f8963e37e24abcea',
              ),
              'DocsCount' => 
              array (
                'description' => '文档被切分的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\",\\n  \\"FileName\\": \\"music.txt\\",\\n  \\"FileExt\\": \\"txt\\",\\n  \\"FileVersion\\": 1,\\n  \\"FileMtime\\": \\"2023-11-01 10:01:01.123456\\",\\n  \\"Source\\": \\"http://oss.xxx/music.txt\\",\\n  \\"DocumentLoader\\": \\"RapidOCRPDFLoader\\",\\n  \\"TextSplitter\\": \\"ChineseRecursiveTextSplitter\\",\\n  \\"FileSize\\": 10000,\\n  \\"FileMd5\\": \\"b8078c9591413550f8963e37e24abcea\\",\\n  \\"DocsCount\\": 100\\n}","type":"json"}]',
      'title' => '查看文档详细信息',
    ),
    'DeleteDocument' => 
    array (
      'summary' => '删除文档库中的文档。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档库名称。


> 由[CreateDocumentCollection](~~2618448~~)接口创建。您可以调用[ListDocumentCollections](~~2618452~~)接口查看已经创建的文档库。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为[CreateNamespace](~~2401495~~)接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名。

> 上传过的文件名称，您可以通过[ListDocuments](~~2618453~~)接口查询文件列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'music.txt',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => '创建状态，取值说明：
- **success**：成功
- **fail**：失败',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除文档',
    ),
    'CreateCollection' => 
    array (
      'summary' => '创建向量数据集。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以调用[CreateAccount](~~2361789~~)接口创建账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        4 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要创建的集合名。

> 名称需符合PostgreSQL对象名限制。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        5 => 
        array (
          'name' => 'Dimension',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '向量维度。

> 如果指定此值，会构建索引，且后续上传向量数据接口[UpsertCollectionData](~~2401493~~)的Rows.Vector长度需和此值一致。如果不指定此值，可以后续调用[CreateVectorIndex](~~2401499~~)构建索引。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1024',
          ),
        ),
        6 => 
        array (
          'name' => 'FullTextRetrievalFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于全文检索的字段，多个字段用英文逗号（,）分隔，且字段必须属于Metadata里定义的key。',
            'type' => 'string',
            'required' => false,
            'example' => 'title,content',
          ),
        ),
        7 => 
        array (
          'name' => 'Metadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量数据的元信息，为MAP格式的JSON字符串。其中key代表字段名，value代表数据类型。
><warning>id、vector、to_tsvector、source字段为保留字段，禁止使用。></warning>',
            'type' => 'string',
            'required' => true,
            'example' => '{"title":"text","content":"text","response":"int"}',
          ),
        ),
        8 => 
        array (
          'name' => 'Parser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于全文检索的分词器，默认为zh_cn。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        10 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量构建索引时的方法。取值说明：
- l2：欧氏距离。
- ip：点积（内积）距离。
- cosine：余弦相似度。',
            'type' => 'string',
            'required' => false,
            'example' => 'cosine',
            'enum' => 
            array (
              0 => 'l2',
              1 => 'ip',
              2 => 'cosine',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'HnswM',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HNSW算法中的最大邻居数，范围为1～1000。接口会根据向量维度自动设置此值，一般不需要手动设置。


> 建议根据向量维度来设置：
>- 小于等于384：16
>- 大于384小于等于768：32
>- 大于768小于等于1024：64
>- 大于1024：128',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '64',
          ),
        ),
        12 => 
        array (
          'name' => 'PqEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引是否开启PQ(Product quantization)算法加速，数据量大于50w时建议开启。取值说明：
- 0：关闭。
- 1：开启（默认）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'ExternalStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用mmap构建HNSW索引，默认为0。如果数据不需要删除，且对上传数据的速度性能有要求时，建议设置为1。

> 
> - 为0时，默认会采用段页式存储构建索引，这种模式可以使用PostgreSQL中的shared_buffer做缓存，支持删除和更新等操作。
> - 为1时，该索引会采用mmap构建索引，该模式不支持删除更新等操作。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'create successfully',
              ),
              'Status' => 
              array (
                'description' => '创建状态，取值说明：
- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"create successfully\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建向量数据集',
    ),
    'DescribeCollection' => 
    array (
      'summary' => '查询向量集信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您可以通[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
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
            'description' => '向量详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Dimension' => 
              array (
                'description' => '向量维度。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1024',
              ),
              'FullTextRetrievalFields' => 
              array (
                'description' => '用于全文检索的字段，多个字段用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => 'title,content',
              ),
              'Metadata' => 
              array (
                'description' => '向量数据的元信息，为MAP格式的JSON字符串。其中key代表字段名，value代表数据类型。
><warning>id、vector、to_tsvector字段为保留字段，禁止使用。></warning>',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => '元数据。',
                  'example' => '{"title":"text","content":"text"}',
                ),
              ),
              'Metrics' => 
              array (
                'description' => 'Distance Metrics。',
                'type' => 'string',
                'example' => 'cosine',
              ),
              'Parser' => 
              array (
                'description' => '用于全文检索的分词器。',
                'type' => 'string',
                'example' => 'zh_cn',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp152460513z****',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Namespace' => 
              array (
                'description' => '命名空间。',
                'type' => 'string',
                'example' => 'mynamespace',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Dimension\\": 1024,\\n  \\"FullTextRetrievalFields\\": \\"title,content\\",\\n  \\"Metadata\\": {\\n    \\"key\\": \\"{\\\\\\"title\\\\\\":\\\\\\"text\\\\\\",\\\\\\"content\\\\\\":\\\\\\"text\\\\\\"}\\"\\n  },\\n  \\"Metrics\\": \\"cosine\\",\\n  \\"Parser\\": \\"zh_cn\\",\\n  \\"DBInstanceId\\": \\"gp-bp152460513z****\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Namespace\\": \\"mynamespace\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '查询向量集信息',
    ),
    'ListCollections' => 
    array (
      'summary' => '查询向量集列表。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[CreateNamespace](~~2401495~~)接口创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Count' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Collections' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Collection' => 
                  array (
                    'description' => '向量集列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '向量集名称。',
                      'type' => 'string',
                      'example' => '["document"]',
                    ),
                  ),
                ),
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-xxxxxxxxx',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Namespace' => 
              array (
                'description' => '命名空间。',
                'type' => 'string',
                'example' => 'mynamespace',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Count\\": 1,\\n  \\"Collections\\": {\\n    \\"Collection\\": [\\n      \\"[\\\\\\"document\\\\\\"]\\"\\n    ]\\n  },\\n  \\"DBInstanceId\\": \\"gp-xxxxxxxxx\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Namespace\\": \\"mynamespace\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '查询向量集列表',
    ),
    'DeleteCollection' => 
    array (
      'summary' => '删除向量数据集。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        3 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除向量集',
    ),
    'GrantCollection' => 
    array (
      'summary' => '向量集授权。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储预留模式实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[CreateCollection](~~2401497~~)接口创建，通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'GrantToNamespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权目标，即此命名空间有此向量集的相应权限。',
            'type' => 'string',
            'required' => true,
            'example' => 'othernamespace',
          ),
        ),
        3 => 
        array (
          'name' => 'GrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型，可选值：

- rw：读写权限
- ro：只读权限
- none：删除权限',
            'type' => 'string',
            'required' => true,
            'example' => 'rw',
            'enum' => 
            array (
              0 => 'rw',
              1 => 'ro',
              2 => 'none',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账户名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        5 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账户密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        6 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您通过[ListNamespaces](~~2401502~~)查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '向量集授权',
    ),
    'UpsertCollectionData' => 
    array (
      'summary' => '上传向量数据到指定的向量集中。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 可以通过[CreateCollection](~~2401497~~)创建，并通过[ListCollections](~~2401503~~)查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，用于租户隔离，默认为public。

> 可以通过[CreateNamespace](~~2401495~~)创建，通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        4 => 
        array (
          'name' => 'Rows',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '向量数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '单条向量数据信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Id' => 
                array (
                  'description' => '此条向量数据的唯一ID。

> 如果为空，则由数据库uuidgen自动生成。如果不为空，且和数据库里已有的ID冲突，则会使用API的数据更新数据库里的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '854c6949-411c-4b47-aec4-e324735f9574',
                ),
                'Metadata' => 
                array (
                  'description' => '此条向量数据对应的元信息。其中key需和[CreateCollection](~~2401497~~)接口定义的Metadata的key一致。',
                  'type' => 'object',
                  'required' => false,
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'description' => '向量元数据。',
                    'example' => '{"title":"test title", "content": "test content"}',
                  ),
                ),
                'Vector' => 
                array (
                  'description' => '向量数据列表，长度和[CreateCollection](~~2401497~~)接口的维度一致。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '向量数据。',
                    'type' => 'number',
                    'format' => 'double',
                    'required' => false,
                    'example' => '[1.0123,-0.1234]',
                  ),
                  'required' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => '上传状态，取值说明：
- **success**：成功
- **fail**：失败',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '上传向量数据',
      'description' => '><notice>

**SDK于2023-11-8日升级，从最大512KB数据请求量升级到10MB。**
请使用最新版SDK或不低于此版本：

- Java：1.2.1 
- Go：v3.3.1 
- Python：3.3.1
></notice>',
    ),
    'UpsertCollectionDataAsync' => 
    array (
      'summary' => '使用本地文件或公网可免密访问的文件链接异步上传向量数据，最大支持200MB。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在 Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过CreateNamespace接口创建，通过ListNamespaces接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        3 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公网可访问的向量数据文件URL地址。

> 
> - 文件内容格式为jsonl，即每一行是一个特定格式的json数据，代表一组向量数据。
> - 单行的数据结构为`{String Id; Map<String, Object> Metadata; List<Double> Vector}`, 如`{"Id":"myid", "Metadata": {"my_meta_key": "my_meta_value"}, "Vector": [1.234, -0.123]}`。
> - 建议使用SDK调用此接口，SDK帮封装了UpsertCollectionDataAsyncAdvance方法可直接上传本地文件作为数据源。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://xx/vectors.jsonl',
            'isFileTransferUrl' => true,
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'JobId' => 
              array (
                'description' => '任务ID，用于后续查看任务状态或者取消任务。',
                'type' => 'string',
                'example' => '231460f8-75dc-405e-a669-0c5204887e91',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'gpdb::2016-05-03::GetUpsertCollectionDataJob',
        'callbackInterval' => 5000,
        'maxCallbackTimes' => 360,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\",\\n  \\"JobId\\": \\"231460f8-75dc-405e-a669-0c5204887e91\\"\\n}","type":"json"}]',
      'title' => '异步上传向量数据',
      'description' => '此接口为`UpsertCollectionData`对应的异步接口。`UpsertCollectionData`接口的请求最大只支持10MB，此接口最大支持200MB。

> 相关接口
> - 通过GetUpsertCollectionDataJob接口查看上传进度和结果。
> - 通过CancelUpsertCollectionDataJob接口取消上传任务。

><notice>对于同一个Collection目前只允许串行上传数据任务，不允许并发上传。></notice>',
    ),
    'GetUpsertCollectionDataJob' => 
    array (
      'summary' => '通过JobId获取异步上传向量数据的任务的进度和结果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过CreateNamespace接口创建，通过ListNamespaces接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传向量数据的任务ID，由`UpsertCollectionDataAsync`接口获得。',
            'type' => 'string',
            'required' => true,
            'example' => '231460f8-75dc-405e-a669-0c5204887e91',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Status' => 
              array (
                'description' => '此接口状态，取值说明：
- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Job' => 
              array (
                'description' => '上传向量数据的任务的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'description' => 'Job ID。',
                    'type' => 'string',
                    'example' => '231460f8-75dc-405e-a669-0c5204887e91',
                  ),
                  'Completed' => 
                  array (
                    'description' => '操作是否完成。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'string',
                    'example' => '2024-01-08 16:52:04.864664',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '任务更新时间。',
                    'type' => 'string',
                    'example' => '2024-01-08 16:53:04.864664',
                  ),
                  'Status' => 
                  array (
                    'description' => '任务状态。

> 取值说明：
> - Success：成功；
> - Failed：失败，失败原因可查看Error字段；
> - Cancelling：正在取消中；
> - Cancelled：已取消；
> - Start：开始；
> - Running：执行中；',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                  'Error' => 
                  array (
                    'description' => '当前操作异常或者失败时的错误信息。',
                    'type' => 'string',
                    'example' => 'Failed to connect database.',
                  ),
                  'Progress' => 
                  array (
                    'description' => '上传进度，此数值为已经上传的数据的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1600',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Job\\": {\\n    \\"Id\\": \\"231460f8-75dc-405e-a669-0c5204887e91\\",\\n    \\"Completed\\": false,\\n    \\"CreateTime\\": \\"2024-01-08 16:52:04.864664\\",\\n    \\"UpdateTime\\": \\"2024-01-08 16:53:04.864664\\",\\n    \\"Status\\": \\"Success\\",\\n    \\"Error\\": \\"Failed to connect database.\\",\\n    \\"Progress\\": 1600\\n  }\\n}","type":"json"}]',
      'title' => '获取异步上传向量数据任务',
      'description' => '此接口为`UpsertCollectionDataAsync`的相关接口。可通过`UpsertCollectionDataAsync`创建一个上传任务，并得到一个JobId，然后通过此接口查看Job的执行信息。

> 使用建议：可按照1000条向量数据需要1s的时间初步预估上传任务的耗时，然后每5s查询一次任务进度。超时建议设置为去掉初步评估的时间消耗后30min。',
    ),
    'CancelUpsertCollectionDataJob' => 
    array (
      'summary' => '通过JobId取消异步上传向量数据的任务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过CreateNamespace接口创建，通过ListNamespaces接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在Region ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。

> 本值为CreateNamespace接口指定。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传向量数据的任务ID，由`UpsertCollectionDataAsync`接口获得。',
            'type' => 'string',
            'required' => true,
            'example' => 'bf8f7bc4-9276-44f7-9c22-1d06edc8dfd1',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => '取消调用的状态，取值说明：
- **success**：成功
- **fail**：失败',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '取消异步上传向量数据任务',
      'description' => '此接口为`UpsertCollectionDataAsync`的相关接口。用于取消上传任务。


> 当任务已经处理成功、失败、已取消时，不能再次调用取消接口。调用取消接口仅中断上传任务，已经写的数据，需要用户自行或者调用DeleteCollectionData接口删除。',
    ),
    'QueryCollectionData' => 
    array (
      'summary' => '召回向量数据。',
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
        'abilityTreeCode' => '182778',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbIPPRRA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您可以通过[ListNamespaces](~~2401502~~)查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于全文检索的内容。即此值为空时，仅使用向量检索；不为空时，使用向量和全文双路检索。

> 和Vector参数不能同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello_world',
          ),
        ),
        5 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤器。',
            'type' => 'string',
            'required' => false,
            'example' => 'response > 200',
          ),
        ),
        6 => 
        array (
          'name' => 'TopK',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置返回top结果数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'Vector',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '向量数据，长度和[CreateCollection](~~2401497~~)接口的维度一致。
> 当vector为空时，只返回全文检索结果。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '向量数据。',
              'type' => 'number',
              'format' => 'double',
              'required' => false,
              'example' => '1.234',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索时的相似度算法。取值说明：
- **l2**：欧氏距离。
- **ip**：点积（内积）距离。
- **cosine**：余弦相似度。

> 此值为空时，则使用构建索引时指定的算法。',
            'type' => 'string',
            'required' => false,
            'example' => 'cosine',
            'enum' => 
            array (
              0 => 'ip',
              1 => 'l2',
              2 => 'cosine',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'IncludeValues',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回向量数据。取值说明：
- **true**：返回向量数据。
- **false**：不返回向量数据，用于全文检索场景。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'HybridSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '双路召回算法，默认为空(即直接将向量和全文的分数比较并排序)。

可选值：

- RRF：倒数排序融合(Reciprocal rank fusion)，有一个参数k控制融合效果，详见HybridSearchArgs配置；
- Weight：比重排序，采用一个参数alpha控制向量和全文的分数比重，然后再排序，参数详见HybridSearchArgs配置；
- Cascaded：先全文检索再在其基础上进行向量检索；',
            'type' => 'string',
            'required' => false,
            'example' => 'RRF',
          ),
        ),
        12 => 
        array (
          'name' => 'HybridSearchArgs',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '双路召回的算法参数。目前支持RRF和Weight两种：

- RRF：指定计算分数的算法的`1/(k+rank_i)`中的k常数，范围大于1的正整数，格式为：
```
{ 
   "RRF": {
    "k": 60
   }
}
```

- Weight: 计算公式`alpha * vector_score + (1-alpha) * text_score`，参数alpha表示向量和全文的检索分数比重，范围为0～1，其中0表示只全文，1表示只向量：
```
{ 
   "Weight": {
    "alpha": 0.5
   }
}
```',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'object',
              'additionalProperties' => 
              array (
                'type' => 'any',
                'description' => '参数值。',
                'example' => '{ 
   "Weight": {
    "alpha": 0.5
   }
}',
              ),
              'description' => '双路召回的参数名。',
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空，表示排序的依据字段。不支持双路召回场景。

字段必须属于metadata或表里的默认字段比如id，格式支持：
- 单个字段，如chunk_id；
- 多个字段，用逗号连接，如block_id, chunk_id；
- 支持反序，如: block_id DESC, chunk_id DESC；',
            'type' => 'string',
            'required' => false,
            'example' => 'chunk_id',
          ),
        ),
        14 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空，表示分页查询时的检索起点。不支持双路召回场景。

范围必须>=0。当此值不为空时，会返回Total表示总的命中数。此参数配合TopK使用，比如要分页20检索chunk_id 0~44的chunks，则要请求3次：
- Offset=0,TopK=20返回chunk_id 0~19
- Offset=20,TopK=20返回chunk_id 20~39
- Offset=30,TopK=20返回chunk_id 40~44',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        15 => 
        array (
          'name' => 'IncludeMetadataFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空，表示要返回的metadata字段，多个字段用逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'title,content',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '召回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Matches' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'match' => 
                  array (
                    'description' => '数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '单条记录。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'description' => '向量数据的唯一ID。',
                          'type' => 'string',
                          'example' => 'doca-1234',
                        ),
                        'Metadata' => 
                        array (
                          'description' => '元数据。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => '{"title":"test title", "content":  "test content"}',
                            'description' => '元数据内容。',
                          ),
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'value' => 
                            array (
                              'description' => '向量数据列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '向量数据。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '1.234',
                              ),
                            ),
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '此条数据的相似度分数，其分数算法和创建索引时指定的算法`(l2/ip/cosine)`相关。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.12345',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Status' => 
              array (
                'description' => '状态，取值说明：
- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '请求失败时的详细信息。',
                'type' => 'string',
                'example' => '0.1234',
              ),
              'Total' => 
              array (
                'description' => '当请求Offset不为0时才返回，返回值为该检索条件的命中总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Matches\\": {\\n    \\"match\\": [\\n      {\\n        \\"Id\\": \\"doca-1234\\",\\n        \\"Metadata\\": {\\n          \\"key\\": \\"{\\\\\\"title\\\\\\":\\\\\\"test title\\\\\\", \\\\\\"content\\\\\\":  \\\\\\"test content\\\\\\"}\\"\\n        },\\n        \\"Values\\": {\\n          \\"value\\": [\\n            1.234\\n          ]\\n        },\\n        \\"Score\\": 0.12345\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Status\\": \\"success\\",\\n  \\"Message\\": \\"0.1234\\",\\n  \\"Total\\": 100\\n}","type":"json"}]',
      'title' => '召回向量数据',
    ),
    'UpdateCollectionDataMetadata' => 
    array (
      'summary' => '更新向量数据中的Metadata数据。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-j788ghhjjxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要更新的数据的过滤条件，格式为SQL的WHERE格式。此字段不能和Ids字段同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'business_value = \'chat_file_1\'',
          ),
        ),
        6 => 
        array (
          'name' => 'Ids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '要更新的数据的Id列表，即上传数据时指定的Row.Id。此字段不能和Filter字段同时为空。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更新的数据的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'AC-2642a8744eba4c5eb7d7595d08306d15',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Metadata',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要更新的数据，为MAP格式的JSON字符串。其中key是字段名，value是新的数据取值。',
            'type' => 'object',
            'required' => true,
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
            'example' => '{
      "title": "new title",
      "content": "new content"
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '请求失败时的详细信息。',
                'type' => 'string',
                'example' => 'failed to connect database, detailMsg: getConnection fail::SQL State: 28P01, Error Code: 0, Error Message: FATAL: password',
              ),
              'Status' => 
              array (
                'description' => '状态，取值如下：

- **success**：成功。
- **fail**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'AppliedRows' => 
              array (
                'description' => '生效的条目。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"failed to connect database, detailMsg: getConnection fail::SQL State: 28P01, Error Code: 0, Error Message: FATAL: password\\",\\n  \\"Status\\": \\"success\\",\\n  \\"AppliedRows\\": 10\\n}","type":"json"}]',
      'title' => '更新向量数据中的Metadata值',
    ),
    'DeleteCollectionData' => 
    array (
      'summary' => '删除向量数据。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        2 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'NamespacePassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间对应的密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'CollectionData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的数据字段和值。为字典格式的JSON字符串，其中key为字段名，value为要删除的数据值列表。',
            'type' => 'string',
            'required' => false,
            'example' => '{"title":["a","b"]}',
          ),
        ),
        6 => 
        array (
          'name' => 'CollectionDataFilter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的数据过滤条件。格式为SQL WHERE语法。',
            'type' => 'string',
            'required' => false,
            'example' => 'a < 10',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'AppliedRows' => 
              array (
                'description' => '生效的条目。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\",\\n  \\"AppliedRows\\": 10\\n}","type":"json"}]',
      'title' => '删除向量数据',
    ),
    'CreateVectorIndex' => 
    array (
      'summary' => '创建向量集的索引。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。
> 您可以[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'Dimension',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量维度。
> 此值需和上传向量[UpsertCollectionData](~~2401493~~)接口的向量数据Rows. Vector长度一致。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1024',
          ),
        ),
        3 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账户名称。

> 您可以通过控制台->账号管理来创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        4 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账户密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        5 => 
        array (
          'name' => 'Metrics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量构建索引时的方法。取值说明：
- l2：欧氏距离。
- ip：点积（内积）距离。
- cosine：余弦相似度。',
            'type' => 'string',
            'required' => false,
            'example' => 'cosine',
            'enum' => 
            array (
              0 => 'ip',
              1 => 'l2',
              2 => 'cosine',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'PqEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引是否开启PQ（Product quantization）算法加速，数据量大于50w时建议开启。取值说明：
- 0：关闭。
- 1：开启（默认）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'HnswM',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HNSW算法中的最大邻居数，范围为1～1000。接口会根据向量维度自动设置此值，一般不需要手动设置。

> 建议根据向量维度来设置：
> - 小于等于384：16
> - 大于384小于等于768：32
> - 大于768小于等于1024：64
> -  大于1024：128',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '64',
          ),
        ),
        10 => 
        array (
          'name' => 'ExternalStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用mmap构建HNSW索引，默认为0。如果数据不需要删除，且对上传数据的速度性能有要求时，建议设置为1。

> 
> - 为0时，默认会采用段页式存储构建索引，这种模式可以使用PostgreSQL中的shared_buffer做缓存，支持删除和更新等操作。
> - 为1时，该索引会采用mmap构建索引，该模式不支持删除更新等操作。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '接口返回详细信息。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值说明：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '创建向量索引',
    ),
    'DeleteVectorIndex' => 
    array (
      'summary' => '删除向量索引。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集合名。

> 您可以通过[ListCollections](~~2401503~~)接口查看列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'document',
          ),
        ),
        2 => 
        array (
          'name' => 'ManagerAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有rds_superuser权限的管理账号名称。

> 您可以通过控制台的**账号管理**创建账号，或者通过[CreateAccount](~~2361789~~)接口创建。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount',
          ),
        ),
        3 => 
        array (
          'name' => 'ManagerAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testpassword',
          ),
        ),
        4 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，默认为public。

> 您可以通过[ListNamespaces](~~2401502~~)接口查看列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mynamespace',
            'default' => 'public',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **success**：执行成功。
- **fail**：执行失败。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '删除向量索引',
    ),
    'ListStreamingDataSources' => 
    array (
      'summary' => '查询所有实时服务数据源',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DataSourceItems' => 
              array (
                'description' => '返回的数据源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataSourceId' => 
                    array (
                      'description' => '数据源ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '数据源名称',
                      'type' => 'string',
                      'example' => 'test-kafka',
                    ),
                    'DataSourceType' => 
                    array (
                      'description' => '数据源类型，取值：
 -  kafka',
                      'type' => 'string',
                      'example' => 'kafka',
                    ),
                    'DataSourceConfig' => 
                    array (
                      'description' => '数据源配置',
                      'type' => 'string',
                      'example' => '{"brokers":"broker0:9091,broker1:9091","topic":"topic"}',
                    ),
                    'DataSourceDescription' => 
                    array (
                      'description' => '数据源描述。',
                      'type' => 'string',
                      'example' => 'test-kafka',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T16:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T17:00:00Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '服务状态，取值如下：

- 初始化中 init

- 运行中 running

- 异常 exception',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                      'type' => 'string',
                      'example' => '""',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalRecordCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"DataSourceItems\\": [\\n    {\\n      \\"DataSourceId\\": 1,\\n      \\"DataSourceName\\": \\"test-kafka\\",\\n      \\"DataSourceType\\": \\"kafka\\",\\n      \\"DataSourceConfig\\": \\"{\\\\\\"brokers\\\\\\":\\\\\\"broker0:9091,broker1:9091\\\\\\",\\\\\\"topic\\\\\\":\\\\\\"topic\\\\\\"}\\",\\n      \\"DataSourceDescription\\": \\"test-kafka\\",\\n      \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n      \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\",\\n      \\"Status\\": \\"running\\",\\n      \\"ServiceId\\": 1,\\n      \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询所有实时服务数据源',
    ),
    'DeleteStreamingDataSource' => 
    array (
      'summary' => '删除实时数据源',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源ID。',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '删除实时数据源',
    ),
    'ModifyStreamingDataSource' => 
    array (
      'summary' => '修改实时数据服务数据源',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-kafka',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 您可以调用[DescribeDBInstances](~~196830~~)接口查看目标地域下所有实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-k2j36a3172b102593',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源配置信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"brokers":"broker0:9091,broker1:9091","topic":"topic"}',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '57',
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
                'description' => '请求ID，标识这次请求，如果出现问题，可以通过RequestId找到这次请求的相关记录来进行排错。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '修改实时数据服务数据源',
    ),
    'CreateStreamingDataSource' => 
    array (
      'summary' => '创建实时数据源',
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

> 您可以通过[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-kafka',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源类型。取值：
 -  kafka',
            'type' => 'string',
            'required' => true,
            'example' => 'kafka',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-kafka',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'CreateExternalDataSource',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSourceConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源配置信息。',
            'type' => 'string',
            'required' => true,
            'example' => '{"broker_list":"broker0:9091,broker1:9091","topic":"topic"}',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实时数据服务ID。',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'integer',
                'format' => 'int32',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"DataSourceId\\": 1\\n}","type":"json"}]',
      'title' => '创建实时数据源',
    ),
    'DescribeStreamingDataSource' => 
    array (
      'summary' => '查询实时数据源',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源ID。',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'DataSourceName' => 
              array (
                'description' => '数据源名称。',
                'type' => 'string',
                'example' => 'test-kafka',
              ),
              'DataSourceDescription' => 
              array (
                'description' => '数据源描述。',
                'type' => 'string',
                'example' => 'test-kafka',
              ),
              'Status' => 
              array (
                'description' => '服务状态：

- 初始化中init

- 运行中 running

- 异常 exception',
                'type' => 'string',
                'example' => 'running',
              ),
              'ErrorMessage' => 
              array (
                'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'DataSourceConfig' => 
              array (
                'description' => '数据源配置信息。',
                'type' => 'string',
                'example' => '{"brokers":"broker0:9091,broker1:9091","topic":"topic"}',
              ),
              'ServiceId' => 
              array (
                'description' => '外部数据服务ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DataSourceType' => 
              array (
                'description' => '数据源类型，取值：
 -  kafka',
                'type' => 'string',
                'example' => 'kafka',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DataSourceId\\": \\"1\\",\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"DataSourceName\\": \\"test-kafka\\",\\n  \\"DataSourceDescription\\": \\"test-kafka\\",\\n  \\"Status\\": \\"running\\",\\n  \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"DataSourceConfig\\": \\"{\\\\\\"brokers\\\\\\":\\\\\\"broker0:9091,broker1:9091\\\\\\",\\\\\\"topic\\\\\\":\\\\\\"topic\\\\\\"}\\",\\n  \\"ServiceId\\": 1,\\n  \\"DataSourceType\\": \\"kafka\\"\\n}","type":"json"}]',
      'title' => '查询实时数据源',
    ),
    'ListStreamingDataServices' => 
    array (
      'summary' => '查询所有实时数据服务信息',
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
            'description' => '地域Id',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
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
            'description' => '每页记录数，取值如下：
- 30（默认值）
- 50
- 100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ServiceItems' => 
              array (
                'description' => '返回实时数据服务条目',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型，取值：

- **adbpgss**',
                      'type' => 'string',
                      'example' => 'adbpgss',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'test-adbpgss',
                    ),
                    'ServiceDescription' => 
                    array (
                      'description' => '服务描述。',
                      'type' => 'string',
                      'example' => 'test-adbpgss',
                    ),
                    'ServiceSpec' => 
                    array (
                      'description' => '服务规格（单位CU）。',
                      'type' => 'string',
                      'example' => '8',
                    ),
                    'Status' => 
                    array (
                      'description' => '服务状态，取值：

- Init：初始化中

-  Running：运行中

-  Exception：异常

-  Paused：暂停',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'ServiceIp' => 
                    array (
                      'description' => '服务IP。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'ServicePort' => 
                    array (
                      'description' => '服务端口。',
                      'type' => 'string',
                      'example' => '5432',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T16:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'string',
                      'example' => '2019-09-08T17:00:00Z',
                    ),
                  ),
                ),
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ServiceItems\\": [\\n    {\\n      \\"ServiceId\\": \\"1\\",\\n      \\"ServiceType\\": \\"adbpgss\\",\\n      \\"ServiceName\\": \\"test-adbpgss\\",\\n      \\"ServiceDescription\\": \\"test-adbpgss\\",\\n      \\"ServiceSpec\\": \\"8\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"ServiceIp\\": \\"192.168.0.1\\",\\n      \\"ServicePort\\": \\"5432\\",\\n      \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n      \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\"\\n    }\\n  ],\\n  \\"TotalRecordCount\\": 1\\n}","type":"json"}]',
      'title' => '查询所有实时数据服务',
    ),
    'CreateStreamingDataService' => 
    array (
      'summary' => '创建实时数据服务',
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
            'description' => 'The region ID.

>  You can call the [DescribeRegions](~~86912~~) operation to query the most recent region list.
',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'example' => 'test-adbpgss',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'example' => 'test-adbpgss',
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
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ServiceId' => 
              array (
                'description' => 'The real-time data service ID.
',
                'type' => 'integer',
                'format' => 'int32',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ServiceId\\": 1\\n}","type":"json"}]',
      'title' => '创建实时数据服务',
    ),
    'ModifyStreamingDataService' => 
    array (
      'summary' => '修改实时数据服务。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 您可以调用[DescribeDBInstances](~~196830~~)接口查看目标地域下所有实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务规格（单位CU），取值如下：

- 2

- 4

- 8

- 16',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-adbpgss',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '修改实时数据服务',
    ),
    'DescribeStreamingDataService' => 
    array (
      'summary' => '查询实时数据服务。',
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
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
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
                'description' => '请求ID.',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'ServiceName' => 
              array (
                'description' => '服务对应名称',
                'type' => 'string',
                'example' => 'test-adbpgss',
              ),
              'ServiceDescription' => 
              array (
                'description' => '服务描述。',
                'type' => 'string',
                'example' => 'test-adbpgss',
              ),
              'ServiceSpec' => 
              array (
                'description' => '服务规格。',
                'type' => 'string',
                'example' => '2',
              ),
              'Status' => 
              array (
                'description' => '服务状态，取值：

- Init：初始化中

- Running：运行中

- Exception：异常

- Paused：暂停',
                'type' => 'string',
                'example' => 'Running',
              ),
              'ServiceIp' => 
              array (
                'description' => '服务IP。',
                'type' => 'string',
                'example' => '192.168.0.1',
              ),
              'ServicePort' => 
              array (
                'description' => '服务端端口号',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5432',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'ModifyTime' => 
              array (
                'description' => '最后修改时间。',
                'type' => 'string',
                'example' => '2019-09-08T17:00:00Z',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ServiceId\\": \\"1\\",\\n  \\"ServiceName\\": \\"test-adbpgss\\",\\n  \\"ServiceDescription\\": \\"test-adbpgss\\",\\n  \\"ServiceSpec\\": \\"2\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"ServiceIp\\": \\"192.168.0.1\\",\\n  \\"ServicePort\\": 5432,\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\"\\n}","type":"json"}]',
      'title' => '查询实时数据服务',
    ),
    'DeleteStreamingDataService' => 
    array (
      'summary' => '删除实时数据服务。',
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
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true
',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在**Status**参数返回值为**false**时返回该参数。',
                'type' => 'string',
                'example' => 'This external service cannot be deleted because it is still used by other data source.',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"This external service cannot be deleted because it is still used by other data source.\\"\\n}","type":"json"}]',
      'title' => '删除实数数据服务',
    ),
    'ModifyStreamingJob' => 
    array (
      'summary' => '修改实时数据同步任务',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ModifyStreamingJob',
          ),
        ),
        3 => 
        array (
          'name' => 'JobDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-job',
          ),
        ),
        4 => 
        array (
          'name' => 'SrcColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源端数据字段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源端数据字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'src_column_1',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'DestColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标数据表映射字段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标表里面的映射字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'dest_column_1',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-account',
          ),
        ),
        7 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'pwd123',
          ),
        ),
        8 => 
        array (
          'name' => 'DestDatabase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-db',
          ),
        ),
        9 => 
        array (
          'name' => 'DestSchema',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标schema。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-schema',
          ),
        ),
        10 => 
        array (
          'name' => 'DestTable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-table',
          ),
        ),
        11 => 
        array (
          'name' => 'WriteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '写入模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'MERGE' => 'MERGE',
              'INSERT' => 'INSERT',
              'UPDATE' => 'UPDATE',
            ),
            'example' => 'INSERT/UPDATE/MERGE',
            'enum' => 
            array (
              0 => 'insert',
              1 => 'update',
              2 => 'merge',
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'TryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否测试实时任务，取值：

-  true
- false

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'JobConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务配置文件，专业模式必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'DATABASE: adbpgss_test
USER: adbpgss_test
PASSWORD: adbpgssTest
HOST: gp-xxx-master.gpdb.rds-aliyun-pre.rds.aliyuncs.com
PORT: 5432
KAFKA:
  INPUT:
    SOURCE:
      BROKERS: broker1:9092,broker2:9092,broker3:9092
      TOPIC: testtopic
      FALLBACK_OFFSET: earliest
    KEY:
      COLUMNS:
      - NAME: customer_id
        TYPE: int
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    VALUE:
      COLUMNS:
      - TYPE: integer
        NAME: l_orderkey
      - TYPE: integer
        NAME: l_partkey
      - TYPE: integer
        NAME: l_suppkey
      - TYPE: integer
        NAME: l_linenumber
      - TYPE: decimal
        NAME: l_quantity
      - TYPE: decimal
        NAME: l_extendedprice
      - TYPE: decimal
        NAME: l_discount
      - TYPE: decimal
        NAME: l_tax
      - TYPE: char
        NAME: l_returnflag
      - TYPE: char
        NAME: l_linestatus
      - TYPE: date
        NAME: l_shipdate
      - TYPE: date
        NAME: l_commitdate
      - TYPE: date
        NAME: l_receiptdate
      - TYPE: text
        NAME: l_shipinstruct
      - TYPE: text
        NAME: l_shipmode
      - TYPE: text
        NAME: l_comment
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    ERROR_LIMIT: 10
  OUTPUT:
    SCHEMA: adbpgss_test
    TABLE: write_with_insert_plaintext
    MODE: MERGE
    MATCH_COLUMNS:
    - l_orderkey
    - l_partkey
    - l_suppkey
    UPDATE_COLUMNS:
    - l_linenumber
    - l_quantity
    - l_extendedprice
    - l_discount
    - l_tax
    - l_returnflag
    - l_linestatus
    - l_shipdate
    - l_commitdate
    - l_receiptdate
    - l_shipinstruct
    - l_shipmode
    - l_comment
    MAPPING:
    - EXPRESSION: l_orderkey
      NAME: l_orderkey
    - EXPRESSION: l_partkey
      NAME: l_partkey
    - EXPRESSION: l_suppkey
      NAME: l_suppkey
    - EXPRESSION: l_linenumber
      NAME: l_linenumber
    - EXPRESSION: l_quantity
      NAME: l_quantity
    - EXPRESSION: l_extendedprice
      NAME: l_extendedprice
    - EXPRESSION: l_discount
      NAME: l_discount
    - EXPRESSION: l_tax
      NAME: l_tax
    - EXPRESSION: l_returnflag
      NAME: l_returnflag
    - EXPRESSION: l_linestatus
      NAME: l_linestatus
    - EXPRESSION: l_shipdate
      NAME: l_shipdate
    - EXPRESSION: l_commitdate
      NAME: l_commitdate
    - EXPRESSION: l_receiptdate
      NAME: l_receiptdate
    - EXPRESSION: l_shipinstruct
      NAME: l_shipinstruct
    - EXPRESSION: l_shipmode
      NAME: l_shipmode
    - EXPRESSION: l_comment
      NAME: l_comment
  COMMIT:
    MAX_ROW: 1000
    MINIMAL_INTERVAL: 1000
    CONSISTENCY: ATLEAST
  POLL:
    BATCHSIZE: 1000
    TIMEOUT: 1000
  PROPERTIES:
    group.id: testgroup',
          ),
        ),
        14 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'kafka分组名称',
            'type' => 'string',
            'required' => false,
            'example' => 'group_name',
          ),
        ),
        15 => 
        array (
          'name' => 'FallbackOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'FallbackOffset 回退点位，回退偏移量

- FallbackOffset参数定义了当consumer没有请求需要消费的位点或者请求的消费的位点超出当前kafka集群的记录的位点信息的时候的行为。可以选择从earliest（最新）或者latest（最晚）位点开始消费。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'EARLIEST' => 'EARLIEST',
              'LATEST' => 'LATEST',
            ),
            'example' => 'EARLIEST /  LATEST',
            'enum' => 
            array (
              0 => 'earliest',
              1 => 'latest',
            ),
          ),
        ),
        16 => 
        array (
          'name' => 'Consistency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递保证。',
            'type' => 'string',
            'required' => false,
            'example' => 'ATLEAST / EXACTLY',
            'enum' => 
            array (
              0 => 'ATLEAST',
              1 => 'EXACTLY',
            ),
          ),
        ),
        17 => 
        array (
          'name' => 'ErrorLimitCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'kafka中的数据与adbpg目标表不匹配造时会造成写入失败，此值为允许错误行的行数，超出后会造成任务失败。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        18 => 
        array (
          'name' => 'MatchColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '匹配列，通常为目标表的所有主键列，此配置内所有列的值相同即视为两行数据为重复数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '匹配字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'column_1',
            ),
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'UpdateColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新列，通常为目标表的所有非主键列，当通过MatchColumns确定数据重复时，通过更新UpdateColumns列的值，产生使新数据覆盖旧数据的效果。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更新字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'column_1',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '修改实时数据同步任务',
    ),
    'DescribeStreamingJob' => 
    array (
      'summary' => '查询实时数据同步服务',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'JobName' => 
              array (
                'description' => '任务名称。',
                'type' => 'string',
                'example' => 'test-job',
              ),
              'JobDescription' => 
              array (
                'description' => '任务描述。',
                'type' => 'string',
                'example' => 'test_job',
              ),
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'string',
                'example' => '2',
              ),
              'SrcColumns' => 
              array (
                'description' => '源端字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '源端数据字段键值。',
                  'type' => 'string',
                  'example' => 'src_column_1',
                ),
              ),
              'DestColumns' => 
              array (
                'description' => '目标数据表映射字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目标表里面的映射字段键值。',
                  'type' => 'string',
                  'example' => 'dest_column_1',
                ),
              ),
              'MatchColumns' => 
              array (
                'description' => '匹配列，通常为目标表的所有主键列，此配置内所有列的值相同即视为两行数据为重复数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '匹配字段键值。',
                  'type' => 'string',
                  'example' => 'column_1',
                ),
              ),
              'UpdateColumns' => 
              array (
                'description' => '更新列，通常为目标表的所有非主键列，当通过MatchColumns确定数据重复时，通过更新UpdateColumns列的值，产生使新数据覆盖旧数据的效果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '更新字段键值。',
                  'type' => 'string',
                  'example' => 'column_1',
                ),
              ),
              'Account' => 
              array (
                'description' => '目标数据库账号。',
                'type' => 'string',
                'example' => 'test-account',
              ),
              'Password' => 
              array (
                'description' => '目标数据库密码。',
                'type' => 'string',
                'example' => 'pwd123',
              ),
              'DestDatabase' => 
              array (
                'description' => '目标数据库名称。',
                'type' => 'string',
                'example' => 'dest-db',
              ),
              'DestSchema' => 
              array (
                'description' => '目标命名空间。',
                'type' => 'string',
                'example' => 'dest-schema',
              ),
              'DestTable' => 
              array (
                'description' => '目标表名称。',
                'type' => 'string',
                'example' => 'dest-table',
              ),
              'WriteMode' => 
              array (
                'description' => '写入模式。',
                'type' => 'string',
                'example' => 'INSERT/UPDATE/MERGE',
              ),
              'Mode' => 
              array (
                'description' => '配置模式
1. basic模式需要指定一些配置字段
1. professional支持提交yaml文件',
                'type' => 'string',
                'example' => 'basic/professional',
              ),
              'JobConfig' => 
              array (
                'description' => '任务配置文件。',
                'type' => 'string',
                'example' => 'DATABASE: adbpgss_test
USER: adbpgss_test
PASSWORD: adbpgssTest
HOST: gp-xxx-master.gpdb.rds-aliyun-pre.rds.aliyuncs.com
PORT: 5432
KAFKA:
  INPUT:
    SOURCE:
      BROKERS: broker1:9092,broker2:9092,broker3:9092
      TOPIC: testtopic
      FALLBACK_OFFSET: earliest
    KEY:
      COLUMNS:
      - NAME: customer_id
        TYPE: int
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    VALUE:
      COLUMNS:
      - TYPE: integer
        NAME: l_orderkey
      - TYPE: integer
        NAME: l_partkey
      - TYPE: integer
        NAME: l_suppkey
      - TYPE: integer
        NAME: l_linenumber
      - TYPE: decimal
        NAME: l_quantity
      - TYPE: decimal
        NAME: l_extendedprice
      - TYPE: decimal
        NAME: l_discount
      - TYPE: decimal
        NAME: l_tax
      - TYPE: char
        NAME: l_returnflag
      - TYPE: char
        NAME: l_linestatus
      - TYPE: date
        NAME: l_shipdate
      - TYPE: date
        NAME: l_commitdate
      - TYPE: date
        NAME: l_receiptdate
      - TYPE: text
        NAME: l_shipinstruct
      - TYPE: text
        NAME: l_shipmode
      - TYPE: text
        NAME: l_comment
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    ERROR_LIMIT: 10
  OUTPUT:
    SCHEMA: adbpgss_test
    TABLE: write_with_insert_plaintext
    MODE: MERGE
    MATCH_COLUMNS:
    - l_orderkey
    - l_partkey
    - l_suppkey
    UPDATE_COLUMNS:
    - l_linenumber
    - l_quantity
    - l_extendedprice
    - l_discount
    - l_tax
    - l_returnflag
    - l_linestatus
    - l_shipdate
    - l_commitdate
    - l_receiptdate
    - l_shipinstruct
    - l_shipmode
    - l_comment
    MAPPING:
    - EXPRESSION: l_orderkey
      NAME: l_orderkey
    - EXPRESSION: l_partkey
      NAME: l_partkey
    - EXPRESSION: l_suppkey
      NAME: l_suppkey
    - EXPRESSION: l_linenumber
      NAME: l_linenumber
    - EXPRESSION: l_quantity
      NAME: l_quantity
    - EXPRESSION: l_extendedprice
      NAME: l_extendedprice
    - EXPRESSION: l_discount
      NAME: l_discount
    - EXPRESSION: l_tax
      NAME: l_tax
    - EXPRESSION: l_returnflag
      NAME: l_returnflag
    - EXPRESSION: l_linestatus
      NAME: l_linestatus
    - EXPRESSION: l_shipdate
      NAME: l_shipdate
    - EXPRESSION: l_commitdate
      NAME: l_commitdate
    - EXPRESSION: l_receiptdate
      NAME: l_receiptdate
    - EXPRESSION: l_shipinstruct
      NAME: l_shipinstruct
    - EXPRESSION: l_shipmode
      NAME: l_shipmode
    - EXPRESSION: l_comment
      NAME: l_comment
  COMMIT:
    MAX_ROW: 1000
    MINIMAL_INTERVAL: 1000
    CONSISTENCY: ATLEAST
  POLL:
    BATCHSIZE: 1000
    TIMEOUT: 1000
  PROPERTIES:
    group.id: testgroup',
              ),
              'Status' => 
              array (
                'description' => '服务状态，取值：

- Init：初始化中

- Running：运行中

- Exception：异常

- Paused：暂停',
                'type' => 'string',
                'example' => 'Running',
              ),
              'ErrorMessage' => 
              array (
                'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'format' => 'iso8601_normal',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'ModifyTime' => 
              array (
                'description' => '最后修改时间。',
                'type' => 'string',
                'format' => 'iso8601_normal',
                'example' => '2019-09-08T17:00:00Z',
              ),
              'GroupName' => 
              array (
                'description' => 'kafka分组名称',
                'type' => 'string',
                'example' => 'test_group',
              ),
              'Consistency' => 
              array (
                'description' => '投递保证。',
                'type' => 'string',
                'example' => 'ATLEAST / EXACTLY',
              ),
              'ErrorLimitCount' => 
              array (
                'description' => 'kafka中的数据与adbpg目标表不匹配造时会造成写入失败，此值为允许错误行的行数，超出后会造成任务失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'FallbackOffset' => 
              array (
                'description' => 'FallbackOffset 回退点位，回退偏移量

- FallbackOffset参数定义了当consumer没有请求需要消费的位点或者请求的消费的位点超出当前kafka集群的记录的位点信息的时候的行为。可以选择从earliest（最新）或者latest（最晚）位点开始消费。',
                'type' => 'string',
                'example' => 'EARLIEST /  LATEST',
              ),
              'DataSourceName' => 
              array (
                'description' => '数据源名称。',
                'type' => 'string',
                'example' => 'test_kafka',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"JobId\\": \\"1\\",\\n  \\"JobName\\": \\"test-job\\",\\n  \\"JobDescription\\": \\"test_job\\",\\n  \\"DataSourceId\\": \\"2\\",\\n  \\"SrcColumns\\": [\\n    \\"src_column_1\\"\\n  ],\\n  \\"DestColumns\\": [\\n    \\"dest_column_1\\"\\n  ],\\n  \\"MatchColumns\\": [\\n    \\"column_1\\"\\n  ],\\n  \\"UpdateColumns\\": [\\n    \\"column_1\\"\\n  ],\\n  \\"Account\\": \\"test-account\\",\\n  \\"Password\\": \\"pwd123\\",\\n  \\"DestDatabase\\": \\"dest-db\\",\\n  \\"DestSchema\\": \\"dest-schema\\",\\n  \\"DestTable\\": \\"dest-table\\",\\n  \\"WriteMode\\": \\"INSERT/UPDATE/MERGE\\",\\n  \\"Mode\\": \\"basic/professional\\",\\n  \\"JobConfig\\": \\"DATABASE: adbpgss_test\\\\nUSER: adbpgss_test\\\\nPASSWORD: adbpgssTest\\\\nHOST: gp-xxx-master.gpdb.rds-aliyun-pre.rds.aliyuncs.com\\\\nPORT: 5432\\\\nKAFKA:\\\\n  INPUT:\\\\n    SOURCE:\\\\n      BROKERS: broker1:9092,broker2:9092,broker3:9092\\\\n      TOPIC: testtopic\\\\n      FALLBACK_OFFSET: earliest\\\\n    KEY:\\\\n      COLUMNS:\\\\n      - NAME: customer_id\\\\n        TYPE: int\\\\n      FORMAT: delimited\\\\n      DELIMITED_OPTION:\\\\n        DELIMITER: \'|\'\\\\n    VALUE:\\\\n      COLUMNS:\\\\n      - TYPE: integer\\\\n        NAME: l_orderkey\\\\n      - TYPE: integer\\\\n        NAME: l_partkey\\\\n      - TYPE: integer\\\\n        NAME: l_suppkey\\\\n      - TYPE: integer\\\\n        NAME: l_linenumber\\\\n      - TYPE: decimal\\\\n        NAME: l_quantity\\\\n      - TYPE: decimal\\\\n        NAME: l_extendedprice\\\\n      - TYPE: decimal\\\\n        NAME: l_discount\\\\n      - TYPE: decimal\\\\n        NAME: l_tax\\\\n      - TYPE: char\\\\n        NAME: l_returnflag\\\\n      - TYPE: char\\\\n        NAME: l_linestatus\\\\n      - TYPE: date\\\\n        NAME: l_shipdate\\\\n      - TYPE: date\\\\n        NAME: l_commitdate\\\\n      - TYPE: date\\\\n        NAME: l_receiptdate\\\\n      - TYPE: text\\\\n        NAME: l_shipinstruct\\\\n      - TYPE: text\\\\n        NAME: l_shipmode\\\\n      - TYPE: text\\\\n        NAME: l_comment\\\\n      FORMAT: delimited\\\\n      DELIMITED_OPTION:\\\\n        DELIMITER: \'|\'\\\\n    ERROR_LIMIT: 10\\\\n  OUTPUT:\\\\n    SCHEMA: adbpgss_test\\\\n    TABLE: write_with_insert_plaintext\\\\n    MODE: MERGE\\\\n    MATCH_COLUMNS:\\\\n    - l_orderkey\\\\n    - l_partkey\\\\n    - l_suppkey\\\\n    UPDATE_COLUMNS:\\\\n    - l_linenumber\\\\n    - l_quantity\\\\n    - l_extendedprice\\\\n    - l_discount\\\\n    - l_tax\\\\n    - l_returnflag\\\\n    - l_linestatus\\\\n    - l_shipdate\\\\n    - l_commitdate\\\\n    - l_receiptdate\\\\n    - l_shipinstruct\\\\n    - l_shipmode\\\\n    - l_comment\\\\n    MAPPING:\\\\n    - EXPRESSION: l_orderkey\\\\n      NAME: l_orderkey\\\\n    - EXPRESSION: l_partkey\\\\n      NAME: l_partkey\\\\n    - EXPRESSION: l_suppkey\\\\n      NAME: l_suppkey\\\\n    - EXPRESSION: l_linenumber\\\\n      NAME: l_linenumber\\\\n    - EXPRESSION: l_quantity\\\\n      NAME: l_quantity\\\\n    - EXPRESSION: l_extendedprice\\\\n      NAME: l_extendedprice\\\\n    - EXPRESSION: l_discount\\\\n      NAME: l_discount\\\\n    - EXPRESSION: l_tax\\\\n      NAME: l_tax\\\\n    - EXPRESSION: l_returnflag\\\\n      NAME: l_returnflag\\\\n    - EXPRESSION: l_linestatus\\\\n      NAME: l_linestatus\\\\n    - EXPRESSION: l_shipdate\\\\n      NAME: l_shipdate\\\\n    - EXPRESSION: l_commitdate\\\\n      NAME: l_commitdate\\\\n    - EXPRESSION: l_receiptdate\\\\n      NAME: l_receiptdate\\\\n    - EXPRESSION: l_shipinstruct\\\\n      NAME: l_shipinstruct\\\\n    - EXPRESSION: l_shipmode\\\\n      NAME: l_shipmode\\\\n    - EXPRESSION: l_comment\\\\n      NAME: l_comment\\\\n  COMMIT:\\\\n    MAX_ROW: 1000\\\\n    MINIMAL_INTERVAL: 1000\\\\n    CONSISTENCY: ATLEAST\\\\n  POLL:\\\\n    BATCHSIZE: 1000\\\\n    TIMEOUT: 1000\\\\n  PROPERTIES:\\\\n    group.id: testgroup\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\",\\n  \\"GroupName\\": \\"test_group\\",\\n  \\"Consistency\\": \\"ATLEAST / EXACTLY\\",\\n  \\"ErrorLimitCount\\": 5,\\n  \\"FallbackOffset\\": \\"EARLIEST /  LATEST\\",\\n  \\"DataSourceName\\": \\"test_kafka\\"\\n}","type":"json"}]',
      'title' => '查询实时数据同步任务',
    ),
    'CreateStreamingJob' => 
    array (
      'summary' => '创建实时数据同步任务。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'JobDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-job',
          ),
        ),
        4 => 
        array (
          'name' => 'JobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-job',
          ),
        ),
        5 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模式
1. basic模式需要指定一些配置字段
1. professional支持提交yaml文件',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'basic / professional',
            'enum' => 
            array (
              0 => 'basic',
              1 => 'professional',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'SrcColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源端数据字段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源端数据字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'src_column_1',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'DestColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标数据表映射字段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标表里面的映射字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'dest_column_1',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-account',
          ),
        ),
        9 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'pwd123',
          ),
        ),
        10 => 
        array (
          'name' => 'DestDatabase',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-db',
          ),
        ),
        11 => 
        array (
          'name' => 'DestSchema',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标命名空间。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-schema',
          ),
        ),
        12 => 
        array (
          'name' => 'DestTable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dest-table',
          ),
        ),
        13 => 
        array (
          'name' => 'WriteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '写入模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'MERGE' => 'MERGE',
              'INSERT' => 'INSERT',
              'UPDATE' => 'UPDATE',
            ),
            'example' => 'INSERT/UPDATE/MERGE',
            'enum' => 
            array (
              0 => 'insert',
              1 => 'update',
              2 => 'merge',
            ),
          ),
        ),
        14 => 
        array (
          'name' => 'TryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否测试实时任务，取值：

- true

- false

默认值：false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'JobConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务配置文件，专业模式必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'DATABASE: adbpgss_test
USER: adbpgss_test
PASSWORD: adbpgssTest
HOST: gp-xxx-master.gpdb.rds-aliyun-pre.rds.aliyuncs.com
PORT: 5432
KAFKA:
  INPUT:
    SOURCE:
      BROKERS: broker1:9092,broker2:9092,broker3:9092
      TOPIC: testtopic
      FALLBACK_OFFSET: earliest
    KEY:
      COLUMNS:
      - NAME: customer_id
        TYPE: int
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    VALUE:
      COLUMNS:
      - TYPE: integer
        NAME: l_orderkey
      - TYPE: integer
        NAME: l_partkey
      - TYPE: integer
        NAME: l_suppkey
      - TYPE: integer
        NAME: l_linenumber
      - TYPE: decimal
        NAME: l_quantity
      - TYPE: decimal
        NAME: l_extendedprice
      - TYPE: decimal
        NAME: l_discount
      - TYPE: decimal
        NAME: l_tax
      - TYPE: char
        NAME: l_returnflag
      - TYPE: char
        NAME: l_linestatus
      - TYPE: date
        NAME: l_shipdate
      - TYPE: date
        NAME: l_commitdate
      - TYPE: date
        NAME: l_receiptdate
      - TYPE: text
        NAME: l_shipinstruct
      - TYPE: text
        NAME: l_shipmode
      - TYPE: text
        NAME: l_comment
      FORMAT: delimited
      DELIMITED_OPTION:
        DELIMITER: \'|\'
    ERROR_LIMIT: 10
  OUTPUT:
    SCHEMA: adbpgss_test
    TABLE: write_with_insert_plaintext
    MODE: MERGE
    MATCH_COLUMNS:
    - l_orderkey
    - l_partkey
    - l_suppkey
    UPDATE_COLUMNS:
    - l_linenumber
    - l_quantity
    - l_extendedprice
    - l_discount
    - l_tax
    - l_returnflag
    - l_linestatus
    - l_shipdate
    - l_commitdate
    - l_receiptdate
    - l_shipinstruct
    - l_shipmode
    - l_comment
    MAPPING:
    - EXPRESSION: l_orderkey
      NAME: l_orderkey
    - EXPRESSION: l_partkey
      NAME: l_partkey
    - EXPRESSION: l_suppkey
      NAME: l_suppkey
    - EXPRESSION: l_linenumber
      NAME: l_linenumber
    - EXPRESSION: l_quantity
      NAME: l_quantity
    - EXPRESSION: l_extendedprice
      NAME: l_extendedprice
    - EXPRESSION: l_discount
      NAME: l_discount
    - EXPRESSION: l_tax
      NAME: l_tax
    - EXPRESSION: l_returnflag
      NAME: l_returnflag
    - EXPRESSION: l_linestatus
      NAME: l_linestatus
    - EXPRESSION: l_shipdate
      NAME: l_shipdate
    - EXPRESSION: l_commitdate
      NAME: l_commitdate
    - EXPRESSION: l_receiptdate
      NAME: l_receiptdate
    - EXPRESSION: l_shipinstruct
      NAME: l_shipinstruct
    - EXPRESSION: l_shipmode
      NAME: l_shipmode
    - EXPRESSION: l_comment
      NAME: l_comment
  COMMIT:
    MAX_ROW: 1000
    MINIMAL_INTERVAL: 1000
    CONSISTENCY: ATLEAST
  POLL:
    BATCHSIZE: 1000
    TIMEOUT: 1000
  PROPERTIES:
    group.id: testgroup
',
          ),
        ),
        16 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'kafka分组名称',
            'type' => 'string',
            'required' => false,
            'example' => 'group_name。',
          ),
        ),
        17 => 
        array (
          'name' => 'FallbackOffset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'FallbackOffset 回退点位，回退偏移量

- FallbackOffset参数定义了当consumer没有请求需要消费的位点或者请求的消费的位点超出当前kafka集群的记录的位点信息的时候的行为。可以选择从earliest（最新）或者latest（最晚）位点开始消费。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'EARLIEST' => 'EARLIEST',
              'LATEST' => 'LATEST',
            ),
            'example' => 'EARLIEST /  LATEST',
            'enum' => 
            array (
              0 => 'earliest',
              1 => 'latest',
            ),
          ),
        ),
        18 => 
        array (
          'name' => 'MatchColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '匹配列，通常为目标表的所有主键列，此配置内所有列的值相同即视为两行数据为重复数据。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '匹配字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'column_1',
            ),
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'UpdateColumns',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新列，通常为目标表的所有非主键列，当通过MatchColumns确定数据重复时，通过更新UpdateColumns列的值，产生使新数据覆盖旧数据的效果。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更新字段键值。',
              'type' => 'string',
              'required' => false,
              'example' => 'column_1',
            ),
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'ErrorLimitCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'kafka中的数据与adbpg目标表不匹配造时会造成写入失败，此值为允许错误行的行数，超出后会造成任务失败。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        21 => 
        array (
          'name' => 'Consistency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递保证。',
            'type' => 'string',
            'required' => false,
            'example' => 'ATLEAST / EXACTLY',
            'enum' => 
            array (
              0 => 'ATLEAST',
              1 => 'EXACTLY',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int32',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"JobId\\": 1\\n}","type":"json"}]',
      'title' => '创建实时数据同步任务',
    ),
    'DeleteStreamingJob' => 
    array (
      'summary' => '删除实时数据同步任务',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '删除实时数据同步任务',
    ),
    'ListStreamingJobs' => 
    array (
      'summary' => '查询所有实时数据同步任务',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => 'kafka',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：1。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'JobItems' => 
              array (
                'description' => '返回的任务列表。',
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
                      'example' => '1',
                    ),
                    'JobName' => 
                    array (
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => 'test-job',
                    ),
                    'DataSourceId' => 
                    array (
                      'description' => '数据源ID。',
                      'type' => 'string',
                      'example' => '58',
                    ),
                    'JobDescription' => 
                    array (
                      'description' => '任务描述。',
                      'type' => 'string',
                      'example' => 'test job',
                    ),
                    'SrcColumns' => 
                    array (
                      'description' => '源端数据字段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '源端数据字段键值。',
                        'type' => 'string',
                        'example' => 'src_column_1',
                      ),
                    ),
                    'DestColumns' => 
                    array (
                      'description' => '目标数据表映射字段列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '目标表里面的映射字段键值。',
                        'type' => 'string',
                        'example' => 'dest_column_1',
                      ),
                    ),
                    'MatchColumns' => 
                    array (
                      'description' => '匹配列，通常为目标表的所有主键列，此配置内所有列的值相同即视为两行数据为重复数据。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '匹配字段键值。',
                        'type' => 'string',
                        'example' => 'column_1',
                      ),
                    ),
                    'UpdateColumns' => 
                    array (
                      'description' => '更新列，通常为目标表的所有非主键列，当通过MatchColumns确定数据重复时，通过更新UpdateColumns列的值，产生使新数据覆盖旧数据的效果。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '更新字段键值。',
                        'type' => 'string',
                        'example' => 'column_1',
                      ),
                    ),
                    'Account' => 
                    array (
                      'description' => '账号名称。',
                      'type' => 'string',
                      'example' => 'test-account',
                    ),
                    'Password' => 
                    array (
                      'description' => '密码。',
                      'type' => 'string',
                      'example' => 'pwd123',
                    ),
                    'DestDatabase' => 
                    array (
                      'description' => '目标数据库名称。',
                      'type' => 'string',
                      'example' => 'dest-db',
                    ),
                    'DestSchema' => 
                    array (
                      'description' => '目标命名空间。',
                      'type' => 'string',
                      'example' => 'dest-schema',
                    ),
                    'DestTable' => 
                    array (
                      'description' => '目标表名称。',
                      'type' => 'string',
                      'example' => 'dest-table',
                    ),
                    'WriteMode' => 
                    array (
                      'description' => '写入模式。',
                      'type' => 'string',
                      'example' => 'INSERT/UPDATE/MERGE',
                    ),
                    'Mode' => 
                    array (
                      'description' => '配置模式
1. basic模式需要指定一些配置字段
1. professional支持提交yaml文件',
                      'type' => 'string',
                      'example' => 'basic / professional',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误信息。

只会在**Status**参数返回值为**false**时返回该参数。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'Status' => 
                    array (
                      'description' => '服务状态，取值：

- Init：初始化中

- Running：运行中

- Exception：异常

- Paused：暂停',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T16:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T17:00:00Z',
                    ),
                    'FallbackOffset' => 
                    array (
                      'description' => 'FallbackOffset 回退点位，回退偏移量

- FallbackOffset参数定义了当consumer没有请求需要消费的位点或者请求的消费的位点超出当前kafka集群的记录的位点信息的时候的行为。可以选择从earliest（最新）或者latest（最晚）位点开始消费。',
                      'type' => 'string',
                      'example' => 'EARLIEST /  LATEST',
                    ),
                    'Consistency' => 
                    array (
                      'description' => '投递保证。',
                      'type' => 'string',
                      'example' => 'ATLEAST / EXACTLY',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '数据源名称。',
                      'type' => 'string',
                      'example' => 'test-kafka',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 2,\\n  \\"TotalRecordCount\\": 2,\\n  \\"JobItems\\": [\\n    {\\n      \\"JobId\\": \\"1\\",\\n      \\"JobName\\": \\"test-job\\",\\n      \\"DataSourceId\\": \\"58\\",\\n      \\"JobDescription\\": \\"test job\\",\\n      \\"SrcColumns\\": [\\n        \\"src_column_1\\"\\n      ],\\n      \\"DestColumns\\": [\\n        \\"dest_column_1\\"\\n      ],\\n      \\"MatchColumns\\": [\\n        \\"column_1\\"\\n      ],\\n      \\"UpdateColumns\\": [\\n        \\"column_1\\"\\n      ],\\n      \\"Account\\": \\"test-account\\",\\n      \\"Password\\": \\"pwd123\\",\\n      \\"DestDatabase\\": \\"dest-db\\",\\n      \\"DestSchema\\": \\"dest-schema\\",\\n      \\"DestTable\\": \\"dest-table\\",\\n      \\"WriteMode\\": \\"INSERT/UPDATE/MERGE\\",\\n      \\"Mode\\": \\"basic / professional\\",\\n      \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n      \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\",\\n      \\"FallbackOffset\\": \\"EARLIEST /  LATEST\\",\\n      \\"Consistency\\": \\"ATLEAST / EXACTLY\\",\\n      \\"DataSourceName\\": \\"test-kafka\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询所有实时数据同步任务',
    ),
    'UpgradeExtensions' => 
    array (
      'summary' => '插件升级',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '214907',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbQ0N7UN',
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
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

>您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Extensions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要升级的插件，多个插件间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'citext,dblink',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '插件升级',
    ),
    'ListInstanceExtensions' => 
    array (
      'summary' => '获取插件列表',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '214901',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbQ0N7UN',
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
            'description' => '实例所在Region ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
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
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'Extension',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '插件名称',
            'type' => 'string',
            'required' => false,
            'example' => 'citext',
          ),
        ),
        5 => 
        array (
          'name' => 'InstallStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '插件安装状态，取值说明：

- installed：已安装
- installing：安装中
- uninstalled：未安装',
            'type' => 'string',
            'required' => false,
            'example' => 'installed',
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
                'example' => '7565770E-7C45-462D-BA4A-8A5396F2CAD1',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Items' => 
              array (
                'description' => '插件项目',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '插件项目',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExtensionId' => 
                    array (
                      'description' => '插件id',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'description' => '插件名称',
                      'type' => 'string',
                      'example' => 'citext',
                    ),
                    'InstalledDatabases' => 
                    array (
                      'description' => '已安装数据库',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CurrentVersion' => 
                    array (
                      'description' => '当前版本',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'LatestVersion' => 
                    array (
                      'description' => '最新版本',
                      'type' => 'string',
                      'example' => '1.1',
                    ),
                    'Status' => 
                    array (
                      'description' => '插件状态',
                      'type' => 'string',
                      'example' => 'installed',
                    ),
                    'Description' => 
                    array (
                      'description' => '插件描述',
                      'type' => 'string',
                      'example' => 'citext usage',
                    ),
                    'IsInstallNeedRestart' => 
                    array (
                      'description' => '插件安装是否需要重启实例',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7565770E-7C45-462D-BA4A-8A5396F2CAD1\\",\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 20,\\n  \\"Items\\": [\\n    {\\n      \\"ExtensionId\\": \\"1\\",\\n      \\"Name\\": \\"citext\\",\\n      \\"InstalledDatabases\\": \\"test\\",\\n      \\"CurrentVersion\\": \\"1.0\\",\\n      \\"LatestVersion\\": \\"1.1\\",\\n      \\"Status\\": \\"installed\\",\\n      \\"Description\\": \\"citext usage\\",\\n      \\"IsInstallNeedRestart\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取插件列表',
    ),
    'CreateExtensions' => 
    array (
      'summary' => '安装插件',
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
        'chargeType' => 'free',
        'abilityTreeCode' => '214905',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbQ0N7UN',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Extensions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要安装的插件，多个插件间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'citext, dblink',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例数据库名。',
            'type' => 'string',
            'required' => true,
            'example' => 'demo1',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Extensions' => 
              array (
                'description' => '需要安装的插件，多个插件间使用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => 'citext, dblink',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Extensions\\": \\"citext, dblink\\"\\n}","type":"json"}]',
      'title' => '安装插件',
    ),
    'DeleteExtension' => 
    array (
      'summary' => '卸载插件',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '214908',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbQ0N7UN',
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
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Extension',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '插件名称',
            'type' => 'string',
            'required' => true,
            'example' => 'citext',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例数据库名。',
            'type' => 'string',
            'required' => true,
            'example' => 'demo1',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '卸载插件',
    ),
    'DescribeExternalDataService' => 
    array (
      'summary' => '获取外部数据服务详情',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxx',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'test-pxf',
              ),
              'ServiceDescription' => 
              array (
                'description' => '服务描述。',
                'type' => 'string',
                'example' => 'pxf test',
              ),
              'ServiceSpec' => 
              array (
                'description' => '服务规格（单位CU）。',
                'type' => 'string',
                'example' => '8',
              ),
              'Status' => 
              array (
                'description' => '服务状态，取值：

- Init：初始化中

- Running：运行中

- Exception：异常

- Paused：暂停',
                'type' => 'string',
                'example' => 'Running',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'ModifyTime' => 
              array (
                'description' => '最后修改时间。',
                'type' => 'string',
                'example' => '2019-09-08T17:00:00Z',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ServiceId\\": \\"1\\",\\n  \\"ServiceName\\": \\"test-pxf\\",\\n  \\"ServiceDescription\\": \\"pxf test\\",\\n  \\"ServiceSpec\\": \\"8\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\"\\n}","type":"json"}]',
      'title' => '获取外部数据服务详情',
    ),
    'DeleteExternalDataService' => 
    array (
      'summary' => '删除外部数据服务。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxx',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '删除外部数据服务',
    ),
    'ListExternalDataServices' => 
    array (
      'summary' => '获取外部数据服务列表',
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
            'description' => '地域ID，您可通过接口[DescribeRegions](~~86912~~)查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：1。',
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
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ServiceItems' => 
              array (
                'description' => '列表项',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表项',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型，取值：

- pxf',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'pxf' => 'pxf',
                      ),
                      'example' => 'pxf',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'test-pxf',
                    ),
                    'ServiceDescription' => 
                    array (
                      'description' => '服务描述。',
                      'type' => 'string',
                      'example' => 'test-pxf',
                    ),
                    'ServiceSpec' => 
                    array (
                      'description' => '服务规格（单位CU）。',
                      'type' => 'string',
                      'example' => '8',
                    ),
                    'Status' => 
                    array (
                      'description' => '服务状态，取值：

- Init：初始化中

- Running：运行中

- Exception：异常

- Paused：暂停',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T16:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T17:00:00Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalRecordCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"ServiceItems\\": [\\n    {\\n      \\"ServiceId\\": \\"1\\",\\n      \\"ServiceType\\": \\"pxf\\",\\n      \\"ServiceName\\": \\"test-pxf\\",\\n      \\"ServiceDescription\\": \\"test-pxf\\",\\n      \\"ServiceSpec\\": \\"8\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n      \\"ModifyTime\\": \\"2019-09-08T17:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取外部数据服务列表',
    ),
    'CreateExternalDataService' => 
    array (
      'summary' => '创建外部数据服务。',
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
            'description' => '地域ID，您可以通过[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-adbpgss',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务规格（单位CU），取值：

- 8',
            'type' => 'string',
            'required' => true,
            'example' => '8',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'pxf test',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ServiceId\\": 100\\n}","type":"json"}]',
      'title' => '创建外部数据服务',
    ),
    'ModifyExternalDataService' => 
    array (
      'summary' => '修改外部数据服务。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp10g78o9807yv9h3',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务规格（单位CU），取值：

- 8',
            'type' => 'string',
            'required' => true,
            'example' => '8',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'pxf test',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '修改外部数据服务',
    ),
    'DescribeHadoopClustersInSameNet' => 
    array (
      'summary' => '获取同vpc的EMR集群实例',
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
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'Clusters' => 
              array (
                'description' => 'emr实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'emr实例列表。',
                  'type' => 'string',
                  'example' => 'c-xxx,c-yyy',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"Clusters\\": [\\n    \\"c-xxx,c-yyy\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取同vpc的EMR集群实例',
    ),
    'ListExternalDataSources' => 
    array (
      'summary' => '获取数据源列表',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
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
                'example' => 'BBE00C04-A3E8-4114-881D-0480A72CB92E',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => 'Hadoop外部表服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataSourceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '123',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'hdfs_pxf',
                    ),
                    'DataSourceType' => 
                    array (
                      'description' => '数据源类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'hive' => 'hive',
                        'postgresql' => 'postgresql',
                        'hdfs' => 'hdfs',
                        'mysql' => 'mysql',
                        'sqlServer' => 'sqlServer',
                      ),
                      'example' => 'hdfs',
                    ),
                    'DataSourceDescription' => 
                    array (
                      'description' => '数据源描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-08T16:00:00Z',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '最后修改时间。',
                      'type' => 'string',
                      'example' => '2019-10-08T16:00:00Z',
                    ),
                    'DataSourceStatus' => 
                    array (
                      'description' => '服务状态位，取值：

- 初始化中 Init

- 运行中 Running

- 异常 Exception',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'StatusMessage' => 
                    array (
                      'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'DataSourceDir' => 
                    array (
                      'description' => '服务目录，在该目录下保留有Hadoop相关的配置文件。',
                      'type' => 'string',
                      'example' => 'HadoopDir',
                    ),
                    'ExternalDataServiceId' => 
                    array (
                      'description' => '外部数据服务id',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '123',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BBE00C04-A3E8-4114-881D-0480A72CB92E\\",\\n  \\"TotalRecordCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"DataSourceId\\": 123,\\n      \\"DataSourceName\\": \\"hdfs_pxf\\",\\n      \\"DataSourceType\\": \\"hdfs\\",\\n      \\"DataSourceDescription\\": \\"test\\",\\n      \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n      \\"ModifyTime\\": \\"2019-10-08T16:00:00Z\\",\\n      \\"DataSourceStatus\\": \\"Running\\",\\n      \\"StatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"DataSourceDir\\": \\"HadoopDir\\",\\n      \\"ExternalDataServiceId\\": 123\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据源列表',
    ),
    'DescribeHadoopConfigs' => 
    array (
      'summary' => '获取Hadoop集群配置信息',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'EmrInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EMR实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c-xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ConfigName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置文件名称：

- hdfs-site：hdfs-site.xml文件

- core-site：core-site.xml文件

- yarn-site：yarn-site.xml文件

- mapred-site：mapred-site.xml文件

- hive-site：hive-site.xml文件',
            'type' => 'string',
            'required' => true,
            'example' => 'hdfs-site',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ConfigName' => 
              array (
                'description' => '配置文件名称：

- hdfs-site

- core-site

- yarn-site

- mapred-site

- hive-site',
                'type' => 'string',
                'example' => 'hdfs-site',
              ),
              'ConfigValue' => 
              array (
                'description' => '配置值',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<configuration>
    <property>
        <name>hive.exec.reducers.bytes.per.reducer</name>
        <value>256000000</value>
    </property>
    <property>
        <name>hive.stats.column.autogather</name>
        <value>false</value>
    </property>
</configuration>',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ConfigName\\": \\"hdfs-site\\",\\n  \\"ConfigValue\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<configuration>\\\\n    <property>\\\\n        <name>hive.exec.reducers.bytes.per.reducer</name>\\\\n        <value>256000000</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>hive.stats.column.autogather</name>\\\\n        <value>false</value>\\\\n    </property>\\\\n</configuration>\\"\\n}","type":"json"}]',
      'title' => '获取Hadoop集群配置信息',
    ),
    'CreateHadoopDataSource' => 
    array (
      'summary' => '创建hadoop数据源配置。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'hdfs_pxf',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'pxf for hdfs data source',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开通Hadoop外部表类型，取值

- HDFS 

- Hive',
            'type' => 'string',
            'required' => false,
            'example' => 'HDFS',
          ),
        ),
        4 => 
        array (
          'name' => 'HadoopCreateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部服务类型：

- emr

- hadoop: 自建hadoop',
            'type' => 'string',
            'required' => false,
            'example' => 'emr',
          ),
        ),
        5 => 
        array (
          'name' => 'HadoopHostsAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop集群源节点在/etc/hosts文件中的地址和hostname。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.220.128 master-1-1.c-xxx.cn-shanghai.emr.aliyuncs.com
192.168.220.129 core-1-1.c-xxx.cn-shanghai.emr.aliyuncs.com
192.168.220.130 core-1-2.c-xxx.cn-shanghai.emr.aliyuncs.com',
          ),
        ),
        6 => 
        array (
          'name' => 'HadoopCoreConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop core-site.xml文件内容字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:39.527 -->
<configuration>
    <property>
        <name>hadoop.http.authentication.kerberos.keytab</name>
        <value>/etc/emr/hadoop-conf/http.keytab</value>
    </property>
    <property>
        <name>fs.oss.idle.timeout.millisecond</name>
        <value>30000</value>
    </property>
    <property>
        <name>fs.oss.download.thread.concurrency</name>
        <value>32</value>
    </property>
</configuration>',
          ),
        ),
        7 => 
        array (
          'name' => 'HDFSConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop hdfs-site.xml文件内容字符串。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:43.945 -->
<configuration>
    <property>
        <name>dfs.datanode.cache.revocation.timeout.ms</name>
        <value>900000</value>
    </property>
    <property>
        <name>dfs.namenode.resource.check.interval</name>
        <value>5000</value>
    </property>
</configuration>',
          ),
        ),
        8 => 
        array (
          'name' => 'HiveConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop hive-site.xml文件内容字符串。在选择开通HIVE外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:50.646 -->
<configuration>
    <property>
        <name>hive.exec.reducers.bytes.per.reducer</name>
        <value>256000000</value>
    </property>
    <property>
        <name>hive.stats.column.autogather</name>
        <value>false</value>
    </property>
</configuration>',
          ),
        ),
        9 => 
        array (
          'name' => 'YarnConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop yarn-site.xml文件内容字符串。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:53:29.021 -->
<configuration>
    <property>
        <name>yarn.nodemanager.linux-container-executor.nonsecure-mode.local-user</name>
        <value>hadoop</value>
    </property>
    <property>
        <name>yarn.scheduler.fair.dynamic.max.assign</name>
        <value>true</value>
    </property>
</configuration>
',
          ),
        ),
        10 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        11 => 
        array (
          'name' => 'MapReduceConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop mapred-site.xml文件内容字符串。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxx',
          ),
        ),
        12 => 
        array (
          'name' => 'EmrInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HadoopCreateType=Emr时，此字段值为emr实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'c-1234567',
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
                'example' => '2C125605-266F-41CA-8AC5-3A643D4F42C5',
              ),
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C125605-266F-41CA-8AC5-3A643D4F42C5\\",\\n  \\"DataSourceId\\": 123\\n}","type":"json"}]',
      'title' => '创建hadoop外部数据源',
    ),
    'DescribeHadoopDataSource' => 
    array (
      'summary' => '获取hadoop数据源配置信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'DataSourceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'hdfs_pxf',
              ),
              'DataSourceDescription' => 
              array (
                'description' => '服务描述，最大长度为256字符。',
                'type' => 'string',
                'example' => 'pxf for hdfs data source',
              ),
              'DataSourceStatus' => 
              array (
                'description' => '服务状态位，取值：

- 初始化中 Init

- 运行中 Running

- 异常 Exception',
                'type' => 'string',
                'example' => 'Running',
              ),
              'DataSourceDir' => 
              array (
                'description' => '服务目录，在该目录下保留有Hadoop相关的配置文件。',
                'type' => 'string',
                'example' => 'HadoopDir',
              ),
              'StatusMessage' => 
              array (
                'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'DataSourceType' => 
              array (
                'description' => '数据源类型',
                'type' => 'string',
                'example' => 'hive',
              ),
              'HadoopCreateType' => 
              array (
                'description' => '外部服务创建类型：

- emr

- selfCreate',
                'type' => 'string',
                'example' => 'emr',
              ),
              'HadoopHostsAddress' => 
              array (
                'description' => 'Hadoop集群源节点在/etc/hosts文件中的地址和hostname。',
                'type' => 'string',
                'example' => '127.0.0.1 localhost',
              ),
              'HadoopCoreConf' => 
              array (
                'description' => 'Hadoop core-site.xml文件内容。',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:39.527 -->
<configuration>
    <property>
        <name>hadoop.http.authentication.kerberos.keytab</name>
        <value>/etc/emr/hadoop-conf/http.keytab</value>
    </property>
    <property>
        <name>fs.oss.idle.timeout.millisecond</name>
        <value>30000</value>
    </property>
    <property>
        <name>fs.oss.download.thread.concurrency</name>
        <value>32</value>
    </property>
</configuration>',
              ),
              'HDFSConf' => 
              array (
                'description' => 'Hadoop hdfs-site.xml文件内容。',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:43.945 -->
<configuration>
    <property>
        <name>dfs.datanode.cache.revocation.timeout.ms</name>
        <value>900000</value>
    </property>
    <property>
        <name>dfs.namenode.resource.check.interval</name>
        <value>5000</value>
    </property>
</configuration>',
              ),
              'HiveConf' => 
              array (
                'description' => 'Hadoop hive-site.xml文件内容。',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:50.646 -->
<configuration>
    <property>
        <name>hive.exec.reducers.bytes.per.reducer</name>
        <value>256000000</value>
    </property>
    <property>
        <name>hive.stats.column.autogather</name>
        <value>false</value>
    </property>
</configuration>',
              ),
              'YarnConf' => 
              array (
                'description' => 'Hadoop yarn-site.xml文件内容。',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:53:29.021 -->
<configuration>
    <property>
        <name>yarn.nodemanager.linux-container-executor.nonsecure-mode.local-user</name>
        <value>hadoop</value>
    </property>
    <property>
        <name>yarn.scheduler.fair.dynamic.max.assign</name>
        <value>true</value>
    </property>
</configuration>',
              ),
              'MapReduceConf' => 
              array (
                'description' => 'hadoop mapred-site.xml文件内容。',
                'type' => 'string',
                'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:53:28.962 -->
<configuration>
    <property>
        <name>mapreduce.map.speculative</name>
        <value>true</value>
    </property>
    <property>
        <name>mapreduce.jobhistory.keytab</name>
        <value></value>
    </property>
</configuration>',
              ),
              'EmrInstanceId' => 
              array (
                'description' => 'emr实例id。',
                'type' => 'string',
                'example' => 'c-1234567',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DataSourceId\\": \\"123\\",\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"DataSourceName\\": \\"hdfs_pxf\\",\\n  \\"DataSourceDescription\\": \\"pxf for hdfs data source\\",\\n  \\"DataSourceStatus\\": \\"Running\\",\\n  \\"DataSourceDir\\": \\"HadoopDir\\",\\n  \\"StatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"DataSourceType\\": \\"hive\\",\\n  \\"HadoopCreateType\\": \\"emr\\",\\n  \\"HadoopHostsAddress\\": \\"127.0.0.1 localhost\\",\\n  \\"HadoopCoreConf\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<!-- Created at 2023-08-15 13:52:39.527 -->\\\\n<configuration>\\\\n    <property>\\\\n        <name>hadoop.http.authentication.kerberos.keytab</name>\\\\n        <value>/etc/emr/hadoop-conf/http.keytab</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>fs.oss.idle.timeout.millisecond</name>\\\\n        <value>30000</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>fs.oss.download.thread.concurrency</name>\\\\n        <value>32</value>\\\\n    </property>\\\\n</configuration>\\",\\n  \\"HDFSConf\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<!-- Created at 2023-08-15 13:52:43.945 -->\\\\n<configuration>\\\\n    <property>\\\\n        <name>dfs.datanode.cache.revocation.timeout.ms</name>\\\\n        <value>900000</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>dfs.namenode.resource.check.interval</name>\\\\n        <value>5000</value>\\\\n    </property>\\\\n</configuration>\\",\\n  \\"HiveConf\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<!-- Created at 2023-08-15 13:52:50.646 -->\\\\n<configuration>\\\\n    <property>\\\\n        <name>hive.exec.reducers.bytes.per.reducer</name>\\\\n        <value>256000000</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>hive.stats.column.autogather</name>\\\\n        <value>false</value>\\\\n    </property>\\\\n</configuration>\\",\\n  \\"YarnConf\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<!-- Created at 2023-08-15 13:53:29.021 -->\\\\n<configuration>\\\\n    <property>\\\\n        <name>yarn.nodemanager.linux-container-executor.nonsecure-mode.local-user</name>\\\\n        <value>hadoop</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>yarn.scheduler.fair.dynamic.max.assign</name>\\\\n        <value>true</value>\\\\n    </property>\\\\n</configuration>\\",\\n  \\"MapReduceConf\\": \\"<?xml version=\\\\\\"1.0\\\\\\" ?>\\\\n<!-- Created at 2023-08-15 13:53:28.962 -->\\\\n<configuration>\\\\n    <property>\\\\n        <name>mapreduce.map.speculative</name>\\\\n        <value>true</value>\\\\n    </property>\\\\n    <property>\\\\n        <name>mapreduce.jobhistory.keytab</name>\\\\n        <value></value>\\\\n    </property>\\\\n</configuration>\\",\\n  \\"EmrInstanceId\\": \\"c-1234567\\"\\n}","type":"json"}]',
      'title' => '获取hadoop数据源详情',
    ),
    'ModifyHadoopDataSource' => 
    array (
      'summary' => '修改hadoop数据源配置',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务描述，长度最长为256字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'pxf for hdfs data source',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源类型，取值：

- mysql/postgresql

- hdfs/hive',
            'type' => 'string',
            'required' => false,
            'example' => 'mysql',
          ),
        ),
        5 => 
        array (
          'name' => 'HadoopCreateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部服务创建类型：

- emr：emr实例

- selfCreate：自建',
            'type' => 'string',
            'required' => false,
            'example' => 'emr',
          ),
        ),
        6 => 
        array (
          'name' => 'HadoopHostsAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop集群源节点在/etc/hosts文件中的地址和hostname。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.220.128 master-1-1.c-0edfee2cccaecc75.cn-shanghai.emr.aliyuncs.com
192.168.220.129 core-1-1.c-0edfee2cccaecc75.cn-shanghai.emr.aliyuncs.com
192.168.220.130 core-1-2.c-0edfee2cccaecc75.cn-shanghai.emr.aliyuncs.com',
          ),
        ),
        7 => 
        array (
          'name' => 'HadoopCoreConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop core-site.xml文件内容',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:39.527 -->
<configuration>
    <property>
        <name>hadoop.http.authentication.kerberos.keytab</name>
        <value>/etc/emr/hadoop-conf/http.keytab</value>
    </property>
    <property>
        <name>fs.oss.idle.timeout.millisecond</name>
        <value>30000</value>
    </property>
    <property>
        <name>fs.oss.download.thread.concurrency</name>
        <value>32</value>
    </property>
</configuration>
',
          ),
        ),
        8 => 
        array (
          'name' => 'HDFSConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop hdfs-site.xml文件内容。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:43.945 -->
<configuration>
    <property>
        <name>dfs.datanode.cache.revocation.timeout.ms</name>
        <value>900000</value>
    </property>
    <property>
        <name>dfs.namenode.resource.check.interval</name>
        <value>5000</value>
    </property>
</configuration>',
          ),
        ),
        9 => 
        array (
          'name' => 'HiveConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop hive-site.xml文件内容。在选择开通HIVE外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:52:50.646 -->
<configuration>
    <property>
        <name>hive.exec.reducers.bytes.per.reducer</name>
        <value>256000000</value>
    </property>
    <property>
        <name>hive.stats.column.autogather</name>
        <value>false</value>
    </property>
</configuration>',
          ),
        ),
        10 => 
        array (
          'name' => 'YarnConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop yarn-site.xml文件内容。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:53:29.021 -->
<configuration>
    <property>
        <name>yarn.nodemanager.linux-container-executor.nonsecure-mode.local-user</name>
        <value>hadoop</value>
    </property>
    <property>
        <name>yarn.scheduler.fair.dynamic.max.assign</name>
        <value>true</value>
    </property>
</configuration>',
          ),
        ),
        11 => 
        array (
          'name' => 'MapReduceConf',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Hadoop mapred-site.xml文件内容。在选择开通HDFS外表时，该字段必填。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" ?>
<!-- Created at 2023-08-15 13:53:28.962 -->
<configuration>
    <property>
        <name>mapreduce.map.speculative</name>
        <value>true</value>
    </property>
    <property>
        <name>mapreduce.jobhistory.keytab</name>
        <value></value>
    </property>
</configuration>',
          ),
        ),
        12 => 
        array (
          'name' => 'EmrInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HadoopCreateType=Emr时，此字段值为emr实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'c-1234567',
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
                'example' => '2C125605-266F-41CA-8AC5-3A643D4F42C5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C125605-266F-41CA-8AC5-3A643D4F42C5\\"\\n}","type":"json"}]',
      'title' => '修改hadoop数据源配置',
    ),
    'CheckHadoopDataSource' => 
    array (
      'summary' => '检查hadoop数据源配置。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源id',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'CheckDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待校验的hadoop路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'tmp',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'Status' => 
              array (
                'description' => '服务状态：

- 可用：Running

- 不可用：Failed',
                'type' => 'string',
                'example' => 'Running',
              ),
              'Message' => 
              array (
                'description' => '服务返回信息：服务不可用时返回报错信息，可用时返回为""。',
                'type' => 'string',
                'example' => 'serivce unavaliable',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"Message\\": \\"serivce unavaliable\\"\\n}","type":"json"}]',
      'title' => '检查hadoop数据源配置',
    ),
    'DeleteHadoopDataSource' => 
    array (
      'summary' => '删除hadoop外部数据源',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源id',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '删除hadoop外部数据源',
    ),
    'CheckHadoopNetConnection' => 
    array (
      'summary' => '检测hadoop外部数据源网络联通性',
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
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'EmrInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'emr实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'c-xxx',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ConnectionStatus' => 
              array (
                'description' => '连接状态：

- 网络联通：Success

- 网络不通：Failed',
                'type' => 'string',
                'example' => 'Success',
              ),
              'ConnectionMessage' => 
              array (
                'description' => '返回信息：连接不通时返回报错信息，否则返回为""。',
                'type' => 'string',
                'example' => 'connection timeout',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ConnectionStatus\\": \\"Success\\",\\n  \\"ConnectionMessage\\": \\"connection timeout\\"\\n}","type":"json"}]',
      'title' => '检测hadoop外部数据源网络联通性',
    ),
    'CreateJDBCDataSource' => 
    array (
      'summary' => '创建JDBC数据源',
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
            'description' => '实例所在 Region ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'jdbc_pxf',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型：

- mysql

- postgresql

- sqlserver',
            'type' => 'string',
            'required' => false,
            'example' => 'mysql',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'JDBCConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JDBC连接串。',
            'type' => 'string',
            'required' => false,
            'example' => 'jdbc:mysql://rm-xxx.mysql.rds.aliyuncs.com:3306/testadmin',
          ),
        ),
        6 => 
        array (
          'name' => 'JDBCUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuser',
          ),
        ),
        7 => 
        array (
          'name' => 'JDBCPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'testpasswd',
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
                'example' => '2C125605-266F-41CA-8AC5-3A643D4F42C5',
              ),
              'DataSourceId' => 
              array (
                'description' => '数据源ID。',
                'type' => 'string',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C125605-266F-41CA-8AC5-3A643D4F42C5\\",\\n  \\"DataSourceId\\": \\"123\\"\\n}","type":"json"}]',
      'title' => '创建JDBC数据源',
    ),
    'ModifyJDBCDataSource' => 
    array (
      'summary' => '修改JDBC数据源配置',
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
            'description' => '实例所在地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型：

- mysql

- postgresql

- sqlserver',
            'type' => 'string',
            'required' => false,
            'example' => 'mysql',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'JDBCConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JDBC连接串。',
            'type' => 'string',
            'required' => false,
            'example' => 'jdbc:mysql://rm-xxx.mysql.rds.aliyuncs.com:3306/testadmin',
          ),
        ),
        5 => 
        array (
          'name' => 'JDBCUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuser',
          ),
        ),
        6 => 
        array (
          'name' => 'JDBCPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'testpasswd',
          ),
        ),
        7 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2C125605-266F-41CA-8AC5-3A643D4F42C5',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2C125605-266F-41CA-8AC5-3A643D4F42C5\\"\\n}","type":"json"}]',
      'title' => '修改JDBC数据源配置',
    ),
    'CheckJDBCSourceNetConnection' => 
    array (
      'summary' => '检查jdbc连接串网络连通性。',
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
            'description' => '实例所在的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'JdbcConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'jdbc连接串。',
            'type' => 'string',
            'required' => true,
            'example' => 'jdbc:mysql://rm-xxx.mysql.rds.aliyuncs.com:3306/testadmin',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'ConnectionStatus' => 
              array (
                'description' => '服务状态：

- 网络联通：Success

- 网络不通：Failed',
                'type' => 'string',
                'example' => 'Success',
              ),
              'ConnectionMessage' => 
              array (
                'description' => '返回信息：连接不通时返回报错信息，否则返回为""。',
                'type' => 'string',
                'example' => 'connection timeout',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"ConnectionStatus\\": \\"Success\\",\\n  \\"ConnectionMessage\\": \\"connection timeout\\"\\n}","type":"json"}]',
      'title' => '检查JDBC连接串网络连通性',
    ),
    'DescribeJDBCDataSource' => 
    array (
      'summary' => '获取jdbc数据源配置信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源id',
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
            'type' => 'object',
            'properties' => 
            array (
              'DataSourceId' => 
              array (
                'description' => '服务Id。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'DataSourceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'hdfs_pxf',
              ),
              'DataSourceDescription' => 
              array (
                'description' => '服务描述，最大长度为256字符。',
                'type' => 'string',
                'example' => 'mysql data source config',
              ),
              'DataSourceStatus' => 
              array (
                'description' => '服务状态位，取值：

- 初始化中 Init

- 运行中 Running

- 异常 Exception',
                'type' => 'string',
                'example' => 'Running',
              ),
              'StatusMessage' => 
              array (
                'description' => '服务状态信息，例如异常情况，则显示异常原因。正常Running状态下空值。',
                'type' => 'string',
                'example' => '""',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2019-09-08T16:00:00Z',
              ),
              'DataSourceType' => 
              array (
                'description' => '数据源类型。',
                'type' => 'string',
                'example' => 'mysql',
              ),
              'JDBCConnectionString' => 
              array (
                'description' => 'JDBC连接串。',
                'type' => 'string',
                'example' => 'jdbc:mysql://rm-xxx.mysql.rds.aliyuncs.com:3306/testadmin',
              ),
              'JDBCUserName' => 
              array (
                'description' => '用户名。',
                'type' => 'string',
                'example' => 'testuser',
              ),
              'JDBCPassword' => 
              array (
                'description' => '密码。',
                'type' => 'string',
                'example' => 'testpasswd',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DataSourceId\\": \\"123\\",\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"DataSourceName\\": \\"hdfs_pxf\\",\\n  \\"DataSourceDescription\\": \\"mysql data source config\\",\\n  \\"DataSourceStatus\\": \\"Running\\",\\n  \\"StatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"CreateTime\\": \\"2019-09-08T16:00:00Z\\",\\n  \\"DataSourceType\\": \\"mysql\\",\\n  \\"JDBCConnectionString\\": \\"jdbc:mysql://rm-xxx.mysql.rds.aliyuncs.com:3306/testadmin\\",\\n  \\"JDBCUserName\\": \\"testuser\\",\\n  \\"JDBCPassword\\": \\"testpasswd\\"\\n}","type":"json"}]',
      'title' => '获取JDBC数据源配置信息',
    ),
    'DeleteJDBCDataSource' => 
    array (
      'summary' => '删除jdbc数据源。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源id',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","type":"json"}]',
      'title' => '删除JDBC数据源配置',
    ),
    'CreateDBInstance' => 
    array (
      'summary' => '创建AnalyticDB PostgreSQL版实例。',
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
        'abilityTreeCode' => '8415',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbAXSDJ9',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎版本，取值如下：
- **6.0**：6.0版。
- **7.0**：7.0版。',
            'type' => 'string',
            'required' => true,
            'example' => '6.0',
          ),
        ),
        3 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，取值为**gpdb**。',
            'type' => 'string',
            'required' => true,
            'example' => 'gpdb',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，详细说明请参见DBInstanceClass参数补充说明。

> 创建存储预留模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'gpdb.group.segsdx1',
          ),
        ),
        5 => 
        array (
          'name' => 'DBInstanceGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算组数量。取值为：2、4、8、12、16、24、32、64、96、128。

> 创建存储预留模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单。

127.0.0.1表示禁止任何外部IP访问，您可以在实例创建完成后调用[ModifySecurityIps](~~86928~~)接口修改IP白名单。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
            'default' => '127.0.0.1',
          ),
        ),
        8 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计费类型，取值如下：

- **Postpaid**：按量付费
- **Prepaid**：包年包月

> - 如果不填，则会默认为按量付费。
> - 包年包月计费模式下，一次性购买一年及以上时长时会有一定优惠，建议您按需选择计费类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Prepaid',
            'default' => 'Postpaid',
          ),
        ),
        9 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买资源的时长单位。取值如下：
- **Month**：月
- **Year**：年

> 创建包年包月计费类型的实例时必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        10 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买资源的时长。取值如下：
- 当**Period**为**Month**时，取值为1~9。
- 当**Period**为**Year**时，取值为1~3。

> 创建包年包月计费类型的实例时必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等性校验。更多信息，请参见[如何保证幂等性](~~327176~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88**********',
          ),
        ),
        12 => 
        array (
          'name' => 'InstanceNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例网络类型，取值为**VPC**。

> - 公共云仅支持VPC网络。
> - 如果不填，则默认为VPC类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
          ),
        ),
        13 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。

> - **VPCId**必填。
> - **VPC**所在地域必须与**RegionId**保持一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp19ame5m1r3oejns****',
          ),
        ),
        14 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'vSwitch ID。

> - **vSwitchId**必填。
> - **vSwitch**所在可用区必须与**ZoneId**保持一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1cpq8mr64paltkb****',
          ),
        ),
        15 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        16 => 
        array (
          'name' => 'SegStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘存储类型，目前仅支持ESSD云盘，取值为：**cloud_essd**。

> 创建存储弹性模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd',
          ),
        ),
        17 => 
        array (
          'name' => 'SegDiskPerformanceLevel',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => 'ESSD云盘的性能级别，取值如下：

- **pl0**：PL0级别。
- **pl1**：PL1级别。
- **pl2**：PL2级别。

> - 仅磁盘存储类型为ESSD云盘时，该参数生效。
> - 如果不填，则默认为PL1级别。',
            'type' => 'string',
            'required' => false,
            'example' => 'pl1',
            'default' => 'pl1',
            'enum' => 
            array (
              0 => 'pl0',
              1 => 'pl1',
              2 => 'pl2',
            ),
          ),
        ),
        18 => 
        array (
          'name' => 'InstanceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算节点规格。

存储弹性模式高可用版取值如下：
- **2C16G**
- **4C32G**
- **16C128G**

存储弹性模式基础版取值如下：
- **2C8G**
- **4C16G**：
- **8C32G**：
- **16C64G**

Serverless模式取值如下：
- **4C16G**
- **8C32G**

> 创建存储弹性模式实例和Serverless模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2C16G',
          ),
        ),
        19 => 
        array (
          'name' => 'SegNodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算节点个数，取值说明：

- 存储弹性模式高可用版取值范围为4~512，取值需为4的倍数。
- 存储弹性模式基础版取值范围为2~512，取值需为2的倍数。
- Serverless模式取值范围为2~512，取值需为2的倍数。

> 创建存储弹性模式实例和Serverless模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        20 => 
        array (
          'name' => 'MasterNodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        21 => 
        array (
          'name' => 'DBInstanceMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例资源类型，取值说明：

- **StorageElastic**：存储弹性模式。
- **Serverless**：Serverless模式。
- **Classic**：存储预留模式。

> 该参数必填。',
            'type' => 'string',
            'required' => true,
            'example' => 'StorageElastic',
          ),
        ),
        22 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        23 => 
        array (
          'name' => 'DBInstanceCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例系列。取值说明：

- **HighAvailability**：高可用版。
- **Basic**：基础版。

> 创建存储弹性模式实例必须传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'HighAvailability',
          ),
        ),
        24 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        25 => 
        array (
          'name' => 'StorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储空间大小，单位GB，取值范围为<props="china">50~8000</props><props="intl">50~6000</props>
。

> 创建存储弹性模式实例必须传入该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        26 => 
        array (
          'name' => 'CreateSampleData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在实例创建完成后，加载样本数据集，取值如下：

- **true**：加载样本数据集。
- **false**：不加载样本数据集。

> 如果不填，则默认为不加载样本数据集。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        27 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '第N个标签。N的取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '第N个标签。N的取值范围：1~20。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。限制如下：

- 不允许为空字符串。
- 最多支持128个字符。
- 不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。限制如下：

- 可以为空字符串。
- 最多支持128个字符。
- 不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        28 => 
        array (
          'name' => 'ServerlessResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算资源阈值。取值范围8~32，步长为8，单位为ACU。默认值为32。

> 仅Serverless自动调度模式实例需传入该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '32',
          ),
        ),
        29 => 
        array (
          'name' => 'IdleTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空闲释放等待时长。即当无业务流量的时长达到指定时长后，实例转为空闲状态。单位为秒，最小值为60，默认值为600。

> 仅Serverless自动调度模式实例需传入该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
          ),
        ),
        30 => 
        array (
          'name' => 'ServerlessMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Serverless实例的模式，取值如下：

- **Manual**：手动调度，为默认值。
- **Auto**：自动调度。

> 仅Serverless模式实例需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Auto',
          ),
        ),
        31 => 
        array (
          'name' => 'EncryptionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型，取值说明：

- **NULL**：不启用加密（默认值）。
- **CloudDisk**：开通云盘加密，并通过**EncryptionKey**参数指定密钥。

> 当前云盘加密开启后无法关闭。',
            'type' => 'string',
            'required' => false,
            'example' => 'CloudDisk',
          ),
        ),
        32 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥ID。

> 如果参数**EncryptionType**的值为**CloudDisk**则需要通过该参数指定同地域内的加密密钥ID，否则为空。',
            'type' => 'string',
            'required' => false,
            'example' => '0d2470df-da7b-4786-b981-88888888****',
          ),
        ),
        33 => 
        array (
          'name' => 'VectorConfigurationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启向量引擎优化。取值说明：
- **enabled**：开启向量引擎优化。
- **disabled**（默认）：不开启向量引擎优化。

> - 对于主流分析场景、数仓场景、实时数仓等场景，建议**不开启**向量引擎优化。
> - 对于使用向量分析引擎用于AIGC、向量检索等场景用户，建议**开启**向量引擎优化。',
            'type' => 'string',
            'required' => false,
            'example' => 'enabled',
          ),
        ),
        34 => 
        array (
          'name' => 'MasterCU',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master资源，取值如下： 
- 2 CU 
- 4 CU 
- 8 CU 
- 16 CU 
- 32 CU 
> 8CU以上的master资源会产生费用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '8 CU',
          ),
        ),
        35 => 
        array (
          'name' => 'SrcDbInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '克隆源实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp***************',
          ),
        ),
        36 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。

> 您可以调用[DescribeDataBackups](~~210093~~)查看目标实例下所有备份集的备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1111111111',
          ),
        ),
        37 => 
        array (
          'name' => 'EnableSSL',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        38 => 
        array (
          'name' => 'ProdType',
          'in' => 'query',
          'allowEmptyValue' => true,
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
                'example' => '5414A4E5-4C36-4461-95FC-************',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'Port' => 
              array (
                'description' => '该参数已废弃，故不会返回参数值。

您可以通过[DescribeDBInstanceAttribute](~~86910~~)接口查看实例的端口号。',
                'type' => 'string',
                'example' => '3432',
              ),
              'ConnectionString' => 
              array (
                'description' => '该参数已废弃，故不会返回参数值。

您可以通过[DescribeDBInstanceAttribute](~~86910~~)接口查看实例的连接地址。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com',
              ),
              'OrderId' => 
              array (
                'description' => '订单编号。',
                'type' => 'string',
                'example' => '111111111111',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5414A4E5-4C36-4461-95FC-************\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"Port\\": \\"3432\\",\\n  \\"ConnectionString\\": \\"gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com\\",\\n  \\"OrderId\\": \\"111111111111\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBInstanceResponse>\\n    <RequestId>5414A4E5-4C36-4461-95FC-************</RequestId>\\n    <DBInstanceId>gp-bp***************</DBInstanceId>\\n    <OrderId>111111111111</OrderId>\\n</CreateDBInstanceResponse>","errorExample":""}]',
      'title' => '创建实例',
      'description' => '请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
      'requestParamsDescription' => '### DBInstanceClass参数补充说明
目前，AnalyticDB for PostgreSQL支持如下两种实例规格：

- 高性能：规格名称以gpdb.group.segsdx开始，特点是可以提供更好的I/O能力，带来更高的性能。
- 高容量：规格名称以gpdb.group.seghdx开始，特点是可以提供更大、更实惠的空间，满足更高的存储需求。

因此，在选择实例规格时，建议您根据需要的存储空间和计算能力进行选择。

同时，AnalyticDB for PostgreSQL支持基于OSS的外部表扩展，并可通过gzip实现外部存储上的数据压缩，不需要参与实时计算的数据可以存放到外部存储以进一步节省存储成本。

**高性能实例的规格信息**如下表所示：
<table>
  <tbody>
    <tr>
      <td><br>【高性能】规格</td>
      <td><br>CPU</td>
      <td><br>内存</td>
      <td><br>存储空间<br></td>
    </tr>
    <tr>
      <td><br>gpdb.group.segsdx1</td>
      <td><br>1 Core</td>
      <td><br>8 GB</td>
      <td><br>80 GB SSD</td>
    </tr>
    <tr>
      <td><br>gpdb.group.segsdx2</td>
      <td><br>2 Cores</td>
      <td><br>16 GB</td>
      <td><br>160 GB SSD</td>
    </tr>
    <tr>
      <td><br>gpdb.group.segsdx16</td>
      <td><br>16 Cores</td>
      <td><br>128 GB</td>
      <td><br>1.28 TB SSD</td>
    </tr>
  </tbody>
  <colgroup>
    <col style="width: 29.7778%;">
    <col style="width: 21.1111%;">
    <col style="width: 24.1111%;">
    <col style="width: 25%;">
  </colgroup>
</table>

**高容量型实例的规格信息**如下表所示：
<table>
  <tbody>
    <tr>
      <td><br>【高容量】规格</td>
      <td><br>CPU</td>
      <td><br>内存</td>
      <td><br>存储空间<br></td>
    </tr>
    <tr>
      <td><br>gpdb.group.seghdx4</td>
      <td><br>4 Cores</td>
      <td><br>32 GB</td>
      <td><br>2 TB HDD</td>
    </tr>
    <tr>
      <td><br>gpdb.group.seghdx36</td>
      <td><br>36 Cores</td>
      <td><br>288 GB</td>
      <td><br>18 TB HDD</td>
    </tr>
  </tbody>
  <colgroup>
    <col>
    <col>
    <col>
    <col>
  </colgroup>
</table>',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBInstance' => 
    array (
      'summary' => '释放按量付费的AnalyticDB PostgreSQL版实例。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等性校验。更多信息，请参见[如何保证幂等性](~~327176~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88**********',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
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
                'example' => '65BDA532-28AF-4122-AA39-B3**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B3**********\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBInstanceResponse>\\n    <RequestId>65BDA532-28AF-4122-AA39-B3**********</RequestId>\\n</DeleteDBInstanceResponse>","errorExample":""}]',
      'title' => '释放按量付费实例',
      'description' => '- 包年包月实例不支持手动释放，实例到期后会自动释放。
- 只有运行状态为**运行中**的按量付费实例支持通过本接口释放。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceDescription' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版实例的备注。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例备注信息。

长度为2~256个字符，不能以http:// 或者https:// 开头。',
            'type' => 'string',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '107BE202-D1A2-479E-98E0-A8**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"107BE202-D1A2-479E-98E0-A8**********\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceDescriptionResponse>\\n    <RequestId>107BE202-D1A2-479E-98E0-A8**********</RequestId>\\n</ModifyDBInstanceDescriptionResponse>","errorExample":""}]',
      'title' => '修改实例备注',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceMaintainTime' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版实例的可维护时间。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可维护的开始时间。格式：HH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '02:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可维护的结束时间，需要大于开始时间。格式：HH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '03:00Z',
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
                'example' => 'CA9A34C8-AC95-413B-AC6A-CE**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA9A34C8-AC95-413B-AC6A-CE**********\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceMaintainTimeResponse>\\n    <RequestId>CA9A34C8-AC95-413B-AC6A-CE**********</RequestId>\\n</ModifyDBInstanceMaintainTimeResponse>","errorExample":""}]',
      'title' => '修改实例可运维时间',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceResourceGroup' => 
    array (
      'summary' => '将AnalyticDB PostgreSQL版实例移动到指定资源组。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-bp67acfmxazb4b****',
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
            'errorCode' => 'Instance.FailedUpdateResourceGroup',
            'errorMessage' => 'Failed to update resource group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceResourceGroupResponse>\\n    <RequestId>65BDA532-28AF-4122-AA39-B382721EEE64</RequestId>\\n</ModifyDBInstanceResourceGroupResponse>","errorExample":""}]',
      'title' => '修改实例所属资源组',
      'description' => '通过资源管理服务，您可以按照业务需要搭建合适的资源组织关系，使用目录、资源夹、账号以及资源组，分层次地组织和管理您的云资源。详情请参见[什么是资源管理](~~94475~~)。',
    ),
    'ModifyVectorConfiguration' => 
    array (
      'summary' => '修改实例向量引擎优化配置。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'VectorConfigurationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是开开启向量引擎优化配置。取值如下：

- **enabled**：开启向量引擎优化。
- **disabled**：不开启向量引擎优化。

> - 对于主流分析场景、数仓场景、实时数仓等场景，建议**不开启**向量引擎优化。
- 对于使用向量分析引擎用于AIGC、向量检索等场景用户，建议**开启**向量引擎优化。
',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'disabled' => '不开启',
              'enabled' => '开启',
            ),
            'example' => 'enabled',
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
                'example' => '107BE202-D1A2-479E-98E0-A8**********',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态。取值如下：

- **true**：执行成功。
- **false**：执行失败。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '修改成功',
                  'false' => '修改失败',
                ),
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => 'Failed to modify vector configuration.',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"107BE202-D1A2-479E-98E0-A8**********\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"Failed to modify vector configuration.\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyVectorConfigurationResponse>\\n    <RequestId>107BE202-D1A2-479E-98E0-A8**********</RequestId>\\n    <Status>true</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</ModifyVectorConfigurationResponse>","errorExample":""}]',
      'title' => '修改实例向量引擎优化配置',
    ),
    'PauseInstance' => 
    array (
      'summary' => '暂停AnalyticDB PostgreSQL版实例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34b32a0a-08ef-4a87-b6be-cdd9********',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在**Status**参数返回值为**false**时返回该参数。',
                'type' => 'string',
                'example' => '*******',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd9********\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"*******\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<PauseInstanceResponse>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd9********</RequestId>\\n    <Status>true</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</PauseInstanceResponse>","errorExample":""}]',
      'title' => '暂停实例',
      'description' => '- 实例付费类型需为按量付费类型。
- 仅支持Serverless手动调度模式和存储弹性模式实例
- 仅支持暂停运行状态为**运行中**的AnalyticDB PostgreSQL版实例。

> 请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
    ),
    'RebalanceDBInstance' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等性校验。更多信息，请参见[如何保证幂等性](~~327176~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
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
                'example' => '5414A4E5-4C36-4461-95FC-************',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5414A4E5-4C36-4461-95FC-************\\"\\n}","errorExample":""},{"type":"xml","example":"<RebalanceDBInstanceResponse>\\n    <RequestId>5414A4E5-4C36-4461-95FC-************</RequestId>\\n</RebalanceDBInstanceResponse>","errorExample":""}]',
      'title' => '实例部署平衡',
      'summary' => '对AnalyticDB PostgreSQL版实例进行部署平衡。',
    ),
    'RestartDBInstance' => 
    array (
      'summary' => '重启AnalyticDB PostgreSQL版实例。',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等性校验。更多信息，请参见[如何保证幂等性](~~327176~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => 'A7356493-7141-4393-8951-CDA8AB5D67EC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A7356493-7141-4393-8951-CDA8AB5D67EC\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartDBInstance>\\r\\n         <RequestId>A7356493-7141-4393-8951-CDA8AB5D67EC</RequestId>\\r\\n</RestartDBInstance>","errorExample":""}]',
      'title' => '重启实例',
      'description' => '重启过程一般耗时3到30分钟，在重启过程中实例无法对外提供服务，请您在业务低谷期进行操作。当实例重启结束，实例状态将变为运行中，此时您可以正常访问实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResumeInstance' => 
    array (
      'summary' => '启动AnalyticDB PostgreSQL版实例。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'example' => '34b32a0a-08ef-4a87-b6be-cdd9********',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：

- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在**Status**参数返回值为**false**时返回该参数。',
                'type' => 'string',
                'example' => '******',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd9********\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"******\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeInstanceResponse>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd9********</RequestId>\\n    <Status>true</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</ResumeInstanceResponse>","errorExample":""}]',
      'title' => '启动实例',
      'description' => '- 实例付费类型需为按量付费。
- 仅支持Serverless手动调度模式和存储弹性模式实例。
- 仅支持启动运行状态为**已暂停**的AnalyticDB PostgreSQL版实例。

> 请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
    ),
    'UpgradeDBVersion' => 
    array (
      'summary' => '为指定AnalyticDB PostgreSQL版实例升级内核小版本。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-wz9kmr708m155j***',
          ),
        ),
        2 => 
        array (
          'name' => 'MinorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '小版本。',
            'type' => 'string',
            'required' => false,
            'example' => '6.3.6.1-202112012048',
          ),
        ),
        3 => 
        array (
          'name' => 'MajorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        4 => 
        array (
          'name' => 'SwitchTimeMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
            'default' => 'Postpaid',
          ),
        ),
        5 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
                'type' => 'string',
                'example' => '101450956',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25C11EE5-B7E8-481A-A07C-BD619971A570',
              ),
              'DBInstanceId' => 
              array (
                'description' => '此参数已废弃，无返回参数值。',
                'type' => 'string',
                'example' => 'null',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'gp-wz9kmr708m155j***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"101450956\\",\\n  \\"RequestId\\": \\"25C11EE5-B7E8-481A-A07C-BD619971A570\\",\\n  \\"DBInstanceId\\": \\"null\\",\\n  \\"DBInstanceName\\": \\"gp-wz9kmr708m155j***\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>101450956</TaskId>\\n<RequestId>25C11EE5-B7E8-481A-A07C-BD619971A570</RequestId>\\n<DBInstanceId>gp-wz9kmr708m155j***</DBInstanceId>\\n<DBInstanceName>gp-wz9kmr708m155j***</DBInstanceName>","errorExample":""}]',
      'title' => '升级内核小版本',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataReDistributeInfo' => 
    array (
      'summary' => '查询存储弹性模式6.0版实例在节点扩缩容过程中，数据重分布的进度。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
              'DataReDistributeInfo' => 
              array (
                'description' => '数据重分布任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '执行类型。固定为**immediate**，表示立即执行。',
                    'type' => 'string',
                    'example' => 'immediate',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '暂不支持该参数。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'Progress' => 
                  array (
                    'description' => '数据重分布进度，单位为%。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '33',
                  ),
                  'RemainTime' => 
                  array (
                    'description' => '数据重分布预计剩余时间。',
                    'type' => 'string',
                    'example' => '00:01:28',
                  ),
                  'Message' => 
                  array (
                    'description' => '运行信息，如果出错会显示出错的详细信息。',
                    'type' => 'string',
                    'example' => 'redistributing',
                  ),
                  'Status' => 
                  array (
                    'description' => '数据重分布的状态。',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04836A02-ADC9-1AA7-AC36-DE5E048BF505',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DataReDistributeInfo\\": {\\n    \\"Type\\": \\"immediate\\",\\n    \\"StartTime\\": \\"null\\",\\n    \\"Progress\\": 33,\\n    \\"RemainTime\\": \\"00:01:28\\",\\n    \\"Message\\": \\"redistributing\\",\\n    \\"Status\\": \\"RUNNING\\"\\n  },\\n  \\"RequestId\\": \\"04836A02-ADC9-1AA7-AC36-DE5E048BF505\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataReDistributeInfoResponse>\\n    <DataReDistributeInfo>\\n        <Type>immediate</Type>\\n        <Progress>33</Progress>\\n        <RemainTime>00:01:28</RemainTime>\\n        <Message>redistributing</Message>\\n        <Status>RUNNING</Status>\\n    </DataReDistributeInfo>\\n    <RequestId>04836A02-ADC9-1AA7-AC36-DE5E048BF505</RequestId>\\n</DescribeDataReDistributeInfoResponse>","errorExample":""}]',
      'title' => '查询数据重分布进度',
    ),
    'ModifyDBInstanceConfig' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版Serverless自动调度模式实例的计算资源阈值和空闲释放等待时长。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        3 => 
        array (
          'name' => 'ServerlessResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算资源阈值。取值范围为8~32，单位为ACU。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '32',
          ),
        ),
        4 => 
        array (
          'name' => 'IdleTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空闲释放等待时长。即当无业务流量的时长达到指定时长后，实例转为空闲状态。单位为秒，最小值为60，默认值为600。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '600',
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
                'example' => '34B32A0A-08EF-4A87-B6BE-CDD9F56FC3AD',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息，仅调用失败时返回。',
                'type' => 'string',
                'example' => '\'error message\'',
              ),
              'DbInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'Status' => 
              array (
                'description' => '修改状态，返回信息如下：

- **0**：修改失败。
- **1**：修改成功。',
                'type' => 'boolean',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34B32A0A-08EF-4A87-B6BE-CDD9F56FC3AD\\",\\n  \\"ErrorMessage\\": \\"\'error message\'\\",\\n  \\"DbInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"Status\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceConfigResponse>\\n    <RequestId>34B32A0A-08EF-4A87-B6BE-CDD9F56FC3AD</RequestId>\\n    <DbInstanceId>gp-bp12ga6v69h86****</DbInstanceId>\\n    <Status>1</Status>\\n</ModifyDBInstanceConfigResponse>","errorExample":""}]',
      'title' => '修改计算资源阈值',
    ),
    'UpgradeDBInstance' => 
    array (
      'summary' => '变更AnalyticDB PostgreSQL版实例的规格。',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-rj***************',
          ),
        ),
        5 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
            'default' => 'Postpaid',
          ),
        ),
        6 => 
        array (
          'name' => 'MasterNodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        7 => 
        array (
          'name' => 'SegNodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Segment节点数量。不同实例资源类型和实例系列支持的节点数量不同，具体情况如下：

- 存储弹性模式高可用版：取值范围为4~512个，步长为4。
- 存储弹性模式高性能版：取值范围为2~512个，步长为2。
- Serverless手动调度模式：取值范围为2~512个，步长为2。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Segment节点规格。支持的节点规格，请参见[规格及选型](~~35406~~)。

> 该参数仅支持存储弹性模式实例。',
            'type' => 'string',
            'required' => false,
            'example' => '4C16G',
          ),
        ),
        9 => 
        array (
          'name' => 'StorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Segment节点存储空间的大小，单位为GB。存储容量范围为50 GB~<props="china">8000</props><props="intl">6000</props>
 GB，步长为50。

> 该参数仅支持存储弹性模式实例。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'SegDiskPerformanceLevel',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '磁盘的性能级别PL（Performance Level），取值说明：

- **pl0**：PL0级别。
- **pl1**：PL1级别。
- **pl2**：PL2级别。',
            'type' => 'string',
            'required' => false,
            'example' => 'pl1',
            'enum' => 
            array (
              0 => 'pl0',
              1 => 'pl1',
              2 => 'pl2',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'SegStorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '变更后的磁盘存储类型，目前仅支持变更为ESSD云盘，取值为**cloud_essd**。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd',
            'enum' => 
            array (
              0 => 'cloud_essd',
              1 => 'cloud_efficiency',
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'UpgradeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格变更类型，取值说明：

- **0**（默认）：变更Segment节点数量。
- **1**：变更Segment节点规格和存储空间大小。
- **2**：变更Master节点数量。
- **3**：变更磁盘存储类型和性能级别。

> - 不同的实例资源类型对计算节点变配的支持程度不一样，具体信息，请参见[注意事项](~~50956~~)。
- 选择对应的变更类型后，仅对应的参数生效，其他参数不会生效。例如，**UpgradeType**参数为0的情况下，如果同时传入了变更Segment节点数量和Master节点数量的参数，仅变更Segment节点数量的参数会生效。
- 仅中国站支持变更Master节点数量。
- 仅支持将磁盘存储类型从高效云盘变更为ESSD云盘。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
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
                'example' => '25C11EE5-B7E8-481A-A07C-BD**********',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-rj***************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '*********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"25C11EE5-B7E8-481A-A07C-BD**********\\",\\n  \\"DBInstanceId\\": \\"gp-rj***************\\",\\n  \\"OrderId\\": \\"*********\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeDBInstanceResponse>\\n    <RequestId>25C11EE5-B7E8-481A-A07C-BD**********</RequestId>\\n    <DBInstanceId>gp-rj***************</DBInstanceId>\\n    <OrderId>*********</OrderId>\\n</UpgradeDBInstanceResponse>","errorExample":""}]',
      'title' => '变更实例规格',
      'description' => '本接口不支持变更存储预留模式实例。

请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PauseDataRedistribute' => 
    array (
      'summary' => '暂停数据重分布。',
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
        'abilityTreeCode' => '214941',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGMSZYK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '暂停数据重分布',
    ),
    'ResumeDataRedistribute' => 
    array (
      'summary' => '恢复数据重分布。',
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
        'abilityTreeCode' => '214945',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGMSZYK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '恢复数据重分布',
    ),
    'DescribeDBClusterNode' => 
    array (
      'summary' => '查询AnalyticDB PostgreSQL版实例中的节点信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。取值说明：

- **master**：Master节点。
- **segment**：Segment节点。

> 如果不传入该参数，则返回所有节点的监控信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'master',
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
              'Nodes' => 
              array (
                'description' => '节点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '节点名称。',
                      'type' => 'string',
                      'example' => 'master-10*******',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '87E44B48-B306-4AD3-A63B-C8**********',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp***************',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Nodes\\": [\\n    {\\n      \\"Name\\": \\"master-10*******\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"87E44B48-B306-4AD3-A63B-C8**********\\",\\n  \\"DBClusterId\\": \\"gp-bp***************\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterNodeResponse>\\n    <RequestId>87E44B48-B306-4AD3-A63B-C8**********</RequestId>\\n    <DBClusterId>gp-bp***************</DBClusterId>\\n    <Nodes>\\n        <Name>master-10*******</Name>\\n    </Nodes>\\n</DescribeDBClusterNodeResponse>","errorExample":""}]',
      'title' => '查询节点信息',
      'description' => '## 使用说明
本接口用于查看存储弹性模式和Serverless版本的AnalyticDB PostgreSQL版实例的Master节点或Segment节点信息。

## QPS限制
本接口的单用户QPS限制默认为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

<props="china">本文档中的QPS仅为默认参考值，准确信息请参见[API速率配额列表](https://quotas.console.aliyun.com/flow-control-products/gpdb/quotas)。</props>',
    ),
    'DescribeDBInstanceAttribute' => 
    array (
      'summary' => '查询AnalyticDB PostgreSQL版实例详情。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp13ue79qk8y1****',
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
                'example' => '5E6EDEB8-D73E-5F2D-B948-86C8AEB05A68',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceAttribute' => 
                  array (
                    'description' => '实例详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp19ame5m1r3oejns****',
                        ),
                        'CreationTime' => 
                        array (
                          'description' => '实例创建时间。',
                          'type' => 'string',
                          'example' => '2022-08-11T09:16:26Z',
                        ),
                        'DBInstanceCpuCores' => 
                        array (
                          'description' => 'CPU核数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'SegmentCounts' => 
                        array (
                          'description' => '计算组个数。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'StoragePerNode' => 
                        array (
                          'description' => '单副本的存储大小，单位请参见**StorageUnit**参数。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DBInstanceMemory' => 
                        array (
                          'description' => '计算节点的内存。

> 存储预留模式的单位为MB；Serverless和存储弹性模式单位为GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16',
                        ),
                        'HostType' => 
                        array (
                          'description' => '计算组机器类型，取值说明：
- **0**：SSD
- **1**：HDD

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'PayType' => 
                        array (
                          'description' => '计费类型，取值说明：

- **Postpaid**：按量付费。
- **Prepaid**：包年包月。',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标记键值对。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签详情如下。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'test-key',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test-value',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型，取值说明：

- **cloud_essd**：ESSD云盘。
- **cloud_efficiency**：高效云盘。

> 该参数仅适用存储弹性模式的实例。',
                          'type' => 'string',
                          'example' => 'cloud_essd',
                        ),
                        'AvailabilityValue' => 
                        array (
                          'description' => '查询当前实例可用性状态，单位：百分比（%）。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => '100.0%',
                        ),
                        'ReadDelayTime' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'CpuCoresPerNode' => 
                        array (
                          'description' => '单节点的CPU核数。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Port' => 
                        array (
                          'description' => '实例的端口号。',
                          'type' => 'string',
                          'example' => '5432',
                        ),
                        'ConnectionMode' => 
                        array (
                          'description' => '访问模式，取值说明：

- **Performance**：标准访问模式。
- **Safty**：高安全访问模式。
- **LVS**：LVS链路模式。',
                          'type' => 'string',
                          'example' => 'LVS',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '锁定方式，取值说明：

- **Unlock**：正常 。
- **ManualLock**：手动触发锁定。
- **LockByExpiration**：实例过期自动锁定。
- **LockByRestoration**：实例回滚前的自动锁定。
- **LockByDiskQuota**：实例空间满自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '数据库版本。',
                          'type' => 'string',
                          'example' => '6.0',
                        ),
                        'StorageUnit' => 
                        array (
                          'description' => '存储单位，取值说明：

- **GB SSD**
- **TB SSD**
- **GB HDD**

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => 'GB SSD',
                        ),
                        'MemoryPerNode' => 
                        array (
                          'description' => '单副本的内存大小，单位请参见**MemoryUnit**参数。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '实例连接地址。',
                          'type' => 'string',
                          'example' => 'gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com',
                        ),
                        'InstanceNetworkType' => 
                        array (
                          'description' => '实例网络类型，取值说明：

- **Classic**：经典网络。
- **VPC**：VPC网络。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => '该参数已废弃，不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'MemoryUnit' => 
                        array (
                          'description' => '内存单位。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => 'GB',
                        ),
                        'DBInstanceClassType' => 
                        array (
                          'description' => '实例规格族，取值说明：

- **s**：共享型。
- **x**：通用型。
- **d**：独享套餐。
- **h**：独占物理机。',
                          'type' => 'string',
                          'example' => 'x',
                        ),
                        'DBInstanceDescription' => 
                        array (
                          'description' => '实例描述。',
                          'type' => 'string',
                          'example' => 'gp-bp13ue79qk8y1****',
                        ),
                        'DBInstanceGroupCount' => 
                        array (
                          'description' => '计算组数量。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '实例到期时间（UTC时间）。

> 按量付费实例的到期时间为`2999-09-08T16:00:00Z`。',
                          'type' => 'string',
                          'example' => '2999-09-08T16:00:00Z',
                        ),
                        'DBInstanceNetType' => 
                        array (
                          'description' => '该参数已废弃，不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'MaintainStartTime' => 
                        array (
                          'description' => '可维护开始时间。',
                          'type' => 'string',
                          'example' => '18:00Z',
                        ),
                        'MaintainEndTime' => 
                        array (
                          'description' => '可维护结束时间。',
                          'type' => 'string',
                          'example' => '22:00Z',
                        ),
                        'LockReason' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '实例状态，详细说明请参见DBInstanceStatus参数补充说明。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'DBInstanceDiskMBPS' => 
                        array (
                          'description' => '计算组最大的BPS（磁盘吞吐量），单位：Mbps。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DBInstanceStorage' => 
                        array (
                          'description' => '单个副本的最大存储空间，单位：GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-j',
                        ),
                        'MaxConnections' => 
                        array (
                          'description' => '实例的最大并发连接数。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-bp13ue79qk8y1****',
                        ),
                        'DBInstanceClass' => 
                        array (
                          'description' => '实例规格。

> 该参数仅适用存储预留模式的实例。',
                          'type' => 'string',
                          'example' => 'gpdb.group.segsdx1',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库引擎。',
                          'type' => 'string',
                          'example' => 'gpdb',
                        ),
                        'DBInstanceCategory' => 
                        array (
                          'description' => '实例系列，取值说明：

- **Basic**：基础版。
- **HighAvailability**：高可用版。',
                          'type' => 'string',
                          'example' => 'HighAvailability',
                        ),
                        'CpuCores' => 
                        array (
                          'description' => '计算节点CPU核数，单位Core。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'MemorySize' => 
                        array (
                          'description' => '计算节点内存大小。

> 存储预留模式的单位为MB；Serverless和存储弹性模式单位为GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16',
                        ),
                        'StorageSize' => 
                        array (
                          'description' => '存储空间大小，单位GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'SegNodeNum' => 
                        array (
                          'description' => 'Segment节点数量。

> 该参数仅适用存储弹性模式和Serverless手动调度模式的实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'MasterNodeNum' => 
                        array (
                          'description' => 'Master节点数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DBInstanceMode' => 
                        array (
                          'description' => '实例资源类型，取值说明：

- **Serverless**：Serverless模式。
- **StorageElastic**：存储弹性模式。
- **Classic**：存储预留模式。',
                          'type' => 'string',
                          'example' => 'StorageElastic',
                        ),
                        'MinorVersion' => 
                        array (
                          'description' => '内核小版本。',
                          'type' => 'string',
                          'example' => '6.3.10.1-202207141918',
                        ),
                        'SupportRestore' => 
                        array (
                          'description' => '是否支持备份恢复，取值说明：

- **true**：支持备份恢复。
- **false**：不支持备份恢复。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => 'vSwitch ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1cpq8mr64paltkb****',
                        ),
                        'EncryptionKey' => 
                        array (
                          'description' => '加密密钥。

> 仅开启云盘加密的实例会返回该参数。',
                          'type' => 'string',
                          'example' => '0d2470df-da7b-4786-b981-************',
                        ),
                        'EncryptionType' => 
                        array (
                          'description' => '加密类型，取值说明：

- **CloudDisk**：云盘加密。

> 仅云盘加密的实例会返回该参数。',
                          'type' => 'string',
                          'example' => 'CloudDisk',
                        ),
                        'CoreVersion' => 
                        array (
                          'description' => '内核小版本号。',
                          'type' => 'string',
                          'example' => 'mm.v6.3.10.1-202207141918',
                        ),
                        'RunningTime' => 
                        array (
                          'description' => '实例运行时长。',
                          'type' => 'string',
                          'example' => '4 days 22:58:55',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '实例开始运行的时间。',
                          'type' => 'string',
                          'example' => '2022-08-11T09:26:43Z',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所在的资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-bp67acfmxazb4p****',
                        ),
                        'ServerlessResource' => 
                        array (
                          'description' => '计算资源阈值。单位为ACU。

> 仅Serverless自动调度模式实例返回该参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '32',
                        ),
                        'IdleTime' => 
                        array (
                          'description' => '空闲释放等待时长。单位为秒。

> 仅Serverless自动调度模式实例返回该参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '600',
                        ),
                        'ServerlessMode' => 
                        array (
                          'description' => 'Serverless实例的模式，取值如下：

- **Manual**：手动调度。
- **Auto**：自动调度。

> 仅Serverless模式实例返回该参数。',
                          'type' => 'string',
                          'example' => 'Auto',
                        ),
                        'SegDiskPerformanceLevel' => 
                        array (
                          'description' => '性能级别PL（Performance Level），目前仅支持**PL1**。',
                          'type' => 'string',
                          'example' => 'PL1',
                        ),
                        'VectorConfigurationStatus' => 
                        array (
                          'description' => '是否开启向量引擎优化，取值说明：
- **enabled**：表示开启向量引擎优化。
- **disabled**：表示已关闭向量引擎优化。',
                          'type' => 'string',
                          'example' => 'enabled',
                        ),
                        'MasterCU' => 
                        array (
                          'description' => 'Master资源。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'ProdType' => 
                        array (
                          'type' => 'string',
                          'enum' => 
                          array (
                            0 => 'standard',
                            1 => 'cost-effective',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E6EDEB8-D73E-5F2D-B948-86C8AEB05A68\\",\\n  \\"Items\\": {\\n    \\"DBInstanceAttribute\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp19ame5m1r3oejns****\\",\\n        \\"CreationTime\\": \\"2022-08-11T09:16:26Z\\",\\n        \\"DBInstanceCpuCores\\": 2,\\n        \\"SegmentCounts\\": 0,\\n        \\"StoragePerNode\\": 0,\\n        \\"DBInstanceMemory\\": 16,\\n        \\"HostType\\": \\"0\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test-key\\",\\n              \\"Value\\": \\"test-value\\"\\n            }\\n          ]\\n        },\\n        \\"StorageType\\": \\"cloud_essd\\",\\n        \\"AvailabilityValue\\": \\"100.0%\\",\\n        \\"ReadDelayTime\\": \\"null\\",\\n        \\"CpuCoresPerNode\\": 0,\\n        \\"Port\\": \\"5432\\",\\n        \\"ConnectionMode\\": \\"LVS\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"6.0\\",\\n        \\"StorageUnit\\": \\"GB SSD\\",\\n        \\"MemoryPerNode\\": 0,\\n        \\"ConnectionString\\": \\"gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com\\",\\n        \\"InstanceNetworkType\\": \\"VPC\\",\\n        \\"SecurityIPList\\": \\"null\\",\\n        \\"MemoryUnit\\": \\"GB\\",\\n        \\"DBInstanceClassType\\": \\"x\\",\\n        \\"DBInstanceDescription\\": \\"gp-bp13ue79qk8y1****\\",\\n        \\"DBInstanceGroupCount\\": \\"0\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBInstanceNetType\\": \\"null\\",\\n        \\"MaintainStartTime\\": \\"18:00Z\\",\\n        \\"MaintainEndTime\\": \\"22:00Z\\",\\n        \\"LockReason\\": \\"null\\",\\n        \\"DBInstanceStatus\\": \\"Running\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"DBInstanceDiskMBPS\\": 0,\\n        \\"DBInstanceStorage\\": 50,\\n        \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n        \\"MaxConnections\\": 500,\\n        \\"DBInstanceId\\": \\"gp-bp13ue79qk8y1****\\",\\n        \\"DBInstanceClass\\": \\"gpdb.group.segsdx1\\",\\n        \\"Engine\\": \\"gpdb\\",\\n        \\"DBInstanceCategory\\": \\"HighAvailability\\",\\n        \\"CpuCores\\": 2,\\n        \\"MemorySize\\": 16,\\n        \\"StorageSize\\": 50,\\n        \\"SegNodeNum\\": 4,\\n        \\"MasterNodeNum\\": 1,\\n        \\"DBInstanceMode\\": \\"StorageElastic\\",\\n        \\"MinorVersion\\": \\"6.3.10.1-202207141918\\",\\n        \\"SupportRestore\\": true,\\n        \\"VSwitchId\\": \\"vsw-bp1cpq8mr64paltkb****\\",\\n        \\"EncryptionKey\\": \\"0d2470df-da7b-4786-b981-************\\",\\n        \\"EncryptionType\\": \\"CloudDisk\\",\\n        \\"CoreVersion\\": \\"mm.v6.3.10.1-202207141918\\",\\n        \\"RunningTime\\": \\"4 days 22:58:55\\",\\n        \\"StartTime\\": \\"2022-08-11T09:26:43Z\\",\\n        \\"ResourceGroupId\\": \\"rg-bp67acfmxazb4p****\\",\\n        \\"ServerlessResource\\": 32,\\n        \\"IdleTime\\": 600,\\n        \\"ServerlessMode\\": \\"Auto\\",\\n        \\"SegDiskPerformanceLevel\\": \\"PL1\\",\\n        \\"VectorConfigurationStatus\\": \\"enabled\\",\\n        \\"MasterCU\\": 4,\\n        \\"ProdType\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceAttributeResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>5E6EDEB8-D73E-5F2D-B948-86C8AEB05A68</RequestId>\\n        <Items>\\n            <DBInstanceAttribute>\\n                <MasterNodeNum>1</MasterNodeNum>\\n                <DBInstanceMemory>16</DBInstanceMemory>\\n                <CpuCoresPerNode>0</CpuCoresPerNode>\\n                <Port>5432</Port>\\n                <SegNodeNum>4</SegNodeNum>\\n                <MemoryPerNode>0</MemoryPerNode>\\n                <InstanceNetworkType>VPC</InstanceNetworkType>\\n                <DBInstanceClassType>x</DBInstanceClassType>\\n                <SupportRestore>true</SupportRestore>\\n                <DBInstanceCategory>HighAvailability</DBInstanceCategory>\\n                <MaintainEndTime>22:00Z</MaintainEndTime>\\n                <DBInstanceId>gp-bp13ue79qk8y1****</DBInstanceId>\\n                <DBInstanceStorage>50</DBInstanceStorage>\\n                <DBInstanceDescription>gp-bp13ue79qk8y1****</DBInstanceDescription>\\n                <MaintainStartTime>18:00Z</MaintainStartTime>\\n                <Engine>gpdb</Engine>\\n                <Tags>\\n                </Tags>\\n                <SegmentCounts>0</SegmentCounts>\\n                <MemorySize>16</MemorySize>\\n                <MemoryUnit/>\\n                <StorageType>cloud_essd</StorageType>\\n                <EngineVersion>6.0</EngineVersion>\\n                <DBInstanceStatus>Running</DBInstanceStatus>\\n                <ZoneId>cn-hangzhou-j</ZoneId>\\n                <DBInstanceCpuCores>2</DBInstanceCpuCores>\\n                <VSwitchId>vsw-bp1cpq8mr64paltkb****</VSwitchId>\\n                <StartTime>2022-08-11T09:26:43Z</StartTime>\\n                <StorageSize>50</StorageSize>\\n                <MinorVersion>6.3.10.1-202207141918</MinorVersion>\\n                <CoreVersion>mm.v6.3.10.1-202207141918</CoreVersion>\\n                <StorageUnit/>\\n                <PayType>Postpaid</PayType>\\n                <LockMode>Unlock</LockMode>\\n                <VpcId>vpc-bp19ame5m1r3oejns****</VpcId>\\n                <StoragePerNode>0</StoragePerNode>\\n                <DBInstanceMode>StorageElastic</DBInstanceMode>\\n                <CreationTime>2022-08-11T09:16:26Z</CreationTime>\\n                <ConnectionMode>LVS</ConnectionMode>\\n                <CpuCores>2</CpuCores>\\n                <RegionId>cn-hangzhou</RegionId>\\n                <ConnectionString>gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com</ConnectionString>\\n                <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n                <RunningTime>4 days 22:58:55</RunningTime>\\n            </DBInstanceAttribute>\\n        </Items>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>5E6EDEB8-D73E-5F2D-B948-86C8AEB05A68</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeDBInstanceAttributeResponse>","errorExample":""}]',
      'title' => '查询实例详情',
      'description' => '## 使用说明
本接口一般用于查看AnalyticDB PostgreSQL版实例的规格、网络类型、实例状态等信息。

## QPS限制
本接口的单用户QPS限制默认为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

<props="china">本文档中的QPS仅为默认参考值，准确信息请参见[API速率配额列表](https://quotas.console.aliyun.com/flow-control-products/gpdb/quotas)。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '### DBInstanceStatus参数补充说明
DBInstanceStatus取值如下：
- **Creating**：创建中。
- **Running**：使用中。
- **Deleting**：删除中。
- **Rebooting**：重启中。
- **DBInstanceClassChanging**：升降级中。
- **Transfering**：迁移中。
- **EngineVersionUpgrading**：迁移版本中。
- **TransferingToOtherInstance**：迁移数据到其他AnalyticDB for PostgreSQL中。
- **GuardDBInstanceCreating**：创建灾备实例中。
- **Restoring**：备份恢复中。
- **Importing**：数据导入中。
- **ImportingFromOtherInstance**：从其他AnalyticDB for PostgreSQL实例导入数据中。
- **DBInstanceNetTypeChangin**：内外网切换中。
- **GuardSwitching**：容灾切换中。',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstances' => 
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

> 您可以通过[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例网络类型，取值说明：
- **VPC**：专有网络。
- **Classic**：经典网络。

> 如果不填，则返回所有网络类型的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，多个实例ID之间用英文半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
            'default' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-key',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test-value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceDeployTypes',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '该参数已废弃，无需传入该参数。',
              'type' => 'string',
              'required' => false,
              'example' => 'null',
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'DBInstanceStatuses',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '实例运行状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例运行状态，多个值用英文逗号（,）分隔。实例的运行状态的值，请参见[实例状态表](~~86944~~)。

> 该参数的传入值须为小写字母。',
              'type' => 'string',
              'required' => false,
              'example' => 'running',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'DBInstanceCategories',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '实例系列，多个值用英文逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例系列，多个值用英文逗号（,）分隔。取值说明：
- **basic**：基础版。
- **highavailability**：高可用版。
- **finance**：企业版。',
              'type' => 'string',
              'required' => false,
              'example' => 'basic,highavailability',
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'DBInstanceModes',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '资源类型，多个值用英文逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源类型，多个值用英文逗号（,）分隔。取值说明：

- **serverless**：Serverless版本。
- **storageelastic**：存储弹性模式。
- **classic**：存储预留模式。',
              'type' => 'string',
              'required' => false,
              'example' => 'storageelastic,serverless',
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在的企业资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        12 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。
可根据该参数筛选出同一VPC的数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-t4nqyp3tc5mx7vy6****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '53EA07B7-FC2A-521B-AB7C-27**********',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstance' => 
                  array (
                    'description' => '实例详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp19ame5m1r3oejns****',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '实例到期时间（UTC时间）。

> 按量付费实例的到日时间为`2999-09-08T16:00:00Z`。',
                          'type' => 'string',
                          'example' => '2999-09-08T16:00:00Z',
                        ),
                        'DBInstanceNetType' => 
                        array (
                          'description' => '实例网卡类型，取值说明：

- **0**：外网。
- **1**：内网。
- **2**：VPC网络。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'InstanceDeployType' => 
                        array (
                          'description' => '实例资源类型，取值说明：

- **cluster**：存储弹性模式或Serverless版本。
- **replicaSet**：存储预留模式。',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '实例存储类型，取值说明：

- **cloud_essd**：ESSD云盘。
- **cloud_efficiency**：高效云盘。',
                          'type' => 'string',
                          'example' => 'cloud_essd',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '实例创建时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-10-09T04:54:08Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '计费类型，取值说明：

- **Postpaid**：按量付费。
- **Prepaid**：包年包月。',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '实例标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'test-key',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'test-value',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'LockReason' => 
                        array (
                          'description' => '被锁定的原因，取值说明：

- **0**：正常。
- **1**：手动触发锁定。
- **2**：实例过期自动锁定。
- **3**：实例回滚前的自动锁定。
- **4**：实例空间满自动锁定。

> 存储预留模式实例正常情况下返回值为空。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '实例状态，详见[实例状态表](~~86944~~)。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'ConnectionMode' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。

如需查询访问模式可以通过[DescribeDBInstanceAttribute](~~86910~~)接口查询。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '实例锁定模式，取值说明：
- **Unlock**：正常。
- **ManualLock**：手动触发锁定。
- **LockByExpiration**：实例过期自动锁定。
- **LockByRestoration**：实例回滚前的自动锁定。
- **LockByDiskQuota**：实例空间满自动锁定。
- **LockReadInstanceByDiskQuota**：只读实例空间满自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '数据库版本。',
                          'type' => 'string',
                          'example' => '6.0',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => 'vSwitch ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1cpq8mr64paltkb****',
                        ),
                        'InstanceNetworkType' => 
                        array (
                          'description' => '实例网络类型，取值说明：

- **Classic**：经典网络。
- **VPC**：VPC网络。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-bp12ga6v69h86****',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库类型。',
                          'type' => 'string',
                          'example' => 'gpdb',
                        ),
                        'DBInstanceDescription' => 
                        array (
                          'description' => '实例描述。',
                          'type' => 'string',
                          'example' => 'gp-bp12ga6v69h86****',
                        ),
                        'SegNodeNum' => 
                        array (
                          'description' => 'Segment节点数量。',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'StorageSize' => 
                        array (
                          'description' => '存储空间大小，单位GB。',
                          'type' => 'string',
                          'example' => '50',
                        ),
                        'MasterNodeNum' => 
                        array (
                          'description' => 'Master节点数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DBInstanceCategory' => 
                        array (
                          'description' => '实例系列，取值说明：

- **Basic**：基础版。
- **HighAvailability**：高可用版。
- **Finance**：企业版。',
                          'type' => 'string',
                          'example' => 'HighAvailability',
                        ),
                        'DBInstanceMode' => 
                        array (
                          'description' => '资源类型，取值说明：

- **Serverless**：Serverless版本。
- **StorageElastic**：存储弹性模式。
- **Classic**：存储预留模式。',
                          'type' => 'string',
                          'example' => 'StorageElastic',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所在的企业资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-bp67acfmxazb4p****',
                        ),
                        'ServerlessMode' => 
                        array (
                          'description' => 'Serverless实例的模式，取值如下：

- **Manual**：手动调度。
- **Auto**：自动调度。

> 仅Serverless模式实例返回该参数。',
                          'type' => 'string',
                          'example' => 'Manual',
                        ),
                        'ProdType' => 
                        array (
                          'description' => '产品类型，取值说明：
- **standard**：标准版。
- **cost-effective**：经济版。',
                          'type' => 'string',
                          'example' => 'standard',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"53EA07B7-FC2A-521B-AB7C-27**********\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"DBInstance\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp19ame5m1r3oejns****\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBInstanceNetType\\": \\"2\\",\\n        \\"InstanceDeployType\\": \\"cluster\\",\\n        \\"StorageType\\": \\"cloud_essd\\",\\n        \\"CreateTime\\": \\"2021-10-09T04:54:08Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test-key\\",\\n              \\"Value\\": \\"test-value\\"\\n            }\\n          ]\\n        },\\n        \\"LockReason\\": \\"0\\",\\n        \\"DBInstanceStatus\\": \\"Running\\",\\n        \\"ConnectionMode\\": \\"null\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"6.0\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"VSwitchId\\": \\"vsw-bp1cpq8mr64paltkb****\\",\\n        \\"InstanceNetworkType\\": \\"VPC\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n        \\"Engine\\": \\"gpdb\\",\\n        \\"DBInstanceDescription\\": \\"gp-bp12ga6v69h86****\\",\\n        \\"SegNodeNum\\": \\"4\\",\\n        \\"StorageSize\\": \\"50\\",\\n        \\"MasterNodeNum\\": 1,\\n        \\"DBInstanceCategory\\": \\"HighAvailability\\",\\n        \\"DBInstanceMode\\": \\"StorageElastic\\",\\n        \\"ResourceGroupId\\": \\"rg-bp67acfmxazb4p****\\",\\n        \\"ServerlessMode\\": \\"Manual\\",\\n        \\"ProdType\\": \\"standard\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancesResponse>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>53EA07B7-FC2A-521B-AB7C-27**********</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <VpcId>vpc-bp19ame5m1r3oejns****</VpcId>\\n        <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n        <DBInstanceNetType>2</DBInstanceNetType>\\n        <InstanceDeployType>cluster</InstanceDeployType>\\n        <StorageType>cloud_essd</StorageType>\\n        <CreateTime>2021-10-09T04:54:08Z</CreateTime>\\n        <PayType>Postpaid</PayType>\\n        <Tags>\\n            <Key>test-key</Key>\\n            <Value>test-value</Value>\\n        </Tags>\\n        <LockReason>0</LockReason>\\n        <DBInstanceStatus>Running</DBInstanceStatus>\\n        <ConnectionMode>null</ConnectionMode>\\n        <LockMode>Unlock</LockMode>\\n        <EngineVersion>6.0</EngineVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VSwitchId>vsw-bp1cpq8mr64paltkb****</VSwitchId>\\n        <InstanceNetworkType>VPC</InstanceNetworkType>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n        <Engine>gpdb</Engine>\\n        <DBInstanceDescription>gp-bp12ga6v69h86****</DBInstanceDescription>\\n        <SegNodeNum>4</SegNodeNum>\\n        <StorageSize>50</StorageSize>\\n        <MasterNodeNum>1</MasterNodeNum>\\n        <DBInstanceCategory>HighAvailability</DBInstanceCategory>\\n        <DBInstanceMode>StorageElastic</DBInstanceMode>\\n        <ResourceGroupId>rg-bp67acfmxazb4p****</ResourceGroupId>\\n        <ServerlessMode>Manual</ServerlessMode>\\n    </Items>\\n</DescribeDBInstancesResponse>","errorExample":""}]',
      'title' => '查询数据库实例列表',
      'summary' => '查询AnalyticDB PostgreSQL版数据库实例列表。',
      'description' => '## 使用说明
本接口用于查看目标地域下的AnalyticDB PostgreSQL版实例的实例类型、网络类型、实例状态等信息。

## QPS限制
本接口的单用户QPS限制默认为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

<props="china">本文档中的QPS仅为默认参考值，准确信息请参见[API速率配额列表](https://quotas.console.aliyun.com/flow-control-products/gpdb/quotas)。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBVersionInfos' => 
    array (
      'summary' => '查询内核版本信息。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例资源类型，取值说明：

- **StorageElastic**：存储弹性模式。
- **Serverless**：Serverless模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'StorageElastic',
          ),
        ),
        3 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '不带前缀的内核版本号。',
            'type' => 'string',
            'required' => false,
            'example' => '6.3.10.20。',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'VersionDetails' => 
              array (
                'description' => '数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'StorageElastic' => 
                  array (
                    'description' => '存储弹性的内核版本信息。',
                    'type' => 'any',
                    'example' => '"StorageElasic": [
                {
                    "engineVersion": "6.0",
                    "versionInfos": [
                        {
                            "kernelVersion": "v6.3.11.2",
                            "releaseDate": "2023-08-17T09:14Z",
                            "expirationDate": "2026-08-17T09:14Z"
                        }
          },
                {
                    "engineVersion": "7.0",
                    "versionInfos": [
                        {
                            "kernelVersion": "v7.0.2.0",
                            "releaseDate": "2023-08-09T06:47Z",
                            "expirationDate": "2026-08-09T06:47Z"
                        },
                        {
                            "kernelVersion": "v7.0.1.8",
                            "releaseDate": "2023-05-25T06:56Z",
                            "expirationDate": "2026-05-25T06:56Z"
                        }
                    ]
                }
]
',
                  ),
                  'Serverless' => 
                  array (
                    'description' => '云原生的内核版本信息。',
                    'type' => 'any',
                    'example' => '"Serverless": [
                {
                    "engineVersion": "6.0",
                    "versionInfos": [
                        {
                            "kernelVersion": "v2.0.0.5",
                            "releaseDate": "2023-05-28T07:48Z",
                            "expirationDate": "2026-05-28T07:48Z"
                        },
                        {
                            "kernelVersion": "v2.0.0.1",
                            "releaseDate": "2023-03-27T12:44Z",
                            "expirationDate": "2026-03-27T12:44Z"
                        },
                        {
                            "kernelVersion": "v1.0.5.1",
                            "releaseDate": "2023-02-22T11:39Z",
                            "expirationDate": "2026-02-22T11:39Z"
                        }
                    ]
                }
]',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"VersionDetails\\": {\\n    \\"StorageElastic\\": \\"\\\\\\"StorageElasic\\\\\\": [\\\\n                {\\\\n                    \\\\\\"engineVersion\\\\\\": \\\\\\"6.0\\\\\\",\\\\n                    \\\\\\"versionInfos\\\\\\": [\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v6.3.11.2\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-08-17T09:14Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-08-17T09:14Z\\\\\\"\\\\n                        }\\\\n          },\\\\n                {\\\\n                    \\\\\\"engineVersion\\\\\\": \\\\\\"7.0\\\\\\",\\\\n                    \\\\\\"versionInfos\\\\\\": [\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v7.0.2.0\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-08-09T06:47Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-08-09T06:47Z\\\\\\"\\\\n                        },\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v7.0.1.8\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-05-25T06:56Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-05-25T06:56Z\\\\\\"\\\\n                        }\\\\n                    ]\\\\n                }\\\\n]\\\\n\\",\\n    \\"Serverless\\": \\"\\\\\\"Serverless\\\\\\": [\\\\n                {\\\\n                    \\\\\\"engineVersion\\\\\\": \\\\\\"6.0\\\\\\",\\\\n                    \\\\\\"versionInfos\\\\\\": [\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v2.0.0.5\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-05-28T07:48Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-05-28T07:48Z\\\\\\"\\\\n                        },\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v2.0.0.1\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-03-27T12:44Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-03-27T12:44Z\\\\\\"\\\\n                        },\\\\n                        {\\\\n                            \\\\\\"kernelVersion\\\\\\": \\\\\\"v1.0.5.1\\\\\\",\\\\n                            \\\\\\"releaseDate\\\\\\": \\\\\\"2023-02-22T11:39Z\\\\\\",\\\\n                            \\\\\\"expirationDate\\\\\\": \\\\\\"2026-02-22T11:39Z\\\\\\"\\\\n                        }\\\\n                    ]\\\\n                }\\\\n]\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询内核版本信息',
    ),
    'DescribeSupportFeatures' => 
    array (
      'summary' => '查询当前AnalyticDB PostgreSQL版实例支持的功能特性。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '63E5BE60-91FF-57F1-B873-7F1EB734B93D_2724',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'SupportFeatureList' => 
              array (
                'description' => '当前实例支持的功能特性。目前仅支持查询如下功能特性：

- sample_data：样本数据集，更多介绍，请参见[样本数据集](~~452278~~)。
- diagnose_and_optimize：诊断与优化，更多介绍，请参见[诊断与优化](~~323453~~)。',
                'type' => 'string',
                'example' => '[ "sample_data", "diagnose_and_optimize" ]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63E5BE60-91FF-57F1-B873-7F1EB734B93D_2724\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"SupportFeatureList\\": \\"[ \\\\\\"sample_data\\\\\\", \\\\\\"diagnose_and_optimize\\\\\\" ]\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSupportFeaturesResponse>\\n    <RequestId>63E5BE60-91FF-57F1-B873-7F1EB734B93D_2724</RequestId>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    <SupportFeatureList>sample_data</SupportFeatureList>\\n    <SupportFeatureList>diagnose_and_optimize</SupportFeatureList>\\n</DescribeSupportFeaturesResponse>","errorExample":""}]',
      'title' => '查询实例支持的功能特性',
    ),
    'DescribeModifyParameterLog' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 您可以调用[DescribeDBInstances](~~196830~~)接口查看目标地域下所有实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-9dpm71ov2wxxq****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-01-03T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间），且大于查询开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-01-03T20:00:00Z',
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
                'example' => '4FA1F1D1-50A6-4F60-9A78-5752F2076A53',
              ),
              'Changelogs' => 
              array (
                'description' => '变更历史。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '变更历史。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterValueAfter' => 
                    array (
                      'description' => '修改前的参数。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'ParameterName' => 
                    array (
                      'description' => '参数名。',
                      'type' => 'string',
                      'example' => 'testkey',
                    ),
                    'EffectTime' => 
                    array (
                      'description' => '生效时间。',
                      'type' => 'string',
                      'example' => '2023-01-03T17:00:00Z',
                    ),
                    'ParameterValueBefore' => 
                    array (
                      'description' => '修改后的参数。',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'ParameterValid' => 
                    array (
                      'description' => '是否生效。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4FA1F1D1-50A6-4F60-9A78-5752F2076A53\\",\\n  \\"Changelogs\\": [\\n    {\\n      \\"ParameterValueAfter\\": \\"100\\",\\n      \\"ParameterName\\": \\"testkey\\",\\n      \\"EffectTime\\": \\"2023-01-03T17:00:00Z\\",\\n      \\"ParameterValueBefore\\": \\"200\\",\\n      \\"ParameterValid\\": \\"true\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询参数修改历史',
      'summary' => '获取AnalyticDB PostgreSQL版实例的参数修改历史。',
    ),
    'DescribeParameters' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
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
              'Parameters' => 
              array (
                'description' => '配置参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IsChangeableConfig' => 
                    array (
                      'description' => '配置参数是否可修改。取值说明：

- **true**：可修改。
- **false**：不可修改。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'ForceRestartInstance' => 
                    array (
                      'description' => '是否需要重启实例。取值说明：

- **true**：需要重启实例。
- **false**：不需要重启实例。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'OptionalRange' => 
                    array (
                      'description' => '配置参数的取值范围。',
                      'type' => 'string',
                      'example' => '[0-2147483647]',
                    ),
                    'ParameterName' => 
                    array (
                      'description' => '配置参数名称。',
                      'type' => 'string',
                      'example' => 'statement_timeout',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '配置参数默认值。',
                      'type' => 'string',
                      'example' => '10800000',
                    ),
                    'ParameterDescription' => 
                    array (
                      'description' => '配置参数的说明。',
                      'type' => 'string',
                      'example' => 'Sets the maximum allowed duration of any statement，A value of 0 turns off the timeout.',
                    ),
                    'CurrentValue' => 
                    array (
                      'description' => '配置参数当前值。',
                      'type' => 'string',
                      'example' => '10800000',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '62506167-D284-562A-B7C2-0A**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Parameters\\": [\\n    {\\n      \\"IsChangeableConfig\\": \\"true\\",\\n      \\"ForceRestartInstance\\": \\"false\\",\\n      \\"OptionalRange\\": \\"[0-2147483647]\\",\\n      \\"ParameterName\\": \\"statement_timeout\\",\\n      \\"ParameterValue\\": \\"10800000\\",\\n      \\"ParameterDescription\\": \\"Sets the maximum allowed duration of any statement，A value of 0 turns off the timeout.\\",\\n      \\"CurrentValue\\": \\"10800000\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"62506167-D284-562A-B7C2-0A**********\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeParametersResponse>\\n    <Parameters>\\n        <OptionalRange>[0-2147483647]</OptionalRange>\\n        <ParameterValue>10800000</ParameterValue>\\n        <IsChangeableConfig>true</IsChangeableConfig>\\n        <CurrentValue>10800000</CurrentValue>\\n        <ParameterName>statement_timeout</ParameterName>\\n        <ParameterDescription>Sets the maximum allowed duration of any statement，A value of 0 turns off the timeout.</ParameterDescription>\\n        <ForceRestartInstance>false</ForceRestartInstance>\\n    </Parameters>\\n    <Parameters>\\n        <OptionalRange>[multi_write_ec|multi_write_sc|single]</OptionalRange>\\n        <ParameterValue>single</ParameterValue>\\n        <IsChangeableConfig>true</IsChangeableConfig>\\n        <CurrentValue>multi_write_ec</CurrentValue>\\n        <ParameterName>rds_master_mode</ParameterName>\\n        <ParameterDescription>Enable global strong consistency when rds_master_mode is set to multi_write_sc, and session consistency when rds_master_mode is set to multi_write_ec</ParameterDescription>\\n        <ForceRestartInstance>true</ForceRestartInstance>\\n    </Parameters>\\n    <RequestId>62506167-D284-562A-B7C2-0A**********</RequestId>\\n</DescribeParametersResponse>","errorExample":""}]',
      'title' => '获取配置参数信息',
      'summary' => '获取AnalyticDB PostgreSQL版实例的配置参数信息。',
      'description' => '本接口仅支持查看存储弹性模式和Serverless版本的AnalyticDB PostgreSQL版实例的配置参数和相关信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyParameters' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版实例的配置参数。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的参数名称和参数值。格式为`<参数名称>:<参数值>`。

您可以通过[DescribeParameters](~~208310~~)接口查看支持修改的配置参数。',
            'type' => 'string',
            'required' => true,
            'example' => '{"statement_timeout":"11800010"}',
          ),
        ),
        2 => 
        array (
          'name' => 'ForceRestartInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制重启实例。取值说明：

- **true**：强制重启。
- **false**（默认）：不强制重启。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FE698B6-6579-547C-A403-07**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3FE698B6-6579-547C-A403-07**********\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyParametersResponse>\\n    <RequestId>3FE698B6-6579-547C-A403-07**********</RequestId>\\n</ModifyParametersResponse>","errorExample":""}]',
      'title' => '修改配置参数',
      'description' => '本接口仅支持修改存储弹性模式和Serverless版本的AnalyticDB PostgreSQL版实例的配置参数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPolicy' => 
    array (
      'summary' => '查看AnalyticDB PostgreSQL版实例的备份策略。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp***************',
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
              'BackupRetentionPeriod' => 
              array (
                'description' => '数据备份保留天数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9E6B3287-A3E2-5A87-B8D8-E9**********',
              ),
              'PreferredBackupPeriod' => 
              array (
                'description' => '数据备份周期，多个取值用英文逗号（,）隔开。取值说明：

- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。',
                'type' => 'string',
                'example' => 'Wednesday,Friday',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '数据备份时间。格式：HH:mmZ-HH:mmZ（UTC时间）。',
                'type' => 'string',
                'example' => '12:00Z-13:00Z',
              ),
              'RecoveryPointPeriod' => 
              array (
                'description' => '恢复点频次。取值说明：

- **1**：每小时。
- **2**：每两小时。
- **4**：每四小时。
- **8**：每八小时。',
                'type' => 'string',
                'example' => '1',
              ),
              'EnableRecoveryPoint' => 
              array (
                'description' => '是否开启自动恢复点。取值说明：

- **true**：开启。
- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BackupRetentionPeriod\\": 7,\\n  \\"RequestId\\": \\"9E6B3287-A3E2-5A87-B8D8-E9**********\\",\\n  \\"PreferredBackupPeriod\\": \\"Wednesday,Friday\\",\\n  \\"PreferredBackupTime\\": \\"12:00Z-13:00Z\\",\\n  \\"RecoveryPointPeriod\\": \\"1\\",\\n  \\"EnableRecoveryPoint\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <PreferredBackupPeriod>Wednesday,Friday</PreferredBackupPeriod>\\n    <RequestId>9E6B3287-A3E2-5A87-B8D8-E9**********</RequestId>\\n    <PreferredBackupTime>12:00Z-13:00Z</PreferredBackupTime>\\n    <BackupRetentionPeriod>7</BackupRetentionPeriod>\\n    <EnableRecoveryPoint>true</EnableRecoveryPoint>\\n    <RecoveryPointPeriod>1</RecoveryPointPeriod>\\n</DescribeBackupPolicyResponse>","errorExample":""}]',
      'title' => '查看实例备份策略',
      'description' => '周期性备份数据可以有效防止数据丢失，通过本接口您可以查看目标存储弹性模式实例的备份策略。如需修改备份策略，请参见[ModifyBackupPolicy](~~210095~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataBackups' => 
    array (
      'summary' => '查看AnalyticDB PostgreSQL版实例的数据备份列表和可恢复点。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。如果带上BackupId，则是查询该备份详情。

> 您可以调用[DescribeDataBackups](~~210093~~)查看目标实例下的所有备份集信息，包括备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '327329803',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式： yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2011-06-01T15:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间。格式： yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2011-06-01T16:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。取值说明：

- 30
- 50
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
            'description' => '页码，取值大于0且不超过Integer的最大值。默认值：1。',
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
          'name' => 'DataType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份类型。取值说明：

- **DATA**：全量备份。
- **RESTOREPOI**：可恢复点。

如果不传，则默认返回全量备份集的记录。',
            'type' => 'string',
            'required' => false,
            'example' => 'DATA',
          ),
        ),
        7 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式。取值说明：

- Automated：系统自动备份。
- Manual：手动备份。

如果不传，则返回所有。',
            'type' => 'string',
            'required' => false,
            'example' => 'Automated',
          ),
        ),
        8 => 
        array (
          'name' => 'BackupStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集状态。取值说明：

- Success：已完成备份。
- Failed：备份失败。

如果不传，则返回所有。',
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
            'type' => 'object',
            'properties' => 
            array (
              'PageSize' => 
              array (
                'description' => '本页备份集个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3E387971-33A5-5019-AD7F-DC**********',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalBackupSize' => 
              array (
                'description' => '总备份集大小，单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1111111111',
              ),
              'Items' => 
              array (
                'description' => '备份集列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataType' => 
                    array (
                      'description' => '备份类型。取值说明：

- **DATA**：全量备份。
- **RESTOREPOI**：可恢复点。',
                      'type' => 'string',
                      'example' => 'DATA',
                    ),
                    'ConsistentTime' => 
                    array (
                      'description' => '- 全量备份：返回一致性时间点的时间戳。
- 可恢复点：返回可恢复时间点的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1576506856',
                    ),
                    'BackupStatus' => 
                    array (
                      'description' => '备份集状态。取值说明：

- **Success**：成功。
- **Failure**：失败。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'BackupStartTime' => 
                    array (
                      'description' => '备份开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-12-22T12:00:25Z',
                    ),
                    'BackupEndTime' => 
                    array (
                      'description' => '备份结束时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-12-22T12:01:43Z',
                    ),
                    'BackupEndTimeLocal' => 
                    array (
                      'description' => '本次备份结束时间（当地时间）。',
                      'type' => 'string',
                      'example' => '2021-12-22 20:00:25',
                    ),
                    'BackupSetId' => 
                    array (
                      'description' => '备份集ID。',
                      'type' => 'string',
                      'example' => '1111111111',
                    ),
                    'BaksetName' => 
                    array (
                      'description' => '恢复点名称或全量备份集名称。',
                      'type' => 'string',
                      'example' => 'adbpgbackup_555*****_20211222200019',
                    ),
                    'BackupSize' => 
                    array (
                      'description' => '备份文件大小，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2167808',
                    ),
                    'BackupMode' => 
                    array (
                      'description' => '备份模式。

全量备份取值说明：

- **Automated**：系统自动备份。
- **Manual**：手动备份。

恢复点取值说明：

- **Automated**：全量备份后的恢复点。
- **Manual**：用户手动触发的恢复点。
- **Period**：因为备份策略，定时触发的恢复点。',
                      'type' => 'string',
                      'example' => 'Automated',
                    ),
                    'BackupStartTimeLocal' => 
                    array (
                      'description' => '本次备份开始时间（当地时间）。',
                      'type' => 'string',
                      'example' => '2011-05-30 03:29:00',
                    ),
                    'DBInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'gp-bp**************-master',
                    ),
                    'BackupMethod' => 
                    array (
                      'description' => '备份方式，返回值如下：
* **Physical**：物理备份
* **Snapshot**：快照备份',
                      'type' => 'string',
                      'example' => 'Physical',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 1,\\n  \\"RequestId\\": \\"3E387971-33A5-5019-AD7F-DC**********\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"TotalBackupSize\\": 1111111111,\\n  \\"Items\\": [\\n    {\\n      \\"DataType\\": \\"DATA\\",\\n      \\"ConsistentTime\\": 1576506856,\\n      \\"BackupStatus\\": \\"Success\\",\\n      \\"BackupStartTime\\": \\"2021-12-22T12:00:25Z\\",\\n      \\"BackupEndTime\\": \\"2021-12-22T12:01:43Z\\",\\n      \\"BackupEndTimeLocal\\": \\"2021-12-22 20:00:25\\",\\n      \\"BackupSetId\\": \\"1111111111\\",\\n      \\"BaksetName\\": \\"adbpgbackup_555*****_20211222200019\\",\\n      \\"BackupSize\\": 2167808,\\n      \\"BackupMode\\": \\"Automated\\",\\n      \\"BackupStartTimeLocal\\": \\"2011-05-30 03:29:00\\",\\n      \\"DBInstanceId\\": \\"gp-bp**************-master\\",\\n      \\"BackupMethod\\": \\"Physical\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataBackupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>3E387971-33A5-5019-AD7F-DC**********</RequestId>\\n    <PageSize>1</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <BackupEndTimeLocal>2021-12-22 20:01:43</BackupEndTimeLocal>\\n        <DBInstanceId>gp-bp**************-master</DBInstanceId>\\n        <BackupEndTime>2021-12-22T12:01:43Z</BackupEndTime>\\n        <BackupMode>Automated</BackupMode>\\n        <BackupSize>504257536</BackupSize>\\n        <BackupStartTime>2021-12-22T12:00:25Z</BackupStartTime>\\n        <ConsistentTime>1640174500000</ConsistentTime>\\n        <DataType>DATA</DataType>\\n        <BaksetName>adbpgbackup_555*****_20211222200019</BaksetName>\\n        <BackupStartTimeLocal>2021-12-22 20:00:25</BackupStartTimeLocal>\\n        <BackupSetId>1111111111</BackupSetId>\\n        <BackupStatus>Success</BackupStatus>\\n    </Items>\\n</DescribeDataBackupsResponse>","errorExample":""}]',
      'title' => '查看实例的数据备份列表和可恢复点',
      'description' => '目前仅存储弹性模式实例支持查看备份列表以及备份的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLogBackups' => 
    array (
      'summary' => '查看日志备份列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式： yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-12-12T02:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间。格式：yyyy-MM-ddTHH:mmZ（UTC时间）。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-12-12T03:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值：大于0且不超过Integer的最大值。默认值：**1**。',
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
              'TotalLogSize' => 
              array (
                'description' => '符合时间范围内的总日志大小，单位为Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '386748',
              ),
              'PageSize' => 
              array (
                'description' => '本页备份集个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '24B9FCAF-2CBC-51C3-B563-F1C70D750187',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Items' => 
              array (
                'description' => '备份集列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogFileSize' => 
                    array (
                      'description' => '备份日志文件大小，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '77350',
                    ),
                    'LogTime' => 
                    array (
                      'description' => '日志时间戳。',
                      'type' => 'string',
                      'example' => '2022-12-12T02:14:26Z',
                    ),
                    'SegmentName' => 
                    array (
                      'description' => '节点名称。',
                      'type' => 'string',
                      'example' => 'segment-0',
                    ),
                    'LogFileName' => 
                    array (
                      'description' => '日志文件名（OSS路径）。',
                      'type' => 'string',
                      'example' => '000000010000000400000012',
                    ),
                    'DBInstanceId' => 
                    array (
                      'description' => '实例的Master节点ID。',
                      'type' => 'string',
                      'example' => 'gp-bp12ga6v69h86****-master',
                    ),
                    'BackupId' => 
                    array (
                      'description' => '备份集ID。',
                      'type' => 'string',
                      'example' => '12413721782',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalLogSize\\": 386748,\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"24B9FCAF-2CBC-51C3-B563-F1C70D750187\\",\\n  \\"TotalCount\\": 5,\\n  \\"Items\\": [\\n    {\\n      \\"LogFileSize\\": 77350,\\n      \\"LogTime\\": \\"2022-12-12T02:14:26Z\\",\\n      \\"SegmentName\\": \\"segment-0\\",\\n      \\"LogFileName\\": \\"000000010000000400000012\\",\\n      \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****-master\\",\\n      \\"BackupId\\": \\"12413721782\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeLogBackupsResponse>\\n    <TotalCount>5</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>24B9FCAF-2CBC-51C3-B563-F1C70D750187</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <SegmentName>segment-0</SegmentName>\\n        <DBInstanceId>gp-bp12ga6v69h86****-master</DBInstanceId>\\n        <LogTime>2022-12-12T02:14:26Z</LogTime>\\n        <LogFileSize>77350</LogFileSize>\\n        <BackupId>12413721782</BackupId>\\n        <LogFileName>000000010000000400000012</LogFileName>\\n    </Items>\\n    <TotalLogSize>386748</TotalLogSize>\\n</DescribeLogBackupsResponse>","errorExample":""}]',
      'title' => '查看日志备份列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份时间。默认值为00:00Z-01:00Z，格式：HH:mmZ-HH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '15:00Z-16:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份周期，多个取值用英文逗号（,）隔开。取值说明：

- Monday：周一。
- Tuesday：周二。
- Wednesday：周三。
- Thursday：周四。
- Friday：周五。
- Saturday：周六。
- Sunday：周日。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Tuesday，Thursday，Saturday',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份保留天数。默认7天，最大值定为7天，取值范围1~7。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
            'default' => '7',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableRecoveryPoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动打恢复点。取值说明：

- true（默认）：开启。
- false：关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'RecoveryPointPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复点频次。取值说明：

- **1**（默认）：每小时。
- **2**：每两小时。
- **4**：每四小时。
- **8**：每八小时。',
            'type' => 'string',
            'required' => false,
            'example' => '8',
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
                'example' => 'DA147739-AEAD-4417-9089-65**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA147739-AEAD-4417-9089-65**********\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>DA147739-AEAD-4417-9089-65**********</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":""}]',
      'title' => '设置实例备份策略',
      'summary' => '设置AnalyticDB PostgreSQL版实例的备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccount' => 
    array (
      'summary' => '创建AnalyticDB PostgreSQL版实例的初始账号。',
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
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称，限制如下：
- 只能包含字母，数字和下划线。
- 必须以字母开头。
- 长度不能超过63个字符.',
            'type' => 'string',
            'required' => false,
            'example' => 'test01',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '初始账号名称，限制如下：

- 由小写字母，数字，下划线组成。
- 以小写字母开头，小写字母或数字结尾。
- 不能以gp开头。
- 长度为2~16个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc02',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '初始账户的密码。

- 由大写字母、小写字母、数字、特殊字符其中三种及以上组成。
- 支持的特殊字符：`!@#$%^&*()_+-=`
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'Pw123456',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '初始账户的描述。要求如下：
- 以中文、英文字母开头。
- 不能以`http://`或`https://`开头。
- 可以包含中文、英文字符、“_”、“ -”、数字。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'testacc02',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
                'example' => 'D4D4BE8A-DD46-440A-BFCD-EE**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D4D4BE8A-DD46-440A-BFCD-EE**********\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>D4D4BE8A-DD46-440A-BFCD-EE**********</RequestId>\\n</CreateAccountResponse>","errorExample":""}]',
      'title' => '创建初始账号',
      'description' => '- 使用AnalyticDB PostgreSQL版实例前，需要创建初始账号。
- 本接口仅支持创建初始账号，如需创建其他账号，请参见[创建数据库账号](~~50206~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAccounts' => 
    array (
      'summary' => '查询AnalyticDB PostgreSQL版数据库的账号信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuser',
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
                'example' => '7565770E-7C45-462D-BA4A-8A5396F2CAD1',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceAccount' => 
                  array (
                    'description' => '数据库账号的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountStatus' => 
                        array (
                          'description' => '数据库账号的状态，取值说明：

- **0**：创建中。
- **1**：使用中。
- **3**：删除中。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'AccountDescription' => 
                        array (
                          'description' => '数据库账号的描述。',
                          'type' => 'string',
                          'example' => 'testuser',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-bp***************',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '数据库账号的名称。',
                          'type' => 'string',
                          'example' => 'testuser',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7565770E-7C45-462D-BA4A-8A5396F2CAD1\\",\\n  \\"Accounts\\": {\\n    \\"DBInstanceAccount\\": [\\n      {\\n        \\"AccountStatus\\": \\"1\\",\\n        \\"AccountDescription\\": \\"testuser\\",\\n        \\"DBInstanceId\\": \\"gp-bp***************\\",\\n        \\"AccountName\\": \\"testuser\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <RequestId>7565770E-7C45-462D-BA4A-8A5396F2CAD1</RequestId>\\n    <Accounts>\\n        <AccountStatus>1</AccountStatus>\\n        <AccountDescription>testuser</AccountDescription>\\n        <DBInstanceId>gp-bp***************</DBInstanceId>\\n        <AccountName>testuser</AccountName>\\n    </Accounts>\\n</DescribeAccountsResponse>","errorExample":""}]',
      'title' => '查询账号信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDiagnosisDimensions' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例中所有数据库和用户。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'example' => '9ADCAACA-E0E8-5319-AE3B-E260E957BDF9',
              ),
              'Databases' => 
              array (
                'description' => '数据库名称。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'example' => 'acc_001',
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
                  'example' => 'acc_001',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9ADCAACA-E0E8-5319-AE3B-E260E957BDF9\\",\\n  \\"Databases\\": [\\n    \\"acc_001\\"\\n  ],\\n  \\"UserNames\\": [\\n    \\"acc_001\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisDimensionsResponse>\\n    <Databases>acc_001</Databases>\\n    <Databases>user_test</Databases>\\n    <RequestId>9ADCAACA-E0E8-5319-AE3B-E260E957BDF9</RequestId>\\n    <UserNames>acc_001</UserNames>\\n</DescribeDiagnosisDimensionsResponse>","errorExample":""}]',
      'title' => '查询所有数据库和用户',
    ),
    'ModifyAccountDescription' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'testAccout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定修改后的账号描述，要求如下：

- 以中文、英文字母开头。
- 不能以`http://`或`https://`开头。
- 可以包含中文、英文字符、“_”、“ -”、数字。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'testAccoutdescribe',
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
                'example' => '99BBBD5E-B5D8-4FC8-B8BF-FB1A0A38BBA2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"99BBBD5E-B5D8-4FC8-B8BF-FB1A0A38BBA2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\r\\n         <RequestId>99BBBD5E-B5D8-4FC8-B8BF-FB1A0A38BBA2</RequestId>\\r\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
      'title' => '修改账号备注',
      'summary' => '修改数据库账号的备注信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetAccountPassword' => 
    array (
      'summary' => '重置账户密码。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-t4nf48vf15713****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testaccount_1',
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
            'example' => 'Testaccount_1',
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
                'example' => '187C80FC-75C4-477C-BBF2-A368A36D041C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"187C80FC-75C4-477C-BBF2-A368A36D041C\\"\\n}","type":"json"}]',
      'title' => '重置账号密码',
    ),
    'DescribeRoles' => 
    array (
      'summary' => '获取角色列表。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '198024',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdb4XJ12W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'RoleList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Role' => 
                  array (
                    'description' => '角色列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '角色名称',
                      'type' => 'string',
                      'example' => 'testrole',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"RoleList\\": {\\n    \\"Role\\": [\\n      \\"testrole\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取角色列表',
    ),
    'DescribeDataShareInstances' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'SearchValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索关键字，可以根据实例ID或实例描述进行过滤。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID和实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-bp***************',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D5**********',
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
                  'DBInstance' => 
                  array (
                    'description' => '实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-j',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-bp***************',
                        ),
                        'DBInstanceMode' => 
                        array (
                          'description' => '实例资源类型，取值说明：

- **Serverless**：Serverless版本。
- **StorageElasic**：存储弹性模式。
- **Classic**：存储预留模式。',
                          'type' => 'string',
                          'example' => 'Serverless',
                        ),
                        'Description' => 
                        array (
                          'description' => '实例描述。',
                          'type' => 'string',
                          'example' => 'gp-bp***************',
                        ),
                        'DataShareStatus' => 
                        array (
                          'description' => '数据共享的状态，取值说明：

- **opening**：开通中。
- **opened**：已开通。
- **closing**：关闭中。
- **closed**：已关闭。',
                          'type' => 'string',
                          'example' => 'opened',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D5**********\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"DBInstance\\": [\\n      {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n        \\"DBInstanceId\\": \\"gp-bp***************\\",\\n        \\"DBInstanceMode\\": \\"Serverless\\",\\n        \\"Description\\": \\"gp-bp***************\\",\\n        \\"DataShareStatus\\": \\"opened\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataShareInstancesResponse>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D5**********</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ZoneId>cn-hangzhou-j</ZoneId>\\n        <DBInstanceId>gp-bp***************</DBInstanceId>\\n        <DBInstanceMode>Serverless</DBInstanceMode>\\n        <Description>gp-bp***************</Description>\\n        <DataShareStatus>opened</DataShareStatus>\\n    </Items>\\n</DescribeDataShareInstancesResponse>","errorExample":""}]',
      'title' => '查看数据共享详细信息',
      'summary' => '查看数据共享的状态。',
      'description' => '目前仅Serverless实例支持数据共享功能。',
    ),
    'DescribeDataSharePerformance' => 
    array (
      'summary' => '查看数据共享的性能指标。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能参数名称，多个指标用英文半角（,）分隔，取值如下：

- **adbpg_datashare_topic_count**：共享Topic数量。
- **adbpg_datashare_data_size_mb**：数据共享数据量。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbpg_datashare_topic_count',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-03T15:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-08-03T15:10Z',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
              'EndTime' => 
              array (
                'description' => '查询结束时间。',
                'type' => 'string',
                'example' => '2022-08-03T15:10Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BBE00C04-A3E8-4114-881D-0480A72CB92E',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2022-08-03T15:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'PerformanceKeys' => 
              array (
                'description' => '数据共享性能参数值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '性能参数名称。',
                      'type' => 'string',
                      'example' => 'adbpg_datashare_topic_count',
                    ),
                    'Unit' => 
                    array (
                      'description' => '性能参数的单位。',
                      'type' => 'string',
                      'example' => 'int',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能参数集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '性能参数集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '性能参数值列表，由一个或多个值组成。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '性能参数值列表，由一个或多个值组成。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Point' => 
                                array (
                                  'description' => '性能参数值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '性能参数值。',
                                    'type' => 'string',
                                    'example' => '2022-08-03T07:01:00+08:00,  5.00',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '性能参数名称。',
                            'type' => 'string',
                            'example' => 'adbpg_datashare_topic_count',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2022-08-03T15:10Z\\",\\n  \\"RequestId\\": \\"BBE00C04-A3E8-4114-881D-0480A72CB92E\\",\\n  \\"StartTime\\": \\"2022-08-03T15:00Z\\",\\n  \\"DBClusterId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"PerformanceKeys\\": [\\n    {\\n      \\"Name\\": \\"adbpg_datashare_topic_count\\",\\n      \\"Unit\\": \\"int\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            {\\n              \\"Point\\": [\\n                \\"2022-08-03T07:01:00+08:00,  5.00\\"\\n              ]\\n            }\\n          ],\\n          \\"Name\\": \\"adbpg_datashare_topic_count\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataSharePerformanceResponse>\\n    <EndTime>2020-11-03T15:10Z</EndTime>\\n    <RequestId>BBE00C04-A3E8-4114-881D-0480A72CB92E</RequestId>\\n    <StartTime>2020-11-03T15:00Z</StartTime>\\n    <DBClusterId>gp-bp12ga6v69h86****</DBClusterId>\\n    <PerformanceKeys>\\n        <Name>adbpg_datashare_topic_count</Name>\\n        <Unit>int</Unit>\\n        <Series>\\n            <Values>\\n                <Point>2020-09-27T07:01:00+08:00,  5.00</Point>\\n            </Values>\\n            <Name>adbpg_datashare_topic_count</Name>\\n        </Series>\\n    </PerformanceKeys>\\n</DescribeDataSharePerformanceResponse>","errorExample":""}]',
      'title' => '查看数据共享的性能指标',
      'description' => '目前仅Serverless实例支持数据共享功能。',
    ),
    'SetDataShareInstance' => 
    array (
      'summary' => '将AnalyticDB PostgreSQL版实例加入数据共享或从数据共享中移除。',
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在数据共享中添加或移除实例。取值说明：

- **add**：将实例添加至数据共享中。
- **remove**：将实例从数据共享中移除。',
            'type' => 'string',
            'required' => true,
            'example' => 'add',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Serverless版本的实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gp-bp***************',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D5**********',
              ),
              'Status' => 
              array (
                'description' => '状态。取值说明：

- **success**：成功。
- **failed**：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'error message',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D5**********\\",\\n  \\"Status\\": \\"success\\",\\n  \\"ErrMessage\\": \\"error message\\"\\n}","errorExample":""},{"type":"xml","example":"<SetDataShareInstanceResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D5**********</RequestId>\\n    <Status>success</Status>\\n</SetDataShareInstanceResponse>","errorExample":""}]',
      'title' => '将实例加入或移出数据共享',
      'description' => '仅Serverless实例支持数据共享功能。',
    ),
    'DescribeDBClusterPerformance' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能参数名称，多个指标用英文半角（,）分隔，具体信息，请参见[性能参数表](~~86943~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbpg_conn_count',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为`YYYY-MM-DDTHH:mmZ`。

> 仅支持查询30天内的监控信息。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-11-03T15:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为`YYYY-MM-DDTHH:mmZ`。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过7天。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-11-03T15:10Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Nodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于查询一个或多个节点的监控指标，多个节点名称间使用英文逗号（,）分隔，例如`master-10******1,master-10******2`。您可以调用[DescribeDBClusterNode](~~390136~~)接口获取节点名称。


您也可以根据监控指标的高低筛选节点，取值说明：
- **top10**：监控指标最高的十个节点。
- **top20**：监控指标最高的二十个节点。
- **bottom10**：监控指标最低的十个节点。
- **bottom20**：监控指标最低的二十个节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'top10',
          ),
        ),
        5 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。取值说明：

- **master**：Master节点。
- **segment**：Segment节点。

> 如果不传入该参数，则返回所有节点的监控指标。',
            'type' => 'string',
            'required' => false,
            'example' => 'master',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testgroup',
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
              'PerformanceKeys' => 
              array (
                'description' => '实例性能参数值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能参数集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '性能参数值，每个值对应一个采集时间点。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Point' => 
                                array (
                                  'description' => '性能参数值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '性能监控具体信息，由时间和性能参数值构成。',
                                    'type' => 'string',
                                    'example' => '["2021-11-03T15:00:00+08:00","5.84"]',
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'Role' => 
                          array (
                            'description' => '节点的角色，取值说明：

- **master**：主节点。
- **standby**：备节点。
- **segment**：计算节点。',
                            'type' => 'string',
                            'example' => 'standby',
                          ),
                          'Name' => 
                          array (
                            'description' => '计算节点或计算组名称。',
                            'type' => 'string',
                            'example' => 'standby-********-cpu',
                          ),
                        ),
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '性能参数名称，具体信息，请参见[性能参数表](~~86943~~)。',
                      'type' => 'string',
                      'example' => 'adbpg_group_cpu_used_percent',
                    ),
                  ),
                ),
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间（UTC时间），格式为`YYYY-MM-DDTHH:mmZ`。',
                'type' => 'string',
                'example' => '2021-11-03T15:10Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8E8990F0-C81E-4C94-8F51-5F**********',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间（UTC时间），格式为`YYYY-MM-DDTHH:mmZ`。',
                'type' => 'string',
                'example' => '2021-11-03T15:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformanceKeys\\": [\\n    {\\n      \\"Unit\\": \\"%\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            {\\n              \\"Point\\": [\\n                \\"[\\\\\\"2021-11-03T15:00:00+08:00\\\\\\",\\\\\\"5.84\\\\\\"]\\"\\n              ]\\n            }\\n          ],\\n          \\"Role\\": \\"standby\\",\\n          \\"Name\\": \\"standby-********-cpu\\"\\n        }\\n      ],\\n      \\"Name\\": \\"adbpg_group_cpu_used_percent\\"\\n    }\\n  ],\\n  \\"EndTime\\": \\"2021-11-03T15:10Z\\",\\n  \\"RequestId\\": \\"8E8990F0-C81E-4C94-8F51-5F**********\\",\\n  \\"StartTime\\": \\"2021-11-03T15:00Z\\",\\n  \\"DBClusterId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n    <PerformanceKeys>\\n        <Series>\\n            <Role>master</Role>\\n            <Values>\\n                <Point>2021-11-03T15:00:00+08:00</Point>\\n                <Point>5.84</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:01:00+08:00</Point>\\n                <Point>5.31</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:02:00+08:00</Point>\\n                <Point>5.28</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:03:00+08:00</Point>\\n                <Point>5.27</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:04:00+08:00</Point>\\n                <Point>5.63</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:05:00+08:00</Point>\\n                <Point>5.44</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:06:00+08:00</Point>\\n                <Point>5.27</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:07:00+08:00</Point>\\n                <Point>5.27</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:08:00+08:00</Point>\\n                <Point>5.96</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:09:00+08:00</Point>\\n                <Point>6.51</Point>\\n            </Values>\\n            <Name>master-********-cpu</Name>\\n        </Series>\\n        <Series>\\n            <Role>standby</Role>\\n            <Values>\\n                <Point>2021-11-03T15:00:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:01:00+08:00</Point>\\n                <Point>0</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:02:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:03:00+08:00</Point>\\n                <Point>0</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:04:00+08:00</Point>\\n                <Point>0</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:05:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:06:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:07:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:08:00+08:00</Point>\\n                <Point>0</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:09:00+08:00</Point>\\n                <Point>0.01</Point>\\n            </Values>\\n            <Name>standby-********-cpu</Name>\\n        </Series>\\n        <Series>\\n            <Role>segment</Role>\\n            <Values>\\n                <Point>2021-11-03T15:00:00+08:00</Point>\\n                <Point>0.13</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:01:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:02:00+08:00</Point>\\n                <Point>0.14</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:03:00+08:00</Point>\\n                <Point>0.13</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:04:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:05:00+08:00</Point>\\n                <Point>0.14</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:06:00+08:00</Point>\\n                <Point>0.16</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:07:00+08:00</Point>\\n                <Point>0.16</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:08:00+08:00</Point>\\n                <Point>0.16</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:09:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Name>compute-node-********-cpu</Name>\\n        </Series>\\n        <Series>\\n            <Role>segment</Role>\\n            <Values>\\n                <Point>2021-11-03T15:00:00+08:00</Point>\\n                <Point>0.15</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:01:00+08:00</Point>\\n                <Point>0.13</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:02:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:03:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:04:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:05:00+08:00</Point>\\n                <Point>0.13</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:06:00+08:00</Point>\\n                <Point>0.15</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:07:00+08:00</Point>\\n                <Point>0.17</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:08:00+08:00</Point>\\n                <Point>0.15</Point>\\n            </Values>\\n            <Values>\\n                <Point>2021-11-03T15:09:00+08:00</Point>\\n                <Point>0.12</Point>\\n            </Values>\\n            <Name>compute-node-********-cpu</Name>\\n        </Series>\\n        <Unit>%</Unit>\\n        <Name>adbpg_group_cpu_used_percent</Name>\\n    </PerformanceKeys>\\n    <RequestId>8E8990F0-C81E-4C94-8F51-5F**********</RequestId>\\n    <EndTime>2021-11-03T07:10Z</EndTime>\\n    <DBClusterId>gp-bp12ga6v69h86****</DBClusterId>\\n    <StartTime>2021-11-03T07:00Z</StartTime>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
      'title' => '查看实例性能数据',
      'summary' => '查看AnalyticDB PostgreSQL版实例在指定时间段的性能监控。',
      'description' => '仅支持查询30天内的监控信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceDataBloat' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例的数据膨胀情况。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '表数量，该数值除以分页大小等于总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '数据膨胀详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Sequence' => 
                    array (
                      'description' => '序号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => 'Schema名称。',
                      'type' => 'string',
                      'example' => 'schema1',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'tab1',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '表存储类型，取值说明：

- **Heap Table**: 堆表。
- **Append-Only Heap Table**：Append-Only堆表。
- **Append-Only Columnar Table**：列存表。',
                      'type' => 'string',
                      'example' => 'Heap Table',
                    ),
                    'ExpectTableSize' => 
                    array (
                      'description' => '期望表大小。

期望表大小为系统判断没有膨胀情况下的表大小。',
                      'type' => 'string',
                      'example' => '1MB',
                    ),
                    'RealTableSize' => 
                    array (
                      'description' => '实际表大小。',
                      'type' => 'string',
                      'example' => '1.2MB',
                    ),
                    'BloatSize' => 
                    array (
                      'description' => '膨胀表的大小，为可释放的空间量。',
                      'type' => 'string',
                      'example' => '0.2MB',
                    ),
                    'BloatCeoff' => 
                    array (
                      'description' => '数据膨胀的系数，膨胀系数计算公式如下：

系统统计的死行数/系统统计的活跃行数。',
                      'type' => 'string',
                      'example' => '1.03',
                    ),
                    'SuggestedAction' => 
                    array (
                      'description' => '暂不返回该参数。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'TimeLastVacuumed' => 
                    array (
                      'description' => '上次VACUUM表的时间（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-08-08T16:00:00Z',
                    ),
                    'TimeLastUpdated' => 
                    array (
                      'description' => '上次更新（DELETE、INSERT或UPDATE操作）表的时间。',
                      'type' => 'string',
                      'example' => '2022-08-08T20:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Sequence\\": 1,\\n      \\"DatabaseName\\": \\"adbtest\\",\\n      \\"SchemaName\\": \\"schema1\\",\\n      \\"TableName\\": \\"tab1\\",\\n      \\"StorageType\\": \\"Heap Table\\",\\n      \\"ExpectTableSize\\": \\"1MB\\",\\n      \\"RealTableSize\\": \\"1.2MB\\",\\n      \\"BloatSize\\": \\"0.2MB\\",\\n      \\"BloatCeoff\\": \\"1.03\\",\\n      \\"SuggestedAction\\": \\"null\\",\\n      \\"TimeLastVacuumed\\": \\"2022-08-08T16:00:00Z\\",\\n      \\"TimeLastUpdated\\": \\"2022-08-08T20:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceDataBloatResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Sequence>1</Sequence>\\n        <DatabaseName>adbtest</DatabaseName>\\n        <SchemaName>schema1</SchemaName>\\n        <TableName>tab1</TableName>\\n        <StorageType>Heap</StorageType>\\n        <ExpectTableSize>1MB</ExpectTableSize>\\n        <RealTableSize>1.2MB</RealTableSize>\\n        <BloatSize>0.2MB</BloatSize>\\n        <BloatCeoff>1.03</BloatCeoff>\\n        <TimeLastVacuumed>2022-08-08T16:00:00Z</TimeLastVacuumed>\\n        <TimeLastUpdated>2022-08-08T20:00:00Z</TimeLastUpdated>\\n    </Items>\\n</DescribeDBInstanceDataBloatResponse>","errorExample":""}]',
      'title' => '查看数据膨胀相关信息',
      'description' => '本接口用于查看存储弹性模式的AnalyticDB PostgreSQL版实例的数据膨胀状态，实例内核小版本需为V6.3.10.1及以上，如何查看和升级内核小版本，请参见查看[内核小版本](~~277424~~)和[版本升级](~~139271~~)。',
    ),
    'DescribeDBInstanceDataSkew' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例的数据倾斜情况。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '数据倾斜详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Sequence' => 
                    array (
                      'description' => '序号，根据数据倾斜情况由大到小进行排序。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DatabaseName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => 'Schema名称。',
                      'type' => 'string',
                      'example' => 'schema1',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'tab1',
                    ),
                    'Owner' => 
                    array (
                      'description' => '表的拥有者。',
                      'type' => 'string',
                      'example' => 'adbpguser',
                    ),
                    'TableSize' => 
                    array (
                      'description' => '表的总行数。',
                      'type' => 'string',
                      'example' => '100000',
                    ),
                    'TableSkew' => 
                    array (
                      'description' => '表的倾斜度百分比，取值范围为0~100，单位为%。值越大表示倾斜的越厉害，值越小越有利于数据库的查询性能，0表示没有倾斜。',
                      'type' => 'string',
                      'example' => '10.23',
                    ),
                    'DistributeKey' => 
                    array (
                      'description' => '表的分布键。',
                      'type' => 'string',
                      'example' => 'ItemId',
                    ),
                    'TimeLastUpdated' => 
                    array (
                      'description' => '上次更新（DELETE、INSERT或UPDATE操作）表的时间。',
                      'type' => 'string',
                      'example' => '2020-09-08T20:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Sequence\\": 1,\\n      \\"DatabaseName\\": \\"adbtest\\",\\n      \\"SchemaName\\": \\"schema1\\",\\n      \\"TableName\\": \\"tab1\\",\\n      \\"Owner\\": \\"adbpguser\\",\\n      \\"TableSize\\": \\"100000\\",\\n      \\"TableSkew\\": \\"10.23\\",\\n      \\"DistributeKey\\": \\"ItemId\\",\\n      \\"TimeLastUpdated\\": \\"2020-09-08T20:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceDataSkewResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>100</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Sequence>1</Sequence>\\n        <DatabaseName>adbtest</DatabaseName>\\n        <SchemaName>schema1</SchemaName>\\n        <TableName>tab1</TableName>\\n        <Owner>adbpguser</Owner>\\n        <TableSize>100000</TableSize>\\n        <TableSkew>10.23</TableSkew>\\n        <DistributeKey>ItemId</DistributeKey>\\n        <TimeLastUpdated>2020-09-08T20:00:00Z</TimeLastUpdated>\\n    </Items>\\n</DescribeDBInstanceDataSkewResponse>","errorExample":""}]',
      'title' => '查看数据倾斜的相关信息',
      'description' => '数据倾斜会影响数据库的运行速度，AnalyticDB PostgreSQL版实例提供了DescribeDBInstanceDataSkew接口帮助您查看实例的数据倾斜情况，便于您及时消除数据倾斜。',
    ),
    'DescribeDBInstanceDiagnosisSummary' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StartStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点运行状态，取值如下：

- **UP**：节点运行中。
- **DOWN**：节点故障。

如果不填，则返回所有运行状态的信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'UP',
          ),
        ),
        4 => 
        array (
          'name' => 'SyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点同步状态，取值如下：

- **synced**：已同步。
- **notSyncing**：未同步。

如果不填，则返回所有同步状态的信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'synced',
          ),
        ),
        5 => 
        array (
          'name' => 'RolePreferd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的角色状态，即是否发生主备切换，取值如下：

- **normal**：角色状态正常，即未发生主备切换。
- **reverse**：角色反转，即发生了主备切换。',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
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
                'example' => '070534EC-78D5-5519-83CC-E7B1A9213483',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '6',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '实例节点详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Hostname' => 
                    array (
                      'description' => '节点名称。',
                      'type' => 'string',
                      'example' => 'gp-t4np568qe9710****-master-100984919',
                    ),
                    'NodeAddress' => 
                    array (
                      'description' => '节点的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'NodeType' => 
                    array (
                      'description' => '节点类型，取值如下：

- **master**：协调节点。
- **slave**：备协调节点。
- **segment**：计算节点。',
                      'type' => 'string',
                      'example' => 'master',
                    ),
                    'NodeName' => 
                    array (
                      'description' => '节点所在的宿主名。',
                      'type' => 'string',
                      'example' => 'ap-southeast-1.i-t4n4c4ryr0yr441d****',
                    ),
                    'NodePort' => 
                    array (
                      'description' => '节点的端口号。',
                      'type' => 'string',
                      'example' => '3000',
                    ),
                    'NodeID' => 
                    array (
                      'description' => '节点ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'NodeStatus' => 
                    array (
                      'description' => '节点运行状态，取值如下：

- **UP**：节点运行中。
- **DOWN**：节点故障。',
                      'type' => 'string',
                      'example' => 'UP',
                    ),
                    'NodeRole' => 
                    array (
                      'description' => '节点当前所属角色，取值如下：

- **primary**：主节点。
- **mirror**：副本节点。',
                      'type' => 'string',
                      'example' => 'primary',
                    ),
                    'NodePreferredRole' => 
                    array (
                      'description' => '节点最初所属角色，取值如下：

- **primary**：主节点。
- **mirror**：副本节点。

如果该参数值与**NodeRole**参数的值一致，表示没有发生过角色反转（主备切换）；如果该参数值与**NodeRole**参数的值不一致，表示发生过角色反转。',
                      'type' => 'string',
                      'example' => 'primary',
                    ),
                    'NodeReplicationMode' => 
                    array (
                      'description' => '节点数据同步状态，取值如下：

- **Synced**：已同步。
- **Not Syncing**：未同步。
- **No sync required**：无需同步，仅协调节点会出现该模式。',
                      'type' => 'string',
                      'example' => 'Synced',
                    ),
                    'NodeCID' => 
                    array (
                      'description' => '分组ID。',
                      'type' => 'string',
                      'example' => '-1',
                    ),
                  ),
                ),
              ),
              'MasterStatusInfo' => 
              array (
                'description' => '协调节点状态统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'NormalNodeNum' => 
                  array (
                    'description' => '正常状态节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'ExceptionNodeNum' => 
                  array (
                    'description' => '异常状态节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'NotSyncingNodeNum' => 
                  array (
                    'description' => '未同步节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'SyncedNodeNum' => 
                  array (
                    'description' => '已同步节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PreferredNodeNum' => 
                  array (
                    'description' => '正常角色节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'NotPreferredNodeNum' => 
                  array (
                    'description' => '主从切换角色节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
              'SegmentStatusInfo' => 
              array (
                'description' => '计算节点状态统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'NormalNodeNum' => 
                  array (
                    'description' => '正常状态节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'ExceptionNodeNum' => 
                  array (
                    'description' => '异常状态节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'NotSyncingNodeNum' => 
                  array (
                    'description' => '未同步节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'SyncedNodeNum' => 
                  array (
                    'description' => '已同步节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'PreferredNodeNum' => 
                  array (
                    'description' => '正常角色节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'NotPreferredNodeNum' => 
                  array (
                    'description' => '主从切换角色节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"070534EC-78D5-5519-83CC-E7B1A9213483\\",\\n  \\"TotalCount\\": \\"6\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": [\\n    {\\n      \\"Hostname\\": \\"gp-t4np568qe9710****-master-100984919\\",\\n      \\"NodeAddress\\": \\"192.168.XX.XX\\",\\n      \\"NodeType\\": \\"master\\",\\n      \\"NodeName\\": \\"ap-southeast-1.i-t4n4c4ryr0yr441d****\\",\\n      \\"NodePort\\": \\"3000\\",\\n      \\"NodeID\\": \\"1\\",\\n      \\"NodeStatus\\": \\"UP\\",\\n      \\"NodeRole\\": \\"primary\\",\\n      \\"NodePreferredRole\\": \\"primary\\",\\n      \\"NodeReplicationMode\\": \\"Synced\\",\\n      \\"NodeCID\\": \\"-1\\"\\n    }\\n  ],\\n  \\"MasterStatusInfo\\": {\\n    \\"NormalNodeNum\\": 2,\\n    \\"ExceptionNodeNum\\": 0,\\n    \\"NotSyncingNodeNum\\": 0,\\n    \\"SyncedNodeNum\\": 1,\\n    \\"PreferredNodeNum\\": 2,\\n    \\"NotPreferredNodeNum\\": 0\\n  },\\n  \\"SegmentStatusInfo\\": {\\n    \\"NormalNodeNum\\": 4,\\n    \\"ExceptionNodeNum\\": 0,\\n    \\"NotSyncingNodeNum\\": 4,\\n    \\"SyncedNodeNum\\": 0,\\n    \\"PreferredNodeNum\\": 4,\\n    \\"NotPreferredNodeNum\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceDiagnosisSummaryResponse>\\n    <SegmentStatusInfo>\\n        <NormalNodeNum>4</NormalNodeNum>\\n        <ExceptionNodeNum>0</ExceptionNodeNum>\\n        <PreferredNodeNum>4</PreferredNodeNum>\\n        <SyncedNodeNum>0</SyncedNodeNum>\\n        <NotSyncingNodeNum>4</NotSyncingNodeNum>\\n        <NotPreferredNodeNum>0</NotPreferredNodeNum>\\n    </SegmentStatusInfo>\\n    <TotalCount>6</TotalCount>\\n    <RequestId>070534EC-78D5-5519-83CC-E7B1A9213483</RequestId>\\n    <MasterStatusInfo>\\n        <NormalNodeNum>2</NormalNodeNum>\\n        <PreferredNodeNum>2</PreferredNodeNum>\\n        <SyncedNodeNum>1</SyncedNodeNum>\\n        <NotSyncingNodeNum>0</NotSyncingNodeNum>\\n        <NotPreferredNodeNum>0</NotPreferredNodeNum>\\n    </MasterStatusInfo>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4n4c4ryr0yr441d****</NodeName>\\n        <NodeType>master</NodeType>\\n        <Hostname>gp-t4np568qe9710****-master-100984919</Hostname>\\n        <NodeID>1</NodeID>\\n        <NodeReplicationMode>No sync required</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>3000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>-1</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4n3owiwk6kl7l73****</NodeName>\\n        <NodeType>secondary_master</NodeType>\\n        <Hostname>192.168.XX.XX</Hostname>\\n        <NodeID>4</NodeID>\\n        <NodeReplicationMode>Synced</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>3000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>-2</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4naykbl8y0a6rsx****</NodeName>\\n        <NodeType>segment</NodeType>\\n        <Hostname>gp-t4np568qe9710****-segment-100984921</Hostname>\\n        <NodeID>2</NodeID>\\n        <NodeReplicationMode>Not Syncing</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>4000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>0</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4n01qvc3uipy7cx****</NodeName>\\n        <NodeType>segment</NodeType>\\n        <Hostname>gp-t4np568qe9710****-segment-100984920</Hostname>\\n        <NodeID>3</NodeID>\\n        <NodeReplicationMode>Not Syncing</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>4000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>1</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4n74iakzw9e26c9****</NodeName>\\n        <NodeType>segment</NodeType>\\n        <Hostname>192.168.XX.XX</Hostname>\\n        <NodeID>5</NodeID>\\n        <NodeReplicationMode>Not Syncing</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>4000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>2</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n    <Items>\\n        <NodeRole>primary</NodeRole>\\n        <NodeName>ap-southeast-1.i-t4nfjsxiyfu3yzaw****</NodeName>\\n        <NodeType>segment</NodeType>\\n        <Hostname>192.168.XX.XX</Hostname>\\n        <NodeID>6</NodeID>\\n        <NodeReplicationMode>Not Syncing</NodeReplicationMode>\\n        <NodeAddress>192.168.XX.XX</NodeAddress>\\n        <NodePort>4000</NodePort>\\n        <NodePreferredRole>primary</NodePreferredRole>\\n        <NodeCID>3</NodeCID>\\n        <NodeStatus>UP</NodeStatus>\\n    </Items>\\n</DescribeDBInstanceDiagnosisSummaryResponse>","errorExample":""}]',
      'title' => '查看节点详情',
      'summary' => '获取AnalyticDB PostgreSQL版实例的节点详情。',
      'description' => '本接口用于查看AnalyticDB PostgreSQL版实例的协调节点与计算节点分布与状态。',
    ),
    'DescribeDBInstanceIndexUsage' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例中索引的使用情况。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '索引使用详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DatabaseName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => 'Schema名称。',
                      'type' => 'string',
                      'example' => 'schema1',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'tab1_ptr_2010',
                    ),
                    'IsPartitionTable' => 
                    array (
                      'description' => '是否是分区表，取值如下：

- **true**：是分区表。
- **false**：不是分区表。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ParentTableName' => 
                    array (
                      'description' => '父表名。',
                      'type' => 'string',
                      'example' => 'tab1',
                    ),
                    'IndexName' => 
                    array (
                      'description' => '索引名称。',
                      'type' => 'string',
                      'example' => 'idx1',
                    ),
                    'IndexSize' => 
                    array (
                      'description' => '索引大小，单位为Byte。',
                      'type' => 'string',
                      'example' => '10000',
                    ),
                    'IndexScanTimes' => 
                    array (
                      'description' => '索引被扫描次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50000',
                    ),
                    'IndexDef' => 
                    array (
                      'description' => '索引的定义。',
                      'type' => 'string',
                      'example' => 'CREATE INDEX idx1 ON schema1.tab1_ptr_2010',
                    ),
                    'TimeLastUpdated' => 
                    array (
                      'description' => '上次更新（DELETE、INSERT或UPDATE操作）表的时间。',
                      'type' => 'string',
                      'example' => '2022-08-08T20:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"DatabaseName\\": \\"adbtest\\",\\n      \\"SchemaName\\": \\"schema1\\",\\n      \\"TableName\\": \\"tab1_ptr_2010\\",\\n      \\"IsPartitionTable\\": true,\\n      \\"ParentTableName\\": \\"tab1\\",\\n      \\"IndexName\\": \\"idx1\\",\\n      \\"IndexSize\\": \\"10000\\",\\n      \\"IndexScanTimes\\": 50000,\\n      \\"IndexDef\\": \\"CREATE INDEX idx1 ON schema1.tab1_ptr_2010\\",\\n      \\"TimeLastUpdated\\": \\"2022-08-08T20:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceIndexUsageResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DatabaseName>adbtest</DatabaseName>\\n        <SchemaName>schema1</SchemaName>\\n        <TableName>tab1_ptr_2010</TableName>\\n        <IsPartitionTable>true</IsPartitionTable>\\n        <ParentTableName>tab1</ParentTableName>\\n        <IndexName>idx1</IndexName>\\n        <IndexSize>10000</IndexSize>\\n        <IndexScanTimes>50000</IndexScanTimes>\\n        <IndexDef>CREATE INDEX idx1 ON schema1.tab1_ptr_2010</IndexDef>\\n        <TimeLastUpdated>2022-08-08T20:00:00Z</TimeLastUpdated>\\n    </Items>\\n</DescribeDBInstanceIndexUsageResponse>","errorExample":""}]',
      'title' => '查看索引的使用情况',
      'description' => '合理的使用索引可以提升数据库的查询速度，本接口用于查看AnalyticDB PostgreSQL版实例的索引使用情况。

目前该功能仅支持存储弹性模式实例，且内核版本为V6.3.10.1及以上版本。如何查看和升级内核小版本，请参见[查看内核小版本](~~277424~~)和[版本升级](~~139271~~)。',
    ),
    'DescribeDBInstancePerformance' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，该实例需为存储预留模式实例。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能指标，多个指标用英文半角“,”分隔，见[性能参数表](~~86943~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'CpuUsage,MemoryUsage,Gpdb_SpaceUsage,Gpdb_IOPS,Gpdb_session',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-07-08T03:47Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-07-09T03:47Z',
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
                'description' => '查询结束时间。',
                'type' => 'string',
                'example' => '2022-07-09T03:47Z',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2022-07-08T03:47Z',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'gpdb',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5E85244A-AB47-46A3-A3AD-5F307DCB407E',
              ),
              'PerformanceKeys' => 
              array (
                'description' => '实例性能参数值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数组格式：{perf1, perf2, perf3, …}。',
                  'type' => 'string',
                  'example' => ' { "Key": "MemoryUsage",  "GroupValues": [{ "Name": "7198315-1530522046144-1", "Values": "" }, { "Name": "7198315-1530522046144-0",  "Values": "" }, {"Values": "",  "Name": "master" } ],  "Unit": "%",  "ValueFormat": "mem_usage"}',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2022-07-09T03:47Z\\",\\n  \\"StartTime\\": \\"2022-07-08T03:47Z\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"Engine\\": \\"gpdb\\",\\n  \\"RequestId\\": \\"5E85244A-AB47-46A3-A3AD-5F307DCB407E\\",\\n  \\"PerformanceKeys\\": [\\n    \\" { \\\\\\"Key\\\\\\": \\\\\\"MemoryUsage\\\\\\",  \\\\\\"GroupValues\\\\\\": [{ \\\\\\"Name\\\\\\": \\\\\\"7198315-1530522046144-1\\\\\\", \\\\\\"Values\\\\\\": \\\\\\"\\\\\\" }, { \\\\\\"Name\\\\\\": \\\\\\"7198315-1530522046144-0\\\\\\",  \\\\\\"Values\\\\\\": \\\\\\"\\\\\\" }, {\\\\\\"Values\\\\\\": \\\\\\"\\\\\\",  \\\\\\"Name\\\\\\": \\\\\\"master\\\\\\" } ],  \\\\\\"Unit\\\\\\": \\\\\\"%\\\\\\",  \\\\\\"ValueFormat\\\\\\": \\\\\\"mem_usage\\\\\\"}\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancePerformanceResponse>\\n    <EndTime>2022-07-09T03:47Z</EndTime>\\n    <StartTime>2022-07-08T03:47Z</StartTime>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    <Engine>gpdb</Engine>\\n    <RequestId>5E85244A-AB47-46A3-A3AD-5F307DCB407E</RequestId>\\n    <PerformanceKeys> { \\"Key\\": \\"MemoryUsage\\",  \\"GroupValues\\": [{ \\"Name\\": \\"7198315-1530522046144-1\\", \\"Values\\": \\"\\" }, { \\"Name\\": \\"7198315-1530522046144-0\\",  \\"Values\\": \\"\\" }, {\\"Values\\": \\"\\",  \\"Name\\": \\"master\\" } ],  \\"Unit\\": \\"%\\",  \\"ValueFormat\\": \\"mem_usage\\"}</PerformanceKeys>\\n</DescribeDBInstancePerformanceResponse>","errorExample":""}]',
      'title' => '查询指定性能参数的监控数据',
      'summary' => '查看某个AnalyticDB PostgreSQL存储预留模式实例在某个时间段内指定性能参数的性能监控数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDiagnosisMonitorPerformance' => 
    array (
      'summary' => '本接口用于查看指定时间段的AnalyticDB PostgreSQL版存储弹性模式实例的SQL执行信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T06:59Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T07:59Z',
          ),
        ),
        3 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpguser',
          ),
        ),
        4 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbtest',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询过滤条件，JSON格式，取值如下：

- `{"Type":"maxCost", "Value":"100"}`：耗时最长的100个查询。
- `{"Type":"status","Value":"finished"}`：已完成的查询。
- `{"Type":"status","Value":"running"}`：运行中的查询。
- `{"Type":"cost","Min":"30","Max":"50"}`：自定义耗时查询，您可以自定义设置查询的最短耗时和最长耗时，**Min**表示最短耗时；**Max**表示最长耗时，单位为毫秒（ms）。
    - 仅设置**Min**表示查询执行耗时大于该值的查询。
    - 仅设置**Max**表示查询执行耗时小于该值的查询。
    - 设置**Min**和**Max**表示查询耗时大于等于**Min**的值且小于等于**Max**的值的查询。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Type":"maxCost", "Value":"100"}',
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
              'Performances' => 
              array (
                'description' => 'SQL查询列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QueryID' => 
                    array (
                      'description' => '查询ID，即查询的唯一标识。',
                      'type' => 'string',
                      'example' => '2022042612465401000000012903151998970',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '查询开始时间，为毫秒级UNIX时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1651877940000',
                    ),
                    'Cost' => 
                    array (
                      'description' => '查询运行的总时间，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Status' => 
                    array (
                      'description' => '查询的执行状态，取值如下：

- **running**：执行中。
- **finished**：已完成。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'adbpguser',
                    ),
                    'Database' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'PerformancesThreshold' => 
              array (
                'description' => '查询数量阈值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10000',
              ),
              'PerformancesTruncated' => 
              array (
                'description' => '查询数量是否截断，取值如下：

- **true**：截断。
- **false**：不截断。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Performances\\": [\\n    {\\n      \\"QueryID\\": \\"2022042612465401000000012903151998970\\",\\n      \\"StartTime\\": 1651877940000,\\n      \\"Cost\\": 1,\\n      \\"Status\\": \\"finished\\",\\n      \\"User\\": \\"adbpguser\\",\\n      \\"Database\\": \\"adbtest\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"PerformancesThreshold\\": 10000,\\n  \\"PerformancesTruncated\\": false\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisMonitorPerformanceResponse>\\n    <Performances>\\n        <QueryID>2022042612465401000000012903151998970</QueryID>\\n        <StartTime>1651877940000</StartTime>\\n        <Cost>1</Cost>\\n        <Status>finished</Status>\\n        <User>adbpguser</User>\\n        <Database>adbtest</Database>\\n    </Performances>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <PerformancesThreshold>10000</PerformancesThreshold>\\n    <PerformancesTruncated>false</PerformancesTruncated>\\n</DescribeDiagnosisMonitorPerformanceResponse>","errorExample":""}]',
      'title' => '查看SQL执行信息',
    ),
    'DescribeDiagnosisRecords' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例SQL查询列表。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T06:59Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T07:59Z',
          ),
        ),
        5 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpguser',
          ),
        ),
        6 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbtest',
          ),
        ),
        7 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询过滤条件，JSON格式，取值如下：

- `{"Type":"maxCost", "Value":"100"}`：耗时最长的100个查询。
- `{"Type":"status","Value":"finished"}`：已完成的查询。
- `{"Type":"status","Value":"running"}`：运行中的查询。
- `{"Type":"cost","Min":"30","Max":"50"}`：自定义耗时查询，您可以自定义设置查询的最短耗时和最长耗时，**Min**表示最短耗时；**Max**表示最长耗时，单位为毫秒（ms）。
    - 仅设置**Min**表示查询执行耗时大于该值的查询。
    - 仅设置**Max**表示查询执行耗时小于该值的查询。
    - 设置**Min**和**Max**表示查询耗时大于等于**Min**的值且小于等于**Max**的值的查询。',
            'type' => 'string',
            'required' => false,
            'example' => '{ "Type":"maxCost", "Value":"100" }',
          ),
        ),
        8 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        9 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数用于控制台字段排序，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
              'Items' => 
              array (
                'description' => 'SQL查询列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QueryID' => 
                    array (
                      'description' => '查询ID，即查询的唯一标识。',
                      'type' => 'string',
                      'example' => '2022042612465401000000012903151998970',
                    ),
                    'SessionID' => 
                    array (
                      'description' => '查询所属的会话ID。',
                      'type' => 'string',
                      'example' => '50',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '查询开始的时间，为毫秒级的UNIX时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1651877940000',
                    ),
                    'Duration' => 
                    array (
                      'description' => '查询运行的总时间，单位为秒（s）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Status' => 
                    array (
                      'description' => '查询的执行状态，取值如下：

- **running**：执行中。
- **finished**：已完成。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'SQLStmt' => 
                    array (
                      'description' => 'SQL语句。',
                      'type' => 'string',
                      'example' => 'SELECT * FROM t1,t2 WHERE t1.id=t2.id;',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'adbpguser',
                    ),
                    'Database' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                    'SQLTruncated' => 
                    array (
                      'description' => 'SQL语句是否截断，取值如下：

- **true**：需要截断。
- **false**：不需要截断。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'SQLTruncatedThreshold' => 
                    array (
                      'description' => 'SQL语句截断阈值，取值为字符串的字符数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5120',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"QueryID\\": \\"2022042612465401000000012903151998970\\",\\n      \\"SessionID\\": \\"50\\",\\n      \\"StartTime\\": 1651877940000,\\n      \\"Duration\\": 1,\\n      \\"Status\\": \\"finished\\",\\n      \\"SQLStmt\\": \\"SELECT * FROM t1,t2 WHERE t1.id=t2.id;\\",\\n      \\"User\\": \\"adbpguser\\",\\n      \\"Database\\": \\"adbtest\\",\\n      \\"SQLTruncated\\": false,\\n      \\"SQLTruncatedThreshold\\": 5120\\n    }\\n  ],\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 100,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisRecordsResponse>\\n    <Items>\\n        <QueryID>2022042612465401000000012903151998970</QueryID>\\n        <SessionID>50</SessionID>\\n        <StartTime>1651877940000</StartTime>\\n        <Duration>1</Duration>\\n        <Status>finished</Status>\\n        <SQLStmt>SELECT * FROM t1,t2 WHERE t1.id=t2.id;</SQLStmt>\\n        <User>adbpguser</User>\\n        <Database>adbtest</Database>\\n        <SQLTruncated>false</SQLTruncated>\\n        <SQLTruncatedThreshold>5120</SQLTruncatedThreshold>\\n    </Items>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>100</TotalCount>\\n    <PageNumber>1</PageNumber>\\n</DescribeDiagnosisRecordsResponse>","errorExample":""}]',
      'title' => '获取SQL查询列表',
    ),
    'DescribeDiagnosisSQLInfo' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例中指定查询语句的详细信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询ID，即查询的唯一标识。

> 您可以调用[DescribeDiagnosisRecords](~~450511~~)接口获取查询ID。',
            'type' => 'string',
            'required' => true,
            'example' => '71403480878****',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbtest',
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
                'example' => '425AAA6A-63E0-1929-A1CE-3D9036CBC463',
              ),
              'QueryID' => 
              array (
                'description' => '查询ID。',
                'type' => 'string',
                'example' => '71403480878****',
              ),
              'SessionID' => 
              array (
                'description' => '查询所属的会话ID。',
                'type' => 'string',
                'example' => '658****',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始的时间，为毫秒级的UNIX时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1660719602199',
              ),
              'Duration' => 
              array (
                'description' => '查询运行的总时间，单位为秒（s）。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '16',
              ),
              'SQLStmt' => 
              array (
                'description' => 'SQL语句。',
                'type' => 'string',
                'example' => 'select n_live_tup, n_live_tup + n_dead_tup, pg_relation_size(table_name), last_vacuum from pg_stat_user_tables where relid = table_name::regclass',
              ),
              'User' => 
              array (
                'description' => '用户名。',
                'type' => 'string',
                'example' => 'adbpguser',
              ),
              'Database' => 
              array (
                'description' => '数据库名称。',
                'type' => 'string',
                'example' => 'adbtest',
              ),
              'Status' => 
              array (
                'description' => 'SQL执行状态，取值说明：

- **running**：执行中。
- **finished**：执行完成。',
                'type' => 'string',
                'example' => 'finished',
              ),
              'QueryPlan' => 
              array (
                'description' => '算子信息。',
                'type' => 'string',
                'example' => '{\\"children\\":********\\"startTime\\":1660719602199}',
              ),
              'TextPlan' => 
              array (
                'description' => '查询计划信息。',
                'type' => 'string',
                'example' => '******',
              ),
              'SortedMetrics' => 
              array (
                'description' => '按照指标的排序结构。',
                'type' => 'string',
                'example' => '{\\"costSort\\":******:\\"Seq Scan-9\\",\\"value\\":0.0}]}',
              ),
              'MaxOutputRows' => 
              array (
                'description' => '最大输出行数。',
                'type' => 'string',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"425AAA6A-63E0-1929-A1CE-3D9036CBC463\\",\\n  \\"QueryID\\": \\"71403480878****\\",\\n  \\"SessionID\\": \\"658****\\",\\n  \\"StartTime\\": 1660719602199,\\n  \\"Duration\\": 16,\\n  \\"SQLStmt\\": \\"select n_live_tup, n_live_tup + n_dead_tup, pg_relation_size(table_name), last_vacuum from pg_stat_user_tables where relid = table_name::regclass\\",\\n  \\"User\\": \\"adbpguser\\",\\n  \\"Database\\": \\"adbtest\\",\\n  \\"Status\\": \\"finished\\",\\n  \\"QueryPlan\\": \\"{\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":********\\\\\\\\\\\\\\"startTime\\\\\\\\\\\\\\":1660719602199}\\",\\n  \\"TextPlan\\": \\"******\\",\\n  \\"SortedMetrics\\": \\"{\\\\\\\\\\\\\\"costSort\\\\\\\\\\\\\\":******:\\\\\\\\\\\\\\"Seq Scan-9\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":0.0}]}\\",\\n  \\"MaxOutputRows\\": \\"10\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisSQLInfoResponse>\\n    <code>200</code>\\n    <data>\\n        <Status>finished</Status>\\n        <SortedMetrics>{\\"costSort\\":******:\\"Seq Scan-9\\",\\"value\\":0.0}]}</SortedMetrics>\\n        <SQLStmt>select n_live_tup, n_live_tup + n_dead_tup, pg_relation_size(table_name), last_vacuum\\n        from pg_stat_user_tables\\n        where relid = table_name::regclass</SQLStmt>\\n        <User>adbpguser</User>\\n        <RequestId>425AAA6A-63E0-1929-A1CE-3D9036CBC463</RequestId>\\n        <QueryID>71403480878****</QueryID>\\n        <StartTime>1660719602199</StartTime>\\n        <Duration>16</Duration>\\n        <QueryPlan>{\\"children\\":********\\"startTime\\":1660719602199}</QueryPlan>\\n        <TextPlan>******</TextPlan>\\n        <MaxOutputRows>10</MaxOutputRows>\\n        <Database>adbtest</Database>\\n        <SessionID>658****</SessionID>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>425AAA6A-63E0-1929-A1CE-3D9036CBC463</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeDiagnosisSQLInfoResponse>","errorExample":""}]',
      'title' => '查看SQL语句的详细信息',
      'description' => '本接口用于查看AnalyticDB PostgreSQL版实例中指定查询的详细信息，例如查询语句、执行计划文本和执行计划树等。

目前该功能仅支持存储弹性模式实例，且内核版本为V6.3.10.1及以上版本。如何查看和升级内核小版本，请参见[查看内核小版本](~~277424~~)和[版本升级](~~139271~~)。',
      'responseParamsDescription' => '**QueryPlan**参数说明如下：
|名称|类型|示例值|描述|
|-----|-----|-------|-----|
|OpertorID|Integer|1|算子在查询执行计划中的ID。|
|OperatorTypeID|integer|10|算子类型ID。|
|OperatorType|String|AGG|算子类型。|
|OperatorName|String|AGG-1|算子名称。|
|NodeWidth|Integer|1|执行计划树中，节点在该层的水平位置，从1开始。|
|NodeDepth|Integer|2|执行计划树中，节点所处的深度，从1开始。|
|LevelWidth|Integer|1|执行计划树中，节点所在层的总宽度，从1开始。|
|MaxDepth|Integer|2|执行计划树的最大深度，该值仅root节点支持，从1开始。|
|OutputRows|Integer|10|算子执行过程中输出的数据行数。|
|InputRows|Integer|1000|算子执行过程中输入的数据行数。|
|Memory|Float|100|算子占用内存，单位为KB。|
|StartTime|String|1652843003000|算子开始执行的时间。|
|EndTime|String|1652843003100|算子结束执行的时间。|
|Duration|Float|6|算子执行消耗的时间，单位为毫秒（ms）。|
|DiskReadSize|Float|55|算子从磁盘读取数据量，单位为Byte。|
|DiskReadTime|Float|0.1|算子从磁盘读取数据消耗的时间，单位为毫秒（ms）。|
|NetIOSize|Float|3000|数据在不同节点间网络传输的数据量，单位为Byte。|
|NetIOTime|Float|0.1|数据在不同节点间网络传输消耗的时间，单位为毫秒（ms）。|
|MemoryPercent|Float|20.11|算子使用内存占比。|
|DurationPercent|Float|16.11|算子执行消耗时间占比。|
|DiskReadSizePercent|Float|55.11|算子从磁盘读取数据量占比。|
|DiskReadTimePercent|Float|11.11|算子从磁盘读取数据消耗时间占比。|
|NetIOSizePercent|Float|30.11|数据在不同节点间网络传输的数据量占比。|
|NetIOTimePercent|Float|11.11|数据在不同节点间网络传输消耗的时间占比。|
|Children|算子结构体|递归结构|子节点算子，字段结构与父节点算子结构一致，最下层子节点的该值为空。|',
    ),
    'DescribeDownloadRecords' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版查询诊断信息的下载记录。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'description' => '下载记录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DownloadId' => 
                    array (
                      'description' => '下载记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1150',
                    ),
                    'ExceptionMsg' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'Error message',
                    ),
                    'FileName' => 
                    array (
                      'description' => '文件名。',
                      'type' => 'string',
                      'example' => '20220509113448-20220509173448.csv',
                    ),
                    'Status' => 
                    array (
                      'description' => '下载查询分析记录后，文件会先上传到OSS，完成上传后才能进行下载，该参数为上传任务的状态，取值如下：

- **running**：上传中。
- **finished**：上传完成。
- **failed**：上传失败。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'DownloadUrl' => 
                    array (
                      'description' => '下载链接。',
                      'type' => 'string',
                      'example' => 'https://perth-download-task.oss-cn-beijing.aliyuncs.com/*****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Records\\": [\\n    {\\n      \\"DownloadId\\": 1150,\\n      \\"ExceptionMsg\\": \\"Error message\\",\\n      \\"FileName\\": \\"20220509113448-20220509173448.csv\\",\\n      \\"Status\\": \\"finished\\",\\n      \\"DownloadUrl\\": \\"https://perth-download-task.oss-cn-beijing.aliyuncs.com/*****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadRecordsResponse>\\n    <Records>\\n        <DownloadId>1150</DownloadId>\\n        <ExceptionMsg>Error message</ExceptionMsg>\\n        <FileName>20220509113448-20220509173448.csv</FileName>\\n        <Status>finished</Status>\\n        <DownloadUrl>https://perth-download-task.oss-cn-beijing.aliyuncs.com/*****</DownloadUrl>\\n    </Records>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n</DescribeDownloadRecordsResponse>","errorExample":""}]',
      'title' => '获取查询诊断信息的下载记录',
      'description' => '您需要调用[DownloadDiagnosisRecords](~~447700~~)接口下载查询诊断信息后，才能通过本接口查看相关下载记录以及下载查询诊断信息。

目前该功能仅支持存储弹性模式实例，且内核版本为V6.3.10.1及以上版本。如何查看和升级内核小版本，请参见[查看内核小版本](~~277424~~)和[版本升级](~~139271~~)。',
    ),
    'DescribeDownloadSQLLogs' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版慢查询信息的最近五条下载记录。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'description' => '下载记录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '下载记录列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DownloadId' => 
                    array (
                      'description' => '下载记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1150',
                    ),
                    'ExceptionMsg' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'Error message',
                    ),
                    'FileName' => 
                    array (
                      'description' => '文件名。',
                      'type' => 'string',
                      'example' => '20220509113448-20220509173448.csv',
                    ),
                    'Status' => 
                    array (
                      'description' => '任务状态，取值为：
- **running**：正在下载。
- **finished**：已完成。
- **failed**：下载失败。',
                      'type' => 'string',
                      'example' => 'finished',
                    ),
                    'DownloadUrl' => 
                    array (
                      'description' => '下载链接。',
                      'type' => 'string',
                      'example' => 'https://perth-download-task.oss-cn-beijing.aliyuncs.com/*****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FDE9942A-D919-527B-B559-5D0F6F20CCEC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Records\\": [\\n    {\\n      \\"DownloadId\\": 1150,\\n      \\"ExceptionMsg\\": \\"Error message\\",\\n      \\"FileName\\": \\"20220509113448-20220509173448.csv\\",\\n      \\"Status\\": \\"finished\\",\\n      \\"DownloadUrl\\": \\"https://perth-download-task.oss-cn-beijing.aliyuncs.com/*****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"FDE9942A-D919-527B-B559-5D0F6F20CCEC\\"\\n}","type":"json"}]',
      'title' => '查询慢SQL信息下载记录',
    ),
    'DescribeHealthStatus' => 
    array (
      'summary' => '查看实例和节点的健康状态。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能参数名称，多个指标用英文半角（,）分隔，具体信息，请参见[性能参数表](~~86943~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'node_master_status,node_master_connection_status,node_segment_connection_status,node_segment_disk_status',
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
                'description' => '性能监控具体信息，由参数名、状态和和指标值构成。只有请求参数**Key**中传入了性能参数才会返回对应的监控信息，例如请求参数**Key**仅包含**adbpg\\_status**，则返回信息中仅返回**adbpg\\_status**的监控信息。

更多性能参数信息，请参见[性能参数表](~~86943~~)。',
                'type' => 'object',
                'properties' => 
                array (
                  'adbpg_status' => 
                  array (
                    'description' => '实例健康状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '实例健康状态。取值说明：

- **critical**：任意一个Master节点或Segment节点不可用，控制台显示为红色。
- **healthy**：所有节点均可用，控制台显示为绿色。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => '实例健康状态的指标值。取值说明：

- **1**表示healthy。
- **0**表示critical。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'adbpg_connection_status' => 
                  array (
                    'description' => '实例连接状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '实例连接状态。取值说明：

- **critical**：实例连接数使用率大于95%，控制台显示为红色。
- **warning**：实例连接数使用率大于90%且小于等于95%，控制台显示为黄色。
- **healthy**：实例连接数使用率小于等于90%，控制台显示为绿色。

> 实例连接数使用率为所有Master节点和Segment节点的连接数使用率的最大值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => '实例连接数使用率的指标值，即所有Master节点和Segment节点的连接数使用率的最大值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.71',
                      ),
                    ),
                  ),
                  'adbpg_disk_status' => 
                  array (
                    'description' => '实例存储状态。

> 仅存储弹性模式会返回该值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '实例存储状态。取值说明：

- **critical**：实例存储水位大于等于90%，控制台显示为红色，实例将被锁定。
- **warning**：实例存储水位大于等于70%且小于90%，控制台显示为黄色。
- **healthy**：实例存储水位小于70%，控制台显示为绿色，实例存储状态健康。

> 实例存储水位为所有Segment节点的存储水位的平均值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => '实例存储水位的指标值，即所有Segment节点的存储水位的平均值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.52',
                      ),
                    ),
                  ),
                  'adbpg_disk_usage_percent' => 
                  array (
                    'description' => '实例存储水位。

> 仅存储弹性模式会返回该值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '实例存储水位状态。取值说明：

- **critical**：实例存储水位大于等于90%，实例将被锁定。
- **warning**：实例存储水位大于等于70%且小于90%。
- **healthy**：实例存储水位小于70%，实例存储状态健康。

> 实例存储水位为所有Segment节点的存储水位的平均值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => '实例存储水位的指标值，所有Segment节点的存储水位的平均值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.52',
                      ),
                    ),
                  ),
                  'adbpg_master_disk_usage_percent_max' => 
                  array (
                    'description' => '最大实例协调节点存储水位，即实例下所有Master节点中的最大存储水位。

> 仅存储弹性模式会返回该值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Master节点最大存储水位状态。取值说明：

- **critical**：水位大于等于90%，实例将被锁定。
- **warning**：水位大于等于70%且小于90%。
- **healthy**：水位小于70%，实例存储状态健康。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Master节点最大存储水位的指标值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.34',
                      ),
                    ),
                  ),
                  'adbgp_segment_disk_usage_percent_max' => 
                  array (
                    'description' => '最大实例计算节点存储水位，即实例下所有Segment节点中的最大存储水位。

> 仅存储弹性模式会返回该值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Segment节点最大存储水位状态。取值说明：

- **critical**：水位大于等于90%，实例将被锁定。
- **warning**：水位大于等于80%且小于90%。
- **healthy**：水位小于80%，实例存储状态健康。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Segment节点最大存储水位的指标值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.52',
                      ),
                    ),
                  ),
                  'node_master_status' => 
                  array (
                    'description' => '协调节点健康状态，即Master节点的健康状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Master节点健康状态。取值说明：

- **critical**：任意一个主Master节点或副Master节点不可用，控制台显示为红色。
- **healthy**：所有Master节点均可用，控制台显示为绿色。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Master节点健康状态的指标值。取值说明：

- **1**表示healthy。
- **0**表示critical。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'node_segment_disk_status' => 
                  array (
                    'description' => '计算节点存储状态，即Segment节点的存储状态。

> 仅存储弹性模式会返回该值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Segment节点存储状态。取值说明：

- **critical**：Segment节点存储水位大于等于90%，控制台显示为红色，实例将被锁定。
- **warning**：Segment节点存储水位大于等于80%且小于90%，控制台显示为黄色。
- **healthy**：Segment节点存储水位小于80%，控制台显示为绿色，实例存储状态健康。

> Segment节点存储水位为所有Segment节点的存储水位的最大值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Segment节点的最大存储水位的指标值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.52',
                      ),
                    ),
                  ),
                  'node_master_connection_status' => 
                  array (
                    'description' => '协调节点连接健康状态，即Master节点的连接健康状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Master节点连接健康状态。取值说明：

- **critical**：Master节点连接数使用率大于等于95%，控制台显示为红色。
- **warning**：Master节点连接数使用率大于等于90%且小于95%，控制台显示为黄色。
- **healthy**：Master节点连接数使用率小于90%，控制台显示为绿色。

> Master节点连接数使用率为所有Master节点中连接数使用率的最大值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Master节点的连接数使用率的指标值，即所有Master节点中连接数使用率的最大值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1.71',
                      ),
                    ),
                  ),
                  'node_segment_connection_status' => 
                  array (
                    'description' => '计算节点连接健康状态，即Segment节点的连接健康状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Segment节点连接健康状态。取值说明：

- **critical**：Segment节点连接数使用率大于等于95%，控制台显示为红色。
- **warning**：Segment节点连接数使用率大于等于90%且小于95%，控制台显示为黄色。
- **healthy**：Segment节点连接数使用率小于90%，控制台显示为绿色。

> Segment节点的连接数使用率为所有Segment节点中的连接数使用率最大值。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Segment节点的连接数使用率的指标值，即所有Segment节点中连接数使用率的最大值。

单位：%。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0.48',
                      ),
                    ),
                  ),
                  'adbpg_master_status' => 
                  array (
                    'description' => '协调节点状态，即Master节点的可用状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Master节点的可用状态。取值说明：

- **critical**：主备节点均不可用，控制台显示为红色。
- **warning**：主节点或备节点不可用，控制台显示为黄色。
- **healthy**：所有节点均可用，控制台显示为绿色。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Master节点的可用状态的指标值。取值说明：',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'adbpg_segment_status' => 
                  array (
                    'description' => '计算节点状态，即Segment节点的可用状态。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => 'Segment节点的可用状态。取值说明：

- **critical**：主备节点均不可用，控制台显示为红色。
- **warning**：大于等于50%节点不可用，控制台显示为黄色。
- **healthy**：所有节点均可用，控制台显示为绿色。',
                        'type' => 'string',
                        'example' => 'healthy',
                      ),
                      'Value' => 
                      array (
                        'description' => 'Segment节点的可用状态的指标值。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'adbpg_instance_total_data_gb' => 
                  array (
                    'description' => '实例存储数据总量。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例存储数据总量，单位GB。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '4.1',
                      ),
                    ),
                  ),
                  'adbpg_instance_hot_data_gb' => 
                  array (
                    'description' => '热数据存储总量。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '热数据存储总量，单位GB。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '4.1',
                      ),
                    ),
                  ),
                  'adbpg_instance_cold_data_gb' => 
                  array (
                    'description' => '冷数据存储总量',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '冷数据存储总量，单位GB。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0',
                      ),
                    ),
                  ),
                ),
                'example' => '{"node_master_connection_status":{"Status":"healthy","Value":1.6}}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D97B4191-104D-10CE-8BC5-53**********',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": {\\n    \\"adbpg_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1\\n    },\\n    \\"adbpg_connection_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.71\\n    },\\n    \\"adbpg_disk_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.52\\n    },\\n    \\"adbpg_disk_usage_percent\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.52\\n    },\\n    \\"adbpg_master_disk_usage_percent_max\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.34\\n    },\\n    \\"adbgp_segment_disk_usage_percent_max\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.52\\n    },\\n    \\"node_master_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1\\n    },\\n    \\"node_segment_disk_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.52\\n    },\\n    \\"node_master_connection_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1.71\\n    },\\n    \\"node_segment_connection_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 0.48\\n    },\\n    \\"adbpg_master_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1\\n    },\\n    \\"adbpg_segment_status\\": {\\n      \\"Status\\": \\"healthy\\",\\n      \\"Value\\": 1\\n    },\\n    \\"adbpg_instance_total_data_gb\\": {\\n      \\"Value\\": 4.1\\n    },\\n    \\"adbpg_instance_hot_data_gb\\": {\\n      \\"Value\\": 4.1\\n    },\\n    \\"adbpg_instance_cold_data_gb\\": {\\n      \\"Value\\": 0\\n    }\\n  },\\n  \\"RequestId\\": \\"D97B4191-104D-10CE-8BC5-53**********\\",\\n  \\"DBClusterId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeHealthStatusResponse>\\n    <code>200</code>\\n    <data>\\n        <Status>\\n            <adbpg_status>\\n                <Status>healthy</Status>\\n                <Value>1</Value>\\n            </adbpg_status>\\n            <adbpg_connection_status>\\n                <Status>healthy</Status>\\n                <Value>1.71</Value>\\n            </adbpg_connection_status>\\n            <adbgp_segment_disk_usage_percent_max>\\n                <Status>healthy</Status>\\n                <Value>1.52</Value>\\n            </adbgp_segment_disk_usage_percent_max>\\n            <adbpg_master_disk_usage_percent_max>\\n                <Status>healthy</Status>\\n                <Value>1.34</Value>\\n            </adbpg_master_disk_usage_percent_max>\\n            <adbpg_disk_usage_percent>\\n                <Status>healthy</Status>\\n                <Value>1.52</Value>\\n            </adbpg_disk_usage_percent>\\n            <adbpg_disk_status>\\n                <Status>healthy</Status>\\n                <Value>1.52</Value>\\n            </adbpg_disk_status>\\n            <node_master_connection_status>\\n                <Status>healthy</Status>\\n                <Value>1.71</Value>\\n            </node_master_connection_status>\\n            <node_master_status>\\n                <Status>healthy</Status>\\n                <Value>1</Value>\\n            </node_master_status>\\n            <node_segment_connection_status>\\n                <Status>healthy</Status>\\n                <Value>0.48</Value>\\n            </node_segment_connection_status>\\n            <node_segment_disk_status>\\n                <Status>healthy</Status>\\n                <Value>1.52</Value>\\n            </node_segment_disk_status>\\n        </Status>\\n        <RequestId>D97B4191-104D-10CE-8BC5-53**********</RequestId>\\n        <DBClusterId>gp-bp12ga6v69h86****</DBClusterId>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>D97B4191-104D-10CE-8BC5-53**********</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeHealthStatusResponse>","errorExample":""}]',
      'title' => '查看实例和节点的健康状态',
      'description' => '本接口用于查看存储弹性模式和Serverless版本的AnalyticDB PostgreSQL版的实例、协调节点（也称Master节点）以及计算节点（也称Segment节点）的健康状态。',
    ),
    'DescribeWaitingSQLInfo' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例锁等待详情信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '进程ID，即等待查询SQL的唯一标识。

> 您可以调用[DescribeWaitingSQLRecords](~~461735~~)接口获取锁等待的查询的进程ID。',
            'type' => 'string',
            'required' => true,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'Database' => 
              array (
                'description' => '数据库名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Items' => 
              array (
                'description' => '锁等待的查询的具体信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PID' => 
                    array (
                      'description' => '进程ID，即等待查询SQL的唯一标识。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'User' => 
                    array (
                      'description' => '查询的用户。',
                      'type' => 'string',
                      'example' => 'testUser',
                    ),
                    'SQLStmt' => 
                    array (
                      'description' => '查询的SQL文本。',
                      'type' => 'string',
                      'example' => 'Select * from t1,t2 where t1.id=t2.id;',
                    ),
                    'Application' => 
                    array (
                      'description' => '查询所属应用。',
                      'type' => 'string',
                      'example' => 'DataGrip 2022.1.5',
                    ),
                    'NotGrantLocks' => 
                    array (
                      'description' => '未授权的锁。',
                      'type' => 'string',
                      'example' => 'AccessShareLock',
                    ),
                    'BlockedByPID' => 
                    array (
                      'description' => '阻塞该查询的进程ID。',
                      'type' => 'string',
                      'example' => '110',
                    ),
                    'BlockedByUser' => 
                    array (
                      'description' => '阻塞该查询的执行用户。',
                      'type' => 'string',
                      'example' => 'testUser1',
                    ),
                    'BlockedBySQLStmt' => 
                    array (
                      'description' => '阻塞该查询的SQL文本。',
                      'type' => 'string',
                      'example' => 'Select * from t1;',
                    ),
                    'BlockedByApplication' => 
                    array (
                      'description' => '阻塞该查询的查询所属应用。',
                      'type' => 'string',
                      'example' => 'DataGrip 2022.1.5',
                    ),
                    'GrantLocks' => 
                    array (
                      'description' => '授权的锁。',
                      'type' => 'string',
                      'example' => 'ShareLock,AccessExclusiveLock',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"Database\\": \\"test\\",\\n  \\"Items\\": [\\n    {\\n      \\"PID\\": \\"100\\",\\n      \\"User\\": \\"testUser\\",\\n      \\"SQLStmt\\": \\"Select * from t1,t2 where t1.id=t2.id;\\",\\n      \\"Application\\": \\"DataGrip 2022.1.5\\",\\n      \\"NotGrantLocks\\": \\"AccessShareLock\\",\\n      \\"BlockedByPID\\": \\"110\\",\\n      \\"BlockedByUser\\": \\"testUser1\\",\\n      \\"BlockedBySQLStmt\\": \\"Select * from t1;\\",\\n      \\"BlockedByApplication\\": \\"DataGrip 2022.1.5\\",\\n      \\"GrantLocks\\": \\"ShareLock,AccessExclusiveLock\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeWaitingSQLInfoResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <Database>test</Database>\\n    <Items>\\n        <PID>100</PID>\\n        <User>testUser</User>\\n        <SQLStmt>Select * from t1,t2 where t1.id=t2.id;</SQLStmt>\\n        <Application>DataGrip 2022.1.5</Application>\\n        <NotGrantLocks>AccessShareLock</NotGrantLocks>\\n        <BlockedByPID>110</BlockedByPID>\\n        <BlockedByUser>testUser1</BlockedByUser>\\n        <BlockedBySQLStmt>Select * from t1;</BlockedBySQLStmt>\\n        <BlockedByApplication>DataGrip 2022.1.5</BlockedByApplication>\\n        <GrantLocks>ShareLock,AccessExclusiveLock</GrantLocks>\\n    </Items>\\n</DescribeWaitingSQLInfoResponse>","errorExample":""}]',
      'title' => '获取锁诊断详细信息',
      'description' => '本接口仅支持查询6.0版本存储弹性模式实例的锁等待查询的详细信息。',
    ),
    'DescribeWaitingSQLRecords' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例锁诊断列表。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。

不填则表示没有查询开始时间，将返回查询结束时间之前所有锁诊断信息。如果也没有查询结束时间，将返回全部锁诊断信息。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-08-15T06:59Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。

不填则表示没有查询结束时间，将返回查询开始时间之后所有锁诊断信息。如果也没有查询开始时间，将返回全部锁诊断信息。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-08-20T07:59Z',
          ),
        ),
        5 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。不填则表示查询所有用户的锁等待信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'testUser',
          ),
        ),
        6 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询过滤条件，取值如下：

- `{"Type":"maxCost","Value":"10"}`：等待时间最长的10个查询。
- `{"Type":"status","Value":"LockWaiting"}`：锁等待的查询。
- `{"Type":"status","Value":"ResourceWaiting"}`：资源等待的查询。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Type":"maxCost","Value":"10"}',
          ),
        ),
        8 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'table',
          ),
        ),
        9 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段和排序方式。

默认为`{"Field":"StartTime","Type":"Desc"}`，表示按开始时间进行排序。暂不支持其他排序字段和排序方式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Field":"StartTime","Type":"Desc"}',
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
              'Items' => 
              array (
                'description' => '查询列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PID' => 
                    array (
                      'description' => '进程ID，即等待查询SQL的唯一标识。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'SessionID' => 
                    array (
                      'description' => '查询所属的会话ID。',
                      'type' => 'string',
                      'example' => '50',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '查询开始时间。为时间戳格式，单位为ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1660902033374',
                    ),
                    'WaitingTime' => 
                    array (
                      'description' => 'SQL等待的时长，单位为ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '26911000',
                    ),
                    'Status' => 
                    array (
                      'description' => '查询的等待状态，取值如下：

- **LockWaiting**：锁等待。
- **ResourceWaiting**：资源等待。',
                      'type' => 'string',
                      'example' => 'LockWaiting',
                    ),
                    'SQLStmt' => 
                    array (
                      'description' => '查询的SQL文本。',
                      'type' => 'string',
                      'example' => 'Select * from t1,t2 where t1.id=t2.id;',
                    ),
                    'User' => 
                    array (
                      'description' => '查询的用户。',
                      'type' => 'string',
                      'example' => 'testUser',
                    ),
                    'Database' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"PID\\": \\"100\\",\\n      \\"SessionID\\": \\"50\\",\\n      \\"StartTime\\": 1660902033374,\\n      \\"WaitingTime\\": 26911000,\\n      \\"Status\\": \\"LockWaiting\\",\\n      \\"SQLStmt\\": \\"Select * from t1,t2 where t1.id=t2.id;\\",\\n      \\"User\\": \\"testUser\\",\\n      \\"Database\\": \\"test\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeWaitingSQLRecordsResponse>\\n    <Items>\\n        <PID>100</PID>\\n        <SessionID>50</SessionID>\\n        <StartTime>1660902033374</StartTime>\\n        <WaitingTime>26911000</WaitingTime>\\n        <Status>LockWaiting</Status>\\n        <SQLStmt>Select * from t1,t2 where t1.id=t2.id;</SQLStmt>\\n        <User>testUser</User>\\n        <Database>test</Database>\\n    </Items>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n</DescribeWaitingSQLRecordsResponse>","errorExample":""}]',
      'title' => '获取锁诊断列表',
      'description' => '本接口仅支持查询6.0版本存储弹性模式实例的锁诊断列表。',
    ),
    'DownloadDiagnosisRecords' => 
    array (
      'summary' => '下载AnalyticDB PostgreSQL的实例的查询诊断记录。',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpguser',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'adbtest',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T06:59Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T07:59Z',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询过滤条件，JSON格式，取值如下：

- `{"Type":"maxCost", "Value":"100"}`：耗时最长的100个查询。
- `{"Type":"status","Value":"finished"}`：已完成的查询。
- `{"Type":"status","Value":"running"}`：运行中的查询。
- `{"Type":"cost","Max":"200"}`：短耗时查询，执行耗时小于200毫秒的查询。
- `{"Type":"cost","Min":"200","Max":"60000"}`：中等耗时查询，执行耗时大于等于200毫秒且小于1分钟的查询。
- `{"Type":"cost","Min":"60000"}`：长耗时查询，执行耗时大于等于1分钟的查询。
- `{"Type":"cost","Min":"30","Max":"50"}`：自定义耗时查询，您可以自定义设置查询的最短耗时和最长耗时，**Min**表示最短耗时；**Max**表示最长耗时，单位为毫秒（ms）。',
            'type' => 'string',
            'required' => false,
            'example' => '{ "Type":"maxCost", "Value":"100" }',
          ),
        ),
        6 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下载文件的语言，取值如下：

- **zh**：简体中文。
- **en**：英文。
- **ja**：日语。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'DownloadId' => 
              array (
                'description' => '下载任务ID。',
                'type' => 'string',
                'example' => '11',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"DownloadId\\": \\"11\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<DownloadDiagnosisRecordsResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <DownloadId>11111</DownloadId>\\n</DownloadDiagnosisRecordsResponse>","errorExample":""}]',
      'title' => '下载查询诊断记录',
      'description' => '本接口用于下载AnalyticDB PostgreSQL版实例的查询诊断记录。完成下载后，您可以通过[DescribeDownloadRecords](~~447712~~)接口查看下载记录并获取下载链接。

目前该功能仅支持存储弹性模式实例，且内核版本为V6.3.10.1及以上版本。如何查看和升级内核小版本，请参见[查看内核小版本](~~277424~~)和[版本升级](~~139271~~)。',
    ),
    'DownloadSQLLogsRecords' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键词。',
            'type' => 'string',
            'required' => false,
            'example' => 'select 1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式： yyyy-MM-ddTHH:mmZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-05-07T06:59Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        4 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuser',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式：yyyy-MM-ddTHH:mm:ssZ，且大于查询开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-05-08T06:59Z',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '30',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值；默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行耗时，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源端IP。',
            'type' => 'string',
            'required' => false,
            'example' => '100.XX.XX.90',
          ),
        ),
        10 => 
        array (
          'name' => 'ExecuteState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行状态。
- **1**：成功。
- **0**：失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'OperationClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类别，例如DQL、DML、DDL等。',
            'type' => 'string',
            'required' => false,
            'example' => 'DQL',
          ),
        ),
        12 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型，例如SELECT。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        13 => 
        array (
          'name' => 'MaxExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最大耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '999',
          ),
        ),
        14 => 
        array (
          'name' => 'MinExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最小耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下载文件的语言，取值如下：

- **zh**：简体中文。
- **en**：英文。
- **ja**：日语。
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7565770E-7C45-462D-BA4A-8A5396F2CAD1',
              ),
              'DownloadId' => 
              array (
                'description' => '下载任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '11',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7565770E-7C45-462D-BA4A-8A5396F2CAD1\\",\\n  \\"DownloadId\\": 11\\n}","type":"json"}]',
      'title' => '下载慢SQL记录',
      'summary' => '下载AnalyticDB PostgreSQL的实例的慢SQL记录。',
    ),
    'CreateDBInstancePlan' => 
    array (
      'summary' => '创建定时计划。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-plan',
          ),
        ),
        2 => 
        array (
          'name' => 'PlanDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'this is a test plan',
          ),
        ),
        3 => 
        array (
          'name' => 'PlanType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划类型，取值如下：

- **PauseResume**：自动启停。
- **Resize**：实例变配，即增加或减少计算节点。
- **ModifySpec**：规格变更，即变更计算节点规格。

> - 实例变配仅支持Serverless模式实例。
>- 规格变更仅支持存储弹性模式实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'PauseResume',
          ),
        ),
        4 => 
        array (
          'name' => 'PlanScheduleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划执行方式，取值如下：

- **Postpone**：稍后执行。
- **Regular**：周期执行。',
            'type' => 'string',
            'required' => true,
            'example' => 'Regular',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanStartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划的开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅**PlanScheduleType**为**Regular**时需要设置该参数。
>- 不传默认为当前时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-17T23:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'PlanEndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划的结束时间，需要大于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅**PlanScheduleType**为**Regular**时需要设置该参数。
>- 该参数非必填，没有结束时间，计划删除周期停止。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-17T23:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'PlanConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行计划具体信息，JSON格式，内容需根据**PlanType**参数和**PlanScheduleType**参数的值进行调整，具体说明请参见以下补充说明。',
            'type' => 'string',
            'required' => true,
            'example' => '{"pause":{"planCronTime":"0 0 12 1/1 * ? "},"resume":{"planCronTime":"0 0 0 1/1 * ? "}}',
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
                'example' => '34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态。

执行成功则返回**success**；执行失败则不返回该参数。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '****',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'PlanId' => 
              array (
                'description' => '计划ID。',
                'type' => 'string',
                'example' => '1234',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad\\",\\n  \\"Status\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"****\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"PlanId\\": \\"1234\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBInstancePlanResponse>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad</RequestId>\\n    <Status>success</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    <PlanId>1234</PlanId>\\n</CreateDBInstancePlanResponse>","errorExample":""}]',
      'title' => '创建定时计划',
      'description' => '- 实例付费类型必须为按量付费。
- 实例变配和规格变更时，可能会导致业务闪断，建议您将执行时间设置为业务低峰期。

请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
      'requestParamsDescription' => '### PlanConfig参数补充说明
PlanType为PauseResume时：
- **PlanScheduleType**为**Postpone**时，只需要指定启动或暂停的具体时间，其中**pause**为暂停实例；**resume**为启动实例；**executeTime**为启停的时间（UTC时间），示例如下：
    - 暂停实例：`{"pause":{"executeTime":"2022-08-30T16:00:00Z"}}`
    - 启动实例：`{"resume":{"executeTime":"2022-08-30T16:00:00Z"}}`
- **PlanScheduleType**为**Regular**时，需要指定周期启动和暂停的时间，其中**pause**为暂停实例；**resume**为启动实例；**planCronTime**为周期启停的时间，Cron格式（UTC时间），示例如下：
`{"pause":{"planCronTime":"0 0 12 1/1 * ? "},"resume":{"planCronTime":"0 0 0 1/1 * ? "}}`。


PlanType为Resize时：
- **PlanScheduleType**为**Postpone**时，需要指定扩容或缩容的时间和目标节点数，其中**scaleOut**为扩容实例；**scaleIn**为缩容实例；**executeTime**为扩缩容的时间（UTC时间）；**segmentNodeNum**为目标节点数，示例如下：
    - 扩容实例：`{"scaleOut":{"executeTime":"2022-08-30T16:00:00Z","segmentNodeNum":4}}`
    - 缩容实例：`{"scaleIn":{"executeTime":"2022-08-30T16:00:00Z","segmentNodeNum":2}}`
- **PlanScheduleType**为**Regular**时，需要指定周期扩缩容的时间和目标节点数，其中**scaleOut**为扩容实例；**scaleIn**为缩容实例；**planCronTime**为周期扩缩容的时间，Cron格式（UTC时间）；**segmentNodeNum**为目标节点数，示例如下：
`{"scaleIn":{"segmentNodeNum":2,"planCronTime":"0 0 12 1/1 * ? "},"scaleOut":{"segmentNodeNum":4,"planCronTime":"0 0 0 1/1 * ? "}}`。


PlanType为ModifySpec时：
- **PlanScheduleType**为**Postpone**时，需要指定升配或降配的时间和目标规格，其中**scaleUp**为实例升配；**scaleDown**为实例降配；**executeTime**为扩缩容的时间（UTC时间）；**instanceSpec**为目标规格，示例如下：
    - 实例升配：`{"scaleUp":{"executeTime":"2022-08-30T16:00:00Z","instanceSpec":"4C32G"}}`
    - 实例降配：`{"scaleDown":{"executeTime":"2022-08-30T16:00:00Z","instanceSpec":"2C16G"}}`
- **PlanScheduleType**为**Regular**时，需要指定周期升降配的时间和目标规格，其中**scaleUp**为实例升配；**scaleDown**为实例降配；**planCronTime**为周期扩缩容的时间，Cron格式（UTC时间）；**instanceSpec**为目标规格，示例如下：
`{"scaleUp":{"instanceSpec":"4C32G","planCronTime":"0 0 12 1/1 * ? "},"scaleDown":{"instanceSpec":"2C16G","planCronTime":"0 0 0 1/1 * ? "}}`。


> Cron表达式的说明和相关使用方法，请参见[Cron表达式](~~64769~~)。',
    ),
    'DeleteDBInstancePlan' => 
    array (
      'summary' => '删除AnalyticDB PostgreSQL版实例的计划。',
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
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划ID。

> 您可以调用[DescribeDBInstancePlans](~~449398~~)接口查看计划的详细信息，包括计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
            'pattern' => '^\\d+$',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'description' => 'API执行状态。

执行成功则返回**success**；执行失败则不返回该参数。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '****',
              ),
              'PlanId' => 
              array (
                'description' => '计划ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34b32a0a-08ef-4a87-b6be-cdd988888888',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"****\\",\\n  \\"PlanId\\": \\"1234\\",\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd988888888\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBInstancePlanResponse>\\n    <Status>success</Status>\\n    <PlanId>1234</PlanId>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd988888888</RequestId>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</DeleteDBInstancePlanResponse>","errorExample":""}]',
      'title' => '删除定时计划',
    ),
    'DescribeDBInstancePlans' => 
    array (
      'summary' => '查看AnalyticDB PostgreSQL版实例的计划详情。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PlanDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'this is a test plan',
          ),
        ),
        2 => 
        array (
          'name' => 'PlanType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划类型，取值如下：

- **PauseResume**：自动启停。
- **Resize**：节点扩容。
- **ModifySpec**：规格变更，即变更计算节点规格。',
            'type' => 'string',
            'required' => false,
            'example' => 'PauseResume',
          ),
        ),
        3 => 
        array (
          'name' => 'PlanScheduleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划执行方式，取值如下：

- **Postpone**：稍后执行。
- **Regular**：周期执行。',
            'type' => 'string',
            'required' => false,
            'example' => 'Regular',
          ),
        ),
        4 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划ID。

> 您可以调用[DescribeDBInstancePlans](~~449398~~)接口查看计划的详细信息，包括计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
            'pattern' => '^\\d+$',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanCreateDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤该日期之前创建的计划，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间），不传入该参数表示返回所有时间的计划。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-17T23:00Z',
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
                'description' => 'API执行状态。

执行成功则返回**success**；执行失败则不返回该参数。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34b32a0a-08ef-4a87-b6be-cdd988888888',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PlanList' => 
                  array (
                    'description' => '计划列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PlanName' => 
                        array (
                          'description' => '计划名称。',
                          'type' => 'string',
                          'example' => 'test-plan',
                        ),
                        'PlanDesc' => 
                        array (
                          'description' => '计划描述。',
                          'type' => 'string',
                          'example' => 'this is a test plan',
                        ),
                        'PlanId' => 
                        array (
                          'description' => '计划ID。',
                          'type' => 'string',
                          'example' => '1234',
                        ),
                        'PlanStatus' => 
                        array (
                          'description' => '计划状态，取值如下：

- **active**：运行中。
- **cancel**：取消。
- **deleted**：删除。
- **finished**：执行完成。',
                          'type' => 'string',
                          'example' => 'active',
                        ),
                        'PlanType' => 
                        array (
                          'description' => '计划类型，取值如下：

- **PauseResume**：自动启停。
- **Resize**：节点扩容，即增加或减少计算节点。
-  **ModifySpec**：规格变更，即变更计算节点规格。',
                          'type' => 'string',
                          'example' => 'PauseResume',
                        ),
                        'PlanScheduleType' => 
                        array (
                          'description' => '计划执行方式，取值如下：

- **Postpone**：稍后执行。
- **Regular**：周期执行。',
                          'type' => 'string',
                          'example' => 'Regular',
                        ),
                        'PlanStartDate' => 
                        array (
                          'description' => '计划的开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅周期执行的计划返回该参数。
> - 不传默为当前时间。',
                          'type' => 'string',
                          'example' => '2022-04-17T23:00Z',
                        ),
                        'PlanEndDate' => 
                        array (
                          'description' => '计划的结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅周期执行的计划返回该参数。
> - 创建计划时该参数不传，则不返回。',
                          'type' => 'string',
                          'example' => '2023-04-17T23:00Z',
                        ),
                        'PlanConfig' => 
                        array (
                          'description' => '计划的具体信息。',
                          'type' => 'string',
                          'example' => '{"pause":{"planCronTime":"0 22 * * 5"},"resume":{"planCronTime":"0 23 * * 5"}}',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-bp12ga6v69h86****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"****\\",\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd988888888\\",\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"PlanList\\": [\\n      {\\n        \\"PlanName\\": \\"test-plan\\",\\n        \\"PlanDesc\\": \\"this is a test plan\\",\\n        \\"PlanId\\": \\"1234\\",\\n        \\"PlanStatus\\": \\"active\\",\\n        \\"PlanType\\": \\"PauseResume\\",\\n        \\"PlanScheduleType\\": \\"Regular\\",\\n        \\"PlanStartDate\\": \\"2022-04-17T23:00Z\\",\\n        \\"PlanEndDate\\": \\"2023-04-17T23:00Z\\",\\n        \\"PlanConfig\\": \\"{\\\\\\"pause\\\\\\":{\\\\\\"planCronTime\\\\\\":\\\\\\"0 22 * * 5\\\\\\"},\\\\\\"resume\\\\\\":{\\\\\\"planCronTime\\\\\\":\\\\\\"0 23 * * 5\\\\\\"}}\\",\\n        \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancePlansResponse>\\n    <Status>success</Status>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd988888888</RequestId>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <PlanName>test-plan</PlanName>\\n        <PlanDesc>this is a test plan</PlanDesc>\\n        <PlanId>1234</PlanId>\\n        <PlanStatus>active</PlanStatus>\\n        <PlanType>PauseResume</PlanType>\\n        <PlanScheduleType>Regular</PlanScheduleType>\\n        <PlanStartDate>2022-04-17T23:00Z</PlanStartDate>\\n        <PlanEndDate>2023-04-17T23:00Z</PlanEndDate>\\n        <PlanConfig>{\\"pause\\":{\\"planCronTime\\":\\"0 22 * * 5\\"},\\"resume\\":{\\"planCronTime\\":\\"0 23 * * 5\\"}}</PlanConfig>\\n        <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    </Items>\\n</DescribeDBInstancePlansResponse>","errorExample":""}]',
      'title' => '查询计划详情',
    ),
    'SetDBInstancePlanStatus' => 
    array (
      'summary' => '启用或禁用AnalyticDB PostgreSQL版实例的计划。',
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
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划ID。

> 您可以调用[DescribeDBInstancePlans](~~449398~~)接口查看计划的详细信息，包括计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
            'pattern' => '^\\d+$',
          ),
        ),
        1 => 
        array (
          'name' => 'PlanStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置计划的状态，取值如下：

- **disable**：禁用计划。
- **enable**：启用计划。',
            'type' => 'string',
            'required' => true,
            'example' => 'disable',
            'enum' => 
            array (
              0 => 'enable',
              1 => 'disable',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'description' => 'API执行状态。

执行成功则返回**success**；执行失败则不返回该参数。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '****',
              ),
              'PlanId' => 
              array (
                'description' => '计划ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34b32a0a-08ef-4a87-b6be-cdd988888888',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"****\\",\\n  \\"PlanId\\": \\"1234\\",\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd988888888\\"\\n}","errorExample":""},{"type":"xml","example":"<SetDBInstancePlanStatusResponse>\\n    <Status>success</Status>\\n    <PlanId>1234</PlanId>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd988888888</RequestId>\\n</SetDBInstancePlanStatusResponse>","errorExample":""}]',
      'title' => '启用或禁用计划',
    ),
    'UpdateDBInstancePlan' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版的定时计划。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-plan',
          ),
        ),
        2 => 
        array (
          'name' => 'PlanDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'this is a test plan',
          ),
        ),
        3 => 
        array (
          'name' => 'PlanStartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划的开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅**周期执行**的计划需要设置该参数。
>- 不传默认为当前时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-17T23:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PlanEndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划的结束时间，需要大于查询开始时间，格式为<i>yyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 仅**周期执行**的计划需要设置该参数。
>- 该参数非必填，没有结束时间，计划删除周期停止。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-17T23:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行计划具体信息，JSON格式，内容需根据**PlanType**参数和**PlanScheduleType**参数的值进行调整，具体说明请参见以下补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '{"pause":{"executeTime":"2022-08-30T16:00:00Z"}}',
          ),
        ),
        6 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计划ID。

> 您可以调用[DescribeDBInstancePlans](~~449398~~)接口查看计划的详细信息，包括计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
            'pattern' => '^\\d+$',
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
                'example' => '34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态。

执行成功则返回**success**；执行失败则不返回该参数。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '****',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'PlanId' => 
              array (
                'description' => '计划ID。',
                'type' => 'string',
                'example' => '1234',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad\\",\\n  \\"Status\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"****\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"PlanId\\": \\"1234\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDBInstancePlanResponse>\\n    <RequestId>34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad</RequestId>\\n    <Status>success</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    <PlanId>1234</PlanId>\\n</UpdateDBInstancePlanResponse>","errorExample":""}]',
      'title' => '修改定时计划',
      'description' => '- 实例付费类型必须为按量付费。
- 实例变配和规格变更时，可能会导致业务闪断，建议您将执行时间设置为业务低峰期。

请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
      'requestParamsDescription' => '### PlanConfig参数补充说明
计划任务为实例启停时：
- 计划执行方式为稍后执行时，只需要指定启动或暂停的具体时间，其中**pause**为暂停实例；**resume**为启动实例；**executeTime**为启停的时间（UTC时间），示例如下：
    - 暂停实例：`{"pause":{"executeTime":"2022-08-30T16:00:00Z"}}`
    - 启动实例：`{"resume":{"executeTime":"2022-08-30T16:00:00Z"}}`
- 计划执行方式为周期执行时，需要指定周期启动和暂停的时间，其中**pause**为暂停实例；**resume**为启动实例；**planCronTime**为周期启停的时间，Cron格式（UTC时间），示例如下：
`{"pause":{"planCronTime":"0 0 12 1/1 * ? "},"resume":{"planCronTime":"0 0 0 1/1 * ? "}}`。


计划任务为扩缩容时：
- 计划执行方式为稍后执行时，需要指定扩容或缩容的时间和目标节点数，其中**scaleOut**为扩容实例；**scaleIn**为缩容实例；**executeTime**为扩缩容的时间（UTC时间）；**segmentNodeNum**为目标节点数，示例如下：
    - 扩容实例：`{"scaleOut":{"executeTime":"2022-08-30T16:00:00Z","segmentNodeNum":4}}`
    - 缩容实例：`{"scaleIn":{"executeTime":"2022-08-30T16:00:00Z","segmentNodeNum":2}}`
- 计划执行方式为周期执行时，需要指定周期扩缩容的时间和目标节点数，其中**scaleOut**为扩容实例；**scaleIn**为缩容实例；**planCronTime**为周期扩缩容的时间，Cron格式（UTC时间）；**segmentNodeNum**为目标节点数，示例如下：
`{"scaleIn":{"segmentNodeNum":2,"planCronTime":"0 0 12 1/1 * ? "},"scaleOut":{"segmentNodeNum":4,"planCronTime":"0 0 0 1/1 * ? "}}`。


> Cron表达式的说明和相关使用方法，请参见[Cron表达式](~~64769~~)。',
    ),
    'DescribeTags' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值为：**instance**。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
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
                'example' => 'A29EC547-B392-4340-AA4F-7C0A7B626E74',
              ),
              'Tags' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'user',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A29EC547-B392-4340-AA4F-7C0A7B626E74\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagValue\\": \\"test\\",\\n      \\"TagKey\\": \\"user\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTagsResponse>\\n    <RequestId>A29EC547-B392-4340-AA4F-7C0A7B626E74</RequestId>\\n    <Tags>\\n        <TagValue>test</TagValue>\\n        <TagKey>user</TagKey>\\n    </Tags>\\n</DescribeTagsResponse>","errorExample":""}]',
      'title' => '查询标签列表',
      'summary' => '查询AnalyticDB PostgreSQL版实例的标签列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查询一个或多个AnalyticDB PostgreSQL实例已经绑定的标签列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以调用[DescribeRegions](~~86912~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：
- `instance`：预留模式实例。
- `ALIYUN::GPDB::INSTANCE`：弹性模式实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID。
> 参数ResourceId与Tag需要至少填写一项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gp-2zev51nt17074****',
            ),
            'required' => false,
            'example' => 'gp-xxxxxxxxxx',
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。
> 参数ResourceId与Tag需要至少填写一项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。标签键长度的取值范围：1~64。

`Tag.N`用于精确查找绑定了指定标签的AnalyticDB PostgreSQL实例，由一个键值对组成。

N的取值范围：1~20

- 仅指定`Tag.N.Key`时，则返回关联该标签键的所有实例。
- 仅指定`Tag.N.Value`，则报错`InvalidParameter.TagValue`。
- 同时指定多个标签键值对时，仅同时满足所有标签键值对的AnalyticDB PostgreSQL实例会被查找到。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。标签值长度的取值范围：1~128。

N的取值范围：1~20',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5414A4E5-4C36-4461-95FC-23757A20B5F8',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '由实例及其标签组成的集合，包含了实例ID、实例类型和标签值等信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情如下。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'instance',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'TestValue',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'gp-xxxxxxxxxx',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'TestKey',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"5414A4E5-4C36-4461-95FC-23757A20B5F8\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"instance\\",\\n        \\"TagValue\\": \\"TestValue\\",\\n        \\"ResourceId\\": \\"gp-xxxxxxxxxx\\",\\n        \\"TagKey\\": \\"TestKey\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5414A4E5-4C36-4461-95FC-23757A20B5F8</RequestId>\\n<NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n<TagResources>\\n    <TagResource>\\n        <ResourceId>gp-xxxxxxxxxx</ResourceId>\\n        <TagKey>TestKey</TagKey>\\n        <ResourceType>instance</ResourceType>\\n        <TagValue>TestValue</TagValue>\\n    </TagResource>\\n</TagResources>","errorExample":""}]',
      'title' => '查询实例绑定的标签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值固定为`instance`。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '第N个实例。N的取值范围：1~50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例N的ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gp-bp***************',
            ),
            'required' => true,
            'example' => 'gp-xxxxxxxxxx',
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '第N个标签。N的取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。该值不允许为空字符串。最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包`含http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。该值可以为空字符串。最多支持128个字符，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
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
                'example' => '5414A4E5-4C36-4461-95FC-23**********',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter number is exceed , Valid : 20',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5414A4E5-4C36-4461-95FC-23**********\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>5414A4E5-4C36-4461-95FC-23**********</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '创建并绑定标签',
      'summary' => '创建并绑定标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
      'summary' => '为指定的AnalyticDB PostgreSQL实例列表统一解绑标签。解绑后，如果该标签没有绑定其他任何实例，会被自动删除。',
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
            'description' => '地域ID，您可通过接口[DescribeRegions](~~86912~~)查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值范围：
- `instance`：预留模式实例。
- `ALIYUN::GPDB::INSTANCE`：弹性模式实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'instance',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑实例上全部的标签。当请求中未设置TagKey.N时，该参数才有效。取值范围：

- true
- false

默认值：false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID。N的取值范围：1~50',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'gp-j6cdjo680513l****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键。N的取值范围：1~20',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'TestKey',
            ),
            'required' => false,
            'maxItems' => 21,
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
                'example' => '5414A4E5-4C36-4461-95FC-23757A20B5F8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5414A4E5-4C36-4461-95FC-23757A20B5F8\\"\\n}","type":"json"}]',
      'title' => '解绑标签',
    ),
    'CheckServiceLinkedRole' => 
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
            'description' => '地域ID，您可以通过[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'HasServiceLinkedRole' => 
              array (
                'description' => '是否已经创建服务关联角色（SLR）。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"HasServiceLinkedRole\\": \\"true\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\"\\n}","type":"json"}]',
      'title' => '查询服务关联角色',
      'summary' => '检查是否创建了服务关联角色。',
    ),
    'CreateServiceLinkedRole' => 
    array (
      'summary' => '创建服务关联角色（SLR）。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以通过[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceLinkedRoleResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n</CreateServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '创建服务关联角色',
    ),
    'DescribeDBInstanceIPArrayList' => 
    array (
      'summary' => '查询允许访问AnalyticDB PostgreSQL版实例的IP白名单。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的IP白名单分组的名称。
> 如果不传入该参数，默认返回所有IP白名单分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
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
                'example' => 'CB7AA0BF-BE41-480E-A3DC-C97BF85A391B',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceIPArray' => 
                  array (
                    'description' => '实例的IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例详情列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBInstanceIPArrayName' => 
                        array (
                          'description' => 'IP白名单分组的名字。',
                          'type' => 'string',
                          'example' => 'Default',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => 'IP白名单分组下的IP列表，最多1000个以逗号隔开，有以下三种格式：
- 0.0.0.0/0
- 10.23.12.24（IP）
- 10.23.12.24/24（CIDR模式，无类域间路由，`/24`表示了地址中前缀的长度，范围为`[1,32]`）',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'DBInstanceIPArrayAttribute' => 
                        array (
                          'description' => '默认为空。用以区分不同的属性值，控制台不显示带有`hidden`属性的分组。',
                          'type' => 'string',
                          'example' => 'hidden',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CB7AA0BF-BE41-480E-A3DC-C97BF85A391B\\",\\n  \\"Items\\": {\\n    \\"DBInstanceIPArray\\": [\\n      {\\n        \\"DBInstanceIPArrayName\\": \\"Default\\",\\n        \\"SecurityIPList\\": \\"127.0.0.1\\",\\n        \\"DBInstanceIPArrayAttribute\\": \\"hidden\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceIPArrayListResponse>\\n<Items>\\n    <DBInstanceIPArray>\\n        <DBInstanceIPArrayName>default</DBInstanceIPArrayName>\\n        <DBInstanceIPArrayAttribute>hidden</DBInstanceIPArrayAttribute>\\n        <securityIPList>127.0.0.1</securityIPList>\\n    </DBInstanceIPArray>\\n</Items>\\n<RequestId>CB7AA0BF-BE41-480E-A3DC-C97BF85A391B</RequestId>\\n</DescribeDBInstanceIPArrayListResponse>","errorExample":""}]',
      'title' => '查看实例IP白名单',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceSSL' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例的SSL信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
              'SSLExpiredTime' => 
              array (
                'description' => 'SSL证书过期时间。',
                'type' => 'string',
                'example' => '2023-08-05T09:05:53Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D5FF8636-37F6-4CE0-8002-F8734C62C686',
              ),
              'SSLEnabled' => 
              array (
                'description' => '是否开启SSL加密，取值如下：

- **true**：已开启SSL加密。
- **false**：未开启SSL加密。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'CertCommonName' => 
              array (
                'description' => 'SSL证书信息。',
                'type' => 'string',
                'example' => '*.gpdbmaster.xxx.rds.aliyuncs.com',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例名。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SSLExpiredTime\\": \\"2023-08-05T09:05:53Z\\",\\n  \\"RequestId\\": \\"D5FF8636-37F6-4CE0-8002-F8734C62C686\\",\\n  \\"SSLEnabled\\": true,\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"CertCommonName\\": \\"*.gpdbmaster.xxx.rds.aliyuncs.com\\",\\n  \\"DBInstanceName\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceSSLResponse>\\n    <SSLExpiredTime>2023-08-05T09:05:53Z</SSLExpiredTime>\\n    <RequestId>D5FF8636-37F6-4CE0-8002-F8734C62C686</RequestId>\\n    <SSLEnabled>true</SSLEnabled>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n    <CertCommonName>*.gpdbmaster.xxx.rds.aliyuncs.com</CertCommonName>\\n    <DBInstanceName>gp-bp12ga6v69h86****</DBInstanceName>\\n</DescribeDBInstanceSSLResponse>","errorExample":""}]',
      'title' => '查询实例SSL设置详情',
    ),
    'DescribeUserEncryptionKeyList' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可通过接口[DescribeRegions](~~86912~~)查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：1。',
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
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
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
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'KmsKeys' => 
              array (
                'description' => 'KMS的key列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'KMS的key列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KeyId' => 
                    array (
                      'description' => 'KMS的ID。',
                      'type' => 'string',
                      'example' => '0b8b1825-fd99-418f-875e-e4dec1dd****',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"KmsKeys\\": [\\n    {\\n      \\"KeyId\\": \\"0b8b1825-fd99-418f-875e-e4dec1dd****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例自定义KMS密钥列表',
      'summary' => '获取用户开通的KMS密钥列表。',
    ),
    'ModifyDBInstanceSSL' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密的连接串，对于ECS实例，该参数默认采用泛域名，会加密所有的连接串。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-xxxxxxxxxxx-master.gpdbmaster.singapore.rds.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'SSLEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' SSL状态：

- 0：关闭 
- 1：开启
- 2：更新',
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ADD6EA90-EECB-4C12-9F26-0B6DB58710EF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADD6EA90-EECB-4C12-9F26-0B6DB58710EF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADD6EA90-EECB-4C12-9F26-0B6DB58710EF</RequestId>","errorExample":""}]',
      'title' => '修改SSL加密状态',
      'summary' => '开启、关闭或更新SSL加密。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySecurityIps' => 
    array (
      'summary' => '修改AnalyticDB PostgreSQL版实例的IP白名单。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单修改模式，取值如下：

- **0**（默认）：在目标IP白名单分组中覆盖原有IP地址。
- **1**：在目标IP白名单分组中添加IP地址。
- **2**：在目标IP白名单分组中删除IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组下的IP列表，最多1000个，以逗号隔开，格式如下：
- 10.23.12.24（IP）
- 10.23.12.24/24（CIDR模式，无类域间路由，`/24`表示地址中前缀的长度，范围为`[1,32]`）',
            'type' => 'string',
            'required' => true,
            'example' => '10.10.**.**',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组的名称，如果不传默认操作**default**分组。
> 1个实例最多支持50个白名单分组。
',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'DBInstanceIPArrayAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空。用于区分不同的属性值，控制台不显示带有`hidden`属性的分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'hidden',
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
                'example' => '871C698F-B43D-4D1D-ACD6-DF56B0F89978',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"871C698F-B43D-4D1D-ACD6-DF56B0F89978\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySecurityIpsResponse>\\r\\n         <RequestId>871C698F-B43D-4D1D-ACD6-DF56B0F89978</RequestId>\\r\\n</ModifySecurityIpsResponse>","errorExample":""}]',
      'title' => '修改IP白名单',
      'description' => '为保障AnalyticDB PostgreSQL版数据库的安全稳定，系统默认禁止所有外部IP地址访问AnalyticDB PostgreSQL版实例。在开始使用AnalyticDB PostgreSQL版实例前，您需要将客户端的IP地址或IP地址段添加到AnalyticDB PostgreSQL版实例的白名单中。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceErrorLog' => 
    array (
      'summary' => '获取AnalyticDB PostgreSQL版实例的错误日志。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **20**
- **50**
- **100**

默认值：**20**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-24T06:59Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式为<i>yyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-25T06:59Z',
          ),
        ),
        5 => 
        array (
          'name' => 'LogLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志等级，取值如下：

- **ALL**：显示所有级别日志。
- **PANIC**：只显示异常级别日志。
- **FATAL**：只显示严重级别日志。
- **ERROR**：只显示错误级别日志。',
            'type' => 'string',
            'required' => false,
            'example' => 'ALL',
          ),
        ),
        6 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpguser',
          ),
        ),
        7 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbtest',
          ),
        ),
        8 => 
        array (
          'name' => 'Host',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公共云暂不支持该参数，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        9 => 
        array (
          'name' => 'Keywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '错误日志关键字。',
            'type' => 'string',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4CAF581-2AC7-41AD-8940-D56DF7AADF5B',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码.',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '错误日志列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '日志发生的时间点（UTC时间）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2022-04-24 11:28:14',
                    ),
                    'LogLevel' => 
                    array (
                      'description' => '采集到的日志的级别。',
                      'type' => 'string',
                      'example' => 'FATAL',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'adbpguser',
                    ),
                    'Database' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbtest',
                    ),
                    'Host' => 
                    array (
                      'description' => '暂不支持该参数。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'LogContext' => 
                    array (
                      'description' => '错误日志内容。',
                      'type' => 'string',
                      'example' => 'unsupported frontend protocol 2689.28208: server supports 1.0 to 3.0',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B4CAF581-2AC7-41AD-8940-D56DF7AADF5B\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Time\\": 0,\\n      \\"LogLevel\\": \\"FATAL\\",\\n      \\"User\\": \\"adbpguser\\",\\n      \\"Database\\": \\"adbtest\\",\\n      \\"Host\\": \\"null\\",\\n      \\"LogContext\\": \\"unsupported frontend protocol 2689.28208: server supports 1.0 to 3.0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceErrorLogResponse>\\n    <RequestId>B4CAF581-2AC7-41AD-8940-D56DF7AADF5B</RequestId>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Time>2022-04-24 11:28:14</Time>\\n        <LogLevel>FATAL</LogLevel>\\n        <User>adbpguser</User>\\n        <Database>adbtest</Database>\\n        <LogContext>unsupported frontend protocol 2689.28208: server supports 1.0 to 3.0</LogContext>\\n    </Items>\\n</DescribeDBInstanceErrorLogResponse>","errorExample":""}]',
      'title' => '查询实例的错误日志',
    ),
    'DescribeSQLLogCount' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL版实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键词。',
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
            'description' => '查询开始时间。格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2020-12-12T11:22Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        4 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpgadmin',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过七天。',
            'type' => 'string',
            'required' => true,
            'example' => '2020-12-14T11:22Z',
          ),
        ),
        6 => 
        array (
          'name' => 'ExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行时长，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源IP。',
            'type' => 'string',
            'required' => false,
            'example' => '10.**.**.13',
          ),
        ),
        8 => 
        array (
          'name' => 'ExecuteState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行状态。取值如下：

- 取值为1：成功
- 取值为0：失败
- 取值为0,1或1,0：全部',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'OperationClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类别。取值如下：

- **DQL**
- **DML**
- **DDL**
- **DCL**
- **TCL**',
            'type' => 'string',
            'required' => false,
            'example' => 'DQL',
          ),
        ),
        10 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL的类型。

>- 如果设置了**OperationClass**参数，则**OperationType**的值必须属于对应的语言类型。例如**OperationClass**的值为**DQL**，则**OperationType**的值必须为**DQL**类型的SQL，例如**SELECT**。
- 如果没有设置**OperationClass**参数，则**OperationType**的值可以是任意类型SQL。
- 如果没有设置**OperationClass**参数也没有设置**OperationType**参数，则表示返回所有类型SQL。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最大耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1000',
          ),
        ),
        12 => 
        array (
          'name' => 'MinExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最小耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'EndTime' => 
              array (
                'description' => '查询结束时间。',
                'type' => 'string',
                'example' => '2020-12-14T11:22Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7565770E-7C45-462D-BA4A-8A**********',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2020-12-12T11:22Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-xxxxxxxx',
              ),
              'Items' => 
              array (
                'description' => '返回项目列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Series' => 
                    array (
                      'description' => '返回值集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '返回值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Point' => 
                                array (
                                  'description' => '无',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '审计日志生成时间与数量。',
                                    'type' => 'string',
                                    'example' => '2020-12-14T11:00:00Z,100',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'gp-xxxxxxxx',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2020-12-14T11:22Z\\",\\n  \\"RequestId\\": \\"7565770E-7C45-462D-BA4A-8A**********\\",\\n  \\"StartTime\\": \\"2020-12-12T11:22Z\\",\\n  \\"DBClusterId\\": \\"gp-xxxxxxxx\\",\\n  \\"Items\\": [\\n    {\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            {\\n              \\"Point\\": [\\n                \\"2020-12-14T11:00:00Z,100\\"\\n              ]\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Name\\": \\"gp-xxxxxxxx\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLLogCountResponse>\\n    <EndTime>2020-12-14T11:22Z</EndTime>\\n    <RequestId>7565770E-7C45-462D-BA4A-8A**********</RequestId>\\n    <StartTime>2020-12-12T11:22Z</StartTime>\\n    <DBClusterId>gp-xxxxxxxx</DBClusterId>\\n    <Items>\\n        <Series>\\n            <Values>\\n                <Point>2020-12-14T11:00:00Z,100</Point>\\n            </Values>\\n        </Series>\\n        <Name>gp-xxxxxxxx</Name>\\n    </Items>\\n</DescribeSQLLogCountResponse>","errorExample":""}]',
      'title' => '获取SQL审计日志数量',
      'summary' => '获取AnalyticDB PostgreSQL版实例的审计日志数量。',
      'description' => '本接口不支持实例类型为存储预留模式的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSQLLogsV2' => 
    array (
      'summary' => '调用DescribeSQLLogs接口查询指定时间段的SQL执行记录。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-03-10T06:30Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间）。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-03-17T06:30Z',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL版实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'select 1',
          ),
        ),
        6 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpgadmin',
          ),
        ),
        7 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'testadmin',
          ),
        ),
        8 => 
        array (
          'name' => 'ExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行耗时，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源IP。',
            'type' => 'string',
            'required' => false,
            'example' => '100.XX.XX.90',
          ),
        ),
        10 => 
        array (
          'name' => 'ExecuteState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行状态。取值如下：
- **1**：成功。
- **0**：失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'OperationClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类别，取值如下：

- **DQL**
- **DML**
- **DDL**
- **DCL**
- **TCL**',
            'type' => 'string',
            'required' => false,
            'example' => 'DQL',
          ),
        ),
        12 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL的类型。

>- 如果设置了**OperationClass**参数，则**OperationType**的值必须属于对应的语言类型。例如**OperationClass**的值为**DQL**，则**OperationType**的值必须为**DQL**类型的SQL，例如**SELECT**。
- 如果没有设置**OperationClass**参数，则**OperationType**的值可以是任意类型SQL。
- 如果没有设置**OperationClass**参数也没有设置**OperationType**参数，则表示返回所有类型SQL。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        13 => 
        array (
          'name' => 'MaxExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最大耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1000',
          ),
        ),
        14 => 
        array (
          'name' => 'MinExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最小耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：1。',
            'type' => 'string',
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
            'description' => '每页记录数，取值说明：
- 30（默认值）
- 50
- 100',
            'type' => 'string',
            'required' => false,
            'example' => '30',
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
              'PageRecordCount' => 
              array (
                'description' => '每页包含的记录个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A7941C94-B92F-46A0-BD3E-2D**********',
              ),
              'PageNumber' => 
              array (
                'description' => '查询结果页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OperationClass' => 
                    array (
                      'description' => '操作类别。',
                      'type' => 'string',
                      'example' => 'DQL',
                    ),
                    'ExecuteState' => 
                    array (
                      'description' => '执行状态。

- **success**：成功
- **fail**：失败',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'ExecuteCost' => 
                    array (
                      'description' => '执行耗时。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '2',
                    ),
                    'SQLText' => 
                    array (
                      'description' => 'SQL语句内容。',
                      'type' => 'string',
                      'example' => 'select 1',
                    ),
                    'SourcePort' => 
                    array (
                      'description' => '来源端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50514',
                    ),
                    'DBRole' => 
                    array (
                      'description' => '数据库角色。',
                      'type' => 'string',
                      'example' => 'master',
                    ),
                    'OperationType' => 
                    array (
                      'description' => '执行SQL的类型。',
                      'type' => 'string',
                      'example' => 'SELECT',
                    ),
                    'SourceIP' => 
                    array (
                      'description' => '来源IP。',
                      'type' => 'string',
                      'example' => '100.**.**.90',
                    ),
                    'ReturnRowCounts' => 
                    array (
                      'description' => '执行结果返回的行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'DBName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbpgadmin',
                    ),
                    'OperationExecuteTime' => 
                    array (
                      'description' => '执行时间。',
                      'type' => 'string',
                      'example' => '2021-03-15T17:02:32Z',
                    ),
                    'ScanRowCounts' => 
                    array (
                      'description' => '扫描行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'AccountName' => 
                    array (
                      'description' => '执行SQL的数据库账号。',
                      'type' => 'string',
                      'example' => 'testadmin',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"A7941C94-B92F-46A0-BD3E-2D**********\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"OperationClass\\": \\"DQL\\",\\n      \\"ExecuteState\\": \\"success\\",\\n      \\"ExecuteCost\\": 2,\\n      \\"SQLText\\": \\"select 1\\",\\n      \\"SourcePort\\": 50514,\\n      \\"DBRole\\": \\"master\\",\\n      \\"OperationType\\": \\"SELECT\\",\\n      \\"SourceIP\\": \\"100.**.**.90\\",\\n      \\"ReturnRowCounts\\": 1,\\n      \\"DBName\\": \\"adbpgadmin\\",\\n      \\"OperationExecuteTime\\": \\"2021-03-15T17:02:32Z\\",\\n      \\"ScanRowCounts\\": 1,\\n      \\"AccountName\\": \\"testadmin\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLLogsResponse>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>A7941C94-B92F-46A0-BD3E-2D**********</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <OperationClass>DQL</OperationClass>\\n        <ExecuteState>success</ExecuteState>\\n        <ExecuteCost>2</ExecuteCost>\\n        <SQLText>select 1</SQLText>\\n        <SourcePort>50514</SourcePort>\\n        <DBRole>master</DBRole>\\n        <OperationType>SELECT</OperationType>\\n        <SourceIP>100.**.**.90</SourceIP>\\n        <SQLPlan>\\"\\"</SQLPlan>\\n        <ReturnRowCounts>1</ReturnRowCounts>\\n        <DBName>adbpgadmin</DBName>\\n        <OperationExecuteTime>2021-03-15T17:02:32Z</OperationExecuteTime>\\n        <ScanRowCounts>1</ScanRowCounts>\\n        <AccountName>testadmin</AccountName>\\n    </Items>\\n</DescribeSQLLogsResponse>","errorExample":""}]',
      'title' => '查询SQL执行记录',
      'description' => '该接口不支持实例资源类型为存储预留模式的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySQLCollectorPolicy' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'SQLCollectorStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL采集状态。
- Enable：SQL采集开启。
- Disabled：SQL采集关闭。',
            'type' => 'string',
            'required' => true,
            'example' => 'Enable',
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
                'example' => 'API-48109b5c-a157-44e3-9f54-eb27f02bdd15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"API-48109b5c-a157-44e3-9f54-eb27f02bdd15\\"\\n}","type":"json"}]',
      'title' => '开启或关闭SQL洞察功能',
      'summary' => '开启或关闭指定实例的SQL洞察功能。',
      'description' => '仅支持存储预留实例。',
    ),
    'AllocateInstancePublicConnection' => 
    array (
      'summary' => '分配实例外网链接地址。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址前缀。

您可以自定义连接地址前缀，例如连接地址前缀为`gp-bp12ga6v69h86****`时，连接地址为`gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com`。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号，例如5432。',
            'type' => 'string',
            'required' => true,
            'example' => '5432',
          ),
        ),
        3 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型。取值：

- **primary**：主地址。
- **cluster**：集群地址，仅多协调节点实例支持创建集群地址。

> 默认为主地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'primary',
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
                'example' => 'ADD6EA90-EECB-4C12-9F26-0B6DB587****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADD6EA90-EECB-4C12-9F26-0B6DB587****\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateInstancePublicConnectionResponse>\\n    <RequestId>ADD6EA90-EECB-4C12-9F26-0B6DB587****</RequestId>\\n</AllocateInstancePublicConnectionResponse>","errorExample":""}]',
      'title' => '申请外网地址',
      'description' => '本接口用于申请AnalyticDB PostgreSQL版实例的外网地址。AnalyticDB PostgreSQL版实例的主地址和集群地址均支持创建外网地址，更多介绍，请参见[主地址和集群地址](~~204879~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceNetInfo' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-0xin9q82c33xc****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。

> 如果不指定该参数，将会返回所有数据库连接地址的相关信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'gp-0xin9q82c33xc****-master.gpdb.rds.aliyuncs.com',
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
                'example' => '7565770E-7C45-462D-BA4A-8A5396F2CAD1',
              ),
              'DBInstanceNetInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceNetInfo' => 
                  array (
                    'description' => '实例的连接信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VSwitchId' => 
                        array (
                          'description' => 'vSwitch ID，多个值用英文逗号（,）隔开。',
                          'type' => 'string',
                          'example' => 'vsw-0xi4kt4dho2kx79p1****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '数据库连接URL。',
                          'type' => 'string',
                          'example' => 'gp-0xin9q82c33xc****-master.gpdb.rds.aliyuncs.com',
                        ),
                        'IPType' => 
                        array (
                          'description' => 'IP类型。
- 经典网络类型的实例IPType为：Inner、Public。
- VPC类型的实例IPType为：Private、Public。',
                          'type' => 'string',
                          'example' => 'Inner',
                        ),
                        'Port' => 
                        array (
                          'description' => '端口信息。',
                          'type' => 'string',
                          'example' => '3432',
                        ),
                        'VpcInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'vpc-0xi8hbevlbj3bq0co****',
                        ),
                        'VPCId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-0xi8hbevlbj3bq0co****',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'AddressType' => 
                        array (
                          'description' => '地址类型。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'InstanceNetworkType' => 
              array (
                'description' => '实例网络类型：
- Classic：经典网络。
- VPC：VPC网络。',
                'type' => 'string',
                'example' => 'VPC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7565770E-7C45-462D-BA4A-8A5396F2CAD1\\",\\n  \\"DBInstanceNetInfos\\": {\\n    \\"DBInstanceNetInfo\\": [\\n      {\\n        \\"VSwitchId\\": \\"vsw-0xi4kt4dho2kx79p1****\\",\\n        \\"ConnectionString\\": \\"gp-0xin9q82c33xc****-master.gpdb.rds.aliyuncs.com\\",\\n        \\"IPType\\": \\"Inner\\",\\n        \\"Port\\": \\"3432\\",\\n        \\"VpcInstanceId\\": \\"vpc-0xi8hbevlbj3bq0co****\\",\\n        \\"VPCId\\": \\"vpc-0xi8hbevlbj3bq0co****\\",\\n        \\"IPAddress\\": \\"127.0.0.1\\",\\n        \\"AddressType\\": \\"Primary\\"\\n      }\\n    ]\\n  },\\n  \\"InstanceNetworkType\\": \\"VPC\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceNetInfoResponse>\\n<instanceNetworkType>Classic</instanceNetworkType>\\n<DBInstanceNetInfos>\\n    <DBInstanceNetInfo>\\n        <DBInstanceNetType>1</DBInstanceNetType>\\n        <connectionString>gp-xxxxxxx.gpdb.rds.aliyuncs.com</connectionString>\\n        <ipAddress>127.0.0.1</ipAddress>\\n        <port>3432</port>\\n        <VPCId>vpc-xxxxxxxxx</VPCId>\\n        <VSwitchId>vsw-xxxxxxx</VSwitchId>\\n    </DBInstanceNetInfo>\\n</DBInstanceNetInfos>\\n<RequestId>7565770E-7C45-462D-BA4A-8A5396F2CAD1</RequestId>\\n</DescribeDBInstanceNetInfoResponse>","errorExample":""}]',
      'title' => '查看实例的连接地址信息',
      'summary' => '查询实例的连接信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRdsVpcs' => 
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
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
              'Vpcs' => 
              array (
                'description' => 'VPC列表',
                'type' => 'object',
                'properties' => 
                array (
                  'Vpc' => 
                  array (
                    'description' => 'VPC信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'VPC信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => 'VPC状态。 **Available**表示可用。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'VpcName' => 
                        array (
                          'description' => 'VPC的名称。',
                          'type' => 'string',
                          'example' => 'vpc-name',
                        ),
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp*******************',
                        ),
                        'IsDefault' => 
                        array (
                          'description' => '是否是默认VPC。取值说明：

- **true**：是
- **false**：否',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CidrBlock' => 
                        array (
                          'description' => 'VPC的网段。',
                          'type' => 'string',
                          'example' => '10.**.**.0/8',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'AliUid' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'VSwitchs' => 
                        array (
                          'description' => 'vSwitch列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '交换机信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Status' => 
                              array (
                                'description' => 'vSwitch状态。**Available**表示可用。',
                                'type' => 'string',
                                'example' => 'Available',
                              ),
                              'VSwitchId' => 
                              array (
                                'description' => 'vSwitch ID。',
                                'type' => 'string',
                                'example' => 'vsw-bp*******************',
                              ),
                              'IsDefault' => 
                              array (
                                'description' => '是否是默认vSwitch。取值说明：

- **true**：是
- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'CidrBlock' => 
                              array (
                                'description' => 'vSwitch的网段。',
                                'type' => 'string',
                                'example' => '10.**.**.0/24',
                              ),
                              'GmtCreate' => 
                              array (
                                'description' => '该参数已废弃，故不会返回参数值。',
                                'type' => 'string',
                                'example' => 'null',
                              ),
                              'GmtModified' => 
                              array (
                                'description' => '该参数已废弃，故不会返回参数值。',
                                'type' => 'string',
                                'example' => 'null',
                              ),
                              'IzNo' => 
                              array (
                                'description' => 'vSwitch所属的可用区。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou-i',
                              ),
                              'VSwitchName' => 
                              array (
                                'description' => 'vSwitch的名称。',
                                'type' => 'string',
                                'example' => 'vsw-name',
                              ),
                            ),
                          ),
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'Bid' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '53924AF0-1628-5AA2-9C95-D4**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Vpcs\\": {\\n    \\"Vpc\\": [\\n      {\\n        \\"Status\\": \\"Available\\",\\n        \\"VpcName\\": \\"vpc-name\\",\\n        \\"VpcId\\": \\"vpc-bp*******************\\",\\n        \\"IsDefault\\": true,\\n        \\"CidrBlock\\": \\"10.**.**.0/8\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"GmtCreate\\": \\"null\\",\\n        \\"AliUid\\": \\"null\\",\\n        \\"VSwitchs\\": [\\n          {\\n            \\"Status\\": \\"Available\\",\\n            \\"VSwitchId\\": \\"vsw-bp*******************\\",\\n            \\"IsDefault\\": true,\\n            \\"CidrBlock\\": \\"10.**.**.0/24\\",\\n            \\"GmtCreate\\": \\"null\\",\\n            \\"GmtModified\\": \\"null\\",\\n            \\"IzNo\\": \\"cn-hangzhou-i\\",\\n            \\"VSwitchName\\": \\"vsw-name\\"\\n          }\\n        ],\\n        \\"GmtModified\\": \\"null\\",\\n        \\"Bid\\": \\"null\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"53924AF0-1628-5AA2-9C95-D4**********\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeRdsVpcsResponse>\\n    <Vpcs>\\n        <Vpc>\\n            <IsDefault>false</IsDefault>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <VSwitchs>\\n                <Status>Available</Status>\\n                <IsDefault>false</IsDefault>\\n                <IzNo>cn-hangzhou-h</IzNo>\\n                <VSwitchId>vsw-bp*******************</VSwitchId>\\n                <CidrBlock>10.**.**.0/24</CidrBlock>\\n                <VSwitchName>vsw-name</VSwitchName>\\n            </VSwitchs>\\n            <VpcId>vpc-bp*******************</VpcId>\\n            <CidrBlock>10.**.**.0/8</CidrBlock>\\n            <VpcName>vpc-name</VpcName>\\n        </Vpc>\\n        <Vpc>\\n            <IsDefault>true</IsDefault>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <VSwitchs>\\n                <Status>Available</Status>\\n                <IsDefault>true</IsDefault>\\n                <IzNo>cn-hangzhou-h</IzNo>\\n                <VSwitchId>vsw-bp*******************</VSwitchId>\\n                <CidrBlock>172.**.**.0/20</CidrBlock>\\n                <VSwitchName/>\\n            </VSwitchs>\\n            <VpcId>vpc-bp*******************</VpcId>\\n            <CidrBlock>172.**.**.0/16</CidrBlock>\\n            <VpcName>Private</VpcName>\\n        </Vpc>\\n    </Vpcs>\\n    <RequestId>53924AF0-1628-5AA2-9C95-D4**********</RequestId>\\n</DescribeRdsVpcsResponse>","errorExample":""}]',
      'title' => '获取VPC列表',
      'summary' => '获取VPC列表。',
      'description' => '您在新建AnalyticDB PostgreSQL版实例时，可以通过该接口查询目标地域及可用区下可用的VPC信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRdsVSwitchs' => 
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
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID和可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。
>  - 您可以调用[DescribeRdsVpcs](~~208327~~)接口查看可用的VPC ID。
> - 该参数必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp*******************',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID和可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃，无需传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'null',
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
                'example' => 'B0BA251D-6854-5A99-A964-3C**********',
              ),
              'VSwitches' => 
              array (
                'description' => 'vSwitch列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'VSwitch' => 
                  array (
                    'description' => 'vSwith信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => 'vSwitch状态。**Available**表示可用。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'IsDefault' => 
                        array (
                          'description' => '是否是默认交换机。取值说明：

- **true**：是
- **false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => 'vSwitch ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp*******************',
                        ),
                        'CidrBlock' => 
                        array (
                          'description' => 'vSwitch的网段。',
                          'type' => 'string',
                          'example' => '192.**.**.0/24',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'AliUid' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'Bid' => 
                        array (
                          'description' => '该参数已废弃，故不会返回参数值。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'IzNo' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'VSwitchName' => 
                        array (
                          'description' => 'vSwitch名称。',
                          'type' => 'string',
                          'example' => 'vsw-name',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B0BA251D-6854-5A99-A964-3C**********\\",\\n  \\"VSwitches\\": {\\n    \\"VSwitch\\": [\\n      {\\n        \\"Status\\": \\"Available\\",\\n        \\"IsDefault\\": false,\\n        \\"VSwitchId\\": \\"vsw-bp*******************\\",\\n        \\"CidrBlock\\": \\"192.**.**.0/24\\",\\n        \\"RegionNo\\": \\"null\\",\\n        \\"GmtCreate\\": \\"null\\",\\n        \\"AliUid\\": \\"null\\",\\n        \\"GmtModified\\": \\"null\\",\\n        \\"Bid\\": \\"null\\",\\n        \\"IzNo\\": \\"cn-hangzhou-h\\",\\n        \\"VSwitchName\\": \\"vsw-name\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRdsVSwitchsResponse>\\n    <RequestId>B0BA251D-6854-5A99-A964-3C**********</RequestId>\\n    <VSwitches>\\n        <VSwitch>\\n            <Status>Available</Status>\\n            <IsDefault>false</IsDefault>\\n            <IzNo>cn-hangzhou-h</IzNo>\\n            <VSwitchId>vsw-bp*******************</VSwitchId>\\n            <CidrBlock>192.**.**.0/24</CidrBlock>\\n            <VSwitchName>vsw-name</VSwitchName>\\n        </VSwitch>\\n    </VSwitches>\\n</DescribeRdsVSwitchsResponse>","errorExample":""}]',
      'title' => '获取虚拟交换机列表',
      'summary' => '获取虚拟交换机（vSwitch）列表。',
      'description' => '您在新建AnalyticDB PostgreSQL版实例时，可以通过该接口查询目标地域及可用区下可用的vSwitch信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceConnectionString' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-t4n2qg19bnn98****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-test',
          ),
        ),
        2 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号，例如5432。',
            'type' => 'string',
            'required' => true,
            'example' => '5432',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前的连接地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-t4n2qg19bnn98****-master.gpdb.rds.aliyuncs.com',
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
                'example' => '29B0BF34-D069-4495-92C7-FA6D94528A9E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"29B0BF34-D069-4495-92C7-FA6D94528A9E\\"\\n}","type":"json"}]',
      'title' => '修改连接地址',
      'summary' => '修改AnalyticDB PostgreSQL版实例的连接地址。',
    ),
    'ReleaseInstancePublicConnection' => 
    array (
      'summary' => '释放AnalyticDB PostgreSQL版的外网地址。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外网地址。

您可以在AnalyticDB PostgreSQL版控制台的实例**基本信息**页面的**数据库连接**区域查看**外网地址**。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****.gpdb.rds.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'AddressType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址类型。取值：

- **primary**：主地址。
- **cluster**：集群地址，仅多协调节点实例支持创建集群地址。

> 默认为主地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'primary',
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
                'example' => '9CEF7037-4158-4A65-BEC7-2A**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CEF7037-4158-4A65-BEC7-2A**********\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseInstancePublicConnectionResponse>\\n    <RequestId>9CEF7037-4158-4A65-BEC7-2A**********</RequestId>\\n</ReleaseInstancePublicConnectionResponse>","errorExample":""}]',
      'title' => '释放外网地址',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchDBInstanceNetType' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义连接地址的前辍：

- 由小写字母，数字，中划线组成，字母开头；
- 长度不超过30个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        2 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号。',
            'type' => 'string',
            'required' => true,
            'example' => '5432',
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
                'example' => 'FA67B751-2A2D-470C-850B-D6B93699D35C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FA67B751-2A2D-470C-850B-D6B93699D35C\\"\\n}","type":"json"}]',
      'title' => '切换内外网地址',
      'summary' => '切换AnalyticDB PostgreSQL版实例的内外网地址。',
      'description' => '该接口不支持存储弹性模式实例和Serverless实例。',
    ),
    'DescribeAvailableResources' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
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

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。取值说明：

- **Postpaid**：按量付费。
- **Prepaid**：包年包月。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
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
                'example' => '61DC563C-F8E4-593A-8D27-CE**********',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'Resources' => 
              array (
                'description' => '售卖资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SupportedEngines' => 
                    array (
                      'description' => '支持的引擎和规格信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SupportedEngineVersion' => 
                          array (
                            'description' => '支持的引擎版本。',
                            'type' => 'string',
                            'example' => '6.0',
                          ),
                          'SupportedInstanceClasses' => 
                          array (
                            'description' => '支持的规格。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Description' => 
                                array (
                                  'description' => 'Segment节点规格描述。',
                                  'type' => 'string',
                                  'example' => '单segment节点2核配置，含16GB 内存',
                                ),
                                'DisplayClass' => 
                                array (
                                  'description' => 'Segment规格信息。',
                                  'type' => 'string',
                                  'example' => '2C16G',
                                ),
                                'InstanceClass' => 
                                array (
                                  'description' => 'Segment规格信息。',
                                  'type' => 'string',
                                  'example' => '2C16G',
                                ),
                                'NodeCount' => 
                                array (
                                  'description' => 'Segment节点信息。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Step' => 
                                    array (
                                      'description' => '增加节点时的步长。

例如该参数取值为4时，则表示增加Segment节点时，增加的节点数量必须为4的倍数。',
                                      'type' => 'string',
                                      'example' => '4',
                                    ),
                                    'MinCount' => 
                                    array (
                                      'description' => 'Segment节点的最小值。',
                                      'type' => 'string',
                                      'example' => '4',
                                    ),
                                    'MaxCount' => 
                                    array (
                                      'description' => 'Segment节点的最大值。',
                                      'type' => 'string',
                                      'example' => '256',
                                    ),
                                  ),
                                ),
                                'StorageType' => 
                                array (
                                  'description' => '存储类型。取值说明：

- **cloud_essd**：ESSD云盘。
- **cloud_efficiency**：高效云盘。
- **oss**：OSS。',
                                  'type' => 'string',
                                  'example' => 'cloud_essd',
                                ),
                                'StorageSize' => 
                                array (
                                  'description' => 'Segment存储容量。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Step' => 
                                    array (
                                      'description' => 'Segment存储扩容步长。',
                                      'type' => 'string',
                                      'example' => '50',
                                    ),
                                    'MinCount' => 
                                    array (
                                      'description' => 'Segment最小存储容量。',
                                      'type' => 'string',
                                      'example' => '50',
                                    ),
                                    'MaxCount' => 
                                    array (
                                      'description' => 'Segment最大存储容量。',
                                      'type' => 'string',
                                      'example' => '1000',
                                    ),
                                  ),
                                ),
                                'Category' => 
                                array (
                                  'description' => '实例系列。取值说明：

- **HighAvailability**：高可用版。
- **Basic**：基础版',
                                  'type' => 'string',
                                  'example' => 'HighAvailability',
                                ),
                              ),
                            ),
                          ),
                          'Mode' => 
                          array (
                            'description' => '实例资源类型。取值说明：

- **ecs**：存储弹性模式。
- **serverless**：Serverless模式。',
                            'type' => 'string',
                            'example' => 'ecs',
                          ),
                        ),
                      ),
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"61DC563C-F8E4-593A-8D27-CE**********\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"Resources\\": [\\n    {\\n      \\"SupportedEngines\\": [\\n        {\\n          \\"SupportedEngineVersion\\": \\"6.0\\",\\n          \\"SupportedInstanceClasses\\": [\\n            {\\n              \\"Description\\": \\"单segment节点2核配置，含16GB 内存\\",\\n              \\"DisplayClass\\": \\"2C16G\\",\\n              \\"InstanceClass\\": \\"2C16G\\",\\n              \\"NodeCount\\": {\\n                \\"Step\\": \\"4\\",\\n                \\"MinCount\\": \\"4\\",\\n                \\"MaxCount\\": \\"256\\"\\n              },\\n              \\"StorageType\\": \\"cloud_essd\\",\\n              \\"StorageSize\\": {\\n                \\"Step\\": \\"50\\",\\n                \\"MinCount\\": \\"50\\",\\n                \\"MaxCount\\": \\"1000\\"\\n              },\\n              \\"Category\\": \\"HighAvailability\\"\\n            }\\n          ],\\n          \\"Mode\\": \\"ecs\\"\\n        }\\n      ],\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourcesResponse>\\n    <RequestId>61DC563C-F8E4-593A-8D27-CE**********</RequestId>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <Resources>\\n        <SupportedEngines>\\n            <SupportedEngineVersion>6.0</SupportedEngineVersion>\\n            <SupportedInstanceClasses>\\n                <Description>单segment节点2核配置，含16GB 内存</Description>\\n                <DisplayClass>2C16G</DisplayClass>\\n                <InstanceClass>2C16G</InstanceClass>\\n                <NodeCount>\\n                    <Step>4</Step>\\n                    <MinCount>4</MinCount>\\n                    <MaxCount>256</MaxCount>\\n                </NodeCount>\\n                <StorageType>cloud_essd</StorageType>\\n                <StorageSize>\\n                    <Step>50</Step>\\n                    <MinCount>50</MinCount>\\n                    <MaxCount>1000</MaxCount>\\n                </StorageSize>\\n                <Category>HighAvailability</Category>\\n            </SupportedInstanceClasses>\\n            <Mode>ecs</Mode>\\n        </SupportedEngines>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n    </Resources>\\n</DescribeAvailableResourcesResponse>","errorExample":""}]',
      'title' => '获取可用资源信息',
      'summary' => '获取AnalyticDB PostgreSQL版的可用售卖资源。',
      'description' => '您在新建AnalyticDB PostgreSQL版实例时，可以通过该接口查询目标可用区下的实例售卖资源信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '8432',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbAXSDJ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~86912~~)接口查看可用的地域ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF8EB261-5447-4B1B-9F14-294CEA008A9F',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
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
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ZoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-c',
                                  ),
                                  'VpcEnabled' => 
                                  array (
                                    'description' => 'VPC是否可用，取值说明：

- **true**：表示VPC可用。
- **false**：表示VPC不可用。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FF8EB261-5447-4B1B-9F14-294CEA008A9F\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-c\\",\\n              \\"VpcEnabled\\": true\\n            }\\n          ]\\n        },\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FF8EB261-5447-4B1B-9F14-294CEA008A9F</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-beijing</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-beijing-c</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-beijing-g</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-zhangjiakou-b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-e</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-f</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shanghai</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shanghai-b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shanghai-d</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shenzhen-a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-1b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-2a</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-2b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>us-east-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>us-east-1b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>us-west-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>us-west-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-chengdu</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-chengdu-a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-3a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-huhehaote-a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-south-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-south-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-5a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n</Regions>","errorExample":""}]',
      'title' => '查看可选的地域和可用区',
      'summary' => '查询创建AnalyticDB PostgreSQL版实例时用户可选的地域和可用区。',
      'description' => '创建AnalyticDB PostgreSQL版实例前，请先调用本接口查询可用地域和可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSampleData' => 
    array (
      'summary' => '为AnalyticDB PostgreSQL版实例创建样本数据集。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'example' => '15A6881F-AAAB-5E4D-9B3F-6DCC1BDF4F2E_99',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：

- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '该信息表示API在调用过程中出现了意料之外的错误，但不影响API的正常使用。',
                'type' => 'string',
                'example' => '*********',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15A6881F-AAAB-5E4D-9B3F-6DCC1BDF4F2E_99\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"*********\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSampleDataResponse>\\n    <RequestId>15A6881F-AAAB-5E4D-9B3F-6DCC1BDF4F2E_99</RequestId>\\n    <Status>true</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</CreateSampleDataResponse>","errorExample":""}]',
      'title' => '创建样本数据集',
      'description' => '- 本接口用于为AnalyticDB PostgreSQL实例创建样本数据集，创建完成后您可以通过指定查询语句体验或测试数据库。查询语句具体信息，请参见[示例查询](~~452277~~)。
- 本接口仅支持v6.3.8.8到6.3.8.x和v6.3.10.3及以上版本。
- 本接口暂不支持v6.3.9.0到v6.3.10.2版本。',
    ),
    'DescribeSampleData' => 
    array (
      'summary' => '查询AnalyticDB PostgreSQL版实例中是否加载了样本数据集。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '84CD7CAF-FA7B-5178-B19F-D8CDE307D5FA_8111',
              ),
              'HasSampleData' => 
              array (
                'description' => '是否加载了样本数据集，取值如下：

- **true**：已加载样本数据集。
- **false**：未加载样本数据集。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '该信息表示API在调用过程中出现了意料之外的错误，但不影响API的正常使用。',
                'type' => 'string',
                'example' => '******',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'SampleDataStatus' => 
              array (
                'description' => '样本数据集的加载状态，取值说明：
- **loaded**：已加载。
- **loading**：加载中。
- **unload**：未加载。',
                'type' => 'string',
                'example' => 'loaded',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"84CD7CAF-FA7B-5178-B19F-D8CDE307D5FA_8111\\",\\n  \\"HasSampleData\\": true,\\n  \\"ErrorMessage\\": \\"******\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"SampleDataStatus\\": \\"loaded\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSampleDataResponse>\\n    <RequestId>84CD7CAF-FA7B-5178-B19F-D8CDE307D5FA_8111</RequestId>\\n    <HasSampleData>true</HasSampleData>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</DescribeSampleDataResponse>","errorExample":""}]',
      'title' => '查询是否加载样本数据集',
    ),
    'UnloadSampleData' => 
    array (
      'summary' => '释放AnalyticDB PostgreSQL版的样本数据集。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
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
                'example' => '4E42ABC3-4DBD-5343-9BCA-66B7D091311F_6914',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：

- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMessage' => 
              array (
                'description' => '该信息表示API在调用过程中出现了意料之外的错误，但不影响API的正常使用。',
                'type' => 'string',
                'example' => '********',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4E42ABC3-4DBD-5343-9BCA-66B7D091311F_6914\\",\\n  \\"Status\\": true,\\n  \\"ErrorMessage\\": \\"********\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\"\\n}","errorExample":""},{"type":"xml","example":"<UnloadSampleDataResponse>\\n    <RequestId>4E42ABC3-4DBD-5343-9BCA-66B7D091311F_6914</RequestId>\\n    <Status>true</Status>\\n    <DBInstanceId>gp-bp12ga6v69h86****</DBInstanceId>\\n</UnloadSampleDataResponse>","errorExample":""}]',
      'title' => '卸载样本数据集',
      'description' => '本接口用于释放AnalyticDB PostgreSQL版数据库中的样本数据集。您必须已经加载过样本数据集才能释放样本数据集。',
    ),
    'EnableDBResourceGroup' => 
    array (
      'summary' => '为AnalyticDB PostgreSQL版存储弹性模式6.0实例开启资源组管理，开启后实例的资源管理模式会从资源队列切换到资源组。',
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
        'chargeType' => 'free',
        'abilityTreeCode' => '197949',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

>您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => '5850BF81-1A2B-5ACE-AF41-57**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5850BF81-1A2B-5ACE-AF41-57**********\\"\\n}","type":"json"}]',
      'title' => '开启资源组管理',
      'description' => '- 仅支持实例为存储弹性模式6.0版，且小版本需为v6.6.1.0及以上。
- 仅支持状态为**运行中**的实例通过本接口开启资源组管理模式。
- **注意：切换过程中会重启实例，存在5分钟左右的实例不可用，请合理规划您的业务避免受到影响。**',
    ),
    'DisableDBResourceGroup' => 
    array (
      'summary' => '为AnalyticDB PostgreSQL版存储弹性模式6.0实例关闭资源组管理，关闭后实例的资源管理模式会从资源组切换到资源队列。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197974',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => '53EA07B7-FC2A-521B-AB7C-27**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"53EA07B7-FC2A-521B-AB7C-27**********\\"\\n}","type":"json"}]',
      'title' => '关闭资源组管理',
      'description' => '- 仅支持实例为存储弹性模式6.0版，且小版本需为v6.6.1.0及以上。
- 仅支持状态为**运行中**的实例通过本接口关闭资源组管理模式。
- **注意：切换过程中会重启实例，存在5分钟左右的实例不可用，请合理规划您的业务避免受到影响。**',
    ),
    'CreateDBResourceGroup' => 
    array (
      'summary' => '创建资源组。',
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
        'chargeType' => 'free',
        'abilityTreeCode' => '198025',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
            'example' => 'testgroup',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组配置。
> 1. CpuRateLimit：资源组可使用cpu资源百分比，单位：%
> 2. MemoryLimit：资源组可使用内存资源百分比，单位：%
> 3. MemorySharedQuota：提交到该资源组的事务之间共享的内存资源百分比，单位：%，默认值：80
> 4. MemorySpillRatio：内存密集型事务的内存使用阈值。当事务达到此阈值时，将溢出磁盘，单位：%，默认值：0
> 5. Concurrency：资源组允许的最大并发数，默认值：20',
            'type' => 'string',
            'required' => true,
            'example' => '{"CpuRateLimit":"10","MemoryLimit":"12","MemorySharedQuota":"20","MemorySpillRatio":"75","Concurrency":"3"}',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '创建资源组',
    ),
    'DeleteDBResourceGroup' => 
    array (
      'summary' => '删除资源组。',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '198026',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 您可以调用[DescribeDBInstances](~~196830~~)接口查看目标地域下所有实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
            'example' => 'testgroup',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '删除资源组',
    ),
    'ModifyDBResourceGroup' => 
    array (
      'summary' => '修改资源组。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '198030',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupItems',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源组详情。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ResourceGroupName' => 
                array (
                  'description' => '资源组名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testgroup',
                ),
                'ResourceGroupConfig' => 
                array (
                  'description' => '资源组配置。
> 1. CpuRateLimit：资源组可使用cpu资源百分比，单位：%
> 2. MemoryLimit：资源组可使用内存资源百分比，单位：%
> 3. MemorySharedQuota：提交到该资源组的事务之间共享的内存资源百分比，单位：%，默认值：80
> 4. MemorySpillRatio：内存密集型事务的内存使用阈值。当事务达到此阈值时，将溢出磁盘，单位：%，默认值：0
> 5. Concurrency：资源组允许的最大并发数，默认值：20',
                  'type' => 'string',
                  'required' => true,
                  'example' => '{"CpuRateLimit":"10","MemoryLimit":"12","MemorySharedQuota":"20","MemorySpillRatio":"75","Concurrency":"3"}',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '修改资源组',
    ),
    'DescribeDBResourceGroup' => 
    array (
      'summary' => '获取资源组详情。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197993',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 当该值为空时，返回所有资源组详情；当该值不为空，则返回指定资源组详情',
            'type' => 'string',
            'required' => false,
            'example' => 'testgroup',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'ResourceGroupItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceGroupItem' => 
                  array (
                    'description' => '资源组详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceGroupName' => 
                        array (
                          'description' => '资源组名称。',
                          'type' => 'string',
                          'example' => 'testgroup',
                        ),
                        'ResourceGroupConfig' => 
                        array (
                          'description' => '资源组配置。
> 1. CpuRateLimit：资源组可使用cpu资源百分比，单位：%
> 2. MemoryLimit：资源组可使用内存资源百分比，单位：%
> 3. MemorySharedQuota：提交到该资源组的事务之间共享的内存资源百分比，单位：%，默认值：80
> 4. MemorySpillRatio：内存密集型事务的内存使用阈值。当事务达到此阈值时，将溢出磁盘，单位：%，默认值：0
> 5. Concurrency：资源组允许的最大并发数，默认值：20',
                          'type' => 'string',
                          'example' => '{"CpuRateLimit":"10","MemoryLimit":"12","MemorySharedQuota":"20","MemorySpillRatio":"75","Concurrency":"3"}',
                        ),
                        'RoleList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Role' => 
                            array (
                              'description' => '角色列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '角色名称。',
                                'type' => 'string',
                                'example' => 'testrole',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"ResourceGroupItems\\": {\\n    \\"ResourceGroupItem\\": [\\n      {\\n        \\"ResourceGroupName\\": \\"testgroup\\",\\n        \\"ResourceGroupConfig\\": \\"{\\\\\\"CpuRateLimit\\\\\\":\\\\\\"10\\\\\\",\\\\\\"MemoryLimit\\\\\\":\\\\\\"12\\\\\\",\\\\\\"MemorySharedQuota\\\\\\":\\\\\\"20\\\\\\",\\\\\\"MemorySpillRatio\\\\\\":\\\\\\"75\\\\\\",\\\\\\"Concurrency\\\\\\":\\\\\\"3\\\\\\"}\\",\\n        \\"RoleList\\": {\\n          \\"Role\\": [\\n            \\"testrole\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取资源组详情',
    ),
    'BindDBResourceGroupWithRole' => 
    array (
      'summary' => '将资源组与数据库角色进行绑定。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
            'example' => 'testgroup',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '角色列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '角色名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'testrole',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '将资源组与数据库角色进行绑定',
    ),
    'UnbindDBResourceGroupWithRole' => 
    array (
      'summary' => '将资源组与数据库角色解绑。',
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
        'abilityTreeCode' => '203853',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
            'example' => 'testgroup',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleList',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '角色列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '角色名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'testrole',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\"\\n}","type":"json"}]',
      'title' => '将资源组与数据库角色解绑',
    ),
    'DescribeDBResourceManagementMode' => 
    array (
      'summary' => '获取实例资源管理模式。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '197975',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREgpdbGDXMO2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'ResourceManagementMode' => 
              array (
                'description' => '资源管理模式。取值：
- resourceGroup：资源组
- resourceQueue：资源队列',
                'type' => 'string',
                'example' => 'resourceGroup',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"ResourceManagementMode\\": \\"resourceGroup\\"\\n}","type":"json"}]',
      'title' => '获取实例资源管理模式',
    ),
    'ModifyMasterSpec' => 
    array (
      'summary' => '变更AnalyticDB PostgreSQL版实例的master资源。',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例当前所属的资源组ID。如何获取资源组ID，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'MasterCU',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master资源，取值如下： 
- 2 CU 
- 4 CU 
- 8 CU 
- 16 CU 
- 32 CU 
> 8CU以上的master资源会产生费用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '8 CU',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。

只会在API执行失败时返回该参数。',
                'type' => 'string',
                'example' => '******',
              ),
              'DbInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：
- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"ErrorMessage\\": \\"******\\",\\n  \\"DbInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"Status\\": true\\n}","type":"json"}]',
      'title' => '变更master资源',
      'description' => '本接口不支持变更存储预留模式实例。

请确保在使用该接口前，已充分了解AnalyticDB PostgreSQL版产品的[收费方式](~~35406~~)和<props="china">[价格](https://www.aliyun.com/price/product#/gpdb/detail/GreenplumPost)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/hybriddb-postgresql/pricing)</props>。',
    ),
    'DescribeSQLLogs' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL版实例的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'select 1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-03-10T06:30Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adbpgadmin',
          ),
        ),
        4 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'testadmin',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为<i>YYYY-MM-DDThh:mmZ</i>（UTC时间）。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过七天。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-03-17T06:30Z',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值说明：

- **30**
- **50**
- **100**

默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '30',
            'default' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于0且不超过Integer的最大值，默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行耗时，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源IP。',
            'type' => 'string',
            'required' => false,
            'example' => '100.**.**.90',
          ),
        ),
        10 => 
        array (
          'name' => 'ExecuteState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行状态。取值如下：

- **1**：成功。
- **0**：失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'OperationClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类别，取值如下：

- **DQL**
- **DML**
- **DDL**
- **DCL**
- **TCL**',
            'type' => 'string',
            'required' => false,
            'example' => 'DQL',
          ),
        ),
        12 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL的类型。

>- 如果设置了**OperationClass**参数，则**OperationType**的值必须属于对应的语言类型。例如**OperationClass**的值为**DQL**，则**OperationType**的值必须为**DQL**类型的SQL，例如**SELECT**。
- 如果没有设置**OperationClass**参数，则**OperationType**的值可以是任意类型SQL。
- 如果没有设置**OperationClass**参数也没有设置**OperationType**参数，则表示返回所有类型SQL。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELECT',
          ),
        ),
        13 => 
        array (
          'name' => 'MaxExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最大耗时，取值需大于等于0，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '1000',
          ),
        ),
        14 => 
        array (
          'name' => 'MinExecuteCost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢SQL最小耗时，取值需大于等于0，单位为秒（s）。',
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
            'type' => 'object',
            'properties' => 
            array (
              'PageRecordCount' => 
              array (
                'description' => '每页包含的记录个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A7941C94-B92F-46A0-BD3E-2D**********',
              ),
              'PageNumber' => 
              array (
                'description' => '查询结果页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OperationClass' => 
                    array (
                      'description' => '操作类别。',
                      'type' => 'string',
                      'example' => 'DQL',
                    ),
                    'ExecuteState' => 
                    array (
                      'description' => '执行状态。

- **success**：成功
- **fail**：失败',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'ExecuteCost' => 
                    array (
                      'description' => '执行耗时。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '2',
                    ),
                    'SQLText' => 
                    array (
                      'description' => 'SQL语句内容。',
                      'type' => 'string',
                      'example' => 'select 1',
                    ),
                    'SourcePort' => 
                    array (
                      'description' => '来源端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50514',
                    ),
                    'DBRole' => 
                    array (
                      'description' => '数据库角色。',
                      'type' => 'string',
                      'example' => 'master',
                    ),
                    'OperationType' => 
                    array (
                      'description' => '执行SQL的类型。',
                      'type' => 'string',
                      'example' => 'SELECT',
                    ),
                    'SourceIP' => 
                    array (
                      'description' => '来源IP。',
                      'type' => 'string',
                      'example' => '100.**.**.90',
                    ),
                    'SQLPlan' => 
                    array (
                      'description' => 'SQL执行计划。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'ReturnRowCounts' => 
                    array (
                      'description' => '执行结果返回的行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'DBName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'adbpgadmin',
                    ),
                    'OperationExecuteTime' => 
                    array (
                      'description' => '执行时间。',
                      'type' => 'string',
                      'example' => '2021-03-15T17:02:32Z',
                    ),
                    'ScanRowCounts' => 
                    array (
                      'description' => '扫描行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'AccountName' => 
                    array (
                      'description' => '执行SQL的数据库账号。',
                      'type' => 'string',
                      'example' => 'testadmin',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"A7941C94-B92F-46A0-BD3E-2D**********\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"OperationClass\\": \\"DQL\\",\\n      \\"ExecuteState\\": \\"success\\",\\n      \\"ExecuteCost\\": 2,\\n      \\"SQLText\\": \\"select 1\\",\\n      \\"SourcePort\\": 50514,\\n      \\"DBRole\\": \\"master\\",\\n      \\"OperationType\\": \\"SELECT\\",\\n      \\"SourceIP\\": \\"100.**.**.90\\",\\n      \\"SQLPlan\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"ReturnRowCounts\\": 1,\\n      \\"DBName\\": \\"adbpgadmin\\",\\n      \\"OperationExecuteTime\\": \\"2021-03-15T17:02:32Z\\",\\n      \\"ScanRowCounts\\": 1,\\n      \\"AccountName\\": \\"testadmin\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLLogsResponse>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>A7941C94-B92F-46A0-BD3E-2D**********</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <OperationClass>DQL</OperationClass>\\n        <ExecuteState>success</ExecuteState>\\n        <ExecuteCost>2</ExecuteCost>\\n        <SQLText>select 1</SQLText>\\n        <SourcePort>50514</SourcePort>\\n        <DBRole>master</DBRole>\\n        <OperationType>SELECT</OperationType>\\n        <SourceIP>100.**.**.90</SourceIP>\\n        <SQLPlan>\\"\\"</SQLPlan>\\n        <ReturnRowCounts>1</ReturnRowCounts>\\n        <DBName>adbpgadmin</DBName>\\n        <OperationExecuteTime>2021-03-15T17:02:32Z</OperationExecuteTime>\\n        <ScanRowCounts>1</ScanRowCounts>\\n        <AccountName>testadmin</AccountName>\\n    </Items>\\n</DescribeSQLLogsResponse>","errorExample":""}]',
      'title' => '获取SQL执行记录',
      'summary' => '查询SQL执行记录。',
      'description' => '> 该接口已废弃，如需查询SQL执行记录，请参见[DescribeSQLLogsV2](~~453722~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'HandleActiveSQLRecord' => 
    array (
      'summary' => '处理某个或多个活跃查询。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'Pids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '进程ID，即查询的唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '"3003925,3003928"',
          ),
        ),
        2 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '选择进程ID的操作类型。取值说明：
- **0**：取消。
- **1**：终止。
- **2**：强制终止。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：

- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'string',
                'example' => 'true',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp***************',
              ),
              'Results' => 
              array (
                'description' => '活跃查询处理结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '操作详情列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '处理结果状态。
- **false**：处理失败。
- **true**：处理成功。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'Pid' => 
                    array (
                      'description' => '进程ID，活跃查询SQL的唯一标识。',
                      'type' => 'string',
                      'example' => '3003925',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Status\\": \\"true\\",\\n  \\"DBInstanceId\\": \\"gp-bp***************\\",\\n  \\"Results\\": [\\n    {\\n      \\"Status\\": \\"true\\",\\n      \\"Pid\\": \\"3003925\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '处理某个活跃查询',
    ),
    'DescribeDBInstanceSupportMaxPerformance' => 
    array (
      'summary' => '查看实例的最大吞吐。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp***************',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp***************',
              ),
              'Performances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Performance' => 
                  array (
                    'description' => '性能指标对象数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '第N个性能指标对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '性能指标名称。',
                          'type' => 'string',
                          'example' => 'max_throughput：最大吞吐，max_iops：最大IOPS',
                        ),
                        'Value' => 
                        array (
                          'description' => '指标值',
                          'type' => 'string',
                          'example' => '90',
                        ),
                        'Bottleneck' => 
                        array (
                          'description' => '性能瓶颈类型。',
                          'type' => 'string',
                          'example' => 'ecs or disk',
                        ),
                        'Unit' => 
                        array (
                          'description' => '性能参数的单位。',
                          'type' => 'string',
                          'example' => '最大吞吐：MB/s 
最大IOPS：times/s',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"DBInstanceId\\": \\"gp-bp***************\\",\\n  \\"Performances\\": {\\n    \\"Performance\\": [\\n      {\\n        \\"Key\\": \\"max_throughput：最大吞吐，max_iops：最大IOPS\\",\\n        \\"Value\\": \\"90\\",\\n        \\"Bottleneck\\": \\"ecs or disk\\",\\n        \\"Unit\\": \\"最大吞吐：MB/s \\\\n最大IOPS：times/s\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查看实例的最大吞吐',
    ),
    'ResetIMVMonitorData' => 
    array (
      'summary' => '重置IMV统计信息。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp152460513z****',
          ),
        ),
        1 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'Status' => 
              array (
                'description' => 'API执行状态，取值如下：

- **false**：执行失败。
- **true**：执行成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"Status\\": true\\n}","type":"json"}]',
      'title' => '重置IMV统计信息',
    ),
    'DescribeIMVInfos' => 
    array (
      'summary' => '查询AnalyticDB PostgreSQL版实例的实时物化视图详情。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-xxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb',
          ),
        ),
        2 => 
        array (
          'name' => 'MVName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物化视图名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'public."mv1"',
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
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-xxxxxxxxx',
              ),
              'ImvInfos' => 
              array (
                'description' => '视图关系信息的对象数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '第N个试图关系信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MV' => 
                    array (
                      'description' => '试图名称。',
                      'type' => 'string',
                      'example' => 'public."mv1"',
                    ),
                    'Base' => 
                    array (
                      'description' => '物化视图依赖的表名。',
                      'type' => 'string',
                      'example' => '"public."t2"',
                    ),
                    'DetailInfo' => 
                    array (
                      'description' => '描述mv与base 的依赖关系和各个指标的统计值，用于构造血缘关系图数据。',
                      'type' => 'string',
                      'example' => '{\\"maintenance_calls\\" : 1, \\"avg_apply_time\\" : 2, \\"avg_calc_rows\\" : 1, \\"avg_calc_time\\" : 11, \\"avg_delta_rows\\" : 1, \\"avg_maintenance_total_time\\" : 14, \\"avg_maintenance_total_time_total\\" : 14, \\"max_apply_time\\" : 2, \\"max_calc_rows\\" : 1, \\"max_calc_time\\" : 11, \\"max_delta_rows\\" : 1, \\"max_maintenance_total_time\\" : 14, \\"max_maintenance_total_time_total\\" : 14, \\"min_apply_time\\" : 2, \\"min_calc_rows\\" : 1, \\"min_calc_time\\" : 11, \\"min_delta_rows\\" : 1, \\"min_maintenance_total_time\\" : 14, \\"min_maintenance_total_time_total\\" : 14, \\"max_outerjoin_apply_time\\" : null, \\"max_outerjoin_calc_rows\\" : null, \\"max_outerjoin_calc_time\\" : null, \\"max_outerjoin_delta_rows\\" : null, \\"avg_outerjoin_apply_time\\" : null, \\"avg_outerjoin_calc_rows\\" : null, \\"avg_outerjoin_calc_time\\" : null, \\"avg_outerjoin_delta_rows\\" : null, \\"min_outerjoin_apply_time\\" : null, \\"min_outerjoin_calc_rows\\" : null, \\"min_outerjoin_calc_time\\" : null, \\"min_outerjoin_delta_rows\\" : null, \\"create_rows\\" : null, \\"create_time\\" : null, \\"direct_visited\\" : null, \\"indirect_visited\\" : null, \\"max_refresh_rows\\" : null, \\"max_refresh_time\\" : null, \\"avg_refresh_rows\\" : null, \\"avg_refresh_time\\" : null, \\"min_refresh_rows\\" : null, \\"min_refresh_time\\" : null, \\"refresh_calls\\" : null, \\"avg_wait_lock_time\\" : null, \\"max_wait_lock_time\\" : null, \\"min_wait_lock_time\\" : null, \\"latest_maintenance_time\\" : \\"2023-08-09T07:39:14.753252+00:00\\"}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"DBInstanceId\\": \\"gp-xxxxxxxxx\\",\\n  \\"ImvInfos\\": [\\n    {\\n      \\"MV\\": \\"public.\\\\\\"mv1\\\\\\"\\",\\n      \\"Base\\": \\"\\\\\\"public.\\\\\\"t2\\\\\\"\\",\\n      \\"DetailInfo\\": \\"{\\\\\\\\\\\\\\"maintenance_calls\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"avg_apply_time\\\\\\\\\\\\\\" : 2, \\\\\\\\\\\\\\"avg_calc_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"avg_calc_time\\\\\\\\\\\\\\" : 11, \\\\\\\\\\\\\\"avg_delta_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"avg_maintenance_total_time\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"avg_maintenance_total_time_total\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"max_apply_time\\\\\\\\\\\\\\" : 2, \\\\\\\\\\\\\\"max_calc_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"max_calc_time\\\\\\\\\\\\\\" : 11, \\\\\\\\\\\\\\"max_delta_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"max_maintenance_total_time\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"max_maintenance_total_time_total\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"min_apply_time\\\\\\\\\\\\\\" : 2, \\\\\\\\\\\\\\"min_calc_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"min_calc_time\\\\\\\\\\\\\\" : 11, \\\\\\\\\\\\\\"min_delta_rows\\\\\\\\\\\\\\" : 1, \\\\\\\\\\\\\\"min_maintenance_total_time\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"min_maintenance_total_time_total\\\\\\\\\\\\\\" : 14, \\\\\\\\\\\\\\"max_outerjoin_apply_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_outerjoin_calc_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_outerjoin_calc_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_outerjoin_delta_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_outerjoin_apply_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_outerjoin_calc_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_outerjoin_calc_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_outerjoin_delta_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_outerjoin_apply_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_outerjoin_calc_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_outerjoin_calc_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_outerjoin_delta_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"create_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"create_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"direct_visited\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"indirect_visited\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_refresh_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_refresh_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_refresh_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_refresh_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_refresh_rows\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_refresh_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"refresh_calls\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"avg_wait_lock_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"max_wait_lock_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"min_wait_lock_time\\\\\\\\\\\\\\" : null, \\\\\\\\\\\\\\"latest_maintenance_time\\\\\\\\\\\\\\" : \\\\\\\\\\\\\\"2023-08-09T07:39:14.753252+00:00\\\\\\\\\\\\\\"}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实时物化视图详情',
    ),
    'DescribeActiveSQLRecords' => 
    array (
      'summary' => '查询活跃SQL记录。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 您可以调用[DescribeDBInstances](~~86911~~)接口查看目标地域下所有的AnalyticDB PostgreSQL实例的详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gp-bp12ga6v69h86****',
          ),
        ),
        1 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名，默认为所有数据库。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        2 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'testuser',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始日期，格式：`yyyy-MM-ddTHH:mm:ssZ`。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-08-03T09:30Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式如：yyyy-MM-ddTHH:mm:ssZ，且大于查询开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-07T07:59Z',
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
            'example' => 'SELECT',
          ),
        ),
        6 => 
        array (
          'name' => 'MinDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大于某个时间跨度范围，单位为秒（s）。例如，100表示大于100秒的数据。',
            'type' => 'string',
            'required' => false,
            'example' => '300',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '小于某个时间跨度范围，单位为秒（s）。',
            'type' => 'string',
            'required' => false,
            'example' => '600',
          ),
        ),
        8 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段和排序方式。

默认为`{"Field":"StartTime","Type":"Desc"}`，表示按开始时间进行排序。暂不支持其他排序字段和排序方式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"Field":"StartTime","Type":"Desc"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '描述。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABB39CC3-4488-4857-905D-2E4A051D0521',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'gp-bp12ga6v69h86****',
              ),
              'Queries' => 
              array (
                'description' => '详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PID' => 
                    array (
                      'description' => '进程ID。',
                      'type' => 'string',
                      'example' => '6164',
                    ),
                    'SessionID' => 
                    array (
                      'description' => '查询所属的会话ID。',
                      'type' => 'string',
                      'example' => '6612',
                    ),
                    'State' => 
                    array (
                      'description' => '异步请求的执行状态。取值说明：
- **RUNNING**：运行中。
- **BLOCK**：阻塞中。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'QueryStart' => 
                    array (
                      'description' => '查询起始时间。',
                      'type' => 'string',
                      'example' => '2022-05-07T06:59Z',
                    ),
                    'QueryDuration' => 
                    array (
                      'description' => '查询运行时间。单位为秒（s）。',
                      'type' => 'string',
                      'example' => '60',
                    ),
                    'Query' => 
                    array (
                      'description' => '查询对应的SQL文本。',
                      'type' => 'string',
                      'example' => 'Select * from t1,t2 where t1.id=t2.id;',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'testuser',
                    ),
                    'Database' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'xg_analyse',
                    ),
                    'ClientAddr' => 
                    array (
                      'description' => '客户端地址。',
                      'type' => 'string',
                      'example' => '0.0.0.0',
                    ),
                    'SqlTruncated' => 
                    array (
                      'description' => 'SQL语句是否截断。取值说明：
- true：是。
- false：否。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'SqlTruncatedThreshold' => 
                    array (
                      'description' => 'SQL语句截断阈值。',
                      'type' => 'string',
                      'example' => '1024',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABB39CC3-4488-4857-905D-2E4A051D0521\\",\\n  \\"DBInstanceId\\": \\"gp-bp12ga6v69h86****\\",\\n  \\"Queries\\": [\\n    {\\n      \\"PID\\": \\"6164\\",\\n      \\"SessionID\\": \\"6612\\",\\n      \\"State\\": \\"running\\",\\n      \\"QueryStart\\": \\"2022-05-07T06:59Z\\",\\n      \\"QueryDuration\\": \\"60\\",\\n      \\"Query\\": \\"Select * from t1,t2 where t1.id=t2.id;\\",\\n      \\"User\\": \\"testuser\\",\\n      \\"Database\\": \\"xg_analyse\\",\\n      \\"ClientAddr\\": \\"0.0.0.0\\",\\n      \\"SqlTruncated\\": \\"false\\",\\n      \\"SqlTruncatedThreshold\\": \\"1024\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询活跃SQL记录',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'gpdb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'gpdb.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'gpdb.cn-chengdu.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'gpdb.ap-northeast-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'gpdb.ap-northeast-2.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'gpdb.ap-southeast-2.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'gpdb.ap-southeast-3.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'gpdb.ap-southeast-5.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'gpdb.us-east-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'gpdb.us-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'gpdb.eu-west-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'gpdb.eu-central-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'gpdb.ap-south-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'gpdb.me-east-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'gpdb.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'gpdb.ap-southeast-7.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'gpdb.me-central-1.aliyuncs.com',
    ),
  ),
);
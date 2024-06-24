<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'polardb',
    'version' => '2017-08-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 117994,
      'title' => '售卖管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStoragePlan',
        1 => 'DescribeAutoRenewAttribute',
        2 => 'DescribeClassList',
        3 => 'DescribeDBClusterAvailableResources',
        4 => 'EvaluateRegionResource',
        5 => 'ModifyAutoRenewAttribute',
        6 => 'TransformDBClusterPayType',
      ),
    ),
    1 => 
    array (
      'id' => 117988,
      'title' => '集群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBCluster',
        1 => 'DeleteDBCluster',
        2 => 'DescribeDBClusters',
        3 => 'DescribeDBClusterAttribute',
        4 => 'DescribeDBClusterServerlessConf',
        5 => 'DescribePolarSQLCollectorPolicy',
        6 => 'DescribeRegions',
        7 => 'DescribeTasks',
        8 => 'DescribeVSwitches',
        9 => 'ModifyDBCluster',
        10 => 'ModifyDBClusterDescription',
        11 => 'ModifyDBClusterDeletion',
        12 => 'ModifyDBClusterMaintainTime',
        13 => 'EnableDBClusterServerless',
        14 => 'DisableDBClusterServerless',
        15 => 'ModifyDBClusterServerlessConf',
        16 => 'ModifyDBClusterStorageSpace',
        17 => 'ManuallyStartDBCluster',
      ),
    ),
    2 => 
    array (
      'id' => 117989,
      'title' => '高可用部署架构',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBClusterPrimaryZone',
        1 => 'FailoverDBCluster',
      ),
    ),
    3 => 
    array (
      'id' => 169620,
      'title' => '内核版本管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterVersion',
        1 => 'UpgradeDBClusterVersion',
      ),
    ),
    4 => 
    array (
      'id' => 118015,
      'title' => '白名单管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterAccessWhitelist',
        1 => 'ModifyDBClusterAccessWhitelist',
      ),
    ),
    5 => 
    array (
      'id' => 182258,
      'title' => '全局IP白名单模板管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGlobalSecurityIPGroup',
        1 => 'DeleteGlobalSecurityIPGroup',
        2 => 'DescribeGlobalSecurityIPGroup',
        3 => 'DescribeGlobalSecurityIPGroupRelation',
        4 => 'ModifyGlobalSecurityIPGroup',
        5 => 'ModifyGlobalSecurityIPGroupName',
        6 => 'ModifyGlobalSecurityIPGroupRelation',
      ),
    ),
    6 => 
    array (
      'id' => 118018,
      'title' => 'SSL加密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterSSL',
        1 => 'ModifyDBClusterSSL',
      ),
    ),
    7 => 
    array (
      'id' => 118021,
      'title' => 'TDE加密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckKMSAuthorized',
        1 => 'DescribeDBClusterTDE',
        2 => 'DescribeUserEncryptionKeyList',
        3 => 'ModifyDBClusterTDE',
      ),
    ),
    8 => 
    array (
      'id' => 118024,
      'title' => '节点管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBNodes',
        1 => 'DeleteDBNodes',
        2 => 'ModifyDBNodeClass',
        3 => 'ModifyDBNodesClass',
        4 => 'ModifyDBNodeHotReplicaMode',
        5 => 'RestartDBNode',
        6 => 'TempModifyDBNode',
        7 => 'TempModifyDBNode',
      ),
    ),
    9 => 
    array (
      'id' => 118029,
      'title' => '参数管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateParameterGroup',
        1 => 'DescribeDBClusterParameters',
        2 => 'DescribeDBNodesParameters',
        3 => 'DescribeParameterTemplates',
        4 => 'DescribeParameterGroups',
        5 => 'DescribeParameterGroup',
        6 => 'DeleteParameterGroup',
        7 => 'ModifyDBClusterAndNodesParameters',
        8 => 'ModifyDBClusterParameters',
        9 => 'ModifyDBNodesParameters',
      ),
    ),
    10 => 
    array (
      'id' => 118036,
      'title' => '访问地址管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBClusterEndpoint',
        1 => 'CreateDBEndpointAddress',
        2 => 'DescribeDBClusterEndpoints',
        3 => 'ModifyDBClusterEndpoint',
        4 => 'ModifyDBEndpointAddress',
        5 => 'DeleteDBClusterEndpoint',
        6 => 'DeleteDBEndpointAddress',
      ),
    ),
    11 => 
    array (
      'id' => 118044,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeSlowLogRecords',
        1 => 'DescribeSlowLogs',
        2 => 'DescribeDBClusterAuditLogCollector',
        3 => 'ModifyDBClusterAuditLogCollector',
      ),
    ),
    12 => 
    array (
      'id' => 118051,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'CheckAccountName',
        2 => 'DescribeAccounts',
        3 => 'ModifyAccountDescription',
        4 => 'GrantAccountPrivilege',
        5 => 'RevokeAccountPrivilege',
        6 => 'ResetAccount',
        7 => 'DeleteAccount',
        8 => 'ModifyAccountPassword',
      ),
    ),
    13 => 
    array (
      'id' => 118061,
      'title' => '数据库管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDatabase',
        1 => 'DeleteDatabase',
        2 => 'DescribeDatabases',
        3 => 'DescribeCharacterSetName',
        4 => 'CheckDBName',
        5 => 'DescribeDBInitializeVariable',
        6 => 'ModifyDBDescription',
      ),
    ),
    14 => 
    array (
      'id' => 117975,
      'title' => '全球数据库网络（GDN）管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGlobalDatabaseNetwork',
        1 => 'DeleteGlobalDatabaseNetwork',
        2 => 'DescribeGlobalDatabaseNetwork',
        3 => 'DescribeGlobalDatabaseNetworks',
        4 => 'ModifyGlobalDatabaseNetwork',
        5 => 'RemoveDBClusterFromGDN',
        6 => 'SwitchOverGlobalDatabaseNetwork',
        7 => 'ResetGlobalDatabaseNetwork',
      ),
    ),
    15 => 
    array (
      'id' => 118070,
      'title' => '备份管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackup',
        1 => 'DescribeBackups',
        2 => 'DescribeBackupTasks',
        3 => 'DescribeBackupLogs',
        4 => 'DescribeDetachedBackups',
        5 => 'DescribeDBClustersWithBackups',
        6 => 'DeleteBackup',
        7 => 
        array (
          'id' => 118071,
          'title' => '备份策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeBackupPolicy',
            1 => 'DescribeLogBackupPolicy',
            2 => 'ModifyBackupPolicy',
            3 => 'ModifyLogBackupPolicy',
          ),
        ),
      ),
    ),
    16 => 
    array (
      'id' => 169621,
      'title' => '库表恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeMetaList',
        1 => 'RestoreTable',
      ),
    ),
    17 => 
    array (
      'id' => 118085,
      'title' => '从RDS迁移',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterMigration',
        1 => 'ModifyDBClusterMigration',
        2 => 'CloseDBClusterMigration',
      ),
    ),
    18 => 
    array (
      'id' => 118089,
      'title' => '标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
      ),
    ),
    19 => 
    array (
      'id' => 118093,
      'title' => '待处理事件管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePendingMaintenanceAction',
        1 => 'DescribePendingMaintenanceActions',
        2 => 'ModifyPendingMaintenanceAction',
      ),
    ),
    20 => 
    array (
      'id' => 118011,
      'title' => '计划任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeScheduleTasks',
        1 => 'CancelScheduleTasks',
      ),
    ),
    21 => 
    array (
      'id' => 117980,
      'title' => '脱敏规则管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeMaskingRules',
        1 => 'ModifyMaskingRules',
        2 => 'DeleteMaskingRules',
      ),
    ),
    22 => 
    array (
      'id' => 118097,
      'title' => '监控管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBNodePerformance',
        1 => 'DescribeDBClusterPerformance',
        2 => 'DescribeDBProxyPerformance',
        3 => 'DescribeDBClusterMonitor',
        4 => 'ModifyDBClusterMonitor',
      ),
    ),
    23 => 
    array (
      'id' => 182260,
      'title' => 'PolarDB for AI',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAITaskStatus',
        1 => 'OpenAITask',
        2 => 'CloseAITask',
      ),
    ),
    24 => 
    array (
      'id' => 118032,
      'title' => 'DBLink',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBLink',
        1 => 'RestartDBLink',
        2 => 'DeleteDBLink',
        3 => 'DescribeDBLinks',
      ),
    ),
    25 => 
    array (
      'id' => 182751,
      'title' => '连接诊断',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterConnectivity',
      ),
    ),
    26 => 
    array (
      'id' => 186623,
      'title' => '冷数据归档',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateColdStorageInstance',
      ),
    ),
    27 => 
    array (
      'id' => 169581,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RefreshDBClusterStorageUsage',
        1 => 'EnableFirewallRules',
        2 => 'ModifyDBClusterResourceGroup',
        3 => 'CheckServiceLinkedRole',
        4 => 'CreateServiceLinkedRole',
        5 => 'DescribeDasConfig',
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
    'CreateStoragePlan' => 
    array (
      'summary' => '购买存储包。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '该参数用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间该参数值的唯一性。该参数区分大小写、长度不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f5********************',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储包时长单位。取值：

- **Month**：月

- **Year**：年',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
          ),
        ),
        2 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储包的使用时长。

- 当**Period**取值为**Month**时，取值为1~9。

- 当**Period**取值为**Year**时，取值范围：【1,2,3,5】。',
            'type' => 'string',
            'required' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'StorageClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储包的规格，单位为GB。取值范围：【50,100,200,300,500,1000,2000,3000,5000,10000,15000,20000,25000,30000,50000,100000,200000】。',
            'type' => 'string',
            'required' => true,
            'example' => '500',
          ),
        ),
        4 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储包类型。取值：

- **Mainland**：中国内地通用

- **Overseas**：中国香港及海外通用',
            'type' => 'string',
            'required' => true,
            'example' => 'Mainland',
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
                'example' => '69A85BAF-1089-4CDF-A82F-0A140F******',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'POLARDB-cn-**************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035638*******',
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
            'errorCode' => 'InvalidStorageUsedTime.Malformed',
            'errorMessage' => 'The UsedTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissParameter.StorageUsedTime',
            'errorMessage' => 'The StoragePeriod is needed.',
          ),
          2 => 
          array (
            'errorCode' => 'MissParameter.StoragePeriod',
            'errorMessage' => 'The StoragePeriod is needed.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.StorageClass',
            'errorMessage' => 'The StorageClass is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'MissParameter.StorageType',
            'errorMessage' => 'The StorageType is needed.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidStorageClass.Malformed',
            'errorMessage' => 'The Specified StorageClass is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69A85BAF-1089-4CDF-A82F-0A140F******\\",\\n  \\"DBInstanceId\\": \\"POLARDB-cn-**************\\",\\n  \\"OrderId\\": \\"2035638*******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateStoragePlanResponse>\\n    <RequestId>69A85BAF-1089-4CDF-A82F-0A140F******</RequestId>\\n    <DBInstanceId>POLARDB-cn-**************</DBInstanceId>\\n    <OrderId>2035638*******</OrderId>\\n</CreateStoragePlanResponse>","errorExample":""}]',
      'title' => '新建存储计划',
    ),
    'DescribeAutoRenewAttribute' => 
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
>您可以通过接口[DescribeRegions](~~98041~~)查看地域ID详情。 ',
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
            'description' => '集群ID，支持传入多个集群ID，多个集群ID间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围为30、50、100，默认值为30。 ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。取值为大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-re*********',
          ),
        ),
      ),
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
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '65D7ACE6-4A61-4B6E-B357-8CB24A******',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AutoRenewAttribute' => 
                  array (
                    'description' => '集群续费信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-*****************',
                        ),
                        'PeriodUnit' => 
                        array (
                          'description' => '时长单位： 

- Year：年。 
- Month：月。',
                          'type' => 'string',
                          'example' => 'Month',
                        ),
                        'Duration' => 
                        array (
                          'description' => '续费时长。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'RenewalStatus' => 
                        array (
                          'description' => '续费状态，取值范围如下： 

- AutoRenewal：自动续费。  
- Normal：手动续费，到期前短信提醒。 
- NotRenewal：到期不续费，到期前无提醒，只在到期前第三天发送不续费提醒。',
                          'type' => 'string',
                          'example' => 'AutoRenewal',
                        ),
                        'AutoRenewEnabled' => 
                        array (
                          'description' => '是否开启自动续费： 

- true：开启。 
- false：关闭。 ',
                          'type' => 'boolean',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"65D7ACE6-4A61-4B6E-B357-8CB24A******\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"AutoRenewAttribute\\": [\\n      {\\n        \\"DBClusterId\\": \\"pc-*****************\\",\\n        \\"PeriodUnit\\": \\"Month\\",\\n        \\"Duration\\": 4,\\n        \\"RenewalStatus\\": \\"AutoRenewal\\",\\n        \\"AutoRenewEnabled\\": true,\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n\\t\\"Items\\": {\\n\\t\\t\\"AutoRenewAttribute\\": [\\n\\t\\t\\t{\\n\\t\\t\\t\\t\\"RenewalStatus\\": \\"AutoRenewal\\",\\n\\t\\t\\t\\t\\"Duration\\": 1,\\n\\t\\t\\t\\t\\"RegionId\\": \\"cn-hangzhou\\",\\n\\t\\t\\t\\t\\"AutoRenewEnabled\\": true,\\n\\t\\t\\t\\t\\"PeriodUnit\\": \\"Month\\",\\n\\t\\t\\t\\t\\"DBClusterId\\": \\"pc-xxxxxxxxxxxxxxxx\\"\\n\\t\\t\\t}\\n\\t\\t]\\n\\t},\\n\\t\\"TotalRecordCount\\": 1,\\n\\t\\"PageNumber\\": 1,\\n\\t\\"RequestId\\": \\"8ABD1FF2-85B1-4D03-8C99-FB603B8AF82D\\",\\n\\t\\"PageRecordCount\\": 1\\n}"},{"type":"xml","example":"<DescribeAutoRenewAttributeResponse>\\n<TotalRecordCount>1</TotalRecordCount>\\n<PageRecordCount>1</PageRecordCount>\\n<RequestId>65D7ACE6-4A61-4B6E-B357-8CB24A******</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <AutoRenewAttribute>\\n        <AutoRenewEnabled>true</AutoRenewEnabled>\\n        <DBClusterId>pc-*****************</DBClusterId>\\n        <RenewalStatus>AutoRenewal</RenewalStatus>\\n        <Duration>4</Duration>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <PeriodUnit>Month</PeriodUnit>\\n    </AutoRenewAttribute>\\n</Items>\\n</DescribeAutoRenewAttributeResponse>","errorExample":"<DescribeAutoRenewAttributeResponse>  \\n\\t<Items>\\n\\t\\t<AutoRenewAttribute>\\n\\t\\t\\t<RenewalStatus>Normal</RenewalStatus>\\n\\t\\t\\t<Duration>1</Duration>\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t\\t\\t<AutoRenewEnabled>true</AutoRenewEnabled>\\n\\t\\t\\t<PeriodUnit>Month</PeriodUnit>\\n\\t\\t\\t<DBClusterId>pc-xxxxxxxxxxxxxxxx</DBClusterId>\\n\\t\\t</AutoRenewAttribute>\\n\\t</Items>\\n\\t<TotalRecordCount>1</TotalRecordCount>\\n\\t<PageNumber>1</PageNumber>\\n\\t<RequestId>8ABD1FF2-85B1-4D03-8C99-FB603B8AF82D</RequestId>\\n\\t<PageRecordCount>1</PageRecordCount>\\n</DescribeAutoRenewAttributeResponse>"}]',
      'title' => '查询集群自动续费状态',
      'summary' => '查询PolarDB包年包月集群自动续费状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClassList' => 
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
          'name' => 'MasterHa',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品节点数量。取值范围如下：
- single: 单节点。
- cluster: 集群版。
- all: 单节点和集群版。',
            'type' => 'string',
            'required' => false,
            'example' => 'cluster',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        2 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品Code。取值范围如下：
* polardb_sub：中国内地包年包月。
* polardb_sub _intl：中国香港及海外包年包月。
* polardb_payg：中国内地按量付费。
* polardb_payg_intl：中国香港及海外按量付费。
* polardb_sub_jushita：聚石塔包年包月。
* polardb_payg_jushita：聚石塔按量付费。
* polardb_sub_cainiao：菜鸟包年包月。
* polardb_payg_cainiao：菜鸟按量付费。
>- 如果您使用的是阿里云国内站账号，只能查看国内的商品Code。
>- 如果您使用的是阿里云国际站账号，只能查看国际的商品Code。
>- 如果您使用的是聚石塔账号，只能查看聚石塔的商品Code。
>- 如果您使用的是菜鸟账号，只能查看菜鸟的商品Code。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'polardb_sub',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型。取值范围如下：
* BUY：新购。
* UPGRADE：变更配置。
* RENEW：续费。
* CONVERT：转换付费类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'BUY',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 如果您使用的是阿里云国际站账号，该参数必填。',
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
                'example' => '69A85BAF-1089-4CDF-A82F-0A140F******',
              ),
              'Items' => 
              array (
                'description' => '集群规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Psl4MaxIOPS' => 
                    array (
                      'description' => 'PSL4最大I/O请求次数，即IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '48000',
                    ),
                    'ClassTypeLevel' => 
                    array (
                      'description' => '规格类型。',
                      'type' => 'string',
                      'example' => 'enterprise',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'CPU核数。单位：个。',
                      'type' => 'string',
                      'example' => '8',
                    ),
                    'ReferencePrice' => 
                    array (
                      'description' => '价格。

<props="china">单位：分（人民币）。</props>
<props="intl">单位：美分（美元）。</props>

>* CommodityCode参数中传入按量付费的商品Code时，显示为每小时的价格。
>* CommodityCode参数中传入包年包月的商品Code时，显示为每月的价格。',
                      'type' => 'string',
                      'example' => '200000',
                    ),
                    'ReferenceExtPrice' => 
                    array (
                      'description' => '额外价格。

<props="china">单位：分（人民币）。</props>
<props="intl">单位：美分（美元）。</props>

>* MasterHa参数中传入cluster和single时，显示与ReferencePrice相同。
>* MasterHa参数中传入cluster和single时，显示单节点商品的价格。',
                      'type' => 'string',
                      'example' => '200000',
                    ),
                    'MaxConnections' => 
                    array (
                      'description' => '最大集群并发连接数。',
                      'type' => 'string',
                      'example' => '8000',
                    ),
                    'MemoryClass' => 
                    array (
                      'description' => '内存容量。单位：GB。',
                      'type' => 'string',
                      'example' => '32',
                    ),
                    'ClassCode' => 
                    array (
                      'description' => '集群规格。',
                      'type' => 'string',
                      'example' => 'polar.mysql.x4.medium',
                    ),
                    'ClassGroup' => 
                    array (
                      'description' => '集群规格族。取值范围：
* Exclusive package：独享套餐。
* Exclusive physical machine：独占物理机。
* Beginner：入门级。
* Historical specifications：历史规格。',
                      'type' => 'string',
                      'example' => 'Exclusive package',
                    ),
                    'Psl5MaxIOPS' => 
                    array (
                      'description' => 'PSL5最大I/O请求次数，即IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '96000',
                    ),
                    'MaxIOPS' => 
                    array (
                      'description' => '最大I/O请求次数，即IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '32000',
                    ),
                    'MaxStorageCapacity' => 
                    array (
                      'description' => '最大存储容量。单位：TB。',
                      'type' => 'string',
                      'example' => '20',
                    ),
                    'Pl1MaxIOPS' => 
                    array (
                      'description' => 'ESSD PL1云盘的最大IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '50000',
                    ),
                    'Pl2MaxIOPS' => 
                    array (
                      'description' => 'ESSD PL2云盘的最大IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '100000',
                    ),
                    'Pl3MaxIOPS' => 
                    array (
                      'description' => 'ESSD PL3云盘的最大IOPS。单位：次/秒。',
                      'type' => 'string',
                      'example' => '1000000',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69A85BAF-1089-4CDF-A82F-0A140F******\\",\\n  \\"Items\\": [\\n    {\\n      \\"Psl4MaxIOPS\\": \\"48000\\",\\n      \\"ClassTypeLevel\\": \\"enterprise\\",\\n      \\"Cpu\\": \\"8\\",\\n      \\"ReferencePrice\\": \\"200000\\",\\n      \\"ReferenceExtPrice\\": \\"200000\\",\\n      \\"MaxConnections\\": \\"8000\\",\\n      \\"MemoryClass\\": \\"32\\",\\n      \\"ClassCode\\": \\"polar.mysql.x4.medium\\",\\n      \\"ClassGroup\\": \\"Exclusive package\\",\\n      \\"Psl5MaxIOPS\\": \\"96000\\",\\n      \\"MaxIOPS\\": \\"32000\\",\\n      \\"MaxStorageCapacity\\": \\"20\\",\\n      \\"Pl1MaxIOPS\\": \\"50000\\",\\n      \\"Pl2MaxIOPS\\": \\"100000\\",\\n      \\"Pl3MaxIOPS\\": \\"1000000\\"\\n    }\\n  ],\\n  \\"RegionId\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeClassListResponse>\\n    <RequestId>69A85BAF-1089-4CDF-A82F-0A140F******</RequestId>\\n    <Items>\\n        <Psl4MaxIOPS>48000</Psl4MaxIOPS>\\n        <ClassTypeLevel>enterprise</ClassTypeLevel>\\n        <Cpu>8</Cpu>\\n        <ReferencePrice>200000</ReferencePrice>\\n        <MaxConnections>8000</MaxConnections>\\n        <MemoryClass>32</MemoryClass>\\n        <ClassCode>polar.mysql.x4.medium</ClassCode>\\n        <ClassGroup>Exclusive package</ClassGroup>\\n        <Psl5MaxIOPS>96000</Psl5MaxIOPS>\\n        <MaxIOPS>32000</MaxIOPS>\\n        <MaxStorageCapacity>20</MaxStorageCapacity>\\n        <Pl1MaxIOPS>50000</Pl1MaxIOPS>\\n        <Pl2MaxIOPS>100000</Pl2MaxIOPS>\\n        <Pl3MaxIOPS>1000000</Pl3MaxIOPS>\\n    </Items>\\n    <RegionId>cn-hangzhou</RegionId>\\n</DescribeClassListResponse>","errorExample":""}]',
      'title' => '查询polardb集群的规格列表',
      'summary' => '查看集群规格列表。',
    ),
    'DescribeDBClusterAvailableResources' => 
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
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值范围如下：

- **Postpaid**：按量付费（也称后付费或按小时付费）。
- **Prepaid**：包年包月（也称预付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Postpaid',
          ),
        ),
        1 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，取值范围如下：

- **MySQL**
- **PostgreSQL**
- **Oracle**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        2 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎版本号。
MySQL版本号取值范围如下： 
* **5.6**
* **5.7**
* **8.0**

PostgreSQL版本号取值范围如下：
* **11**
* **14**

Oracle版本号取值范围如下：
* **11**
* **14**

> 当传入**DBType**参数时，该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '5.6',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点规格，详情请参见[计算节点规格](~~102542~~)。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'polar.mysql.x4.large',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。默认为**cn-hangzhou**。

> 可通过接口[DescribeRegions](~~98041~~)查看可用的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。

> 可通过[DescribeRegions](~~98041~~)查看可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
      ),
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
                'example' => '2B19F698-8FFC-4918-B9E2-58D878******',
              ),
              'AvailableZones' => 
              array (
                'description' => '可售卖的资源信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SupportedEngines' => 
                    array (
                      'description' => '可售卖引擎列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Engine' => 
                          array (
                            'description' => '数据库引擎版本。',
                            'type' => 'string',
                            'example' => 'mysql57',
                          ),
                          'AvailableResources' => 
                          array (
                            'description' => '可售卖的资源列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DBNodeClass' => 
                                array (
                                  'description' => '节点规格。',
                                  'type' => 'string',
                                  'example' => 'polar.mysql.x4.large',
                                ),
                                'Category' => 
                                array (
                                  'description' => '集群系列，取值范围如下：
* **Normal**：集群版
* **Basic**：单节点
* **ArchiveNormal**：高压缩引擎（X-Engine）
* **NormalMultimaster**：多主集群（库表）
* **SENormal**：标准版
> * 仅PolarDB MySQL版支持单节点产品系列。
> * 仅PolarDB MySQL版8.0版本的集群，支持高压缩引擎（X-Engine）和多主集群（库表）系列。',
                                  'type' => 'string',
                                  'example' => 'Normal',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBVersion.Malformed',
            'errorMessage' => 'The Specified DBVersion is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B19F698-8FFC-4918-B9E2-58D878******\\",\\n  \\"AvailableZones\\": [\\n    {\\n      \\"SupportedEngines\\": [\\n        {\\n          \\"Engine\\": \\"mysql57\\",\\n          \\"AvailableResources\\": [\\n            {\\n              \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n              \\"Category\\": \\"Normal\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAvailableResourcesResponse>\\n    <RequestId>2B19F698-8FFC-4918-B9E2-58D878******</RequestId>\\n    <AvailableZones>\\n        <SupportedEngines>\\n            <Engine>mysql57</Engine>\\n            <AvailableResources>\\n                <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n                <Category>Normal</Category>\\n            </AvailableResources>\\n        </SupportedEngines>\\n        <ZoneId>cn-hangzhou-i</ZoneId>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </AvailableZones>\\n</DescribeDBClusterAvailableResourcesResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群可售卖资源',
      'summary' => '查询PolarDB集群可售卖资源。',
      'description' => ' ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EvaluateRegionResource' => 
    array (
      'summary' => '进行资源评估。',
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
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '引擎',
            'description' => '数据库引擎类型，取值范围如下：
- **MySQL**
- **PostgreSQL**
- **Oracle**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MySQL',
          ),
        ),
        1 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '引擎版本',
            'description' => '数据库引擎版本号。
* MySQL版本号取值范围如下： 
    * **5.6**
    * **5.7**
    * **8.0**
* PostgreSQL版本号取值范围如下：
    * **11**
    * **14**
* Oracle版本号取值范围如下：
    * **11**
    * **14**',
            'type' => 'string',
            'required' => true,
            'example' => '8.0',
          ),
        ),
        2 => 
        array (
          'name' => 'SubDomain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子域',
            'description' => '子域。即顶级域名（一级域名或父域名）的下一级。例如：父域名为：cn-beijing，则它的子域可以为cn-beijing-i-aliyun。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-beijing-i-aliyun',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例规格',
            'description' => '节点规格，详情请参见如下文档：

- PolarDB MySQL版：[计算节点规格](~~102542~~)。
- PolarDB PostgreSQL版（兼容Oracle）：[计算节点规格](~~207921~~)。
- PolarDB PostgreSQL版：[计算节点规格](~~209380~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'polar.mysql.x4.large',
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceConnType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定实例链路类型，默认为后端随机选择，可取值为：lvs|proxy|dns',
            'description' => '指定集群链路类型，后端随机选择默认值，取值范围如下：
* **lvs**：Linux虚拟服务器。
* **proxy**：代理服务器。
* **dns**：域名系统。',
            'type' => 'string',
            'required' => false,
            'example' => 'lvs',
            'enum' => 
            array (
              0 => 'lvs',
              1 => 'proxy',
              2 => 'dns',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'DispenseMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可用区模式（传统模式、多可用区模式）',
            'description' => '是否返回支持单可用区部署功能的可用区列表。取值范围如下：
* **0**（默认）：不返回。
* **1**：返回。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'NeedMaxScaleLink',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否创建Maxscale',
            'description' => '是否创建Maxscale，取值范围如下：
* **true**（默认）：创建Maxscale。
* **false**：不创建Maxscale。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源组Id',
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域ID',
            'description' => '地域ID。
> 您可以通过[DescribeRegions](~~98041~~)接口查看可用地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可用区ID',
            'description' => '可用区ID。
> 您可以通过[DescribeRegions](~~98041~~)接口查看可选的可用区。        ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-g',
          ),
        ),
      ),
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
                'example' => '69A85BAF-1089-4CDF-A82F-0A140F******',
              ),
              'DBInstanceAvailable' => 
              array (
                'title' => '是否有足够的资源',
                'description' => '是否有足够的资源。
* **true**：有足够的资源。
* **false**：资源不足。',
                'type' => 'string',
                'example' => 'true',
              ),
              'DBType' => 
              array (
                'title' => '引擎',
                'description' => '数据库引擎类型，取值范围如下：
- **MySQL**
- **PostgreSQL**
- **Oracle**',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'DBVersion' => 
              array (
                'title' => '引擎版本',
                'description' => '数据库引擎版本号。
* MySQL版本号取值范围如下： 
    * **5.6**
    * **5.7**
    * **8.0**
* PostgreSQL版本号取值范围如下：
    * **11**
    * **14**
* Oracle版本号取值为**11**。',
                'type' => 'string',
                'example' => '8.0',
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
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBVersion.Malformed',
            'errorMessage' => 'The Specified DBVersion is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeClass.Malformed',
            'errorMessage' => 'The specified parameter DBNodeClass is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'SubDomain.Malformed',
            'errorMessage' => 'The specified SubDomain does not exist or ZoneId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NeedMaxScaleLink.Malformed',
            'errorMessage' => 'The specified NeedMaxScaleLink is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69A85BAF-1089-4CDF-A82F-0A140F******\\",\\n  \\"DBInstanceAvailable\\": \\"true\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"DBVersion\\": \\"8.0\\"\\n}","errorExample":""},{"type":"xml","example":"<EvaluateRegionResourceResponse>\\n    <RequestId>69A85BAF-1089-4CDF-A82F-0A140F******</RequestId>\\n    <DBInstanceAvailable>true</DBInstanceAvailable>\\n    <DBType>MySQL</DBType>\\n    <DBVersion>8.0</DBVersion>\\n</EvaluateRegionResourceResponse>","errorExample":""}]',
      'title' => '资源评估',
    ),
    'ModifyAutoRenewAttribute' => 
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
          'name' => 'DBClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，长度不超过50个字符。

> 可通过接口[DescribeRegions](~~98041~~)查看可用的地域。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RenewalStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置自动续费状态，取值范围如下： 

- **AutoRenewal**：自动续费。
- **Normal**：手动续费。 
- **NotRenewal**：不再续费。 

默认为**AutoRenewal**。 

> 设置为**NotRenewal**后，系统不再发送到期提醒，只在到期前第三天发送不续费提醒。
',
            'type' => 'string',
            'required' => false,
            'example' => 'AutoRenewal',
            'default' => 'AutoRenewal',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例自动续费时长，取值范围如下： 

- 当**PeriodUnit**为**Month**时，取值为`[1,2,3,6,12]`。
- 当**PeriodUnit**为**Year**时，取值为`[1-3]`。
 
默认为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PeriodUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '续费时长的单位，取值范围如下： 

- **Year**：年。
- **Month**：月。
 
默认为**Month**。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
            'default' => 'Month',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '4CE6DF97-AEA4-484F-906F-C407EE******',
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
            'errorCode' => 'InvalidRenewalStatus.Malformed',
            'errorMessage' => 'The specified parameter RenewalStatus is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPeriodUnit.Malformed',
            'errorMessage' => 'The specified parameter PeriodUnit is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDuration.Malformed',
            'errorMessage' => 'The specified parameter Duration is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterPayType',
            'errorMessage' => 'The operation is not permitted due to the pay type of cluster.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4CE6DF97-AEA4-484F-906F-C407EE******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAutoRenewAttributeResponse>\\n    <RequestId>4CE6DF97-AEA4-484F-906F-C407EE******</RequestId>\\n</ModifyAutoRenewAttributeResponse>","errorExample":"<ModifyAutoRenewAttributeResponse>  \\n\\t<RequestId>4CE6DF97-AEA4-484F-906F-C407EE3770EB</RequestId>\\n</ModifyAutoRenewAttributeResponse>"}]',
      'title' => '设置包年包月集群自动续费状态',
      'summary' => '设置PolarDB包年包月集群自动续费状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransformDBClusterPayType' => 
    array (
      'summary' => '变更PolarDB集群的计费方式。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-bp10gr51qasnl****',
          ),
        ),
        1 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => true,
            'example' => 'Prepaid',
          ),
        ),
        2 => 
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
        3 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买时长，取值：

- 当**Period**为**Year**时，**UsedTime**取值为1~3。

- 当**Period**为**Month**时，**UsedTime**取值为1~9。

> 当**PayType**取值**Prepaid**时，需要传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或者包月类型。取值：

- **Year**：包年

- **Month**：包月

> 当**PayType**取值为**Prepaid**时，需要传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm3f4un32****',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间该参数值的唯一性。该参数区分大小写、长度不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f5********************',
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
                'example' => '5E71541A-6007-4DCC-A38A-F872C31FEB45',
              ),
              'ChargeType' => 
              array (
                'description' => '实例的付费类型。取值：

- **Postpaid**：后付费（按量付费）

- **Prepaid**：预付费（包年包月）',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'DBClusterId' => 
              array (
                'description' => 'PolarDB集群ID。',
                'type' => 'string',
                'example' => 'pc-bp10gr51qasnl****',
              ),
              'ExpiredTime' => 
              array (
                'description' => '实例的到期时间。
> 当**PayType**取值为**Prepaid**时，才支持该返回参数。',
                'type' => 'string',
                'example' => '2020-04-20T10:00:00Z',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '20515760028****',
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
            'errorCode' => 'InvalidOrderCharge.NotSupport',
            'errorMessage' => 'The specified order charge does not support in PolarDB.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOrderTask.NotSupport',
            'errorMessage' => 'The Current ClusterId exist Order Task in PolarDB.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPaymentMethod.Incomplete',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPayType.Malformed',
            'errorMessage' => 'The specified parameter PayType is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPeriod.Malformed',
            'errorMessage' => 'The specified parameter Period is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidUsedTime.Malformed',
            'errorMessage' => 'The specified parameter UsedTime is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidPeriodUnit.Malformed',
            'errorMessage' => 'The specified parameter PeriodUnit is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.LockMode',
            'errorMessage' => 'The operation is not permitted when the instance is locked.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterDeletionLock',
            'errorMessage' => 'The operation is not permitted due to the deletion lock of cluster.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The specified DBClusterId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E71541A-6007-4DCC-A38A-F872C31FEB45\\",\\n  \\"ChargeType\\": \\"Prepaid\\",\\n  \\"DBClusterId\\": \\"pc-bp10gr51qasnl****\\",\\n  \\"ExpiredTime\\": \\"2020-04-20T10:00:00Z\\",\\n  \\"OrderId\\": \\"20515760028****\\"\\n}","errorExample":""},{"type":"xml","example":"<TransformDBClusterPayTypeResponse>\\n    <RequestId>5E71541A-6007-4DCC-A38A-F872C31FEB45</RequestId>\\n    <ChargeType>Prepaid</ChargeType>\\n    <DBClusterId>pc-bp10gr51qasnl****</DBClusterId>\\n    <ExpiredTime>2020-04-20T10:00:00Z</ExpiredTime>\\n    <OrderId>205157600280623</OrderId>\\n</TransformDBClusterPayTypeResponse>","errorExample":""}]',
      'title' => '变更数据库集群付费类型',
      'description' => '> - PolarDB集群支持包年包月和按量付费两种计费方式，您可以根据业务需求，将包年包月计费方式转换为按量付费，也可以将按量付费计费方式转换为包年包月。具体请参见[包年包月转按量付费](~~172886~~)和[按量付费转包年包月](~~84076~~)。
>- 当您的阿里云账号余额不足时，按量付费计费方式无法转换为包年包月。
>- 包年包月计费方式变更为按量付费时，系统会自动退还您已支付费用的余额。',
    ),
    'CreateDBCluster' => 
    array (
      'summary' => '创建PolarDB集群。',
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

> 您可以通过[DescribeRegions](~~98041~~)接口查看可用地域。',
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

> 您可以通过[DescribeRegions](~~98041~~)接口查看可选的可用区。                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-j',
          ),
        ),
        2 => 
        array (
          'name' => 'Architecture',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CPU 架构。取值范围如下：
- X86
- ARM',
            'type' => 'string',
            'required' => false,
            'example' => 'X86',
            'enum' => 
            array (
              0 => 'X86',
              1 => 'ARM',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，取值范围如下： 

- **MySQL**
- **PostgreSQL**
- **Oracle**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MySQL',
          ),
        ),
        4 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎版本号。
* MySQL版本号取值范围如下： 
    * **5.6**
    * **5.7**
    * **8.0**
* PostgreSQL版本号取值范围如下：
    * **11**
    * **14**
* Oracle版本号取值范围如下：
    * **11**
    * **14**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5.6',
          ),
        ),
        5 => 
        array (
          'name' => 'DBNodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点规格，详情请参见如下文档：

- PolarDB MySQL版：[计算节点规格](~~102542~~)。
- PolarDB PostgreSQL版（兼容Oracle）：[计算节点规格](~~207921~~)。
- PolarDB PostgreSQL版：[计算节点规格](~~209380~~)。

> 如需创建Serverless集群，请传入**polar.mysql.sl.small**。

                           ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'polar.mysql.x4.medium',
          ),
        ),
        6 => 
        array (
          'name' => 'ClusterNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群网络类型，当前仅支持专有网络，取值固定为**VPC**。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
            'default' => 'VPC',
          ),
        ),
        7 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称，集群名称需满足如下要求：
* 不能以`http://`或`https://`开头。
* 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值范围如下： 

- **Postpaid**：按量付费
- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Postpaid',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动续费，取值范围如下：

- **true**：自动续费。
- **false**：不自动续费。

默认为**false**。

> 当参数**PayType**取值为**Prepaid**时，该参数才生效。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若付费类型为**Prepaid**时，该参数为必传参数。指定预付费集群为包年或包月类型。 

- **Year**：包年。即选择包年包月时，单位为年。
- **Month**：包月。即选择包年包月时，单位为月。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        11 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若付费类型为**Prepaid**时，该参数为必传参数。
- 当**Period**为**Month**时，**UsedTime**取值为整数类型，取值范围为`[1-9]`。
- 当**Period**为**Year**时，**UsedTime**取值为整数类型，取值范围为`[1-3]`。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-**********',
          ),
        ),
        13 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。

> 如果已选择VPCId，则VSwitchId必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-**********',
          ),
        ),
        14 => 
        array (
          'name' => 'CreationOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建方式，取值范围如下： 

* **Normal**：创建一个全新的PolarDB集群，控制台操作请参见如下文档：

    * [创建PolarDB MySQL版数据库集群](~~58769~~)
    * [创建PolarDB PostgreSQL版数据库集群](~~118063~~)
    * [创建PolarDB PostgreSQL版（兼容Oracle）数据库集群](~~118182~~)

* **CloneFromPolarDB**：从现有PolarDB集群克隆数据到新的PolarDB集群，控制台操作请参见如下文档：

    * [PolarDB MySQL版克隆集群](~~87966~~)
    * [PolarDB PostgreSQL版克隆集群](~~118108~~)
    * [PolarDB PostgreSQL版（兼容Oracle）克隆集群](~~118221~~)

* **RecoverFromRecyclebin**：从已释放的PolarDB集群恢复数据到新的PolarDB集群，控制台操作请参见如下文档：

    * [PolarDB MySQL版恢复已释放的集群](~~164880~~)
    * [PolarDB PostgreSQL版恢复已释放的集群](~~432844~~)
    * [PolarDB PostgreSQL版（兼容Oracle）恢复已释放的集群](~~424632~~)

* **CloneFromRDS**：从现有RDS实例克隆数据到新的PolarDB集群，控制台操作请参见[一键克隆RDS MySQL到PolarDB MySQL版](~~121812~~)；

* **MigrationFromRDS**：从现有RDS实例迁移数据到新的PolarDB集群。创建的PolarDB集群是只读模式，且默认开启Binlog。控制台操作请参见[一键升级RDS MySQL到PolarDB MySQL版](~~121582~~)。

* **CreateGdnStandby**：创建一个从集群，控制台操作请参见[添加从集群](~~160381~~)。

* **UpgradeFromPolarDB**：从PolarDB升级迁移，控制台操作请参见[大版本升级](~~459712~~)。

默认为**Normal**。

> 当**DBType**为**MySQL**且**DBVersion**为**8.0**时，本参数取值可以为**CreateGdnStandby**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        15 => 
        array (
          'name' => 'SourceResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源RDS实例ID或源PolarDB集群ID。仅当**CreationOption**为**MigrationFromRDS**、**CloneFromRDS**、**CloneFromPolarDB**或**RecoverFromRecyclebin**时，该参数必填。
* 若**CreationOption**为**MigrationFromRDS**或**CloneFromRDS**，您需要为本参数传入源RDS实例ID。源RDS实例版本需为RDS MySQL 5.6 、5.7或8.0高可用版。

* 若**CreationOption**为**CloneFromPolarDB**，您需要为本参数传入源PolarDB集群ID。克隆集群和源集群的DBType默认保持一致。例如源集群为MySQL 8.0，则克隆集群也需设置**DBType**为**MySQL**且**DBVersion**为**8.0**。
* 若**CreationOption**为**RecoverFromRecyclebin**，您需要为本参数传入已释放的源PolarDB集群ID。从回收站恢复的集群和源集群的DBType需保持一致。例如源集群为MySQL 8.0，则从回收站恢复的集群也需设置**DBType**为**MySQL**且**DBVersion**为**8.0**。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-*************',
          ),
        ),
        16 => 
        array (
          'name' => 'CloneDataPoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '克隆数据的时间节点，取值： 

-  **LATEST**：最新时间点的数据。
- **BackupID**：历史备份集ID，请传入具体的备份集ID。
- **Timestamp**：历史时间点，请传入具体的时间，格式：`YYYY-MM-DDThh:mm:ssZ`（UTC时间）。

 默认为**LATEST**。

> 若**CreationOption**为**CloneFromRDS**，则本参数取值只能为**LATEST**。

',
            'type' => 'string',
            'required' => false,
            'example' => 'LATEST',
          ),
        ),
        17 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII 字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f5********************',
          ),
        ),
        18 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        19 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB集群白名单IP地址。
>支持配置多个白名单IP地址，多个IP地址之间使用英文逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '10.***.***.***',
          ),
        ),
        20 => 
        array (
          'name' => 'TDEStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启TDE加密。取值范围如下：

- **true**：开启。
- **false**：关闭（默认值）。

> * 仅当**DBType**为**PostgreSQL**或**Oracle**时，本参数生效。
> * 您可以调用[ModifyDBClusterTDE](~~167982~~)接口为PolarDB MySQL集群开启TDE加密。
> * TDE功能开启后不可关闭。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        21 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全球数据库网络ID。

> 当**CreationOption**为**CreateGdnStandby**时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => ' gdn-***********',
          ),
        ),
        22 => 
        array (
          'name' => 'CreationCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品系列，取值范围如下：
* **Normal**：集群版（默认值）
* **Basic**：单节点
* **ArchiveNormal**：高压缩引擎（X-Engine）
* **NormalMultimaster**：多主架构集群版
* **SENormal**：标准版

> * 仅当**DBType**为**MySQL**，且**DBVersion**为**5.6**、**5.7**或**8.0**时，支持设置产品系列为**Basic**。
> * 仅当**DBType**为**MySQL**，且**DBVersion**为**8.0**时，支持设置产品系列为**ArchiveNormal**和**NormalMultimaster**。
> * 仅当**DBType**为**MySQL**，且**DBMinorVersion**为**8.0.1**时，支持设置产品系列**SENormal**。

更多关产品系列的介绍，请参见于[产品系列](~~183258~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        23 => 
        array (
          'name' => 'DefaultTimeZone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群时区（UTC），可选取值范围为**-12:00~+13:00**内的所有整点时间，如**00:00**。默认取值为**SYSTEM**，默认时区与Region所在时区一致。
>仅当**DBType**为**MySQL**时，该参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'SYSTEM',
          ),
        ),
        24 => 
        array (
          'name' => 'LowerCaseTableNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名是否区分大小写，取值范围如下：
* **1**：不区分大小写
* **0**：区分大小写

默认取值为**1**。
>仅当**DBType**为**MySQL**时，该参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        25 => 
        array (
          'name' => 'BackupRetentionPolicyOnClusterDeletion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除集群时备份集保留策略，取值范围如下：
* **ALL**：长期保留全部备份。
* **LATEST**：长期保留最后一个备份（删除前自动备份）。
* **NONE**：集群删除时不保留备份集。

创建集群时，默认取值为**NONE**，即集群删除时不保留备份集。
>* 仅当**DBType**为**MySQL**时，该参数生效。
>*  Serverless集群不支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'NONE',
          ),
        ),
        26 => 
        array (
          'name' => 'StorageSpace',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '按空间计费（包年包月）的存储空间。单位：GB。
> PolarDB MySQL标准版存储空间的取值范围：20~32000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64000',
            'minimum' => '20',
            'example' => '50',
          ),
        ),
        27 => 
        array (
          'name' => 'DBMinorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎小版本号。取值范围如下：

- **8.0.2**

- **8.0.1**

> 当参数**DBType**为**MySQL**且**DBVersion**为**8.0**时，该参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => '8.0.1',
          ),
        ),
        28 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID。

> 您可以通过[DescribeParameterGroups](~~207178~~)接口查看目标地域的参数模板列表，包括参数模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcpg-**************',
          ),
        ),
        29 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。若您需要为目标集群一次性添加多个标签，请单击**添加**增加标签键。

> 每次最多添加20对标签，`Tag.N.Key`对应的值为`Tag.N.Value`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'type',
                ),
                'Value' => 
                array (
                  'description' => '标签值。若您需要为目标集群一次性添加多个标签，请单击**添加**增加标签值。

> 每次最多添加20对标签，`Tag.N.Value`对应的值为`Tag.N.Key`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        30 => 
        array (
          'name' => 'ServerlessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Serverless类型。当前取值固定为**AgileServerless**（敏态）。
> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'AgileServerless',
            'enum' => 
            array (
            ),
          ),
        ),
        31 => 
        array (
          'name' => 'ScaleMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩下限。取值范围：1 PCU~31 PCU。

> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        32 => 
        array (
          'name' => 'ScaleMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩上限。取值范围：1 PCU~32 PCU。
> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        33 => 
        array (
          'name' => 'AllowShutDown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启无活动暂停。取值：

- **true**：开启

- **false**：关闭（默认）
> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
            ),
          ),
        ),
        34 => 
        array (
          'name' => 'ScaleRoNumMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数伸缩下限。取值范围：0~15。
> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        35 => 
        array (
          'name' => 'ScaleRoNumMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数伸缩上限。取值范围：0~15。
> 仅Serverless集群支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        36 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '存储类型',
            'description' => '企业版存储类型取值如下：
- **PSL5**
- **PSL4**

标准版存储类型取值如下：
- **ESSDPL0**
- **ESSDPL1**
- **ESSDPL2**
- **ESSDPL3**
- **ESSDAUTOPL**
> Serverless集群不支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'PSL4',
          ),
        ),
        37 => 
        array (
          'name' => 'DBNodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标准版节点个数。取值如下：

- **1**（默认）：表示只有1个读写节点。
- **2**：表示有1个只读节点和1个读写节点。
> - 企业版默认有2个节点，标准版默认有1个节点。
> - 仅PolarDB MySQL版支持该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
        38 => 
        array (
          'name' => 'HotStandbyCluster',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启热备集群。取值范围如下：

- **ON**（默认）：开启热备集群。
- **OFF**：关闭热备集群。
- **STANDBY**：标准版开启热备集群。
>标准版集群的默认值为**STANDBY**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
            'enum' => 
            array (
              0 => 'ON',
              1 => 'OFF',
              2 => 'STANDBY',
            ),
          ),
        ),
        39 => 
        array (
          'name' => 'StrictConsistency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群是否开启了多可用区数据强一致。取值范围如下：

- **ON**：表示开启了多可用区数据强一致，适用于标准版3AZ场景。

- **OFF**：表示未开启多可用区数据强一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
            'enum' => 
            array (
              0 => 'ON',
              1 => 'OFF',
            ),
          ),
        ),
        40 => 
        array (
          'name' => 'StandbyAZ',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储热备集群的可用区。适用于标准版3AZ场景。

> 开启了多可用区数据强一致，该参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
            'enum' => 
            array (
            ),
          ),
        ),
        41 => 
        array (
          'name' => 'ProxyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库代理类型，取值范围如下：
- **EXCLUSIVE**：企业独享版
- **GENERAL**：企业通用版
>代理类型需要与集群的节点规格对应的类型保持一致。即：
>- 节点规格为通用规格，则代理类型应为企业通用版；
>- 节点规格为独享规格，则代理类型应为企业独享版。',
            'type' => 'string',
            'required' => false,
            'example' => 'Exclusive',
            'enum' => 
            array (
            ),
          ),
        ),
        42 => 
        array (
          'name' => 'ProxyClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标准版数据库代理规格。取值如下：

- **polar.maxscale.g2.medium.c**：2核。
- **polar.maxscale.g2.large.c**：4核。
- **polar.maxscale.g2.xlarge.c**：8核。
- **polar.maxscale.g2.2xlarge.c**：16核。
- **polar.maxscale.g2.3xlarge.c**：24核。
- **polar.maxscale.g2.4xlarge.c**：32核。
- **polar.maxscale.g2.8xlarge.c**：64核。

',
            'type' => 'string',
            'required' => false,
            'example' => 'polar.maxscale.g2.medium.c',
            'enum' => 
            array (
            ),
          ),
        ),
        43 => 
        array (
          'name' => 'LoosePolarLogBin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启Binlog功能，取值范围如下：

- **ON**：集群开启Binlog功能。
- **OFF**：集群关闭Binlog功能。
> 当参数**DBType**为**MySQL**时，该参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
            'enum' => 
            array (
              0 => 'ON',
              1 => 'OFF',
            ),
          ),
        ),
        44 => 
        array (
          'name' => 'LooseXEngine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启X-Engine存储引擎功能，取值范围如下：

- **ON**：集群开启X-Engine引擎。
- **OFF**：集群关闭X-Engine引擎。
> 当参数**CreationOption**不等于**CreateGdnStandby**，**DBType**为**MySQL**且**DBVersion**为**8.0**时，该参数才生效。开启X-Engine引擎的节点内存规格必须大于等于8 GB。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
            'enum' => 
            array (
              0 => 'ON',
              1 => 'OFF',
            ),
          ),
        ),
        45 => 
        array (
          'name' => 'LooseXEngineUseMemoryPct',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置开启X-Engine存储引擎比例，取值范围10~90的整数。
> 当参数**LooseXEngine**为**ON**时，该参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
          ),
        ),
        46 => 
        array (
          'name' => 'StoragePayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储计费类型。取值范围如下：

- Postpaid：按容量计费（按量付费）。
- Prepaid：按空间计费（包年包月）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Prepaid',
            'enum' => 
            array (
              0 => 'Postpaid',
              1 => 'Prepaid',
            ),
          ),
        ),
        47 => 
        array (
          'name' => 'StorageAutoScale',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标准版集群是否开启存储自动扩容。取值范围如下：

- Enable：开启存储自动扩容。
- Disable：关闭存储自动扩容。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
            'enum' => 
            array (
              0 => 'Enable',
              1 => 'Disable',
            ),
          ),
        ),
        48 => 
        array (
          'name' => 'StorageUpperBound',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置标准版集群存储自动扩容上限，单位：GB。

> 取值最大为32000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64000',
            'minimum' => '20',
            'example' => '800',
          ),
        ),
        49 => 
        array (
          'name' => 'ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<p id="p_wyg_t4a_glm" props="china" icmsditafragmentmagic=1>ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50,000, 1000*容量-基准性能}。</p>
<p id="p_6de_jxy_k2g" props="china" icmsditafragmentmagic=1>基准性能=min{1,800+50*容量, 50000}。</p>
<note id="note_7kj_j0o_rgs" props="china" icmsditafragmentmagic=1>当StorageType为ESSDAUTOPL时才支持该参数。</note>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
      ),
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
                'example' => 'E56531A4-E552-40BA-9C58-137B80******',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-***************',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '211454967******',
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
            'errorCode' => 'InvalidBackupRetentionPolicyOnClusterDeletion.Malformed',
            'errorMessage' => 'The specified BackupRetentionPolicyOnClusterDeletion is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidLowerCaseTableNames.Malformed',
            'errorMessage' => 'The specified LowerCaseTableNames is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDefaultTimeZone.Malformed',
            'errorMessage' => 'The specified DefaultTimeZone is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Location.FailedGetSubDomain',
            'errorMessage' => 'The specified regionId does not match the zoneId or the zoneId does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'MissParameter.GDNId',
            'errorMessage' => 'The GDNId parameter is required.',
          ),
          5 => 
          array (
            'errorCode' => 'EntityNotExist.ResourceGroup',
            'errorMessage' => 'The resource group does not exist..',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E56531A4-E552-40BA-9C58-137B80******\\",\\n  \\"ResourceGroupId\\": \\"rg-***************\\",\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\",\\n  \\"OrderId\\": \\"211454967******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBClusterResponse>\\n    <RequestId>E56531A4-E552-40BA-9C58-137B80******</RequestId>\\n    <ResourceGroupId>rg-***************</ResourceGroupId>\\n    <DBClusterId>pc-bp1s826a1up******</DBClusterId>\\n    <OrderId>211454967******</OrderId>\\n</CreateDBClusterResponse>","errorExample":""}]',
      'title' => '创建集群',
    ),
    'DeleteDBCluster' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupRetentionPolicyOnClusterDeletion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除集群时备份集保留策略，取值范围如下：
* **ALL**：长期保留全部备份。
* **LATEST**：长期保留最后一个备份（删除前自动备份）。
* **NONE**：集群删除时不保留备份集。',
            'type' => 'string',
            'required' => false,
            'example' => 'NONE',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParamBackupRetentionPolicyOnClusterDeletion.Malformed',
            'errorMessage' => 'Invalid BackupRetentionPolicyOnClusterDeletion value. Please retain the backup set.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupRetentionPolicyOnClusterDeletion.Malformed',
            'errorMessage' => 'The specified BackupRetentionPolicyOnClusterDeletion is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterDeletionLock',
            'errorMessage' => 'The operation is not permitted due to the deletion lock of cluster.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.OperateStatus',
            'errorMessage' => 'Specified action is denied by operate status.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.ClusterStatus',
            'errorMessage' => 'The PolarDB cluster is not allowed to release when it is not running.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterPayType',
            'errorMessage' => 'The operation is not permitted due to the pay type of cluster.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<DeleteDBClusterResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</DeleteDBClusterResponse>","errorExample":"<DeleteDBClusterResponse>  \\n\\t<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</DeleteDBClusterResponse>"}]',
      'title' => '释放按量付费的PolarDB集群',
      'summary' => '释放按量付费的PolarDB集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusters' => 
    array (
      'summary' => '查询PolarDB集群列表或被RAM授权的集群列表详情。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 地域ID。
> 您可以通过接口[DescribeRegions](~~98041~~)查看可用的地域。',
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
            'description' => ' 集群ID。多个集群ID间用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述，可模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-****************',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。',
            'type' => 'string',
            'required' => false,
            'example' => '********.rwlb.polardb-pg-public.rds.aliyuncs.com',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群状态，取值范围请参见[集群状态表](~~99286~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        5 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 数据库类型，取值范围如下：
* **MySQL**
* **PostgreSQL**
* **Oracle**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        6 => 
        array (
          'name' => 'DescribeType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '列表查询方式。取值为Simple，表示简略模式，仅返回集群的基本元数据信息。
>如果未填写该参数，则默认为详细模式，返回集群的详细信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'Simple',
          ),
        ),
        7 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本。',
            'type' => 'string',
            'required' => false,
            'example' => '5.6',
          ),
        ),
        8 => 
        array (
          'name' => 'RecentCreationInterval',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '筛选最近N天创建的集群。取值范围：0~15。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        9 => 
        array (
          'name' => 'RecentExpirationInterval',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '筛选N天后过期的集群。取值范围：0~15。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '6',
          ),
        ),
        10 => 
        array (
          'name' => 'Expired',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否集群已过期。取值范围如下：

- **true**

- **false**',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值为**30**、**50**或**100**。
                              
默认值为**30**。 ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        12 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '1',
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
            'example' => 'rg-**********',
          ),
        ),
        14 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。Tag.n.Key对应的值为Tag.n.Value。

> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'MySQL',
                ),
                'Value' => 
                array (
                  'description' => '标签键对应的标签值。

> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '5.6',
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
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值范围如下： 

- **Postpaid**：按量付费
- **Prepaid**：预付费（包年包月）',
            'type' => 'string',
            'required' => false,
            'example' => 'Postpaid',
          ),
        ),
        16 => 
        array (
          'name' => 'DBNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点ID。支持传入多个节点ID，多个ID间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-***************',
          ),
        ),
      ),
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
                'example' => '16',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页集群数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBCluster' => 
                  array (
                    'description' => '集群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络ID。',
                          'type' => 'string',
                          'example' => 'vpc-****************',
                        ),
                        'VswitchId' => 
                        array (
                          'description' => '虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-***************',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群到期时间。
> 仅付费方式为**Prepaid**（包年包月）的集群会返回具体参数值，**Postpaid**（按量付费）集群则返回空值。',
                          'type' => 'string',
                          'example' => '2020-11-14T16:00:00Z',
                        ),
                        'Expired' => 
                        array (
                          'description' => '集群是否到期。取值范围：

- **true**

- **false**

>仅付费方式为**Prepaid**（包年包月）的集群支持返该参数。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'DBNodeNumber' => 
                        array (
                          'description' => '节点数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2020-08-14T05:58:42Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '付费类型。取值范围： 

- **Postpaid**：按量付费。
- **Prepaid**：包年包月（预付费）。 ',
                          'type' => 'string',
                          'example' => 'Prepaid',
                        ),
                        'StoragePayType' => 
                        array (
                          'description' => '存储计费类型。取值范围： 

- **Postpaid**：按容量计费（按量计费）。
- **Prepaid**：按空间计费（包年包月）。 ',
                          'type' => 'string',
                          'example' => 'Prepaid',
                        ),
                        'ServerlessType' => 
                        array (
                          'description' => 'Serverless类型。返回**AgileServerless**表示当前集群是Serverless集群，返回空值表示当前集群是普通集群。',
                          'type' => 'string',
                          'example' => 'AgileServerless',
                        ),
                        'StrictConsistency' => 
                        array (
                          'description' => '集群是否开启了多可用区数据强一致。取值范围：

- **ON**：表示开启了多可用区数据强一致，适用于标准版3AZ场景。

- **OFF**：表示未开启多可用区数据强一致。',
                          'type' => 'string',
                          'example' => 'ON',
                        ),
                        'DBNodeClass' => 
                        array (
                          'description' => '节点规格。',
                          'type' => 'string',
                          'example' => 'polar.mysql.x4.large',
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
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'MySQL',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => '5.6',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DBType' => 
                        array (
                          'description' => '数据库类型。',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定状态，取值范围如下： 

- **Unlock**：正常。 
- **ManualLock**：手动触发锁定。 
- **LockByExpiration**：集群过期自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'DBNodes' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DBNode' => 
                            array (
                              'description' => '节点列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'DBNodeClass' => 
                                  array (
                                    'description' => '节点规格。',
                                    'type' => 'string',
                                    'example' => 'polar.mysql.x4.large',
                                  ),
                                  'ZoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-i',
                                  ),
                                  'DBNodeRole' => 
                                  array (
                                    'description' => '节点角色，取值范围如下： 

- **Writer**：主节点。 
- **Reader**：只读节点。 
- **ColumnReader**：列存只读节点。 
- **AI**：AI节点。',
                                    'type' => 'string',
                                    'example' => 'Reader',
                                  ),
                                  'DBNodeId' => 
                                  array (
                                    'description' => '节点ID。',
                                    'type' => 'string',
                                    'example' => 'pi-****************',
                                  ),
                                  'RegionId' => 
                                  array (
                                    'description' => '地域ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou',
                                  ),
                                  'Serverless' => 
                                  array (
                                    'description' => '当前节点是否开启了Serverless功能。

- 返回**ON**表示开启了Serverless功能。
- 返回空值表示没有开启Serverless功能。',
                                    'type' => 'string',
                                    'example' => 'ON',
                                  ),
                                  'ImciSwitch' => 
                                  array (
                                    'description' => '是否开启列存索引。取值范围如下：

- **ON**：开启
- **OFF**：关闭',
                                    'type' => 'string',
                                    'example' => 'OFF',
                                    'enum' => 
                                    array (
                                      0 => 'ON',
                                      1 => 'OFF',
                                    ),
                                  ),
                                  'HotReplicaMode' => 
                                  array (
                                    'description' => '是否开启热备。取值范围如下：

- **ON**：开启
- **OFF**：关闭',
                                    'type' => 'string',
                                    'example' => 'OFF',
                                    'enum' => 
                                    array (
                                    ),
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
                        'DeletionLock' => 
                        array (
                          'description' => '集群删除的保护状态，取值范围如下：
*  **0**：未锁定。
* **1**：锁定。
> 锁定状态时，不可以删除集群。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => '数据库版本。',
                          'type' => 'string',
                          'example' => '5.6',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-****************',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-************',
                        ),
                        'StorageUsed' => 
                        array (
                          'description' => '集群已经使用的存储用量，单位为Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3009413120',
                        ),
                        'StorageSpace' => 
                        array (
                          'description' => '按空间计费（包年包月）的存储空间。单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'DBClusterNetworkType' => 
                        array (
                          'description' => '集群的网络类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'DBClusterDescription' => 
                        array (
                          'description' => '集群描述。',
                          'type' => 'string',
                          'example' => 'GDN-1',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-i',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎。',
                          'type' => 'string',
                          'example' => 'POLARDB',
                        ),
                        'Category' => 
                        array (
                          'description' => '集群系列，目前支持如下系列：

- **Normal**：集群版

- **Basic**：单节点

- **Archive**：高压缩引擎（X-Engine）

- **NormalMultimaster**：多主集群（库表）

',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'AiType' => 
                        array (
                          'description' => 'ai 节点信息状态。取值范围如下：
     
- SearchNode：搜索节点
- DLNode：ai节点',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'SearchNode|DLNode' => 'Both',
                            'DLNode' => 'DLNode',
                            'SearchNode' => 'SearchNode',
                          ),
                          'example' => 'SearchNode',
                        ),
                        'CpuCores' => 
                        array (
                          'description' => 'CPU核数。单位：个。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'MemorySize' => 
                        array (
                          'description' => '节点内存大小，单位：MB。',
                          'type' => 'string',
                          'example' => '2048',
                        ),
                        'RemoteMemorySize' => 
                        array (
                          'description' => '远端内存大小，单位：MB。',
                          'type' => 'string',
                          'example' => '3612',
                        ),
                        'SubCategory' => 
                        array (
                          'description' => '计算节点的规格类型，取值范围如下：
* **Exclusive**：独享规格
* **General**：通用规格',
                          'type' => 'string',
                          'example' => 'Exclusive',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter\'s number is exceed.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidRecentCreationInterval.Malformed',
            'errorMessage' => 'The specified parameter RecentCreationInterval is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRecentExpirationInterval.Malformed',
            'errorMessage' => 'The specified parameter RecentExpirationInterval is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBTypeOrDBVersion.Malformed',
            'errorMessage' => 'The specified DBType does not match DBVersion.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 16,\\n  \\"PageRecordCount\\": 5,\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"PageNumber\\": 12,\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-****************\\",\\n        \\"VswitchId\\": \\"vsw-***************\\",\\n        \\"ExpireTime\\": \\"2020-11-14T16:00:00Z\\",\\n        \\"Expired\\": \\"false\\",\\n        \\"DBNodeNumber\\": 2,\\n        \\"CreateTime\\": \\"2020-08-14T05:58:42Z\\",\\n        \\"PayType\\": \\"Prepaid\\",\\n        \\"StoragePayType\\": \\"Prepaid\\",\\n        \\"ServerlessType\\": \\"AgileServerless\\",\\n        \\"StrictConsistency\\": \\"ON\\",\\n        \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"MySQL\\",\\n              \\"Value\\": \\"5.6\\"\\n            }\\n          ]\\n        },\\n        \\"DBType\\": \\"MySQL\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"DBNodes\\": {\\n          \\"DBNode\\": [\\n            {\\n              \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n              \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n              \\"DBNodeRole\\": \\"Reader\\",\\n              \\"DBNodeId\\": \\"pi-****************\\",\\n              \\"RegionId\\": \\"cn-hangzhou\\",\\n              \\"Serverless\\": \\"ON\\",\\n              \\"ImciSwitch\\": \\"OFF\\",\\n              \\"HotReplicaMode\\": \\"OFF\\"\\n            }\\n          ]\\n        },\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"DeletionLock\\": 0,\\n        \\"DBVersion\\": \\"5.6\\",\\n        \\"DBClusterId\\": \\"pc-****************\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-************\\",\\n        \\"StorageUsed\\": 3009413120,\\n        \\"StorageSpace\\": 50,\\n        \\"DBClusterNetworkType\\": \\"VPC\\",\\n        \\"DBClusterDescription\\": \\"GDN-1\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n        \\"Engine\\": \\"POLARDB\\",\\n        \\"Category\\": \\"Normal\\",\\n        \\"AiType\\": \\"SearchNode\\",\\n        \\"CpuCores\\": \\"1\\",\\n        \\"MemorySize\\": \\"2048\\",\\n        \\"RemoteMemorySize\\": \\"3612\\",\\n        \\"SubCategory\\": \\"Exclusive\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersResponse>\\n    <TotalRecordCount>16</TotalRecordCount>\\n    <PageRecordCount>5</PageRecordCount>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <PageNumber>12</PageNumber>\\n    <Items>\\n        <VpcId>vpc-****************</VpcId>\\n        <ExpireTime>2020-11-14T16:00:00Z</ExpireTime>\\n        <Expired>false</Expired>\\n        <DBNodeNumber>2</DBNodeNumber>\\n        <CreateTime>2020-08-14T05:58:42Z</CreateTime>\\n        <PayType>Prepaid</PayType>\\n        <StoragePayType>Prepaid</StoragePayType>\\n        <ServerlessType>AgileServerless</ServerlessType>\\n        <StrictConsistency>ON</StrictConsistency>\\n        <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n        <Tags>\\n            <Key>MySQL</Key>\\n            <Value>5.6</Value>\\n        </Tags>\\n        <DBType>MySQL</DBType>\\n        <LockMode>Unlock</LockMode>\\n        <DBNodes>\\n            <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <DBNodeRole>Reader</DBNodeRole>\\n            <DBNodeId>pi-****************</DBNodeId>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <Serverless>ON</Serverless>\\n        </DBNodes>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DeletionLock>0</DeletionLock>\\n        <DBVersion>5.6</DBVersion>\\n        <DBClusterId>pc-****************</DBClusterId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-************</ResourceGroupId>\\n        <StorageUsed>3009413120</StorageUsed>\\n        <StorageSpace>50</StorageSpace>\\n        <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n        <DBClusterDescription>GDN-1</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-i</ZoneId>\\n        <Engine>POLARDB</Engine>\\n        <Category>Normal</Category>\\n    </Items>\\n</DescribeDBClustersResponse>","errorExample":""}]',
      'title' => '查询集群列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterAttribute' => 
    array (
      'summary' => '查看PolarDB集群的详细属性。',
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DescribeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取AI相关节点信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'AI',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DeletionLock' => 
              array (
                'description' => '集群删除的锁定状态，取值范围如下：
* **0**：未锁定，可删除集群。
* **1**：锁定，不可删除集群。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Category' => 
              array (
                'description' => '[产品系列](~~183258~~)，取值范围如下：
* **Normal**：集群版
* **Basic**：单节点
* **Archive**：高压缩引擎（X-Engine）
* **NormalMultimaster**：多主架构集群版
* **SENormal**：标准版

> * 仅PolarDB MySQL版支持单节点产品系列。
>* 仅PolarDB MySQL版8.0.1版本的集群，支持标准版产品系列。
>* 仅PolarDB MySQL版8.0版本的集群，支持高压缩引擎（X-Engine）和多主架构集群版产品系列。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-***************',
              ),
              'DataLevel1BackupChainSize' => 
              array (
                'description' => '一级备份（快照）总大小，单位为Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '74448896',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'DBType' => 
              array (
                'description' => '数据库引擎类型。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'DBClusterNetworkType' => 
              array (
                'description' => '集群的网络类型。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'IsLatestVersion' => 
              array (
                'description' => '是否为最新内核版本。取值范围如下：

- **true**：是

- **false**：否',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'HasCompleteStandbyRes' => 
              array (
                'description' => '是否在跨可用区切换后补齐新主库资源。取值范围如下：
- **true**：是
- **false**：否',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'HotStandbyCluster' => 
              array (
                'description' => '是否开启存储热备集群(和Standby计算节点)。取值范围如下：
- **StandbyClusterON**：开启存储热备/开启存储热备和Standby计算节点。 
- **StandbyClusterOFF**：关闭存储热备/关闭存储热备和Standby计算节点。',
                'type' => 'string',
                'example' => 'StandbyClusterON',
              ),
              'DataSyncMode' => 
              array (
                'description' => '数据复制关系模式。取值范围如下：
- **AsyncSync**：异步
- **SemiSync**：半同步',
                'type' => 'string',
                'example' => 'AsyncSync',
              ),
              'StandbyHAMode' => 
              array (
                'description' => '跨可用容灾模式。取值范围如下：
- **ON**：开启跨可用容灾模式。
- **OFF**：关闭跨可用容灾模式。
- **0**：客户演练模式。',
                'type' => 'string',
                'example' => 'OFF',
              ),
              'CompressStorageMode' => 
              array (
                'description' => '是否为开启存储压缩。取值范围如下：
- ON：开启
- OFF：关闭',
                'type' => 'string',
                'example' => 'ON',
              ),
              'StorageMax' => 
              array (
                'description' => '当前集群规格的最大存储容量，单位为Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10995116277760',
              ),
              'DBVersion' => 
              array (
                'description' => '数据库引擎版本。',
                'type' => 'string',
                'example' => '8.0',
              ),
              'DBNodes' => 
              array (
                'description' => '节点信息详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '节点创建时间。',
                      'type' => 'string',
                      'example' => '2020-03-23T21:35:43Z',
                    ),
                    'FailoverPriority' => 
                    array (
                      'description' => 'Failover优先级。每个节点都有一个Failover优先级，决定了当故障切换时，该节点被选举为主节点的概率高低。数值越大，优先级越高。
取值范围为1~15。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'MaxIOPS' => 
                    array (
                      'description' => '最大I/O请求次数，即IOPS。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '32000',
                    ),
                    'DBNodeClass' => 
                    array (
                      'description' => '节点规格。',
                      'type' => 'string',
                      'example' => 'polar.mysql.x4.large',
                    ),
                    'CpuCores' => 
                    array (
                      'description' => '节点CPU核数。

>  仅PolarDB MySQL版支持返回该参数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'MemorySize' => 
                    array (
                      'description' => '节点内存大小，单位：MB。

> 仅PolarDB MySQL版支持返回该参数。',
                      'type' => 'string',
                      'example' => '8192',
                    ),
                    'DBNodeRole' => 
                    array (
                      'description' => '节点角色，取值范围如下： 

- **Writer**：主节点。
- **Reader**：只读节点。        ',
                      'type' => 'string',
                      'example' => 'Reader',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                    'MaxConnections' => 
                    array (
                      'description' => '最大集群并发连接数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8000',
                    ),
                    'DBNodeStatus' => 
                    array (
                      'description' => '节点状态，取值范围如下：
* **Creating**：创建中 
* **Running**：运行中 
* **Deleting**：删除中  
* **Rebooting**：重启中  
* **DBNodeCreating**：正在增加节点  
* **DBNodeDeleting**：正在删除节点 
* **ClassChanging**：正在变更节点规格  
* **NetAddressCreating**：正在创建网络连接  
* **NetAddressDeleting**：正在删除网络连接  
* **NetAddressModifying**：正在修改网络连接
* **MinorVersionUpgrading**：小版本升级中
* **Maintaining**：实例维护中  
* **Switching**：切换中',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'DBNodeId' => 
                    array (
                      'description' => '节点ID。',
                      'type' => 'string',
                      'example' => 'pi-****************',
                    ),
                    'ImciSwitch' => 
                    array (
                      'description' => '是否开启列存索引。取值范围如下：

- **ON**：开启

- **OFF**：关闭',
                      'type' => 'string',
                      'example' => 'ON',
                    ),
                    'HotReplicaMode' => 
                    array (
                      'description' => '是否开启热备。取值范围如下：

- **ON**：开启

- **OFF**：关闭',
                      'type' => 'string',
                      'example' => 'ON',
                    ),
                    'AddedCpuCores' => 
                    array (
                      'description' => '秒级弹性扩核的CPU核数。',
                      'type' => 'string',
                      'example' => '6',
                    ),
                    'MasterId' => 
                    array (
                      'description' => '多主架构集群版的主节点ID。',
                      'type' => 'string',
                      'example' => 'pi-bp18z52akld3*****',
                    ),
                    'SccMode' => 
                    array (
                      'description' => '节点是否开启全局一致性（高性能模式）功能。取值范围如下：

- **ON**：开启

- **OFF**：关闭',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'ON',
                    ),
                    'ServerWeight' => 
                    array (
                      'description' => '路由权重。
取值范围：1~100。默认值为1。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ServerlessType' => 
                    array (
                      'description' => 'Serverless类型。取值范围如下：

- AgileServerless：敏态
- SteadyServerless：稳态

> 仅Serverless集群支持该参数。',
                      'type' => 'string',
                      'example' => 'AgileServerless',
                    ),
                    'SubCluster' => 
                    array (
                      'type' => 'string',
                    ),
                    'RemoteMemorySize' => 
                    array (
                      'type' => 'string',
                    ),
                    'Orca' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'ZoneIds' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-i,cn-hangzhou-g',
              ),
              'MaintainTime' => 
              array (
                'description' => '集群的可维护时间段，格式为`HH:mmZ-HH:mmZ`（UTC时间）。例如`16:00Z-17:00Z`表示，0点到1点（UTC+08:00）可以进行例行维护。',
                'type' => 'string',
                'example' => '18:00Z-19:00Z',
              ),
              'Engine' => 
              array (
                'description' => '集群引擎。',
                'type' => 'string',
                'example' => 'POLARDB',
              ),
              'Tags' => 
              array (
                'description' => '标签信息详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '074467EF-86B9-4C23-ACBF-E9B81A******',
              ),
              'VPCId' => 
              array (
                'description' => '专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-*******************',
              ),
              'DBClusterStatus' => 
              array (
                'description' => '集群状态，取值范围请参见[集群状态表](~~99286~~)。
',
                'type' => 'string',
                'example' => 'Running',
              ),
              'VSwitchId' => 
              array (
                'description' => '虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-*********************',
              ),
              'DBClusterDescription' => 
              array (
                'description' => '集群描述。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Expired' => 
              array (
                'description' => '集群是否到期。
> 仅付费方式为**Prepaid**（包年包月）的集群支持返回该参数。',
                'type' => 'string',
                'example' => 'false',
              ),
              'PayType' => 
              array (
                'description' => '付费类型。取值范围如下：

- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'StoragePayType' => 
              array (
                'description' => '存储计费类型。取值范围如下：

- **Postpaid**：按容量计费（按量付费）。
- **Prepaid**：按空间计费（包年包月）。     ',
                'type' => 'string',
                'example' => 'Prepaid',
              ),
              'LockMode' => 
              array (
                'description' => '锁定模式。取值范围如下： 

- **Unlock**：未锁定。
- **ManualLock**：手动触发锁定。 
- **LockByExpiration**：集群过期自动锁定。',
                'type' => 'string',
                'example' => 'Unlock',
              ),
              'StorageUsed' => 
              array (
                'description' => '存储空间的使用量，单位为Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3012558848',
              ),
              'CompressStorageUsed' => 
              array (
                'description' => '压缩后的存储数据大小。
>仅当集群开启存储压缩功能后支持返回该参数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15529410560',
              ),
              'StorageSpace' => 
              array (
                'description' => '按空间计费（包年包月）的存储空间。单位：Byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'DBVersionStatus' => 
              array (
                'description' => '当前数据库小版本状态，取值范围如下：
* **Stable**：当前版本状态稳定。
* **Old**：当前版本过旧，建议升级到最新版本。
* **HighRisk**：当前版本有严重缺陷，请立即升级到最新的版本。

>关于如何升级数据库小版本，请参见[版本升级](~~158572~~)。',
                'type' => 'string',
                'example' => 'Stable',
              ),
              'CreationTime' => 
              array (
                'description' => '集群创建时间。',
                'type' => 'string',
                'example' => '2020-08-14T05:58:42Z',
              ),
              'SQLSize' => 
              array (
                'description' => 'SQL的存储量，单位为Byte。若数值为-1，则表示没有数据。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'InodeTotal' => 
              array (
                'description' => '文件系统最大inode数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '6,291,456',
              ),
              'InodeUsed' => 
              array (
                'description' => '当前inode使用量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '4,194,304',
              ),
              'BlktagTotal' => 
              array (
                'description' => '文件系统最大blktag数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '7,864,320',
              ),
              'BlktagUsed' => 
              array (
                'description' => '当前blktag使用量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5,242,880',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'ExpireTime' => 
              array (
                'description' => '集群到期时间。

> 仅付费方式为**Prepaid**（包年包月）的集群会返回具体参数值，**Postpaid**（按量付费）集群则返回空值。
 
',
                'type' => 'string',
                'example' => '2020-11-14T16:00:00Z',
              ),
              'SubCategory' => 
              array (
                'description' => '计算节点的规格类型，取值范围如下：
* **Exclusive**：独享规格
* **General**：通用规格

> 仅PolarDB MySQL版且产品系列为集群版时，支持返回该参数。',
                'type' => 'string',
                'example' => 'Exclusive',
              ),
              'IsProxyLatestVersion' => 
              array (
                'description' => '是否为数据库代理最新版本，取值范围如下：

- **true**：是
- **false**：否',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'StorageType' => 
              array (
                'description' => '存储类型，取值固定为**HighPerformance**。',
                'type' => 'string',
                'example' => 'HighPerformance',
              ),
              'ServerlessType' => 
              array (
                'description' => 'Serverless类型。取值范围如下：

- AgileServerless：敏态
- SteadyServerless：稳态',
                'type' => 'string',
                'example' => 'AgileServerless',
              ),
              'StrictConsistency' => 
              array (
                'description' => '集群是否开启了多可用区数据强一致。取值范围如下：

- **ON**：表示开启了多可用区数据强一致，适用于标准版3AZ场景。

- **OFF**：表示未开启多可用区数据强一致。',
                'type' => 'string',
                'example' => 'ON',
              ),
              'ProxyCpuCores' => 
              array (
                'description' => '数据库代理CPU核数。',
                'type' => 'string',
                'example' => '4',
              ),
              'ProxyStandardCpuCores' => 
              array (
                'description' => '数据库代理标准配置CPU核数。',
                'type' => 'string',
                'example' => '2',
              ),
              'ProxyType' => 
              array (
                'description' => '数据库代理类型，取值范围如下：

- **Exclusive**：企业独享版
- **General** ：企业通用版',
                'type' => 'string',
                'example' => 'Exclusive',
              ),
              'ProxyStatus' => 
              array (
                'description' => '数据库代理的状态。取值范围如下：

- **Creating**：创建中
- **Running**：运行中
- **Deleting**：释放中
- **Rebooting**：重启中
- **DBNodeCreating**：正在增加节点
- **DBNodeDeleting**：正在删除节点
- **ClassChanging**：正在变更节点规格
- **NetAddressCreating**：正在创建网络连接
- **NetAddressDeleting**：正在删除网络连接
- **NetAddressModifying**：正在修改网络连接
- **Deleted**：已释放',
                'type' => 'string',
                'example' => 'Running',
              ),
              'ProxyServerlessType' => 
              array (
                'description' => '数据库代理Serverless类型。当前取值固定为AgileServerless。',
                'type' => 'string',
                'example' => 'AgileServerless',
              ),
              'Architecture' => 
              array (
                'description' => 'CPU 架构。取值范围如下：
- **X86**
- **ARM**',
                'type' => 'string',
                'example' => 'X86',
              ),
              'AiType' => 
              array (
                'description' => 'AI节点类型。取值范围如下：
     
- **SearchNode**：搜索节点。
- **DLNode**：AI节点。',
                'type' => 'string',
                'example' => 'DLNode',
              ),
              'ProvisionedIops' => 
              array (
                'description' => '<p id="p_wyg_t4a_glm" props="china" icmsditafragmentmagic=1>ESSD AutoPL云盘预配置的读写IOPS。可能值：0~min{50,000, 1000*容量-基准性能}。</p>
<p id="p_6de_jxy_k2g" props="china" icmsditafragmentmagic=1>基准性能=min{1,800+50*容量, 50000}。</p>
<note id="note_7kj_j0o_rgs" props="china" icmsditafragmentmagic=1>当StorageType为ESSDAUTOPL时才支持该参数。</note>',
                'type' => 'string',
                'example' => '2500',
              ),
              'AiCreatingTime' => 
              array (
                'type' => 'string',
              ),
              'SupportInstantSwitchWithImci' => 
              array (
                'type' => 'string',
                'default' => 'OFF',
              ),
              'Orca' => 
              array (
                'type' => 'string',
              ),
              'SourceDBCluster' => 
              array (
                'description' => '源集群ID。
<note>仅2024年6月1日以后从备份集或时间点恢复的集群支持该参数</note>',
                'type' => 'string',
                'example' => 'pc-pz51ziv48317b2880',
              ),
              'RestoreType' => 
              array (
                'description' => '集群恢复方式，其值可能为：

* **RestoreByTime**：基于一级备份从时间点恢复。
* **RestoreByBackupSet**：基于一级备份从备份集恢复。
* **RestoreByTimeOss**：基于二级备份从时间点恢复。
* **RestoreByBackupSetOss**：基于二级备份从备份集恢复。
* **CloneFromSourceCluster**：从源集群克隆。

<note>仅2024年6月1日以后从备份集或时间点恢复的集群支持该参数</note>',
                'type' => 'string',
                'example' => 'RestoreByTime',
              ),
              'RestoreDataPoint' => 
              array (
                'description' => '* 若 RestoreType 为 **RestoreByTime** 或 **RestoreByTimeOss**，该值表示恢复的时间点。
* 若 RestoreType 为 **RestoreByBackupSet** 或 **RestoreByBackupSetOss**，该值表示恢复所基于的备份集ID。

<note>仅2024年6月1日以后从备份集或时间点恢复的集群支持该参数</note>',
                'type' => 'string',
                'example' => '2179639137',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeletionLock\\": 0,\\n  \\"Category\\": \\"Normal\\",\\n  \\"ResourceGroupId\\": \\"rg-***************\\",\\n  \\"DataLevel1BackupChainSize\\": 74448896,\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"DBClusterNetworkType\\": \\"VPC\\",\\n  \\"IsLatestVersion\\": false,\\n  \\"HasCompleteStandbyRes\\": false,\\n  \\"HotStandbyCluster\\": \\"StandbyClusterON\\",\\n  \\"DataSyncMode\\": \\"AsyncSync\\",\\n  \\"StandbyHAMode\\": \\"OFF\\",\\n  \\"CompressStorageMode\\": \\"ON\\",\\n  \\"StorageMax\\": 10995116277760,\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"DBNodes\\": [\\n    {\\n      \\"CreationTime\\": \\"2020-03-23T21:35:43Z\\",\\n      \\"FailoverPriority\\": 1,\\n      \\"MaxIOPS\\": 32000,\\n      \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n      \\"CpuCores\\": \\"2\\",\\n      \\"MemorySize\\": \\"8192\\",\\n      \\"DBNodeRole\\": \\"Reader\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"MaxConnections\\": 8000,\\n      \\"DBNodeStatus\\": \\"Running\\",\\n      \\"DBNodeId\\": \\"pi-****************\\",\\n      \\"ImciSwitch\\": \\"ON\\",\\n      \\"HotReplicaMode\\": \\"ON\\",\\n      \\"AddedCpuCores\\": \\"6\\",\\n      \\"MasterId\\": \\"pi-bp18z52akld3*****\\",\\n      \\"SccMode\\": \\"ON\\",\\n      \\"ServerWeight\\": \\"1\\",\\n      \\"ServerlessType\\": \\"AgileServerless\\",\\n      \\"SubCluster\\": \\"\\",\\n      \\"RemoteMemorySize\\": \\"\\",\\n      \\"Orca\\": \\"\\"\\n    }\\n  ],\\n  \\"ZoneIds\\": \\"cn-hangzhou-i,cn-hangzhou-g\\",\\n  \\"MaintainTime\\": \\"18:00Z-19:00Z\\",\\n  \\"Engine\\": \\"POLARDB\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"test\\",\\n      \\"Value\\": \\"MySQL\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"074467EF-86B9-4C23-ACBF-E9B81A******\\",\\n  \\"VPCId\\": \\"vpc-*******************\\",\\n  \\"DBClusterStatus\\": \\"Running\\",\\n  \\"VSwitchId\\": \\"vsw-*********************\\",\\n  \\"DBClusterDescription\\": \\"test\\",\\n  \\"Expired\\": \\"false\\",\\n  \\"PayType\\": \\"Prepaid\\",\\n  \\"StoragePayType\\": \\"Prepaid\\",\\n  \\"LockMode\\": \\"Unlock\\",\\n  \\"StorageUsed\\": 3012558848,\\n  \\"CompressStorageUsed\\": 15529410560,\\n  \\"StorageSpace\\": 50,\\n  \\"DBVersionStatus\\": \\"Stable\\",\\n  \\"CreationTime\\": \\"2020-08-14T05:58:42Z\\",\\n  \\"SQLSize\\": 0,\\n  \\"InodeTotal\\": 0,\\n  \\"InodeUsed\\": 0,\\n  \\"BlktagTotal\\": 0,\\n  \\"BlktagUsed\\": 0,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"ExpireTime\\": \\"2020-11-14T16:00:00Z\\",\\n  \\"SubCategory\\": \\"Exclusive\\",\\n  \\"IsProxyLatestVersion\\": false,\\n  \\"StorageType\\": \\"HighPerformance\\",\\n  \\"ServerlessType\\": \\"AgileServerless\\",\\n  \\"StrictConsistency\\": \\"ON\\",\\n  \\"ProxyCpuCores\\": \\"4\\",\\n  \\"ProxyStandardCpuCores\\": \\"2\\",\\n  \\"ProxyType\\": \\"Exclusive\\",\\n  \\"ProxyStatus\\": \\"Running\\",\\n  \\"ProxyServerlessType\\": \\"AgileServerless\\",\\n  \\"Architecture\\": \\"X86\\",\\n  \\"AiType\\": \\"DLNode\\",\\n  \\"ProvisionedIops\\": \\"2500\\",\\n  \\"AiCreatingTime\\": \\"\\",\\n  \\"SupportInstantSwitchWithImci\\": \\"\\",\\n  \\"Orca\\": \\"\\",\\n  \\"SourceDBCluster\\": \\"pc-pz51ziv48317b2880\\",\\n  \\"RestoreType\\": \\"RestoreByTime\\",\\n  \\"RestoreDataPoint\\": \\"2179639137\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAttributeResponse>\\n    <DeletionLock>0</DeletionLock>\\n    <Category>Normal</Category>\\n    <ResourceGroupId>rg-***************</ResourceGroupId>\\n    <DataLevel1BackupChainSize>74448896</DataLevel1BackupChainSize>\\n    <DBClusterId>pc-*****************</DBClusterId>\\n    <DBType>MySQL</DBType>\\n    <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n    <IsLatestVersion>false</IsLatestVersion>\\n    <StorageMax>10995116277760</StorageMax>\\n    <DBVersion>8.0</DBVersion>\\n    <DBNodes>\\n        <CreationTime>2020-03-23T21:35:43Z</CreationTime>\\n        <FailoverPriority>1</FailoverPriority>\\n        <MaxIOPS>32000</MaxIOPS>\\n        <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n        <DBNodeRole>Reader</DBNodeRole>\\n        <ZoneId>cn-hangzhou-i</ZoneId>\\n        <MaxConnections>8000</MaxConnections>\\n        <DBNodeStatus>Running</DBNodeStatus>\\n        <DBNodeId>pi-****************</DBNodeId>\\n        <ImciSwitch>ON</ImciSwitch>\\n        <HotReplicaMode>ON</HotReplicaMode>\\n        <AddedCpuCores>6</AddedCpuCores>\\n        <MasterId>pi-bp18z52akld3*****</MasterId>\\n        <SccMode>ON</SccMode>\\n        <ServerWeight>1</ServerWeight>\\n        <ServerlessType>AgileServerless</ServerlessType>\\n    </DBNodes>\\n    <ZoneIds>cn-hangzhou-i,cn-hangzhou-g</ZoneIds>\\n    <MaintainTime>18:00Z-19:00Z</MaintainTime>\\n    <Engine>POLARDB</Engine>\\n    <Tags>\\n        <Key>test</Key>\\n        <Value>MySQL</Value>\\n    </Tags>\\n    <RequestId>074467EF-86B9-4C23-ACBF-E9B81A******</RequestId>\\n    <VPCId>vpc-*******************</VPCId>\\n    <DBClusterStatus>Running</DBClusterStatus>\\n    <VSwitchId>vsw-*********************</VSwitchId>\\n    <DBClusterDescription>test</DBClusterDescription>\\n    <Expired>false</Expired>\\n    <PayType>Prepaid</PayType>\\n    <StoragePayType>Prepaid</StoragePayType>\\n    <LockMode>Unlock</LockMode>\\n    <StorageUsed>3012558848</StorageUsed>\\n    <StorageSpace>50</StorageSpace>\\n    <DBVersionStatus>Stable</DBVersionStatus>\\n    <CreationTime>2020-08-14T05:58:42Z</CreationTime>\\n    <SQLSize>0</SQLSize>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <ExpireTime>2020-11-14T16:00:00Z</ExpireTime>\\n    <SubCategory>Exclusive</SubCategory>\\n    <IsProxyLatestVersion>false</IsProxyLatestVersion>\\n    <StorageType>HighPerformance</StorageType>\\n    <ServerlessType>AgileServerless</ServerlessType>\\n    <StrictConsistency>ON</StrictConsistency>\\n    <ProxyCpuCores>4</ProxyCpuCores>\\n    <ProxyStandardCpuCores>2</ProxyStandardCpuCores>\\n    <ProxyType>Exclusive</ProxyType>\\n    <ProxyStatus>Running</ProxyStatus>\\n    <ProxyServerlessType>AgileServerless</ProxyServerlessType>\\n</DescribeDBClusterAttributeResponse>","errorExample":""}]',
      'title' => '查看PolarDB集群的详细属性',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterServerlessConf' => 
    array (
      'summary' => '查询Serverless集群的配置。',
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
            'description' => 'Serverless集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-bp10gr51qasnl****',
          ),
        ),
      ),
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
                'example' => '5E71541A-6007-4DCC-A38A-F872C31FEB45',
              ),
              'ScaleMin' => 
              array (
                'description' => '单节点伸缩下限。取值范围：1 PCU~31 PCU。',
                'type' => 'string',
                'example' => '1',
              ),
              'ScaleMax' => 
              array (
                'description' => '单节点伸缩上限。取值范围：1 PCU~32 PCU。',
                'type' => 'string',
                'example' => '3',
              ),
              'ScaleRoNumMin' => 
              array (
                'description' => '只读节点个数伸缩下限。取值范围：0~15。',
                'type' => 'string',
                'example' => '2',
              ),
              'ScaleRoNumMax' => 
              array (
                'description' => '只读节点个数伸缩上限。取值范围：0~15。',
                'type' => 'string',
                'example' => '4',
              ),
              'AllowShutDown' => 
              array (
                'description' => '是否开启无活动暂停。取值：

- **true**：开启

- **false**：关闭（默认）',
                'type' => 'string',
                'example' => 'true',
              ),
              'SecondsUntilAutoPause' => 
              array (
                'description' => '无活动暂停的检测时长。取值范围：300~86,400。单位秒。检测时长必须是300秒的倍数。',
                'type' => 'string',
                'example' => '10',
              ),
              'DBClusterId' => 
              array (
                'description' => 'Serverless集群ID。',
                'type' => 'string',
                'example' => 'pc-bp10gr51qasnl****',
              ),
              'ScaleApRoNumMin' => 
              array (
                'description' => '只读列存节点个数下限。取值范围：0～7。',
                'type' => 'string',
                'example' => '1',
              ),
              'ScaleApRoNumMax' => 
              array (
                'description' => '只读列存节点个数上限。取值范围：0～7。',
                'type' => 'string',
                'example' => '1',
              ),
              'Switchs' => 
              array (
                'description' => '稳态是否开启。取值：

1：开启

0：关闭',
                'type' => 'string',
                'example' => '1',
              ),
              'ServerlessRuleMode' => 
              array (
                'type' => 'string',
              ),
              'ServerlessRuleCpuEnlargeThreshold' => 
              array (
                'type' => 'string',
              ),
              'ServerlessRuleCpuShrinkThreshold' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEngine.Unsupported',
            'errorMessage' => 'The specified Engine does not support this feature.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ClusterCategory',
            'errorMessage' => 'The operation is not permitted due to cluster category.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E71541A-6007-4DCC-A38A-F872C31FEB45\\",\\n  \\"ScaleMin\\": \\"1\\",\\n  \\"ScaleMax\\": \\"3\\",\\n  \\"ScaleRoNumMin\\": \\"2\\",\\n  \\"ScaleRoNumMax\\": \\"4\\",\\n  \\"AllowShutDown\\": \\"true\\",\\n  \\"SecondsUntilAutoPause\\": \\"10\\",\\n  \\"DBClusterId\\": \\"pc-bp10gr51qasnl****\\",\\n  \\"ScaleApRoNumMin\\": \\"1\\",\\n  \\"ScaleApRoNumMax\\": \\"1\\",\\n  \\"Switchs\\": \\"1\\",\\n  \\"ServerlessRuleMode\\": \\"\\",\\n  \\"ServerlessRuleCpuEnlargeThreshold\\": \\"\\",\\n  \\"ServerlessRuleCpuShrinkThreshold\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterServerlessConfResponse>\\n    <RequestId>5E71541A-6007-4DCC-A38A-F872C31FEB45</RequestId>\\n    <ScaleMin>1</ScaleMin>\\n    <ScaleMax>3</ScaleMax>\\n    <ScaleRoNumMin>2</ScaleRoNumMin>\\n    <ScaleRoNumMax>4</ScaleRoNumMax>\\n    <AllowShutDown>true</AllowShutDown>\\n    <SecondsUntilAutoPause>10</SecondsUntilAutoPause>\\n    <DBClusterId>pc-bp10gr51qasnl****</DBClusterId>\\n</DescribeDBClusterServerlessConfResponse>","errorExample":""}]',
      'title' => '查询Serverless集群的配置',
    ),
    'DescribePolarSQLCollectorPolicy' => 
    array (
      'summary' => '查看目标集群的SQL洞察功能是否已开启。',
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息（如集群ID）。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
      ),
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
                'example' => '3655211B-4D74-4E13-91E6-FF2AFE******',
              ),
              'SQLCollectorStatus' => 
              array (
                'description' => 'SQL洞察功能是否开启，取值范围如下：
* **Enable**：已开启
* **Disabled**：未开启',
                'type' => 'string',
                'example' => 'Enable',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3655211B-4D74-4E13-91E6-FF2AFE******\\",\\n  \\"SQLCollectorStatus\\": \\"Enable\\",\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePolarSQLCollectorPolicyResponse>\\n<RequestId>3655211B-4D74-4E13-91E6-FF2AFE******</RequestId>\\n<SQLCollectorStatus>Enable</SQLCollectorStatus>\\n</DescribePolarSQLCollectorPolicyResponse>","errorExample":""}]',
      'title' => '查询集群SQL洞察功能',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3F9E6A3B-C13E-4064-A010-18582A******',
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
                                    'example' => 'cn-hangzhou-g',
                                  ),
                                  'VpcEnabled' => 
                                  array (
                                    'description' => '是否支持VPC。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3F9E6A3B-C13E-4064-A010-18582A******\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n              \\"VpcEnabled\\": true\\n            }\\n          ]\\n        },\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"Regions\\": {\\n        \\"Region\\": [\\n            {\\n                \\"RegionId\\": \\"cn-beijing\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-beijing-e\\"\\n                        }, \\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-beijing-g\\"\\n                        }\\n                    ]\\n                }\\n            }, \\n            {\\n                \\"RegionId\\": \\"cn-hangzhou\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-hangzhou-g\\"\\n                        }\\n                    ]\\n                }\\n            }, \\n            {\\n                \\"RegionId\\": \\"cn-shanghai\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-shanghai-d\\"\\n                        }, \\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-shanghai-e\\"\\n                        }\\n                    ]\\n                }\\n            }, \\n            {\\n                \\"RegionId\\": \\"cn-shenzhen\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-shenzhen-e\\"\\n                        }\\n                    ]\\n                }\\n            }, \\n            {\\n                \\"RegionId\\": \\"cn-hongkong\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-hongkong-c\\"\\n                        }\\n                    ]\\n                }\\n            }, \\n            {\\n                \\"RegionId\\": \\"cn-huhehaote\\", \\n                \\"Zones\\": {\\n                    \\"Zone\\": [\\n                        {\\n                            \\"VpcEnabled\\": true, \\n                            \\"ZoneId\\": \\"cn-huhehaote-a\\"\\n                        }\\n                    ]\\n                }\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<DescribeRegionsResponse>\\n<RequestId>3F9E6A3B-C13E-4064-A010-18582A******</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-h</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-i</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hangzhou-g</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shanghai</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shanghai-e</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shanghai-f</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shanghai-j</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-qingdao</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-qingdao-b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-qingdao-c</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-beijing</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-beijing-h</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-beijing-g</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-zhangjiakou-b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-zhangjiakou-a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-huhehaote-a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shenzhen-d</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-shenzhen-e</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-chengdu</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-chengdu-b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-hongkong</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hongkong-b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>cn-hongkong-c</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-1c</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-2b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-3b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-3a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-5b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-southeast-5a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-northeast-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-northeast-1b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-northeast-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-south-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-south-1b</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>ap-south-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>eu-central-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>eu-central-1b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>eu-west-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>eu-west-1a</ZoneId>\\n            </Zone>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>eu-west-1b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>us-west-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>us-west-1a</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n    <Region>\\n        <RegionId>us-east-1</RegionId>\\n        <Zones>\\n            <Zone>\\n                <VpcEnabled>true</VpcEnabled>\\n                <ZoneId>us-east-1b</ZoneId>\\n            </Zone>\\n        </Zones>\\n    </Region>\\n</Regions>\\n</DescribeRegionsResponse>","errorExample":"<DescribeRegionsResponse>\\n\\t<Regions>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-beijing</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-beijing-e</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-beijing-g</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-hangzhou-g</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-shanghai</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-shanghai-d</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-shanghai-e</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-shenzhen</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-shenzhen-e</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-hongkong</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-hongkong-c</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-huhehaote</RegionId>\\n\\t\\t\\t<Zones>\\n\\t\\t\\t\\t<Zone>\\n\\t\\t\\t\\t\\t<VpcEnabled>true</VpcEnabled>\\n\\t\\t\\t\\t\\t<ZoneId>cn-huhehaote-a</ZoneId>\\n\\t\\t\\t\\t</Zone>\\n\\t\\t\\t</Zones>\\n\\t\\t</Region>\\n\\t</Regions></DescribeRegionsResponse>"}]',
      'title' => '查看用户可选的地域和可用区',
      'summary' => '查询PolarDB支持的地域和可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTasks' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> `DBNodeId`和`DBClusterId`必选其一填入。您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点ID。
> `DBNodeId`和`DBClusterId`必选其一填入。您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-***************',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-11-30T00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，查询结束时间需晚于开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-12-02T03:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态，取值范围如下：
* **Waiting**：任务等待执行中
* **Running**：任务正在执行中
* **Finished**：任务已完成
* **Closed**：任务已关闭
* **Pause**：任务已暂停
* **Stop**：任务已中断

>* 若该参数留空，仅返回当前集群或节点下所有状态为**Waiting**或**Running**的任务详情。
>*  支持输入多个任务状态，各状态之间用逗号分割查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值为**30**、**50**或**100**。

默认值为**30**。 ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。

默认值为**1**。',
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
                'example' => '30',
              ),
              'Tasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Task' => 
                  array (
                    'description' => '任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FinishTime' => 
                        array (
                          'description' => '任务完成时间，格式为`YYYY-MM-DDThh:mm:ssZ`（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-12-02T02:40:15Z',
                        ),
                        'StepsInfo' => 
                        array (
                          'description' => '任务子步骤详情。',
                          'type' => 'string',
                          'example' => '[{\\"remain\\":0,\\"name\\":\\"init_task\\",\\"progress\\":100},{\\"remain\\":1764,\\"name\\":\\"create_instance\\",\\"progress\\":0},{\\"remain\\":1,\\"name\\":\\"init_cluster\\",\\"progress\\":0},{\\"remain\\":2,\\"name\\":\\"create_backup\\",\\"progress\\":0}]',
                        ),
                        'Progress' => 
                        array (
                          'description' => '任务进度百分比。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'ExpectedFinishTime' => 
                        array (
                          'description' => '预计结束时间。若无特殊情况，该参数为空。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'BeginTime' => 
                        array (
                          'description' => '任务开始时间，格式为`YYYY-MM-DDThh:mm:ssZ`（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-12-02T02:39:15Z',
                        ),
                        'TaskErrorCode' => 
                        array (
                          'description' => '任务出错时的错误码。
>仅当任务状态为**Stop**时返回该参数。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'ProgressInfo' => 
                        array (
                          'description' => '任务进度的描述信息。若目标任务无进度描述信息，该参数为空。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'CurrentStepName' => 
                        array (
                          'description' => '当前任务的子步骤名称。',
                          'type' => 'string',
                          'example' => 'create_instance',
                        ),
                        'StepProgressInfo' => 
                        array (
                          'description' => '任务子步骤进度。例如`1/4`表示该任务共包含4个子步骤，当前正在执行第一步。',
                          'type' => 'string',
                          'example' => '1/4',
                        ),
                        'TaskErrorMessage' => 
                        array (
                          'description' => '任务出错时的错误信息。
>仅当任务状态为**Stop**时返回该参数。',
                          'type' => 'string',
                          'example' => 'null',
                        ),
                        'TaskAction' => 
                        array (
                          'description' => '目标任务所使用的API接口，例如`CreateDBInstance`。',
                          'type' => 'string',
                          'example' => 'CreateDBInstance',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名称。
>仅涉及数据库相关操作的任务会返回该参数。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Remain' => 
                        array (
                          'description' => '任务预计剩余时间，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1767',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '目标任务ID。',
                          'type' => 'string',
                          'example' => '111111111',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间。',
                'type' => 'string',
                'example' => '2020-12-02T03:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4352AD99-9FF5-41A6-A319-068089******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2020-11-30T00:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '任务所对应的集群ID。',
                'type' => 'string',
                'example' => 'pc-***************',
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
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidStatus.Malformed',
            'errorMessage' => 'The specified parameter Status is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 30,\\n  \\"Tasks\\": {\\n    \\"Task\\": [\\n      {\\n        \\"FinishTime\\": \\"2020-12-02T02:40:15Z\\",\\n        \\"StepsInfo\\": \\"[{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"init_task\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":100},{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":1764,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"create_instance\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"init_cluster\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":0},{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"create_backup\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":0}]\\",\\n        \\"Progress\\": 100,\\n        \\"ExpectedFinishTime\\": \\"null\\",\\n        \\"BeginTime\\": \\"2020-12-02T02:39:15Z\\",\\n        \\"TaskErrorCode\\": \\"null\\",\\n        \\"ProgressInfo\\": \\"null\\",\\n        \\"CurrentStepName\\": \\"create_instance\\",\\n        \\"StepProgressInfo\\": \\"1/4\\",\\n        \\"TaskErrorMessage\\": \\"null\\",\\n        \\"TaskAction\\": \\"CreateDBInstance\\",\\n        \\"DBName\\": \\"test\\",\\n        \\"Remain\\": 1767,\\n        \\"TaskId\\": \\"111111111\\"\\n      }\\n    ]\\n  },\\n  \\"EndTime\\": \\"2020-12-02T03:00Z\\",\\n  \\"RequestId\\": \\"4352AD99-9FF5-41A6-A319-068089******\\",\\n  \\"PageNumber\\": 1,\\n  \\"StartTime\\": \\"2020-11-30T00:00Z\\",\\n  \\"DBClusterId\\": \\"pc-***************\\"\\n}","type":"json"}]',
      'title' => '获取任务列表',
      'summary' => '查看通过API生成的任务（如创建集群）进度详情。',
      'description' => '* 支持查看直接使用某API（如[CreateDBCluster](~~98169~~)）生成的任务，或在PolarDB控制台使用某功能（如[创建集群](~~58769~~)）时，系统调用了对应API生成的任务进度详情。
* 当前仅支持查看创建集群时，即调用[CreateDBCluster](~~98169~~)接口且`CreationOption`参数值不为`CreateGdnStandby`时，生成的任务进度详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVSwitches' => 
    array (
      'summary' => '查询交换机。',
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
            'description' => '交换机所属地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou	
',
            'default' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机所属专有网络ID。

> **VpcId**和**DedicatedHostGroupId**参数至少输入一个。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'vpc-25cdvfeq58pl****',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机所属可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-d	
',
          ),
        ),
        3 => 
        array (
          'name' => 'DedicatedHostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专属集群ID。

> **VpcId**和**DedicatedHostGroupId**参数至少输入一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'dhg-4n****',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表的页码，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1	
',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数，最大值为50。默认值为50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
            'default' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-bp67acfmxazb4ph****',
          ),
        ),
      ),
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
                'example' => '9A572171-4E27-40D1-BD36-D26C9E71E29E',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
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
              'PageSize' => 
              array (
                'description' => '每页包含的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'VSwitchs' => 
              array (
                'description' => '交换机列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CidrBlock' => 
                    array (
                      'description' => '交换机的IPv4网段。',
                      'type' => 'string',
                      'example' => '172.16.0.0/24',
                    ),
                    'Description' => 
                    array (
                      'description' => '交换机的描述信息。',
                      'type' => 'string',
                      'example' => 'vSwitchDescription	
',
                    ),
                    'IsDefault' => 
                    array (
                      'description' => '是否是默认交换机，取值：

- **true**：是默认交换机。
- **false**：非默认交换机。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'IzNo' => 
                    array (
                      'description' => 'NAT网关所属的可用区。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b	
',
                    ),
                    'Status' => 
                    array (
                      'description' => '交换机的状态，取值：

- **Pending**：配置中。
- **Available**：可用。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '交换机的ID。',
                      'type' => 'string',
                      'example' => 'vsw-25bcdxs7pv1****	
',
                    ),
                    'VSwitchName' => 
                    array (
                      'description' => '交换机的名称。',
                      'type' => 'string',
                      'example' => 'vSwitch',
                    ),
                    'AvailableIpAddressCount' => 
                    array (
                      'description' => '交换机中可用的IP地址数量。',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidVSwitchId.NotFound',
            'errorMessage' => 'Specified virtual switch is not found in specified VPC.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrecttVpcId',
            'errorMessage' => 'The specified  parameter VPCId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'Specified VPC zone is not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9A572171-4E27-40D1-BD36-D26C9E71E29E\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"VSwitchs\\": [\\n    {\\n      \\"CidrBlock\\": \\"172.16.0.0/24\\",\\n      \\"Description\\": \\"vSwitchDescription\\\\t\\\\n\\",\\n      \\"IsDefault\\": true,\\n      \\"IzNo\\": \\"cn-hangzhou-b\\\\t\\\\n\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"VSwitchId\\": \\"vsw-25bcdxs7pv1****\\\\t\\\\n\\",\\n      \\"VSwitchName\\": \\"vSwitch\\",\\n      \\"AvailableIpAddressCount\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询已创建的交换机',
    ),
    'ModifyDBCluster' => 
    array (
      'summary' => '修改PolarDB MySQL集群的功能配置。',
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
            'description' => '集群ID。
>您可以调用DescribeDBClusters接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'StandbyHAMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的跨可用区自动切换模式，取值范围如下：

- **ON**：开启跨可用区自动切换。
- **OFF**：关闭跨可用区自动切换。
- **0**：开启客户演练。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSyncMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的跨可用区数据复制方式，取值范围如下：

- **AsyncSync**：异步。
- **SemiSync**：半同步。',
            'type' => 'string',
            'required' => false,
            'example' => 'AsynSync',
          ),
        ),
        3 => 
        array (
          'name' => 'FaultSimulateMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的故障演练模拟场景。取值为0，表示模拟主可用区故障。
> - 当`StandbyHAMode`设置为0时，该参数才生效。
> - **模拟主可用区故障**场景中，主可用区所有的计算节点均不可用，该场景的容灾切换是有损的。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'StorageAutoScale',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标准版集群是否开启存储自动扩容。取值范围如下：

- Enable：开启存储自动扩容。
- Disable：关闭存储自动扩容。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
            'enum' => 
            array (
              0 => 'Enable',
              1 => 'Disable',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'CompressStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启存储压缩。取值为**ON**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
            'enum' => 
            array (
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'StorageUpperBound',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标准版集群存储自动扩容上限，单位：GB。

> 取值最大为32000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '64000',
            'minimum' => '20',
            'example' => '800',
          ),
        ),
        7 => 
        array (
          'name' => 'DBNodeCrashList',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'FaultInjectionType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'CrashSQLInjection',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD3FA5F3-FAF3-44CA-AFFF-BAF869******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-*************',
              ),
              'OrderId' => 
              array (
                'description' => '生成的订单ID。',
                'type' => 'string',
                'example' => '2148126708*****',
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
            'errorCode' => 'OperationDenied.CreateDBNodesWithStrictConsistencyOn',
            'errorMessage' => '3AZ cluster does not allow create db nodes.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBProxyClusterClass.Malformed',
            'errorMessage' => 'The specified parameter DBProxyClusterClass is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeNum.Malformed',
            'errorMessage' => 'The number of parameter DBNode.N is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.ModifyDBNodeClassWithStrictConsistencyOn',
            'errorMessage' => '3AZ cluster does not allow modify db node class.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDowngradeDBNodeClass.Limit',
            'errorMessage' => 'The specified Downgrade DBNodeClass is limit on the MaxDiskSize.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidEngine.Unsupported',
            'errorMessage' => 'The specified Engine does not support this feature.',
          ),
          6 => 
          array (
            'errorCode' => 'OperationDenied.ModifyProxyWithStrictConsistencyOn',
            'errorMessage' => '3AZ cluster does not allow modify proxy.',
          ),
          7 => 
          array (
            'errorCode' => 'StandbyClusterTurnOn',
            'errorMessage' => 'The specified dbCluster already turn on hot standby cluster.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectDBInstanceType',
            'errorMessage' => 'Current DB instance type does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectDBInstance',
            'errorMessage' => 'Current DB instance does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.LockMode',
            'errorMessage' => 'The operation is not permitted due to lock of cluster.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterStatus',
            'errorMessage' => 'The operation is not permitted due to status of cluster.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.TempUpgradeDuring',
            'errorMessage' => 'This operation is not allowed during the temporary upgrade of the cluster.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.PgDBNodeSpec',
            'errorMessage' => 'The specification PGO of DB nodes is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam.NoChange',
            'errorMessage' => 'No change found',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.DBNodeClass',
            'errorMessage' => 'The target DB node class is invalid for SQL acceleration.',
          ),
          8 => 
          array (
            'errorCode' => 'OperationDenied.ReaderNum',
            'errorMessage' => 'The target reader node number is invalid for SQL acceleration.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParam.DBNodeNum',
            'errorMessage' => 'The number of DB nodes is incorrect.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.DBNodeRole',
            'errorMessage' => 'The operation is not permitted due to the role of node.',
          ),
          11 => 
          array (
            'errorCode' => 'OperationDenied.DeleteNode',
            'errorMessage' => 'The senormal version cluster does not allow the deletion of ro nodes and standby nodes at the same time.',
          ),
          12 => 
          array (
            'errorCode' => 'OperationDenied.EndpointDBNodeNumber',
            'errorMessage' => 'The operation is not permitted due to node number for Endpoint.',
          ),
          13 => 
          array (
            'errorCode' => 'OperationDenied.StandbyEqualSpec',
            'errorMessage' => 'The spec of standby must be equal to rw',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.DeleteDBNodeNumber',
            'errorMessage' => 'The operation is not permitted due to the node number to delete.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.DbVersion',
            'errorMessage' => 'The operation is not permitted due to DbVersion.',
          ),
          16 => 
          array (
            'errorCode' => 'OperationDenied.ClusterCategory',
            'errorMessage' => 'The operation is not permitted due to cluster category.',
          ),
          17 => 
          array (
            'errorCode' => 'OperationDenied.clusterSingleNodeLimit',
            'errorMessage' => 'Single-node instances are not supported and need to be upgraded to cluster version',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidParam.CRACParamNodeNum',
            'errorMessage' => 'The CRAC nodes cannot exceed 8.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParam.ECSESSDSTANDARDParamNodeNum',
            'errorMessage' => 'The ECSESSDSTANDARD nodes cannot exceed 8.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Invalid Parameter.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEditType',
            'errorMessage' => 'Wrong upgrade type.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CD3FA5F3-FAF3-44CA-AFFF-BAF869******\\",\\n  \\"DBClusterId\\": \\"pc-*************\\",\\n  \\"OrderId\\": \\"2148126708*****\\"\\n}","type":"json"}]',
      'title' => '修改集群功能配置',
      'requestParamsDescription' => '对于参数StandbyHAMode、DataSyncMode、FaultSimulateMode和StorageAutoScale，每次调用只能设置一个。如设置了StandbyHAMode参数的值后，不支持再同时设置其它的请求参数的值。
> 当参数StorageAutoScale的值设置为Enable后，还需要设置集群存储自动扩容上限StorageUpperBound参数的值。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称，集群名称需满足如下要求：
- 不能以`http://`或`https://`开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'ClusterDescriptionTest',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<ModifyDBClusterDescriptionResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</ModifyDBClusterDescriptionResponse>","errorExample":"<ModifyDBClusterDescriptionResponse>  \\n\\t<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ModifyDBClusterDescriptionResponse>"}]',
      'title' => '修改集群名称',
      'summary' => '修改PolarDB集群名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterDeletion' => 
    array (
      'summary' => '开启或者关闭集群保护锁。',
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
            'description' => '目标集群ID。

> 您可以通过[DescribeDBClusters](~~98094~~)接口查看集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-bp1313h70cd5m****',
          ),
        ),
        1 => 
        array (
          'name' => 'Protection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或者关闭集群保护锁，默认值为false，取值：

- **true**：开启集群保护锁，开启后不能直接释放该集群，需要关闭集群保护锁后重新释放。
- **false**：关闭集群保护锁。',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '24C80BD8-C710-4138-893A-D2AFED4FC13D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterPayType',
            'errorMessage' => 'The operation is not permitted due to the pay type of cluster.',
          ),
        ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"24C80BD8-C710-4138-893A-D2AFED4FC13D\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterDeletionResponse>\\n    <RequestId>24C80BD8-C710-4138-893A-D2AFED4FC13D</RequestId>\\n</ModifyDBClusterDeletionResponse>","errorExample":""}]',
      'title' => '开启或者关闭集群保护锁',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的可维护时间，格式为`HH:mmZ- HH:mmZ`。例如`16:00Z-17:00Z`，表示0点到1点（UTC+08:00）可进行例行维护。 

> 可维护时间为整点，时长为1小时。',
            'type' => 'string',
            'required' => true,
            'example' => '02:00Z-03:00Z',
          ),
        ),
      ),
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
                'example' => '70656639-1416-479F-AF13-D08197******',
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
            'errorCode' => 'InvalidMaintainTime.Malformed',
            'errorMessage' => 'The specified parameter MaintainTime is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"70656639-1416-479F-AF13-D08197******\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"70656639-1416-479F-AF13-D08197F9C43B\\"\\n}"},{"type":"xml","example":"<ModifyDBClusterMaintainTimeResponse>  \\n\\t<RequestId>70656639-1416-479F-AF13-D08197******</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>","errorExample":"<ModifyDBClusterMaintainTimeResponse>  \\n\\t<RequestId>70656639-1416-479F-AF13-D08197F9C43B</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>"}]',
      'title' => '修改实例集群可维护时间段',
      'summary' => '修改PolarDB集群可例行维护的时间。',
      'description' => '> 建议您将集群可例行维护的时间设置在业务的低峰时间段。阿里云会在您设置的可维护时间段内进行集群维护，保证对业务的影响降到最低。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableDBClusterServerless' => 
    array (
      'summary' => '开启稳态Serverless。',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'ScaleMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩下限。取值范围：1 PCU~8 PCU。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ScaleMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩上限。取值范围：1 PCU~8 PCU。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'ScaleRoNumMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数的伸缩下限。取值范围：0~7。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ScaleRoNumMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数的伸缩上限。取值范围：0~7。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'ScaleApRoNumMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '稳态AP只读节点个数下限。取值范围：0~7。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ScaleApRoNumMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '稳态AP只读节点个数上限。取值范围：0~7。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5E71541A-6007-4DCC-A38A-F872C31FEB45',
              ),
              'DBClusterId' => 
              array (
                'description' => 'Serverless集群ID。',
                'type' => 'string',
                'example' => 'pc-bp10gr51qasnl****',
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
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'rw class code must be equal with hot replica',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5E71541A-6007-4DCC-A38A-F872C31FEB45\\",\\n  \\"DBClusterId\\": \\"pc-bp10gr51qasnl****\\"\\n}","type":"json"}]',
      'title' => '开启稳态Serverless',
    ),
    'DisableDBClusterServerless' => 
    array (
      'summary' => '关闭稳态Serverless。',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
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
                'example' => 'CD3FA5F3-FAF3-44CA-AFFF-BAF869******',
              ),
              'DBClusterId' => 
              array (
                'description' => 'Serverless集群ID。',
                'type' => 'string',
                'example' => 'pc-****************',
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
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'rw class code must be equal with hot replica',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CD3FA5F3-FAF3-44CA-AFFF-BAF869******\\",\\n  \\"DBClusterId\\": \\"pc-****************\\"\\n}","type":"json"}]',
      'title' => '关闭稳态Serverless',
    ),
    'ModifyDBClusterServerlessConf' => 
    array (
      'summary' => '修改Serverless集群配置。',
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
            'description' => 'Serverless集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-bp10gr51qasnl****',
          ),
        ),
        1 => 
        array (
          'name' => 'ScaleMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩下限。取值范围：1~31。单位：PCU。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ScaleMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点伸缩上限。取值范围：1~32。单位：PCU。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ScaleRoNumMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数的伸缩下限。取值范围：0~15。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ScaleRoNumMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点个数的伸缩上限。取值范围：0~15。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'AllowShutDown',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启无活动暂停。取值范围如下：

- **true**：开启

- **false**（默认）：关闭',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'SecondsUntilAutoPause',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '无活动暂停的检测时长。
取值范围：300~86,400。单位秒。
>检测时长必须是300秒的倍数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'ScaleApRoNumMin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读列存节点个数下限。取值范围：0～7。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ScaleApRoNumMax',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读列存节点个数上限。取值范围：0～7。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）变更主可用区任务的最早时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。
>开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为2021-01-14T09:00:00Z，此处允许填入的开始时间范围为2021-01-14T09:00:00Z~2021-01-15T09:00:00Z。若该参数留空，默认立即执行变更主可用区任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        10 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。
> 最晚时间需晚于开始时间的30分钟或以上。若设置了PlannedStartTime但未指定该参数，执行目标任务的最晚时间默认为开始时间+30分钟。例如当设置PlannedStartTime为2021-01-14T09:00:00Z且该参数留空时，目标任务最晚将于2021-01-14T09:30:00Z开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        11 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '立即执行或定时执行内核版本升级。取值范围如下：

- **false**（默认）：定时执行

- **true**：立即执行

> 调用该接口时无需使用该参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'ServerlessRuleCpuShrinkThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'ServerlessRuleCpuEnlargeThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'ServerlessRuleMode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'normal',
              1 => 'flexible',
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
                'example' => '5E71541A-6007-4DCC-A38A-F872C31FEB45',
              ),
              'DBClusterId' => 
              array (
                'description' => 'Serverless集群ID。',
                'type' => 'string',
                'example' => 'pc-bp10gr51qasnl****',
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
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'rw class code must be equal with hot replica',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E71541A-6007-4DCC-A38A-F872C31FEB45\\",\\n  \\"DBClusterId\\": \\"pc-bp10gr51qasnl****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterServerlessConfResponse>\\n    <RequestId>5E71541A-6007-4DCC-A38A-F872C31FEB45</RequestId>\\n    <DBClusterId>pc-bp10gr51qasnl****</DBClusterId>\\n</ModifyDBClusterServerlessConfResponse>","errorExample":""}]',
      'title' => '修改Serverless集群配置',
    ),
    'ModifyDBClusterStorageSpace' => 
    array (
      'summary' => '变更企业版按空间计费集群和标准版集群的存储空间。',
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
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'StorageSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更后的存储空间。单位：GB。
> PolarDB MySQL标准版的存储空间取值范围：20~32000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、长度不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
        3 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）升级配置任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ（UTC）`。
> - 仅当`ModifyType`取值为`Upgrade`时，该参数生效。
>- 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
>- 若该参数留空，默认立即执行升级配置任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ（UTC）`。
>- 最晚时间需晚于开始时间的30分钟或以上。
>- 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'SubCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群子系列。取值范围如下：

- **normal_exclusive**：独享规格
- **normal_general**：通用规格',
            'type' => 'string',
            'required' => false,
            'example' => 'normal_general',
          ),
        ),
      ),
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
                'example' => '685F028C-4FCD-407D-A559-072D63******',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-*************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035629******',
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
            'errorCode' => 'InvalidParameters.Malformed',
            'errorMessage' => 'The Specified parameters is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ModifyStorageSpace',
            'errorMessage' => 'This cluster edition does not support extension of storage capacity.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"685F028C-4FCD-407D-A559-072D63******\\",\\n  \\"DBClusterId\\": \\"pc-*************\\",\\n  \\"OrderId\\": \\"2035629******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterStorageSpaceResponse>\\n    <RequestId>685F028C-4FCD-407D-A559-072D63******</RequestId>\\n    <DBClusterId>pc-*************</DBClusterId>\\n    <OrderId>2035629******</OrderId>\\n</ModifyDBClusterStorageSpaceResponse>","errorExample":""}]',
      'title' => '变更企业版按空间计费集群和标准版集群的存储空间',
    ),
    'ManuallyStartDBCluster' => 
    array (
      'summary' => '手动启动集群。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-xxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>  您可以通过[DescribeRegions](~~98041~~)接口查看可用地域。',
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
                'example' => '73A85BAF-1039-4CDE-A83F-1A140F******',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"73A85BAF-1039-4CDE-A83F-1A140F******\\"\\n}","errorExample":""},{"type":"xml","example":"<ManuallyStartDBClusterResponse>\\n    <RequestId>73A85BAF-1039-4CDE-A83F-1A140F******</RequestId>\\n</ManuallyStartDBClusterResponse>","errorExample":""}]',
      'title' => '手动启动集群',
    ),
    'ModifyDBClusterPrimaryZone' => 
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
            'description' => '集群ID。
>您可以调用[DescribeDBClusters](~~173433~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的可用区ID。

> 可通过接口[DescribeRegions](~~98041~~)查看可用的可用区。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更换的可用区类型。取值范围如下：

- **Primary**：主可用区。
- **Standby**：备可用区。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'Primary',
            'default' => 'Primary',
            'enum' => 
            array (
              0 => 'Primary',
              1 => 'Standby',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标可用区的虚拟交换机（VSwitch）ID。

>- 当集群为PolarDB O引擎或PolarDB PostgreSQL引擎时，该参数必填。
>- 当集群为PolarDB MySQL引擎时，如果目标可用区没有创建过Vswitch，则使用默认的Vswitch，该参数非必填。如果目标可用区已创建过Vswitch，该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-**************',
          ),
        ),
        4 => 
        array (
          'name' => 'IsSwitchOverForDisaster',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否回切原可用区，取值范围如下：

- true：回切原可用区。
- false：不回切原可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）变更可用区任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
>* 若该参数留空，默认立即执行变更可用区任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '立即执行或定时执行更换可用区。取值范围如下：

- false（默认值）：定时执行。
- true：立即执行。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切换可用区支持指定的专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-**********',
          ),
        ),
      ),
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
                'example' => 'ED12C6FF-3261-4571-AB57-3570F6******',
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
            'errorCode' => 'ScheduleTaskExist',
            'errorMessage' => 'The specified cluster already has a scheduled task.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidZoneId.Malformed',
            'errorMessage' => 'The specified parameter ZoneId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidZoneId.Same',
            'errorMessage' => 'The specified parameter ZoneId is same with origin zoneId.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.MutexLock',
            'errorMessage' => 'The operation is not permitted due to the mutex lock.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InsufficientResource',
            'errorMessage' => 'The specified target zone has insufficient resources.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ED12C6FF-3261-4571-AB57-3570F6******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterPrimaryZoneResponse>\\r\\n<RequestId>ED12C6FF-3261-4571-AB57-3570F6******</RequestId>\\r\\n</ModifyDBClusterPrimaryZoneResponse>","errorExample":""}]',
      'title' => '更换PolarDB集群的可用区',
      'summary' => '更换PolarDB集群的可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FailoverDBCluster' => 
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
            'description' => '数据库集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetDBNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将要切换为主节点的节点ID，如果不填，则系统自动选举。您可以通过接口[DescribeDBClusters](~~98094~~)查询节点ID等信息。

> - 自动选举主节点： 系统找出当前可以被选举的所有只读节点。选择优先级最高的一个或多个只读节点。如果切换第一个节点失败（例如，网络原因、复制状态异常等），则会尝试切换下一个，直至成功。
>- 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-***********',
          ),
        ),
        2 => 
        array (
          'name' => 'RollBackForDisaster',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'False',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5******',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'HaStatusNotSupport',
            'errorMessage' => 'Current DB instance HA status does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBNodeType',
            'errorMessage' => 'The operation is not permitted due to type of node.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.ClusterCategory',
            'errorMessage' => 'The operation is not permitted due to cluster category.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":""},{"type":"xml","example":"<FailoverDBClusterResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</FailoverDBClusterResponse>","errorExample":""}]',
      'title' => '对集群进行手动主备切换',
      'summary' => '对PolarDB集群进行手动主备切换，可以指定一个只读节点为新的主节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterVersion' => 
    array (
      'summary' => '查看PolarDB MySQL集群当前内核版本的详细信息。',
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息（如集群ID）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DescribeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回最新版本信息或者可升级版本列表。取值范围如下：

- LATEST_VERSION：查询最新版本信息。
- AVAILABLE_VERSION：查询可升级版本列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'LATEST_VERSION',
            'default' => 'LATEST_VERSION',
            'enum' => 
            array (
              0 => 'AVAILABLE_VERSION',
              1 => 'LATEST_VERSION',
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
              'IsLatestVersion' => 
              array (
                'description' => '当前数据库内核引擎版本是否为最新版本，取值范围如下：

-  **true**
-  **false**',
                'type' => 'string',
                'example' => 'true',
              ),
              'IsProxyLatestVersion' => 
              array (
                'description' => '当前数据库代理版本是否为最新版本，取值范围如下：
* **true**
* **false**',
                'type' => 'string',
                'example' => 'true',
              ),
              'DBVersion' => 
              array (
                'description' => '数据库引擎的大版本号，取值范围如下：
* **8.0**
* **5.7**
* **5.6**',
                'type' => 'string',
                'example' => '8.0',
              ),
              'DBRevisionVersion' => 
              array (
                'description' => '数据库引擎的修订版本号。
> 针对PolarDB MySQL版5.6版本的集群，仅发布日期在20200831之后的`Revision Version`信息会被返回，否则该参数为空。关于PolarDB MySQL版集群的内核版本详情，请参见[内核发布记录](~~423884~~)。',
                'type' => 'string',
                'example' => '8.0.1.1.7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '47921222-0D37-4133-8C0D-017DC3******',
              ),
              'DBVersionStatus' => 
              array (
                'description' => '当前数据库小版本状态，取值范围如下：
* **Stable**：当前版本状态稳定。
* **Old**：当前版本过旧，建议升级到最新版本。
* **HighRisk**：当前版本有严重缺陷，请立即升级到最新的版本。
* **Beta**：当前版本为Beta版。
>关于如何升级数据库小版本，请参见[版本升级](~~158572~~)。',
                'type' => 'string',
                'example' => 'Stable',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-****************',
              ),
              'DBMinorVersion' => 
              array (
                'description' => '数据库引擎小版本号。
* 当`DBVersion`为**8.0**时，取值范围如下：
    * **8.0.2**
    * **8.0.1**
* 当`DBVersion`为**5.7**时，取值为**5.7.28**。

* 当`DBVersion`为**5.6**时，取值为**5.6.16**。',
                'type' => 'string',
                'example' => '8.0.1',
              ),
              'ProxyRevisionVersion' => 
              array (
                'description' => '数据库代理的版本。',
                'type' => 'string',
                'example' => '2.4.15',
              ),
              'ProxyVersionStatus' => 
              array (
                'description' => '数据库代理的版本状态。取值范围如下：
* **Stable**：当前版本状态稳定。
* **Old**：当前版本过旧，建议升级到最新版本。
* **HighRisk**：当前版本有严重缺陷，请立即升级到最新的版本。
* **Beta**：当前版本为Beta版。
>关于如何升级数据库代理版本，请参见[版本升级](~~158572~~)。',
                'type' => 'string',
                'example' => 'Stable',
              ),
              'ProxyLatestVersion' => 
              array (
                'description' => '数据库代理的最新版本。',
                'type' => 'string',
                'example' => '2.4.17',
              ),
              'DBLatestVersion' => 
              array (
                'description' => '数据库内核引擎的最新版本。',
                'type' => 'string',
                'example' => '8.0.1.1.16',
              ),
              'DBRevisionVersionList' => 
              array (
                'description' => '可升级的版本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReleaseType' => 
                    array (
                      'description' => '数据库版本发布状态。取值范围如下：
* **Stable**：当前版本状态稳定。
* **Old**：当前版本过旧，不建议升级到该版本。
* **HighRisk**：当前版本有严重缺陷，不建议升级到该版本。
* **Beta**：当前版本为Beta版。',
                      'type' => 'string',
                      'example' => 'Stable',
                    ),
                    'RevisionVersionCode' => 
                    array (
                      'description' => '数据库引擎的修订版本Code，用于指定升级到该目标版本。',
                      'type' => 'string',
                      'example' => '20230707',
                    ),
                    'RevisionVersionName' => 
                    array (
                      'description' => '数据库引擎的修订版本号。',
                      'type' => 'string',
                      'example' => '8.0.1.1.35.1',
                    ),
                    'ReleaseNote' => 
                    array (
                      'description' => '版本发布说明。',
                      'type' => 'string',
                      'example' => 'ReleaseNote',
                    ),
                  ),
                ),
              ),
              'ProxyRevisionVersionList' => 
              array (
                'description' => '数据库Proxy版本发布状态。取值范围如下：

- **Stable**：当前版本状态稳定。
- **Old**：当前版本过旧，不建议升级到该版本。
- **HighRisk**：当前版本有严重缺陷，不建议升级到该版本。
- **Beta**：当前版本为Beta版。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReleaseType' => 
                    array (
                      'description' => '发布类型。返回值：
* **LTS**：长期支持版本。
* **BETA**：预览版本。',
                      'type' => 'string',
                      'example' => 'Stable',
                    ),
                    'RevisionVersionCode' => 
                    array (
                      'description' => '数据库Proxy引擎的修订版本Code，用于指定升级到该目标版本。',
                      'type' => 'string',
                      'example' => '20230707',
                    ),
                    'RevisionVersionName' => 
                    array (
                      'description' => '数据库Proxy引擎的修订版本号。',
                      'type' => 'string',
                      'example' => '2.8.24',
                    ),
                    'ReleaseNote' => 
                    array (
                      'description' => '版本发布说明。',
                      'type' => 'string',
                      'example' => 'ReleaseNote',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBVersion.Malformed',
            'errorMessage' => 'The Specified DBVersion is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Older',
            'errorMessage' => 'The primary cluster version is too old, please upgrade it.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IsLatestVersion\\": \\"true\\",\\n  \\"IsProxyLatestVersion\\": \\"true\\",\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"DBRevisionVersion\\": \\"8.0.1.1.7\\",\\n  \\"RequestId\\": \\"47921222-0D37-4133-8C0D-017DC3******\\",\\n  \\"DBVersionStatus\\": \\"Stable\\",\\n  \\"DBClusterId\\": \\"pc-****************\\",\\n  \\"DBMinorVersion\\": \\"8.0.1\\",\\n  \\"ProxyRevisionVersion\\": \\"2.4.15\\",\\n  \\"ProxyVersionStatus\\": \\"Stable\\",\\n  \\"ProxyLatestVersion\\": \\"2.4.17\\",\\n  \\"DBLatestVersion\\": \\"8.0.1.1.16\\",\\n  \\"DBRevisionVersionList\\": [\\n    {\\n      \\"ReleaseType\\": \\"Stable\\",\\n      \\"RevisionVersionCode\\": \\"20230707\\",\\n      \\"RevisionVersionName\\": \\"8.0.1.1.35.1\\",\\n      \\"ReleaseNote\\": \\"ReleaseNote\\"\\n    }\\n  ],\\n  \\"ProxyRevisionVersionList\\": [\\n    {\\n      \\"ReleaseType\\": \\"Stable\\",\\n      \\"RevisionVersionCode\\": \\"20230707\\",\\n      \\"RevisionVersionName\\": \\"2.8.24\\",\\n      \\"ReleaseNote\\": \\"ReleaseNote\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterVersionResponse>\\n    <IsLatestVersion>true</IsLatestVersion>\\n    <IsProxyLatestVersion>true</IsProxyLatestVersion>\\n    <DBVersion>8.0</DBVersion>\\n    <DBRevisionVersion>8.0.1.1.7</DBRevisionVersion>\\n    <RequestId>47921222-0D37-4133-8C0D-017DC3******</RequestId>\\n    <DBVersionStatus>Stable</DBVersionStatus>\\n    <DBClusterId>pc-****************</DBClusterId>\\n    <DBMinorVersion>8.0.1</DBMinorVersion>\\n    <ProxyRevisionVersion>2.4.15</ProxyRevisionVersion>\\n    <ProxyVersionStatus>Stable</ProxyVersionStatus>\\n    <ProxyLatestVersion>2.4.17</ProxyLatestVersion>\\n    <DBLatestVersion>8.0.1.1.16</DBLatestVersion>\\n</DescribeDBClusterVersionResponse>","errorExample":""}]',
      'title' => '查看PolarDB MySQL集群内核版本信息',
      'description' => '>更多关于PolarDB MySQL版集群的内核版本说明和详情，请参见[内核版本说明](~~471239~~)和[内核发布记录](~~423884~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeDBClusterVersion' => 
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
            'description' => '集群ID。
>您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息（如集群ID）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'UpgradePolicy',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '内核版本升级策略。取值范围如下：

- **HOT**：热升级

- **COLD**：冷升级。目前仅PolarDB MySQL版8.0集群版支持该升级方式。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'HOT',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'UpgradeLabel',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '内核版本升级标签。取值固定为**INNOVATE**。

>- 该参数仅适用于PolarDB MySQL版8.0.1版本升级至PolarDB MySQL版8.0.2版本。
>- 当传入该参数时，`UpgradePolicy`必须传入**COLD**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'INNOVATE',
          ),
        ),
        3 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）内核版本升级任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
>* 若该参数留空，默认立即执行内核版本升级任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '立即执行或定时执行内核版本升级。取值范围如下：

- **false**（默认值）：定时执行

- **true**：立即执行

> 调用该接口时无需使用该参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'UpgradeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级类型。取值范围如下：

- **PROXY**：仅升级数据库代理（Proxy）

- **DB**：仅升级内核引擎

- **ALL**（默认值）：同时升级数据库代理（Proxy）和内核引擎',
            'type' => 'string',
            'required' => false,
            'example' => 'PROXY',
          ),
        ),
        7 => 
        array (
          'name' => 'TargetDBRevisionVersionCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标版本的VersionCode，参数取值可从[DescribeDBClusterVersion](~~2319145~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => '20230707',
          ),
        ),
        8 => 
        array (
          'name' => 'TargetProxyRevisionVersionCode',
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
                'example' => 'CAE6755F-B79A-4861-B227-801FE8******',
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
            'errorCode' => 'ScheduleTaskExist',
            'errorMessage' => 'The specified dbCluster already has a scheduled task.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidUpgradeLabel.Malformed',
            'errorMessage' => 'The specified parameter UpgradeLabel is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEngine.Unsupported',
            'errorMessage' => 'The specified Engine does not support this feature.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEngineMinorVersion.Malformed',
            'errorMessage' => 'The specified parameter MinorVersion is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Unsupported',
            'errorMessage' => 'The specified engineVersion is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidUpgradePolicy.Malformed',
            'errorMessage' => 'The specified parameter UpgradePolicy is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidSwitchTimeMode.Malformed',
            'errorMessage' => 'The specified parameter SwitchTimeMode is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.UpgradeType',
            'errorMessage' => 'The operation is not permitted due to gdn limit',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectGdnStandbyDBVersion',
            'errorMessage' => 'Current gdn standby cluster is not the latest db version.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CAE6755F-B79A-4861-B227-801FE8******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeDBClusterVersionResponse>\\r\\n<RequestId>CAE6755F-B79A-4861-B227-801FE8******</RequestId>\\r\\n</UpgradeDBClusterVersionResponse>","errorExample":""}]',
      'title' => '升级PolarDB MySQL版集群的内核版本',
      'summary' => '升级PolarDB MySQL版集群的内核版本。',
      'description' => '> - 当前仅支持升级PolarDB MySQL版集群的修订版本（Revision Version），如从8.0.1.1.3升级至8.0.1.1.4。
>- 仅允许阿里云主账号执行定时（即在目标时间段内执行）内核版本升级任务，RAM账号不支持定时内核版本升级任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterAccessWhitelist' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
      ),
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
                'example' => '559E91A2-CDA3-4E9F-808B-29D738******',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterIPArray' => 
                  array (
                    'description' => '集群的IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterIPArrayAttribute' => 
                        array (
                          'description' => 'IP白名单分组属性。',
                          'type' => 'string',
                          'example' => 'hidden',
                        ),
                        'DBClusterIPArrayName' => 
                        array (
                          'description' => 'IP白名单分组名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'SecurityIps' => 
                        array (
                          'description' => 'IP白名单分组下的IP列表，最多1000个，多个IP间用英文逗号（,）隔开，支持如下两种格式： 

- IP地址形式，例如：10.xx.xx.24。
- CIDR形式，例如：10.xx.xx.24/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。',
                          'type' => 'string',
                          'example' => '11.***.***.***,11.***.***.***',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBClusterSecurityGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBClusterSecurityGroup' => 
                  array (
                    'description' => '集群关联的ECS安全组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecurityGroupId' => 
                        array (
                          'description' => 'ECS安全组ID。',
                          'type' => 'string',
                          'example' => 'sg-bp**************',
                        ),
                        'SecurityGroupName' => 
                        array (
                          'description' => 'ECS安全组名称。',
                          'type' => 'string',
                          'example' => 'vpc-********************',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"559E91A2-CDA3-4E9F-808B-29D738******\\",\\n  \\"Items\\": {\\n    \\"DBClusterIPArray\\": [\\n      {\\n        \\"DBClusterIPArrayAttribute\\": \\"hidden\\",\\n        \\"DBClusterIPArrayName\\": \\"default\\",\\n        \\"SecurityIps\\": \\"11.***.***.***,11.***.***.***\\"\\n      }\\n    ]\\n  },\\n  \\"DBClusterSecurityGroups\\": {\\n    \\"DBClusterSecurityGroup\\": [\\n      {\\n        \\"SecurityGroupId\\": \\"sg-bp**************\\",\\n        \\"SecurityGroupName\\": \\"vpc-********************\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"Items\\":{\\n        \\"DBClusterIPArray\\":[\\n            {\\n                \\"DBClusterIPArrayAttribute\\":\\"\\",\\n                \\"DBClusterIPArrayName\\":\\"default\\",\\n                \\"SecurityIPList\\":\\"127.0.0.1\\"\\n            },\\n            {\\n                \\"DBClusterIPArrayAttribute\\":\\"hidden\\",\\n                \\"DBClusterIPArrayName\\":\\"maxscale\\",\\n                \\"SecurityIPList\\":\\"11.xx.xx.xx,11.xx.xx.201\\"\\n            }\\n        ]\\n    },\\n    \\"RequestId\\":\\"8D0429EC-8E2C-4675-8102-28AC6FE92751\\"\\n}"},{"type":"xml","example":"<DescribeDBClusterAccessWhitelistResponse>\\n<RequestId>559E91A2-CDA3-4E9F-808B-29D738******</RequestId>\\n<Items>\\n    <DBClusterIPArray>\\n        <SecurityIps>127.0.0.1</SecurityIps>\\n        <DBClusterIPArrayName>default</DBClusterIPArrayName>\\n        <DBClusterIPArrayAttribute/>\\n    </DBClusterIPArray>\\n    <DBClusterIPArray>\\n        <SecurityIps>11.***.***.***</SecurityIps>\\n        <DBClusterIPArrayName>test</DBClusterIPArrayName>\\n        <DBClusterIPArrayAttribute>hidden</DBClusterIPArrayAttribute>\\n    </DBClusterIPArray>\\n</Items>\\n<DBClusterSecurityGroups>\\n    <DBClusterSecurityGroup>\\n        <SecurityGroupName>vpc-********************</SecurityGroupName>\\n        <SecurityGroupId>sg-******************</SecurityGroupId>\\n    </DBClusterSecurityGroup>\\n</DBClusterSecurityGroups>\\n</DescribeDBClusterAccessWhitelistResponse>","errorExample":"<DescribeDBClusterAccessWhiteListResponse>  \\n    <Items>\\n        <DBClusterIPArray>\\n            <DBClusterIPArrayAttribute></DBClusterIPArrayAttribute>\\n            <DBClusterIPArrayName>default</DBClusterIPArrayName>\\n            <SecurityIPList>127.0.0.1</SecurityIPList>\\n        </DBClusterIPArray>\\n        <DBClusterIPArray>\\n            <DBClusterIPArrayAttribute>hidden</DBClusterIPArrayAttribute>\\n            <DBClusterIPArrayName>maxscale</DBClusterIPArrayName>\\n            <SecurityIPList>11.xx.xx.xx,11.xx.xx.xx</SecurityIPList>\\n        </DBClusterIPArray>\\n    </Items>\\n    <RequestId>8D0429EC-8E2C-4675-8102-28AC6FE92751</RequestId>\\n</DescribeDBClusterAccessWhiteListResponse>"}]',
      'title' => '查看集群的IP白名单',
      'summary' => '查看允许访问数据库集群的IP白名单和安全组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterAccessWhitelist' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组中的IP地址或地址段。所有IP白名单分组累积支持1000个IP地址或地址段，多个IP间用英文逗号（,）隔开，支持如下两种格式： 

- IP地址形式，例如：10.23.12.24。
- CIDR形式，例如：10.23.12.24/24（无类域间路由，24表示地址中前缀的长度，长度范围为1~32）。

>当**WhiteListType**取值为**IP**时该参数才支持配置。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '10.23.12.24',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组的名称。分组名称长度需为2~120个字符；由小写字母和数字组成；以字母开头，以字母或数字结尾。

- 如果传入的白名单分组名称不存在，则会创建该白名单分组。
- 如果传入的白名单分组名称已存在，则会修改该白名单分组。
- 不传入则修改default分组。 

> - 1个集群最多支持50个IP白名单分组。
> - 当**WhiteListType**取值为**IP**时该参数才支持配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterIPArrayAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组属性。设置为**hidden**后控制台不可见。

> - 已在控制台显示的IP白名单分组不支持隐藏。
> - 当**WhiteListType**取值为**IP**时该参数才支持配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'hidden',
          ),
        ),
        4 => 
        array (
          'name' => 'WhiteListType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单类型。取值范围如下：

- **IP**：IP白名单分组。
- **SecurityGroup**：安全组。

默认值为**IP**。',
            'type' => 'string',
            'required' => false,
            'example' => 'IP',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全组ID，多个安全组间用英文逗号（,）隔开。

> - 1个集群最多支持3个安全组。
> - 当**WhiteListType**取值为**SecurityGroup**时该参数才支持配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-*********',
          ),
        ),
        6 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单的修改方式，取值范围如下：
- **Cover**：覆盖原IP白名单（默认值）。
- **Append**：追加IP。
- **Delete**：删除IP。

>当**WhiteListType**取值为**IP**时该参数才支持配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cover',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'NumberExceed.securityGroupIds',
            'errorMessage' => 'The number of SecurityGroupIds exceeds 10.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Duplicate',
            'errorMessage' => 'Specified security IP list is not valid: Duplicate IP address in the list',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Format',
            'errorMessage' => 'Specified security IP list format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'SecurityIPList.Duplicate',
            'errorMessage' => 'Specified same security IP already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.LockMode',
            'errorMessage' => 'The operation is not permitted when the instance is locked.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<ModifyDBClusterAccessWhitelistResponse>  \\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\n</ModifyDBClusterAccessWhitelistResponse>","errorExample":"<ModifyDBClusterAccessWhiteListResponse>  \\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ModifyDBClusterAccessWhiteListResponse>"}]',
      'title' => '创建或修改集群的白名单',
      'summary' => '创建或修改集群的白名单（包括IP白名单和安全组）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateGlobalSecurityIPGroup' => 
    array (
      'summary' => '创建全局IP白名单模板。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
          'name' => 'GlobalIgName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_123',
            'maxLength' => 120,
            'minLength' => 2,
          ),
        ),
        3 => 
        array (
          'name' => 'GIpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.1',
          ),
        ),
      ),
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.QuotaExceeded',
            'errorMessage' => 'Specified security IP list is not valid: Exceeding the allowed amount of IP address in the list.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Format',
            'errorMessage' => 'Specified security IP list format is not valid.',
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
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'Specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<CreateGlobalSecurityIPGroupResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroup>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </GlobalSecurityIPGroup>\\n</CreateGlobalSecurityIPGroupResponse>","errorExample":""}]',
      'title' => '创建全局白名单',
    ),
    'DeleteGlobalSecurityIPGroup' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GlobalIgName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_123',
          ),
        ),
        2 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
          ),
        ),
      ),
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '已关联IP白名单模板的集群列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联集群ID的集合。',
                        'type' => 'string',
                        'example' => '["pc-2zetn0f1b8zwb****","pc-****"]',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstances\\": [\\n        \\"[\\\\\\"pc-2zetn0f1b8zwb****\\\\\\",\\\\\\"pc-****\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DeleteGlobalSecurityIPGroupResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroup>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DBInstances>[\\"pc-2zetn0f1b8zwb****\\",\\"pc-****\\"]</DBInstances>\\n    </GlobalSecurityIPGroup>\\n</DeleteGlobalSecurityIPGroupResponse>","errorExample":""}]',
      'title' => '删除全局白名单',
      'summary' => '删除全局IP白名单模板。',
    ),
    'DescribeGlobalSecurityIPGroup' => 
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
      ),
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '已关联IP白名单模板的集群列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联集群ID的集合。',
                        'type' => 'string',
                        'example' => '["pc-2zetn0f1b8zwb****","pc-****"]',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'Specified action is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'Specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstances\\": [\\n        \\"[\\\\\\"pc-2zetn0f1b8zwb****\\\\\\",\\\\\\"pc-****\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGlobalSecurityIPGroupResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroup>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DBInstances>[\\"pc-2zetn0f1b8zwb****\\",\\"pc-****\\"]</DBInstances>\\n    </GlobalSecurityIPGroup>\\n</DescribeGlobalSecurityIPGroupResponse>","errorExample":""}]',
      'title' => '查询全局IP白名单模板列表',
      'summary' => '查询全局IP白名单模板列表。',
    ),
    'DescribeGlobalSecurityIPGroupRelation' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*****************',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroupRel' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroupRel\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GlobalIgName\\": \\"test_123\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGlobalSecurityIPGroupRelationResponse>\\n    <DBClusterId>pc-*****************</DBClusterId>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroupRel>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n    </GlobalSecurityIPGroupRel>\\n</DescribeGlobalSecurityIPGroupRelationResponse>","errorExample":""}]',
      'title' => '查询关联关系',
      'summary' => '查询集群与全局IP白名单模板的关联关系。',
    ),
    'ModifyGlobalSecurityIPGroup' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
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
          'name' => 'GlobalIgName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_123',
            'maxLength' => 120,
            'minLength' => 2,
          ),
        ),
        3 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        4 => 
        array (
          'name' => 'GIpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.1',
          ),
        ),
      ),
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '已关联IP白名单模板的集群列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联集群ID的集合。',
                        'type' => 'string',
                        'example' => '["pc-2zetn0f1b8zwb****","pc-****"]',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.QuotaExceeded',
            'errorMessage' => 'Specified security IP list is not valid: Exceeding the allowed amount of IP address in the list.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Format',
            'errorMessage' => 'Specified security IP list format is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Duplicate',
            'errorMessage' => 'Specified security IP list is not valid: Duplicate IP address in the list',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstances\\": [\\n        \\"[\\\\\\"pc-2zetn0f1b8zwb****\\\\\\",\\\\\\"pc-****\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyGlobalSecurityIPGroupResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroup>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DBInstances>[\\"pc-2zetn0f1b8zwb****\\",\\"pc-****\\"]</DBInstances>\\n    </GlobalSecurityIPGroup>\\n</ModifyGlobalSecurityIPGroupResponse>","errorExample":""}]',
      'title' => '修改全局白名单',
      'summary' => '修改IP白名单模板。',
    ),
    'ModifyGlobalSecurityIPGroupName' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
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
          'name' => 'GlobalIgName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_123',
            'maxLength' => 120,
            'minLength' => 2,
          ),
        ),
        2 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyGlobalSecurityIPGroupNameResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroup>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </GlobalSecurityIPGroup>\\n</ModifyGlobalSecurityIPGroupNameResponse>","errorExample":""}]',
      'title' => '修改全局白名单名称',
      'summary' => '修改全局IP白名单模板名称。',
    ),
    'ModifyGlobalSecurityIPGroupRelation' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*****************',
          ),
        ),
        2 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroupRel' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-zsldxfiwjmti0kcm****',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'test_123',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'The specified parameters are invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroupRel\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GIpList\\": \\"192.168.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GlobalIgName\\": \\"test_123\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ModifyGlobalSecurityIPGroupRelationResponse>\\n    <DBClusterId>pc-*****************</DBClusterId>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <GlobalSecurityIPGroupRel>\\n        <GlobalSecurityGroupId>g-zsldxfiwjmti0kcm****</GlobalSecurityGroupId>\\n        <GIpList>192.168.0.1</GIpList>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <GlobalIgName>test_123</GlobalIgName>\\n    </GlobalSecurityIPGroupRel>\\n</ModifyGlobalSecurityIPGroupRelationResponse>","errorExample":""}]',
      'title' => '修改全局白名单关联关系',
      'summary' => '修改集群与全局IP白名单模板的关联关系。',
    ),
    'DescribeDBClusterSSL' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
>您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
      ),
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
                'example' => 'C890995A-CF06-4F4D-8DB8-DD26C2******',
              ),
              'SSLAutoRotate' => 
              array (
                'description' => '是否开启SSL证书自动轮转。取值：

- **Enable**：开启

- **Disable**：关闭

> 该参数仅PolarDB MySQL版支持。',
                'type' => 'string',
                'example' => 'Enable',
              ),
              'Items' => 
              array (
                'description' => 'SSL链路信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SSLExpireTime' => 
                    array (
                      'description' => 'SSL证书有效期。格式：`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-11-13T07:14:22Z',
                    ),
                    'SSLEnabled' => 
                    array (
                      'description' => '是否开启SSL加密。取值：

- **Enabled**：开启。
- **Disabled**：关闭。',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                    'SSLConnectionString' => 
                    array (
                      'description' => 'SSL链路地址。',
                      'type' => 'string',
                      'example' => 'pc-************.mysql.polardb.rds.aliyuncs.com',
                    ),
                    'DBEndpointId' => 
                    array (
                      'description' => '集群地址ID。',
                      'type' => 'string',
                      'example' => 'pe-************',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C890995A-CF06-4F4D-8DB8-DD26C2******\\",\\n  \\"SSLAutoRotate\\": \\"Enable\\",\\n  \\"Items\\": [\\n    {\\n      \\"SSLExpireTime\\": \\"2021-11-13T07:14:22Z\\",\\n      \\"SSLEnabled\\": \\"Enabled\\",\\n      \\"SSLConnectionString\\": \\"pc-************.mysql.polardb.rds.aliyuncs.com\\",\\n      \\"DBEndpointId\\": \\"pe-************\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterSSLResponse>\\n    <RequestId>C890995A-CF06-4F4D-8DB8-DD26C2******</RequestId>\\n    <SSLAutoRotate>Enable</SSLAutoRotate>\\n    <Items>\\n        <SSLExpireTime>2021-11-13T07:14:22Z</SSLExpireTime>\\n        <SSLEnabled>Enabled</SSLEnabled>\\n        <SSLConnectionString>pc-************.mysql.polardb.rds.aliyuncs.com</SSLConnectionString>\\n        <DBEndpointId>pe-************</DBEndpointId>\\n    </Items>\\n</DescribeDBClusterSSLResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群SSL设置',
      'summary' => '查询PolarDB集群SSL设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterSSL' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
        1 => 
        array (
          'name' => 'SSLEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改SSL状态，取值：
* **Disable**：关闭SSL加密。
* **Enable**：开启SSL加密。
* **Update**：更新CA证书。

> 开启SSL加密或更新CA证书后，需要下载和配置证书，详情请参见[设置SSL加密](~~153182~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Enable',
          ),
        ),
        2 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址ID。

>* 若目标集群为PolarDB MySQL版，该参数必填。
>* 若目标集群为PolarDB PostgreSQL版或PolarDB PostgreSQL版（兼容Oracle），无需传入该参数，默认所有地址开启SSL加密。
>* 可以通过[DescribeDBClusterSSL](~~153414~~)接口查看连接地址详情。',
            'type' => 'string',
            'required' => false,
            'example' => 'pe-******************',
          ),
        ),
        3 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址的网络类型，需要与**DBEndpointId**参数传入的连接地址的网络类型保持一致，取值：
* **Public**：公网
* **Private**：私网
* **Inner**：私网（经典网络）

>* 若目标集群为PolarDB MySQL版，该参数必填。
>* 若目标集群为PolarDB PostgreSQL版或PolarDB PostgreSQL版（兼容Oracle），无需传入该参数，默认所有地址开启SSL加密。',
            'type' => 'string',
            'required' => false,
            'example' => 'Public',
          ),
        ),
        4 => 
        array (
          'name' => 'SSLAutoRotate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启SSL证书自动轮转，取值：

- **Enable**：开启

- **Disable**：关闭',
            'type' => 'string',
            'required' => false,
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
                'example' => 'A94B1755-6D8B-4E27-BF3C-8562BC******',
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
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBEndpointId.Malformed',
            'errorMessage' => 'The specified parameter DBEndpointId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidSSLAutoRotate.Malformed',
            'errorMessage' => 'The specified SSLAutoRotate is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidNetType.Malformed',
            'errorMessage' => 'The specified parameter NetType is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidConnectionString.Malformed',
            'errorMessage' => 'The specified parameter ConnectionString is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A94B1755-6D8B-4E27-BF3C-8562BC******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterSSLResponse>\\r\\n<RequestId>A94B1755-6D8B-4E27-BF3C-8562BC******</RequestId>\\r\\n</ModifyDBClusterSSLResponse>","errorExample":""}]',
      'title' => '设置集群SSL',
      'summary' => '开通、关闭PolarDB集群的SSL加密功能，或更新PolarDB集群的CA证书。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckKMSAuthorized' => 
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

> 您可以调用[DescribeRegions](~~98041~~)接口查看目标账号下的可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。

> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
        2 => 
        array (
          'name' => 'TDERegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TDE密钥所在地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AuthorizationState' => 
              array (
                'description' => '授权状态。取值范围如下：

- **0**：未授权。

- **1**：已授权。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A7E6A8FD-C50B-46B2-BA85-D8B8D3******',
              ),
              'RoleArn' => 
              array (
                'description' => '角色的全局资源描述符，用来指定具体角色。详情请参见[RAM角色概览](~~93689~~)。',
                'type' => 'string',
                'example' => 'acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-************',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedKmsService.NotEnabled',
            'errorMessage' => 'KMS service is not enabled.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorizationState\\": 0,\\n  \\"RequestId\\": \\"A7E6A8FD-C50B-46B2-BA85-D8B8D3******\\",\\n  \\"RoleArn\\": \\"acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole\\",\\n  \\"DBClusterId\\": \\"pc-************\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckKMSAuthorizedResponse>\\n    <AuthorizationState>0</AuthorizationState>\\n    <RequestId>A7E6A8FD-C50B-46B2-BA85-D8B8D3******</RequestId>\\n    <RoleArn>acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole</RoleArn>\\n    <DBClusterId>pc-************</DBClusterId>\\n</CheckKMSAuthorizedResponse>","errorExample":""}]',
      'title' => '检查kms密钥是否已存在',
      'summary' => '查看用户KMS开通状态。',
    ),
    'DescribeDBClusterTDE' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TDEStatus' => 
              array (
                'description' => '是否开通TDE加密，取值：
* **Enabled**：开通
* **Disabled**：关闭',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E37D1508-EC3B-4E06-A24A-C7AC31******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-***************',
              ),
              'EncryptionKey' => 
              array (
                'description' => '自定义密钥ID。',
                'type' => 'string',
                'example' => '2a4f4ac2-****-****-****-************',
              ),
              'EncryptNewTables' => 
              array (
                'description' => '是否开启自动加密所有新建的表。取值：

- **ON**：开启

- **OFF**：关闭',
                'type' => 'string',
                'example' => 'ON',
              ),
              'TDERegion' => 
              array (
                'description' => 'TDE密钥所在的地域。',
                'type' => 'string',
                'example' => 'cn-beijing',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TDEStatus\\": \\"Enabled\\",\\n  \\"RequestId\\": \\"E37D1508-EC3B-4E06-A24A-C7AC31******\\",\\n  \\"DBClusterId\\": \\"pc-***************\\",\\n  \\"EncryptionKey\\": \\"2a4f4ac2-****-****-****-************\\",\\n  \\"EncryptNewTables\\": \\"ON\\",\\n  \\"TDERegion\\": \\"cn-beijing\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterTDEResponse>\\n    <TDEStatus>Enabled</TDEStatus>\\n    <RequestId>E37D1508-EC3B-4E06-A24A-C7AC31******</RequestId>\\n    <DBClusterId>pc-***************</DBClusterId>\\n    <EncryptionKey>2a4f4ac2-****-****-****-************</EncryptionKey>\\n    <EncryptNewTables>ON</EncryptNewTables>\\n    <TDERegion>cn-beijing</TDERegion>\\n</DescribeDBClusterTDEResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群的TDE设置详情',
      'summary' => '查询PolarDB MySQL引擎集群的TDE设置详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~98041~~)接口查看目标账号下的可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TDERegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TDE密钥所在地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
      ),
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
                'example' => 'A7E6A8FD-C50B-46B2-BA85-D8B8D3******',
              ),
              'KeyList' => 
              array (
                'description' => '集群密钥列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '密钥列表。',
                  'type' => 'string',
                  'example' => '0275bd3f-fdbb-4d8c-846b-71b211******',
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-************',
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
            'errorCode' => 'ByokRoleArnNotFound',
            'errorMessage' => 'The roleArn can\'t be null.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ByokNotAuthorizedToRds',
            'errorMessage' => 'This user is not Authorized Rds.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedKmsService.NotEnabled',
            'errorMessage' => 'KMS service is not enabled.',
          ),
        ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A7E6A8FD-C50B-46B2-BA85-D8B8D3******\\",\\n  \\"KeyList\\": [\\n    \\"0275bd3f-fdbb-4d8c-846b-71b211******\\"\\n  ],\\n  \\"DBClusterId\\": \\"pc-************\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserEncryptionKeyListResponse>\\n    <RequestId>A7E6A8FD-C50B-46B2-BA85-D8B8D3******</RequestId>\\n    <DBClusterId>pc-************</DBClusterId>\\n</DescribeUserEncryptionKeyListResponse>","errorExample":""}]',
      'title' => '查询实例自定义密钥列表',
      'summary' => '查看KMS密钥列表。',
    ),
    'ModifyDBClusterTDE' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
        1 => 
        array (
          'name' => 'TDEStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改TDE状态。取值固定为**Enable**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Enable',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色的全局资源描述符，用来指定具体角色。详情请参见[RAM角色概览](~~93689~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole',
          ),
        ),
        3 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '749c1df7-****-****-****-*********',
          ),
        ),
        4 => 
        array (
          'name' => 'EncryptNewTables',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动加密所有新建的表。取值：

- **ON**：开启

- **OFF**：关闭',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
          ),
        ),
      ),
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
                'example' => '5F859238-2A36-4A8D-BD0F-732112******',
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
            'errorCode' => 'InvalidTDEStatus.AlreadyEnabled',
            'errorMessage' => 'TDE has already enabled in the this cluster.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTDEEnabledType.Malformed',
            'errorMessage' => 'The specified parameter TDEStatus is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAutoTableTransparentEncryption.Malformed',
            'errorMessage' => 'The specified AutoTableTransparentEncryption is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedKmsService.NotEnabled',
            'errorMessage' => 'KMS service is not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DBNodeType',
            'errorMessage' => 'The operation is not permitted due to type of node.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectGdnState',
            'errorMessage' => 'db instance %s status is not available:%s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F859238-2A36-4A8D-BD0F-732112******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterTDEResponse>\\r\\n<requestId>5F859238-2A36-4A8D-BD0F-732112******</requestId>\\r\\n</ModifyDBClusterTDEResponse>","errorExample":""}]',
      'title' => '开启MySQL TDE功能',
      'summary' => '开启PolarDB MySQL TDE功能或修改加密方式。',
      'description' => '>*  该操作需要先开通KMS。具体操作请参见[购买专属KMS实例](~~153781~~)。
>* TDE加密开启后无法关闭。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDBNodes' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointBindList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新增节点需要加入的集群连接地址的地址ID。若需要同时加入多个连接地址，多个连接地址ID间用英文逗号（,）分隔。
> * 您可以通过调用[DescribeDBClusterEndpoints](~~98205~~)接口查看集群连接地址的详情，包括连接地址ID。
>* 支持填入默认集群连接地址和自定义集群连接地址的地址ID。
>* 若该参数留空，默认将新增节点加入所有开启了**新节点自动加入**功能（即`AutoAddNewNodes`取值为`Enable`）的集群连接地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'pe-****************,pe-****************',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）新增节点任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
>* 若该参数留空，默认立即执行新增节点任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
>* 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'DBNode',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '新增节点的信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'TargetClass' => 
                array (
                  'description' => '新增节点的规格，需要与原有节点保持一致，详情请参见如下文档：
* PolarDB MySQL版：[计算节点规格](~~102542~~)。 
* PolarDB PostgreSQL版（兼容Oracle）：[计算节点规格](~~207921~~)。
* PolarDB PostgreSQL版：[计算节点规格](~~209380~~)。
>* DBNode.N.ZoneId和DBNode.N.TargetClass，至少填一个。 N为从1开始的整数，最大值=16-当前节点数。
>* 当前仅PolarDB MySQL版集群支持一次增加多个只读节点，最多可增加至15个只读节点。
>* 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'polar.mysql.x4.medium',
                ),
                'ZoneId' => 
                array (
                  'description' => '新增节点的可用区，需要与原有节点保持一致。您可以通过[DescribeRegions](~~98041~~)接口查询可用区ID。

>* DBNode.N.ZoneId和DBNode.N.TargetClass，至少填一个。N为从1开始的整数，最大值=16-当前节点数。 
>* 当前仅PolarDB MySQL版集群支持一次增加多个只读节点，最多可增加至15个只读节点。
>* 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-qingdao-c',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 15,
          ),
        ),
        7 => 
        array (
          'name' => 'DBNodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。取值范围：
- RO
- STANDBY
- DLNode',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DLNode' => 'ai节点',
              'STANDBY' => 'standby节点',
              'RO' => '只读节点',
            ),
            'example' => 'RO',
          ),
        ),
        8 => 
        array (
          'name' => 'ImciSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启列存索引。取值范围：

- **ON**：开启

- **OFF**：关闭（默认值）

> PolarDB PostgreSQL版（兼容Oracle）和PolarDB PostgreSQL版不支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ON',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBNodeIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBNodeId' => 
                  array (
                    'description' => '创建的DBNodeId列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建的DBNodeId列表。',
                      'type' => 'string',
                      'example' => 'pi-***************',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E053E730-5755-4AA9-AA9D-A47867******',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-***************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2148126708*****',
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
            'errorCode' => 'ORDER.ARREARAGE',
            'errorMessage' => '您有欠费账单，不符合购买条件，请先结清账单后再购买',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBNodeNum.Malformed',
            'errorMessage' => 'The number of parameter DBNode.N is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNode.Malformed',
            'errorMessage' => 'The specified parameter DBNode.N is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied.CreateDBNodesWithStrictConsistencyOn',
            'errorMessage' => '3AZ cluster does not allow create db nodes.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidZoneId.Malformed',
            'errorMessage' => 'The specified parameter ZoneId is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ClusterCategory',
            'errorMessage' => 'The operation is not permitted due to cluster category.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DbVersion',
            'errorMessage' => 'The operation is not permitted due to DbVersion.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBNodeIds\\": {\\n    \\"DBNodeId\\": [\\n      \\"pi-***************\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"E053E730-5755-4AA9-AA9D-A47867******\\",\\n  \\"DBClusterId\\": \\"pc-***************\\",\\n  \\"OrderId\\": \\"2148126708*****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBNodesResponse>\\n    <DBNodeIds>pi-***************</DBNodeIds>\\n    <RequestId>E053E730-5755-4AA9-AA9D-A47867******</RequestId>\\n    <DBClusterId>pc-***************</DBClusterId>\\n    <OrderId>2148126708*****</OrderId>\\n</CreateDBNodesResponse>","errorExample":""}]',
      'title' => '增加PolarDB集群的只读节点',
      'summary' => '增加PolarDB集群的只读节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBNodes' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a42***********',
          ),
        ),
        2 => 
        array (
          'name' => 'DBNodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。取值范围：
- RO
- STANDBY
- DLNode',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DLNode' => 'ai节点',
              'STANDBY' => 'standby节点',
              'RO' => '只读节点',
            ),
            'example' => 'RO',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNodeId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群节点ID。
>您可以通过[DescribeDBClusters](~~185342~~)接口查看账号下所有集群的详细信息，包括节点ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '集群节点ID。N为从1开始的正整数，最大值=当前节点数-2，即必须保留一个主节点和一个只读节点。

> 目前仅PolarDB MySQL版集群支持一次删除多个只读节点。',
              'type' => 'string',
              'required' => false,
              'example' => 'pi-****************',
            ),
            'required' => true,
            'example' => 'pi-************',
            'maxItems' => 15,
          ),
        ),
      ),
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
                'example' => '6566B2E6-3157-4B57-A693-AFB751******',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-**************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035638*******',
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
            'errorCode' => 'InvalidDBNodeNum.Malformed',
            'errorMessage' => 'The number of parameter DBNode.N is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DeleteDBNodesWithStrictConsistencyOn',
            'errorMessage' => '3AZ cluster does not allow delete db nodes.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNode.Malformed',
            'errorMessage' => 'The specified parameter DBNode.N is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBNodeRole',
            'errorMessage' => 'The operation is not permitted due to the role of node.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6566B2E6-3157-4B57-A693-AFB751******\\",\\n  \\"DBClusterId\\": \\"pc-**************\\",\\n  \\"OrderId\\": \\"2035638*******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBNodesResponse>\\n    <RequestId>6566B2E6-3157-4B57-A693-AFB751******</RequestId>\\n    <DBClusterId>pc-**************</DBClusterId>\\n    <OrderId>2035638*******</OrderId>\\n</DeleteDBNodesResponse>","errorExample":""}]',
      'title' => '删除PolarDB集群的只读节点',
      'summary' => '删除PolarDB集群的只读节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBNodeClass' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'ModifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更类型，取值范围如下： 
* **Upgrade**：升级规格
* **Downgrade**：降级规格',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Upgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'DBNodeTargetClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所有节点的目标规格，请参见[计算节点规格](~~102542~~)。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'polar.mysql.x4.large',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）升降级配置任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 当`ModifyType`取值为`Upgrade`或`Downgrade`时，该参数生效。
>* 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
>* 若该参数留空，默认立即执行升级配置任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'SubCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群子系列。取值范围如下：

- **normal_exclusive**：独享规格

- **normal_general**：通用规格

若独享共享之间规格相互变配，subcategory 这个字段为必填项',
            'type' => 'string',
            'required' => false,
            'example' => 'normal_general',
          ),
        ),
        7 => 
        array (
          'name' => 'DBNodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。固定取值为DLNode。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DLNode' => 'ai节点',
            ),
            'example' => 'DLNode',
          ),
        ),
      ),
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
                'example' => '685F028C-4FCD-407D-A559-072D63******',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-*************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035629******',
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
            'errorCode' => 'ORDER.ARREARAGE',
            'errorMessage' => '您有欠费账单，不符合购买条件，请先结清账单后再购买',
          ),
          1 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'The resource is insufficient.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidModifyType.Malformed',
            'errorMessage' => 'The specified parameter ModifyType is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.RoEqualSpec',
            'errorMessage' => 'must exist at least ro class equal with rw',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterStatus',
            'errorMessage' => 'The operation is not permitted due to status of cluster.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"685F028C-4FCD-407D-A559-072D63******\\",\\n  \\"DBClusterId\\": \\"pc-*************\\",\\n  \\"OrderId\\": \\"2035629******\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"685F028C-4FCD-407D-A559-072D6378C4C3\\",\\n\\t\\"OrderId\\": 2035629xxxxxx,\\n\\t\\"DBClusterId\\": \\"pc-xxxxxxxxxxxxx\\"\\n}"},{"type":"xml","example":"<ModifyDBNodeClassResponse>\\n<RequestId>685F028C-4FCD-407D-A559-072D6378C4C3</RequestId>\\n<OrderId>2035629******</OrderId>\\n<DBClusterId>pc-**************</DBClusterId>\\n</ModifyDBNodeClassResponse>","errorExample":"<ModifyDBNodeClassResponse>  \\n\\t<RequestId>685F028C-4FCD-407D-A559-072D6378C4C3</RequestId>\\n\\t<OrderId>2035629xxxxxx</OrderId>\\n\\t<DBClusterId>pc-xxxxxxxxxxxxx</DBClusterId>\\n</ModifyDBNodeClassResponse>"}]',
      'title' => '变更PolarDB集群节点规格',
      'summary' => '变更PolarDB集群节点规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBNodesClass' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'ModifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更类型，取值范围如下：

- **Upgrade**：升级规格

- **Downgrade**：降级规格',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Upgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'DBNode',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群节点列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DBNodeId' => 
                array (
                  'description' => '集群节点ID。
>如果该参数传入后，DBNode.N.TargetClass必填。N为从1开始的整数，最大值=16-当前节点数。 
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'pi-*************',
                ),
                'TargetClass' => 
                array (
                  'description' => '变配节点的规格。关于节点规格，请参见[计算节点规格](~~102542~~)。 

>如果该参数传入后，DBNode.N.DBNodeId必填。N为从1开始的整数，最大值=16-当前节点数。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'polar.mysql.x4.medium',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 15,
            'minItems' => 0,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行定时（即在目标时间段内执行）升级配置任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 仅当`ModifyType`取值为`Upgrade`时，该参数生效。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
> * 若该参数留空，默认立即执行升级配置任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'SubCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群子系列。取值范围如下：

- **normal_exclusive**：独享规格

- **normal_general**：通用规格',
            'type' => 'string',
            'required' => false,
            'example' => 'normal_general',
          ),
        ),
      ),
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
                'example' => '685F028C-4FCD-407D-A559-072D63******',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-*************',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035629******',
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
            'errorCode' => 'InvalidModifyType.Malformed',
            'errorMessage' => 'The specified parameter ModifyType is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"685F028C-4FCD-407D-A559-072D63******\\",\\n  \\"DBClusterId\\": \\"pc-*************\\",\\n  \\"OrderId\\": \\"2035629******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBNodesClassResponse>\\n    <RequestId>685F028C-4FCD-407D-A559-072D63******</RequestId>\\n    <DBClusterId>pc-*************</DBClusterId>\\n    <OrderId>2035629******</OrderId>\\n</ModifyDBNodesClassResponse>","errorExample":""}]',
      'title' => '变更PolarDB集群单个节点的规格',
      'summary' => '变更PolarDB集群单个节点的规格。',
    ),
    'ModifyDBNodeHotReplicaMode' => 
    array (
      'summary' => '开启或关闭集群热备节点。',
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
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库集群节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pi-*****************',
          ),
        ),
        2 => 
        array (
          'name' => 'HotReplicaMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启热备。取值范围：

- **ON**：开启

- **OFF**：关闭',
            'type' => 'string',
            'required' => true,
            'example' => 'ON',
          ),
        ),
      ),
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
                'example' => '9F4DDFBF-205C-5A3E-8DC2-C6**********',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'OrderId' => 
              array (
                'description' => '生成的订单ID。',
                'type' => 'string',
                'example' => '2148126708*****',
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
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'rw class code must be equal with hot replica',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeId.NotFound',
            'errorMessage' => 'The DBNodeId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9F4DDFBF-205C-5A3E-8DC2-C6**********\\",\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"OrderId\\": \\"2148126708*****\\"\\n}","type":"json"}]',
      'title' => '开启或关闭集群热备节点',
    ),
    'RestartDBNode' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群节点ID。
>您可以通过[DescribeDBClusters](~~185342~~)接口查看账号下所有集群的详细信息，包括节点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pi-*************',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<RestartDBNodeResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</RestartDBNodeResponse>","errorExample":"<RestartDBNodeResponse>  \\n\\t<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</RestartDBNodeResponse>"}]',
      'title' => '重启PolarDB集群节点',
      'summary' => '重启PolarDB集群节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TempModifyDBNode' => 
    array (
      'summary' => '为集群临时升配或增加节点。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '该参数用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间该参数值的唯一性。该参数区分大小写、长度不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f5********************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例Id',
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-xxxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型（Add:增加节点; Modify:变配）',
            'description' => '操作类型。取值：

- **Modify**：临时升配',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Modify',
          ),
        ),
        3 => 
        array (
          'name' => 'ModifyType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '变更类型',
            'description' => '变更类型。当前取值固定为**TempUpgrade**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TempUpgrade',
          ),
        ),
        4 => 
        array (
          'name' => 'DBNode',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '新增节点的信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'TargetClass' => 
                array (
                  'description' => '新增节点的规格。需要与原有节点保持一致。

> 原有节点规格请参见[DescribeDBClusters](~~98094~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'polar.mysql.x4.medium',
                ),
                'ZoneId' => 
                array (
                  'description' => '新增节点的可用区。需要与原有节点保持一致。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-hangzhou-i',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'docRequired' => true,
            'maxItems' => 15,
          ),
        ),
        5 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '变更还原时间(说明：还原时间不能早于当前时间推后1小时，不能晚于集群到期时间的前1天)',
            'description' => '临时升配还原时间。格式为YYYY-MM-DD hh:mm:ss。

> 还原时间不能早于当前时间往后推1小时，不能晚于集群到期时间的前1天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-23 18:16:00',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBNodeIds' => 
              array (
                'description' => '节点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '节点列表。

> 当**OperationType**取值为**Add**时，该参数返回值不为空；当**OperationType**取值为**Modify**时，该参数返回值为空。',
                  'type' => 'string',
                  'example' => 'pi-***************',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69A85BAF-1089-4CDF-A82F-0A140F******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-xxxxxxxxxxxxxxxxx',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2035638*******',
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
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBNodeNum.Malformed',
            'errorMessage' => 'The number of parameter DBNode.N is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNode.Malformed',
            'errorMessage' => 'The specified parameter DBNode.N is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidModifyType.Malformed',
            'errorMessage' => 'The specified parameter ModifyType is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidZoneId.Malformed',
            'errorMessage' => 'The specified parameter ZoneId is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDBNodeClass.Malformed',
            'errorMessage' => 'The specified parameter DBNodeClass is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The specified DBClusterId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRestoreTimeExceedsExpirationTime.Malformed',
            'errorMessage' => 'The RestoreTime cannot be later than 1 day before the cluster ExpirationTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidCurrentTimeExceedsRestoreTime.Malformed',
            'errorMessage' => 'The RestoreTime cannot be 1 hour later than the CurrentTime.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Malformed',
            'errorMessage' => 'The specified RestoreTime is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidOperationType.Malformed',
            'errorMessage' => 'The specified OperationType is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBNodeIds\\": [\\n    \\"pi-***************\\"\\n  ],\\n  \\"RequestId\\": \\"69A85BAF-1089-4CDF-A82F-0A140F******\\",\\n  \\"DBClusterId\\": \\"pc-xxxxxxxxxxxxxxxxx\\",\\n  \\"OrderId\\": \\"2035638*******\\"\\n}","errorExample":""},{"type":"xml","example":"<TempModifyDBNodeResponse>\\n    <DBNodeIds>pi-***************</DBNodeIds>\\n    <RequestId>69A85BAF-1089-4CDF-A82F-0A140F******</RequestId>\\n    <DBClusterId>pc-xxxxxxxxxxxxxxxxx</DBClusterId>\\n    <OrderId>2035638*******</OrderId>\\n</TempModifyDBNodeResponse>","errorExample":""}]',
      'title' => '为集群临时升配或增加节点',
    ),
    'CreateParameterGroup' => 
    array (
      'summary' => '创建PolarDB参数模板。',
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
            'description' => '参数模板所在地域的地域ID。

> 您可以通过接口[DescribeRegions](~~98041~~)查看地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，当前仅支持**MySQL**。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL',
          ),
        ),
        2 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎版本号，取值范围如下：

- **5.6**

- **5.7**

- **8.0**',
            'type' => 'string',
            'required' => true,
            'example' => '8.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ParameterGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板的名称，需满足如下要求：

- 由英文、数字、和下划线（_）组成，以字母开头，不能包含中文，不能以下划线（_）结尾。

- 长度为8~64个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_group',
          ),
        ),
        4 => 
        array (
          'name' => 'ParameterGroupDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板的描述，长度为0~199个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_group',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数及其值的JSON串，参数的值都是字符串类型，例如`{"wait_timeout":"86400","innodb_old_blocks_time":"1000"}`。

> 您可以通过接口[DescribeParameterTemplates](~~207428~~)查看目标数据库引擎版本数据库集群的所有参数详情，包括参数名称、取值范围等。',
            'type' => 'string',
            'required' => true,
            'example' => '{"wait_timeout":"86400","innodb_old_blocks_time":"1000"}',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
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
                'example' => '514D1D87-E243-4A5F-A87D-2785C3******',
              ),
              'ParameterGroupId' => 
              array (
                'description' => '参数模板ID。

> 您可以通过[DescribeParameterGroups](~~207178~~)接口查看目标地域的参数模板列表，包括参数模板ID。',
                'type' => 'string',
                'example' => 'pcpg-**************',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'he specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBVersion.Malformed',
            'errorMessage' => 'The Specified DBVersion is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameterGroupName.Malformed',
            'errorMessage' => 'The Specified parameter ParameterGroupName is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'NumberExceed.parameterGroupDesc',
            'errorMessage' => 'The ParameterGroupDesc parameter`s number is exceed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidEngine.Unsupported',
            'errorMessage' => 'The specified Engine does not support this feature.',
          ),
          5 => 
          array (
            'errorCode' => 'ParamGroupsNameInvalid',
            'errorMessage' => 'The Specified parameter ParameterGroupName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBType.NotFound',
            'errorMessage' => 'The Specified DBType does not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'Specified user does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"514D1D87-E243-4A5F-A87D-2785C3******\\",\\n  \\"ParameterGroupId\\": \\"pcpg-**************\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateParameterGroupResponse>\\n    <RequestId>514D1D87-E243-4A5F-A87D-2785C3******</RequestId>\\n    <ParameterGroupId>pcpg-**************</ParameterGroupId>\\n</CreateParameterGroupResponse>","errorExample":""}]',
      'title' => '创建参数模板',
      'description' => '参数模板可以批量管理集群的参数，您可以使用参数模板功能，快速应用模板到PolarDB集群上。详情请参见[使用参数模板](~~207009~~)。

> 当前仅支持PolarDB MySQL版集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterParameters' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DescribeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内核参数，取值范围如下：

- **Normal**：内核参数列表。
- **MigrationFromRDS**：RDS参数比对。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RunningParameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Parameter' => 
                  array (
                    'description' => 'PolarDB集群中当前运行的参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '目标参数的取值范围。',
                          'type' => 'string',
                          'example' => '[utf8|latin1|gbk|utf8mb4]',
                        ),
                        'DataType' => 
                        array (
                          'description' => '参数值类型。取值范围如下：

- **INT**：整数类型。

- **STRING**：字符串类型。

- **B**：字节类型。',
                          'type' => 'string',
                          'example' => 'INT',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => 'character_set_server',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => 'utf8',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '是否需要重启生效。取值范围如下：

- **false**：否。 
- **true**：是。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => 'The server\'s default character set.',
                        ),
                        'ParameterStatus' => 
                        array (
                          'description' => '参数状态。取值范围如下：

- **Normal**：正常。 
- **Modifying**：修改中。',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'DefaultParameterValue' => 
                        array (
                          'description' => '参数默认值。',
                          'type' => 'string',
                          'example' => 'utf8',
                        ),
                        'IsModifiable' => 
                        array (
                          'description' => '是否可修改。取值范围如下：

- **false**：不可修改。
- **true**：可修改。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'IsNodeAvailable' => 
                        array (
                          'description' => '是否是全局参数。取值范围如下：

- **0**：是全局参数。修改后的参数值会默认同步到其它节点；

- **1**：不是全局参数。修改后的参数值可自定义需要同步的节点。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ParamRelyRule' => 
                        array (
                          'description' => '参数依赖。',
                          'type' => 'string',
                          'example' => 'utf8',
                        ),
                        'Factor' => 
                        array (
                          'description' => '整除因子。对于整数和字节类型的参数，参数值除了必须满足参数的可选范围，还须是Factor（不等于0）的倍数。',
                          'type' => 'string',
                          'example' => '20',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBVersion' => 
              array (
                'description' => '数据库引擎版本号。
MySQL版本号取值范围如下：
* **5.6**
* **5.7**
* **8.0**

PostgreSQL版本号取值范围如下：
* **11**
* **14**

Oracle版本号取值范围如下：
* **11**
* **14**',
                'type' => 'string',
                'example' => '5.6',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EBEAA83D-1734-42E3-85E3-E25F6E******',
              ),
              'DBType' => 
              array (
                'description' => '数据库类型，取值范围如下：

- **MySQL**。
- **PostgreSQL**。
- **Oracle**。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'Engine' => 
              array (
                'description' => '引擎。',
                'type' => 'string',
                'example' => 'POLARDB',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******	
',
              ),
              'ParameterNumbers' => 
              array (
                'description' => '参数个数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Parameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Parameters' => 
                  array (
                    'description' => 'RDS实例迁移PolarDB集群中当前运行的参数比对列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'rdsParameterName' => 
                        array (
                          'description' => '源实例参数名称。',
                          'type' => 'string',
                          'example' => 'character_set_server',
                        ),
                        'rdsParameterValue' => 
                        array (
                          'description' => '源实例参数值。',
                          'type' => 'string',
                          'example' => 'utf8',
                        ),
                        'rdsParameterOptional' => 
                        array (
                          'description' => '源实例参数取值范围。',
                          'type' => 'string',
                          'example' => '- utf8
- gbk',
                        ),
                        'distParameterName' => 
                        array (
                          'description' => '集群参数名称。',
                          'type' => 'string',
                          'example' => 'character_set_server',
                        ),
                        'distParameterValue' => 
                        array (
                          'description' => '集群参数值。',
                          'type' => 'string',
                          'example' => 'utf8',
                        ),
                        'distParameterOptional' => 
                        array (
                          'description' => '集群参数取值范围。',
                          'type' => 'string',
                          'example' => '- utf8
- gbk',
                        ),
                        'IsEqual' => 
                        array (
                          'description' => '参数取值是否相同',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'distParameterDescription' => 
                        array (
                          'description' => '集群参数说明。',
                          'type' => 'string',
                          'example' => 'The server\'s default character set.',
                        ),
                        'rdsParameterDescription' => 
                        array (
                          'description' => '源实例参数说明。',
                          'type' => 'string',
                          'example' => 'The server\'s default character set.',
                        ),
                        'IsRdsKey' => 
                        array (
                          'description' => '是否是主要的源实例参数。取值范围如下：

- **1**：是主要的源实例参数。
- **0**：不是主要的源实例参数。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'IsPolarDBKey' => 
                        array (
                          'description' => '是否是主要的目标实例参数。
- **1**：是主要的目标实例参数。
- **0**：不是主要的目标实例参数。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'IsInstancePolarDBKey' => 
                        array (
                          'description' => '是否是主要的目标实例参数。
- **1**：是主要的目标实例参数。
- **0**：不是主要的目标实例参数。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'IsInstanceRdsKey' => 
                        array (
                          'description' => '是否是主要的源实例参数。
- **1**：是主要的源实例参数。
- **0**：不是主要的源实例参数。',
                          'type' => 'string',
                          'example' => '0',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RunningParameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"CheckingCode\\": \\"[utf8|latin1|gbk|utf8mb4]\\",\\n        \\"DataType\\": \\"INT\\",\\n        \\"ParameterName\\": \\"character_set_server\\",\\n        \\"ParameterValue\\": \\"utf8\\",\\n        \\"ForceRestart\\": true,\\n        \\"ParameterDescription\\": \\"The server\'s default character set.\\",\\n        \\"ParameterStatus\\": \\"Normal\\",\\n        \\"DefaultParameterValue\\": \\"utf8\\",\\n        \\"IsModifiable\\": true,\\n        \\"IsNodeAvailable\\": \\"0\\",\\n        \\"ParamRelyRule\\": \\"utf8\\",\\n        \\"Factor\\": \\"20\\"\\n      }\\n    ]\\n  },\\n  \\"DBVersion\\": \\"5.6\\",\\n  \\"RequestId\\": \\"EBEAA83D-1734-42E3-85E3-E25F6E******\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"Engine\\": \\"POLARDB\\",\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\\\t\\\\n\\",\\n  \\"ParameterNumbers\\": \\"1\\",\\n  \\"Parameters\\": {\\n    \\"Parameters\\": [\\n      {\\n        \\"rdsParameterName\\": \\"character_set_server\\",\\n        \\"rdsParameterValue\\": \\"utf8\\",\\n        \\"rdsParameterOptional\\": \\"- utf8\\\\n- gbk\\",\\n        \\"distParameterName\\": \\"character_set_server\\",\\n        \\"distParameterValue\\": \\"utf8\\",\\n        \\"distParameterOptional\\": \\"- utf8\\\\n- gbk\\",\\n        \\"IsEqual\\": \\"true\\",\\n        \\"distParameterDescription\\": \\"The server\'s default character set.\\",\\n        \\"rdsParameterDescription\\": \\"The server\'s default character set.\\",\\n        \\"IsRdsKey\\": \\"1\\",\\n        \\"IsPolarDBKey\\": \\"0\\",\\n        \\"IsInstancePolarDBKey\\": \\"1\\",\\n        \\"IsInstanceRdsKey\\": \\"0\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterParametersResponse>\\n    <RunningParameters>\\n        <CheckingCode>[utf8|latin1|gbk|utf8mb4]</CheckingCode>\\n        <DataType>INT</DataType>\\n        <ParameterName>character_set_server</ParameterName>\\n        <ParameterValue>utf8</ParameterValue>\\n        <ForceRestart>true</ForceRestart>\\n        <ParameterDescription>The server\'s default character set.</ParameterDescription>\\n        <ParameterStatus>Normal</ParameterStatus>\\n        <DefaultParameterValue>utf8</DefaultParameterValue>\\n        <IsModifiable>true</IsModifiable>\\n        <IsNodeAvailable>0</IsNodeAvailable>\\n        <ParamRelyRule>utf8</ParamRelyRule>\\n        <Factor>20</Factor>\\n    </RunningParameters>\\n    <DBVersion>5.6</DBVersion>\\n    <RequestId>EBEAA83D-1734-42E3-85E3-E25F6E******</RequestId>\\n    <DBType>MySQL</DBType>\\n    <Engine>POLARDB</Engine>\\n</DescribeDBClusterParametersResponse>","errorExample":""}]',
      'title' => '查看PolarDB集群当前参数运行列表',
      'summary' => '查看PolarDB集群当前参数运行列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBNodesParameters' => 
    array (
      'summary' => '查询集群中指定节点的参数。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询指定节点的参数列表',
            'description' => '节点ID。支持传入多个节点ID，多个节点ID间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pi-****************,pi-****************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBVersion' => 
              array (
                'description' => 'MySQL版本号。取值范围：

- **5.6**

- **5.7**

- **8.0**
',
                'type' => 'string',
                'example' => '5.6',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'DBType' => 
              array (
                'description' => '数据库类型。取值固定为**MySQL**。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'Engine' => 
              array (
                'description' => '集群引擎。',
                'type' => 'string',
                'example' => 'POLARDB',
              ),
              'DBNodeIds' => 
              array (
                'description' => '节点ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBNodeId' => 
                    array (
                      'description' => '节点ID。',
                      'type' => 'string',
                      'example' => 'pi-bp1r4qe3s534*****',
                    ),
                    'RunningParameters' => 
                    array (
                      'description' => '当前节点运行的参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CheckingCode' => 
                          array (
                            'description' => '目标参数的取值范围。',
                            'type' => 'string',
                            'example' => '[utf8|latin1|gbk|utf8mb4]',
                          ),
                          'DataType' => 
                          array (
                            'description' => '参数值类型。取值范围：

- **INT**：整数类型

- **STRING**：字符串类型

- **B**：字节类型',
                            'type' => 'string',
                            'example' => 'INT',
                          ),
                          'DefaultParameterValue' => 
                          array (
                            'description' => '参数默认值。',
                            'type' => 'string',
                            'example' => 'utf8',
                          ),
                          'ForceRestart' => 
                          array (
                            'description' => '是否需要重启生效。取值范围：

- **false**：否

- **true**：是',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'IsModifiable' => 
                          array (
                            'description' => '是否可修改。取值范围：

- **false**：不可修改

- **true**：可修改',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'ParameterDescription' => 
                          array (
                            'description' => '参数描述。',
                            'type' => 'string',
                            'example' => 'The server\'s default character set.',
                          ),
                          'ParameterName' => 
                          array (
                            'description' => '参数名称。',
                            'type' => 'string',
                            'example' => 'character_set_server',
                          ),
                          'ParameterStatus' => 
                          array (
                            'description' => '参数状态。取值范围：

- **normal**：正常
 
- **modifying**：修改中',
                            'type' => 'string',
                            'example' => 'normal',
                          ),
                          'ParameterValue' => 
                          array (
                            'description' => '参数值。',
                            'type' => 'string',
                            'example' => 'utf8',
                          ),
                          'IsNodeAvailable' => 
                          array (
                            'description' => '是否是全局参数。取值范围：

- **0**：是全局参数。参数修改会默认应用到其他节点，且不可取消；

- **1**：不是全局参数。参数修改可自定义应用到其他节点。',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'ParamRelyRule' => 
                          array (
                            'description' => '参数依赖。',
                            'type' => 'string',
                            'example' => 'utf8',
                          ),
                          'Factor' => 
                          array (
                            'description' => '整除因子。对于整数和字节类型的参数，参数值除了必须满足参数的可选范围，还须是Factor（不等于0）的倍数。',
                            'type' => 'string',
                            'example' => '20',
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
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The specified DBClusterId is not found.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBVersion\\": \\"5.6\\",\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"Engine\\": \\"POLARDB\\",\\n  \\"DBNodeIds\\": [\\n    {\\n      \\"DBNodeId\\": \\"pi-bp1r4qe3s534*****\\",\\n      \\"RunningParameters\\": [\\n        {\\n          \\"CheckingCode\\": \\"[utf8|latin1|gbk|utf8mb4]\\",\\n          \\"DataType\\": \\"INT\\",\\n          \\"DefaultParameterValue\\": \\"utf8\\",\\n          \\"ForceRestart\\": true,\\n          \\"IsModifiable\\": true,\\n          \\"ParameterDescription\\": \\"The server\'s default character set.\\",\\n          \\"ParameterName\\": \\"character_set_server\\",\\n          \\"ParameterStatus\\": \\"normal\\",\\n          \\"ParameterValue\\": \\"utf8\\",\\n          \\"IsNodeAvailable\\": \\"1\\",\\n          \\"ParamRelyRule\\": \\"utf8\\",\\n          \\"Factor\\": \\"20\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBNodesParametersResponse>\\n    <DBVersion>5.6</DBVersion>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <DBType>MySQL</DBType>\\n    <Engine>POLARDB</Engine>\\n    <DBNodeIds>\\n        <DBNodeId>pi-bp1r4qe3s534*****</DBNodeId>\\n        <RunningParameters>\\n            <CheckingCode>[utf8|latin1|gbk|utf8mb4]</CheckingCode>\\n            <DataType>INT</DataType>\\n            <DefaultParameterValue>utf8</DefaultParameterValue>\\n            <ForceRestart>true</ForceRestart>\\n            <IsModifiable>true</IsModifiable>\\n            <ParameterDescription>The server\'s default character set.</ParameterDescription>\\n            <ParameterName>character_set_server</ParameterName>\\n            <ParameterStatus>normal</ParameterStatus>\\n            <ParameterValue>utf8</ParameterValue>\\n            <IsNodeAvailable>1</IsNodeAvailable>\\n            <ParamRelyRule>utf8</ParamRelyRule>\\n            <Factor>20</Factor>\\n        </RunningParameters>\\n    </DBNodeIds>\\n</DescribeDBNodesParametersResponse>","errorExample":""}]',
      'title' => '查询集群中指定节点的参数',
    ),
    'DescribeParameterTemplates' => 
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
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，当前仅支持**MySQL**。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL',
          ),
        ),
        1 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本，取值范围如下：
* **5.6**
* **5.7**
* **8.0**',
            'type' => 'string',
            'required' => true,
            'example' => '5.7',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以通过[DescribeRegions](~~98041~~)接口查看当前账号下的所有可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'ParameterCount' => 
              array (
                'description' => '参数数量。',
                'type' => 'string',
                'example' => '183',
              ),
              'DBVersion' => 
              array (
                'description' => '数据库引擎版本。',
                'type' => 'string',
                'example' => '5.7',
              ),
              'Parameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateRecord' => 
                  array (
                    'description' => '参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '参数取值范围。',
                          'type' => 'string',
                          'example' => '[ROW|STATEMENT|MIXED]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名称。',
                          'type' => 'string',
                          'example' => 'binlog_format',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数默认值。',
                          'type' => 'string',
                          'example' => 'ROW',
                        ),
                        'ForceModify' => 
                        array (
                          'description' => '参数是否可修改，取值范围如下：
* **true**：可修改
* **false**：不可修改',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '参数修改后，是否需要重启新参数值才生效。取值范围如下：
* **true**：需要重启
* **false**：不需要重启',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => 'What form of binary logging the master will use.',
                        ),
                        'IsNodeAvailable' => 
                        array (
                          'description' => '是否是全局参数。取值：

- **0**：是全局参数。修改后的参数值会默认同步到其他节点；

- **1**：不是全局参数。修改后的参数值可自定义需要同步的节点。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ParamRelyRule' => 
                        array (
                          'description' => '参数依赖。',
                          'type' => 'string',
                          'example' => 'utf8',
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
                'example' => 'D963934D-8605-4473-8EAC-54C719******',
              ),
              'DBType' => 
              array (
                'description' => '数据库引擎类型。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎。',
                'type' => 'string',
                'example' => 'POLARDB',
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
            'errorCode' => 'InvalidDBType.NotFound',
            'errorMessage' => 'The Specified DBType does not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBVersion.Malformed',
            'errorMessage' => 'The Specified DBVersion is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ParameterCount\\": \\"183\\",\\n  \\"DBVersion\\": \\"5.7\\",\\n  \\"Parameters\\": {\\n    \\"TemplateRecord\\": [\\n      {\\n        \\"CheckingCode\\": \\"[ROW|STATEMENT|MIXED]\\",\\n        \\"ParameterName\\": \\"binlog_format\\",\\n        \\"ParameterValue\\": \\"ROW\\",\\n        \\"ForceModify\\": \\"true\\",\\n        \\"ForceRestart\\": \\"false\\",\\n        \\"ParameterDescription\\": \\"What form of binary logging the master will use.\\",\\n        \\"IsNodeAvailable\\": \\"1\\",\\n        \\"ParamRelyRule\\": \\"utf8\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"D963934D-8605-4473-8EAC-54C719******\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"Engine\\": \\"POLARDB\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterTemplatesResponse>\\n    <ParameterCount>183</ParameterCount>\\n    <DBVersion>5.7</DBVersion>\\n    <Parameters>\\n        <CheckingCode>[ROW|STATEMENT|MIXED]</CheckingCode>\\n        <ParameterName>binlog_format</ParameterName>\\n        <ParameterValue>ROW</ParameterValue>\\n        <ForceModify>true</ForceModify>\\n        <ForceRestart>false</ForceRestart>\\n        <ParameterDescription>What form of binary logging the master will use.</ParameterDescription>\\n        <IsNodeAvailable>1</IsNodeAvailable>\\n        <ParamRelyRule>utf8</ParamRelyRule>\\n    </Parameters>\\n    <RequestId>D963934D-8605-4473-8EAC-54C719******</RequestId>\\n    <DBType>MySQL</DBType>\\n    <Engine>POLARDB</Engine>\\n</DescribeParameterTemplatesResponse>","errorExample":""}]',
      'title' => '查询参数模版列表',
      'summary' => '查询数据库集群默认参数的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeParameterGroups' => 
    array (
      'summary' => '查看目标地域的参数模板列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以通过[DescribeRegions](~~98041~~)接口查看当前账号下的所有可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，当前仅支持**MySQL**类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        2 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎版本号，取值范围如下：
* **5.6**
* **5.7**
* **8.0**',
            'type' => 'string',
            'required' => false,
            'example' => '8.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
                'example' => '944CED46-A6F7-40C6-B6DC-C6E5CC******',
              ),
              'ParameterGroups' => 
              array (
                'description' => '参数模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBType' => 
                    array (
                      'description' => '数据库引擎类型。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本号。',
                      'type' => 'string',
                      'example' => '8.0',
                    ),
                    'ParameterGroupName' => 
                    array (
                      'description' => '参数模板名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ForceRestart' => 
                    array (
                      'description' => '应用该参数模板是否需要重启集群，取直范围如下：
* **0**：不需要重启
* **1**：需要重启',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ParameterGroupType' => 
                    array (
                      'description' => '参数模板类型，取值范围如下：
* **0**：系统默认模板
* **1**：用户自定义模板
* **2**：系统自动备份模板（应用模板后系统会自动备份之前的参数设置为模板）',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ParameterCounts' => 
                    array (
                      'description' => '参数模板内的参数数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ParameterGroupDesc' => 
                    array (
                      'description' => '参数模板描述。',
                      'type' => 'string',
                      'example' => 'testgroup',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '参数模板创建时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-10T08:40:39Z',
                    ),
                    'ParameterGroupId' => 
                    array (
                      'description' => '参数模板ID。',
                      'type' => 'string',
                      'example' => 'pcpg-**************',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEngine.Unsupported',
            'errorMessage' => 'The specified Engine does not support this feature.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"944CED46-A6F7-40C6-B6DC-C6E5CC******\\",\\n  \\"ParameterGroups\\": [\\n    {\\n      \\"DBType\\": \\"MySQL\\",\\n      \\"DBVersion\\": \\"8.0\\",\\n      \\"ParameterGroupName\\": \\"test\\",\\n      \\"ForceRestart\\": \\"1\\",\\n      \\"ParameterGroupType\\": \\"1\\",\\n      \\"ParameterCounts\\": 2,\\n      \\"ParameterGroupDesc\\": \\"testgroup\\",\\n      \\"CreateTime\\": \\"2023-03-10T08:40:39Z\\",\\n      \\"ParameterGroupId\\": \\"pcpg-**************\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterGroupsResponse>\\n    <RequestId>944CED46-A6F7-40C6-B6DC-C6E5CC******</RequestId>\\n    <ParameterGroups>\\n        <DBType>MySQL</DBType>\\n        <DBVersion>8.0</DBVersion>\\n        <ParameterGroupName>test</ParameterGroupName>\\n        <ForceRestart>1</ForceRestart>\\n        <ParameterGroupType>1</ParameterGroupType>\\n        <ParameterCounts>2</ParameterCounts>\\n        <ParameterGroupDesc>testgroup</ParameterGroupDesc>\\n        <CreateTime>2023-03-10T08:40:39Z</CreateTime>\\n        <ParameterGroupId>pcpg-**************</ParameterGroupId>\\n    </ParameterGroups>\\n</DescribeParameterGroupsResponse>","errorExample":""}]',
      'title' => '查询参数模板列表',
      'description' => '参数模板可以批量管理集群的参数，您可以使用参数模板功能快速应用模板到PolarDB集群上。更多详情，请参见[使用参数模板](~~207009~~)。
> 当前仅支持PolarDB MySQL版集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeParameterGroup' => 
    array (
      'summary' => '查询目标参数模板详情。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以通过[DescribeRegions](~~98041~~)接口查看当前账号下的所有可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID。
> 您可以通过[DescribeParameterGroups](~~207178~~)接口查询目标地域下所有参数模板的详细信息，包括参数模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcpg-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
                'example' => 'F1F16757-D31B-49CA-9BF4-305BAF******',
              ),
              'ParameterGroup' => 
              array (
                'description' => '参数模板信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBType' => 
                    array (
                      'description' => '数据库引擎类型。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本号。',
                      'type' => 'string',
                      'example' => '8.0',
                    ),
                    'ParameterGroupName' => 
                    array (
                      'description' => '参数模板名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ForceRestart' => 
                    array (
                      'description' => '应用该参数模板是否需要重启集群，取直范围如下：
* **0**：不需要重启
* **1**：需要重启',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ParameterGroupType' => 
                    array (
                      'description' => '参数模板类型，取值范围如下：
* **0**：系统默认模板
* **1**：用户自定义模板
* **2**：系统自动备份模板（应用模板后系统会自动备份之前的参数设置为模板）',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ParameterCounts' => 
                    array (
                      'description' => '参数模板内的参数数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'ParameterGroupDesc' => 
                    array (
                      'description' => '参数模板描述。',
                      'type' => 'string',
                      'example' => 'testgroup',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '参数模板创建时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-10T08:40:39Z',
                    ),
                    'ParameterDetail' => 
                    array (
                      'description' => '参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ParamValue' => 
                          array (
                            'description' => '参数值。',
                            'type' => 'string',
                            'example' => '3000',
                          ),
                          'ParamName' => 
                          array (
                            'description' => '参数名称。',
                            'type' => 'string',
                            'example' => 'back_log',
                          ),
                        ),
                      ),
                    ),
                    'ParameterGroupId' => 
                    array (
                      'description' => '参数模板ID。',
                      'type' => 'string',
                      'example' => 'pcpg-**************',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameterGroupId.Malformed',
            'errorMessage' => 'The Specified parameter ParameterGroupId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F1F16757-D31B-49CA-9BF4-305BAF******\\",\\n  \\"ParameterGroup\\": [\\n    {\\n      \\"DBType\\": \\"MySQL\\",\\n      \\"DBVersion\\": \\"8.0\\",\\n      \\"ParameterGroupName\\": \\"test\\",\\n      \\"ForceRestart\\": \\"1\\",\\n      \\"ParameterGroupType\\": \\"1\\",\\n      \\"ParameterCounts\\": 2,\\n      \\"ParameterGroupDesc\\": \\"testgroup\\",\\n      \\"CreateTime\\": \\"2023-03-10T08:40:39Z\\",\\n      \\"ParameterDetail\\": [\\n        {\\n          \\"ParamValue\\": \\"3000\\",\\n          \\"ParamName\\": \\"back_log\\"\\n        }\\n      ],\\n      \\"ParameterGroupId\\": \\"pcpg-**************\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterGroupResponse>\\n    <RequestId>F1F16757-D31B-49CA-9BF4-305BAF******</RequestId>\\n    <ParameterGroup>\\n        <DBType>MySQL</DBType>\\n        <DBVersion>8.0</DBVersion>\\n        <ParameterGroupName>test</ParameterGroupName>\\n        <ForceRestart>1</ForceRestart>\\n        <ParameterGroupType>1</ParameterGroupType>\\n        <ParameterCounts>2</ParameterCounts>\\n        <ParameterGroupDesc>testgroup</ParameterGroupDesc>\\n        <CreateTime>2023-03-10T08:40:39Z</CreateTime>\\n        <ParameterDetail>\\n            <ParamValue>3000</ParamValue>\\n            <ParamName>back_log</ParamName>\\n        </ParameterDetail>\\n        <ParameterGroupId>pcpg-**************</ParameterGroupId>\\n    </ParameterGroup>\\n</DescribeParameterGroupResponse>","errorExample":""}]',
      'title' => '查询指定的参数模板信息',
      'description' => '参数模板可以批量管理集群的参数，您可以使用参数模板功能快速应用模板到PolarDB集群上。更多详情，请参见[使用参数模板](~~207009~~)。
> 当前仅支持PolarDB MySQL版集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteParameterGroup' => 
    array (
      'summary' => '删除PolarDB参数模板。',
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
            'description' => '地域ID。

> 您可以通过接口[DescribeRegions](~~98041~~)查看可用地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID。

> 您可以通过接口[DescribeParameterGroups](~~207178~~)查看参数模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pcpg-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
                'example' => '4F7195E7-5F74-479D-AF59-1B4BF9******',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameterGroupId.Malformed',
            'errorMessage' => 'The Specified parameter ParameterGroupId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F7195E7-5F74-479D-AF59-1B4BF9******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteParameterGroupResponse>\\r\\n  <RequestId>4F7195E7-5F74-479D-AF59-1B4BF9******</RequestId>\\r\\n</DeleteParameterGroupResponse>","errorExample":""}]',
      'title' => '删除参数模板',
      'description' => '参数模板可以批量管理集群的参数，您可以使用参数模板功能快速应用模板到PolarDB集群上。更多详情，请参见[使用参数模板](~~207009~~)。

> 删除参数模板不会影响已经应用该模板的PolarDB集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterAndNodesParameters' => 
    array (
      'summary' => '修改集群参数并应用到指定节点。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '1、修改多个指定节点的参数，以‘，’分割。，修改此集群的集群参数和指定节点的参数
2、当为空时，说明没有指定，则只修改集群参数。',
            'description' => '节点ID。通过设置该参数可以修改集群参数和指定节点的参数。多个节点ID间用英文逗号（,）分隔。

> 当该参数为空时，则表示只修改集群参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-****************,pi-**********,',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数及其值的JSON串，参数的值都是字符串类型，例如{"wait_timeout":"86","innodb_old_blocks_time":"10"}',
            'description' => '参数及参数值的JSON串。',
            'type' => 'string',
            'required' => false,
            'example' => '{"wait_timeout":"86","innodb_old_blocks_time":"10"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数模板ID。',
            'description' => '参数模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcpg-**************',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行定时（即在目标时间段内执行）内核版本升级任务的最早时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行定时（即在目标时间段内执行）任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
> * 若该参数留空，默认立即执行任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行目标定时任务的最晚时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-14T09:30:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '立即执行或定时执行修改参数并重启取值：  false（默认值）：定时执行 true：立即执行',
            'description' => '立即执行或定时执行修改参数并重启集群。取值：

- **false**（默认值）：定时执行

- **true**：立即执行',
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
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
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'ParamCollationServerNotValid',
            'errorMessage' => 'This param collation_server is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MinorVersionNotSupport',
            'errorMessage' => 'Custins minor version does not support current action.',
          ),
          4 => 
          array (
            'errorCode' => 'ScheduleTaskExist',
            'errorMessage' => 'The specified dbCluster already has a scheduled task.',
          ),
          5 => 
          array (
            'errorCode' => 'ParamTypeException',
            'errorMessage' => 'Param is isClusterAvailable, not allow to change alone',
          ),
          6 => 
          array (
            'errorCode' => 'ParamDynamicException',
            'errorMessage' => 'Conflicting parameters: %s',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameterGroupId.Malformed',
            'errorMessage' => 'The Specified parameter ParameterGroupId is not valid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameters.Malformed',
            'errorMessage' => 'The Specified parameters is not valid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.Malformed',
            'errorMessage' => 'Choose one of parameters and ParamGroupId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The specified DBClusterId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeId.NotFound',
            'errorMessage' => 'The DBNodeId provided does not exist in our records.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterAndNodesParametersResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n</ModifyDBClusterAndNodesParametersResponse>","errorExample":""}]',
      'title' => '修改集群参数并应用到指定节点',
    ),
    'ModifyDBClusterParameters' => 
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Parameters与ParamGroupId二选一必传',
            'description' => '参数及其值的JSON串，参数的值都是字符串类型，例如`{"wait_timeout":"86","innodb_old_blocks_time":"10"}`。

> * 您可以通过接口[DescribeDBClusterParameters](~~98122~~)查看PolarDB集群的参数。
> * 若目标集群为PolarDB PostgreSQL版或PolarDB PostgreSQL版（兼容Oracle），该参数必填。
> * 若目标集群为PolarDB MySQL版，您需在该参数或`ParameterGroupId`参数中选择一个传入。',
            'type' => 'string',
            'required' => false,
            'example' => '{"wait_timeout":"86","innodb_old_blocks_time":"10"}',
          ),
        ),
        2 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Parameters与ParamGroupId二选一必传',
            'description' => '参数模板ID。


> * 您可以通过[DescribeParameterGroups](~~207178~~)接口查看参数模板ID。
> * 您需在该参数或`Parameters`参数中选择一个传入。
> * 仅PolarDB MySQL版支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcpg-**************',
          ),
        ),
        3 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行定时（即在目标时间段内执行）内核版本升级任务的最早时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行定时（即在目标时间段内执行）任务的最早时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 开始时间的取值范围为未来24小时内的任意时间点。例如当前时间为`2021-01-14T09:00:00Z`，此处允许填入的开始时间范围为`2021-01-14T09:00:00Z`~`2021-01-15T09:00:00Z`。
> * 若该参数留空，默认立即执行任务。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-28T14:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行目标定时任务的最晚时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行目标定时任务的最晚时间。格式为`YYYY-MM-DDThh:mm:ssZ`（UTC）。
> * 最晚时间需晚于开始时间的30分钟或以上。
> * 若设置了`PlannedStartTime`但未指定该参数，执行目标任务的最晚时间默认为`开始时间+30分钟`。例如当设置`PlannedStartTime`为`2021-01-14T09:00:00Z`且该参数留空时，目标任务最晚将于`2021-01-14T09:30:00Z`开始执行。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-28T14:30:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '立即执行或定时执行修改参数并重启取值：  false（默认值）：定时执行 true：立即执行',
            'description' => '立即执行或定时执行修改参数并重启集群。取值：  

- false（默认值）：定时执行
 
- true：立即执行',
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
                'example' => 'C5D526E5-91B5-48B8-B980-FE07FF******',
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
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'MinorVersionNotSupport',
            'errorMessage' => 'Custins minor version does not support current action.',
          ),
          2 => 
          array (
            'errorCode' => 'ParamDynamicException',
            'errorMessage' => 'Conflicting parameters: %s',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameters.Malformed',
            'errorMessage' => 'The Specified parameters is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Malformed',
            'errorMessage' => 'Choose one of parameters and ParamGroupId.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5D526E5-91B5-48B8-B980-FE07FF******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<ModifyDBClusterParametersResponse>\\r\\n<RequestId>C5D526E5-91B5-48B8-B980-FE07FF******</RequestId>\\r\\n</ModifyDBClusterParametersResponse>","errorExample":"<ModifyDBClusterParametersResponse>  \\n\\t<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</ModifyDBClusterParametersResponse>"}]',
      'title' => '修改PolarDB集群的参数',
      'summary' => '修改PolarDB集群的参数或将已有的参数模板应用到目标集群上。',
      'description' => 'PolarDB新增参数模板功能，您可以使用参数模板功能，对参数进行集中管理，并快速应用至集群。更多详情，请参见[使用参数模板](~~207009~~)。

> 当前仅PolarDB MySQL版支持参数模板功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBNodesParameters' => 
    array (
      'summary' => '修改单个节点的参数并应用到指定节点。',
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
            'description' => '集群ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点名称，多个节点名按照“，”分割',
            'description' => '节点ID。支持传入多个节点ID，多个节点ID间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pi-****************， pi-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数及其值的JSON串，参数的值都是字符串类型，例如{"wait_timeout":"86","innodb_old_blocks_time":"10"}',
            'description' => '参数及参数值的JSON串。',
            'type' => 'string',
            'required' => false,
            'example' => '{"wait_timeout":"86","innodb_old_blocks_time":"10"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '参数模板ID。',
            'description' => '参数模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcpg-**************',
          ),
        ),
        4 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行定时（即在目标时间段内执行）内核版本升级任务的最早时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行定时（即在目标时间段内执行）内核版本升级任务的最早时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-28T14:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始执行目标定时任务的最晚时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'description' => '开始执行目标定时任务的最晚时间。格式为YYYY-MM-DDThh:mm:ssZ（UTC）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-28T14:30:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'FromTimeService',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '立即执行或定时执行修改参数并重启取值：  false（默认值）：定时执行 true：立即执行',
            'description' => '立即执行或定时执行修改参数并重启取值：  false（默认值）：定时执行 true：立即执行',
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
                'example' => 'EBEAA83D-1734-42E3-85E3-E25F6E******',
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
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameterGroupId.Malformed',
            'errorMessage' => 'The Specified parameter ParameterGroupId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameters.Malformed',
            'errorMessage' => 'The Specified parameters is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Malformed',
            'errorMessage' => 'Choose one of parameters and ParamGroupId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The specified DBClusterId is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EBEAA83D-1734-42E3-85E3-E25F6E******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBNodesParametersResponse>\\n    <RequestId>EBEAA83D-1734-42E3-85E3-E25F6E******</RequestId>\\n</ModifyDBNodesParametersResponse>","errorExample":""}]',
      'title' => '修改单个节点的参数并应用到指定节点',
    ),
    'CreateDBClusterEndpoint' => 
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
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'EndpointType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义集群地址类型，取值固定为**Custom**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Custom',
          ),
        ),
        2 => 
        array (
          'name' => 'Nodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加入目标地址的读负载节点，多个节点间用英文逗号（,）分隔。 默认为全部节点。 

> * PolarDB MySQL版需要传入节点ID。
>* PolarDB PostgreSQL版和PolarDB PostgreSQL版（兼容Oracle）需要传入节点角色名称，例如`Writer,Reader1,Reader2`。
>* **ReadWriteMode**取值为**ReadOnly**时，支持只挂载一个节点。但当此节点故障时，该地址可能会有最多1小时的不可用，请勿用于生产环境。因此，推荐至少选择2个节点，以提升可用性。
>* **ReadWriteMode**取值为**ReadWrite**时，至少要选择2个节点。
    * PolarDB MySQL版支持选择任意两个节点。当两个节点都是只读节点时，写请求都会发往主节点。
    * PolarDB PostgreSQL版和PolarDB PostgreSQL版（兼容Oracle）必须包含主节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-**********,pi-*********',
          ),
        ),
        3 => 
        array (
          'name' => 'ReadWriteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '读写模式，取值范围如下： 

- **ReadWrite**：可读可写（自动读写分离）。 
- **ReadOnly**（默认）：只读。',
            'type' => 'string',
            'required' => false,
            'example' => 'ReadOnly',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoAddNewNodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新节点是否自动加入本地址，取值范围如下：
* **Enable**：新节点自动加入本地址。
* **Disable**（默认）：新节点不自动加入本地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'Disable',
            'enum' => 
            array (
              0 => 'Enable',
              1 => 'Disable',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'EndpointConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群地址的高级配置，格式为JSON，目前支持设置一致性级别、事务拆分、主库不接受读和连接池。
* 设置负载均衡策略。格式为{\\"LoadBalancePolicy\\":\\"负载均衡策略\\"}。取值范围如下：
   * **0**：基于连接数负载均衡（默认）。
   * **1**：基于活跃请求数负载均衡。
* 设置一致性级别。格式为`{"ConsistLevel":"一致性级别"}`，取值范围如下：
    * **0**：最终一致性。
    * **1**：会话一致性（默认值）。
    * **2**：全局一致性。
* 设置事务拆分。格式为`{"DistributedTransaction":"事务拆分"}`，取值范围如下：
    * **on**：开启事务拆分（默认值）。
    * **off**：关闭事务拆分。
* 设置主库是否接受读。格式为`{"MasterAcceptReads":"主库不接受读"}`，取值范围如下：
    * **on**：表示主库接受读。
    * **off**：表示主库不接受读（默认值）。
* 设置连接池。格式为`{"ConnectionPersist":"连接池"}`，取值范围如下：
    * **off**：关闭连接池（默认值）。
    * **Session**：开启会话级连接池。
    * **Transaction**：开启事务级连接池。
* 设置并行查询，格式为{\\"MaxParallelDegree\\":\\"并行查询\\"}。取值范围如下：
    * **on**：开启并行查询。
    * **off**：关闭并行查询（默认）。
* 设置行存/列存自动引流，格式为{\\"EnableHtapImci\\":\\"行存/列存自动引流\\"}。取值范围如下：
    * **on**：开启行存/列存自动引流功能。
    * **off**：关闭行存/列存自动引流功能（默认）。
* 设置是否开启过载保护，格式为{\\"EnableOverloadThrottle\\":\\"是否开启过载保护\\"}。取值范围如下：
   * **on**：开启过载保护。
   * **off**：关闭过载保护（默认）。

> * 仅当PolarDB MySQL版集群地址的读写模式为**可读可写（自动读写分离）**时，支持设置事务拆分、主库是否接受读、连接池和是否开启过载保护。
>* 当PolarDB MySQL版集群地址的读写模式为**只读**时，支持**基于连接数负载均衡**和**基于活跃请求数负载均衡**两种负载均衡策略； **可读可写（自动读写分离）模式**的集群地址仅支持**基于活跃请求数负载均衡策略**。
>* 当PolarDB MySQL版集群地址的读写模式为**可读可写（自动读写分离）**，或集群地址的读写模式为**只读**且负载均衡策略为**基于活跃请求数负载均衡**时，支持设置行存/列存自动引流。
>* 仅PolarDB MySQL版支持将一致性级别设置为全局一致性。
>* 如果参数**ReadWriteMode**取值为**ReadOnly**，一致性级别取值只能为**0**。
>* 您可以同时设置一致性级别、事务拆分、主库不接受读和连接池，例如`{"ConsistLevel":"1","DistributedTransaction":"on","ConnectionPersist":"Session","MasterAcceptReads":"on"}`。
>* 事务拆分的设置受一致性级别设置的约束。例如一致性级别取值为**0**时，不支持开启事务拆分；一致性级别取值为**1**或**2**时，支持开启事务拆分。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ConsistLevel": "1","DistributedTransaction": "on"}',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f******************',
          ),
        ),
        7 => 
        array (
          'name' => 'DBEndpointDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义集群地址名称。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD35F3-F3-44CA-AFFF-BAF869******',
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
            'errorCode' => 'ClusterEndpoint.StatusNotValid',
            'errorMessage' => 'Cluster endpoint status is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointNum.Error',
            'errorMessage' => 'Endpoint number error.',
          ),
          2 => 
          array (
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EndpointConfig.Invalid',
            'errorMessage' => 'Endpoint config is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConfig.Conflict',
            'errorMessage' => 'Endpoint config is invalid, CausalConsistRead should be session since node SCC mode enabled.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD35F3-F3-44CA-AFFF-BAF869******\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"CD35F3-F3-44CA-AFFF-BAF869666D6B\\"\\n}"},{"type":"xml","example":"<CreateDBClusterEndpointResponse>\\r\\n<RequestId>CD35F3-F3-44CA-AFFF-BAF869******</RequestId>\\r\\n</CreateDBClusterEndpointResponse>","errorExample":"<CreateDBClusterEndpointResponse>  \\n    <RequestId>CD35F3-F3-44CA-AFFF-BAF869666D6B</RequestId>\\n</CreateDBClusterEndpointResponse>"}]',
      'title' => '创建自定义集群地址',
      'summary' => '创建PolarDB自定义集群地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDBEndpointAddress' => 
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
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址ID。

> 可通过接口[DescribeDBClusterEndpoints](~~98205~~)查询连接地址详情。',
            'type' => 'string',
            'required' => true,
            'example' => 'pe-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的连接地址前缀。连接地址前缀需满足如下条件： 
* 由小写字母、数字、中划线（-）组成。
* 以字母开头，以数字或字母结尾。
* 长度为6~40个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-1',
          ),
        ),
        3 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新增连接地址的网络类型，固定为**Public**（公网）。

',
            'type' => 'string',
            'required' => true,
            'example' => 'Public',
          ),
        ),
        4 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-**********',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS安全组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bp**************',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '可用区信息。',
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
                  'required' => false,
                  'example' => 'cn-hangzhou-b',
                ),
                'VSwitchId' => 
                array (
                  'description' => '虚拟交换机ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-**********',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6BD9CDE4-5E7B-4BF3-9BB8-83C73E******',
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
            'errorCode' => 'EndpointStatus.NotSupport',
            'errorMessage' => 'Current endpoint status does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'NetTypeExists',
            'errorMessage' => 'Specified net type already existed.',
          ),
          2 => 
          array (
            'errorCode' => 'MissParameter.NetType',
            'errorMessage' => 'When NetType is set to NlbVpc, the VPCId, SecurityGroupId and ZoneInfo is needed.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBEndpointId.Malformed',
            'errorMessage' => 'The specified parameter DBEndpointId is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidNetType.Malformed',
            'errorMessage' => 'The specified parameter NetType is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidConnectionStringPrefix.Malformed',
            'errorMessage' => 'The specified parameter ConnectionStringPrefix is not valid.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6BD9CDE4-5E7B-4BF3-9BB8-83C73E******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<CreateDBEndpointAddressResponse>\\r\\n<RequestId>6BD9CDE4-5E7B-4BF3-9BB8-83C73E******</RequestId>\\r\\n</CreateDBEndpointAddressResponse>","errorExample":"<CreateDBEndpointAddressResponse>  \\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</CreateDBEndpointAddressResponse>"}]',
      'title' => '创建集群公网连接地址',
      'summary' => '创建PolarDB集群主地址、默认集群地址和自定义集群地址的公网连接地址。',
      'description' => '> 支持为PolarDB集群的主地址、默认集群地址和自定义集群地址创建公网连接地址。 
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterEndpoints' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群地址ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pe-*************',
          ),
        ),
        2 => 
        array (
          'name' => 'DescribeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要返回ai节点信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'AI',
          ),
        ),
      ),
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
                'example' => '2DC120BF-6EBA-4C63-BE99-B09F9E******',
              ),
              'Items' => 
              array (
                'description' => '集群地址详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NodeWithRoles' => 
                    array (
                      'description' => '目标连接地址下各节点的角色名称，其中主节点为**Writer**；由于一个连接地址下可加入多个只读节点，因此每个只读节点的角色名称后会加上数字作为区分，如**Reader1**、**Reader2**，以此类推。
> 仅PolarDB PostgreSQL版集群和PolarDB PostgreSQL版（兼容Oracle）集群支持该参数。',
                      'type' => 'string',
                      'example' => 'Reader1',
                    ),
                    'Nodes' => 
                    array (
                      'description' => '连接地址配置的节点列表。',
                      'type' => 'string',
                      'example' => 'pi-***************,pi-***************',
                    ),
                    'ReadWriteMode' => 
                    array (
                      'description' => '读写模式： 

- **ReadWrite**：可读可写（自动读写分离）。 
- **ReadOnly**：只读。',
                      'type' => 'string',
                      'example' => 'ReadOnly',
                    ),
                    'AddressItems' => 
                    array (
                      'description' => '连接串信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-************',
                          ),
                          'PrivateZoneConnectionString' => 
                          array (
                            'description' => '绑定的私有域名，',
                            'type' => 'string',
                            'example' => '***.***.**.com',
                          ),
                          'ConnectionString' => 
                          array (
                            'description' => '连接串。',
                            'type' => 'string',
                            'example' => '********.rwlb.polardb-pg-public.rds.aliyuncs.com',
                          ),
                          'NetType' => 
                          array (
                            'description' => '网络类型，取值范围如下： 

* **Public**：公网
* **Private**：私网
<props="china">- **Inner**：经典网络</props>

<props="china">仅PolarDB MySQL版集群支持经典网络类型。</props>
',
                            'type' => 'string',
                            'example' => 'Private',
                          ),
                          'Port' => 
                          array (
                            'description' => '端口。',
                            'type' => 'string',
                            'example' => '1521',
                          ),
                          'VpcInstanceId' => 
                          array (
                            'description' => 'VPC实例ID。
>仅PolarDB MySQL版集群会返回该参数。',
                            'type' => 'string',
                            'example' => 'pe-*************',
                          ),
                          'VPCId' => 
                          array (
                            'description' => '专有网络ID。',
                            'type' => 'string',
                            'example' => 'vpc-***************',
                          ),
                          'IPAddress' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '192.***.***.***',
                          ),
                        ),
                      ),
                    ),
                    'DBEndpointId' => 
                    array (
                      'description' => '连接地址ID。',
                      'type' => 'string',
                      'example' => 'pe-*************',
                    ),
                    'EndpointConfig' => 
                    array (
                      'description' => '集群地址的高级配置。

* **DistributedTransaction**：事务拆分状态，取值范围如下：
    * **on**：事务拆分已开启
    * **off**：事务拆分已关闭

* **ConsistLevel**：会话一致性级别，取值范围如下：
    * **0**：最终一致性
    * **1**：会话一致性。
    * **2**：全局一致性

*  **LoadBalanceStrategy**：负载均衡策略，基于负载的自动调度，取值固定为**load**。

* **MasterAcceptReads**：主库是否接受读，取值范围如下：
    * **on**：主库接受读
    * **off**：主库不接受读
',
                      'type' => 'string',
                      'example' => '{\\"DistributedTransaction\\":\\"off\\",\\"ConsistLevel\\":\\"0\\",\\"LoadBalanceStrategy\\":\\"load\\",\\"MasterAcceptReads\\":\\"on\\"}',
                    ),
                    'DBEndpointDescription' => 
                    array (
                      'description' => '地址名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'EndpointType' => 
                    array (
                      'description' => '集群地址类型： 

- **Cluster**：默认集群地址。 
- **Primary**：主地址。 
- **Custom**：自定义集群地址。',
                      'type' => 'string',
                      'example' => 'Custom',
                    ),
                    'AutoAddNewNodes' => 
                    array (
                      'description' => '新节点是否自动加入默认集群地址： 

- **Enable**。 
- **Disable**。',
                      'type' => 'string',
                      'example' => 'Enable',
                    ),
                    'DBClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'pc-bp1s826a1up******',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2DC120BF-6EBA-4C63-BE99-B09F9E******\\",\\n  \\"Items\\": [\\n    {\\n      \\"NodeWithRoles\\": \\"Reader1\\",\\n      \\"Nodes\\": \\"pi-***************,pi-***************\\",\\n      \\"ReadWriteMode\\": \\"ReadOnly\\",\\n      \\"AddressItems\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-************\\",\\n          \\"PrivateZoneConnectionString\\": \\"***.***.**.com\\",\\n          \\"ConnectionString\\": \\"********.rwlb.polardb-pg-public.rds.aliyuncs.com\\",\\n          \\"NetType\\": \\"Private\\",\\n          \\"Port\\": \\"1521\\",\\n          \\"VpcInstanceId\\": \\"pe-*************\\",\\n          \\"VPCId\\": \\"vpc-***************\\",\\n          \\"IPAddress\\": \\"192.***.***.***\\"\\n        }\\n      ],\\n      \\"DBEndpointId\\": \\"pe-*************\\",\\n      \\"EndpointConfig\\": \\"{\\\\\\\\\\\\\\"DistributedTransaction\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"off\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ConsistLevel\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"LoadBalanceStrategy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"load\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"MasterAcceptReads\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"on\\\\\\\\\\\\\\"}\\",\\n      \\"DBEndpointDescription\\": \\"test\\",\\n      \\"EndpointType\\": \\"Custom\\",\\n      \\"AutoAddNewNodes\\": \\"Enable\\",\\n      \\"DBClusterId\\": \\"pc-bp1s826a1up******\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterEndpointsResponse>\\n    <RequestId>2DC120BF-6EBA-4C63-BE99-B09F9E******</RequestId>\\n    <Items>\\n        <NodeWithRoles>Reader1</NodeWithRoles>\\n        <Nodes>pi-***************,pi-***************</Nodes>\\n        <ReadWriteMode>ReadOnly</ReadWriteMode>\\n        <AddressItems>\\n            <VSwitchId>vsw-************</VSwitchId>\\n            <PrivateZoneConnectionString>***.***.**.com</PrivateZoneConnectionString>\\n            <ConnectionString>********.rwlb.polardb-pg-public.rds.aliyuncs.com</ConnectionString>\\n            <NetType>Private</NetType>\\n            <Port>1521</Port>\\n            <VpcInstanceId>pe-*************</VpcInstanceId>\\n            <VPCId>vpc-***************</VPCId>\\n            <IPAddress>192.***.***.***</IPAddress>\\n        </AddressItems>\\n        <DBEndpointId>pe-*************</DBEndpointId>\\n        <EndpointConfig>{\\\\\\"DistributedTransaction\\\\\\":\\\\\\"off\\\\\\",\\\\\\"ConsistLevel\\\\\\":\\\\\\"0\\\\\\",\\\\\\"LoadBalanceStrategy\\\\\\":\\\\\\"load\\\\\\",\\\\\\"MasterAcceptReads\\\\\\":\\\\\\"on\\\\\\"}</EndpointConfig>\\n        <DBEndpointDescription>test</DBEndpointDescription>\\n        <EndpointType>Custom</EndpointType>\\n        <AutoAddNewNodes>Enable</AutoAddNewNodes>\\n        <DBClusterId>pc-bp1s826a1up******</DBClusterId>\\n    </Items>\\n</DescribeDBClusterEndpointsResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群的地址信息',
      'summary' => '查询PolarDB集群的地址信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterEndpoint' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群地址ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pe-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'Nodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加入目标地址的读负载节点，多个节点间用英文逗号（,）分隔。 默认为原有节点。

> * PolarDB MySQL版需要传入节点ID。
> * PolarDB PostgreSQL版和PolarDB PostgreSQL版（兼容Oracle）需要传入节点角色名称，例如`Writer,Reader1,Reader2`。
> * **ReadWriteMode**取值为**ReadOnly**时，支持只挂载一个节点。但当此节点故障时，该地址可能会有最多1小时的不可用，请勿用于生产环境。因此，推荐至少选择2个节点，以提升可用性。
> * **ReadWriteMode**取值为**ReadWrite**时，至少要选择2个节点。
    * PolarDB MySQL版支持选择任意两个节点。当两个节点都是只读节点时，写请求都会发往主节点。
    * PolarDB PostgreSQL版和PolarDB PostgreSQL版（兼容Oracle）必须包含主节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'pi-**************,pi-*************',
          ),
        ),
        3 => 
        array (
          'name' => 'ReadWriteMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '读写模式，取值范围如下：

- **ReadWrite**：可读可写（自动读写分离）
- **ReadOnly**：只读
',
            'type' => 'string',
            'required' => false,
            'example' => 'ReadWrite',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoAddNewNodes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新节点是否自动加入本地址，取值范围如下： 

- **Enable**：是
- **Disable**：否（默认值）',
            'type' => 'string',
            'required' => false,
            'example' => 'Enable',
            'enum' => 
            array (
              0 => 'Enable',
              1 => 'Disable',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'EndpointConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群地址的高级配置，格式为JSON，目前支持设置一致性级别、事务拆分、主库是否接受读和连接池等。

* 设置负载均衡策略，格式为`{\\"LoadBalancePolicy\\":\\"负载均衡策略\\"}`。取值范围如下：   
    * **0**：基于连接数负载均衡（默认）
    * **1**：基于活跃请求数负载均衡

* 设置主库是否接受读，格式为`{\\"MasterAcceptReads\\":\\"主库是否接受读\\"}`。取值范围如下：
    * **on**：表示主库接受读（默认）
    * **off**：表示主库不接受读

* 设置事务拆分，格式为`{\\"DistributedTransaction\\":\\"事务拆分\\"}`。取值范围如下：
    * **on**：开启事务拆分（默认）
    * **off**：关闭事务拆分

* 设置一致性级别，格式为`{\\"ConsistLevel\\":\\"一致性级别\\"}`。取值范围如下：
    * **0**：最终一致性（弱）
    * **1**：会话一致性（中）（默认）
    * **2**：全局一致性（强）

* 设置全局一致性读超时时间，格式为`{\\"ConsistTimeout\\":\\"全局一致性读超时时间\\"}`。取值范围：0~60000。默认值为20。单位为ms。

* 设置全局一致性读超时策略，格式为`{\\"ConsistTimeoutAction\\":\\"全局一致性读超时策略\\"}`。取值范围如下：
    * **0**：将读请求发往主节点（默认）。
    * **1**：代理返回一个错误报文wait replication complete timeout, please retry给应用端。

* 设置连接池，格式为`{\\"ConnectionPersist\\":\\"连接池\\"}`。取值范围如下：
    * **off**：关闭连接池（默认）
    * **Session**：开启会话级连接池
    * **Transaction**：开启事务级连接池

* 设置并行查询，格式为`{\\"MaxParallelDegree\\":\\"并行查询\\"}`。取值范围如下：
    * **on**：开启并行查询
    * **off**：关闭并行查询（默认）

* 设置行存/列存自动引流，格式为`{\\"EnableHtapImci\\":\\"行存/列存自动引流\\"}`。取值范围如下：
    * **on**：开启行存/列存自动引流功能
    * **off**：关闭行存/列存自动引流功能（默认）

* 设置是否开启过载保护，格式为`{\\"EnableOverloadThrottle\\":\\"是否开启过载保护\\"}`。取值范围如下：
    * **on**：开启过载保护
    * **off**：关闭过载保护（默认）

> * 仅当PolarDB MySQL版集群地址的读写模式为**可读可写（自动读写分离）**时，支持设置事务拆分、主库是否接受读、连接池和是否开启过载保护。
> * 当PolarDB MySQL版集群地址的读写模式为**只读**时，支持**基于连接数负载均衡**和**基于活跃请求数负载均衡**两种负载均衡策略； **可读可写（自动读写分离）**模式的集群地址仅支持**基于活跃请求数负载均衡**策略。
> * 当PolarDB MySQL版集群地址的读写模式为**可读可写（自动读写分离）**，或集群地址的读写模式为**只读**且负载均衡策略为**基于活跃请求数负载均衡**时，支持设置行存/列存自动引流。
> * 仅PolarDB MySQL版支持一致性级别设置为全局一致性。
> * 如果参数**ReadWriteMode**取值为**ReadOnly**，一致性级别取值只能为**0**。
> * 您可以同时设置一致性级别、事务拆分、主库是否接受读和连接池，例如`{\\"ConsistLevel\\":\\"1\\",\\"DistributedTransaction\\":\\"on\\",\\"ConnectionPersist\\":\\"Session\\",\\"MasterAcceptReads\\":\\"on\\"}`。
> * 事务拆分的设置受一致性级别设置的约束。例如一致性级别取值为**0**时，不支持开启事务拆分；一致性级别取值为**1**或**2**时，支持开启事务拆分。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ConsistLevel":"1","DistributedTransaction":"on","MasterAcceptReads":"off","ConnectionPersist": "on"}',
          ),
        ),
        6 => 
        array (
          'name' => 'DBEndpointDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址名称。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD3FA5F3-FAF3-44CA-AFFF-BAF869******',
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
            'errorCode' => 'InvalidEndpointConfig.Malformed',
            'errorMessage' => 'The specified parameter EndpointConfig is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBEndpointId.Malformed',
            'errorMessage' => 'The specified parameter DBEndpointId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidNodes.Malformed',
            'errorMessage' => 'The specified parameter Nodes is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointStatus.NotSupport',
            'errorMessage' => 'Current endpoint status does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD3FA5F3-FAF3-44CA-AFFF-BAF869******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterEndpointResponse>\\n    <RequestId>CD3FA5F3-FAF3-44CA-AFFF-BAF869******</RequestId>\\n</ModifyDBClusterEndpointResponse>","errorExample":""}]',
      'title' => '修改PolarDB的集群地址属性',
      'summary' => '修改PolarDB的集群地址属性，包括读写模式、新节点是否自动加入本地址、一致性级别、事务拆分、主库是否接受读、连接池等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBEndpointAddress' => 
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
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址ID。

> 您可以通过接口[DescribeDBClusterEndpoints](~~98205~~)查询连接地址ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pe-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址的网络类型，取值范围如下： 

* **Public**：公网
* **Private**：私网
<props="china">- **Inner**：经典网络</props>

<props="china">仅PolarDB MySQL版集群支持经典网络类型。</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Public',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的连接地址前缀，需满足如下条件：
* 由小写字母、数字、中划线（-）组成。
* 以字母开头，以数字或字母结尾。
* 长度为6~30个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'example',
          ),
        ),
        4 => 
        array (
          'name' => 'PrivateZoneAddressPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私有域名前缀。需满足如下条件：
* 由小写字母、数字、中划线（-）组成。
* 以字母开头，以数字或字母结尾。
* 长度为6~30个字符。

> * 对于PolarDB的每一个私网地址，均可以绑定一个用户的私有域名，该域名仅在当前地域内指定的VPC中生效。私有域名实际上是通过PrivateZone管理的，通过CNAME映射到PolarDB自带的私网地址上，该功能PrivateZone会收取少量费用，请参见[产品定价](~~71338~~)。
> * 仅**NetType=Private**时该参数有意义。',
            'type' => 'string',
            'required' => false,
            'example' => 'aliyundoc',
          ),
        ),
        5 => 
        array (
          'name' => 'PrivateZoneName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私有域名Zone名称。

> 仅**NetType=Private**时该参数有意义。',
            'type' => 'string',
            'required' => false,
            'example' => 'aliyundoc.com',
          ),
        ),
        6 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号，取值范围为3000～5999。
> * 仅PolarDB MySQL版集群支持该参数，若该参数留空，则默认端口号为3306。',
            'type' => 'string',
            'required' => false,
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'DnsConflict',
            'errorMessage' => 'ParamsError.DnsConflict(Dns is already used, ConnAddrCust:%s).',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<ModifyDBEndpointAddressResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</ModifyDBEndpointAddressResponse>","errorExample":"<CreateDBEndpointAddressResponse>  \\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</CreateDBEndpointAddressResponse>"}]',
      'title' => '修改集群连接地址',
      'summary' => '修改PolarDB集群的连接地址，包括主地址、默认集群地址、自定义集群地址和私有域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBClusterEndpoint' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-******************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义集群地址ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pe-******************',
          ),
        ),
      ),
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
                'example' => 'CD3FA5F3-FAF3-44CA-AFFF-BAF869******',
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
            'errorCode' => 'ClusterEndpoint.StatusNotValid',
            'errorMessage' => 'Cluster endpoint status is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBEndpointId.Malformed',
            'errorMessage' => 'The specified parameter DBEndpointId is not valid.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD3FA5F3-FAF3-44CA-AFFF-BAF869******\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"CD3FA5F3-FAF3-44CA-AFFF-BAF869666D6B\\"\\n}"},{"type":"xml","example":"<DeleteDBClusterEndpointResponse>\\r\\n<RequestId>CD3FA5F3-FAF3-44CA-AFFF-BAF869******</RequestId>\\r\\n</DeleteDBClusterEndpointResponse>","errorExample":"<DeleteDBClusterEndpointResponse>  \\n\\t<RequestId>CD3FA5F3-FAF3-44CA-AFFF-BAF869666D6B</RequestId>\\n</DeleteDBClusterEndpointResponse>"}]',
      'title' => '释放PolarDB自定义集群地址',
      'summary' => '释放PolarDB自定义集群地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBEndpointAddress' => 
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
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址ID。

> 您可以通过接口[DescribeDBClusterEndpoints](~~98205~~)查询DBEndpointId。',
            'type' => 'string',
            'required' => true,
            'example' => 'pe-***************',
          ),
        ),
        2 => 
        array (
          'name' => 'NetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="intl">连接地址的网络类型，仅支持**Public**（公网）类型。</props>
<props="china">连接地址的网络类型，取值范围如下：</props>
<props="china">- **Public**：公网。</props>
<props="china">- **Inner**：经典网络。</props>',
            'type' => 'string',
            'required' => true,
            'example' => 'Public',
          ),
        ),
      ),
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD86******',
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
            'errorCode' => 'InvalidDBEndpointId.Malformed',
            'errorMessage' => 'The specified parameter DBEndpointId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NetTypeUsed.Gdn',
            'errorMessage' => 'Specified endpoint‘s net type is used by global database.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidNetType.Malformed',
            'errorMessage' => 'The specified parameter NetType is not valid.',
          ),
        ),
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
            'errorCode' => 'EndpointStatus.NotSupport',
            'errorMessage' => 'Current endpoint status does not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD86******\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\"\\n}"},{"type":"xml","example":"<DeleteDBEndpointAddressResponse>\\r\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD86******</RequestId>\\r\\n</DeleteDBEndpointAddressResponse>","errorExample":"<DeleteDBEndpointAddressResponse>  \\n    <RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n</DeleteDBEndpointAddressResponse>"}]',
      'title' => '释放集群公网地址',
      'summary' => '释放PolarDB集群的公网地址，包括主地址、默认集群地址和自定义的集群地址的公网连接地址。',
      'description' => '> * 支持删除PolarDB集群主地址、默认集群地址和自定义集群地址的公网或经典网络连接地址。 
> * 仅中国站支持经典网络连接地址，国际站暂不支持，因此国际站无需删除经典网络连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSlowLogRecords' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 您可以调用[DescribeRegions](~~98041~~)接口查看目标账号下的可用地域信息，包括地域ID。',
            'type' => 'string',
            'required' => true,
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-************',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。

> * 支持查看最多30天内的慢日志信息。
> *  该参数输入的是UTC时间（即0时区），如果您的服务当前处于其他时区，请您进行时间转换。例如，当前您的服务所在时区的时间是北京时间（UTC+8时间）12:00点，如果您需要查询北京时间08:00点-12:00点的慢日志信息，那么应该输入的时间是00:00点-04:00点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-11-15T16:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要晚于查询开始时间，且查询开始时间与结束时间的时间间隔需在24小时之内。格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。

> 该参数输入的是UTC时间（即0时区），如果您的服务当前处于其他时区，请您进行时间转换。例如，当前您的服务所在时区的时间是北京时间（UTC+8时间）12:00点，如果您需要查询北京时间08:00点-12:00点的慢日志信息，那么应该输入的时间是00:00点-04:00点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-11-16T04:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30**
* **50**
* **100**

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值范围为大于0且不超过Integer的最大值。

默认值为**1**。',
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
          'name' => 'SQLHASH',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢日志统计里的SQL语句唯一标识符，可用于获取该SQL语句的慢日志明细。',
            'type' => 'string',
            'required' => false,
            'example' => 'U2FsdGVk****',
          ),
        ),
      ),
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
                'description' => '总SQL语句个数。',
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
                'example' => 'A7E6A8FD-C50B-46B2-BA85-D8B8D3******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SQLSlowRecord' => 
                  array (
                    'description' => '慢日志明细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExecutionStartTime' => 
                        array (
                          'description' => 'SQL开始执行的时间。格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-04-07T03:47Z',
                        ),
                        'HostAddress' => 
                        array (
                          'description' => '连接数据库的客户端地址。',
                          'type' => 'string',
                          'example' => 'testdb[testdb] @  [100.**.**.242]',
                        ),
                        'QueryTimes' => 
                        array (
                          'description' => 'SQL执行时长，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'SQLText' => 
                        array (
                          'description' => '查询语句。',
                          'type' => 'string',
                          'example' => '/* Query from *** by user 111 */ SELECT sleep(20)',
                        ),
                        'ReturnRowCounts' => 
                        array (
                          'description' => '返回行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ParseRowCounts' => 
                        array (
                          'description' => '解析行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'testdb',
                        ),
                        'LockTimes' => 
                        array (
                          'description' => 'SQL锁定时长，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DBNodeId' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'pi-*****************',
                        ),
                        'QueryTimeMS' => 
                        array (
                          'description' => '查询时间。单位毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎。',
                'type' => 'string',
                'example' => 'polardb_mysql',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"A7E6A8FD-C50B-46B2-BA85-D8B8D3******\\",\\n  \\"PageNumber\\": 1,\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"Items\\": {\\n    \\"SQLSlowRecord\\": [\\n      {\\n        \\"ExecutionStartTime\\": \\"2021-04-07T03:47Z\\",\\n        \\"HostAddress\\": \\"testdb[testdb] @  [100.**.**.242]\\",\\n        \\"QueryTimes\\": 20,\\n        \\"SQLText\\": \\"/* Query from *** by user 111 */ SELECT sleep(20)\\",\\n        \\"ReturnRowCounts\\": 0,\\n        \\"ParseRowCounts\\": 0,\\n        \\"DBName\\": \\"testdb\\",\\n        \\"LockTimes\\": 0,\\n        \\"DBNodeId\\": \\"pi-*****************\\",\\n        \\"QueryTimeMS\\": 100\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"polardb_mysql\\"\\n}","type":"json"}]',
      'title' => '查看慢日志明细',
      'summary' => '查看PolarDB集群的慢日志明细。',
      'description' => '>- 仅PolarDB MySQL版集群支持调用该接口。
>- 自2023年12月13日起，由于慢SQL的模板化算法优化，调用本接口时，SQLHASH字段的值将发生变更。详情请参见[【通知】慢SQL的模板化算法优化](~~2637024~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSlowLogs' => 
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
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始日期，格式：yyyy-MM-ddZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-01Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束日期，不能小于查询开始日期，与查询开始日期间隔不超过31天。格式：yyyy-MM-ddZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-30Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'PolarDB_MySQL',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：30~100。默认值：30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
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
            'maximum' => '2147483647',
            'minimum' => '1',
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
                'example' => '5',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页SQL语句个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6',
              ),
              'EndTime' => 
              array (
                'description' => '查询结束日期。',
                'type' => 'string',
                'example' => '2021-05-30Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2553A660-E4EB-4AF4-A402-8AFF70A49143',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始日期。',
                'type' => 'string',
                'example' => '2021-05-01Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-****************',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SQLSlowLog' => 
                  array (
                    'description' => '慢日志信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SQLText' => 
                        array (
                          'description' => 'SQL语句。',
                          'type' => 'string',
                          'example' => 'select id,name from tb_table',
                        ),
                        'ReturnMaxRowCount' => 
                        array (
                          'description' => '返回的SQL行数（最大值）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '数据生成日期。',
                          'type' => 'string',
                          'example' => '2021-05-30Z',
                        ),
                        'MaxExecutionTime' => 
                        array (
                          'description' => '执行时长（最大值），单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '60',
                        ),
                        'ParseTotalRowCounts' => 
                        array (
                          'description' => '解析的SQL行数（总值）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'TotalLockTimes' => 
                        array (
                          'description' => '锁定时长（总值），单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'TotalExecutionTimes' => 
                        array (
                          'description' => '执行时长（总值），单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'DBNodeId' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'pi-***************',
                        ),
                        'SQLHASH' => 
                        array (
                          'description' => '慢日志统计里的SQL语句唯一标识符，可用于获取该SQL语句的慢日志明细。',
                          'type' => 'string',
                          'example' => 'U2FsdGVkxxxx',
                        ),
                        'ParseMaxRowCount' => 
                        array (
                          'description' => '解析的SQL行数（最大值）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'MaxLockTime' => 
                        array (
                          'description' => '锁定时长（最大值），单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ReturnTotalRowCounts' => 
                        array (
                          'description' => '返回的SQL行数（总值）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'PolarDB_MySQL',
                        ),
                        'TotalExecutionCounts' => 
                        array (
                          'description' => '执行次数（总值）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎。',
                'type' => 'string',
                'example' => 'polardb_mysql',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 5,\\n  \\"PageRecordCount\\": 6,\\n  \\"EndTime\\": \\"2021-05-30Z\\",\\n  \\"RequestId\\": \\"2553A660-E4EB-4AF4-A402-8AFF70A49143\\",\\n  \\"PageNumber\\": 3,\\n  \\"StartTime\\": \\"2021-05-01Z\\",\\n  \\"DBClusterId\\": \\"pc-****************\\",\\n  \\"Items\\": {\\n    \\"SQLSlowLog\\": [\\n      {\\n        \\"SQLText\\": \\"select id,name from tb_table\\",\\n        \\"ReturnMaxRowCount\\": 3,\\n        \\"CreateTime\\": \\"2021-05-30Z\\",\\n        \\"MaxExecutionTime\\": 60,\\n        \\"ParseTotalRowCounts\\": 2,\\n        \\"TotalLockTimes\\": 1,\\n        \\"TotalExecutionTimes\\": 2,\\n        \\"DBNodeId\\": \\"pi-***************\\",\\n        \\"SQLHASH\\": \\"U2FsdGVkxxxx\\",\\n        \\"ParseMaxRowCount\\": 1,\\n        \\"MaxLockTime\\": 1,\\n        \\"ReturnTotalRowCounts\\": 1,\\n        \\"DBName\\": \\"PolarDB_MySQL\\",\\n        \\"TotalExecutionCounts\\": 2\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"polardb_mysql\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogsResponse>\\n    <TotalRecordCount>5</TotalRecordCount>\\n    <PageRecordCount>6</PageRecordCount>\\n    <EndTime>2021-05-30Z</EndTime>\\n    <RequestId>2553A660-E4EB-4AF4-A402-8AFF70A49143</RequestId>\\n    <PageNumber>3</PageNumber>\\n    <StartTime>2021-05-01Z</StartTime>\\n    <DBClusterId>pc-****************</DBClusterId>\\n    <Items>\\n        <SQLText>select id,name from tb_table</SQLText>\\n        <ReturnMaxRowCount>3</ReturnMaxRowCount>\\n        <CreateTime>2021-05-30Z</CreateTime>\\n        <MaxExecutionTime>60</MaxExecutionTime>\\n        <ParseTotalRowCounts>2</ParseTotalRowCounts>\\n        <TotalLockTimes>1</TotalLockTimes>\\n        <TotalExecutionTimes>2</TotalExecutionTimes>\\n        <DBNodeId>pi-***************</DBNodeId>\\n        <SQLHASH>U2FsdGVkxxxx</SQLHASH>\\n        <ParseMaxRowCount>1</ParseMaxRowCount>\\n        <MaxLockTime>1</MaxLockTime>\\n        <ReturnTotalRowCounts>1</ReturnTotalRowCounts>\\n        <DBName>PolarDB_MySQL</DBName>\\n        <TotalExecutionCounts>2</TotalExecutionCounts>\\n    </Items>\\n    <Engine>polardb_mysql</Engine>\\n</DescribeSlowLogsResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群的慢日志统计信息',
      'summary' => '查询PolarDB集群的慢日志统计信息。',
      'description' => '>-  仅PolarDB MySQL版支持该接口。
>- 自2023年12月13日起，由于慢SQL的模板化算法优化，调用本接口时，SQLHASH字段的值将发生变更。详情请参见[【通知】慢SQL的模板化算法优化](~~2637024~~)。',
    ),
    'DescribeDBClusterAuditLogCollector' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CollectorStatus' => 
              array (
                'description' => 'SQL采集功能的状态，取值范围如下：
* Enable：开启。
* Disabled：关闭。',
                'type' => 'string',
                'example' => 'Disabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59011D2B-2A38-4207-A86C-72BC1F882D19',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CollectorStatus\\": \\"Disabled\\",\\n  \\"RequestId\\": \\"59011D2B-2A38-4207-A86C-72BC1F882D19\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAuditLogCollectorResponse>\\n<CollectorStatus>Disabled</CollectorStatus>\\n<RequestId>59011D2B-2A38-4207-A86C-72BC1F******</RequestId>\\n</DescribeDBClusterAuditLogCollectorResponse>","errorExample":""}]',
      'title' => '查询集群SQL采集功能',
      'summary' => '查询PolarDB集群的SQL采集功能（例如审计日志、SQL洞察等）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterAuditLogCollector' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'CollectorStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭SQL采集功能，取值范围如下：

- Enable ：开启。
- Disabled ：关闭。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'example' => '22C0ACF0-DD29-4B67-9190-B7A48C******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterStatus',
            'errorMessage' => 'The operation is not permitted due to status of cluster.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"22C0ACF0-DD29-4B67-9190-B7A48C******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterAuditLogCollectorResponse>\\r\\n<RequestId>22C0ACF0-DD29-4B67-9190-B7A48C******</RequestId>\\r\\n</ModifyDBClusterAuditLogCollectorResponse>","errorExample":""}]',
      'title' => '开启或关闭集群的SQL采集功能',
      'summary' => '开启或关闭PolarDB集群的SQL采集功能（例如审计日志、SQL洞察等）。',
      'description' => '> 如果集群所在地域支持开启DAS企业版，使用该接口开启SQL审计功能时，默认开启该地域支持的最新的DAS企业版。DAS企业版各个版本支持的数据库引擎和地域请参见[DAS企业版支持的数据引擎和地域](~~156204~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccount' => 
    array (
      'summary' => '创建PolarDB数据库账号。',
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
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称，需符合如下要求：

* 以小写字母开头，以字母或数字结尾。
* 由小写字母、数字或下划线组成。
* 长度为2~16个字符。
* 不能使用某些预留的用户名，如root、admin等。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号密码，需符合如下要求：
* 至少包含大写字母、小写字母、数字或特殊字符中的任意三种。
* 长度为8~32个字符。
* 特殊字符为`!@#$%^&*()_+-=`。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Test1111',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号类型，取值范围如下：

- **Normal**：普通账号。 
- **Super**：高权限账号。 


 
> * 若该参数留空，则默认创建**Super**账号。
> * 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，每个集群允许创建多个高权限账号，高权限账号相比普通账号拥有更多权限，创建数据库账号详情参见[创建数据库账号](~~68508~~)。
> * 当集群为PolarDB MySQL版时，每个集群最多只允许创建1个高权限账号，高权限账号相比普通账号拥有更多权限，创建数据库账号详情参见[创建数据库账号](~~68508~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
            'default' => 'Super',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号备注说明，需满足如下要求：

- 不能以`http://`或`https://`开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdes',
          ),
        ),
        5 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许目标账号访问的数据库名称，支持传入多个数据库名称，多个数据库名称间用英文逗号（,）分隔。

> 仅PolarDB MySQL版集群的普通账号支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
            'maxLength' => 6400,
            'minLength' => 0,
          ),
        ),
        6 => 
        array (
          'name' => 'AccountPrivilege',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号权限，取值范围如下： 

* **ReadWrite**：读写
* **ReadOnly**：只读
* **DMLOnly**：只允许DML
* **DDLOnly**：只允许DDL
*  **ReadIndex**：只读+索引

>* 必须要传入`DBName`参数，`AccountPrivilege`才能生效。
>* 若为`DBName`参数传入了多个数据库名称，您需要为目标数据库分别授予相应的权限，多个账号权限之间使用英文逗号（,）分隔，且需保证`AccountPrivilege`的字符串长度不超过900。例如，需要授权数据库DB1读写权限，授权数据库DB2只读权限，您需要设置`DBName`为`DB1,DB2`，并设置`AccountPrivilege`为`ReadWrite,ReadOnly`。
> * 仅PolarDB MySQL版集群的普通账号支持设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ReadWrite',
            'maxLength' => 900,
            'minLength' => 0,
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
        8 => 
        array (
          'name' => 'PrivForAllDB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否授权当前集群所有库及后续新增所有库的权限。取值范围如下：

- **0或不填**：不授权。

- **1**：授权。',
            'type' => 'string',
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
                'example' => 'CED079B7-A408-41A1-BFF1-EC608E******',
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
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
          1 => 
          array (
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'The specified parameter AccountPassword is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountType.Malformed',
            'errorMessage' => 'The specified parameter AccountType is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Malformed',
            'errorMessage' => 'The specified parameter AccountDescription is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidAccountPrivilege.Malformed',
            'errorMessage' => 'The specified parameter AccountPrivilege is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CED079B7-A408-41A1-BFF1-EC608E******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<CreateAccountResponse>\\r\\n<RequestId>CED079B7-A408-41A1-BFF1-EC608E******</RequestId>\\r\\n</CreateAccountResponse>","errorExample":"<CreateAccountResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CreateAccountResponse>"}]',
      'title' => '创建PolarDB数据库账号',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckAccountName' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_acc',
          ),
        ),
      ),
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
                'example' => '925B84D9-CA72-432C-95CF-738C22******',
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
            'errorCode' => 'InvalidAccountName.Duplicate',
            'errorMessage' => 'The specified account name already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"925B84D9-CA72-432C-95CF-738C22******\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckAccountNameResponse>\\r\\n<RequestId>925B84D9-CA72-432C-95CF-738C22******</RequestId>\\r\\n</CheckAccountNameResponse>","errorExample":""}]',
      'title' => '校验账号是否合法',
      'summary' => '校验账号名称是否合法或当前集群中是否已存在重名的账号。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '* 若输入的账号名称不合法，会返回错误信息`Specified account name is not valid`。
* 若输入的账号名称与已有账号名称重复，会返回错误信息`The specified account name already exists`。',
      'extraInfo' => ' ',
    ),
    'DescribeAccounts' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_acc',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数。默认值为**1**。',
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
            'description' => '每页记录数，取值范围：
* **30**
* **50**
* **100**

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
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
                'description' => '本页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '155462B9-205F-4FFC-BB43-4855FE******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Accounts' => 
              array (
                'description' => '账号信息详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccountStatus' => 
                    array (
                      'description' => '账号状态。取值范围：

- **Creating**：创建中。
- **Available**：可用。
- **Deleting**：删除中。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'DatabasePrivileges' => 
                    array (
                      'description' => '目标账号拥有的数据库权限详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DBName' => 
                          array (
                            'description' => '数据库名称。',
                            'type' => 'string',
                            'example' => 'DBtest',
                          ),
                          'AccountPrivilege' => 
                          array (
                            'description' => '账号权限。',
                            'type' => 'string',
                            'example' => 'ReadOnly',
                          ),
                        ),
                      ),
                    ),
                    'AccountDescription' => 
                    array (
                      'description' => '账号备注。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'AccountPasswordValidTime' => 
                    array (
                      'description' => '密码过期时间。',
                      'type' => 'string',
                      'example' => 'undefined',
                    ),
                    'AccountType' => 
                    array (
                      'description' => '账户类型。取值范围：

- **Normal**：普通账号。
- **Super**：高权限账号。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'AccountLockState' => 
                    array (
                      'description' => '账号锁定状态。取值范围：

- **UnLock**：未锁定。
- **Lock**：锁定。',
                      'type' => 'string',
                      'example' => 'UnLock',
                    ),
                    'AccountName' => 
                    array (
                      'description' => '账号名。',
                      'type' => 'string',
                      'example' => 'test_acc',
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
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'Database.ConnectError',
            'errorMessage' => 'db instance %s connect failed, please check instance status and database processlist',
          ),
          3 => 
          array (
            'errorCode' => 'Account.QueryError',
            'errorMessage' => 'Instance %s query account error',
          ),
          4 => 
          array (
            'errorCode' => 'Connect.Timeout',
            'errorMessage' => 'Service can not connect to instance temporarily.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"155462B9-205F-4FFC-BB43-4855FE******\\",\\n  \\"PageNumber\\": 1,\\n  \\"Accounts\\": [\\n    {\\n      \\"AccountStatus\\": \\"Available\\",\\n      \\"DatabasePrivileges\\": [\\n        {\\n          \\"DBName\\": \\"DBtest\\",\\n          \\"AccountPrivilege\\": \\"ReadOnly\\"\\n        }\\n      ],\\n      \\"AccountDescription\\": \\"test\\",\\n      \\"AccountPasswordValidTime\\": \\"undefined\\",\\n      \\"AccountType\\": \\"Normal\\",\\n      \\"AccountLockState\\": \\"UnLock\\",\\n      \\"AccountName\\": \\"test_acc\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>155462B9-205F-4FFC-BB43-4855FE******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Accounts>\\n        <AccountStatus>Available</AccountStatus>\\n        <DatabasePrivileges>\\n            <DBName>DBtest</DBName>\\n            <AccountPrivilege>ReadOnly</AccountPrivilege>\\n        </DatabasePrivileges>\\n        <AccountDescription>test</AccountDescription>\\n        <AccountPasswordValidTime>undefined</AccountPasswordValidTime>\\n        <AccountType>Normal</AccountType>\\n        <AccountLockState>UnLock</AccountLockState>\\n        <AccountName>test_acc</AccountName>\\n        <AccountPassword>Test1111</AccountPassword>\\n    </Accounts>\\n</DescribeAccountsResponse>","errorExample":""}]',
      'title' => '查询数据库账号信息',
      'summary' => '查询PolarDB集群的数据库账号信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
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
            'description' => '账号备注信息，备注信息需满足如下要求：
* 不能以`http://`或`https://`开头。
* 长度为2~256个字符。',
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\r\\n</ModifyAccountDescriptionResponse>","errorExample":"<ModifyAccountDescriptionResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</ModifyAccountDescriptionResponse>"}]',
      'title' => '修改数据库账号的备注信息',
      'summary' => '修改PolarDB数据库账号的备注信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GrantAccountPrivilege' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要授权的数据库名称。支持同时对一个或多个数据库授权，多个数据库名称之间用英文逗号（,）隔开。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'testdb_1,testdb_2',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPrivilege',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号权限，取值范围如下： 

* **ReadWrite**：读写
* **ReadOnly**：只读
* **DMLOnly**：只允许DML 
* **DDLOnly**：只允许DDL
* **ReadIndex**：只读+索引

> **AccountPrivilege**需与**DBName**输入的参数数量保持一致，且顺序对应。例如，输入**DBName**为`testdb_1,testdb_2`，**AccountPrivilege**为`ReadWrite,ReadOnly`，则表示授予目标账号对数据库**testdb_1**的**读写**权限，对数据库**testdb_2**的**只读**权限。',
            'type' => 'string',
            'required' => true,
            'example' => 'ReadWrite,ReadOnly',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627*****',
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
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
          1 => 
          array (
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
          2 => 
          array (
            'errorCode' => 'Account.UpdateError',
            'errorMessage' => 'Instance %s update Account %s error',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBName.Malformed',
            'errorMessage' => 'The specified parameter DBName is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidAccountPrivilege.Malformed',
            'errorMessage' => 'The specified parameter AccountPrivilege is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectAccountPrivilegeType',
            'errorMessage' => 'Current account privilege type does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627*****\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<GrantAccountPrivilegeResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627*****</RequestId>\\r\\n</GrantAccountPrivilegeResponse>","errorExample":"<GrantAccountPrivilegeResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</GrantAccountPrivilegeResponse>"}]',
      'title' => '授权普通账号访问某个数据库',
      'summary' => '授权普通账号访问PolarDB集群的某个数据库。',
      'description' => '>* 一个账号可关联一个或多个数据库。
>* 如果目标账号对指定数据库已经具有访问权限，则会直接返回成功。
>* 集群状态需要为运行中，否则操作将失败。
>* 目前仅支持PolarDB MySQL版。
>* 高权限账号默认拥有集群里所有数据库的权限，无需进行授权操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RevokeAccountPrivilege' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。

> 仅支持普通账号，不支持高权限账号。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。支持同时传入多个数据库，多个数据库名称之间用英文逗号（,）分隔。',
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
            'errorCode' => 'InvalidDBName.Malformed',
            'errorMessage' => 'The specified parameter DBName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<RevokeAccountPrivilegeResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\r\\n</RevokeAccountPrivilegeResponse>","errorExample":"<RevokeAccountPrivilegeResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</RevokeAccountPrivilegeResponse>"}]',
      'title' => '撤销账号对数据库的访问权限',
      'summary' => '移除PolarDB普通账号对数据库的访问权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetAccount' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。 

> 仅支持重置高权限账号。
',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号密码，密码需满足如下要求： 

- 大写字母、小写字母、数字、特殊字符至少占三种。 
- 长度为8~32位。
- 特殊字符为`!@#$%^&*()_+-=` 。

',
            'type' => 'string',
            'required' => false,
            'example' => 'Pw123456',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentTaskExceeded',
            'errorMessage' => 'The number of concurrent tasks exceeds the quota.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetAccountResponse>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\n</ResetAccountResponse>","errorExample":""}]',
      'title' => '重置高权限账号权限',
      'summary' => '重置PolarDB高权限账号。',
      'description' => '> * 仅支持重置PolarDB MySQL版集群的高权限账号。
> *  如果高权限账号自身出现问题，例如权限被意外回收（REVOKE ），您可以通过重置高权限账号的权限，使其恢复正常。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAccount' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
            'errorCode' => 'GdnRole.NotSupport',
            'errorMessage' => 'Specified gdn role is not support.',
          ),
          1 => 
          array (
            'errorCode' => 'ConcurrentTaskExceeded',
            'errorMessage' => 'Concurrent task exceeding the allowed amount.',
          ),
          2 => 
          array (
            'errorCode' => 'Account.DelError',
            'errorMessage' => 'Instance %s remove Account crawl_r error',
          ),
          3 => 
          array (
            'errorCode' => 'Connect.Timeout',
            'errorMessage' => 'Service can not connect to instance temporarily.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountActionForbidden',
            'errorMessage' => 'Some objects depend on the special account.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<DeleteAccountResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\r\\n</DeleteAccountResponse>","errorExample":"<DeleteAccountResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</DeleteAccountResponse>"}]',
      'title' => '删除数据库账号',
      'summary' => '删除PolarDB数据库账号。',
      'description' => '> 集群状态必须为运行中，否则操作将失败。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAccountPassword' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-************',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'NewAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号的新密码，需符合如下要求：
* 至少包含大写字母、小写字母、数字或特殊字符中的任意三种。
* 长度为8~32个字符。
* 特殊字符为`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => true,
            'example' => 'Pw123456',
          ),
        ),
        3 => 
        array (
          'name' => 'PasswordType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Tair',
          ),
        ),
      ),
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
          1 => 
          array (
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'The specified parameter AccountPassword is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<ModifyAccountPasswordResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\r\\n</ModifyAccountPasswordResponse>","errorExample":"<ResetAccountPasswordResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</ResetAccountPasswordResponse>"}]',
      'title' => '修改数据库的账号密码',
      'summary' => '修改PolarDB数据库的账号密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDatabase' => 
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
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称，名称需满足如下要求：
* 由小写字母、数字、中划线（-）、下划线（_）组成。
* 以字母开头，以字母或数字结尾，最长64个字符。 

> 请勿使用保留关键字作为数据库名称，如`test`、`mysql`等。',
            'type' => 'string',
            'required' => true,
            'example' => 'testDB',
          ),
        ),
        2 => 
        array (
          'name' => 'CharacterSetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '字符集。关于字符集的取值范围，请参见[字符集表](~~99716~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'utf8',
          ),
        ),
        3 => 
        array (
          'name' => 'DBDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库备注信息，备注信息需满足如下要求： 
* 不能以`http://`或`https://`开头。 
* 长度为2~256个字符。

> 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdesc',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权访问该数据库的账号名。可通过接口[DescribeAccounts](~~98107~~)查询账号信息。

> - 只支持输入普通账号，高权限账号默认拥有数据库全部权限无需授权。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'testacc',
          ),
        ),
        5 => 
        array (
          'name' => 'AccountPrivilege',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号权限，取值范围如下：
*  **ReadWrite**：读写。 
* **ReadOnly**：只读。 
* **DMLOnly**：只允许DML。 
* **DDLOnly**：只允许DDL。  
* **ReadIndex**：只读+索引。  

若该参数不填，则默认为**ReadWrite**。


> - 该参数仅当**AccountName**为非空值时生效。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；
> - 当集群为PolarDB MySQL版时，该参数非必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'ReadWrite',
          ),
        ),
        6 => 
        array (
          'name' => 'Collate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言环境设置，用于指定新建数据库的排序规则。

> - 语言环境必须与**CharacterSetName**参数设置的字符集兼容。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，不支持该参数。
关于该参数的取值范围，请登录PolarDB控制台，在**配置与管理** > **数据库管理**页签，单击**创建数据库**进行查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'C',
          ),
        ),
        7 => 
        array (
          'name' => 'Ctype',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言环境设置，用于指定数据库的字符分类。

> - 语言环境必须与**CharacterSetName**参数设置的字符集兼容。
> - 与**Collate**传入信息一致。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填；当集群为PolarDB MySQL版时，该参数非必填。
关于该参数的取值范围，请登录PolarDB控制台，在**配置与管理** > **数据库管理**页签，单击**创建数据库**进行查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'C',
          ),
        ),
      ),
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
                'example' => '93E98F25-BE02-40DA-83E3-F77F8D******',
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
            'errorCode' => 'InvalidDBName.Malformed',
            'errorMessage' => 'The specified parameter DBName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'Database.AddError',
            'errorMessage' => 'Instance %s add database minidoc error',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBDescription.Malformed',
            'errorMessage' => 'The specified parameter DBDescription is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountPrivilege.Malformed',
            'errorMessage' => 'The specified parameter AccountPrivilege is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93E98F25-BE02-40DA-83E3-F77F8D******\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDatabaseResponse>\\n    <RequestId>93E98F25-BE02-40DA-83E3-F77F8D******</RequestId>\\n</CreateDatabaseResponse>","errorExample":""}]',
      'title' => '为PolarDB集群创建一个新的数据库',
      'summary' => '为PolarDB集群创建一个新的数据库。',
      'description' => '集群必须满足以下条件，否则将创建失败：

- 当前集群状态：运行中。
- 当前集群锁定模式：正常。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDatabase' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBName',
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
                'description' => '请求ID。
',
                'type' => 'string',
                'example' => '2FED790E-FB61-4721-8C1C-07C627******',
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
            'errorCode' => 'InvalidDBName.Malformed',
            'errorMessage' => 'The specified parameter DBName is not valid.',
          ),
        ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<DeleteDatabaseResponse>\\r\\n<RequestId>2FED790E-FB61-4721-8C1C-07C627******</RequestId>\\r\\n</DeleteDatabaseResponse>","errorExample":"<DeleteDatabaseResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</DeleteDatabaseResponse>"}]',
      'title' => '删除PolarDB集群下的数据库',
      'summary' => '删除PolarDB集群下的数据库。',
      'description' => '> - 集群的状态必须为运行中且集群的锁定模式为正常，否则将无法成功删除目标数据库。
> - 系统会异步执行删除数据库的操作。如果数据库比较大，删除数据库耗时可能较长。接口返回成功仅代表删除数据库的请求下发成功，数据库是否已被成功删除，还需要通过查询集群上是否还存在该数据库来确定。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDatabases' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。

> 不支持填入多个数据库名称。',
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
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为**1**。',
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
            'description' => '每页记录数，取值范围如下：
* **30**
* **50**
* **100**

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
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
            'type' => 'object',
            'properties' => 
            array (
              'PageRecordCount' => 
              array (
                'description' => '本页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Databases' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Database' => 
                  array (
                    'description' => '数据库信息详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBDescription' => 
                        array (
                          'description' => '数据库备注。',
                          'type' => 'string',
                          'example' => 'test_des',
                        ),
                        'DBStatus' => 
                        array (
                          'description' => '数据库状态，取值范围如下： 

- **Creating**：创建中
- **Running**：使用中
- **Deleting**：删除中',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'test_db',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库引擎类型，取值范围如下：
* **MySQL**
* **Oracle**
* **PostgreSQL**

',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'MasterID' => 
                        array (
                          'description' => '多主集群（库表）版的数据库所对应的主节点ID。',
                          'type' => 'string',
                          'example' => '2',
                        ),
                        'CharacterSetName' => 
                        array (
                          'description' => '字符集，详情请参见[字符集表](~~99716~~)。  ',
                          'type' => 'string',
                          'example' => 'utf8mb4',
                        ),
                        'Accounts' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Account' => 
                            array (
                              'description' => '数据库账号信息详情。

> 当集群为PolarDB MySQL版时，不含高权限账号。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'PrivilegeStatus' => 
                                  array (
                                    'description' => '授权状态，取值范围如下： 

- **Empowering**：授权中
- **Empowered**：授权完成
- **Removing**：移除权限中',
                                    'type' => 'string',
                                    'example' => 'Empowered',
                                  ),
                                  'AccountStatus' => 
                                  array (
                                    'description' => '账号状态，取值范围如下： 

- **Creating**：创建中
- **Available**：可用
- **Deleting**：删除中',
                                    'type' => 'string',
                                    'example' => 'Available',
                                  ),
                                  'AccountPrivilege' => 
                                  array (
                                    'description' => '账号权限，取值范围如下：

* **ReadWrite**：读写
* **ReadOnly**：只读 
* **DMLOnly**：只允许DML
* **DDLOnly**：只允许DDL
* **ReadIndex**：只读+索引',
                                    'type' => 'string',
                                    'example' => 'ReadOnly',
                                  ),
                                  'AccountName' => 
                                  array (
                                    'description' => '账号名称。

> 当集群为PolarDB MySQL版时，不含高权限账号。',
                                    'type' => 'string',
                                    'example' => 'test_acc',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E1DF8CA6-2300-448B-9ABF-760C4B******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'Database.ConnectError',
            'errorMessage' => 'db instance %s connect failed, please check instance status and database processlist',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageRecordCount\\": 1,\\n  \\"Databases\\": {\\n    \\"Database\\": [\\n      {\\n        \\"DBDescription\\": \\"test_des\\",\\n        \\"DBStatus\\": \\"Running\\",\\n        \\"DBName\\": \\"test_db\\",\\n        \\"Engine\\": \\"MySQL\\",\\n        \\"MasterID\\": \\"2\\",\\n        \\"CharacterSetName\\": \\"utf8mb4\\",\\n        \\"Accounts\\": {\\n          \\"Account\\": [\\n            {\\n              \\"PrivilegeStatus\\": \\"Empowered\\",\\n              \\"AccountStatus\\": \\"Available\\",\\n              \\"AccountPrivilege\\": \\"ReadOnly\\",\\n              \\"AccountName\\": \\"test_acc\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"E1DF8CA6-2300-448B-9ABF-760C4B******\\",\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeDatabasesResponse>\\n    <PageRecordCount>1</PageRecordCount>\\n    <Databases>\\n        <DBDescription>test_des</DBDescription>\\n        <DBStatus>Running</DBStatus>\\n        <DBName>test_db</DBName>\\n        <Engine>MySQL</Engine>\\n        <MasterID>2</MasterID>\\n        <CharacterSetName>utf8mb4</CharacterSetName>\\n        <Accounts>\\n            <PrivilegeStatus>Empowered</PrivilegeStatus>\\n            <AccountStatus>Available</AccountStatus>\\n            <AccountPrivilege>ReadOnly</AccountPrivilege>\\n            <AccountName>test_acc</AccountName>\\n        </Accounts>\\n    </Databases>\\n    <RequestId>E1DF8CA6-2300-448B-9ABF-760C4B******</RequestId>\\n    <PageNumber>1</PageNumber>\\n</DescribeDatabasesResponse>","errorExample":""}]',
      'title' => '查询PolarDB指定集群的数据库详情',
      'summary' => '查询PolarDB指定集群的数据库详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCharacterSetName' => 
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
> 您可以通过[DescribeRegions](~~98041~~)接口查看可用地域。',
            'type' => 'string',
            'required' => true,
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
            'description' => '集群ID。
> 当前仅支持查看PolarDB MySQL版集群数据库支持的字符集列表。若输入PolarDB PostgreSQL版集群或PolarDB PostgreSQL版（兼容Oracle）集群的集群ID，`CharacterSetNameItems`会返回空值。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-****************',
          ),
        ),
      ),
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
                'example' => '34458CD3-33E0-4624-BFEF-840C15******',
              ),
              'CharacterSetNameItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CharacterSetName' => 
                  array (
                    'description' => '支持的字符集列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                      'example' => '{ "CharacterSetName": [       "utf8mb4",       "utf8",       "utf32",       "utf16le",       "utf16",       "ujis",       "ucs2",       "tis620",       "swe7",       "sjis",       "macroman",       "macce",       "latin7",       "latin5",       "latin2",       "latin1",       "koi8u",       "koi8r",       "keybcs2",       "hp8",       "hebrew",       "greek",       "geostd8",       "gbk",       "gb2312",       "euckr",       "eucjpms",       "dec8",       "cp932",       "cp866",       "cp852",       "cp850",       "cp1257",       "cp1256",       "cp1251",       "cp1250",       "binary",       "big5",       "ascii",       "armscii8" ]  }',
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '集群引擎。',
                'type' => 'string',
                'example' => 'POLARDB',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"34458CD3-33E0-4624-BFEF-840C15******\\",\\n  \\"CharacterSetNameItems\\": {\\n    \\"CharacterSetName\\": [\\n      \\"{ \\\\\\"CharacterSetName\\\\\\": [       \\\\\\"utf8mb4\\\\\\",       \\\\\\"utf8\\\\\\",       \\\\\\"utf32\\\\\\",       \\\\\\"utf16le\\\\\\",       \\\\\\"utf16\\\\\\",       \\\\\\"ujis\\\\\\",       \\\\\\"ucs2\\\\\\",       \\\\\\"tis620\\\\\\",       \\\\\\"swe7\\\\\\",       \\\\\\"sjis\\\\\\",       \\\\\\"macroman\\\\\\",       \\\\\\"macce\\\\\\",       \\\\\\"latin7\\\\\\",       \\\\\\"latin5\\\\\\",       \\\\\\"latin2\\\\\\",       \\\\\\"latin1\\\\\\",       \\\\\\"koi8u\\\\\\",       \\\\\\"koi8r\\\\\\",       \\\\\\"keybcs2\\\\\\",       \\\\\\"hp8\\\\\\",       \\\\\\"hebrew\\\\\\",       \\\\\\"greek\\\\\\",       \\\\\\"geostd8\\\\\\",       \\\\\\"gbk\\\\\\",       \\\\\\"gb2312\\\\\\",       \\\\\\"euckr\\\\\\",       \\\\\\"eucjpms\\\\\\",       \\\\\\"dec8\\\\\\",       \\\\\\"cp932\\\\\\",       \\\\\\"cp866\\\\\\",       \\\\\\"cp852\\\\\\",       \\\\\\"cp850\\\\\\",       \\\\\\"cp1257\\\\\\",       \\\\\\"cp1256\\\\\\",       \\\\\\"cp1251\\\\\\",       \\\\\\"cp1250\\\\\\",       \\\\\\"binary\\\\\\",       \\\\\\"big5\\\\\\",       \\\\\\"ascii\\\\\\",       \\\\\\"armscii8\\\\\\" ]  }\\"\\n    ]\\n  },\\n  \\"Engine\\": \\"POLARDB\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeCharacterSetNameResponse>\\n    <RequestId>97942193-2BB9-1FCF-8477-D4632BD166A7</RequestId>\\n    <CharacterSetNameItems>\\n        <CharacterSetName>utf8mb4</CharacterSetName>\\n        <CharacterSetName>utf8</CharacterSetName>\\n        <CharacterSetName>utf32</CharacterSetName>\\n        <CharacterSetName>utf16le</CharacterSetName>\\n        <CharacterSetName>utf16</CharacterSetName>\\n        <CharacterSetName>ujis</CharacterSetName>\\n        <CharacterSetName>ucs2</CharacterSetName>\\n        <CharacterSetName>tis620</CharacterSetName>\\n        <CharacterSetName>swe7</CharacterSetName>\\n        <CharacterSetName>sjis</CharacterSetName>\\n        <CharacterSetName>macroman</CharacterSetName>\\n        <CharacterSetName>macce</CharacterSetName>\\n        <CharacterSetName>latin7</CharacterSetName>\\n        <CharacterSetName>latin5</CharacterSetName>\\n        <CharacterSetName>latin2</CharacterSetName>\\n        <CharacterSetName>latin1</CharacterSetName>\\n        <CharacterSetName>koi8u</CharacterSetName>\\n        <CharacterSetName>koi8r</CharacterSetName>\\n        <CharacterSetName>keybcs2</CharacterSetName>\\n        <CharacterSetName>hp8</CharacterSetName>\\n        <CharacterSetName>hebrew</CharacterSetName>\\n        <CharacterSetName>greek</CharacterSetName>\\n        <CharacterSetName>geostd8</CharacterSetName>\\n        <CharacterSetName>gbk</CharacterSetName>\\n        <CharacterSetName>gb2312</CharacterSetName>\\n        <CharacterSetName>euckr</CharacterSetName>\\n        <CharacterSetName>eucjpms</CharacterSetName>\\n        <CharacterSetName>dec8</CharacterSetName>\\n        <CharacterSetName>cp932</CharacterSetName>\\n        <CharacterSetName>cp866</CharacterSetName>\\n        <CharacterSetName>cp852</CharacterSetName>\\n        <CharacterSetName>cp850</CharacterSetName>\\n        <CharacterSetName>cp1257</CharacterSetName>\\n        <CharacterSetName>cp1256</CharacterSetName>\\n        <CharacterSetName>cp1251</CharacterSetName>\\n        <CharacterSetName>cp1250</CharacterSetName>\\n        <CharacterSetName>binary</CharacterSetName>\\n        <CharacterSetName>big5</CharacterSetName>\\n        <CharacterSetName>ascii</CharacterSetName>\\n        <CharacterSetName>armscii8</CharacterSetName>\\n    </CharacterSetNameItems>\\n    <Engine>POLARDB</Engine>\\n</DescribeCharacterSetNameResponse>","errorExample":""}]',
      'title' => '查看数据库支持的字符集列表',
      'summary' => '查看PolarDB MySQL版数据库支持的字符集列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDBName' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_db',
          ),
        ),
      ),
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
                'example' => 'CDB3258F-B5DE-43C4-8935-CBA0CA******',
              ),
              'DBName' => 
              array (
                'description' => '数据库名称',
                'type' => 'string',
                'example' => 'test_db',
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
            'errorCode' => 'InvalidDBName.Duplicate',
            'errorMessage' => 'The specified DB name already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDB3258F-B5DE-43C4-8935-CBA0CA******\\",\\n  \\"DBName\\": \\"test_db\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckDBNameResponse>\\r\\n<RequestId>CDB3258F-B5DE-43C4-8935-CBA0CA******</RequestId>\\r\\n</CheckDBNameResponse>","errorExample":""}]',
      'title' => '校验数据库名称是否合法',
      'summary' => '校验数据库名称是否合法或当前集群中是否已存在重名的数据库。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '* 若输入的数据库名称不合法，会返回错误信息`Specified DB name is not valid`。
* 若输入的数据库名称与已有数据库名称重复，会返回错误信息`Specified DB name already exists`。',
      'extraInfo' => ' ',
    ),
    'DescribeDBInitializeVariable' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。

> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下的所有集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Variables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Variable' => 
                  array (
                    'description' => '结果集。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Charset' => 
                        array (
                          'description' => '支持的字符集。',
                          'type' => 'string',
                          'example' => 'EUC_CN',
                        ),
                        'Collate' => 
                        array (
                          'description' => '语言环境设置，用于指定新建数据库的排序规则。

> - 语言环境必须与**CharacterSetName**参数设置的字符集兼容。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填。

关于该参数的取值范围，请登录PolarDB控制台，在**配置与管理** > **数据库管理**页签，单击**创建数据库**进行查看。',
                          'type' => 'string',
                          'example' => 'C',
                        ),
                        'Ctype' => 
                        array (
                          'description' => '语言环境设置，用于指定数据库的字符分类。

> - 语言环境必须与**CharacterSetName**参数设置的字符集兼容。
> - 与**Collate**传入信息一致。
> - 当集群为PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版时，该参数必填。

关于该参数的取值范围，请登录PolarDB控制台，在**配置与管理** > **数据库管理**页签，单击**创建数据库**进行查看。',
                          'type' => 'string',
                          'example' => 'C',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBVersion' => 
              array (
                'description' => '数据库版本。',
                'type' => 'string',
                'example' => '11',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '475F58B7-F394-4394-AA6E-4F1CBA******',
              ),
              'DBType' => 
              array (
                'description' => '数据库类型，取值如下：

- Oracle
- PostgreSQL',
                'type' => 'string',
                'example' => 'PostgreSQL',
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
            'errorCode' => 'InvalidDBType.Malformed',
            'errorMessage' => 'The Specified DBType is not valid.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Variables\\": {\\n    \\"Variable\\": [\\n      {\\n        \\"Charset\\": \\"EUC_CN\\",\\n        \\"Collate\\": \\"C\\",\\n        \\"Ctype\\": \\"C\\"\\n      }\\n    ]\\n  },\\n  \\"DBVersion\\": \\"11\\",\\n  \\"RequestId\\": \\"475F58B7-F394-4394-AA6E-4F1CBA******\\",\\n  \\"DBType\\": \\"PostgreSQL\\"\\n}","errorExample":""},{"type":"xml","example":"<ResponseResponse>\\r\\n\\t<Variables>\\r\\n\\t\\t<Variable>\\r\\n\\t\\t\\t<Charset>EUC_CN</Charset>\\r\\n\\t\\t\\t<Collate>C</Collate>\\r\\n\\t\\t\\t<Ctype>C</Ctype>\\r\\n\\t\\t</Variable>\\r\\n\\t\\t<Variable>\\r\\n\\t\\t\\t<Charset>EUC_CN</Charset>\\r\\n\\t\\t\\t<Collate>POSIX</Collate>\\r\\n\\t\\t\\t<Ctype>POSIX</Ctype>\\r\\n\\t\\t</Variable>\\r\\n\\t</Variables>\\r\\n\\t<DBVersion>11</DBVersion>\\r\\n\\t<RequestId>475F58B7-F394-4394-AA6E-4F1CBA1F2FE8</RequestId>\\r\\n\\t<DBType>PostgreSQL</DBType>\\r\\n</ResponseResponse>","errorExample":""}]',
      'title' => '查询数据库属性',
      'summary' => '查询PolarDB PostgreSQL版（兼容Oracle）或PolarDB PostgreSQL版数据库支持的字符集、排序规则等属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBDescription' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testDB',
          ),
        ),
        2 => 
        array (
          'name' => 'DBDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库备注说明，备注说明需满足如下要求： 
* 不能以`http://`或`https://`开头。 
* 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DBDesc',
          ),
        ),
      ),
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
                'example' => '5F295AAB-B599-4F0E-96D0-DBFAB3******',
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
            'errorCode' => 'InvalidDBDescription.Malformed',
            'errorMessage' => 'The specified parameter DBDescription is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F295AAB-B599-4F0E-96D0-DBFAB3******\\"\\n}","errorExample":"{\\n   \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}"},{"type":"xml","example":"<ModifyDBDescriptionResponse>\\r\\n<RequestId>5F295AAB-B599-4F0E-96D0-DBFAB3******</RequestId>\\r\\n</ModifyDBDescriptionResponse>","errorExample":"<CheckDBNameResponse>  \\n     <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n</CheckDBNameResponse>"}]',
      'title' => '修改数据库备注说明',
      'summary' => '修改PolarDB MySQL版数据库的备注说明。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateGlobalDatabaseNetwork' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-bp1q76364ird*****',
          ),
        ),
        1 => 
        array (
          'name' => 'GDNDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN备注描述。要求如下：

- 不能以http://或https://开头。

- 必须以大小写字母或中文开头。

- 可以包含大小写字母、中文、数字、下划线（_）或连字符（-）。

- 长度为2~126个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'GDN-fortest',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'GDNId' => 
              array (
                'description' => 'GDN ID。',
                'type' => 'string',
                'example' => 'gd-m5ex5wqfqbou*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C61892A4-0850-4516-9E26-44D96C1782DE',
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
            'errorCode' => 'MemberIns.Exist',
            'errorMessage' => 'Specified member ins already exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Unsupported',
            'errorMessage' => 'The specified engineVersion is not supported.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"GDNId\\": \\"gd-m5ex5wqfqbou*****\\",\\n  \\"RequestId\\": \\"C61892A4-0850-4516-9E26-44D96C1782DE\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGlobalDatabaseNetworkResponse>\\n    <GDNId>gd-m5ex5wqfqbou*****</GDNId>\\n    <RequestId>C61892A4-0850-4516-9E26-44D96C1782DE</RequestId>\\n</CreateGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '新建全球数据库网络',
      'summary' => '创建一个新的全球数据库网络（GDN）。',
      'description' => '> 一个集群只能归属于一个GDN。',
    ),
    'DeleteGlobalDatabaseNetwork' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => 'C61892A4-0850-4516-9E26-44D96C1782DE',
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
            'errorCode' => 'MemberNumber.NotSupport',
            'errorMessage' => 'Specified member numbers are not support.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'GDN.NotFound',
            'errorMessage' => 'Failed to found GdnInstance by name:%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C61892A4-0850-4516-9E26-44D96C1782DE\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGlobalDatabaseNetworkResponse>\\n    <RequestId>C61892A4-0850-4516-9E26-44D96C1782DE</RequestId>\\n</DeleteGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '删除全球数据库网络',
      'summary' => '删除全球数据库网络（GDN）。',
      'description' => '> 当GDN中仅包含一个主集群时，该GDN才允许被删除。',
    ),
    'DescribeGlobalDatabaseNetwork' => 
    array (
      'summary' => '查询全球数据库网络（GDN）详情。',
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
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'GDNStatus' => 
              array (
                'description' => 'GDN的状态。取值：

- **creating**：创建中

- **active**：运行中

- **deleting**：删除中

- **locked**：锁定中（此时无法对GDN下的任一集群执行任何操作）

- **removing_member**：从集群正在脱离GDN',
                'type' => 'string',
                'example' => 'active',
              ),
              'Connections' => 
              array (
                'description' => '链接信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConnectionString' => 
                    array (
                      'description' => '链接地址。',
                      'type' => 'string',
                      'example' => 'abc.polardb.rds.aliyuncs.com',
                    ),
                    'NetType' => 
                    array (
                      'description' => '网络类型。',
                      'type' => 'string',
                      'example' => 'Private',
                    ),
                    'Port' => 
                    array (
                      'description' => '链接地址的端口号。',
                      'type' => 'string',
                      'example' => '3306',
                    ),
                  ),
                ),
              ),
              'DBVersion' => 
              array (
                'description' => '数据库引擎版本。当前仅支持8.0版本。',
                'type' => 'string',
                'example' => '8.0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '67F2E75F-AE67-4FB2-821F-A81237EACD15',
              ),
              'GDNId' => 
              array (
                'description' => 'GDN ID。',
                'type' => 'string',
                'example' => 'gdn-bp1fttxsrmv*****',
              ),
              'CreateTime' => 
              array (
                'description' => 'GDN的创建时间。',
                'type' => 'string',
                'example' => '2020-02-24T11:57:54Z',
              ),
              'DBType' => 
              array (
                'description' => '数据库引擎类型。当前仅支持MySQL类型。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'GDNDescription' => 
              array (
                'description' => 'GDN备注描述。要求如下：

- 不能以http://或https://开头。

- 必须以大小写字母或中文开头。

- 可以包含大小写字母、中文、数字、下划线（_）或连字符（-）。

- 长度为2~126个字符。',
                'type' => 'string',
                'example' => 'GDN-fortest',
              ),
              'DBClusters' => 
              array (
                'description' => 'GDN中包含的集群。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReplicaLag' => 
                    array (
                      'description' => '主从集群间跨地域的复制延迟时间。单位为秒。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '集群到期时间。

> 仅付费方式为**Prepaid**（包年包月）的集群会返回具体参数值，**Postpaid**（按量付费）集群则返回空值。',
                      'type' => 'string',
                      'example' => '2020-11-14T16:00:00Z',
                    ),
                    'Expired' => 
                    array (
                      'description' => '集群是否到期。

- **true**：是

- **false**：否

> 仅付费方式为**Prepaid**（包年包月）的集群支持返回该参数。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'DBNodeClass' => 
                    array (
                      'description' => '数据库节点规格。',
                      'type' => 'string',
                      'example' => 'polar.mysql.x4.large',
                    ),
                    'PayType' => 
                    array (
                      'description' => '付费类型：

- **Postpaid**：按量付费。

- **Prepaid**：预付费（包年包月）。',
                      'type' => 'string',
                      'example' => 'Prepaid',
                    ),
                    'DBType' => 
                    array (
                      'description' => '数据库引擎类型。当前仅支持MySQL类型。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本。当前仅支持8.0版本。',
                      'type' => 'string',
                      'example' => '8.0',
                    ),
                    'DBClusterId' => 
                    array (
                      'description' => 'GDN中的集群ID。',
                      'type' => 'string',
                      'example' => 'pc-wz9fb5nn44u1d****',
                    ),
                    'DBClusterStatus' => 
                    array (
                      'description' => 'GDN中的集群状态。具体请参见[集群状态表](~~99286~~)。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'StorageUsed' => 
                    array (
                      'description' => '存储空间的使用量，单位为Byte。',
                      'type' => 'string',
                      'example' => '3012558848',
                    ),
                    'DBClusterDescription' => 
                    array (
                      'description' => '集群描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Role' => 
                    array (
                      'description' => '集群角色。取值：

- **primary**：主集群

- **standby**：从集群

> 一个GDN中包含一个主集群和最多四个从集群。',
                      'type' => 'string',
                      'example' => 'primary',
                    ),
                    'ServerlessType' => 
                    array (
                      'description' => 'Serverless类型。当前取值固定为AgileServerless（敏态）。
>仅Serverless集群支持该参数。',
                      'type' => 'string',
                      'example' => 'AgileServerless',
                    ),
                    'DBNodes' => 
                    array (
                      'description' => '数据库节点的信息详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DBNodeClass' => 
                          array (
                            'description' => '数据库节点规格。',
                            'type' => 'string',
                            'example' => 'polar.mysql.x4.large',
                          ),
                          'ZoneId' => 
                          array (
                            'description' => '可用区ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou-i',
                          ),
                          'CreationTime' => 
                          array (
                            'description' => '数据库节点的创建时间。',
                            'type' => 'string',
                            'example' => '2020-03-23T21:35:43Z',
                          ),
                          'DBNodeRole' => 
                          array (
                            'description' => '数据库节点的角色。取值：

- **Writer**：主节点

- **Reader**：只读节点',
                            'type' => 'string',
                            'example' => 'Reader',
                          ),
                          'DBNodeStatus' => 
                          array (
                            'description' => '节点状态。取值：

- **Creating**：创建中

- **Running**：运行中

- **Deleting**：删除中

- **Rebooting**：重启中

- **ClassChanging**：正在变更节点规格

- **NetAddressCreating**：正在创建网络连接

- **NetAddressDeleting**：正在删除网络连接

- **NetAddressModifying**：正在修改网络连接

- **MinorVersionUpgrading**：小版本升级中

- **Maintaining**：集群维护中

- **Switching**：切换中',
                            'type' => 'string',
                            'example' => 'Running',
                          ),
                          'FailoverPriority' => 
                          array (
                            'description' => 'Failover优先级。每个节点都有一个Failover优先级，决定了当故障切换时，该节点被选举为主节点的概率高低。数值越大，优先级越高，取值范围为1~15。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'MaxConnections' => 
                          array (
                            'description' => '集群最大的并发连接数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '8000',
                          ),
                          'MaxIOPS' => 
                          array (
                            'description' => '最大I/O请求次数，即IOPS。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '32000',
                          ),
                          'DBNodeId' => 
                          array (
                            'description' => '数据库节点ID。',
                            'type' => 'string',
                            'example' => 'pi-****************',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID',
                'type' => 'string',
                'example' => 'rg-************',
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
            'errorCode' => 'GDN.NotFound',
            'errorMessage' => 'Failed to found GdnInstance by name:%s',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"GDNStatus\\": \\"active\\",\\n  \\"Connections\\": [\\n    {\\n      \\"ConnectionString\\": \\"abc.polardb.rds.aliyuncs.com\\",\\n      \\"NetType\\": \\"Private\\",\\n      \\"Port\\": \\"3306\\"\\n    }\\n  ],\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"RequestId\\": \\"67F2E75F-AE67-4FB2-821F-A81237EACD15\\",\\n  \\"GDNId\\": \\"gdn-bp1fttxsrmv*****\\",\\n  \\"CreateTime\\": \\"2020-02-24T11:57:54Z\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"GDNDescription\\": \\"GDN-fortest\\",\\n  \\"DBClusters\\": [\\n    {\\n      \\"ReplicaLag\\": \\"1\\",\\n      \\"ExpireTime\\": \\"2020-11-14T16:00:00Z\\",\\n      \\"Expired\\": \\"false\\",\\n      \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n      \\"PayType\\": \\"Prepaid\\",\\n      \\"DBType\\": \\"MySQL\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBVersion\\": \\"8.0\\",\\n      \\"DBClusterId\\": \\"pc-wz9fb5nn44u1d****\\",\\n      \\"DBClusterStatus\\": \\"Running\\",\\n      \\"StorageUsed\\": \\"3012558848\\",\\n      \\"DBClusterDescription\\": \\"test\\",\\n      \\"Role\\": \\"primary\\",\\n      \\"ServerlessType\\": \\"AgileServerless\\",\\n      \\"DBNodes\\": [\\n        {\\n          \\"DBNodeClass\\": \\"polar.mysql.x4.large\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n          \\"CreationTime\\": \\"2020-03-23T21:35:43Z\\",\\n          \\"DBNodeRole\\": \\"Reader\\",\\n          \\"DBNodeStatus\\": \\"Running\\",\\n          \\"FailoverPriority\\": 1,\\n          \\"MaxConnections\\": 8000,\\n          \\"MaxIOPS\\": 32000,\\n          \\"DBNodeId\\": \\"pi-****************\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\",\\n  \\"ResourceGroupId\\": \\"rg-************\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeGlobalDatabaseNetworkResponse>\\n    <GDNStatus>active</GDNStatus>\\n    <Connections>\\n        <ConnectionString>abc.polardb.rds.aliyuncs.com</ConnectionString>\\n        <NetType>Private</NetType>\\n        <Port>3306</Port>\\n    </Connections>\\n    <DBVersion>8.0</DBVersion>\\n    <RequestId>67F2E75F-AE67-4FB2-821F-A81237EACD15</RequestId>\\n    <GDNId>gdn-bp1fttxsrmv*****</GDNId>\\n    <CreateTime>2020-02-24T11:57:54Z</CreateTime>\\n    <DBType>MySQL</DBType>\\n    <GDNDescription>GDN-fortest</GDNDescription>\\n    <DBClusters>\\n        <ReplicaLag>1</ReplicaLag>\\n        <ExpireTime>2020-11-14T16:00:00Z</ExpireTime>\\n        <Expired>false</Expired>\\n        <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n        <PayType>Prepaid</PayType>\\n        <DBType>MySQL</DBType>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DBVersion>8.0</DBVersion>\\n        <DBClusterId>pc-wz9fb5nn44u1d****</DBClusterId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <StorageUsed>3012558848</StorageUsed>\\n        <DBClusterDescription>test</DBClusterDescription>\\n        <Role>primary</Role>\\n        <DBNodes>\\n            <DBNodeClass>polar.mysql.x4.large</DBNodeClass>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <CreationTime>2020-03-23T21:35:43Z</CreationTime>\\n            <DBNodeRole>Reader</DBNodeRole>\\n            <DBNodeStatus>Running</DBNodeStatus>\\n            <FailoverPriority>1</FailoverPriority>\\n            <MaxConnections>8000</MaxConnections>\\n            <MaxIOPS>32000</MaxIOPS>\\n            <DBNodeId>pi-****************</DBNodeId>\\n        </DBNodes>\\n    </DBClusters>\\n</DescribeGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '查询全球数据库网络',
    ),
    'DescribeGlobalDatabaseNetworks' => 
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
          'name' => 'FilterRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询可以在指定Region创建从集群的GDN列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。默认值为30，取值如下：

  - 30
  - 50
  - 100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。默认值为1，取值为大于0且不超过Integer数据类型的最大值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'GDNDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN描述。要求如下：

- 不能以http://或https://开头。

- 必须以大小写字母或中文开头。

- 可以包含大小写字母、中文、数字、下划线（_）或连字符（-）。

- 长度为2~126个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'gdn-****************',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
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
                'description' => '本页记录数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '69A85BAF-1089-4CDF-A82F-0A140F******',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => 'GDN详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本号，当前仅支持**8.0**版本。',
                      'type' => 'string',
                      'example' => '8.0',
                    ),
                    'GDNId' => 
                    array (
                      'description' => 'GDN ID。',
                      'type' => 'string',
                      'example' => 'gdn-****************',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => 'GDN创建时间，格式为`YYYY-MM-DDThh:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-03-23T05:46:54Z',
                    ),
                    'GDNStatus' => 
                    array (
                      'description' => 'GDN状态，取值范围如下：
* **creating**：创建中
* **active**：运行中
* **deleting**：删除中
* **locked**：锁定中（此时无法对GDN下的任一集群执行任何操作）
* **removing_member**：从集群正在脱离GDN',
                      'type' => 'string',
                      'example' => 'active',
                    ),
                    'DBClusters' => 
                    array (
                      'description' => 'GDN包含的各集群详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DBClusterId' => 
                          array (
                            'description' => '集群ID。',
                            'type' => 'string',
                            'example' => 'pc-****************',
                          ),
                          'Role' => 
                          array (
                            'description' => '集群角色，取值范围如下：
* **primary**：主集群
* **standby**：从集群

> 一个GDN中包含一个主集群和最多四个从集群。更多信息，请参见[全球数据库网络（GDN）](~~160381~~)。',
                            'type' => 'string',
                            'example' => 'primary',
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
                    'DBType' => 
                    array (
                      'description' => '数据库引擎类型，当前仅支持**MySQL**类型。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'GDNDescription' => 
                    array (
                      'description' => 'GDN描述。要求如下：

- 不能以http://或https://开头。

- 必须以大小写字母或中文开头。

- 可以包含大小写字母、中文、数字、下划线（_）或连字符（-）。

- 长度为2~126个字符。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 30,\\n  \\"RequestId\\": \\"69A85BAF-1089-4CDF-A82F-0A140F******\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"DBVersion\\": \\"8.0\\",\\n      \\"GDNId\\": \\"gdn-****************\\",\\n      \\"CreateTime\\": \\"2020-03-23T05:46:54Z\\",\\n      \\"GDNStatus\\": \\"active\\",\\n      \\"DBClusters\\": [\\n        {\\n          \\"DBClusterId\\": \\"pc-****************\\",\\n          \\"Role\\": \\"primary\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ],\\n      \\"DBType\\": \\"MySQL\\",\\n      \\"GDNDescription\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGlobalDatabaseNetworksResponse>\\n<TotalRecordCount>1</TotalRecordCount>\\n<PageRecordCount>30</PageRecordCount>\\n<RequestId>69A85BAF-1089-4CDF-A82F-0A140F******</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <GDNStatus>active</GDNStatus>\\n    <DBVersion>8.0</DBVersion>\\n    <GDNId>gdn-****************</GDNId>\\n    <CreateTime>2020-03-23T05:46:54Z</CreateTime>\\n    <GDNDescription>test</GDNDescription>\\n    <DBType>MySQL</DBType>\\n    <DBClusters>\\n        <Role>primary</Role>\\n        <DBClusterId>pc-****************</DBClusterId>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </DBClusters>\\n    <DBClusters>\\n        <Role>standby</Role>\\n        <DBClusterId>pc-****************</DBClusterId>\\n        <RegionId>cn-shanghai</RegionId>\\n    </DBClusters>\\n</Items>\\n</DescribeGlobalDatabaseNetworksResponse>","errorExample":""}]',
      'title' => '查看所有全球数据库网络（GDN）详情',
      'summary' => '查看账号下所有全球数据库网络（GDN）的详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyGlobalDatabaseNetwork' => 
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
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
        1 => 
        array (
          'name' => 'GDNDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN备注描述。要求如下：

- 不能以http://或https://开头。

- 必须以大小写字母或中文开头。

- 可以包含大小写字母、中文、数字、下划线（_）或连字符（-）。

- 长度为2~126个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'GDN-fortest',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => 'C61892A4-0850-4516-9E26-44D96C1782DE',
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
            'errorCode' => 'GDN.NotFound',
            'errorMessage' => 'Failed to found GdnInstance by name:%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C61892A4-0850-4516-9E26-44D96C1782DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyGlobalDatabaseNetworkResponse>\\n    <RequestId>C61892A4-0850-4516-9E26-44D96C1782DE</RequestId>\\n</ModifyGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '修改全球数据库网络',
      'summary' => '修改全球数据库网络（GDN）。',
    ),
    'RemoveDBClusterFromGDN' => 
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
            'description' => 'GDN中的集群ID。

> 您可以调用[DescribeGlobalDatabaseNetwork](~~264580~~)接口查看GDN中的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-wz9fb5nn44u1d****',
          ),
        ),
        1 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
      ),
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
                'example' => '67F2E75F-AE67-4FB2-821F-A81237EACD15',
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
            'errorCode' => 'MemberRole.NotSupport',
            'errorMessage' => 'Specified member role is not support.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'GDN.NotFound',
            'errorMessage' => 'Failed to found GdnInstance by name:%s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"67F2E75F-AE67-4FB2-821F-A81237EACD15\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveDBClusterFromGDNResponse>\\n    <RequestId>67F2E75F-AE67-4FB2-821F-A81237EACD15</RequestId>\\n</RemoveDBClusterFromGDNResponse>","errorExample":""}]',
      'title' => '从全球数据库网络（GDN）中移除从集群',
      'summary' => '从全球数据库网络（GDN）中移除从集群。',
      'description' => '> GDN中的主集群不可移除。',
    ),
    'SwitchOverGlobalDatabaseNetwork' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN中需要切换为主集群的集群ID。
您可以调用[DescribeGlobalDatabaseNetwork](~~264580~~)接口查看GDN中的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-wz9fb5nn44u1d****',
          ),
        ),
        2 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
        3 => 
        array (
          'name' => 'Forced',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制切换GDN的主从集群。取值范围：

- **true**：表示强制切换GDN的主从集群。

- **false**：表示不强制切换GDN的主从集群。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '67F2E75F-AE67-4FB2-821F-A81237EACD15',
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"67F2E75F-AE67-4FB2-821F-A81237EACD15\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchOverGlobalDatabaseNetworkResponse>\\n    <RequestId>67F2E75F-AE67-4FB2-821F-A81237EACD15</RequestId>\\n</SwitchOverGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '切换全球数据库网络',
      'summary' => '切换全球数据库网络（GDN）中的主从集群。',
    ),
    'ResetGlobalDatabaseNetwork' => 
    array (
      'summary' => '重建GDN中的从集群网络。',
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
            'example' => 'cn-qingdao',
          ),
        ),
        1 => 
        array (
          'name' => 'GDNId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'gdn-bp1fttxsrmv*****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GDN中的集群ID。
>您可以调用[DescribeGlobalDatabaseNetwork](~~264580~~)接口查看GDN中的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-wz9fb5nn44u1d****',
          ),
        ),
      ),
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
                'example' => '67F2E75F-AE67-4FB2-821F-A81237EACD15',
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
            'errorCode' => 'MemberRole.NotSupport',
            'errorMessage' => 'Specified member role is not support.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'GDN.NotFound',
            'errorMessage' => 'Failed to found GdnInstance by name:%s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"67F2E75F-AE67-4FB2-821F-A81237EACD15\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetGlobalDatabaseNetworkResponse>\\n    <RequestId>67F2E75F-AE67-4FB2-821F-A81237EACD15</RequestId>\\n</ResetGlobalDatabaseNetworkResponse>","errorExample":""}]',
      'title' => '重建GDN中的从集群网络',
    ),
    'CreateBackup' => 
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
            'example' => 'pc-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
      ),
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
                'example' => 'F3322AFE-083E-4D77-A074-421301******',
              ),
              'BackupJobId' => 
              array (
                'description' => '备份集ID。',
                'type' => 'string',
                'example' => '11111111',
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
            'errorCode' => 'InvalidBackupType.Malformed',
            'errorMessage' => 'The specified parameter BackupType is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackupMethod.Malformed',
            'errorMessage' => 'The specified parameter BackupMethod is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'BackupTimesExceeded',
            'errorMessage' => 'The maximum number of backups per day is exceeded.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F3322AFE-083E-4D77-A074-421301******\\",\\n  \\"BackupJobId\\": \\"11111111\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"4F780C2E-163A-42C2-9D8A-B5A0C823B1DB\\"\\n}"},{"type":"xml","example":"<CreateBackupResponse>\\n<RequestId>F3322AFE-083E-4D77-A074-421301******</RequestId>\\n<BackupJobId>11111111</BackupJobId>\\n</CreateBackupResponse>","errorExample":"<CreateBackupResponse>\\n<RequestId>4F780C2E-163A-42C2-9D8A-B5A0C823B1DB</RequestId>\\n</CreateBackupResponse>"}]',
      'title' => '为PolarDB集群创建全量快照备份',
      'summary' => '为PolarDB集群创建全量快照备份。',
      'description' => '> * 每个集群最多可以同时存在3个手动创建的备份。
> * 若出现错误提示`Exceeding the daily backup times of this DB cluster`，表明您的集群中已存在3个手动创建的备份，请[删除备份](~~98101~~)后再使用该接口。
> * 调用该接口后，会在后台创建备份任务，若数据量较大，花费的时间可能较长，请耐心等待。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。',
            'type' => 'string',
            'required' => false,
            'example' => '11111111',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份状态，取值范围如下：
* **Success**：备份完成
* **Failed**：备份失败',
            'type' => 'string',
            'required' => false,
            'example' => 'Success',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值范围如下： 
* **Automated**：系统自动备份
* **Manual**：手动备份',
            'type' => 'string',
            'required' => false,
            'example' => 'Automated',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-11-14T00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，查询结束时间需晚于开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-11-16T00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'BackupRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨地域备份的目的地域。

> 当前仅PolarDB MySQL版支持该参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下： 
* **30**
* **50**
* **100**

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为**1**。
',
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
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页记录数。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '24A1990B-4F6E-482B-B8CB-75C612******',
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
                    'description' => '备份集详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupSetSize' => 
                        array (
                          'description' => '备份文件大小，单位为Byte。

> 因为快照之间存在共享数据块，因此删除目标快照备份后释放的空间会远小于该备份文件的大小。更多详情，请参见[备份功能FAQ](~~164881~~)。',
                          'type' => 'string',
                          'example' => '4639948800',
                        ),
                        'ConsistentTime' => 
                        array (
                          'description' => '一致性快照的时间点，格式为Unix时间戳，单位为秒。',
                          'type' => 'string',
                          'example' => '1605425407',
                        ),
                        'BackupStatus' => 
                        array (
                          'description' => '备份状态，取值范围如下：
* **Success**：备份完成
* **Failed**：备份失败',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型，仅支持全量备份，取值固定为**FullBackup**。',
                          'type' => 'string',
                          'example' => 'FullBackup',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '本次备份开始时间（UTC时间）。 ',
                          'type' => 'string',
                          'example' => '2020-11-15T07:30:05Z',
                        ),
                        'ExpectExpireTime' => 
                        array (
                          'description' => '备份集预期过期时间（仅支持开启稀疏备份的实例）',
                          'type' => 'string',
                          'example' => '2022-10-24T08:13:23Z',
                        ),
                        'ExpectExpireType' => 
                        array (
                          'description' => '备份集预期过期类型（仅支持开启稀疏备份的实例）',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'NEVER' => 'NEVER',
                            'EXPIRED' => 'EXPIRED',
                            'DELAY' => 'DELAY',
                          ),
                          'example' => 'EXPIRED' . "\0" . '' . "\0" . '',
                        ),
                        'IsAvail' => 
                        array (
                          'description' => '备份集是否可用，取值范围如下：
* **0**：不可用
* **1**：可用',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '本次备份结束时间（UTC时间）。 ',
                          'type' => 'string',
                          'example' => '2020-11-15T07:30:20Z',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份ID。',
                          'type' => 'string',
                          'example' => '61*******',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-****************',
                        ),
                        'BackupsLevel' => 
                        array (
                          'description' => '备份集级别，取值范围如下：
* **Level-1**：一级备份
* **Level-2**：二级备份',
                          'type' => 'string',
                          'example' => 'Level-1',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份模式，取值范围如下： 
* **Automated**：系统自动备份
* **Manual**：手动备份',
                          'type' => 'string',
                          'example' => 'Automated',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '数据备份方法，仅支持快照备份，取值固定为**Snapshot** 。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackupStatus.Malformed',
            'errorMessage' => 'The specified parameter BackupStatus is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupMode.Malformed',
            'errorMessage' => 'The specified parameter BackupMode is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": \\"1\\",\\n  \\"PageRecordCount\\": \\"1\\",\\n  \\"RequestId\\": \\"24A1990B-4F6E-482B-B8CB-75C612******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"BackupSetSize\\": \\"4639948800\\",\\n        \\"ConsistentTime\\": \\"1605425407\\",\\n        \\"BackupStatus\\": \\"Success\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2020-11-15T07:30:05Z\\",\\n        \\"ExpectExpireTime\\": \\"2022-10-24T08:13:23Z\\",\\n        \\"ExpectExpireType\\": \\"EXPIRED\\\\u0000\\\\u0000\\",\\n        \\"IsAvail\\": \\"0\\",\\n        \\"BackupEndTime\\": \\"2020-11-15T07:30:20Z\\",\\n        \\"BackupId\\": \\"61*******\\",\\n        \\"DBClusterId\\": \\"pc-****************\\",\\n        \\"BackupsLevel\\": \\"Level-1\\",\\n        \\"BackupMode\\": \\"Automated\\",\\n        \\"BackupMethod\\": \\"Snapshot\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>24A1990B-4F6E-482B-B8CB-75C612******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <BackupSetSize>4639948800</BackupSetSize>\\n        <ConsistentTime>1605425407</ConsistentTime>\\n        <BackupStatus>Success</BackupStatus>\\n        <BackupType>FullBackup</BackupType>\\n        <BackupStartTime>2020-11-15T07:30:05Z</BackupStartTime>\\n        <IsAvail>0</IsAvail>\\n        <BackupEndTime>2020-11-15T07:30:20Z</BackupEndTime>\\n        <BackupId>61*******</BackupId>\\n        <DBClusterId>pc-****************</DBClusterId>\\n        <BackupsLevel>Level-1</BackupsLevel>\\n        <BackupMode>Automated</BackupMode>\\n        <BackupMethod>Snapshot</BackupMethod>\\n    </Items>\\n</DescribeBackupsResponse>","errorExample":""}]',
      'title' => '查看备份集列表',
      'summary' => '查询PolarDB集群的备份信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupTasks' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-***************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupJobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '11111111',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值范围如下：
* **Automated**：系统自动备份
* **Manual**：手动备份',
            'type' => 'string',
            'required' => false,
            'example' => 'Manual',
          ),
        ),
      ),
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
                'example' => 'FA8C1EF1-E3D4-44D7-B809-823187******',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackupJob' => 
                  array (
                    'description' => '备份任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StartTime' => 
                        array (
                          'description' => '备份任务开始时间（UTC），格式为`YYYY-MM-DDThh:mm:ssZ`。',
                          'type' => 'string',
                          'example' => '2020-08-08T07:24:01Z',
                        ),
                        'Process' => 
                        array (
                          'description' => '备份任务进度百分比。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'BackupJobId' => 
                        array (
                          'description' => '备份任务ID。',
                          'type' => 'string',
                          'example' => '11111111',
                        ),
                        'JobMode' => 
                        array (
                          'description' => '备份模式，取值范围如下：
* **Automated**：系统自动备份
* **Manual**：手动备份',
                          'type' => 'string',
                          'example' => 'Automated',
                        ),
                        'BackupProgressStatus' => 
                        array (
                          'description' => '备份任务状态，取值范围如下：

* **NoStart**：未开始
* **Preparing**：准备中
* **Waiting**：等待中
* **Uploading**：上传中
* **Checking**：检查中
* **Finished**：已完成',
                          'type' => 'string',
                          'example' => 'NoStart',
                        ),
                        'TaskAction' => 
                        array (
                          'description' => '备份任务类型，取值范围如下：

* **TempBackupTask**：临时备份任务
* **NormalBackupTask**：普通备份任务',
                          'type' => 'string',
                          'example' => 'NormalBackupTask',
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
            'errorCode' => 'InvalidBackupMode.Malformed',
            'errorMessage' => 'The specified parameter BackupMode is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA8C1EF1-E3D4-44D7-B809-823187******\\",\\n  \\"Items\\": {\\n    \\"BackupJob\\": [\\n      {\\n        \\"StartTime\\": \\"2020-08-08T07:24:01Z\\",\\n        \\"Process\\": \\"0\\",\\n        \\"BackupJobId\\": \\"11111111\\",\\n        \\"JobMode\\": \\"Automated\\",\\n        \\"BackupProgressStatus\\": \\"NoStart\\",\\n        \\"TaskAction\\": \\"NormalBackupTask\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupTasksResponse>\\n<RequestId>FA8C1EF1-E3D4-44D7-B809-823187******</RequestId>\\n<Items>\\n    <BackupJob>\\n        <JobMode>Automated</JobMode>\\n        <TaskAction>NormalBackupTask</TaskAction>\\n        <StartTime>2020-08-08T07:24:01Z</StartTime>\\n        <BackupProgressStatus>NoStart</BackupProgressStatus>\\n        <Process>0</Process>\\n        <BackupJobId>11111111</BackupJobId>\\n    </BackupJob>\\n</Items>\\n</DescribeBackupTasksResponse>","errorExample":""}]',
      'title' => '查询备份任务列表',
      'summary' => '查询集群的备份任务详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupLogs' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为 `YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-02-01T15:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需晚于查询开始时间。格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-02-12T15:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份地域。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30** 
* **50**
* **100**

默认值为**30**。',
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
            'description' => '页码，取值范围为大于0且不超过Integer的最大值的整数，默认值为**1**。',
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
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '2',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页记录数。',
                'type' => 'string',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ADAC63DB-0691-4ECE-949A-FAEA68******',
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
                  'BackupLog' => 
                  array (
                    'description' => '备份日志详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupLogId' => 
                        array (
                          'description' => '备份日志ID。',
                          'type' => 'string',
                          'example' => '1111111111',
                        ),
                        'IntranetDownloadLink' => 
                        array (
                          'description' => '备份日志的内网下载链接。',
                          'type' => 'string',
                          'example' => 'http://***********.oss-cn-hangzhou-internal.aliyuncs.com',
                        ),
                        'LinkExpiredTime' => 
                        array (
                          'description' => '下载链接的过期时间。',
                          'type' => 'string',
                          'example' => '2020-02-14T08:40:50Z',
                        ),
                        'BackupLogStartTime' => 
                        array (
                          'description' => '本次备份日志开始时间，格式为`YYYY-MM-DD\'T\'HH:mm:ssZ`（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-02-12T03:54:43Z',
                        ),
                        'BackupLogEndTime' => 
                        array (
                          'description' => '本次备份日志结束时间，格式为`YYYY-MM-DD\'T\'HH:mm:ssZ`（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-02-12T03:55:31Z',
                        ),
                        'DownloadLink' => 
                        array (
                          'description' => '备份日志的公网下载链接。',
                          'type' => 'string',
                          'example' => 'http://***********.oss-cn-hangzhou.aliyuncs.com',
                        ),
                        'BackupLogSize' => 
                        array (
                          'description' => '备份日志大小，单位为Byte。',
                          'type' => 'string',
                          'example' => '1073741824',
                        ),
                        'BackupLogName' => 
                        array (
                          'description' => '备份日志文件名。',
                          'type' => 'string',
                          'example' => 'ib_logfile1',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": \\"2\\",\\n  \\"PageRecordCount\\": \\"2\\",\\n  \\"RequestId\\": \\"ADAC63DB-0691-4ECE-949A-FAEA68******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"BackupLog\\": [\\n      {\\n        \\"BackupLogId\\": \\"1111111111\\",\\n        \\"IntranetDownloadLink\\": \\"http://***********.oss-cn-hangzhou-internal.aliyuncs.com\\",\\n        \\"LinkExpiredTime\\": \\"2020-02-14T08:40:50Z\\",\\n        \\"BackupLogStartTime\\": \\"2020-02-12T03:54:43Z\\",\\n        \\"BackupLogEndTime\\": \\"2020-02-12T03:55:31Z\\",\\n        \\"DownloadLink\\": \\"http://***********.oss-cn-hangzhou.aliyuncs.com\\",\\n        \\"BackupLogSize\\": \\"1073741824\\",\\n        \\"BackupLogName\\": \\"ib_logfile1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupLogsResponse>\\n<TotalRecordCount>2</TotalRecordCount>\\n<PageRecordCount>2</PageRecordCount>\\n<RequestId>ADAC63DB-0691-4ECE-949A-FAEA68******</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <BackupLog>\\n        <DownloadLink>http://***********.oss-cn-hangzhou.aliyuncs.com</DownloadLink>\\n        <BackupLogEndTime>2020-02-12T03:55:31Z</BackupLogEndTime>\\n        <BackupLogId>1111111111</BackupLogId>\\n        <BackupLogName>ib_logfile1</BackupLogName>\\n        <LinkExpiredTime>2020-02-14T08:40:50Z</LinkExpiredTime>\\n        <BackupLogSize>1073741824</BackupLogSize>\\n        <IntranetDownloadLink>http://***********.oss-cn-hangzhou-internal.aliyuncs.com</IntranetDownloadLink>\\n        <BackupLogStartTime>2020-02-12T03:54:43Z</BackupLogStartTime>\\n    </BackupLog>\\n</Items>\\n</DescribeBackupLogsResponse>","errorExample":""}]',
      'title' => '查询备份日志列表',
      'summary' => '查询备份日志列表、获取备份日志下载地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDetachedBackups' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。',
            'type' => 'string',
            'required' => false,
            'example' => '111111111',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份状态，取值范围如下：
* **Success**：备份完成
* **Failed**：备份失败',
            'type' => 'string',
            'required' => false,
            'example' => 'Success',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值范围如下： 
* **Automated**：系统自动备份
* **Manual**：手动备份',
            'type' => 'string',
            'required' => false,
            'example' => 'Manual',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨地域备份的目的地域。

> 当前仅PolarDB MySQL版支持该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-05-01T00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，查询结束时间需晚于开始时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-05-14T00:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下： 
* **30**
* **50**
* **100**

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为**1**。',
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
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '50',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页记录数。',
                'type' => 'string',
                'example' => '15',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '717B2382-BB14-4DCB-BBC2-32DBE0******',
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
                    'description' => '备份集详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupSetSize' => 
                        array (
                          'description' => '备份文件大小，单位为Byte。

> 因为快照之间存在共享数据块，因此删除目标快照备份后释放的空间会远小于该备份文件的大小。',
                          'type' => 'string',
                          'example' => '7251056',
                        ),
                        'ConsistentTime' => 
                        array (
                          'description' => '一致性快照的时间点，格式为Unix时间戳，单位为秒。',
                          'type' => 'string',
                          'example' => '1589253947',
                        ),
                        'StoreStatus' => 
                        array (
                          'description' => '是否允许删除备份集，取值范围如下：
* **Enabled**：允许删除
* **Disabled**：不允许删除',
                          'type' => 'string',
                          'example' => 'Disabled',
                        ),
                        'BackupStatus' => 
                        array (
                          'description' => '备份状态，取值范围如下：
* **Success**：备份完成
* **Failed**：备份失败',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型，仅支持全量备份，取值固定为**FullBackup**。',
                          'type' => 'string',
                          'example' => 'FullBackup',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '本次备份开始时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-05-12T03:25:44Z',
                        ),
                        'IsAvail' => 
                        array (
                          'description' => '备份集是否可用，取值范围如下：
* **0**：不可用
* **1**：可用',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '本次备份结束时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2020-05-12T03:25:55Z',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份ID。',
                          'type' => 'string',
                          'example' => '111111111',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-**************',
                        ),
                        'BackupsLevel' => 
                        array (
                          'description' => '备份集级别，取值范围如下：
* **Level-1**：一级备份
* **Level-2**：二级备份',
                          'type' => 'string',
                          'example' => 'Level-2',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份模式，取值范围如下： 
* **Automated**：系统自动备份
* **Manual**：手动备份',
                          'type' => 'string',
                          'example' => 'Manual',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '数据备份方法，仅支持快照备份，取值固定为**Snapshot** 。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackupStatus.Malformed',
            'errorMessage' => 'The specified parameter BackupStatus is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupMode.Malformed',
            'errorMessage' => 'The specified parameter BackupMode is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": \\"50\\",\\n  \\"PageRecordCount\\": \\"15\\",\\n  \\"RequestId\\": \\"717B2382-BB14-4DCB-BBC2-32DBE0******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"BackupSetSize\\": \\"7251056\\",\\n        \\"ConsistentTime\\": \\"1589253947\\",\\n        \\"StoreStatus\\": \\"Disabled\\",\\n        \\"BackupStatus\\": \\"Success\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2020-05-12T03:25:44Z\\",\\n        \\"IsAvail\\": \\"1\\",\\n        \\"BackupEndTime\\": \\"2020-05-12T03:25:55Z\\",\\n        \\"BackupId\\": \\"111111111\\",\\n        \\"DBClusterId\\": \\"pc-**************\\",\\n        \\"BackupsLevel\\": \\"Level-2\\",\\n        \\"BackupMode\\": \\"Manual\\",\\n        \\"BackupMethod\\": \\"Snapshot\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDetachedBackupsResponse>\\n    <TotalRecordCount>50</TotalRecordCount>\\n    <PageRecordCount>15</PageRecordCount>\\n    <RequestId>717B2382-BB14-4DCB-BBC2-32DBE0******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <BackupSetSize>7251056</BackupSetSize>\\n        <ConsistentTime>1589253947</ConsistentTime>\\n        <StoreStatus>Disabled</StoreStatus>\\n        <BackupStatus>Success</BackupStatus>\\n        <BackupType>FullBackup</BackupType>\\n        <BackupStartTime>2020-05-12T03:25:44Z</BackupStartTime>\\n        <IsAvail>1</IsAvail>\\n        <BackupEndTime>2020-05-12T03:25:55Z</BackupEndTime>\\n        <BackupId>111111111</BackupId>\\n        <DBClusterId>pc-**************</DBClusterId>\\n        <BackupsLevel>Level-2</BackupsLevel>\\n        <BackupMode>Manual</BackupMode>\\n        <BackupMethod>Snapshot</BackupMethod>\\n    </Items>\\n</DescribeDetachedBackupsResponse>","errorExample":""}]',
      'title' => '查询已被释放集群中备份集详情',
      'summary' => '查询已被释放的PolarDB集群中备份集详情。',
      'description' => '调用本接口时，PolarDB集群需处于**已释放**状态，且集群释放时选择**长期保留全部备份**或**长期保留最后一个备份（删除前自动备份）**。若集群释放后所保留的备份集全部被主动删除，则此接口也无法再查询到该集群。
> 您可以调用[DescribeDBClusterAttribute](~~98181~~)接口查询集群状态。',
    ),
    'DescribeDBClustersWithBackups' => 
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 可通过接口[DescribeRegions](~~98041~~)查看地域信息详情。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID，支持传入多个集群ID，集群ID之间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-**************',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称，集群名称需满足如下要求：
* 不能以`http://`或`https://`开头。
* 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'DBType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型，取值范围如下： 
* **MySQL**
* **PostgreSQL**
* **Oracle**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        5 => 
        array (
          'name' => 'IsDeleted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群是否已删除，取值范围如下：
* **0**：未删除
* **1**：已删除',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30**
* **50**
* **100**

默认值为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎版本号。
* MySQL版本号取值范围如下： 
    * **5.6**
    * **5.7**
    * **8.0**
* PostgreSQL版本号取值范围如下： 
    * **11**
    * **14**
* Oracle版本号取值范围如下： 
    * **11**
    * **14**',
            'type' => 'string',
            'required' => false,
            'example' => '8.0',
          ),
        ),
      ),
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
                'example' => 'F8529AA2-522F-4B30-B80B-8F7D39******',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页集群数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
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
                    'description' => '集群详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeletedTime' => 
                        array (
                          'description' => '集群删除时间。',
                          'type' => 'string',
                          'example' => '2022-05-12T03:25:37Z',
                        ),
                        'VpcId' => 
                        array (
                          'description' => '专有网络ID。',
                          'type' => 'string',
                          'example' => 'vpc-******************',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '到期时间。
> 仅付费方式为Prepaid（包年包月）的集群会返回具体参数值，Postpaid（按量付费）集群则返回空值。',
                          'type' => 'string',
                          'example' => '2022-09-14T16:00:00Z',
                        ),
                        'Expired' => 
                        array (
                          'description' => '集群是否过期。
>仅付费方式为Prepaid（包年包月）的集群支持返该参数。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '集群创建时间。',
                          'type' => 'string',
                          'example' => '2022-05-09T09:33:51Z',
                        ),
                        'DBNodeClass' => 
                        array (
                          'description' => '节点规格。',
                          'type' => 'string',
                          'example' => 'polar.mysql.x4.medium',
                        ),
                        'PayType' => 
                        array (
                          'description' => '付费类型，取值范围如下：
* **Postpaid**：按量付费。
* **Prepaid**：预付费（包年包月）。 ',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'DBType' => 
                        array (
                          'description' => '数据库引擎类型。',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定状态，取值范围如下： 
* **Unlock**：正常
* **ManualLock**：手动触发锁定
* **LockByExpiration**：集群过期自动锁定',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'DeletionLock' => 
                        array (
                          'description' => '集群删除的锁定状态，取值范围如下：
* **0**：未锁定，可删除集群。
* **1**：锁定，不可删除集群。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => '数据库引擎版本。',
                          'type' => 'string',
                          'example' => '8.0',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-****************',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态，取值范围如下：
* Creating：创建中
* Running：运行中
* Deleting：释放中
* Rebooting：重启中
* DBNodeCreating：正在增加节点
* DBNodeDeleting：正在删除节点
* ClassChanging：正在变更节点规格
* NetAddressCreating：正在创建网络连接
* NetAddressDeleting：正在删除网络连接
* NetAddressModifying：正在修改网络连接 
* Deleted：已释放',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'IsDeleted' => 
                        array (
                          'description' => '集群是否已释放，取值范围如下：
* 1：已释放。
* 0：未释放。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DBClusterNetworkType' => 
                        array (
                          'description' => '集群的网络类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'DBClusterDescription' => 
                        array (
                          'description' => '集群名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎。',
                          'type' => 'string',
                          'example' => 'POLARDB',
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
            'errorCode' => 'InvalidRegionId.Malformed',
            'errorMessage' => 'The specified parameter RegionId is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified parameter PageSize is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPageNumber.Malformed',
            'errorMessage' => 'The specified parameter PageNumber is not valid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8529AA2-522F-4B30-B80B-8F7D39******\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"TotalRecordCount\\": 1,\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"DeletedTime\\": \\"2022-05-12T03:25:37Z\\",\\n        \\"VpcId\\": \\"vpc-******************\\",\\n        \\"ExpireTime\\": \\"2022-09-14T16:00:00Z\\",\\n        \\"Expired\\": \\"false\\",\\n        \\"CreateTime\\": \\"2022-05-09T09:33:51Z\\",\\n        \\"DBNodeClass\\": \\"polar.mysql.x4.medium\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"DBType\\": \\"MySQL\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"DeletionLock\\": 0,\\n        \\"DBVersion\\": \\"8.0\\",\\n        \\"DBClusterId\\": \\"pc-****************\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"IsDeleted\\": 1,\\n        \\"DBClusterNetworkType\\": \\"VPC\\",\\n        \\"DBClusterDescription\\": \\"test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Engine\\": \\"POLARDB\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersWithBackupsResponse>\\n    <RequestId>F8529AA2-522F-4B30-B80B-8F7D39******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageRecordCount>1</PageRecordCount>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <Items>\\n        <DeletedTime>2022-05-12T03:25:37Z</DeletedTime>\\n        <VpcId>vpc-******************</VpcId>\\n        <ExpireTime>2022-09-14T16:00:00Z</ExpireTime>\\n        <Expired>false</Expired>\\n        <CreateTime>2022-05-09T09:33:51Z</CreateTime>\\n        <DBNodeClass>polar.mysql.x4.medium</DBNodeClass>\\n        <PayType>Postpaid</PayType>\\n        <DBType>MySQL</DBType>\\n        <LockMode>Unlock</LockMode>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DeletionLock>0</DeletionLock>\\n        <DBVersion>8.0</DBVersion>\\n        <DBClusterId>pc-****************</DBClusterId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <IsDeleted>1</IsDeleted>\\n        <DBClusterNetworkType>VPC</DBClusterNetworkType>\\n        <DBClusterDescription>test</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Engine>POLARDB</Engine>\\n    </Items>\\n</DescribeDBClustersWithBackupsResponse>","errorExample":""}]',
      'title' => '查询包含备份集的集群详情',
      'summary' => '查询某地域下包含备份集的PolarDB集群详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteBackup' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID，多个备份之间用英文逗号（,）分隔。
 
> 您可以通过[DescribeBackups](~~98102~~)接口查询BackupId。
',
            'type' => 'string',
            'required' => true,
            'example' => '11111111',
          ),
        ),
      ),
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
                'example' => '3CF4F9FE-BF77-4739-8D68-B8DF5D******',
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
            'errorCode' => 'InvalidBackupSetID.NotFound',
            'errorMessage' => 'The specified parameter BackupId is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3CF4F9FE-BF77-4739-8D68-B8DF5D******\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"3CF4F9FE-BF77-4739-8D68-B8DF5D3BAD8B\\"\\n}"},{"type":"xml","example":"<DeleteBackupResponse>\\r\\n<RequestId>3CF4F9FE-BF77-4739-8D68-B8DF5D******</RequestId>\\r\\n</DeleteBackupResponse>","errorExample":"<DeleteBackupResponse>\\n<RequestId>3CF4F9FE-BF77-4739-8D68-B8DF5D3BAD8B</RequestId>\\n</DeleteBackupResponse>"}]',
      'title' => '删除PolarDB集群的备份',
      'summary' => '删除PolarDB集群的备份。',
      'description' => '集群必须满足以下条件，否则将导致删除失败： 

- 集群状态为运行中。
- 备份状态为已完成。

>- 可以通过[DescribeBackups](~~98102~~)接口查询备份状态。
>- 删除备份后释放的空间远小于该备份文件的大小，因为快照之间有共享的数据块。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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

> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
      ),
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
                'description' => '数据备份周期，取值范围如下：

- Monday：周一
- Tuesday：周二
- Wednesday：周三
- Thursday：周四
- Friday：周五
- Saturday：周六
- Sunday：周日',
                'type' => 'string',
                'example' => 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
              ),
              'DataLevel1BackupRetentionPeriod' => 
              array (
                'description' => '一级备份保留周期，取值范围为3~14，单位为天。',
                'type' => 'string',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EADFCE0F-9FB5-4685-B395-1440B******',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '执行自动备份的时间段，格式为`HH:mmZ-HH:mmZ`（UTC时间）。',
                'type' => 'string',
                'example' => '07:00Z-08:00Z',
              ),
              'BackupRetentionPolicyOnClusterDeletion' => 
              array (
                'description' => '删除集群时是否保留备份：

* **ALL**：长期保留全部备份。
* **LATEST**：长期保留最后一个备份。
* **NONE**（默认）：不保留备份集。',
                'type' => 'string',
                'example' => 'NONE',
              ),
              'PreferredNextBackupTime' => 
              array (
                'description' => '下一次备份的时间，格式为`YYYY-MM-DDThh:mmZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-11-16T07:30Z',
              ),
              'DataLevel2BackupRetentionPeriod' => 
              array (
                'description' => '二级备份保留周期，取值范围如下：
 * 0：关闭二级备份功能。
 * 30～7300：二级备份保留周期，单位为天。
 * -1：二级备份长期保留。

 >创建集群时，默认取值为**0**，即关闭二级备份功能。',
                'type' => 'string',
                'example' => '0',
              ),
              'BackupFrequency' => 
              array (
                'description' => '备份频率，取值如下：

- **Normal**（默认）：常规备份，每天定时备份一次。
- **2/24H**：增强备份，每2小时备份一次。
- **3/24H**：增强备份，每3小时备份一次。
- **4/24H**：增强备份，每4小时备份一次。

> * 开启增强备份后，备份完成时间在24小时内的备份会全部保留。超过24小时的，系统将仅保留每日00:00点后完成的第一个备份，其他均被删除。
>* 开启增强备份后，备份周期**PreferredBackupPeriod**参数会默认选择一周内的所有天数（即从周一至周日）。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'DataLevel1BackupFrequency' => 
              array (
                'description' => '备份频率，取值如下：

- **Normal**（默认）：常规备份，每天定时备份一次。
- **2/24H**：高频备份，每2小时备份一次。
- **3/24H**：高频备份，每3小时备份一次。
- **4/24H**：高频备份，每4小时备份一次。

> *  PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
>*  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'DataLevel1BackupPeriod' => 
              array (
                'description' => '一级备份周期，取值范围如下： 
* **Monday**：周一
* **Tuesday**：周二
* **Wednesday**：周三
* **Thursday**：周四
* **Friday**：周五
* **Saturday**：周六
* **Sunday**：周日

> * 至少需要选择2天，多个值之间用英文逗号（,）隔开。
>*   PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
>*  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => 'Monday,Tuesday',
              ),
              'DataLevel1BackupTime' => 
              array (
                'description' => '执行自动备份的时间段，格式为`hh:mmZ-hh:mmZ`（UTC时间），且输入的数值必须为间隔1个小时的整点，如`14:00Z-15:00Z`。

> *  PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
>*  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => '15:00Z-16:00Z',
              ),
              'DataLevel2BackupPeriod' => 
              array (
                'description' => '二级备份周期，取值范围如下： 
* **Monday**：周一
* **Tuesday**：周二
* **Wednesday**：周三
* **Thursday**：周四
* **Friday**：周五
* **Saturday**：周六
* **Sunday**：周日

> * 至少需要选择2天，多个值之间用英文逗号（,）隔开。
>*   PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
>*  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => 'Monday,Tuesday',
              ),
              'DataLevel2BackupAnotherRegionRetentionPeriod' => 
              array (
                'description' => '二级备份跨地域备份保留周期。取值范围如下：

- **0**：关闭二级备份功能。

- **30～7300**：二级备份保留周期，单位为天。

- **1**：二级备份长期保留。

 >创建集群时，默认取值为**0**，即关闭二级备份跨地域备份功能。',
                'type' => 'string',
                'example' => '30',
              ),
              'DataLevel2BackupAnotherRegionRegion' => 
              array (
                'description' => '二级备份跨地域备份区域。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\\",\\n  \\"DataLevel1BackupRetentionPeriod\\": \\"7\\",\\n  \\"RequestId\\": \\"EADFCE0F-9FB5-4685-B395-1440B******\\",\\n  \\"PreferredBackupTime\\": \\"07:00Z-08:00Z\\",\\n  \\"BackupRetentionPolicyOnClusterDeletion\\": \\"NONE\\",\\n  \\"PreferredNextBackupTime\\": \\"2020-11-16T07:30Z\\",\\n  \\"DataLevel2BackupRetentionPeriod\\": \\"0\\",\\n  \\"BackupFrequency\\": \\"Normal\\",\\n  \\"DataLevel1BackupFrequency\\": \\"Normal\\",\\n  \\"DataLevel1BackupPeriod\\": \\"Monday,Tuesday\\",\\n  \\"DataLevel1BackupTime\\": \\"15:00Z-16:00Z\\",\\n  \\"DataLevel2BackupPeriod\\": \\"Monday,Tuesday\\",\\n  \\"DataLevel2BackupAnotherRegionRetentionPeriod\\": \\"30\\",\\n  \\"DataLevel2BackupAnotherRegionRegion\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <PreferredBackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</PreferredBackupPeriod>\\n    <DataLevel1BackupRetentionPeriod>7</DataLevel1BackupRetentionPeriod>\\n    <RequestId>EADFCE0F-9FB5-4685-B395-1440B******</RequestId>\\n    <PreferredBackupTime>07:00Z-08:00Z</PreferredBackupTime>\\n    <BackupRetentionPolicyOnClusterDeletion>NONE</BackupRetentionPolicyOnClusterDeletion>\\n    <PreferredNextBackupTime>2020-11-16T07:30Z</PreferredNextBackupTime>\\n    <DataLevel2BackupRetentionPeriod>0</DataLevel2BackupRetentionPeriod>\\n    <BackupFrequency>Normal</BackupFrequency>\\n    <DataLevel1BackupFrequency>Normal</DataLevel1BackupFrequency>\\n    <DataLevel1BackupPeriod>Monday,Tuesday</DataLevel1BackupPeriod>\\n    <DataLevel1BackupTime>15:00Z-16:00Z</DataLevel1BackupTime>\\n    <DataLevel2BackupPeriod>Monday,Tuesday</DataLevel2BackupPeriod>\\n    <DataLevel2BackupAnotherRegionRetentionPeriod>30</DataLevel2BackupAnotherRegionRetentionPeriod>\\n    <DataLevel2BackupAnotherRegionRegion>cn-hangzhou</DataLevel2BackupAnotherRegionRegion>\\n</DescribeBackupPolicyResponse>","errorExample":""}]',
      'title' => '查看PolarDB集群自动备份策略',
      'summary' => '查看PolarDB集群的自动备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLogBackupPolicy' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*****************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'LogBackupRetentionPeriod' => 
              array (
                'description' => '日志保留周期，取值范围如下：
* 3～7300：日志保留周期，单位天。
* -1：长期保留。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '62EE0051-102B-488D-9C79-D607B8******',
              ),
              'LogBackupAnotherRegionRetentionPeriod' => 
              array (
                'description' => '日志备份跨地域备份保留周期。取值范围如下：

- **0**：关闭日志备份跨地域备份功能。
- **30～7300**：日志备份跨地域备份保留周期，单位为天。
- **-1**：长期保留。

> 创建集群时，默认取值为**0**，即关闭日志备份跨地域备份功能。',
                'type' => 'string',
                'example' => '0',
              ),
              'LogBackupAnotherRegionRegion' => 
              array (
                'description' => '日志备份跨地域备份区域。跨地域备份支持的地域请参见[概述](~~72672~~)。',
                'type' => 'string',
                'example' => 'cn-beijing',
              ),
              'EnableBackupLog' => 
              array (
                'description' => '是否开启日志备份，取值范围如下：
* 0：未开启。
* 1：开启（默认全部开启且不支持关闭）。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"LogBackupRetentionPeriod\\": 7,\\n  \\"RequestId\\": \\"62EE0051-102B-488D-9C79-D607B8******\\",\\n  \\"LogBackupAnotherRegionRetentionPeriod\\": \\"0\\",\\n  \\"LogBackupAnotherRegionRegion\\": \\"cn-beijing\\",\\n  \\"EnableBackupLog\\": 1\\n}","type":"json"}]',
      'title' => '查询集群日志备份保留策略',
      'summary' => '查询PolarDB集群日志备份的保留策略。',
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
            'description' => '集群ID。

> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-bp13wz9586voc****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行自动备份的时间段，格式为`hh:mmZ-hh:mmZ`（UTC时间），且输入的数值必须为间隔1个小时的整点，如`14:00Z-15:00Z`。
                           ',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '15:00Z-16:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期，取值范围如下： 
* **Monday**：周一
* **Tuesday**：周二
* **Wednesday**：周三
* **Thursday**：周四
* **Friday**：周五
* **Saturday**：周六
* **Sunday**：周日

> * 至少需要选择2天，多个值之间用英文逗号（,）隔开。
> * 如果您的PolarDB MySQL版所在的地域支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Monday,Tuesday',
          ),
        ),
        3 => 
        array (
          'name' => 'DataLevel1BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一级备份保留周期，取值范围为3~14，单位为天。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        4 => 
        array (
          'name' => 'DataLevel2BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '二级备份保留周期，取值范围如下：

- **0**：关闭二级备份功能。

- **30～7300**：二级备份保留周期，单位为天。

- **1**：二级备份长期保留。

 >创建集群时，默认取值为**0**，即关闭二级备份功能。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupRetentionPolicyOnClusterDeletion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除集群时是否保留备份：

- **ALL**：长期保留全部备份。

- **LATEST**：长期保留最后一个备份。

- **NONE**：不保留备份集。

> 默认取值为NONE。',
            'type' => 'string',
            'required' => false,
            'example' => 'NONE',
          ),
        ),
        6 => 
        array (
          'name' => 'BackupFrequency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份频率，取值如下：

- **Normal**（默认）：常规备份，每天定时备份一次。
- **2/24H**：高频备份，每2小时备份一次。
- **3/24H**：高频备份，每3小时备份一次。
- **4/24H**：高频备份，每4小时备份一次。

> * 开启高频备份后，备份完成时间在24小时内的备份会全部保留。超过24小时的，系统将仅保留每日00:00点后完成的第一个备份，其他均被删除。
> * 开启高频备份后，备份周期**PreferredBackupPeriod**参数会默认选择一周内的所有天数（即从周一至周日）。
> *  如果您的PolarDB MySQL版所在的地域支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        7 => 
        array (
          'name' => 'DataLevel1BackupFrequency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份频率，取值如下：

- **Normal**（默认）：常规备份，每天定时备份一次。
- **2/24H**：高频备份，每2小时备份一次。
- **3/24H**：高频备份，每3小时备份一次。
- **4/24H**：高频备份，每4小时备份一次。

> * PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
> *  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        8 => 
        array (
          'name' => 'DataLevel1BackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行自动备份的时间段，格式为`hh:mmZ-hh:mmZ`（UTC时间），且输入的数值必须为间隔1个小时的整点，如`14:00Z-15:00Z`。

> * PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
> *  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '15:00Z-16:00Z',
          ),
        ),
        9 => 
        array (
          'name' => 'DataLevel1BackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一级备份周期，取值范围如下： 
* **Monday**：周一
* **Tuesday**：周二
* **Wednesday**：周三
* **Thursday**：周四
* **Friday**：周五
* **Saturday**：周六
* **Sunday**：周日

> * 至少需要选择2天，多个值之间用英文逗号（,）隔开。
> *  PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
> *  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Monday,Tuesday',
          ),
        ),
        10 => 
        array (
          'name' => 'DataLevel2BackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '二级备份周期，取值范围如下： 
* **Monday**：周一
* **Tuesday**：周二
* **Wednesday**：周三
* **Thursday**：周四
* **Friday**：周五
* **Saturday**：周六
* **Sunday**：周日

> * 至少需要选择2天，多个值之间用英文逗号（,）隔开。
> *  PolarDB PostgreSQL版（兼容Oracle）、PolarDB PostgreSQL版不支持该参数。
> *  如果您的PolarDB MySQL版所在的地域不支持跨地域备份功能，将不支持该参数。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Monday,Tuesday',
          ),
        ),
        11 => 
        array (
          'name' => 'DataLevel2BackupAnotherRegionRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '二级备份跨地域备份区域。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'DataLevel2BackupAnotherRegionRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '二级备份跨地域备份保留周期。取值范围如下：

- **0**：关闭二级备份功能。

- **30～7300**：二级备份保留周期，单位为天。

- **1**：二级备份长期保留。

 >创建集群时，默认取值为**0**，即关闭二级备份跨地域备份功能。',
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
                'example' => 'C5A5DF0E-5968-4DC1-882E-AC2FE7******',
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
            'errorCode' => 'InvalidDataLevel1BackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter DataLevel1BackupRetentionPeriod is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDataLevel2BackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter DataLevel2BackupRetentionPeriod is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter BackupRetentionPeriod is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidBackupFrequency.Malformed',
            'errorMessage' => 'The specified parameter BackupFrequency is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPreferredBackupPeriod.Malformed',
            'errorMessage' => 'The specified parameter PreferredBackupPeriod is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDataLevel2BackupPeriod.Malformed',
            'errorMessage' => 'The specified parameter DataLevel2BackupPeriod is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidDataLevel1BackupPeriod.Malformed',
            'errorMessage' => 'The specified parameter DataLevel1BackupPeriod is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidPreferredBackupTime.Malformed',
            'errorMessage' => 'The specified parameter PreferredBackupTime is not valid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidDataLevel1BackupTime.Malformed',
            'errorMessage' => 'The specified parameter DataLevel1BackupTime is not valid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidDataLevel1BackupFrequency.Malformed',
            'errorMessage' => 'The specified parameter DataLevel1BackupFrequency is not valid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidDataLevel2AnotherRegionRegion.NotFound',
            'errorMessage' => 'The specified parameter DataLevel2BackupAnotherRegionRegion does not found.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidDataLevel2AnotherRegionBackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter DataLevel2BackupAnotherRegionRetentionPeriod is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectBackupPolicy',
            'errorMessage' => 'Current DB type does not support low frequency backupPolicy operation.',
          ),
        ),
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
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'new archiveBackup policy already exists. dumpretention  parameter cannot used alone',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C5A5DF0E-5968-4DC1-882E-AC2FE7******\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"C5A5DF0E-5968-4DC1-882E-AC2FE7067C88\\"\\n}"},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\r\\n<RequestId>C5A5DF0E-5968-4DC1-882E-AC2FE7******</RequestId>\\r\\n</ModifyBackupPolicyResponse>","errorExample":"<ModifyBackupPolicyResponse>\\n<RequestId>C5A5DF0E-5968-4DC1-882E-AC2FE7067C88</RequestId>\\n</ModifyBackupPolicyResponse>"}]',
      'title' => '修改备份策略设置',
      'summary' => '修改PolarDB集群的自动备份策略。',
      'description' => '> 您也可以通过控制台修改PolarDB集群的自动备份策略。具体信息，请参见[备份设置](~~280422~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLogBackupPolicy' => 
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
            'description' => '集群ID。
>您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'LogBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志保留周期，取值范围如下：
* 3～7300：日志保留周期，单位为天。
* -1：长期保留。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
            'default' => '7',
          ),
        ),
        2 => 
        array (
          'name' => 'LogBackupAnotherRegionRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志备份跨地域备份区域。跨地域备份支持的地域请参见[概述](~~72672~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => '7',
          ),
        ),
        3 => 
        array (
          'name' => 'LogBackupAnotherRegionRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志备份跨地域备份保留周期。取值范围如下：

- **0**：关闭日志备份跨地域备份功能。
- **30～7300**：日志备份跨地域备份保留周期，单位为天。
- **-1**：长期保留。

> 创建集群时，默认取值为**0**，即关闭日志备份跨地域备份功能。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
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
                'example' => '345174B4-FAB3-412E-A326-BEDDA9******',
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
            'errorCode' => 'InvalidLogBackupRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter LogBackupRetentionPeriod is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidLogBackupAnotherRegionRetentionPeriod.Malformed',
            'errorMessage' => 'The specified parameter LogBackupAnotherRegionRetentionPeriod is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidLogBackupAnotherRegionRegion.NotFound',
            'errorMessage' => 'The specified parameter LogBackupAnotherRegionRegion does not found.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"345174B4-FAB3-412E-A326-BEDDA9******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyLogBackupPolicyResponse>\\n    <RequestId>345174B4-FAB3-412E-A326-BEDDA9******</RequestId>\\n</ModifyLogBackupPolicyResponse>","errorExample":""}]',
      'title' => '修改集群日志备份保留策略',
      'summary' => '修改PolarDB集群的日志备份保留策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMetaList' => 
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查询账号下所有集群的信息详情。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。
> * 查询时，`BackupId`和`RestoreTime`参数必选其一传入。
> * 您可以通过[DescribeBackups](~~98102~~)接口查看备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '111111',
          ),
        ),
        2 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '还原时间点，格式为YYYY-MM-DDThh:mmZ（UTC时间）。
>查询时，`BackupId`和`RestoreTime`参数必选其一传入。您可以通过[DescribeBackups](~~98102~~)接口查看还原时间点。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-10-04T01:40:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'GetDbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传入具体的数据库名称（如`test_db`）以获取目标数据库所有支持恢复的数据表名称。
> * 每次仅支持传入一个数据库名称。
> * 若该参数留空，您可以查看当前备份集下所有支持恢复的数据库名称，但无法查看各数据库下对应的数据表名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_db',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值范围如下：
* **30**
* **50**
* **100**
默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
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
            'description' => '页码，取值范围为大于0但不超过Integer最大值的整数，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域ID，您可以调用[DescribeDBClusterAttribute](~~2319132~~)查询。',
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
              'TotalPageCount' => 
              array (
                'description' => '总页数。',
                'type' => 'string',
                'example' => '1',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '2',
              ),
              'PageSize' => 
              array (
                'description' => '本页记录数。',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AA815DE7-B576-4B22-B33C-3FB31A******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '支持恢复的库表信息详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Database' => 
                    array (
                      'description' => '支持恢复的数据库名称。',
                      'type' => 'string',
                      'example' => 'test_db',
                    ),
                    'Tables' => 
                    array (
                      'description' => '支持恢复的表名称。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持恢复的表名称。',
                        'type' => 'string',
                        'example' => 'test_tb1',
                      ),
                    ),
                  ),
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******',
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
            'errorCode' => 'InvalidRestoreType.Format',
            'errorMessage' => 'Specified restore type is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Format',
            'errorMessage' => 'Specified restore time is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupSetID.NotFound',
            'errorMessage' => 'Specified backup set ID does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectBackupSetState',
            'errorMessage' => 'Current backup set state does not support operations.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBName.Duplicate',
            'errorMessage' => 'Specified DB name already exists in the This instance.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'There is insufficient capacity available for the requested instance.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidRestoreType.NotFound',
            'errorMessage' => 'At least one of BackupId and RestoreTime is malformed.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingUserID',
            'errorMessage' => 'The request is missing a user_id parameter.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingUID',
            'errorMessage' => 'The request is missing a uid parameter.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackup.NotFound',
            'errorMessage' => 'The available backup does not exist in recovery time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalPageCount\\": \\"1\\",\\n  \\"TotalRecordCount\\": \\"2\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"AA815DE7-B576-4B22-B33C-3FB31A******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": [\\n    {\\n      \\"Database\\": \\"test_db\\",\\n      \\"Tables\\": [\\n        \\"test_tb1\\"\\n      ]\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeMetaListResponse>\\n<TotalRecordCount>2</TotalRecordCount>\\n<TotalPageCount>1</TotalPageCount>\\n<RequestId>AA815DE7-B576-4B22-B33C-3FB31A******</RequestId>\\n<PageSize>30</PageSize>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <Database>test_db</Database>\\n    <Tables>test_tb1</Tables>\\n    <Tables>test_tb2</Tables>\\n</Items>\\n</DescribeMetaListResponse>","errorExample":""}]',
      'title' => '查看支持恢复的库表信息详情',
      'summary' => '查看支持恢复的库表信息详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestoreTable' => 
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
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查询账号下所有集群的信息详情。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-bp***************',
          ),
        ),
        1 => 
        array (
          'name' => 'TableMeta',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要还原的目标库表信息的JSON串，库表信息的值都是字符串类型。
例如，`[
   {
       "tables":[
           {
               "name":"testtb",
               "type":"table",
               "newname":"testtb_restore"
           }
       ],
       "name":"testdb",
       "type":"db",
       "newname":"testdb_restore"
   }
]`。
> 您可以通过[DescribeMetaList](~~194770~~)接口查看支持恢复的库表名称详情，并将支持恢复的库表信息填入上述例子中的对应位置。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[ { "tables":[ { "name":"testtb", "type":"table", "newname":"testtb_restore" } ], "name":"testdb", "type":"db", "newname":"testdb_restore" } ]',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。
> 若需要按备份集还原目标库表，该参数必传。您可以通过[DescribeBackups](~~98102~~)接口查看备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '111111',
          ),
        ),
        3 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '还原时间点，格式为YYYY-MM-DDThh:mmZ（UTC时间）。
>* 若需要按时间点还原，该参数必填。
>* 仅支持恢复到7天内的任意时间点。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-10-04T01:40:00Z ',
          ),
        ),
      ),
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
                'example' => '0C47508C-9DC8-455B-985E-2F2FA8******',
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
            'errorCode' => 'InvalidRestoreType.Format',
            'errorMessage' => 'Specified restore type is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Format',
            'errorMessage' => 'Specified restore time is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBackupSetID.NotFound',
            'errorMessage' => 'Specified backup set ID does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectBackupSetState',
            'errorMessage' => 'Current backup set state does not support operations.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBName.Duplicate',
            'errorMessage' => 'Specified DB name already exists in the This instance.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'There is insufficient capacity available for the requested instance.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidRestoreType.NotFound',
            'errorMessage' => 'At least one of BackupId and RestoreTime is malformed.',
          ),
          8 => 
          array (
            'errorCode' => 'MissingUserID',
            'errorMessage' => 'The request is missing a user_id parameter.',
          ),
          9 => 
          array (
            'errorCode' => 'MissingUID',
            'errorMessage' => 'The request is missing a uid parameter.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ArchiveRestore',
            'errorMessage' => 'Archive instance does not support restore table.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackup.NotFound',
            'errorMessage' => 'The available backup does not exist in recovery time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0C47508C-9DC8-455B-985E-2F2FA8******\\"\\n}","errorExample":""},{"type":"xml","example":"<RestoreTableResponse>  \\r\\n\\t  <RequestId>0C47508C-9DC8-455B-985E-2F2FA8******</RequestId>\\r\\n</RestoreTableResponse>","errorExample":""}]',
      'title' => '恢复PolarDB实例的某些数据库或表到原实例',
      'summary' => '恢复PolarDB库表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterMigration' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DBClusterEndpointList' => 
              array (
                'description' => 'PolarDB连接地址详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AddressItems' => 
                    array (
                      'description' => '连接串详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-**********',
                          ),
                          'ConnectionString' => 
                          array (
                            'description' => '连接串。',
                            'type' => 'string',
                            'example' => 'pc-**************.rwlb.rds.aliyuncs.com',
                          ),
                          'NetType' => 
                          array (
                            'description' => '连接串网络类型，取值范围如下：
* **Public**：公网地址
* **Private**：私网地址
* **Inner**：私网地址（经典网络）',
                            'type' => 'string',
                            'example' => 'Private',
                          ),
                          'Port' => 
                          array (
                            'description' => '端口号。',
                            'type' => 'string',
                            'example' => '3306',
                          ),
                          'VPCId' => 
                          array (
                            'description' => '专有网络ID。',
                            'type' => 'string',
                            'example' => 'vpc-**********',
                          ),
                          'IPAddress' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '192.***.***.10',
                          ),
                          'SSLEnabled' => 
                          array (
                            'description' => '是否开启SSL加密。取值如下：
* **Enabled**：开启SSL加密。
* **Disabled**：关闭SSL加密。',
                            'type' => 'string',
                            'example' => 'Enabled',
                          ),
                        ),
                      ),
                    ),
                    'DBEndpointId' => 
                    array (
                      'description' => '连接地址ID。',
                      'type' => 'string',
                      'example' => 'pe-***********',
                    ),
                    'EndpointType' => 
                    array (
                      'description' => '连接地址类型，取值范围如下：
* **Cluster**：默认集群地址
* **Primary**：主地址
* **Custom**：自定义集群地址',
                      'type' => 'string',
                      'example' => 'Cluster',
                    ),
                    'ReadWriteMode' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'Comment' => 
              array (
                'description' => '迁移异常的注释信息，若迁移无异常则返回空值。',
                'type' => 'string',
                'example' => 'test',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F2A9EFA7-915F-4572-8299-85A307******',
              ),
              'ExpiredTime' => 
              array (
                'description' => 'RDS与PolarDB之间的复制关系到期时间，格式为`YYYY-MM-DDThh:mm:ssZ`（UTC时间）。
',
                'type' => 'string',
                'example' => '2020-06-17T01:56:36Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-****************',
              ),
              'Topologies' => 
              array (
                'description' => '同步关系，取值范围如下：
* **RDS2POLARDB**：从RDS到PolarDB同步
* **POLARDB2RDS**：从PolarDB到RDS同步',
                'type' => 'string',
                'example' => 'RDS2POLARDB',
              ),
              'RdsReadWriteMode' => 
              array (
                'description' => '源RDS实例读写模式，取值范围如下：
* **rw**：读写
* **ro**：只读',
                'type' => 'string',
                'example' => 'rw',
              ),
              'SourceRDSDBInstanceId' => 
              array (
                'description' => '源RDS实例ID。',
                'type' => 'string',
                'example' => 'rm-************',
              ),
              'DBClusterReadWriteMode' => 
              array (
                'description' => '集群读写模式，取值范围如下：
* **rw**：读写。
* **ro**：只读。',
                'type' => 'string',
                'example' => 'ro',
              ),
              'DelayedSeconds' => 
              array (
                'description' => 'RDS与PolarDB之间的复制延迟时间，单位为秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'MigrationStatus' => 
              array (
                'description' => 'PolarDB集群的迁移状态，取值范围如下： 
* **NO_MIGRATION**：没有迁移任务。
* **RDS2POLARDB_CLONING**：数据克隆中。
* **RDS2POLARDB_SYNCING**：数据同步中，此时PolarDB的读写状态为只读，RDS的读写状态为可读可写。
* **SWITCHING**：数据库切换中。
* **POLARDB2RDS_SYNCING**：数据库切换完成，此时PolarDB的读写状态为可读可写，RDS的读写状态为只读。您可以修改应用内的连接地址。
* **ROLLBACK**：迁移回滚中，回滚完成后，状态变更为**RDS2POLARDB_SYNCING**。
* **CLOSING_MIGRATION**：关闭迁移任务中。                        ',
                'type' => 'string',
                'example' => 'RDS2POLARDB_SYNCING',
              ),
              'DtsInstanceId' => 
              array (
                'description' => '同步任务ID。',
                'type' => 'string',
                'example' => 'dts**********618bs',
              ),
              'RdsEndpointList' => 
              array (
                'description' => 'RDS连接地址详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AddressItems' => 
                    array (
                      'description' => '连接串详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-**************',
                          ),
                          'ConnectionString' => 
                          array (
                            'description' => '连接串。',
                            'type' => 'string',
                            'example' => 'rm-***********.mysql.rds.aliyuncs.com',
                          ),
                          'NetType' => 
                          array (
                            'description' => '连接串网络类型，取值范围如下：
* **Public**：公网地址
* **Private**：私网地址
* **Inner**：私网地址（经典网络）',
                            'type' => 'string',
                            'example' => 'Private',
                          ),
                          'Port' => 
                          array (
                            'description' => '端口号。',
                            'type' => 'string',
                            'example' => '3306',
                          ),
                          'VPCId' => 
                          array (
                            'description' => '专有网络ID。',
                            'type' => 'string',
                            'example' => 'vpc-************',
                          ),
                          'IPAddress' => 
                          array (
                            'description' => 'IP地址。',
                            'type' => 'string',
                            'example' => '172.***.***.173',
                          ),
                          'SSLEnabled' => 
                          array (
                            'description' => '是否开启SSL加密。取值如下：
* **Enabled**：开启SSL加密。
* **Disabled**：关闭SSL加密。',
                            'type' => 'string',
                            'example' => 'Enabled',
                          ),
                        ),
                      ),
                    ),
                    'DBEndpointId' => 
                    array (
                      'description' => '连接地址ID。',
                      'type' => 'string',
                      'example' => 'rm-************-normal',
                    ),
                    'EndpointType' => 
                    array (
                      'description' => '连接地址类型，取值范围如下：
* **Normal**：普通地址
* **ReadWriteSplitting**：读写分离地址',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'CustinsType' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'SrcDbType' => 
              array (
                'description' => '源数据库类型。取值如下：
*  **PolarDBMySQL**：PolarDB大版本升级迁移时的源数据库类型。
* **RDS**：将数据从RDS迁移至PolarDB MySQL时的源数据类型。',
                'type' => 'string',
                'example' => 'PolarDBMySQL',
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
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBClusterEndpointList\\": [\\n    {\\n      \\"AddressItems\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-**********\\",\\n          \\"ConnectionString\\": \\"pc-**************.rwlb.rds.aliyuncs.com\\",\\n          \\"NetType\\": \\"Private\\",\\n          \\"Port\\": \\"3306\\",\\n          \\"VPCId\\": \\"vpc-**********\\",\\n          \\"IPAddress\\": \\"192.***.***.10\\",\\n          \\"SSLEnabled\\": \\"Enabled\\"\\n        }\\n      ],\\n      \\"DBEndpointId\\": \\"pe-***********\\",\\n      \\"EndpointType\\": \\"Cluster\\",\\n      \\"ReadWriteMode\\": \\"\\"\\n    }\\n  ],\\n  \\"Comment\\": \\"test\\",\\n  \\"RequestId\\": \\"F2A9EFA7-915F-4572-8299-85A307******\\",\\n  \\"ExpiredTime\\": \\"2020-06-17T01:56:36Z\\",\\n  \\"DBClusterId\\": \\"pc-****************\\",\\n  \\"Topologies\\": \\"RDS2POLARDB\\",\\n  \\"RdsReadWriteMode\\": \\"rw\\",\\n  \\"SourceRDSDBInstanceId\\": \\"rm-************\\",\\n  \\"DBClusterReadWriteMode\\": \\"ro\\",\\n  \\"DelayedSeconds\\": 0,\\n  \\"MigrationStatus\\": \\"RDS2POLARDB_SYNCING\\",\\n  \\"DtsInstanceId\\": \\"dts**********618bs\\",\\n  \\"RdsEndpointList\\": [\\n    {\\n      \\"AddressItems\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-**************\\",\\n          \\"ConnectionString\\": \\"rm-***********.mysql.rds.aliyuncs.com\\",\\n          \\"NetType\\": \\"Private\\",\\n          \\"Port\\": \\"3306\\",\\n          \\"VPCId\\": \\"vpc-************\\",\\n          \\"IPAddress\\": \\"172.***.***.173\\",\\n          \\"SSLEnabled\\": \\"Enabled\\"\\n        }\\n      ],\\n      \\"DBEndpointId\\": \\"rm-************-normal\\",\\n      \\"EndpointType\\": \\"Normal\\",\\n      \\"CustinsType\\": \\"\\"\\n    }\\n  ],\\n  \\"SrcDbType\\": \\"PolarDBMySQL\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterMigrationResponse>\\n    <DBClusterEndpointList>\\n        <AddressItems>\\n            <VSwitchId>vsw-**********</VSwitchId>\\n            <ConnectionString>pc-**************.rwlb.rds.aliyuncs.com</ConnectionString>\\n            <NetType>Private</NetType>\\n            <Port>3306</Port>\\n            <VPCId>vpc-**********</VPCId>\\n            <IPAddress>192.***.***.10</IPAddress>\\n            <SSLEnabled>\\"true\\"</SSLEnabled>\\n        </AddressItems>\\n        <DBEndpointId>pe-***********</DBEndpointId>\\n        <EndpointType>Cluster</EndpointType>\\n    </DBClusterEndpointList>\\n    <Comment>test</Comment>\\n    <RequestId>F2A9EFA7-915F-4572-8299-85A307******</RequestId>\\n    <ExpiredTime>2020-06-17T01:56:36Z</ExpiredTime>\\n    <DBClusterId>pc-****************</DBClusterId>\\n    <Topologies>RDS2POLARDB</Topologies>\\n    <RdsReadWriteMode>rw</RdsReadWriteMode>\\n    <SourceRDSDBInstanceId>rm-************</SourceRDSDBInstanceId>\\n    <DBClusterReadWriteMode>ro</DBClusterReadWriteMode>\\n    <DelayedSeconds>0</DelayedSeconds>\\n    <MigrationStatus>RDS2POLARDB_SYNCING</MigrationStatus>\\n    <DtsInstanceId>dts**********618bs</DtsInstanceId>\\n    <RdsEndpointList>\\n        <AddressItems>\\n            <VSwitchId>vsw-**************</VSwitchId>\\n            <ConnectionString>rm-***********.mysql.rds.aliyuncs.com</ConnectionString>\\n            <NetType>Private</NetType>\\n            <Port>3306</Port>\\n            <VPCId>vpc-************</VPCId>\\n            <IPAddress>172.***.***.173</IPAddress>\\n            <SSLEnabled>\\"true\\"</SSLEnabled>\\n        </AddressItems>\\n        <DBEndpointId>rm-************-normal</DBEndpointId>\\n        <EndpointType>Normal</EndpointType>\\n    </RdsEndpointList>\\n</DescribeDBClusterMigrationResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群的迁移状态',
      'summary' => '查询PolarDB集群的迁移状态。',
      'description' => '* 该接口用于查询RDS一键迁移到PolarDB的迁移状态。详情请参见[一键升级RDS MySQL到PolarDB MySQL版](~~121582~~)。

* 调用该接口时，集群必须已经创建了一键升级任务。创建一键升级任务的接口为[CreateDBCluster](~~98169~~)，参数**CreationOption**的取值需为**MigrationFromRDS**。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterMigration' => 
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
            'description' => 'PolarDB集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceRDSDBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源RDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-************',
          ),
        ),
        2 => 
        array (
          'name' => 'NewMasterInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的实例ID或集群ID，取值范围如下：
* 切换前，填写PolarDB集群ID进行切换。
* 切换后，填写RDS实例ID进行回滚。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        3 => 
        array (
          'name' => 'SwapConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要切换连接地址，取值：

- **true**：带地址切换（应用程序不用改连接配置）。
- **false**：不带地址切换（应用程序需要改为新的PolarDB连接配置）。

默认为**false**。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ConnectionStrings',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要切换的具体连接地址。取值为需要两两交换的地址对应的JSON串。
>当SwapConnectionString取值为true时生效。',
            'type' => 'string',
            'required' => false,
            'example' => '{"rm-2ze73el581cs*****.mysql.pre.rds.aliyuncs.com":"pc-2ze8200s298e*****.mysql.polardb.pre.rds.aliyuncs.com","rm-2ze73el581cs86*****.mysql.pre.rds.aliyuncs.com":"test-p*****.mysql.polardb.pre.rds.aliyuncs.com"}',
          ),
        ),
      ),
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
                'example' => 'A1B303A5-653F-4AEE-A598-023FF9******',
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
            'errorCode' => 'InvalidConnectionString.Malformed',
            'errorMessage' => 'The specified parameter ConnectionString is not valid.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A1B303A5-653F-4AEE-A598-023FF9******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMigrationResponse>\\n    <RequestId>A1B303A5-653F-4AEE-A598-023FF9******</RequestId>\\n</ModifyDBClusterMigrationResponse>","errorExample":""}]',
      'title' => '切换或回滚迁移任务',
      'summary' => '切换或回滚RDS一键升级到PolarDB的迁移任务。',
      'description' => '* 在切换前调用该接口会进行切换。
* 在切换完成后调用该接口会进行回滚。 

> 调用该接口时，集群必须已经创建了一键升级任务。创建一键升级任务的接口为[CreateDBCluster](~~98169~~)，参数**CreationOption**取值需为**MigrationFromRDS**。更多信息，请参见[一键升级RDS MySQL到PolarDB MySQL版](~~121582~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CloseDBClusterMigration' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'ContinueEnableBinlog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否继续打开Binlog，取值范围如下： 
* **true**：继续打开Binlog
* **false**：关闭Binlog

默认取值为**true**。 

> 关闭Binlog将会重启您的PolarDB集群。
',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3AA69096-757C-4647-B36C-29EBC2******',
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
            'errorCode' => 'EngineMigrationStatus.NotSurpport',
            'errorMessage' => 'Specified engine migration status does not support.',
          ),
          1 => 
          array (
            'errorCode' => 'EngineMigration.NotExist',
            'errorMessage' => 'Specified engine migration does not exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3AA69096-757C-4647-B36C-29EBC2******\\"\\n}","errorExample":"{    \\"RequestId\\": \\"3AA69096-757C-4647-B36C-29EBC27A8763\\"}"},{"type":"xml","example":"<CloseDBClusterMigrationResponse>  \\n<RequestId>3AA69096-757C-4647-B36C-29EBC2******</RequestId>\\n</CloseDBClusterMigrationResponse>","errorExample":"<CloseDBClusterMigrationResponse>  \\n<RequestId>3AA69096-757C-4647-B36C-29EBC27A8763</RequestId>\\n</CloseDBClusterMigrationResponse>"}]',
      'title' => '取消或完成迁移',
      'summary' => '取消或完成RDS一键升级到PolarDB的迁移任务。',
      'description' => '* 在切换前调用该接口会取消迁移。
* 在切换完成后调用该口会完成迁移。

 > 调用该接口时，集群必须已经创建了一键升级任务。创建一键升级任务的接口为[CreateDBCluster](~~98169~~)，参数**CreationOption**取值需为**MigrationFromRDS**。更多信息，请参见[一键升级RDS for MySQL到PolarDB MySQL版](~~121582~~)。
                  
                  		
               ',
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
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为**cluster**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cluster',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标集群ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标集群ID。若您需要为多个集群同时添加标签，请单击**添加**来添加多个目标集群ID。
>每次最多支持同时为50个集群添加标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'pc-*****************',
            ),
            'required' => true,
            'example' => 'pc-*****************',
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
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。若您需要为目标集群一次性添加多个标签，请单击**添加**来添加标签键。

>每次最多添加20对标签，`Tag.n.Key`对应的值为`Tag.n.Value`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'type',
                ),
                'Value' => 
                array (
                  'description' => '标签值。若您需要为目标集群一次性添加多个标签，请单击**添加**来添加标签值。

>每次最多添加20对标签，`Tag.n.Value`对应的值为`Tag.n.Key`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
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
                'example' => '1CB5286F-AF5A-4E09-BFE9-588D4C******',
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
            'errorMessage' => 'The number of tags is exceed , Valid : 20',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter TagKey.n is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter Tag.n.Key is duplicated.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter Tag.n.Value is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter ResourceId.n is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CB5286F-AF5A-4E09-BFE9-588D4C******\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>1CB5286F-AF5A-4E09-BFE9-588D4C******</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为PolarDB集群添加标签',
      'summary' => '为PolarDB集群添加标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
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
            'description' => '地域ID。

> 可通过接口[DescribeRegions](~~98041~~)查看可用的地域。',
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
            'description' => '资源类型，取值固定为**cluster**。',
            'type' => 'string',
            'required' => true,
            'example' => 'cluster',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑全部标签，取值为**true**或**false**，默认值为**false**。
> 仅当`TagKey.n`取值为空时该参数生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
            'description' => '目标集群ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标集群ID。若您需要为多个集群同时解绑标签，请单击**添加**来添加目标集群ID。
>每次最多支持同时为50个集群解绑标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'pc-***************',
            ),
            'required' => true,
            'example' => 'pc-***************',
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
            'description' => '标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。若您需要为目标集群一次性解绑多个标签，请单击**添加**来添加标签键。
>每次最多添加20个标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'type',
            ),
            'required' => false,
            'example' => 'type',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF5189******',
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
            'errorMessage' => 'The Tags parameter`s number is exceed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter TagKey.n is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.TagKeysOrAll',
            'errorMessage' => 'The specified parameter TagKeys or All is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189******\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF5189******</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '将标签从集群上解绑',
      'summary' => '将标签从PolarDB集群上解绑。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
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
            'description' => '地域ID，您可以通过接口[DescribeRegions](~~98041~~)查看可用的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义，取值固定为**cluster**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cluster',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来返回更多结果。第一次查询不需要提供这个参数，如果第一次查询没有返回全部结果，则可在后续查询中传入前一次返回的token继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '212db86sca4384811e0b5e8707e******',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标集群ID。若您需要查询多个集群的标签情况，请单击**添加**来添加目标集群ID。

> * `ResourceId.N`参数和`Tag.N.Key`参数至少传入一个。
> * 若选择传入`ResourceId.N`参数，则每次最多添加50个集群ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标集群ID。若您需要查询多个集群的标签情况，请单击**添加**来添加目标集群ID。

> * `ResourceId.N`参数和`Tag.N.Key`参数至少传入一个。
> * 若选择传入`ResourceId.N`参数，则每次最多添加50个集群ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'pc-****************',
            ),
            'required' => false,
            'example' => 'pc-****************',
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
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。若您需要查询多个标签下的所有目标集群详情，请单击**添加**来添加标签。

>*  `ResourceId.N`参数和`Tag.N.Key`参数至少传入一个。
>* 若选择传入`Tag.N.Key`参数，则每次最多添加20对标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'type',
                ),
                'Value' => 
                array (
                  'description' => '标签键对应的标签值，允许传入空字符串。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
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
                'description' => '用来返回更多结果。如果一次查询没有返回全部结果，则会返回该参数。您可以在后续查询中传入前一次返回的token继续查询。',
                'type' => 'string',
                'example' => '212db86sca4384811e0b5e8707e******',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '688C04E4-23F8-409F-8A38-B954D5******',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '查询到的集群和标签的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型，取值固定为**cluster**。',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签键对应的标签值。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-****************',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'type',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter`s number is exceed.',
          ),
          1 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter Tag.n or ResourceId.n is needed.',
          ),
          2 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86sca4384811e0b5e8707e******\\",\\n  \\"RequestId\\": \\"688C04E4-23F8-409F-8A38-B954D5******\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"cluster\\",\\n        \\"TagValue\\": \\"test\\",\\n        \\"ResourceId\\": \\"pc-****************\\",\\n        \\"TagKey\\": \\"type\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n<RequestId>688C04E4-23F8-409F-8A38-B954D5******</RequestId>\\n<TagResources>\\n    <TagResource>\\n        <ResourceId>pc-***************</ResourceId>\\n        <TagKey>type</TagKey>\\n        <ResourceType>cluster</ResourceType>\\n        <TagValue>test</TagValue>\\n    </TagResource>\\n</TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询一个或多个PolarDB集群已绑定的标签列表',
      'summary' => '查询一个或多个PolarDB集群已绑定的标签列表，或者查询一个或多个标签绑定的PolarDB集群列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePendingMaintenanceAction' => 
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
            'description' => '待处理事件所在地域的地域ID，您可以调用[DescribeRegions](~~98041~~)接口查看PolarDB支持的地域和可用区。

> * 您可以输入**all**查看您账户下所有的待处理事件。
> * 当`Region`设置为**all**时，`TaskType`也必须设置为**all**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待处理事件的任务类型，取值范围如下：
* **DatabaseSoftwareUpgrading**：数据库软件升级
* **DatabaseHardwareMaintenance**：硬件维护与升级
* **DatabaseStorageUpgrading**：数据库存储升级
* **DatabaseProxyUpgrading**：代理小版本升级
* **all**：表示查询上述所有类型的待处理事件详情

> 当`Region`设置为**all**时，`TaskType`也必须设置为**all**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回历史任务，取值范围如下：
* **0**：返回当前任务
* **1**：返回历史任务

默认取值为**0**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值为**30**、**50**或**100**。

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
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
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F029645-FED9-4FE8-A6D3-488954******',
              ),
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
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态。
* 若您设置`IsHistory`为**0**，则返回待处理任务状态的详情，取值范围如下：

    * **2**：等待用户设置任务开始时间
    * **3**：等待处理
    * **4**：任务正在处理中（不支持在该状态下修改任务执行时间）

* 若您设置`IsHistory`为**1**，则返回历史任务状态的详情，取值范围如下：
     * **5**：任务结束且执行成功
     * **6**：任务结束但执行失败
     * **7**：任务已取消',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'PrepareInterval' => 
                    array (
                      'description' => '待处理事件切换之前所需的准备时间，格式为`HH:mm:ss`。',
                      'type' => 'string',
                      'example' => '04:00:00',
                    ),
                    'Deadline' => 
                    array (
                      'description' => '任务执行时间可调整范围的最晚期限，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-06-11T15:59:59Z',
                    ),
                    'DBType' => 
                    array (
                      'description' => '数据库引擎类型，取值范围如下： 

- **MySQL**
- **PostgreSQL**
- **Oracle**',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '待处理事件的任务类型。',
                      'type' => 'string',
                      'example' => 'DatabaseSoftwareUpgrading',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '后台执行该任务的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-06-09T18:00:00Z',
                    ),
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本号。
* MySQL版本号取值范围如下： 
    * **5.6**
    * **5.7**
    * **8.0**
* PostgreSQL版本号取值范围如下： 
    * **11**
    * **14**
* Oracle版本号取值范围如下： 
    * **11**
    * **14**',
                      'type' => 'string',
                      'example' => '8.0',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '修改时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-06-09T22:00:42Z',
                    ),
                    'DBClusterId' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'pc-************',
                    ),
                    'Region' => 
                    array (
                      'description' => '任务所在地域的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ResultInfo' => 
                    array (
                      'description' => '任务执行结果，取值范围如下：
* **manualCancel**：手动取消任务
* **paramCheckNotPass**：参数检查未通过

>仅当`Status`（任务状态）取值为**6**（任务结束但执行失败）或**7**（任务已取消）时，返回该参数。',
                      'type' => 'string',
                      'example' => 'manualCancel',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '创建任务的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-06-09T22:00:42Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '目标任务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '111111',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '待处理事件预计的切换时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-06-09T22:00:00Z',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"RequestId\\": \\"2F029645-FED9-4FE8-A6D3-488954******\\",\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 3,\\n      \\"PrepareInterval\\": \\"04:00:00\\",\\n      \\"Deadline\\": \\"2020-06-11T15:59:59Z\\",\\n      \\"DBType\\": \\"MySQL\\",\\n      \\"TaskType\\": \\"DatabaseSoftwareUpgrading\\",\\n      \\"StartTime\\": \\"2020-06-09T18:00:00Z\\",\\n      \\"DBVersion\\": \\"8.0\\",\\n      \\"ModifiedTime\\": \\"2020-06-09T22:00:42Z\\",\\n      \\"DBClusterId\\": \\"pc-************\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"ResultInfo\\": \\"manualCancel\\",\\n      \\"CreatedTime\\": \\"2020-06-09T22:00:42Z\\",\\n      \\"Id\\": 111111,\\n      \\"SwitchTime\\": \\"2020-06-09T22:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePendingMaintenanceActionResponse>\\n<TotalRecordCount>1</TotalRecordCount>\\n<PageSize>30</PageSize>\\n<RequestId>2F029645-FED9-4FE8-A6D3-488954******</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <Status>3</Status>\\n    <CreatedTime>2020-06-09T22:00:42Z</CreatedTime>\\n    <Deadline>2020-06-11T15:59:59Z</Deadline>\\n    <StartTime>2020-06-09T18:00:00Z</StartTime>\\n    <DBClusterId>pc-************</DBClusterId>\\n    <DBType>MySQL</DBType>\\n    <DBVersion>8.0</DBVersion>\\n    <ModifiedTime>2020-06-09T22:00:42Z</ModifiedTime>\\n    <TaskType>DatabaseSoftwareUpgrading</TaskType>\\n    <Region>cn-hangzhou</Region>\\n    <PrepareInterval>04:00:00</PrepareInterval>\\n    <Id>111111</Id>\\n    <SwitchTime>2020-06-09T22:00:00Z</SwitchTime>\\n</Items>\\n</DescribePendingMaintenanceActionResponse>","errorExample":""}]',
      'title' => '查询待处理事件的详情',
      'summary' => '查询待处理事件的详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePendingMaintenanceActions' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回历史任务，取值范围如下：
* **0**：返回当前任务
* **1**：返回历史任务

默认取值为**0**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '314127C2-B6C1-4F58-B1F6-E6B645******',
              ),
              'TypeList' => 
              array (
                'description' => '待处理事件的详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskType' => 
                    array (
                      'description' => '待处理事件的任务类型，取值范围如下：
* **DatabaseSoftwareUpgrading**：数据库软件升级
* **DatabaseHardwareMaintenance**：硬件维护与升级
* **DatabaseStorageUpgrading**：数据库存储升级
* **DatabaseProxyUpgrading**：代理小版本升级',
                      'type' => 'string',
                      'example' => 'DatabaseSoftwareUpgrading',
                    ),
                    'Count' => 
                    array (
                      'description' => '待处理事件的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"314127C2-B6C1-4F58-B1F6-E6B645******\\",\\n  \\"TypeList\\": [\\n    {\\n      \\"TaskType\\": \\"DatabaseSoftwareUpgrading\\",\\n      \\"Count\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePendingMaintenanceActionsResponse>\\n<RequestId>314127C2-B6C1-4F58-B1F6-E6B645******</RequestId>\\n<TypeList>\\n    <TaskType>DatabaseSoftwareUpgrading</TaskType>\\n    <Count>1</Count>\\n</TypeList>\\n</DescribePendingMaintenanceActionsResponse>","errorExample":""}]',
      'title' => '查看不同任务类型下待处理事件的数量',
      'summary' => '查看不同任务类型下待处理事件的数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyPendingMaintenanceAction' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>您可以通过接口[DescribeRegions](~~98041~~)查看地域ID详情。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标任务ID，您也可以同时输入多个任务ID，统一修改这些任务的切换时间，多个任务ID间用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '111111',
          ),
        ),
        2 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后台将在指定时间点执行目标待处理任务所对应的操作。格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-06-09T22:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '93061E17-B56A-4324-BC95-D0FFD2******',
              ),
              'Ids' => 
              array (
                'description' => '目标任务ID。',
                'type' => 'string',
                'example' => '111111',
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
            'errorCode' => 'RequiredParam.NotFound',
            'errorMessage' => 'Required input param is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'TaskModifyError',
            'errorMessage' => 'Part of the tasks cannot be modified.',
          ),
          2 => 
          array (
            'errorCode' => 'SwitchTimeAfterDeadline',
            'errorMessage' => 'The switch time should be earlier than deadline.',
          ),
          3 => 
          array (
            'errorCode' => 'StartTimeBeforeNow',
            'errorMessage' => 'The start time should not be earlier than the current time.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectTaskStatus',
            'errorMessage' => 'Certain task\'s status does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93061E17-B56A-4324-BC95-D0FFD2******\\",\\n  \\"Ids\\": \\"111111\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyPendingMaintenanceActionResponse>\\n    <RequestId>93061E17-B56A-4324-BC95-D0FFD2******</RequestId>\\n    <Ids>111111</Ids>\\n</ModifyPendingMaintenanceActionResponse>","errorExample":""}]',
      'title' => '修改待处理事件的任务切换时间',
      'summary' => '修改待处理事件的任务切换时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeScheduleTasks' => 
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
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态，取值范围如下：
* **pending**：等待执行中
* **executing**：执行中
* **failure**：执行失败待重试
* **finish**：已完成
* **cancel**：已取消
* **expired**：超期（即未在计划时间段内开始执行目标任务）
* **rollback**：回滚中

> 若该参数留空，默认查询所有状态的计划任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'finish',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> * 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。
> * 若该参数留空，默认查询当前账号下所有集群的计划任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-**************',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> * 您可以调用[DescribeRegions](~~98041~~)接口查看目标账号下所有的集群的地域信息。
> * 若该参数留空，默认查询当前账号下所有地域内的计划任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，取值范围如下：
* **CreateDBNodes**
* **ModifyDBNodeClass**
*  **UpgradeDBClusterVersion**
* **ModifyDBClusterPrimaryZone**

> * 仅当调用上述接口时指定了`PlannedStartTime`参数值，会返回目标任务的详情，否则`TimerInfos`为空。
> * 若该参数留空，默认查询当前账号下所有类型的计划任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateDBNodes',
          ),
        ),
        6 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        7 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单ID。

> 仅支持传入数字0~9。',
            'type' => 'string',
            'required' => false,
            'example' => '20951253014****',
          ),
        ),
        8 => 
        array (
          'name' => 'PlannedStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为目标任务设定的执行开始时间（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-28T12:00Z',
          ),
        ),
        9 => 
        array (
          'name' => 'PlannedEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为目标任务设定的最晚开始时间（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-28T12:30Z',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'description' => '请求返回消息。
> 请求成功时该参数返回**Successful**，请求失败时会返回请求异常信息（如错误码等）。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Data' => 
              array (
                'description' => '结果集。',
                'type' => 'object',
                'properties' => 
                array (
                  'TimerInfos' => 
                  array (
                    'description' => '计划任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '目标任务的状态。',
                          'type' => 'string',
                          'example' => 'finish',
                        ),
                        'Action' => 
                        array (
                          'description' => '任务类型。',
                          'type' => 'string',
                          'example' => 'CreateDBNodes',
                        ),
                        'PlannedEndTime' => 
                        array (
                          'description' => '为目标任务设定的最晚开始时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-01-28T12:30Z',
                        ),
                        'PlannedTime' => 
                        array (
                          'description' => '系统预计的任务开始执行时间（UTC时间）。
',
                          'type' => 'string',
                          'example' => '2021-01-28T12:16Z',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'pc-**************',
                        ),
                        'Region' => 
                        array (
                          'description' => '目标任务所属地域的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'PlannedStartTime' => 
                        array (
                          'description' => '为目标任务设定的执行开始时间（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-01-28T12:00Z',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '目标任务的任务ID。',
                          'type' => 'string',
                          'example' => '53879cdb-9a00-428e-acaf-ff4cff******',
                        ),
                        'OrderId' => 
                        array (
                          'description' => '订单ID。
> 仅当`Action`取值为**CreateDBNodes**或**ModifyDBNodeClass**时返回该参数。',
                          'type' => 'string',
                          'example' => '208161753******',
                        ),
                        'DbClusterStatus' => 
                        array (
                          'description' => '集群状态。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'DbClusterDescription' => 
                        array (
                          'description' => '集群描述。',
                          'type' => 'string',
                          'example' => 'test_cluster',
                        ),
                        'TaskCancel' => 
                        array (
                          'description' => '计划任务是否可以取消。取值：

- **true**：可以取消

- **false**：不能取消',
                          'type' => 'boolean',
                          'example' => 'true',
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
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '本页记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '936C7025-27A5-4CB1-BB31-540E1F0CCA12',
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
            'errorCode' => 'InvalidOrderId.Malformed',
            'errorMessage' => 'The specified parameter OrderId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Successful\\",\\n  \\"Data\\": {\\n    \\"TimerInfos\\": [\\n      {\\n        \\"Status\\": \\"finish\\",\\n        \\"Action\\": \\"CreateDBNodes\\",\\n        \\"PlannedEndTime\\": \\"2021-01-28T12:30Z\\",\\n        \\"PlannedTime\\": \\"2021-01-28T12:16Z\\",\\n        \\"DBClusterId\\": \\"pc-**************\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"PlannedStartTime\\": \\"2021-01-28T12:00Z\\",\\n        \\"TaskId\\": \\"53879cdb-9a00-428e-acaf-ff4cff******\\",\\n        \\"OrderId\\": \\"208161753******\\",\\n        \\"DbClusterStatus\\": \\"Running\\",\\n        \\"DbClusterDescription\\": \\"test_cluster\\",\\n        \\"TaskCancel\\": true\\n      }\\n    ],\\n    \\"TotalRecordCount\\": 1,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30\\n  },\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"936C7025-27A5-4CB1-BB31-540E1F0CCA12\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScheduleTasksResponse>\\n    <Message>Successful</Message>\\n    <Data>\\n        <TimerInfos>\\n            <Status>finish</Status>\\n            <Action>CreateDBNodes</Action>\\n            <PlannedEndTime>2021-01-28T12:30Z</PlannedEndTime>\\n            <PlannedTime>2021-01-28T12:16Z</PlannedTime>\\n            <DBClusterId>pc-**************</DBClusterId>\\n            <Region>cn-hangzhou</Region>\\n            <PlannedStartTime>2021-01-28T12:00Z</PlannedStartTime>\\n            <TaskId>53879cdb-9a00-428e-acaf-ff4cff******</TaskId>\\n            <OrderId>208161753******</OrderId>\\n            <DbClusterStatus>Running</DbClusterStatus>\\n            <DbClusterDescription>test_cluster</DbClusterDescription>\\n            <TaskCancel>true</TaskCancel>\\n        </TimerInfos>\\n        <TotalRecordCount>1</TotalRecordCount>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>30</PageSize>\\n    </Data>\\n    <Success>true</Success>\\n    <RequestId>936C7025-27A5-4CB1-BB31-540E1F0CCA12</RequestId>\\n</DescribeScheduleTasksResponse>","errorExample":""}]',
      'title' => '查询定时任务详情',
      'summary' => '查询所有定时任务的详情情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelScheduleTasks' => 
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要被取消的定时任务的任务ID。
> * 您可以调用[DescribeScheduleTasks](~~199648~~)接口查看当前账号下所有计划任务的信息，包括任务ID。
> * 仅任务状态为等待执行（即`Status`参数的返回值为`pending`）的任务支持被取消。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ec8c4723-eac5-4f12-becb-01ac08******',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
      ),
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
                'example' => '7F2007D3-7E74-4ECB-89A8-BF130D******',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
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
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F2007D3-7E74-4ECB-89A8-BF130D******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelScheduleTasksResponse>\\n<RequestId>7F2007D3-7E74-4ECB-89A8-BF130D******</RequestId>\\n<Success>true</Success>\\n</CancelScheduleTasksResponse>","errorExample":""}]',
      'title' => '取消定时任务',
      'summary' => '取消开始时间尚未到达的定时任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMaskingRules' => 
    array (
      'summary' => '查询PolarDB集群下所有的脱敏规则或目标脱敏规则的详情。',
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
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*****************',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleNameList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testrule',
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
                'example' => '2F83D131-1C18-4599-889D-729A9D******',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。
>请求成功时该参数返回Successful，请求失败时会返回请求异常信息（如错误码等）。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Success' => 
              array (
                'description' => '请求结果。取值：

- **true**：请求成功。

- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果集。',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleList' => 
                  array (
                    'description' => '脱敏规则详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '脱敏规则详细配置。
> 关于各参数的详细介绍，详情请参见[ModifyMaskingRules](~~212574~~)中`RuleConfig`的参数描述。',
                      'type' => 'string',
                      'example' => '"{\\"testrule\\":{\\"auto\\":{\\"databases\\":[],\\"tables\\":[\\"t1\\"],\\"columns\\":[\\"c1\\"]},\\"applies_to\\":[],\\"description\\":\\"This rule will be applied to the columns c1 in table t1\\",\\"enabled\\":\\"true\\"}}"',
                    ),
                  ),
                  'RuleVersion' => 
                  array (
                    'description' => '脱敏规则版本, 取值v1、v2, 默认值 v1',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-bp1s826a1up******',
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
            'errorCode' => 'Abs.InvalidAccount.NotFound',
            'errorMessage' => 'account  is not found.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F83D131-1C18-4599-889D-729A9D******\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RuleList\\": [\\n      \\"\\\\\\"{\\\\\\\\\\\\\\"testrule\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"auto\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"databases\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"tables\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"t1\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"columns\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"c1\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"applies_to\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"This rule will be applied to the columns c1 in table t1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"enabled\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\"}}\\\\\\"\\"\\n    ],\\n    \\"RuleVersion\\": \\"v1\\"\\n  },\\n  \\"DBClusterId\\": \\"pc-bp1s826a1up******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeMaskingRulesResponse>\\n    <RequestId>2F83D131-1C18-4599-889D-729A9D******</RequestId>\\n    <Message>Successful</Message>\\n    <Success>true</Success>\\n    <Data>\\n        <RuleList>\\"{\\\\\\"testrule\\\\\\":{\\\\\\"auto\\\\\\":{\\\\\\"databases\\\\\\":[],\\\\\\"tables\\\\\\":[\\\\\\"t1\\\\\\"],\\\\\\"columns\\\\\\":[\\\\\\"c1\\\\\\"]},\\\\\\"applies_to\\\\\\":[],\\\\\\"description\\\\\\":\\\\\\"This rule will be applied to the columns c1 in table t1\\\\\\",\\\\\\"enabled\\\\\\":\\\\\\"true\\\\\\"}}\\"</RuleList>\\n    </Data>\\n    <DBClusterId>pc-bp1s826a1up******</DBClusterId>\\n</DescribeMaskingRulesResponse>","errorExample":""}]',
      'title' => '查询脱敏规则列表',
    ),
    'ModifyMaskingRules' => 
    array (
      'summary' => '修改脱敏规则配置或新增脱敏规则。',
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*****************',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏规则名称。一次仅支持输入一个规则名称。
> * 您可以通过接口[DescribeMaskingRules](~~212573~~)查看目标集群下的所有脱敏规则详情，包括规则名称。
> * 若输入的规则名称不存在于当前集群中，系统会自动根据该名称和`RuleConfig`值创建一个新的脱敏规则。',
            'type' => 'string',
            'required' => false,
            'example' => 'testrule',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的脱敏规则的配置参数及其值的JSON串，参数的值都是字符串类型，例如：`{"auto": {"databases": ["db1"], "tables": ["tb1"], "columns": ["c1,c2"] }, "description": "This rule will be applied to the columns c1 and c2 in table t1", "enabled": true, "applies_to": ["user"]}`。其中：
* `"auto"`：必填，表示支持动态脱敏算法。
* `"databases"`：选填。需要应用当前规则的数据库名称，支持输入多个数据库名称，多个名称间用英文逗号（,）分隔。若该参数留空，表示该规则将应用到当前集群中的所有数据库。
* `"tables"`：选填。需要应用当前规则的表名称，支持输入多个表库名称，多个名称间用英文逗号（,）分隔。若该参数留空，表示该规则将应用到当前集群中的所有表。
* `"columns"`：必填。需要应用当前规则的字段名称，支持输入多个字段名称，多个名称间用英文逗号（,）分隔。
* `"description"`：选填。脱敏规则的描述，选填。字符长度不能超过64个字符。
* `"enabled"`：必填。启用或禁用目标脱敏规则。取值为**true**（启用）或**false**（禁用）。
* `"applies_to"`：需要应用当前规则的数据库账号名称，支持输入多个数据库账号名，多个账号间用英文逗号（,）分隔。
* `"exempted"`：不需要应用当前规则的数据库账号名称，支持输入多个数据库账号名，多个账号间用英文逗号（,）分隔。

> * 若输入了`RuleName`参数，`RuleConfig`参数必传。
> * `"applies_to"`和`"exempted"`，需要选择其中的一个进行输入。',
            'type' => 'string',
            'required' => false,
            'example' => '{"auto": {"databases": ["db1"], "tables": ["tb1"], "columns": ["c1,c2"] }, "description": "This rule will be applied to the columns c1 and c2 in table t1", "enabled": true, "applies_to": ["user"]}',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleNameList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏规则名称列表。支持一次输入一个或多个规则名称，多个名称间用英文逗号（,）分隔。
> `RuleName`和`RuleNameList`参数，需要选择其中的一个进行输入。',
            'type' => 'string',
            'required' => false,
            'example' => 'testrule',
          ),
        ),
        4 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启用或禁用目标脱敏规则。取值范围如下：
* **true**：启用。
* **false**：禁用。

> 仅当`RuleNameList`有参数值输入时，该参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏规则版本。取值范围如下：

- v1（默认）
- v2',
            'type' => 'string',
            'required' => false,
            'example' => 'v2',
          ),
        ),
      ),
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
                'example' => '99B355CE-526C-478B-B730-AD9D7C******',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。
>请求成功时该参数返回Successful，请求失败时会返回请求异常信息（如错误码等）。',
                'type' => 'string',
                'example' => 'Message',
              ),
              'Success' => 
              array (
                'description' => '请求结果。取值：

- **true**：请求成功。

- **false**：请求失败。',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"99B355CE-526C-478B-B730-AD9D7C******\\",\\n  \\"Message\\": \\"Message\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMaskingRulesResponse>\\n<Message>Successful</Message>\\n<RequestId>99B355CE-526C-478B-B730-AD9D7C******</RequestId>\\n<Success>true</Success>\\n</ModifyMaskingRulesResponse>","errorExample":""}]',
      'title' => '修改脱敏规则',
    ),
    'DeleteMaskingRules' => 
    array (
      'summary' => '删除目标脱敏规则。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleNameList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要删除的脱敏规则名称。支持输入多个规则名称进行批量删除，多个名称间用英文逗号（,）分隔。
> 您可以通过[DescribeMaskingRules](~~212573~~)接口查看目标集群下所有脱敏规则的详情，包括规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testrule',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-*****************',
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
                'example' => '2BCEE25B-797C-426B-BA7B-D28CCF******',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。
>请求成功时该参数返回`Successful`，请求失败时会返回请求异常信息（如错误码等）。',
                'type' => 'string',
                'example' => 'Successful',
              ),
              'Success' => 
              array (
                'description' => '请求结果。取值：

- **true**：请求成功。

- **false**：请求失败。',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2BCEE25B-797C-426B-BA7B-D28CCF******\\",\\n  \\"Message\\": \\"Successful\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteMaskingRulesResponse>\\n<Message>Successful</Message>\\n<RequestId>2BCEE25B-797C-426B-BA7B-D28CCF******</RequestId>\\n<Success>true</Success>\\n</DeleteMaskingRulesResponse>","errorExample":""}]',
      'title' => '删除脱敏规则',
    ),
    'DescribeDBNodePerformance' => 
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
          'name' => 'DBNodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库集群节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pi-*************',
          ),
        ),
        1 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能数据粒度。取值范围如下：

- 5
- 30
- 60
- 600
- 1800
- 3600
- 86400',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '60',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊指标，目前仅支持tair（PolarTair架构）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'tair',
          ),
        ),
        3 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的性能指标，多个值间用英文逗号（,）分隔，详细参数请参见[性能参数表](~~141787~~)。

> 最多可传入5个查询的性能指标。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PolarDBDiskUsage',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-23T01:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-23T01:01Z',
          ),
        ),
        6 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-****************',
          ),
        ),
      ),
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
                'type' => 'object',
                'properties' => 
                array (
                  'PerformanceItem' => 
                  array (
                    'description' => '集群性能数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MetricName' => 
                        array (
                          'description' => '具体的性能指标度量名称。',
                          'type' => 'string',
                          'example' => 'mean_sys_dir_size',
                        ),
                        'Measurement' => 
                        array (
                          'description' => '性能指标。',
                          'type' => 'string',
                          'example' => 'PolarDBDiskUsage',
                        ),
                        'Points' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PerformanceItemValue' => 
                            array (
                              'description' => '性能数据数组。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '监控指标数据值。',
                                    'type' => 'string',
                                    'example' => '9.33',
                                  ),
                                  'Timestamp' => 
                                  array (
                                    'description' => '监控指标的具体时间点，格式为Unix时间戳，单位为毫秒（ms）。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1600822800000',
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
              'DBVersion' => 
              array (
                'description' => '兼容数据库版本。',
                'type' => 'string',
                'example' => '8.0',
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间。格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:01:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E2FDB684-751D-424D-98B9-704BEA******',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:00:00Z',
              ),
              'DBType' => 
              array (
                'description' => '兼容数据库类型。',
                'type' => 'string',
                'example' => 'MySQL',
              ),
              'DBNodeId' => 
              array (
                'description' => '数据库集群节点ID。',
                'type' => 'string',
                'example' => 'pi-*****************',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidKey.Malformed',
            'errorMessage' => 'The specified parameter Key is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBNodeId.Malformed',
            'errorMessage' => 'The specified parameter DBNodeId is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDateRange.Malformed',
            'errorMessage' => 'The Date Range can not more than one month.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBNodeId.NotFound',
            'errorMessage' => 'The DBNodeId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformanceKeys\\": {\\n    \\"PerformanceItem\\": [\\n      {\\n        \\"MetricName\\": \\"mean_sys_dir_size\\",\\n        \\"Measurement\\": \\"PolarDBDiskUsage\\",\\n        \\"Points\\": {\\n          \\"PerformanceItemValue\\": [\\n            {\\n              \\"Value\\": \\"9.33\\",\\n              \\"Timestamp\\": 1600822800000\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"EndTime\\": \\"2020-09-23T01:01:00Z\\",\\n  \\"RequestId\\": \\"E2FDB684-751D-424D-98B9-704BEA******\\",\\n  \\"StartTime\\": \\"2020-09-23T01:00:00Z\\",\\n  \\"DBType\\": \\"MySQL\\",\\n  \\"DBNodeId\\": \\"pi-*****************\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBNodePerformanceResponse>\\n<PerformanceKeys>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_binlog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>0.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_data_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>42.38</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_log_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>4393.63</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_other_log_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>1.63</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_redolog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>4096.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_sys_dir_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>9.33</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_tmp_dir_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>0.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_undolog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>296.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n</PerformanceKeys>\\n<DBVersion>8.0</DBVersion>\\n<RequestId>E2FDB684-751D-424D-98B9-704BEA******</RequestId>\\n<EndTime>2020-09-23T01:01:00Z</EndTime>\\n<StartTime>2020-09-23T01:00:00Z</StartTime>\\n<DBNodeId>pi-*****************</DBNodeId>\\n<DBType>MySQL</DBType>\\n</DescribeDBNodePerformanceResponse>","errorExample":""}]',
      'title' => '查询集群节点的性能数据',
      'summary' => '查询PolarDB集群节点的性能数据。',
      'description' => '* 若监控频率为5秒/次：
    - 当查询时间范围小于等于1小时，显示粒度为5秒。
    - 当查询时间范围小于等于1天，显示粒度为1分钟。
    - 当查询时间范围小于等于7天，显示粒度为10分钟。
    - 当查询时间范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。

* 若监控频率为60秒/次：
    - 当查询范围小于等于1天，显示粒度为1分钟。
    - 当查询范围小于等于7天，显示粒度为10分钟。
    - 当查询范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。

> 监控频率默认为60秒/次，您可以调用[ModifyDBClusterMonitor](~~159557~~)接口将其设置为5秒/次。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的性能指标，多个值间用英文逗号（,）分隔，详细参数请参见[性能参数表](~~141787~~)。

> 最多可传入5个查询的性能指标。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PolarDBDiskUsage',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-23T01:01Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-23T01:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能数据粒度。取值范围如下：

- 5
- 30
- 60
- 600
- 1800
- 3600
- 86400',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '60',
          ),
        ),
      ),
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
                'type' => 'object',
                'properties' => 
                array (
                  'PerformanceItem' => 
                  array (
                    'description' => '集群性能数据列表。
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MetricName' => 
                        array (
                          'description' => '具体的性能指标度量名称。',
                          'type' => 'string',
                          'example' => 'mean_data_size',
                        ),
                        'Measurement' => 
                        array (
                          'description' => '性能指标。',
                          'type' => 'string',
                          'example' => 'PolarDBDiskUsage',
                        ),
                        'Points' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PerformanceItemValue' => 
                            array (
                              'description' => '性能数据数组。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '监控指标数据值。',
                                    'type' => 'string',
                                    'example' => '42.38',
                                  ),
                                  'Timestamp' => 
                                  array (
                                    'description' => '监控指标的具体时间点，格式为时间戳，单位为毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1600822800000',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DBNodeId' => 
                        array (
                          'description' => '数据库集群节点ID。

> 当请求参数中`Key`的值设置为`PolarDBDiskUsage`时，不会返回该参数。
',
                          'type' => 'string',
                          'example' => 'pi-*************',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBVersion' => 
              array (
                'description' => '兼容数据库版本。',
                'type' => 'string',
                'example' => '8.0',
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间。格式：`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:01:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '35D3E3DA-4650-407A-BFF5-59BFF1******',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式：`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:00:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'DBType' => 
              array (
                'description' => '兼容数据库类型。',
                'type' => 'string',
                'example' => 'MySQL',
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
            'errorCode' => 'InvalidKey.Malformed',
            'errorMessage' => 'The specified parameter Key is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be greater than the start time.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDateRange.Malformed',
            'errorMessage' => 'The Date Range can not more than one month.',
          ),
        ),
        404 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformanceKeys\\": {\\n    \\"PerformanceItem\\": [\\n      {\\n        \\"MetricName\\": \\"mean_data_size\\",\\n        \\"Measurement\\": \\"PolarDBDiskUsage\\",\\n        \\"Points\\": {\\n          \\"PerformanceItemValue\\": [\\n            {\\n              \\"Value\\": \\"42.38\\",\\n              \\"Timestamp\\": 1600822800000\\n            }\\n          ]\\n        },\\n        \\"DBNodeId\\": \\"pi-*************\\"\\n      }\\n    ]\\n  },\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"EndTime\\": \\"2020-09-23T01:01:00Z\\",\\n  \\"RequestId\\": \\"35D3E3DA-4650-407A-BFF5-59BFF1******\\",\\n  \\"StartTime\\": \\"2020-09-23T01:00:00Z\\",\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"DBType\\": \\"MySQL\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n<PerformanceKeys>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_binlog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>0.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_data_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>42.38</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_log_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>4393.63</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_other_log_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>1.63</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_redolog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>4096.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_sys_dir_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>11.47</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_tmp_dir_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>0.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n    <PerformanceItem>\\n        <Measurement>PolarDBDiskUsage</Measurement>\\n        <MetricName>mean_undolog_size</MetricName>\\n        <Points>\\n            <PerformanceItemValue>\\n                <Value>296.00</Value>\\n                <Timestamp>1600822800000</Timestamp>\\n            </PerformanceItemValue>\\n        </Points>\\n    </PerformanceItem>\\n</PerformanceKeys>\\n<DBVersion>8.0</DBVersion>\\n<RequestId>35D3E3DA-4650-407A-BFF5-59BFF1******</RequestId>\\n<EndTime>2020-09-23T01:01:00Z</EndTime>\\n<DBClusterId>pc-*****************</DBClusterId>\\n<StartTime>2020-09-23T01:00:00Z</StartTime>\\n<DBType>MySQL</DBType>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
      'title' => '查询PolarDB集群的性能数据',
      'summary' => '查询PolarDB集群的性能数据。',
      'description' => '* 若监控频率为5秒/次：
    - 当查询时间范围小于等于1小时，显示粒度为5秒。
    - 当查询时间范围小于等于1天，显示粒度为1分钟。
    - 当查询时间范围小于等于7天，显示粒度为10分钟。
    - 当查询时间范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。

* 若监控频率为60秒/次：
    - 当查询范围小于等于1天，显示粒度为1分钟。
    - 当查询范围小于等于7天，显示粒度为10分钟。
    - 当查询范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。

> 监控频率默认为60秒/次，您可以调用[ModifyDBClusterMonitor](~~159557~~)接口将其设置为5秒/次。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBProxyPerformance' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBEndpointId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据库代理连接地址ID。支持集群地址与自定义地址的查询，不支持主地址的查询。不传则默认查询集群地址。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'pe-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '性能数据粒度。取值范围如下：

- 5
- 30
- 60
- 600
- 1800
- 3600
- 86400',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '60',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '特殊指标，目前仅支持tair（PolarTair架构）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'tair',
          ),
        ),
        4 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的性能指标，多个值间用英文逗号（,）分隔，详细参数请参见[性能参数表](~~141787~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PolarProxy_CpuUsage',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-23T01:01Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为`yyyy-MM-ddTHH:mmZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2020-09-24T02:08Z',
          ),
        ),
      ),
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
                'type' => 'object',
                'properties' => 
                array (
                  'PerformanceItem' => 
                  array (
                    'description' => '集群性能数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MetricName' => 
                        array (
                          'description' => '具体的性能指标度量名称。',
                          'type' => 'string',
                          'example' => 'service_connections_ps',
                        ),
                        'Measurement' => 
                        array (
                          'description' => '性能指标。',
                          'type' => 'string',
                          'example' => 'PolarProxy_CpuUsage',
                        ),
                        'Points' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PerformanceItemValue' => 
                            array (
                              'description' => '性能数据数组。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '监控指标数据值。',
                                    'type' => 'string',
                                    'example' => '10',
                                  ),
                                  'Timestamp' => 
                                  array (
                                    'description' => '监控指标的具体时间点，格式为时间戳，单位为毫秒。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1600822800000',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DBNodeId' => 
                        array (
                          'description' => '数据库集群节点ID。',
                          'type' => 'string',
                          'example' => 'pi-*************',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DBVersion' => 
              array (
                'description' => '兼容数据库版本。',
                'type' => 'string',
                'example' => '8.0',
              ),
              'EndTime' => 
              array (
                'description' => '查询结束时间。格式：`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:01:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '35D3E3DA-4650-407A-BFF5-59BFF1******',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式：`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                'type' => 'string',
                'example' => '2020-09-23T01:00:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '数据库集群ID。',
                'type' => 'string',
                'example' => 'pc-*****************',
              ),
              'DBType' => 
              array (
                'description' => '兼容数据库类型。',
                'type' => 'string',
                'example' => 'MySQL',
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
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be greater than the start time.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified parameter StartTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified parameter EndTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidKey.Malformed',
            'errorMessage' => 'The specified parameter Key is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBEndpointId.NotFound',
            'errorMessage' => 'The DBEndpointId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformanceKeys\\": {\\n    \\"PerformanceItem\\": [\\n      {\\n        \\"MetricName\\": \\"service_connections_ps\\",\\n        \\"Measurement\\": \\"PolarProxy_CpuUsage\\",\\n        \\"Points\\": {\\n          \\"PerformanceItemValue\\": [\\n            {\\n              \\"Value\\": \\"10\\",\\n              \\"Timestamp\\": 1600822800000\\n            }\\n          ]\\n        },\\n        \\"DBNodeId\\": \\"pi-*************\\"\\n      }\\n    ]\\n  },\\n  \\"DBVersion\\": \\"8.0\\",\\n  \\"EndTime\\": \\"2020-09-23T01:01:00Z\\",\\n  \\"RequestId\\": \\"35D3E3DA-4650-407A-BFF5-59BFF1******\\",\\n  \\"StartTime\\": \\"2020-09-23T01:00:00Z\\",\\n  \\"DBClusterId\\": \\"pc-*****************\\",\\n  \\"DBType\\": \\"MySQL\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBProxyPerformanceResponse>\\n    <PerformanceKeys>\\n        <MetricName>service_connections_ps</MetricName>\\n        <Measurement>PolarProxy_CpuUsage</Measurement>\\n        <Points>\\n            <Value>10</Value>\\n            <Timestamp>1600822800000</Timestamp>\\n        </Points>\\n        <DBNodeId>pi-*************</DBNodeId>\\n    </PerformanceKeys>\\n    <DBVersion>8.0</DBVersion>\\n    <EndTime>2020-09-23T01:01:00Z</EndTime>\\n    <RequestId>35D3E3DA-4650-407A-BFF5-59BFF1******</RequestId>\\n    <StartTime>2020-09-23T01:00:00Z</StartTime>\\n    <DBClusterId>pc-*****************</DBClusterId>\\n    <DBType>MySQL</DBType>\\n</DescribeDBProxyPerformanceResponse>","errorExample":""}]',
      'title' => '查询PolarDB代理层（PolarProxy）的性能数据',
      'summary' => '查询PolarDB代理层（PolarProxy）的性能数据。',
      'description' => '> 该接口仅适用于PolarDB MySQL版。',
    ),
    'DescribeDBClusterMonitor' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
      ),
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
                'example' => '593AE1C5-B70C-463F-9207-074639******',
              ),
              'Period' => 
              array (
                'description' => '监控数据的采集间隔，单位为秒。',
                'type' => 'string',
                'example' => '60',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"593AE1C5-B70C-463F-9207-074639******\\",\\n  \\"Period\\": \\"60\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterMonitorResponse>\\n<RequestId>593AE1C5-B70C-463F-9207-074639******</RequestId>\\n<Period>60</Period>\\n</DescribeDBClusterMonitorResponse>","errorExample":""}]',
      'title' => '查询集群监控数据采集频率',
      'summary' => '查询PolarDB集群的监控数据采集频率。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBClusterMonitor' => 
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控的采集间隔，取值为**5**或**60**，单位为秒。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '75B92353-73B4-447B-8477-C85F3C******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBInstanceMonitorPeriod',
            'errorMessage' => 'Current DB instance does not support this monitor period.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBInstanceId.NotFound',
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"75B92353-73B4-447B-8477-C85F3C******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMonitorResponse>\\r\\n<RequestId>75B92353-73B4-447B-8477-C85F3C******</RequestId>\\r\\n</ModifyDBClusterMonitorResponse>","errorExample":""}]',
      'title' => '修改集群监控数据采集频率',
      'summary' => '修改PolarDB集群的监控数据采集频率。',
      'description' => '* 若监控频率为5秒/次：
    - 当查询时间范围小于等于1小时，显示粒度为5秒。
    - 当查询时间范围小于等于1天，显示粒度为1分钟。
    - 当查询时间范围小于等于7天，显示粒度为10分钟。
    - 当查询时间范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。

* 若监控频率为60秒/次：
    - 当查询范围小于等于1天，显示粒度为1分钟。
    - 当查询范围小于等于7天，显示粒度为10分钟。
    - 当查询范围小于等于30天，显示粒度为1小时。
    - 当查询范围大于30天，显示粒度为1天。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAITaskStatus' => 
    array (
      'summary' => '查看PolarDB for AI功能状态。',
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-xxxxxxxxxx',
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
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'Status' => 
              array (
                'description' => 'PolarDB for AI功能状态。取值：

- **1**：开启

- **2**：关闭',
                'type' => 'string',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-xxxxxxxxxx',
              ),
              'StatusName' => 
              array (
                'description' => 'PolarDB for AI功能状态描述。',
                'type' => 'string',
                'example' => '关闭状态',
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
            'errorCode' => 'CallDB4AI.Error',
            'errorMessage' => 'Call db4ai api error.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBInstance.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"Status\\": \\"1\\",\\n  \\"DBClusterId\\": \\"pc-xxxxxxxxxx\\",\\n  \\"StatusName\\": \\"关闭状态\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAITaskStatusResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <Status>1</Status>\\n    <DBClusterId>pc-xxxxxxxxxx</DBClusterId>\\n    <StatusName>关闭状态</StatusName>\\n</DescribeAITaskStatusResponse>","errorExample":""}]',
      'title' => '获取AI任务状态数据',
    ),
    'OpenAITask' => 
    array (
      'summary' => '开启PolarDB for AI功能。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要开启PolarDB for AI功能的数据库账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'testAccountName',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要开启PolarDB for AI功能的数据库账号的密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'testPassword',
          ),
        ),
        4 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型。取值说明：

- **DLNode**：ai节点。
- **SearchNode**：搜索ai节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'DLNode',
          ),
        ),
        5 => 
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '53879cdb-9a00-428e-acaf-ff4cff******',
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
            'errorCode' => 'MissParameter.NodeType',
            'errorMessage' => 'The parameter nodeType is needed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.NodeType',
            'errorMessage' => 'The parameter NodeType is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'CallDB4AI.Error',
            'errorMessage' => 'Call db4ai api error.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccount.Malformed',
            'errorMessage' => 'The specified parameter account or password is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAINode.NotFound',
            'errorMessage' => 'The AINode provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"TaskId\\": \\"53879cdb-9a00-428e-acaf-ff4cff******\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenAITaskResponse>\\n    <RequestId>9B7BFB11-C077-4FE3-B051-F69CEB******</RequestId>\\n    <TaskId>53879cdb-9a00-428e-acaf-ff4cff******</TaskId>\\n</OpenAITaskResponse>","errorExample":""}]',
      'title' => '开启AI任务',
    ),
    'CloseAITask' => 
    array (
      'summary' => '关闭PolarDB for AI功能。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-**************',
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
                'example' => '936C7025-27A5-4CB1-BB31-540E1F0CCA12',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '53879cdb-9a00-428e-acaf-ff4cff******',
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
            'errorCode' => 'CallDB4AI.Error',
            'errorMessage' => 'Call db4ai api error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.ClusterCategory',
            'errorMessage' => 'The operation is not permitted due to cluster category.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"936C7025-27A5-4CB1-BB31-540E1F0CCA12\\",\\n  \\"TaskId\\": \\"53879cdb-9a00-428e-acaf-ff4cff******\\"\\n}","errorExample":""},{"type":"xml","example":"<CloseAITaskResponse>\\n    <RequestId>936C7025-27A5-4CB1-BB31-540E1F0CCA12</RequestId>\\n    <TaskId>53879cdb-9a00-428e-acaf-ff4cff******</TaskId>\\n</CloseAITaskResponse>","errorExample":""}]',
      'title' => '关闭AI任务',
    ),
    'CreateDBLink' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBLink的源集群ID。

> 您可以通过[DescribeDBClusters](~~173433~~)接口查看PolarDB集群列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-a************',
          ),
        ),
        2 => 
        array (
          'name' => 'DBLinkName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBLink名称。

- 由小写字母、数字、下划线（_）其中一到三种组成，必须包含小写字母。
- 以字母开头，字母或数字结尾。
- 长度不超过64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dblink_test',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetDBInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBLink的目标集群ID。

> - 如果目标为ECS自建Oracle数据库，该参数请传入`null`。
> - 您可以通过[DescribeDBClusters](~~173433~~)接口查看PolarDB集群列表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'pc-b************',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetDBAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库账号。

> 您可以通过[DescribeAccounts](~~173549~~)接口查看PolarDB集群的数据库账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testacc',
          ),
        ),
        5 => 
        array (
          'name' => 'TargetDBPasswd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库账号的密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Test1111',
          ),
        ),
        6 => 
        array (
          'name' => 'TargetDBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库名称。

> 您可以通过[DescribeDatabases](~~173558~~)接口查询PolarDB集群中的数据库信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testdb2',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceDBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源数据库名称。

> 您可以通过[DescribeDatabases](~~173558~~)接口查询PolarDB集群中的数据库信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testdb1',
          ),
        ),
        8 => 
        array (
          'name' => 'TargetIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS自建Oracle数据库的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.**.**.46',
          ),
        ),
        9 => 
        array (
          'name' => 'TargetPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS自建Oracle数据库的端口号。',
            'type' => 'string',
            'required' => false,
            'example' => '1521',
          ),
        ),
        10 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC ID。

> 可通过接口[DescribeVpcs](~~35739~~)查看VPC信息详情。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1qpo0kug3a20qqe****',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 可通过接口[DescribeRegions](~~98041~~)查看地域信息详情。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f54a343f1a4233c1e7d1c5c******',
          ),
        ),
      ),
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
                'example' => 'F9F1CB1A-B1D5-4EF5-A53A-************',
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
            'errorCode' => 'InvalidDBLinkName.Malformed',
            'errorMessage' => 'The specified parameter DBLinkName is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'DBLinkSourceDBNotFound',
            'errorMessage' => 'Specified source db does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F9F1CB1A-B1D5-4EF5-A53A-************\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBLinkResponse>\\r\\n    <RequestId>F9F1CB1A-B1D5-4EF5-A53A-************</RequestId>\\r\\n</CreateDBLinkResponse>","errorExample":""}]',
      'title' => '创建DBLink',
      'summary' => '创建DBLink。',
      'description' => 'DBLink可以连接两个PolarDB PostgreSQL版（兼容Oracle）集群，也可以连接PolarDB PostgreSQL版（兼容Oracle）集群和ECS自建PostgreSQL数据库。您可以通过DBLink跨集群查询数据。

> - 一个集群最多可创建10条DBLink。
> - DBLink的源集群和目标集群均会占用自身1条DBLink。
> - 源集群与目标集群或目标ECS必须位于同一个地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartDBLink' => 
    array (
      'summary' => '重启代理。',
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
> 您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
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
                'example' => 'E56531A4-E552-40BA-9C58-137B80******',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ec8c4723-eac5-4f12-becb-01ac08******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-****************
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E56531A4-E552-40BA-9C58-137B80******\\",\\n  \\"TaskId\\": \\"ec8c4723-eac5-4f12-becb-01ac08******\\",\\n  \\"DBClusterId\\": \\"pc-****************\\\\n\\"\\n}","type":"json"}]',
      'title' => '重启代理',
    ),
    'DeleteDBLink' => 
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
            'description' => '待删除DBLink的源集群ID。

> 您可以通过[DescribeDBClusters](~~173433~~)接口查看PolarDB集群列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-**************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBLinkName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除DBLink的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dblink_test',
          ),
        ),
      ),
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
                'example' => 'F9F1CB1A-B1D5-4EF5-A53A-************',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.DBClusterDeletionLock',
            'errorMessage' => 'The operation is not permitted due to the deletion lock of cluster.',
          ),
        ),
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
            'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F9F1CB1A-B1D5-4EF5-A53A-************\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBLinkResponse>\\r\\n    <RequestId>F9F1CB1A-B1D5-4EF5-A53A-************</RequestId>\\r\\n</DeleteDBLinkResponse>","errorExample":""}]',
      'title' => '删除集群中DBLink',
      'summary' => '删除PolarDB PostgreSQL版（兼容Oracle）集群中的DBLink。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBLinks' => 
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
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询DBLink的集群ID。

> 您可以通过[DescribeDBClusters](~~173433~~)接口查看PolarDB集群列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-a*************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBLinkName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBLink名称。不传则返回所有DBLink。',
            'type' => 'string',
            'required' => false,
            'example' => 'dblink_test',
          ),
        ),
      ),
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
                'example' => '45D24263-7E3A-4140-9472-************',
              ),
              'DBLinkInfos' => 
              array (
                'description' => 'DBLink信息集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DBInstanceName' => 
                    array (
                      'description' => 'DBLink的源集群ID。',
                      'type' => 'string',
                      'example' => 'pc-a*************',
                    ),
                    'DBLinkName' => 
                    array (
                      'description' => 'DBLink名称。',
                      'type' => 'string',
                      'example' => 'dblink_test',
                    ),
                    'SourceDBName' => 
                    array (
                      'description' => 'DBLink的源数据库名称。',
                      'type' => 'string',
                      'example' => 'testdb1',
                    ),
                    'TargetDBName' => 
                    array (
                      'description' => 'DBLink的目标数据库名称。',
                      'type' => 'string',
                      'example' => 'testdb2',
                    ),
                    'TargetDBInstanceName' => 
                    array (
                      'description' => 'DBLink的目标集群ID。

> 如果目标不是PolarDB PostgreSQL版（兼容Oracle）集群，则该参数为空。',
                      'type' => 'string',
                      'example' => 'pc-b************',
                    ),
                    'TargetAccount' => 
                    array (
                      'description' => 'DBLink的目标数据库账号。',
                      'type' => 'string',
                      'example' => 'testacc',
                    ),
                  ),
                ),
              ),
              'DBInstanceName' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-a*************',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45D24263-7E3A-4140-9472-************\\",\\n  \\"DBLinkInfos\\": [\\n    {\\n      \\"DBInstanceName\\": \\"pc-a*************\\",\\n      \\"DBLinkName\\": \\"dblink_test\\",\\n      \\"SourceDBName\\": \\"testdb1\\",\\n      \\"TargetDBName\\": \\"testdb2\\",\\n      \\"TargetDBInstanceName\\": \\"pc-b************\\",\\n      \\"TargetAccount\\": \\"testacc\\"\\n    }\\n  ],\\n  \\"DBInstanceName\\": \\"pc-a*************\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBLinksResponse>\\n    <RequestId>45D24263-7E3A-4140-9472-7C1BE3B1F19A</RequestId>\\n    <DBLinkInfos>\\n        <SourceDBName>testdb1</SourceDBName>\\n        <TargetDBName>testdb2</TargetDBName>\\n        <TargetAccount>testacc</TargetAccount>\\n        <TargetDBInstanceName>pc-b************</TargetDBInstanceName>\\n        <DBInstanceName>pc-a*************</DBInstanceName>\\n        <DBLinkName>dblink_test</DBLinkName>\\n    </DBLinkInfos>\\n</DescribeDBLinksResponse>","errorExample":""}]',
      'title' => '查询集群DBLink信息',
      'summary' => '查询PolarDB PostgreSQL版（兼容Oracle）集群的DBLink信息。',
      'description' => '> 目前仅支持查询以PolarDB PostgreSQL版（兼容Oracle）集群为源的DBLink信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterConnectivity' => 
    array (
      'summary' => '调用接口DescribeDBClusterConnectivity查询源IP地址能否正常访问数据库。',
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-xxxxxxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户源IP地址。',
            'type' => 'string',
            'required' => true,
            'example' => '192.***.***.1',
          ),
        ),
      ),
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
                'example' => '73A85BAF-1039-4CDE-A83F-1A140F******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'pc-xxxxxxxxxxxxx',
              ),
              'ConnCheckResult' => 
              array (
                'description' => '连接诊断结果。取值范围如下：
* **Success**
* **Failed**',
                'type' => 'string',
                'example' => 'Failed',
              ),
              'ConnCheckErrorCode' => 
              array (
                'description' => '连接诊断错误码。取值范围如下：
* **SRC_IP_NOT_IN_USER_WHITELIST**：源IP地址没有加入白名单。
* **CONNECTION_ABNORMAL**：连接正常。',
                'type' => 'string',
                'example' => 'SRC_IP_NOT_IN_USER_WHITELIST',
              ),
              'ConnCheckErrorMessage' => 
              array (
                'description' => '连接诊断错误信息。',
                'type' => 'string',
                'example' => 'Src ip:192.***.***.1 not in user whitelist',
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
            'errorCode' => 'InvalidAction',
            'errorMessage' => 'Specified action is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"73A85BAF-1039-4CDE-A83F-1A140F******\\",\\n  \\"DBClusterId\\": \\"pc-xxxxxxxxxxxxx\\",\\n  \\"ConnCheckResult\\": \\"Failed\\",\\n  \\"ConnCheckErrorCode\\": \\"SRC_IP_NOT_IN_USER_WHITELIST\\",\\n  \\"ConnCheckErrorMessage\\": \\"Src ip:192.***.***.1 not in user whitelist\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterConnectivityResponse>\\n    <RequestId>73A85BAF-1039-4CDE-A83F-1A140F******</RequestId>\\n    <DBClusterId>pc-xxxxxxxxxxxxx</DBClusterId>\\n    <ConnCheckResult>Failed</ConnCheckResult>\\n    <ConnCheckErrorCode>SRC_IP_NOT_IN_USER_WHITELIST</ConnCheckErrorCode>\\n    <ConnCheckErrorMessage>Src ip:192.***.***.1 not in user whitelist</ConnCheckErrorMessage>\\n</DescribeDBClusterConnectivityResponse>","errorExample":""}]',
      'title' => '查询源IP地址能否正常访问数据库',
    ),
    'CreateColdStorageInstance' => 
    array (
      'summary' => '创建冷存储实例。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-************',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
>您可以通过[describedbclusters](~~98094~~)接口查看账号下所有集群的详细信息（如集群ID）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-wz9ye3xrtj60ua6d1',
          ),
        ),
        2 => 
        array (
          'name' => 'ColdStorageInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '冷存储实例的描述。长度为不超过256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间该参数值的唯一性。该参数区分大小写、长度不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '6000170000591aed949d0f5********************',
          ),
        ),
      ),
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
                'example' => 'F6EBB4ED-D12F-5F49-824C-9DD9C0EC4CF2',
              ),
              'ColdStorageInstanceId' => 
              array (
                'description' => '冷存储实例ID。',
                'type' => 'string',
                'example' => 'pcs_2zeth2gf4i83e578t',
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
            'errorCode' => 'LockTimeout',
            'errorMessage' => 'The request processing has failed due to lock timeout.',
          ),
          1 => 
          array (
            'errorCode' => 'EngineMigration.ActionDisabled',
            'errorMessage' => 'Specified action is disabled while custins is in engine migration.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBClusterId.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F6EBB4ED-D12F-5F49-824C-9DD9C0EC4CF2\\",\\n  \\"ColdStorageInstanceId\\": \\"pcs_2zeth2gf4i83e578t\\"\\n}","type":"json"}]',
      'title' => '创建冷存储实例',
    ),
    'RefreshDBClusterStorageUsage' => 
    array (
      'summary' => '更新集群实例存储使用量。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SyncRealTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置同步时间，取值范围：
- **true**: 实时同步
- **false**: T + 1',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E56531A4-E552-40BA-9C58-137B80******',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E56531A4-E552-40BA-9C58-137B80******\\"\\n}","type":"json"}]',
      'title' => '更新集群存储使用量',
    ),
    'EnableFirewallRules' => 
    array (
      'summary' => '修改sql防火墙状态。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-************	
',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleNameList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要启用的防火墙规则名称。支持输入多个规则名称进行批量查询，多个名称间用英文逗号（,）分隔。

> 您可以通过**DescribeFirewallRules**接口查看目标集群下所有防火墙规则的详情，包括规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test111',
          ),
        ),
        2 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启用或禁用目标防火墙规则。取值范围如下：

- **true**：启用。
- **false**：禁用。

> 仅当**RuleNameList**有参数值输入时，该参数生效。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '99B355CE-526C-478B-B730-AD9D7C******',
              ),
              'Message' => 
              array (
                'description' => '请求返回消息。

>请求成功时该参数返回Successful，请求失败时会返回请求异常信息（如错误码等）。',
                'type' => 'string',
                'example' => 'Message',
              ),
              'Success' => 
              array (
                'description' => '请求结果。取值：

- **true**：请求成功。
- **false**：请求失败。',
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
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"99B355CE-526C-478B-B730-AD9D7C******\\",\\n  \\"Message\\": \\"Message\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启用实例的防火墙规则',
    ),
    'ModifyDBClusterResourceGroup' => 
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '原资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-*************',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更后的资源组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-**********',
          ),
        ),
      ),
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
                'example' => '70656639-1416-479F-AF13-D08197******',
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
            'errorCode' => 'InvalidNewResourceGroupId.Malformed',
            'errorMessage' => 'The specified parameter NewResourceGroupId is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBClusterId.Malformed',
            'errorMessage' => 'The specified parameter DBClusterId is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"70656639-1416-479F-AF13-D08197******\\"\\n}","type":"json"}]',
      'title' => '修改数据库群集资源组',
      'summary' => '修改数据库群集资源组。',
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '3F9E6A3B-C13E-4064-A010-18582A******',
              ),
              'HasServiceLinkedRole' => 
              array (
                'description' => '是否已创建服务关联角色。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F9E6A3B-C13E-4064-A010-18582A******\\",\\n  \\"HasServiceLinkedRole\\": true\\n}","type":"json"}]',
      'title' => '查看是否已创建服务关联角色',
      'summary' => '调用 CheckServiceLinkedRole 接口查看是否已创建服务关联角色。',
    ),
    'CreateServiceLinkedRole' => 
    array (
      'summary' => '调用 CreateServiceLinkedRole 接口创建服务关联角色。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '3F9E6A3B-C13E-4064-A010-18582A******',
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
            'errorCode' => 'Unknown.Exception',
            'errorMessage' => 'The Request Server Is Error Or The Response Can Not Be Null.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F9E6A3B-C13E-4064-A010-18582A******\\"\\n}","type":"json"}]',
      'title' => '创建服务关联角色',
    ),
    'DescribeDasConfig' => 
    array (
      'summary' => '查看集群对应的DAS配置。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
>您可以通过[DescribeDBClusters](~~98094~~)接口查看账号下所有集群的详细信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
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
                'example' => '593AE1C5-B70C-463F-9207-074639******',
              ),
              'StorageAutoScale' => 
              array (
                'description' => '标准版集群是否开启存储自动扩容。取值范围如下：

- Enable：开启存储自动扩容。
- Disable：关闭存储自动扩容。',
                'type' => 'string',
                'example' => 'Enable',
              ),
              'StorageUpperBound' => 
              array (
                'description' => '标准版集群存储自动扩容上限。单位：GB。

> 该参数仅在StorageAutoScale参数值为Enable时有效。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '800',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"593AE1C5-B70C-463F-9207-074639******\\",\\n  \\"StorageAutoScale\\": \\"Enable\\",\\n  \\"StorageUpperBound\\": 800\\n}","type":"json"}]',
      'title' => '查看集群 DAS 配置',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'polardb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'polardb.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'polardb.cn-chengdu.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'polardb.ap-northeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'polardb.ap-northeast-2.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'polardb.ap-southeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'polardb.ap-southeast-3.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'polardb.ap-southeast-5.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'polardb.ap-southeast-6.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'polardb.us-east-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'polardb.us-west-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'polardb.eu-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'polardb.eu-central-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'polardb.ap-south-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'polardb.me-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'polardb.ap-southeast-7.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'polardb.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'adb',
    'version' => '2019-03-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 74180,
      'title' => '集群管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBCluster',
        1 => 'DeleteDBCluster',
        2 => 'ModifyDBCluster',
        3 => 'ModifyDBClusterMaintainTime',
        4 => 'ModifyDBClusterPayType',
        5 => 'ModifyAutoRenewAttribute',
        6 => 'ModifyDBClusterDescription',
        7 => 'ModifyDBClusterResourceGroup',
        8 => 'DescribeDBClusters',
        9 => 'DescribeDBClusterStatus',
        10 => 'DescribeDBClusterAttribute',
        11 => 'DescribeAutoRenewAttribute',
        12 => 'DescribeAvailableResource',
        13 => 'DescribeComputeResource',
        14 => 'DescribeEIURange',
        15 => 'AttachUserENI',
        16 => 'DetachUserENI',
        17 => 'DescribeKernelVersion',
        18 => 'UpgradeKernelVersion',
      ),
    ),
    1 => 
    array (
      'id' => 74192,
      'title' => '资源组管理（旧版）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBResourcePool',
        1 => 'DeleteDBResourcePool',
        2 => 'ModifyDBResourcePool',
        3 => 'DescribeDBResourcePool',
        4 => 'BindDBResourcePoolWithUser',
        5 => 'UnbindDBResourcePoolWithUser',
      ),
    ),
    2 => 
    array (
      'id' => 181276,
      'title' => '资源组管理（新版）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBResourceGroup',
        1 => 'BindDBResourceGroupWithUser',
        2 => 'UnbindDBResourceGroupWithUser',
        3 => 'DescribeDBResourceGroup',
        4 => 'ModifyDBResourceGroup',
        5 => 'DeleteDBResourceGroup',
      ),
    ),
    3 => 
    array (
      'id' => 74199,
      'title' => '弹性计划管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateElasticPlan',
        1 => 'DeleteElasticPlan',
        2 => 'ModifyElasticPlan',
        3 => 'DescribeElasticDailyPlan',
        4 => 'DescribeElasticPlan',
      ),
    ),
    4 => 
    array (
      'id' => 74205,
      'title' => '数据库',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTables',
        1 => 'DescribeAllDataSource',
        2 => 'DescribeSchemas',
        3 => 'DescribeTableDetail',
        4 => 'DescribeProcessList',
        5 => 'DescribeColumns',
        6 => 'DescribeTaskInfo',
        7 => 'DescribeSQLPlan',
        8 => 'DescribeSQLPlanTask',
        9 => 'DescribeTablePartitionDiagnose',
        10 => 'DescribeLoadTasksRecords',
        11 => 'DescribeConnectionCountRecords',
        12 => 'KillProcess',
      ),
    ),
    5 => 
    array (
      'id' => 74219,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyAuditLogConfig',
        1 => 'DescribeSlowLogRecords',
        2 => 'DescribeAuditLogConfig',
        3 => 'DescribeAuditLogRecords',
      ),
    ),
    6 => 
    array (
      'id' => 74225,
      'title' => '地域管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    7 => 
    array (
      'id' => 74227,
      'title' => '网络管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyClusterConnectionString',
        1 => 'DescribeDBClusterNetInfo',
        2 => 'AllocateClusterPublicConnection',
        3 => 'ReleaseClusterPublicConnection',
      ),
    ),
    8 => 
    array (
      'id' => 74232,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'DeleteAccount',
        2 => 'ModifyAccountDescription',
        3 => 'DescribeAllAccounts',
        4 => 'DescribeAccounts',
        5 => 'DescribeOperatorPermission',
        6 => 'GrantOperatorPermission',
        7 => 'ResetAccountPassword',
        8 => 'RevokeOperatorPermission',
      ),
    ),
    9 => 
    array (
      'id' => 74242,
      'title' => '标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
      ),
    ),
    10 => 
    array (
      'id' => 74246,
      'title' => '备份恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyBackupPolicy',
        1 => 'ModifyLogBackupPolicy',
        2 => 'DescribeBackupPolicy',
        3 => 'DescribeBackups',
      ),
    ),
    11 => 
    array (
      'id' => 74251,
      'title' => '安全管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBClusterAccessWhiteList',
        1 => 'DescribeDBClusterAccessWhiteList',
      ),
    ),
    12 => 
    array (
      'id' => 74254,
      'title' => '监控管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterHealthStatus',
        1 => 'DescribeDBClusterPerformance',
        2 => 'DescribeDBClusterResourcePoolPerformance',
        3 => 'DescribeInclinedTables',
      ),
    ),
    13 => 
    array (
      'id' => 74259,
      'title' => '运维事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyMaintenanceAction',
        1 => 'DescribeMaintenanceAction',
      ),
    ),
    14 => 
    array (
      'id' => 74262,
      'title' => 'SQL诊断',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDiagnosisTasks',
        1 => 'DescribeDiagnosisRecords',
        2 => 'DescribeDiagnosisDimensions',
        3 => 'DescribeDownloadRecords',
        4 => 'DownloadDiagnosisRecords',
        5 => 'DescribeDiagnosisSQLInfo',
        6 => 'DescribeDiagnosisMonitorPerformance',
        7 => 'DescribeSQLPatterns',
        8 => 'DescribePatternPerformance',
        9 => 'EnableAdviceService',
        10 => 'ApplyAdviceById',
        11 => 'BatchApplyAdviceByIdList',
        12 => 'DescribeAdviceServiceEnabled',
        13 => 'DescribeAppliedAdvices',
        14 => 'DescribeAvailableAdvices',
        15 => 'DisableAdviceService',
      ),
    ),
    15 => 
    array (
      'id' => 190394,
      'title' => '空间分析',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDBClusterSpaceSummary',
      ),
    ),
    16 => 
    array (
      'id' => 74267,
      'title' => '实例运行报告',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTableAccessCount',
        1 => 'DescribeSqlPattern',
      ),
    ),
    17 => 
    array (
      'id' => 186969,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeVSwitches',
        1 => 'MigrateDBCluster',
        2 => 'DescribeTableStatistics',
        3 => 'ModifyResubmitConfig',
        4 => 'DescribeResubmitConfig',
        5 => 'DescribeSQAConfig',
        6 => 'ModifySQAConfig',
        7 => 'DescribeDBClusterSSL',
        8 => 'ModifyDBClusterSSL',
      ),
    ),
    18 => 
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
    ),
  ),
  'apis' => 
  array (
    'CreateDBCluster' => 
    array (
      'summary' => '创建AnalyticDB for MySQL数仓版集群。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
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
>您可以调用[DescribeRegions](~~143074~~)接口查看可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版集群版本。取值：**3.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3.0',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系列。取值说明：
- **Cluster**：预留模式集群版。

<props="china">
> 仅中国内地地域和新加坡地域支持购买预留模式集群版。其中，新加坡地域仅支持在按量付费模式下购买预留模式集群版。</props>

- **MixedStorage**：弹性模式集群版（新版）。

> 当DBClusterCategory为Cluster时，Mode参数必须填写Reserver；当DBClusterCategory为MixedStorage时，Mode参数必须填写Flexible，否则会导致创建集群失败。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Cluster',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群规格，取值：

- **C8**
- **C32**

>Mode取值为Reserver（即预留模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'C8',
          ),
        ),
        5 => 
        array (
          'name' => 'DBNodeGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点组数量，取值范围为：1~200（整数）。
>Mode取值为Reserver（即预留模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'DBNodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点存储空间，单位：GB。取值说明：

- 规格为C8时，取值范围为：100~1000。
- 规格为C32时，取值范围为：100~8000。

> - Mode取值为Reserver（即预留模式）时，本参数必填。
> - 1000 GB以下步长为100 GB，1000 GB以上步长为1000 GB。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '200',
          ),
        ),
        7 => 
        array (
          'name' => 'DBClusterNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型：**VPC**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'VPC',
          ),
        ),
        8 => 
        array (
          'name' => 'DBClusterDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群描述。
- 不能以`http://`或者`https`开头。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        9 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。取值说明：

- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Postpaid',
          ),
        ),
        10 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群为包年或包月类型。取值说明：
- **Year**：包年类型。
- **Month**：包月类型。

>PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Year',
          ),
        ),
        11 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费集群的购买时长。取值说明：

- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。
- 当Period为Month时，UsedTime取值范围为：1~11（整数）。

> - PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。
> - 购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
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
            'example' => 'vpc-bp1at5ze0t5u3xtqn****',
          ),
        ),
        13 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1aadw9k19x6cis9****',
          ),
        ),
        14 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间唯一。大小写敏感、不超过64个ASCII 字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-t7241****',
          ),
        ),
        15 => 
        array (
          'name' => 'ExecutorCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        16 => 
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
        17 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息列表。',
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
                  'example' => 'tag1',
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
        18 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模式。取值说明：
- **Reserver**：预留模式。
- **Flexible**：弹性模式。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Reserver',
          ),
        ),
        19 => 
        array (
          'name' => 'StorageResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        20 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        21 => 
        array (
          'name' => 'ComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算资源用于数据计算，增加计算资源可以提高数据查询速度。计算资源分为集群版和单机版，其中：
- 集群版为16核64 GB（集群版）、24核96 GB（集群版）和32核及以上规格。集群版支持资源池隔离，分时弹性功能和数据冷热分层。
- 单机版为8核32 GB和16核64 GB（单机版）。单机版不提供SLA承诺，故障恢复耗时长（大约为4~8小时），不建议用于生产环境。

> - 您可以调用[DescribeAvailableResource](~~190632~~)接口查询指定地域中可用的计算资源。
> - Mode取值为**Flexible**（即弹性模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '32Core128GBNEW',
          ),
        ),
        22 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        23 => 
        array (
          'name' => 'SourceDBInstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        24 => 
        array (
          'name' => 'BackupSetID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        25 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预留参数，不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        26 => 
        array (
          'name' => 'ElasticIOResource',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '弹性IO资源（Elastic IO Unit，简称EIU），更多详情，请参见[EIU详解](~~189505~~)。
',
            'type' => 'string',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        27 => 
        array (
          'name' => 'DiskEncryption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启云盘加密。取值：

- true：是。
- false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        28 => 
        array (
          'name' => 'KmsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于云盘加密的kmsId，仅当DiskEncryption为true时有效。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxx',
          ),
        ),
      ),
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
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-4690g37929****',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-bp1r053byu48p****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ResourceGroupId\\": \\"rg-4690g37929****\\",\\n  \\"DBClusterId\\": \\"am-bp1r053byu48p****\\",\\n  \\"OrderId\\": \\"202353278****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ResourceGroupId>rg-4690g37929****</ResourceGroupId>\\n    <DBClusterId>am-bp1r053byu48p****</DBClusterId>\\n    <OrderId>202353278****</OrderId>\\n</CreateDBClusterResponse>","errorExample":""}]',
      'title' => '创建集群',
      'description' => '### 注意事项
集群创建成功后，将按照您选的集群规格计费。数仓版（3.0）集群的计费项与定价，详情请参见[数仓版（3.0）计费项](~~303131~~)和[数仓版（3.0）产品定价](~~135229~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1u8c0mgfg58****',
          ),
        ),
      ),
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
                'example' => '421693038',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-bp1u8c0mgfg58****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 421693038,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp1u8c0mgfg58****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBClusterResponse>\\n    <TaskId>421693038</TaskId>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp1u8c0mgfg58****</DBClusterId>\\n</DeleteDBClusterResponse>","errorExample":""}]',
      'title' => '删除集群',
      'summary' => '删除AnalyticDB MySQL集群。',
      'description' => '- 包年包月集群无法通过API删除，到期后会自动被释放。如果在确保集群不再使用后，您可以在用户中心申请退订。关于集群退款的详细信息，请参见[退款说明](~~471477~~)。
- 删除集群后，资源会立即释放，数据不再保留且无法找回，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBCluster' => 
    array (
      'summary' => '对AnalyticDB MySQL集群进行升降配。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1u8c0mgfg58****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBNodeGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点组数量，取值范围为：1~200。
> Mode取值为Reserver（即预留模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'DBNodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点存储空间，取值说明：
<props="china">
- 规格为C8时，取值范围为：100~1000GB。</props>
<props="intl">
- 规格为C8时，取值范围为：100~2000GB。</props>
- 规格为C32时，取值范围为：100~8000GB。

> - Mode取值为Reserver（即预留模式）时，本参数必填。
> - 1000GB以下步长为100GB，1000GB以上步长为1000GB。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '200',
          ),
        ),
        3 => 
        array (
          'name' => 'DBNodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点规格，取值：
- **C8**
- **C32**
> Mode取值为Reserver（即预留模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'C32',
          ),
        ),
        4 => 
        array (
          'name' => 'ModifyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更类型，取值说明：

- **Upgrade**：升级。
- **Downgrade**：降级。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Upgrade',
          ),
        ),
        5 => 
        array (
          'name' => 'ExecutorCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，通过[DescribeRegions](~~143074~~)查看可用的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'StorageResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '不涉及。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        8 => 
        array (
          'name' => 'ComputeResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '计算资源，您可以调用[DescribeAvailableResource](~~190632~~)接口查询指定地域中可用的计算资源。
> Mode取值为Flexible（即弹性模式）时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '32Core128GBNEW',
          ),
        ),
        9 => 
        array (
          'name' => 'ElasticIOResourceSize',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '弹性资源单节点规格。取值说明：
- **8Core64GB**：单节点规格选择**8Core64GB**时，一组弹性IO资源的规格为24Core192 GB。
- **12Core96GB**：单节点规格选择**12Core96GB**时，一组弹性IO资源的规格为36Core288 GB。

> 仅当集群满足如下条件时，支持该配置。
> - 集群系列需为弹性模式。
> - 华南3（广州）、华南1（深圳）、华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）和华北3（张家口）地域计算资源为16核64 GB（集群版）或以上规格的集群。
> - 其他地域计算资源为32核128 GB或以上规格的集群。',
            'type' => 'string',
            'required' => false,
            'example' => '8Core64GB',
            'enum' => 
            array (
              0 => '8Core64GB',
              1 => '12Core96GB',
              2 => '16Core128GB',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'ElasticIOResource',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '弹性IO资源的数量。不同的弹性IO资源规格，可购买的数量不同。
- 弹性IO资源规格为8核64 GB，最多可购买32组。
- 弹性IO资源规格为12核96 GB，最多可购买16组。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'DBClusterCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系列。取值说明：
- **Cluster**：预留模式集群版。

<props="china">
> 仅中国内地地域和新加坡地域支持购买预留模式集群版。其中，新加坡地域仅支持在按量付费模式下购买预留模式集群版。</props>

- **MixedStorage**：弹性模式集群版（新版）。
> 当DBClusterCategory为Cluster时，Mode参数必须填写Reserver；当DBClusterCategory为MixedStorage时，Mode参数必须填写Flexible，否则会导致创建集群失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'MixedStorage',
          ),
        ),
        12 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模式。取值说明：

- **Reserver**：预留模式。
- **Flexible**：弹性模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'Flexible',
          ),
        ),
        13 => 
        array (
          'name' => 'DiskPerformanceLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云盘PL等级。取值可选：
- PL0
- PL1
- PL2
- PL3',
            'type' => 'string',
            'required' => false,
            'example' => 'PL1',
            'enum' => 
            array (
              0 => 'PL1',
              1 => 'PL2',
              2 => 'PL3',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp1u8c0mgfg58****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp1u8c0mgfg58****\\",\\n  \\"OrderId\\": \\"2035629****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp1u8c0mgfg58****</DBClusterId>\\n    <OrderId>2035629****</OrderId>\\n</ModifyDBClusterResponse>","errorExample":""}]',
      'title' => '对集群进行升降配',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp111m2cfrdl****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMaintainTimeResponse>\\n    <RequestId>65BDA532-28AF-4122-AA39-B382721EEE64</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>","errorExample":""}]',
      'title' => '修改集群可维护时间段',
      'summary' => '调用ModifyDBClusterMaintainTime接口修改实例可维护时间段。',
    ),
    'ModifyDBClusterPayType' => 
    array (
      'summary' => '调用ModifyDBClusterPayType接口修改AnalyticDB MySQL集群的付费类型。',
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
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。取值说明：
- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'Prepaid',
            'enum' => 
            array (
              0 => 'Postpaid',
              1 => 'Prepaid',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费集群为包年或包月类型。取值说明：
- **Year**：包年类型。
- **Month**：包月类型。

> PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Year',
            'enum' => 
            array (
              0 => 'Year',
              1 => 'Month',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费集群的购买时长。取值说明：

- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。
- 当Period为Month时，UsedTime取值范围为：1~11（整数）。

> - PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。
> - 购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
            'type' => 'string',
            'required' => false,
            'maximum' => '9',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DbClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
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
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp11q28kvl688****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2023532****',
              ),
              'PayType' => 
              array (
                'description' => '付费类型。取值说明：
- **Postpaid**：按量付费。
- **Prepaid**：预付费（包年包月）。',
                'type' => 'string',
                'example' => 'Prepaid',
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
            'errorCode' => 'InvalidPayType.Malformed',
            'errorMessage' => 'The specified parameter "PayType" is not changed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n  \\"OrderId\\": \\"2023532****\\",\\n  \\"PayType\\": \\"Prepaid\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterPayTypeResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n    <OrderId>2023532****</OrderId>\\n    <PayType>Prepaid</PayType>\\n</ModifyDBClusterPayTypeResponse>","errorExample":""}]',
      'title' => '修改集群的付费类型',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1u389j9zjh5****',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'RenewalStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '续费状态。取值：

- **AutoRenewal**：自动续费；

- **Normal**：手动续费；

- **NotRenewal**：到期不续费。',
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
            'description' => '续费时长。默认值为**1**。

- 当PeriodUnit为**Month**时，取值为1~11（整数）。

- 当PeriodUnit为**Year**时，取值为1、2、3、5（整数）。
>购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
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
            'description' => '续费时长单位。默认值为**Month**。

- **Year**：年。

- **Month**：月。',
            'type' => 'string',
            'required' => false,
            'example' => 'Year',
            'default' => 'Month',
          ),
        ),
      ),
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
                'example' => '4CE6DF97-AEA4-484F-906F-C407EE3770EB',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4CE6DF97-AEA4-484F-906F-C407EE3770EB\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAutoRenewAttributeResponse>\\n    <RequestId>4CE6DF97-AEA4-484F-906F-C407EE3770EB</RequestId>\\n</ModifyAutoRenewAttributeResponse>","errorExample":""}]',
      'title' => '设置包年包月集群自动续费状态',
      'summary' => '调用ModifyAutoRenewAttribute接口设置包年包月集群自动续费状态。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
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
      'title' => '修改集群的备注名',
      'summary' => '调用ModifyDBClusterDescription接口修改集群的备注名，方便维护管理。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bpxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-acxxxxx',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","type":"json"}]',
      'title' => '修改数据库集群资源组',
      'summary' => '调用ModifyDBClusterResourceGroup接口修改AnalyticDB MySQL集群的资源组。',
    ),
    'DescribeDBClusters' => 
    array (
      'summary' => '查询AnalyticDB MySQL实例列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '10802',
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
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
            'description' => '集群ID。
> 您可以输入上述地域中任意的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'am-bp1r053byu48p****',
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
- **Creating**：创建中
- **Restoring**：备份恢复中
- **Running**：运行中
- **Deleting**：删除中
- **ClassChanging**：变配中
- **NetAddressCreating**：创建网络中
- **NetAddressDeleting**：删除网络中',
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
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929XXXX',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '列表详情。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。

> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag1',
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
        8 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群版本，固定取值为**3.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '3.0',
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
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
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
                    'description' => '集群信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列表详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DtsJobId' => 
                        array (
                          'description' => 'DTS同步任务ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>
',
                          'type' => 'string',
                          'example' => 'dtsb1578j90XXXX',
                        ),
                        'DBNodeCount' => 
                        array (
                          'description' => '节点组个数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Expired' => 
                        array (
                          'description' => '集群是否过期。取值说明：
* **true**：已过期。
* **false**：未过期。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '集群创建时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>，例如<i>2021-04-01T09:50:18Z</i>。',
                          'type' => 'string',
                          'example' => '2021-04-01T09:50:18Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '集群付费类型，取值说明：
* **Postpaid**：按量付费（即后付费）。
* **Prepaid**：包年包月（即预付费）。',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'DiskType' => 
                        array (
                          'description' => '集群的磁盘类型，取值说明：
* **local_ssd**：本地磁盘。
* **cloud**：普通云盘。
* **cloud_ssd**：SSD云盘。
* **cloud_efficiency**：高效云盘。
* **cloud_essd0**：PL0等级的ESSD云盘。
* **cloud_essd**：PL1等级的ESSD云盘。
* **cloud_essd2**：PL2 等级的ESSD云盘。
* **cloud_essd3**：PL3 等级的ESSD云盘。

> 更多关于ESSD云盘的详情，请参见[ESSD云盘规格](~~122389~~)。',
                          'type' => 'string',
                          'example' => 'cloud_essd',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签信息列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '列表详情。',
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
                          'description' => '集群模式，取值说明：
* **flexible**：弹性模式。
* **reserver**：预留模式。

> - 更多关于集群模式的介绍，请参见[产品系列](~~205001~~)。',
                          'type' => 'string',
                          'example' => 'flexible',
                        ),
                        'Port' => 
                        array (
                          'description' => '集群端口号，默认为3306。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '集群的锁定模式，取值说明：
* **Unlock**：正常（即未锁定）。
* **ManualLock**：手动触发锁定。
* **LockByExpiration**：集群过期自动锁定。
* **LockByRestoration**：集群回滚前自动锁定。
* **LockByDiskQuota**：集群中空间满（即数据占用的存储空间已到达上限水位的90%）自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'StorageResource' => 
                        array (
                          'description' => '弹性模式用的存储资源规格，用于数据读写，增加该资源能提高集群读写能力。',
                          'type' => 'string',
                          'example' => '8Core32GB',
                        ),
                        'ExecutorCount' => 
                        array (
                          'description' => '弹性模式下集群使用的计算节点数量。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => ' 集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp163885f8q21****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群的公网连接地址。',
                          'type' => 'string',
                          'example' => 'am-bp163885f8q21****.ads.aliyuncs.com',
                        ),
                        'RdsInstanceId' => 
                        array (
                          'description' => '同步源RDS实例ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>',
                          'type' => 'string',
                          'example' => 'rm-bp11q28kvl688****',
                        ),
                        'DBClusterType' => 
                        array (
                          'description' => '集群类型，取值说明：
* **Common**：常规集群。
* **RDS_ANALYSIS**：MySQL分析实例。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>
',
                          'type' => 'string',
                          'example' => 'Common',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '商品code，固定为**ads**。',
                          'type' => 'string',
                          'example' => 'ads',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群到期时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>，例如<i>2999-09-08T16:00:00Z</i>。

> * 若目标集群付费模式为包年包月，则返回实际到期时间。
> * 若目标集群付费模式为按量付费，则返回固定值**2999-09-08T16:00:00Z**。',
                          'type' => 'string',
                          'example' => '2999-09-08T16:00:00Z',
                        ),
                        'DBNodeStorage' => 
                        array (
                          'description' => '集群的存储空间，单位：GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '300',
                        ),
                        'DBNodeClass' => 
                        array (
                          'description' => '节点规格。',
                          'type' => 'string',
                          'example' => 'E8',
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
                          'example' => 'vpc-bp13h7uzhulpuxvnpXXXX',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所在的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ComputeResource' => 
                        array (
                          'description' => '弹性模式下使用的计算资源规格，用于数据计算。增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                          'type' => 'string',
                          'example' => '8Core32GB',
                        ),
                        'ElasticIOResource' => 
                        array (
                          'description' => '弹性IO资源（Elastic IO Unit，简称EIU），更多详情，请参见[EIU详解](~~189505~~)。
> 仅弹性模式集群会返回该参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1syh8vvw8yech7nXXXX',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => '数据库版本，当前仅支持**3.0**版本。',
                          'type' => 'string',
                          'example' => '3.0',
                        ),
                        'VPCCloudInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'am-bp163885f8q21****-controller',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态。更多详情，请参见[集群状态表](~~143075~~)。',
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
                          'example' => 'vpc',
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
                        'Category' => 
                        array (
                          'description' => '产品系列，取值说明：
* **BASIC**：预留模式基础版
* **CLUSTER**：预留模式集群版
* **MIXED_STORAGE**：弹性模式集群版（新版）

> 更多关于集群系列的介绍，请参见[产品系列](~~205001~~)。',
                          'type' => 'string',
                          'example' => 'MIXED_STORAGE',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎，固定为**AnalyticDB**。',
                          'type' => 'string',
                          'example' => 'AnalyticDB',
                        ),
                        'InnerIp' => 
                        array (
                          'description' => '公网IP。',
                          'type' => 'string',
                          'example' => '10.1.xx.xx',
                        ),
                        'InnerPort' => 
                        array (
                          'description' => '端口号。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'TaskInfo' => 
                        array (
                          'description' => '任务进度信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => '任务名称。',
                              'type' => 'string',
                              'example' => 'analyticDBFlexibleScaleOut',
                            ),
                            'Status' => 
                            array (
                              'description' => '任务状态，取值为：
- **NOT_RUN**：等待运行。
- **RUNNING**：运行中。
- **SUCCEED**：已结束。',
                              'type' => 'string',
                              'example' => 'RUNNING',
                              'enum' => 
                              array (
                                0 => 'RUNNING',
                                1 => 'SUCCEED',
                                2 => 'NOT_RUN',
                              ),
                            ),
                            'Progress' => 
                            array (
                              'description' => '任务进度，单位：%。',
                              'type' => 'string',
                              'example' => '10',
                            ),
                            'StepList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'StepList' => 
                                array (
                                  'description' => '任务步骤。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '任务步骤。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StepName' => 
                                      array (
                                        'description' => '步骤名称。',
                                        'type' => 'string',
                                        'example' => 'ApplyResource',
                                      ),
                                      'StepDesc' => 
                                      array (
                                        'description' => '步骤描述。',
                                        'type' => 'string',
                                        'example' => 'Apply resource',
                                      ),
                                      'StepStatus' => 
                                      array (
                                        'description' => '步骤状态，取值为：
- **NOT_RUN**：等待运行。
- **RUNNING**：运行中。
- **SUCCEED**：已结束。',
                                        'type' => 'string',
                                        'example' => 'SUCCEED',
                                        'enum' => 
                                        array (
                                          0 => 'RUNNING',
                                          1 => 'SUCCEED',
                                          2 => 'NOT_RUN',
                                        ),
                                      ),
                                      'StepProgress' => 
                                      array (
                                        'description' => '步骤进度，单位：%。',
                                        'type' => 'string',
                                        'example' => '50',
                                      ),
                                      'StartTime' => 
                                      array (
                                        'description' => '步骤开始时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2024-03-10T09:28:34Z',
                                      ),
                                      'EndTime' => 
                                      array (
                                        'description' => '步骤结束时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2024-03-10T10:28:34Z',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ProductVersion' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"DtsJobId\\": \\"dtsb1578j90XXXX\\",\\n        \\"DBNodeCount\\": 1,\\n        \\"Expired\\": \\"false\\",\\n        \\"CreateTime\\": \\"2021-04-01T09:50:18Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"DiskType\\": \\"cloud_essd\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"StorageResource\\": \\"8Core32GB\\",\\n        \\"ExecutorCount\\": \\"1\\",\\n        \\"DBClusterId\\": \\"am-bp163885f8q21****\\",\\n        \\"ConnectionString\\": \\"am-bp163885f8q21****.ads.aliyuncs.com\\",\\n        \\"RdsInstanceId\\": \\"rm-bp11q28kvl688****\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBNodeStorage\\": 300,\\n        \\"DBNodeClass\\": \\"E8\\",\\n        \\"LockReason\\": \\"instance_expired\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpuxvnpXXXX\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ComputeResource\\": \\"8Core32GB\\",\\n        \\"ElasticIOResource\\": 0,\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yech7nXXXX\\",\\n        \\"DBVersion\\": \\"3.0\\",\\n        \\"VPCCloudInstanceId\\": \\"am-bp163885f8q21****-controller\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"vpc\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Category\\": \\"MIXED_STORAGE\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"InnerIp\\": \\"10.1.xx.xx\\",\\n        \\"InnerPort\\": \\"3306\\",\\n        \\"TaskInfo\\": {\\n          \\"Name\\": \\"analyticDBFlexibleScaleOut\\",\\n          \\"Status\\": \\"RUNNING\\",\\n          \\"Progress\\": \\"10\\",\\n          \\"StepList\\": {\\n            \\"StepList\\": [\\n              {\\n                \\"StepName\\": \\"ApplyResource\\",\\n                \\"StepDesc\\": \\"Apply resource\\",\\n                \\"StepStatus\\": \\"SUCCEED\\",\\n                \\"StepProgress\\": \\"50\\",\\n                \\"StartTime\\": \\"2024-03-10T09:28:34Z\\",\\n                \\"EndTime\\": \\"2024-03-10T10:28:34Z\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ProductVersion\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DtsJobId>dtsb1578j90XXXX</DtsJobId>\\n        <DBNodeCount>1</DBNodeCount>\\n        <Expired>false</Expired>\\n        <CreateTime>2021-04-01T09:50:18Z</CreateTime>\\n        <PayType>Postpaid</PayType>\\n        <DiskType>cloud_essd</DiskType>\\n        <Tags>\\n            <Key>tag1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <StorageResource>8Core32GB</StorageResource>\\n        <ExecutorCount>1</ExecutorCount>\\n        <DBClusterId>am-bp163885f8q21****</DBClusterId>\\n        <ConnectionString>am-bp163885f8q21****.ads.aliyuncs.com</ConnectionString>\\n        <RdsInstanceId>rm-bp11q28kvl688****</RdsInstanceId>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads</CommodityCode>\\n        <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n        <DBNodeStorage>300</DBNodeStorage>\\n        <DBNodeClass>E8</DBNodeClass>\\n        <LockReason>instance_expired</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpuxvnpXXXX</VPCId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ComputeResource>8Core32GB</ComputeResource>\\n        <ElasticIOResource>0</ElasticIOResource>\\n        <VSwitchId>vsw-bp1syh8vvw8yech7nXXXX</VSwitchId>\\n        <DBVersion>3.0</DBVersion>\\n        <VPCCloudInstanceId>am-bp163885f8q21****-controller</VPCCloudInstanceId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>vpc</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>MIXED_STORAGE</Category>\\n        <Engine>AnalyticDB</Engine>\\n        <InnerIp>10.1.xx.xx</InnerIp>\\n        <InnerPort>3306</InnerPort>\\n    </Items>\\n</DescribeDBClustersResponse>","errorExample":""}]',
      'title' => '查询实例列表',
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
            'description' => '集群的状态列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '集群状态。',
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
                  'example' => '["Preparing","Creating","Restoring","Running","Deleting","ClassChanging","NetAddressCreating","NetAddressDeleting","NetAddressModifying","EngineVersionUpgrading"]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAU',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": [\\n    \\"[\\\\\\"Preparing\\\\\\",\\\\\\"Creating\\\\\\",\\\\\\"Restoring\\\\\\",\\\\\\"Running\\\\\\",\\\\\\"Deleting\\\\\\",\\\\\\"ClassChanging\\\\\\",\\\\\\"NetAddressCreating\\\\\\",\\\\\\"NetAddressDeleting\\\\\\",\\\\\\"NetAddressModifying\\\\\\",\\\\\\"EngineVersionUpgrading\\\\\\"]\\"\\n  ],\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAU\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterStatusResponse>\\n    <Status>Preparing</Status>\\n    <Status>Creating</Status>\\n    <Status>Restoring</Status>\\n    <Status>Running</Status>\\n    <Status>Deleting</Status>\\n    <Status>ClassChanging</Status>\\n    <Status>NetAddressCreating</Status>\\n    <Status>NetAddressDeleting</Status>\\n    <Status>NetAddressModifying</Status>\\n    <Status>EngineVersionUpgrading</Status>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEAU</RequestId>\\n</DescribeDBClusterStatusResponse>","errorExample":""}]',
      'title' => '查看集群的运行状态',
      'summary' => '调用DescribeDBClusterStatus接口查询AnalyticDB MySQL数仓版（3.0）集群的状态列表。',
    ),
    'DescribeDBClusterAttribute' => 
    array (
      'summary' => '调用DescribeDBClusterAttribute接口查看目标AnalyticDB MySQL版集群的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '10798',
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
            'description' => 'AnalyticDB MySQL数仓版集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp111m2cfrdl1****',
          ),
        ),
        1 => 
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
            'description' => '列表详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2895BB82-B2C1-408E-AA73-DB8D59******',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBCluster' => 
                  array (
                    'description' => '集群信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列表详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreationTime' => 
                        array (
                          'description' => '集群创建时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-04-01T09:50:18Z',
                        ),
                        'EnableSpark' => 
                        array (
                          'description' => '是否创建了Spark集群。取值说明：
* **true**：已创建。
* **false**：未创建。
',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'DtsJobId' => 
                        array (
                          'description' => 'DTS同步任务ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>
',
                          'type' => 'string',
                          'example' => 'dtsb1hp3790****',
                        ),
                        'DBNodeCount' => 
                        array (
                          'description' => '节点组个数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Expired' => 
                        array (
                          'description' => '集群是否过期。取值说明：
* **true**：已过期。
* **false**：未过期。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'MaintainTime' => 
                        array (
                          'description' => '集群的可维护时间段，格式为<i>HH:mmZ- HH:mmZ</i>，例如：<i>04:00Z-05:00Z</i>，表示可维护时间段为4点至5点。
> 更多关于可维护时间段的信息，请参见[设置可维护时间段](~~122569~~)。',
                          'type' => 'string',
                          'example' => '04:00Z-05:00Z',
                        ),
                        'PayType' => 
                        array (
                          'description' => '集群付费类型，取值说明：
* **Postpaid**：按量付费（即后付费）。
* **Prepaid**：包年包月（即预付费）。',
                          'type' => 'string',
                          'example' => 'Postpaid',
                        ),
                        'DiskType' => 
                        array (
                          'description' => '集群的磁盘类型，取值说明：
* **local_ssd**：本地磁盘。
* **cloud**：普通云盘。
* **cloud_ssd**：SSD云盘。
* **cloud_efficiency**：高效云盘。
* **cloud_essd0**：PL0等级的ESSD云盘。
* **cloud_essd**：PL1等级的ESSD云盘。
* **cloud_essd2**：PL2 等级的ESSD云盘。
* **cloud_essd3**：PL3 等级的ESSD云盘。

> 更多关于ESSD云盘的详情，请参见[ESSD云盘规格](~~122389~~)。',
                          'type' => 'string',
                          'example' => 'cloud_essd',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签信息列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '列表详情。',
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
                          'description' => '集群模式，取值说明：
* **flexible**：弹性模式。
* **reserver**：预留模式。

> 更多关于集群模式的介绍，请参见[产品系列](~~205001~~)。',
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
* **Unlock**：正常（即未锁定）。
* **ManualLock**：手动触发锁定。
* **LockByExpiration**：集群过期自动锁定。
* **LockByRestoration**：集群回滚前自动锁定。
* **LockByDiskQuota**：集群中空间满（即数据占用的存储空间已到达上限水位的90%）自动锁定。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '集群引擎版本。',
                          'type' => 'string',
                          'example' => '3.1.1.9',
                        ),
                        'EnableAirflow' => 
                        array (
                          'description' => '是否创建了Airflow集群。取值说明：
* **true**：已创建。
* **false**：未创建。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ExecutorCount' => 
                        array (
                          'description' => '弹性模式下集群使用的计算节点数量。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'StorageResource' => 
                        array (
                          'description' => '弹性模式用的存储资源规格，用于数据读写，增加该资源能提高集群读写能力。',
                          'type' => 'string',
                          'example' => '8Core32GB',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL数仓版集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp111m2cfrdl1****',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群的VPC连接地址。',
                          'type' => 'string',
                          'example' => 'am-bp111m2cfrdl1****.ads.aliyuncs.com',
                        ),
                        'RdsInstanceId' => 
                        array (
                          'description' => '同步源RDS实例ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>
',
                          'type' => 'string',
                          'example' => 'rm-bp837jsdp2****',
                        ),
                        'DBClusterType' => 
                        array (
                          'description' => '集群类型。取值说明：
* **Common**：常规集群。
* **RDS_ANALYSIS**：MySQL分析实例。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>
',
                          'type' => 'string',
                          'example' => 'Common',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '商品付费类型，取值说明：
- **ads**：按量付费商品。
- **ads_pre**：包年包月商品。',
                          'type' => 'string',
                          'example' => 'ads',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '集群到期时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间），例如<i>2999-09-08T16:00:00Z</i>。

> * 若目标集群付费模式为包年包月，则返回实际到期时间。
> * 若目标集群付费模式为按量付费，则返回固定值**2999-09-08T16:00:00Z**。',
                          'type' => 'string',
                          'example' => '2999-09-08T16:00:00Z',
                        ),
                        'DBNodeStorage' => 
                        array (
                          'description' => '集群的存储空间，单位：GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '300',
                        ),
                        'DBNodeClass' => 
                        array (
                          'description' => '节点规格。',
                          'type' => 'string',
                          'example' => 'E8',
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
                        'ComputeResource' => 
                        array (
                          'description' => '弹性模式下使用的计算资源规格，用于数据计算。增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                          'type' => 'string',
                          'example' => '8Core32GB',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '集群所在的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ElasticIOResource' => 
                        array (
                          'description' => '弹性IO资源的数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1syh8vvw8yech7n****',
                        ),
                        'DBVersion' => 
                        array (
                          'description' => '数据库版本，当前仅支持**3.0**版本。',
                          'type' => 'string',
                          'example' => '3.0',
                        ),
                        'VPCCloudInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'am-bp111m2cfrdl1****-controller',
                        ),
                        'DBClusterStatus' => 
                        array (
                          'description' => '集群状态。更多详情，请参见[集群状态表](~~143075~~)。',
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
                          'example' => 'vpc',
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
* **true**：已启用。
* **false**：未启用。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '集群所在的可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'Category' => 
                        array (
                          'description' => '产品系列，取值说明：
* **BASIC**：预留模式基础版
* **CLUSTER**：预留模式集群版
* **MIXED_STORAGE**：弹性模式集群版（新版）

> 更多关于集群系列的介绍，请参见[产品系列](~~205001~~)。',
                          'type' => 'string',
                          'example' => 'MIXED_STORAGE',
                        ),
                        'Engine' => 
                        array (
                          'description' => '集群引擎，固定为**AnalyticDB**。',
                          'type' => 'string',
                          'example' => 'AnalyticDB',
                        ),
                        'KmsId' => 
                        array (
                          'description' => '用于加密云盘数据的密钥ID。
> 仅当AnalyticDB MySQL集群开启云盘加密时才会返回该参数。',
                          'type' => 'string',
                          'example' => 'e1935511-cf88-1123-a0f8-1be8d251****',
                        ),
                        'InnerIp' => 
                        array (
                          'description' => '公网IP。',
                          'type' => 'string',
                          'example' => '10.1.XX.XX',
                        ),
                        'InnerPort' => 
                        array (
                          'description' => '公网端口号。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'DiskPerformanceLevel' => 
                        array (
                          'description' => '云盘等级。',
                          'type' => 'string',
                          'example' => 'PL1',
                        ),
                        'ElasticIOResourceSize' => 
                        array (
                          'description' => '弹性资源单节点规格。取值说明：
- 8Core64GB：单节点规格为8Core64GB时，一组弹性IO资源的规格为24Core192 GB。
- 12Core96GB：单节点规格为12Core96GB时，一组弹性IO资源的规格为36Core288 GB。',
                          'type' => 'string',
                          'example' => '8Core64GB',
                        ),
                        'DiskEncryption' => 
                        array (
                          'description' => '是否开启云盘加密。取值：

- true：是。
- false：否。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'TaskInfo' => 
                        array (
                          'description' => '任务信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => '任务名称。',
                              'type' => 'string',
                              'example' => 'analyticDBFlexibleScaleOut',
                            ),
                            'Status' => 
                            array (
                              'description' => '任务状态，取值为：
- **NOT_RUN**：等待运行。
- **RUNNING**：运行中。
- **SUCCEED**：已结束。',
                              'type' => 'string',
                              'example' => 'RUNNING',
                              'enum' => 
                              array (
                                0 => 'RUNNING',
                                1 => 'SUCCEED',
                                2 => 'NOT_RUN',
                              ),
                            ),
                            'Progress' => 
                            array (
                              'description' => '任务进度，单位：%。',
                              'type' => 'string',
                              'example' => '10',
                            ),
                            'StepList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'StepList' => 
                                array (
                                  'description' => '任务步骤。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '任务步骤。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StepName' => 
                                      array (
                                        'description' => '步骤名称。',
                                        'type' => 'string',
                                        'example' => 'ApplyResource',
                                      ),
                                      'StepDesc' => 
                                      array (
                                        'description' => '步骤描述。',
                                        'type' => 'string',
                                        'example' => 'Apply resource',
                                      ),
                                      'StepStatus' => 
                                      array (
                                        'description' => '步骤状态，取值为：
- **NOT_RUN**：等待运行。
- **RUNNING**：运行中。
- **SUCCEED**：已结束。',
                                        'type' => 'string',
                                        'example' => 'SUCCEED',
                                        'enum' => 
                                        array (
                                          0 => 'RUNNING',
                                          1 => 'SUCCEED',
                                          2 => 'NOT_RUN',
                                        ),
                                      ),
                                      'StepProgress' => 
                                      array (
                                        'description' => '步骤进度，单位：%。',
                                        'type' => 'string',
                                        'example' => '50',
                                      ),
                                      'StartTime' => 
                                      array (
                                        'description' => '步骤开始时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2024-03-10T09:28:34Z',
                                      ),
                                      'EndTime' => 
                                      array (
                                        'description' => '步骤结束时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2024-03-10T10:28:34Z',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ProductVersion' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2895BB82-B2C1-408E-AA73-DB8D59******\\",\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"CreationTime\\": \\"2021-04-01T09:50:18Z\\",\\n        \\"EnableSpark\\": false,\\n        \\"DtsJobId\\": \\"dtsb1hp3790****\\",\\n        \\"DBNodeCount\\": 1,\\n        \\"Expired\\": \\"false\\",\\n        \\"MaintainTime\\": \\"04:00Z-05:00Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"DiskType\\": \\"cloud_essd\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": 3306,\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"3.1.1.9\\",\\n        \\"EnableAirflow\\": true,\\n        \\"ExecutorCount\\": \\"1\\",\\n        \\"StorageResource\\": \\"8Core32GB\\",\\n        \\"DBClusterId\\": \\"am-bp111m2cfrdl1****\\",\\n        \\"ConnectionString\\": \\"am-bp111m2cfrdl1****.ads.aliyuncs.com\\",\\n        \\"RdsInstanceId\\": \\"rm-bp837jsdp2****\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBNodeStorage\\": 300,\\n        \\"DBNodeClass\\": \\"E8\\",\\n        \\"LockReason\\": \\"instance_expired\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpuxvnp****\\",\\n        \\"ComputeResource\\": \\"8Core32GB\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ElasticIOResource\\": 2,\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yech7n****\\",\\n        \\"DBVersion\\": \\"3.0\\",\\n        \\"VPCCloudInstanceId\\": \\"am-bp111m2cfrdl1****-controller\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"vpc\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"UserENIStatus\\": true,\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Category\\": \\"MIXED_STORAGE\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"KmsId\\": \\"e1935511-cf88-1123-a0f8-1be8d251****\\",\\n        \\"InnerIp\\": \\"10.1.XX.XX\\",\\n        \\"InnerPort\\": \\"3306\\",\\n        \\"DiskPerformanceLevel\\": \\"PL1\\",\\n        \\"ElasticIOResourceSize\\": \\"8Core64GB\\",\\n        \\"DiskEncryption\\": false,\\n        \\"TaskInfo\\": {\\n          \\"Name\\": \\"analyticDBFlexibleScaleOut\\",\\n          \\"Status\\": \\"RUNNING\\",\\n          \\"Progress\\": \\"10\\",\\n          \\"StepList\\": {\\n            \\"StepList\\": [\\n              {\\n                \\"StepName\\": \\"ApplyResource\\",\\n                \\"StepDesc\\": \\"Apply resource\\",\\n                \\"StepStatus\\": \\"SUCCEED\\",\\n                \\"StepProgress\\": \\"50\\",\\n                \\"StartTime\\": \\"2024-03-10T09:28:34Z\\",\\n                \\"EndTime\\": \\"2024-03-10T10:28:34Z\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ProductVersion\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAttributeResponse>\\n    <RequestId>2895BB82-B2C1-408E-AA73-DB8D59******</RequestId>\\n    <Items>\\n        <CreationTime>2021-04-01T09:50:18Z</CreationTime>\\n        <EnableSpark>false</EnableSpark>\\n        <DtsJobId>dtsb1hp3790****</DtsJobId>\\n        <DBNodeCount>1</DBNodeCount>\\n        <Expired>false</Expired>\\n        <MaintainTime>04:00Z-05:00Z</MaintainTime>\\n        <PayType>Postpaid</PayType>\\n        <DiskType>cloud_essd</DiskType>\\n        <Tags>\\n            <Key>tag1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <EngineVersion>3.1.1.9</EngineVersion>\\n        <EnableAirflow>true</EnableAirflow>\\n        <ExecutorCount>1</ExecutorCount>\\n        <StorageResource>8Core32GB</StorageResource>\\n        <DBClusterId>am-bp111m2cfrdl1****</DBClusterId>\\n        <ConnectionString>am-bp111m2cfrdl1****.ads.aliyuncs.com</ConnectionString>\\n        <RdsInstanceId>rm-bp837jsdp2****</RdsInstanceId>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads</CommodityCode>\\n        <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n        <DBNodeStorage>300</DBNodeStorage>\\n        <DBNodeClass>E8</DBNodeClass>\\n        <LockReason>instance_expired</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpuxvnp****</VPCId>\\n        <ComputeResource>8Core32GB</ComputeResource>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ElasticIOResource>2</ElasticIOResource>\\n        <VSwitchId>vsw-bp1syh8vvw8yech7n****</VSwitchId>\\n        <DBVersion>3.0</DBVersion>\\n        <VPCCloudInstanceId>am-bp111m2cfrdl1****-controller</VPCCloudInstanceId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>vpc</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <UserENIStatus>true</UserENIStatus>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>MIXED_STORAGE</Category>\\n        <Engine>AnalyticDB</Engine>\\n        <KmsId>e1935511-cf88-1123-a0f8-1be8d251****</KmsId>\\n        <InnerIp>10.1.XX.XX</InnerIp>\\n        <InnerPort>3306</InnerPort>\\n        <DiskPerformanceLevel>PL1</DiskPerformanceLevel>\\n        <ElasticIOResourceSize>8Core64GB</ElasticIOResourceSize>\\n    </Items>\\n</DescribeDBClusterAttributeResponse>","errorExample":""}]',
      'title' => '查询集群的详细属性',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAutoRenewAttribute' => 
    array (
      'summary' => '调用DescribeAutoRenewAttribute接口查询包年包月集群自动续费状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DBClusterIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。
如果有多个集群ID，以英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- 30
- 50
- 100

默认值：30。',
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
            'description' => '页码，取值：大于0且不超过Integer的最大值。
默认值：1。',
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
            'example' => 'rg-4690g37929****',
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
                'example' => '20',
              ),
              'PageRecordCount' => 
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
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
                          'example' => 'am-bp11q28kvl688****',
                        ),
                        'PeriodUnit' => 
                        array (
                          'description' => '续费时长单位，取值说明：
- **Year**：年。
- **Month**：月。',
                          'type' => 'string',
                          'example' => 'Year',
                        ),
                        'Duration' => 
                        array (
                          'description' => '续费时长。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RenewalStatus' => 
                        array (
                          'description' => '续费状态。取值说明：
- **AutoRenewal**：自动续费。
- **Normal**：手动续费，集群到期前通过短信提醒。
- **NotRenewal**：到期不续费，集群到期前无提醒，只在到期前第三天发送不续费提醒。',
                          'type' => 'string',
                          'example' => 'AutoRenewal',
                        ),
                        'AutoRenewEnabled' => 
                        array (
                          'description' => '是否开启自动续费，取值说明：
- **true**：开启。
- **false**：关闭。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 20,\\n  \\"PageRecordCount\\": 30,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"AutoRenewAttribute\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n        \\"PeriodUnit\\": \\"Year\\",\\n        \\"Duration\\": 1,\\n        \\"RenewalStatus\\": \\"AutoRenewal\\",\\n        \\"AutoRenewEnabled\\": true,\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalRecordCount>20</TotalRecordCount>\\n<PageRecordCount>30</PageRecordCount>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <AutoRenewAttribute>\\n        <AutoRenewEnabled>true</AutoRenewEnabled>\\n        <RenewalStatus>AutoRenewal</RenewalStatus>\\n        <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n        <Duration>1</Duration>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <PeriodUnit>Year</PeriodUnit>\\n    </AutoRenewAttribute>\\n</Items>","errorExample":""}]',
      'title' => '查询包年包月集群自动续费状态',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAvailableResource' => 
    array (
      'summary' => '调用DescribeAvailableResource接口查询指定可用区资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
> 您可以调用[DescribeRegions](~~143074~~)查看。',
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
> 您可以调用[DescribeRegions](~~143074~~)查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-k',
          ),
        ),
        2 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值说明：
- **PrePaid**：包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PostPaid',
            'default' => 'PrePaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值的语言，取值说明：
- **zh-CN**（默认值）：中文。
- **en-US**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
        4 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数仓版集群版本。',
            'type' => 'string',
            'required' => false,
            'example' => '3.0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '支持的地域列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'AvailableZoneList' => 
              array (
                'description' => '支持的可用区列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的可用区列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
                    ),
                    'SupportedMode' => 
                    array (
                      'description' => '支持的模式列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的模式列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Mode' => 
                          array (
                            'description' => '支持的模式，取值说明：
- **flexible**：弹性模式。
- **reserver**：预留模式。',
                            'type' => 'string',
                            'example' => 'flexible',
                          ),
                          'SupportedSerialList' => 
                          array (
                            'description' => '支持的系列列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '支持的系列列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Serial' => 
                                array (
                                  'description' => '支持的系列，取值说明：
- **basic**：基础版
- **cluster**：集群版
- **mixed_storage**：集群版（新版）
',
                                  'type' => 'string',
                                  'example' => 'mixed_storage',
                                ),
                                'SupportedFlexibleResource' => 
                                array (
                                  'description' => '弹性模式支持的资源列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '弹性模式支持的资源列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'StorageType' => 
                                      array (
                                        'description' => '磁盘类型，取值说明：
- **hdd**：机械硬盘
- **ssd**：固态硬盘',
                                        'type' => 'string',
                                        'example' => 'hdd',
                                      ),
                                      'SupportedComputeResource' => 
                                      array (
                                        'description' => '支持的计算资源。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '支持的计算资源列表。',
                                          'type' => 'string',
                                          'example' => '[
                    "8Core32GB",
                    "16Core64GB",
                    "16Core64GBNEW",
                    "24Core96GBNEW",
                    "32Core128GBNEW",
                    "48Core192GBNEW",
                    "64Core256GBNEW",
                    "80Core320GBNEW",
                    "96Core384GBNEW",
                    "128Core512GBNEW",
                    "160Core640GBNEW",
                    "192Core768GBNEW",
                    "224Core896GBNEW",
                    "256Core1024GBNEW",
                    "288Core1152GBNEW",
                    "320Core1280GBNEW",
                    "384Core1536GBNEW",
                    "416Core1664GBNEW",
                    "448Core1792GBNEW",
                    "480Core1920GBNEW",
                    "512Core2048GBNEW",
                    "576Core2304GBNEW",
                    "640Core2560GBNEW",
                    "768Core3072GBNEW",
                    "800Core3200GBNEW",
                    "896Core3584GBNEW",
                    "960Core3840GBNEW",
                    "1024Core4096GBNEW",
                    "1120Core4480GBNEW",
                    "1280Core5120GBNEW",
                    "1440Core5760GBNEW",
                    "1600Core6400GBNEW",
                    "1792Core7168GBNEW",
                    "1920Core7680GBNEW",
                    "2048Core8192GBNEW",
                    "2400Core9600GBNEW",
                    "2560Core10240GBNEW",
                    "2880Core11520GBNEW",
                    "3200Core12800GBNEW",
                    "4800Core19200GBNEW",
                    "5600Core22400GBNEW",
                    "6400Core25600GBNEW",
                    "8000Core32000GBNEW",
                    "8800Core35200GBNEW",
                    "9600Core38400GBNEW"
                  ]',
                                        ),
                                      ),
                                      'SupportedStorageResource' => 
                                      array (
                                        'description' => '支持的存储资源。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '不涉及。',
                                          'type' => 'string',
                                          'example' => '无',
                                        ),
                                      ),
                                      'SupportedElasticIOResource' => 
                                      array (
                                        'description' => '支持的弹性IO资源。',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Step' => 
                                          array (
                                            'description' => '步长。',
                                            'type' => 'string',
                                            'example' => '1',
                                          ),
                                          'MinCount' => 
                                          array (
                                            'description' => '最小值。',
                                            'type' => 'string',
                                            'example' => '0',
                                          ),
                                          'MaxCount' => 
                                          array (
                                            'description' => '最大值。',
                                            'type' => 'string',
                                            'example' => '200',
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                'SupportedInstanceClassList' => 
                                array (
                                  'description' => '预留模式支持的资源列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '预留模式支持的资源列表。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'InstanceClass' => 
                                      array (
                                        'description' => '支持的规格。',
                                        'type' => 'string',
                                        'example' => 'C32',
                                      ),
                                      'Tips' => 
                                      array (
                                        'description' => '规格的描述。',
                                        'type' => 'string',
                                        'example' => 'C32',
                                      ),
                                      'SupportedNodeCountList' => 
                                      array (
                                        'description' => '支持的计算节点数。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '支持的计算节点数。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'StorageSize' => 
                                            array (
                                              'description' => '支持的存储大小，单位GB。',
                                              'type' => 'array',
                                              'items' => 
                                              array (
                                                'description' => '支持的存储大小，单位GB。',
                                                'type' => 'string',
                                                'example' => '100',
                                              ),
                                            ),
                                            'NodeCount' => 
                                            array (
                                              'description' => '支持的节点数。',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Step' => 
                                                array (
                                                  'description' => '步长。',
                                                  'type' => 'string',
                                                  'example' => '1',
                                                ),
                                                'MinCount' => 
                                                array (
                                                  'description' => '最小值。',
                                                  'type' => 'string',
                                                  'example' => '1',
                                                ),
                                                'MaxCount' => 
                                                array (
                                                  'description' => '最大值。',
                                                  'type' => 'string',
                                                  'example' => '200',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                      'SupportedExecutorList' => 
                                      array (
                                        'description' => '预留参数不涉及。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '预留参数不涉及。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'NodeCount' => 
                                            array (
                                              'description' => '节点数详情。',
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Step' => 
                                                array (
                                                  'description' => '预留参数不涉及。',
                                                  'type' => 'string',
                                                  'example' => '无',
                                                ),
                                                'MinCount' => 
                                                array (
                                                  'description' => '预留参数不涉及。',
                                                  'type' => 'string',
                                                  'example' => '无',
                                                ),
                                                'MaxCount' => 
                                                array (
                                                  'description' => '预留参数不涉及。',
                                                  'type' => 'string',
                                                  'example' => '无',
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
                    'SupportedComputeResource' => 
                    array (
                      'description' => '预留参数不涉及。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '预留参数不涉及。',
                        'type' => 'string',
                        'example' => '无',
                      ),
                    ),
                    'SupportedStorageResource' => 
                    array (
                      'description' => '预留参数不涉及。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '预留参数不涉及。',
                        'type' => 'string',
                        'example' => '无',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"AvailableZoneList\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"SupportedMode\\": [\\n        {\\n          \\"Mode\\": \\"flexible\\",\\n          \\"SupportedSerialList\\": [\\n            {\\n              \\"Serial\\": \\"mixed_storage\\",\\n              \\"SupportedFlexibleResource\\": [\\n                {\\n                  \\"StorageType\\": \\"hdd\\",\\n                  \\"SupportedComputeResource\\": [\\n                    \\"[\\\\n                    \\\\\\"8Core32GB\\\\\\",\\\\n                    \\\\\\"16Core64GB\\\\\\",\\\\n                    \\\\\\"16Core64GBNEW\\\\\\",\\\\n                    \\\\\\"24Core96GBNEW\\\\\\",\\\\n                    \\\\\\"32Core128GBNEW\\\\\\",\\\\n                    \\\\\\"48Core192GBNEW\\\\\\",\\\\n                    \\\\\\"64Core256GBNEW\\\\\\",\\\\n                    \\\\\\"80Core320GBNEW\\\\\\",\\\\n                    \\\\\\"96Core384GBNEW\\\\\\",\\\\n                    \\\\\\"128Core512GBNEW\\\\\\",\\\\n                    \\\\\\"160Core640GBNEW\\\\\\",\\\\n                    \\\\\\"192Core768GBNEW\\\\\\",\\\\n                    \\\\\\"224Core896GBNEW\\\\\\",\\\\n                    \\\\\\"256Core1024GBNEW\\\\\\",\\\\n                    \\\\\\"288Core1152GBNEW\\\\\\",\\\\n                    \\\\\\"320Core1280GBNEW\\\\\\",\\\\n                    \\\\\\"384Core1536GBNEW\\\\\\",\\\\n                    \\\\\\"416Core1664GBNEW\\\\\\",\\\\n                    \\\\\\"448Core1792GBNEW\\\\\\",\\\\n                    \\\\\\"480Core1920GBNEW\\\\\\",\\\\n                    \\\\\\"512Core2048GBNEW\\\\\\",\\\\n                    \\\\\\"576Core2304GBNEW\\\\\\",\\\\n                    \\\\\\"640Core2560GBNEW\\\\\\",\\\\n                    \\\\\\"768Core3072GBNEW\\\\\\",\\\\n                    \\\\\\"800Core3200GBNEW\\\\\\",\\\\n                    \\\\\\"896Core3584GBNEW\\\\\\",\\\\n                    \\\\\\"960Core3840GBNEW\\\\\\",\\\\n                    \\\\\\"1024Core4096GBNEW\\\\\\",\\\\n                    \\\\\\"1120Core4480GBNEW\\\\\\",\\\\n                    \\\\\\"1280Core5120GBNEW\\\\\\",\\\\n                    \\\\\\"1440Core5760GBNEW\\\\\\",\\\\n                    \\\\\\"1600Core6400GBNEW\\\\\\",\\\\n                    \\\\\\"1792Core7168GBNEW\\\\\\",\\\\n                    \\\\\\"1920Core7680GBNEW\\\\\\",\\\\n                    \\\\\\"2048Core8192GBNEW\\\\\\",\\\\n                    \\\\\\"2400Core9600GBNEW\\\\\\",\\\\n                    \\\\\\"2560Core10240GBNEW\\\\\\",\\\\n                    \\\\\\"2880Core11520GBNEW\\\\\\",\\\\n                    \\\\\\"3200Core12800GBNEW\\\\\\",\\\\n                    \\\\\\"4800Core19200GBNEW\\\\\\",\\\\n                    \\\\\\"5600Core22400GBNEW\\\\\\",\\\\n                    \\\\\\"6400Core25600GBNEW\\\\\\",\\\\n                    \\\\\\"8000Core32000GBNEW\\\\\\",\\\\n                    \\\\\\"8800Core35200GBNEW\\\\\\",\\\\n                    \\\\\\"9600Core38400GBNEW\\\\\\"\\\\n                  ]\\"\\n                  ],\\n                  \\"SupportedStorageResource\\": [\\n                    \\"无\\"\\n                  ],\\n                  \\"SupportedElasticIOResource\\": {\\n                    \\"Step\\": \\"1\\",\\n                    \\"MinCount\\": \\"0\\",\\n                    \\"MaxCount\\": \\"200\\"\\n                  }\\n                }\\n              ],\\n              \\"SupportedInstanceClassList\\": [\\n                {\\n                  \\"InstanceClass\\": \\"C32\\",\\n                  \\"Tips\\": \\"C32\\",\\n                  \\"SupportedNodeCountList\\": [\\n                    {\\n                      \\"StorageSize\\": [\\n                        \\"100\\"\\n                      ],\\n                      \\"NodeCount\\": {\\n                        \\"Step\\": \\"1\\",\\n                        \\"MinCount\\": \\"1\\",\\n                        \\"MaxCount\\": \\"200\\"\\n                      }\\n                    }\\n                  ],\\n                  \\"SupportedExecutorList\\": [\\n                    {\\n                      \\"NodeCount\\": {\\n                        \\"Step\\": \\"无\\",\\n                        \\"MinCount\\": \\"无\\",\\n                        \\"MaxCount\\": \\"无\\"\\n                      }\\n                    }\\n                  ]\\n                }\\n              ]\\n            }\\n          ]\\n        }\\n      ],\\n      \\"SupportedComputeResource\\": [\\n        \\"无\\"\\n      ],\\n      \\"SupportedStorageResource\\": [\\n        \\"无\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <AvailableZoneList>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <SupportedMode>\\n            <Mode>flexible</Mode>\\n            <SupportedSerialList>\\n                <Serial>mixed_storage</Serial>\\n                <SupportedFlexibleResource>\\n                    <StorageType>hdd</StorageType>\\n                    <SupportedComputeResource>32Core128GB</SupportedComputeResource>\\n                    <SupportedElasticIOResource>\\n                        <Step>1</Step>\\n                        <MinCount>0</MinCount>\\n                        <MaxCount>200</MaxCount>\\n                    </SupportedElasticIOResource>\\n                </SupportedFlexibleResource>\\n                <SupportedInstanceClassList>\\n                    <InstanceClass>C32</InstanceClass>\\n                    <Tips>C32</Tips>\\n                    <SupportedNodeCountList>\\n                        <StorageSize>100</StorageSize>\\n                        <NodeCount>\\n                            <Step>1</Step>\\n                            <MinCount>1</MinCount>\\n                            <MaxCount>200</MaxCount>\\n                        </NodeCount>\\n                    </SupportedNodeCountList>\\n                </SupportedInstanceClassList>\\n            </SupportedSerialList>\\n        </SupportedMode>\\n    </AvailableZoneList>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
      'title' => '查询指定可用区资源',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeComputeResource' => 
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
>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版集群版本。取值：**3.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '3.0',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing-f',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        4 => 
        array (
          'name' => 'Migrate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询AnalyticDB MySQL数仓版迁移至AnalyticDB MySQL湖仓版的可用计算资源。取值：
- **true**
- **false**（默认值）',
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
              'ComputeResource' => 
              array (
                'description' => '计算资源规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayValue' => 
                    array (
                      'description' => '控制台显示的计算资源规格。',
                      'type' => 'string',
                      'example' => '8 Core 32 GB（单机版）',
                    ),
                    'RealValue' => 
                    array (
                      'description' => '真实的计算资源规格。',
                      'type' => 'string',
                      'example' => '8 Core 32 GB',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAW',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ComputeResource\\": [\\n    {\\n      \\"DisplayValue\\": \\"8 Core 32 GB（单机版）\\",\\n      \\"RealValue\\": \\"8 Core 32 GB\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAW\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeComputeResourceResponse>\\n    <ComputeResource>\\n        <DisplayValue>8 Core 32 GB（单机版）</DisplayValue>\\n        <RealValue>8 Core 32 GB</RealValue>\\n    </ComputeResource>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEAW</RequestId>\\n</DescribeComputeResourceResponse>","errorExample":""}]',
      'title' => '查询物理资源',
      'summary' => '调用DescribeComputeResource接口查询AnalyticDB MySQL数仓版（3.0）集群指定地域下的计算资源规格。',
    ),
    'DescribeEIURange' => 
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
            'example' => 'rg-4690g37929****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
- 当**Operation**为**Buy**时，该参数可以为空。
-  当**Operation**为**Upgrade**或**Downgrade**时，该参数必填。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'am-bp16t5ci7r74s****',
          ),
        ),
        2 => 
        array (
          'name' => 'ComputeResource',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '计算资源规格。
>您可以调用[DescribeComputeResource](~~469002~~)接口查看计算资源规格。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "RealValue": "32Core128GBNEW",
      "DisplayValue": "32Core128GB"
    }',
          ),
        ),
        3 => 
        array (
          'name' => 'Operation',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '操作类型，取值说明：
- **Buy**：新购集群。
- **Modify**：变配集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'Buy',
            'default' => 'buy',
            'enum' => 
            array (
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>您可以调用[DescribeRegions](~~143074~~)接口查看集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'DBClusterVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版集群的版本。取值：**3.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '3.0',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。
>您可以调用[DescribeDBClusters](~~612293~~)接口查看集群的可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        7 => 
        array (
          'name' => 'StorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储资源规格，默认规格为**8ACU**，取值范围：
- **8ACU**
- **12ACU**
- **16ACU**',
            'type' => 'string',
            'required' => false,
            'example' => '8ACU',
          ),
        ),
        8 => 
        array (
          'name' => 'SubOperation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子操作类型，取值说明：
- **Upgrade**：升配集群。
- **Downgrade**：降配集群。',
            'type' => 'string',
            'required' => false,
            'example' => 'Upgrade',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EIUInfo' => 
              array (
                'description' => '弹性IO资源的数量列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'EIURange' => 
                  array (
                    'description' => '弹性IO资源数量的取值范围列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '弹性IO资源数量的取值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1,2,3,4,...200',
                    ),
                  ),
                  'DefaultValue' => 
                  array (
                    'description' => '弹性IO资源数量的建议取值。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'StorageResourceRange' => 
                  array (
                    'description' => '预留参数不涉及。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '预留参数不涉及。',
                      'type' => 'string',
                      'example' => 'none',
                    ),
                  ),
                  'MinValue' => 
                  array (
                    'description' => '预留参数不涉及。',
                    'type' => 'string',
                    'example' => 'none
',
                  ),
                  'MaxValue' => 
                  array (
                    'description' => '预留参数不涉及。',
                    'type' => 'string',
                    'example' => 'none
',
                  ),
                  'Step' => 
                  array (
                    'description' => '预留参数不涉及。',
                    'type' => 'string',
                    'example' => 'none
',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ET****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EIUInfo\\": {\\n    \\"EIURange\\": [\\n      0\\n    ],\\n    \\"DefaultValue\\": \\"2\\",\\n    \\"StorageResourceRange\\": [\\n      \\"none\\"\\n    ],\\n    \\"MinValue\\": \\"none\\\\n\\",\\n    \\"MaxValue\\": \\"none\\\\n\\",\\n    \\"Step\\": \\"none\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ET****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeEIURangeResponse>\\n    <EIUInfo>\\n        <DefaultValue>2</DefaultValue>\\n    </EIUInfo>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n</DescribeEIURangeResponse>","errorExample":""}]',
      'title' => '查询弹性IO资源数量信息',
      'summary' => '调用DescribeEIURange接口查询AnalyticDB MySQL数仓版（3.0）集群可选择的弹性IO资源数量范围。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
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
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'The specified instance state does not support this operation.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachUserENIResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</AttachUserENIResponse>","errorExample":""}]',
      'title' => '打通用户ENI',
      'summary' => '调用AttachUserENI接口为AnalyticDB MySQL数仓版（3.0）集群创建VPC弹性网卡。',
      'description' => '### 使用说明
该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachUserENIResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DetachUserENIResponse>","errorExample":""}]',
      'title' => '关闭用户ENI',
      'summary' => '调用DetachUserENI接口删除AnalyticDB MySQL数仓版（3.0）集群已创建的VPC弹性网卡。',
      'description' => '### 使用说明
该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）。',
    ),
    'DescribeKernelVersion' => 
    array (
      'summary' => '调用DescrbeKernelVersion接口查看目标AnalyticDB MySQL版集群的内核版本信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '216345',
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
            'description' => '集群ID。
> * 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~612293~~)接口查看地域ID。',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'KernelVersion' => 
              array (
                'description' => '集群内核版本号，例如：**3.1.8**。',
                'type' => 'string',
                'example' => '3.1.8',
              ),
              'ExpireDate' => 
              array (
                'description' => '版本维护到期时间，时间格式为yyyy-MM-DD HH:mm:ss。超过此时间后，系统将不再维护该版本，若有问题，请升级到更高版本。',
                'type' => 'string',
                'example' => '2023-06-01T10:36:30Z',
              ),
              'AvailableKernelVersions' => 
              array (
                'description' => '当前版本支持升级到的目标版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KernelVersion' => 
                    array (
                      'description' => '集群内核版本号，例如：**3.1.9**。',
                      'type' => 'string',
                      'example' => '3.1.9',
                    ),
                    'ReleaseDate' => 
                    array (
                      'description' => '内核版本的发布时间。时间格式为yyyy-MM-DD HH:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-06-01T10:36:30Z
',
                    ),
                    'ExpireDate' => 
                    array (
                      'description' => '版本维护到期时间，时间格式为yyyy-MM-DD HH:mm:ss。超过此时间后，系统将不再维护该版本，若有问题，请升级到更高版本。',
                      'type' => 'string',
                      'example' => '2024-06-01T10:36:30Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"KernelVersion\\": \\"3.1.8\\",\\n  \\"ExpireDate\\": \\"2023-06-01T10:36:30Z\\",\\n  \\"AvailableKernelVersions\\": [\\n    {\\n      \\"KernelVersion\\": \\"3.1.9\\",\\n      \\"ReleaseDate\\": \\"2023-06-01T10:36:30Z\\\\n\\",\\n      \\"ExpireDate\\": \\"2024-06-01T10:36:30Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群内核版本',
    ),
    'UpgradeKernelVersion' => 
    array (
      'summary' => '升级目标AnalyticDB MySQL版集群的内核版本。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '216466',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf6g8w25jacm7****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要升级到的目标内核版本。
> 您可以调用**DescribeKernelVersion**接口查询集群支持的内核版本列表。',
            'type' => 'string',
            'required' => false,
            'example' => '3.1.9',
          ),
        ),
        2 => 
        array (
          'name' => 'SwitchMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行时间，取值：
* **0**：立即执行，默认值。
* **1**：在可维护时间段执行。

> 您可以调用[ModifyDBClusterMaintainTime](~~612236~~)修改集群的可维护时间段。',
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
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'The specified instance state does not support this operation.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '升级集群内核版本',
    ),
    'CreateDBResourcePool' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
- 长度不超过255个字符。
- 必须以数字、大写字母或小写字母开头。
- 可包含数字、大写字母、小写字母、中划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询的执行模式，取值说明：
- **batch**：批处理模式。
- **interactive**（默认值）：交互执行模式。
> 详情请参见[查询执行模式](~~189502~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'interactive',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量，默认节点数0。
- 1个节点的资源量为16核64 GB。
- （节点数量*16核64 GB）的资源量不能超过集群总的资源量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4294967296',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</CreateDBResourcePoolResponse>","errorExample":""}]',
      'title' => '创建资源组',
      'summary' => '调用CreateDBResourcePool接口创建资源组。仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
      'description' => '### 注意事项
该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBResourcePool' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DeleteDBResourcePoolResponse>","errorExample":""}]',
      'title' => '删除资源组',
      'summary' => '调用DeleteDBResourcePool接口删除资源组。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
      'description' => '**注意事项**
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 不能删除默认资源组USER_DEFAULT。',
    ),
    'ModifyDBResourcePool' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_group',
          ),
        ),
        2 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询的执行模式，取值说明：
- **batch**：批处理模式。
- **interactive**：交互执行模式。
> 此参数不填写时，SQL查询的执行模式仍为原值。',
            'type' => 'string',
            'required' => false,
            'example' => 'batch',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量。

- 1个节点的资源量为16核64 GB。
- 修改的资源量不能超过集群总的资源量。

> - 此参数不填写时，节点数量仍为原值。
> - 参数QueryType和NodeNum至少填写一个。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4294967296',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyDBResourcePoolResponse>","errorExample":""}]',
      'title' => '更新资源组资源',
      'summary' => '调用ModifyDBResourcePool接口更新资源组的资源。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
      'description' => '### 注意事项
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 不支持修改默认资源组USER_DEFAULT的节点数量。',
    ),
    'DescribeDBResourcePool' => 
    array (
      'summary' => '调用DescribeDBResourcePool接口查询集群的资源组信息。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'USER_DEFAULT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '资源组',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PoolsInfo' => 
              array (
                'description' => '资源组信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QueryType' => 
                    array (
                      'description' => 'SQL查询的执行模式，取值说明：
- **batch**：批查询模式。
- **interactive**：交互执行模式。

> 详情请参见[查询执行模式](~~189502~~)。',
                      'type' => 'string',
                      'example' => 'default_type',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2022-03-09 16:57:35.241',
                    ),
                    'PoolName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'USER_DEFAULT',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-03-09 16:57:35.241',
                    ),
                    'PoolUsers' => 
                    array (
                      'description' => '资源组绑定的数据库账号。',
                      'type' => 'string',
                      'example' => 'testb,testc',
                    ),
                    'NodeNum' => 
                    array (
                      'description' => '节点数量。
> 1个节点的资源量为16核64 GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-bp11q28kvl688****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PoolsInfo\\": [\\n    {\\n      \\"QueryType\\": \\"default_type\\",\\n      \\"UpdateTime\\": \\"2022-03-09 16:57:35.241\\",\\n      \\"PoolName\\": \\"USER_DEFAULT\\",\\n      \\"CreateTime\\": \\"2022-03-09 16:57:35.241\\",\\n      \\"PoolUsers\\": \\"testb,testc\\",\\n      \\"NodeNum\\": 2\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PoolsInfo>\\n        <QueryType>default_type</QueryType>\\n        <UpdateTime>2022-03-09 16:57:35.241</UpdateTime>\\n        <PoolName>USER_DEFAULT</PoolName>\\n        <CreateTime>2022-03-09 16:57:35.241</CreateTime>\\n        <PoolUsers>testb,testc</PoolUsers>\\n        <NodeNum>2</NodeNum>\\n    </PoolsInfo>\\n    <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n</DescribeDBResourcePoolResponse>","errorExample":""}]',
      'title' => '查询集群的资源组信息',
      'description' => '### 注意事项
该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindDBResourcePoolWithUser' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PoolUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要绑定的数据库账号。既可以绑定数据库普通账号，也可以绑定数据库高权限账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accout',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<BindDBResourcePoolWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</BindDBResourcePoolWithUserResponse>","errorExample":""}]',
      'title' => '将资源组与数据库用户进行绑定',
      'summary' => '调用BindDBResourcePoolWithUser接口将资源组与数据库用户进行绑定。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
      'description' => '### 注意事项
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 默认资源组USER_DEFAULT不支持绑定数据库账号。',
    ),
    'UnbindDBResourcePoolWithUser' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PoolUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的数据库账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accout',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDBResourcePoolWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</UnbindDBResourcePoolWithUserResponse>","errorExample":""}]',
      'title' => '解绑资源组用户',
      'summary' => '调用UnbindDBResourcePoolWithUser接口解绑资源组用户。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
    ),
    'CreateDBResourceGroup' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
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
            'docRequired' => true,
            'example' => 'test_group',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型，取值说明：
- **interactive**：交互查询模式。
- **batch**（默认值）：默认查询模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'interactive',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量，默认值为0。
- 1个节点的资源量为16核64 GB。
- 节点数量不能过大，需满足节点数量*16核64 GB小于等于集群剩余可用资源。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4294967296',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
      ),
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
                'example' => '3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8',
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
            'errorMessage' => 'The operation is not permitted due to cluster status.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResourceGroupResponse>\\n    <RequestId>3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8</RequestId>\\n</CreateDBResourceGroupResponse>","errorExample":""}]',
      'title' => '创建资源组',
      'summary' => '调用CreateDBResourceGroup接口为AnalyticDB MySQL数仓版（3.0）集群创建资源组。',
      'description' => '### 注意事项
该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
    ),
    'BindDBResourceGroupWithUser' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'docRequired' => true,
            'example' => 'test',
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
            'docRequired' => true,
            'example' => 'accout',
          ),
        ),
      ),
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
            'errorCode' => 'UserAndPoolAlreadyBind',
            'errorMessage' => 'The specified user already binds the resource pool.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<BindDBResourceGroupWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</BindDBResourceGroupWithUserResponse>","errorExample":""}]',
      'title' => '将资源组与数据库用户进行绑定',
      'summary' => '调用BindDBResourceGroupWithUser接口为AnalyticDB MySQL数仓版（3.0）集群的资源组绑定数据库账号。',
      'description' => '### 注意事项
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 默认资源组USER_DEFAULT不支持绑定数据库账号。',
    ),
    'UnbindDBResourceGroupWithUser' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的数据库账号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accout',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDBResourceGroupWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</UnbindDBResourceGroupWithUserResponse>","errorExample":""}]',
      'title' => '解绑资源组和用户',
      'summary' => '调用UnbindDBResourceGroupWithUser接口为AnalyticDB MySQL数仓版（3.0）集群的资源组解绑数据库账号。',
    ),
    'DescribeDBResourceGroup' => 
    array (
      'summary' => '调用DescribeDBResourceGroup接口查询AnalyticDB MySQL数仓版（3.0）集群的资源组信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'docRequired' => true,
            'example' => 'USER_DEFAULT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '资源组',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'GroupsInfo' => 
              array (
                'description' => '资源组信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GroupType' => 
                    array (
                      'description' => '查询类型。取值说明：
- **interactive**：交互查询模式。
- **batch**：默认查询模式。

> 详情请参见[查询执行模式](~~189502~~)。',
                      'type' => 'string',
                      'example' => 'interactive',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2022-11-09 16:57:35.241',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'USER_DEFAULT',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-09 16:57:35.241',
                    ),
                    'GroupUsers' => 
                    array (
                      'description' => '资源组绑定的数据库账号。',
                      'type' => 'string',
                      'example' => 'testb,testc',
                    ),
                    'NodeNum' => 
                    array (
                      'description' => '节点数量。1个节点的资源量为16核64 GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp1ub9grke1****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"GroupsInfo\\": [\\n    {\\n      \\"GroupType\\": \\"interactive\\",\\n      \\"UpdateTime\\": \\"2022-11-09 16:57:35.241\\",\\n      \\"GroupName\\": \\"USER_DEFAULT\\",\\n      \\"CreateTime\\": \\"2022-10-09 16:57:35.241\\",\\n      \\"GroupUsers\\": \\"testb,testc\\",\\n      \\"NodeNum\\": 2\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"am-bp1ub9grke1****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <GroupsInfo>\\n        <GroupType>interactive</GroupType>\\n        <UpdateTime>2022-11-09 16:57:35.241</UpdateTime>\\n        <GroupName>USER_DEFAULT</GroupName>\\n        <CreateTime>2022-10-09 16:57:35.241</CreateTime>\\n        <GroupUsers>testb,testc</GroupUsers>\\n        <NodeNum>2</NodeNum>\\n    </GroupsInfo>\\n    <DBClusterId>am-bp1ub9grke1****</DBClusterId>\\n</DescribeDBResourceGroupResponse>","errorExample":""}]',
      'title' => '查询数据库资源组信息',
      'description' => '### 注意事项
该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
    ),
    'ModifyDBResourceGroup' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'docRequired' => true,
            'example' => 'test_group',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型。取值说明：
- **interactive**：交互查询模式。
- **batch**：默认查询模式。

> 详情请参见[查询执行模式](~~189502~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'batch',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数量，默认值为0。
- 1个节点的资源量为16核64 GB。
- 节点数量不能过大，需满足节点数量*16核64 GB小于等于集群剩余可用资源。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4294967296',
            'minimum' => '0',
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
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'The specified instance state does not support this operation.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyDBResourceGroupResponse>","errorExample":""}]',
      'title' => '修改数据库集群资源组',
      'summary' => '调用ModifyDBResourceGroup接口变更AnalyticDB MySQL数仓版（3.0）集群资源组的节点数量或查询模式。',
      'description' => '### 注意事项
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 不支持修改默认资源组USER_DEFAULT的节点数量。',
    ),
    'DeleteDBResourceGroup' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'docRequired' => true,
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DeleteDBResourceGroupResponse>","errorExample":""}]',
      'title' => '删除资源组',
      'summary' => '调用DeleteDBResourceGroup接口删除AnalyticDB MySQL数仓版（3.0）集群的指定资源组。',
      'description' => '### 注意事项
- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。
- 不能删除默认资源组USER_DEFAULT。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1d8lbdj22rx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。取值说明：
- 长度为2~30字符。
- 由大写字母、小写字母、数字或下划线（_）组成。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourcePoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'realtime',
            'default' => 'USER_DEFAULT',
          ),
        ),
        3 => 
        array (
          'name' => 'ElasticPlanNodeNum',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '弹性计划节点数。

- 当ElasticPlanType为**worker**时，该参数可以不填写或者填写0。

- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数必须填写大于0的数字。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'ElasticPlanTimeStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划扩容时间，只支持设置整点时间。格式：HH:mm:ss。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '08:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'ElasticPlanTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划还原时间，只支持设置整点时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'ElasticPlanWeeklyRepeat',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '执行弹性计划的周期。0~6表示周日到周六，多个日期用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1,2,3,4,5',
          ),
        ),
        7 => 
        array (
          'name' => 'ElasticPlanMonthlyRepeat',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '执行弹性计划的周期。数字表示每个月的几号，多个日期用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1,15,25',
          ),
        ),
        8 => 
        array (
          'name' => 'ElasticPlanStartDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划起始日期，格式：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-12-02',
          ),
        ),
        9 => 
        array (
          'name' => 'ElasticPlanEndDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划结束日期，格式：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-12-09',
          ),
        ),
        10 => 
        array (
          'name' => 'ElasticPlanEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划是否生效，取值说明：

- **true**（默认值）：生效。

- **false**：不生效。
',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'ElasticPlanType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '表示分时弹性计划类型
    ■ ExecutorCombineWorker：计算存储联动变配
    ■ Executor：计算独立弹性
    ■ Worker：存储独立弹性',
            'description' => '弹性计划资源类型，取值说明：

- **worker**：弹性IO资源单独弹性。
- **executor**：计算资源单独弹性。
- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。

> - 如果要使用**executorcombineworker**，集群内核版本需为3.1.3.2及以上版本。
> - 如果要使用**worker**或**executor**，集群内核版本需为3.1.6.1及以上版本，且需要通过提交工单申请。申请通过后，才能使用**worker**或**executor**。',
            'type' => 'string',
            'required' => false,
            'example' => 'worker',
          ),
        ),
        12 => 
        array (
          'name' => 'ElasticPlanWorkerSpec',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '表示存储独立弹性时worker垂直变配到哪种规格',
            'description' => '弹性计划支持扩容的资源规格。取值说明：
- 8 Core 64 GB（默认规格）
- 16 Core 64 GB
- 32 Core 64 GB
- 64 Core 128 GB
- 12 Core 96 GB
- 24 Core 96 GB
- 52 Core 86 GB',
            'type' => 'string',
            'required' => false,
            'example' => '32 Core 64 GB',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</CreateElasticPlanResponse>","errorExample":""}]',
      'title' => '创建分时弹性计划',
      'summary' => '调用CreateElasticPlan创建分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
      'description' => '### 使用说明
该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。
> 调用[DescribeElasticPlans](~~601334~~)接口可以查看集群的弹性计划名称。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
      'title' => '删除分时弹性计划',
      'summary' => '调用DeleteElasticPlan接口删除分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1rqvm70uh2v****',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称，取值说明：

- 长度为2~30字符。
- 由大写字母、小写字母、数字或下划线（_）组成。
>您可以调用[DescribeElasticPlan](~~190596~~)接口查看指定集群下所有弹性计划的详细信息，包括弹性计划名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'realtime',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourcePoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
            'default' => 'USER_DEFAULT',
          ),
        ),
        3 => 
        array (
          'name' => 'ElasticPlanNodeNum',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '弹性计划节点数。

- 当ElasticPlanType为**worker**时，该参数可以不填写或者填写0。

- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数必须填写大于0的数字。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'ElasticPlanTimeStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划扩容时间，只支持设置整点时间。格式：HH:mm:ss。',
            'type' => 'string',
            'required' => false,
            'example' => '8:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'ElasticPlanTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划还原时间，只支持设置整点时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
            'type' => 'string',
            'required' => false,
            'example' => '10:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'ElasticPlanWeeklyRepeat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行弹性计划的周期。0~6表示周日到周六，多个日期用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '1,2,3,4,5',
          ),
        ),
        7 => 
        array (
          'name' => 'ElasticPlanMonthlyRepeat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行弹性计划的周期。数字表示每个月的几号，多个日期用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '1,15,25',
          ),
        ),
        8 => 
        array (
          'name' => 'ElasticPlanStartDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划起始日期，格式：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-12-02',
          ),
        ),
        9 => 
        array (
          'name' => 'ElasticPlanEndDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划结束日期，格式：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-12-09',
          ),
        ),
        10 => 
        array (
          'name' => 'ElasticPlanEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划是否生效，取值说明：

- **true**（默认值）：生效。
- **false**：不生效。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'ElasticPlanType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '弹性计划资源类型，取值说明：

- **worker**：弹性IO资源单独弹性。
- **executor**：计算资源单独弹性。
- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。

> - 如果要使用**executorcombineworker**，集群内核版本需为3.1.3.2及以上版本。
> - 如果要使用**worker**或**executor**，集群内核版本需为3.1.6.1及以上版本，且需要通过提交工单申请。申请通过后，才能使用**worker**或**executor**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'worker',
          ),
        ),
        12 => 
        array (
          'name' => 'ElasticPlanWorkerSpec',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '弹性计划支持扩容的资源规格，取值说明：

- 8 Core 64 GB（默认规格）

- 16 Core 64 GB

- 32 Core 64 GB

- 64 Core 128 GB

- 12 Core 96 GB

- 24 Core 96 GB

- 52 Core 86 GB',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '16 Core 64 GB',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体',
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
            'errorCode' => 'ElasticPlanParameterError',
            'errorMessage' => 'The specified elastic plan parameter is invalid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyElasticPlanResponse>","errorExample":""}]',
      'title' => '修改分时弹性计划',
      'summary' => '调用ModifyElasticPlan修改分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
      'description' => '该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeElasticDailyPlan' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称。取值说明：
- 长度为2~30字符。
- 由大写字母、小写字母、数字或下划线（_）组成。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'realtimeplan',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourcePoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'ElasticDailyPlanDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当天弹性计划的起始日期，格式：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-12-02',
          ),
        ),
        4 => 
        array (
          'name' => 'ElasticDailyPlanStatusList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当天弹性计划执行状态，同时查询多个状态用半角逗号（,）分隔，取值说明：
- **1**：未执行。
- **2**：执行中。
- **3**：执行成功。
- **4**：执行失败。

 ',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
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
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'ElasticDailyPlanList' => 
              array (
                'description' => '当天弹性计划的信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结构体

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '当天弹性计划执行状态，同时查询多个状态用半角逗号（,）分隔，取值说明：
- **1**：未执行。
- **2**：执行中。
- **3**：执行成功。
- **4**：执行失败。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'Day' => 
                    array (
                      'description' => '当天弹性计划的起始日期，格式：yyyy-MM-dd。',
                      'type' => 'string',
                      'example' => '2022-12-02',
                    ),
                    'ResourcePoolName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'StartTs' => 
                    array (
                      'description' => '实际扩容时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-12-02 16:00:00',
                    ),
                    'PlanEndTs' => 
                    array (
                      'description' => '计划还原时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-12-02 16:00:00',
                    ),
                    'PlanStartTs' => 
                    array (
                      'description' => '计划扩容时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-12-02 15:00:00',
                    ),
                    'ElasticNodeNum' => 
                    array (
                      'description' => '弹性计划节点数。

- 当ElasticPlanType为**worker**时，该参数不返回或返回结果为0。

- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数返回结果为大于0的数字。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'EndTs' => 
                    array (
                      'description' => '实际还原时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-12-02 16:00:00',
                    ),
                    'PlanName' => 
                    array (
                      'description' => '弹性计划名称。',
                      'type' => 'string',
                      'example' => 'realtimeplan',
                    ),
                    'ElasticPlanType' => 
                    array (
                      'description' => '弹性计划资源类型，取值说明：

- **worker**：弹性IO资源单独弹性。

- **executor**：计算资源单独弹性。

- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。',
                      'type' => 'string',
                      'example' => 'worker',
                    ),
                    'ElasticPlanWorkerSpec' => 
                    array (
                      'description' => '弹性计划支持扩容的资源规格。取值说明：

- 8 Core 64 GB（默认规格）

- 16 Core 64 GB

- 32 Core 64 GB

- 64 Core 128 GB

- 12 Core 96 GB

- 24 Core 96 GB

- 52 Core 86 GB',
                      'type' => 'string',
                      'example' => '16 Core 64 GB',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ElasticDailyPlanList\\": [\\n    {\\n      \\"Status\\": 3,\\n      \\"Day\\": \\"2022-12-02\\",\\n      \\"ResourcePoolName\\": \\"test\\",\\n      \\"StartTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanEndTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanStartTs\\": \\"2022-12-02 15:00:00\\",\\n      \\"ElasticNodeNum\\": 0,\\n      \\"EndTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanName\\": \\"realtimeplan\\",\\n      \\"ElasticPlanType\\": \\"worker\\",\\n      \\"ElasticPlanWorkerSpec\\": \\"16 Core 64 GB\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticDailyPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ElasticDailyPlanList>\\n        <Status>3</Status>\\n        <Day>2022-12-02</Day>\\n        <ResourcePoolName>test</ResourcePoolName>\\n        <StartTs>2022-12-02 16:00:00</StartTs>\\n        <PlanEndTs>2022-12-02 16:00:00</PlanEndTs>\\n        <PlanStartTs>2022-12-02 15:00:00</PlanStartTs>\\n        <ElasticNodeNum>1</ElasticNodeNum>\\n        <EndTs>2022-12-02 16:00:00</EndTs>\\n        <PlanName>realtimeplan</PlanName>\\n        <ElasticPlanType>worker</ElasticPlanType>\\n        <ElasticPlanWorkerSpec>16 Core 64 GB</ElasticPlanWorkerSpec>\\n    </ElasticDailyPlanList>\\n</DescribeElasticDailyPlanResponse>","errorExample":""}]',
      'title' => '查询分时弹性计划日计划执行信息',
      'summary' => '调用DescribeElasticDailyPlan接口查询分时弹性计划日计划执行信息。该接口仅适用于ADB弹性模式集群版（新版）。',
      'description' => '### 使用说明
该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeElasticPlan' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp278jg9****',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划名称，取值说明：
- 长度为2~30字符。
- 由大写字母、小写字母、数字或下划线（_）组成。
>不填写该参数时，返回指定集群下所有弹性计划的详细信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'realtime',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourcePoolName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
>- 您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'USER_DEFAULT',
          ),
        ),
        3 => 
        array (
          'name' => 'ElasticPlanEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性计划是否生效，取值说明：
- **true**（默认值）：生效。
- **false**：不生效。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'ElasticPlanList' => 
              array (
                'description' => '弹性计划列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '弹性计划还原时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
                      'type' => 'string',
                      'example' => '10:00:00',
                    ),
                    'WeeklyRepeat' => 
                    array (
                      'description' => '执行弹性计划的周期。0～6表示周日到周六，多个日期用半角逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '3,4,5,6',
                    ),
                    'MonthlyRepeat' => 
                    array (
                      'description' => '执行弹性计划的周期。表示每个月的几号，多个日期用半角逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '1,15,25',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '弹性计划扩容时间，格式：HH:mm:ss。',
                      'type' => 'string',
                      'example' => '08:00:00',
                    ),
                    'ResourcePoolName' => 
                    array (
                      'description' => '资源组名称。',
                      'type' => 'string',
                      'example' => 'USER_DEFAULT',
                    ),
                    'StartDay' => 
                    array (
                      'description' => '弹性计划起始日期，只有设置了弹性计划起始日期才会返回参数值。格式：yyyy-MM-dd。',
                      'type' => 'string',
                      'example' => '2022-12-02',
                    ),
                    'ElasticNodeNum' => 
                    array (
                      'description' => '弹性计划节点数。

- 当ElasticPlanType为**worker**时，该参数不返回或返回结果为0。

- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数返回结果为大于0的数字。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Enable' => 
                    array (
                      'description' => '弹性计划是否生效，取值说明：
- **true**（默认值）：生效。
- **false**：不生效。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'EndDay' => 
                    array (
                      'description' => '弹性计划结束日期，只有设置了弹性计划结束日期才会返回参数值。格式：yyyy-MM-dd。',
                      'type' => 'string',
                      'example' => '2022-12-09',
                    ),
                    'PlanName' => 
                    array (
                      'description' => '弹性计划名称。',
                      'type' => 'string',
                      'example' => 'realtime',
                    ),
                    'ElasticPlanType' => 
                    array (
                      'description' => '弹性计划资源类型，取值说明：

- **worker**：弹性IO资源单独弹性。
- **executor**：计算资源单独弹性。
- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。',
                      'type' => 'string',
                      'example' => 'worker',
                    ),
                    'ElasticPlanWorkerSpec' => 
                    array (
                      'description' => '弹性计划支持扩容的资源规格，取值说明：

- 8 Core 64 GB（默认规格）

- 16 Core 64 GB

- 32 Core 64 GB

- 64 Core 128 GB

- 12 Core 96 GB

- 24 Core 96 GB

- 52 Core 86 GB',
                      'type' => 'string',
                      'example' => '16 Core 64 GB',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ElasticPlanList\\": [\\n    {\\n      \\"EndTime\\": \\"10:00:00\\",\\n      \\"WeeklyRepeat\\": \\"3,4,5,6\\",\\n      \\"MonthlyRepeat\\": \\"1,15,25\\",\\n      \\"StartTime\\": \\"08:00:00\\",\\n      \\"ResourcePoolName\\": \\"USER_DEFAULT\\",\\n      \\"StartDay\\": \\"2022-12-02\\",\\n      \\"ElasticNodeNum\\": 0,\\n      \\"Enable\\": true,\\n      \\"EndDay\\": \\"2022-12-09\\",\\n      \\"PlanName\\": \\"realtime\\",\\n      \\"ElasticPlanType\\": \\"worker\\",\\n      \\"ElasticPlanWorkerSpec\\": \\"16 Core 64 GB\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ElasticPlanList>\\n        <EndTime>10:00:00</EndTime>\\n        <WeeklyRepeat>3,4,5,6</WeeklyRepeat>\\n        <StartTime>08:00:00</StartTime>\\n        <ResourcePoolName>USER_DEFAULT</ResourcePoolName>\\n        <StartDay>2022-12-02</StartDay>\\n        <ElasticNodeNum>0</ElasticNodeNum>\\n        <Enable>true</Enable>\\n        <EndDay>2022-12-09</EndDay>\\n        <PlanName>realtime</PlanName>\\n        <ElasticPlanType>WORKER</ElasticPlanType>\\n        <ElasticPlanWorkerSpec>16 Core 64 GB</ElasticPlanWorkerSpec>\\n    </ElasticPlanList>\\n</DescribeElasticPlanResponse>","errorExample":""}]',
      'title' => '查询弹性计划',
      'summary' => '调用DescribeElasticPlan接口查询弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
      'description' => '### 使用说明
该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
    ),
    'DescribeTables' => 
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
>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
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
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
                          'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1r053byu48p****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"am-bp1r053byu48p****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取表信息列表',
      'summary' => '调用DescribeTables接口枚举实例指定数据库下所有表列表。',
    ),
    'DescribeAllDataSource' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1pke2pcfavw****',
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
            'required' => true,
            'docRequired' => true,
            'example' => 'adb_demo',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '421794A3-72A5-5D27-9E8B-A75A4C503E17',
              ),
              'Tables' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'description' => '表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1pke2pcfavw****',
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
                    'description' => '列信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列列表。',
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
                          'description' => '列名',
                          'type' => 'string',
                          'example' => 'id',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名。',
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
                          'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1pke2pcfavw****',
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
                          'description' => '数据库名。',
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
                    'description' => '数据库信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1pke2pcfavw****',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Columns\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Schemas\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '枚举数据库列表',
      'summary' => '枚举实例下所有数据库列表、表列表和列列表。',
    ),
    'DescribeSchemas' => 
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
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
      ),
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
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1xxxxxxxx47',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp1xxxxxxxx47\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSchemasResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Items>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Items>\\n</DescribeSchemasResponse>","errorExample":""}]',
      'title' => '枚举实例下所有数据库列表',
      'summary' => '调用DescribeSchemas接口枚举实例下所有数据库列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTableDetail' => 
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
        'abilityTreeCode' => '10825',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adb_demo',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
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
              'AvgSize' => 
              array (
                'description' => '平均分区行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Items' => 
              array (
                'description' => '分区列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Shard' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Size' => 
                        array (
                          'description' => '表大小，行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Id' => 
                        array (
                          'description' => '分区号（只返回分区名数字部分）。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AvgSize\\": 0,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Shard\\": [\\n      {\\n        \\"Size\\": 0,\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AvgSize>0</AvgSize>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>1</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>2</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>3</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>4</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>5</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>6</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>7</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>8</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>9</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>10</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>11</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>12</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>13</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>14</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>15</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>16</Id>\\n    </Shard>\\n</Items>","errorExample":""}]',
      'title' => '查询表详情',
      'summary' => '调用DescribeTableDetail接口查看表在每个Shard的数据分布情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProcessList' => 
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
            'example' => 'am-bp11q28kvl688****',
          ),
        ),
        1 => 
        array (
          'name' => 'ShowFull',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示完整的SQL语句。取值说明：
- **True**：展示完整的SQL语句。
- **False**：只展示SQL语句的前100个字符。

> 默认值False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
        2 => 
        array (
          'name' => 'RunningTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按运行时间过滤，展示大于该运行时间的查询。单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        3 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按用户名过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '过滤关键字，目前仅支持过滤**SELECT**。',
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
            'description' => '按指定字段排序，JSON格式，`[{"Field":"Time","Type":"Desc" },{ "Field":"User", "Type":"Asc" }]`，取值说明：
- **Field**：需要排序的字段名，支持Time，User，Host，DB字段。
- **Type**：排序类型，**Desc**为降序，**Asc**为升序。',
            'type' => 'string',
            'required' => false,
            'example' => '[ { "Field":"Time","Type":"Desc" },  { "Field":"User", "Type":"Asc" }]',
          ),
        ),
        6 => 
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
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
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
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '总页数。',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
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
                  'Process' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StartTime' => 
                        array (
                          'description' => '任务的开始时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2020-11-19T02:48:15Z',
                        ),
                        'Time' => 
                        array (
                          'description' => '查询任务已运行时间。单位：秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '11',
                        ),
                        'ProcessId' => 
                        array (
                          'description' => '任务的唯一标识，KILL PROCESS时使用。',
                          'type' => 'string',
                          'example' => '202011191048151921681492420315100****',
                        ),
                        'Host' => 
                        array (
                          'description' => '发起查询的IP地址。',
                          'type' => 'string',
                          'example' => '192.168.XX.XX:12308',
                        ),
                        'DB' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'adb_demo',
                        ),
                        'Command' => 
                        array (
                          'description' => '命令类型，仅支持SELECT类型。',
                          'type' => 'string',
                          'example' => 'SELECT',
                        ),
                        'User' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Id' => 
                        array (
                          'description' => '工作线程ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '49104',
                        ),
                        'Info' => 
                        array (
                          'description' => '正在运行的SQL语句，默认返回前100字符。当传入参数ShowFull为True时，显示全文。',
                          'type' => 'string',
                          'example' => 'select * from sbtest1,sbtest2,sbtest3,sbtest4',
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
            'errorCode' => 'IncorrectModuleVersion',
            'errorMessage' => 'The specified module version does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AnalyticDBKernelError',
            'errorMessage' => 'Calling AnalyticDB Kernel error',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Process\\": [\\n      {\\n        \\"StartTime\\": \\"2020-11-19T02:48:15Z\\",\\n        \\"Time\\": 11,\\n        \\"ProcessId\\": \\"202011191048151921681492420315100****\\",\\n        \\"Host\\": \\"192.168.XX.XX:12308\\",\\n        \\"DB\\": \\"adb_demo\\",\\n        \\"Command\\": \\"SELECT\\",\\n        \\"User\\": \\"test\\",\\n        \\"Id\\": 49104,\\n        \\"Info\\": \\"select * from sbtest1,sbtest2,sbtest3,sbtest4\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeProcessListResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <StartTime>2020-11-19T02:48:15Z</StartTime>\\n        <Time>11</Time>\\n        <ProcessId>202011191048151921681492420315100****</ProcessId>\\n        <Host>192.168.XX.XX:12308</Host>\\n        <DB>adb_demo</DB>\\n        <Command>SELECT</Command>\\n        <User>test</User>\\n        <Id>49104</Id>\\n        <Info>select * from sbtest1,sbtest2,sbtest3,sbtest4</Info>\\n    </Items>\\n</DescribeProcessListResponse>","errorExample":""}]',
      'title' => '查看集群正在运行的查询',
      'summary' => '调用DescribeProcessList接口查看实例正在运行的查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeColumns' => 
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adb_demo',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表名。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
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
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'id',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AutoIncrementColumn' => 
                        array (
                          'description' => '是否自增。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'DBClusterId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'am-bp1xxxxxxxx47',
                        ),
                        'PrimaryKey' => 
                        array (
                          'description' => '是否主键。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'SchemaName' => 
                        array (
                          'description' => '数据库名。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"am-bp1xxxxxxxx47\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>id</ColumnName>\\n        <Type>bigint</Type>\\n        <AutoIncrementColumn>true</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>name</ColumnName>\\n        <Type>varchar</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>value</ColumnName>\\n        <Type>int</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>ts</ColumnName>\\n        <Type>timestamp</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n</Items>","errorExample":""}]',
      'title' => '枚举实例下指定表格的列列表',
      'summary' => '调用DescribeColumns接口枚举实例下指定表格的列列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTaskInfo' => 
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hongkong',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '225685759',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TaskInfo' => 
              array (
                'description' => '任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '状态：

- Waiting：等待中
- Running：执行中
- Finished：已结束
- Failed：失败
- Closed：已关闭
- Cancel：已取消
- Retry：重试
- Pause：暂停
- Stop：中断',
                    'type' => 'string',
                    'example' => 'Finished',
                  ),
                  'FinishTime' => 
                  array (
                    'description' => '结束时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2020-01-07T08:08:50Z',
                  ),
                  'Progress' => 
                  array (
                    'description' => '进度，单位：百分比（%）。',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'BeginTime' => 
                  array (
                    'description' => '开始时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2020-01-07T07:39:56Z',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '225685759',
                  ),
                ),
              ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskInfo\\": {\\n    \\"Status\\": \\"Finished\\",\\n    \\"FinishTime\\": \\"2020-01-07T08:08:50Z\\",\\n    \\"Progress\\": \\"100\\",\\n    \\"BeginTime\\": \\"2020-01-07T07:39:56Z\\",\\n    \\"TaskId\\": 225685759\\n  },\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '查询相关管控任务流进度',
      'summary' => '调用DescribeTaskInfo接口查看相关管控任务流进度。',
    ),
    'DescribeSQLPlan' => 
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'ProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。
> 您可以调用[DescribeProcessList](~~612277~~)接口查看目标SQL的任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '202105271604431720161662490345*******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '22D6DEF0-CBC7-4388-A41C-D5FD62******',
              ),
              'StageList' => 
              array (
                'description' => '计划阶段的信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'State' => 
                    array (
                      'description' => '该计划阶段的最终执行状态，取值范围如下：
* FINISHED：完成。
* CANCELED：取消。
* ABORTED：中止。
* FAILED：失败。',
                      'type' => 'string',
                      'example' => 'FINISHED',
                    ),
                    'CPUTimeAvg' => 
                    array (
                      'description' => '该阶段的`CPU Time`在各个计算节点的平均值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5984',
                    ),
                    'CPUTimeMax' => 
                    array (
                      'description' => '该阶段的`CPU Time`在各个计算节点的最大值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5984',
                    ),
                    'OperatorCost' => 
                    array (
                      'description' => '该阶段内部总的算子耗时，等同于该阶段的CPU Time，可用于判断查询哪些部分消耗了较多的计算资源。单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5984',
                    ),
                    'ScanTimeMax' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的最大值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'InputSizeMax' => 
                    array (
                      'description' => '阶段在各个计算节点的输入数据量的最大值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '173',
                    ),
                    'StageId' => 
                    array (
                      'description' => '阶段ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ScanSizeMax' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的最大值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'CPUTimeMin' => 
                    array (
                      'description' => '该阶段的`CPU Time`在各个计算节点的最小值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '47',
                    ),
                    'ScanTimeMin' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的最小值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ScanSizeMin' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的最小值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'InputSizeMin' => 
                    array (
                      'description' => '阶段在各个计算节点的输入数据量的最小值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '173',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => '执行目标SQL时的峰值内存，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '74208',
                    ),
                    'ScanTimeAvg' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的平均值，单位为毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ScanSizeAvg' => 
                    array (
                      'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的平均值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'InputSizeAvg' => 
                    array (
                      'description' => '阶段在各个计算节点的输入数据量的平均值，单位为Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '173',
                    ),
                  ),
                ),
              ),
              'OriginInfo' => 
              array (
                'description' => 'SQL Plan的详细原始数据。',
                'type' => 'string',
                'example' => '{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"session\\":{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"hasSharedStage\\":false,\\"parentId\\":0}}',
              ),
              'Detail' => 
              array (
                'description' => '目标SQL的详细执行信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'SQL' => 
                  array (
                    'description' => 'SQL语句。',
                    'type' => 'string',
                    'example' => 'INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source',
                  ),
                  'OutputSize' => 
                  array (
                    'description' => '目标SQL语句的总输出数据量，单位为Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '9',
                  ),
                  'State' => 
                  array (
                    'description' => '目标SQL语句的最终执行状态，取值范围如下：
* FINISHED：完成。
* FAILED ：失败。',
                    'type' => 'string',
                    'example' => 'FINISHED',
                  ),
                  'OutputRows' => 
                  array (
                    'description' => '目标SQL的总输出行数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'User' => 
                  array (
                    'description' => '提交目标SQL语句的用户名。',
                    'type' => 'string',
                    'example' => 'test_acc',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '目标SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒。',
                    'type' => 'string',
                    'example' => '1622102683243',
                  ),
                  'TotalStage' => 
                  array (
                    'description' => '目标SQL中包含的总阶段个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4',
                  ),
                  'QueuedTime' => 
                  array (
                    'description' => '执行目标SQL的排队时间，单位为毫秒（ms）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'TotalTime' => 
                  array (
                    'description' => '目标SQL的执行总耗时，单位为毫秒（ms）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2340',
                  ),
                  'TotalTask' => 
                  array (
                    'description' => '目标SQL中包含的总任务个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4',
                  ),
                  'Database' => 
                  array (
                    'description' => '执行目标SQL的数据库名称。',
                    'type' => 'string',
                    'example' => 'adb_demo',
                  ),
                  'PeakMemory' => 
                  array (
                    'description' => '执行目标SQL时的峰值内存，单位为Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '441802',
                  ),
                  'ClientIP' => 
                  array (
                    'description' => '提交目标SQL语句的客户端IP地址。',
                    'type' => 'string',
                    'example' => '172.16.***.***',
                  ),
                  'PlanningTime' => 
                  array (
                    'description' => '执行目标SQL时生成执行计划的时间，单位为毫秒（ms）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '86',
                  ),
                  'CPUTime' => 
                  array (
                    'description' => '执行目标SQL时，算子处理数据单元的总耗时，是多服务器多线程上的累计值。单位为毫秒（ms）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '6100',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"22D6DEF0-CBC7-4388-A41C-D5FD62******\\",\\n  \\"StageList\\": [\\n    {\\n      \\"State\\": \\"FINISHED\\",\\n      \\"CPUTimeAvg\\": 5984,\\n      \\"CPUTimeMax\\": 5984,\\n      \\"OperatorCost\\": 5984,\\n      \\"ScanTimeMax\\": 0,\\n      \\"InputSizeMax\\": 173,\\n      \\"StageId\\": 1,\\n      \\"ScanSizeMax\\": 0,\\n      \\"CPUTimeMin\\": 47,\\n      \\"ScanTimeMin\\": 0,\\n      \\"ScanSizeMin\\": 0,\\n      \\"InputSizeMin\\": 173,\\n      \\"PeakMemory\\": 74208,\\n      \\"ScanTimeAvg\\": 0,\\n      \\"ScanSizeAvg\\": 0,\\n      \\"InputSizeAvg\\": 173\\n    }\\n  ],\\n  \\"OriginInfo\\": \\"{\\\\\\\\\\\\\\"queryId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20210527_160443_10581_hdhzr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"session\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"queryId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20210527_160443_10581_hdhzr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hasSharedStage\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"parentId\\\\\\\\\\\\\\":0}}\\",\\n  \\"Detail\\": {\\n    \\"SQL\\": \\"INSERT OVERWRITE INTO hdfs_import_external\\\\\\\\nSELECT *\\\\\\\\nFROM adb_hdfs_import_source\\",\\n    \\"OutputSize\\": 9,\\n    \\"State\\": \\"FINISHED\\",\\n    \\"OutputRows\\": 1,\\n    \\"User\\": \\"test_acc\\",\\n    \\"StartTime\\": \\"1622102683243\\",\\n    \\"TotalStage\\": 4,\\n    \\"QueuedTime\\": 0,\\n    \\"TotalTime\\": 2340,\\n    \\"TotalTask\\": 4,\\n    \\"Database\\": \\"adb_demo\\",\\n    \\"PeakMemory\\": 441802,\\n    \\"ClientIP\\": \\"172.16.***.***\\",\\n    \\"PlanningTime\\": 86,\\n    \\"CPUTime\\": 6100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLPlanResponse>\\n    <RequestId>22D6DEF0-CBC7-4388-A41C-D5FD62******</RequestId>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>0</StageId>\\n        <PeakMemory>264960</PeakMemory>\\n        <CPUTimeMax>47</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>1023</InputSizeMax>\\n        <InputSizeMin>1023</InputSizeMin>\\n        <InputSizeAvg>1023</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>47</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>47</CPUTimeMin>\\n        <CPUTimeAvg>47</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>1</StageId>\\n        <PeakMemory>74208</PeakMemory>\\n        <CPUTimeMax>5984</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>173</InputSizeMax>\\n        <InputSizeMin>173</InputSizeMin>\\n        <InputSizeAvg>173</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>5984</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>5984</CPUTimeMin>\\n        <CPUTimeAvg>5984</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>2</StageId>\\n        <PeakMemory>102634</PeakMemory>\\n        <CPUTimeMax>18</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>173</InputSizeMax>\\n        <InputSizeMin>173</InputSizeMin>\\n        <InputSizeAvg>173</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>18</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>18</CPUTimeMin>\\n        <CPUTimeAvg>18</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>36</ScanSizeMin>\\n        <ScanSizeAvg>36</ScanSizeAvg>\\n        <StageId>3</StageId>\\n        <PeakMemory>0</PeakMemory>\\n        <CPUTimeMax>51</CPUTimeMax>\\n        <ScanTimeMin>10</ScanTimeMin>\\n        <ScanTimeAvg>10</ScanTimeAvg>\\n        <InputSizeMax>36</InputSizeMax>\\n        <InputSizeMin>36</InputSizeMin>\\n        <InputSizeAvg>36</InputSizeAvg>\\n        <ScanSizeMax>36</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>51</OperatorCost>\\n        <ScanTimeMax>10</ScanTimeMax>\\n        <CPUTimeMin>51</CPUTimeMin>\\n        <CPUTimeAvg>51</CPUTimeAvg>\\n    </StageList>\\n    <OriginInfo>{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"session\\":{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"hasSharedStage\\":false,\\"parentId\\":0}}</OriginInfo>\\n    <Detail>\\n        <TotalTask>4</TotalTask>\\n        <OutputSize>9</OutputSize>\\n        <User>test_acc</User>\\n        <TotalStage>4</TotalStage>\\n        <PeakMemory>441802</PeakMemory>\\n        <StartTime>1622102683243</StartTime>\\n        <ClientIP>172.16.***.***</ClientIP>\\n        <SQL>INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source</SQL>\\n        <CPUTime>6100</CPUTime>\\n        <QueuedTime>0</QueuedTime>\\n        <State>FINISHED</State>\\n        <Database>adb_demo</Database>\\n        <TotalTime>2340</TotalTime>\\n        <PlanningTime>86</PlanningTime>\\n        <OutputRows>1</OutputRows>\\n    </Detail>\\n</DescribeSQLPlanResponse>","errorExample":""}]',
      'title' => '查询基础信息和计划信息',
      'summary' => '调用DescribeSQLPlan接口查询目标SQL，例如查询语句或ETL（Extract Transform Load）任务语句的计划信息。',
    ),
    'DescribeSQLPlanTask' => 
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'ProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '201907241445301720211111570315107****',
          ),
        ),
        2 => 
        array (
          'name' => 'StageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属阶段。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1785135913****',
          ),
        ),
      ),
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
              'TaskList' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ScanCost' => 
                    array (
                      'description' => '带数据源的任务的扫描数据耗时。单位：ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'OutputSize' => 
                    array (
                      'description' => '任务的输出数据量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '945',
                    ),
                    'InputSize' => 
                    array (
                      'description' => '任务的输入数据量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3763',
                    ),
                    'State' => 
                    array (
                      'description' => '任务最终执行状态：

- FINISHED：完成。
- CANCELED：取消。
- ABORTED：中止。
- FAILED：失败。',
                      'type' => 'string',
                      'example' => 'FINISHED',
                    ),
                    'OperatorCost' => 
                    array (
                      'description' => '任务在某个节点的算子总耗时，是个多线程累加值，可以用于判断计算是否存在长尾。单位：ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'OutputRows' => 
                    array (
                      'description' => '任务的输出数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '105',
                    ),
                    'ScanSize' => 
                    array (
                      'description' => '带数据源的任务的扫描数据量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ElapsedTime' => 
                    array (
                      'description' => '任务从创建到结束的时间差。单位：ms。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'ScanRows' => 
                    array (
                      'description' => '带数据源的任务的扫描数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => '任务在某个节点的峰值内存。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '898576',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '198877623',
                    ),
                    'InputRows' => 
                    array (
                      'description' => '任务的输入数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '105',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"TaskList\\": [\\n    {\\n      \\"OutputSize\\": 945,\\n      \\"ScanCost\\": 0,\\n      \\"InputSize\\": 3763,\\n      \\"State\\": \\"FINISHED\\",\\n      \\"OperatorCost\\": 3,\\n      \\"OutputRows\\": 105,\\n      \\"ScanSize\\": 0,\\n      \\"ElapsedTime\\": 10,\\n      \\"ScanRows\\": 0,\\n      \\"PeakMemory\\": 898576,\\n      \\"TaskId\\": 198877623,\\n      \\"InputRows\\": 105\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<TaskList>\\n    <OutputSize>945</OutputSize>\\n    <TaskId>198877623</TaskId>\\n    <InputSize>3763</InputSize>\\n    <PeakMemory>898576</PeakMemory>\\n    <ElapsedTime>10</ElapsedTime>\\n    <InputRows>105</InputRows>\\n    <ScanRows>0</ScanRows>\\n    <ScanCost>0</ScanCost>\\n    <State>FINISHED</State>\\n    <OutputRows>105</OutputRows>\\n    <OperatorCost>3</OperatorCost>\\n    <ScanSize>0</ScanSize>\\n</TaskList>","errorExample":""}]',
      'title' => '查询计划任务信息',
      'summary' => '调用DescribeSQLPlanTask查询任务信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTablePartitionDiagnose' => 
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
        'abilityTreeCode' => '10826',
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
> 您可以调用[DescribeDBClusters](~~612241~~)接口查看目标地域下所有AnalyticDB MySQL数仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bpxxxxxxxx47',
          ),
        ),
        1 => 
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
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        2 => 
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
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => '[{"Field":"SchemaName", "Type": "desc" }]',
          ),
        ),
        4 => 
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
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '参数列表。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PageSize' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '123',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '34',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'rm-uf6wjk5xxxxxxxxxx',
              ),
              'SuggestMaxRecordsPerPartition' => 
              array (
                'description' => '建议每个二级分区的最大行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '640000000',
              ),
              'SuggestMinRecordsPerPartition' => 
              array (
                'description' => '建议每个二级分区的最小行数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '64000000',
              ),
              'Items' => 
              array (
                'description' => '表统计信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TableName' => 
                    array (
                      'description' => '表名。',
                      'type' => 'string',
                      'example' => 'user',
                    ),
                    'PartitionDetail' => 
                    array (
                      'description' => '不合理分区。',
                      'type' => 'string',
                      'example' => '[20210110, 20210113,20210123]',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => '数据库名。',
                      'type' => 'string',
                      'example' => 'test_db',
                    ),
                    'PartitionNumber' => 
                    array (
                      'description' => '分区个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '34',
                    ),
                    'SpaceRatio' => 
                    array (
                      'type' => 'number',
                      'format' => 'double',
                    ),
                    'TotalSize' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                  ),
                ),
              ),
              'DetectionItems' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'type' => 'string',
                    ),
                    'Message' => 
                    array (
                      'type' => 'string',
                    ),
                    'Status' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageSize\\": 123,\\n  \\"PageNumber\\": 34,\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\",\\n  \\"SuggestMaxRecordsPerPartition\\": 640000000,\\n  \\"SuggestMinRecordsPerPartition\\": 64000000,\\n  \\"Items\\": [\\n    {\\n      \\"TableName\\": \\"user\\",\\n      \\"PartitionDetail\\": \\"[20210110, 20210113,20210123]\\",\\n      \\"SchemaName\\": \\"test_db\\",\\n      \\"PartitionNumber\\": 34,\\n      \\"SpaceRatio\\": 0,\\n      \\"TotalSize\\": 0\\n    }\\n  ],\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PageSize>123</PageSize>\\n<PageNumber>34</PageNumber>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>\\n<SuggestMaxRecordsPerPartition>640000000</SuggestMaxRecordsPerPartition>\\n<SuggestMinRecordsPerPartition>64000000</SuggestMinRecordsPerPartition>\\n<Items>\\n    <TableName>user</TableName>\\n    <PartitionDetail>[20210110, 20210113,20210123]</PartitionDetail>\\n    <SchemaName>test_db</SchemaName>\\n    <PartitionNumber>34</PartitionNumber>\\n</Items>","errorExample":""}]',
      'title' => '查询二级分区诊断新系列',
      'summary' => '调用DescribeTablePartitionDiagnose查询二级分区诊断新系列。',
    ),
    'DescribeLoadTasksRecords' => 
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
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
            'example' => 'am-bp2590j****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。
> 建议查询开始时间设置为30天内的任意时间点。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-18T06:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需晚于查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-18T06:30:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导入导出任务所涉及的数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
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
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按指定字段对任务进行升序或降序排列。参数值需为JSON字符串类型，例如：`[{"Field":"CreateTime", "Type":"desc"}]`

> * `Field`表示需要排序的字段名，支持的字段为：`State`、`CreateTime`、`DBName`、`ProcessID`、`UpdateTime`、`JobName`和`ProcessRows`。
> * `Type`表示排序类型，取值范围为`Desc`（降序）或`Asc`（升序），取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"CreateTime", "Type":"desc"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的异步导入或导出任务的状态，取值范围如下：
* **INIT**：任务初始化。
* **RUNNING**：任务进行中。
* **FINISH**：任务执行成功。
* **FAILED**：任务执行失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'FINISH',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '任务总数。',
                'type' => 'string',
                'example' => '1',
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
                'example' => 'C60B05DB-2B77-421A-98E9-92C20E******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp2590j****',
              ),
              'LoadTasksRecords' => 
              array (
                'description' => '任务信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Sql' => 
                    array (
                      'description' => '异步导入导出任务中使用的SQL语句详情。',
                      'type' => 'string',
                      'example' => 'insert overwrite into courses_external_table\\nselect * from courses',
                    ),
                    'State' => 
                    array (
                      'description' => '任务状态。',
                      'type' => 'string',
                      'example' => 'FINISH',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务开始时间，精确到毫秒，格式为<i>yyyy-MM-ddTHH:mm:ss.SSSZ</i>。',
                      'type' => 'string',
                      'example' => '2021-05-18 18:47:27.0',
                    ),
                    'DBName' => 
                    array (
                      'description' => '导入导出任务涉及的数据库名称。',
                      'type' => 'string',
                      'example' => 'adb_demo',
                    ),
                    'ProcessID' => 
                    array (
                      'description' => '进程ID。',
                      'type' => 'string',
                      'example' => '2021051818472717201616624903453******',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '任务状态的更新时间，精确到毫秒，格式为<i>yyyy-MM-ddTHH:mm:ss.SSSZ</i>。',
                      'type' => 'string',
                      'example' => '2021-05-18 18:47:31.0',
                    ),
                    'JobName' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '2021051818472717201616624903453******',
                    ),
                    'ProcessRows' => 
                    array (
                      'description' => '异步导入导出任务所处理的数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '6',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"C60B05DB-2B77-421A-98E9-92C20E******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-bp2590j****\\",\\n  \\"LoadTasksRecords\\": [\\n    {\\n      \\"Sql\\": \\"insert overwrite into courses_external_table\\\\\\\\nselect * from courses\\",\\n      \\"State\\": \\"FINISH\\",\\n      \\"CreateTime\\": \\"2021-05-18 18:47:27.0\\",\\n      \\"DBName\\": \\"adb_demo\\",\\n      \\"ProcessID\\": \\"2021051818472717201616624903453******\\",\\n      \\"UpdateTime\\": \\"2021-05-18 18:47:31.0\\",\\n      \\"JobName\\": \\"2021051818472717201616624903453******\\",\\n      \\"ProcessRows\\": 6\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadTasksRecordsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>C60B05DB-2B77-421A-98E9-92C20E******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-bp2590j****</DBClusterId>\\n    <LoadTasksRecords>\\n        <Sql>insert overwrite into courses_external_table\\\\nselect * from courses</Sql>\\n        <State>FINISH</State>\\n        <CreateTime>2021-05-18 18:47:27.0</CreateTime>\\n        <DBName>adb_demo</DBName>\\n        <ProcessID>2021051818472717201616624903453******</ProcessID>\\n        <UpdateTime>2021-05-18 18:47:31.0</UpdateTime>\\n        <JobName>2021051818472717201616624903453******</JobName>\\n        <ProcessRows>6</ProcessRows>\\n    </LoadTasksRecords>\\n</DescribeLoadTasksRecordsResponse>","errorExample":""}]',
      'title' => '查询加载任务记录',
      'summary' => '查看异步导入导出任务的详情。',
      'description' => '更多关于异步提交导入导出任务的详情，请参见[异步提交导入导出任务](~~160291~~)。',
    ),
    'DescribeConnectionCountRecords' => 
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
            'description' => '参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '562C7F89-FBE6-4A04-AAAA-7EBC25******',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-bp1jj9xqft1po****',
              ),
              'AccessIpRecords' => 
              array (
                'description' => '客户端IP信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccessIp' => 
                    array (
                      'description' => '客户端IP。',
                      'type' => 'string',
                      'example' => '42.120.XX.XX',
                    ),
                    'Count' => 
                    array (
                      'description' => '连接数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'UserRecords' => 
              array (
                'description' => '用户信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'User' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Count' => 
                    array (
                      'description' => '连接数。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"562C7F89-FBE6-4A04-AAAA-7EBC25******\\",\\n  \\"DBClusterId\\": \\"am-bp1jj9xqft1po****\\",\\n  \\"AccessIpRecords\\": [\\n    {\\n      \\"AccessIp\\": \\"42.120.XX.XX\\",\\n      \\"Count\\": 1\\n    }\\n  ],\\n  \\"UserRecords\\": [\\n    {\\n      \\"User\\": \\"test\\",\\n      \\"Count\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeConnectionCountRecordsResponse>\\n    <RequestId>562C7F89-FBE6-4A04-AAAA-7EBC25******</RequestId>\\n    <DBClusterId>am-bp1jj9xqft1po****</DBClusterId>\\n    <AccessIpRecords>\\n        <AccessIp>42.120.XX.XX</AccessIp>\\n        <Count>1</Count>\\n    </AccessIpRecords>\\n    <UserRecords>\\n        <User>test</User>\\n        <Count>1</Count>\\n    </UserRecords>\\n</DescribeConnectionCountRecordsResponse>","errorExample":""}]',
      'title' => '查询连接记录数',
      'summary' => '返回目标AnalyticDB MySQL版集群当前的连接数。',
    ),
    'KillProcess' => 
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
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
        1 => 
        array (
          'name' => 'ProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要被终止任务的唯一标识，调用[DescribeProcessList](~~190092~~)返回。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '202011191048151921681492420315100****',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
      'title' => '终止正在进行的任务',
      'summary' => '调用KillProcess接口终止正在进行的任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-t4nj8619bz2w3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
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
            'description' => 'SQL审计的开启状态。取值说明：
- **on**：开启SQL审计。
- **off**：关闭SQL审计。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"UpdateSucceed\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyAuditLogConfigResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <UpdateSucceed>true</UpdateSucceed>\\n</ModifyAuditLogConfigResponse>","errorExample":""}]',
      'title' => '修改审计日志设置',
      'summary' => '调用ModifyAuditLogConfig接口修改审计日志设置。',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1rqvm70uh2****',
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
            'docRequired' => true,
            'example' => '2021-05-20T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。
> 查询结束时间需晚于查询开始时间，且与查询开始时间间隔小于7天。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-27T16:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'adb_demo',
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
            'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
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
          'name' => 'ProcessID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '进程ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2021052716044317201616624903453******',
          ),
        ),
        7 => 
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
            'example' => '[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'Range',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段的最大值（`Max`）和最小值（`Min`）进行范围过滤，格式为JSON格式，是一个JSON数组，例如`[{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]`。

其中`Field`字段表示需要限制范围的字段，支持如下取值：
* **ScanSize**：扫描的数据量，单位：KB。
* **QueryTime**：执行时长，单位：毫秒（ms）。
* **PeakMemoryUsage**：执行目标SQL语句时的峰值内存，单位：KB。

> `Min`表示查询范围最小值（左值），`Max`表示查询范围最大值（右值），数据类型都为String。
',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]',
          ),
        ),
        9 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询状态。取值说明：
- **Successed**：成功。
- **Failed**：失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'Successed',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '100',
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
                'example' => 'D7559209-7EC3-41E1-8F78-156990******',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-bp1rqvm70uh2****',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SlowLogRecord' => 
                  array (
                    'description' => '慢日志明细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '参数列表。
',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostAddress' => 
                        array (
                          'description' => '连接数据库的客户端地址。',
                          'type' => 'string',
                          'example' => '172.16.**.**',
                        ),
                        'ScanTime' => 
                        array (
                          'description' => '扫描数据总耗时，是多个TableScanNode在多个节点上的累加值，单位：毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'SQLText' => 
                        array (
                          'description' => 'SQL语句详情。',
                          'type' => 'string',
                          'example' => 'INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source',
                        ),
                        'OutputSize' => 
                        array (
                          'description' => '任务的输出数据量。单位：Byte。',
                          'type' => 'string',
                          'example' => '0.009',
                        ),
                        'PeakMemoryUsage' => 
                        array (
                          'description' => '执行目标SQL语句时的峰值内存，单位：KB。',
                          'type' => 'string',
                          'example' => '431.447',
                        ),
                        'State' => 
                        array (
                          'description' => 'SQL语句的执行状态。',
                          'type' => 'string',
                          'example' => 'SUCCESSED',
                        ),
                        'WallTime' => 
                        array (
                          'description' => '查询中的所有算子在各个节点CPU Time的累加值，单位：毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6100',
                        ),
                        'ScanSize' => 
                        array (
                          'description' => '扫描的数据量，单位：KB。',
                          'type' => 'string',
                          'example' => '0.035',
                        ),
                        'ExecutionStartTime' => 
                        array (
                          'description' => '执行开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-05-27T08:04:43Z',
                        ),
                        'QueryTime' => 
                        array (
                          'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2344',
                        ),
                        'ReturnRowCounts' => 
                        array (
                          'description' => '返回行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ScanRows' => 
                        array (
                          'description' => '带数据源的任务的扫描数据行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
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
                          'example' => 'adb_demo',
                        ),
                        'PlanningTime' => 
                        array (
                          'description' => '执行计划生成耗时，单位：毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12',
                        ),
                        'QueueTime' => 
                        array (
                          'description' => '查询执行前的排队时间，单位：毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'UserName' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ProcessID' => 
                        array (
                          'description' => '进程ID。',
                          'type' => 'string',
                          'example' => '2021052716044317201616624903453******',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"100\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"D7559209-7EC3-41E1-8F78-156990******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-bp1rqvm70uh2****\\",\\n  \\"Items\\": {\\n    \\"SlowLogRecord\\": [\\n      {\\n        \\"HostAddress\\": \\"172.16.**.**\\",\\n        \\"ScanTime\\": 10,\\n        \\"SQLText\\": \\"INSERT OVERWRITE INTO hdfs_import_external\\\\\\\\nSELECT *\\\\\\\\nFROM adb_hdfs_import_source\\",\\n        \\"OutputSize\\": \\"0.009\\",\\n        \\"PeakMemoryUsage\\": \\"431.447\\",\\n        \\"State\\": \\"SUCCESSED\\",\\n        \\"WallTime\\": 6100,\\n        \\"ScanSize\\": \\"0.035\\",\\n        \\"ExecutionStartTime\\": \\"2021-05-27T08:04:43Z\\",\\n        \\"QueryTime\\": 2344,\\n        \\"ReturnRowCounts\\": 1,\\n        \\"ScanRows\\": 3,\\n        \\"ParseRowCounts\\": 0,\\n        \\"DBName\\": \\"adb_demo\\",\\n        \\"PlanningTime\\": 12,\\n        \\"QueueTime\\": 0,\\n        \\"UserName\\": \\"test\\",\\n        \\"ProcessID\\": \\"2021052716044317201616624903453******\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogRecordsResponse>\\n    <TotalCount>100</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>D7559209-7EC3-41E1-8F78-156990******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-bp1rqvm70uh2****</DBClusterId>\\n    <Items>\\n        <HostAddress>172.16.**.**</HostAddress>\\n        <ScanTime>10</ScanTime>\\n        <SQLText>INSERT OVERWRITE INTO hdfs_import_external\\\\nSELECT *\\\\nFROM adb_hdfs_import_source</SQLText>\\n        <OutputSize>0.009</OutputSize>\\n        <PeakMemoryUsage>431.447</PeakMemoryUsage>\\n        <State>SUCCESSED</State>\\n        <WallTime>6100</WallTime>\\n        <ScanSize>0.035</ScanSize>\\n        <ExecutionStartTime>2021-05-27T08:04:43Z</ExecutionStartTime>\\n        <QueryTime>2344</QueryTime>\\n        <ReturnRowCounts>1</ReturnRowCounts>\\n        <ScanRows>3</ScanRows>\\n        <ParseRowCounts>0</ParseRowCounts>\\n        <DBName>adb_demo</DBName>\\n        <PlanningTime>12</PlanningTime>\\n        <QueueTime>0</QueueTime>\\n        <UserName>test</UserName>\\n        <ProcessID>2021052716044317201616624903453******</ProcessID>\\n    </Items>\\n</DescribeSlowLogRecordsResponse>","errorExample":""}]',
      'title' => '查询慢日志明细',
      'summary' => '调用DescribeSlowLogRecords接口查看AnalyticDB MySQL版集群的慢日志明细。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAuditLogConfig' => 
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
        'abilityTreeCode' => '10786',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-t4nj8619bz2w3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
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
            'description' => '详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
              ),
              'AuditLogStatus' => 
              array (
                'description' => 'SQL审计的开启状态。取值说明：
- **on**：开启SQL审计。
- **off**：关闭SQL审计。',
                'type' => 'string',
                'example' => 'on',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-t4nj8619bz2w3****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\",\\n  \\"AuditLogStatus\\": \\"on\\",\\n  \\"DBClusterId\\": \\"am-t4nj8619bz2w3****\\",\\n  \\"AccessDeniedDetail\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogConfigResponse>\\n    <RequestId>F0983B43-B2EC-536A-8791-142B5CF1E9B6</RequestId>\\n    <AuditLogStatus>on</AuditLogStatus>\\n    <DBClusterId>am-t4nj8619bz2w3****</DBClusterId>\\n</DescribeAuditLogConfigResponse>","errorExample":""}]',
      'title' => '查询集群审计日志设置',
      'summary' => '查询集群审计日志设置。',
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
      'tags' => 
      array (
        0 => 'Perth',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-t4nj8619bz2w3****',
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
            'example' => '2022-01-23T02:18Z',
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
> - 查询开始时间与查询结束时间的间隔不能超过24小时。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-01-23T22:18Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行SQL的数据库名称。',
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
            'description' => '对查询包含目标关键字的SQL进行查询。',
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
- **INSERT_INTO_SELECT**
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
            'example' => 'test_user',
          ),
        ),
        11 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含Field和Type两个字段。
- Field表示需要排序的字段名，取值说明：
    - HostAddress：连接数据库的客户端地址。
    - Succeed：目标SQL是否执行成功。
    - TotalTime：目标SQL的执行总耗时。
    - DBName：执行目标SQL的数据库名称。
    - SQLType：SQL类型。
    - User：执行目标SQL的用户名。
    - ExecuteTime：目标SQL的执行开始时间。
- Type表示排序类型，取值说明：
    - Desc：降序。
    - Asc：升序。',
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
- **10**
- **30**
- **50**
- **100**
> 本参数不填写时，默认为10。',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '1',
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
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-t4nj8619bz2w3****',
              ),
              'Items' => 
              array (
                'description' => 'SQL审计日志详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
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
                      'example' => 'SELECT * FROM tb_courses',
                    ),
                    'TotalTime' => 
                    array (
                      'description' => '目标SQL的执行时长，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '216',
                    ),
                    'ConnId' => 
                    array (
                      'description' => '此参数无效。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'DBName' => 
                    array (
                      'description' => '执行目标SQL的数据库名称。',
                      'type' => 'string',
                      'example' => 'adb_test',
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
                      'example' => '2022-01-23 16:05:08',
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
                      'example' => 'test_user',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"RequestId\\": \\"8A564B7F-8C00-43C0-8EC5-919FBB70573\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-t4nj8619bz2w3****\\",\\n  \\"Items\\": [\\n    {\\n      \\"HostAddress\\": \\"100.104.XX.XX:43908\\",\\n      \\"Succeed\\": \\"true\\",\\n      \\"SQLText\\": \\"SELECT * FROM tb_courses\\",\\n      \\"TotalTime\\": \\"216\\",\\n      \\"ConnId\\": \\"无\\",\\n      \\"DBName\\": \\"adb_test\\",\\n      \\"SQLType\\": \\"SELECT\\",\\n      \\"ExecuteTime\\": \\"2022-01-23 16:05:08\\",\\n      \\"ProcessID\\": \\"202106081752021720161662490345362390\\",\\n      \\"User\\": \\"test_user\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogRecordsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>8A564B7F-8C00-43C0-8EC5-919FBB70573</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-t4nj8619bz2w3****</DBClusterId>\\n    <Items>\\n        <HostAddress>100.104.XX.XX:43908</HostAddress>\\n        <Succeed>true</Succeed>\\n        <SQLText>SELECT * FROM tb_courses</SQLText>\\n        <TotalTime>216</TotalTime>\\n        <ConnId>无</ConnId>\\n        <DBName>adb_test</DBName>\\n        <SQLType>SELECT</SQLType>\\n        <ExecuteTime>2022-01-23 16:05:08</ExecuteTime>\\n        <ProcessID>202106081752021720161662490345362390</ProcessID>\\n        <User>test_user</User>\\n    </Items>\\n</DescribeAuditLogRecordsResponse>","errorExample":""}]',
      'title' => '查询集群的SQL审计日志',
      'summary' => '调用DescribeAuditLogRecords接口查询AnalyticDB MySQL版集群的SQL审计日志。',
      'description' => '调用本接口查看AnalyticDB MySQL集群的SQL审计日志前，需要开启SQL审计。您可以调用[DescribeAuditLogConfig](~~190628~~)接口查询SQL审计的开启状态，如未开启，可调用[ModifyAuditLogConfig](~~190629~~)接口开启SQL审计。

仅当SQL审计状态为开启时，才能查询到SQL审计日志，且只支持查询30天内的SQL审计日志。如果中途关闭了SQL审计，再次打开时，仅能查询到再次打开后的SQL审计日志。SQL审计日志不记录**INSERT INTO VALUES**、**REPLACE INTO VALUES**和**UPSERT INTO VALUES**操作。',
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
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域名称和可用区名称（即返回数据中`LocalName`）返回值所使用的语言，取值说明：
* **zh-CN**：中文。
* **en-US**：英文。
* **ja**：日文。

> 若该参数不填写，默认使用中文。',
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
            'description' => '详情。',
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
                      'description' => '详情。',
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
                                'description' => '详情。',
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
* **true**：支持。
* **false**：不支持。',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"adb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"China (Hangzhou)\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"VpcEnabled\\": true,\\n              \\"LocalName\\": \\"Hangzhou Zone H\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>421794A3-72A5-5D27-9E8B-A75A4C503E17</RequestId>\\n    <Regions>\\n        <RegionEndpoint>adb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>China (Hangzhou)</LocalName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n            <LocalName>Hangzhou Zone H</LocalName>\\n        </Zones>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询用户可选的地域和可用区',
      'summary' => '调用DescribeRegions接口查询ADB可选的地域和可用区。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp18934i73vb****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定义公网连接地址的前缀。
- 以小写字母开头，可包含小写字母、数字和中划线（-）。
- 长度不超过30个字符。',
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
            'description' => '当前AnalyticDB MySQL数仓版（3.0）集群的公网连接地址。
> 您可以调用[DescribeDBClusterNetInfo](~~143384~~)接口查看集群的公网连接地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp18934i73vb****.ads.aliyuncs.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号，固定为**3306**。',
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
      'title' => '修改集群的网络连接地址',
      'summary' => '调用ModifyClusterConnectionString接口修改实例的网络连接地址。',
    ),
    'DescribeDBClusterNetInfo' => 
    array (
      'summary' => '调用DescribeDBClusterNetInfo接口查询集群的网络信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '10799',
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
            'description' => '集群ID。',
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
            'description' => '集群所在的地域ID。',
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
              'ClusterNetworkType' => 
              array (
                'description' => '集群网络类型。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Address' => 
                  array (
                    'description' => '集群列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。
> 当NetType取值为Public时，交换机ID返回为空。',
                          'type' => 'string',
                          'example' => 'vsw-xxxxxx',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '集群连接地址。',
                          'type' => 'string',
                          'example' => 'am-bpxxxxxxxx.ads.aliyuncs.com',
                        ),
                        'NetType' => 
                        array (
                          'description' => '网络类型。取值说明：

- **Public**：公网；
- **VPC**：VPC。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Port' => 
                        array (
                          'description' => '集群连接端口。',
                          'type' => 'string',
                          'example' => '3306',
                        ),
                        'VPCId' => 
                        array (
                          'description' => 'VPC ID。
> 当NetType取值为Public时，VPC ID返回为空。',
                          'type' => 'string',
                          'example' => 'vpc-xxxxxxxxx',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '192.168.x.x',
                        ),
                        'ConnectionStringPrefix' => 
                        array (
                          'description' => '集群连接地址前缀。',
                          'type' => 'string',
                          'example' => 'am-bpxxxxxxxx89k51380',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterNetworkType\\": \\"VPC\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Address\\": [\\n      {\\n        \\"VSwitchId\\": \\"vsw-xxxxxx\\",\\n        \\"ConnectionString\\": \\"am-bpxxxxxxxx.ads.aliyuncs.com\\",\\n        \\"NetType\\": \\"VPC\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"VPCId\\": \\"vpc-xxxxxxxxx\\",\\n        \\"IPAddress\\": \\"192.168.x.x\\",\\n        \\"ConnectionStringPrefix\\": \\"am-bpxxxxxxxx89k51380\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterNetInfoResponse>\\n    <ClusterNetworkType>VPC</ClusterNetworkType>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Items>\\n        <VSwitchId>vsw-xxxxxx</VSwitchId>\\n        <ConnectionString>am-bpxxxxxxxx.ads.aliyuncs.com</ConnectionString>\\n        <NetType>VPC</NetType>\\n        <Port>3306</Port>\\n        <VPCId>vpc-xxxxxxxxx</VPCId>\\n        <IPAddress>192.168.x.x</IPAddress>\\n        <ConnectionStringPrefix>am-bpxxxxxxxx89k51380</ConnectionStringPrefix>\\n    </Items>\\n</DescribeDBClusterNetInfoResponse>","errorExample":""}]',
      'title' => '查询集群的网络信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocateClusterPublicConnection' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp278jg9****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网连接地址的前缀。
- 由小写字母开头，必须包含小写字母、数字和中划线（-）组成。
- 长度不超过30个字符。
- 默认使用集群名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'am-bp278jg9****.ads.aliyuncs.com',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateClusterPublicConnectionResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</AllocateClusterPublicConnectionResponse>","errorExample":""}]',
      'title' => '为集群申请公网连接地址',
      'summary' => '调用AllocateClusterPublicConnection接口为ADB实例申请公网连接地址。',
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
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
      'title' => '释放集群的公网连接地址',
      'summary' => '调用ReleaseClusterPublicConnection接口释放集群的公网连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccount' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
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
- 不能使用预留的账号名称，如root、admin和opsadmin。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名的密码，需符合如下要求：
- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。
- 特殊符号包含：`!@#$%^&*()_+-=`
- 密码长度为8~32个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'example' => '数据库测试账号',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号类型，取值说明：
- **Normal**：普通账号。一个集群最多可以创建256个普通账号。
- **Super**（默认值）：高权限账号。一个集群只能创建一个高权限账号。
> - 当集群无账号，调用接口创建账号时，既可以创建高权限账号，也可以创建普通账号。如果集群已有高权限账号，调用接口创建账号时，必须选择Normal才能创建成功。
> - 账号创建完成后，高权限账号拥有该集群中所有数据库的权限。普通账号默认没有权限，需要通过高权限账号手动为普通账号授予指定数据库的权限。详情请参见[为用户授权](~~123662~~)。',
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
            'description' => '列表。',
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
                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-bp1r053byu48p****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\",\\n  \\"DBClusterId\\": \\"am-bp1r053byu48p****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <TaskId>1564657730</TaskId>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n    <DBClusterId>am-bp1r053byu48p****</DBClusterId>\\n</CreateAccountResponse>","errorExample":""}]',
      'title' => '创建账户',
      'summary' => '调用CreateAccount接口创建账号。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-uf6wjk5xxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- Normal：普通账号。
- Super：高权限账号。',
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
            'description' => '列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>","errorExample":""}]',
      'title' => '删除数据库账号',
      'summary' => '调用DeleteAccount接口删除数据库账号。',
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
            'example' => 'am-bp1xxxxxxxx47',
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
            'docRequired' => true,
            'example' => 'testacc',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改账号备注：

- 以中文、英文字母开头。
- 可以包含中文、英文字符、数字、”_”、” -”。
- 不能以`http://`、`https:// `开头。
- 长度为2-256个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AccDesc',
          ),
        ),
      ),
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
      'title' => '修改数据库账号的备注信息',
      'summary' => '调用ModifyAccountDescription接口修改数据库账号的备注信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAllAccounts' => 
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
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
      ),
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
              'AccountList' => 
              array (
                'description' => '账号列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'User' => 
                    array (
                      'description' => '账号名。',
                      'type' => 'string',
                      'example' => 'rdsdt_dts_adb',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"AccountList\\": [\\n    {\\n      \\"User\\": \\"rdsdt_dts_adb\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<AccountList>\\n    <User>rdsdt_dts_adb</User>\\n</AccountList>","errorExample":""}]',
      'title' => '查询账号信息',
      'summary' => '查询指定集群、指定数据库的账号列表信息或某个指定账号的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号类型，不填写时默认查询所有类型的账号信息。取值说明：
- **Normal**：普通账号。
- **Super**：高权限账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'Super',
          ),
        ),
      ),
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
                'example' => '9CCFAAB4-97B7-5800-B9F2-685EB596E3EF',
              ),
              'AccountList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBAccount' => 
                  array (
                    'description' => '账号列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
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
                          'example' => 'C@test',
                        ),
                        'AccountType' => 
                        array (
                          'description' => '账号类型，取值说明：
- **Normal**：普通账号。
- **Super**：高权限账号。',
                          'type' => 'string',
                          'example' => 'Super',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '数据库账号名称。',
                          'type' => 'string',
                          'example' => 'adb_user1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9CCFAAB4-97B7-5800-B9F2-685EB596E3EF\\",\\n  \\"AccountList\\": {\\n    \\"DBAccount\\": [\\n      {\\n        \\"AccountStatus\\": \\"Available\\",\\n        \\"AccountDescription\\": \\"C@test\\",\\n        \\"AccountType\\": \\"Super\\",\\n        \\"AccountName\\": \\"adb_user1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询数据库账号信息',
      'summary' => '调用DescribeAccounts接口查询集群的账号信息。',
    ),
    'DescribeOperatorPermission' => 
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
            'example' => 'am-uf6wjk5xxxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CreatedTime' => 
              array (
                'description' => '授权生效时间。',
                'type' => 'string',
                'example' => '2019-05-20T05:41:19Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'Privileges' => 
              array (
                'description' => '已获得的授权类型：Control|Data。',
                'type' => 'string',
                'example' => 'Control,Data',
              ),
              'ExpiredTime' => 
              array (
                'description' => '授权过期时间。',
                'type' => 'string',
                'example' => '2019-05-20T07:41:19Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'am-uf6wjk5xxxxxxxxxx',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CreatedTime\\": \\"2019-05-20T05:41:19Z\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Privileges\\": \\"Control,Data\\",\\n  \\"ExpiredTime\\": \\"2019-05-20T07:41:19Z\\",\\n  \\"DBClusterId\\": \\"am-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatedTime>2019-05-20T05:41:19Z</CreatedTime>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Privileges>Control,Data</Privileges>\\n<ExpiredTime>2019-05-20T07:41:19Z</ExpiredTime>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
      'title' => '查询集群服务账号的授权详情',
      'summary' => '调用DescribeOperatorPermission接口查询集群服务账号的授权详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GrantOperatorPermission' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1565u55p32****',
          ),
        ),
        1 => 
        array (
          'name' => 'ExpiredTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务账号权限过期时间。UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-11-30T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'Privileges',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限名称。取值说明：
- **Control**：配置权限，查看和修改集群配置。
- **Data**：数据权限，查看表结构、索引和SQL。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Control',
          ),
        ),
      ),
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
                'example' => 'A438072A-E2E7-5509-9A3F-66293512A820',
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
            'errorCode' => 'RelatedTaskNotFinish',
            'errorMessage' => 'The related task does not finish.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A438072A-E2E7-5509-9A3F-66293512A820\\"\\n}","errorExample":""},{"type":"xml","example":"<GrantOperatorPermissionResponse>\\n    <RequestId>A438072A-E2E7-5509-9A3F-66293512A820</RequestId>\\n</GrantOperatorPermissionResponse>","errorExample":""}]',
      'title' => '为集群服务账号授权',
      'summary' => '调用GrantOperatorPermission接口为集群服务账号授权。',
      'description' => '### 使用说明
您在使用云原生数据仓库AnalyticDB MySQL版集群过程中需要阿里云技术支持时，如果技术支持过程中需要对您的集群进行操作，您需要授权AnalyticDB MySQL集群的服务账号，技术支持人员才可以通过服务账号提供技术支持服务。在授权有效期结束后，服务账号的权限会被自动回收。',
    ),
    'ResetAccountPassword' => 
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-uf6wjk5xxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_accout',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号名密码。

- 密码由大写字母、小写字母、数字以及特殊符号组成。
- 特殊符号包含：（!）、（@）、（#）、（$）、（%）、（^）、（&）、（*）（()）、（_）、（+）、（-）、（=）
- 密码长度为8字符~32个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Test_accout1',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1. Normal：普通账号；
2. Super：高权限账号。',
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
            'description' => '列表。',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'DBClusterId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'rm-uf6wjk5xxxxxxxxxx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>1564657730</TaskId>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
      'title' => '重置账号密码',
      'summary' => '调用ResetAccountPassword接口重置数据库账号的密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RevokeOperatorPermission' => 
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
            'example' => 'am-uf6wjk5xxxxxxxxxx',
          ),
        ),
      ),
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
            'errorCode' => 'RelatedTaskNotFinish',
            'errorMessage' => 'The related task does not finish.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
      'title' => '撤销集群服务账号权限',
      'summary' => '调用RevokeOperatorPermission接口撤销集群服务账号权限。',
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
            'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
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
            'description' => '资源类型定义。唯一取值：**cluster**。',
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
            'description' => '用来返回更多结果。第一次查询不需要提供这个参数，如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的Token继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '212db86sca4384811e0b5e8707ec21345',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '集群ID。支持同时传入多个集群ID，N的取值范围为：1~50。
> ResourceId.N参数和Tag.N.Key参数至少传入一个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '集群ID。支持同时传入多个集群ID，N的取值范围为：1~50。
> ResourceId.N参数和Tag.N.Key参数至少传入一个。',
              'type' => 'string',
              'required' => false,
              'example' => 'am-bp1l20nxxxxxxxxxx',
            ),
            'required' => false,
            'example' => 'am-bp1l20nxxxxxxxxxx',
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
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。支持同时传入多个标签键，不允许传入空字符串。N的取值范围为：1~20。

> ResourceId.N参数和Tag.N.Key参数至少传入一个。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey1',
                ),
                'Value' => 
                array (
                  'description' => '标签键对应的标签值。支持同时传入多个标签值，允许传入空字符串。N的取值范围为：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue1',
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
            'description' => '列表。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '用来返回更多结果。如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的token继续查询。',
                'type' => 'string',
                'example' => '212db86sca4384811e0b5e8707ec21345',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '184DE106-CB2C-4DD2-B57F-396652E6C8F8',
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
                      'description' => '列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型，cluster即云原生数据仓库AnalyticDB MySQL集群。',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签键对应的标签值。',
                          'type' => 'string',
                          'example' => 'testvalue1',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp1l20nxxxxxxxxxx',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'testkey1',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86sca4384811e0b5e8707ec21345\\",\\n  \\"RequestId\\": \\"184DE106-CB2C-4DD2-B57F-396652E6C8F8\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"cluster\\",\\n        \\"TagValue\\": \\"testvalue1\\",\\n        \\"ResourceId\\": \\"am-bp1l20nxxxxxxxxxx\\",\\n        \\"TagKey\\": \\"testkey1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>212db86sca4384811e0b5e8707ec21345</NextToken>\\n    <RequestId>184DE106-CB2C-4DD2-B57F-396652E6C8F8</RequestId>\\n    <TagResources>\\n        <ResourceType>cluster</ResourceType>\\n        <TagValue>testvalue1</TagValue>\\n        <ResourceId>am-bp1l20nxxxxxxxxxx</ResourceId>\\n        <TagKey>testkey1</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询标签列表',
      'summary' => '调用ListTagResources查询一个或多个AnalyticDB MySQL集群已绑定的标签列表，或者查询一个或多个标签绑定的AnalyticDB MySQL集群列表。',
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
            'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
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
            'description' => '集群类型，取值：**ALIYUN::ADB::CLUSTER**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::ADB::CLUSTER',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '绑定标签的集群ID。若需要为多个集群同时添加标签，请单击**添加**并输入集群ID。

> - 一次最多为50个集群同时绑定标签。
> - 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '绑定标签的集群ID。若需要为多个集群同时添加标签，请单击**添加**并输入集群ID。

> - 一次最多为50个集群同时绑定标签。
> - 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'am-bp1gfds6a32s9****',
            ),
            'required' => true,
            'example' => 'am-bp1xxx.1',
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
            'description' => '标签列表信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。若您需要为目标集群一次性添加多个标签，请单击**添加**并输入标签键和对应的标签值。
> 每次最多添加20对标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey1',
                ),
                'Value' => 
                array (
                  'description' => '标签键对应的标签值。若您需要为目标集群一次性添加多个标签，请单击**添加**并输入标签键和对应的标签值。
> 每次最多添加20对标签。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue1',
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
            'description' => '列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '863D51B7-5321-41D8-A0B6-A088B0450EFD',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0450EFD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>863D51B7-5321-41D8-A0B6-A088B0450EFD</RequestId>","errorExample":""}]',
      'title' => '为集群绑定标签',
      'summary' => '为AnalyticDB MySQL集群绑定标签。',
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
            'description' => '资源类型，取值固定为**ALIYUN::ADB::CLUSTER**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::ADB::CLUSTER',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑实例上的所有标签，默认值为false，取值：

- **true**：解绑实例上的所有标签。
- **false**：不解绑实例上的所有标签。

> 如果同时传入TagKey和本参数，本参数不生效。',
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
            'description' => '集群ID，N的取值范围：1~50。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '集群ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'am-t4n6k19t9p9f3d0j0',
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
            'description' => '资源的标签键，N的取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'productvalue',
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
                'example' => '2D69A58F-345C-4FDE-88E4-BF5189484043',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189484043\\"\\n}","type":"json"}]',
      'title' => '为指定的实例列表统一解绑标签',
      'summary' => '解绑后，如果该标签没有绑定其他任何实例。',
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
            'description' => '集群ID。',
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
            'example' => '00:00Z-01:00Z',
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
            'example' => '30',
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
            'description' => '列表。',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBCluster.NotFound',
            'errorMessage' => 'The DBClusterId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":""}]',
      'title' => '修改备份策略设置',
      'summary' => '调用ModifyBackupPolicy接口修改AnalyticDB MySQL版实例的备份策略。',
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
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm4f7oger****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        2 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志备份。取值说明：
- **Enable**：开启。
- **Disable**：关闭。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Enable',
          ),
        ),
        3 => 
        array (
          'name' => 'LogBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份保留天数，取值范围：7~730。
> 此参数不填写，默认为7天。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyLogBackupPolicyResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyLogBackupPolicyResponse>","errorExample":""}]',
      'title' => '修改日志备份策略设置',
      'summary' => '调用ModifyLogBackupPolicy接口修改日志备份设置。',
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
            'description' => '集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
      ),
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
                'example' => 'Tuesday,Friday',
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
                'description' => '是否开启。

- true：开启。
- false：关闭。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Tuesday,Friday\\",\\n  \\"LogBackupRetentionPeriod\\": 7,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PreferredBackupTime\\": \\"15:00Z-16:00Z\\",\\n  \\"EnableBackupLog\\": \\"true\\",\\n  \\"BackupRetentionPeriod\\": 7\\n}","errorExample":""},{"type":"xml","example":"<PreferredBackupPeriod>Tuesday,Friday</PreferredBackupPeriod>\\n<LogBackupRetentionPeriod>7</LogBackupRetentionPeriod>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PreferredBackupTime>15:00Z-16:00Z</PreferredBackupTime>\\n<EnableBackupLog>true</EnableBackupLog>\\n<BackupRetentionPeriod>7</BackupRetentionPeriod>","errorExample":""}]',
      'title' => '查询集群自动备份策略',
      'summary' => '调用DescribeBackupPolicy接口查看集群备份设置。',
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
        'abilityTreeCode' => '10791',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsM6VDCK',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域下AnalyticDB MySQL数仓版（3.0）集群ID。',
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
            'example' => '32732****',
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
            'required' => false,
            'docRequired' => true,
            'example' => '2022-06-01T16:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，需要大于查询开始时间，格式：yyyy-MM-ddTHH:mmZ。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2022-06-02T16:00Z',
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
- **100**
',
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
        6 => 
        array (
          'name' => 'CrossUid',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'CrossRole',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
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
            'description' => '备份集列表。',
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
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
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
                      'description' => '备份集详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterId' => 
                        array (
                          'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                          'type' => 'string',
                          'example' => 'am-bp18934i73vb5****',
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
                          'format' => 'int64',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'CrossUser.CheckFailed',
            'errorMessage' => 'The input UID and role is not authorized.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"300\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp18934i73vb5****\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2022-06-01T16:00Z\\",\\n        \\"BackupSize\\": 2167808,\\n        \\"BackupEndTime\\": \\"2022-06-02T16:00Z\\",\\n        \\"BackupId\\": \\"32732****\\",\\n        \\"BackupMethod\\": \\"Snapshot\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalCount>300</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DBClusterId>am-bp18934i73vb5****</DBClusterId>\\n        <BackupType>FullBackup</BackupType>\\n        <BackupStartTime>2022-06-01T16:00Z</BackupStartTime>\\n        <BackupSize>2167808</BackupSize>\\n        <BackupEndTime>2022-06-02T16:00Z</BackupEndTime>\\n        <BackupId>32732****</BackupId>\\n        <BackupMethod>Snapshot</BackupMethod>\\n    </Items>\\n</DescribeBackupsResponse>","errorExample":""}]',
      'title' => '查询备份集列表',
      'summary' => '调用DescribeBackups接口查看集群的备份列表。',
    ),
    'ModifyDBClusterAccessWhiteList' => 
    array (
      'summary' => '创建或修改集群的白名单（包括IP白名单和安全组）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => 'rm-uf6wjk5xxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群的IP白名单，多个IP地址之间以英文逗号（,）隔开，不可重复，最多500个。支持如下两种格式：

- IP地址形式，例如：10.23.12.24。
- CIDR形式，例如：10.23.12.24/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。

> ModifyMode值为Delete时，此参数值可以是空，其他情况下必须有非空值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10.23.12.24',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterIPArrayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的IP白名单分组名称，默认操作**Default**分组。
IP白名单分组名称以小写字母开头、以数字或小写字母结尾，可包含小写字母、数字及’_’，长度为2~32。

单个集群最多支持50个白名单分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'DBClusterIPArrayAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组属性，默认为空。
控制台不显示带有**hidden**属性的分组，带有该标签的分组通常是用于访问DTS、DRDS服务的。',
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
            'description' => '修改白名单的方式。取值：

- Cover：覆盖原IP白名单。
- Append：增加IP。
- Delete：删除IP。

默认值：Cover。',
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
                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'rm-uf6wjk5xxxxxxxxxx',
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
            'errorCode' => 'InvalidSecurityIPList.Malformed',
            'errorMessage' => 'The specified SecurityIPList is incorrectly formatted.',
          ),
          2 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>1564657730</TaskId>\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
      'title' => '创建或修改集群的白名单',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterAccessWhiteList' => 
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
            'example' => 'am-uf6wjk5xxxxxxxxxx',
          ),
        ),
      ),
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
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IPArray' => 
                  array (
                    'description' => 'IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBClusterIPArrayAttribute' => 
                        array (
                          'description' => '白名单分组属性，默认为空。

> 控制台不显示带有**hidden**属性的分组，带有该标签的分组通常是用于访问DTS、DRDS服务的。',
                          'type' => 'string',
                          'example' => 'hidden',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => 'IP白名单分组下的IP列表，最多1000个，以英文逗号（,）隔开。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'DBClusterIPArrayName' => 
                        array (
                          'description' => 'IP白名单分组名称。
- IP白名单分组名称以小写字母开头、以数字或小写字母结尾，可包含小写字母、数字及’_’，长度为2~32。
- 单个集群最多支持50个白名单分组。',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"IPArray\\": [\\n      {\\n        \\"DBClusterIPArrayAttribute\\": \\"hidden\\",\\n        \\"SecurityIPList\\": \\"127.0.0.1\\",\\n        \\"DBClusterIPArrayName\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <IPArray>\\n        <DBClusterIPArrayName>test</DBClusterIPArrayName>\\n        <SecurityIPList>127.0.0.1</SecurityIPList>\\n        <DBClusterIPArrayAttribute>hidden</DBClusterIPArrayAttribute>\\n    </IPArray>\\n</Items>","errorExample":""}]',
      'title' => '查询集群的IP白名单',
      'summary' => '调用DescribeDBClusterAccessWhiteList接口查看集群的IP白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1d8lbdj22rx****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
>您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
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
            'description' => '集群健康状态列表。',
            'type' => 'object',
            'properties' => 
            array (
              'CS' => 
              array (
                'description' => '实例接入节点状态列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveCount' => 
                  array (
                    'description' => '健康节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用节点个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
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
                    'example' => '2',
                  ),
                  'Status' => 
                  array (
                    'description' => '实例接入节点状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'NORMAL',
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
                    'description' => '健康计算节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用计算节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'RiskCount' => 
                  array (
                    'description' => '风险计算节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExpectedCount' => 
                  array (
                    'description' => '计算节点组总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'Status' => 
                  array (
                    'description' => '计算节点组健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                ),
              ),
              'Worker' => 
              array (
                'description' => '存储节点组健康状态列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'ActiveCount' => 
                  array (
                    'description' => '健康存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'UnavailableCount' => 
                  array (
                    'description' => '不可用存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'RiskCount' => 
                  array (
                    'description' => '风险存储节点组个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExpectedCount' => 
                  array (
                    'description' => '存储节点组总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'Status' => 
                  array (
                    'description' => '存储节点组健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                ),
              ),
              'InstanceStatus' => 
              array (
                'description' => '集群的健康状态，取值说明：
- **RISK**：风险。
- **NORMAL**：健康。
- **UNAVAILABLE**：不可用。
>当集群的实例接入节点状态、计算节点组健康状态和存储节点组健康状态，三个健康状态均为**健康**且实例探活成功，则集群的健康状态为**健康**；当三个健康状态中包含**风险**时，则集群的健康状态为**风险**；当三个健康状态中包含**不可用**时，则集群的健康状态为**不可用**。',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEA',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CS\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"Executor\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"Worker\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"InstanceStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEA\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterHealthStatusResponse>\\n    <CS>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </CS>\\n    <Executor>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </Executor>\\n    <Worker>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </Worker>\\n    <InstanceStatus>NORMAL</InstanceStatus>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEA</RequestId>\\n</DescribeDBClusterHealthStatusResponse>","errorExample":""}]',
      'title' => '查询集群健康检查状态',
      'summary' => '调用DescribeDBClusterHealthStatus接口查看AnalyticDB MySQL数仓版（3.0）集群的健康状态。',
    ),
    'DescribeDBClusterPerformance' => 
    array (
      'summary' => '调用DescribeDBClusterPerformance接口查看目标集群的性能数据。',
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
            'description' => 'AnalyticDB MySQL版集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL版集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-8vbf80pjcz*****',
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
    * **AnalyticDB_CPU**：CPU平均使用率。
* 连接数
    * **AnalyticDB_Connections**：数据库连接数。
* 写入
    * **AnalyticDB_TPS**：写入TPS。
    * **AnalyticDB_InsertRT**：写入响应时间。
    * **AnalyticDB_InsertBytes**：写入吞吐量。
* 更新
    * **AnalyticDB_UpdateRT**：更新响应时间。
* 删除
    * **AnalyticDB_DeleteRT**：删除响应时间。
* 查询
    * **AnalyticDB_QPS**：查询QPS。
    * **AnalyticDB_QueryRT**：查询响应时间。
    * **AnalyticDB_QueryWaitTime**：查询等待耗时。
* 磁盘
    * **AnalyticDB_IO**：磁盘IO吞吐。
    * **AnalyticDB_IO_UTIL**：磁盘IO使用率。
    * **AnalyticDB_IO_WAIT**：磁盘IO等待时间。    
    * **AnalyticDB_IOPS**：磁盘IOPS。
    * **AnalyticDB_DiskUsage**：磁盘用量。
    * **AnalyticDB_HotDataDiskUsage**：热数据磁盘用量。
    * **AnalyticDB_ColdDataDiskUsage**：冷数据磁盘用量。
* 其他
  * **AnalyticDB_BuildTaskCount**：Build任务数。
  * **AnalyticDB_ComputeMemoryUsedRatio**: 计算内存使用率。


> 若该参数留空，默认返回上述所有性能指标的值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'AnalyticDB_CPU',
            'default' => 'AnalyticDB_CPU_Usage_Percentage',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mmZ</i>（UTC时间）。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2021-05-03T15:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式为<i>yyyy-MM-ddTHH:mmZ</i>（UTC时间）。

> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过两天。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2021-05-03T15:01Z',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群所在的地域。',
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
            'description' => '资源组名称。',
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
            'description' => '列表详情。',
            'type' => 'object',
            'properties' => 
            array (
              'EndTime' => 
              array (
                'description' => '查询结束时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-05-03T15:01:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25B56BC7-4978-40B3-9E48-4B7067******',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-05-03T15:00:00Z',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-8vbf80pjcz*****',
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
                      'example' => 'AnalyticDB_CPU',
                    ),
                    'Unit' => 
                    array (
                      'description' => '数据单位。',
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
                            'description' => '性能指标数值详情。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '不同时间点下的性能值详情。',
                              'type' => 'string',
                              'example' => '[               "2021-05-03T15:00:12.72Z",               "0.1250"             ],             [               "2021-05-03T15:00:42.739Z",               "0.3125"             ]',
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '*   CPU
    
    *   **AnalyticDB\\_CPU**：CPU平均使用率。
        
        *   worker\\_avg\\_cpu\\_used：存储节点平均CPU使用率。
            
        *   worker\\_max\\_cpu\\_used：存储节点最大CPU使用率。
            
        *   executor\\_avg\\_cpu\\_used：计算节点平局CPU使用率。
            
        *   executor\\_max\\_cpu\\_used：计算节点最大CPU使用率。
            
*   连接数
    
    *   **AnalyticDB\\_Connections**：数据库连接数。
        
        *   connections：集群当前连接数。
            
*   写入
    
    *   **AnalyticDB\\_TPS**：写入TPS。
        
        *   tps：insert\\_tps、update\\_tps、 delete\\_tps和load\\_tps的累加值。
            
        *   insert\\_tps：INSERT INTO VALUES操作每秒成功数。
            
        *   update\\_tps：UPDATE操作每秒成功数。
            
        *   delete\\_tps：DELETE操作每秒成功数。
            
        *   load\\_tps：LOAD操作(INSERT OVERWRITE)每秒成功数。
            
    *   **AnalyticDB\\_InsertRT**：写入响应时间。
        
        *   insert\\_avg\\_rt：写入操作平均耗时。
            
        *   insert\\_max\\_rt：写入操作最大耗时。
            
    *   **AnalyticDB\\_InsertBytes**：写入吞吐量。
        
        *   insert\\_in\\_bytes：写入数据量。
            
*   更新
    
    *   **AnalyticDB\\_UpdateRT**：更新响应时间。
        
        *   updateinto\\_avg\\_rt：UPDATE操作平均耗时。
            
        *   updateinto\\_max\\_rt：UPDATE操作最大耗时。
            
*   删除
    
    *   **AnalyticDB\\_DeleteRT**：删除响应时间。
        
        *   delete\\_avg\\_rt：delete操作平均耗时。
            
        *   delete\\_max\\_rt：delete操作平均耗时。
            
*   查询
    
    *   **AnalyticDB\\_QPS**：QPS。
        
        *   qps：SELECT操作每秒完成数。
            
        *   etl\\_qps：ETL操作(INSERT OVERWRITE)每秒完成数。
            
    *   **AnalyticDB\\_QueryRT**：查询响应时间。
        
        *   query\\_avg\\_rt：查询平均耗时。
            
        *   query\\_max\\_rt：查询最大耗时。
            
        *   etl\\_avg\\_rt：ETL操作平均耗时。
            
        *   etl\\_max\\_rt：ETL操作最大耗时。
            
    *   **AnalyticDB\\_QueryWaitTime**：查询等待耗时。
        
        *   query\\_avg\\_wait\\_time：查询(包括SELECT和ETL)平均等待时间。
            
        *   query\\_max\\_wait\\_time：查询(包括SELECT和ETL)最大等待时间。
            
    *   AnalyticDB\\_QueryFailedRatio：查询失败率。
        
        *   query\\_failed\\_ratio：查询(包括SELECT和ETL)失败率。
            
*   磁盘
    
    *   **AnalyticDB\\_IO**：磁盘IO吞吐。
        
        *   worker\\_avg\\_read\\_bytes\\_ratio：存储节点平均读操作吞吐。
            
        *   worker\\_avg\\_write\\_bytes\\_ratio：存储节点平均写操作吞吐。
            
    *   **AnalyticDB\\_IO\\_UTIL**：磁盘IO使用率。
        
        *   worker\\_avg\\_io\\_util：存储节点IO使用率。
            
    *   **AnalyticDB\\_IO\\_WAIT**：IO等待时间。
        
        *   worker\\_avg\\_io\\_await：存储节点平均IO等待时间。
            
    *   **AnalyticDB\\_IOPS**：磁盘IOPS。
        
        *   worker\\_avg\\_read\\_ratio：存储节点平均读IOPS。
            
        *   worker\\_avg\\_write\\_ratio：存储节点平均写IOPS。
            
    *   **AnalyticDB\\_DiskUsage**：磁盘用量。
        
        *   disk\\_used\\_ratio：磁盘空间使用率。
            
        *   worker\\_max\\_node\\_disk\\_used\\_ratio：磁盘空间使用率最大节点的使用率。
            
    *   **AnalyticDB\\_HotDataDiskUsage**：热数据磁盘用量。
        
        *   local\\_disk\\_used：热数据磁盘使用量。
            
    *   **AnalyticDB\\_ColdDataDiskUsage**：冷数据磁盘用量。
        
        *   remote\\_disk\\_used：冷数据磁盘使用量。
            
    *   AnalyticDB\\_DiskUsedRatio：空间分析-节点磁盘使用率。
        
        *   disk\\_used\\_ratio：平均节点磁盘使用率。
            
        *   worker\\_max\\_node\\_disk\\_used\\_ratio：最大节点磁盘使用率。
            
    *   AnalyticDB\\_DiskUsedSize：集群总数据量。
        
        *   disk\\_no\\_log\\_used：（数仓版预留模式集群）总数据量。
            
        *   disk\\_no\\_log\\_used\\_max：（数仓版预留模式集群）最大节点数据量。
            
        *   disk\\_no\\_log\\_used\\_avg：（数仓版预留模式集群）平均节点数据量。
            
        *   user\\_used\\_disk\\_max：（数仓版弹性模式集群）最大节点热数据量。
            
        *   user\\_used\\_disk\\_avg：（数仓版弹性模式集群）最大节点热数据量。
            
        *   hot\\_disk\\_used：（数仓版弹性模式集群）热数据量。
            
        *   cold\\_disk\\_used：（数仓版弹性模式集群）冷数据量。
            
*   其他
    
    *   **AnalyticDB\\_BuildTaskCount**：Build任务数
        
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
    
    *   AnalyticDB\\_APS\\_BPS：数仓版aps bps。
        
        *   APS\\_Read\\_BPS：APS读BPS。
            
    *   AnalyticDB\\_APS\\_CPU：数仓版APS CPU利用率。
        
        *   APS\\_CPU\\_Avg\\_Usage\\_Percentage：APS平均CPU使用率。
            
        *   APS\\_CPU\\_Max\\_Usage\\_Percentage：APS最大CPU使用率。
            
    *   AnalyticDB\\_APS\\_Memory：数仓版APS内存利用率。
        
        *   APS\\_Memory\\_Avg\\_Usage\\_Percentage：APS平均内存使用率。
            
        *   APS\\_Memory\\_Max\\_Usage\\_Percentage：APS最大内存使用率。
            
    *   AnalyticDB\\_APS\\_RPS：数仓版RPS RPS。
        
        *   APS\\_Read\\_RPS：APS读RPS。
            
    *   AnalyticDB\\_APS\\_RT：数仓版APS RT。
        
        *   APS\\_Read\\_Avg\\_RT：APS平均耗时。
            
        *   APS\\_Read\\_Max\\_RT：APS最大耗时。',
                            'type' => 'string',
                            'example' => 'worker_avg_cpu_used',
                          ),
                          'Tags' => 
                          array (
                            'description' => '标签。',
                            'type' => 'string',
                            'example' => 'instance_name: "amv-8vbf80pjcz*****"',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-05-03T15:01:00Z\\",\\n  \\"RequestId\\": \\"25B56BC7-4978-40B3-9E48-4B7067******\\",\\n  \\"StartTime\\": \\"2021-05-03T15:00:00Z\\",\\n  \\"DBClusterId\\": \\"am-8vbf80pjcz*****\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_CPU\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[               \\\\\\"2021-05-03T15:00:12.72Z\\\\\\",               \\\\\\"0.1250\\\\\\"             ],             [               \\\\\\"2021-05-03T15:00:42.739Z\\\\\\",               \\\\\\"0.3125\\\\\\"             ]\\"\\n          ],\\n          \\"Name\\": \\"worker_avg_cpu_used\\",\\n          \\"Tags\\": \\"instance_name: \\\\\\"amv-8vbf80pjcz*****\\\\\\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n    <RequestId>25B56BC7-4978-40B3-9E48-4B7067******</RequestId>\\n    <EndTime>2021-05-03T15:01:00Z</EndTime>\\n    <DBClusterId>am-bp**************</DBClusterId>\\n    <StartTime>2021-05-03T15:00:00Z</StartTime>\\n    <Performances>\\n        <Series>\\n            <Values>\\n                <0>2021-05-03T15:00:12.72Z</0>\\n                <1>0.1875</1>\\n            </Values>\\n            <Values>\\n                <0>2021-05-03T15:00:42.739Z</0>\\n                <1>0.1250</1>\\n            </Values>\\n            <Name>worker_avg_cpu_used</Name>\\n        </Series>\\n        <Series>\\n            <Values>\\n                <0>2021-05-03T15:00:12.72Z</0>\\n                <1>0.1250</1>\\n            </Values>\\n            <Values>\\n                <0>2021-05-03T15:00:42.739Z</0>\\n                <1>0.3125</1>\\n            </Values>\\n            <Name>executor_avg_cpu_used</Name>\\n        </Series>\\n        <Unit>%</Unit>\\n        <Key>AnalyticDB_CPU</Key>\\n    </Performances>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
      'title' => '查看集群性能数据',
      'description' => '根据性能参数查看某个集群、某时间段范围内的性能监控数据。采集粒度为30秒。支持对慢SQL进行查询，提供SQL查询时长、扫描行数、扫描量等监控内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBClusterResourcePoolPerformance' => 
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源池数据监控指标。允许同时输入多个指标进行查询，多个指标间用英文逗号（,）分隔。支持监控如下指标：
- **AnalyticDB\\_RP_CPU** ：CPU平均使用率，单位：%。
- **AnalyticDB\\_RP_RT**：查询响应时间（RT），单位：毫秒（ms）。
- **AnalyticDB\\_RP_QPS**：每秒查询率（QPS），单位：数值。
- **AnalyticDB\\_RP_WaitTime**：查询等待时间，单位：毫秒（ms）。
- **AnalyticDB\\_RP_OriginalNode**：资源池基础节点数。
- **AnalyticDB\\_RP_ActualNode**：资源池分时弹性实际弹出的节点数（即执行扩容计划时实际增加的节点数）。
- **AnalyticDB\\_RP_PlanNode**：资源池分时弹性计划弹出的节点数。
- **AnalyticDB\\_RP_TotalNode**：资源池拥有的总节点数，总节点数=基础节点数+分时弹性计划中实际生效的节点数。

> - 若该参数留空，默认返回所有指标的监控数据详情。
> - 更多关于资源池弹性计划的信息，请参见[资源弹性扩容](~~189507~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'AnalyticDB_RP_CPU',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourcePools',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源池名称。允许同时输入多个资源池名称进行查询，多个名称间用英文逗号（,）分隔。

> * 输入的资源池名称不区分大小写，例如`USER_DEFAULT`与`user_default`表示的是同一个资源池。
> * 若该参数留空，将返回`USER_DEFAULT`即默认资源池的监控信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'TEST_POOL',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源池数据监控开始时间。格式<i>为yyyy-MM-ddTHH:mmZ</i>（UTC时间）。
> 仅支持查看最近2天的资源池监控信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-06-10T07:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源池数据监控结束时间，结束时间需晚于开始时间。格式<i>为yyyy-MM-ddTHH:mmZ</i>（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-06-10T07:01Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'EndTime' => 
              array (
                'description' => '资源池数据监控结束时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-06-10T07:01:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7EDB8E4-9769-4233-88C7-DCA4C9******',
              ),
              'StartTime' => 
              array (
                'description' => '资源池数据监控开始时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-06-10T07:00:00',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-****************',
              ),
              'Performances' => 
              array (
                'description' => '以监控指标为维度的数据详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '资源池数据监控指标。',
                      'type' => 'string',
                      'example' => 'AnalyticDB_RP_CPU',
                    ),
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'ResourcePoolPerformances' => 
                    array (
                      'description' => '以资源池为维度的监控数据列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourcePoolName' => 
                          array (
                            'description' => '资源池名称。',
                            'type' => 'string',
                            'example' => 'test_pool',
                          ),
                          'ResourcePoolSeries' => 
                          array (
                            'description' => '资源池监控数据的序列列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '详情。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Values' => 
                                array (
                                  'description' => '监控指标数值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '不同时间点下的资源池监控项数值。',
                                    'type' => 'string',
                                    'example' => '["2021-06-10T07:00:22.601Z","0.0000"],["2021-06-10T07:00:52.62Z","0.0312"]',
                                  ),
                                ),
                                'Name' => 
                                array (
                                  'description' => '监控指标名称。',
                                  'type' => 'string',
                                  'example' => 'cpu',
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
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified StartTime is invalid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-06-10T07:01:00Z\\",\\n  \\"RequestId\\": \\"C7EDB8E4-9769-4233-88C7-DCA4C9******\\",\\n  \\"StartTime\\": \\"2021-06-10T07:00:00\\",\\n  \\"DBClusterId\\": \\"am-****************\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_RP_CPU\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"ResourcePoolPerformances\\": [\\n        {\\n          \\"ResourcePoolName\\": \\"test_pool\\",\\n          \\"ResourcePoolSeries\\": [\\n            {\\n              \\"Values\\": [\\n                \\"[\\\\\\"2021-06-10T07:00:22.601Z\\\\\\",\\\\\\"0.0000\\\\\\"],[\\\\\\"2021-06-10T07:00:52.62Z\\\\\\",\\\\\\"0.0312\\\\\\"]\\"\\n              ],\\n              \\"Name\\": \\"cpu\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterResourcePoolPerformanceResponse>\\n    <RequestId>C7EDB8E4-9769-4233-88C7-DCA4C9******</RequestId>\\n    <EndTime>2021-06-10T07:01:00Z</EndTime>\\n    <StartTime>2021-06-10T07:00:00Z</StartTime>\\n    <Performances>\\n        <ResourcePoolPerformances>\\n            <ResourcePoolSeries>\\n                <Values>\\n                    <0>2021-06-10T07:00:22.601Z</0>\\n                    <1>0.0000</1>\\n                </Values>\\n                <Values>\\n                    <0>2021-06-10T07:00:52.62Z</0>\\n                    <1>0.0312</1>\\n                </Values>\\n                <Name>cpu</Name>\\n            </ResourcePoolSeries>\\n            <ResourcePoolName>test_pool</ResourcePoolName>\\n        </ResourcePoolPerformances>\\n        <Unit>%</Unit>\\n        <Key>AnalyticDB_RP_CPU</Key>\\n    </Performances>\\n</DescribeDBClusterResourcePoolPerformanceResponse>","errorExample":""}]',
      'title' => '查询集群资源池监控信息',
      'summary' => '查询弹性模式集群版（新版）ADB集群的资源池监控信息。',
      'description' => '> 您还可以在控制台上以图表的形式查看AnalyticDB MySQL版弹性模式集群版（新版）资源池监控信息。更多详细信息，请参见[查看监控信息](~~188721~~)。',
    ),
    'DescribeInclinedTables' => 
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
        'abilityTreeCode' => '10807',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-k2jofo4pi5zhd****',
          ),
        ),
        1 => 
        array (
          'name' => 'TableType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表类型，取值说明：
- **FactTable**：分区表。
- **DimensionTable**：维度表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FactTable',
          ),
        ),
        2 => 
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
Type表示排序类型 Desc为降序，Asc为升序。

均不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => '[      {          "Field":"Name",          "Type":"Asc"      }  ]',
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
            'description' => '页码，取值为大于0且不超过integer数据类型的最大值，默认值为1。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'cn-zhangjiakou',
          ),
        ),
        6 => 
        array (
          'name' => 'Lang',
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
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '15',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'string',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '表列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Table' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'type' => 'string',
                        ),
                        'Schema' => 
                        array (
                          'type' => 'string',
                        ),
                        'Size' => 
                        array (
                          'type' => 'string',
                        ),
                        'Name' => 
                        array (
                          'type' => 'string',
                        ),
                        'IsIncline' => 
                        array (
                          'type' => 'string',
                        ),
                        'TotalSize' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'SpaceRatio' => 
                        array (
                          'type' => 'number',
                          'format' => 'double',
                        ),
                        'RowCount' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DetectionItems' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'type' => 'string',
                    ),
                    'Message' => 
                    array (
                      'type' => 'string',
                    ),
                    'Status' => 
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalFailure',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"15\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"Type\\": \\"\\",\\n        \\"Schema\\": \\"\\",\\n        \\"Size\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"IsIncline\\": \\"\\",\\n        \\"TotalSize\\": 0,\\n        \\"SpaceRatio\\": 0,\\n        \\"RowCount\\": 0\\n      }\\n    ]\\n  },\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看表监控',
      'summary' => '调用DescribeInclinedTables接口查看表监控。',
    ),
    'ModifyMaintenanceAction' => 
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
            'example' => 'rg-4690g37929XXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标待处理运维事件的ID。支持输入多个ID来批量修改切换时间，多个ID间用英文逗号（,）隔开。

> * 您可以调用[DescribeMaintenanceAction](~~271738~~)接口查看目标待处理运维事件的详情，包括ID。
> * 仅待处理运维事件支持修改切换时间，历史运维事件不支持修改切换时间。关于待处理运维事件和历史运维事件的状态详情，请参见[DescribeMaintenanceAction](~~271738~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11111',
          ),
        ),
        2 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后台将在指定时间点执行目标待处理运维事件所对应的操作。格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-07-09T22:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标待处理运维事件所在地域的地域ID。
> * 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Ids' => 
              array (
                'description' => '目标运维事件ID。',
                'type' => 'string',
                'example' => '11111',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7856CBE7-5BD0-4EE1-AC62-749392******',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Ids\\": \\"11111\\",\\n  \\"RequestId\\": \\"7856CBE7-5BD0-4EE1-AC62-749392******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyMaintenanceActionResponse>\\n    <Ids>11111</Ids>\\n    <RequestId>7856CBE7-5BD0-4EE1-AC62-749392******</RequestId>\\n</ModifyMaintenanceActionResponse>","errorExample":""}]',
      'title' => '修改维护动作',
      'summary' => '调用ModifyMaintenanceAction接口修改运维事件的执行时间。',
    ),
    'DescribeMaintenanceAction' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。取值如下：
* 运维事件所在地域的地域ID，如`cn-hangzhou`。您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。
* 您也可以输入`all`查看当前账号下所有地域下的所有运维事件，当`Region`设置为`all`时，`TaskType`也必须设置为`all`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维事件的类型，取值如下：
* **rds_apsaradb_upgrade**：数据库软件升级。
* **all**：查看当前账号下所有地域下的所有运维事件，当`Region`设置为`all`时，`TaskType`也必须设置为`all`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rds_apsaradb_upgrade',
          ),
        ),
        2 => 
        array (
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回待处理或历史运维事件的详情，取值如下：
* **0**：返回待处理运维事件的详情。
* **1**：返回历史运维事件的详情。

若该参数留空，默认返回待处理运维事件的详情。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
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
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维事件所在地域的地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'E774C8A9-8819-4A09-9E91-07C078******',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Items' => 
              array (
                'description' => '事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '事件状态。
- 若您设置`IsHistory`为**0**，则返回待处理运维事件状态的详情，取值范围如下：
    - **WAITING_MODIFY**：等待用户设置运维事件开始时间。
    - **WAITING**：运维事件正在等待处理。
    - **PROCESSING**：运维事件正在处理中（不支持修改处于该状态下事件的切换时间）。
- 若您设置`IsHistory`为**1**，则返回历史运维事件状态的详情，取值范围如下：
     - **SUCCESS**：事件结束且执行成功。
     - **FAILED**：事件结束但执行失败。
     - **CANCEL**：事件已取消。',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'Deadline' => 
                    array (
                      'description' => '运维事件执行时间可调整范围的最晚时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-07-04T15:59:59Z',
                    ),
                    'PrepareInterval' => 
                    array (
                      'description' => '运维事件切换之前所需的准备时间，格式为`HH:mm:ss`。',
                      'type' => 'string',
                      'example' => '02:00:00',
                    ),
                    'DBType' => 
                    array (
                      'description' => '数据库的引擎类型。',
                      'type' => 'string',
                      'example' => 'analyticdb',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '后台执行该运维事件的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-07-03T04:00:00Z',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '运维事件的类型。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'DBVersion' => 
                    array (
                      'description' => '数据库引擎版本号。',
                      'type' => 'string',
                      'example' => '3.0',
                    ),
                    'DBClusterId' => 
                    array (
                      'description' => '运维事件所涉及集群的集群ID。',
                      'type' => 'string',
                      'example' => 'am-****************',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '修改运维事件切换时间的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-07-03T06:33:00Z',
                    ),
                    'Region' => 
                    array (
                      'description' => '运维事件所在地域的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ResultInfo' => 
                    array (
                      'description' => '运维事件的执行结果。
> 仅当`Status`（状态）取值为**FAILED**（运维事件结束但执行失败）或**CANCEL**（事件已取消）时，返回该参数。',
                      'type' => 'string',
                      'example' => 'autoCancel',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '运维事件的创建时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-06-30T02:44:27Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '运维事件的ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '11111',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '运维事件预计的切换时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-07-03T06:00:00Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"E774C8A9-8819-4A09-9E91-07C078******\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"Deadline\\": \\"2021-07-04T15:59:59Z\\",\\n      \\"PrepareInterval\\": \\"02:00:00\\",\\n      \\"DBType\\": \\"analyticdb\\",\\n      \\"StartTime\\": \\"2021-07-03T04:00:00Z\\",\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"DBVersion\\": \\"3.0\\",\\n      \\"DBClusterId\\": \\"am-****************\\",\\n      \\"ModifiedTime\\": \\"2021-07-03T06:33:00Z\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"ResultInfo\\": \\"autoCancel\\",\\n      \\"CreatedTime\\": \\"2021-06-30T02:44:27Z\\",\\n      \\"Id\\": 11111,\\n      \\"SwitchTime\\": \\"2021-07-03T06:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMaintenanceActionResponse>\\n    <TotalRecordCount>2</TotalRecordCount>\\n    <RequestId>E774C8A9-8819-4A09-9E91-07C078******</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Status>SUCCESS</Status>\\n        <CreatedTime>2021-06-30T02:44:27Z</CreatedTime>\\n        <Deadline>2021-07-04T15:59:59Z</Deadline>\\n        <StartTime>2021-07-03T04:00:00Z</StartTime>\\n        <DBClusterId>am-****************</DBClusterId>\\n        <DBType>analyticdb</DBType>\\n        <DBVersion>3.0</DBVersion>\\n        <ModifiedTime>2021-07-03T06:33:00Z</ModifiedTime>\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\n        <PrepareInterval>02:00:00</PrepareInterval>\\n        <Region>cn-hangzhou</Region>\\n        <Id>11111</Id>\\n        <SwitchTime>2021-07-03T06:00:00Z</SwitchTime>\\n    </Items>\\n    <Items>\\n        <Status>CANCEL</Status>\\n        <CreatedTime>2021-06-25T06:32:45Z</CreatedTime>\\n        <Deadline>2021-06-29T15:59:59Z</Deadline>\\n        <StartTime>2021-06-26T16:10:00Z</StartTime>\\n        <DBClusterId>am-****************</DBClusterId>\\n        <DBType>analyticdb</DBType>\\n        <DBVersion>3.0</DBVersion>\\n        <ModifiedTime>2021-06-26T18:40:00Z</ModifiedTime>\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\n        <PrepareInterval>02:00:00</PrepareInterval>\\n        <Region>cn-hangzhou</Region>\\n        <Id>22222</Id>\\n        <ResultInfo>autoCancel</ResultInfo>\\n        <SwitchTime>2021-06-26T18:10:00Z</SwitchTime>\\n    </Items>\\n</DescribeMaintenanceActionResponse>","errorExample":""}]',
      'title' => '查询运维事件的详情',
      'summary' => '调用DescribeMaintenanceAction接口查询运维事件的详细信息。',
    ),
    'DescribeDiagnosisTasks' => 
    array (
      'summary' => '获取指定查询ID和Stage ID的分布式子任务执行详情信息。',
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

> 您可以通过[DescribeDBClusters](~~129857~~)接口查看账号下AnalyticDB MySQL数仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版支持的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。
> 您可以调用[DescribeProcessList](~~190092~~)接口查看目标SQL的任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '202011191048151921681492420315100****',
          ),
        ),
        3 => 
        array (
          'name' => 'StageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定`ProcessId`对应查询的某个Stage ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Stage[26]',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按指定字段对任务进行升序或降序排列。参数值需为JSON字符串类型，例如：`[{"Field":"CreateTime", "Type":"desc"}]`

> * `Field`表示需要排序的字段名，支持的字段为：`State`、`CreateTime`、`DBName`、`ProcessID`、`UpdateTime`、`JobName`和`ProcessRows`。
> * `Type`表示排序类型，取值范围为`Desc`（降序）或`Asc`（升序），取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"Field":"StartTime", "Type": "desc" }]',
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
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：
- 30（默认值）。
- 50。
- 100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        7 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的异步导入或导出任务的状态，取值说明如下：
* **RUNNING**：任务进行中。
* **FINISHED**：任务执行成功。
* **FAILED**：任务执行失败。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'FAILED' => 'FAILED',
              'RUNNING' => 'RUNNING',
              'FINISHED' => 'FINISHED',
            ),
            'example' => 'RUNNING',
          ),
        ),
        8 => 
        array (
          'name' => 'Host',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发起查询的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
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
            'description' => '任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
              ),
              'TaskList' => 
              array (
                'description' => '子任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '子任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ScanCost' => 
                    array (
                      'description' => '带数据源的任务的扫描数据耗时。单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'OutputDataSize' => 
                    array (
                      'description' => '任务的输出数据量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'InputDataSize' => 
                    array (
                      'description' => '任务的输入数据量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'State' => 
                    array (
                      'description' => '任务最终执行状态：

- FINISHED：完成。
- CANCELED：取消。
- ABORTED：中止。
- FAILED：失败。',
                      'type' => 'string',
                      'example' => 'FINISHED',
                    ),
                    'OperatorCost' => 
                    array (
                      'description' => '任务在某个节点的算子总耗时，为多线程累加值，可用于判断计算是否存在长尾。单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'OutputRows' => 
                    array (
                      'description' => '任务的输出数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '105',
                    ),
                    'ScanDataSize' => 
                    array (
                      'description' => '任务的扫描数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'ElapsedTime' => 
                    array (
                      'description' => '任务从创建到结束的时长。单位：毫秒（ms）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '456',
                    ),
                    'ScanRows' => 
                    array (
                      'description' => '带数据源的任务的扫描数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => '任务的峰值内存，单位Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '22568****',
                    ),
                    'InputRows' => 
                    array (
                      'description' => '任务的输入数据行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '105',
                    ),
                    'TaskCreateTime' => 
                    array (
                      'description' => '任务创建时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2022-12-12 00:00:12',
                    ),
                    'TaskEndTime' => 
                    array (
                      'description' => '任务实际结束的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2022-12-22 00:00:00',
                    ),
                    'TaskHost' => 
                    array (
                      'description' => '任务机器的IP。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'Drivers' => 
                    array (
                      'description' => '任务执行的并行度。',
                      'type' => 'string',
                      'example' => '16',
                    ),
                    'QueuedTime' => 
                    array (
                      'description' => '任务执行前的排队时间，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '12',
                    ),
                    'ComputeTimeRatio' => 
                    array (
                      'description' => '任务所有算子的累加耗时除以任务的并行度后，和ElapsedTime的比值，可用于判断任务的是否为真正耗时的任务。如果比值较大，说明该任务大部分时间在实际执行计算任务；如果比值较小，说明该任务大部分时间在等待被调度或者因其他原因被阻塞。',
                      'type' => 'string',
                      'example' => '0.89',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '某个Stage总的任务数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '33',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\",\\n  \\"TaskList\\": [\\n    {\\n      \\"ScanCost\\": 0,\\n      \\"OutputDataSize\\": 123,\\n      \\"InputDataSize\\": 123,\\n      \\"State\\": \\"FINISHED\\",\\n      \\"OperatorCost\\": 3,\\n      \\"OutputRows\\": 105,\\n      \\"ScanDataSize\\": 123,\\n      \\"ElapsedTime\\": 456,\\n      \\"ScanRows\\": 0,\\n      \\"PeakMemory\\": 234,\\n      \\"TaskId\\": \\"22568****\\",\\n      \\"InputRows\\": 105,\\n      \\"TaskCreateTime\\": 0,\\n      \\"TaskEndTime\\": 0,\\n      \\"TaskHost\\": \\"192.168.XX.XX\\",\\n      \\"Drivers\\": \\"16\\",\\n      \\"QueuedTime\\": \\"12\\",\\n      \\"ComputeTimeRatio\\": \\"0.89\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 33\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisTasksResponse>\\n    <RequestId>F0983B43-B2EC-536A-8791-142B5CF1E9B6</RequestId>\\n    <TaskList>\\n        <ScanCost>0</ScanCost>\\n        <OutputDataSize>123</OutputDataSize>\\n        <InputDataSize>123</InputDataSize>\\n        <State>FINISHED</State>\\n        <OperatorCost>3</OperatorCost>\\n        <OutputRows>105</OutputRows>\\n        <ScanDataSize>123</ScanDataSize>\\n        <ElapsedTime>456</ElapsedTime>\\n        <ScanRows>0</ScanRows>\\n        <PeakMemory>234</PeakMemory>\\n        <TaskId>22568****</TaskId>\\n        <InputRows>105</InputRows>\\n        <TaskHost>192.168.xx.xx</TaskHost>\\n        <Drivers>16</Drivers>\\n        <QueuedTime>12</QueuedTime>\\n        <ComputeTimeRatio>0.89</ComputeTimeRatio>\\n    </TaskList>\\n    <TotalCount>33</TotalCount>\\n</DescribeDiagnosisTasksResponse>","errorExample":""}]',
      'title' => 'Stage的子任务执行详情',
    ),
    'DescribeDiagnosisRecords' => 
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
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
            'required' => true,
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
            'required' => true,
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
            'description' => '指定SQL的查询条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`），`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => true,
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
            'description' => 'SQL语句的最大扫描量，单位：Byte。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '104428198',
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
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
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
            'example' => '59.82.xx.xx',
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
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
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
            'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
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
            'description' => 'SQL Pattern的ID。

> 您可以调用[DescribeSQLPatterns](~~321868~~)接口查看指定时间内目标AnalyticDB MySQL集群下所有的SQL Pattern列表信息，包括SQL Pattern的ID。',
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页数。',
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
                  'description' => '详情。',
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
                      'example' => '10.0.xx.xx:3004',
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
                      'description' => '查询结果的长度是否超过阈值（即是否被截断），取值如下：
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
                      'example' => '59.82.xx.xx',
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
                      'description' => '排队耗时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
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
                      'description' => '查询执行的耗时，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '6',
                    ),
                    'TotalPlanningTime' => 
                    array (
                      'description' => '生成执行计划的耗时，单位：毫秒。',
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
                'example' => '109462AF-B5FA-3D5A-9377-B27E5B******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Querys\\": [\\n    {\\n      \\"SQL\\": \\"SELECT count(*)\\\\\\\\nFROM nation\\",\\n      \\"SQLTruncatedThreshold\\": 5120,\\n      \\"Status\\": \\"finished\\",\\n      \\"OutputDataSize\\": 9,\\n      \\"Cost\\": 10,\\n      \\"OutputRows\\": 1,\\n      \\"RcHost\\": \\"10.0.xx.xx:3004\\",\\n      \\"ScanSize\\": 9,\\n      \\"ProcessId\\": \\"2021093000414401000000023503151******\\",\\n      \\"StartTime\\": 1632933704000,\\n      \\"SQLTruncated\\": false,\\n      \\"Database\\": \\"adb_demo\\",\\n      \\"ScanRows\\": 1,\\n      \\"ResourceCostRank\\": 1,\\n      \\"ClientIp\\": \\"59.82.xx.xx\\",\\n      \\"PeakMemory\\": 16648,\\n      \\"QueueTime\\": 0,\\n      \\"ResourceGroup\\": \\"user_default\\",\\n      \\"UserName\\": \\"test_user\\",\\n      \\"ExecutionTime\\": 6,\\n      \\"TotalPlanningTime\\": 4,\\n      \\"EtlWriteRows\\": 0,\\n      \\"TotalStages\\": 2\\n    }\\n  ],\\n  \\"RequestId\\": \\"109462AF-B5FA-3D5A-9377-B27E5B******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisRecordsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Querys>\\n        <SQL>SELECT count(*)\\\\nFROM nation</SQL>\\n        <SQLTruncatedThreshold>5120</SQLTruncatedThreshold>\\n        <Status>finished</Status>\\n        <OutputDataSize>9</OutputDataSize>\\n        <Cost>10</Cost>\\n        <OutputRows>1</OutputRows>\\n        <RcHost>10.0.xx.xx:3004</RcHost>\\n        <ScanSize>9</ScanSize>\\n        <ProcessId>2021093000414401000000023503151******</ProcessId>\\n        <StartTime>1632933704000</StartTime>\\n        <SQLTruncated>false</SQLTruncated>\\n        <Database>adb_demo</Database>\\n        <ScanRows>1</ScanRows>\\n        <ResourceCostRank>1</ResourceCostRank>\\n        <ClientIp>59.82.xx.xx</ClientIp>\\n        <PeakMemory>16648</PeakMemory>\\n        <QueueTime>0</QueueTime>\\n        <ResourceGroup>user_default</ResourceGroup>\\n        <UserName>test_user</UserName>\\n        <ExecutionTime>6</ExecutionTime>\\n        <TotalPlanningTime>4</TotalPlanningTime>\\n        <EtlWriteRows>0</EtlWriteRows>\\n        <TotalStages>2</TotalStages>\\n    </Querys>\\n    <RequestId>109462AF-B5FA-3D5A-9377-B27E5B******</RequestId>\\n</DescribeDiagnosisRecordsResponse>","errorExample":""}]',
      'title' => '查询诊断记录',
      'summary' => '查看目标AnalyticDB MySQL版集群中符合指定检索条件的SQL语句摘要信息。',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bt6u59zcmd945****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。
> 最多仅支持查看14天前的数据，查询超过14天前的数据返回结果为空。',
            'type' => 'string',
            'required' => true,
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
            'required' => true,
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
            'description' => 'SQL查询的条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`）；`Value`、`Min`或`Max`表示该维度下的查询范围。取值说明：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Type":"maxCost","Value":"100"}',
          ),
        ),
        5 => 
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'ClientIps' => 
              array (
                'description' => '访问源地址列表。',
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
                'description' => '资源组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源组名称。',
                  'type' => 'string',
                  'example' => 'user_default',
                ),
              ),
              'UserNames' => 
              array (
                'description' => '用户名列表。',
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
                'description' => '数据库列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'example' => 'tpch_1g',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E0B56BCD-1BED-30EC-8CAF-1D1E5F******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClientIps\\": [\\n    \\"106.11.xx.xx\\"\\n  ],\\n  \\"ResourceGroups\\": [\\n    \\"user_default\\"\\n  ],\\n  \\"UserNames\\": [\\n    \\"test_user\\"\\n  ],\\n  \\"Databases\\": [\\n    \\"tpch_1g\\"\\n  ],\\n  \\"RequestId\\": \\"E0B56BCD-1BED-30EC-8CAF-1D1E5F******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisDimensionsResponse>\\n    <ClientIps>[\\"106.11.xx.xx\\",\\"106.11.xx.xx\\"]</ClientIps>\\n    <ResourceGroups>[\\"user_default\\"]</ResourceGroups>\\n    <UserNames>[\\"test_user\\"]</UserNames>\\n    <Databases>[\\"tpch_1g\\"]</Databases>\\n    <RequestId>E0B56BCD-1BED-30EC-8CAF-1D1E5F******</RequestId>\\n</DescribeDiagnosisDimensionsResponse>","errorExample":""}]',
      'title' => '查询诊断维度',
      'summary' => '查看符合指定检索条件的SQL在资源组、数据库名、用户名以及访问源地址等维度下的去重统计信息。',
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
            'docRequired' => true,
            'example' => 'am-****************',
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
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Records' => 
              array (
                'description' => '下载列表详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
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
                      'example' => '69',
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
                      'example' => 'https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******"',
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
                'example' => '987F51BE-C4CB-332A-B159-63CE87******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Records\\": [\\n    {\\n      \\"Status\\": \\"finished\\",\\n      \\"DownloadId\\": 69,\\n      \\"ExceptionMsg\\": \\"The query result is empty.\\",\\n      \\"Url\\": \\"https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******\\\\\\"\\",\\n      \\"FileName\\": \\"20210806094635-20210806095135\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"987F51BE-C4CB-332A-B159-63CE87******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadRecordsResponse>\\n    <RequestId>987F51BE-C4CB-332A-B159-63CE87******</RequestId>\\n    <Records>\\n        <Status>failed</Status>\\n        <FileName>20210806094635-20210806095135.xlsx</FileName>\\n        <ExceptionMsg>The query result is empty.</ExceptionMsg>\\n        <Url/>\\n        <DownloadId>73</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210805104301-20210805164302.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>72</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210805104301-20210805164301.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164301.xlsx?Expires=1943513847&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>71</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210804234858-20210805114858.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210804234858-20210805114858.xlsx?Expires=1943495349&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>70</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210702180330-20210702180333.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210702180330-20210702180333.xlsx?Expires=1941607637&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>69</DownloadId>\\n    </Records>\\n</DescribeDownloadRecordsResponse>","errorExample":""}]',
      'title' => '查询下载记录',
      'summary' => '查看目标AnalyticDB MySQL版集群中最近5次的SQL查询下载任务列表。',
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。
> 最多仅支持查看14天前的数据。',
            'type' => 'string',
            'required' => true,
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
            'required' => true,
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
            'description' => '指定SQL查询的条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持`maxCost`、`status`和`cost`3个取值）；`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => true,
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
            'example' => '100000000',
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
            'example' => '110000000',
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
> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
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
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'DownloadId' => 
              array (
                'description' => '下载ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '68',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D4ACF4E0-2952-3A87-9A2C-474058******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DownloadId\\": 68,\\n  \\"RequestId\\": \\"D4ACF4E0-2952-3A87-9A2C-474058******\\"\\n}","errorExample":""},{"type":"xml","example":"<DownloadDiagnosisRecordsResponse>\\n    <RequestId>D4ACF4E0-2952-3A87-9A2C-474058******</RequestId>\\n    <DownloadId>68</DownloadId>\\n</DownloadDiagnosisRecordsResponse>","errorExample":""}]',
      'title' => '下载诊断记录',
      'summary' => '下载目标AnalyticDB MySQL版集群中符合指定条件的查询SQL的摘要信息。',
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下AnalyticDB MySQL数仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2021070216432217201616806503453******',
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
            'required' => true,
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
            'description' => '详情。',
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
                      'example' => '123',
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
                      'example' => '231',
                    ),
                    'OutputDataSize' => 
                    array (
                      'description' => 'Stage总的输出数据量，单位为Bytes。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12344',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => 'Stage总的峰值内存，单位为Bytes。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3421',
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
                      'enumValueTitles' => 
                      array (
                        'FAILED' => 'FAILED',
                        'RUNNING' => 'RUNNING',
                        'FINISHED' => 'FINISHED',
                      ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiagnosisSQLInfo\\": \\"{     \\\\\\"DiagnosisSQLInfo\\\\\\": {         \\\\\\"hasSharedStage\\\\\\": false,         \\\\\\"resourceGroup\\\\\\": \\\\\\"user_default\\\\\\",         \\\\\\"cost\\\\\\": 274,         \\\\\\"queuedTime\\\\\\": 0,         \\\\\\"outputDataSize\\\\\\": 9,         \\\\\\"scheduled\\\\\\": true,         \\\\\\"query\\\\\\": \\\\\\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \'1995-09-01\' AND l_shipdate &lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\\\\\",         \\\\\\"outputRows\\\\\\": 1,         \\\\\\"userName\\\\\\": \\\\\\"test_user\\\\\\",         \\\\\\"parentId\\\\\\": 0,         \\\\\\"maxOutputRows\\\\\\": 200000,         \\\\\\"scanSize\\\\\\": 8247470,         \\\\\\"peakMemory\\\\\\": 13188295,         \\\\\\"startTime\\\\\\": 1626330527632,         \\\\\\"state\\\\\\": \\\\\\"FINISHED\\\\\\",         \\\\\\"endTime\\\\\\": 1626330527905,         \\\\\\"writeTableRows\\\\\\": 0,         \\\\\\"scanRows\\\\\\": 351966     } }\\",\\n  \\"RequestId\\": \\"1\\",\\n  \\"StageInfos\\": [\\n    {\\n      \\"InputRows\\": 123,\\n      \\"InputDataSize\\": 2341,\\n      \\"OutputRows\\": 231,\\n      \\"OutputDataSize\\": 12344,\\n      \\"PeakMemory\\": 3421,\\n      \\"OperatorCost\\": 2341,\\n      \\"StageId\\": \\"Stage[26]\\",\\n      \\"State\\": \\"RUNNING\\",\\n      \\"Progress\\": 0.3\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisSQLInfoResponse>\\n    <DiagnosisSQLInfo>{     \\"DiagnosisSQLInfo\\": {         \\"hasSharedStage\\": false,         \\"resourceGroup\\": \\"user_default\\",         \\"cost\\": 274,         \\"queuedTime\\": 0,         \\"outputDataSize\\": 9,         \\"scheduled\\": true,         \\"query\\": \\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &amp;gt;= DATE \'1995-09-01\' AND l_shipdate &amp;lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\",         \\"outputRows\\": 1,         \\"userName\\": \\"test_user\\",         \\"parentId\\": 0,         \\"maxOutputRows\\": 200000,         \\"scanSize\\": 8247470,         \\"peakMemory\\": 13188295,         \\"startTime\\": 1626330527632,         \\"state\\": \\"FINISHED\\",         \\"endTime\\": 1626330527905,         \\"writeTableRows\\": 0,         \\"scanRows\\": 351966     } }</DiagnosisSQLInfo>\\n    <RequestId>1</RequestId>\\n    <StageInfos>\\n        <InputRows>123</InputRows>\\n        <InputDataSize>2341</InputDataSize>\\n        <OutputRows>231</OutputRows>\\n        <OutputDataSize>12344</OutputDataSize>\\n        <PeakMemory>3421</PeakMemory>\\n        <OperatorCost>2341</OperatorCost>\\n        <StageId>Stage[26]</StageId>\\n        <State>RUNNING</State>\\n        <Progress>0.3</Progress>\\n    </StageInfos>\\n</DescribeDiagnosisSQLInfoResponse>","errorExample":""}]',
      'title' => '查询诊断SQL信息',
      'summary' => '查看某个SQL的执行详情，包括执行计划、运行信息、资源使用、自诊断结果等。',
    ),
    'DescribeDiagnosisMonitorPerformance' => 
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp108q1py5r78****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。格式为Unix时间戳，单位为毫秒。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1671684348000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。格式为Unix时间戳，单位为毫秒。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1671687948000',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-beijing',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryCondition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定SQL的查询条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`），`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：
- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。
- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。
- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
            'type' => 'string',
            'required' => true,
            'example' => '{\\"Type\\":\\"maxCost\\",\\"Value\\":\\"100\\"}',
          ),
        ),
        5 => 
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
              'PerformancesThreshold' => 
              array (
                'description' => '绘制甘特图的查询条数阈值，默认为10000条。

> 即使实际的查询条数多于10000条，也只会使用10000条查询绘制甘特图。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10000',
              ),
              'PerformancesTruncated' => 
              array (
                'description' => '当前返回的查询是否为全部查询。返回值说明：

- true：当前返回的查询条数是全部查询。
- false：后台限制了返回条数，即当前返回的查询不是全部查询。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8',
              ),
              'Performances' => 
              array (
                'description' => '绘制甘特图的数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '甘特图性能数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => 'SQL语句的状态，取值为：
- **running**：执行中。
- **finished**：已完成。
- **failed**：执行失败。',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'ProcessId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '202210311015270330101470300315153****',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '目标SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1669011260000',
                    ),
                    'Cost' => 
                    array (
                      'description' => '查询的总耗时。单位：毫秒。
> 该耗时指标是`QueuedTime`、`TotalPlanningTime`和`ExecutionTime`三个耗时指标的累加值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '252',
                    ),
                    'ScanRows' => 
                    array (
                      'description' => '扫描行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2345',
                    ),
                    'PeakMemory' => 
                    array (
                      'description' => '查询的峰值内存，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'RcHost' => 
                    array (
                      'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                    'ScanSize' => 
                    array (
                      'description' => '扫描数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'UserName' => 
                    array (
                      'description' => '提交查询使用的用户名。',
                      'type' => 'string',
                      'example' => 'rpt',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformancesThreshold\\": 10000,\\n  \\"PerformancesTruncated\\": false,\\n  \\"RequestId\\": \\"0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Status\\": \\"running\\",\\n      \\"ProcessId\\": \\"202210311015270330101470300315153****\\",\\n      \\"StartTime\\": 1669011260000,\\n      \\"Cost\\": 252,\\n      \\"ScanRows\\": 2345,\\n      \\"PeakMemory\\": 123,\\n      \\"RcHost\\": \\"192.168.XX.XX\\",\\n      \\"ScanSize\\": 123,\\n      \\"UserName\\": \\"rpt\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisMonitorPerformanceResponse>\\n    <PerformancesThreshold>10000</PerformancesThreshold>\\n    <PerformancesTruncated>false</PerformancesTruncated>\\n    <RequestId>0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8</RequestId>\\n    <Performances>\\n        <Status>running</Status>\\n        <ProcessId>202210311015270330101470300315153****</ProcessId>\\n        <StartTime>1669011260000</StartTime>\\n        <Cost>252</Cost>\\n        <ScanRows>2345</ScanRows>\\n        <PeakMemory>123</PeakMemory>\\n        <RcHost>192.168.XX.XX</RcHost>\\n        <ScanSize>123</ScanSize>\\n        <UserName>rpt</UserName>\\n    </Performances>\\n</DescribeDiagnosisMonitorPerformanceResponse>","errorExample":""}]',
      'title' => '查询智能运维的监控信息',
      'summary' => '用于获取用户选定时间范围内查询的执行开始时间信息和结束时间信息。',
    ),
    'DescribeSQLPatterns' => 
    array (
      'summary' => '调用DescribeSQLPatterns接口查看指定日期内AnalyticDB MySQL版集群下的SQL Pattern列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。

> - 仅支持查看最近14天的数据。例如：当前时间为2021-11-22T12:00:00Z，最早可以查询到2021-11-09T12:00:00Z的数据。
> - 查询开始时间和查询结束时间的间隔不能大于24小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-30T00:10:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。
> 查询结束时间需晚于查询开始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-30T00:15:00Z',
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
            'required' => true,
            'example' => '[{"Field":"AverageQueryTime","Type":"Asc"}]',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。
> 本参数不填写，默认为**1**。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '每页记录数，取值说明：
- **30**
- **50**
- **100**

> 本参数不填写，默认为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置下载文件的文件标题以及部分错误信息的语言，取值说明：
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
            'description' => '列表信息。',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页数。',
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
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PatternDetails' => 
              array (
                'description' => 'SQL Pattern的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SQLPattern' => 
                    array (
                      'description' => 'SQL Pattern的具体语句。',
                      'type' => 'string',
                      'example' => 'SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)',
                    ),
                    'PatternId' => 
                    array (
                      'description' => 'SQL Pattern的ID。',
                      'type' => 'string',
                      'example' => '5575924945138******',
                    ),
                    'User' => 
                    array (
                      'description' => '提交Pattern相关的SQL数据库用户名。',
                      'type' => 'string',
                      'example' => 'reporter',
                    ),
                    'AccessIp' => 
                    array (
                      'description' => '提交Pattern相关的SQL客户端IP地址。',
                      'type' => 'string',
                      'example' => '192.168.xx.xx',
                    ),
                    'Tables' => 
                    array (
                      'description' => 'SQL Pattern扫描的列表。',
                      'type' => 'string',
                      'example' => 'tpch.orders',
                    ),
                    'PatternCreationTime' => 
                    array (
                      'description' => '查询时间范围内，Pattern的最早提交时间。单位：毫秒。',
                      'type' => 'string',
                      'example' => '2021-11-12 03:06:00',
                    ),
                    'AverageQueryTime' => 
                    array (
                      'description' => '查询时间范围内，Pattern的平均总耗时。单位：毫秒。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '4',
                    ),
                    'MaxQueryTime' => 
                    array (
                      'description' => '查询时间范围内，Pattern的最大总耗时。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2341',
                    ),
                    'AverageExecutionTime' => 
                    array (
                      'description' => '查询时间范围内，Pattern的平均执行时间。单位：毫秒。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234.78',
                    ),
                    'MaxExecutionTime' => 
                    array (
                      'description' => '查询时间范围内，Pattern的最大执行时间。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2142',
                    ),
                    'AveragePeakMemory' => 
                    array (
                      'description' => '查询时间范围内，Pattern的平均峰值内存。单位：Byte。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234.22',
                    ),
                    'MaxPeakMemory' => 
                    array (
                      'description' => 'Pattern相关SQL的最大峰值内存。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234149',
                    ),
                    'AverageScanSize' => 
                    array (
                      'description' => '查询时间范围内，Pattern的平均数据读取量。单位：Byte。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '234149.23',
                    ),
                    'MaxScanSize' => 
                    array (
                      'description' => 'Pattern相关SQL的最大数据读取量。单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234149',
                    ),
                    'QueryCount' => 
                    array (
                      'description' => '查询时间范围内，Pattern的执行次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '345',
                    ),
                    'FailedCount' => 
                    array (
                      'description' => '查询时间范围内，Pattern的失败次数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '234',
                    ),
                    'Blockable' => 
                    array (
                      'description' => '能否拦截当前SQL Pattern的运行。取值说明：
* **true**：支持拦截。
* **false**：不支持拦截。
> 目前AnalyticDB MySQL版仅支持Select和Insert相关语句的拦截。

',
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
                'example' => '6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"PatternDetails\\": [\\n    {\\n      \\"SQLPattern\\": \\"SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)\\",\\n      \\"PatternId\\": \\"5575924945138******\\",\\n      \\"User\\": \\"reporter\\",\\n      \\"AccessIp\\": \\"192.168.xx.xx\\",\\n      \\"Tables\\": \\"tpch.orders\\",\\n      \\"PatternCreationTime\\": \\"2021-11-12 03:06:00\\",\\n      \\"AverageQueryTime\\": 4,\\n      \\"MaxQueryTime\\": 2341,\\n      \\"AverageExecutionTime\\": 234.78,\\n      \\"MaxExecutionTime\\": 2142,\\n      \\"AveragePeakMemory\\": 234.22,\\n      \\"MaxPeakMemory\\": 234149,\\n      \\"AverageScanSize\\": 234149.23,\\n      \\"MaxScanSize\\": 234149,\\n      \\"QueryCount\\": 345,\\n      \\"FailedCount\\": 234,\\n      \\"Blockable\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLPatternsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <PatternDetails>\\n        <SQLPattern>SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)</SQLPattern>\\n        <PatternId>5575924945138******</PatternId>\\n        <User>reporter</User>\\n        <AccessIp>192.168.xx.xx</AccessIp>\\n        <Tables>tpch.orders</Tables>\\n        <PatternCreationTime>2021-11-12 03:06:00</PatternCreationTime>\\n        <AverageQueryTime>4</AverageQueryTime>\\n        <MaxQueryTime>2341</MaxQueryTime>\\n        <AverageExecutionTime>234.78</AverageExecutionTime>\\n        <MaxExecutionTime>2142</MaxExecutionTime>\\n        <AveragePeakMemory>234.22</AveragePeakMemory>\\n        <MaxPeakMemory>234149</MaxPeakMemory>\\n        <AverageScanSize>234149.23</AverageScanSize>\\n        <MaxScanSize>234149</MaxScanSize>\\n        <QueryCount>345</QueryCount>\\n        <FailedCount>234</FailedCount>\\n        <Blockable>true</Blockable>\\n    </PatternDetails>\\n    <RequestId>6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******</RequestId>\\n</DescribeSQLPatternsResponse>","errorExample":""}]',
      'title' => '查询SQL模式列表',
    ),
    'DescribePatternPerformance' => 
    array (
      'summary' => '调用DescribePatternPerformance接口查看指定时间段内SQL Pattern的各指标（如查询时间、平均内存消耗）详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'am-****************',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。

> - 仅支持查看最近14天内的数据。例如：当前日期为北京时间11月22日，最早可以查询到北京时间11月9日（UTC时间：2021-11-08T16:00:00Z)的数据，若查询时间早于11月9日（UTC时间：2021-11-08T16:00:00Z)，返回值为空。
> - 查询开始时间和查询结束时间的间隔不能大于24小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-18T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。
> 查询结束时间需晚于查询开始时间。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-11-18T18:05:00Z',
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
> 您可以调用[DescribeSQLPatterns](~~321868~~)接口查看指定时间内目标AnalyticDB MySQL集群下所有的SQL Pattern列表信息，包括SQL Pattern的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3847585356974******',
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
            'description' => '列表。',
            'type' => 'object',
            'properties' => 
            array (
              'EndTime' => 
              array (
                'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-11-18T18:05Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '210f47011634026610213529******',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                'type' => 'string',
                'example' => '2021-11-18T00:00Z',
              ),
              'Performances' => 
              array (
                'description' => '性能指标列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '查询的性能指标项。取值说明：
- **AnalyticDB_PatternQueryCount**：Pattern相关查询的总次数。
- **AnalyticDB_PatternQueryTime**：Pattern相关查询的总耗时。
- **AnalyticDB_PatternExecutionTime**：Pattern相关查询的执行耗时。
- **AnalyticDB_PatternPeakMemory**：Pattern相关查询的峰值内存。
- **AnalyticDB_PatternScanSize**：Pattern相关查询的数据读取量。',
                      'type' => 'string',
                      'example' => 'AnalyticDB_PatternQueryCount',
                    ),
                    'Unit' => 
                    array (
                      'description' => '性能指标项对应的单位。取值说明：
- 当性能指标项为查询时间相关（即`Key`值为`AnalyticDB_PatternQueryTime`或`AnalyticDB_PatternExecutionTime`）时，该返回值为**ms**。
- 当性能指标项为峰值内存相关（即`Key`值为`AnalyticDB_PatternPeakMemory`）时，该返回值为**MB**。
- 当性能指标项为数据读取量（即`Key`值为`AnalyticDB_PatternScanSize`）时，该返回值为**MB**。
- 当性能指标项为查询次数（即`Key`值为`AnalyticDB_PatternQueryCount`）时，该返回值为空。',
                      'type' => 'string',
                      'example' => 'ms',
                    ),
                    'Series' => 
                    array (
                      'description' => '性能指标项下各性能值的详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Values' => 
                          array (
                            'description' => '性能值列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '性能值。',
                              'type' => 'string',
                              'example' => '[               "2021-11-18 13:38:00",               "224"             ]',
                            ),
                          ),
                          'Name' => 
                          array (
                            'description' => '性能值名称。取值说明：
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
    - `max_scan_size`，即当前Pattern相关SQL的最大数据读取量。
',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-11-18T18:05Z\\",\\n  \\"RequestId\\": \\"210f47011634026610213529******\\",\\n  \\"StartTime\\": \\"2021-11-18T00:00Z\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_PatternQueryCount\\",\\n      \\"Unit\\": \\"ms\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[               \\\\\\"2021-11-18 13:38:00\\\\\\",               \\\\\\"224\\\\\\"             ]\\"\\n          ],\\n          \\"Name\\": \\"max_query_time\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePatternPerformanceResponse>\\n    <EndTime>2021-11-18T18:05Z</EndTime>\\n    <RequestId>210f47011634026610213529******</RequestId>\\n    <StartTime>2021-11-18T00:00Z</StartTime>\\n    <Performances>\\n        <Key>AnalyticDB_PatternQueryCount</Key>\\n        <Unit>ms</Unit>\\n        <Series>\\n            <Values>[               \\"2021-11-18 13:38:00\\",               \\"224\\"             ]</Values>\\n            <Name>max_query_time</Name>\\n        </Series>\\n    </Performances>\\n</DescribePatternPerformanceResponse>","errorExample":""}]',
      'title' => '查询模式性能',
    ),
    'EnableAdviceService' => 
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

> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1q10xxzq2z4****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
            'type' => 'string',
            'required' => true,
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'E1745C03-7CCE-55CF-932E-08121AAFA6AF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"E1745C03-7CCE-55CF-932E-08121AAFA6AF\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableAdviceServiceResponse>\\n    <Message>Success</Message>\\n    <RequestId>E1745C03-7CCE-55CF-932E-08121AAFA6AF</RequestId>\\n</EnableAdviceServiceResponse>","errorExample":""}]',
      'title' => '开通建议服务',
      'summary' => '用EnableAdviceService来开启建议服务。',
    ),
    'ApplyAdviceById' => 
    array (
      'summary' => '调用ApplyAdviceById接口应用一条优化建议。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf6g8w25jacm7****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'regionId',
            'description' => '地域ID。
> 您可以通过[DescribeRegions](~~143074~~)查看可用的地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AdviceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AdviceId',
            'description' => '建议ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0baf1f52-53df-487f-8292-99a03716****',
          ),
        ),
        3 => 
        array (
          'name' => 'AdviceDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AdviceDate',
            'description' => '建议生成的日期。格式：yyyyMMdd（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20221101',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Execution Status',
                'description' => '应用建议执行结果。取值说明：
- 请求正常，返回**SUCCESS**。 
- 请求异常，返回具体异常错误信息。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'SUCCESS' => 'SUCCESS',
                  '报错信息' => '报错信息',
                ),
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5DC10091-348D-12B1-906D-AB49D658012E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"5DC10091-348D-12B1-906D-AB49D658012E\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyAdviceByIdResponse>\\n    <Message>SUCCESS</Message>\\n    <RequestId>5DC10091-348D-12B1-906D-AB49D658012E</RequestId>\\n</ApplyAdviceByIdResponse>","errorExample":""}]',
      'title' => '应用优化建议',
    ),
    'BatchApplyAdviceByIdList' => 
    array (
      'summary' => '用BatchApplyAdviceByIdList接口批量应用多条优化建议。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf6g8w25jacm7****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'regionId',
            'description' => '地域ID，通过[DescribeRegions](~~143074~~)查看可用的地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AdviceIdList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待批量应用的建议ID列表，多个建议ID之间用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'c2589ff3-e86c-4f19-80c8-2aeb7dd9****,53414470-ebf4-4a53-a312-8a1ad8fd****,6e8dce84-fec8-4b0b-9c04-b0cea12c****,b3b9703d-55ca-47e0-96dd-6a4a9dbf****',
          ),
        ),
        3 => 
        array (
          'name' => 'AdviceDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AdviceDate',
            'description' => '建议生成的日期。格式：yyyyMMdd（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20221115',
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
              'Message' => 
              array (
                'title' => 'Execution Status',
                'description' => '批量应用建议执行结果。取值说明：
- 请求正常，返回**SUCCESS**。 
- 请求异常，返回具体异常错误信息。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '86F92D26-B774-5FA1-8E53-82CBEEEBB012',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"86F92D26-B774-5FA1-8E53-82CBEEEBB012\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchApplyAdviceByIdListResponse>\\n    <Message>SUCCESS</Message>\\n    <RequestId>86F92D26-B774-5FA1-8E53-82CBEEEBB012</RequestId>\\n</BatchApplyAdviceByIdListResponse>","errorExample":""}]',
      'title' => '批量应用优化建议',
    ),
    'DescribeAdviceServiceEnabled' => 
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-2ze0vp0j6t3to****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '调用结果的信息。取值说明：
- 请求正常，返回**Success**。 
- 请求异常，返回具体异常信息。',
                'type' => 'string',
                'example' => '[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E031AABF-BD56-5966-A063-4283EF18DB45',
              ),
              'Result' => 
              array (
                'title' => 'Advice Service Enabled',
                'description' => '建议服务是否开启。取值说明：
- 开启，返回**True**。 
- 关闭，返回**False**。',
                'type' => 'boolean',
                'example' => 'False',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****\\",\\n  \\"RequestId\\": \\"E031AABF-BD56-5966-A063-4283EF18DB45\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdviceServiceEnabledResponse>\\n    <Message>[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****</Message>\\n    <RequestId>E031AABF-BD56-5966-A063-4283EF18DB45</RequestId>\\n    <Result>false</Result>\\n</DescribeAdviceServiceEnabledResponse>","errorExample":""}]',
      'title' => '查询建议服务是否开启',
      'summary' => '用DescribeAdviceServiceEnabled来查询建议服务是否开启。',
    ),
    'DescribeAppliedAdvices' => 
    array (
      'summary' => '调用DescribeAppliedAdvices接口来显示已应用的优化建议。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '73895',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf6g8w25jacm7****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。
> 您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'StartTime',
            'description' => '查询建议的开始日期，格式为yyyyMMdd（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20220811',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'EndTime',
            'description' => '查询建议的结束日期，格式为yyyyMMdd（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20220824',
          ),
        ),
        4 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Lang',
            'description' => '设置建议的显示语言，取值说明：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageNumber',
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'AdviceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'SchemaTableName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'Order',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Items' => 
              array (
                'title' => 'Items',
                'description' => '详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '建议列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AdviceId' => 
                    array (
                      'title' => 'AdviceId',
                      'description' => '建议ID。',
                      'type' => 'string',
                      'example' => '7417db9c-914d-43f3-a123-4d0e448f****',
                    ),
                    'SubmitTime' => 
                    array (
                      'title' => 'SubmitTime',
                      'description' => '建议下发的时间，格式：yyMMddHHmm（UTC时间）。',
                      'type' => 'string',
                      'example' => '2208131600',
                    ),
                    'SubmitStatus' => 
                    array (
                      'title' => 'SubmitStatus',
                      'description' => '建议的下发状态。
取值说明：
- **SUCCEED**：成功。
- **FAILED**：失败。',
                      'type' => 'string',
                      'example' => 'SUCCEED',
                    ),
                    'SQL' => 
                    array (
                      'title' => 'SQL',
                      'description' => '应用建议的SQL语句。',
                      'type' => 'string',
                      'example' => 'alter table `schema1`.`table1` drop key col1_1_idx',
                    ),
                    'RollbackSQL' => 
                    array (
                      'title' => 'RollbackSQL',
                      'description' => '回滚建议的SQL语句。',
                      'type' => 'string',
                      'example' => 'alter table `schema1`.`table1` add key col1_1_idx(col1)',
                    ),
                    'JobStatus' => 
                    array (
                      'title' => 'JobStatus',
                      'description' => '执行建议的任务的状态。
取值说明：
- **SUCCEED**：成功。
- **FAILED**：失败。',
                      'type' => 'string',
                      'example' => 'SUCCEED',
                    ),
                    'Benefit' => 
                    array (
                      'title' => 'Benefit',
                      'description' => '建议的收益。',
                      'type' => 'string',
                      'example' => '节省0.4 GB的存储空间',
                    ),
                    'BuildSQL' => 
                    array (
                      'title' => 'Benefit',
                      'description' => '执行Build任务的SQL语句。',
                      'type' => 'string',
                      'example' => 'build table `schema1`.`table1`',
                    ),
                    'TotalCount' => 
                    array (
                      'title' => 'TotalCount',
                      'description' => '返回的建议总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'PageSize' => 
                    array (
                      'title' => 'PageSize',
                      'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30',
                    ),
                    'PageNumber' => 
                    array (
                      'title' => 'PageNumber',
                      'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SchemaName' => 
                    array (
                      'type' => 'string',
                    ),
                    'TableName' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
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
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '84489769-3065-5A28-A4CB-977CD426F1C3',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'SchemaTableNames' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"AdviceId\\": \\"7417db9c-914d-43f3-a123-4d0e448f****\\",\\n      \\"SubmitTime\\": \\"2208131600\\",\\n      \\"SubmitStatus\\": \\"SUCCEED\\",\\n      \\"SQL\\": \\"alter table `schema1`.`table1` drop key col1_1_idx\\",\\n      \\"RollbackSQL\\": \\"alter table `schema1`.`table1` add key col1_1_idx(col1)\\",\\n      \\"JobStatus\\": \\"SUCCEED\\",\\n      \\"Benefit\\": \\"节省0.4 GB的存储空间\\",\\n      \\"BuildSQL\\": \\"build table `schema1`.`table1`\\",\\n      \\"TotalCount\\": 1,\\n      \\"PageSize\\": 30,\\n      \\"PageNumber\\": 1,\\n      \\"SchemaName\\": \\"\\",\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"84489769-3065-5A28-A4CB-977CD426F1C3\\",\\n  \\"TotalCount\\": 1,\\n  \\"SchemaTableNames\\": [\\n    \\"\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAppliedAdvicesResponse>\\n    <Items>\\n        <AdviceId>7417db9c-914d-43f3-a123-4d0e448f****</AdviceId>\\n        <SubmitTime>2022-08-20T16:00:00Z</SubmitTime>\\n        <SubmitStatus>SUCCEED</SubmitStatus>\\n        <SQL>alter table `schema1`.`table1` drop key col1_1_idx</SQL>\\n        <RollbackSQL>alter table `schema1`.`table1` add key col1_1_idx(col1)</RollbackSQL>\\n        <JobStatus>SUCCEED</JobStatus>\\n        <Benefit>节省0.4GB空间</Benefit>\\n        <BuildSQL>build table `schema1`.`table1`</BuildSQL>\\n        <TotalCount>1</TotalCount>\\n        <PageSize>30</PageSize>\\n        <PageNumber>1</PageNumber>\\n    </Items>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <RequestId>84489769-3065-5A28-A4CB-977CD426F1C3</RequestId>\\n    <TotalCount>1</TotalCount>\\n</DescribeAppliedAdvicesResponse>","errorExample":""}]',
      'title' => '显示已采纳的优化',
    ),
    'DescribeAvailableAdvices' => 
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
        'abilityTreeCode' => '73942',
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp198m028ih55****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。
>您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'AdviceDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AdviceDate',
            'description' => '建议的生成日期，格式为yyyyMMdd（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '20221124',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Lang',
            'description' => '设置建议的显示语言，取值说明：
- **zh**：简体中文（默认语言）。
- **en**：英文。
- **ja**：日文。
- **zh-tw**：繁体中文。',
            'type' => 'string',
            'required' => true,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageNumber',
            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'AdviceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '建议的类型，取值说明：
- **INDEX**：索引优化。
- **TIERING**：冷热数据优化。',
            'type' => 'string',
            'required' => false,
            'example' => 'Index',
          ),
        ),
        7 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，支持根据表名模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'you_table_name',
          ),
        ),
        8 => 
        array (
          'name' => 'SchemaTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名和表名的字符串拼接。',
            'type' => 'string',
            'required' => false,
            'example' => 'tpch.lineitem',
          ),
        ),
        9 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：
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
            'example' => '[{\\"Field\\":\\"Benefit\\",\\"Type\\":\\"Desc\\"}]',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Items' => 
              array (
                'title' => 'Items',
                'description' => '详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '建议列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AdviceId' => 
                    array (
                      'title' => 'AdviceId',
                      'description' => '建议ID。',
                      'type' => 'string',
                      'example' => 'dcd04135-0925-4aed-a5a7-e7d92cb1****',
                    ),
                    'AdviceDate' => 
                    array (
                      'title' => 'AdviceDate',
                      'description' => '建议生成的时间，格式：yyyyMMdd（UTC时间）。',
                      'type' => 'string',
                      'example' => '20221124',
                    ),
                    'AdviceType' => 
                    array (
                      'title' => 'AdviceType',
                      'description' => '建议的类型，取值说明：
- **Index**：索引优化。
- **Tiering**：冷热数据优化。',
                      'type' => 'string',
                      'example' => 'Index',
                    ),
                    'SQL' => 
                    array (
                      'title' => 'SQL',
                      'description' => '应用建议的SQL语句。',
                      'type' => 'string',
                      'example' => 'alter table `schema1`.`table1` drop key col1_1_idx',
                    ),
                    'Reason' => 
                    array (
                      'title' => 'Reason',
                      'description' => '生成优化建议的原因。',
                      'type' => 'string',
                      'example' => '15天未使用，历史使用统计概率小于1%',
                    ),
                    'Benefit' => 
                    array (
                      'title' => 'Benefit',
                      'description' => '建议的收益。',
                      'type' => 'string',
                      'example' => '节省0.4 GB的存储空间。',
                    ),
                    'TotalCount' => 
                    array (
                      'title' => 'TotalCount',
                      'description' => '返回的建议总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30',
                    ),
                    'PageSize' => 
                    array (
                      'title' => 'PageSize',
                      'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30',
                    ),
                    'PageNumber' => 
                    array (
                      'title' => 'PageNumber',
                      'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SchemaName' => 
                    array (
                      'description' => '数据库名。',
                      'type' => 'string',
                      'example' => 'adb_demo',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名。',
                      'type' => 'string',
                      'example' => 'test_table',
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'title' => 'PageNumber',
                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => 'PageSize',
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96A55627-28E9-5E47-B8F6-D786BE551349',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'SchemaTableNames' => 
              array (
                'description' => '数据库名和表名的字符串拼接列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据库名和表名的字符串拼接。',
                  'type' => 'string',
                  'example' => '[
  "tpch.lineitem",
  "tpch.partsupp",
  "tpch.orders"
]',
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
            'errorCode' => 'MissingParameter.PageSize',
            'errorMessage' => 'The PageSize parameter is required.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"AdviceId\\": \\"dcd04135-0925-4aed-a5a7-e7d92cb1****\\",\\n      \\"AdviceDate\\": \\"20221124\\",\\n      \\"AdviceType\\": \\"Index\\",\\n      \\"SQL\\": \\"alter table `schema1`.`table1` drop key col1_1_idx\\",\\n      \\"Reason\\": \\"15天未使用，历史使用统计概率小于1%\\",\\n      \\"Benefit\\": \\"节省0.4 GB的存储空间。\\",\\n      \\"TotalCount\\": 30,\\n      \\"PageSize\\": 30,\\n      \\"PageNumber\\": 1,\\n      \\"SchemaName\\": \\"adb_demo\\",\\n      \\"TableName\\": \\"test_table\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"96A55627-28E9-5E47-B8F6-D786BE551349\\",\\n  \\"TotalCount\\": 30,\\n  \\"SchemaTableNames\\": [\\n    \\"[\\\\n  \\\\\\"tpch.lineitem\\\\\\",\\\\n  \\\\\\"tpch.partsupp\\\\\\",\\\\n  \\\\\\"tpch.orders\\\\\\"\\\\n]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableAdvicesResponse>\\n    <Items>\\n        <AdviceId>dcd04135-0925-4aed-a5a7-e7d92cb1****</AdviceId>\\n        <AdviceDate>20221124</AdviceDate>\\n        <AdviceType>Index</AdviceType>\\n        <SQL>alter table `schema1`.`table1` drop key col1_1_idx</SQL>\\n        <Reason>15天未使用，历史使用统计概率小于1%</Reason>\\n        <Benefit>节省0.4GB空间</Benefit>\\n        <TotalCount>30</TotalCount>\\n        <PageSize>30</PageSize>\\n        <PageNumber>1</PageNumber>\\n    </Items>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <RequestId>96A55627-28E9-5E47-B8F6-D786BE551349</RequestId>\\n    <TotalCount>30</TotalCount>\\n</DescribeAvailableAdvicesResponse>","errorExample":""}]',
      'title' => '显示可用优化建议',
      'summary' => '用DescribeAvailableAdvices来显示可用优化建议。',
    ),
    'DisableAdviceService' => 
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

> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-uf67culrr26q2****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以通过[DescribeRegions](~~143074~~)查看可用地域的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shanghai',
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
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '57EC6CCA-A582-572C-A33D-F61845CBC03C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"57EC6CCA-A582-572C-A33D-F61845CBC03C\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAdviceServiceResponse>\\n    <Message>Success</Message>\\n    <RequestId>57EC6CCA-A582-572C-A33D-F61845CBC03C</RequestId>\\n</DisableAdviceServiceResponse>","errorExample":""}]',
      'title' => '关闭建议服务',
      'summary' => '用DisableAdviceService来关闭建议服务。',
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
        0 => 'Perth',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1u8c0mgfg58****',
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
                'example' => '25B56BC7-4978-40B3-9E48-4B7067******',
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

> 计算公式为：热数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25B56BC7-4978-40B3-9E48-4B7067******\\",\\n  \\"Data\\": {\\n    \\"TotalSize\\": \\"8388608\\",\\n    \\"HotData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"ColdData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"DataGrowth\\": {\\n      \\"DayGrowth\\": 1048576,\\n      \\"WeekGrowth\\": 1048576\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看集群的空间概览',
      'summary' => '查看实例的空间概览信息，包括总数据量、热数据量、冷数据量、数据增长量等。',
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
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
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
            'description' => '需要查询的日期，格式为<i>yyyy-MM-dd</i>（UTC时间）。
> 仅支持查看30天内的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-08-30',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：
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
            'description' => '每页记录数，取值为任意正整数。默认为**30**。',
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
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C242707A-01D1-54DA-A5F6-671557******',
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
                'description' => '本页记录数。',
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
                      'example' => '2021-08-30',
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
                      'description' => '表名。',
                      'type' => 'string',
                      'example' => 'CUSTOMER',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '表所属集群的集群ID。',
                      'type' => 'string',
                      'example' => 'am-bp1r053byu48p****',
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
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C242707A-01D1-54DA-A5F6-671557******\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"ReportDate\\": \\"2021-08-30\\",\\n      \\"TableSchema\\": \\"tpch\\",\\n      \\"AccessCount\\": \\"6\\",\\n      \\"TableName\\": \\"CUSTOMER\\",\\n      \\"InstanceName\\": \\"am-bp1r053byu48p****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTableAccessCountResponse>\\n    <RequestId>C242707A-01D1-54DA-A5F6-671557******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <ReportDate>2021-08-30</ReportDate>\\n        <TableSchema>tpch</TableSchema>\\n        <AccessCount>6</AccessCount>\\n        <TableName>CUSTOMER</TableName>\\n        <InstanceName>am-bp1r053byu48p****</InstanceName>\\n    </Items>\\n</DescribeTableAccessCountResponse>","errorExample":""}]',
      'title' => '查询表访问统计信息',
      'summary' => '查看指定日期内AnalyticDB MySQL版集群下目标表或所有表的被访问次数。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的日期，格式为<i>yyyy-MM-dd</i>（UTC时间）。
> 仅支持查看30天内的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-08-30',
          ),
        ),
        1 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"Pattern","Type":"Asc"}]`。其中：
- `Field`表示排序字段。支持如下取值：
    - `Pattern`：SQL Pattern。
    - `AccessIP`：客户端IP。
    - `User`：用户名。
    - `QueryCount`：查询总数。
    - `AvgPeakMemory`：平均峰值内存，单位：KB。
    - `MaxPeakMemory`：最大峰值内存，单位：KB。
    - `AvgCpuTime`：平均计算耗时，单位：ms。
    - `MaxCpuTime`：最大计算耗时，单位：ms。
    - `AvgStageCount`：平均Stage个数。
    - `MaxStageCount`：最大Stage个数。
    - `AvgTaskCount`：平均Task个数。
    - `MaxTaskCount`：最大Task个数。
    - `AvgScanSize`：平均扫描量，单位：KB。
    - `MaxScanSize`：最大扫描量，单位：KB。

- `Type`表示排序方式。支持如下取值：
    - `Asc`：升序排序。
    - `Desc`： 降序排序。

> - 若不设置参数，默认按照`Pattern`字段升序排列。
> - 若需要按照`AccessIP`字段排序，则`Type`参数必须设置为`accessip`；若需要按照`User`字段排序，则`Type`参数必须留空或设置为`user`。',
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
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
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
            'description' => '按指定维度来聚合SQL Pattern。支持如下取值：
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
            'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值为任意正整数。默认为**30**。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'description' => '详情。',
            'type' => 'object',
            'properties' => 
            array (
              'PageSize' => 
              array (
                'description' => '本页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
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
              'Items' => 
              array (
                'description' => 'SQL Pattern详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AvgStageCount' => 
                    array (
                      'description' => '平均Stage个数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'MaxCpuTime' => 
                    array (
                      'description' => '最大计算耗时，单位：ms。',
                      'type' => 'string',
                      'example' => '17',
                    ),
                    'AccessIP' => 
                    array (
                      'description' => '客户端IP。
> 仅当`Type`参数设置为`accessip`时，支持返回该参数。',
                      'type' => 'string',
                      'example' => '100.104.***.***',
                    ),
                    'AvgScanSize' => 
                    array (
                      'description' => '平均扫描量，单位：KB。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'MaxScanSize' => 
                    array (
                      'description' => '最大扫描量，单位：KB。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'MaxPeakMemory' => 
                    array (
                      'description' => '最大峰值内存，单位：KB。',
                      'type' => 'string',
                      'example' => '480096',
                    ),
                    'AvgCpuTime' => 
                    array (
                      'description' => '平均计算耗时，单位：ms。',
                      'type' => 'string',
                      'example' => '1.0625',
                    ),
                    'User' => 
                    array (
                      'description' => '用户名。
> 仅当`Type`参数留空或设置为`user`时，支持返回该参数。',
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
                      'description' => '最大Task个数。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '集群ID。',
                      'type' => 'string',
                      'example' => 'am-bp1r053byu48p****',
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
                      'example' => '2021-08-30',
                    ),
                    'Pattern' => 
                    array (
                      'description' => 'SQL Pattern。',
                      'type' => 'string',
                      'example' => 'SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1',
                    ),
                    'AvgTaskCount' => 
                    array (
                      'description' => '平均Task个数。',
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
                'example' => 'B6F2D1B4-2C9F-5622-B424-5E7965******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"AvgStageCount\\": \\"2\\",\\n      \\"MaxCpuTime\\": \\"17\\",\\n      \\"AccessIP\\": \\"100.104.***.***\\",\\n      \\"AvgScanSize\\": \\"0\\",\\n      \\"MaxScanSize\\": \\"0\\",\\n      \\"MaxPeakMemory\\": \\"480096\\",\\n      \\"AvgCpuTime\\": \\"1.0625\\",\\n      \\"User\\": \\"test_acc\\",\\n      \\"AvgPeakMemory\\": \\"240048\\",\\n      \\"MaxStageCount\\": \\"2\\",\\n      \\"MaxTaskCount\\": \\"2\\",\\n      \\"InstanceName\\": \\"am-bp1r053byu48p****\\",\\n      \\"QueryCount\\": \\"16\\",\\n      \\"ReportDate\\": \\"2021-08-30\\",\\n      \\"Pattern\\": \\"SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1\\",\\n      \\"AvgTaskCount\\": \\"2\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B6F2D1B4-2C9F-5622-B424-5E7965******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSqlPatternResponse>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <AvgStageCount>2</AvgStageCount>\\n        <MaxCpuTime>17</MaxCpuTime>\\n        <AccessIP>100.104.***.***</AccessIP>\\n        <AvgScanSize>0</AvgScanSize>\\n        <MaxScanSize>0</MaxScanSize>\\n        <MaxPeakMemory>480096</MaxPeakMemory>\\n        <AvgCpuTime>1.0625</AvgCpuTime>\\n        <User>test_acc</User>\\n        <AvgPeakMemory>240048</AvgPeakMemory>\\n        <MaxStageCount>2</MaxStageCount>\\n        <MaxTaskCount>2</MaxTaskCount>\\n        <InstanceName>am-bp1r053byu48p****</InstanceName>\\n        <QueryCount>16</QueryCount>\\n        <ReportDate>2021-08-30</ReportDate>\\n        <Pattern>SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1</Pattern>\\n        <AvgTaskCount>2</AvgTaskCount>\\n    </Items>\\n    <RequestId>B6F2D1B4-2C9F-5622-B424-5E7965******</RequestId>\\n</DescribeSqlPatternResponse>","errorExample":""}]',
      'title' => '查询SQL模式',
      'summary' => '查看指定日期内AnalyticDB MySQL版集群下的SQL模板详情。',
    ),
    'DescribeVSwitches' => 
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
            'description' => '专有网络ID。

> 您可以调用[DescribeDBClusters](~~129857~~)接口查看专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp13h7uzhulpuxvnp****',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        3 => 
        array (
          'name' => 'VswId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-8vbpu1teend1qcosfojlz',
          ),
        ),
      ),
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
                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
              ),
              'VSwitches' => 
              array (
                'description' => '交换机列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'VSwitch' => 
                  array (
                    'description' => '交换机信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '交换机的状态，取值：
**Pending**：配置中。
**Available**：可用。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'IsDefault' => 
                        array (
                          'description' => '是否为默认交换机，取值：
**true**：是默认交换机。
**false**：不是默认交换机。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机的ID。',
                          'type' => 'string',
                          'example' => 'vsw-25bcdxs7pv1****',
                        ),
                        'CidrBlock' => 
                        array (
                          'description' => '交换机的IPv4网段。',
                          'type' => 'string',
                          'example' => '172.16.0.0/24',
                        ),
                        'RegionNo' => 
                        array (
                          'description' => '交换机所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '交换机的创建时间。',
                          'type' => 'string',
                          'example' => '2022-01-18T12:43:57Z',
                        ),
                        'AliUid' => 
                        array (
                          'description' => 'RAM账号ID。',
                          'type' => 'string',
                          'example' => '195813423043****',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '交换机的修改时间。',
                          'type' => 'string',
                          'example' => '2022-01-22T12:43:57Z',
                        ),
                        'Bid' => 
                        array (
                          'description' => '用户渠道ID。',
                          'type' => 'string',
                          'example' => '2****',
                        ),
                        'IzNo' => 
                        array (
                          'description' => '交换机所属的可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-k',
                        ),
                        'VSwitchName' => 
                        array (
                          'description' => '交换机的名称。',
                          'type' => 'string',
                          'example' => 'vswitch',
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
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"VSwitches\\": {\\n    \\"VSwitch\\": [\\n      {\\n        \\"Status\\": \\"Available\\",\\n        \\"IsDefault\\": false,\\n        \\"VSwitchId\\": \\"vsw-25bcdxs7pv1****\\",\\n        \\"CidrBlock\\": \\"172.16.0.0/24\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"GmtCreate\\": \\"2022-01-18T12:43:57Z\\",\\n        \\"AliUid\\": \\"195813423043****\\",\\n        \\"GmtModified\\": \\"2022-01-22T12:43:57Z\\",\\n        \\"Bid\\": \\"2****\\",\\n        \\"IzNo\\": \\"cn-hangzhou-k\\",\\n        \\"VSwitchName\\": \\"vswitch\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVSwitchesResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <VSwitches>\\n        <VSwitch>\\n            <Status>Available</Status>\\n            <IsDefault>false</IsDefault>\\n            <VSwitchId>vsw-25bcdxs7pv1****</VSwitchId>\\n            <CidrBlock>172.16.0.0/24</CidrBlock>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <GmtCreate>2022-01-18T12:43:57Z</GmtCreate>\\n            <AliUid>195813423043****</AliUid>\\n            <GmtModified>2022-01-22T12:43:57Z</GmtModified>\\n            <Bid>2****</Bid>\\n            <IzNo>cn-hangzhou-k</IzNo>\\n            <VSwitchName>vswitch</VSwitchName>\\n        </VSwitch>\\n    </VSwitches>\\n</DescribeVSwitchesResponse>","errorExample":""}]',
      'title' => '查询可组网信息',
      'summary' => '调用DescribeVSwitches接口查询交换机列表。',
    ),
    'MigrateDBCluster' => 
    array (
      'summary' => '调用MigrateDBCluster将AnalyticDB MySQL数仓版（3.0）迁移至AnalyticDB MySQL湖仓版（3.0）集群。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1xxxxxxxx47',
          ),
        ),
      ),
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
                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
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
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'The specified instance state does not support this operation.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\"\\n}","type":"json"}]',
      'title' => '迁移集群',
    ),
    'DescribeTableStatistics' => 
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
        0 => 'Perth',
      ),
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
        'abilityTreeCode' => '16754',
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

> 您可以调用[DescribeDBClusters](~~129857~~)接口查看集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp183qgrwywa6****',
          ),
        ),
        1 => 
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
            'maximum' => '100',
            'minimum' => '30',
            'example' => '30',
            'default' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0的正整数。默认值为**1**。',
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
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{ "Field":"TableName", "Type":"Asc" }]`。其中：
* `Field`表示需要排序的字段名。支持排序的字段包括：TableName、ColdDataSize、DataSize、PrimaryKeyIndexSize、RowCount、IndexSize、SchemaName、PartitionCount。
* `Type`表示排序类型，支持如下取值（取值均不区分大小写）：
    * **Desc**：降序。
    * **Asc**：升序。',
            'type' => 'string',
            'required' => false,
            'example' => '[ { "Field":"TableName", "Type":"Asc" } ]',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
            'default' => 'cn-shanghai',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，支持根据表名模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'you_table_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '1',
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
                'example' => '4C4433FF-5D3A-4C3E-A19C-6D93B2******',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'string',
                'example' => '1',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。',
                'type' => 'string',
                'example' => 'am-****************',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TableStatisticRecords' => 
                  array (
                    'description' => '表统计信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SchemaName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'test_schema',
                        ),
                        'TableName' => 
                        array (
                          'description' => '表名称。',
                          'type' => 'string',
                          'example' => 'test_table',
                        ),
                        'RowCount' => 
                        array (
                          'description' => '表行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
                        ),
                        'DataSize' => 
                        array (
                          'description' => '表记录数据量，单位：Byte。

> 表记录数据量，不包含普通索引、主键索引的数据。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '15592',
                        ),
                        'IndexSize' => 
                        array (
                          'description' => '普通索引数据量，单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3076',
                        ),
                        'PrimaryKeyIndexSize' => 
                        array (
                          'description' => '主键索引数据量，单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16340',
                        ),
                        'PartitionCount' => 
                        array (
                          'description' => '分区数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ColdDataSize' => 
                        array (
                          'description' => '冷数据总量，单位：Byte。
> 仅内核版本为3.1.3.4或以上集群才会返回该参数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'SpaceRatio' => 
                        array (
                          'description' => '表空间占比，单位：%。

> 计算公式为：表空间占比 = 表总数据量 / 实例总数据量 * 100。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '66.23',
                        ),
                        'TotalSize' => 
                        array (
                          'description' => '总数据量，单位：Byte。

> 总数据量的计算，以下2个公式都成立。计算公式1：总数据量 = 热数据量 + 冷数据量，计算公式2：总数据量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1577',
                        ),
                        'HotDataSize' => 
                        array (
                          'description' => '热数据量，单位：Byte。',
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
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"4C4433FF-5D3A-4C3E-A19C-6D93B2******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-****************\\",\\n  \\"Items\\": {\\n    \\"TableStatisticRecords\\": [\\n      {\\n        \\"SchemaName\\": \\"test_schema\\",\\n        \\"TableName\\": \\"test_table\\",\\n        \\"RowCount\\": 3,\\n        \\"DataSize\\": 15592,\\n        \\"IndexSize\\": 3076,\\n        \\"PrimaryKeyIndexSize\\": 16340,\\n        \\"PartitionCount\\": 1,\\n        \\"ColdDataSize\\": 0,\\n        \\"SpaceRatio\\": 66.23,\\n        \\"TotalSize\\": 1577,\\n        \\"HotDataSize\\": 1048576,\\n        \\"OtherSize\\": 1048576\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeTableStatisticsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>4C4433FF-5D3A-4C3E-A19C-6D93B2******</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-****************</DBClusterId>\\n    <Items>\\n        <TableStatisticRecords>\\n            <TableName>test_table</TableName>\\n            <ColdDataSize>0</ColdDataSize>\\n            <DataSize>15592</DataSize>\\n            <PrimaryKeyIndexSize>16340</PrimaryKeyIndexSize>\\n            <IndexSize>3076</IndexSize>\\n            <RowCount>3</RowCount>\\n            <PartitionCount>1</PartitionCount>\\n            <SchemaName>test_schema</SchemaName>\\n        </TableStatisticRecords>\\n    </Items>\\n</DescribeTableStatisticsResponse>","errorExample":""}]',
      'title' => '查询表统计信息',
      'summary' => '查询目标AnalyticDB MySQL集群中的表信息统计详情。',
      'description' => '> 更多关于表信息统计的详情，请参见[监控信息](~~188721~~)。',
    ),
    'ModifyResubmitConfig' => 
    array (
      'summary' => '修改Resubmit配置',
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
        1 => 
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
            'example' => 'am-uf6wjk5xxxxxxxxxx',
          ),
        ),
        2 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'GroupName' => 
                array (
                  'description' => '源资源组名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test2',
                ),
                'PeakMemory' => 
                array (
                  'description' => '峰值内存。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '32',
                ),
                'QueryTime' => 
                array (
                  'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '300',
                ),
                'ExceedMemoryException' => 
                array (
                  'description' => '是否配置内存溢出异常。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'TargetGroupName' => 
                array (
                  'description' => '目标资源组名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test_target_group',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
      'title' => '修改作业投递规则',
    ),
    'DescribeResubmitConfig' => 
    array (
      'summary' => '查询Resubmit配置',
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-4690g37929XXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-8vbyw9awuj141haf9',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 您可以调用[DescribeDBResourceGroup](~~459446~~)接口查看指定集群的资源组名称。',
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
                'example' => '8D217417-BBA7-566C-9B9D-FFCBC86112B0',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                'type' => 'string',
                'example' => 'am-8vbyw9awuj141haf9',
              ),
              'Rules' => 
              array (
                'description' => '规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PeakMemory' => 
                    array (
                      'description' => '峰值内存。',
                      'type' => 'string',
                      'example' => '32',
                    ),
                    'QueryTime' => 
                    array (
                      'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                      'type' => 'string',
                      'example' => '300',
                    ),
                    'TargetGroupName' => 
                    array (
                      'description' => '目标资源组名称。',
                      'type' => 'string',
                      'example' => 'test_target_group',
                    ),
                    'ExceedMemoryException' => 
                    array (
                      'description' => '是否配置内存溢出异常。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'GroupName' => 
                    array (
                      'description' => '源资源组名称。',
                      'type' => 'string',
                      'example' => 'test_group',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D217417-BBA7-566C-9B9D-FFCBC86112B0\\",\\n  \\"DBClusterId\\": \\"am-8vbyw9awuj141haf9\\",\\n  \\"Rules\\": [\\n    {\\n      \\"PeakMemory\\": \\"32\\",\\n      \\"QueryTime\\": \\"300\\",\\n      \\"TargetGroupName\\": \\"test_target_group\\",\\n      \\"ExceedMemoryException\\": false,\\n      \\"GroupName\\": \\"test_group\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询作业投递规则',
    ),
    'DescribeSQAConfig' => 
    array (
      'summary' => '调用DescribeSQAConfig接口查询集群小查询加速的配置。',
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
> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'example' => 'rg-4690g37929****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-8vbyw9awuj141haf9',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组名称。
> 您可以调用[DescribeDBResourceGroup](~~612410~~)接口查看指定集群的资源组信息，包括资源组名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test
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
                'example' => 'CBE843D8-964D-5EA3-9D31-822125611B6E',
              ),
              'DBClusterId' => 
              array (
                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域下AnalyticDB MySQL数仓版（3.0）集群ID。',
                'type' => 'string',
                'example' => 'am-8vbyw9awuj141haf9',
              ),
              'GroupName' => 
              array (
                'description' => '资源组名称。',
                'type' => 'string',
                'example' => 'test_group',
              ),
              'SQAStatus' => 
              array (
                'description' => '是否启用小查询加速。',
                'type' => 'string',
                'example' => 'off',
                'enum' => 
                array (
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CBE843D8-964D-5EA3-9D31-822125611B6E\\",\\n  \\"DBClusterId\\": \\"am-8vbyw9awuj141haf9\\",\\n  \\"GroupName\\": \\"test_group\\",\\n  \\"SQAStatus\\": \\"off\\"\\n}","type":"json"}]',
      'title' => '查询小查询加速配置',
    ),
    'ModifySQAConfig' => 
    array (
      'summary' => '修改SQA配置',
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
        1 => 
        array (
          'name' => 'DBClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-8vb369k7zxdt10tz0',
          ),
        ),
        2 => 
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
        3 => 
        array (
          'name' => 'SQAStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用小查询加速。',
            'type' => 'string',
            'required' => true,
            'example' => 'off',
            'enum' => 
            array (
              0 => 'on',
              1 => 'off',
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '494486CE-6F49-574E-B304-29127EA12E36',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"494486CE-6F49-574E-B304-29127EA12E36\\"\\n}","type":"json"}]',
      'title' => '修改作业投递规则',
    ),
    'DescribeDBClusterSSL' => 
    array (
      'summary' => '调用DescribeDBClusterSSL接口查询集群的SSL配置情况。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '220651',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsG383TB',
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
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1ub9grke1****',
          ),
        ),
      ),
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
                'example' => '348303D8-6F42-5141-9B00-A6EECA1E37B6',
              ),
              'ExpireTime' => 
              array (
                'description' => 'SSL 证书有效期。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                'type' => 'string',
                'example' => '2022-10-11T08:16:43Z',
              ),
              'ConnectionString' => 
              array (
                'description' => '受SSL保护的连接地址。',
                'type' => 'string',
                'example' => 'am-d7oualxo05x4o5be872***.ads.aliyuncs.com',
              ),
              'SSLEnabled' => 
              array (
                'description' => '是否开启SSL。
取值： 
- true：开启。
- false：关闭。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"348303D8-6F42-5141-9B00-A6EECA1E37B6\\",\\n  \\"ExpireTime\\": \\"2022-10-11T08:16:43Z\\",\\n  \\"ConnectionString\\": \\"am-d7oualxo05x4o5be872***.ads.aliyuncs.com\\",\\n  \\"SSLEnabled\\": true\\n}","type":"json"}]',
      'title' => '查询ADB实例的SSL配置',
    ),
    'ModifyDBClusterSSL' => 
    array (
      'summary' => '调用ModifyDBClusterSSL接口修改集群的SSL链路配置。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '216076',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREadsG383TB',
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
            'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。
>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1r053byu48p****',
          ),
        ),
        1 => 
        array (
          'name' => 'EnableSSL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭SSL，取值：

- true：开启
- false: 关闭',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'true' => 'true',
              'false' => 'false',
            ),
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要创建或更新服务器证书的内网或外网连接地址。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'am-d7oualxo05x4o5be872***.ads.aliyuncs.com',
          ),
        ),
      ),
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
      'title' => '修改ADB实例的SSL配置',
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
        'abilityTreeCode' => '209775',
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

> 您可以通过[DescribeDBClusters](~~129857~~)接口查看账号下AnalyticDB MySQL数仓版集群的集群ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'am-bp1u8c0mgfg58****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL数仓版（3.0）集群的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
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
            'example' => '2021-09-30T00:10Z',
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
            'example' => '2023-05-15T07:15Z',
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
            'example' => '20',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
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
            'description' => '设置建议的显示语言，取值说明：
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
            'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：
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
            'example' => '[{"Field":"TableName","Type":"Desc"}]',
          ),
        ),
      ),
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
                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '2147483647',
                'minimum' => '1',
                'example' => '1',
                'default' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数，取值：
- **30**（默认值）
- **50**
- **100**',
                'type' => 'integer',
                'format' => 'int32',
                'maximum' => '100',
                'minimum' => '10',
                'example' => '10',
                'default' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
              ),
              'DBClusterId' => 
              array (
                'description' => '集群ID。
> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                'type' => 'string',
                'example' => 'am-bp11q28kvl688****',
              ),
              'Tables' => 
              array (
                'description' => '表列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '检测结果列表',
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
                      'example' => '26',
                    ),
                    'PrimaryKeyCount' => 
                    array (
                      'description' => '主键字段个数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PrimaryKeyColumns' => 
                    array (
                      'description' => '主键字段列表。',
                      'type' => 'string',
                      'example' => 'id,date',
                    ),
                    'SpaceRatio' => 
                    array (
                      'description' => '表空间占比，单位：%。

> 计算公式为：表空间占比 = (表总数据量 / 实例总数据量) * 100。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '20',
                    ),
                    'TotalSize' => 
                    array (
                      'description' => '冷数据总量，单位：Byte。

> 计算公式为：冷数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1073741824',
                    ),
                    'PrimaryKeyIndexSize' => 
                    array (
                      'description' => '主键索引数据量，单位：Byte。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2345',
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
                      'description' => '检测项名。',
                      'type' => 'string',
                      'example' => '主键字段过多',
                    ),
                    'Message' => 
                    array (
                      'description' => '检测结果。',
                      'type' => 'string',
                      'example' => '检测到表存在主键过多的情况',
                    ),
                    'Status' => 
                    array (
                      'description' => '检测结果状态程度。',
                      'type' => 'string',
                      'example' => 'NORMAL
WARNING
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n  \\"Tables\\": [\\n    {\\n      \\"TableName\\": \\"test\\",\\n      \\"SchemaName\\": \\"adb_demo\\",\\n      \\"ColumnCount\\": 26,\\n      \\"PrimaryKeyCount\\": 1,\\n      \\"PrimaryKeyColumns\\": \\"id,date\\",\\n      \\"SpaceRatio\\": 20,\\n      \\"TotalSize\\": 1073741824,\\n      \\"PrimaryKeyIndexSize\\": 2345\\n    }\\n  ],\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"主键字段过多\\",\\n      \\"Message\\": \\"检测到表存在主键过多的情况\\",\\n      \\"Status\\": \\"NORMAL\\\\nWARNING\\\\nCRITICAL\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"{\\\\n    \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",\\\\n    \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"1906102576997697\\\\\\",\\\\n    \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"AQIBIAAAAOPdwKY2QLOvgMEc7SkkoJfj1kvZwsaRqNYMh10Tv0wTe0fCzaCdrvgazfNb0EnJKETgXyhR+3BIQjx9WAqZryejBsp1Bl4qI5En/D9dEhcXAtKCxCmE2kZCiEzpy8BoEUt+bs0DmlaGWO5xkEpttypLIB4rUhDvZd+zwPg4EXk4KSSWSWsurxtqDkKEMshKlQFBTKvJcNqPqHV6lwR4INiAGjIvK1ngXxN1O+6ORRB6A8YvztEOGywOk81ZmuNk0YrNy+qk7+UVDTHeXKsy8h9e/ePY/LMidj0RCmDpo/YpCumd0UGe0qEPe2U+UJAm/+UHlnEFLVg6BP3yIB5D++MCy7mgWm8Kwyhk62IeYly4hQ+5IpXjkh1GQXuDgLVVPVpxEek9n30vnCUL4KsaMgfa7dgojb+3TM8xGsD2zVK5STJNrsXclscIJEqyNXd7CBYiRJVZi1HPO6drN9WW0chLpCSTgjO8n0bNanZaxXKumW9PSwV58UoSFASeMWfZK3TLngX+oq8nGmnTwcJosVjfF4RGzAnS1IXt0Q9N2WHDnpwyLBU/nOz7Hsy8IZ+h+OVjsBTXSM9688/vOF707a5mNzpETvQeGRcua3A5livcKAM2cML0yeUs/Zyj/+BGqtVa+wektspDHC/CECh6R5lxQjRmUdPawY8VDs2onmdLuEH8DdmYt+Yv/jBFBUMWOyAluzkPYcX5nuQKouCIUJUFTSbsJsuH5CTIh7Ls5rbmkj+T1qTVz8gnDR8LxwaqoMSna+elXgVyOOxXtMkenVntsmoC3p/4G7yTPL1hu8JyWGIIvZHZGGLXGEH7FeSuMV8buKxPGFWG3arG8e9LGvDdz5dgTien4y6G5AQ0o1iQdXDos5VWdH3u7k5PrsvdEOpvMi6uSd8a42na80FsYlgGlwM5upydcWUC5Un2HCkJpT1xgk2L6shdVTrK6bidRrqE784FhW9bBQePzGaxSupPENZya0VUctRt+7uq3QwIn4y5jzjgX0E0jgmqPrgiVDjBesMQZYfGPCGysWYWYzfoh+G6V7N2VVGtNnGUwNWzM0WJBPONAgxPv+AmixFRCQ==\\\\\\",\\\\n    \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",\\\\n    \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"202515810214480629\\\\\\",\\\\n    \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",\\\\n    \\\\\\"AuthAction\\\\\\": \\\\\\"adb:DescribeExcessivePrimaryKeys\\\\\\"\\\\n  }\\"\\n}","type":"json"}]',
      'title' => '检测主键过多表',
      'summary' => '查看集群存在主键过多的表。',
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
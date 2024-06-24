<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dds',
    'version' => '2015-12-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 60507,
      'title' => '创建或克隆实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDBInstance',
        1 => 'CreateShardingDBInstance',
      ),
    ),
    1 => 
    array (
      'id' => 176614,
      'title' => '变更实例配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNode',
        1 => 'CreateNodeBatch',
        2 => 'DeleteNode',
        3 => 'ModifyDBInstanceSpec',
        4 => 'ModifyNodeSpec',
        5 => 'ModifyNodeSpecBatch',
        6 => 'ModifyDBInstanceDiskType',
      ),
    ),
    2 => 
    array (
      'id' => 60543,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteDBInstance',
        1 => 'ModifyDBInstanceMaintainTime',
        2 => 'ModifyDBInstanceDescription',
        3 => 'ModifyDBInstanceNetExpireTime',
        4 => 'UpgradeDBInstanceEngineVersion',
        5 => 'UpgradeDBInstanceKernelVersion',
        6 => 'SwitchDBInstanceHA',
        7 => 'RestartDBInstance',
        8 => 'DestroyInstance',
      ),
    ),
    3 => 
    array (
      'id' => 60607,
      'title' => '续费管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceAutoRenewalAttribute',
        1 => 'TransformInstanceChargeType',
        2 => 'DescribePrice',
        3 => 'DescribeRenewalPrice',
        4 => 'TransformToPrePaid',
        5 => 'RenewDBInstance',
      ),
    ),
    4 => 
    array (
      'id' => 60533,
      'title' => '查询实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeReplicaSetRole',
        1 => 'DescribeKernelReleaseNotes',
        2 => 'DescribeAvailableEngineVersion',
        3 => 'DescribeDBInstances',
        4 => 'DescribeDBInstanceSwitchLog',
        5 => 'DescribeDBInstanceAttribute',
        6 => 'DescribeRoleZoneInfo',
        7 => 'DescribeInstanceAutoRenewalAttribute',
        8 => 'DescribeActiveOperationTaskCount',
        9 => 'DescribeActiveOperationTasks',
        10 => 'DescribeActiveOperationTaskType',
        11 => 'DescribeDBInstancesOverview',
        12 => 'DescribeHistoryTasksStat',
        13 => 'DescribeHistoryTasks',
        14 => 'ModifyTaskInfo',
        15 => 'ModifyActiveOperationTasks',
      ),
    ),
    5 => 
    array (
      'id' => 60521,
      'title' => '资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAvailableResource',
        1 => 'EvaluateResource',
        2 => 'DescribeAvailabilityZones',
        3 => 'ModifyResourceGroup',
      ),
    ),
    6 => 
    array (
      'id' => 60517,
      'title' => '区域管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'MigrateToOtherZone',
        2 => 'MigrateAvailableZone',
      ),
    ),
    7 => 
    array (
      'id' => 60524,
      'title' => '连接管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceVpcAuthMode',
        1 => 'ModifyDBInstanceNetworkType',
        2 => 'ModifyDBInstanceConnectionString',
        3 => 'DescribeShardingNetworkAddress',
        4 => 'AllocatePublicNetworkAddress',
        5 => 'ReleasePublicNetworkAddress',
        6 => 'AllocateNodePrivateNetworkAddress',
        7 => 'ReleaseNodePrivateNetworkAddress',
      ),
    ),
    8 => 
    array (
      'id' => 60552,
      'title' => '标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'DescribeTags',
        2 => 'TagResources',
        3 => 'UntagResources',
      ),
    ),
    9 => 
    array (
      'id' => 60557,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'ResetAccountPassword',
        2 => 'ModifyAccountDescription',
        3 => 'DescribeAccounts',
      ),
    ),
    10 => 
    array (
      'id' => 60561,
      'title' => '白名单和安全组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifySecurityIps',
        1 => 'ModifySecurityGroupConfiguration',
        2 => 'DescribeSecurityIps',
        3 => 'DescribeSecurityGroupConfiguration',
        4 => 'ModifyGlobalSecurityIPGroup',
        5 => 'DescribeGlobalSecurityIPGroup',
        6 => 'ModifyGlobalSecurityIPGroupName',
        7 => 'DescribeGlobalSecurityIPGroupRelation',
        8 => 'CreateGlobalSecurityIPGroup',
        9 => 'ModifyGlobalSecurityIPGroupRelation',
        10 => 'DeleteGlobalSecurityIPGroup',
      ),
    ),
    11 => 
    array (
      'id' => 60566,
      'title' => '密钥',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBInstanceTDE',
        1 => 'CheckCloudResourceAuthorized',
        2 => 'DescribeUserEncryptionKeyList',
        3 => 'DescribeDBInstanceEncryptionKey',
        4 => 'DescribeDBInstanceTDEInfo',
        5 => 'DescribeKmsKeys',
      ),
    ),
    12 => 
    array (
      'id' => 60572,
      'title' => 'SSL加密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBInstanceSSL',
        1 => 'DescribeDBInstanceSSL',
      ),
    ),
    13 => 
    array (
      'id' => 60575,
      'title' => '审计日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyAuditLogFilter',
        1 => 'ModifyAuditPolicy',
        2 => 'DescribeAuditRecords',
        3 => 'DescribeAuditPolicy',
        4 => 'DescribeAuditLogFilter',
        5 => 'DescribeMongoDBLogConfig',
      ),
    ),
    14 => 
    array (
      'id' => 60582,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeSlowLogRecords',
        1 => 'DescribeErrorLogRecords',
        2 => 'DescribeRunningLogRecords',
      ),
    ),
    15 => 
    array (
      'id' => 60587,
      'title' => '性能监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDBInstanceMonitor',
        1 => 'DescribeDBInstancePerformance',
        2 => 'DescribeDBInstanceMonitor',
      ),
    ),
    16 => 
    array (
      'id' => 60591,
      'title' => '参数管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyParameters',
        1 => 'DescribeParameterModificationHistory',
        2 => 'DescribeParameterTemplates',
        3 => 'DescribeParameters',
      ),
    ),
    17 => 
    array (
      'id' => 60599,
      'title' => '备份与恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackup',
        1 => 'ModifyBackupPolicy',
        2 => 'DescribeBackupPolicy',
        3 => 'DescribeBackups',
        4 => 'DescribeBackupDBs',
        5 => 'CheckRecoveryCondition',
        6 => 'RestoreDBInstance',
        7 => 'TransferClusterBackup',
        8 => 'DescribeClusterBackups',
        9 => 'DescribeClusterRecoverTime',
        10 => 'DescribeBackupStorage',
        11 => 'DescribeBackupTasks',
        12 => 'DescribeInstanceRecoverTime',
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
    'CreateDBInstance' => 
    array (
      'summary' => '创建或克隆云数据库MongoDB版副本集实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '8241',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbOM9UA4',
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
            'description' => '地域ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询地域ID。
> 调用本接口克隆实例或者回收站恢复实例时，该参数值需和源实例保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        3 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，固定取值：**MongoDB**。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'MongoDB',
            'enum' => 
            array (
              0 => 'MongoDB',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号，取值：
- **7.0**
- **6.0**
- **5.0**
- **4.4**
- **4.2**
- **4.0**

> 调用本接口克隆实例或者回收站恢复实例时，该参数值需和源实例保持一致。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '4.4',
            'enum' => 
            array (
              0 => '4.0',
              1 => '4.2',
              2 => '4.4',
              3 => '5.0',
              4 => '6.0',
              5 => '7.0',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，您可以通过调用[DescribeAvailableResource](~~149719~~)接口查询实例规格。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds.mongo.standard',
          ),
        ),
        6 => 
        array (
          'name' => 'DBInstanceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例存储空间，单位：GB。

具体取值受实例规格约束，详情请参见[副本集实例规格表](~~311410~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，取值说明：

- 以中文、英文字母开头。
- 可以包含数字、中文、英文、下划线（_）和短横线（-）。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔，不可重复。支持如下三种格式：

- 0.0.0.0/0
- IP地址形式，例如：10.23.12.24。
- CIDR形式，例如：10.23.12.0/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。

> - 每个实例最多添加1000个IP或IP段，即所有IP白名单分组内的IP或IP段总和不能超过1000。
> - 0.0.0.0/0表示任何IP地址都可以访问实例的数据库，属于高危设置，请谨慎设置。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.xx.xx,192.168.xx.xx',
          ),
        ),
        9 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'root账号的密码，取值说明：

- 由大写字母、小写字母、数字和特殊字符中的至少三种组成。
- !#$%^&*()_+-=为特殊字符。
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123456Aa',
          ),
        ),
        10 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值说明：

- **PostPaid**：默认值，后付费（按量付费）。
- **PrePaid**：预付费（包年包月）。

> 当该参数的值为**PrePaid**时，您还需要配置**Period**参数。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'PrePaid',
            'default' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的购买时长，单位为月。

取值范围：**1**~**9**（整数）、**12**、**24**、**36**、**60**。

> 当**ChargeType**参数值为**PrePaid**时，该参数可用且为必填参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的网络类型，取值说明：

**VPC**：专有网络。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'VPC',
            'default' => 'VPC',
            'enum' => 
            array (
              0 => 'VPC',
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络（VPC）ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-bp175iuvg8nxqraf2****',
          ),
        ),
        14 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-bp1gzt31twhlo0sa5****',
          ),
        ),
        15 => 
        array (
          'name' => 'SrcDBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源实例ID。
> 调用本接口克隆实例时，您需要配置该参数，同时还需要配置**BackupId**或**RestoreTime**参数。调用本接口进行回收站恢复时，只需要传入该参数，无需配置**BackupId**或**RestoreTime**。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp1ee12ad351****',
          ),
        ),
        16 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份点ID，您可以通过调用[DescribeBackups](~~62172~~)接口查询备份点ID。
>只有调用本接口按备份点克隆实例时，您需要配置该参数，同时还需要配置**SrcDBInstanceId**参数。',
            'type' => 'string',
            'required' => false,
            'example' => '32994****',
          ),
        ),
        17 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '选择要恢复的时间点，您可以配置7天内的任意时间点。格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 只有调用本接口按时间点克隆实例时，您需要配置该参数，同时还需要配置**SrcDBInstanceId**参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-03-13T12:11:14Z',
          ),
        ),
        18 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        19 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例是否自动续费，取值说明：

- **true**：自动续费。
- **false**：默认值，不自动续费，即手动续费。

> 当**ChargeType**参数值为**PrePaid**时，该参数可用且为可选参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        20 => 
        array (
          'name' => 'DatabaseNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。
> 调用本接口克隆实例时，您可以通过配置该参数指定需要克隆的数据库，如果不配置该参数，则克隆实例的所有数据库。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodbtest',
          ),
        ),
        21 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        22 => 
        array (
          'name' => 'StorageEngine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储引擎，取值固定为**WiredTiger**。
> - 调用本接口克隆实例或回收站恢复实例时，该参数需和源实例保持一致。
> - 关于存储引擎与版本的选择约束，请参见[版本与存储引擎](~~61906~~)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'WiredTiger',
            'default' => 'WiredTiger',
            'enum' => 
            array (
              0 => 'WiredTiger',
              1 => 'RocksDB',
            ),
          ),
        ),
        23 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '副本集实例的**主备节点数**，取值：

- **3**（默认值）
- **5**
- **7**',
            'type' => 'string',
            'required' => false,
            'example' => '3',
            'default' => '3',
          ),
        ),
        24 => 
        array (
          'name' => 'ReadonlyReplicas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '副本集实例的**只读节点数**，取值范围：**0**~**5**（整数），默认值为**0**。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        25 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        26 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专属集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dhg-2x78****',
          ),
        ),
        27 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '存储类型，取值说明：

- **cloud_essd1**：ESSD PL1云盘。
- **cloud_essd2**：ESSD PL2云盘。
- **cloud_essd3**：ESSD PL3云盘。
- **cloud_auto**：ESSD AutoPL云盘。
- **local_ssd**：SSD本地盘。

> - ESSD AutoPL云盘目前仅支持中国站。
> - 4.4及以上版本实例默认为**cloud_essd1**。
> - 4.2及以下版本实例默认为**local_ssd**。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd1',
          ),
        ),
        28 => 
        array (
          'name' => 'SecondaryZoneId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '配置从节点（Secondary节点）所在的可用区，实现多可用区部署。取值说明：

- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：中国香港可用区B。
- **cn-hongkong-c**：中国香港可用区C。
- **cn-hongkong-d**：中国香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

> - 当**EngineVersion**参数值为**4.4**或**5.0**时，该参数可用且为必填参数。
> - 该参数取值不能与**ZoneId**和**HiddenZoneId**参数值相同。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        29 => 
        array (
          'name' => 'HiddenZoneId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '配置隐藏节点（Hidden节点）所在的可用区，实现多可用区部署。取值说明：

- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：中国香港可用区B。
- **cn-hongkong-c**：中国香港可用区C。
- **cn-hongkong-d**：中国香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

> - 当**EngineVersion**参数值为**4.4**或**5.0**时，该参数可用且为必填参数。
> - 该参数值不能与**ZoneId**和**SecondaryZoneId**参数值相同。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        30 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。
> - **N**表示传入第几个标签的键。例如：**Tag.1.Key**表示传入第一个标签的键；**Tag.2.Key**表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testdatabase',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
> **N**表示传入第几个标签的值。例如：**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'apitest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        31 => 
        array (
          'name' => 'GlobalSecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的全局IP白名单模板，多个IP白名单模板请用英文逗号（,）分隔，不可重复。（功能灰度中）',
            'type' => 'string',
            'required' => false,
            'example' => 'g-qxieqf40xjst1ngpr3jz	',
          ),
        ),
        32 => 
        array (
          'name' => 'Encrypted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启云盘加密',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'flase',
          ),
        ),
        33 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
          ),
        ),
        34 => 
        array (
          'name' => 'ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预配置性能（IOPS）。取值范围为0~50000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1960',
          ),
        ),
        35 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
              3 => '3',
            ),
          ),
        ),
        36 => 
        array (
          'name' => 'SrcRegion',
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
                'example' => 'D8F1D721-6439-4257-A89C-F1E8E9C9****',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'dds-bp144a7f2db8****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21077576248****',
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
            'errorCode' => 'SecurityRisk.AuthVerification',
            'errorMessage' => 'we have detected a risk with your default payment method. An email and notification has been sent to you. Please re-submit your order before after verificaiton.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'ORDER.ACCOUNT_INFORMATION_INCOMPLETE',
            'errorMessage' => 'Your information is incomplete. Complete your information before ordering.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidClientToken.Malformed',
            'errorMessage' => 'Specified parameter ClientToken is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDBInstanceDescription.Malformed',
            'errorMessage' => 'Specified parameter DBInstanceDescription is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidSecurityIPListLength.Malformed',
            'errorMessage' => 'The quota of security ip exceeds.',
          ),
          6 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceed.AfterpayInstance',
            'errorMessage' => 'Living afterpay instances quota exceeded.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceNotAvailable',
            'errorMessage' => 'Resource you requested is not available for finance user.',
          ),
          10 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'Request uses a client token in a previous request but is not identical to that request.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Malformed',
            'errorMessage' => 'The specified  parameter "SecurityIPList" is not valid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidSecurityIPList.Duplicate',
            'errorMessage' => 'The Security IP address is not in the available range or occupied.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidDBInstanceStorage.ValueNotSupported',
            'errorMessage' => 'The specified parameter DBInstanceStorage is not valid.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'Specified parameter AccountPassword is not valid.',
          ),
          15 => 
          array (
            'errorCode' => 'TokenServiceError',
            'errorMessage' => 'Duplicate ClientToken request.',
          ),
          16 => 
          array (
            'errorCode' => 'Zone.Closed',
            'errorMessage' => 'The specified zone is closed.',
          ),
          17 => 
          array (
            'errorCode' => 'PRICE.ORIGIN_PRICE_ERROR',
            'errorMessage' => 'The origin price error.',
          ),
          18 => 
          array (
            'errorCode' => 'NO_AVAILABLE_PAYMENT_METHOD',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidEcsImage.NotFound',
            'errorMessage' => 'Specified  ecs image does not exist.',
          ),
          20 => 
          array (
            'errorCode' => 'SaleValidateNoSpecificCodeFailed',
            'errorMessage' => 'Specified Storage or Version or InstanceClass is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'Trade_Not_Support_Async_Pay',
            'errorMessage' => 'Trade not support async pay.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'RealNameAuthenticationError',
            'errorMessage' => 'Your account has not passed the real-name authentication yet.',
          ),
          1 => 
          array (
            'errorCode' => 'RegionUnauthorized',
            'errorMessage' => 'There is no authority to create instance in the specified region.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The resource is out of usage.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEngineVersionInRegion.NotAvailable',
            'errorMessage' => 'The EngineVersion in the Region is not available.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidBackupLogStatus',
            'errorMessage' => 'Current backup log enable status does not support this operation.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectBackupSetState',
            'errorMessage' => 'Current backup set state does not support operations.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidBackup.NotFound',
            'errorMessage' => 'The available backup does not exist in recovery time.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8F1D721-6439-4257-A89C-F1E8E9C9****\\",\\n  \\"DBInstanceId\\": \\"dds-bp144a7f2db8****\\",\\n  \\"OrderId\\": \\"21077576248****\\"\\n}","type":"json"}]',
      'title' => '创建或克隆副本集实例',
      'description' => '请确保在使用该接口前，已充分了解云数据库MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

关于云数据库MongoDB实例的规格，请参见[实例规格表](~~57141~~)。

如需创建分片集群实例，您可以通过调用[CreateShardingDBInstance](~~61884~~)接口进行创建。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateShardingDBInstance' => 
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
        'abilityTreeCode' => '8247',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAPXG80',
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
            'description' => '地域ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询地域ID。',
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
            'description' => '可用区ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎。固定取值：**MongoDB**。',
            'type' => 'string',
            'required' => true,
            'example' => 'MongoDB',
            'enum' => 
            array (
              0 => 'MongoDB',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号，取值：

- **7.0**
- **6.0**
- **5.0**
- **4.4**
- **4.2**
- **4.0**

> - 关于存储引擎与版本的选择约束，请参见[版本与存储引擎](~~61906~~)。
> - 调用本接口克隆实例时，该参数值需和源实例保持一致。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '4.4',
            'enum' => 
            array (
              0 => '3.0',
              1 => '3.2',
              2 => '3.4',
              3 => '4.0',
              4 => '4.2',
              5 => '4.4',
              6 => '5.0',
              7 => '6.0',
              8 => '7.0',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，取值说明：
- 以中文、英文字母开头。
- 可以包含数字、中文、英文、下划线（_）和短横线（-）。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityIPList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的IP白名单，多个IP地址请用英文逗号（,）分隔，不可重复。支持如下三种格式：
- 0.0.0.0/0
- IP地址形式，例如：10.23.12.24。
- CIDR形式，例如：10.23.12.0/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。

> - 每个实例最多添加1000个IP或IP段，即所有IP白名单分组内的IP或IP段总和不能超过1000。
> - 0.0.0.0/0表示任何IP地址都可以访问实例的数据库，属于高危设置，请谨慎设置。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.xx.xx,192.168.xx.xx',
          ),
        ),
        6 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'root账号的密码，取值说明：
- 由大写字母、小写字母、数字、特殊字符中的至少三种组成。
- !#$%^&*()_+-=为特殊字符。
- 长度为8~32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123456Aa',
          ),
        ),
        7 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值说明：

- **PostPaid**：默认值，后付费（按量付费）。
- **PrePaid**：预付费（包年包月）。

> 当该参数的值为**PrePaid**时，您还需要配置**Period**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
            'default' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的购买时长，单位为月。

取值范围：**1**~**9**（整数）、**12**、**24**、**36**、**60**。
> 当**ChargeType**参数值为**PrePaid**时，该参数可用且为必填参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的网络类型，取值说明：

**VPC**：专有网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
            'default' => 'VPC',
            'enum' => 
            array (
              0 => 'VPC',
              1 => 'Classic',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络（VPC）ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-bp1n3i15v90el48nx****',
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-bp1vj604nj5a9zz74****',
          ),
        ),
        12 => 
        array (
          'name' => 'SrcDBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源实例ID。
>只有调用本接口克隆实例时，您需要配置该参数，同时还需要配置**RestoreTime**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp11483712c1****',
          ),
        ),
        13 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '选择要恢复的时间点，您可以配置7天内的任意时间点。格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
>只有调用本接口克隆实例时，您需要配置该参数，同时还需要配置**SrcDBInstanceId**参数。
',
            'type' => 'string',
            'required' => false,
            'example' => '2022-03-08T02:30:25Z',
          ),
        ),
        14 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        15 => 
        array (
          'name' => 'StorageEngine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储引擎，取值固定为**WiredTiger**。

> - 调用本接口克隆实例时，该参数需和源实例保持一致。
> - 关于存储引擎与版本的选择约束，请参见[版本与存储引擎](~~61906~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'WiredTiger',
            'default' => 'WiredTiger',
            'enum' => 
            array (
              0 => 'WiredTiger',
              1 => 'RocksDB',
            ),
          ),
        ),
        16 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例是否自动续费，取值说明：

- **true**：自动续费。
- **false**：默认值，不自动续费，即手动续费。

> 当**ChargeType**参数值为**PrePaid**时，该参数可用且为可选参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        17 => 
        array (
          'name' => 'ProtocolType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问协议的类型，取值说明：
- **mongodb**：MongoDB协议。
- **dynamodb**：DynamoDB协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodb',
            'default' => 'mongodb',
            'enum' => 
            array (
              0 => 'mongodb',
              1 => 'dynamodb',
            ),
          ),
        ),
        18 => 
        array (
          'name' => 'Mongos',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Mongos节点信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Mongos节点信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Class' => 
                array (
                  'description' => 'Mongos节点的规格，取值详情请参见[分片集群实例规格表](~~311414~~)。

> - 参数名中的**N**代表传入第几个Mongos节点的规格。例如，**Mongos.2.Class**表示传入第二个Mongos节点的规格。
> - **N**的取值范围为**2**~**32**。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'mdb.shard.2x.xlarge.d',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'maxItems' => 32,
          ),
        ),
        19 => 
        array (
          'name' => 'ReplicaSet',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Shard节点的信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Shard节点的信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Class' => 
                array (
                  'description' => 'Shard节点的规格，取值详情请参见[分片集群实例规格表](~~311414~~)。

> - 参数名中的**N**代表传入第几个Shard节点的规格。例如，**ReplicaSet.2.Class**表示传入第二个Shard节点的规格。
> - **N**的取值范围为**2**~**32**。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'dds.shard.standard',
                ),
                'Storage' => 
                array (
                  'description' => 'Shard节点的存储空间，单位为GB。

> - 具体取值受实例规格约束，取值详情请参见[分片集群实例规格表](~~311414~~)。
> - 参数名中的**N**代表的是传入第几个Shard节点的存储空间，例如：**ReplicaSet.2.Storage**表示传入第二个Shard节点的存储空间。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '10',
                ),
                'ReadonlyReplicas' => 
                array (
                  'description' => '设置Shard节点的只读节点个数。

取值范围：**0**~**5**（整数），默认值为**0**。
>参数名中的**N**代表设置第几个Shard节点中的只读节点个数。例如，**ReplicaSet.2.ReadonlyReplicas**表示设置第二个Shard节点的只读节点个数。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'maximum' => '5',
                  'minimum' => '0',
                  'example' => '0',
                  'default' => '0',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 32,
          ),
        ),
        20 => 
        array (
          'name' => 'ConfigServer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'ConfigServer节点的信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'ConfigServer节点的信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Class' => 
                array (
                  'description' => 'ConfigServer的规格，取值说明：
- **mdb.shard.2x.xlarge.d**：4核 8 GB（独享型），仅支持4.4及以上版本的实例。
- **dds.cs.mid**：1核 2 GB（通用型），仅支持4.2及以下版本的实例。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'mdb.shard.2x.xlarge.d',
                ),
                'Storage' => 
                array (
                  'description' => 'ConfigServer的存储空间，单位为GB。

>具体取值受实例规格约束，取值详情请参见[分片集群实例规格表](~~311414~~)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '20',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 32,
          ),
        ),
        21 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID，资源组详情请参见[查看资源组基本信息](~~151181~~)。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        22 => 
        array (
          'name' => 'SecondaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置备可用区1，实现多可用区部署。取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：中国香港可用区B。
- **cn-hongkong-c**：中国香港可用区C。
- **cn-hongkong-d**：中国香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。
>- 仅**EngineVersion**取值为**4.4**或**5.0**时，该参数可用且为必填参数。
- 该参数值不能与**ZoneId**和**HiddenZoneId**相同。
- 分片集群实例的多可用区部署策略，具体请参见[创建多可用区分片集群实例](~~117865~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        23 => 
        array (
          'name' => 'HiddenZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置备可用区2，实现多可用区部署。取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：中国香港可用区B。
- **cn-hongkong-c**：中国香港可用区C。
- **cn-hongkong-d**：中国香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

> - 仅**EngineVersion**取值为**4.4**或**5.0**时，该参数可用且为必填参数。
> - 该参数值不能与**ZoneId**和**SecondaryZoneId**相同。
> - 分片集群实例的多可用区部署策略，具体请参见[创建多可用区分片集群实例](~~117865~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        24 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '存储类型，取值说明： 

- **cloud_essd1**：ESSD PL1云盘。
- **cloud_essd2**：ESSD PL2云盘。
- **cloud_essd3**：ESSD PL3云盘。
-  **local_ssd**：SSD本地盘。

> - 4.4及以上版本实例只支持云盘，不填写默认选择**cloud_essd1**。
> - 4.2及以下版本实例只支持本地盘，不填写默认选择**local_ssd**。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_essd1',
          ),
        ),
        25 => 
        array (
          'name' => 'GlobalSecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的全局IP白名单模板，多个IP白名单模板请用英文逗号（,）分隔，不可重复。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-qxieqf40xjst1ngpr3jz	',
          ),
        ),
        26 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。
> - **N**表示传入第几个标签的键。例如：**Tag.1.Key**表示传入第一个标签的键；**Tag.2.Key**表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testdatabase',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
> **N**表示传入第几个标签的值。例如：**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'apitest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        27 => 
        array (
          'name' => 'Encrypted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启云盘加密',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        28 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义密钥ID。',
            'type' => 'string',
            'required' => false,
            'example' => '2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
          ),
        ),
        29 => 
        array (
          'name' => 'ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预配置IOPS',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1960',
          ),
        ),
        30 => 
        array (
          'name' => 'SrcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        31 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        32 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
            ),
          ),
        ),
        33 => 
        array (
          'name' => 'DestRegion',
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
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8F1D721-6439-4257-A89C-F1E8E9C9****',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'dds-bp114f14849d****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21010996721****',
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
            'errorCode' => 'SecurityRisk.AuthVerification',
            'errorMessage' => 'we have detected a risk with your default payment method. An email and notification has been sent to you. Please re-submit your order before after verificaiton.',
          ),
          1 => 
          array (
            'errorCode' => 'InvaliadParameter.ShardsCount.LessThanSrc',
            'errorMessage' => 'The specified number of shards is less than that of source instance.',
          ),
          2 => 
          array (
            'errorCode' => 'ORDER.ACCOUNT_INFORMATION_INCOMPLETE',
            'errorMessage' => 'Your information is incomplete. Complete your information before ordering.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRegion.Format',
            'errorMessage' => 'Specified Region is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'Zone.Closed',
            'errorMessage' => 'The specified zone is closed.',
          ),
          5 => 
          array (
            'errorCode' => 'TokenServiceError',
            'errorMessage' => 'The request token is duplicated.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Param not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Malformed',
            'errorMessage' => 'Specified engine version is not valid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidBackupLogStatus',
            'errorMessage' => 'Current backup log enable status does not support this operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke vpc service error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8F1D721-6439-4257-A89C-F1E8E9C9****\\",\\n  \\"DBInstanceId\\": \\"dds-bp114f14849d****\\",\\n  \\"OrderId\\": \\"21010996721****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateShardingDBInstanceResponse>\\n    <RequestId>D8F1D721-6439-4257-A89C-F1E8E9C9****</RequestId>\\n    <DBInstanceId>dds-bp114f14849d****</DBInstanceId>\\n    <OrderId>21010996721****</OrderId>\\n</CreateShardingDBInstanceResponse>","errorExample":""}]',
      'title' => '创建或克隆分片集群实例',
      'summary' => '创建或者克隆MongoDB分片集群实例。',
      'description' => '- 请确保在使用该接口前，已充分了解云数据库MongoDB的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

- 关于云数据库MongoDB实例的规格，请参见[实例规格表](~~57141~~)。
- 如果需要创建单节点实例和副本集实例，您可以通过调用[CreateDBInstance](~~61763~~)接口创建。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateNode' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp11501cd7b5****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Shard节点或Mongos节点的规格，规格详情请参见[实例规格表](~~57141~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds.shard.mid',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Node的磁盘空间，单位：GB。

取值范围：**10**~**2000**，步长为10 GB。

> 当节点类型为**Shard**时，需要配置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型，取值说明：
- **shard**：Shard节点。
- **mongos**：Mongos节点。',
            'type' => 'string',
            'required' => true,
            'example' => 'shard',
            'enum' => 
            array (
              0 => 'mongos',
              1 => 'shard',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        5 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费，取值说明：
- **true**：（默认值）自动付费，请确保账号有足够的余额。
- **false**：控制台手动付费。您可以单击控制台右上角的**费用**，进入**费用中心**页面，选择**订单管理**  > **我的订单**，在**订单列表**页面找到目标订单进行支付。

> 当付费类型为包年包月时，需要配置该参数。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'ReadonlyReplicas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置Shard节点中只读节点的个数。

取值范围：**0**~**5**（整数），默认值为**0**。
> 当前仅中国站支持本参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
            'example' => '5',
            'default' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        8 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        9 => 
        array (
          'name' => 'ShardDirect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否申请Shard节点直连地址，取值说明：

- **true**：申请Shard节点直连地址。
- **false**：（默认值）不申请Shard节点直连地址。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，取值说明：

- 以小写字母开头。
- 由小写字母、数字或下划线（_）组成。
- 长度为4~16个字符。

>- 云数据库MongoDB不支持使用关键字作为账号。
>- 账号的权限固定为只读权限。
>- 首次申请Shard节点直连地址时，需要设置账号和密码，后续申请无需再次设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ceshi',
          ),
        ),
        11 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号密码，取值说明：
- 由大写字母、小写字母、数字、特殊字符中的至少三种组成。
- !@#$%^&*()_+-=为特殊字符。
- 长度为8~32个字符。

>云数据库MongoDB不支持重置Shard节点的账号密码。',
            'type' => 'string',
            'required' => false,
            'example' => '123+abc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D48FB19-20CA-4725-A870-3D8F5CE6****',
              ),
              'NodeId' => 
              array (
                'description' => '节点ID。',
                'type' => 'string',
                'example' => 'd-bp1b234bf7a4****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '20951063702****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7D48FB19-20CA-4725-A870-3D8F5CE6****\\",\\n  \\"NodeId\\": \\"d-bp1b234bf7a4****\\",\\n  \\"OrderId\\": \\"20951063702****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateNodeResponse>\\n    <RequestId>7D48FB19-20CA-4725-A870-3D8F5CE6****</RequestId>\\n    <NodeId>d-bp1b234bf7a4****</NodeId>\\n    <OrderId>20951063702****</OrderId>\\n</CreateNodeResponse>","errorExample":""}]',
      'title' => '新增Shard节点或Mongos节点',
      'summary' => '为云数据库MongoDB分片集群实例添加Shard节点或Mongos节点。',
      'description' => '请确保在使用该接口前，已充分了解MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

该接口仅适用于分片集群实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateNodeBatch' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        1 => 
        array (
          'name' => 'FromApp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求来源，取值说明：
- **OpenApi**：请求来源为OpenAPI。
- **mongo_buy**：请求来源为控制台。',
            'type' => 'string',
            'required' => false,
            'example' => 'OpenApi',
            'default' => 'OpenApi',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费，取值说明：

- **true**：（默认值）自动付费，请确保账号有足够的余额。
- **false**：手动付费。具体操作为：登录云数据库MongoDB控制台，在页面右上角选择**费用** > **用户中心**，在左侧导航栏，选择订单管理，在订单管理页面找到目标实例进行支付。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要添加节点的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp18b0934e70****',
          ),
        ),
        4 => 
        array (
          'name' => 'NodesInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '添加Mongos节点或Shard节点的规格信息。具体规格，请参见[实例规格表](~~57141~~)。

> 分片集群实例默认最多支持32个Mongos节点和32个Shard节点。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Shards":[{"DBInstanceClass":"mdb.shard.4x.large.d","Storage":20}]}',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        6 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        7 => 
        array (
          'name' => 'ShardDirect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否申请Shard节点直连地址，取值说明：

- **true**：申请Shard节点直连地址。
- **false**：（默认值）不申请Shard节点直连地址。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，取值说明：

- 以小写字母开头。
- 由小写字母、数字或下划线（_）组成。
- 长度为4~16个字符。

> - 云数据库MongoDB不支持使用关键字作为账号。
> - 账号的权限固定为只读权限。
> - 首次申请Shard节点直连地址时，需要设置账号和密码，后续申请无需再次设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'ceshi',
          ),
        ),
        9 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号密码，取值说明：
- 由大写字母、小写字母、数字、特殊字符中的至少三种组成。
- !@#$%^&*()_+-=为特殊字符。
- 长度为8~32个字符。

>云数据库MongoDB不支持重置Shard节点的账号密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'PassWord123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '55D41A94-1ACE-55E8-8BC7-67D622E7****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '50179021707****',
              ),
              'NodeId' => 
              array (
                'description' => '新增的Mongos节点或Shard节点ID。',
                'type' => 'string',
                'example' => 'd-bp18f7d6b6a7****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55D41A94-1ACE-55E8-8BC7-67D622E7****\\",\\n  \\"OrderId\\": \\"50179021707****\\",\\n  \\"NodeId\\": \\"d-bp18f7d6b6a7****\\"\\n}","type":"json"}]',
      'title' => '批量创建节点',
      'summary' => '为云数据库MongoDB分片集群实例批量添加Mongos节点、Shard节点。',
      'description' => '请确保在使用该接口前，已充分了解云数据库MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

该接口仅适用于云数据库MongoDB分片集群实例。',
    ),
    'DeleteNode' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的Shard节点ID或Mongos节点ID，您可以通过[DescribeDBInstanceAttribute](~~61923~~)接口查询节点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
          ),
        ),
      ),
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
                'example' => '111111111',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9F9BDE64-BF30-41F3-BD29-C19CE4AB3404',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '111111111111111',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 111111111,\\n  \\"RequestId\\": \\"9F9BDE64-BF30-41F3-BD29-C19CE4AB3404\\",\\n  \\"OrderId\\": \\"111111111111111\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>111111111</TaskId>\\n<RequestId>04BDBD93-3B59-496C-8B5E-7FF158E10C5C</RequestId>\\n<OrderId>111111111111111</OrderId>","errorExample":""}]',
      'title' => '删除分片集群实例中的节点',
      'summary' => '删除MongoDB分片集群实例中的Shard节点或Mongos节点。',
      'description' => '调用本接口时，实例必须满足以下条件： 
- 实例状态为运行中。
- 实例类型为分片集群实例。
- 实例付费类型为按量付费。
- 实例中Shard节点或Mongos节点的数量必须大于2。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceSpec' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1ea17b41ab****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。<props="intl"><ph>详情请参见[实例规格表](~~57141~~)。您也可以通过调用[DescribeAvailableResource](~~149719~~)接口查看实例规格。</ph></props>
<props="china">
- 单节点实例和副本集实例配置为实例的规格，详情请参见[实例规格表](~~57141~~)。您也可以调用[DescribeAvailableResource](~~149719~~)接口查看单节点实例和副本集实例的实例规格。
- Serverless实例配置为实例的计算规格，取值范围为100~8000。

</props>

>  该参数和**DBInstanceStorage**参数两者中至少配置一项。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.sn4.xlarge.1',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储空间。<props="intl"><ph>取值范围为10~3000 GB，步长为10 GB。具体取值受实例规格约束，详情请参见[实例规格表](~~57141~~)。</ph></props>

<props="china">
- 单节点实例和副本集实例存储空间的取值范围为10~3000 GB，步长为10 GB。具体取值受实例规格约束，详情请参见[实例规格表](~~57141~~)。
- Serverless实例存储空间的取值范围1~100 GB，步长为1 GB。
</props>

> - 该参数和**DBInstanceClass**参数两者中至少配置一项。
> - 目前不支持降配存储空间。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配类型，取值说明：
- **UPGRADE**：升级配置。
- **DOWNGRADE**：默认值，降级配置。

> 当实例付费方式为包年包月时，可以配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'UPGRADE',
            'default' => 'UPGRADE',
            'enum' => 
            array (
              0 => 'UPGRADE',
              1 => 'DOWNGRADE',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例是否自动付费，取值说明：
- **true**：默认值，自动付费，请确保账号有足够的余额。
- **false**：控制台手动付费。您可以登录云数据库MongoDB控制台，在页面右上角选择**费用** > **用户中心**，在左侧导航栏，选择**订单管理**>**我的订单**，在**商品订单**页面找到目标订单进行支付。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        6 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例的节点个数。
- 副本集实例取值为**3**，**5**，**7**。
- 单节点实例取值固定为**1**。
- 共享存储版副本集实例（仅支持中国站）取值固定为**2**。

> Serverless实例（仅支持中国站）不需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
            'default' => '3',
            'enum' => 
            array (
              0 => '1',
              1 => '3',
              2 => '5',
              3 => '7',
              4 => '2',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'ReadonlyReplicas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '只读节点的个数，取值范围为**0**~**5**。

如果实例的网络类型只开通了**经典网络**和**专有网络**，您需要开通公网或释放经典网络，才能变更**只读节点数**。
>您可以登录云数据库MongoDB控制台，在**数据库连接**页面查看已开通的网络类型。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        9 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更配置的生效时间，取值说明：
- **Immediately**：默认值，立即生效。
- **MaintainTime**：在实例的可运维时间段内生效。
',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
              2 => '0',
              3 => '1',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'ExtraParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，取值说明：

- **async**：变配订单创建后返回结果。
- **sync**：变配订单创建后实例变配下发时返回结果。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'async' => 'async',
              'sync' => 'sync',
            ),
            'example' => 'async',
            'default' => 'async',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E9F1104-19E7-59F0-AB7F-F4EBFDEA****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21012408824****',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameters DBInstanceClass and DBInstanceStorage all blank or no change.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.ValueNotSupported',
            'errorMessage' => 'The specified  parameter DBInstanceClass is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDBInstanceStorage.ValueNotSupported',
            'errorMessage' => 'The specified  parameter DBInstanceStorage is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'LX_REQUEST_TOKEN_CONFLICT',
            'errorMessage' => 'The request token is conflict.',
          ),
          4 => 
          array (
            'errorCode' => 'TradeConfirmPayError',
            'errorMessage' => 'BIZ_ERROR - degrade refund error',
          ),
          5 => 
          array (
            'errorCode' => 'PRICE.ORIGIN_PRICE_ERROR',
            'errorMessage' => 'Origin lingxiao price request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'The resource is out of usage.',
          ),
          1 => 
          array (
            'errorCode' => 'InvaildDBInstanceClassInRegion.NotAvailable',
            'errorMessage' => 'The DBInstanceClass in the Region is not available.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E9F1104-19E7-59F0-AB7F-F4EBFDEA****\\",\\n  \\"OrderId\\": \\"21012408824****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceSpecResponse>\\n    <RequestId>1E9F1104-19E7-59F0-AB7F-F4EBFDEA****</RequestId>\\n    <OrderId>21012408824****</OrderId>\\n</ModifyDBInstanceSpecResponse>","errorExample":""}]',
      'title' => '变更单节点或副本集实例的规格或存储空间',
      'summary' => '变更云数据库MongoDB单节点实例、副本集实例和Serverless实例（仅中国站支持Serverless实例）的规格或存储空间。',
      'description' => '请确保在使用该接口前，已充分了解MongoDB产品的收费方式和和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

该接口仅适用于云数据库MongoDB<props="china"><ph>单节点实例、副本集实例和Serverless实例</ph></props><props="intl"><ph>单节点实例和副本集实例</ph></props>。如需变更分片集群实例的配置，您可以根据需求通过调用[ModifyNodeSpec](~~61923~~)、[CreateNode](~~61911~~)、[DeleteNode](~~61922~~)或[ModifyNodeSpecBatch](~~61816~~)接口来实现。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyNodeSpec' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1c0b990184****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点ID或Mongos节点ID，您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。

> 当传入的值为Shard节点ID时，还需要传入**NodeStorage**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 's-bp143e1b1637****',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Shard节点或Mongos节点的规格，规格详情请参见[实例规格表](~~57141~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'dds.mongos.standard',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Shard节点的存储空间，步长为10，单位：GB。

- SSD本地盘，取值范围：**10**~**2000**。
- ESSD PL1云盘，取值范围：**20**~**16000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        5 => 
        array (
          'name' => 'FromApp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求来源，取值说明：
- **OpenApi**：请求来源为OpenApi。
- **mongo_buy**：请求来源为控制台。',
            'type' => 'string',
            'required' => false,
            'example' => 'OpenApi',
            'default' => 'OpenApi',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费，取值说明：
- **true**（默认值）：自动付费，请确保账号有足够的余额。
- **false**：手动付费。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更配置的生效时间，取值说明： 
- **Immediately**（默认值）：立即生效。
- **MaintainTime**：实例可运维时间段内生效。 
',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'Immediately',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
              2 => '0',
              3 => '1',
              4 => 'TimePoint',
              5 => '2',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更配置的执行时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-05T03:18:53Z',
          ),
        ),
        9 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，取值说明：
- **UPGRADE**：升配。
- **DOWNGRADE**：降配 。',
            'type' => 'string',
            'required' => false,
            'example' => 'UPGRADE',
            'default' => 'UPGRADE',
            'enum' => 
            array (
              0 => 'UPGRADE',
              1 => 'DOWNGRADE',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'ReadonlyReplicas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调整Shard节点中只读节点的个数。

取值范围：**0**~**5**（整数），默认值：**0**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        11 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        12 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'default',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '61B05CCF-EBAB-4BF3-BA67-D77256A721E2',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21084641369****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"61B05CCF-EBAB-4BF3-BA67-D77256A721E2\\",\\n  \\"OrderId\\": \\"21084641369****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyNodeSpecResponse>\\n    <RequestId>61B05CCF-EBAB-4BF3-BA67-D77256A721E2</RequestId>\\n    <OrderId>21084641369****</OrderId>\\n</ModifyNodeSpecResponse>","errorExample":""}]',
      'title' => '变更分片集群实例中节点的规格和存储空间',
      'summary' => '变更MongoDB分片集群实例中节点的规格和存储空间。',
      'description' => '请确保在使用该接口前，您已充分了解MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

> 该接口仅适用于分片集群实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyNodeSpecBatch' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
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
            'description' => '需要进行变更配置的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1337621e8f****',
          ),
        ),
        2 => 
        array (
          'name' => 'NodesInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要变配的Mongos节点、Shard节点的规格信息。具体规格请参见[实例规格表](~~57141~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Shards":[{"DBInstanceClass":"dds.shard.mid","DBInstanceName":"d-bp14ae4572fd****","Storage":20},{"DBInstanceClass":"dds.shard.mid","DBInstanceName":"d-bp19f4f92dc5****","Storage":30}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：
- **true**：自动付费，请确保账号有足够的余额。
- **false**：手动付费。具体操作为：登录云数据库MongoDB控制台，在页面右上角选择**费用** > **用户中心**，在左侧导航栏，选择**订单管理**，在**订单管理**页面找到目标实例进行支付。

默认值为**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更配置的生效时间，取值：

- **Immediately**：立即生效。
- **MaintainTime**：在实例的可维护时间段内生效。

> - 您可以调用接口[ModifyDBInstanceMaintainTime](~~62008~~)修改实例的可维护时间段。
> - 您可以调用接口[DescribeDBInstanceAttribute](~~62010~~)查看实例可维护时间段时间。

默认为**Immediately**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'Immediately',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配类型，取值：

- **UPGRADE**：升级配置。
- **DOWNGRADE**：降级配置。

> 当实例付费方式为包年包月时，该参数可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'UPGRADE',
            'default' => 'UPGRADE',
            'enum' => 
            array (
              0 => 'UPGRADE',
              1 => 'DOWNGRADE',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        8 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
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
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21012719476****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0637BC25-6895-5500-871F-1127CA34****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"21012719476****\\",\\n  \\"RequestId\\": \\"0637BC25-6895-5500-871F-1127CA34****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyNodeSpecBatchResponse>\\n    <RequestId>0637BC25-6895-5500-871F-1127CA34****</RequestId>\\n    <OrderId>21012719476****</OrderId>\\n</ModifyNodeSpecBatchResponse>","errorExample":""}]',
      'title' => '批量修改节点规格',
      'summary' => '变更云数据库MongoDB分片集群实例中一个或多个Mongos节点、Shard节点的配置。',
      'description' => '请确保在使用该接口前，已充分了解云数据库MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

 该接口仅适用于云数据库MongoDB分片集群实例。

对多个分片集群实例进行批量升降配操作时，目标规格会受到一定的约束，例如存储空间扩容，目标容量需大于等于当前容量。当多个分片集群实例规格不一致的时候，会随机选择一个分片集群实例的规格去构造约束条件，可能出现无法升降配的情况。
如果遇到无法正常进行批量升降配的情况，建议选择使用ModifyNodeSpec接口对单个分片集群实例进行变配。',
    ),
    'ModifyDBInstanceDiskType' => 
    array (
      'summary' => '修改云数据库 MongoDB 版的磁盘类型。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'high',
        'chargeType' => 'paid',
        'abilityTreeCode' => '189925',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAPXG80',
          1 => 'FEATUREmongodbOM9UA4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbInstanceStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的磁盘类型，取值：
- **cloud_auto**：ESSD AutoPL 云盘。
- **cloud_essd1**：ESSD PL1 云盘。
- **cloud_essd2**：ESSD PL2 云盘。
- **cloud_essd3**：ESSD PL3 云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_auto',
            'default' => 'cloud_auto',
          ),
        ),
        1 => 
        array (
          'name' => 'ProvisionedIops',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预配置性能（IOPS）。取值范围为 0~50000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '50000',
            'minimum' => '0',
            'example' => '1960',
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
            'example' => 'dds-bp1fa5efaa93****',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：
- **true**：自动付费，请确保账号有足够的余额。
- **false**：控制台手动付费。具体操作为：登录控制台，在页面右上角选择**费用**>**用户中心**，在**订单管理**找到目标订单进行支付。

默认值为：**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 优惠码，默认为`youhuiquan_promotion_option_id_for_blank`。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'async',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值说明：
- **true**：开启自动续费。
- **false**：不开启自动续费。

默认值为 **false**',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配类型，取值：

- **UPGRADE**：升级配置。
- **DOWNGRADE**：降级配置。

> 当实例付费方式为包年包月时，该参数可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'UPGRADE',
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
                'example' => 'D8F1D721-6439-4257-A89C-F1E8E9C9****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21012719476****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8F1D721-6439-4257-A89C-F1E8E9C9****\\",\\n  \\"OrderId\\": \\"21012719476****\\"\\n}","type":"json"}]',
      'title' => '修改实例磁盘类型',
      'description' => '- 磁盘空间小于40GB，不支持此功能。
- 只支持变配至cloud_auto云盘类型。',
    ),
    'DeleteDBInstance' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '72651AF9-7897-41A7-8B67-6C15C7F26A0A',
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
            'errorCode' => 'ChargeTypeViolation',
            'errorMessage' => 'The operation is not permitted due to charge type of the instance. ',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceReleaseProtection',
            'errorMessage' => 'The operation is not permitted due to instance release protection.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72651AF9-7897-41A7-8B67-6C15C7F26A0A\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteDBInstanceResponse>\\r\\n\\t<RequestId>72651AF9-7897-41A7-8B67-6C15C7F26A0A</RequestId>\\r\\n</DeleteDBInstanceResponse>","errorExample":""}]',
      'title' => '删除数据库实例',
      'summary' => '释放MongoDB实例。',
      'description' => '调用该接口时，实例必须满足以下条件。 

- 实例状态为运行中；
- 实例付费类型为按量付费。

> 实例释放后数据将无法找回，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceMaintainTime' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpac2345****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例可运维时间段的开始时间，格式为<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '01:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'MaintainEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例可运维时间段的结束时间，格式为<i>HH:mm</i>Z（UTC时间）。

> 可运维时间段的结束时间需晚于可运维时间段的开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '02:00Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9310426-C763-42A2-A3AD-70A8DA204531',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A9310426-C763-42A2-A3AD-70A8DA204531\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceMaintainTimeResponse>\\n    <RequestId>A9310426-C763-42A2-A3AD-70A8DA204531</RequestId>\\n</ModifyDBInstanceMaintainTimeResponse>","errorExample":""}]',
      'title' => '修改实例的可维护时间',
      'summary' => '修改MongoDB实例的可维护时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceDescription' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 如需修改分片集群实例中的Shard节点或Mongos节点的名称，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2234****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点ID或Mongos节点ID。

> 当**DBInstanceId**传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp89067****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。

> - 不能以`http://`或`https://`开头。
> - 以中文、英文字母开头。
> - 可以包含中文、英文字符、下划线（_）、短划线（-）和数字，字符长度2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdata',
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
                'example' => '06F8F642-4009-4FFC-80C4-9D67DBF7B74E',
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
            'errorCode' => 'InvalidDBInstanceDescription.Malformed',
            'errorMessage' => 'Specified parameter DBInstanceDescription is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"06F8F642-4009-4FFC-80C4-9D67DBF7B74E\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceDescriptionResponse>\\n    <RequestId>06F8F642-4009-4FFC-80C4-9D67DBF7B74E</RequestId>\\n</ModifyDBInstanceDescriptionResponse>","errorExample":""}]',
      'title' => '修改实例名称',
      'summary' => '修改MongoDB实例名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceNetExpireTime' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的连接地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ClassicExpendExpiredDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置保留原经典网络地址的时长，取值：**14**、**30**、**60**、**120**，单位为天。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
                'example' => '459E7D5C-38DA-4E14-9C82-5B5AF693DBAB',
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
            'errorCode' => 'InvalidConnectionString.NotFound',
            'errorMessage' => 'Specified connection string or net type is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"459E7D5C-38DA-4E14-9C82-5B5AF693DBAB\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDBInstanceNetExpireTimeResponse>\\r\\n\\t<RequestId>459E7D5C-38DA-4E14-9C82-5B5AF693DBAB</RequestId>\\r\\n</ModifyDBInstanceNetExpireTimeResponse>","errorExample":""}]',
      'title' => '延长MongoDB实例的经典网络保留时长',
      'summary' => '延长MongoDB实例的经典网络保留时长。',
      'description' => '调用该接口时实例须满足以下条件：
* 实例状态处于运行中。
* 实例的网络处于混访模式。

> 本接口适用于副本集实例和分片集群实例，暂不支持单节点实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeDBInstanceEngineVersion' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级的目标数据库版本，取值：**3.4**、**4.0**、**4.2**。

> 升级的目标数据库版本必须大于实例当前的数据库版本。',
            'type' => 'string',
            'required' => true,
            'example' => '4.0',
            'enum' => 
            array (
              0 => '3.4',
              1 => '4.0',
              2 => '4.2',
              3 => '4.4',
              4 => '5.0',
              5 => '6.0',
              6 => '7.0',
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
                'example' => 'C4907B00-A208-4E0C-A636-AA85140E406C',
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
            'errorCode' => 'EngineVersion.ERROR',
            'errorMessage' => 'Target  engineVersion must be greater than the current one.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C4907B00-A208-4E0C-A636-AA85140E406C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpgradeDBInstanceEngineVersionResponse>\\r\\n\\t<RequestId>C4907B00-A208-4E0C-A636-AA85140E406C</RequestId>\\r\\n</UpgradeDBInstanceEngineVersionResponse>","errorExample":""}]',
      'title' => '升级实例的数据库版本',
      'summary' => '升级MongoDB实例的数据库版本。',
      'description' => '调用本接口时，要求实例状态为运行中。

> - 实例的存储引擎对数据库版本的选择有约束性，详情请参见[MongoDB数据库版本升级说明](~~398673~~)，您也可以调用[DescribeAvailableEngineVersion](~~141355~~)接口查询实例可升级的版本。
> - 升级数据库版本后不支持降级数据库版本。
> - 升级过程中会自动对实例进行2-3次重启，请确保在业务低峰执行。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeDBInstanceKernelVersion' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2235****',
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
                'example' => '27B9A130-7C4B-40D9-84E8-2FC081097AAC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"27B9A130-7C4B-40D9-84E8-2FC081097AAC\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeDBInstanceKernelVersionResponse>\\n    <RequestId>27B9A130-7C4B-40D9-84E8-2FC081097AAC</RequestId>\\n</UpgradeDBInstanceKernelVersionResponse>","errorExample":""}]',
      'title' => '升级实例的数据库小版本',
      'summary' => '升级MongoDB实例的数据库小版本。',
      'description' => '调用UpgradeDBInstanceKernelVersion接口时，实例状态必须为运行中。

> - UpgradeDBInstanceKernelVersion接口适用于副本集实例和分片集群实例，暂不支持单节点实例。
> - 升级过程中，实例会被重启一次，请在业务低峰期执行该操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchDBInstanceHA' => 
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
        'operationType' => 'none',
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点的ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要执行切换的角色ID。您可以调用[DescribeRoleZoneInfo](~~123802~~)接口获取角色ID和节点角色信息。

> - 角色ID以英文逗号（,）分隔，不传入本参数则切换主备节点。
> - 当**DBInstanceId**参数传入的是分片集群实例ID时，执行切换的角色必须属于同一Shard节点中。',
            'type' => 'string',
            'required' => false,
            'example' => '972xxxx,972xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'SwitchMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切换主备节点的时间点。取值：
- 0：立即切换。
- 1：在可运维时间段内切换。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
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
                'example' => '26BD4E5F-BDB4-47BA-B232-413AA78CFA8F',
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
            'errorCode' => 'InvalidSwitchType',
            'errorMessage' => 'Specified Swtich Type is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'Specified Instance ID is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'HaStatusNotSupport',
            'errorMessage' => 'Current DB instance HA status does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"26BD4E5F-BDB4-47BA-B232-413AA78CFA8F\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SwitchDBInstanceHAResponse>\\r\\n\\t<RequestId>26BD4E5F-BDB4-47BA-B232-413AA78CFA8F</RequestId>\\r\\n</SwitchDBInstanceHAResponse>","errorExample":""}]',
      'title' => '切换实例中的主备节点',
      'summary' => '切换MongoDB实例中的主备节点。',
      'description' => '调用本接口时，实例状态要求为运行中。

> - 本接口适用于副本集实例和分片集群实例，暂不支持单节点实例。
> - 副本集实例以实例为单位进行切换，分片集群实例以Shard为单位进行切换。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartDBInstance' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点ID或Mongos节点ID。

> 当实例类型为分片集群实例时，如不传入本参数，则重启分片集群实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '149C517D-B586-47BE-A107-8673E0ED77C6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"149C517D-B586-47BE-A107-8673E0ED77C6\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RestartDBInstanceResponse>\\r\\n\\t<RequestId>149C517D-B586-47BE-A107-8673E0ED77C6</RequestId>\\r\\n</RestartDBInstanceResponse>\\r\\n","errorExample":""}]',
      'title' => '重启MongoDB实例',
      'summary' => '重启MongoDB实例。',
      'description' => '调用本接口可用于重启实例，也可用于重启分片集群实例中的某个Shard节点或Mongos节点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DestroyInstance' => 
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
        'abilityTreeCode' => '8311',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbXNNG5O',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> **InstanceId**参数与**DBInstanceId**参数作用相同，只需选择一个传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp147acd4783****',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> **InstanceId**参数与**DBInstanceId**参数作用相同，只需选择一个传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp147acd4783****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
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
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '65BDA532-28AF-4122-AA39-B382721E****',
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
            'errorCode' => 'ChargeTypeViolation',
            'errorMessage' => 'The operation is not permitted due to charge type of the instance.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingDBInstanceId',
            'errorMessage' => 'DBInstanceId is mandatory for this action.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721E****\\"\\n}","errorExample":""},{"type":"xml","example":"<DestroyInstanceResponse>\\n    <RequestId> 65BDA532-28AF-4122-AA39-B382721E****</RequestId>\\n</DestroyInstanceResponse>","errorExample":""}]',
      'title' => '销毁MongoDB实例',
      'summary' => '销毁MongoDB实例。',
      'description' => '调用本接口时，实例必须满足以下条件：
- 实例的付费类型为包年包月。
- 实例处于**到期锁定**状态，未释放。

> 本地盘实例调用本接口时会直接销毁实例；
云盘实例调用本接口时会删除实例，并修改备份策略为 "实例释放时立即删除该实例的所有备份集"。


><danger> 实例销毁后数据将无法找回，请谨慎操作。></danger>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceAutoRenewalAttribute' => 
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
            'description' => '实例所属的地域ID。您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)进行查询地域ID。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp15da1923e3****',
          ),
        ),
        2 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费时长，单位：月。

取值范围：**1**~**12**（整数）。

> 当**AutoRenew**参数传入的值为**true**时，本参数才可用，且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值说明：
- **true**：开启自动续费。
- **false**：不开启自动续费。

> 当本参数取值为**true**时，您还需要传入**Duration**参数。',
            'type' => 'string',
            'required' => true,
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
            'description' => '请求信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFD65226-08CC-4C4D-B6A4-CB3C382F67B0',
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
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbInstanceIdInvalid',
            'errorMessage' => 'Instance dbInstanceId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceAutoRenewInvalid',
            'errorMessage' => 'Instance auto renewal is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceChargeTypeInvalid',
            'errorMessage' => 'Instance charge type is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDuration.Invalid',
            'errorMessage' => 'Instance duration is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFD65226-08CC-4C4D-B6A4-CB3C382F67B0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceAutoRenewalAttributeResponse>\\n    <RequestId>EFD65226-08CC-4C4D-B6A4-CB3C382F67B0</RequestId>\\n</ModifyInstanceAutoRenewalAttributeResponse>","errorExample":""}]',
      'title' => '开启或者关闭实例的到期前自动续费功能',
      'summary' => '设置MongoDB实例的自动续费功能。',
      'description' => '请确保在使用该接口前，已充分了解云数据库MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

本接口仅适用于付费类型为包年包月的实例。

> 自动续费将于服务到期前9天开始扣款，请保证您的账户资金充足。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransformInstanceChargeType' => 
    array (
      'summary' => '转换云数据库MongoDB实例的付费类型，将按量付费（后付费）实例转换为包年包月（预付费）实例或者包年包月实例转换为按量付费实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-2ze55b3ec56c****',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费时长，取值范围为：

- 当PricingCycle单位为Month:**1**~**9**

- 当PricingCycle单位为Year: **1**、**2**、**3**、**5**',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动支付订单，取值说明：

- **true**：自动支付订单。
- **false**：手动支付订单。

> 默认值为**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '到期后是否自动续费，取值说明：

- **true**：自动续费。
- **false**：手动续费。

> 默认值为**false**。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        6 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例付费类型，取值说明：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => true,
            'example' => 'PrePaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
              2 => 'PREPAY',
              3 => 'POSTPAY',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例付费时长单位
取值说明：
- **Month：** 月
-  **Year：** 年

默认值：Month
',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
            'default' => 'Month',
            'enum' => 
            array (
              0 => 'Month',
              1 => 'Year',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8F1D721-6439-4257-A89C-F1E8E9C9****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21084641369****',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Period is invalid',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotAvailable',
            'errorMessage' => 'Resource you requested is not available for finance user.',
          ),
          3 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AlreadyPrePaid',
            'errorMessage' => 'This instance is already prepaid',
          ),
          1 => 
          array (
            'errorCode' => 'RealNameAuthenticationError',
            'errorMessage' => 'Your account has not passed the real-name authentication yet.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D8F1D721-6439-4257-A89C-F1E8E9C9****\\",\\n  \\"OrderId\\": \\"21084641369****\\"\\n}","type":"json"}]',
      'title' => '转换云数据库MongoDB实例的付费类型',
      'description' => '请确保在使用该接口前，已充分了解MongoDB产品的收费方式和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。



调用本接口时，实例必须满足以下条件：

- 实例状态为运行中。
- 实例没有未完成支付的转换付费类型订单。
- 实例规格不能为历史规格（不再售卖的规格），历史规格列表请参见[实例规格表](~~57141~~)。

> 如需转换历史规格实例的付费类型，请先调用[ModifyDBInstanceSpec](~~61816~~)或[ModifyNodeSpec](~~61923~~)接口变更实例规格。',
    ),
    'DescribePrice' => 
    array (
      'summary' => '查询创建MongoDB实例、升级配置或续费操作产生的费用。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '8284',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodb1FWAFI',
          1 => 'FEATUREmongodb1YU4BW',
          2 => 'FEATUREmongodbWLAP0U',
          3 => 'FEATUREmongodbL6DGXW',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，取值说明：
- **BUY**：创建实例。
- **UPGRADE**：变更配置。
- **RENEW**：续费实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'BUY',
            'enum' => 
            array (
              0 => 'BUY',
              1 => 'UPGRADE',
              2 => 'RENEW',
              3 => 'DOWNGRADE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含实例中多个信息的JSON格式字符串。参数说明以及更多JSON格式示例，请参见[DescribePrice接口DBInstances参数说明](~~197291~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '[ { "DBInstanceId":"dds-bp1b6e54e7cc****", "RegionId":"cn-hangzhou", "ZoneId":"cn-hangzhou-h", "Engine":"MongoDB", "EngineVersion":" 5.0", "DBInstanceClass":"mdb.shard.2x.xlarge.d", "DBInstanceStorage":30, "ChargeType":"PrePaid", "Period":1, "StorageType":"cloud_essd1" } ]',
          ),
        ),
        3 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群代码，取值说明：
- **dds**：副本集版按量付费。
- **badds**: 副本集版包年包月。
- **dds_sharding**: 分片集群版按量付费。
- **badds_sharding**： 分片集群版包年包月。
- **badds_sharding_intl**： 分片集群版包年包月（国际站）。
- **dds_sharding_intl**： 分片集群版按量付费（国际站）。
- **badds_sharding_jp**： 分片集群版包年包月（日本站）。
- **badds_intl**： 副本集版包年包月（国际站）。
- **dds_intl**： 副本集版按量付费（国际站）。',
            'type' => 'string',
            'required' => false,
            'example' => 'badds',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品代码，默认为**dds**。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds',
            'default' => 'dds',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"AccountPassword":"Pw123456","DBInstanceDescription":"test"}',
          ),
        ),
        6 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        7 => 
        array (
          'name' => 'OrderParamOut',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回订单参数，取值说明：
- **false**（默认值）：不返回。
- **true**：返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
            'enum' => 
            array (
              0 => 'false',
              1 => 'true',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '订单信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Order' => 
              array (
                'description' => '	
订单信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Coupons' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Coupon' => 
                      array (
                        'description' => '优惠券信息列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '订单优惠券信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Description' => 
                            array (
                              'description' => '备注。',
                              'type' => 'string',
                              'example' => 'ceshi',
                            ),
                            'IsSelected' => 
                            array (
                              'description' => '是否选中该优惠券，取值说明：
- **true**：选中优惠券。
- **false**：不选中优惠券。
',
                              'type' => 'string',
                              'example' => 'true',
                            ),
                            'CouponNo' => 
                            array (
                              'description' => '优惠券编码。',
                              'type' => 'string',
                              'example' => 'youhuiquan_promotion_option_id_for_blank',
                            ),
                            'Name' => 
                            array (
                              'description' => '优惠券名称。',
                              'type' => 'string',
                              'example' => 'youhuiquan111',
                            ),
                            'PromotionRuleIdList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'PromotionRuleId' => 
                                array (
                                  'description' => '优惠券对应的规则ID列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '优惠券对应的规则ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '18772041****',
                                  ),
                                ),
                              ),
                            ),
                            'PromotionOptionCode' => 
                            array (
                              'description' => '促销信息，促销选项代码。',
                              'type' => 'string',
                              'example' => 'youhui_quan',
                            ),
                            'TargetArticleItemCodes' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                              ),
                            ),
                            'OptionCode' => 
                            array (
                              'description' => '优惠券代号。',
                              'type' => 'string',
                              'example' => 'youhui_quan',
                            ),
                            'ActivityCategory' => 
                            array (
                              'description' => '优惠券的活动类型，取值说明：

- **payondemand**：预付费。
- **payasyougo**：后付费。',
                              'type' => 'string',
                              'example' => 'payondemand',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'OriginalAmount' => 
                  array (
                    'description' => '订单原价。',
                    'type' => 'string',
                    'example' => '322.4',
                  ),
                  'DiscountAmount' => 
                  array (
                    'description' => '订单优惠金额。',
                    'type' => 'string',
                    'example' => '322.4',
                  ),
                  'RuleIds' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleId' => 
                      array (
                        'description' => '订单规则信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '活动规则ID合集。',
                          'type' => 'string',
                          'example' => '{ "RuleId": [ 2075**** ] }',
                        ),
                      ),
                    ),
                  ),
                  'TradeAmount' => 
                  array (
                    'description' => '订单实际交易价。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'Currency' => 
                  array (
                    'description' => '币种。',
                    'type' => 'string',
                    'example' => 'USD',
                  ),
                  'ShowDiscountInfo' => 
                  array (
                    'description' => '是否展示折扣信息。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'OptionalPromotions' => 
                  array (
                    'description' => '优惠活动信息列表。',
                    'type' => 'string',
                    'example' => '"[{\\"activityCategory\\":\\"discount\\",\\"activityExtInfo\\":{\\"noUseYouhuiquan\\":\\"true\\",\\"activityId\\":\\"191156098xxxx\\",\\"activityExtraAttr\\":\\"{\\\\\\"forbiddenCpsProfit\\\\\\":\\\\\\"true\\\\\\",\\\\\\"forbiddenCouponsRestricted\\\\\\":\\\\\\"true\\\\\\",\\\\\\"forbiddenAmbassadorProfit\\\\\\":\\\\\\"true\\\\\\"}\\",\\"isActivityIdFromWanHuaTong\\":\\"true\\",\\"isContractActivity\\":\\"false\\"},\\"canPromFee\\":906130,\\"optionCode\\":\\"wanhua_activity\\",\\"promotionName\\":\\"FY24--MongoDB 副本集--首购--1年*折--ft首购权益\\",\\"promotionOptionNo\\":\\"19115609882xxxx\\",\\"promotionRuleIdList\\":[2091xxxx],\\"selected\\":true,\\"targetArticleItemCodes\\":[]},{\\"activityCategory\\":\\"discount\\",\\"activityExtInfo\\":{\\"activityId\\":\\"1018040010xxxxx\\",\\"wanHuaOrderExpireSec\\":\\"604800\\",\\"isActivityIdFromWanHuaTong\\":\\"true\\",\\"isContractActivity\\":\\"false\\"},\\"canPromFee\\":339799,\\"optionCode\\":\\"wanhua_activity\\",\\"promotionName\\":\\"FY24--MongoDB年付折扣\\",\\"promotionOptionNo\\":\\"10180400107xxxxx\\",\\"promotionRuleIdList\\":[xxxxx],\\"selected\\":false,\\"targetArticleItemCodes\\":[]}]"',
                  ),
                  'PromDetailList' => 
                  array (
                    'description' => '命中的优惠活动。',
                    'type' => 'string',
                    'example' => '[{\\"finalPromFee\\":90xxx,\\"optionCode\\":\\"wanhua_activity\\",\\"promType\\":\\"discount\\",\\"promotionId\\":2091xxxx,\\"promotionName\\":\\"新用户购买云数据库 MongoDB 副本集1年享*折优惠，限1台\\"}]"',
                  ),
                  'DepreciateInfo' => 
                  array (
                    'description' => '降价信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ListPrice' => 
                      array (
                        'description' => '目录价。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1*',
                      ),
                      'OriginalStandAmount' => 
                      array (
                        'description' => '原始官网总价。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '12*',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'description' => '降价后官网总价。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '9*',
                      ),
                      'CheapRate' => 
                      array (
                        'description' => '降价比例。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '30%',
                      ),
                      'Differential' => 
                      array (
                        'description' => '差价优惠（订单总价展示）。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '**',
                      ),
                      'DifferentialName' => 
                      array (
                        'description' => '差价优惠名称。',
                        'type' => 'string',
                        'example' => 'XXXXX',
                      ),
                      'MonthPrice' => 
                      array (
                        'description' => '折合月价。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '**',
                      ),
                      'IsContractActivity' => 
                      array (
                        'description' => '命中合同优惠。',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'IsShow' => 
                      array (
                        'description' => '是否展示降价幅度。',
                        'type' => 'string',
                        'example' => 'true',
                      ),
                      'ContractActivity' => 
                      array (
                        'description' => '合同优惠。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FinalPromFee' => 
                          array (
                            'description' => '优惠总费用。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '3621.6',
                          ),
                          'FinalFee' => 
                          array (
                            'description' => '优惠后费用。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '20522.4',
                          ),
                          'ProdFee' => 
                          array (
                            'description' => '原价。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '24144.0',
                          ),
                          'ActivityId' => 
                          array (
                            'description' => '活动id。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '41120065996xxxxx',
                          ),
                          'OptionCode' => 
                          array (
                            'description' => '优惠id。',
                            'type' => 'string',
                            'example' => 'wanhua_activity',
                          ),
                          'ActivityName' => 
                          array (
                            'description' => '活动名称。',
                            'type' => 'string',
                            'example' => '合同优惠_整单_xxx折',
                          ),
                          'OptionIds' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'OptionId' => 
                              array (
                                'description' => '优惠id列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '优惠id',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '200000614xxxx',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'StandDiscountPrice' => 
                  array (
                    'description' => '折扣价格。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0',
                  ),
                  'StandPrice' => 
                  array (
                    'description' => '折扣价。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0',
                  ),
                  'ContractActivity' => 
                  array (
                    'description' => '命中合同优惠。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Code' => 
                  array (
                    'description' => '订单码',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'Message' => 
                  array (
                    'description' => '订单信息',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'IsContractActivity' => 
                  array (
                    'description' => '命中合同优惠。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '27227A3D-6B86-56F3-9E03-9E60F001CE12',
              ),
              'SubOrders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubOrder' => 
                  array (
                    'description' => '优惠券对应的规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '优惠券规则信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OriginalAmount' => 
                        array (
                          'description' => '订单原价。',
                          'type' => 'string',
                          'example' => '322.4',
                        ),
                        'DiscountAmount' => 
                        array (
                          'description' => '订单优惠金额。',
                          'type' => 'string',
                          'example' => '322.4',
                        ),
                        'RuleIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleId' => 
                            array (
                              'description' => '活动规则列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '活动规则ID合集。',
                                'type' => 'string',
                                'example' => '{ "RuleId": [ 2075**** ] }',
                              ),
                            ),
                          ),
                        ),
                        'TradeAmount' => 
                        array (
                          'description' => '订单实际交易价格。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp1b6e54e7cc****',
                        ),
                        'DepreciateInfo' => 
                        array (
                          'description' => '降价信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ListPrice' => 
                            array (
                              'description' => '目录价。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '1*',
                            ),
                            'OriginalStandAmount' => 
                            array (
                              'description' => '原始官网总价。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '12*',
                            ),
                            'CheapStandAmount' => 
                            array (
                              'description' => '降价后官网总价。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '9*',
                            ),
                            'CheapRate' => 
                            array (
                              'description' => '降价比例。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30%',
                            ),
                            'Differential' => 
                            array (
                              'description' => '差价优惠（订单总价展示）。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '**',
                            ),
                            'DifferentialName' => 
                            array (
                              'description' => '差价优惠名称。',
                              'type' => 'string',
                              'example' => 'XXXXX',
                            ),
                            'MonthPrice' => 
                            array (
                              'description' => '折合月价。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '**',
                            ),
                            'IsContractActivity' => 
                            array (
                              'description' => '命中合同优惠。',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'IsShow' => 
                            array (
                              'description' => '是否展示降价幅度。',
                              'type' => 'string',
                              'example' => 'true',
                            ),
                            'ContractActivity' => 
                            array (
                              'description' => '活动信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'FinalPromFee' => 
                                array (
                                  'description' => '优惠总费用。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '3621.6',
                                ),
                                'FinalFee' => 
                                array (
                                  'description' => '优惠后费用。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '20522.4',
                                ),
                                'ProdFee' => 
                                array (
                                  'description' => '原价。',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '24144.0',
                                ),
                                'ActivityId' => 
                                array (
                                  'description' => '活动ID。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '41120065996xxxxx
',
                                ),
                                'OptionCode' => 
                                array (
                                  'description' => '优惠ID。',
                                  'type' => 'string',
                                  'example' => 'wanhua_activity',
                                ),
                                'ActivityName' => 
                                array (
                                  'description' => '活动名称。',
                                  'type' => 'string',
                                  'example' => '合同优惠_整单_xxx折',
                                ),
                                'OptionIds' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'OptionId' => 
                                    array (
                                      'description' => '优惠ID列表。',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '优惠ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2388xxxx',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'StartTime' => 
                            array (
                              'description' => '活动开始时间。',
                              'type' => 'string',
                              'example' => '2024-02-29 10:30:00',
                            ),
                          ),
                        ),
                        'IsNewOfficialActivity' => 
                        array (
                          'description' => '命中降价优惠。',
                          'type' => 'string',
                          'example' => '命中降价优惠。',
                        ),
                        'ModuleInstance' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ModuleInstance' => 
                            array (
                              'description' => '订单行实例配置。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '订单行实例配置子对象。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'CycleFee' => 
                                  array (
                                    'description' => '模块的周期费。',
                                    'type' => 'string',
                                    'example' => '0.0',
                                  ),
                                  'PromDetailList' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'PromDetail' => 
                                      array (
                                        'description' => '优惠明细信息。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '优惠信息。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'FinalPromFee' => 
                                            array (
                                              'description' => '优惠金额。',
                                              'type' => 'number',
                                              'format' => 'double',
                                              'example' => '0.0',
                                            ),
                                            'ActivityExtInfo' => 
                                            array (
                                              'description' => '优惠详情额外信息。',
                                              'type' => 'object',
                                              'example' => '{
    "activityId": "1512010241743170"
}',
                                            ),
                                            'OptionCode' => 
                                            array (
                                              'description' => '优惠券商品Code。',
                                              'type' => 'string',
                                              'example' => 'wanhua_activity',
                                            ),
                                            'PromType' => 
                                            array (
                                              'description' => '优惠子类型。',
                                              'type' => 'string',
                                              'example' => 'discount',
                                            ),
                                            'PromotionId' => 
                                            array (
                                              'description' => '优惠活动ID。',
                                              'type' => 'integer',
                                              'format' => 'int64',
                                              'example' => '8105187xxxx',
                                            ),
                                            'PromotionName' => 
                                            array (
                                              'description' => '促销活动名称。',
                                              'type' => 'string',
                                              'example' => '【xxxx-x月降价项目】MongoDB全规格--xxxxx',
                                            ),
                                            'PromotionCode' => 
                                            array (
                                              'description' => '优惠码。',
                                              'type' => 'string',
                                              'example' => 'aliwood-xxx',
                                            ),
                                            'DerivedPromType' => 
                                            array (
                                              'description' => '优惠子类型。',
                                              'type' => 'string',
                                              'example' => 'subPrice',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'DepreciateInfo' => 
                                  array (
                                    'description' => '活动信息。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ListPrice' => 
                                      array (
                                        'description' => '目录价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '1*',
                                      ),
                                      'OriginalStandAmount' => 
                                      array (
                                        'description' => '原始官网总价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '12*',
                                      ),
                                      'CheapStandAmount' => 
                                      array (
                                        'description' => '降价后官网总价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '9*',
                                      ),
                                      'CheapRate' => 
                                      array (
                                        'description' => '降价比例。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '30%',
                                      ),
                                      'Differential' => 
                                      array (
                                        'description' => '差价优惠（订单总价展示）。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '**',
                                      ),
                                      'DifferentialName' => 
                                      array (
                                        'description' => '差价优惠名称。',
                                        'type' => 'string',
                                        'example' => 'XXXXX',
                                      ),
                                      'MonthPrice' => 
                                      array (
                                        'description' => '折合月价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '**',
                                      ),
                                      'IsContractActivity' => 
                                      array (
                                        'description' => '命中合同优惠。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                      ),
                                      'IsShow' => 
                                      array (
                                        'description' => '是否展示降价幅度。',
                                        'type' => 'string',
                                        'example' => 'true',
                                      ),
                                    ),
                                  ),
                                  'DiscountFee' => 
                                  array (
                                    'description' => '折扣费用。',
                                    'type' => 'string',
                                    'example' => '0.0',
                                  ),
                                  'ModuleAttrs' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'moduleAttr' => 
                                      array (
                                        'description' => '模块属性。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '订购参数。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Code' => 
                                            array (
                                              'description' => '属性代码。',
                                              'type' => 'string',
                                              'example' => 'dds_dbtype',
                                            ),
                                            'Name' => 
                                            array (
                                              'description' => '属性名称。',
                                              'type' => 'string',
                                              'example' => 'MongoDB',
                                            ),
                                            'Type' => 
                                            array (
                                              'description' => '属性类型。',
                                              'type' => 'string',
                                              'example' => '3',
                                            ),
                                            'Value' => 
                                            array (
                                              'description' => '属性值。',
                                              'type' => 'string',
                                              'example' => 'MongoDB',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'ModuleCode' => 
                                  array (
                                    'description' => '模块code。',
                                    'type' => 'string',
                                    'example' => 'dds_dbtype',
                                  ),
                                  'ModuleId' => 
                                  array (
                                    'description' => '模块Id。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1017110000415xxx',
                                  ),
                                  'ModuleName' => 
                                  array (
                                    'description' => '模块名称。',
                                    'type' => 'string',
                                    'example' => '数据库类型',
                                  ),
                                  'NeedOrderPay' => 
                                  array (
                                    'description' => '在订单中是否需要支付。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'PayFee' => 
                                  array (
                                    'description' => '实付金额。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.0',
                                  ),
                                  'PricingModule' => 
                                  array (
                                    'description' => '是否计价项',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'StandPrice' => 
                                  array (
                                    'description' => '折扣价。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0',
                                  ),
                                  'TotalProductFee' => 
                                  array (
                                    'description' => '产品原价。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.0',
                                  ),
                                  'ContractActivity' => 
                                  array (
                                    'description' => '命中合同优惠。',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'StandDiscountPrice' => 
                                  array (
                                    'description' => '优惠价格。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '451.00',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ContractActivity' => 
                        array (
                          'description' => '命中合同优惠。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'OptionalPromotions' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OptionalPromotion' => 
                            array (
                              'description' => '可选择的优惠选项列表结果。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ActivityCategory' => 
                                  array (
                                    'description' => '活动类型。',
                                    'type' => 'string',
                                    'example' => 'discount',
                                  ),
                                  'ActivityExtInfo' => 
                                  array (
                                    'description' => '活动额外信息。',
                                    'type' => 'object',
                                    'example' => '{
    "activityId": "1512010241743170"
}',
                                  ),
                                  'CanPromFee' => 
                                  array (
                                    'description' => '可优惠价格',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '4560789',
                                  ),
                                  'OptionCode' => 
                                  array (
                                    'description' => '优惠类型。',
                                    'type' => 'string',
                                    'example' => 'wanhua_activity',
                                  ),
                                  'PromotionName' => 
                                  array (
                                    'description' => '优惠名称。',
                                    'type' => 'string',
                                    'example' => '【xxx月降价项目】MongoDB全规格--xxx',
                                  ),
                                  'PromotionOptionNo' => 
                                  array (
                                    'description' => '优惠号。',
                                    'type' => 'string',
                                    'example' => '1512010241xxxxx',
                                  ),
                                  'Selected' => 
                                  array (
                                    'description' => '是否外部选中。',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'Show' => 
                                  array (
                                    'description' => '优惠是否展示。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'TargetArticleItemCodes' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'targetArticleItemCode' => 
                                      array (
                                        'description' => '目标商品规格code列表。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '目标商品规格code。',
                                          'type' => 'string',
                                          'example' => '""',
                                        ),
                                      ),
                                    ),
                                  ),
                                  'PromotionRuleIdList' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'promotionRuleId' => 
                                      array (
                                        'description' => '优惠id列表。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '优惠id。',
                                          'type' => 'string',
                                          'example' => '43289909',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'PromDetailList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PromDetail' => 
                            array (
                              'description' => '优惠明细信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '优惠信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'FinalPromFee' => 
                                  array (
                                    'description' => '优惠金额。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.0',
                                  ),
                                  'ActivityExtInfo' => 
                                  array (
                                    'description' => '活动额外信息。',
                                    'type' => 'object',
                                    'example' => '{
    "activityId": "1512010241743170"
}',
                                  ),
                                  'OptionCode' => 
                                  array (
                                    'description' => '优惠券代号。',
                                    'type' => 'string',
                                    'example' => 'youhui_quan',
                                  ),
                                  'PromType' => 
                                  array (
                                    'description' => '优惠子类型。',
                                    'type' => 'string',
                                    'example' => 'discount',
                                  ),
                                  'PromotionId' => 
                                  array (
                                    'description' => '优惠ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '233xxxxx',
                                  ),
                                  'PromotionName' => 
                                  array (
                                    'description' => '优惠活动名称。',
                                    'type' => 'string',
                                    'example' => '【xxxx-x月降价项目】MongoDB全规格--xxxxx',
                                  ),
                                  'PromotionCode' => 
                                  array (
                                    'description' => '优惠码。',
                                    'type' => 'string',
                                    'example' => 'ali-wood',
                                  ),
                                  'DerivedPromType' => 
                                  array (
                                    'description' => '优惠子类型。',
                                    'type' => 'string',
                                    'example' => 'subPrice',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'StandDiscountPrice' => 
                        array (
                          'description' => '折扣价。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '8687',
                        ),
                        'StandPrice' => 
                        array (
                          'description' => '折扣价。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '62982',
                        ),
                        'IsContractActivity' => 
                        array (
                          'description' => '命中合同优惠。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TraceId' => 
              array (
                'description' => '调用链ID。',
                'type' => 'string',
                'example' => '27227A3D-6B87-56F3-9E03-9E60F001****',
              ),
              'OrderParams' => 
              array (
                'description' => '订单参数。
>仅当**OrderParamOut**参数传入**true**时，返回该参数。',
                'type' => 'string',
                'example' => '{\\"autoPay\\":false}"',
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '活动规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '活动规则信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleDescId' => 
                        array (
                          'description' => '策略ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2075****',
                        ),
                        'Title' => 
                        array (
                          'description' => '规则标题。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'Name' => 
                        array (
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => 'demoname',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Specified parameter Period is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'OriginPriceError',
            'errorMessage' => 'Origin price error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Order\\": {\\n    \\"Coupons\\": {\\n      \\"Coupon\\": [\\n        {\\n          \\"Description\\": \\"ceshi\\",\\n          \\"IsSelected\\": \\"true\\",\\n          \\"CouponNo\\": \\"youhuiquan_promotion_option_id_for_blank\\",\\n          \\"Name\\": \\"youhuiquan111\\",\\n          \\"PromotionRuleIdList\\": {\\n            \\"PromotionRuleId\\": [\\n              0\\n            ]\\n          },\\n          \\"PromotionOptionCode\\": \\"youhui_quan\\",\\n          \\"OptionCode\\": \\"youhui_quan\\",\\n          \\"ActivityCategory\\": \\"payondemand\\"\\n        }\\n      ]\\n    },\\n    \\"OriginalAmount\\": \\"322.4\\",\\n    \\"DiscountAmount\\": \\"322.4\\",\\n    \\"RuleIds\\": {\\n      \\"RuleId\\": [\\n        \\"{ \\\\\\"RuleId\\\\\\": [ 2075**** ] }\\"\\n      ]\\n    },\\n    \\"TradeAmount\\": \\"0\\",\\n    \\"Currency\\": \\"USD\\",\\n    \\"ShowDiscountInfo\\": true,\\n    \\"OptionalPromotions\\": \\"\\\\\\"[{\\\\\\\\\\\\\\"activityCategory\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"discount\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"activityExtInfo\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"noUseYouhuiquan\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"activityId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"191156098xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"activityExtraAttr\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"forbiddenCpsProfit\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"forbiddenCouponsRestricted\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"forbiddenAmbassadorProfit\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"isActivityIdFromWanHuaTong\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"isContractActivity\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"false\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"canPromFee\\\\\\\\\\\\\\":906130,\\\\\\\\\\\\\\"optionCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"wanhua_activity\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"FY24--MongoDB 副本集--首购--1年*折--ft首购权益\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionOptionNo\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"19115609882xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionRuleIdList\\\\\\\\\\\\\\":[2091xxxx],\\\\\\\\\\\\\\"selected\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"targetArticleItemCodes\\\\\\\\\\\\\\":[]},{\\\\\\\\\\\\\\"activityCategory\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"discount\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"activityExtInfo\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"activityId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1018040010xxxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"wanHuaOrderExpireSec\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"604800\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"isActivityIdFromWanHuaTong\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"isContractActivity\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"false\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"canPromFee\\\\\\\\\\\\\\":339799,\\\\\\\\\\\\\\"optionCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"wanhua_activity\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"FY24--MongoDB年付折扣\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionOptionNo\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"10180400107xxxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionRuleIdList\\\\\\\\\\\\\\":[xxxxx],\\\\\\\\\\\\\\"selected\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"targetArticleItemCodes\\\\\\\\\\\\\\":[]}]\\\\\\"\\",\\n    \\"PromDetailList\\": \\"[{\\\\\\\\\\\\\\"finalPromFee\\\\\\\\\\\\\\":90xxx,\\\\\\\\\\\\\\"optionCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"wanhua_activity\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"discount\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"promotionId\\\\\\\\\\\\\\":2091xxxx,\\\\\\\\\\\\\\"promotionName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"新用户购买云数据库 MongoDB 副本集1年享*折优惠，限1台\\\\\\\\\\\\\\"}]\\\\\\"\\",\\n    \\"DepreciateInfo\\": {\\n      \\"ListPrice\\": 0,\\n      \\"OriginalStandAmount\\": 0,\\n      \\"CheapStandAmount\\": 0,\\n      \\"CheapRate\\": 0,\\n      \\"Differential\\": 0,\\n      \\"DifferentialName\\": \\"XXXXX\\",\\n      \\"MonthPrice\\": 0,\\n      \\"IsContractActivity\\": false,\\n      \\"IsShow\\": \\"true\\",\\n      \\"ContractActivity\\": {\\n        \\"FinalPromFee\\": 3621.6,\\n        \\"FinalFee\\": 20522.4,\\n        \\"ProdFee\\": 24144,\\n        \\"ActivityId\\": 0,\\n        \\"OptionCode\\": \\"wanhua_activity\\",\\n        \\"ActivityName\\": \\"合同优惠_整单_xxx折\\",\\n        \\"OptionIds\\": {\\n          \\"OptionId\\": [\\n            0\\n          ]\\n        }\\n      }\\n    },\\n    \\"StandDiscountPrice\\": 0,\\n    \\"StandPrice\\": 0,\\n    \\"ContractActivity\\": false,\\n    \\"Code\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"IsContractActivity\\": false\\n  },\\n  \\"RequestId\\": \\"27227A3D-6B86-56F3-9E03-9E60F001CE12\\",\\n  \\"SubOrders\\": {\\n    \\"SubOrder\\": [\\n      {\\n        \\"OriginalAmount\\": \\"322.4\\",\\n        \\"DiscountAmount\\": \\"322.4\\",\\n        \\"RuleIds\\": {\\n          \\"RuleId\\": [\\n            \\"{ \\\\\\"RuleId\\\\\\": [ 2075**** ] }\\"\\n          ]\\n        },\\n        \\"TradeAmount\\": \\"0\\",\\n        \\"InstanceId\\": \\"dds-bp1b6e54e7cc****\\",\\n        \\"DepreciateInfo\\": {\\n          \\"ListPrice\\": 0,\\n          \\"OriginalStandAmount\\": 0,\\n          \\"CheapStandAmount\\": 0,\\n          \\"CheapRate\\": 0,\\n          \\"Differential\\": 0,\\n          \\"DifferentialName\\": \\"XXXXX\\",\\n          \\"MonthPrice\\": 0,\\n          \\"IsContractActivity\\": false,\\n          \\"IsShow\\": \\"true\\",\\n          \\"ContractActivity\\": {\\n            \\"FinalPromFee\\": 3621.6,\\n            \\"FinalFee\\": 20522.4,\\n            \\"ProdFee\\": 24144,\\n            \\"ActivityId\\": 0,\\n            \\"OptionCode\\": \\"wanhua_activity\\",\\n            \\"ActivityName\\": \\"合同优惠_整单_xxx折\\",\\n            \\"OptionIds\\": {\\n              \\"OptionId\\": [\\n                0\\n              ]\\n            }\\n          },\\n          \\"StartTime\\": \\"2024-02-29 10:30:00\\"\\n        },\\n        \\"IsNewOfficialActivity\\": \\"命中降价优惠。\\",\\n        \\"ModuleInstance\\": {\\n          \\"ModuleInstance\\": [\\n            {\\n              \\"CycleFee\\": \\"0.0\\",\\n              \\"PromDetailList\\": {\\n                \\"PromDetail\\": [\\n                  {\\n                    \\"FinalPromFee\\": 0,\\n                    \\"ActivityExtInfo\\": {\\n                      \\"activityId\\": \\"1512010241743170\\"\\n                    },\\n                    \\"OptionCode\\": \\"wanhua_activity\\",\\n                    \\"PromType\\": \\"discount\\",\\n                    \\"PromotionId\\": 0,\\n                    \\"PromotionName\\": \\"【xxxx-x月降价项目】MongoDB全规格--xxxxx\\",\\n                    \\"PromotionCode\\": \\"aliwood-xxx\\",\\n                    \\"DerivedPromType\\": \\"subPrice\\"\\n                  }\\n                ]\\n              },\\n              \\"DepreciateInfo\\": {\\n                \\"ListPrice\\": 0,\\n                \\"OriginalStandAmount\\": 0,\\n                \\"CheapStandAmount\\": 0,\\n                \\"CheapRate\\": 0,\\n                \\"Differential\\": 0,\\n                \\"DifferentialName\\": \\"XXXXX\\",\\n                \\"MonthPrice\\": 0,\\n                \\"IsContractActivity\\": false,\\n                \\"IsShow\\": \\"true\\"\\n              },\\n              \\"DiscountFee\\": \\"0.0\\",\\n              \\"ModuleAttrs\\": {\\n                \\"moduleAttr\\": [\\n                  {\\n                    \\"Code\\": \\"dds_dbtype\\",\\n                    \\"Name\\": \\"MongoDB\\",\\n                    \\"Type\\": \\"3\\",\\n                    \\"Value\\": \\"MongoDB\\"\\n                  }\\n                ]\\n              },\\n              \\"ModuleCode\\": \\"dds_dbtype\\",\\n              \\"ModuleId\\": 0,\\n              \\"ModuleName\\": \\"数据库类型\\",\\n              \\"NeedOrderPay\\": true,\\n              \\"PayFee\\": 0,\\n              \\"PricingModule\\": false,\\n              \\"StandPrice\\": 0,\\n              \\"TotalProductFee\\": 0,\\n              \\"ContractActivity\\": false,\\n              \\"StandDiscountPrice\\": 451\\n            }\\n          ]\\n        },\\n        \\"ContractActivity\\": false,\\n        \\"OptionalPromotions\\": {\\n          \\"OptionalPromotion\\": [\\n            {\\n              \\"ActivityCategory\\": \\"discount\\",\\n              \\"ActivityExtInfo\\": {\\n                \\"activityId\\": \\"1512010241743170\\"\\n              },\\n              \\"CanPromFee\\": 4560789,\\n              \\"OptionCode\\": \\"wanhua_activity\\",\\n              \\"PromotionName\\": \\"【xxx月降价项目】MongoDB全规格--xxx\\",\\n              \\"PromotionOptionNo\\": \\"1512010241xxxxx\\",\\n              \\"Selected\\": false,\\n              \\"Show\\": true,\\n              \\"TargetArticleItemCodes\\": {\\n                \\"targetArticleItemCode\\": [\\n                  \\"\\\\\\"\\\\\\"\\"\\n                ]\\n              },\\n              \\"PromotionRuleIdList\\": {\\n                \\"promotionRuleId\\": [\\n                  \\"43289909\\"\\n                ]\\n              }\\n            }\\n          ]\\n        },\\n        \\"PromDetailList\\": {\\n          \\"PromDetail\\": [\\n            {\\n              \\"FinalPromFee\\": 0,\\n              \\"ActivityExtInfo\\": {\\n                \\"activityId\\": \\"1512010241743170\\"\\n              },\\n              \\"OptionCode\\": \\"youhui_quan\\",\\n              \\"PromType\\": \\"discount\\",\\n              \\"PromotionId\\": 0,\\n              \\"PromotionName\\": \\"【xxxx-x月降价项目】MongoDB全规格--xxxxx\\",\\n              \\"PromotionCode\\": \\"ali-wood\\",\\n              \\"DerivedPromType\\": \\"subPrice\\"\\n            }\\n          ]\\n        },\\n        \\"StandDiscountPrice\\": 8687,\\n        \\"StandPrice\\": 62982,\\n        \\"IsContractActivity\\": false\\n      }\\n    ]\\n  },\\n  \\"TraceId\\": \\"27227A3D-6B87-56F3-9E03-9E60F001****\\",\\n  \\"OrderParams\\": \\"{\\\\\\\\\\\\\\"autoPay\\\\\\\\\\\\\\":false}\\\\\\"\\",\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"RuleDescId\\": 0,\\n        \\"Title\\": \\"demo\\",\\n        \\"Name\\": \\"demoname\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribePriceResponse>\\n    <Order>\\n        <Coupons>\\n            <Description>ceshi</Description>\\n            <IsSelected>true</IsSelected>\\n            <CouponNo>youhuiquan_promotion_option_id_for_blank</CouponNo>\\n            <Name>youhuiquan111</Name>\\n        </Coupons>\\n        <OriginalAmount>322.4</OriginalAmount>\\n        <DiscountAmount>322.4</DiscountAmount>\\n        <RuleIds>{ \\"RuleId\\": [ 2075**** ] }</RuleIds>\\n        <TradeAmount>0</TradeAmount>\\n        <Currency>USD</Currency>\\n    </Order>\\n    <RequestId>27227A3D-6B86-56F3-9E03-9E60F001CE12</RequestId>\\n    <SubOrders>\\n        <OriginalAmount>322.4</OriginalAmount>\\n        <DiscountAmount>322.4</DiscountAmount>\\n        <RuleIds>{ \\"RuleId\\": [ 2075**** ] }</RuleIds>\\n        <TradeAmount>0</TradeAmount>\\n        <InstanceId>dds-bp1b6e54e7cc****</InstanceId>\\n    </SubOrders>\\n    <TraceId>27227A3D-6B87-56F3-9E03-9E60F001****</TraceId>\\n    <OrderParams>{\\\\\\"autoPay\\\\\\":false}\\"</OrderParams>\\n    <Rules>\\n        <Title>demo</Title>\\n        <Name>demoname</Name>\\n    </Rules>\\n</DescribePriceResponse>","errorExample":""}]',
      'title' => '查询费用',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRenewalPrice' => 
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
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        1 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
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
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '订单信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Order' => 
              array (
                'description' => '订单信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Coupons' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Coupon' => 
                      array (
                        'description' => '优惠券信息列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '优惠券信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Description' => 
                            array (
                              'description' => '备注信息。',
                              'type' => 'string',
                              'example' => 'coupondemo',
                            ),
                            'IsSelected' => 
                            array (
                              'description' => '是否选中该优惠券。',
                              'type' => 'string',
                              'example' => 'true',
                            ),
                            'CouponNo' => 
                            array (
                              'description' => '优惠券编码。',
                              'type' => 'string',
                              'example' => 'youhuiquan_promotion_option_id_for_blank',
                            ),
                            'Name' => 
                            array (
                              'description' => '优惠券名称。',
                              'type' => 'string',
                              'example' => 'youhuiquan111',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'OriginalAmount' => 
                  array (
                    'description' => '订单原价。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '1144.8',
                  ),
                  'DiscountAmount' => 
                  array (
                    'description' => '订单优惠金额。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '1144.8',
                  ),
                  'RuleIds' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleId' => 
                      array (
                        'description' => '订单交易信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '命中的策略ID集合。',
                          'type' => 'string',
                          'example' => '11111111',
                        ),
                      ),
                    ),
                  ),
                  'TradeAmount' => 
                  array (
                    'description' => '订单实际交易价。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0',
                  ),
                  'Currency' => 
                  array (
                    'description' => '币种。
',
                    'type' => 'string',
                    'example' => 'USD',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFD65226-08CC-4C4D-B6A4-CB3C382F67B0',
              ),
              'SubOrders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubOrder' => 
                  array (
                    'description' => '优惠券对应的策略列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OriginalAmount' => 
                        array (
                          'description' => '订单原价。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1144.8',
                        ),
                        'DiscountAmount' => 
                        array (
                          'description' => '订单优惠金额。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1144.8',
                        ),
                        'RuleIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleId' => 
                            array (
                              'description' => '订单交易信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '命中策略ID信息。',
                                'type' => 'string',
                                'example' => '{"RuleId": [11111111,11111111,11111111]}',
                              ),
                            ),
                          ),
                        ),
                        'TradeAmount' => 
                        array (
                          'description' => '订单实际交易价格。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp12c5b040dc****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Rules' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Rule' => 
                  array (
                    'description' => '活动规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleDescId' => 
                        array (
                          'description' => '策略ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '11111111',
                        ),
                        'Title' => 
                        array (
                          'description' => '策略标题。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'Name' => 
                        array (
                          'description' => '策略名称。',
                          'type' => 'string',
                          'example' => 'demoname',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'DBInstanceId is mandatory for this action.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Order\\": {\\n    \\"Coupons\\": {\\n      \\"Coupon\\": [\\n        {\\n          \\"Description\\": \\"coupondemo\\",\\n          \\"IsSelected\\": \\"true\\",\\n          \\"CouponNo\\": \\"youhuiquan_promotion_option_id_for_blank\\",\\n          \\"Name\\": \\"youhuiquan111\\"\\n        }\\n      ]\\n    },\\n    \\"OriginalAmount\\": 1144.8,\\n    \\"DiscountAmount\\": 1144.8,\\n    \\"RuleIds\\": {\\n      \\"RuleId\\": [\\n        \\"11111111\\"\\n      ]\\n    },\\n    \\"TradeAmount\\": 0,\\n    \\"Currency\\": \\"USD\\"\\n  },\\n  \\"RequestId\\": \\"EFD65226-08CC-4C4D-B6A4-CB3C382F67B0\\",\\n  \\"SubOrders\\": {\\n    \\"SubOrder\\": [\\n      {\\n        \\"OriginalAmount\\": 1144.8,\\n        \\"DiscountAmount\\": 1144.8,\\n        \\"RuleIds\\": {\\n          \\"RuleId\\": [\\n            \\"{\\\\\\"RuleId\\\\\\": [11111111,11111111,11111111]}\\"\\n          ]\\n        },\\n        \\"TradeAmount\\": 0,\\n        \\"InstanceId\\": \\"dds-bp12c5b040dc****\\"\\n      }\\n    ]\\n  },\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"RuleDescId\\": 11111111,\\n        \\"Title\\": \\"demo\\",\\n        \\"Name\\": \\"demoname\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRenewalPriceResponse>\\n    <Order>\\n        <Coupons>\\n            <Description>coupondemo</Description>\\n            <IsSelected>true</IsSelected>\\n            <CouponNo>youhuiquan_promotion_option_id_for_blank</CouponNo>\\n            <Name>youhuiquan111</Name>\\n        </Coupons>\\n        <OriginalAmount>1144.8</OriginalAmount>\\n        <DiscountAmount>1144.8</DiscountAmount>\\n        <RuleIds>11111111</RuleIds>\\n        <TradeAmount>0</TradeAmount>\\n        <Currency>USD</Currency>\\n    </Order>\\n    <RequestId>EFD65226-08CC-4C4D-B6A4-CB3C382F67B0</RequestId>\\n    <SubOrders>\\n        <OriginalAmount>1144.8</OriginalAmount>\\n        <DiscountAmount>1144.8</DiscountAmount>\\n        <RuleIds>{\\"RuleId\\": [11111111,11111111,11111111]}</RuleIds>\\n        <TradeAmount>0</TradeAmount>\\n        <InstanceId>dds-bp12c5b040dc****</InstanceId>\\n    </SubOrders>\\n    <Rules>\\n        <RuleDescId>11111111</RuleDescId>\\n        <Title>demo</Title>\\n        <Name>demoname</Name>\\n    </Rules>\\n</DescribeRenewalPriceResponse>","errorExample":""}]',
      'title' => '查询实例续费一个月的价格',
      'summary' => '查询指定MongoDB实例续费一个月的价格。',
      'description' => '本接口适用于包年包月付费的MongoDB实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransformToPrePaid' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1366caac83****',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费时长，单位为月。取值范围为**1**~**9**、**12**、**24**、**36**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动支付订单，取值：

- **true**：自动支付订单。
- **false**：手动支付订单，详情请参见[手动续费包年包月实例](~~85052~~)。

> 默认值为**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '附加参数，业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '到期后是否自动续费，取值：

- **true**：自动续费。
- **false**：手动续费。

> 默认值为**false**。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F42BB4E-461F-5B55-A37C-53B1141C****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21022019252****',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Period is invalid',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotAvailable',
            'errorMessage' => 'Resource you requested is not available for finance user.',
          ),
          3 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AlreadyPrePaid',
            'errorMessage' => 'This instance is already prepaid',
          ),
          1 => 
          array (
            'errorCode' => 'RealNameAuthenticationError',
            'errorMessage' => 'Your account has not passed the real-name authentication yet.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F42BB4E-461F-5B55-A37C-53B1141C****\\",\\n  \\"OrderId\\": \\"21022019252****\\"\\n}","errorExample":""},{"type":"xml","example":"<TransformToPrePaidResponse>\\n    <RequestId>2F42BB4E-461F-5B55-A37C-53B1141C****</RequestId>\\n    <OrderId>21022019252****</OrderId>\\n</TransformToPrePaidResponse>","errorExample":""}]',
      'title' => '将按量付费实例转换为包年包月实例',
      'summary' => '将按量付费的MongoDB实例转换为包年包月（预付费）实例。',
      'description' => '请确保在使用该接口前，已充分了解MongoDB产品的收费方式和和和<props="china">[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props><props="intl">[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

包年包月的实例无法转换为按量付费的实例，为避免浪费您的资源，请谨慎操作。


调用本接口时，实例必须满足以下条件：

- 实例状态为运行中。
- 实例的计费类型为按量付费。
- 实例没有未完成支付的转包年包月订单。
- 实例规格不能为历史规格（不再售卖的规格），历史规格列表请参见[实例规格表](~~57141~~)。

> 如需将历史规格实例转变为包年包月，请先调用[ModifyDBInstanceSpec](~~61816~~)或[ModifyNodeSpec](~~61923~~)接口变更实例规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewDBInstance' => 
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例续费时长，单位为月。取值：**1~9，12，24，36**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：
- **true**：自动付费，请确保账号有足够的余额。
- **false**：控制台手动付费。具体操作为：登录控制台，在页面右上角选择**费用**>**用户中心**，在**订单管理**找到目标订单进行支付。

默认值为：**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{“ActivityId":"000000000"}',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值说明：
- **default**或**null**（默认）：使用优惠券。
- **youhuiquan_promotion_option_id_for_blank**：不使用优惠券。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值说明：
- **true**：开启自动续费。
- **false**：不开启自动续费。

默认值为 **false**',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => 'true',
              'false' => 'false',
            ),
            'example' => 'true',
            'default' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B118EF45-9633-4EE3-8405-42ED4373721B',
              ),
              'OrderId' => 
              array (
                'description' => '生成的订单ID。',
                'type' => 'string',
                'example' => '203317xxxxxxxx',
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
            'errorCode' => 'TokenServiceError',
            'errorMessage' => 'Request token is duplicated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B118EF45-9633-4EE3-8405-42ED4373721B\\",\\n  \\"OrderId\\": \\"203317xxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RenewDBInstanceResponse>\\r\\n\\t<OrderId>2033xxxxxxxx</OrderId>\\r\\n\\t<RequestId>B118EF45-9633-4EE3-8405-42ED4373721B</RequestId>\\r\\n</RenewDBInstanceResponse>","errorExample":""}]',
      'title' => '手动续费包年包月的实例',
      'summary' => '手动续费包年包月的MongoDB实例。',
      'description' => '<props="china">请确保在使用该接口前，已充分了解云数据库MongoDB版产品的收费方式和[价格](https://www.aliyun.com/price/product#/mongodb/detail)</props>。
<props="intl">请确保在使用该接口前，已充分了解云数据库MongoDB版产品的收费方式和[价格](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。

该接口仅适用于付费类型为包年包月的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeReplicaSetRole' => 
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB4A0595-FCA9-437F-B2BB-25DBFC009D3E',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'dds-bpxxxxxxxx',
              ),
              'ReplicaSets' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ReplicaSet' => 
                  array (
                    'description' => '副本集角色信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnectionPort' => 
                        array (
                          'description' => '节点的连接端口。',
                          'type' => 'string',
                          'example' => '3717',
                        ),
                        'ReplicaSetRole' => 
                        array (
                          'description' => '该节点在副本集中的角色。
- **Primary**：主节点。
- **Secondary**：从节点。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '保留的经典网络地址剩余时长，单位为秒。',
                          'type' => 'string',
                          'example' => '1209582',
                        ),
                        'ConnectionDomain' => 
                        array (
                          'description' => '节点的连接地址。',
                          'type' => 'string',
                          'example' => 'dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。
- **VPC**：专有网络。
- **Classic**：经典网络。
- **Public**：公网。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'RoleId' => 
                        array (
                          'description' => '节点的角色ID。',
                          'type' => 'string',
                          'example' => '651xxxxx',
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
            'errorCode' => 'Forbidden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DB4A0595-FCA9-437F-B2BB-25DBFC009D3E\\",\\n  \\"DBInstanceId\\": \\"dds-bpxxxxxxxx\\",\\n  \\"ReplicaSets\\": {\\n    \\"ReplicaSet\\": [\\n      {\\n        \\"ConnectionPort\\": \\"3717\\",\\n        \\"ReplicaSetRole\\": \\"Primary\\",\\n        \\"ExpiredTime\\": \\"1209582\\",\\n        \\"ConnectionDomain\\": \\"dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"RoleId\\": \\"651xxxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeReplicaSetRoleResponse>\\r\\n\\t<RequestId>7762D0FF-F34D-4DAF-9D06-6C1C28CC98CD</RequestId>\\r\\n\\t<DBInstanceId>dds-bpxxxxxxxx</DBInstanceId>\\r\\n\\t<ReplicaSets>\\r\\n\\t\\t<ReplicaSet>\\r\\n\\t\\t\\t<NetworkType>Classic</NetworkType>\\r\\n\\t\\t\\t<ConnectionPort>3717</ConnectionPort>\\r\\n\\t\\t\\t<ReplicaSetRole>Primary</ReplicaSetRole>\\r\\n\\t\\t\\t<ConnectionDomain>dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com</ConnectionDomain>\\r\\n\\t\\t\\t<ExpiredTime>12xxxxx</ExpiredTime>\\r\\n\\t\\t\\t<RoleId>55xxxxx</RoleId>\\r\\n\\t\\t</ReplicaSet>\\r\\n\\t\\t<ReplicaSet>\\r\\n\\t\\t\\t<NetworkType>Classic</NetworkType>\\r\\n\\t\\t\\t<ConnectionPort>3717</ConnectionPort>\\r\\n\\t\\t\\t<ReplicaSetRole>Secondary</ReplicaSetRole>\\r\\n\\t\\t\\t<ConnectionDomain>dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com</ConnectionDomain>\\r\\n\\t\\t\\t<ExpiredTime>12xxxxx</ExpiredTime>\\r\\n\\t\\t\\t<RoleId>55xxxxx</RoleId>\\r\\n\\t\\t</ReplicaSet>\\r\\n\\t\\t<ReplicaSet>\\r\\n\\t\\t\\t<NetworkType>VPC</NetworkType>\\r\\n\\t\\t\\t<ConnectionPort>3717</ConnectionPort>\\r\\n\\t\\t\\t<ReplicaSetRole>Primary</ReplicaSetRole>\\r\\n\\t\\t\\t<ConnectionDomain>dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com</ConnectionDomain>\\r\\n\\t\\t\\t<RoleId>55xxxxx</RoleId>\\r\\n\\t\\t</ReplicaSet>\\r\\n\\t\\t<ReplicaSet>\\r\\n\\t\\t\\t<NetworkType>VPC</NetworkType>\\r\\n\\t\\t\\t<ConnectionPort>3717</ConnectionPort>\\r\\n\\t\\t\\t<ReplicaSetRole>Secondary</ReplicaSetRole>\\r\\n\\t\\t\\t<ConnectionDomain>dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com</ConnectionDomain>\\r\\n\\t\\t\\t<RoleId>55xxxxx</RoleId>\\r\\n\\t\\t</ReplicaSet>\\r\\n\\t</ReplicaSets>\\r\\n</DescribeReplicaSetRoleResponse>","errorExample":""}]',
      'title' => '查询实例中的角色信息及连接信息',
      'summary' => '查询MongoDB实例中的角色信息及连接信息。',
      'description' => '本接口适用于副本集实例和单节点实例，不适用于分片集群实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeKernelReleaseNotes' => 
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
        'abilityTreeCode' => '8279',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAPXG80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'KernelVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库小版本号，例如：**mongodb_20180522_0.4.8**。

您可以前往MongoDB控制台的实例**基本信息**页面，在**规格信息**区域获取**小版本**。
> 该参数必传，将返回大于该版本的版本号列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodb_20180522_0.4.8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F01D4DDA-CB72-4083-B399-AF4642294FE6',
              ),
              'ReleaseNotes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ReleaseNote' => 
                  array (
                    'description' => '版本发布日志信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ReleaseNote' => 
                        array (
                          'description' => '发布日志。',
                          'type' => 'string',
                          'example' => '放开sharding某集合开关balancer的限制',
                        ),
                        'KernelVersion' => 
                        array (
                          'description' => '版本号。',
                          'type' => 'string',
                          'example' => 'mongodb_20180619_0.4.9',
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
            'errorCode' => 'InvalidKernelReleaseNotes',
            'errorMessage' => 'The format of specified KernelVersion is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F01D4DDA-CB72-4083-B399-AF4642294FE6\\",\\n  \\"ReleaseNotes\\": {\\n    \\"ReleaseNote\\": [\\n      {\\n        \\"ReleaseNote\\": \\"放开sharding某集合开关balancer的限制\\",\\n        \\"KernelVersion\\": \\"mongodb_20180619_0.4.9\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeKernelReleaseNotesResponse>\\r\\n\\t<RequestId>F01D4DDA-CB72-4083-B399-AF4642294FE6</RequestId>\\r\\n\\t<ReleaseNotes>\\r\\n\\t\\t<ReleaseNote>\\r\\n\\t\\t\\t<KernelVersion>mongodb_20180619_0.4.9</KernelVersion>\\r\\n\\t\\t\\t<ReleaseNote>放开sharding某集合开关balancer的限制</ReleaseNote>\\r\\n\\t\\t</ReleaseNote>\\r\\n\\t</ReleaseNotes>\\r\\n</DescribeKernelReleaseNotesResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
      'title' => '查询实例的小版本发布日志',
      'summary' => '查询MongoDB实例的小版本发布日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAvailableEngineVersion' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '52507B6B-003B-47A3-A0A3-9FE992C7A243',
              ),
              'EngineVersions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EngineVersion' => 
                  array (
                    'description' => '可升级的版本列表。

> 如果当前已经是最新版本，则本参数返回为空。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可升级的版本号。',
                      'type' => 'string',
                      'example' => '4.0',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"52507B6B-003B-47A3-A0A3-9FE992C7A243\\",\\n  \\"EngineVersions\\": {\\n    \\"EngineVersion\\": [\\n      \\"4.0\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeAvailableEngineVersionResponse>\\r\\n\\t<EngineVersions>\\r\\n\\t\\t<EngineVersion>4.0</EngineVersion>\\r\\n\\t</EngineVersions>\\r\\n\\t<RequestId>52507B6B-003B-47A3-A0A3-9FE992C7A243</RequestId>\\r\\n</DescribeAvailableEngineVersionResponse>","errorExample":""}]',
      'title' => '查询实例可升级的版本',
      'summary' => '查询MongoDB实例可升级的版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
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
        'abilityTreeCode' => '8273',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAPXG80',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)接口查询地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
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
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
            ),
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
            'required' => false,
            'example' => 'dds-bp199659b178****',
          ),
        ),
        4 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '副本集实例的节点数量，取值：

- **3**
- **5**
- **7**
',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        5 => 
        array (
          'name' => 'DBInstanceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，取值说明：

- 以中文、英文字母开头。
- 可以包含数字、中文、英文、下划线（_）和短横线（-）。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试数据库',
          ),
        ),
        6 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的到期时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-12-26T16:00Z',
            'enum' => 
            array (
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'DBInstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的状态信息，取值详情请参见[实例状态表](~~63870~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
            'enum' => 
            array (
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'DBInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值说明： 
- **sharding**：分片集群实例。
- **replicate**：默认值，副本集实例和单节点实例。
 <props="china">
- **serverless**：Serverless实例。
</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'sharding',
            'default' => 'replicate',
          ),
        ),
        9 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，取值详情请参见[实例规格表](~~57141~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.mongo.mid',
          ),
        ),
        10 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，取值为**MongoDB**。',
            'type' => 'string',
            'required' => false,
            'example' => 'MongoDB',
            'enum' => 
            array (
              0 => 'MongoDB',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号，取值：
- **7.0**
- **6.0**
- **5.0**
- **4.4**
- **4.2**
- **4.0**
- **3.4**',
            'type' => 'string',
            'required' => false,
            'example' => '4.0',
          ),
        ),
        12 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例网络类型，取值说明：
- **Classic**：经典网络。
- **VPC**：VPC网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
          ),
        ),
        13 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1n3i15v90el48nx****',
          ),
        ),
        14 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络的交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1vj604nj5a9zz74****',
          ),
        ),
        15 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例付费类型，取值说明：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
          ),
        ),
        16 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        17 => 
        array (
          'name' => 'Expired',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例过期状态，取值说明：
- **true**：已过期。
- **false**：未过期。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        18 => 
        array (
          'name' => 'ConnectionDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的连接地址，您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp1ea17b41abecf43****.mongodb.rds.aliyuncs.com',
          ),
        ),
        19 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        20 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签管理。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。N的取值范围为**1**~**20**。

- 不能以`aliyun`、`acs:`、`http://`或`https://`开头。
- 最多支持64个字符。
- 不允许传入空字符串。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testdatabase',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。N的取值范围为**1**~**20**。

- 不能以`aliyun`、`acs`:、`http://`或`https://`开头。
- 最多支持128个字符。
- TagValue可以为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'apitest',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        21 => 
        array (
          'name' => 'DBNodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于筛选标准实例还是测试实例

1. 单节点实例和dbfs实例：customized
2. 标准实例（副本集和分片集群）：standard
3. 默认（展示全部实例）：default',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
            'default' => 'default',
          ),
        ),
      ),
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
                'description' => '查询结果中实例的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0E4FE33F-5510-5758-8FA7-A6672CDE****',
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
              'DBInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstance' => 
                  array (
                    'description' => '实例信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreationTime' => 
                        array (
                          'description' => '实例创建的时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-03-25T02:18:00Z',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '实例付费类型，取值说明：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：按量付费。',
                          'type' => 'string',
                          'example' => 'PrePaid',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '资源标签信息列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '资源标签信息列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '资源的标签键。',
                                    'type' => 'string',
                                    'example' => 'test',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '资源的标签值。',
                                    'type' => 'string',
                                    'example' => 'api',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'VpcAuthMode' => 
                        array (
                          'description' => '是否开启了专有网络免密访问功能，取值说明：
- **Open**：开启。
- **Close**：关闭。',
                          'type' => 'string',
                          'example' => 'Close',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '实例网络类型，取值说明：
* **Classic**：经典网络。
* **VPC**：专有网络。',
                          'type' => 'string',
                          'example' => 'Classic',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '实例的锁定状态，取值说明：
* **Unlock**：正常。
* **ManualLock**：手动触发锁定。
* **LockByExpiration**：实例过期自动锁定。
* **LockByRestoration**：实例回滚前自动锁定。
* **LockByDiskQuota**：实例空间满自动锁定。
* **Released**：实例已释放。此时实例无法进行解锁，只能使用备份数据重新创建新实例，重建时间较长，请耐心等待。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '数据库版本号，取值：

- **7.0**
- **6.0**
- **5.0**
- **4.4**
- **4.2**
- **4.0**
- **3.4**',
                          'type' => 'string',
                          'example' => '4.2',
                        ),
                        'MongosList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MongosAttribute' => 
                            array (
                              'description' => 'Mongos节点信息列表。

> 实例类型为分片集群实例时，返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'Mongos节点信息列表。

> 实例类型为分片集群实例时，返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'NodeClass' => 
                                  array (
                                    'description' => 'Mongos节点规格。',
                                    'type' => 'string',
                                    'example' => 'dds.mongos.standard',
                                  ),
                                  'NodeDescription' => 
                                  array (
                                    'description' => 'Mongos节点描述。',
                                    'type' => 'string',
                                    'example' => '测试mongos节点',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => 'Mongos节点ID。',
                                    'type' => 'string',
                                    'example' => 's-bp10e3b0d02f****',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DBInstanceDescription' => 
                        array (
                          'description' => '实例的描述或备注信息。',
                          'type' => 'string',
                          'example' => '测试数据库',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '实例到期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-11-25T16:00Z',
                        ),
                        'DBInstanceType' => 
                        array (
                          'description' => '实例类型，取值说明： 
- **sharding**：分片集群实例。
- **replicate**：副本集实例和单节点实例。
<props="china">
- **serverless**：Serverless实例。
</props>
',
                          'type' => 'string',
                          'example' => 'sharding',
                        ),
                        'LastDowngradeTime' => 
                        array (
                          'description' => '实例最后一次降配时间。',
                          'type' => 'string',
                          'example' => '2021-05-08',
                        ),
                        'ShardList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ShardAttribute' => 
                            array (
                              'description' => 'Shard节点信息列表。
> 实例类型为分片集群实例时返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'Shard节点信息列表。
> 实例类型为分片集群实例时返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'NodeClass' => 
                                  array (
                                    'description' => 'Shard节点的实例规格。',
                                    'type' => 'string',
                                    'example' => 'dds.shard.mid',
                                  ),
                                  'NodeDescription' => 
                                  array (
                                    'description' => 'Shard节点描述。',
                                    'type' => 'string',
                                    'example' => '测试shard节点',
                                  ),
                                  'NodeStorage' => 
                                  array (
                                    'description' => 'Shard节点的存储空间，单位为GB。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '10',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => 'Shard节点ID。',
                                    'type' => 'string',
                                    'example' => 'd-bp1cac6f2083****',
                                  ),
                                  'ReadonlyReplicas' => 
                                  array (
                                    'description' => 'Shard节点中只读节点的个数。返回值范围：**0**~**5**。
',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '2',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'DestroyTime' => 
                        array (
                          'description' => '实例数据销毁时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> - 包年包月实例，到期后第16天计算资源会被释放，数据继续保留7天，到期后第23天，数据会被删除且无法恢复。
> - 按量付费实例，欠费后第16天计算资源会被释放，数据继续保留7天，欠费后第23天，数据会被删除且无法恢复。',
                          'type' => 'string',
                          'example' => '2021-12-10T16:00:00Z',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '实例状态，详情请参见[实例状态表](~~63870~~)。',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '实例所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'DBInstanceStorage' => 
                        array (
                          'description' => '实例存储空间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '实例所属可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-g',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp18b0934e70****',
                        ),
                        'DBInstanceClass' => 
                        array (
                          'description' => '实例规格。',
                          'type' => 'string',
                          'example' => 'dds.mongo.mid',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库引擎。',
                          'type' => 'string',
                          'example' => 'MongoDB',
                        ),
                        'ReplicationFactor' => 
                        array (
                          'description' => '实例中节点的个数。

> 实例类型为副本集实例时返回该参数。',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'KindCode' => 
                        array (
                          'description' => '实例的类型，取值说明：
- **0**：物理机。
- **1**：ECS。
- **2**：DOCKER。
- **18**：k8s新架构实例。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CapacityUnit' => 
                        array (
                          'description' => '实例消耗的读写吞吐量。

> 当实例类型为Serverless实例时返回该参数。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型，取值说明： 

- **cloud_essd**：ESSD云盘。
- **local_ssd**：SSD本地盘。',
                          'type' => 'string',
                          'example' => 'local_ssd',
                        ),
                        'SecondaryZoneId' => 
                        array (
                          'description' => '实现多可用区部署时，实例的备可用区1，取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：香港可用区B。
- **cn-hongkong-c**：香港可用区C。
- **cn-hongkong-d**：香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

> - 当实例为4.4或5.0版本的多可用区副本集实例或分片集群实例时，返回该参数。
> - 目前仅中国站支持返回该参数。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-i',
                        ),
                        'HiddenZoneId' => 
                        array (
                          'description' => '实现多可用区部署时，实例的备可用区2，取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：香港可用区B。
- **cn-hongkong-c**：香港可用区C。
- **cn-hongkong-d**：香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

> - 当实例为4.4或5.0版本的多可用区副本集实例或分片集群实例时，返回该参数。
> - 目前仅中国站支持返回该参数。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'BackupRetentionPolicy' => 
                        array (
                          'description' => '备份保留策略，取值如下：

- **0**：实例释放时立即删除该实例的所有备份集。
- **1**：实例释放时会自动备份，长期保留该备份集。
- **2**：实例释放时会自动备份，并长期保留该集群的所有备份集。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ReleaseTime' => 
                        array (
                          'description' => '实例释放时间。',
                          'type' => 'string',
                          'example' => '2024-06-17T07:01Z',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 5,\\n  \\"RequestId\\": \\"0E4FE33F-5510-5758-8FA7-A6672CDE****\\",\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"DBInstances\\": {\\n    \\"DBInstance\\": [\\n      {\\n        \\"CreationTime\\": \\"2021-03-25T02:18:00Z\\",\\n        \\"ChargeType\\": \\"PrePaid\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test\\",\\n              \\"Value\\": \\"api\\"\\n            }\\n          ]\\n        },\\n        \\"VpcAuthMode\\": \\"Close\\",\\n        \\"NetworkType\\": \\"Classic\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"4.2\\",\\n        \\"MongosList\\": {\\n          \\"MongosAttribute\\": [\\n            {\\n              \\"NodeClass\\": \\"dds.mongos.standard\\",\\n              \\"NodeDescription\\": \\"测试mongos节点\\",\\n              \\"NodeId\\": \\"s-bp10e3b0d02f****\\"\\n            }\\n          ]\\n        },\\n        \\"DBInstanceDescription\\": \\"测试数据库\\",\\n        \\"ExpireTime\\": \\"2021-11-25T16:00Z\\",\\n        \\"DBInstanceType\\": \\"sharding\\",\\n        \\"LastDowngradeTime\\": \\"2021-05-08\\",\\n        \\"ShardList\\": {\\n          \\"ShardAttribute\\": [\\n            {\\n              \\"NodeClass\\": \\"dds.shard.mid\\",\\n              \\"NodeDescription\\": \\"测试shard节点\\",\\n              \\"NodeStorage\\": 10,\\n              \\"NodeId\\": \\"d-bp1cac6f2083****\\",\\n              \\"ReadonlyReplicas\\": 2\\n            }\\n          ]\\n        },\\n        \\"DestroyTime\\": \\"2021-12-10T16:00:00Z\\",\\n        \\"DBInstanceStatus\\": \\"Running\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"DBInstanceStorage\\": 20,\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n        \\"DBInstanceId\\": \\"dds-bp18b0934e70****\\",\\n        \\"DBInstanceClass\\": \\"dds.mongo.mid\\",\\n        \\"Engine\\": \\"MongoDB\\",\\n        \\"ReplicationFactor\\": \\"3\\",\\n        \\"KindCode\\": \\"1\\",\\n        \\"CapacityUnit\\": \\"100\\",\\n        \\"StorageType\\": \\"local_ssd\\",\\n        \\"SecondaryZoneId\\": \\"cn-hangzhou-i\\",\\n        \\"HiddenZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"BackupRetentionPolicy\\": 1,\\n        \\"ReleaseTime\\": \\"2024-06-17T07:01Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询MongoDB实例列表',
      'summary' => '查询MongoDB实例列表。',
      'description' => '<props="china">该接口默认查询副本集实例（包含单节点实例）列表，即未配置请求参数**DBInstanceType**时，该参数的默认值为**replicate**。如果您需要查询分片集群实例列表，请配置**DBInstanceType**的值为**sharding**；如果您需要查询Serverless实例列表，请配置**DBInstanceType**的值为**serverless**。</props>
<props="intl">该接口默认查询副本集实例（包含单节点实例）列表，即未配置请求参数**DBInstanceType**时，该参数的默认值为**replicate**。如果您需要查询分片集群实例列表，请配置**DBInstanceType**的值为**sharding**。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceSwitchLog' => 
    array (
      'summary' => '查询实例的主备切换日志。',
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
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-mm-dd</i>T<i>hh:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-27T02:46Z',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-mm-dd</i>T<i>hh:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-05-28T02:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '每页记录数，取值：**30、50、100**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
            ),
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
            'required' => false,
            'example' => 'dds-uf68f1b5a57exxxx',
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
                'example' => 'ECBCA991-XXXX-XXXX-834C-B3E8007F33AA',
              ),
              'DBInstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'dds-uf68f1b5a57exxxx',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果中主备切换记录的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'LogItems' => 
              array (
                'description' => '主备切换日志列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '切换记录对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SwitchStatus' => 
                    array (
                      'description' => '切换状态。
返回值为：
- **1**：切换成功。
- **0**：切换失败。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '切换时间，格式为<i>yyyy-mm-dd</i>T<i>hh:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-02-07T18:00:00Z',
                    ),
                    'SwitchCode' => 
                    array (
                      'description' => '切换原因代码：
- USER_CONSOLE_OPERATION：人工操作
- OPERATION_AND_MAINTENANCE：风险隐患
- MACHINE_DOWNTIME：宿主机下线
- PRIMARY_UNHEALTHY：实例异常
- SECONDARY_UNHEALTHY：实例异常
- MULTIPLE_NODE_FAILURES：实例异常',
                      'type' => 'string',
                      'example' => 'USER_CONSOLE_OPERATION',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '当实例为副本集实例，展示实例ID；当实例为分片集实例，展示切换的节点ID。',
                      'type' => 'string',
                      'example' => '当实例为副本集实例：dds-uf68f1b5a57exxxx。
当实例为分片集实例：d-uf652b73f554xxxx',
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
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be greater than the start time',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ECBCA991-XXXX-XXXX-834C-B3E8007F33AA\\",\\n  \\"DBInstanceId\\": \\"dds-uf68f1b5a57exxxx\\",\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"LogItems\\": [\\n    {\\n      \\"SwitchStatus\\": \\"1\\",\\n      \\"SwitchTime\\": \\"2023-02-07T18:00:00Z\\",\\n      \\"SwitchCode\\": \\"USER_CONSOLE_OPERATION\\",\\n      \\"NodeId\\": \\"当实例为副本集实例：dds-uf68f1b5a57exxxx。\\\\n当实例为分片集实例：d-uf652b73f554xxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例的主备切换日志信息',
      'description' => '调用本接口时，实例必须满足以下条件：

- 实例的类型为副本集实例或分片集群实例。

- 实例的规格类型为本地物理盘。',
    ),
    'DescribeDBInstanceAttribute' => 
    array (
      'summary' => '查询云数据库MongoDB实例的信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
        'abilityTreeCode' => '8269',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbWP8F69',
          1 => 'FEATUREmongodbOM9UA4',
          2 => 'FEATUREmongodbAPXG80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，固定取值：**MongoDB**。',
            'type' => 'string',
            'required' => false,
            'example' => 'MongoDB',
            'enum' => 
            array (
              0 => 'MongoDB',
            ),
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
            'example' => 'dds-bp11483712c1****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。
>目前仅中国站支持配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        3 => 
        array (
          'name' => 'IsDelete',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例是否已删除，取值说明： 
- **false**：实例正常运行，查询运行中实例信息。
- **true**：实例已删除，查询被删除实例的信息。',
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
          'schema' => 
          array (
            'description' => '实例详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A935A8EE-A6CC-53DE-98BA-20ABAA7E632B',
              ),
              'DBInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstance' => 
                  array (
                    'description' => '实例详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例详细信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreationTime' => 
                        array (
                          'description' => '实例的创建时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2022-01-02T07:43:59Z',
                        ),
                        'ReplicaSets' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReplicaSet' => 
                            array (
                              'description' => '副本集实例信息。
> 当实例类型为副本集实例时，返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '副本集实例信息。
> 当实例类型为副本集实例时，返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VSwitchId' => 
                                  array (
                                    'description' => '交换机ID。

> 当实例的网络类型为专有网络时，返回该参数。',
                                    'type' => 'string',
                                    'example' => 'vpc-bp1jk5vwkcri27qme****',
                                  ),
                                  'ConnectionPort' => 
                                  array (
                                    'description' => '节点的连接端口。',
                                    'type' => 'string',
                                    'example' => '3717',
                                  ),
                                  'ReplicaSetRole' => 
                                  array (
                                    'description' => '节点的角色，取值说明：
- **Primary**：主节点。
- **Secondary**：从节点。',
                                    'type' => 'string',
                                    'example' => 'Primary',
                                  ),
                                  'ConnectionDomain' => 
                                  array (
                                    'description' => '节点的连接地址。',
                                    'type' => 'string',
                                    'example' => 'dds-bp11483712c1****.mongodb.rds.aliyuncs.com',
                                  ),
                                  'VPCCloudInstanceId' => 
                                  array (
                                    'description' => '实例ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                                    'type' => 'string',
                                    'example' => 'dds-bp11483712c1****',
                                  ),
                                  'NetworkType' => 
                                  array (
                                    'description' => '网络类型，取值说明： 
- **Classic**：经典网络。
- **VPC**：专有网络。
',
                                    'type' => 'string',
                                    'example' => 'VPC',
                                  ),
                                  'VPCId' => 
                                  array (
                                    'description' => '专有网络ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                                    'type' => 'string',
                                    'example' => 'vpc-bp1jk5vwkcri27qme****',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ReplacateId' => 
                        array (
                          'description' => '全球多活实例的逻辑ID。

> MongoDB当前不支持新购该类型实例，该参数仅适用于老版本全球多活实例。',
                          'type' => 'string',
                          'example' => 'bls-m****',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '实例的标签信息列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实例的标签信息列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '实例的标签键。',
                                    'type' => 'string',
                                    'example' => 'test',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '实例的标签值。',
                                    'type' => 'string',
                                    'example' => 'api',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'VpcAuthMode' => 
                        array (
                          'description' => '私网免密访问模式，取值说明：
- **Open**：开启私网免密访问。
- **Close**：关闭私网免密访问，需要使用密码访问。
- **NotSupport**：不支持该功能。',
                          'type' => 'string',
                          'example' => 'Open',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '实例的网络类型，取值说明：
- **Classic**：经典网络。
- **VPC**：专有网络。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'LockMode' => 
                        array (
                          'description' => '实例的锁定状态，取值说明：
* **Unlock**：正常，没有被锁定。
* **ManualLock**：手动触发锁定。
* **LockByExpiration**：实例过期自动锁定。
* **LockByRestoration**：实例回滚前自动锁定。
* **LockByDiskQuota**：实例空间满自动锁定。
* **Released**：实例已释放。',
                          'type' => 'string',
                          'example' => 'Unlock',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '数据库大版本。',
                          'type' => 'string',
                          'example' => '4.4',
                        ),
                        'MaxIOPS' => 
                        array (
                          'description' => '实例最大IOPS。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1000',
                        ),
                        'MaxMBPS' => 
                        array (
                          'description' => '实例的最大云盘吞吐量，单位MB/s。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '350',
                        ),
                        'VPCCloudInstanceIds' => 
                        array (
                          'description' => '实例ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                          'type' => 'string',
                          'example' => 'dds-bp11483712c1****',
                        ),
                        'MongosList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MongosAttribute' => 
                            array (
                              'description' => 'Mongos节点信息列表。

> 当实例类型为分片集群实例时，返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'Mongos节点信息列表。

> 当实例类型为分片集群实例时，返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VpcCloudInstanceId' => 
                                  array (
                                    'description' => 'Mongos节点的ID。
',
                                    'type' => 'string',
                                    'example' => 's-bp1d8c262a158****',
                                  ),
                                  'MaxIOPS' => 
                                  array (
                                    'description' => 'Mongos节点的最大IOPS。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '800',
                                  ),
                                  'VSwitchId' => 
                                  array (
                                    'description' => '交换机ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                                    'type' => 'string',
                                    'example' => 'vsw-bp1vj604nj5a9zz74****',
                                  ),
                                  'NodeClass' => 
                                  array (
                                    'description' => 'Mongos节点的规格。',
                                    'type' => 'string',
                                    'example' => 'dds.mongos.mid',
                                  ),
                                  'MaxConnections' => 
                                  array (
                                    'description' => 'Mongos节点的最大连接数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1000',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'Mongos节点的连接端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3717',
                                  ),
                                  'VPCId' => 
                                  array (
                                    'description' => '专有网络ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                                    'type' => 'string',
                                    'example' => 'vpc-bp1n3i15v90el48nx****',
                                  ),
                                  'ConnectSting' => 
                                  array (
                                    'description' => 'Mongos节点的连接地址。',
                                    'type' => 'string',
                                    'example' => 's-bp1d8c262a15****.mongodb.rds.aliyuncs.com',
                                  ),
                                  'NodeDescription' => 
                                  array (
                                    'description' => 'Mongos节点的名称。',
                                    'type' => 'string',
                                    'example' => 'mongos1',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => 'Mongos节点的ID。',
                                    'type' => 'string',
                                    'example' => 's-bp1d8c262a15****',
                                  ),
                                  'Status' => 
                                  array (
                                    'description' => 'Mongos节点的状态。具体请参见[实例状态表](~~63870~~)。 ',
                                    'type' => 'string',
                                    'example' => 'Running',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ProtocolType' => 
                        array (
                          'description' => '实例的访问协议类型，取值说明：

- **mongodb**：MongoDB协议。
- **dynamodb**：DynamoDB协议。

> 当实例类型为分片集群实例时，返回该参数。',
                          'type' => 'string',
                          'example' => 'mongodb',
                        ),
                        'DBInstanceDescription' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => '测试数据库',
                        ),
                        'CurrentKernelVersion' => 
                        array (
                          'description' => '实例当前数据库的小版本号。',
                          'type' => 'string',
                          'example' => '5.0.5-20220721143518_0',
                        ),
                        'DBInstanceReleaseProtection' => 
                        array (
                          'description' => '是否开启实例释放保护，取值说明：
- **true**：已开启。
- **false**：未开启。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '包年包月实例的到期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。
> 当实例的付费类型为包年包月时返回该参数。',
                          'type' => 'string',
                          'example' => '2022-02-05T16:00Z',
                        ),
                        'MaintainStartTime' => 
                        array (
                          'description' => '实例可维护时间段的开始时间，格式为<i>HH:mm</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '18:00Z',
                        ),
                        'DBInstanceType' => 
                        array (
                          'description' => '实例类型，取值说明：
- **replicate**：副本集实例。
- **sharding**：分片集群实例。
<props="china">
- **serverless**：Serverless实例。
</props>',
                          'type' => 'string',
                          'example' => 'replicate',
                        ),
                        'LastDowngradeTime' => 
                        array (
                          'description' => '实例最近一次降配时间。',
                          'type' => 'string',
                          'example' => '2022-01-08',
                        ),
                        'ShardList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ShardAttribute' => 
                            array (
                              'description' => 'Shard节点信息列表。
> 当实例类型为分片集群实例时返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'Shard节点信息列表。
> 当实例类型为分片集群实例时返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'MaxIOPS' => 
                                  array (
                                    'description' => 'Shard节点的最大IOPS。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '8000',
                                  ),
                                  'ConnectString' => 
                                  array (
                                    'description' => 'Shard节点的连接地址。',
                                    'type' => 'string',
                                    'example' => 'd-bp1af0680a9c6d3****.mongodb.rds.aliyuncs.com:****',
                                  ),
                                  'NodeClass' => 
                                  array (
                                    'description' => 'Shard节点的规格。',
                                    'type' => 'string',
                                    'example' => 'dds.shard.mid',
                                  ),
                                  'MaxConnections' => 
                                  array (
                                    'description' => 'Shard节点的最大连接数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '8000',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'Shard节点的端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3717',
                                  ),
                                  'NodeDescription' => 
                                  array (
                                    'description' => 'Shard节点的名称。',
                                    'type' => 'string',
                                    'example' => 'testshard',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => 'Shard节点的ID。',
                                    'type' => 'string',
                                    'example' => 'd-bp16e09d9c5d****',
                                  ),
                                  'NodeStorage' => 
                                  array (
                                    'description' => 'Shard节点的存储空间，单位为GB。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '10',
                                  ),
                                  'ReadonlyReplicas' => 
                                  array (
                                    'description' => 'Shard节点中只读节点的个数，取值范围为**0**~**5**（整数）。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'Status' => 
                                  array (
                                    'description' => 'Shard节点的状态，具体请参见[实例状态表](~~63870~~)。 ',
                                    'type' => 'string',
                                    'example' => 'Running',
                                  ),
                                  'MaxDiskMbps' => 
                                  array (
                                    'description' => 'shard节点的最大云盘吞吐量。',
                                    'type' => 'string',
                                    'example' => '350',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'MaintainEndTime' => 
                        array (
                          'description' => '实例可维护时间段的结束时间，格式为<i>HH:mm</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '03:00Z',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '实例状态，具体请参见[实例状态表](~~63870~~)。 ',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '专有网络ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                          'type' => 'string',
                          'example' => 'vpc-bp1n3i15v90el48nx****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '实例所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'DBInstanceStorage' => 
                        array (
                          'description' => '实例存储空间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'ReplicaSetName' => 
                        array (
                          'description' => '副本集实例的名称。

> 当实例类型为副本集实例时，返回该参数。',
                          'type' => 'string',
                          'example' => 'mgset-10ace****',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '交换机ID。
> 当实例的网络类型为专有网络时，返回该参数。',
                          'type' => 'string',
                          'example' => 'vsw-bp1oo2a7isyrb8igf****',
                        ),
                        'StorageEngine' => 
                        array (
                          'description' => '实例的存储引擎类型。',
                          'type' => 'string',
                          'example' => 'WiredTiger',
                        ),
                        'ConfigserverList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConfigserverAttribute' => 
                            array (
                              'description' => 'Configserver节点信息列表。

> 当实例类型为分片集群实例时，返回该参数。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'Configserver节点的信息列表。

> 当实例类型为分片集群实例时，返回该参数。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'MaxIOPS' => 
                                  array (
                                    'description' => 'Configserver节点的最大IOPS。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1000',
                                  ),
                                  'ConnectString' => 
                                  array (
                                    'description' => 'Configserver节点的连接地址。',
                                    'type' => 'string',
                                    'example' => 'dds-bp18b0934e7053e4-cs****.mongodb.rds.aliyuncs.com',
                                  ),
                                  'NodeClass' => 
                                  array (
                                    'description' => 'Configserver节点的规格。',
                                    'type' => 'string',
                                    'example' => 'dds.cs.mid',
                                  ),
                                  'MaxConnections' => 
                                  array (
                                    'description' => 'Configserver节点的最大连接数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1000',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'Configserver节点的端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3717',
                                  ),
                                  'NodeDescription' => 
                                  array (
                                    'description' => 'Configserver节点的名称。',
                                    'type' => 'string',
                                    'example' => 'testConfigserver',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => 'Configserver节点ID。',
                                    'type' => 'string',
                                    'example' => 'dds-bp11483712c1****-cs',
                                  ),
                                  'NodeStorage' => 
                                  array (
                                    'description' => 'Configserver节点的存储空间，单位为GB。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '20',
                                  ),
                                  'Status' => 
                                  array (
                                    'description' => 'ConfigServer节点的状态。具体请参见[实例状态表](~~63870~~)。 ',
                                    'type' => 'string',
                                    'example' => 'Running',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所属资源组ID。
>目前仅中国站支持返回该参数。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '实例所属可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'MaxConnections' => 
                        array (
                          'description' => '实例最大连接数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '500',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp11483712c1****',
                        ),
                        'DBInstanceClass' => 
                        array (
                          'description' => '实例规格。',
                          'type' => 'string',
                          'example' => 'dds.mongo.mid',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库引擎。',
                          'type' => 'string',
                          'example' => 'MongoDB',
                        ),
                        'ReadonlyReplicas' => 
                        array (
                          'description' => '实例的只读节点个数。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ReplicationFactor' => 
                        array (
                          'description' => '实例节点数量。 
> 实例类型为副本集实例时，返回该参数。',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'KindCode' => 
                        array (
                          'description' => '实例的类型，取值说明：
- **0**：本地盘版实例。
- **3**：单节点实例。
- **18**：云盘版实例。',
                          'type' => 'string',
                          'example' => '18',
                        ),
                        'CapacityUnit' => 
                        array (
                          'description' => '实例消耗的读写吞吐量。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '实例的付费类型，取值说明：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：后付费，按量付费。',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型，取值说明： 

**cloud\\_essd1**：ESSD PL1云盘。
**cloud\\_essd2**：ESSD PL2云盘。
**cloud\\_essd3**：ESSD PL3云盘。
**local\\_ssd**：SSD本地盘。
**cloud\\_essd\\_dbfs\\_s**：DBFS共享存储云盘。',
                          'type' => 'string',
                          'example' => 'cloud_essd1',
                        ),
                        'SecondaryZoneId' => 
                        array (
                          'description' => '实现多可用区部署时，实例的备可用区1，取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：香港可用区B。
- **cn-hongkong-c**：香港可用区C。
- **cn-hongkong-d**：香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

>- 当实例为4.4或5.0版本的多可用区副本集实例或分片集群实例时，返回该参数。
- 目前仅中国站支持返回该参数。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-i',
                        ),
                        'HiddenZoneId' => 
                        array (
                          'description' => '实现多可用区部署时，实例的备可用区2，取值说明：
- **cn-hangzhou-g**：杭州可用区G。
- **cn-hangzhou-h**：杭州可用区H。
- **cn-hangzhou-i**：杭州可用区I。
- **cn-hongkong-b**：香港可用区B。
- **cn-hongkong-c**：香港可用区C。
- **cn-hongkong-d**：香港可用区D。
- **cn-wulanchabu-a**：乌兰察布可用区A。
- **cn-wulanchabu-b**：乌兰察布可用区B。
- **cn-wulanchabu-c**：乌兰察布可用区C。
- **ap-southeast-1a**：新加坡可用区A。
- **ap-southeast-1b**：新加坡可用区B。
- **ap-southeast-1c**：新加坡可用区C。
- **ap-southeast-5a**：雅加达可用区A。
- **ap-southeast-5b**：雅加达可用区B。
- **ap-southeast-5c**：雅加达可用区C。
- **eu-central-1a**：法兰克福可用区A。
- **eu-central-1b**：法兰克福可用区B。
- **eu-central-1c**：法兰克福可用区C。

>- 当实例为4.4或5.0版本的多可用区副本集实例或分片集群实例时，返回该参数。
- 目前仅中国站支持返回该参数。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'DestroyTime' => 
                        array (
                          'description' => '实例数据销毁时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                          'type' => 'string',
                          'example' => '2021-12-10T16:00:00Z',
                        ),
                        'NetworkAddresses' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                          ),
                        ),
                        'DBInstanceOrderStatus' => 
                        array (
                          'description' => '当前该实例已生成的订单状态，取值说明： 

- **all\\_completed**：所有订单均处于生产中或已经生产完成。
- **order\\_unpaid**：当前有未支付的订单。
- **order\\_wait\\_for_produce**：当前有正在下发生产的订单。

>订单生产流程依次为用户下单、支付订单、订单下发生产、进行生产和完成生产。
- 如果订单状态长时间处于**order\\_wait\\_for_produce**，说明下发生产流程遇到了问题，系统会自动重试。
- 订单在进行生产和完成生产时，实例状态才会发生变化，例如变配中和运行中。',
                          'type' => 'string',
                          'example' => 'all_completed',
                        ),
                        'Encrypted' => 
                        array (
                          'title' => '是否开启云盘加密',
                          'description' => '是否开启云盘加密',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'EncryptionKey' => 
                        array (
                          'title' => '云盘加密对应的kms-key',
                          'description' => '云盘加密对应的kms-key',
                          'type' => 'string',
                          'example' => '07609cc3-3109-408f-a35e-c548e776da0b',
                        ),
                        'SyncPercent' => 
                        array (
                          'description' => '数据同步进度百分比。当实例处在变配中时，需要进行数据同步等操作，可以通过该字段判断同步进度。',
                          'type' => 'string',
                          'example' => '0.8',
                        ),
                        'UseClusterBackup' => 
                        array (
                          'description' => '是否使用集群备份模式。取值说明：

- **true**：启用集群备份模式。
- **false**未启用集群备份模式。',
                          'type' => 'boolean',
                          'example' => 'true',
                          'default' => 'false',
                        ),
                        'BurstingEnabled' => 
                        array (
                          'description' => '是否已开启突发',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ProvisionedIops' => 
                        array (
                          'description' => '预配置性能',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1960',
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
            'errorCode' => 'VpcCloudInstanceIdNumError',
            'errorMessage' => 'Get vpcCloudInstanceId number error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A935A8EE-A6CC-53DE-98BA-20ABAA7E632B\\",\\n  \\"DBInstances\\": {\\n    \\"DBInstance\\": [\\n      {\\n        \\"CreationTime\\": \\"2022-01-02T07:43:59Z\\",\\n        \\"ReplicaSets\\": {\\n          \\"ReplicaSet\\": [\\n            {\\n              \\"VSwitchId\\": \\"vpc-bp1jk5vwkcri27qme****\\",\\n              \\"ConnectionPort\\": \\"3717\\",\\n              \\"ReplicaSetRole\\": \\"Primary\\",\\n              \\"ConnectionDomain\\": \\"dds-bp11483712c1****.mongodb.rds.aliyuncs.com\\",\\n              \\"VPCCloudInstanceId\\": \\"dds-bp11483712c1****\\",\\n              \\"NetworkType\\": \\"VPC\\",\\n              \\"VPCId\\": \\"vpc-bp1jk5vwkcri27qme****\\"\\n            }\\n          ]\\n        },\\n        \\"ReplacateId\\": \\"bls-m****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"test\\",\\n              \\"Value\\": \\"api\\"\\n            }\\n          ]\\n        },\\n        \\"VpcAuthMode\\": \\"Open\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"4.4\\",\\n        \\"MaxIOPS\\": 1000,\\n        \\"MaxMBPS\\": 350,\\n        \\"VPCCloudInstanceIds\\": \\"dds-bp11483712c1****\\",\\n        \\"MongosList\\": {\\n          \\"MongosAttribute\\": [\\n            {\\n              \\"VpcCloudInstanceId\\": \\"s-bp1d8c262a158****\\",\\n              \\"MaxIOPS\\": 800,\\n              \\"VSwitchId\\": \\"vsw-bp1vj604nj5a9zz74****\\",\\n              \\"NodeClass\\": \\"dds.mongos.mid\\",\\n              \\"MaxConnections\\": 1000,\\n              \\"Port\\": 3717,\\n              \\"VPCId\\": \\"vpc-bp1n3i15v90el48nx****\\",\\n              \\"ConnectSting\\": \\"s-bp1d8c262a15****.mongodb.rds.aliyuncs.com\\",\\n              \\"NodeDescription\\": \\"mongos1\\",\\n              \\"NodeId\\": \\"s-bp1d8c262a15****\\",\\n              \\"Status\\": \\"Running\\"\\n            }\\n          ]\\n        },\\n        \\"ProtocolType\\": \\"mongodb\\",\\n        \\"DBInstanceDescription\\": \\"测试数据库\\",\\n        \\"CurrentKernelVersion\\": \\"5.0.5-20220721143518_0\\",\\n        \\"DBInstanceReleaseProtection\\": false,\\n        \\"ExpireTime\\": \\"2022-02-05T16:00Z\\",\\n        \\"MaintainStartTime\\": \\"18:00Z\\",\\n        \\"DBInstanceType\\": \\"replicate\\",\\n        \\"LastDowngradeTime\\": \\"2022-01-08\\",\\n        \\"ShardList\\": {\\n          \\"ShardAttribute\\": [\\n            {\\n              \\"MaxIOPS\\": 8000,\\n              \\"ConnectString\\": \\"d-bp1af0680a9c6d3****.mongodb.rds.aliyuncs.com:****\\",\\n              \\"NodeClass\\": \\"dds.shard.mid\\",\\n              \\"MaxConnections\\": 8000,\\n              \\"Port\\": 3717,\\n              \\"NodeDescription\\": \\"testshard\\",\\n              \\"NodeId\\": \\"d-bp16e09d9c5d****\\",\\n              \\"NodeStorage\\": 10,\\n              \\"ReadonlyReplicas\\": 0,\\n              \\"Status\\": \\"Running\\",\\n              \\"MaxDiskMbps\\": \\"350\\"\\n            }\\n          ]\\n        },\\n        \\"MaintainEndTime\\": \\"03:00Z\\",\\n        \\"DBInstanceStatus\\": \\"Running\\",\\n        \\"VPCId\\": \\"vpc-bp1n3i15v90el48nx****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"DBInstanceStorage\\": 10,\\n        \\"ReplicaSetName\\": \\"mgset-10ace****\\",\\n        \\"VSwitchId\\": \\"vsw-bp1oo2a7isyrb8igf****\\",\\n        \\"StorageEngine\\": \\"WiredTiger\\",\\n        \\"ConfigserverList\\": {\\n          \\"ConfigserverAttribute\\": [\\n            {\\n              \\"MaxIOPS\\": 1000,\\n              \\"ConnectString\\": \\"dds-bp18b0934e7053e4-cs****.mongodb.rds.aliyuncs.com\\",\\n              \\"NodeClass\\": \\"dds.cs.mid\\",\\n              \\"MaxConnections\\": 1000,\\n              \\"Port\\": 3717,\\n              \\"NodeDescription\\": \\"testConfigserver\\",\\n              \\"NodeId\\": \\"dds-bp11483712c1****-cs\\",\\n              \\"NodeStorage\\": 20,\\n              \\"Status\\": \\"Running\\"\\n            }\\n          ]\\n        },\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"MaxConnections\\": 500,\\n        \\"DBInstanceId\\": \\"dds-bp11483712c1****\\",\\n        \\"DBInstanceClass\\": \\"dds.mongo.mid\\",\\n        \\"Engine\\": \\"MongoDB\\",\\n        \\"ReadonlyReplicas\\": \\"1\\",\\n        \\"ReplicationFactor\\": \\"3\\",\\n        \\"KindCode\\": \\"18\\",\\n        \\"CapacityUnit\\": \\"100\\",\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"StorageType\\": \\"cloud_essd1\\",\\n        \\"SecondaryZoneId\\": \\"cn-hangzhou-i\\",\\n        \\"HiddenZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"DestroyTime\\": \\"2021-12-10T16:00:00Z\\",\\n        \\"DBInstanceOrderStatus\\": \\"all_completed\\",\\n        \\"Encrypted\\": true,\\n        \\"EncryptionKey\\": \\"07609cc3-3109-408f-a35e-c548e776da0b\\",\\n        \\"SyncPercent\\": \\"0.8\\",\\n        \\"UseClusterBackup\\": true,\\n        \\"BurstingEnabled\\": true,\\n        \\"ProvisionedIops\\": 1960\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceAttributeResponse>\\n    <RequestId>A935A8EE-A6CC-53DE-98BA-20ABAA7E632B</RequestId>\\n    <DBInstances>\\n        <CreationTime>2022-01-02T07:43:59Z</CreationTime>\\n        <ReplicaSets>\\n            <VSwitchId>vpc-bp1jk5vwkcri27qme****</VSwitchId>\\n            <ConnectionPort>3717</ConnectionPort>\\n            <ReplicaSetRole>Primary</ReplicaSetRole>\\n            <ConnectionDomain>dds-bp11483712c1****.mongodb.rds.aliyuncs.com</ConnectionDomain>\\n            <VPCCloudInstanceId>dds-bp11483712c1****</VPCCloudInstanceId>\\n            <NetworkType>VPC</NetworkType>\\n            <VPCId>vpc-bp1jk5vwkcri27qme****</VPCId>\\n        </ReplicaSets>\\n        <ReplacateId>bls-m****</ReplacateId>\\n        <Tags>\\n            <Key>test</Key>\\n            <Value>api</Value>\\n        </Tags>\\n        <VpcAuthMode>Open</VpcAuthMode>\\n        <NetworkType>VPC</NetworkType>\\n        <LockMode>Unlock</LockMode>\\n        <EngineVersion>4.4</EngineVersion>\\n        <MaxIOPS>1000</MaxIOPS>\\n        <VPCCloudInstanceIds>dds-bp11483712c1****</VPCCloudInstanceIds>\\n        <MongosList>\\n            <VpcCloudInstanceId>s-bp1d8c262a158****</VpcCloudInstanceId>\\n            <MaxIOPS>800</MaxIOPS>\\n            <VSwitchId>vsw-bp1vj604nj5a9zz74****</VSwitchId>\\n            <NodeClass>dds.mongos.mid</NodeClass>\\n            <MaxConnections>1000</MaxConnections>\\n            <Port>3717</Port>\\n            <VPCId>vpc-bp1n3i15v90el48nx****</VPCId>\\n            <ConnectSting>s-bp1d8c262a15****.mongodb.rds.aliyuncs.com</ConnectSting>\\n            <NodeDescription>mongos1</NodeDescription>\\n            <NodeId>s-bp1d8c262a15****</NodeId>\\n            <Status>Running</Status>\\n        </MongosList>\\n        <ProtocolType>mongodb</ProtocolType>\\n        <DBInstanceDescription>测试数据库</DBInstanceDescription>\\n        <CurrentKernelVersion>5.0.5-20220721143518_0</CurrentKernelVersion>\\n        <DBInstanceReleaseProtection>false</DBInstanceReleaseProtection>\\n        <ExpireTime>2022-02-05T16:00Z</ExpireTime>\\n        <MaintainStartTime>18:00Z</MaintainStartTime>\\n        <DBInstanceType>replicate</DBInstanceType>\\n        <LastDowngradeTime>2022-01-08</LastDowngradeTime>\\n        <ShardList>\\n            <MaxIOPS>8000</MaxIOPS>\\n            <ConnectString>d-bp1af0680a9c6d3****.mongodb.rds.aliyuncs.com:****</ConnectString>\\n            <NodeClass>dds.shard.mid</NodeClass>\\n            <MaxConnections>8000</MaxConnections>\\n            <Port>3717</Port>\\n            <NodeDescription>testshard</NodeDescription>\\n            <NodeId>d-bp16e09d9c5d****</NodeId>\\n            <NodeStorage>10</NodeStorage>\\n            <ReadonlyReplicas>0</ReadonlyReplicas>\\n            <Status>Running</Status>\\n        </ShardList>\\n        <MaintainEndTime>03:00Z</MaintainEndTime>\\n        <DBInstanceStatus>Running</DBInstanceStatus>\\n        <VPCId>vpc-bp1n3i15v90el48nx****</VPCId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DBInstanceStorage>10</DBInstanceStorage>\\n        <ReplicaSetName>mgset-10ace****</ReplicaSetName>\\n        <VSwitchId>vsw-bp1oo2a7isyrb8igf****</VSwitchId>\\n        <StorageEngine>WiredTiger</StorageEngine>\\n        <ConfigserverList>\\n            <MaxIOPS>1000</MaxIOPS>\\n            <ConnectString>dds-bp18b0934e7053e4-cs****.mongodb.rds.aliyuncs.com</ConnectString>\\n            <NodeClass>dds.cs.mid</NodeClass>\\n            <MaxConnections>1000</MaxConnections>\\n            <Port>3717</Port>\\n            <NodeDescription>testConfigserver</NodeDescription>\\n            <NodeId>dds-bp11483712c1****-cs</NodeId>\\n            <NodeStorage>20</NodeStorage>\\n            <Status>Running</Status>\\n        </ConfigserverList>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <ZoneId>cn-hangzhou-b</ZoneId>\\n        <MaxConnections>500</MaxConnections>\\n        <DBInstanceId>dds-bp11483712c1****</DBInstanceId>\\n        <DBInstanceClass>dds.mongo.mid</DBInstanceClass>\\n        <Engine>MongoDB</Engine>\\n        <ReadonlyReplicas>1</ReadonlyReplicas>\\n        <ReplicationFactor>3</ReplicationFactor>\\n        <KindCode>1</KindCode>\\n        <CapacityUnit>100</CapacityUnit>\\n        <ChargeType>PostPaid</ChargeType>\\n        <SecondaryZoneId>cn-hangzhou-i</SecondaryZoneId>\\n        <HiddenZoneId>cn-hangzhou-h</HiddenZoneId>\\n    </DBInstances>\\n</DescribeDBInstanceAttributeResponse>","errorExample":""}]',
      'title' => '查询云数据库MongoDB实例的信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRoleZoneInfo' => 
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '728B9A96-E262-4AE5-915E-3A51CCE2FDA9',
              ),
              'ZoneInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ZoneInfo' => 
                  array (
                    'description' => '节点在可用区中的分布信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InsName' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'dds-bpxxxxxxxx',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值为：
- **normal**：普通节点。
- **configServer**：配置服务器节点。
- **shard**：Shard节点。
- **mongos**：Mongos节点。

> 当实例类型为副本集实例时，返回值为**normal**；当实例类型为分片集群实例时，返回值中包含**configServer**、**shard**和**mongos**。',
                          'type' => 'string',
                          'example' => 'normal',
                        ),
                        'RoleType' => 
                        array (
                          'description' => '节点的角色，返回值为：
- **Primary**：主节点。
- **Secondary**：从节点。
- **Hidden**：隐藏节点。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-e',
                        ),
                        'RoleId' => 
                        array (
                          'description' => '角色ID。',
                          'type' => 'string',
                          'example' => '83xxxxx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"728B9A96-E262-4AE5-915E-3A51CCE2FDA9\\",\\n  \\"ZoneInfos\\": {\\n    \\"ZoneInfo\\": [\\n      {\\n        \\"InsName\\": \\"dds-bpxxxxxxxx\\",\\n        \\"NodeType\\": \\"normal\\",\\n        \\"RoleType\\": \\"Primary\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n        \\"RoleId\\": \\"83xxxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeRoleZoneInfoResponse>\\r\\n\\t<ZoneInfos>\\r\\n\\t\\t<ZoneInfo>\\r\\n\\t\\t\\t<RoleType>Primary</RoleType>\\r\\n\\t\\t\\t<NodeType>normal</NodeType>\\r\\n\\t\\t\\t<InsName>dds-bpxxxxxxxx</InsName>\\r\\n\\t\\t\\t<ZoneId>cn-hangzhou-e</ZoneId>\\r\\n\\t\\t\\t<RoleId>83xxxxx</RoleId>\\r\\n\\t\\t</ZoneInfo>\\r\\n\\t\\t<ZoneInfo>\\r\\n\\t\\t\\t<RoleType>Secondary</RoleType>\\r\\n\\t\\t\\t<NodeType>normal</NodeType>\\r\\n\\t\\t\\t<InsName>dds-bpxxxxxxxx</InsName>\\r\\n\\t\\t\\t<ZoneId>cn-hangzhou-f</ZoneId>\\r\\n\\t\\t\\t<RoleId>83xxxxx</RoleId>\\r\\n\\t\\t</ZoneInfo>\\r\\n\\t\\t<ZoneInfo>\\r\\n\\t\\t\\t<RoleType>Hidden</RoleType>\\r\\n\\t\\t\\t<NodeType>normal</NodeType>\\r\\n\\t\\t\\t<InsName>dds-bpxxxxxxxx</InsName>\\r\\n\\t\\t\\t<ZoneId>cn-hangzhou-b</ZoneId>\\r\\n\\t\\t\\t<RoleId>83xxxxx</RoleId>\\r\\n\\t\\t</ZoneInfo>\\r\\n\\t</ZoneInfos>\\r\\n\\t<RequestId>728B9A96-E262-4AE5-915E-3A51CCE2FDA9</RequestId>\\r\\n</DescribeRoleZoneInfoResponse>","errorExample":""}]',
      'title' => '查询实例的各节点的角色和所属的可用区',
      'summary' => '查询MongoDB实例的各节点的角色和所属的可用区。',
      'description' => '> 更多详情请参见[查看节点所属的可用区](~~123825~~)。

本接口适用于副本集实例和分片集群实例，暂不支持单节点实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceAutoRenewalAttribute' => 
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
            'description' => '实例所属的地域ID。您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp567b****',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。取值：
- **replicate**（默认值）：单节点或副本集实例。
- **sharding**：分片集群实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'replicate',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。取值：**30**（默认值）、**50**或**100**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
            'default' => '30',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
            ),
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
            'format' => 'int64',
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
              'ItemsNumbers' => 
              array (
                'description' => '查询结果总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页显示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FAB5CB3B-DB9D-473A-9DF1-F57B6B9CB949',
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
                  'Item' => 
                  array (
                    'description' => '查询结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBInstanceType' => 
                        array (
                          'description' => '实例类型，返回值为：
- **replicate**：单节点或副本集实例。
- **sharding**：分片集群实例。',
                          'type' => 'string',
                          'example' => 'replicate',
                        ),
                        'AutoRenew' => 
                        array (
                          'description' => '自动续费状态，返回值为：
- **true**：已开启自动续费。
- **false**：未开启自动续费。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'Duration' => 
                        array (
                          'description' => '自动续费的续费周期，单位为月。

> - 当**AutoRenew**参数的返回值为**true**时，才会返回本参数。
> - 您可以调用[ModifyInstanceAutoRenewalAttribute](~~145979~~)接口，修改自动续费的周期。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'DbInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp2568*****',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ItemsNumbers\\": 2,\\n  \\"PageRecordCount\\": 2,\\n  \\"RequestId\\": \\"FAB5CB3B-DB9D-473A-9DF1-F57B6B9CB949\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"Item\\": [\\n      {\\n        \\"DBInstanceType\\": \\"replicate\\",\\n        \\"AutoRenew\\": \\"true\\",\\n        \\"Duration\\": \\"1\\",\\n        \\"DbInstanceId\\": \\"dds-bp2568*****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n \\"Items\\": {\\n   \\"Item\\": [\\n     {\\n       \\"Duration\\": 1,\\n       \\"RegionId\\": \\"cn-shanghai\\",\\n       \\"DBInstanceId\\": \\"r-xxxxxxxxxxxxxxx\\",\\n       \\"AutoRenew\\": \\"true\\"\\n     }\\n   ]\\n },\\n \\"TotalRecordCount\\": 1,\\n \\"PageNumber\\": 1,\\n \\"RequestId\\": \\"2B17D708-1D6D-49F3-B6D7-478371DDDBE8\\",\\n \\"PageRecordCount\\": 1\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeInstanceAutoRenewalAttributeResponse>\\n\\t<Items>\\n\\t\\t<Item>\\n\\t\\t\\t<DBInstanceType>replicate</DBInstanceType>\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t\\t\\t<DbInstanceId>dds-bpxxxxxxxx</DbInstanceId>\\n\\t\\t\\t<AutoRenew>false</AutoRenew>\\n\\t\\t</Item>\\n\\t\\t<Item>\\n\\t\\t\\t<DBInstanceType>replicate</DBInstanceType>\\n\\t\\t\\t<Duration>1</Duration>\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t\\t\\t<DbInstanceId>dds-bpxxxxxxxx</DbInstanceId>\\n\\t\\t\\t<AutoRenew>true</AutoRenew>\\n\\t\\t</Item>\\n\\t</Items>\\n\\t<PageNumber>1</PageNumber>\\n\\t<RequestId>FAB5CB3B-DB9D-473A-9DF1-F57B6B9CB949</RequestId>\\n\\t<ItemsNumbers>2</ItemsNumbers>\\n\\t<PageRecordCount>2</PageRecordCount>\\n</DescribeInstanceAutoRenewalAttributeResponse>","errorExample":"<DescribeInstanceAutoRenewalAttributeResponse>\\n <Items>\\n   <Item>\\n     <Duration>1</Duration>\\n     <RegionId>cn-shanghai</RegionId>\\n     <DBInstanceId>r-xxxxxxxxxxxxxxx</DBInstanceId>\\n     <AutoRenew>true</AutoRenew>\\n   </Item>\\n </Items>\\n <TotalRecordCount>1</TotalRecordCount>\\n <PageNumber>1</PageNumber>\\n <RequestId>2B17D708-1D6D-49F3-B6D7-478371DDDBE8</RequestId>\\n <PageRecordCount>1</PageRecordCount>\\n</DescribeInstanceAutoRenewalAttributeResponse>"}]',
      'title' => '查询MongoDB实例是否为自动付费',
      'summary' => '查询MongoDB实例是否为自动付费。',
      'description' => '> 本接口适用于包年包月付费类型的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeActiveOperationTaskCount' => 
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
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bp5689ac****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '770D7F11-21A2-402B-9DF6-D1A620570EF9',
              ),
              'NeedPop' => 
              array (
                'description' => '是否有需要弹窗通知用户操作的运维任务。返回值：
- **0**：无弹窗
- **1**：有弹窗',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'TaskCount' => 
              array (
                'description' => '待处理的运维任务数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"770D7F11-21A2-402B-9DF6-D1A620570EF9\\",\\n  \\"NeedPop\\": 0,\\n  \\"TaskCount\\": 0\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTaskCountResponse>\\n    <RequestId>770D7F11-21A2-402B-9DF6-D1A620570EF9</RequestId>\\n    <NeedPop>0</NeedPop>\\n    <TaskCount>0</TaskCount>\\n</DescribeActiveOperationTaskCountResponse>","errorExample":""}]',
      'title' => '查询MongoDB实例的运维任务数量',
      'summary' => '查询MongoDB实例的运维任务数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeActiveOperationTasks' => 
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
        'operationType' => 'list',
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
> **all**表示查询该用户下所有的任务，当此参数传入值为**all**时， **taskType**参数的值也必须为**all**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '***',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值： **30、50、100**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
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
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品ID。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        5 => 
        array (
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'InsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp16aaccfe10****',
          ),
        ),
        8 => 
        array (
          'name' => 'AllowChange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许修改时间。取值如下：
- **0**：不允许修改。
- **1**：允许修改。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AllowCancel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许取消。取值如下：
- **0**：不允许取消。
- **1**：允许取消。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '***',
          ),
        ),
        10 => 
        array (
          'name' => 'ChangeLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更类型。取值如下：
- **all**（默认）：全部运维。
- **S0**：异常修复。
- **S1**：系统运维。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
      ),
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
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '111E7B16-0A87-4CBA-B271-F34AD61E099F',
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
                'example' => '727',
              ),
              'Items' => 
              array (
                'description' => '运维任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '运维任务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '***',
                    ),
                    'ChangeLevelEn' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'InsName' => 
                    array (
                      'description' => '节点ID。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'Region' => 
                    array (
                      'description' => '区域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ImpactZh' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-07-14 10:48:43.0',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '切换时间点，可能产生闪断，格式为<i>yyyy-mm-dd</i>T<i>hh:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-11-24T11:20:00Z',
                    ),
                    'ChangeLevelZh' => 
                    array (
                      'description' => '任务类型（英文）。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'Deadline' => 
                    array (
                      'description' => '截止时间。',
                      'type' => 'string',
                      'example' => '1646014421633',
                    ),
                    'PrepareInterval' => 
                    array (
                      'description' => '运维任务开始时间到切换时间之间所需的准备时间，格式为<i>HH:mm:ss</i>。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'TaskTypeZh' => 
                    array (
                      'description' => '任务类型中文。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'CurrentAVZ' => 
                    array (
                      'description' => '暂无说明。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'AllowChange' => 
                    array (
                      'description' => '是否允许修改：

- **0**：否。
- **1**：是。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'DbVersion' => 
                    array (
                      'description' => '数据库引擎版本号。',
                      'type' => 'string',
                      'example' => '5.6',
                    ),
                    'ImpactEn' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'InsComment' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '任务开始执行的时间，格式为<i>yyyy-mm-dd</i>T<i>hh:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-12-24T06:01Z',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '修改时间，格式为<i>yyyy-mm-dd</i>T<i>hh:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-08-24T09:48:01.000+00:00',
                    ),
                    'AllowCancel' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'DbType' => 
                    array (
                      'description' => '数据库引擎类型。',
                      'type' => 'string',
                      'example' => 'mongoDb',
                    ),
                    'ChangeLevel' => 
                    array (
                      'description' => '变更级别。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'TaskTypeEn' => 
                    array (
                      'description' => '暂无说明',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'ResultInfo' => 
                    array (
                      'description' => '结果信息（可忽略）。',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'Id' => 
                    array (
                      'description' => '任务id。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '***',
                    ),
                    'SubInsNames' => 
                    array (
                      'description' => '子实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子实例列表项。',
                        'type' => 'string',
                        'example' => '***',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"111E7B16-0A87-4CBA-B271-F34AD61E099F\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 727,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"ChangeLevelEn\\": \\"***\\",\\n      \\"TaskType\\": \\"***\\",\\n      \\"InsName\\": \\"***\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"ImpactZh\\": \\"***\\",\\n      \\"CreatedTime\\": \\"2021-07-14 10:48:43.0\\",\\n      \\"SwitchTime\\": \\"2022-11-24T11:20:00Z\\",\\n      \\"ChangeLevelZh\\": \\"***\\",\\n      \\"Deadline\\": \\"1646014421633\\",\\n      \\"PrepareInterval\\": \\"***\\",\\n      \\"TaskTypeZh\\": \\"***\\",\\n      \\"CurrentAVZ\\": \\"***\\",\\n      \\"AllowChange\\": \\"0\\",\\n      \\"DbVersion\\": \\"5.6\\",\\n      \\"ImpactEn\\": \\"***\\",\\n      \\"InsComment\\": \\"***\\",\\n      \\"StartTime\\": \\"2022-12-24T06:01Z\\",\\n      \\"ModifiedTime\\": \\"2021-08-24T09:48:01.000+00:00\\",\\n      \\"AllowCancel\\": \\"***\\",\\n      \\"DbType\\": \\"mongoDb\\",\\n      \\"ChangeLevel\\": \\"***\\",\\n      \\"TaskTypeEn\\": \\"***\\",\\n      \\"ResultInfo\\": \\"***\\",\\n      \\"Id\\": 0,\\n      \\"SubInsNames\\": [\\n        \\"***\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询运维任务列表',
      'summary' => '查询MongoDB实例的运维任务列表。',
    ),
    'DescribeActiveOperationTaskType' => 
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
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回历史运维任务。取值：
- **0**（默认值）：仅返回当前待处理的运维任务。
- **1**：返回历史运维任务。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。您可以调用[DescribeSecurityGroupConfiguration](~~146130~~)接口查询。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7EE83BF-7BA8-5087-BAC9-ED85ED54****',
              ),
              'TypeList' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskType' => 
                    array (
                      'description' => '任务的类型。返回值：
- **rds_apsaradb_transfer**：实例迁移。
- **rds_apsaradb_upgrade**：小版本升级。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'TaskTypeInfoEn' => 
                    array (
                      'description' => '任务类型（英文）。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'TaskTypeInfoZh' => 
                    array (
                      'description' => '任务类型（中文）。',
                      'type' => 'string',
                      'example' => '小版本升级',
                    ),
                    'Count' => 
                    array (
                      'description' => '待处理的任务数量。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C7EE83BF-7BA8-5087-BAC9-ED85ED54****\\",\\n  \\"TypeList\\": [\\n    {\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"TaskTypeInfoEn\\": \\"rds_apsaradb_upgrade\\",\\n      \\"TaskTypeInfoZh\\": \\"小版本升级\\",\\n      \\"Count\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTaskTypeResponse>\\n    <RequestId>C7EE83BF-7BA8-5087-BAC9-ED85ED54****</RequestId>\\n    <TypeList>\\n        <TaskTypeInfoZh>小版本升级</TaskTypeInfoZh>\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\n        <Count>0</Count>\\n        <TaskTypeInfoEn>Minor version update</TaskTypeInfoEn>\\n    </TypeList>\\n</DescribeActiveOperationTaskTypeResponse>","errorExample":""}]',
      'title' => '查询运维任务类型和任务数量',
      'summary' => '查询实例的运维任务类型以及各类型的任务数量。',
      'description' => '该接口即将下线，后续将不再更新。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstancesOverview' => 
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询概览的实例ID。

> - 如果不传入该参数，默认查询当前阿里云账号下的所有实例。
> - 支持传入多个实例ID，实例ID之间以英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的状态信息，取值详情请参见[实例状态表](~~63870~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
          ),
        ),
        4 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的网络类型，取值：
- **Classic**：经典网络。
- **VPC**：VPC网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'Classic',
          ),
        ),
        5 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的引擎版本，取值为 **5.0**、**4.4**、 **4.2**、**4.0**或 **3.4**。',
            'type' => 'string',
            'required' => false,
            'example' => '4.0',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。不同类型实例的规格分别请参见：

- [单节点实例规格表](~~311407~~)
- [副本集实例规格表](~~311410~~)
- [分片集群实例规格表](~~311414~~)

<props="china">
> Serverless实例不需要传入该参数。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.mongo.2xlarge',
          ),
        ),
        7 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1nme44gek34slfc****',
          ),
        ),
        8 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值： 
- **sharding**：分片集群实例。
- **replicate**：副本集实例和单节点实例。
<props="china">
- **serverless**：Serverless实例。
</props>

> - 请根据实际需求配置，例如您需要查询分片集群实例的概览，则配置该参数的值为**sharding**。
> - 不配置该参数时，默认查询所有实例的概览。',
            'type' => 'string',
            'required' => false,
            'example' => 'replicate',
          ),
        ),
        10 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '实例概览信息。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询结果中实例的数量。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA',
              ),
              'DBInstances' => 
              array (
                'description' => '实例信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '实例创建的时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-01-05T03:18:53Z',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '实例到期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-02-05T16:00Z',
                    ),
                    'Tags' => 
                    array (
                      'description' => '实例的标签信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例的标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。N的取值范围为**1**~**20**。

- 不能以`aliyun`、`acs:`、`http://`或`https://`开头。
- 最多支持64个字符。
- 不允许传入空字符串。',
                            'type' => 'string',
                            'example' => 'testdatabase',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。N的取值范围为**1**~**20**。

- 不能以`aliyun`、`acs`:、`http://`或`https://`开头。
- 最多支持128个字符。
- TagValue可以为空。',
                            'type' => 'string',
                            'example' => 'apitest',
                          ),
                        ),
                      ),
                    ),
                    'LastDowngradeTime' => 
                    array (
                      'description' => '实例最后一次降配时间。',
                      'type' => 'string',
                      'example' => '2021-05-08',
                    ),
                    'ShardList' => 
                    array (
                      'description' => 'Shard节点信息列表。
> 实例类型为分片集群实例时返回该参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Shard节点信息列表。
> 实例类型为分片集群实例时返回该参数。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'NodeClass' => 
                          array (
                            'description' => 'Shard节点的规格。',
                            'type' => 'string',
                            'example' => 'dds.shard.mid',
                          ),
                          'NodeDescription' => 
                          array (
                            'description' => 'Shard节点的描述信息。',
                            'type' => 'string',
                            'example' => '测试shard节点',
                          ),
                          'NodeStorage' => 
                          array (
                            'description' => 'Shard节点的存储空间，单位为GB。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10',
                          ),
                          'NodeId' => 
                          array (
                            'description' => 'Shard节点的ID。',
                            'type' => 'string',
                            'example' => 'd-bp1cac6f2083****',
                          ),
                          'ReadonlyReplicas' => 
                          array (
                            'description' => 'Shard节点中只读节点的个数。返回值范围：**0**~**5**。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                        ),
                      ),
                    ),
                    'DBInstanceType' => 
                    array (
                      'description' => '实例类型，取值： 
- **sharding**：分片集群实例。
- **replicate**：副本集实例和单节点实例。
<props="china">
- **serverless**：Serverless实例。
</props>',
                      'type' => 'string',
                      'example' => 'replicate',
                    ),
                    'DestroyTime' => 
                    array (
                      'description' => '实例数据销毁时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-12-10T16:00:00Z',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '实例付费类型，取值：
- **PrePaid**：预付费，包年包月。
- **PostPaid**：按量付费。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'CapacityUnit' => 
                    array (
                      'description' => '实例消耗的读写吞吐量。

> - 当实例类型为Serverless实例时返回该参数。
> - 仅中国站支持Serverless实例。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'VpcAuthMode' => 
                    array (
                      'description' => '是否开启了专有网络免密访问功能。取值：

- **Open**：开启。
- **Close**：关闭。',
                      'type' => 'string',
                      'example' => 'Open',
                    ),
                    'DBInstanceStatus' => 
                    array (
                      'description' => '实例的状态信息，取值详情请参见[实例状态表](~~63870~~)。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '实例网络类型，取值：
- **Classic**：经典网络。
- **VPC**：VPC网络。',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'LockMode' => 
                    array (
                      'description' => '实例的锁定状态。
* **Unlock**：正常。
* **ManualLock**：手动触发锁定。
* **LockByExpiration**：实例过期自动锁定。
* **LockByRestoration**：实例回滚前自动锁定。
* **LockByDiskQuota**：实例空间满自动锁定。
* **Released**：实例已释放。此时实例无法进行解锁，只能使用备份数据重新创建新实例，重建时间较长，请耐心等待。',
                      'type' => 'string',
                      'example' => 'Unlock',
                    ),
                    'EngineVersion' => 
                    array (
                      'description' => '实例的数据库版本。',
                      'type' => 'string',
                      'example' => '4.2',
                    ),
                    'MongosList' => 
                    array (
                      'description' => 'Mongos节点信息列表。

> 实例类型为分片集群实例时返回该参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Mongos节点信息列表。

> 实例类型为分片集群实例时返回该参数。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'NodeClass' => 
                          array (
                            'description' => 'Mongos节点规格。',
                            'type' => 'string',
                            'example' => 'dds.mongos.standard',
                          ),
                          'NodeDescription' => 
                          array (
                            'description' => 'Mongos节点描述。',
                            'type' => 'string',
                            'example' => '测试mongos节点',
                          ),
                          'NodeId' => 
                          array (
                            'description' => 'Mongos节点ID。',
                            'type' => 'string',
                            'example' => 's-bp10e3b0d02f****',
                          ),
                        ),
                      ),
                    ),
                    'RegionId' => 
                    array (
                      'description' => '实例所属地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstanceStorage' => 
                    array (
                      'description' => '实例的存储空间大小，单位为GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '实例所属资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfm22cdcgc****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '实例所属可用区。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-i',
                    ),
                    'DBInstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'dds-bp12c5b040dc****',
                    ),
                    'DBInstanceClass' => 
                    array (
                      'description' => '实例规格。不同类型实例的规格分别请参见：

- [单节点实例规格表](~~311407~~)
- [副本集实例规格表](~~311410~~)
- [分片集群实例规格表](~~311414~~)

<props="china">
> Serverless实例不需要传入该参数。</props>',
                      'type' => 'string',
                      'example' => 'dds.mongo.mid',
                    ),
                    'Engine' => 
                    array (
                      'description' => '数据库引擎，取值为**MongoDB**。',
                      'type' => 'string',
                      'example' => 'MongoDB',
                    ),
                    'ReplicationFactor' => 
                    array (
                      'description' => '实例中节点的个数。

> 实例类型为副本集实例时返回该参数。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'DBInstanceDescription' => 
                    array (
                      'description' => '实例的描述或备注信息。',
                      'type' => 'string',
                      'example' => '测试数据库',
                    ),
                    'KindCode' => 
                    array (
                      'description' => '表示实例的类型。取值：
- **0**：物理机
- **1**：ECS
- **2**：DOCKER
- **18**：k8s新架构实例',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"RequestId\\": \\"52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA\\",\\n  \\"DBInstances\\": [\\n    {\\n      \\"CreationTime\\": \\"2022-01-05T03:18:53Z\\",\\n      \\"ExpireTime\\": \\"2022-02-05T16:00Z\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"testdatabase\\",\\n          \\"Value\\": \\"apitest\\"\\n        }\\n      ],\\n      \\"LastDowngradeTime\\": \\"2021-05-08\\",\\n      \\"ShardList\\": [\\n        {\\n          \\"NodeClass\\": \\"dds.shard.mid\\",\\n          \\"NodeDescription\\": \\"测试shard节点\\",\\n          \\"NodeStorage\\": 10,\\n          \\"NodeId\\": \\"d-bp1cac6f2083****\\",\\n          \\"ReadonlyReplicas\\": 2\\n        }\\n      ],\\n      \\"DBInstanceType\\": \\"replicate\\",\\n      \\"DestroyTime\\": \\"2021-12-10T16:00:00Z\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"CapacityUnit\\": \\"100\\",\\n      \\"VpcAuthMode\\": \\"Open\\",\\n      \\"DBInstanceStatus\\": \\"Running\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"LockMode\\": \\"Unlock\\",\\n      \\"EngineVersion\\": \\"4.2\\",\\n      \\"MongosList\\": [\\n        {\\n          \\"NodeClass\\": \\"dds.mongos.standard\\",\\n          \\"NodeDescription\\": \\"测试mongos节点\\",\\n          \\"NodeId\\": \\"s-bp10e3b0d02f****\\"\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstanceStorage\\": 20,\\n      \\"ResourceGroupId\\": \\"rg-acfm22cdcgc****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n      \\"DBInstanceId\\": \\"dds-bp12c5b040dc****\\",\\n      \\"DBInstanceClass\\": \\"dds.mongo.mid\\",\\n      \\"Engine\\": \\"MongoDB\\",\\n      \\"ReplicationFactor\\": \\"3\\",\\n      \\"DBInstanceDescription\\": \\"测试数据库\\",\\n      \\"KindCode\\": \\"0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancesOverviewResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA</RequestId>\\n    <DBInstances>\\n        <EngineVersion>4.2</EngineVersion>\\n        <DBInstanceStatus>Running</DBInstanceStatus>\\n        <ResourceGroupId>rg-acfm22cdcgc****</ResourceGroupId>\\n        <ZoneId>cn-hangzhou-i</ZoneId>\\n        <ReplicationFactor>3</ReplicationFactor>\\n        <CapacityUnit/>\\n        <DBInstanceClass>dds.mongo.mid</DBInstanceClass>\\n        <DBInstanceType>replicate</DBInstanceType>\\n        <LockMode>Unlock</LockMode>\\n        <DBInstanceId>dds-bp12c5b040dc****</DBInstanceId>\\n        <ChargeType>PrePaid</ChargeType>\\n        <NetworkType>VPC</NetworkType>\\n        <DBInstanceStorage>20</DBInstanceStorage>\\n        <CreationTime>2022-01-05T03:18:53Z</CreationTime>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ExpireTime>2022-02-05T16:00Z</ExpireTime>\\n        <KindCode>0</KindCode>\\n        <Engine>MongoDB</Engine>\\n        <DBInstanceDescription>测试数据库</DBInstanceDescription>\\n    </DBInstances>\\n</DescribeDBInstancesOverviewResponse>","errorExample":""}]',
      'title' => '查询实例的概览信息',
      'summary' => '查询一个或多个云数据库MongoDB实例的概览信息。',
      'description' => '- 如果您未指定实例的具体信息，则返回当前账号的目标地域下所有实例的概览信息。

- 该接口返回结果不进行分页。',
    ),
    'DescribeHistoryTasksStat' => 
    array (
      'summary' => '查看任务中心任务的概览信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '待处理事件所属的地域ID，您可以通过调用[DescribeRegions](~~61933~~)接口进行查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态，用于选择对应状态的任务：

- Scheduled：等待执行

- Running：执行中

- Succeed：执行成功

- Failed：执行失败

- Cancelling：正在终止

- Canceled：已终止

- Waiting：等待预设时间

默认为空，表示全选，如需选择多个状态请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeed',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，用于查询对应实例的任务，默认为空，表示不限制。如需查询多个实例请用英文逗号（,）分隔，最多支持30个。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-8vb38f0e7933xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，用于查询已知ID的任务。默认为空，表示不限制。如需查询多个请用英文逗号（,）分隔，最多支持30个。',
            'type' => 'string',
            'required' => false,
            'example' => 't-0mq1yyhm3ffl2bxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，用于查询特定类型任务情况，默认为空，表示不限制，取值如下：
- CreateIns：创建实例
- DeleteIns：删除实例
- ChangeVariable：参数调整
- ModifyInsConfig：配置变更
- RestartIns：重启实例
- HaSwitch：实例主备切换
- CloneIns：克隆实例
- KernelVersionUpgrade：内核版本升级
- ProxyVersionUpgrade：代理版本升级
- ModifyAccount：账号变更
- ModifyInsSpec：规格变更或迁移
- CreateReadIns：创建只读实例
- StartIns：启动实例
- StopIns：暂停实例
- ModifyNetwork：网络变更
- LockIns： 锁定实例
- UnlockIns：解锁实例
- DiskOnlineExpansion：磁盘在线扩容
- StorageOnlineExpansion：存储在线扩容
- AddInsNode：增加节点
- DeleteInsNode：删除节点
- ManualBackupIns：手动备份实例
- ModifyInsStorageType：修改存储类型',
            'type' => 'string',
            'required' => false,
            'example' => 'DeleteIns',
          ),
        ),
        5 => 
        array (
          'name' => 'FromStartTime',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '运维任务开始的时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），最早支持查询30天前的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-04-16T02:46:21Z',
          ),
        ),
        6 => 
        array (
          'name' => 'ToStartTime',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '运维任务结束的时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），最早支持查询30天前的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-05-16T02:15:52Z',
          ),
        ),
        7 => 
        array (
          'name' => 'FromExecTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务执行耗时的最小值。用于筛选任务执行耗时大于此时间的任务，单位秒。默认0，表示不限制。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'ToExecTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务执行耗时的最大值。用于筛选任务执行耗时不小于此时间的任务，单位秒。默认0，表示不限制。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FC724D23-XXXX-XXXX-ABB1-606C935AE7FD',
              ),
              'Items' => 
              array (
                'description' => '任务对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态。
- Scheduled：等待执行
- Running：执行中
- Succeed：执行成功
- Failed：执行失败
- Cancelling：正在终止
- Canceled：已终止
- Waiting：等待预设时间',
                      'type' => 'string',
                      'example' => 'Succeed',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '任务状态对应的任务数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
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
            'errorCode' => 'Param.Invalid',
            'errorMessage' => 'Param invalid',
          ),
          1 => 
          array (
            'errorCode' => 'Param.Invalid.TimeEndBeforeStart',
            'errorMessage' => 'Param invalid. End time before start time',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FC724D23-XXXX-XXXX-ABB1-606C935AE7FD\\",\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": \\"Succeed\\",\\n      \\"TotalCount\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询任务中心任务状态的概览信息',
    ),
    'DescribeHistoryTasks' => 
    array (
      'summary' => '查看任务中心的任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '待处理事件所属的地域ID，您可以通过调用[DescribeRegions](~~61933~~)接口进行查询。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：10~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '10',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果的页码。取值范围：正整数。 默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前固定为Instance。',
            'type' => 'string',
            'required' => false,
            'example' => 'Instance',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态，用于选择对应状态的任务：

- Scheduled：等待执行

- Running：执行中

- Succeed：执行成功

- Failed：执行失败

- Cancelling：正在终止

- Canceled：已终止

- Waiting：等待预设时间

默认为空，表示全选，如需选择多个状态请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeed,Running,Waiting',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，用于查询对应实例的任务，默认为空，表示不限制。如需查询多个实例请用英文逗号（,）分隔，最多支持30个。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-8vb38f0e7933xxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，用于查询已知ID的任务。默认为空，表示不限制。如需查询多个请用英文逗号（,）分隔，最多支持30个。',
            'type' => 'string',
            'required' => false,
            'example' => 't-0mq1yyhm3ffl2bxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，用于查询特定类型任务情况，默认为空，表示不限制，取值如下：
- CreateIns：创建实例
- DeleteIns：删除实例
- ChangeVariable：参数调整
- ModifyInsConfig：配置变更
- RestartIns：重启实例
- HaSwitch：实例主备切换
- CloneIns：克隆实例
- KernelVersionUpgrade：内核版本升级
- ProxyVersionUpgrade：代理版本升级
- ModifyAccount：账号变更
- ModifyInsSpec：规格变更或迁移
- CreateReadIns：创建只读实例
- StartIns：启动实例
- StopIns：暂停实例
- ModifyNetwork：网络变更
- LockIns： 锁定实例
- UnlockIns：解锁实例
- DiskOnlineExpansion：磁盘在线扩容
- StorageOnlineExpansion：存储在线扩容
- AddInsNode：增加节点
- DeleteInsNode：删除节点
- ManualBackupIns：手动备份实例
- ModifyInsStorageType：修改存储类型',
            'type' => 'string',
            'required' => false,
            'example' => 'DeleteInsNode',
          ),
        ),
        8 => 
        array (
          'name' => 'FromStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务开始的时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），最早支持查询30天前的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-03-15T03:41:26Z',
          ),
        ),
        9 => 
        array (
          'name' => 'ToStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务结束的时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），最早支持查询30天前的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2023-03-16T07:21:31Z',
          ),
        ),
        10 => 
        array (
          'name' => 'FromExecTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务执行耗时的最小值。用于筛选任务执行耗时大于此时间的任务，单位秒。默认0，表示不限制。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'ToExecTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务执行耗时的最大值。用于筛选任务执行耗时不小于此时间的任务，单位秒。默认0，表示不限制。',
            'type' => 'integer',
            'format' => 'int32',
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
              'PageNumber' => 
              array (
                'description' => '当前显示的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3C4A2494-XXXX-XXXX-93CF-548DB3375193',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '不考虑分页因素，满足查询条件的总任务数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Items' => 
              array (
                'description' => '任务对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务对象，格式是词典。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态。
- Scheduled：等待执行
- Running：执行中
- Succeed：执行成功
- Failed：执行失败
- Cancelling：正在终止
- Canceled：已终止
- Waiting：等待预设时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'Succeed',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 't-0mq1yyhm3ffl2bxxxx',
                    ),
                    'CurrentStepName' => 
                    array (
                      'description' => '当前执行的步骤名，如果为空代表任务未开始。',
                      'type' => 'string',
                      'example' => 'exec_task',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '任务开始时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-02-11T02:33Z',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '任务结束时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-16T02:59Z',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。
- CreateIns：创建实例
- DeleteIns：删除实例
- ChangeVariable：参数调整
- ModifyInsConfig：配置变更
- RestartIns：重启实例
- HaSwitch：实例主备切换
- CloneIns：克隆实例
- KernelVersionUpgrade：内核版本升级
- ProxyVersionUpgrade：代理版本升级
- ModifyAccount：账号变更
- ModifyInsSpec：规格变更或迁移
- CreateReadIns：创建只读实例
- StartIns：启动实例
- StopIns：暂停实例
- ModifyNetwork：网络变更
- LockIns： 锁定实例
- UnlockIns：解锁实例
- DiskOnlineExpansion：磁盘在线扩容
- StorageOnlineExpansion：存储在线扩容
- AddInsNode：增加节点
- DeleteInsNode：删除节点
- ManualBackupIns：手动备份实例
- ModifyInsStorageType：修改存储类型',
                      'type' => 'string',
                      'example' => 'CreateIns',
                    ),
                    'RemainTime' => 
                    array (
                      'description' => '预估剩余执行时间，单位秒，0表示已执行完成。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1000
',
                    ),
                    'Progress' => 
                    array (
                      'description' => '当前进度，范围为[0,100]。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '100.0',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型，固定为Instance。',
                      'type' => 'string',
                      'example' => 'Instance',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'dds-t4n18194768fxxxx',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'test-dds',
                    ),
                    'DbType' => 
                    array (
                      'description' => 'DB类型，固定为mongodb。',
                      'type' => 'string',
                      'example' => 'mongodb',
                    ),
                    'Product' => 
                    array (
                      'description' => '产品，固定为dds。',
                      'type' => 'string',
                      'example' => 'dds',
                    ),
                    'TaskDetail' => 
                    array (
                      'description' => '任务详情，不同taskType对应不同的输出。',
                      'type' => 'string',
                      'example' => '{\\"callerUid\\":\\"test\\"}',
                    ),
                    'ReasonCode' => 
                    array (
                      'description' => '当前任务发起的原因。',
                      'type' => 'string',
                      'example' => '小版本升级',
                    ),
                    'ActionInfo' => 
                    array (
                      'description' => '允许的操作信息，具体使用时是根据currentStepName+status在此信息中匹配操作Action，如果未匹配到Action，代表任务当前状态不支持操作，示例：
```
   "steps": [
    {
      "step_name": "exec_task", // 步骤名, 与currentStepName匹配
      "action_info": {    // 步骤支持的操作
        "Waiting": [      // 状态，与status匹配
          "modifySwitchTime" // 操作Action，可能多个，即代表支持多个操作
        ]
      }
    },
    {
      "step_name": "init_task", // 步骤名
      "action_info": {    // 步骤支持的操作
        "Running": [      // 状态
          "cancel",       // 操作
          "pause"
        ]
      }
    }
  ]
}
```

系统可能支持的操作：

- retry：重试
- cancel：取消
- modifySwitchTime：修改切换时间/恢复时间',
                      'type' => 'string',
                      'example' => '`{\\"steps\\":[{\\"action_info\\":{\\"Waiting\\":[\\"modifySwitchTime\\"]},\\"step_name\\":\\"exec_task\\"}]}`',
                    ),
                    'Uid' => 
                    array (
                      'description' => '资源所属的用户ID。',
                      'type' => 'string',
                      'example' => '141345906006****',
                    ),
                    'CallerSource' => 
                    array (
                      'description' => '请求来源 System：系统 User：用户。',
                      'type' => 'string',
                      'example' => 'System',
                    ),
                    'CallerUid' => 
                    array (
                      'description' => '请求用户ID，callerSource为User时代表用户UID。',
                      'type' => 'string',
                      'example' => '141345906006****',
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
            'errorCode' => 'Param.Invalid',
            'errorMessage' => 'Param invalid',
          ),
          1 => 
          array (
            'errorCode' => 'Param.Invalid.TimeEndBeforeStart',
            'errorMessage' => 'Param invalid. End time before start time',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"3C4A2494-XXXX-XXXX-93CF-548DB3375193\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 5,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"TaskId\\": \\"t-0mq1yyhm3ffl2bxxxx\\",\\n      \\"CurrentStepName\\": \\"exec_task\\",\\n      \\"StartTime\\": \\"2023-02-11T02:33Z\\",\\n      \\"EndTime\\": \\"2023-03-16T02:59Z\\",\\n      \\"TaskType\\": \\"CreateIns\\",\\n      \\"RemainTime\\": 1000,\\n      \\"Progress\\": 100,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"InstanceType\\": \\"Instance\\",\\n      \\"InstanceId\\": \\"dds-t4n18194768fxxxx\\",\\n      \\"InstanceName\\": \\"test-dds\\",\\n      \\"DbType\\": \\"mongodb\\",\\n      \\"Product\\": \\"dds\\",\\n      \\"TaskDetail\\": \\"{\\\\\\\\\\\\\\"callerUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"}\\",\\n      \\"ReasonCode\\": \\"小版本升级\\",\\n      \\"ActionInfo\\": \\"`{\\\\\\\\\\\\\\"steps\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"action_info\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"Waiting\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"modifySwitchTime\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"step_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"exec_task\\\\\\\\\\\\\\"}]}`\\",\\n      \\"Uid\\": \\"141345906006****\\",\\n      \\"CallerSource\\": \\"System\\",\\n      \\"CallerUid\\": \\"141345906006****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询任务中心的任务信息',
    ),
    'ModifyTaskInfo' => 
    array (
      'summary' => '任务操作，修改任务中心的任务信息。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '141283',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbKYZJ28',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务id，多个英文逗号分隔，最多支持10个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 't-83br18hlpdrw3uxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'StepName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前用户可见的步骤名。',
            'type' => 'string',
            'required' => true,
            'example' => 'exec_task
',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作名，值为[DescribeHistoryTasks](~~2639186~~)得到的actionInfo内相应状态对应的操作action名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'modifySwitchTime',
          ),
        ),
        4 => 
        array (
          'name' => 'ActionParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '动作相关的参数，根据业务需要扩展，不同的taskAction名需传不同的值。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"recoverMode\\":\\"immediate\\"}',
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
                'example' => '6163731A-XXXX-XXXX-B934-3388DE70C217',
              ),
              'ErrorTaskId' => 
              array (
                'description' => '失败的任务ID，遇到一个失败即返回。',
                'type' => 'string',
                'example' => '""',
              ),
              'SuccessCount' => 
              array (
                'description' => '成功记录数。',
                'type' => 'string',
                'example' => '1',
              ),
              'ErrorCode' => 
              array (
                'description' => '失败错误码，同接口错误码。',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6163731A-XXXX-XXXX-B934-3388DE70C217\\",\\n  \\"ErrorTaskId\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"SuccessCount\\": \\"1\\",\\n  \\"ErrorCode\\": \\"\\\\\\"\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '任务中心修改任务信息',
      'description' => '根据任务当前状态进行相关操作，支持的操作需根据  接口获得的任务actionInfo识别。',
    ),
    'ModifyActiveOperationTasks' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务 ID，多个 ID 间使用英文逗号（,）分隔。

> 您可以调用 DescribeActiveOperationTasks 获取运维任务 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11111,22222',
          ),
        ),
        1 => 
        array (
          'name' => 'SwitchTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的计划切换时间，格式为 yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。

> 不能晚于最晚操作时间，您可以调用DescribeActiveOperationTasks，通过返回参数Deadline的值来获取最晚操作时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-10-17T18:50:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'ImmediateStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即进入执行调度。
- 0：否（默认）
- 1：是
> - 值为0时switchTime起作用；值为1时switchTime不起作用，任务开始时间将设置为当前时间，切换时间根据新的开始时间自动计算。
> - 立即进入执行调度并不是立即切换，而是立即进入准备中状态，准备完成后，进行切换。您可以调用DescribeActiveOperationTasks，通过返回参数PrepareInterval的值来获取准备时间。',
            'type' => 'integer',
            'format' => 'int32',
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
            'description' => '返回参数详情。',
            'type' => 'object',
            'properties' => 
            array (
              'Ids' => 
              array (
                'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。',
                'type' => 'string',
                'example' => '11111,22222',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CAAE9DDA-65FD-584C-A378-F1F24676****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Ids\\": \\"11111,22222\\",\\n  \\"RequestId\\": \\"CAAE9DDA-65FD-584C-A378-F1F24676****\\"\\n}","type":"json"}]',
      'title' => '修改多个主动运维任务切换时间',
      'summary' => '该接口用于修改云数据库MongoDB实例计划内运维任务的切换时间。',
    ),
    'DescribeAvailableResource' => 
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
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~61933~~)接口进行查询。',
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
            'description' => '可用区ID。您可以通过[DescribeRegions](~~61933~~)接口查看可用的可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值说明：
- **PrePaid**（默认值）：包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
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
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的数据库类型，取值说明：
- **normal**：副本集实例。
- **sharding**：分片集群实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'sharding',
            'enum' => 
            array (
              0 => 'normal',
              1 => 'sharding',
            ),
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
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        5 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '存储类型，取值说明：
- local_ssd：SSD本地盘。
- cloud_essd1：ESSD PL1云盘。

- cloud_essd2：ESSD PL2云盘。

- cloud_essd3：ESSD PL3云盘。
- cloud_auto：AutoPL 云盘。

默认为空，表示查询所有存储类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'local_ssd',
            'enum' => 
            array (
              0 => 'local_ssd',
              1 => 'cloud_essd1',
              2 => 'cloud_essd2',
              3 => 'cloud_essd3',
              4 => 'cloud_auto',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例规格。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.mongo.standard',
          ),
        ),
        7 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据库版本号。',
            'type' => 'string',
            'required' => false,
            'example' => '5.0',
          ),
        ),
        8 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数，只适用于副本集。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '1',
              3 => '3',
              5 => '5',
              7 => '7',
            ),
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '344EE51D-8850-4935-B68B-58A8F4DCE3BD',
              ),
              'SupportedDBTypes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedDBType' => 
                  array (
                    'description' => '支持的数据库类型。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AvailableZones' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AvailableZone' => 
                            array (
                              'description' => '可用区。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'SupportedEngineVersions' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SupportedEngineVersion' => 
                                      array (
                                        'description' => '支持的存储引擎版本。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'SupportedEngines' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'SupportedEngine' => 
                                                array (
                                                  'description' => '支持的存储引擎。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'SupportedNodeTypes' => 
                                                      array (
                                                        'type' => 'object',
                                                        'properties' => 
                                                        array (
                                                          'SupportedNodeType' => 
                                                          array (
                                                            'description' => '支持的实例类型。',
                                                            'type' => 'array',
                                                            'items' => 
                                                            array (
                                                              'type' => 'object',
                                                              'properties' => 
                                                              array (
                                                                'NodeType' => 
                                                                array (
                                                                  'description' => '实例的节点数。',
                                                                  'type' => 'string',
                                                                  'example' => '3',
                                                                ),
                                                                'NetworkTypes' => 
                                                                array (
                                                                  'description' => '实例的网络类型。',
                                                                  'type' => 'string',
                                                                  'example' => 'VPC',
                                                                ),
                                                                'AvailableResources' => 
                                                                array (
                                                                  'type' => 'object',
                                                                  'properties' => 
                                                                  array (
                                                                    'AvailableResource' => 
                                                                    array (
                                                                      'description' => '可用的资源详情。',
                                                                      'type' => 'array',
                                                                      'items' => 
                                                                      array (
                                                                        'type' => 'object',
                                                                        'properties' => 
                                                                        array (
                                                                          'InstanceClassRemark' => 
                                                                          array (
                                                                            'description' => '实例规格。',
                                                                            'type' => 'string',
                                                                            'example' => '4核8GB（独享型）（当前选择规格：mdb.shard.2x.xlarge.d（4核8G（独享型云盘版），最大连接数：3000，最大IOPS：min{1800+50*存储空间, 21000}））',
                                                                          ),
                                                                          'InstanceClass' => 
                                                                          array (
                                                                            'description' => '实例规格族。',
                                                                            'type' => 'string',
                                                                            'example' => 'mdb.shard.2x.xlarge.d',
                                                                          ),
                                                                          'DBInstanceStorageRange' => 
                                                                          array (
                                                                            'description' => '实例的存储空间范围。',
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'Min' => 
                                                                              array (
                                                                                'description' => '存储空间的最小值，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '20',
                                                                              ),
                                                                              'Max' => 
                                                                              array (
                                                                                'description' => '存储空间的最大值，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '16000',
                                                                              ),
                                                                              'Step' => 
                                                                              array (
                                                                                'description' => '调整存储空间的最小粒度，单位：GB。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '10',
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
                                                      'Engine' => 
                                                      array (
                                                        'description' => '实例的存储引擎。',
                                                        'type' => 'string',
                                                        'example' => 'WiredTiger',
                                                      ),
                                                    ),
                                                  ),
                                                ),
                                              ),
                                            ),
                                            'Version' => 
                                            array (
                                              'description' => '实例的数据库版本。',
                                              'type' => 'string',
                                              'example' => '4.0',
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
                                    'example' => 'cn-hangzhou-h',
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
                        'DbType' => 
                        array (
                          'description' => '实例的数据库类型，取值说明：
- **normal**：副本集实例。
- **sharding**：分片集群实例。',
                          'type' => 'string',
                          'example' => 'sharding',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344EE51D-8850-4935-B68B-58A8F4DCE3BD\\",\\n  \\"SupportedDBTypes\\": {\\n    \\"SupportedDBType\\": [\\n      {\\n        \\"AvailableZones\\": {\\n          \\"AvailableZone\\": [\\n            {\\n              \\"SupportedEngineVersions\\": {\\n                \\"SupportedEngineVersion\\": [\\n                  {\\n                    \\"SupportedEngines\\": {\\n                      \\"SupportedEngine\\": [\\n                        {\\n                          \\"SupportedNodeTypes\\": {\\n                            \\"SupportedNodeType\\": [\\n                              {\\n                                \\"NodeType\\": \\"3\\",\\n                                \\"NetworkTypes\\": \\"VPC\\",\\n                                \\"AvailableResources\\": {\\n                                  \\"AvailableResource\\": [\\n                                    {\\n                                      \\"InstanceClassRemark\\": \\"4核8GB（独享型）（当前选择规格：mdb.shard.2x.xlarge.d（4核8G（独享型云盘版），最大连接数：3000，最大IOPS：min{1800+50*存储空间, 21000}））\\",\\n                                      \\"InstanceClass\\": \\"mdb.shard.2x.xlarge.d\\",\\n                                      \\"DBInstanceStorageRange\\": {\\n                                        \\"Min\\": 20,\\n                                        \\"Max\\": 16000,\\n                                        \\"Step\\": 10\\n                                      }\\n                                    }\\n                                  ]\\n                                }\\n                              }\\n                            ]\\n                          },\\n                          \\"Engine\\": \\"WiredTiger\\"\\n                        }\\n                      ]\\n                    },\\n                    \\"Version\\": \\"4.0\\"\\n                  }\\n                ]\\n              },\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"RegionId\\": \\"cn-hangzhou\\"\\n            }\\n          ]\\n        },\\n        \\"DbType\\": \\"sharding\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RequestId>344EE51D-8850-4935-B68B-58A8F4DCE3BD</RequestId>\\n    <SupportedDBTypes>\\n        <AvailableZones>\\n            <SupportedEngineVersions>\\n                <SupportedEngines>\\n                    <SupportedNodeTypes>\\n                        <NodeType>3</NodeType>\\n                        <NetworkTypes>VPC</NetworkTypes>\\n                        <AvailableResources>\\n                            <InstanceClassRemark>4核8GB（独享型）(当前选择规格：mdb.shard.2x.xlarge.d（4核8G（独享型云盘版），最大连接数：3000，最大IOPS：min{1800+50*存储空间, 21000}）)</InstanceClassRemark>\\n                            <InstanceClass>mdb.shard.2x.xlarge.d</InstanceClass>\\n                            <DBInstanceStorageRange>\\n                                <Min>20</Min>\\n                                <Max>16000</Max>\\n                                <Step>10</Step>\\n                            </DBInstanceStorageRange>\\n                        </AvailableResources>\\n                    </SupportedNodeTypes>\\n                    <Engine>WiredTiger</Engine>\\n                </SupportedEngines>\\n                <Version>4.0</Version>\\n            </SupportedEngineVersions>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </AvailableZones>\\n        <DbType>sharding</DbType>\\n    </SupportedDBTypes>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
      'title' => '查询指定可用区的资源信息',
      'summary' => '查询指定可用区的资源信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EvaluateResource' => 
    array (
      'summary' => '在新购实例或对实例进行变配之前，评估是否有足够的资源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
            'description' => '可用区ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，取值：**MongoDB**。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'MongoDB',
            'default' => 'MongoDB',
            'enum' => 
            array (
              0 => 'MongoDB',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '4.2',
            'enum' => 
            array (
              0 => '3.4',
              1 => '4.0',
              2 => '4.2',
              3 => '4.4',
              4 => '5.0',
              5 => '6.0',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。

> 评估副本集资源时必须配置该参数，规格详情请参见[实例规格表](~~57141~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.mongo.mid',
          ),
        ),
        5 => 
        array (
          'name' => 'ShardsInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群的分片信息，评估分片集群资源时必须配置该参数。

评估新购分片集群资源时，需指定每个分片的规格，格式为JSON格式字符串。示例如下：

```
{
     "ConfigSvrs":
         [{"Storage":20,"DBInstanceClass":"dds.cs.mid"}],
     "Mongos":
         [{"DBInstanceClass":"dds.mongos.standard"},{"DBInstanceClass":"dds.mongos.standard"}],
     "Shards":
         [{"Storage":50,"DBInstanceClass":"dds.shard.standard"},{"Storage":50,"DBInstanceClass":"dds.shard.standard"},   {"Storage":50,"DBInstanceClass":"dds.shard.standard"}]
 }
```
示例中参数说明如下：

 - ConfigSvrs：ConfigServer节点。
 - Mongos：Mongos节点。
 - Shards：Shard节点。
 - Storage：指定目标分片的存储空间。
 - DBInstanceClass：指定目标分片的规格，规格详情请参见[分片集群实例规格表](~~311414~~)。

评估分片集群变配资源时，仅需指定节点信息即可，格式为JSON格式字符串。示例如下：

```
{
     "NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"
} 
```
示例中参数说明如下：

- NodeId：指定目标节点ID。
- NodeClass：指定目标节点的规格。规格详情请参见[分片集群实例规格表](~~311414~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"NodeId": "d-bp147c4d9ca7****", "NodeClass": "dds.shard.standard"}',
          ),
        ),
        6 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，评估变配资源时必须配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds-bp14bf67a76d****',
          ),
        ),
        7 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例的节点个数。

- 单节点实例取值固定为**1**。

- 共享存储版实例取值固定为**2**。

- 副本集实例取值为**3**，**5**，**7**。

<props="china">
> Serverless实例不需要配置该参数。</props>',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '3',
            'enum' => 
            array (
              0 => '1',
              1 => '3',
              2 => '5',
              3 => '7',
              4 => '2',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ReadonlyReplicas',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置实例中只读节点的个数，取值范围为**1**~**5**。

> 单节点实例<ph props ="china">和Serverless实例</ph>不需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
              3 => '4',
              4 => '5',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'Storage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '副本集的存储空间，单位为GB。
> 实例规格为云盘型时，该参数必填。</props>',
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
              'DBInstanceAvailable' => 
              array (
                'description' => '展示当前区域是否有可用的资源。返回值：
- **1**：资源足够。
- **0**：资源不足。',
                'type' => 'string',
                'example' => '1',
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本号。',
                'type' => 'string',
                'example' => '4.0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AE2DE465-E45F-481F-ABD8-37D64173****',
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎，固定为MongoDB。',
                'type' => 'string',
                'example' => 'MongoDB',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBInstanceAvailable\\": \\"1\\",\\n  \\"EngineVersion\\": \\"4.0\\",\\n  \\"RequestId\\": \\"AE2DE465-E45F-481F-ABD8-37D64173****\\",\\n  \\"Engine\\": \\"MongoDB\\"\\n}","errorExample":""},{"type":"xml","example":"<EvaluateResourceResponse>\\n    <DBInstanceAvailable>1</DBInstanceAvailable>\\n    <EngineVersion>4.0</EngineVersion>\\n    <RequestId>AE2DE465-E45F-481F-ABD8-37D64173****</RequestId>\\n    <Engine>MongoDB</Engine>\\n</EvaluateResourceResponse>","errorExample":""}]',
      'title' => '评估是否有足够的资源',
      'description' => '本接口适用于MongoDB副本集、分片集群资源的评估。支持评估新购资源以及副本集、分片集群或单个分片的变配。

> 本接口每分钟调用不得超过200次，超出会被限制流量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAvailabilityZones' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
            'description' => '可用区ID，您可以通过调用[DescribeRegions](~~61933~~)查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型。取值：
- **PrePaid**（默认值）：包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PrePaid',
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
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的数据库类型。取值：
- **normal**：副本集实例。
- **sharding**：分片集群实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
            'default' => 'normal',
            'enum' => 
            array (
              0 => 'normal',
              1 => 'sharding',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmx2m4rqu7pry',
          ),
        ),
        5 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回参数**RegionName**和**ZoneName**的语言，取值说明：
- **zh**：默认值，中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
            'default' => 'zh',
          ),
        ),
        6 => 
        array (
          'name' => 'StorageSupport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前需要展示哪些可用区，支持云盘的（cloud）,支持本地盘的（local），都支持的（default或者空）',
            'description' => '存储类型：

- **cloud**：仅展示支持云盘版实例的可用区。
- **local**：仅展示支持本地盘版实例的可用区。
- **default**或空：展示本地盘和云盘版实例都支持的可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'local',
            'default' => 'default',
          ),
        ),
        7 => 
        array (
          'name' => 'MongoType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '高可用版还是测试版（dbfs）',
            'description' => '高可用版还是测试版（dbfs）',
            'type' => 'string',
            'required' => false,
            'example' => 'dbfs',
            'default' => 'default',
          ),
        ),
        8 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储类型，取值说明： 

- **cloud_essd1**：ESSD PL1云盘。
- **cloud_essd2**：ESSD PL2云盘。
- **cloud_essd3**：ESSD PL3云盘。
-  **local_ssd**：SSD本地盘。

>- 4.4及以上版本实例只支持云盘，不填写默认选择**cloud_essd1**。
>- 4.2及以下版本实例只支持本地盘，不填写默认选择**local_ssd**。',
            'type' => 'string',
            'required' => false,
            'example' => 'local_ssd',
            'default' => 'default',
          ),
        ),
        9 => 
        array (
          'name' => 'ExcludeZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前地域过滤此输入的可用区查询结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-g',
          ),
        ),
        10 => 
        array (
          'name' => 'ExcludeSecondaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前地域过滤此输入的可用区查询结果，结合“ExcludeZoneId”实现多可用区过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-b',
          ),
        ),
        11 => 
        array (
          'name' => 'DBInstanceClass',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例规格。',
            'type' => 'string',
            'required' => false,
            'example' => 'dds.mongo.standard',
          ),
        ),
        12 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '数据库版本号。',
            'type' => 'string',
            'required' => false,
            'example' => '5.0',
          ),
        ),
        13 => 
        array (
          'name' => 'ReplicationFactor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点数。

> 该参数仅支持副本集实例。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '1',
              3 => '3',
              5 => '5',
              7 => '7',
            ),
            'example' => '3',
            'enum' => 
            array (
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
                'example' => '19A13A33-0FAD-5120-8AE1-B1636F74DD80',
              ),
              'AvailableZones' => 
              array (
                'description' => '支持购买的可用区资源详情。',
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
                      'example' => 'cn-beijing-f',
                    ),
                    'ZoneName' => 
                    array (
                      'description' => '可用区名称。

根据**AcceptLanguage**参数的值返回不同的语言。以**cn-hangzhou-h**可用区为例，示例如下：

- **AcceptLanguage**为**zh**：**杭州 可用区H**
- **AcceptLanguage**为**en**：**Hangzhou Zone H**',
                      'type' => 'string',
                      'example' => '杭州 可用区H',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。您可以通过调用[DescribeRegions](~~61933~~)接口查询。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"19A13A33-0FAD-5120-8AE1-B1636F74DD80\\",\\n  \\"AvailableZones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-beijing-f\\",\\n      \\"ZoneName\\": \\"杭州 可用区H\\",\\n      \\"RegionId\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看实例支持的可用区',
      'summary' => '查询MongoDB实例支持的可用区列表。',
      'description' => '查询给定购买条件下，支持的MongoDB可用区列表。购买条件中，地域ID必填。',
    ),
    'ModifyResourceGroup' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
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
            'example' => 'dds-bp1366caac83****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见查看[资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5DD0DEC3-24A1-5268-8E0B-5B264CA1****',
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
            'errorCode' => 'ResourceGroupId.InValid',
            'errorMessage' => 'The Specified ResourceGroupId is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStatus.NotFound',
            'errorMessage' => 'Instance status is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5DD0DEC3-24A1-5268-8E0B-5B264CA1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyResourceGroupResponse>\\n    <RequestId>5DD0DEC3-24A1-5268-8E0B-5B264CA1****</RequestId>\\n</ModifyResourceGroupResponse>","errorExample":""}]',
      'title' => '移动到指定资源组',
      'summary' => '将MongoDB实例移动到指定资源组。',
      'description' => '通过资源管理服务，您可以按照业务需要搭建合适的资源组织关系，使用目录、资源夹、账号以及资源组，分层次地组织和管理您的云资源。详情请参见[什么是资源管理](~~94475~~)。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '8288',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbWP8F69',
          1 => 'FEATUREmongodbOM9UA4',
          2 => 'FEATUREmongodbAPXG80',
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
>如果不填写，默认查询所有支持的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回参数**RegionName**和**ZoneName**的语言，取值说明：
- **zh**：默认值，中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
            'description' => '地域和可用区列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4E46C22C-D3B7-4DB8-9C76-63851BE68E20',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DdsRegion' => 
                  array (
                    'description' => '地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '地域列表。',
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
                                    'description' => '是否支持VPC，取值说明：

- **true**：支持VPC。
- **false**：不支持VPC。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'ZoneName' => 
                                  array (
                                    'description' => '可用区名称。

根据**AcceptLanguage**参数的值返回不同的语言。以**cn-hangzhou-h**可用区为例，示例如下：

- **AcceptLanguage**为**zh**：**杭州 可用区H**
- **AcceptLanguage**为**en**：**Hangzhou Zone H**',
                                    'type' => 'string',
                                    'example' => '杭州 可用区H',
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
                        'RegionName' => 
                        array (
                          'description' => '地域名称。

根据**AcceptLanguage**参数的值返回不同的语言。以**cn-hangzhou**地域为例，示例如下：

- **AcceptLanguage**为**zh**：**华东1（杭州）**
- **AcceptLanguage**为**en**：**China (Hangzhou)**',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'EndPoint' => 
                        array (
                          'description' => '公网接入地址。

返回对应地域的公网接入地址，以cn-hangzhou地域为例，示例如下：

- mongodb.aliyuncs.com',
                          'type' => 'string',
                          'example' => 'mongodb.aliyuncs.com',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4E46C22C-D3B7-4DB8-9C76-63851BE68E20\\",\\n  \\"Regions\\": {\\n    \\"DdsRegion\\": [\\n      {\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"VpcEnabled\\": true,\\n              \\"ZoneName\\": \\"杭州 可用区H\\"\\n            }\\n          ]\\n        },\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"RegionName\\": \\"华东1（杭州）\\",\\n        \\"EndPoint\\": \\"mongodb.aliyuncs.com\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>4E46C22C-D3B7-4DB8-9C76-63851BE68E20</RequestId>\\n    <Regions>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n            <ZoneName>杭州 可用区H</ZoneName>\\n        </Zones>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionName>华东1（杭州）</RegionName>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询可以使用的阿里云地域',
      'summary' => '查看MongoDB实例支持的所有地域和可用区。',
      'description' => '> 如需查询创建实例可用的地域和可用区信息，请调用[DescribeAvailableResource](~~149719~~)查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MigrateToOtherZone' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 如果实例的网络类型为专有网络，您还需要传入**VSwitchId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2658****',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移的目标可用区ID。

> - 迁移的目标可用区必须和当前实例的可用区处于同一地域。
> - 您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        2 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移可用区的生效时间，取值：
- **Immediately**（默认值）：立即生效。
- **MaintainTime**：在实例的可运维时间段内生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'Immediately',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
              2 => '0',
              3 => '1',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移的目标可用区虚拟交换机ID。

> 当实例的网络类型为专有网络时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp67ac****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FDDC511-7252-4A4A-ADDA-5CB1BF63873D',
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
            'errorCode' => 'InvalidEffectiveTime.Malformed',
            'errorMessage' => 'Specified EffectiveTime is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0FDDC511-7252-4A4A-ADDA-5CB1BF63873D\\"\\n}","errorExample":""},{"type":"xml","example":"<MigrateToOtherZoneResponse>\\n    <RequestId>0FDDC511-7252-4A4A-ADDA-5CB1BF63873D</RequestId>\\n</MigrateToOtherZoneResponse>","errorExample":""}]',
      'title' => '迁移实例到其他可用区',
      'summary' => '迁移MongoDB实例到其他可用区。',
      'description' => '- 本接口适用于副本集实例，暂不支持单节点实例和分片集群实例。
- 实例未开启透明数据加密TDE功能。
- 迁移的目标可用区和当前实例的可用区处于同一地域。
- 专有网络的实例在操作迁移可用区之前，请确保目标可用区已创建相应的虚拟交换机，如需创建请参见[创建虚拟交换机](~~65387~~)。
- 如果实例申请了公网连接地址，需要先调用[ReleasePublicNetworkAddress](~~67604~~)接口释放公网连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MigrateAvailableZone' => 
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
        'abilityTreeCode' => '8316',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbOFKSAW',
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

> 如果实例的网络类型为专有网络，您还需要传入**Vswitch**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1ece71ff2f****',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移的目标可用区ID。

> - 迁移的目标可用区和当前实例的可用区处于同一地域。
> - 您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        2 => 
        array (
          'name' => 'Vswitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移的目标可用区虚拟交换机ID。

> 当实例的网络类型为专有网络时，需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1buy0h9myt5i9e7****',
          ),
        ),
        3 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移可用区的生效时间，取值：
- **Immediately**：立即生效。
- **MaintainTime**：在实例的可运维时间段内生效。

默认为**Immediately**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'Immediately',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
              2 => '0',
              3 => '1',
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
                'example' => '0FDDC511-7252-4A4A-ADDA-5CB1BF63****',
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
            'errorCode' => 'InvalidEffectiveTime.Malformed',
            'errorMessage' => 'Specified EffectiveTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InsType.NotSupport',
            'errorMessage' => 'Specified instance type dose not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectMasterDBInstanceState',
            'errorMessage' => 'The Master instance state does not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'NetworkTypeNotSupport',
            'errorMessage' => 'The network type does not support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.LockMode',
            'errorMessage' => 'The operation is not permitted when the instance locked.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'the Specified vpc Zone not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectVswitchId',
            'errorMessage' => 'The specified  parameter \'VSwitchId\' is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidRegion_Zone_NotFound',
            'errorMessage' => 'Specified Region does not exist in RDS.',
          ),
          8 => 
          array (
            'errorCode' => 'VPCERROR.ALLOCATE_ERROR',
            'errorMessage' => 'Cannot Allocate the require vpcInstances.',
          ),
          9 => 
          array (
            'errorCode' => 'ProxyError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          10 => 
          array (
            'errorCode' => 'DbInsertError',
            'errorMessage' => 'Database insert error.',
          ),
          11 => 
          array (
            'errorCode' => 'UnsupportedDBTdeStatus',
            'errorMessage' => 'Specified DB TDEStatus does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0FDDC511-7252-4A4A-ADDA-5CB1BF63****\\"\\n}","errorExample":""},{"type":"xml","example":"<MigrateAvailableZoneResponse>\\n    <RequestId>0FDDC511-7252-4A4A-ADDA-5CB1BF63****</RequestId>\\n</MigrateAvailableZoneResponse>","errorExample":""}]',
      'title' => '迁移实例的可用区',
      'summary' => '迁移MongoDB实例的可用区。',
      'description' => '- MigrateAvailableZone接口适用于MongoDB 4.2及以下版本的副本集实例，分片集群实例，暂不支持单节点实例。
- 如果实例申请了公网连接地址，需要先调用[ReleasePublicNetworkAddress](~~67604~~)接口释放公网连接地址。
- 实例未开启透明数据加密TDE功能。
- 迁移的目标可用区和当前实例的可用区处于同一地域。
- 专有网络的实例在操作迁移可用区之前，请确保目标可用区已创建相应的虚拟交换机。如需创建，请参见[创建虚拟交换机](~~65387~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceVpcAuthMode' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例的Mongos节点ID。

> 实例类型为分片集群实例时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcAuthMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关闭专有网络免密访问功能，取值**Close**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Close',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BA51E9D9-B14A-4542-B6E6-7DE00BECCB8C',
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
            'errorCode' => 'ClassicNotSupport',
            'errorMessage' => 'Classic instance does not support this operation',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceCurrentKernelVersionNotSupport',
            'errorMessage' => 'Current  DB instance CurrentKernelVersion   does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BA51E9D9-B14A-4542-B6E6-7DE00BECCB8C\\"\\n}","type":"json"}]',
      'title' => '关闭实例的专有网络免密访问功能',
      'summary' => '关闭MongoDB实例的专有网络免密访问功能。',
      'description' => '调用本接口时，实例必须满足以下条件：
- 实例的类型为副本集实例或分片集群实例。
- 实例的数据库版本为4.0版本、（数据库小版本为mongodb_20190408_3.0.11或以上版本）4.2版本。您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)接口查看版本信息。如果版本过低请调用[UpgradeDBInstanceEngineVersion](~~67608~~)接口升级数据库版本。
- 实例的网络类型为专有网络。如果网络类型为经典网络，请调用[ModifyDBInstanceNetworkType](~~62138~~)接口将网络类型切换为专有网络。
- 免密访问功能目前仅支持关闭，不支持开启。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceNetworkType' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp11483712c1****',
          ),
        ),
        1 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例要切换的目标网络类型，取值说明：
- **VPC**：将网络类型切换为专有网络。',
            'type' => 'string',
            'required' => true,
            'example' => 'VPC',
          ),
        ),
        2 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。

> 当**NetworkType**参数配置为**VPC**时，需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1n3i15v90el48nx****',
          ),
        ),
        3 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络中的交换机ID。
> 当**NetworkType**参数配置为**VPC**时，需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1vj604nj5a9zz74****',
          ),
        ),
        4 => 
        array (
          'name' => 'RetainClassic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切换网络类型为VPC时，设置是否保留原经典网络地址，取值说明：
- **True**：保留原经典网络地址。
- **False**：不保留原经典网络地址。

> - 当**NetworkType**参数配置为**VPC**时，需要配置该参数。
> - 当该参数配置为**True**时，还需要配置**ClassicExpiredDays**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'False',
            'default' => 'False',
          ),
        ),
        5 => 
        array (
          'name' => 'ClassicExpiredDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切换网络类型为VPC时，设置保留原经典网络地址的时长。取值为**14**、**30**、**60**、**120**，单位为天。

> 当**NetworkType**参数配置为**VPC**且**RetainClassic**参数配置为**True**时，需要配置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D0E605FD-6ECE-5FBE-84A4-99AAB1B8****',
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
            'errorCode' => 'InstanceVpcAuthMode.NotSupported',
            'errorMessage' => 'Instance VpcAuthMode is NotSupported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0E605FD-6ECE-5FBE-84A4-99AAB1B8****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceNetworkTypeResponse>\\n    <RequestId>D0E605FD-6ECE-5FBE-84A4-99AAB1B8****</RequestId>\\n</ModifyDBInstanceNetworkTypeResponse>","errorExample":""}]',
      'title' => '切换实例的网络类型',
      'summary' => '切换MongoDB实例的网络类型。',
      'description' => '- 该接口适用于副本集实例和分片集群实例，暂不支持单节点实例。且仅支持经典网络类型转换至VPC网络类型。
- 该接口仅支持MongoDB 4.2及以下版本的本地盘版实例。',
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
            'description' => '实例ID。

> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中的Mongos节点ID，每次调用仅能传入一个Mongos节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前连接地址，即待修改的连接地址。',
            'type' => 'string',
            'required' => true,
            'example' => 's-bpxxxxxxxx.mongodb.rds.aliyuncs.com',
          ),
        ),
        3 => 
        array (
          'name' => 'NewConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的连接地址，以小写字母开头，由字母、数字组成，长度为8~64个字符。

> 仅需传入连接地址的前缀部分，前缀以外的部分不可修改。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyuntest111',
          ),
        ),
        4 => 
        array (
          'name' => 'NewPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的端口，端口范围需要在1000~65535之间。
> 当**DBInstanceId**参数传入的是云盘实例ID时，本参数才可用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3310',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF36A84C-0694-42D0-861D-C383E8E4FAAF',
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
            'errorCode' => 'NewConnectionString.NotSupport',
            'errorMessage' => 'Specified newConnectionString is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'currentConnectionString is mandatory for this action.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FF36A84C-0694-42D0-861D-C383E8E4FAAF\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDBInstanceConnectionStringResponse>\\r\\n\\t<RequestId>FF36A84C-0694-42D0-861D-C383E8E4FAAF</RequestId>\\r\\n</ModifyDBInstanceConnectionStringResponse>","errorExample":""}]',
      'title' => '修改实例的连接地址和端口',
      'summary' => '修改MongoDB实例的连接地址。',
      'description' => '支持修改连接地址和端口的实例类型如下：
- 支持修改本地盘和云盘版实例的连接地址。
- 分片集群仅支持修改Mongos节点的连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeShardingNetworkAddress' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID、Shard节点ID或ConfigServer节点ID。

> 您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询Mongos/Shard/ConfigServer节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CompatibleConnections' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CompatibleConnection' => 
                  array (
                    'description' => 'DynamoDB协议类型实例的连接地址信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VswitchId' => 
                        array (
                          'description' => '专有网络中交换机ID。

> 当网络类型为**VPC**时返回该参数。',
                          'type' => 'string',
                          'example' => 'vsw-bpxxxxxxxx',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '保留的经典网络地址剩余时长，单位为秒。',
                          'type' => 'string',
                          'example' => '2591963',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。
- **VPC**：专有网络。
- **Classic**：经典网络。
- **Public**：公网。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Port' => 
                        array (
                          'description' => '连接端口。',
                          'type' => 'string',
                          'example' => '3717',
                        ),
                        'NetworkAddress' => 
                        array (
                          'description' => '连接地址。',
                          'type' => 'string',
                          'example' => 'dds-bpxxxxxxxxxxxxxx.mongodb.rds.aliyuncs.com',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '专有网络ID。

> 当网络类型为**VPC**时返回该参数。',
                          'type' => 'string',
                          'example' => 'vpc-bpxxxxxxxx',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '10.140.xxx.xx',
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
                'example' => '18D8AAFD-6BEB-420F-8164-810CB0C0AA39',
              ),
              'NetworkAddresses' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NetworkAddress' => 
                  array (
                    'description' => 'MongoDB协议类型实例的连接地址信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值为
- **mongos**：mongos节点。
- **shard**：shard节点。
- **configserver**：configserver节点。',
                          'type' => 'string',
                          'example' => 'mongos',
                        ),
                        'VswitchId' => 
                        array (
                          'description' => '专有网络中交换机ID。

> 当网络类型为**VPC**时返回该参数。',
                          'type' => 'string',
                          'example' => 'vsw-bpxxxxxxxx',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '保留的经典网络地址剩余时长，单位为秒。',
                          'type' => 'string',
                          'example' => '2591963',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。
- **VPC**：专有网络。
- **Classic**：经典网络。
- **Public**：公网。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Role' => 
                        array (
                          'description' => '节点角色，返回值：
- Primary：主节点。
- Secondary：从节点。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'Port' => 
                        array (
                          'description' => '连接端口。',
                          'type' => 'string',
                          'example' => '3717',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '专有网络ID。

> 当网络类型为**VPC**时返回该参数。',
                          'type' => 'string',
                          'example' => 'vpc-bpxxxxxxxx',
                        ),
                        'NetworkAddress' => 
                        array (
                          'description' => '连接地址（字符串）。',
                          'type' => 'string',
                          'example' => 's-bpxxxxxxxx.mongodb.rds.aliyuncs.com',
                        ),
                        'NodeId' => 
                        array (
                          'description' => 'Mongos节点ID。',
                          'type' => 'string',
                          'example' => 's-bpxxxxxxxx',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '10.140.xxx.xx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CompatibleConnections\\": {\\n    \\"CompatibleConnection\\": [\\n      {\\n        \\"VswitchId\\": \\"vsw-bpxxxxxxxx\\",\\n        \\"ExpiredTime\\": \\"2591963\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"Port\\": \\"3717\\",\\n        \\"NetworkAddress\\": \\"dds-bpxxxxxxxxxxxxxx.mongodb.rds.aliyuncs.com\\",\\n        \\"VPCId\\": \\"vpc-bpxxxxxxxx\\",\\n        \\"IPAddress\\": \\"10.140.xxx.xx\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"18D8AAFD-6BEB-420F-8164-810CB0C0AA39\\",\\n  \\"NetworkAddresses\\": {\\n    \\"NetworkAddress\\": [\\n      {\\n        \\"NodeType\\": \\"mongos\\",\\n        \\"VswitchId\\": \\"vsw-bpxxxxxxxx\\",\\n        \\"ExpiredTime\\": \\"2591963\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"Role\\": \\"Primary\\",\\n        \\"Port\\": \\"3717\\",\\n        \\"VPCId\\": \\"vpc-bpxxxxxxxx\\",\\n        \\"NetworkAddress\\": \\"s-bpxxxxxxxx.mongodb.rds.aliyuncs.com\\",\\n        \\"NodeId\\": \\"s-bpxxxxxxxx\\",\\n        \\"IPAddress\\": \\"10.140.xxx.xx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<NetworkAddresses>\\n    <NetworkAddress>\\n        <NetworkType>Public</NetworkType>\\n        <NodeId>s-bpxxxxxxxx</NodeId>\\n        <Port>3717</Port>\\n        <VPCId/>\\n        <IPAddress>47.xx.xx.xxx</IPAddress>\\n        <NodeType>mongos</NodeType>\\n        <Role>Primary</Role>\\n        <NetworkAddress>s-bpxxxxxxxx-pub.mongodb.rds.aliyuncs.com</NetworkAddress>\\n    </NetworkAddress>\\n    <NetworkAddress>\\n        <NetworkType>VPC</NetworkType>\\n        <NodeId>s-bpxxxxxxxx</NodeId>\\n        <Port>3717</Port>\\n        <VPCId>vpc-bpxxxxxxxx</VPCId>\\n        <IPAddress>192.168.xx.xxx</IPAddress>\\n        <NodeType>mongos</NodeType>\\n        <Role>Primary</Role>\\n        <VswitchId>vsw-bpxxxxxxxx</VswitchId>\\n        <NetworkAddress>s-bpxxxxxxxx.mongodb.rds.aliyuncs.com</NetworkAddress>\\n    </NetworkAddress>\\n</NetworkAddresses>\\n<RequestId>3F5DD5CD-0B93-46FF-96DD-F938B13CDE8B</RequestId>","errorExample":""}]',
      'title' => '查询MongoDB分片集群实例的连接信息',
      'summary' => '查询MongoDB分片集群实例的连接信息。',
      'description' => '该接口仅支持分片集群实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocatePublicNetworkAddress' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

> 当配置为分片集群实例ID时，还需要配置**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp11483712c1****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID、Shard节点ID或ConfigServer节点ID。您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询Mongos节点、Shard节点或ConfigServer节点的节点ID。

> 当**DBInstanceId**配置的是分片集群实例ID时，需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bp18e6d84ae3****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8AA45036-497F-52E7-B951-F9C7B239****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8AA45036-497F-52E7-B951-F9C7B239****\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocatePublicNetworkAddressResponse>\\n    <RequestId>8AA45036-497F-52E7-B951-F9C7B239****</RequestId>\\n</AllocatePublicNetworkAddressResponse>","errorExample":""}]',
      'title' => '为实例申请公网连接地址',
      'summary' => '分配公网地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleasePublicNetworkAddress' => 
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
        'abilityTreeCode' => '8347',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAOTVP9',
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

> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID、Shard节点ID或ConfigServer节点ID。

> - 当**DBInstanceId**传入的是分片集群实例ID时，本参数才可用。
> - 您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询Mongos/Shard/ConfigServer节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-bp2235****',
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网地址类型，可选值：
- **SRV**
- **Normal**
>当释放的连接地址是SRV地址时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'SRV',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1D6AFE36-1AF5-4DE4-A954-672159D4CC69',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1D6AFE36-1AF5-4DE4-A954-672159D4CC69\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleasePublicNetworkAddressResponse>\\n    <RequestId>1D6AFE36-1AF5-4DE4-A954-672159D4CC69</RequestId>\\n</ReleasePublicNetworkAddressResponse>","errorExample":""}]',
      'title' => '释放实例公网地址',
      'summary' => '释放MongoDB实例的公网连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocateNodePrivateNetworkAddress' => 
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
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的可用区ID。

> 您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询实例的可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        1 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1fa5efaa93****',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Shard节点ID或ConfigServer节点ID。

> 您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询Shard/ConfigServer节点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-bp124beeb0ac****',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户名。

> - 以小写字母开头，长度为4~16位，由小写字母、数字或下划线组成。
> - 仅在首次申请Shard/ConfigServer地址时，需要设置账户名和账户密码。即所有Shard节点和ConfigServer节点都将使用首次申请地址时设置的账户和密码。
> - 该账户的权限固定为只读权限。',
            'type' => 'string',
            'required' => false,
            'example' => 'shardcsaccount',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户密码。

- 密码由大写字母、小写字母、数字、特殊字符中的至少三种组成，特殊字符为`!#$%^&*()_+-=`
- 密码长度为8-32位。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '60EEBD77-227C-5B39-86EA-D89163C5****',
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
            'errorCode' => 'InvalidAccountName.Forbid',
            'errorMessage' => 'Specified account name is a keyword.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"60EEBD77-227C-5B39-86EA-D89163C5****\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateNodePrivateNetworkAddressResponse>\\n    <RequestId>60EEBD77-227C-5B39-86EA-D89163C5****</RequestId>\\n</AllocateNodePrivateNetworkAddressResponse>","errorExample":""}]',
      'title' => '为云数据库分片集群实例节点申请内网连接地址',
      'summary' => '为云数据库MongoDB分片集群实例的Shard节点或ConfigServer节点申请内网连接地址。',
      'description' => '本接口仅适用于分片集群实例，更多详情请参见[申请Shard/ConfigServer节点连接地址](~~134037~~)。
> 申请的连接地址仅支持通过内网访问，如需通过公网访问，请调用[AllocatePublicNetworkAddress](~~67602~~)接口申请公网连接地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseNodePrivateNetworkAddress' => 
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
        'abilityTreeCode' => '8346',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbAOTVP9',
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
            'description' => '分片集群实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1a7009eb24****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Shard节点或ConfigServer节点的ID。

> 您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询Shard节点或ConfigServer节点的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-bp128a003436****',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该节点内网连接地址所属的网络类型，取值：
- **VPC**：专有网络。
- **Classic**：经典网络。

> 您可以调用[DescribeShardingNetworkAddress](~~62135~~)接口查询该节点的内网连接地址所属的网络类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
          ),
        ),
        3 => 
        array (
          'name' => 'ConnectionType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '公网地址类型，可选值：
- **SRV**
- **Normal**
>当释放的连接地址是SRV地址时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'SRV',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FDDC511-7252-4A4A-ADDA-5CB1BF63873D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0FDDC511-7252-4A4A-ADDA-5CB1BF63873D\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseNodePrivateNetworkAddressResponse>\\r\\n\\t<RequestId>EFD65226-08CC-4C4D-B6A4-CB3C382F67B0</RequestId>\\r\\n</ReleaseNodePrivateNetworkAddressResponse>","errorExample":""}]',
      'title' => '释放节点或节点内网连接地址',
      'summary' => '释放分片集群实例的Shard节点或ConfigServer节点的内网连接地址。',
      'description' => '- 本接口用于释放分片集群实例中Shard节点或ConfigServer节点的内网连接地址。更多信息请参见[释放Shard或ConfigServer节点连接地址](~~134067~~)。
- 如果需要释放分片集群实例中Shard节点或ConfigServer节点的公网连接地址，您可以通过调用[ReleasePublicNetworkAddress](~~67604~~)接口释放。',
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
            'description' => '实例所属的地域ID，您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token，用来返回更多结果。
> 第一次查询不需要提供本参数，如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的**NextToken**值以继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '212db86****',
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
> - **N**表示传入第几个实例ID。例如：**ResourceId.1**表示传入第一个实例ID；**ResourceId.2**表示传入第二个实例ID。
> - 本参数和**Tag.N.Key**参数两者中必须传入一项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。
> - **N**表示传入第几个实例ID。例如：**ResourceId.1**表示传入第一个实例ID；**ResourceId.2**表示传入第二个实例ID。
> - 本参数和**Tag.N.Key**参数两者中必须传入一项。',
              'type' => 'string',
              'required' => false,
              'example' => '开发组',
            ),
            'required' => false,
            'example' => 'dds-bpxxxxxxxx',
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
            'description' => '标签信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。
> - **N**表示传入第几个标签的键。例如：**Tag.1.Key**表示传入第一个标签的键；**Tag.2.Key**表示传入第二个标签的键。
> - 本参数和**ResourceId.N**参数两者中必须传入一项。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '开发组',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。

> **N**表示传入第几个标签的值。例如：**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '4.0环境',
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
            'description' => '查询返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。
> 如果一次查询没有返回全部结果，则会返回本参数，您可以后续查询中传入本参数返回的值以继续查询。',
                'type' => 'string',
                'example' => '212db86****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96017AF2-9AB1-4BC9-88D2-7966B3CD****',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '实例和标签信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例和标签信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。返回值固定为**ALIYUN::KVSTORE::INSTANCE**，即MongoDB实例。',
                          'type' => 'string',
                          'example' => 'ALIYUN::DDS::INSTANCE',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签的值。',
                          'type' => 'string',
                          'example' => '4.0环境',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID，此处为MongoDB实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp17e7a04960****',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签的键。',
                          'type' => 'string',
                          'example' => '开发组',
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
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' or \'TagKey.n\' is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Value\' is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter \'ResourceId.n\' is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter \'Tag.n\'\' or \'ResourceId.n\' is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter \'Scope\' is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter\'s number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' is duplicated.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter \'ResourceType\' is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86****\\",\\n  \\"RequestId\\": \\"96017AF2-9AB1-4BC9-88D2-7966B3CD****\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::DDS::INSTANCE\\",\\n        \\"TagValue\\": \\"4.0环境\\",\\n        \\"ResourceId\\": \\"dds-bp17e7a04960****\\",\\n        \\"TagKey\\": \\"开发组\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>212db86****</NextToken>\\n    <RequestId>96017AF2-9AB1-4BC9-88D2-7966B3CD****</RequestId>\\n    <TagResources>\\n        <ResourceType>ALIYUN::DDS::INSTANCE</ResourceType>\\n        <TagValue>4.0环境</TagValue>\\n        <ResourceId>dds-bp17e7a04960****</ResourceId>\\n        <TagKey>开发组</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询实例和标签的绑定关系',
      'summary' => '查询MongoDB实例和标签的绑定关系。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~61933~~)接口查询。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => false,
            'example' => 'INSTANCE',
            'default' => 'INSTANCE',
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
            'example' => 'dds-bp17e7a04960****',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token，用来返回更多结果。
>第一次查询不需要提供本参数，如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的NextToken值以继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '212db86****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。
>如果一次查询没有返回全部结果，则会返回本参数，您可以后续查询中传入本参数的值以继续查询。',
                'type' => 'string',
                'example' => '212db86****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EEDBE38F-5CF5-4316-AAC2-35817BA60D68',
              ),
              'Tags' => 
              array (
                'description' => '标签信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValues' => 
                    array (
                      'description' => '标签的值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签的值。',
                        'type' => 'string',
                        'example' => '3.4环境',
                      ),
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签的键。',
                      'type' => 'string',
                      'example' => '测试组',
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
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' or \'TagKey.n\' is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Value\' is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter \'ResourceId.n\' is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter \'Tag.n\'\' or \'ResourceId.n\' is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter \'Scope\' is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter\'s number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' is duplicated.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter \'ResourceType\' is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86****\\",\\n  \\"RequestId\\": \\"EEDBE38F-5CF5-4316-AAC2-35817BA60D68\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagValues\\": [\\n        \\"3.4环境\\"\\n      ],\\n      \\"TagKey\\": \\"测试组\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTagsResponse>\\n    <NextToken>212db86****</NextToken>\\n    <RequestId>EEDBE38F-5CF5-4316-AAC2-35817BA60D68</RequestId>\\n    <Tags>\\n        <TagValues>3.4环境</TagValues>\\n        <TagKey>测试组</TagKey>\\n    </Tags>\\n</DescribeTagsResponse>","errorExample":""}]',
      'title' => '查询已有标签列表',
      'summary' => '查询目标地域中所有的标签信息。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '8356',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbS7K03T',
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
            'description' => '实例所属的地域ID，您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
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
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例和标签信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例列表。

N表示传入第几个实例的ID，N的取值范围为1~50。例如：
- **ResourceId.1**表示传入第一个实例ID。
- **ResourceId.2**表示传入第二个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'dds-bp1fa5efaa93****',
            ),
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
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
            'description' => '标签信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。

N表示传入第几个标签的键，N的取值范围为1~20。例如：
- **Tag.1.Key**表示传入第一个标签的键。
- **Tag.2.Key**表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '开发组',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。

N表示传入第几个标签的值，N的取值范围为1~20。例如：
- **Tag.1.Value**表示传入第一个标签的值。
- **Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '4.0环境',
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
                'example' => '0FDDC511-7252-4A4A-ADDA-5CB1BF63****',
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
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' or \'TagKey.n\' is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Value\' is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter \'ResourceId.n\' is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter \'Tag.n\'\' or \'ResourceId.n\' is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter \'Scope\' is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter\'s number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.CustomTags',
            'errorMessage' => 'The Custom Tags parameter\'s number is exceed. Valid 20.',
          ),
          8 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' is duplicated.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter \'ResourceType\' is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0FDDC511-7252-4A4A-ADDA-5CB1BF63****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>0FDDC511-7252-4A4A-ADDA-5CB1BF63****</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为一个或多个MongoDB实例绑定标签',
      'summary' => '为一个或多个MongoDB实例绑定标签。',
      'description' => '在实例数量较多的情况下，您可以创建多个标签，为实例绑定不同的标签对其进行分类，后续可通过标签筛选实例。
- 标签由一对键（key）值（value）组成，键在同账号同地域下唯一，值无此限制。
- 若设置的标签不存在，则自动创建该标签并绑定到目标实例。
- 若实例已经绑定了有相同键的标签，则会覆盖绑定。
- 每个实例最多可以绑定20个标签。
- 每次调用最多可以对50个实例执行批量标签绑定。',
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
            'description' => '实例所属的地域ID，您可以调用[DescribeDBInstanceAttribute](~~62010~~)接口查询。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑实例上的所有标签，取值：
- **true**：解绑实例上的所有标签。
- **false**：不解绑实例上的所有标签。

> - 默认值为**false**。
> - 如果同时传入**TagKey**和本参数，本参数不生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bpxxxxxxxxxxxxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'dds-bpxxxxxxxx',
            ),
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
            'maxItems' => 51,
          ),
        ),
        5 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'PRODUCT',
            ),
            'required' => false,
            'example' => '开发组',
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
                'example' => 'FA3A7F36-DB57-4281-8935-4B9DF61554EB',
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
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' or \'TagKey.n\' is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter \'Tag.n.Value\' is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter \'ResourceId.n\' is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter \'Tag.n\'\' or \'ResourceId.n\' is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter \'Scope\' is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter\'s number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter \'Tag.n.Key\' is duplicated.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter \'ResourceType\' is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FA3A7F36-DB57-4281-8935-4B9DF61554EB\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FA3A7F36-DB57-4281-8935-4B9DF61554EB</RequestId>","errorExample":""}]',
      'title' => '将标签从实例中解绑',
      'summary' => '如果该标签没有绑定到其他实例，则该标签会被删除。',
      'description' => '> - 单次解绑的标签数量不能超过20个。
> - 当某个标签从所有绑定的实例中解绑后，该标签会被自动删除。',
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
      'operationType' => 'write',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-uf6e9433e955xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名。由小写字母、数字或下划线组成，以小写字母开头，长度为4~16个字符。权限为只读。',
            'type' => 'string',
            'required' => true,
            'example' => 'admin1',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户密码。
大写、小写、数字、特殊字符占三种，长度为8~32个字符；特殊字符为 ! # $ % ^ & * ( ) _ + - =',
            'type' => 'string',
            'required' => true,
            'example' => 'Test123456!',
          ),
        ),
      ),
      'responses' => 
      array (
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
                'example' => '7FEF1BEF-2842-5758-9126-415A297XXXXX',
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
            'errorMessage' => 'Specified parameter AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Malformed',
            'errorMessage' => 'Specified parameter AccountPassword is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Malformed',
            'errorMessage' => 'Specified parameter AccountDescription is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountLimitExceeded',
            'errorMessage' => 'AccountQuotaExceeded: Exceeding the allowed amount of account.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7FEF1BEF-2842-5758-9126-415A297XXXXX\\"\\n}","type":"json"}]',
      'title' => '创建实例的数据库账号',
      'summary' => '创建MongoDB实例的数据库账号信息。',
      'description' => '仅支持云盘版分片集群实例创建账号，且分片集群目前仅支持创建Shard的账号。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要重置密码的账号，取值：**root**。',
            'type' => 'string',
            'required' => true,
            'example' => 'root',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置后的密码，即修改后的密码。

- 密码由大写字母、小写字母、数字、特殊字符中的任意三种组成，特殊字符为`!#$%^&*()_+-=`
- 密码长度为8-32位。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ali!123456',
          ),
        ),
        3 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '实例的角色类型，取值说明


- 当实例类型为分片集群时，charactertype为必选； 取值为db 和cs。
- 当实例类型为副本集时，charactertype 可为空或传入normal。',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
            'enum' => 
            array (
              0 => 'db',
              1 => 'cs',
              2 => 'normal',
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
                'example' => '06CBD06E-ABC9-4121-AB93-3C3820B3E7E6',
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
            'errorMessage' => 'Specified parameter AccountPassword is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.NotFound',
            'errorMessage' => 'The AccountName provided does not exist in our records.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountName.Malformed',
            'errorMessage' => 'The specified parameter AccountName is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.AccountStatus',
            'errorMessage' => 'The operation is not permitted due to status of account. ',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.AccountType',
            'errorMessage' => 'The operation is not permitted due to type of account. ',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"06CBD06E-ABC9-4121-AB93-3C3820B3E7E6\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ResetAccountPasswordResponse>\\r\\n\\t<RequestId>06CBD06E-ABC9-4121-AB93-3C3820B3E7E6</RequestId>\\r\\n</ResetAccountPasswordResponse>","errorExample":""}]',
      'title' => '重置MongoDB实例中root账号的密码',
      'summary' => '重置MongoDB实例中root账号的密码。',
      'description' => '> 本接口目前仅支持重置实例中root账号的密码。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2356****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改备注信息的账号名。',
            'type' => 'string',
            'required' => true,
            'example' => 'root',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置账号的备注信息。
- 不能以http:// 或者 https:// 开头。
- 以中文、英文字母开头。
- 可以包含中文、英文字符、下划线（_）、短划线（-）和数字，长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'superadmin',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59DE9FC2-7B40-45CF-9011-7327A8A771A2',
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
            'errorMessage' => 'Specified parameter AccountDescription is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.NotFound',
            'errorMessage' => 'Specified account name does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InsType.NotSupport',
            'errorMessage' => 'Specified instance type dose not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59DE9FC2-7B40-45CF-9011-7327A8A771A2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <RequestId>59DE9FC2-7B40-45CF-9011-7327A8A771A2</RequestId>\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
      'title' => '修改实例中root账号的备注信息',
      'summary' => '修改MongoDB实例中root账号的备注信息。',
      'description' => '该接口暂不支持分片集群实例。',
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
            'example' => 'dds-bp1fd530f271****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，取值：**root**。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B562A65B-39AB-4EE8-8635-5A222054FB35',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '账号信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CharacterType' => 
                        array (
                          'description' => '账号的角色类型，取值说明：
- **db**: shard角色。
- **cs**：config server角色。
- **mongos**：mongos角色。
- **logic**：分片集群实例。
- **normal**：副本集实例。',
                          'type' => 'string',
                          'example' => 'mongos',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '账号的状态，取值说明：
- **Unavailable**：不可用。
- **Available**：可用。',
                          'type' => 'string',
                          'example' => 'Available',
                          'default' => 'Unavailable',
                        ),
                        'AccountDescription' => 
                        array (
                          'description' => '账号备注信息。

> 调用[ModifyAccountDescription](~~468391~~)接口设置账号备注信息后才会返回该参数。',
                          'type' => 'string',
                          'example' => '管理员',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '账号所属的实例ID。',
                          'type' => 'string',
                          'example' => 'dds-bp1fd530f271****',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '账号名。',
                          'type' => 'string',
                          'example' => 'root',
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
            'errorCode' => 'ResponseEmptyError',
            'errorMessage' => 'The Response is empty, maybe server request timeout.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B562A65B-39AB-4EE8-8635-5A222054FB35\\",\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"CharacterType\\": \\"mongos\\",\\n        \\"AccountStatus\\": \\"Available\\",\\n        \\"AccountDescription\\": \\"管理员\\",\\n        \\"DBInstanceId\\": \\"dds-bp1fd530f271****\\",\\n        \\"AccountName\\": \\"root\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <RequestId>B562A65B-39AB-4EE8-8635-5A222054FB35</RequestId>\\n    <Accounts>\\n        <CharacterType>mongos</CharacterType>\\n        <AccountStatus>Available</AccountStatus>\\n        <AccountDescription>管理员</AccountDescription>\\n        <DBInstanceId>dds-bp1fd530f271****</DBInstanceId>\\n        <AccountName>root</AccountName>\\n    </Accounts>\\n</DescribeAccountsResponse>","errorExample":""}]',
      'title' => '查询实例的数据库账号信息',
      'summary' => '查询MongoDB实例的数据库账号信息。',
      'description' => '> 本接口目前仅支持查询root账号的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySecurityIps' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dds-bp*****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组下的IP列表，多个IP地址请以半角逗号（,）隔开，不可重复，最多1000个。支持如下两种格式：
- IP地址形式，例如：127.0.0.1。
- CIDR形式，例如：127.0.0.1/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '127.0.0.1/24,127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'ModifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改方式，取值：
- **Cover**：覆盖原白名单。
- **Append**：追加白名单。
- **Delete**：删除该白名单。

默认取值为**Cover**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Append',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityIpGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '进行修改的IP白名单所属分组名称，默认为**default**分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'allowserver',
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityIpGroupAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组属性。支持大写字母、小写字母、数字，长度最大为120个字符。

默认为空字符串。',
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
                'example' => '61B05CCF-EBAB-4BF3-BA67-D77256A721E2',
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
            'errorCode' => 'InvalidSecurityIps.MalFormed',
            'errorMessage' => 'The specified parameter "SecurityIps" is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidSecurityIPListLength.Malformed',
            'errorMessage' => 'The Security IP address is not in the available range or occupied.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidInstanceIp.Duplicate',
            'errorMessage' => 'The quota of security ip  exceeds.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidGroupName.Format',
            'errorMessage' => 'Sepecified group name is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidSecurityIPs.NotFound',
            'errorMessage' => 'The Specified same security IP does not exist or at least one security IP need.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"61B05CCF-EBAB-4BF3-BA67-D77256A721E2\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifySecurityIpsResponse>\\r\\n\\t<RequestId>61B05CCF-EBAB-4BF3-BA67-D77256A721E2</RequestId>\\r\\n</ModifySecurityIpsResponse>","errorExample":""}]',
      'title' => '设置可以访问实例的 IP 白名单地址',
      'summary' => '修改MongoDB实例的IP白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySecurityGroupConfiguration' => 
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ECS安全组ID。

> - 1个实例最多可以绑定10个ECS安全组。
> - 您可以通过调用ECS的[DescribeSecurityGroup](~~25556~~)接口查询目标地域的安全组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sg-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E062C482-1A4B-469E-938C-96D28CFAE42E',
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
            'errorCode' => 'MissingInstanceId',
            'errorMessage' => 'InstanceId is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InstanceStatusInvalid',
            'errorMessage' => 'Instance status is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Specified ecs security group id is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'the Specified Zone not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidRegion_Zone_NotFound',
            'errorMessage' => 'Specified Region does not exist in RDS.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidVpc.NotSupported',
            'errorMessage' => 'the Different vpc not supported.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AssociatedEcsSecurityGroupId.QuotaExceed',
            'errorMessage' => 'SecurityGroupIdQuotaExceeded exceeding the allowed amount of SecurityGroupId.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionZoneNotFound',
            'errorMessage' => 'Specified Region does not exist in RDS.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E062C482-1A4B-469E-938C-96D28CFAE42E\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E062C482-1A4B-469E-938C-96D28CFAE42E</RequestId>","errorExample":""}]',
      'title' => '更改MongoDB实例已绑定的ECS安全组',
      'summary' => '更改MongoDB实例已绑定的ECS安全组。',
      'description' => '> 如果是分片集群实例，绑定的ECS安全组仅对Mongos节点生效。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSecurityIps' => 
    array (
      'summary' => '查询MongoDB实例的IP白名单。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ShowHDMIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示DAS白名单信息。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '展示DAS白名单信息',
              'false' => '不展示DAS白名单信息',
            ),
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
              'SecurityIps' => 
              array (
                'description' => '默认分组中包含的IP白名单。',
                'type' => 'string',
                'example' => '47.xxx.xxx.xx,100.xxx.xxx.0/24',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FC724D23-2962-479E-ABB1-606C935AE7FD',
              ),
              'SecurityIpGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityIpGroup' => 
                  array (
                    'description' => 'IP白名单分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecurityIpGroupName' => 
                        array (
                          'description' => '分组名。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'SecurityIpGroupAttribute' => 
                        array (
                          'description' => 'IP白名单分组属性，默认为空。',
                          'type' => 'string',
                          'example' => ' hidden',
                        ),
                        'SecurityIpList' => 
                        array (
                          'description' => '分组中包含的IP白名单列表。',
                          'type' => 'string',
                          'example' => '47.xxx.xxx.xx,100.xxx.xxx.0/24',
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
            'errorCode' => 'InvalidDBInstance.Malformed',
            'errorMessage' => 'Too many instance ids or instance id format is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityIps\\": \\"47.xxx.xxx.xx,100.xxx.xxx.0/24\\",\\n  \\"RequestId\\": \\"FC724D23-2962-479E-ABB1-606C935AE7FD\\",\\n  \\"SecurityIpGroups\\": {\\n    \\"SecurityIpGroup\\": [\\n      {\\n        \\"SecurityIpGroupName\\": \\"default\\",\\n        \\"SecurityIpGroupAttribute\\": \\" hidden\\",\\n        \\"SecurityIpList\\": \\"47.xxx.xxx.xx,100.xxx.xxx.0/24\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeSecurityIpsResponse>\\r\\n\\t<SecurityIpGroups>\\r\\n\\t\\t<SecurityIpGroup>\\r\\n\\t\\t\\t<SecurityIpList>114.xxx.xxx.xx</SecurityIpList>\\r\\n\\t\\t\\t<SecurityIpGroupAttribute></SecurityIpGroupAttribute>\\r\\n\\t\\t\\t<SecurityIpGroupName>allowserver</SecurityIpGroupName>\\r\\n\\t\\t</SecurityIpGroup>\\r\\n\\t\\t<SecurityIpGroup>\\r\\n\\t\\t\\t<SecurityIpList>47.xxx.xxx.xx,100.xxx.xxx.0/24</SecurityIpList>\\r\\n\\t\\t\\t<SecurityIpGroupAttribute></SecurityIpGroupAttribute>\\r\\n\\t\\t\\t<SecurityIpGroupName>default</SecurityIpGroupName>\\r\\n\\t\\t</SecurityIpGroup>\\r\\n\\t</SecurityIpGroups>\\r\\n\\t<SecurityIps>47.xxx.xxx.xx,100.xxx.xxx.0/24</SecurityIps>\\r\\n\\t<RequestId>FC724D23-2962-479E-ABB1-606C935AE7FD</RequestId>\\r\\n</DescribeSecurityIpsResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
      'title' => '查询MongoDB实例的IP白名单',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSecurityGroupConfiguration' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3C4A2494-85C4-45C5-93CF-548DB3375193',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RdsEcsSecurityGroupRel' => 
                  array (
                    'description' => 'ECS安全组信息。',
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
                          'example' => 'sg-bpxxxxxxxx',
                        ),
                        'NetType' => 
                        array (
                          'description' => 'ECS安全组的网络类型。返回值：
- **vpc**：专有网络。
- **classic**：经典网络。',
                          'type' => 'string',
                          'example' => 'vpc',
                        ),
                        'RegionId' => 
                        array (
                          'description' => 'ECS安全组所属的地域。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3C4A2494-85C4-45C5-93CF-548DB3375193\\",\\n  \\"Items\\": {\\n    \\"RdsEcsSecurityGroupRel\\": [\\n      {\\n        \\"SecurityGroupId\\": \\"sg-bpxxxxxxxx\\",\\n        \\"NetType\\": \\"vpc\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Items>\\n    <RdsEcsSecurityGroupRel>\\n        <SecurityGroupId>sg-bpxxxxxxxx</SecurityGroupId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <NetType>classic</NetType>\\n    </RdsEcsSecurityGroupRel>\\n</Items>\\n<RequestId>D18F5B88-ACA6-470E-9493-384412EDD902</RequestId>","errorExample":""}]',
      'title' => '查询MongoDB实例绑定的ECS安全组信息',
      'summary' => '查询MongoDB实例绑定的ECS安全组信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyGlobalSecurityIPGroup' => 
    array (
      'summary' => '修改云数据库 MongoDB 版的全局IP白名单模板。',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
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
            'description' => 'IP白名单模板名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dps',
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
            'example' => 'g-fwjk62egbsrp4sftxmmr',
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
            'example' => '27.16.214.10,111.60.117.181',
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
                'example' => 'A0181AC4-F186-46ED-87CA-100C70B86729',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0181AC4-F186-46ED-87CA-100C70B86729\\"\\n}","type":"json"}]',
      'title' => '修改全局IP白名单模板',
    ),
    'DescribeGlobalSecurityIPGroup' => 
    array (
      'summary' => '查询全局IP白名单模板。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)进行查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-hedmu8kg9nsabw6u42rv',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '72651AF9-7897-41A7-8B67-6C15C7F26A0A',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '全局IP白名单模板。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-sdgwqyp4f5j1x3qk7yvm',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。',
                      'type' => 'string',
                      'example' => 'dev_baoxian_k8s_bj',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '117.12.202.19',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '全局IP白名单模板绑定的实例列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'MongoDB实例Id。',
                        'type' => 'string',
                        'example' => '[dds-asdxxxx,dds-afrexxxxxx]',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"72651AF9-7897-41A7-8B67-6C15C7F26A0A\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-sdgwqyp4f5j1x3qk7yvm\\",\\n      \\"GlobalIgName\\": \\"dev_baoxian_k8s_bj\\",\\n      \\"GIpList\\": \\"117.12.202.19\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstances\\": [\\n        \\"[dds-asdxxxx,dds-afrexxxxxx]\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询全局IP白名单模板',
    ),
    'ModifyGlobalSecurityIPGroupName' => 
    array (
      'summary' => '修改全局IP白名单模板名称。',
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
            'description' => '地域ID，您可以通过调用[DescribeRegions](~~61933~~)接口查询。',
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
            'example' => 'prod_baoxian_k8s',
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
            'example' => 'g-xmtncwkrzqqoe59dzljb',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F8CA8312-530A-413A-9129-F2BB32A8D404',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '全局IP白名单模板列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-qiawi8ec1urcx9swoy37',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。',
                      'type' => 'string',
                      'example' => 'def',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '222.70.197.187',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8CA8312-530A-413A-9129-F2BB32A8D404\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-qiawi8ec1urcx9swoy37\\",\\n      \\"GlobalIgName\\": \\"def\\",\\n      \\"GIpList\\": \\"222.70.197.187\\",\\n      \\"RegionId\\": \\"cn-shanghai\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '修改全局IP白名单模板名称',
    ),
    'DescribeGlobalSecurityIPGroupRelation' => 
    array (
      'summary' => '查询实例与全局IP白名单模板关系映射。',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
            'description' => '实例Id',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-2ze6069764423m0l',
          ),
        ),
      ),
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
                'description' => '实例Id',
                'type' => 'string',
                'example' => 'dds-2ze6069764423m0l',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => 'F8CA8312-530A-413A-9129-F2BB32A8D404',
              ),
              'GlobalSecurityIPGroupRel' => 
              array (
                'description' => '全局IP白名单模板映射关系。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '全局IP白名单模板映射关系。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-gfurfpsh4ycbrm2avst7',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '27.16.214.10,111.60.117.181',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hongkong',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。',
                      'type' => 'string',
                      'example' => 'dev_baoxian_k8s_bj',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DBClusterId\\": \\"dds-2ze6069764423m0l\\",\\n  \\"RequestId\\": \\"F8CA8312-530A-413A-9129-F2BB32A8D404\\",\\n  \\"GlobalSecurityIPGroupRel\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-gfurfpsh4ycbrm2avst7\\",\\n      \\"GIpList\\": \\"27.16.214.10,111.60.117.181\\",\\n      \\"RegionId\\": \\"cn-hongkong\\",\\n      \\"GlobalIgName\\": \\"dev_baoxian_k8s_bj\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例与全局IP白名单模板关系映射',
    ),
    'CreateGlobalSecurityIPGroup' => 
    array (
      'summary' => '创建全局IP白名单模板。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
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
            'example' => 'aizy',
            'maxLength' => 120,
            'minLength' => 2,
          ),
        ),
        2 => 
        array (
          'name' => 'GIpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
            'type' => 'string',
            'required' => true,
            'example' => '27.18.86.18,183.92.40.129',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F8CA8312-530A-413A-9129-F2BB32A8D404',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => 'IP白名单模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP白名单模板',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-2ifynl1jfkdlhhxgva3q',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。IP白名单模板名称需满足如下要求：

- 由小写字母、数字、下划线（_）组成。

- 由字母开头、字母或数字结尾。

- 长度为2~120个字符。',
                      'type' => 'string',
                      'example' => 'developer',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。

> 多个IP地址需要用英文逗号隔开，所有IP白名单累积支持添加1000个IP地址或地址段。',
                      'type' => 'string',
                      'example' => '111.207.194.217,61.149.7.154',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8CA8312-530A-413A-9129-F2BB32A8D404\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-2ifynl1jfkdlhhxgva3q\\",\\n      \\"GlobalIgName\\": \\"developer\\",\\n      \\"GIpList\\": \\"111.207.194.217,61.149.7.154\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '创建全局IP白名单模板',
    ),
    'ModifyGlobalSecurityIPGroupRelation' => 
    array (
      'summary' => '修改全局白名单模板与MongoDB实例的映射关系。',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-2ze6069764423m0l',
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
            'example' => 'g-u0qdtybfvxhaxrrhk4n7',
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
                'example' => '52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA\\"\\n}","type":"json"}]',
      'title' => '修改全局白名单模板和实例的映射关系',
    ),
    'DeleteGlobalSecurityIPGroup' => 
    array (
      'summary' => '删除全局IP白名单模板。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
            'example' => 'corp',
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
            'example' => 'g-qxieqf40xjst1ngpr3jz',
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
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '2F42BB4E-461F-5B55-A37C-53B1141C****',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2F42BB4E-461F-5B55-A37C-53B1141C****\\"\\n}","type":"json"}]',
      'title' => '删除全局IP白名单模板',
    ),
    'ModifyDBInstanceTDE' => 
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TDEStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TDE状态，取值： **enabled**，即开启TDE功能。
> TDE功能开启后不支持关闭，请谨慎开启。',
            'type' => 'string',
            'required' => true,
            'example' => 'enabled',
          ),
        ),
        2 => 
        array (
          'name' => 'EncryptorName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式，取值：**aes-256-cbc**。

> 当**TEDStatus**参数取值为**enabled**时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'aes-256-cbc',
          ),
        ),
        3 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义密钥ID。
只有如下地域支持自定义密钥，其余地域会使用默认密钥加密。
- 新加坡（ap-southeast-1）
- 杭州（cn-hangzhou）
- 上海（cn-shanghai）
- 北京（cn-beijing）
- 深圳（cn-shenzhen）
- 香港（cn-hongkong）
- 马来西亚（ap-southeast-3）',
            'type' => 'string',
            'required' => false,
            'example' => '749c1df7-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleARN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定角色的ARN。格式：`acs:ram::$accountID:role/$roleName `。
> - `$accountID`：云账号ID。您可以通过登录阿里云控制台，将鼠标悬停在右上角头像的位置，单击安全设置进行查看。
> - `$roleName`：RAM角色名称。您可以通过登录RAM控制台，单击左侧导航栏的RAM角色管理，在RAM角色名称列表下进行查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::123456789012****:role/adminrole	',
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
                'example' => '434D7127-6229-4355-BA50-7A3685A725DF',
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
            'errorCode' => 'UnsupportedDBTdeStatus',
            'errorMessage' => 'Specified DB TDEStatus does not support this operation.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedEngine',
            'errorMessage' => 'Current DB Instance engine does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectCharacterType',
            'errorMessage' => 'Current DB instance CharacterType does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectDBInstanceLockMode',
            'errorMessage' => 'Current DB instance lock mode does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidClusterKms',
            'errorMessage' => 'this cluster not kms service.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"434D7127-6229-4355-BA50-7A3685A725DF\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDBInstanceTDEResponse>\\r\\n\\t<RequestId>434D7127-6229-4355-BA50-7A3685A725DF</RequestId>\\r\\n</ModifyDBInstanceTDEResponse>","errorExample":""}]',
      'title' => '修改MongoDB实例的透明数据加密TDE状态',
      'summary' => '修改MongoDB实例的透明数据加密TDE（Transparent Data Encryption）状态。',
      'description' => '透明数据加密TDE（Transparent Data Encryption）可对数据文件执行实时I/O加密和解密，数据在写入磁盘之前进行加密，从磁盘读入内存时进行解密，更多详情请参见[设置透明数据加密TDE](~~131048~~)。
> TDE功能开通后无法关闭。

调用本接口时，实例必须满足以下条件：

- 实例为副本集实例或分片集群实例。
- 实例的存储引擎为WiredTiger。
- 实例的存储类型为本地盘版。
- 实例的数据库版本为4.0或4.2版本，如果实例数据库版本过低，您可以调用[UpgradeDBInstanceEngineVersion](~~67608~~)接口升级数据库版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckCloudResourceAuthorized' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp18f7d6b6a7****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属地域，您可以调用[DescribeDBInstanceAttribute](~~62010~~)查询。',
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
              'AuthorizationState' => 
              array (
                'description' => '授权状态，取值说明：
- **0**：未授权。
- **1**：已授权。
- **2**：用户未开启KMS。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0181AC4-F186-46ED-87CA-100C70B86729',
              ),
              'RoleArn' => 
              array (
                'description' => '已授权阿里云资源的角色信息。
> 当**AuthorizationState**返回值为**1**时，才会返回本参数。',
                'type' => 'string',
                'example' => 'acs:ram::140****:role/aliyunrdsinstanceencryptiondefaultrole',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorizationState\\": 1,\\n  \\"RequestId\\": \\"A0181AC4-F186-46ED-87CA-100C70B86729\\",\\n  \\"RoleArn\\": \\"acs:ram::140****:role/aliyunrdsinstanceencryptiondefaultrole\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckCloudResourceAuthorizedResponse>\\n    <AuthorizationState>1</AuthorizationState>\\n    <RequestId>A0181AC4-F186-46ED-87CA-100C70B86729</RequestId>\\n    <RoleArn>acs:ram::140****:role/aliyunrdsinstanceencryptiondefaultrole</RoleArn>\\n</CheckCloudResourceAuthorizedResponse>","errorExample":""}]',
      'title' => '查询KMS密钥是否已授权给实例',
      'summary' => '查询KMS密钥是否已授权给MongoDB实例。',
      'description' => '在调用[ModifyDBInstanceTDE](~~131267~~)接口开启透明数据加密TDE前，请调用本接口查询KMS密钥是否已授权给MongoDB实例。',
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标可用区ID，您可以通过[DescribeRegions](~~61933~~)查询可用的可用区。',
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
                'example' => '7CD51DA4-A499-43CE-B9B5-20CD4FDC648E',
              ),
              'KeyIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KeyId' => 
                  array (
                    'description' => '实例密钥列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例密钥。',
                      'type' => 'string',
                      'example' => '2a4f4ac2-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
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
            'errorCode' => 'INVALID_INSNAME_REGIONID_EMPTY',
            'errorMessage' => 'The insName and regionId can\'t be all empty',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CD51DA4-A499-43CE-B9B5-20CD4FDC648E\\",\\n  \\"KeyIds\\": {\\n    \\"KeyId\\": [\\n      \\"2a4f4ac2-xxxx-xxxx-xxxx-xxxxxxxxxxxx\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7CD51DA4-A499-43CE-B9B5-20CD4FDC648E</RequestId>\\n<KeyIds>\\n    <KeyId>2a4f4ac2-xxxx-xxxx-xxxx-xxxxxxxxxxxx</KeyId>\\n    <KeyId>578b59ad-xxxx-xxxx-xxxx-xxxxxxxxxxxx</KeyId>\\n    <KeyId>749c1df7-xxxx-xxxx-xxxx-xxxxxxxxxxxx</KeyId>\\n</KeyIds>","errorExample":""}]',
      'title' => '查询实例的自定义密钥列表',
      'summary' => '查询实例的自定义密钥列表。',
      'description' => '使用通过DescribeUserEncryptionKeyList查询到的自定义密钥可以开启透明数据加密TDE。详细信息请参见[ModifyDBInstanceTDE](~~131267~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceEncryptionKey' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可以输入一个实例自定义密钥。您可以调用[DescribeUserEncryptionKeyList](~~151729~~)查询实例的自定义密钥列表。',
            'type' => 'string',
            'required' => false,
            'example' => '2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
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
              'Origin' => 
              array (
                'description' => '实例密钥的来源。',
                'type' => 'string',
                'example' => 'Aliyun_KMS',
              ),
              'Description' => 
              array (
                'description' => '实例密钥的描述。',
                'type' => 'string',
                'example' => 'key description example',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '783C2062-A2D3-4EA8-88AD-E43F990C23BB',
              ),
              'EncryptionKeyStatus' => 
              array (
                'description' => '实例密钥状态。

- **Enabled**：实例密钥可用。
- **Disabled**：实例密钥不可用。
',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'MaterialExpireTime' => 
              array (
                'description' => '密钥的过期时间（UTC）。当该值为空时，表示密钥不会过期。

',
                'type' => 'string',
                'example' => '2020-07-06T18:22:03Z',
              ),
              'KeyUsage' => 
              array (
                'description' => '实例密钥的用途。',
                'type' => 'string',
                'example' => 'ENCRYPT/DECRYPT',
              ),
              'EncryptionKey' => 
              array (
                'description' => '实例密钥。',
                'type' => 'string',
                'example' => '2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
              ),
              'Creator' => 
              array (
                'description' => '密钥创建者UID。',
                'type' => 'string',
                'example' => '123456',
              ),
              'DeleteDate' => 
              array (
                'description' => '实例密钥的预计删除时间。当该值为空时，表示密钥不会被自动删除。',
                'type' => 'string',
                'example' => '2020-07-06T18:22:03Z',
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
            'errorCode' => 'INVALID_INSNAME_REGIONID_EMPTY',
            'errorMessage' => 'The insName and regionId can\'t be all empty',
          ),
          1 => 
          array (
            'errorCode' => 'NO_ACTIVE_BYOK',
            'errorMessage' => 'This custins no active byok.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Origin\\": \\"Aliyun_KMS\\",\\n  \\"Description\\": \\"key description example\\",\\n  \\"RequestId\\": \\"783C2062-A2D3-4EA8-88AD-E43F990C23BB\\",\\n  \\"EncryptionKeyStatus\\": \\"Enabled\\",\\n  \\"MaterialExpireTime\\": \\"2020-07-06T18:22:03Z\\",\\n  \\"KeyUsage\\": \\"ENCRYPT/DECRYPT\\",\\n  \\"EncryptionKey\\": \\"2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx\\",\\n  \\"Creator\\": \\"123456\\",\\n  \\"DeleteDate\\": \\"2020-07-06T18:22:03Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceEncryptionKeyResponse>\\n    <Origin>Aliyun_KMS</Origin>\\n    <Description>key description example</Description>\\n    <RequestId>783C2062-A2D3-4EA8-88AD-E43F990C23BB</RequestId>\\n    <EncryptionKeyStatus>Enabled</EncryptionKeyStatus>\\n    <MaterialExpireTime>2020-07-06T18:22:03Z</MaterialExpireTime>\\n    <KeyUsage>ENCRYPT/DECRYPT</KeyUsage>\\n    <EncryptionKey>2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx</EncryptionKey>\\n    <Creator>123456</Creator>\\n    <DeleteDate>2020-07-06T18:22:03Z</DeleteDate>\\n</DescribeDBInstanceEncryptionKeyResponse>","errorExample":""}]',
      'title' => '查询MongoDB实例的某个密钥的详情',
      'summary' => '查询MongoDB实例的某个密钥的详情。',
      'description' => '调用DescribeDBInstanceEncryptionKey接口时，实例必须以BYOK的方式开启了透明数据加密TDE。您可以调用[ModifyDBInstanceTDE](~~131267~~)来开启TDE。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceTDEInfo' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
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
                'description' => 'TDE状态，返回值为：
- **enabled**：开启状态。
- **disabled**：关闭状态。

> 当TDK状态为关闭时，不会返回**RoleARN**、**EncryptionKey**和**EncryptorName**参数。',
                'type' => 'string',
                'example' => 'enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F4DD0E29-361B-42F2-9301-B0048CCCE5D6',
              ),
              'RoleARN' => 
              array (
                'description' => '指定待授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息。',
                'type' => 'string',
                'example' => 'acs:ram::123456789012****:role/aliyunrdsinstanceencryptiondefaultrole',
              ),
              'EncryptionKey' => 
              array (
                'description' => '实例的自定义密钥。

目前仅以下地域支持BYOK（Bring Your Own Key，用户可以自行管理和拥有加密密钥）：
- 华东1（杭州）
- 华东2（上海）
- 华北2（北京）
- 华南1（深圳）
- 中国（香港）
- 新加坡
- 马来西亚（吉隆坡）

> 支持BYOK，用户可以管理且拥有密钥，系统将返回用户的自定义密钥；不支持BYOK，用户不可管理密钥，系统将返回字符串`NoActiveBYOK`。',
                'type' => 'string',
                'example' => '2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
              ),
              'EncryptorName' => 
              array (
                'description' => '加密算法。',
                'type' => 'string',
                'example' => 'aes-256-cbc',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TDEStatus\\": \\"enabled\\",\\n  \\"RequestId\\": \\"F4DD0E29-361B-42F2-9301-B0048CCCE5D6\\",\\n  \\"RoleARN\\": \\"acs:ram::123456789012****:role/aliyunrdsinstanceencryptiondefaultrole\\",\\n  \\"EncryptionKey\\": \\"2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx\\",\\n  \\"EncryptorName\\": \\"aes-256-cbc\\"\\n}","type":"json"}]',
      'title' => '查询MongoDB实例的透明数据加密TDE是否开启',
      'summary' => '查询MongoDB实例的透明数据加密TDE（Transparent Data Encryption）是否开启。',
      'description' => '> 关于该功能的详细介绍，请参见[设置透明数据加密TDE](~~131048~~)。

调用本接口时，实例必须满足以下条件：
- 实例为副本集实例或分片集群实例。
- 实例的存储引擎为WiredTiger。
- 实例的数据库版本为4.0或4.2版本，如果实例数据库版本过低，您可以调用[UpgradeDBInstanceEngineVersion](~~67608~~)接口升级数据库版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeKmsKeys' => 
    array (
      'summary' => '查询云盘加密可选择的Kms密钥。',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。
',
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
                'example' => '60EEBD77-227C-5B39-86EA-D89163C5****',
              ),
              'KmsKeys' => 
              array (
                'description' => 'KMS的密钥列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'KMS的密钥对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'KeyAlias' => 
                    array (
                      'description' => '密钥别名。',
                      'type' => 'string',
                      'example' => 'key-shh656820f4mh9qxxxxx     alias/test1',
                    ),
                    'KeyId' => 
                    array (
                      'description' => '密钥ID。',
                      'type' => 'string',
                      'example' => '37291352-xxxx-xxxx-adbf-fd0630a95583',
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
            'errorCode' => 'EntityNotExistUser',
            'errorMessage' => 'The User does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExistService',
            'errorMessage' => 'The Service mongodb.aliyuncs.com does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermissionService',
            'errorMessage' => 'The Account NoPermission Error! Please Authorize The Account! Service Name: mongodb.aliyuncs.com, SLR Role:AliyunServiceRoleForMongoDB.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityAlreadyExistsRole',
            'errorMessage' => 'The Role already exists:AliyunServiceRoleForMongoDB.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"60EEBD77-227C-5B39-86EA-D89163C5****\\",\\n  \\"KmsKeys\\": [\\n    {\\n      \\"KeyAlias\\": \\"key-shh656820f4mh9qxxxxx     alias/test1\\",\\n      \\"KeyId\\": \\"37291352-xxxx-xxxx-adbf-fd0630a95583\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询云盘加密可选择的Kms密钥',
      'description' => '查询到的密钥仅适用于云盘加密。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'SSLAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对SSL功能执行的操作，取值说明：
- **Open**：开启SSL加密。
- **Close**：关闭SSL加密。
- **Update**：更新SSL证书。  
         ',
            'type' => 'string',
            'required' => true,
            'example' => 'Open',
            'enum' => 
            array (
              0 => 'Open',
              1 => 'Close',
              2 => 'Update',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D806B11-078F-4154-BF9F-844F56D08964',
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
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'SSLAlreadyEnabled',
            'errorMessage' => 'SSL have already been enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'SSLAlreadyDisabled',
            'errorMessage' => 'SSL have already been disabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'SSLNotEnabled',
            'errorMessage' => 'SSL not enabled.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectCharacterType',
            'errorMessage' => 'Current DB instance CharacterType does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectDBInstanceLockMode',
            'errorMessage' => 'Current DB instance lock mode does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EnabledSSLNotSupport',
            'errorMessage' => 'Specified region does not support enable ssl.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D806B11-078F-4154-BF9F-844F56D08964\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceSSLResponse>\\n    <RequestId>6D806B11-078F-4154-BF9F-844F56D08964</RequestId>\\n</ModifyDBInstanceSSLResponse>","errorExample":""}]',
      'title' => '修改MongoDB实例的SSL链路配置',
      'summary' => '修改MongoDB实例的SSL配置。',
      'description' => '调用ModifyDBInstanceSSL接口时，实例必须满足以下条件： 
- 实例状态为运行中。
- 实例类型为副本集实例。
- 实例的数据库版本为3.4、4.0或4.2版本，其中4.2版本仅中国站支持。

> 在开通、更新和关闭SSL过程中，实例会重启一次，建议您在业务低峰期操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceSSL' => 
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
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
      ),
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
                'description' => 'SSL证书的过期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '2020-03-11T02:28:25Z',
              ),
              'SSLStatus' => 
              array (
                'description' => 'SSL功能的状态。
- **Open**：SSL功能已开启。
- **Closed**：SSL功能已关闭。     ',
                'type' => 'string',
                'example' => 'Open',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36BB1BC2-789C-4BBA-A519-C5B388E4B0D4',
              ),
              'CertCommonName' => 
              array (
                'description' => 'SSL证书名称。',
                'type' => 'string',
                'example' => 'dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SSLExpiredTime\\": \\"2020-03-11T02:28:25Z\\",\\n  \\"SSLStatus\\": \\"Open\\",\\n  \\"RequestId\\": \\"36BB1BC2-789C-4BBA-A519-C5B388E4B0D4\\",\\n  \\"CertCommonName\\": \\"dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDBInstanceSSLResponse>\\r\\n\\t<SSLExpiredTime>2020-03-11T02:28:25Z</SSLExpiredTime>\\r\\n\\t<RequestId>36BB1BC2-789C-4BBA-A519-C5B388E4B0D4</RequestId>\\r\\n\\t<SSLStatus>Open</SSLStatus>\\r\\n\\t<CertCommonName>dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com</CertCommonName>\\r\\n</DescribeDBInstanceSSLResponse>","errorExample":""}]',
      'title' => '查询MongoDB实例的SSL设置详情',
      'summary' => '查询MongoDB实例的SSL设置详情。',
      'description' => '调用该接口时，实例必须满足以下条件：
- 实例状态为运行中。
- 实例类型为副本集实例。
- 实例的数据库版本为<ph props="intl">3.4</ph>及以上版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAuditLogFilter' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置审计日志的采集类型，多个采集类型请用英文逗号分隔。
- **admin**：运维管控操作。
- **slow**：慢日志。
- **query**：查询操作。
- **insert**：插入操作。  
- **update**：更新操作。  
- **delete**：删除操作。 
- **command**：协议命令。例如aggregate聚合方法。  ',
            'type' => 'string',
            'required' => true,
            'example' => 'insert,query,update,delete',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中节点的角色，取值：
- **primary**：主节点。
- **secondary**：从节点。',
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
                'example' => 'E209BE2B-F264-4B9D-81F6-A5A5FB1FBF28',
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
            'errorCode' => 'InvalidFilterParam',
            'errorMessage' => 'Specified filter is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E209BE2B-F264-4B9D-81F6-A5A5FB1FBF28\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyAuditLogFilterResponse>\\r\\n\\t<RequestId>E209BE2B-F264-4B9D-81F6-A5A5FB1FBF28</RequestId>\\r\\n</ModifyAuditLogFilterResponse>","errorExample":""}]',
      'title' => '修改实例审计日志的采集类型',
      'summary' => '修改MongoDB实例审计日志的采集类型。',
      'description' => '- 调用本接口时，要求实例状态为运行中。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAuditPolicy' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1785659e3f****',
          ),
        ),
        1 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计日志状态，取值：
- **enable**：开启审计日志。
- **disabled**：关闭审计日志。',
            'type' => 'string',
            'required' => true,
            'example' => 'enable',
            'enum' => 
            array (
              0 => 'enable',
              1 => 'disabled',
              2 => 'Enable',
              3 => 'Disabled',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'StoragePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计日志保留时长。取值范围为1~365天，默认为30天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '365',
            'minimum' => '1',
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'AuditLogSwitchSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计日志的请求来源，取值为**Console**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Console',
            'default' => 'Console',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计日志的版本类型。

- **Trial**：免费试用版。
- **Standard**：正式版。

> 该参数的默认值为**Trial**。从2022年01月06日起，各地域将陆续上线正式版审计日志，并终止申请免费试用版审计日志。建议您设置为**Standard**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
            'default' => 'Trial',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC04D812-F18D-4568-9B88-F260D9590116',
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
            'errorCode' => 'EntityNotExistUser',
            'errorMessage' => 'The User does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExistService',
            'errorMessage' => 'The Service mongodb.aliyuncs.com does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermissionService',
            'errorMessage' => 'The Account NoPermission Error! Please Authorize The Account! Service Name: mongodb.aliyuncs.com, SLR Role:AliyunServiceRoleForMongoDB.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityAlreadyExistsRole',
            'errorMessage' => 'The Role already exists:AliyunServiceRoleForMongoDB.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DC04D812-F18D-4568-9B88-F260D9590116\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyAuditPolicyResponse>\\r\\n\\t<RequestId>DC04D812-F18D-4568-9B88-F260D9590116</RequestId>\\r\\n</ModifyAuditPolicyResponse>","errorExample":""}]',
      'title' => '设置实例的审计日志开关或日志存储时长',
      'summary' => '设置MongoDB实例的审计日志开关或日志存储时长。',
      'description' => '- 本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAuditRecords' => 
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID或Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp128a003436****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-03-13T12:11:14Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 查询结束时间距查询开始时间不得超过24个小时，超过则调用失败。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-03-13T13:11:14Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Database',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名，默认为所有数据库。',
            'type' => 'string',
            'required' => false,
            'example' => 'database****',
          ),
        ),
        5 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号，默认为所有账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'Form',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计记录返回的展示类型，取值：
- **File**：触发审计日志文件的生成，若传入这个值，只返回公共参数。
- **Stream**（默认值）：返回数据流。',
            'type' => 'string',
            'required' => false,
            'example' => 'Stream',
            'default' => 'Stream',
            'enum' => 
            array (
              0 => 'File',
              1 => 'Stream',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字查询。多个关键字以空格分隔，不超过10个关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'slow',
          ),
        ),
        8 => 
        array (
          'name' => 'LogicalOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索的逻辑操作， 默认值为and。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
            'default' => 'and',
            'enum' => 
            array (
              0 => 'and',
              1 => 'or',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。取值：**30**（默认值）、**50**、**100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。大于0，且不超过Integer的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按时间的升降序对查询到的慢日志进行排序。取值：
- **asc**：按时间升序排序。
- **desc**：按时间降序排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
            'default' => 'desc',
            'enum' => 
            array (
              0 => 'desc',
              1 => 'asc',
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
            'description' => '总记录数。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3278BEB8-503B-4E46-8F7E-D26E040C9769',
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
                  'SQLRecord' => 
                  array (
                    'description' => '审计日志详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostAddress' => 
                        array (
                          'description' => '客户端IP地址。',
                          'type' => 'string',
                          'example' => '11.xxx.xxx.xxx',
                        ),
                        'TableName' => 
                        array (
                          'description' => 'MongoDB的集合名称。',
                          'type' => 'string',
                          'example' => 'C1',
                        ),
                        'ReturnRowCounts' => 
                        array (
                          'description' => '返回记录数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'ExecuteTime' => 
                        array (
                          'description' => '该语句执行的时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-03-11T03:30:27Z',
                        ),
                        'ThreadID' => 
                        array (
                          'description' => '线程ID。',
                          'type' => 'string',
                          'example' => '140682188297984',
                        ),
                        'TotalExecutionTimes' => 
                        array (
                          'description' => '消耗时间，单位为微秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '700',
                        ),
                        'Syntax' => 
                        array (
                          'description' => '执行语句。',
                          'type' => 'string',
                          'example' => '{ \\"atype\\" : \\"createCollection\\", \\"param\\" : { \\"ns\\" : \\"123.test1\\" }, \\"result\\": \\"OK\\" }',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '数据库账号名。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidStartTime.Format',
            'errorMessage' => 'Specified start time is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Format',
            'errorMessage' => 'Specified end time is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Invalid',
            'errorMessage' => 'Specified end time is before this service active time.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be greater than the start time.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidQueryKeyword.Format',
            'errorMessage' => 'Specified Query Keyword is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDatabase.Format',
            'errorMessage' => 'Specified Database is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidQueryTime.Format',
            'errorMessage' => 'Specified query time is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectSQLLogActiveStatus',
            'errorMessage' => 'Current DB instance SQL log active status does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'LogApiFrequencyExceeded',
            'errorMessage' => 'Exceeding the allowed frequency of log api.',
          ),
          2 => 
          array (
            'errorCode' => 'ConcurrentTaskExceeded',
            'errorMessage' => 'Concurrent task exceeding the allowed amount.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 40,\\n  \\"PageRecordCount\\": 30,\\n  \\"RequestId\\": \\"3278BEB8-503B-4E46-8F7E-D26E040C9769\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"SQLRecord\\": [\\n      {\\n        \\"HostAddress\\": \\"11.xxx.xxx.xxx\\",\\n        \\"TableName\\": \\"C1\\",\\n        \\"ReturnRowCounts\\": 2,\\n        \\"DBName\\": \\"test123\\",\\n        \\"ExecuteTime\\": \\"2019-03-11T03:30:27Z\\",\\n        \\"ThreadID\\": \\"140682188297984\\",\\n        \\"TotalExecutionTimes\\": 700,\\n        \\"Syntax\\": \\"{ \\\\\\\\\\\\\\"atype\\\\\\\\\\\\\\" : \\\\\\\\\\\\\\"createCollection\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"param\\\\\\\\\\\\\\" : { \\\\\\\\\\\\\\"ns\\\\\\\\\\\\\\" : \\\\\\\\\\\\\\"123.test1\\\\\\\\\\\\\\" }, \\\\\\\\\\\\\\"result\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"OK\\\\\\\\\\\\\\" }\\",\\n        \\"AccountName\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeAuditRecordsResponse>\\r\\n\\t<Items>\\r\\n\\t\\t<SQLRecord>\\r\\n\\t\\t\\t<TotalExecutionTimes>703</TotalExecutionTimes>\\r\\n\\t\\t\\t<Syntax>{ &quot;atype&quot; : &quot;command&quot;, &quot;param&quot; : { &quot;command&quot; : &quot;find&quot;, &quot;ns&quot; : &quot;123.test1&quot;, &quot;args&quot; : { &quot;find&quot; : &quot;test1&quot;, &quot;filter&quot; : { &quot;x&quot; : 1, &quot;y&quot; : 2 }, &quot;shardVersion&quot; : [ { &quot;$timestamp&quot; : { &quot;t&quot; : 0, &quot;i&quot; : 0 } }, { &quot;$oid&quot; : &quot;000000000000000000000000&quot; } ], &quot;$clusterTime&quot; : { &quot;clusterTime&quot; : { &quot;$timestamp&quot; : { &quot;t&quot; : 1552275017, &quot;i&quot; : 2 } }, &quot;signature&quot; : { &quot;hash&quot; : { &quot;$binary&quot; : &quot;9qfygDs61fKCvdXJqjq+f0zML0E=&quot;, &quot;$type&quot; : &quot;00&quot; }, &quot;keyId&quot; : { &quot;$numberLong&quot; : &quot;6666955498811555841&quot; } } }, &quot;$client&quot; : { &quot;application&quot; : { &quot;name&quot; : &quot;MongoDB Shell&quot; }, &quot;driver&quot; : { &quot;name&quot; : &quot;MongoDB Internal Client&quot;, &quot;version&quot; : &quot;3.4.10&quot; }, &quot;os&quot; : { &quot;type&quot; : &quot;Linux&quot;, &quot;name&quot; : &quot;Ubuntu&quot;, &quot;architecture&quot; : &quot;x86_64&quot;, &quot;version&quot; : &quot;16.04&quot; }, &quot;mongos&quot; : { &quot;host&quot; : &quot;rxxxxxx.cloud.cm10:3074&quot;, &quot;client&quot; : &quot;47.xxx.xxx.xx:53854&quot;, &quot;version&quot; : &quot;4.0.0&quot; } }, &quot;$configServerState&quot; : { &quot;opTime&quot; : { &quot;ts&quot; : { &quot;$timestamp&quot; : { &quot;t&quot; : 1552275017, &quot;i&quot; : 2 } }, &quot;t&quot; : { &quot;$numberLong&quot; : &quot;3&quot; } } }, &quot;$db&quot; : &quot;123&quot; } }, &quot;result&quot;: &quot;OK&quot; }</Syntax>\\r\\n\\t\\t\\t<HostAddress>11.xxx.xxx.xx</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-11T03:30:27Z</ExecuteTime>\\r\\n\\t\\t\\t<ThreadID>139xxxxxxxx</ThreadID>\\r\\n\\t\\t\\t<AccountName>__system;</AccountName>\\r\\n\\t\\t\\t<DBName>local;</DBName>\\r\\n\\t\\t</SQLRecord>\\r\\n\\t\\t<SQLRecord>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<Syntax>{ &quot;atype&quot; : &quot;createIndex&quot;, &quot;param&quot; : { &quot;ns&quot; : &quot;123.test1&quot;, &quot;indexName&quot; : &quot;y_1&quot;, &quot;indexSpec&quot; : { &quot;v&quot; : 2, &quot;key&quot; : { &quot;y&quot; : 1 }, &quot;name&quot; : &quot;y_1&quot;, &quot;ns&quot; : &quot;123.test1&quot; } }, &quot;result&quot;: &quot;OK&quot; }</Syntax>\\r\\n\\t\\t\\t<HostAddress></HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-11T03:30:06Z</ExecuteTime>\\r\\n\\t\\t\\t<ThreadID>140xxxxxxxx</ThreadID>\\r\\n\\t\\t\\t<AccountName>__system;</AccountName>\\r\\n\\t\\t\\t<DBName>local;</DBName>\\r\\n\\t\\t</SQLRecord>\\r\\n\\t</Items>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TotalRecordCount>2</TotalRecordCount>\\r\\n\\t<RequestId>3278BEB8-503B-4E46-8F7E-D26E040C9769</RequestId>\\r\\n\\t<PageRecordCount>30</PageRecordCount>\\r\\n</DescribeAuditRecordsResponse>","errorExample":""}]',
      'title' => '查询实例的审计日志',
      'summary' => '查询MongoDB实例的审计日志。',
      'description' => '- 调用本接口时，实例的审计日志须处于开通状态，否则返回的审计日志内容为空。
- 本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAuditPolicy' => 
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
            'description' => ' 实例ID。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '111E7B16-0A87-4CBA-B271-F34AD61E099F',
              ),
              'LogAuditStatus' => 
              array (
                'description' => ' 审计日志的状态。 
- Enable：开启。
- Disabled：关闭。

默认为关闭状态。',
                'type' => 'string',
                'example' => 'Enable',
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
            'errorCode' => 'InvalidDBInstance.Malformed',
            'errorMessage' => 'Too many instance ids or instance id format is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"111E7B16-0A87-4CBA-B271-F34AD61E099F\\",\\n  \\"LogAuditStatus\\": \\"Enable\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeAuditPolicyResponse>\\r\\n\\t<LogAuditStatus>Enable</LogAuditStatus>\\r\\n\\t<RequestId>111E7B16-0A87-4CBA-B271-F34AD61E099F</RequestId>\\r\\n</DescribeAuditPolicyResponse>","errorExample":""}]',
      'title' => '查询审计日志是否开启',
      'summary' => '查询MongoDB实例的审计日志是否开启。',
      'description' => '- 调用本接口时，要求实例状态为运行中。
- 本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAuditLogFilter' => 
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
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中节点的角色，取值：
- **mongos**：mongos节点配置。
- **db**：shard节点配置。
- **logic**：逻辑实例配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'logic',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '实例的审计操作类型信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7BAFB0B3-2A54-5B65-B13E-3937CF08FEE6',
              ),
              'Filter' => 
              array (
                'description' => '数据库操作日志类型，有以下几种类型：
- **admin**：运维管控操作。
- **slow**：慢日志。
- **query**：查询操作。
- **insert**：插入操作。  
- **update**：更新操作。  
- **delete**：删除操作。 
- **command**：协议命令。例如aggregate聚合方法。',
                'type' => 'string',
                'example' => 'admin,slow,insert,query,update,delete,command',
              ),
              'RoleType' => 
              array (
                'description' => '分片集群实例中节点的角色。',
                'type' => 'string',
                'example' => 'logic',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7BAFB0B3-2A54-5B65-B13E-3937CF08FEE6\\",\\n  \\"Filter\\": \\"admin,slow,insert,query,update,delete,command\\",\\n  \\"RoleType\\": \\"logic\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogFilterResponse>\\n    <RequestId>7BAFB0B3-2A54-5B65-B13E-3937CF08FEE6</RequestId>\\n    <Filter>admin</Filter>\\n</DescribeAuditLogFilterResponse>","errorExample":""}]',
      'title' => '查询审计日志采集日志类型',
      'summary' => '查询MongoDB实例审计日志采集的日志类型。',
      'description' => '- 调用本接口时，要求实例状态为运行中。
- 本接口仅适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMongoDBLogConfig' => 
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
            'description' => '实例ID。您可以通过调用[DescribeDBInstances](~~61939~~)进行查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '审计日志的配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'UserProjectName' => 
              array (
                'description' => '审计日志的project名称。',
                'type' => 'string',
                'example' => 'nosql-176498472570****-cn-hangzhou',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '664ECE26-658A-47C5-88F6-870B0132E8D2',
              ),
              'IsUserProjectLogstoreExist' => 
              array (
                'description' => '当前地域中是否存在审计日志的project。取值：
- **1**：存在。
- **0**或**null**：不存在。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'IsEtlMetaExist' => 
              array (
                'description' => '是否已创建将审计日志分发到Logtail的规则。关于Logtail的详细信息，请参见[Logtail简介](~~28979~~)。取值：
- **1**：已创建。
- **0**或**null**：未创建。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ServiceType' => 
              array (
                'description' => '审计日志的版本类型。
- **Trial**：免费试用版。
- **Standard**：正式版。',
                'type' => 'string',
                'example' => 'Standard',
              ),
              'EnableAudit' => 
              array (
                'description' => '是否开启云数据库MongoDB审计日志功能。

- **true**：开启。
- **false**：未开启。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TtlForTrail' => 
              array (
                'description' => '免费试用版审计日志的保留时长，单位为天。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'UsedStorageForTrail' => 
              array (
                'description' => '免费试用版审计日志已使用的存储容量，单位为字节。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12548178759',
              ),
              'PreserveStorageForTrail' => 
              array (
                'description' => '免费试用版审计日志可使用存储容量的上限，单位为字节。可设置最高上限为107374182400字节。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '107374182400',
              ),
              'TtlForStandard' => 
              array (
                'description' => '正式版审计日志的保留时长，取值范围为1~365天。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'UsedStorageForStandard' => 
              array (
                'description' => '正式版审计日志已使用的存储容量，单位为字节。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20163',
              ),
              'PreserveStorageForStandard' => 
              array (
                'description' => '正式版审计日志可使用存储容量的上限。如果值为-1，说明未设置上限。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '-1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProjectName\\": \\"nosql-176498472570****-cn-hangzhou\\",\\n  \\"RequestId\\": \\"664ECE26-658A-47C5-88F6-870B0132E8D2\\",\\n  \\"IsUserProjectLogstoreExist\\": 1,\\n  \\"IsEtlMetaExist\\": 1,\\n  \\"ServiceType\\": \\"Standard\\",\\n  \\"EnableAudit\\": true,\\n  \\"TtlForTrail\\": 1,\\n  \\"UsedStorageForTrail\\": 12548178759,\\n  \\"PreserveStorageForTrail\\": 107374182400,\\n  \\"TtlForStandard\\": 30,\\n  \\"UsedStorageForStandard\\": 20163,\\n  \\"PreserveStorageForStandard\\": -1\\n}","errorExample":""},{"type":"xml","example":"<DescribeMongoDBLogConfigResponse>\\n    <EnableAudit>true</EnableAudit>\\n    <TtlForStandard>30</TtlForStandard>\\n    <PreserveStorageForStandard>-1</PreserveStorageForStandard>\\n    <UserProjectName>nosql-1764984725705461-cn-hangzhou</UserProjectName>\\n    <RequestId>58E34DEE-EF44-5A59-B83E-A5B6F82CF5C9</RequestId>\\n    <ServiceType>Standard</ServiceType>\\n    <IsUserProjectLogstoreExist>1</IsUserProjectLogstoreExist>\\n    <UsedStorageForTrail>12565942384</UsedStorageForTrail>\\n    <PreserveStorageForTrail>107374182400</PreserveStorageForTrail>\\n    <IsEtlMetaExist>1</IsEtlMetaExist>\\n    <TtlForTrail>30</TtlForTrail>\\n    <UsedStorageForStandard>20163</UsedStorageForStandard>\\n</DescribeMongoDBLogConfigResponse>","errorExample":""}]',
      'title' => '查看日志服务的配置',
      'summary' => '查看MongoDB日志服务的配置。',
      'description' => '本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。

您可以根据业务需求开通云数据库MongoDB审计日志功能，开通方法请参见[开通审计日志](~~59903~~)。

- 从2022年01月06日起，各地域将陆续上线正式版审计日志，并终止申请免费试用版审计日志。具体请参见[【通知】云数据库MongoDB上线按量收费的正式版审计日志及终止申请免费试用版](~~377480~~)。
- 正式版审计日志根据审计日志的存储用量和保留时长按量收费，收费标准请参见<props="china">[云数据库MongoDB详细价格信息](https://www.aliyun.com/price/product?#/mongodb/detail/badds)</props><props="intl">[云数据库MongoDB详细价格信息](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing)</props>。',
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
            'description' => ' 实例ID。 
> 如果是分片集群实例，您还需要配置`NodeId`。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1fc7e65108****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' Shard节点ID。 

> 如果`DBInstanceId`配置的是分片集群实例的ID，需要配置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp18b06ebc21****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-08-15T14:13Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。

> - 必须晚于查询开始时间。
> - 查询结束时间距查询开始时间不得超过24个小时，超过则调用失败。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-08-16T14:13Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodbtest',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，多个关键字以空格分隔，不超过10个关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test test1',
          ),
        ),
        6 => 
        array (
          'name' => 'LogicalOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索的逻辑操作， 默认值为and。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
            'default' => 'and',
            'enum' => 
            array (
              0 => 'and',
              1 => 'or',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 每页记录数，取值范围为**30**~**100**。 ',
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
        9 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按时间的升降序对查询到的慢日志进行排序。取值如下：
- asc：按时间升序排序。
- desc：按时间降序排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
            'default' => 'desc',
            'enum' => 
            array (
              0 => 'desc',
              1 => 'asc',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
      ),
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
                'description' => ' 总记录数。 ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '本页慢操作日志明细的个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8076C4BA-DDBD-529C-BFF4-D8620C3F****',
              ),
              'PageNumber' => 
              array (
                'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'LogRecords' => 
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
                          'description' => '操作执行的开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-02-25T 01:41:28Z',
                        ),
                        'HostAddress' => 
                        array (
                          'description' => '连接数据库的主机地址。',
                          'type' => 'string',
                          'example' => '192.168.XX.XX',
                        ),
                        'QueryTimes' => 
                        array (
                          'description' => '该语句的执行时长，单位为毫秒。',
                          'type' => 'string',
                          'example' => '600',
                        ),
                        'TableName' => 
                        array (
                          'description' => 'MongoDB的集合名称。',
                          'type' => 'string',
                          'example' => 'C1',
                        ),
                        'SQLText' => 
                        array (
                          'description' => '慢操作执行的语句。',
                          'type' => 'string',
                          'example' => '{\\"op\\":\\"query\\",\\"ns\\":\\"mongodbtest.customer\\",\\"query\\":{\\"find\\":\\"customer\\",\\"filter\\":{\\"name\\":\\"jack\\"}}}',
                        ),
                        'ReturnRowCounts' => 
                        array (
                          'description' => '返回行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'KeysExamined' => 
                        array (
                          'description' => '索引扫描行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'mongodbtest',
                        ),
                        'DocsExamined' => 
                        array (
                          'description' => '该操作执行时扫描的文档数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000000',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '执行该操作的数据库用户名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '当前数据库的引擎类型。',
                'type' => 'string',
                'example' => 'MongoDB',
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
            'errorCode' => 'IncorrectCharacterType',
            'errorMessage' => 'Current DB instance CharacterType does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be greater than the start time',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'LogApiFrequencyExceeded',
            'errorMessage' => 'Exceeding the allowed frequency of log api.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"8076C4BA-DDBD-529C-BFF4-D8620C3F****\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"LogRecords\\": [\\n      {\\n        \\"ExecutionStartTime\\": \\"2019-02-25T 01:41:28Z\\",\\n        \\"HostAddress\\": \\"192.168.XX.XX\\",\\n        \\"QueryTimes\\": \\"600\\",\\n        \\"TableName\\": \\"C1\\",\\n        \\"SQLText\\": \\"{\\\\\\\\\\\\\\"op\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"query\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ns\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"mongodbtest.customer\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"query\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"find\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"customer\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"filter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"jack\\\\\\\\\\\\\\"}}}\\",\\n        \\"ReturnRowCounts\\": 0,\\n        \\"KeysExamined\\": 0,\\n        \\"DBName\\": \\"mongodbtest\\",\\n        \\"DocsExamined\\": 1000000,\\n        \\"AccountName\\": \\"test\\"\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"MongoDB\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogRecordsResponse>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>8076C4BA-DDBD-529C-BFF4-D8620C3F****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <LogRecords>\\n            <TableName>$cmd</TableName>\\n            <QueryTimes>944</QueryTimes>\\n            <ExecutionStartTime>2021-08-15T21:08:36Z</ExecutionStartTime>\\n            <DBName>admin</DBName>\\n            <HostAddress>11.61.195.204</HostAddress>\\n            <SQLText>{\\"op\\":\\"command\\",\\"ns\\":\\"admin.$cmd\\",\\"command\\":{\\"isMaster\\":1,\\"client\\":{\\"driver\\":{\\"name\\":\\"mgo\\",\\"version\\":\\"vinllen\\"},\\"os\\":{\\"type\\":\\"linux\\",\\"architecture\\":\\"amd64\\"}},\\"$readPreference\\":{\\"mode\\":\\"secondaryPreferred\\"},\\"$db\\":\\"admin\\"},\\"numYield\\":0,\\"locks\\":{},\\"flowControl\\":{},\\"responseLength\\":748,\\"protocol\\":\\"op_query\\",\\"millis\\":944,\\"replRole\\":{\\"stateStr\\":\\"SECONDARY\\",\\"_id\\":1}}</SQLText>\\n        </LogRecords>\\n    </Items>\\n    <Engine>MongoDB</Engine>\\n</DescribeSlowLogRecordsResponse>","errorExample":""}]',
      'title' => '查询实例运行出现的慢操作日志明细',
      'summary' => '查询MongoDB实例运行出现的慢日志明细。',
      'description' => '- 本接口仅适用于规格类型为**通用型本地盘版**,**独享型本地盘版**和**独享型云盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeErrorLogRecords' => 
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp12c5b040dc****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID或Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp128a003436****',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中节点的角色。取值：
- **primary**：主节点。
- **secondary**：从节点。

> 当**NodeId**参数传入的是Mongos节点ID时，本参数取值只能为**primary**。',
            'type' => 'string',
            'required' => false,
            'example' => 'primary',
            'default' => 'primary',
            'enum' => 
            array (
              0 => 'primary',
              1 => 'secondary',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-01-01T12:10Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 查询结束时间，必须晚于查询开始时间，且与查询开始时间间隔时长不能大于一天。格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-01-02T12:10Z',
          ),
        ),
        5 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodbtest',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 每页记录数，取值范围：**30**~**100**。 ',
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
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        9 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，多个关键字以空格分隔，不超过10个关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test test1',
          ),
        ),
        10 => 
        array (
          'name' => 'LogicalOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索的逻辑操作， 默认值为and。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
            'default' => 'and',
            'enum' => 
            array (
              0 => 'and',
              1 => 'or',
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
              'TotalRecordCount' => 
              array (
                'description' => ' 总记录数。 ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '68BCBEC2-1E66-471F-A1A8-E3C60C0A80B0',
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
                  'LogRecords' => 
                  array (
                    'description' => '错误日志明细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnInfo' => 
                        array (
                          'description' => '日志连接信息。',
                          'type' => 'string',
                          'example' => 'conn18xxxxxx',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '日志生成时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:</i><i>ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-02-26T12:09:34Z',
                        ),
                        'Category' => 
                        array (
                          'description' => '日志类别。返回值：
- NETWORK：网络连接日志。
- ACCESS：访问控制日志。
- -：普通日志。
- COMMAND：慢日志。
- SHARDING：集群日志。
- STORAGE：存储引擎日志。
- CONNPOOL：连接池日志。
- ASIO：异步IO日志。
- WRITE：慢更新日志。',
                          'type' => 'string',
                          'example' => 'NETWORK',
                        ),
                        'Content' => 
                        array (
                          'description' => '日志信息。',
                          'type' => 'string',
                          'example' => 'xxxxxxxx',
                        ),
                        'Id' => 
                        array (
                          'description' => '日志ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1111111111',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '当前数据库的引擎类型。',
                'type' => 'string',
                'example' => 'MongoDB',
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
            'errorMessage' => 'The end time must be greater than the start time',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'LogApiFrequencyExceeded',
            'errorMessage' => 'Exceeding the allowed frequency of log api.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageRecordCount\\": 1,\\n  \\"RequestId\\": \\"68BCBEC2-1E66-471F-A1A8-E3C60C0A80B0\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"LogRecords\\": [\\n      {\\n        \\"ConnInfo\\": \\"conn18xxxxxx\\",\\n        \\"CreateTime\\": \\"2019-02-26T12:09:34Z\\",\\n        \\"Category\\": \\"NETWORK\\",\\n        \\"Content\\": \\"xxxxxxxx\\",\\n        \\"Id\\": 1111111111\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"MongoDB\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeErrorLogRecordsResponse>\\r\\n\\t<Items>\\r\\n\\t\\t<LogRecords>\\r\\n\\t\\t\\t<Category>NETWORK</Category>\\r\\n\\t\\t\\t<CreateTime>2019-02-26T12:09:34Z</CreateTime>\\r\\n\\t\\t\\t<ConnInfo>conn18xxxxxx</ConnInfo>\\r\\n\\t\\t\\t<Content>xxxxxxxx</Content>\\r\\n\\t\\t</LogRecords>\\r\\n\\t</Items>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TotalRecordCount>2</TotalRecordCount>\\r\\n\\t<RequestId>68BCBEC2-1E66-471F-A1A8-E3C60C0A80B0</RequestId>\\r\\n</DescribeErrorLogRecordsResponse>","errorExample":""}]',
      'title' => '查询实例的错误日志',
      'summary' => '查询MongoDB实例的错误日志。',
      'description' => '- 本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRunningLogRecords' => 
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID或Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-01-01T12:10Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。
> 查询结束时间距查询开始时间不得超过24个小时，超过则调用失败。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-01-01T13:10Z',
          ),
        ),
        4 => 
        array (
          'name' => 'DBName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongodbtest',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中节点的角色。取值：
- **primary**：主节点。
- **secondary**：从节点。

> 当**NodeId**参数传入的是Mongos节点ID时，**RoleType**取值只能为**primary**。',
            'type' => 'string',
            'required' => false,
            'example' => 'primary',
            'default' => 'primary',
            'enum' => 
            array (
              0 => 'primary',
              1 => 'secondary',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 每页记录数，取值范围为**30**~**100**。 ',
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
        8 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按时间的升降序对查询到的运行日志进行排序。取值：
- asc：按时间升序排序。
- desc：按时间降序排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
            'default' => 'desc',
            'enum' => 
            array (
              0 => 'desc',
              1 => 'asc',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bpxxxxxxxxxxxxxxxxxx',
          ),
        ),
        10 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的角色ID。您可以通过[DescribeReplicaSetRole](~~62134~~)进行查询。',
            'type' => 'string',
            'required' => false,
            'example' => '651xxxxx',
          ),
        ),
        11 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键字，多个关键字以空格分隔，不超过10个关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test test2',
          ),
        ),
        12 => 
        array (
          'name' => 'LogicalOperator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字搜索的逻辑操作，
默认值为and。',
            'type' => 'string',
            'required' => false,
            'example' => 'and',
            'default' => 'and',
            'enum' => 
            array (
              0 => 'and',
              1 => 'or',
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
              'TotalRecordCount' => 
              array (
                'description' => ' 总记录数。 ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageRecordCount' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '45D2B592-DEBA-4347-BBF3-47FF6C97DBBC',
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
                  'LogRecords' => 
                  array (
                    'description' => '运行日志明细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnInfo' => 
                        array (
                          'description' => '日志连接信息。',
                          'type' => 'string',
                          'example' => 'conn18xxxxxx',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '日志生成时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-02-26T12:09:34Z',
                        ),
                        'Category' => 
                        array (
                          'description' => '日志类别。',
                          'type' => 'string',
                          'example' => 'NETWORK',
                        ),
                        'Content' => 
                        array (
                          'description' => '日志信息。',
                          'type' => 'string',
                          'example' => ' end connection 11.xxx.xxx.xx:3xxxx (0 connections now open)\\n',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '当前数据库的引擎类型。',
                'type' => 'string',
                'example' => 'MongoDB',
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
            'errorMessage' => 'The end time must be greater than the start time',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'LogApiFrequencyExceeded',
            'errorMessage' => 'Exceeding the allowed frequency of log api.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 2,\\n  \\"PageRecordCount\\": 30,\\n  \\"RequestId\\": \\"45D2B592-DEBA-4347-BBF3-47FF6C97DBBC\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"LogRecords\\": [\\n      {\\n        \\"ConnInfo\\": \\"conn18xxxxxx\\",\\n        \\"CreateTime\\": \\"2019-02-26T12:09:34Z\\",\\n        \\"Category\\": \\"NETWORK\\",\\n        \\"Content\\": \\" end connection 11.xxx.xxx.xx:3xxxx (0 connections now open)\\\\\\\\n\\"\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"MongoDB\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeRunningLogRecordsResponse>\\r\\n\\t<Items>\\r\\n\\t\\t<LogRecords>\\r\\n\\t\\t\\t<Category>-</Category>\\r\\n\\t\\t\\t<CreateTime>2019-02-26T12:09:34Z</CreateTime>\\r\\n\\t\\t\\t<ConnInfo>conn18xxxxxx</ConnInfo>\\r\\n\\t\\t\\t<Content>\\r\\n\\t\\t\\t\\tend connection 11.xxx.xxx.xx:3xxxx (0 connections now open)\\r\\n\\t\\t\\t</Content>\\r\\n\\t\\t</LogRecords>\\r\\n\\t\\t<LogRecords>\\r\\n\\t\\t\\t<Category>NETWORK</Category>\\r\\n\\t\\t\\t<CreateTime>2019-02-26T12:09:34Z</CreateTime>\\r\\n\\t\\t\\t<ConnInfo>thread1</ConnInfo>\\r\\n\\t\\t\\t<Content>connection accepted from 11.xxx.xxx.xx:3xxxx #1862051 (11 connections now open)</Content>\\r\\n\\t\\t</LogRecords>\\r\\n\\t</Items>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TotalRecordCount>2</TotalRecordCount>\\r\\n\\t<RequestId>45D2B592-DEBA-4347-BBF3-47FF6C97DBBC</RequestId>\\r\\n</DescribeRunningLogRecordsResponse>","errorExample":""}]',
      'title' => '查询实例的运行日志',
      'summary' => '查询MongoDB实例的运行日志。',
      'description' => '- 本接口适用于规格类型为**通用型本地盘版**和**独享型本地盘版**实例。
- 本接口限制每分钟调用30次，如超过这个限制会被限流，请勿高频调用。如需高频调用，请使用Logstore，详情请参见[管理Logstore](~~48990~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceMonitor' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Granularity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置监控采集粒度，取值：**1**或**300**，单位为秒。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFD65226-08CC-4C4D-B6A4-CB3C382F67B0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFD65226-08CC-4C4D-B6A4-CB3C382F67B0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceMonitorResponse>\\r\\n\\t<RequestId>EFD65226-08CC-4C4D-B6A4-CB3C382F67B0</RequestId>\\r\\n</ModifyDBInstanceMonitorResponse>","errorExample":""}]',
      'title' => '设置MongoDB实例的监控采集粒度',
      'summary' => '设置MongoDB实例的监控采集粒度。',
      'description' => '>由于监控采集粒度调整功能变更，本接口仅适用于旧版本MongoDB控制台。

调用本接口时，实例必须满足以下条件：
- 实例为副本集实例或分片集群实例。
- 实例的版本为3.4（最新的小版本）或4.0。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '8272',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodb4MQMUO',
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2635****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID或Shard节点ID，可用于查询单个节点的性能情况。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp2287****',
          ),
        ),
        2 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能指标，取值详情请参见[性能参数表](~~64048~~)。

>如需传入多个指标请用英文逗号（,）分隔。
',
            'type' => 'string',
            'required' => true,
            'example' => 'CpuUsage',
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
            'example' => '2022-06-13T10:58Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-13T11:58Z',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点实例或副本集实例的节点角色ID。您可以通过调用[DescribeReplicaSetRole](~~62134~~)接口查询。
> 当**DBInstanceId**参数传入的是单节点实例ID或副本集实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => '6025****',
          ),
        ),
        6 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能数据粒度(5,30,60,600,1800,3600,86400)',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '60',
          ),
        ),
        7 => 
        array (
          'name' => 'ReplicaSetRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单节点实例或副本集实例的节点角色，取值说明：
- **Primary**：主节点。
- **Secondary**：从节点。

> - 当**DBInstanceId**参数传入的是单节点实例ID或副本集实例ID时，本参数才可用。
> - 当**DBInstanceId**参数传入的是单节点实例时，本参数的取值仅支持**Primary**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Primary',
            'default' => 'Primary',
            'enum' => 
            array (
              0 => 'Primary',
              1 => 'Secondary',
              2 => 'Readonly',
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
              'PerformanceKeys' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PerformanceKey' => 
                  array (
                    'description' => '性能指标信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '性能指标。',
                          'type' => 'string',
                          'example' => 'CpuUsage',
                        ),
                        'Unit' => 
                        array (
                          'description' => '性能指标的单位。',
                          'type' => 'string',
                          'example' => '%',
                        ),
                        'ValueFormat' => 
                        array (
                          'description' => '性能指标值的格式。如果该性能指标包含多个字段，通常以&分隔。

例如查询磁盘空间使用量，返回的**ValueFormat**即为**ins_size&amp;data_size&amp;log_size**。',
                          'type' => 'string',
                          'example' => 'cpu_usage',
                        ),
                        'PerformanceValues' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PerformanceValue' => 
                            array (
                              'description' => '性能指标值列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '性能指标值。',
                                    'type' => 'string',
                                    'example' => '0.23',
                                  ),
                                  'Date' => 
                                  array (
                                    'description' => '性能指标值产生的日期。',
                                    'type' => 'string',
                                    'example' => '2022-06-13T10:58:00Z',
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
              'EndTime' => 
              array (
                'description' => '查询结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '2022-06-13T11:58Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A300BC7-6D8F-527F-A2DB-A7768D26E9AC',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '2022-06-13T10:58Z',
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
            'errorCode' => 'InvalidPerformanceKey.Malformed',
            'errorMessage' => 'The specified  parameter Key is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidStartTime.Malformed',
            'errorMessage' => 'The specified  parameter StartTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The specified  parameter EndTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTimeAndEndTime.Malformed',
            'errorMessage' => 'The end time must be greater than the start time',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformanceKeys\\": {\\n    \\"PerformanceKey\\": [\\n      {\\n        \\"Key\\": \\"CpuUsage\\",\\n        \\"Unit\\": \\"%\\",\\n        \\"ValueFormat\\": \\"cpu_usage\\",\\n        \\"PerformanceValues\\": {\\n          \\"PerformanceValue\\": [\\n            {\\n              \\"Value\\": \\"0.23\\",\\n              \\"Date\\": \\"2022-06-13T10:58:00Z\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"EndTime\\": \\"2022-06-13T11:58Z\\",\\n  \\"RequestId\\": \\"4A300BC7-6D8F-527F-A2DB-A7768D26E9AC\\",\\n  \\"StartTime\\": \\"2022-06-13T10:58Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancePerformanceResponse>\\n    <PerformanceKeys>\\n        <PerformanceKey>\\n            <ValueFormat>cpu_usage</ValueFormat>\\n            <PerformanceValues>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T10:58:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T10:59:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.22</Value>\\n                    <Date>2022-06-13T11:00:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:01:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:02:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:03:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:04:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:05:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:06:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:07:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:08:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:09:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:10:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:11:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:12:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:13:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:14:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:15:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:16:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:17:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:18:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.22</Value>\\n                    <Date>2022-06-13T11:19:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.22</Value>\\n                    <Date>2022-06-13T11:20:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:21:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:22:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:23:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:24:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:25:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:26:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:27:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:28:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:29:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:30:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:31:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:32:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:33:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:34:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:35:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:36:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:37:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:38:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:39:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:40:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:41:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:42:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:43:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:44:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:45:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:46:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:47:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:48:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:49:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:50:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.24</Value>\\n                    <Date>2022-06-13T11:51:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:52:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:53:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:54:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:55:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:56:00Z</Date>\\n                </PerformanceValue>\\n                <PerformanceValue>\\n                    <Value>0.23</Value>\\n                    <Date>2022-06-13T11:57:00Z</Date>\\n                </PerformanceValue>\\n            </PerformanceValues>\\n            <Unit>%</Unit>\\n            <Key>CpuUsage</Key>\\n        </PerformanceKey>\\n    </PerformanceKeys>\\n    <RequestId>4A300BC7-6D8F-527F-A2DB-A7768D26E9AC</RequestId>\\n    <EndTime>2022-06-13T11:58Z</EndTime>\\n    <StartTime>2022-06-13T10:58Z</StartTime>\\n</DescribeDBInstancePerformanceResponse>","errorExample":""}]',
      'title' => '查询实例性能数据',
      'summary' => '查询MongoDB实例性能数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBInstanceMonitor' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1143f90ff3****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFD65226-08CC-4C4D-B6A4-CB3C382F67B0',
              ),
              'Granularity' => 
              array (
                'description' => '监控采集粒度。返回值为**5**，单位为秒。',
                'type' => 'string',
                'example' => '5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFD65226-08CC-4C4D-B6A4-CB3C382F67B0\\",\\n  \\"Granularity\\": \\"5\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceMonitorResponse>\\n    <RequestId>FA79CCB2-6541-5304-BA35-05A7A1BC****</RequestId>\\n    <Granularity>5</Granularity>\\n</DescribeDBInstanceMonitorResponse>","errorExample":""}]',
      'title' => '查询MongoDB实例的监控采集粒度',
      'summary' => '查询MongoDB实例的监控采集粒度。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyParameters' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[DescribeRegions](~~61933~~)接口查询。',
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
>当本参数传入的是分片集群实例ID时，还需要传入NodeId参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp19f409d75****',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中的Mongos节点ID或Shard节点ID。
>当DBInstanceId参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp1b7bb3bbe****',
          ),
        ),
        3 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的参数及参数值，格式为JSON串，例如：{"ParameterName1":"ParameterValue1","ParameterName2":"ParameterValue2"}。
>您可以通过调用[DescribeParameterTemplates](~~67618~~)接口查询默认的参数模板列表。',
            'type' => 'string',
            'required' => true,
            'example' => '{"operationProfiling.mode":"all","operationProfiling.slowOpThresholdMs":"200"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的角色类型，取值说明：

- **db**：shard角色。
- **cs**：config server角色。
- **mongos**：mongos角色。',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36923CC2-DDAB-4B48-A144-DA92C1E19537',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36923CC2-DDAB-4B48-A144-DA92C1E19537\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyParametersResponse>\\n    <RequestId>36923CC2-DDAB-4B48-A144-DA92C1E19537</RequestId>\\n</ModifyParametersResponse>","errorExample":""}]',
      'title' => '修改MongoDB实例的参数',
      'summary' => '修改MongoDB实例的参数。',
      'description' => '- 调用本接口时，云数据库MongoDB实例的状态为运行中。
- 如果修改的参数中包含需要重启才能生效的参数，调用本接口后实例将自动重启。您可以调用[DescribeParameterTemplates](~~67618~~)接口查询哪些参数修改后需要重启实例才能生效。',
    ),
    'DescribeParameterModificationHistory' => 
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Mongos节点ID或Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp1158****',
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
            'example' => '2019-01-01T12:10Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间。必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-01-02T12:10Z',
          ),
        ),
        4 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的角色类型。取值：
- **db**: shard角色
- **cs**：config server角色
- **mongos**：mongos角色
- **logic**：分片集群实例
',
            'type' => 'string',
            'required' => false,
            'example' => 'mongos',
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
                'example' => 'B1BB6E0E-B4EF-4145-81FA-A07719860248',
              ),
              'HistoricalParameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'HistoricalParameter' => 
                  array (
                    'description' => '参数的修改记录列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterName' => 
                        array (
                          'description' => '被修改参数的名称。',
                          'type' => 'string',
                          'example' => 'operationProfiling.slowOpThresholdMs',
                        ),
                        'OldParameterValue' => 
                        array (
                          'description' => '修改前的参数值。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'NewParameterValue' => 
                        array (
                          'description' => '修改后的参数值。',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '参数修改的时间。格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-03-12T07:58:24Z',
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
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B1BB6E0E-B4EF-4145-81FA-A07719860248\\",\\n  \\"HistoricalParameters\\": {\\n    \\"HistoricalParameter\\": [\\n      {\\n        \\"ParameterName\\": \\"operationProfiling.slowOpThresholdMs\\",\\n        \\"OldParameterValue\\": \\"100\\",\\n        \\"NewParameterValue\\": \\"200\\",\\n        \\"ModifyTime\\": \\"2019-03-12T07:58:24Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterModificationHistoryResponse>\\n    <RequestId>B1BB6E0E-B4EF-4145-81FA-A07719860248</RequestId>\\n    <HistoricalParameters>\\n        <ParameterName>operationProfiling.slowOpThresholdMs</ParameterName>\\n        <OldParameterValue>100</OldParameterValue>\\n        <NewParameterValue>200</NewParameterValue>\\n        <ModifyTime>2019-03-12T07:58:24Z</ModifyTime>\\n    </HistoricalParameters>\\n</DescribeParameterModificationHistoryResponse>","errorExample":""}]',
      'title' => '查询实例参数的修改记录',
      'summary' => '查询MongoDB实例参数的修改记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '8283',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbOM9UA4',
          1 => 'FEATUREmongodbAPXG80',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61933~~)查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎，取值：**mongodb**。',
            'type' => 'string',
            'required' => true,
            'example' => 'mongodb',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号。取值如下：
- **7.0**
- **6.0**
- **5.0**
- **4.4**
- **4.2**
- **4.0**
- **3.4**',
            'type' => 'string',
            'required' => true,
            'example' => '5.0',
          ),
        ),
        3 => 
        array (
          'name' => 'Role',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的角色类型，取值说明：

- db：分片集群shard角色。
- cs：分片集群config server角色。
- mongos：分片集群mongos角色。
- normal: 副本集角色。
- physical：单节点角色。

默认值为normal。',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
            'default' => 'normal',
            'enum' => 
            array (
              0 => 'normal',
              1 => 'db',
              2 => 'cs',
              3 => 'physical',
              4 => 'mongos',
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
              'ParameterCount' => 
              array (
                'description' => '参数个数。',
                'type' => 'string',
                'example' => '10',
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本号。',
                'type' => 'string',
                'example' => '5.0',
              ),
              'Parameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateRecord' => 
                  array (
                    'description' => '参数模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '可修改参数的值。',
                          'type' => 'string',
                          'example' => '[0-65536]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名称。

详情请参见[MongoDB官方文档](https://www.mongodb.com/docs/manual/tutorial/manage-the-database-profiler/)',
                          'type' => 'string',
                          'example' => 'net.compression.compressors',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数默认值。',
                          'type' => 'string',
                          'example' => '100',
                        ),
                        'ForceModify' => 
                        array (
                          'description' => '参数是否处于可修改的状态。
- **false**：不可修改。
- **true**：可修改。 ',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '修改参数后是否需要重启生效。
- **false**：无需重启，提交后即生效。
- **true**：需要重启生效。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => 'The threshold in milliseconds at which the database profiler considers a query slow, default is 100.',
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
                'example' => 'BDA54203-9D61-54A3-A568-D281F785****',
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎。',
                'type' => 'string',
                'example' => 'mongodb',
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
            'errorCode' => 'InvalidEngineVersion.Malformed',
            'errorMessage' => 'Specified engine version is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEngine.Malformed',
            'errorMessage' => 'Specified engine is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ParameterCount\\": \\"10\\",\\n  \\"EngineVersion\\": \\"5.0\\",\\n  \\"Parameters\\": {\\n    \\"TemplateRecord\\": [\\n      {\\n        \\"CheckingCode\\": \\"[0-65536]\\",\\n        \\"ParameterName\\": \\"net.compression.compressors\\",\\n        \\"ParameterValue\\": \\"100\\",\\n        \\"ForceModify\\": true,\\n        \\"ForceRestart\\": false,\\n        \\"ParameterDescription\\": \\"The threshold in milliseconds at which the database profiler considers a query slow, default is 100.\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"BDA54203-9D61-54A3-A568-D281F785****\\",\\n  \\"Engine\\": \\"mongodb\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterTemplatesResponse>\\n    <ParameterCount>10</ParameterCount>\\n    <EngineVersion>5.0</EngineVersion>\\n    <Parameters>\\n        <CheckingCode>[0-65536]</CheckingCode>\\n        <ParameterName>net.compression.compressors</ParameterName>\\n        <ParameterValue>100</ParameterValue>\\n        <ForceModify>true</ForceModify>\\n        <ForceRestart>false</ForceRestart>\\n        <ParameterDescription>The threshold in milliseconds at which the database profiler considers a query slow, default is 100.</ParameterDescription>\\n    </Parameters>\\n    <RequestId>BDA54203-9D61-54A3-A568-D281F785****</RequestId>\\n    <Engine>mongodb</Engine>\\n</DescribeParameterTemplatesResponse>","errorExample":""}]',
      'title' => '查询实例默认的参数模板列表',
      'summary' => '查询MongoDB实例默认的参数模板列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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

> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bpxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中的Mongos节点ID或Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bpxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的角色类型，取值说明：

- db：shard角色。
- cs：config server角色。
- mongos：mongos角色。',
            'type' => 'string',
            'required' => false,
            'example' => 'mongos',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtraParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'terrform',
          ),
        ),
      ),
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
                    'description' => '当前运行的参数配置信息列表。',
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
                          'example' => '[33554432-268435456]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => 'setParameter.internalQueryExecMaxBlockingSortBytes',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => '33554432',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '修改参数后是否需要重启生效。
- **false**：无需重启，提交后即生效。
- **true**：需要重启生效。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => 'The maximum memory bytes that sort stage may use, default is 33554432(i.e. 32MB)',
                        ),
                        'ModifiableStatus' => 
                        array (
                          'description' => '参数是否处于可修改的状态。
- **false**：不可修改。
- **true**：可修改。 ',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'CharacterType' => 
                        array (
                          'description' => '实例的角色类型，取值说明：

- **db**：shard角色。
- **cs**：config server角色。
- **mongos**：mongos角色。',
                          'type' => 'string',
                          'example' => 'db',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本号。',
                'type' => 'string',
                'example' => '4.0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3ADD0C7D-2D2A-4F15-88FF-E7AC9B9FDCC8',
              ),
              'ConfigParameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Parameter' => 
                  array (
                    'description' => '配置中的参数配置信息列表。',
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
                          'example' => '[0-65536]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => 'operationProfiling.slowOpThresholdMs',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '修改参数后是否需要重启生效。
- **false**：无需重启，提交后即生效。
- **true**：需要重启生效。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => 'The threshold in milliseconds at which the database profiler considers a query slow, default is 100.',
                        ),
                        'ModifiableStatus' => 
                        array (
                          'description' => '参数是否处于可修改的状态。
- **false**：不可修改。
- **true**：可修改。 ',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Engine' => 
              array (
                'description' => '数据库引擎，默认返回**mongodb**。',
                'type' => 'string',
                'example' => 'mongodb',
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
            'errorCode' => 'IncorrectDBInstanceType',
            'errorMessage' => 'Current DB instance type does not support this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBInstanceClass.NotFound',
            'errorMessage' => 'The specified DB instance type is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RunningParameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"CheckingCode\\": \\"[33554432-268435456]\\",\\n        \\"ParameterName\\": \\"setParameter.internalQueryExecMaxBlockingSortBytes\\",\\n        \\"ParameterValue\\": \\"33554432\\",\\n        \\"ForceRestart\\": \\"false\\",\\n        \\"ParameterDescription\\": \\"The maximum memory bytes that sort stage may use, default is 33554432(i.e. 32MB)\\",\\n        \\"ModifiableStatus\\": \\"true\\",\\n        \\"CharacterType\\": \\"db\\"\\n      }\\n    ]\\n  },\\n  \\"EngineVersion\\": \\"4.0\\",\\n  \\"RequestId\\": \\"3ADD0C7D-2D2A-4F15-88FF-E7AC9B9FDCC8\\",\\n  \\"ConfigParameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"CheckingCode\\": \\"[0-65536]\\",\\n        \\"ParameterName\\": \\"operationProfiling.slowOpThresholdMs\\",\\n        \\"ParameterValue\\": \\"200\\",\\n        \\"ForceRestart\\": true,\\n        \\"ParameterDescription\\": \\"The threshold in milliseconds at which the database profiler considers a query slow, default is 100.\\",\\n        \\"ModifiableStatus\\": true\\n      }\\n    ]\\n  },\\n  \\"Engine\\": \\"mongodb\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeParametersResponse>\\r\\n\\t<ConfigParameters>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The threshold in milliseconds at which the database profiler considers a query slow, default is 100.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>200</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-65536]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>operationProfiling.slowOpThresholdMs</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t</ConfigParameters>\\r\\n\\t<RequestId>3ADD0C7D-2D2A-4F15-88FF-E7AC9B9FDCC8</RequestId>\\r\\n\\t<RunningParameters>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription></ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>zlib</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>snappy|zlib|disabled</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>true</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>net.compression.compressors</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The level of database profiling, which inserts information about operation performance into the system.profile collection. \'off\' for no profiling, \'slowOp\' for only includes slow operations, \'all\' for includes all operations, default is \'slowOp\'.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>slowOp</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>off|slowOp|all</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>operationProfiling.mode</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The threshold in milliseconds at which the database profiler considers a query slow, default is 100.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>220</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-65536]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>operationProfiling.slowOpThresholdMs</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The expiration threshold in milliseconds for idle cursors before MongoDB removes them; i.e. MongoDB removes cursors that have been idle for the specified cursorTimeoutMillis. default is 600000(i.e. 10 minutes)</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>600000</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[1-2147483647]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>setParameter.cursorTimeoutMillis</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The maximum memory bytes that sort stage may use, default is 33554432(i.e. 32MB)</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>33554432</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[33554432-268435456]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>setParameter.internalQueryExecMaxBlockingSortBytes</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t</RunningParameters>\\r\\n\\t<EngineVersion>4.0</EngineVersion>\\r\\n\\t<Engine>mongodb</Engine>\\r\\n</DescribeParametersResponse>","errorExample":""}]',
      'title' => '查询实例的参数配置信息',
      'summary' => '查询MongoDB实例的参数配置信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'd-bp2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的备份方式，取值：
- **Snapshot**：快照备份。
- **Logical**：逻辑备份。
- **Physical**（默认值）：物理备份。

> - 云盘版实例仅支持快照备份。
> - 仅副本集和分片集群实例支持选择备份方式。单节点实例无需传入本参数，固定为快照备份。',
            'type' => 'string',
            'required' => false,
            'example' => 'Logical',
            'default' => 'Physical',
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
              'BackupId' => 
              array (
                'description' => '备份ID。

> 该参数即将下线，如需获取备份ID，请调用[DescribeBackups](~~468441~~)接口获取。',
                'type' => 'string',
                'example' => '5664****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7016B12F-7F64-40A4-BAFF-013F02AC82FC',
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
            'errorCode' => 'InvalidBackupMethod.ValueNotSupport',
            'errorMessage' => 'The specified parameter BackupMethod is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.BackupJobExists',
            'errorMessage' => 'The operation is not permitted due to backup job exist.',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.NoDatabase',
            'errorMessage' => 'The operation is not permitted due to no database.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BackupId\\": \\"5664****\\",\\n  \\"RequestId\\": \\"7016B12F-7F64-40A4-BAFF-013F02AC82FC\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupResponse>\\n    <BackupId>5664****</BackupId>\\n    <RequestId>7016B12F-7F64-40A4-BAFF-013F02AC82FC</RequestId>\\n</CreateBackupResponse>","errorExample":""}]',
      'title' => '手动备份实例',
      'summary' => '创建MongoDB实例备份。',
      'description' => '调用CreateBackup接口时，实例状态必须为运行中。',
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
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '8322',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp16cb162771****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行备份的时间，格式为<i>HH:mm</i>Z-<i>HH:mm</i>Z（UTC时间）。

> 时间范围限制为1小时。',
            'type' => 'string',
            'required' => false,
            'example' => '03:00Z-04:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期，取值说明：
- **Monday**：周一。
- **Tuesday**：周二。
- **Wednesday**：周三。
- **Thursday**：周四。
- **Friday**：周五。
- **Saturday**：周六。
- **Sunday**：周日。

> 如需传入多个值，请用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'Monday,Wednesday,Friday,Sunday',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份保留天数。

> - 2021年09月10日前用户默认保留天数为7天。
> - 2021年09月10日后新用户默认保留天数为30天。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否打开日志备份，取值说明：
- **0**：关闭（默认值）。
- **1**：打开。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'LogBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志备份保留天数，默认为7天。

取值范围：7~730。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '7',
          ),
        ),
        6 => 
        array (
          'name' => 'SnapshotBackupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快照备份类型，取值说明：

- **Flash**：秒级备份。
- **Standard**：常规备份（默认值）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Standard',
          ),
        ),
        7 => 
        array (
          'name' => 'BackupInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '高频备份频率，取值说明：

- **-1**：不开启高频备份。
- **30**：每30分钟。
- **60**：每1小时。
- **120**：每2小时。
- **180**：每3小时。
- **240**：每4小时。
- **360**：每6小时。
- **480**：每8小时。
- **720**：每12小时。

>- 当**SnapshotBackupType**取值为**Standard**时，该参数取值固定为**-1**。
>- 当**SnapshotBackupType**取值为**Flash**，且该参数取值大于0时，高频备份才生效。',
            'type' => 'string',
            'required' => false,
            'example' => '-1',
            'default' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'HighFrequencyBackupRetention',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '高频备份保留天数，使用该参数前需要先确认已经传入BackupInterval字段。默认保留时长一天。',
            'description' => '高频备份保留天数，使用该参数前需要先确认已经传入BackupInterval字段。默认保留时长一天。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'BackupRetentionPolicyOnClusterDeletion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'CrossBackupType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'update',
              1 => 'delete',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'SrcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'DestRegion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'CrossRetentionType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'delay',
              1 => 'never',
            ),
          ),
        ),
        14 => 
        array (
          'name' => 'CrossRetentionValue',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'CrossBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'EnableCrossLogBackup',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        17 => 
        array (
          'name' => 'CrossLogRetentionType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'never',
              1 => 'delay',
            ),
          ),
        ),
        18 => 
        array (
          'name' => 'CrossLogRetentionValue',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'sharding',
              1 => 'replicate',
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
                'example' => '644A359C-B871-4DD3-97B5-ED91EF5809C2',
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
            'errorCode' => 'InvalidPreferredBackupPeriod.Malformed',
            'errorMessage' => 'Specified parameter PreferredBackupPeriod is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPreferredBackupTime.Malformed',
            'errorMessage' => 'Specified parameter PreferredBackupTime is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"644A359C-B871-4DD3-97B5-ED91EF5809C2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>657D2872-ED98-5778-A676-10132E30****</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":""}]',
      'title' => '修改实例的备份策略',
      'summary' => '修改MongoDB实例的备份策略。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '8266',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp16cb162771****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'replicate',
              1 => 'sharding',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'SrcRegion',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'PreferredBackupPeriod' => 
              array (
                'description' => '备份周期，取值说明：
- **Monday**：星期一。
- **Tuesday**：星期二。
- **Wednesday**：星期三。
- **Thursday**：星期四。
- **Friday**：星期五。
- **Saturday**：星期六。
- **Sunday**：星期日。',
                'type' => 'string',
                'example' => 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A9464CA-F7DC-5434-90B1-DF7F197C****',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '备份时间，格式为<i>HH:mm</i>Z-<i>HH:mm</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '09:00Z-10:00Z',
              ),
              'BackupRetentionPeriod' => 
              array (
                'description' => '备份保留天数。',
                'type' => 'string',
                'example' => '30',
              ),
              'EnableBackupLog' => 
              array (
                'description' => '是否打开日志备份，取值说明：
- **0**：关闭（默认值）。
- **1**：打开。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'LogBackupRetentionPeriod' => 
              array (
                'description' => '日志备份保留天数，取值范围：7~730。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'SnapshotBackupType' => 
              array (
                'description' => '快照备份类型，取值说明：

- **Flash**：秒级备份。
- **Standard**：常规备份（默认值）。',
                'type' => 'string',
                'example' => 'Standard',
              ),
              'BackupInterval' => 
              array (
                'description' => '高频备份频率，取值说明：

- **-1**：不开启高频备份。
- **15**：每15分钟。
- **30**：每30分钟。
- **60**：每1小时。
- **120**：每2小时。
- **180**：每3小时。
- **240**：每4小时。
- **360**：每6小时。
- **480**：每8小时。
- **720**：每12小时。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '-1',
              ),
              'HighFrequencyBackupRetention' => 
              array (
                'description' => '高频备份保留天数，单位为天。',
                'type' => 'string',
                'example' => '1',
              ),
              'BackupRetentionPolicyOnClusterDeletion' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'SrcRegion' => 
              array (
                'type' => 'string',
              ),
              'DestRegion' => 
              array (
                'type' => 'string',
              ),
              'CrossRetentionType' => 
              array (
                'type' => 'string',
              ),
              'CrossRetentionValue' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'CrossBackupPeriod' => 
              array (
                'type' => 'string',
              ),
              'EnableCrossLogBackup' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'CrossLogRetentionType' => 
              array (
                'type' => 'string',
              ),
              'CrossLogRetentionValue' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\\",\\n  \\"RequestId\\": \\"5A9464CA-F7DC-5434-90B1-DF7F197C****\\",\\n  \\"PreferredBackupTime\\": \\"09:00Z-10:00Z\\",\\n  \\"BackupRetentionPeriod\\": \\"30\\",\\n  \\"EnableBackupLog\\": 1,\\n  \\"LogBackupRetentionPeriod\\": 7,\\n  \\"SnapshotBackupType\\": \\"Standard\\",\\n  \\"BackupInterval\\": -1,\\n  \\"HighFrequencyBackupRetention\\": \\"1\\",\\n  \\"BackupRetentionPolicyOnClusterDeletion\\": 0,\\n  \\"SrcRegion\\": \\"\\",\\n  \\"DestRegion\\": \\"\\",\\n  \\"CrossRetentionType\\": \\"\\",\\n  \\"CrossRetentionValue\\": 0,\\n  \\"CrossBackupPeriod\\": \\"\\",\\n  \\"EnableCrossLogBackup\\": 0,\\n  \\"CrossLogRetentionType\\": \\"\\",\\n  \\"CrossLogRetentionValue\\": 0\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <PreferredBackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</PreferredBackupPeriod>\\n    <RequestId>5A9464CA-F7DC-5434-90B1-DF7F197C****</RequestId>\\n    <PreferredBackupTime>09:00Z-10:00Z</PreferredBackupTime>\\n    <BackupRetentionPeriod>30</BackupRetentionPeriod>\\n    <EnableBackupLog>1</EnableBackupLog>\\n    <LogBackupRetentionPeriod>7</LogBackupRetentionPeriod>\\n    <SnapshotBackupType>Standard</SnapshotBackupType>\\n    <BackupInterval>-1</BackupInterval>\\n</DescribeBackupPolicyResponse>","errorExample":""}]',
      'title' => '查看集群自动备份策略',
      'summary' => '查询MongoDB实例的备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackups' => 
    array (
      'summary' => '查询MongoDB实例的备份列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '8267',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
> 当本参数传入的是分片集群实例ID时，还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1a7009eb24****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点的ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-bp128a003436****',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。

当**DBInstanceId**参数传入的是分片集群实例ID时，备份ID个数与Shard节点个数相同，中间用英文逗号（,）间隔。',
            'type' => 'string',
            'required' => false,
            'example' => '2072****,2072****,2072****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
            'description' => '每页记录数，取值：

- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-13T13:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-01-14T13:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'SrcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'DestRegion',
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
            'description' => '实例备份信息。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '备份总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '275D43C3-F12F-5224-B375-0C6BF453BD56',
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
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Backups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Backup' => 
                  array (
                    'description' => '备份文件详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '备份文件详情列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupStatus' => 
                        array (
                          'description' => '备份状态，取值说明：
- **Success**：备份成功。
- **Failed**：备份失败。',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型，取值说明：
- **FullBackup**：全量备份。
- **IncrementalBackup**：增量备份。',
                          'type' => 'string',
                          'example' => 'FullBackup',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '本次备份开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2022-01-14T03:56:17Z',
                        ),
                        'BackupIntranetDownloadURL' => 
                        array (
                          'description' => '备份文件的内网下载地址。

> 您可以通过该地址在ECS服务器（与云数据库MongoDB实例在同一网络）上下载目标备份文件。',
                          'type' => 'string',
                          'example' => 'http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/custins5559*****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARfi****&Signature=lkFPjOY%2F8adB18vnOCbtmT7ii****&Region=cn-hangzhou',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份文件大小，单位：Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6168576',
                        ),
                        'BackupDownloadURL' => 
                        array (
                          'description' => '备份文件的外网下载地址，若当前不可下载，则返回为空字符串。',
                          'type' => 'string',
                          'example' => 'http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/custins5559****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARf****&Signature=lkFPjOY%2F8adB18vnOCbtmT7****&Region=cn-hangzhou',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份模式，取值说明：
- **Automated**：系统自动备份。
- **Manual**：手动备份。',
                          'type' => 'string',
                          'example' => 'Automated',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '本次备份结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2022-01-14T03:57:34Z',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份ID。',
                          'type' => 'string',
                          'example' => '32102****',
                        ),
                        'BackupDBNames' => 
                        array (
                          'description' => '备份的数据库名。',
                          'type' => 'string',
                          'example' => 'database',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '备份方式，取值说明：
- **Snapshot**：快照备份。
- **Physical**：物理备份。
- **Logical**：逻辑备份。',
                          'type' => 'string',
                          'example' => 'Physical',
                        ),
                        'BackupJobId' => 
                        array (
                          'description' => '备份集任务ID。',
                          'type' => 'string',
                          'example' => '1123xxxx',
                        ),
                        'BackupName' => 
                        array (
                          'type' => 'string',
                        ),
                        'BackupScale' => 
                        array (
                          'type' => 'string',
                        ),
                        'IsAvail' => 
                        array (
                          'type' => 'boolean',
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
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStartTimeAndEndTime.Malformed',
            'errorMessage' => 'The Specified parameter StartTime or EndTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified  parameter PageSize is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"275D43C3-F12F-5224-B375-0C6BF453BD56\\",\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"Backups\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"BackupStatus\\": \\"Success\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2022-01-14T03:56:17Z\\",\\n        \\"BackupIntranetDownloadURL\\": \\"http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/custins5559*****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARfi****&Signature=lkFPjOY%2F8adB18vnOCbtmT7ii****&Region=cn-hangzhou\\",\\n        \\"BackupSize\\": 6168576,\\n        \\"BackupDownloadURL\\": \\"http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/custins5559****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&OSSAccessKeyId=LTAI4G2wxd32KLGARf****&Signature=lkFPjOY%2F8adB18vnOCbtmT7****&Region=cn-hangzhou\\",\\n        \\"BackupMode\\": \\"Automated\\",\\n        \\"BackupEndTime\\": \\"2022-01-14T03:57:34Z\\",\\n        \\"BackupId\\": \\"32102****\\",\\n        \\"BackupDBNames\\": \\"database\\",\\n        \\"BackupMethod\\": \\"Physical\\",\\n        \\"BackupJobId\\": \\"1123xxxx\\",\\n        \\"BackupName\\": \\"\\",\\n        \\"BackupScale\\": \\"\\",\\n        \\"IsAvail\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>275D43C3-F12F-5224-B375-0C6BF453BD56</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Backups>\\n        <BackupStatus>Success</BackupStatus>\\n        <BackupType>FullBackup</BackupType>\\n        <BackupStartTime>2022-01-14T03:56:17Z</BackupStartTime>\\n        <BackupIntranetDownloadURL>http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/custins5559*****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&amp;OSSAccessKeyId=LTAI4G2wxd32KLGARfi****&amp;Signature=lkFPjOY%2F8adB18vnOCbtmT7ii****&amp;Region=cn-hangzhou</BackupIntranetDownloadURL>\\n        <BackupSize>6168576</BackupSize>\\n        <BackupDownloadURL>http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/custins5559****/hins1936****_data_2022052504****_qp.xb?Expires=165361****&amp;OSSAccessKeyId=LTAI4G2wxd32KLGARf****&amp;Signature=lkFPjOY%2F8adB18vnOCbtmT7****&amp;Region=cn-hangzhou</BackupDownloadURL>\\n        <BackupMode>Automated</BackupMode>\\n        <BackupEndTime>2022-01-14T03:57:34Z</BackupEndTime>\\n        <BackupDBNames>database</BackupDBNames>\\n        <BackupMethod>Physical</BackupMethod>\\n    </Backups>\\n</DescribeBackupsResponse>","errorExample":""}]',
      'title' => '查询实例的备份列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupDBs' => 
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于0且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的记录数。取值： **30**（默认值）、**50**、**100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'SourceDBInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待恢复数据的源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2286****',
          ),
        ),
        3 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所需恢复的时间点，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。

> - 本参数可取值为7天内的任意时间，但是须早于当前时间，且晚于实例的创建时间。
> - 本参数和**BackupId**参数两者中必须传入一项。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-08-22T12:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。

> - 您可以通过调用[DescribeBackups](~~62172~~)接口查询备份ID。
> - 本参数和**RestoreTime**参数两者中必须传入一项。',
            'type' => 'string',
            'required' => false,
            'example' => '5664****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-ax68****',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceDBInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待恢复数据的源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2286****',
          ),
        ),
      ),
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
                'description' => '查询结果中数据库的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Databases' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Database' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBName' => 
                        array (
                          'description' => '数据库名。',
                          'type' => 'string',
                          'example' => 'mongodbtest',
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
                'example' => '1AF0AD89-ED4F-44AD-B65F-BFC1D5CD9455',
              ),
              'PageSize' => 
              array (
                'description' => '每页可展示的记录数。',
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
            'errorCode' => 'InvalidMeta.WrongFormat',
            'errorMessage' => 'Meta information is wrong formatter.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Format',
            'errorMessage' => 'Specified restore time is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidMeta.TooLarge',
            'errorMessage' => 'Meta information is too large.',
          ),
          2 => 
          array (
            'errorCode' => 'SingleDBRestore.BackupSetNotSupport',
            'errorMessage' => 'This backup set do not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectDBInstanceType',
            'errorMessage' => 'Current DB instance type does not support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidBackupLogStatus',
            'errorMessage' => 'Current backup log enable status does not support this operation.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectBackupSetState',
            'errorMessage' => 'Current backup set state does not support operations..',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidBackupSetID.NotFound',
            'errorMessage' => 'Specifiedbackup set ID does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackup.NotFound',
            'errorMessage' => 'Theavailable backup does not exist in recovery time.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 5,\\n  \\"Databases\\": {\\n    \\"Database\\": [\\n      {\\n        \\"DBName\\": \\"mongodbtest\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"1AF0AD89-ED4F-44AD-B65F-BFC1D5CD9455\\",\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeBackupDBsResponse>\\r\\n\\t<Databases>\\r\\n\\t\\t<Database>\\r\\n\\t\\t\\t<DBName>admin</DBName>\\r\\n\\t\\t</Database>\\r\\n\\t\\t<Database>\\r\\n\\t\\t\\t<DBName>config</DBName>\\r\\n\\t\\t</Database>\\r\\n\\t\\t<Database>\\r\\n\\t\\t\\t<DBName>mongodbtest</DBName>\\r\\n\\t\\t</Database>\\r\\n\\t\\t<Database>\\r\\n\\t\\t\\t<DBName>db1</DBName>\\r\\n\\t\\t</Database>\\r\\n\\t\\t<Database>\\r\\n\\t\\t\\t<DBName>db2</DBName>\\r\\n\\t\\t</Database>\\r\\n\\t</Databases>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TotalCount>5</TotalCount>\\r\\n\\t<PageSize>30</PageSize>\\r\\n\\t<RequestId>1AF0AD89-ED4F-44AD-B65F-BFC1D5CD9455</RequestId>\\r\\n</DescribeBackupDBsResponse>","errorExample":""}]',
      'title' => '查询指定的时间点或备份集内包含的数据库',
      'summary' => '在为MongoDB实例执行单库恢复前，您可以调用本接口查询指定的时间点或备份集内包含的数据库。',
      'description' => '您可以调用[CreateDBInstance](~~61763~~)接口进行单库恢复。更多信息，请参见[MongoDB单库恢复](~~112274~~)。

调用本接口时，实例必须满足以下条件：
- 实例的创建时间晚于2019年3月26日。
- 实例属于华北 1、华北 2、华北 3、华北 5、华东 1、华东 2、华南 1或亚太东南 1（新加坡）地域。
- 实例类型为副本集实例。
- 实例版本须为3.4、4.0、4.2 本地盘版本。
- 实例存储引擎必须为WiredTiger。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckRecoveryCondition' => 
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
        'abilityTreeCode' => '8238',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceDBInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待恢复的源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1378****',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所需恢复的数据库名，格式为JSON数组。
> 如果不传入本参数，默认恢复所有数据库。',
            'type' => 'string',
            'required' => false,
            'example' => '["db1","db2"]',
          ),
        ),
        2 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所需恢复的时间点，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。

> - 本参数可取值为7天内的任意时间，但是须早于当前时间，且晚于实例的创建时间。
> - 本参数和**BackupId**参数两者中必须传入一项。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-08-22T08:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。

> - 您可以通过调用[DescribeBackups](~~62172~~)接口查询备份ID。
> - 本参数和**RestoreTime**参数两者中必须传入一项。
> - 分片集群实例不支持传入本参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5664****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
',
            'type' => 'string',
            'required' => false,
            'example' => 'sg-bp179****',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceDBInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待恢复的源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp1378****',
          ),
        ),
        6 => 
        array (
          'name' => 'SrcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源实例所在区域。

>- 当备份恢复类型为已删除实例重建时，需要且必填
>- 当备份恢复类型为异地备份克隆时，需要且必填',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        7 => 
        array (
          'name' => 'DestRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异地备份恢复时，备份集所在区域。

> 当备份恢复类型为异地备份克隆时，需要且必填',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份恢复类型



>- 0:  本地备份恢复
>- 1:   本地时间点恢复
>- 2:  已删除实例使用备份集备份恢复
>- 3:  异地备份使用备份集备份恢复',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
- replicate 
- sharding

>- 当备份恢复类型为已删除实例重建时，需要且必填
>- 当备份恢复类型为异地备份克隆时，需要且必填',
            'type' => 'string',
            'required' => false,
            'example' => 'replicate',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D563A3E7-6010-45FE-A0CD-9283414C9657',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'dds-bp1378****',
              ),
              'IsValid' => 
              array (
                'description' => '是否满足恢复条件，取值说明：
- **true**：满足条件。
- **false**：不满足条件。',
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
            'errorCode' => 'InvalidMeta.WrongFormat',
            'errorMessage' => 'Meta information is wrong formatter.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Format',
            'errorMessage' => 'Specified restore time is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDBName',
            'errorMessage' => 'The specified database name is not allowed.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidMeta.TooLarge',
            'errorMessage' => 'Meta information is too large.',
          ),
          2 => 
          array (
            'errorCode' => 'SingleDBRestore.BackupSetNotSupport',
            'errorMessage' => 'This backup set do not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectDBInstanceType',
            'errorMessage' => 'Current DB instance type does not support this operation.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidBackupLogStatus',
            'errorMessage' => 'Current backup log enable status does not support this operation.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectBackupSetState',
            'errorMessage' => 'Current backup set state does not support operations..',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidBackupSetID.NotFound',
            'errorMessage' => 'Specifiedbackup set ID does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBackup.NotFound',
            'errorMessage' => 'Theavailable backup does not exist in recovery time.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D563A3E7-6010-45FE-A0CD-9283414C9657\\",\\n  \\"DBInstanceName\\": \\"dds-bp1378****\\",\\n  \\"IsValid\\": true\\n}","type":"json"}]',
      'title' => '检查实例是否满足数据恢复条件',
      'summary' => '检查MongoDB实例是否满足数据恢复的条件。',
      'description' => '本接口适用于副本集实例或分片集群实例。

> 调用本接口确认满足数据恢复的条件后，您可以调用[CreateDBInstance](~~61763~~)接口，将数据恢复至新实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestoreDBInstance' => 
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp2356****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。

> 您可以通过调用[DescribeBackups](~~62172~~)接口查询备份ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '22536****',
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
                'example' => '973DCB8F-56B3-4102-8777-3A90495927F7',
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
            'errorCode' => 'InvalidBackupID.NotFound',
            'errorMessage' => 'Specified backup set ID does not exist. ',
          ),
          1 => 
          array (
            'errorCode' => 'OperationDenied.InsufficientResourceCapacity',
            'errorMessage' => 'The operation is not permitted due to InsufficientResourceCapacity of instance.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationDenied.DBInstance',
            'errorMessage' => 'The operation is not permitted due to type of instance. ',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"973DCB8F-56B3-4102-8777-3A90495927F7\\"\\n}","errorExample":""},{"type":"xml","example":"<RestoreDBInstanceResponse>\\n    <RequestId>973DCB8F-56B3-4102-8777-3A90495927F7</RequestId>\\n</RestoreDBInstanceResponse>","errorExample":""}]',
      'title' => '恢复数据至当前实例',
      'summary' => '恢复数据至当前MongoDB实例。',
      'description' => '该接口已暂停维护，即将下线。

该接口仅适用于副本集实例，暂不支持单节点实例和分片集群实例。单节点实例可通过[从备份点新建实例](~~55013~~)克隆当前实例，分片集群实例可通过调用[CreateShardingDBInstance](~~61884~~)接口克隆当前实例。

> 调用该接口将覆盖当前实例的原有数据且无法恢复，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferClusterBackup' => 
    array (
      'summary' => '将云数据库 MongoDB 版分片集群实例的备份模式切换为集群备份模式。切换至集群备份模式后，实例将支持高频备份。',
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
            'example' => 'dds-bp2235****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AlreadyDone' => 
              array (
                'description' => '是否已切换成集群备份模式。**1**表示已完成切换。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3C4A2494-85C4-45C5-93CF-548DB3375193',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AlreadyDone\\": \\"1\\",\\n  \\"RequestId\\": \\"3C4A2494-85C4-45C5-93CF-548DB3375193\\"\\n}","type":"json"}]',
      'title' => '切换至集群备份模式',
      'description' => '- 云数据库 MongoDB 版实例需要为分片集群实例，且大版本为4.4及以上版本，存储模式为ESSD云盘版。
- 仅2023年10月19日之前创建的实例需要执行本操作切换至集群备份模式，2023年10月19日及以后新建的MongoDB云盘版分片集群实例默认为集群备份模式。',
    ),
    'DescribeClusterBackups' => 
    array (
      'summary' => '查询云数据库 MongoDB 版云盘版分片集群的集群备份集列表。',
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
        'abilityTreeCode' => '190126',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp16cb162771****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群备份ID。',
            'type' => 'string',
            'required' => false,
            'example' => '5664****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页号。默认值为**1**，取值范围为正整数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
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
            'description' => '每页记录数，取值：

- **30**（默认值）
- **50**
- **100**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '20',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
              3 => '10',
              4 => '20',
              5 => '5',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-03-13T12:11Z',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-03-14T13:10Z',
          ),
        ),
        6 => 
        array (
          'name' => 'IsOnlyGetClusterBackUp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '是否查询集群备份下的子节点信息。取值说明：
- **true**：只返回集群备份基本信息，不返回全量的子节点的备份信息。
- **false**（默认 ）：返回全量的子节点的备份信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'flase',
          ),
        ),
        7 => 
        array (
          'name' => 'SrcRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域。

> - 查询已释放实例的备份集列表式，该参数必填。
> - 查询异地备份时，该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'DestRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异地备份所在地域。

> 查询异地备份时，该参数必填。',
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
                'example' => '2F42BB4E-461F-5B55-A37C-53B1141C****',
              ),
              'MaxResults' => 
              array (
                'title' => 'MaxResults本次请求所返回的最大记录条数',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'title' => '第几页，同请求参数',
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '一页最大多少条记录，同请求参数',
                'description' => '每页最大记录数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'ClusterBackups' => 
              array (
                'title' => '集群备份集列表，一个集群备份里面包含各个节点的备份集',
                'description' => '集群备份集列表，一个集群备份里面包含各个节点的备份集。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群备份集列表，一个集群备份里面包含各个节点的备份集。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IsAvail' => 
                    array (
                      'title' => '集群备份集是否有效，子节点的备份集未完成或者失败时，为0',
                      'description' => '集群备份集是否有效，取值说明：
- **1**：集群的备份集有效。
- **0**：子节点的备份集未完成或者失败。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ClusterBackupId' => 
                    array (
                      'title' => '集群备份集ID',
                      'description' => '集群备份集ID。',
                      'type' => 'string',
                      'example' => 'cb-o8c2ugnxo26kx***',
                    ),
                    'ClusterBackupStatus' => 
                    array (
                      'title' => '集群备份集状态',
                      'description' => '集群备份集状态。',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'ClusterBackupStartTime' => 
                    array (
                      'description' => '集群备份开始时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:33:20Z',
                    ),
                    'ClusterBackupSize' => 
                    array (
                      'title' => '集群备份集大小',
                      'description' => '集群备份集大小，单位为Byte。',
                      'type' => 'string',
                      'example' => '107374182400',
                    ),
                    'ClusterBackupEndTime' => 
                    array (
                      'description' => '集群备份结束时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:33:20Z',
                    ),
                    'ClusterBackupMode' => 
                    array (
                      'description' => '集群备份模式。',
                      'type' => 'string',
                      'example' => 'Automated',
                    ),
                    'ExtraInfo' => 
                    array (
                      'description' => '补充信息，为JSON格式。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegistryFromHistory' => 
                        array (
                          'title' => '为1表示从历史备份集中迁移过来',
                          'description' => '是否来自于历史备份集，为**1**则表示是从历史备份集迁移过来的。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                    'Backups' => 
                    array (
                      'title' => '单个集群备份集下，各个子节点的备份集集合',
                      'description' => '单个集群备份集下，各个子节点的备份集集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '单个集群备份集下，各个子节点的备份集集合。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'BackupId' => 
                          array (
                            'description' => '备份ID。',
                            'type' => 'string',
                            'example' => '738025367',
                          ),
                          'InstanceName' => 
                          array (
                            'description' => 'MongoDB分片名称。',
                            'type' => 'string',
                            'example' => 'd-bp16cb162771****
',
                          ),
                          'BackupDownloadURL' => 
                          array (
                            'description' => '备份文件的外网下载地址，若当前不可下载，则返回为空字符串。',
                            'type' => 'string',
                            'example' => 'http://oss.com/xxx',
                          ),
                          'BackupIntranetDownloadURL' => 
                          array (
                            'description' => '内网下载地址，若当前不可下载，则返回空值。',
                            'type' => 'string',
                            'example' => 'http://oss.com/xxx',
                          ),
                          'BackupStartTime' => 
                          array (
                            'description' => '本次备份开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                            'type' => 'string',
                            'example' => '2023-10-16T19:33:20Z',
                          ),
                          'BackupEndTime' => 
                          array (
                            'description' => '本次备份结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                            'type' => 'string',
                            'example' => '2023-10-16T19:33:20Z',
                          ),
                          'BackupSize' => 
                          array (
                            'description' => '备份文件大小，单位为Byte。',
                            'type' => 'string',
                            'example' => '77544597650',
                          ),
                          'IsAvail' => 
                          array (
                            'description' => '备份集是否可用，取值说明：
* **0**：不可用。
* **1**：可用。',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'BackupStatus' => 
                          array (
                            'description' => '备份状态，取值说明：
- **Success**：备份成功。
- **Failed**：备份失败。',
                            'type' => 'string',
                            'example' => 'Success',
                          ),
                          'BackupName' => 
                          array (
                            'description' => '备份名称。',
                            'type' => 'string',
                            'example' => '12345678.tar.gz',
                          ),
                          'ExtraInfo' => 
                          array (
                            'description' => '备份关联的实例节点信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'NodeId' => 
                              array (
                                'description' => '节点ID。',
                                'type' => 'string',
                                'example' => 'd-2ze75ab1fa5d****',
                              ),
                              'StorageSize' => 
                              array (
                                'description' => '节点的存储空间大小，单位为MB。',
                                'type' => 'string',
                                'example' => '20480',
                              ),
                              'InstanceClass' => 
                              array (
                                'description' => '节点规格。',
                                'type' => 'string',
                                'example' => 'mdb.shard.4x.large.d',
                              ),
                              'NodeType' => 
                              array (
                                'description' => '节点类型。',
                                'type' => 'string',
                                'example' => 'db',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Progress' => 
                    array (
                      'title' => '备份进度，仅正在运行的备份才会显示进度',
                      'description' => '备份进度，单位为%。
仅正在运行的备份才会显示进度。',
                      'type' => 'string',
                      'example' => '50',
                    ),
                    'AttachLogStatus' => 
                    array (
                      'description' => '备份的状态，取值如下：
- **Init**：初始化。
- **No_Need**：无附加日志备份。
- **Running**：附加日志备份中。
- **Ready**：附加日志备份完成。
- **Failed**：附加日志备份失败。

> 当**ClusterBackupStatus**参数（集群备份集的状态）的值为OK时，仅表示全量备份阶段执行成功了，对于开启了日志备份的集群实例，想要使用按时间点恢复或满足一致性恢复的效果时，需要附加日志备份完成。',
                      'type' => 'string',
                      'example' => 'Ready',
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
            'errorMessage' => 'The Specified parameter StartTime is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter EndTime is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidStartTimeAndEndTime.Malformed',
            'errorMessage' => 'The Specified parameter StartTime or EndTime is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified  parameter PageSize is not valid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2F42BB4E-461F-5B55-A37C-53B1141C****\\",\\n  \\"MaxResults\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"ClusterBackups\\": [\\n    {\\n      \\"IsAvail\\": 1,\\n      \\"ClusterBackupId\\": \\"cb-o8c2ugnxo26kx***\\",\\n      \\"ClusterBackupStatus\\": \\"OK\\",\\n      \\"ClusterBackupStartTime\\": \\"2023-10-16T19:33:20Z\\",\\n      \\"ClusterBackupSize\\": \\"107374182400\\",\\n      \\"ClusterBackupEndTime\\": \\"2023-10-16T19:33:20Z\\",\\n      \\"ClusterBackupMode\\": \\"Automated\\",\\n      \\"ExtraInfo\\": {\\n        \\"RegistryFromHistory\\": \\"1\\"\\n      },\\n      \\"Backups\\": [\\n        {\\n          \\"BackupId\\": \\"738025367\\",\\n          \\"InstanceName\\": \\"d-bp16cb162771****\\\\n\\",\\n          \\"BackupDownloadURL\\": \\"http://oss.com/xxx\\",\\n          \\"BackupIntranetDownloadURL\\": \\"http://oss.com/xxx\\",\\n          \\"BackupStartTime\\": \\"2023-10-16T19:33:20Z\\",\\n          \\"BackupEndTime\\": \\"2023-10-16T19:33:20Z\\",\\n          \\"BackupSize\\": \\"77544597650\\",\\n          \\"IsAvail\\": \\"1\\",\\n          \\"BackupStatus\\": \\"Success\\",\\n          \\"BackupName\\": \\"12345678.tar.gz\\",\\n          \\"ExtraInfo\\": {\\n            \\"NodeId\\": \\"d-2ze75ab1fa5d****\\",\\n            \\"StorageSize\\": \\"20480\\",\\n            \\"InstanceClass\\": \\"mdb.shard.4x.large.d\\",\\n            \\"NodeType\\": \\"db\\"\\n          }\\n        }\\n      ],\\n      \\"Progress\\": \\"50\\",\\n      \\"AttachLogStatus\\": \\"Ready\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群备份集列表',
      'description' => '2023年10月19日前新建的云盘版分片集群实例，在调用前本接口前，需要调用 
[TransferClusterBackup](~~2587931~~) 接口，完成分片备份到集群备份的转换。

2023年10月19日之后新建的云盘版分片集群实例，默认使用集群备份。',
    ),
    'DescribeClusterRecoverTime' => 
    array (
      'summary' => '查询云数据库 MongoDB 版云盘版分片集群实例的可恢复时间。',
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
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-bp18f7d6b6a7****',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '60EEBD77-227C-5B39-86EA-D89163C5****',
              ),
              'RestoreRanges' => 
              array (
                'title' => '',
                'description' => '集群备份集列表。集群备份里面包含每个节点的备份集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RestoreBeginTime' => 
                    array (
                      'title' => '',
                      'description' => '可恢复开始时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:33:20Z',
                    ),
                    'RestoreEndTime' => 
                    array (
                      'title' => '',
                      'description' => '可恢复结束时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:43:20Z',
                    ),
                    'RestoreType' => 
                    array (
                      'description' => '恢复方式，取值说明：
* **PointInTime**（默认）：基于时间点恢复。',
                      'type' => 'string',
                      'example' => 'PointInTime',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"60EEBD77-227C-5B39-86EA-D89163C5****\\",\\n  \\"RestoreRanges\\": [\\n    {\\n      \\"RestoreBeginTime\\": \\"2023-10-16T19:33:20Z\\",\\n      \\"RestoreEndTime\\": \\"2023-10-16T19:43:20Z\\",\\n      \\"RestoreType\\": \\"PointInTime\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询分片集群可恢复时间段',
      'description' => '- MongoDB实例需要为分片集群实例，大版本为4.4及以上版本，存储模式为ESSD云盘版。
- 仅2023年10月19日之前创建的实例需要调用TransferClusterBackup接口切换至集群备份模式。已切换集群备份模式或2023年10月19日及以后新建的MongoDB云盘版分片集群实例可以直接调用该接口。',
    ),
    'DescribeBackupStorage' => 
    array (
      'summary' => '查询MongoDB云盘版副本集或分片集群的备份使用量。',
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
        'abilityTreeCode' => '209318',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
            'description' => '实例所属的地域ID，您可以通过调用[DescribeDBInstanceAttribute](~~62010~~)进行查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-bejing',
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
            'example' => 'dds-2zeb2d64cb46xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片集群实例中Shard节点ID。

> 当**DBInstanceId**参数传入的是分片集群实例ID时，本参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-2zee48956b4axxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D648B367-15B6-1B42-BD4B-4XXXXXXXXX',
              ),
              'FullStorageSize' => 
              array (
                'description' => '实例全量备份数据内置存储量，单位为字节（B）。
> 云盘版实例使用快照备份，当前全量的备份的大小为快照链的大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '789221621',
              ),
              'LogStorageSize' => 
              array (
                'description' => '实例日志备份数据内置存储量，单位为字节（B）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '7892216',
              ),
              'FreeSize' => 
              array (
                'description' => '实例免费备份数据额度，单位为字节（B）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42949672960',
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
            'errorCode' => 'InvalidDBInstance.Malformed',
            'errorMessage' => 'Too many instance ids or instance id format is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D648B367-15B6-1B42-BD4B-4XXXXXXXXX\\",\\n  \\"FullStorageSize\\": 789221621,\\n  \\"LogStorageSize\\": 7892216,\\n  \\"FreeSize\\": 42949672960\\n}","type":"json"}]',
      'title' => '查询实例的备份使用量',
      'description' => '分片集群备份用量的计费规则是每个分片单独计费，本接口只支持查询单分片的备份用量。',
    ),
    'DescribeBackupTasks' => 
    array (
      'summary' => '查询MongoDB云盘版副本集或分片集进行中的备份任务。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '209100',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREmongodbPMIDED',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dds-2zeb2d64cb46xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupJobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份任务ID。
> 如果您调用[CreateBackup](~~61075~~)执行了手动备份，您可以将返回的备份ID传入，用以查询备份的进度。',
            'type' => 'string',
            'required' => false,
            'example' => '170034',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D648B367-15B6-1B42-BD4B-47507C9CC****',
              ),
              'BackupJobs' => 
              array (
                'title' => '',
                'description' => '备份任务详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '备份任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BackupjobId' => 
                    array (
                      'description' => '备份任务ID。',
                      'type' => 'string',
                      'example' => '170034
',
                    ),
                    'BackupSetStatus' => 
                    array (
                      'title' => '',
                      'description' => '备份任务状态。
* **Scheduled**：计划中备份任务，包括未开始的常规备份任务。
* **Checking**：备份前实例检查。
* **Backuping**：备份中。
* **Finished**：备份完成。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'Scheduled',
                    ),
                    'BackupStartTime' => 
                    array (
                      'description' => '备份开始时间。',
                      'type' => 'string',
                      'example' => '2024-01-16T11:04:56Z',
                    ),
                    'Progress' => 
                    array (
                      'description' => '备份进度，单位为%。
仅正在运行的备份才会显示进度。',
                      'type' => 'string',
                      'example' => '18%',
                    ),
                    'JobMode' => 
                    array (
                      'description' => '备份模式，返回值：
* **Automated**：系统自动备份。
* **Manual**：手动备份。',
                      'type' => 'string',
                      'example' => 'Manual',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D648B367-15B6-1B42-BD4B-47507C9CC****\\",\\n  \\"BackupJobs\\": [\\n    {\\n      \\"BackupjobId\\": \\"170034\\\\n\\",\\n      \\"BackupSetStatus\\": \\"Scheduled\\",\\n      \\"BackupStartTime\\": \\"2024-01-16T11:04:56Z\\",\\n      \\"Progress\\": \\"18%\\",\\n      \\"JobMode\\": \\"Manual\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => ' 查询实例进行中的备份任务',
    ),
    'DescribeInstanceRecoverTime' => 
    array (
      'summary' => '查询云数据库 MongoDB 版云盘版副本集实例的可恢复时间。',
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
            'example' => 'dds-bpxxxxxxxx',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F8CA8312-530A-413A-9129-F2BB32A8D404',
              ),
              'RestoreRanges' => 
              array (
                'title' => '',
                'description' => '可恢复时间段列表。包含所有可用于按时间点恢复的时间段',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可恢复时间段列表。包含所有可用于按时间点恢复的时间段',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RestoreBeginTime' => 
                    array (
                      'title' => '',
                      'description' => '可恢复开始时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:33:20Z',
                    ),
                    'RestoreEndTime' => 
                    array (
                      'title' => '',
                      'description' => '可恢复结束时间。',
                      'type' => 'string',
                      'example' => '2023-10-16T19:43:20Z',
                    ),
                    'RestoreType' => 
                    array (
                      'description' => '恢复方式，取值说明：
* PointInTime（默认）：基于时间点恢复。',
                      'type' => 'string',
                      'example' => 'PointInTime',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F8CA8312-530A-413A-9129-F2BB32A8D404\\",\\n  \\"RestoreRanges\\": [\\n    {\\n      \\"RestoreBeginTime\\": \\"2023-10-16T19:33:20Z\\",\\n      \\"RestoreEndTime\\": \\"2023-10-16T19:43:20Z\\",\\n      \\"RestoreType\\": \\"PointInTime\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询副本集实例的可恢复时间',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'mongodb.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'mongodb.cn-zhengzhou-jva.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'mongodb.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'mongodb.cn-nanjing.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'mongodb.cn-fuzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'mongodb.cn-chengdu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'mongodb.ap-northeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'mongodb.ap-northeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'mongodb.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'mongodb.ap-southeast-2.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'mongodb.ap-southeast-3.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'mongodb.ap-southeast-5.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'mongodb.ap-southeast-6.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'mongodb.us-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'mongodb.us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'mongodb.eu-west-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'mongodb.eu-central-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'mongodb.ap-south-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'mongodb.me-east-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'mongodb.ap-southeast-7.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'mongodb.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'mongodb.me-central-1.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'R-kvstore',
    'version' => '2015-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 67090,
      'title' => '生命周期管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstance',
        1 => 'AddShardingNode',
        2 => 'CreateGlobalDistributeCache',
        3 => 'DeleteShardingNode',
        4 => 'DeleteInstance',
        5 => 'ModifyInstanceSpec',
        6 => 'DescribeRegions',
        7 => 'DescribeZones',
        8 => 'DescribeAvailableResource',
        9 => 'TransformToPrePaid',
        10 => 'MigrateToOtherZone',
      ),
    ),
    1 => 
    array (
      'id' => 67103,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTairInstance',
        1 => 'CreateInstances',
        2 => 'EnableAdditionalBandwidth',
        3 => 'ModifyInstanceAttribute',
        4 => 'ModifyResourceGroup',
        5 => 'ModifyInstanceMaintainTime',
        6 => 'ModifyInstanceMajorVersion',
        7 => 'ModifyInstanceMinorVersion',
        8 => 'ModifyDBInstanceAutoUpgrade',
        9 => 'DescribeInstancesOverview',
        10 => 'DescribeInstances',
        11 => 'DescribeDedicatedClusterInstanceList',
        12 => 'DescribeInstanceAttribute',
        13 => 'DescribeGlobalDistributeCache',
        14 => 'DescribeEngineVersion',
        15 => 'DescribeRoleZoneInfo',
        16 => 'DescribeClusterMemberInfo',
        17 => 'DescribeTasks',
        18 => 'DescribeDBInstanceNetInfo',
        19 => 'DescribeDBNodeDirectVipInfo',
        20 => 'DescribeLogicInstanceTopology',
        21 => 'RestartInstance',
        22 => 'FlushExpireKeys',
        23 => 'FlushInstanceForDB',
        24 => 'FlushInstance',
        25 => 'SwitchInstanceHA',
        26 => 'SyncDtsStatus',
        27 => 'RemoveSubInstance',
        28 => 'LockDBInstanceWrite',
        29 => 'UnlockDBInstanceWrite',
      ),
    ),
    2 => 
    array (
      'id' => 67126,
      'title' => '连接管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceNetExpireTime',
        1 => 'ModifyDBInstanceConnectionString',
        2 => 'ModifyIntranetAttribute',
        3 => 'DescribeIntranetAttribute',
        4 => 'SwitchNetwork',
        5 => 'AllocateInstancePublicConnection',
        6 => 'ReleaseInstancePublicConnection',
        7 => 'AllocateDirectConnection',
        8 => 'ReleaseDirectConnection',
        9 => 'SwitchInstanceProxy',
      ),
    ),
    3 => 
    array (
      'id' => 67137,
      'title' => '续费管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceAutoRenewalAttribute',
        1 => 'DescribePrice',
        2 => 'DescribeInstanceAutoRenewalAttribute',
        3 => 'RenewAdditionalBandwidth',
        4 => 'TransformInstanceChargeType',
        5 => 'RenewInstance',
      ),
    ),
    4 => 
    array (
      'id' => 67144,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'DeleteAccount',
        2 => 'ModifyAccountDescription',
        3 => 'ModifyAccountPassword',
        4 => 'DescribeAccounts',
        5 => 'ResetAccountPassword',
        6 => 'GrantAccountPrivilege',
      ),
    ),
    5 => 
    array (
      'id' => 67152,
      'title' => '备份恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackup',
        1 => 'ModifyBackupPolicy',
        2 => 'DescribeBackupTasks',
        3 => 'DescribeBackupPolicy',
        4 => 'DescribeBackups',
        5 => 'RestoreInstance',
        6 => 'DescribeClusterBackupList',
      ),
    ),
    6 => 
    array (
      'id' => 67159,
      'title' => '监控管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeMonitorItems',
        1 => 'DescribeHistoryMonitorValues',
      ),
    ),
    7 => 
    array (
      'id' => 67162,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyAuditLogConfig',
        1 => 'DescribeAuditLogConfig',
        2 => 'DescribeAuditRecords',
        3 => 'DescribeRunningLogRecords',
        4 => 'DescribeSlowLogRecords',
        5 => 'InitializeKvstorePermission',
      ),
    ),
    8 => 
    array (
      'id' => 67168,
      'title' => '网络安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifySecurityIps',
        1 => 'ModifySecurityGroupConfiguration',
        2 => 'ModifyInstanceSSL',
        3 => 'ModifyInstanceVpcAuthMode',
        4 => 'DescribeSecurityIps',
        5 => 'DescribeSecurityGroupConfiguration',
        6 => 'DescribeInstanceSSL',
      ),
    ),
    9 => 
    array (
      'id' => 67176,
      'title' => '参数管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceConfig',
        1 => 'DescribeParameterTemplates',
        2 => 'DescribeInstanceConfig',
        3 => 'DescribeParameters',
        4 => 'DescribeParameterModificationHistory',
      ),
    ),
    10 => 
    array (
      'id' => 67181,
      'title' => '标签管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
      ),
    ),
    11 => 
    array (
      'id' => 67185,
      'title' => '性能优化',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCacheAnalysisTask',
        1 => 'DescribeCacheAnalysisReport',
        2 => 'DescribeCacheAnalysisReportList',
      ),
    ),
    12 => 
    array (
      'id' => 177761,
      'title' => '数据加密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceTDE',
        1 => 'DescribeInstanceTDEStatus',
        2 => 'DescribeEncryptionKeyList',
        3 => 'DescribeEncryptionKey',
        4 => 'CheckCloudResourceAuthorized',
      ),
    ),
    13 => 
    array (
      'id' => 67189,
      'title' => '运维任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeHistoryTasks',
        1 => 'ModifyActiveOperationTask',
        2 => 'DescribeActiveOperationTask',
      ),
    ),
    14 => 
    array (
      'id' => 187216,
      'title' => '白名单模板管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGlobalSecurityIPGroup',
        1 => 'ModifyGlobalSecurityIPGroupName',
        2 => 'DescribeGlobalSecurityIPGroupRelation',
        3 => 'DeleteGlobalSecurityIPGroup',
        4 => 'ModifyGlobalSecurityIPGroup',
        5 => 'ModifyGlobalSecurityIPGroupRelation',
        6 => 'DescribeGlobalSecurityIPGroup',
      ),
    ),
    15 => 
    array (
      'id' => 192365,
      'title' => '参数模板管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyInstanceParameter',
        1 => 'DeleteParameterGroup',
        2 => 'DescribeParameterGroupSupportParam',
        3 => 'DescribeParameterGroup',
        4 => 'ModifyParameterGroup',
        5 => 'DescribeParameterGroups',
        6 => 'CreateParameterGroup',
        7 => 'DescribeParameterGroupTemplateList',
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
    'CreateInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '56354',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreSIWMD9',
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
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要创建实例的地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。 名称为2~80个字符，以大小写字母或中文开头，不支持字符`@/:=”<>{[]}`和空格。',
            'type' => 'string',
            'required' => false,
            'example' => 'apitest',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例密码。 长度为8－32位，需包含大写字母、小写字母、特殊字符和数字中的至少三种，允许的特殊字符包括`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Pass!123456',
          ),
        ),
        4 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储容量，单位为MB。

> 调用此接口需至少传递**Capacity**或**InstanceClass**中的一个参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '16384',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的规格，例如redis.master.small.default为社区版（经典版）标准架构双副本1GB实例，详细信息请参见[规格查询导航](~~26350~~)。 

> 调用此接口需至少传递**Capacity**或**InstanceClass**中的一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要创建实例的可用区。
> 您也可以再传入SecondaryZoneId参数指定备可用区，主备节点将分别部署在指定的主可用区和备可用区，实现同城双中心主备架构。例如指定ZoneId参数为"cn-hangzhou-h"，指定SecondaryZoneId参数为"cn-hangzhou-g"。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        7 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
* **PrePaid**：预付费。
* **PostPaid**（默认）：按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
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
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型，取值：
* **MASTER_SLAVE**：高可用（双副本）
* **STAND_ALONE**：单副本
* **double**：双副本
* **single**：单副本
> 云原生版实例请选择**MASTER_SLAVE**或**STAND_ALONE**，经典版实例请选择**double**或**single**。',
            'type' => 'string',
            'required' => false,
            'example' => 'STAND_ALONE',
            'default' => 'double',
            'enum' => 
            array (
              0 => 'STAND_ALONE',
              1 => 'MASTER_SLAVE',
              2 => 'double',
              3 => 'single',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型，取值：
* **VPC**：专有网络，默认值。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
            'default' => 'VPC',
            'enum' => 
            array (
              0 => 'VPC',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VPC网络的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-bp1nme44gek34slfc****',
          ),
        ),
        11 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
        12 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费周期，单位为月，取值：**1**~**9**、**12**、**24**、**36**、**60**  。

> **ChargeType**取值为**PrePaid**时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '12',
            'pattern' => '^\\d+$',
          ),
        ),
        13 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '活动ID、业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000',
          ),
        ),
        14 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码，默认值为：`default`。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'default',
          ),
        ),
        15 => 
        array (
          'name' => 'SrcDBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如需基于某个实例的备份集创建新实例，请先在此参数中指定源实例ID。
> 然后通过**BackupId**、**ClusterBackupId**（云原生集群架构建议使用ClusterBackupId）或**RestoreTime**参数指定需要使用的备份集或指定时间点，本参数需要与上述3个中的任意一个参数组合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        16 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若您的实例是云原生架构实例，并且是集群实例，则建议您使用[DescribeClusterBackupList](~~2679158~~)查询出集群备份集id，例如"cb-xx"，然后填入ClusterBackupId请求参数来达到克隆集群实例的目的，免去您输入各个分片备份集id的烦恼。

您可在此参数中指定源实例的备份集ID，系统将使用该备份集中保存的数据创建新实例。通过调用[DescribeBackups](~~61081~~)可查询BackupId。如果源实例是集群实例，则此处需要填写源实例各个分片的备份集id，并且通过逗号隔开，例如"10**,11**,15**"',
            'type' => 'string',
            'required' => false,
            'example' => '111111111',
          ),
        ),
        17 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
* **Redis**（默认）
* **Memcache**',
            'type' => 'string',
            'required' => false,
            'example' => 'Redis',
            'default' => 'Redis',
            'enum' => 
            array (
              0 => 'Redis',
              1 => 'Memcache',
            ),
          ),
        ),
        18 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis**经典版本**，版本号取值：
* **2.8**（不推荐，[计划停止全面支持](~~2674657~~)）
* **4.0**（不推荐）
* **5.0**

Redis**云原生版本**，版本号取值：
* **5.0**
* **6.0**（推荐）
* **7.0**

> 默认值为**5.0**。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '4.0' => '4.0',
              '5.0' => '5.0',
              '6.0' => '6.0',
              '7.0' => '7.0',
              '2.8' => '2.8',
            ),
            'example' => '5.0',
            'default' => '5.0',
            'enum' => 
            array (
              0 => '2.8',
              1 => '4.0',
              2 => '5.0',
              3 => '6.0',
              4 => '7.0',
            ),
          ),
        ),
        19 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新实例的内网IP地址。

> 内网IP需在实例所属的交换机网段内。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.0.***',
          ),
        ),
        20 => 
        array (
          'name' => 'AutoUseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券，取值：
* **true**：使用代金券。
* **false**（默认）：不使用代金券。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启。
* **false**（默认）：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
            ),
          ),
        ),
        22 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，单位为月，取值：**1**、**2**、**3**、**6**、**12**。

> 当**AutoRenew**取值为**true**时，本参数必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
            'default' => '1',
          ),
        ),
        23 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-resourcegroupid1',
          ),
        ),
        24 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若源实例已开启数据闪回，您可在此参数中指定源实例备份保留周期内的任意时间点，系统将使用源实例在该时间点的备份数据创建新实例。格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-06-19T16:00:00Z',
          ),
        ),
        25 => 
        array (
          'name' => 'DedicatedHostGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专属集群ID，在专属集群内创建Redis实例时需传入本参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'dhg-uv4fnk6r7zff****',
          ),
        ),
        26 => 
        array (
          'name' => 'ShardCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片数，本参数仅适用于创建云盘版集群架构实例，您可以通过该参数实现自定义分片数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '128',
            'minimum' => '1',
            'example' => '4',
            'default' => '1',
          ),
        ),
        27 => 
        array (
          'name' => 'ReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区的只读节点数，本参数仅适用于创建云盘版读写分离架构实例，您可以通过该参数实现自定义只读节点数量，取值：1~9。
> 但该参数与SlaveReadOnlyCount的总和不能大于9。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '5',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        28 => 
        array (
          'name' => 'GlobalInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分布式实例ID，本参数仅适用于中国站。

<props="china"> 如需将新创建的Redis实例追加为分布式实例中的新子实例，本参数才可用且必须传入。相关说明与控制台操作，请参见[为分布式实例添加子实例](~~106885~~)。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'gr-bp14rkqrhac****',
          ),
        ),
        29 => 
        array (
          'name' => 'GlobalInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将本次新建的实例作为分布式实例中的第一个子实例，通过该方式可创建分布实例，取值：

* **true**：作为第一个子实例。
* **false**（默认）：不作为第一个子实例。

> * 如需传入**true**，本次新建的实例需为Tair内存型，引擎版本为5.0。
> * 本参数仅适用于中国站。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        30 => 
        array (
          'name' => 'SecondaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区ID，可调用[DescribeZones](~~94527~~)接口查询。
> 本参数和ZoneId参数传入的值不能相同，且不可传入多可用区对应的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        31 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的服务端口，取值范围：**1024**~**65535**，默认值为**6379**。',
            'type' => 'string',
            'required' => false,
            'example' => '6379',
            'maxLength' => 5,
            'minLength' => 1,
            'pattern' => '^\\d+$',
          ),
        ),
        32 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对本次创建实例的操作执行预检查，取值：
* **true**：执行预检查操作，不创建实例。检查项目包含请求参数、请求格式、业务限制和库存。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
* **false**（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        33 => 
        array (
          'name' => 'GlobalSecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的全局IP白名单模板，多个IP白名单模板请用英文逗号（,）分隔，不可重复。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        34 => 
        array (
          'name' => 'Appendonly',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定新创建实例的AOF参数配置，取值：
- **yes**（默认）：开启AOF持久化。
- **no**：关闭AOF持久化。
> 该参数适用于经典版实例，云原生版实例暂不支持指定AOF参数。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'no' => '关闭AOF',
              'yes' => '开启AOF',
            ),
            'example' => 'yes',
          ),
        ),
        35 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接地址的前缀，需由小写英文字母与数字组成，以小写字母开头，长度为8~40个字符。

> 
> 连接地址格式为：<前缀>.redis.rds.aliyuncs.com。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        36 => 
        array (
          'name' => 'ParamGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID，全局唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'rpg-test**',
          ),
        ),
        37 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。

> * **N**表示传入第几个标签的键，单个实例最多可绑定20个标签。例如Tag.1.Key表示传入第一个标签的键；Tag.2.Key表示传入第二个标签的键。
> * 如果标签的键不存在，则自动创建。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
> **N**表示传入第几个标签的值。例如**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        38 => 
        array (
          'name' => 'ClusterBackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部分新集群架构支持集群备份集ID，您可以通过[DescribeClusterBackupList](~~2679158~~)接口获取。
* 若支持，可输入指定的集群备份集ID即可，无需再填写**BackupId**参数。
* 若不支持，请在BackupId参数中填写为原实例各个分片下的备份集ID，通过逗号隔开，例如"2158\\*\\*\\*\\*20,2158\\*\\*\\*\\*22"等。',
            'type' => 'string',
            'required' => false,
            'example' => 'cb-hyxdof5x9kqb****',
          ),
        ),
        39 => 
        array (
          'name' => 'SlaveReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于多可用区读写分离实例创建时，指定备可用区的只读节点数量。该参数与ReadOnlyCount的总和不能大于9。
><notice>创建多可用区读写分离实例时需要同时指定SlaveReadOnlyCount和SecondaryZoneId参数。></notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '0',
          ),
        ),
        40 => 
        array (
          'name' => 'RecoverConfigMode',
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
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'VpcId' => 
              array (
                'description' => '专有网络（VPC）的ID。',
                'type' => 'string',
                'example' => 'vpc-bp1nme44gek34slfc****',
              ),
              'QPS' => 
              array (
                'description' => '每秒访问次数，此处为当前规格实例的理论值。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000',
              ),
              'Capacity' => 
              array (
                'description' => '实例的存储容量，单位：MB。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '16384',
              ),
              'ConnectionDomain' => 
              array (
                'description' => 'Redis实例的内网连接地址。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
              ),
              'ChargeType' => 
              array (
                'description' => '付费类型，返回值：
* **PrePaid**：预付费。
* **PostPaid**：按量付费。',
                'type' => 'string',
                'example' => 'PostPaid',
              ),
              'NetworkType' => 
              array (
                'description' => '网络类型，返回值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID（全局唯一）。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'Port' => 
              array (
                'description' => 'Redis服务端口。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6379',
              ),
              'Config' => 
              array (
                'description' => '实例的详细配置。',
                'type' => 'string',
                'example' => '{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}',
              ),
              'RegionId' => 
              array (
                'description' => '实例所在地域。',
                'type' => 'string',
                'example' => 'cn-hongkong',
              ),
              'EndTime' => 
              array (
                'description' => '预付费实例到期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '2019-01-18T16:00:00Z',
              ),
              'VSwitchId' => 
              array (
                'description' => '虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-bp1e7clcw529l773d****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5DEA3CC9-F81D-4387-8E97-CEA40F09****',
              ),
              'NodeType' => 
              array (
                'description' => '节点类型，返回值：
* **STAND_ALONE**：单副本。
* **MASTER_SLAVE**：双副本。',
                'type' => 'string',
                'example' => 'MASTER_SLAVE',
              ),
              'Connections' => 
              array (
                'description' => '实例连接数限制。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
              'Bandwidth' => 
              array (
                'description' => '实例带宽限制，单位：MB/s。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '32',
              ),
              'InstanceName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'apitest',
              ),
              'ZoneId' => 
              array (
                'description' => '实例所属的可用区的ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-b',
              ),
              'InstanceStatus' => 
              array (
                'description' => '实例的当前状态，返回值固定为Creating（创建中）。',
                'type' => 'string',
                'example' => 'Creating',
              ),
              'PrivateIpAddr' => 
              array (
                'description' => '实例的内网IP地址。',
                'type' => 'string',
                'example' => '172.16.0.10',
              ),
              'UserName' => 
              array (
                'description' => '连接Redis的账号，默认包含一个以实例ID命名的账号。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'OrderId' => 
              array (
                'description' => '订单id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '2084452111111',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ZoneIdNotFound',
            'errorMessage' => 'Specify iz not support switch network.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidShardInfo.Format',
            'errorMessage' => 'Shard total number is out of range.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidInstancelevel',
            'errorMessage' => 'Specified Instance level dose not match gdc other member instance level.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidBackupLogStatus',
            'errorMessage' => 'Backup logs are not enabled for the specified source instance.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidStatus',
            'errorMessage' => 'Specified instance status is Modifying.',
          ),
          5 => 
          array (
            'errorCode' => 'SecurityRisk.AuthVerification',
            'errorMessage' => 'we have detected a risk with your default payment method. An email and notification has been sent to you. Please re-submit your order before after verificaiton.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidToken.Malformed',
            'errorMessage' => 'The Specified parameter Token is not valid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidInstanceName.Malformed',
            'errorMessage' => 'The Specified parameter InstanceName is not valid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidPassword.Malformed',
            'errorMessage' => 'The Specified parameter Password is not valid.',
          ),
          10 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaExceed.AfterpayInstance',
            'errorMessage' => 'Living afterpay instances quota exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
          13 => 
          array (
            'errorCode' => 'ResourceNotAvailable',
            'errorMessage' => 'Resource you requested is not available for finance user.',
          ),
          14 => 
          array (
            'errorCode' => 'PaymentMethodNotFound',
            'errorMessage' => 'No payment method has been registered on the account.',
          ),
          15 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'Request uses a client token in a previous request but is not identical to that request.',
          ),
          16 => 
          array (
            'errorCode' => 'QuotaNotEnough',
            'errorMessage' => 'Quota not enough in this zone.',
          ),
          17 => 
          array (
            'errorCode' => 'QuotaExceed',
            'errorMessage' => 'Living afterpay instances quota exceed.',
          ),
          18 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke vpc service failed.',
          ),
          19 => 
          array (
            'errorCode' => 'IzNotSupportVpcError',
            'errorMessage' => 'Specify iz not support vpc.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidvSwitchId',
            'errorMessage' => 'The vpc does not cover the vswitch.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'The Specified vpc zone not supported.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Format',
            'errorMessage' => 'Specified account password is not valid.',
          ),
          23 => 
          array (
            'errorCode' => 'InstanceClass.NotMatch',
            'errorMessage' => 'Current instance class and instance type is not match.',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidVPCId.NotFound',
            'errorMessage' => 'Specified virtual vpc is not found.',
          ),
          25 => 
          array (
            'errorCode' => 'AccountMoneyValidateError',
            'errorMessage' => 'Account money validate error.',
          ),
          26 => 
          array (
            'errorCode' => 'RequestTokenConflict',
            'errorMessage' => 'Specified request token conflict.',
          ),
          27 => 
          array (
            'errorCode' => 'InvalidIPNotInSubnet',
            'errorMessage' => 'Error ip not in subnet.',
          ),
          28 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Malformed',
            'errorMessage' => 'Specified engine version is not valid.',
          ),
          29 => 
          array (
            'errorCode' => 'Zone.Closed',
            'errorMessage' => 'The specified zone is closed.',
          ),
          30 => 
          array (
            'errorCode' => 'VSwithNotBelongToNotVpcFault',
            'errorMessage' => 'The vSwitch does not belong to current vpc.',
          ),
          31 => 
          array (
            'errorCode' => 'PayIllegalAgreement',
            'errorMessage' => 'Pay mayi with holding agreement illegal.',
          ),
          32 => 
          array (
            'errorCode' => 'IllegalParamError',
            'errorMessage' => 'validateSaleConditionWithSubArticle failed.',
          ),
          33 => 
          array (
            'errorCode' => 'CASH_BOOK_INSUFFICIENT',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or maitain a minimum prepayment balance of INR 1000.',
          ),
          34 => 
          array (
            'errorCode' => 'InvalidRegion.Format',
            'errorMessage' => 'Specified Region is not valid.',
          ),
          35 => 
          array (
            'errorCode' => 'DryRunOperation',
            'errorMessage' => 'Request validation has been passed with DryRun flag set.',
          ),
          36 => 
          array (
            'errorCode' => 'ResourceGroupNotExist',
            'errorMessage' => 'The Specified ResourceGroupId does not exist.',
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
            'errorCode' => 'AuthorizationFailure',
            'errorMessage' => 'The request processing has failed due to authorization failure.',
          ),
          2 => 
          array (
            'errorCode' => 'TokenServiceError',
            'errorMessage' => 'The specified token is duplicated, please change it.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidvSwitchId',
            'errorMessage' => 'The Specified vSwitchId zone not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidVpcIdOrVswitchId.NotSupported',
            'errorMessage' => 'The Specified vpcId or vSwitchId not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VpcId\\": \\"vpc-bp1nme44gek34slfc****\\",\\n  \\"QPS\\": 100000,\\n  \\"Capacity\\": 16384,\\n  \\"ConnectionDomain\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n  \\"ChargeType\\": \\"PostPaid\\",\\n  \\"NetworkType\\": \\"VPC\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"Port\\": 6379,\\n  \\"Config\\": \\"{\\\\\\\\\\\\\\"EvictionPolicy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lru\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hash-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"zset-max-ziplist-entries\\\\\\\\\\\\\\":128,\\\\\\\\\\\\\\"zset-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"set-max-intset-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"hash-max-ziplist-value\\\\\\\\\\\\\\":64}\\",\\n  \\"RegionId\\": \\"cn-hongkong\\",\\n  \\"EndTime\\": \\"2019-01-18T16:00:00Z\\",\\n  \\"VSwitchId\\": \\"vsw-bp1e7clcw529l773d****\\",\\n  \\"RequestId\\": \\"5DEA3CC9-F81D-4387-8E97-CEA40F09****\\",\\n  \\"NodeType\\": \\"MASTER_SLAVE\\",\\n  \\"Connections\\": 10000,\\n  \\"Bandwidth\\": 32,\\n  \\"InstanceName\\": \\"apitest\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n  \\"InstanceStatus\\": \\"Creating\\",\\n  \\"PrivateIpAddr\\": \\"172.16.0.10\\",\\n  \\"UserName\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"OrderId\\": 2084452111111\\n}","type":"json"}]',
      'title' => '创建一个Redis实例',
      'summary' => '创建一个Redis实例。',
      'description' => '请确保在使用该接口前，已充分了解云数据库Redis产品的收费方式和[价格](~~54532~~)。

本接口可创建Redis实例、Tair内存型经典版实例，如需创建Tair云原生版实例，请调用[CreateTairInstance](~~208271~~)接口。

> 该API对应的控制台操作方法和选型建议，请参见[创建Redis实例](~~26351~~)。',
      'requestParamsDescription' => '创建Redis 7.0集群架构的请求示例如下。
<pre>{
  "RegionId": "cn-shenzhen",
  "InstanceName": "apitest",
  "Password": "D****23",
  "ZoneId": "cn-shenzhen-f",
  "ChargeType": "PrePaid",
  "InstanceClass": "redis.shard.with.proxy.small.ce",
  "NetworkType": "VPC",
  "Period": "1",
  "InstanceType": "Redis",
  "EngineVersion": "7.0",
  "ShardCount": 4,
  "SourceIp": "10.10.10.10"
}</pre>',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddShardingNode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ShardCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要添加分片数量，默认值为**1**。
> 实例总分片数最少为2个，单次操作的分片数上限为64，实例总分片数上限为256，请确保分片数不超过此限制。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '4096',
            'minimum' => '1',
            'example' => '2',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付款，取值：
* **true**：自动付款，请确保账号有足够的余额。
* **false**：手动付款，您需要通过控制台手动续费，详情请参见[手动续费](~~26352~~)。

> 默认值为**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
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
            'example' => '000000000',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceBiz',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用来源，本参数仅用于内部维护使用，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'SDK',
          ),
        ),
        6 => 
        array (
          'name' => 'ForceTrans',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启强制传输，取值：
- **false**（默认）：在变配前，系统会检查实例当前的内核小版本，若内核版本过低则会报错，您需要升级内核小版本后重试。
- **true**：跳过检查项，直接执行变配操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持指定同VPC下的不同交换机ID，新的数据分片将创建在指定的交换机下。
若不填，则默认创建在原来的交换机中。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B79C1A90-495B-4E99-A2AA-A4DB13B8****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20741011111111',
              ),
              'NodeIds' => 
              array (
                'description' => '数据分片节点ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据分片节点ID。',
                  'type' => 'string',
                  'example' => 'r-8vb0i6z4npbxrf****-db-4',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B79C1A90-495B-4E99-A2AA-A4DB13B8****\\",\\n  \\"OrderId\\": 20741011111111,\\n  \\"NodeIds\\": [\\n    \\"r-8vb0i6z4npbxrf****-db-4\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AddShardingNodeResponse>\\n    <RequestId>B79C1A90-495B-4E99-A2AA-A4DB13B8****</RequestId>\\n    <NodeIds>r-8vb0i6z4npbxrf****-db-4</NodeIds>\\n    <NodeIds>r-8vb0i6z4npbxrf****-db-5</NodeIds>\\n    <OrderId>207794311111111</OrderId>\\n</AddShardingNodeResponse>","errorExample":""}]',
      'title' => '为Redis集群实例添加数据分片节点',
      'summary' => '为Redis集群实例添加数据分片节点。',
      'description' => '本接口仅支持集群架构云盘版实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateGlobalDistributeCache' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '56353',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreSIWMD9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SeedSubInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待转换的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
> 系统参数无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        2 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行时间，取值：
* **Immediately**：立即执行，默认值。
* **MaintainTime**：在可维护时间段执行。

> 您可以调用[ModifyInstanceMaintainTime](~~61000~~)接口修改Redis实例的可维护时间段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'MaintainTime',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
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
                'example' => 'E681E498-5A0D-44F2-B1A7-912DC3******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E681E498-5A0D-44F2-B1A7-912DC3******\\"\\n}","type":"json"}]',
      'title' => '将存量实例转换为分布式实例中第一个子实例',
      'summary' => '将一个存量的Redis实例转换为分布式实例中第一个子实例。',
      'description' => '分布式实例不支持直接创建，您需要调用本接口指定一个已有的Redis实例转换为分布式实例中第一个子实例，转换完成后，子实例所属的分布式实例即被创建成功。
待转换的实例需满足下述要求：
* 待转换的实例为企业版（[内存型](~~126164~~)）。
* 待转换的实例为集群架构时，需关闭直连模式，详情请参见[释放直连地址](~~150047~~)。

> 您也可以调用[CreateInstance](~~60873~~)新购一个Redis实例，该实例将作为分布式实例中的第一个子实例，子实例创建完成后，子实例所属的分布式实例即被创建成功。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteShardingNode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的数据分片节点ID，如需一次传入多个分片节点ID，请使用英文逗号（,）分隔。
> 若同时传递NodeId与ShardCount参数时，优先以NodeId参数执行。',
            'type' => 'string',
            'deprecated' => true,
            'required' => false,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****-db-0,r-bp1zxszhcgatnx****-db-1',
          ),
        ),
        2 => 
        array (
          'name' => 'ShardCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的分片数量，将从尾部开始计数，删除相应数量的分片节点。
> 例如实例原有5个分片节点，分别为db-0、db-1、db-2、db-3和db-4，输入本参数为2，则将删除db-3和db-4。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '4096',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ForceTrans',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启强制传输，取值：
- **false**（默认）：在变配前，系统会检查实例当前的内核小版本，若内核版本过低则会报错，您需要升级内核小版本后重试。
- **true**：跳过检查项，直接执行变配操作。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
              'OrderId' => 
              array (
                'description' => '订单号。您可以在费用中心的商品订单中，根据此订单号获取该订单的详细信息。',
                'type' => 'string',
                'example' => '22179******0904',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\",\\n  \\"OrderId\\": \\"22179******0904\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteShardingNodeResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</DeleteShardingNodeResponse>","errorExample":""}]',
      'title' => '删除Redis集群实例中的数据分片节点',
      'summary' => '删除Redis集群实例中的数据分片节点。',
      'description' => '该API对应的控制台操作请参见[调整云盘实例的分片数量](~~198082~~)。<br>
调用本接口时，实例必须满足以下条件：

<props="china">
- 实例为云盘版实例。
- 实例为集群架构。
- 实例的数据分片节点数量大于1。

</props>

<props="intl">
- 实例为集群架构的[持久内存型](~~183956~~)实例。
- 实例的数据分片节点数量大于1。

</props>

<props="partner">
- 实例为集群架构的[持久内存型](~~183956~~)实例。
- 实例的数据分片节点数量大于1。

</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待释放的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'GlobalInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待释放的实例所属的分布式实例ID，本参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => 'gr-bp14rkqrhac****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D190D2',
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
            'errorCode' => 'InstanceReleaseProtection',
            'errorMessage' => 'The operation is not permitted due to instance release protection.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D190D2\\"\\n}","type":"json"}]',
      'title' => '释放Redis实例',
      'summary' => '释放Redis实例。',
      'description' => '该API对应的控制台操作请参见[释放实例](~~43882~~)。

调用本接口时，实例必须满足以下条件：
* 实例状态为运行中。
* 实例的付费方式为后付费（按量付费）。

> 预付费（包年包月）实例无法调用此接口主动删除，到期后将自动释放。 如需提前释放，请在控制台进行操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'ModifyInstanceSpec' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要变更实例的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更后的实例规格代码，您可以调用[DescribeAvailableResource](~~120580~~)查询实例所属的可用区可以变配的规格。

> 各规格的详情，请参见[规格查询导航](~~26350~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
          ),
        ),
        3 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '活动ID、业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000001',
          ),
        ),
        4 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码，默认值：`youhuiquan_promotion_option_id_for_blank`。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        5 => 
        array (
          'name' => 'ForceUpgrade',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制变配，取值：
* **false**：不强制变配。
* **true**：强制变配，默认值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更执行时间，取值：
* **Immediately**：立即执行，默认值。
* **MaintainTime**：在实例的可维护时间段执行，您可以调用[ModifyInstanceMaintainTime](~~61000~~)修改可维护时间段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => 'Immediately',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付款，取值：
* **true**：自动付款，默认值。
* **false**：手动付款。取值为**false**时，您需要在实例到期前通过控制台手动续费，详情请参见[手动续费](~~26352~~)。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配类型，包年包月实例变配时需要传入本参数，取值：

* **UPGRADE**：升级配置，默认值。
* **DOWNGRADE**：降级配置。

> * 包年包月实例降级配置时必须将该参数的值设置为**DOWNGRADE**。
> *  如果变配的目标规格比现有规格的价格高，则为升级配置，反之为降级配置。例如，读写分离8G版（5只读节点）的价格比16G集群版的价格高，从后者变配到前者为升级配置。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
              'DOWNGRADE' => 'DOWNGRADE',
              'UPGRADE' => 'UPGRADE',
            ),
            'example' => 'DOWNGRADE',
            'default' => 'UPGRADE',
            'enum' => 
            array (
              0 => 'UPGRADE',
              1 => 'DOWNGRADE',
              2 => 'AUTO',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'MajorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '适用于<props="china">经典版</props><props="intl">本地盘版</props>实例升级的实例大版本，取值：**2.8**、**4.0**或**5.0**。
> 升级版本时**InstanceClass**参数为必填，表示本接口仅支持在更新实例规格时升级版本。若您仅需升级实例版本，请调用[ModifyInstanceMajorVersion](~~472452~~)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '5.0',
            'enum' => 
            array (
              0 => '2.8',
              1 => '4.0',
              2 => '5.0',
              3 => '6.0',
            ),
          ),
        ),
        10 => 
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
        11 => 
        array (
          'name' => 'SourceBiz',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用来源，本参数仅用于内部维护使用，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'SDK',
          ),
        ),
        12 => 
        array (
          'name' => 'ShardCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分片数，本参数仅适用于云盘版集群架构实例，您可以通过该参数实现自定义分片数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '4092',
            'minimum' => '1',
            'example' => '8',
          ),
        ),
        13 => 
        array (
          'name' => 'ReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区的只读节点数，取值：0~5，本参数仅适用于如下情况：
* 若实例为云盘版标准架构，您可以将该参数设置为大于0的值，开启读写分离架构。
* 若实例为云盘版读写分离架构实例，您可以通过该参数实现自定义只读节点数量，也可以将该参数设置为0，关闭读写分离架构，将实例切换为标准架构。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        14 => 
        array (
          'name' => 'ForceTrans',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启强制传输，取值：
- **false**（默认）：在变配前，系统会检查实例当前的内核小版本，若内核版本过低则会报错，您需要升级内核小版本后重试。
- **true**：跳过检查项，直接执行变配操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'SlaveReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于创建多可用区读写分离实例，指定备可用区的只读节点数量，取值为1~9，但该参数与ReadOnlyCount的总和不能大于9。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        16 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型，取值：
* **MASTER_SLAVE**：高可用（双副本）
* **STAND_ALONE**：单副本
* **double**：双副本
* **single**：单副本
> 云原生版实例请选择**MASTER_SLAVE**或**STAND_ALONE**，经典版实例请选择**double**或**single**。',
            'type' => 'string',
            'required' => false,
            'example' => 'MASTER_SLAVE',
            'enum' => 
            array (
              0 => 'MASTER_SLAVE',
              1 => 'STAND_ALONE',
              2 => 'double',
              3 => 'single',
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
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '20722623431****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0DA1D7EF-C80D-432C-8758-7D225182626B',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'PaymentMethodNotFound',
            'errorMessage' => 'No payment method has been registered on the account.',
          ),
          1 => 
          array (
            'errorCode' => 'HasRenewChangeOrder',
            'errorMessage' => 'This instance has a renewChange order.',
          ),
          2 => 
          array (
            'errorCode' => '%s',
            'errorMessage' => 'Warn: {%s} are not supported after upgraded. you can set forceUpgrade=true to force upgrade.',
          ),
          3 => 
          array (
            'errorCode' => 'GdcInstanceNotSupport',
            'errorMessage' => 'The gdc custins trans not support.',
          ),
          4 => 
          array (
            'errorCode' => 'AbnormalResourceStatusForRenew',
            'errorMessage' => 'Abnormal resource status for renew.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRedisShardingUnsupportPerfItem',
            'errorMessage' => 'The metadb is missing redis sharding unsupoort command perf item.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalParamError',
            'errorMessage' => 'Action or resource must not be null.',
          ),
          7 => 
          array (
            'errorCode' => 'IncorrectTargetMajorVersion',
            'errorMessage' => 'Current target majorversion does not support this operation.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectMinorVersion',
            'errorMessage' => 'Current engine minor version does not support operations.',
          ),
          9 => 
          array (
            'errorCode' => 'DirectTargetLevelNotSupport',
            'errorMessage' => 'The direct custins tranfer target instance level does not support.',
          ),
          10 => 
          array (
            'errorCode' => 'DirectTransPreCheckError',
            'errorMessage' => 'The direct custins trans pre check IsAddReduceNodes error.',
          ),
          11 => 
          array (
            'errorCode' => 'DtsOpendNotSupportTrans',
            'errorMessage' => 'The custins DtsSyncStatus opend does not support trans.',
          ),
          12 => 
          array (
            'errorCode' => 'DirectTransNodeDoubleLevelError',
            'errorMessage' => 'The direct custins tranfer node double target level error.',
          ),
          13 => 
          array (
            'errorCode' => 'DirectTransUpgradeMajorVersionNotSupport',
            'errorMessage' => 'The direct custins tranfer does not support upgrade major version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'TargetMemoryLessThanCurrentUsed',
            'errorMessage' => 'The target instance memory size below the current instance used memory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20722623431****\\",\\n  \\"RequestId\\": \\"0DA1D7EF-C80D-432C-8758-7D225182626B\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceSpecResponse>\\n\\t<RequestId>A4828C10-AF0A-4CD7-8FBE-737C6CC1193E</RequestId>\\n\\t<OrderId>20722623431****</OrderId>\\n</ModifyInstanceSpecResponse>","errorExample":"<ModifyInstanceSpecResponse>\\n <OrderId>202636204910941</OrderId>\\n <RequestId>426F1356-B6EF-4DAD-A1C3-DE53B9DAF586</RequestId>\\n</ModifyInstanceSpecResponse>"}]',
      'title' => '变更Redis实例的规格',
      'summary' => '变更Redis实例的规格。',
      'description' => '> 关于变更实例规格的执行流程、影响、功能限制及费用说明，请参见[变更实例配置](~~26353~~)。',
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
            'description' => '指定返回参数**LocalName**对应的值的语言，取值：
* **zh-CN**：中文。
* **en-US**：英文。

> 默认值：**zh-CN**。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AD425AD3-CC7B-4EE2-A5CB-2F61BA73****',
              ),
              'RegionIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KVStoreRegion' => 
                  array (
                    'description' => '**RegionIds**为对象',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '**KVStoreRegion**为数组格式对象',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域的Endpoint。',
                          'type' => 'string',
                          'example' => 'r-kvstore.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ZoneIds' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'ZoneIdList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ZoneId' => 
                            array (
                              'description' => '可用区ID列表。',
                              'type' => 'array',
                              'items' => 
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
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AD425AD3-CC7B-4EE2-A5CB-2F61BA73****\\",\\n  \\"RegionIds\\": {\\n    \\"KVStoreRegion\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"r-kvstore.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ZoneIds\\": \\"cn-hangzhou-h\\",\\n        \\"ZoneIdList\\": {\\n          \\"ZoneId\\": [\\n            \\"cn-hangzhou-h\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse> \\n    <RegionIds> \\n        <KVStoreRegion> \\n        <RegionId>cn-hangzhou</RegionId>  \\n        <ZoneIdList> \\n            <ZoneId>cn-hangzhou-h</ZoneId>  \\n            <ZoneId>cn-hangzhou-MAZ10(h,i)</ZoneId>  \\n            <ZoneId>cn-hangzhou-MAZ9(g,h)</ZoneId>  \\n            <ZoneId>cn-hangzhou-b</ZoneId>  \\n            <ZoneId>cn-hangzhou-d</ZoneId>  \\n            <ZoneId>cn-hangzhou-e</ZoneId>  \\n            <ZoneId>cn-hangzhou-MAZ6(b,f)</ZoneId>  \\n            <ZoneId>cn-hangzhou-f</ZoneId>  \\n            <ZoneId>cn-hangzhou-g</ZoneId> \\n        </ZoneIdList>  \\n        <RegionEndpoint>r-kvstore.aliyuncs.com</RegionEndpoint>  \\n        <ZoneIds>cn-hangzhou-h,cn-hangzhou-MAZ10(h,i),cn-hangzhou-MAZ9(g,h),cn-hangzhou-b,cn-hangzhou-d,cn-hangzhou-e,cn-hangzhou-MAZ6(b,f),cn-hangzhou-f,cn-hangzhou-g</ZoneIds>  \\n        <LocalName>华东1（杭州）</LocalName> \\n        </KVStoreRegion> \\n    </RegionIds>  \\n    <RequestId>AD425AD3-CC7B-4EE2-A5CB-2F61BA73****</RequestId> \\n</DescribeRegionsResponse>\\n","errorExample":"{\\n    \\"RequestId\\":\\"535A88D3-5408-4B29-AFD4-07319D97EBC4\\",\\n    \\"RegionIds\\":\\n    {\\n            {\\n                \\"ZoneIds\\":\\"cn-qingdao-b\\",\\n                \\"RegionId\\":\\"cn-qingdao\\",\\n            },\\n            {\\n                \\"ZoneIds\\":\\"cn-shenzhen-a\\",\\n                \\"RegionId\\":\\"cn-shenzhen\\",\\n            },\\n            {\\n                \\"ZoneIds\\":\\"cn-hangzhou-d,cn-hangzhou-b\\",\\n                \\"RegionId\\":\\"cn-hangzhou\\"\\n            },\\n            {\\n                \\"ZoneIds\\":\\"cn-beijing-a\\",\\n                \\"RegionId\\":\\"cn-beijing\\"\\n            }\\n    }\\n}"}]',
      'title' => '查询可用的地域',
      'summary' => '查询Redis实例支持的所有地域及其对应可用区信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeZones' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置返回后可用区名称的语言，取值：
* **zh-CN**（默认）：中文。
* **en-US**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'en-US',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1D42F072-72FE-4DC4-BB8E-64B1D298****',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KVStoreZone' => 
                  array (
                    'description' => '可用区的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IsRds' => 
                        array (
                          'description' => '是否属于RDS管控，Redis实例中该参数的返回值固定为**true**。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '该地域下的某可用区的ID。',
                          'type' => 'string',
                          'example' => 'cn-huhehaote-b',
                        ),
                        'Disabled' => 
                        array (
                          'description' => '当前可用区是否可创建Redis实例，返回值：
* **true**：不支持。
* **false**：支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SwitchNetwork' => 
                        array (
                          'description' => '是否支持将Redis实例从经典网络切换为专有网络，返回值：
* **true**：支持。
* **false**：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ZoneName' => 
                        array (
                          'description' => '该地域下的某可用区的名称。',
                          'type' => 'string',
                          'example' => '呼和浩特 可用区B',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '该地域的ID。',
                          'type' => 'string',
                          'example' => 'cn-huhehaote',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1D42F072-72FE-4DC4-BB8E-64B1D298****\\",\\n  \\"Zones\\": {\\n    \\"KVStoreZone\\": [\\n      {\\n        \\"IsRds\\": true,\\n        \\"ZoneId\\": \\"cn-huhehaote-b\\",\\n        \\"Disabled\\": true,\\n        \\"SwitchNetwork\\": true,\\n        \\"ZoneName\\": \\"呼和浩特 可用区B\\",\\n        \\"RegionId\\": \\"cn-huhehaote\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n \\"RequestId\\": \\"1D42F072-72FE-4DC4-BB8E-64B1D298182E\\",\\n \\"Zones\\": {\\n   \\"KVStoreZone\\": [\\n     {\\n       \\"ZoneName\\": \\"华东 1 多可用区 6\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-MAZ6(b,f)\\"\\n     },\\n     {\\n       \\"ZoneName\\": \\"华东 1 可用区 B\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-b\\"\\n     },\\n     {\\n       \\"ZoneName\\": \\"华东 1 可用区 D\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-d\\"\\n     },\\n     {\\n       \\"ZoneName\\": \\"华东 1 可用区 E\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-e\\"\\n     },\\n     {\\n       \\"ZoneName\\": \\"华东 1 可用区 F\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-f\\"\\n     },\\n     {\\n       \\"ZoneName\\": \\"华东 1 可用区 G\\",\\n       \\"RegionId\\": \\"cn-hangzhou\\",\\n       \\"ZoneId\\": \\"cn-hangzhou-g\\"\\n     }\\n   ]\\n }\\n}"},{"type":"xml","example":"<DescribeZonesResponse>\\n    <RequestId>1D42F072-72FE-4DC4-BB8E-64B1D298****</RequestId>\\n        <Zones>\\n        <KVStoreZone>\\n            <ZoneName>呼和浩特 可用区B</ZoneName>\\n            <IsRds>true</IsRds>\\n            <Disabled>false</Disabled>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <ZoneId>cn-huhehaote-b</ZoneId>\\n            <SwitchNetwork>true</SwitchNetwork>\\n            </KVStoreZone>\\n        <KVStoreZone>\\n            <ZoneName>呼和浩特 可用区A</ZoneName>\\n            <IsRds>true</IsRds>\\n            <Disabled>false</Disabled>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <ZoneId>cn-huhehaote-a</ZoneId>\\n            <SwitchNetwork>true</SwitchNetwork>\\n        </KVStoreZone>\\n        </Zones>\\n</DescribeZonesResponse>","errorExample":"<DescribeZonesResponse>\\n <RequestId>1D42F072-72FE-4DC4-BB8E-64B1D298182E</RequestId>\\n <Zones>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 多可用区 6</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-MAZ6(b,f)</ZoneId>\\n   </KVStoreZone>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 可用区 B</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-b</ZoneId>\\n   </KVStoreZone>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 可用区 D</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-d</ZoneId>\\n   </KVStoreZone>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 可用区 E</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-e</ZoneId>\\n   </KVStoreZone>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 可用区 F</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-f</ZoneId>\\n   </KVStoreZone>\\n   <KVStoreZone>\\n     <ZoneName>华东 1 可用区 G</ZoneName>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <ZoneId>cn-hangzhou-g</ZoneId>\\n   </KVStoreZone>\\n </Zones>\\n</DescribeZonesResponse>"}]',
      'title' => '查询支持的可用区',
      'summary' => '查询指定地域下Redis支持的可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61012~~)查询。',
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
            'description' => '可用区ID，您可以调用[DescribeZones](~~94527~~)查询。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
* **PrePaid**：包年包月。
* **PostPaid**：按量付费。

> 默认值：**PrePaid**。',
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
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，取值：
* **BUY**（默认）：新购。
* **UPGRADE**：升级实例规格配置。
* **DOWNGRADE**：降级实例规格配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'BUY',
            'default' => 'BUY',
            'enum' => 
            array (
              0 => 'BUY',
              1 => 'UPGRADE',
              2 => 'DOWNGRADE',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值：
* **Redis**。
* **Memcache**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redis',
            'enum' => 
            array (
              0 => 'Redis',
              1 => 'Memcache',
              2 => 'redis',
              3 => 'memcache',
              4 => 'REDIS',
              5 => 'MEMCACHE',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。您可以通过调用[ListResourceGroups](~~158855~~)接口获取资源组ID。
> 您也可以通过控制台获取资源组ID，相关操作，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4e******',
            'default' => '',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 当**OrderType**取值为**UPGRADE**或**DOWNGRADE**时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        7 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值的语言，取值：
* **zh-CN**：中文，默认值。
* **en-US**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
            'default' => 'zh_CN',
          ),
        ),
        8 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型，取值：
- **Local**：社区版实例（经典版）或内存型（经典版）。
- **Tair_rdb**：内存型（云原生版）。
- **Tair_scm**：持久内存型。
- **Tair_essd**：磁盘型。
- **OnECS**：社区版实例（云原生版）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
            'default' => 'Local',
          ),
        ),
        9 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据节点ID，可调用[DescribeLogicInstanceTopology](~~94665~~)获取。对于获取到的数据节点ID，需要去除井号（`#`）及其后面的内容，例如仅保留r-bp10noxlhcoim2****-db-0。
> 传入本参数前，您还需要传入**InstanceId**参数，且要求实例为集群或读写分离架构。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceScene',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis产品系列，取值如下：

- **professional**：标准版，支持单副本、主备、读写分离、集群四种架构，扩展性强。
 <props="china">
-  **economical**：仅支持主备架构，具有价格优势，更多信息请参见[经济版实例](~~2489678~~)。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'professional',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '493B7308-D9C2-55F6-B042-0313BD63****',
              ),
              'AvailableZones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AvailableZone' => 
                  array (
                    'description' => '可用区详情。',
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
                          'example' => 'cn-hangzhou-h',
                        ),
                        'ZoneName' => 
                        array (
                          'description' => '可用区名称。',
                          'type' => 'string',
                          'example' => '杭州 可用区H',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'SupportedEngines' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SupportedEngine' => 
                            array (
                              'description' => '引擎类型。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Engine' => 
                                  array (
                                    'description' => '实例的引擎类型。',
                                    'type' => 'string',
                                    'example' => 'Redis',
                                  ),
                                  'SupportedEditionTypes' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SupportedEditionType' => 
                                      array (
                                        'description' => '实例类型。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'EditionType' => 
                                            array (
                                              'description' => '实例类型，返回值：
* **Community**：社区版。
* **Enterprise**：企业版。',
                                              'type' => 'string',
                                              'example' => 'Enterprise',
                                            ),
                                            'SupportedSeriesTypes' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'SupportedSeriesType' => 
                                                array (
                                                  'description' => '实例的系列。',
                                                  'type' => 'array',
                                                  'items' => 
                                                  array (
                                                    'type' => 'object',
                                                    'properties' => 
                                                    array (
                                                      'SeriesType' => 
                                                      array (
                                                        'description' => '系列，返回值：
* **enhanced_performance_type**：内存型。
* **hybrid_storage**：混合存储型。',
                                                        'type' => 'string',
                                                        'example' => 'enhanced_performance_type',
                                                      ),
                                                      'SupportedEngineVersions' => 
                                                      array (
                                                        'type' => 'object',
                                                        'properties' => 
                                                        array (
                                                          'SupportedEngineVersion' => 
                                                          array (
                                                            'description' => '引擎版本（版本号）列表。',
                                                            'type' => 'array',
                                                            'items' => 
                                                            array (
                                                              'type' => 'object',
                                                              'properties' => 
                                                              array (
                                                                'Version' => 
                                                                array (
                                                                  'description' => '引擎版本。',
                                                                  'type' => 'string',
                                                                  'example' => '5.0',
                                                                ),
                                                                'SupportedArchitectureTypes' => 
                                                                array (
                                                                  'type' => 'object',
                                                                  'properties' => 
                                                                  array (
                                                                    'SupportedArchitectureType' => 
                                                                    array (
                                                                      'description' => '架构类型。',
                                                                      'type' => 'array',
                                                                      'items' => 
                                                                      array (
                                                                        'type' => 'object',
                                                                        'properties' => 
                                                                        array (
                                                                          'Architecture' => 
                                                                          array (
                                                                            'description' => '架构，返回值：
* **standard**：标准架构。
* **cluster**：集群架构。
* **rwsplit**：读写分离架构。',
                                                                            'type' => 'string',
                                                                            'example' => 'cluster',
                                                                          ),
                                                                          'SupportedShardNumbers' => 
                                                                          array (
                                                                            'type' => 'object',
                                                                            'properties' => 
                                                                            array (
                                                                              'SupportedShardNumber' => 
                                                                              array (
                                                                                'description' => '可用分片数列表。',
                                                                                'type' => 'array',
                                                                                'items' => 
                                                                                array (
                                                                                  'type' => 'object',
                                                                                  'properties' => 
                                                                                  array (
                                                                                    'ShardNumber' => 
                                                                                    array (
                                                                                      'description' => '分片数。',
                                                                                      'type' => 'string',
                                                                                      'example' => '8',
                                                                                    ),
                                                                                    'SupportedNodeTypes' => 
                                                                                    array (
                                                                                      'type' => 'object',
                                                                                      'properties' => 
                                                                                      array (
                                                                                        'SupportedNodeType' => 
                                                                                        array (
                                                                                          'description' => '节点类型列表。',
                                                                                          'type' => 'array',
                                                                                          'items' => 
                                                                                          array (
                                                                                            'type' => 'object',
                                                                                            'properties' => 
                                                                                            array (
                                                                                              'SupportedNodeType' => 
                                                                                              array (
                                                                                                'description' => '节点类型，返回值：
* **single**：单副本。
* **double**：双副本。',
                                                                                                'type' => 'string',
                                                                                                'example' => 'double',
                                                                                              ),
                                                                                              'AvailableResources' => 
                                                                                              array (
                                                                                                'type' => 'object',
                                                                                                'properties' => 
                                                                                                array (
                                                                                                  'AvailableResource' => 
                                                                                                  array (
                                                                                                    'description' => '可用规格列表。',
                                                                                                    'type' => 'array',
                                                                                                    'items' => 
                                                                                                    array (
                                                                                                      'type' => 'object',
                                                                                                      'properties' => 
                                                                                                      array (
                                                                                                        'InstanceClassRemark' => 
                                                                                                        array (
                                                                                                          'description' => '实例规格描述。',
                                                                                                          'type' => 'string',
                                                                                                          'example' => '16G集群版（8节点）（QPS:1920000 Connections:240000）',
                                                                                                        ),
                                                                                                        'Capacity' => 
                                                                                                        array (
                                                                                                          'description' => '实例的内存容量，单位为MB。',
                                                                                                          'type' => 'integer',
                                                                                                          'format' => 'int64',
                                                                                                          'example' => '16384',
                                                                                                        ),
                                                                                                        'InstanceClass' => 
                                                                                                        array (
                                                                                                          'description' => '规格编码。可在帮助中心的搜索框中搜索规格编码，查看其对应的规格信息。',
                                                                                                          'type' => 'string',
                                                                                                          'example' => 'redis.amber.logic.sharding.2g.8db.0rodb.24proxy.multithread',
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
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"493B7308-D9C2-55F6-B042-0313BD63****\\",\\n  \\"AvailableZones\\": {\\n    \\"AvailableZone\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"ZoneName\\": \\"杭州 可用区H\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"SupportedEngines\\": {\\n          \\"SupportedEngine\\": [\\n            {\\n              \\"Engine\\": \\"Redis\\",\\n              \\"SupportedEditionTypes\\": {\\n                \\"SupportedEditionType\\": [\\n                  {\\n                    \\"EditionType\\": \\"Enterprise\\",\\n                    \\"SupportedSeriesTypes\\": {\\n                      \\"SupportedSeriesType\\": [\\n                        {\\n                          \\"SeriesType\\": \\"enhanced_performance_type\\",\\n                          \\"SupportedEngineVersions\\": {\\n                            \\"SupportedEngineVersion\\": [\\n                              {\\n                                \\"Version\\": \\"5.0\\",\\n                                \\"SupportedArchitectureTypes\\": {\\n                                  \\"SupportedArchitectureType\\": [\\n                                    {\\n                                      \\"Architecture\\": \\"cluster\\",\\n                                      \\"SupportedShardNumbers\\": {\\n                                        \\"SupportedShardNumber\\": [\\n                                          {\\n                                            \\"ShardNumber\\": \\"8\\",\\n                                            \\"SupportedNodeTypes\\": {\\n                                              \\"SupportedNodeType\\": [\\n                                                {\\n                                                  \\"SupportedNodeType\\": \\"double\\",\\n                                                  \\"AvailableResources\\": {\\n                                                    \\"AvailableResource\\": [\\n                                                      {\\n                                                        \\"InstanceClassRemark\\": \\"16G集群版（8节点）（QPS:1920000 Connections:240000）\\",\\n                                                        \\"Capacity\\": 16384,\\n                                                        \\"InstanceClass\\": \\"redis.amber.logic.sharding.2g.8db.0rodb.24proxy.multithread\\"\\n                                                      }\\n                                                    ]\\n                                                  }\\n                                                }\\n                                              ]\\n                                            }\\n                                          }\\n                                        ]\\n                                      }\\n                                    }\\n                                  ]\\n                                }\\n                              }\\n                            ]\\n                          }\\n                        }\\n                      ]\\n                    }\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RequestId>493B7308-D9C2-55F6-B042-0313BD63****</RequestId>\\n    <AvailableZones>\\n        <AvailableZone>\\n            <ZoneName>杭州 可用区H</ZoneName>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <SupportedEngines>\\n                <SupportedEngine>\\n                    <SupportedEditionTypes>\\n                        <SupportedEditionType>\\n                            <SupportedSeriesTypes>\\n                                <SupportedSeriesType>\\n                                    <SeriesType>enhanced_performance_type</SeriesType>\\n                                    <SupportedEngineVersions>\\n                                        <SupportedEngineVersion>\\n                                            <SupportedArchitectureTypes>\\n                                                <SupportedArchitectureType>\\n                                                    <Architecture>cluster</Architecture>\\n                                                    <SupportedShardNumbers>\\n                                                        <SupportedShardNumber>\\n                                                            <SupportedNodeTypes>\\n                                                                <SupportedNodeType>\\n                                                                    <SupportedNodeType>double</SupportedNodeType>\\n                                                                    <AvailableResources>\\n                                                                        <AvailableResource>\\n                                                                            <Capacity>16384</Capacity>\\n                                                                            <InstanceClassRemark>16G集群版（8节点）（QPS:1920000 Connections:240000）</InstanceClassRemark>\\n                                                                            <InstanceClass>redis.amber.logic.sharding.2g.8db.0rodb.24proxy.multithread</InstanceClass>\\n                                                                        </AvailableResource>\\n                                                                        <AvailableResource>\\n                                                                            <Capacity>32768</Capacity>\\n                                                                            <InstanceClassRemark>32G集群版（8节点）（QPS:1920000 Connections:240000）</InstanceClassRemark>\\n                                                                            <InstanceClass>redis.amber.logic.sharding.4g.8db.0rodb.24proxy.multithread</InstanceClass>\\n                                                                        </AvailableResource>\\n                                                                        <AvailableResource>\\n                                                                            <Capacity>65536</Capacity>\\n                                                                            <InstanceClassRemark>64G集群版（8节点）（QPS:1920000 Connections:240000）</InstanceClassRemark>\\n                                                                            <InstanceClass>redis.amber.logic.sharding.8g.8db.0rodb.24proxy.multithread</InstanceClass>\\n                                                                        </AvailableResource>\\n                                                                    </AvailableResources>\\n                                                                </SupportedNodeType>\\n                                                            </SupportedNodeTypes>\\n                                                            <ShardNumber>8</ShardNumber>\\n                                                        </SupportedShardNumber>\\n                                                    </SupportedShardNumbers>\\n                                                </SupportedArchitectureType>\\n                                            </SupportedArchitectureTypes>\\n                                            <Version>5.0</Version>\\n                                        </SupportedEngineVersion>\\n                                    </SupportedEngineVersions>\\n                                </SupportedSeriesType>\\n                            </SupportedSeriesTypes>\\n                            <EditionType>Enterprise</EditionType>\\n                        </SupportedEditionType>\\n                    </SupportedEditionTypes>\\n                    <Engine>redis</Engine>\\n                </SupportedEngine>\\n            </SupportedEngines>\\n        </AvailableZone>\\n    </AvailableZones>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
      'title' => '查询某一可用区的资源列表',
      'summary' => '查询指定可用区内可创建的实例规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransformToPrePaid' => 
    array (
      'summary' => '将按量付费的Redis实例转换为包年包月（预付费）实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预付费时长，单位为月。取值：**1**~**9**、**12**、**24**、**36**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付款，取值：
* **true**：自动付款。
* **false**：手动付款（默认），您通过控制台对实例进行手动续费，详情请参见[手动续费](~~26352~~)。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
      ),
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
                'description' => '实例付费方式转换为包年包月后的实例到期时间。',
                'type' => 'string',
                'example' => '2019-01-18T16:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '426F1356-B6EF-4DAD-A1C3-DE53B9DAF586',
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
          4 => 
          array (
            'errorCode' => 'Order.LatestOrderIsHanding',
            'errorMessage' => 'Latest order is handing, please retry later.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2019-01-18T16:00:00Z\\",\\n  \\"RequestId\\": \\"426F1356-B6EF-4DAD-A1C3-DE53B9DAF586\\",\\n  \\"OrderId\\": \\"111111111111111\\"\\n}","errorExample":"{\\n \\"OrderId\\":\\"202636204910941\\",\\n \\"RequestId\\":\\"426F1356-B6EF-4DAD-A1C3-DE53B9DAF586\\",\\n \\"EndTime\\":\\"2019-01-18T16:00:00Z\\"\\n}"},{"type":"xml","example":"<TransformToPrePaidResponse>\\n    <OrderId>111111111111111</OrderId>\\n    <RequestId>426F1356-B6EF-4DAD-A1C3-DE53B9DAF586</RequestId>\\n    <EndTime>2019-01-18T16:00:00Z</EndTime>\\n</TransformToPrePaidResponse>","errorExample":"<TransformToPrePaidResponse>\\n <OrderId>202636204910941</OrderId>\\n <RequestId>426F1356-B6EF-4DAD-A1C3-DE53B9DAF586</RequestId>\\n <EndTime>2019-01-18T16:00:00Z</EndTime>\\n</TransformToPrePaidResponse>"}]',
      'title' => '将按量付费转换为包年包月',
      'description' => '该API对应的控制台操作请参见[转包年包月](~~54542~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MigrateToOtherZone' => 
    array (
      'summary' => '将Redis实例迁移到同地域内的其它可用区。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要迁移到的目标主可用区ID，可调用[DescribeZones](~~94527~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机的ID 。

> * vSwitch所在可用区须与ZoneId（目的可用区）一致； 
> *  如果实例的网络类型为VPC，则该参数为必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1e7clcw529l773d****',
            'default' => 'OpenApi',
          ),
        ),
        3 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据迁移后执行数据库切换的时间，取值： 
* **Immediately**：迁移完立即切换。
* **MaintainTime**：在可维护时间段内切换。

> 默认值：**Immediately**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => 'Immediately',
              3 => 'MaintainTime',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'SecondaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要迁移到的目标备可用区ID，可调用[DescribeZones](~~94527~~)接口查询。
> 传入本参数可以实现主备数据节点分布在不同的可用区，实现跨可用区容灾，可承受机房级别的故障。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-h',
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
                'example' => '29B0BF34-D069-4495-92C7-FA6D9452****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetworkType.NotSupport',
            'errorMessage' => 'Specified network type does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'InstanceStatus.NotSupport',
            'errorMessage' => 'Instance status does not support this operation.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingSwitchId',
            'errorMessage' => 'VSwitchId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'IzNotSupportVpcError',
            'errorMessage' => 'Specify zone not support VPC.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidReginAvzNotFound',
            'errorMessage' => 'Specified user does not find the region and zone.',
          ),
          5 => 
          array (
            'errorCode' => 'ClusterNotSupport',
            'errorMessage' => 'The Specified cluster does not support.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidVSwitchId.Mismatch',
            'errorMessage' => 'The Specified vSwitchId does not matched VPC.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'The Specified Zone does not supported.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DBInstanceNotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke VPC service failed.',
          ),
          1 => 
          array (
            'errorCode' => 'ZoneMigrationError.StillingRunning',
            'errorMessage' => 'Zone migration task is still running.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"29B0BF34-D069-4495-92C7-FA6D9452****\\"\\n}","errorExample":""},{"type":"xml","example":"<MigrateToOtherZoneResponse>\\r\\n    <RequestId>29B0BF34-D069-4495-92C7-FA6D9452****</RequestId>\\r\\n</MigrateToOtherZoneResponse>","errorExample":"<MigrateToOtherZoneResponse>\\n     <RequestId>29B0BF34-D069-4495-92C7-FA6D94528A9E</RequestId>\\n</MigrateToOtherZoneResponse>"}]',
      'title' => '迁移实例至其他可用区',
      'description' => '执行本接口前需要先释放公网连接地址等，更多信息请参见[迁移可用区](~~106272~~)。

> * 如果实例是从经典网络切换到专有网络的，并且保留了经典网络的连接地址，则需等到经典网络连接地址到期释放后才能执行可用区迁移。
> * 迁移之后实例的连接地址不会改变，但VIP会发生变化，请在业务中使用连接地址连接实例而非其VIP地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTairInstance' => 
    array (
      'summary' => '创建Tair版实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '56360',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreSIWMD9',
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
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要创建实例的地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称，需满足下述要求：
* 长度为2~80个字符。
* 以大小写英文字母或中文开头，不支持空格和特殊字符：`@/:=”<>{[]}`。',
            'type' => 'string',
            'required' => false,
            'example' => 'apitest',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例密码，需满足下述要求：
* 长度为8~32位。
* 需包含大写字母、小写字母、特殊字符和数字中的至少三种，支持的特殊字符为`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => false,
            'example' => 'Pass!123456',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，更多信息，请参见：
- [内存型规格](~~443844~~)。
- [持久内存型规格](~~443845~~)。
- [磁盘型规格](~~443846~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tair.scm.standard.4m.32d',
          ),
        ),
        4 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要创建实例的可用区。
> 您也可以再传入SecondaryZoneId参数指定备可用区，主备节点将分别部署在指定的主可用区和备可用区，实现同城双中心主备架构。例如指定ZoneId参数为"cn-hangzhou-h"，指定SecondaryZoneId参数为"cn-hangzhou-g"。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou-h',
          ),
        ),
        5 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
- **PrePaid**（默认）：预付费，即包年包月。
- **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PostPaid' => 'PostPaid',
              'PrePaid' => 'PrePaid',
            ),
            'example' => 'PrePaid',
            'default' => 'PrePaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID，可调用专有网络VPC的[DescribeVpcs](~~35739~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp1nme44gek34slfc****',
          ),
        ),
        7 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该专有网络下的虚拟交换机ID，可调用专有网络VPC的[DescribeVpcs](~~35739~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
        8 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费周期，单位为月，取值：**1**~**9**、**12**、**24**、**36**、**60** 。
> 当**ChargeType**取值为**PrePaid**时，本参数必须传入。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '活动ID、业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000',
          ),
        ),
        10 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'default',
          ),
        ),
        11 => 
        array (
          'name' => 'SrcDBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如需基于某个实例的备份集创建新实例，请先在此参数中指定源实例ID。
> 然后通过**BackupId**、**ClusterBackupId**（云原生集群架构建议使用ClusterBackupId）或**RestoreTime**参数指定需要使用的备份集或指定时间点，本参数需要与上述3个中的任意一个参数组合使用。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        12 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若您的实例是云原生架构实例，并且是集群实例，则建议您使用[DescribeClusterBackupList](~~2679158~~)查询出集群备份集id，例如"cb-xx"，然后填入ClusterBackupId请求参数来达到克隆集群实例的目的，免去您输入各个分片备份集id的烦恼。  


您可在此参数中指定源实例的备份集ID，系统将使用该备份集中保存的数据创建新实例。通过调用[DescribeBackups](~~61081~~)可查询BackupId。如果源实例是集群实例，则此处需要填写源实例各个分片的备份集id，并且通过逗号隔开，例如"10**,11**,15**"',
            'type' => 'string',
            'required' => false,
            'example' => '2158****20',
          ),
        ),
        13 => 
        array (
          'name' => 'ClusterBackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部分新集群架构支持集群备份集ID，您可以通过[DescribeClusterBackupList](~~2679158~~)接口获取。
* 若支持，可输入指定的集群备份集ID即可，无需再填写**BackupId**参数。
* 若不支持，请在BackupId参数中填写为原实例各个分片下的备份集ID，通过逗号隔开，例如"2158\\*\\*\\*\\*20,2158\\*\\*\\*\\*22"等。',
            'type' => 'string',
            'required' => false,
            'example' => 'cb-hyxdof5x9kqb****',
          ),
        ),
        14 => 
        array (
          'name' => 'RecoverConfigMode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定实例的内网IP地址。

> 该地址需在实例所属交换机的网段内，您可以调用专有网络VPC的[DescribeVSwitches](~~35748~~)获取网段信息。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.88.***',
          ),
        ),
        16 => 
        array (
          'name' => 'AutoUseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券，取值：
* **true**：使用代金券。
* **false**（默认）：不使用代金券。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        17 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启。
* **false**（默认）：不开启。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，单位为月，取值：**1**、**2**、**3**、**6**、**12**。
> 当**AutoRenew**取值为**true**时，本参数必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
            'default' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源组ID。

> * 您可以通过调用[ListResourceGroups](~~158855~~)接口或通过控制台获取资源组ID列表。相关操作，请参见[查看资源组基本信息](~~151181~~)。
> * 修改实例所属的资源组之前，您可以调用[ListResources](~~158866~~)接口查看实例现在所属的资源组。',
            'type' => 'string',
            'required' => false,
            'maximum' => '4096',
            'minimum' => '1',
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        20 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动支付，取值固定为**true**。

',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
            'enum' => 
            array (
              0 => 'true',
            ),
          ),
        ),
        21 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        22 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储类型，取值为**essd_pl1**、**essd_pl2**、**essd_pl3**。
> 当**InstanceType**取值为**tair_essd**时，且创建ESSD型时，才需要输入本参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'essd_pl1',
            'enum' => 
            array (
              0 => 'essd_pl0',
              1 => 'essd_pl1',
              2 => 'essd_pl2',
              3 => 'essd_pl3',
            ),
          ),
        ),
        23 => 
        array (
          'name' => 'Storage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘型实例的存储空间，不同的规格取值范围有所区别，详情请参见[磁盘型规格](~~443846~~)。
> 当**InstanceType**取值为**tair_essd**时，且创建ESSD型时，才需要输入本参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        24 => 
        array (
          'name' => 'ShardType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
- **MASTER_SLAVE**（默认）：高可用，采用主从架构，可保障可用性。
- **STAND_ALONE**：单副本，采用单节点架构。在节点故障后，数据会丢失，系统会自动拉起新的空实例。仅在**单可用区**时支持，且不支持创建集群与读写分离架构。',
            'type' => 'string',
            'required' => false,
            'example' => 'MASTER_SLAVE',
            'default' => 'MASTER_SLAVE',
            'enum' => 
            array (
              0 => 'STAND_ALONE',
              1 => 'MASTER_SLAVE',
            ),
          ),
        ),
        25 => 
        array (
          'name' => 'ShardCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中的数据节点个数，取值：
* **1**：默认值，即表示创建的实例为[标准架构](~~52228~~)，仅拥有1个数据节点。
* **2**~**32**：传入该范围的值，即表示创建的实例为[集群架构](~~52228~~)，拥有指定数量的数据节点。

> 当**InstanceType**取值为**tair_rdb**或**tair_scm**时，本参数才可以传入**2**~**32**，即只有内存型和持久内存型支持集群架构。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '64',
            'minimum' => '1',
            'example' => '2',
            'default' => '1',
          ),
        ),
        26 => 
        array (
          'name' => 'ReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主可用区的只读节点数，本参数仅适用于创建云盘版读写分离架构实例，您可以通过该参数实现自定义只读节点数量，取值：1~9。
> 但该参数与SlaveReadOnlyCount的总和不能大于9。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '5',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        27 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本，默认取值：**1.0**，不同 Tair 产品类型传参规则：
- Tair_rdb: Tair 内存型兼容Redis 5.0和Redis 6.0协议，传**5.0**或者**6.0**。
- Tair_scm: Tair 持久内存兼容Redis 6.0协议，传**1.0**。
- Tair_essd: Tair 磁盘（ESSD/SSD）兼容Redis 6.0协议。 创建ESSD型请传入**1.0**、创建SSD型请传入**2.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '1.0',
            'default' => '1.0',
            'enum' => 
            array (
              0 => '1.0',
              1 => '5.0',
              2 => '6.0',
              3 => '2.0',
            ),
          ),
        ),
        28 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储介质，取值：
* **tair_rdb**：内存型。
* **tair_scm**：持久内存型。
* **tair_essd**：磁盘型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tair_scm',
            'enum' => 
            array (
              0 => 'tair_scm',
              1 => 'tair_essd',
              2 => 'tair_rdb',
            ),
          ),
        ),
        29 => 
        array (
          'name' => 'SecondaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备可用区ID，可调用[DescribeRegions](~~61012~~)查询。

> 本参数和ZoneId参数传入的值不能相同，且不可传入多可用区对应的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-g',
          ),
        ),
        30 => 
        array (
          'name' => 'GlobalInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将本次新建的实例作为分布式实例中的子实例，通过该方式可创建分布实例。
* 若希望新建的实例作为第一个子实例，请输入**true**。
* 若希望新建的实例作为第二、三个子实例，请输入分布式实例 ID，例如gr-bp14rkqrhac****。
* 不作为分布式实例，您无需输入任何值。
> 若希望作为分布式实例，本次新建的实例需为Tair内存型。',
            'type' => 'string',
            'required' => false,
            'example' => 'gr-bp14rkqrhac****',
          ),
        ),
        31 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键，与Tag Value组成标签的键值对。
> 单次最多支持传入5组标签的键值对。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1_test',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
> **N**表示传入第几个标签的值。例如**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1_test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        32 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对本次创建实例的操作执行预检查，取值：
* **true**：执行预检查操作，不创建实例。检查项目包含请求参数、请求格式、业务限制和库存。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
* **false**（默认）：发送正常请求，通过检查后直接创建实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        33 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '实例的服务端口，取值范围：1024~65535，默认值为6379。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '65535',
            'minimum' => '1024',
            'exclusiveMinimum' => false,
            'example' => '6379',
            'default' => '6379',
          ),
        ),
        34 => 
        array (
          'name' => 'GlobalSecurityGroupIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的全局IP白名单模板，多个IP白名单模板请用英文逗号（,）分隔，不可重复。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-zsldxfiwjmti0kcm****',
          ),
        ),
        35 => 
        array (
          'name' => 'ParamGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID，根据新创建的参数模板参数创建实例，不可重复。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-50npzjcqb1ua6q6j****',
          ),
        ),
        36 => 
        array (
          'name' => 'SlaveReadOnlyCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于多可用区读写分离实例创建时，指定备可用区的只读节点数量，该参数与ReadOnlyCount的总和不能大于9。
><notice>创建多可用区读写分离实例 SlaveReadOnlyCount  和 SecondaryZoneId 需要同时指定。></notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        37 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若源实例已开启数据闪回，您可在此参数中指定源实例备份保留周期内的任意时间点，系统将使用源实例在该时间点的备份数据创建新实例。格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-07-06T07:25:57Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'QPS' => 
              array (
                'description' => '每秒处理的最大读写操作数，单位为次/秒，此处为当前实例规格的理论值。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000',
              ),
              'ConnectionDomain' => 
              array (
                'description' => '实例的内网连接地址。',
                'type' => 'string',
                'example' => 'r-bp13ac3d047b****.tairpena.rds.aliyuncs.com',
              ),
              'ChargeType' => 
              array (
                'description' => '实例的付费类型，返回值：
- **PrePaid**：预付费。
- **PostPaid**：按量付费。',
                'type' => 'string',
                'example' => 'PrePaid',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp13ac3d047b****',
              ),
              'Port' => 
              array (
                'description' => '实例的端口号。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6379',
              ),
              'Config' => 
              array (
                'description' => '实例的详细配置，格式为JSON字符串。关于各参数的详细解释，请参见[参数配置说明](~~43885~~)。',
                'type' => 'string',
                'example' => '{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}',
              ),
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
                'example' => '12123216-4B00-4378-BE4B-08005BFC****',
              ),
              'Bandwidth' => 
              array (
                'description' => '实例的最大带宽，单位：MB/s。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '96',
              ),
              'Connections' => 
              array (
                'description' => '实例的最大连接数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10000',
              ),
              'InstanceName' => 
              array (
                'description' => '实例名称。
> 当传入了请求参数**InstanceName**时，本参数才会返回。',
                'type' => 'string',
                'example' => 'redistest',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-h',
              ),
              'InstanceStatus' => 
              array (
                'description' => '实例当前的状态，返回值固定为**Creating**（创建中）。',
                'type' => 'string',
                'example' => 'Creating',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '10****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2084452111111',
              ),
            ),
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
            'errorCode' => 'InvalidToken.Malformed',
            'errorMessage' => 'The Specified parameter Token is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidInstanceName.Malformed',
            'errorMessage' => 'The Specified parameter InstanceName is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPassword.Malformed',
            'errorMessage' => 'The Specified parameter Password is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InsufficientBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
          5 => 
          array (
            'errorCode' => 'QuotaExceed.AfterpayInstance',
            'errorMessage' => 'Living afterpay instances quota exceeded.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceNotAvailable',
            'errorMessage' => 'Resource you requested is not available for finance user.',
          ),
          8 => 
          array (
            'errorCode' => 'PaymentMethodNotFound',
            'errorMessage' => 'No payment method has been registered on the account.',
          ),
          9 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'Request uses a client token in a previous request but is not identical to that request.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaNotEnough',
            'errorMessage' => 'Quota not enough in this zone.',
          ),
          11 => 
          array (
            'errorCode' => 'QuotaExceed',
            'errorMessage' => 'Living afterpay instances quota exceed.',
          ),
          12 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke vpc service failed.',
          ),
          13 => 
          array (
            'errorCode' => 'IzNotSupportVpcError',
            'errorMessage' => 'Specify iz not support vpc.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidvSwitchId',
            'errorMessage' => 'The vpc does not cover the vswitch.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'The Specified vpc zone not supported.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Format',
            'errorMessage' => 'Specified account password is not valid.',
          ),
          17 => 
          array (
            'errorCode' => 'InstanceClass.NotMatch',
            'errorMessage' => 'Current instance class and instance type is not match.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidVPCId.NotFound',
            'errorMessage' => 'Specified virtual vpc is not found.',
          ),
          19 => 
          array (
            'errorCode' => 'AccountMoneyValidateError',
            'errorMessage' => 'Account money validate error.',
          ),
          20 => 
          array (
            'errorCode' => 'RequestTokenConflict',
            'errorMessage' => 'Specified request token conflict.',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidIPNotInSubnet',
            'errorMessage' => 'Error ip not in subnet.',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Malformed',
            'errorMessage' => 'Specified engine version is not valid.',
          ),
          23 => 
          array (
            'errorCode' => 'Zone.Closed',
            'errorMessage' => 'The specified zone is closed.',
          ),
          24 => 
          array (
            'errorCode' => 'VSwithNotBelongToNotVpcFault',
            'errorMessage' => 'The vSwitch does not belong to current vpc.',
          ),
          25 => 
          array (
            'errorCode' => 'PayIllegalAgreement',
            'errorMessage' => 'Pay mayi with holding agreement illegal.',
          ),
          26 => 
          array (
            'errorCode' => 'IllegalParamError',
            'errorMessage' => 'validateSaleConditionWithSubArticle failed.',
          ),
          27 => 
          array (
            'errorCode' => 'CASH_BOOK_INSUFFICIENT',
            'errorMessage' => 'No payment method is specified for your account. We recommend that you add a payment method or maitain a minimum prepayment balance of INR 1000.',
          ),
          28 => 
          array (
            'errorCode' => 'InvalidRegion.Format',
            'errorMessage' => 'Specified Region is not valid.',
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
            'errorCode' => 'AuthorizationFailure',
            'errorMessage' => 'The request processing has failed due to authorization failure.',
          ),
          2 => 
          array (
            'errorCode' => 'TokenServiceError',
            'errorMessage' => 'The specified token is duplicated, please change it.',
          ),
          3 => 
          array (
            'errorCode' => 'UserCannotBuyNotInnerCommodity',
            'errorMessage' => 'The user can not buy this commodity without alibaba group tag.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidvSwitchId',
            'errorMessage' => 'The Specified vSwitchId zone not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidVpcIdOrVswitchId.NotSupported',
            'errorMessage' => 'The Specified vpcId or vSwitchId not supported.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"QPS\\": 100000,\\n  \\"ConnectionDomain\\": \\"r-bp13ac3d047b****.tairpena.rds.aliyuncs.com\\",\\n  \\"ChargeType\\": \\"PrePaid\\",\\n  \\"InstanceId\\": \\"r-bp13ac3d047b****\\",\\n  \\"Port\\": 6379,\\n  \\"Config\\": \\"{\\\\\\\\\\\\\\"EvictionPolicy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lru\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hash-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"zset-max-ziplist-entries\\\\\\\\\\\\\\":128,\\\\\\\\\\\\\\"list-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"list-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"zset-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"set-max-intset-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"hash-max-ziplist-value\\\\\\\\\\\\\\":64}\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"RequestId\\": \\"12123216-4B00-4378-BE4B-08005BFC****\\",\\n  \\"Bandwidth\\": 96,\\n  \\"Connections\\": 10000,\\n  \\"InstanceName\\": \\"redistest\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n  \\"InstanceStatus\\": \\"Creating\\",\\n  \\"TaskId\\": \\"10****\\",\\n  \\"OrderId\\": 2084452111111\\n}","errorExample":""},{"type":"xml","example":"<CreateTairInstanceResponse>\\r\\n    <Connections>10000</Connections>\\r\\n    <TaskId>10****</TaskId>\\r\\n    <RequestId>F371C892-2143-4640-810E-74553F37****</RequestId>\\r\\n    <ZoneId>cn-hangzhou-h</ZoneId>\\r\\n    <InstanceId>r-bp13ac3d047b****</InstanceId>\\r\\n    <Config>{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}</Config>\\r\\n    <Port>6379</Port>\\r\\n    <InstanceName>redistest</InstanceName>\\r\\n    <ConnectionDomain>r-bp13ac3d047b****.tairpena.rds.aliyuncs.com</ConnectionDomain>\\r\\n    <QPS>100000</QPS>\\r\\n    <InstanceStatus>Creating</InstanceStatus>\\r\\n    <ChargeType>PrePaid</ChargeType>\\r\\n    <Bandwidth>96</Bandwidth>\\r\\n    <RegionId>cn-hangzhou</RegionId>\\r\\n</CreateTairInstanceResponse>","errorExample":""}]',
      'title' => '创建Tair实例',
      'description' => '选型参考资料，请参见[阿里云Redis产品选型必读](~~223808~~)。

请确保在使用该接口前，已充分了解云数据库Redis产品的收费方式和[价格](~~54532~~)。

> * 关于控制台的操作方法，请参见[创建Tair实例](~~443863~~)。
> * 如需创建其他类型的实例，例如社区版或[Tair内存型](~~126164~~)经典版实例，您可以调用[CreateInstance](~~60873~~)接口。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Instances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新实例的配置信息，格式为JSON，详细说明请参见Instances参数补充说明。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{
    "RegionId": "cn-hangzhou",
    "izNo": "cn-hangzhou-b",
    "quantity": 1,
    "instanceType": "Redis",
    "instanceClass": "redis.logic.sharding.1g.2db.0rodb.4proxy.default",
    "EngineVersion": "5.0",
    "ChargeType": "PrePaid",
	"Period":"1"
}]',
          ),
        ),
        1 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费，取值：

* **true**：自动付费，默认值。
* **false**：手动付费。您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理** > **我的订单**，找到目标订单进行支付。

> **Instances**参数中，**ChargeType**取值为**PrePaid**时，本参数才可用。',
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
            'description' => '业务扩展信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000',
          ),
        ),
        4 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码，默认值为：`youhuiquan_promotion_option_id_for_blank`。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        5 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis实例的大版本，取值：**4.0**、**5.0**。
> 默认值为**5.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '5.0',
            'default' => '2.8',
            'enum' => 
            array (
              0 => '2.8',
              1 => '4.0',
              2 => '5.0',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'RebuildInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要从回收站中重建恢复源实例，取值：
* **true**：需要。
* **false**：不需要，默认值。

> **Instances**参数中设置了**SrcDBInstanceId**参数时，本参数才可用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启。
* **false**：不开启，默认值。

> **Instances**参数中，**ChargeType**取值为**PrePaid**时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-resourcegroupid1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '20905403119****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '561AFBF1-BE20-44DB-9BD1-6988B53E****',
              ),
              'InstanceIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '本次创建的实例ID的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'r-bp16e70a4338****',
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
            'errorCode' => 'Zone.Closed',
            'errorMessage' => 'Specified zone is closed.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Period is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidToken.Malformed',
            'errorMessage' => 'The Specified parameter "Token" is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstanceName.Malformed',
            'errorMessage' => 'The Specified parameter "InstanceName" is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPassword.Malformed',
            'errorMessage' => 'The Specified parameter "Password" is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstances.Malformed',
            'errorMessage' => 'The Specified parameter "Instances" is not valid.',
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
            'errorCode' => 'PaymentMethodNotFound',
            'errorMessage' => 'No payment method has been registered on the account.',
          ),
          11 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'Request uses a client token in a previous request but is not identical to that request.',
          ),
          12 => 
          array (
            'errorCode' => 'QuotaNotEnough',
            'errorMessage' => 'Quota not enough in this zone.',
          ),
          13 => 
          array (
            'errorCode' => 'QuotaExceed',
            'errorMessage' => 'Living afterpay instances quota exceed.',
          ),
          14 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke vpc service failed.',
          ),
          15 => 
          array (
            'errorCode' => 'IzNotSupportVpcError',
            'errorMessage' => 'Specify iz not support vpc.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidVpcIdRegion.NotSupported',
            'errorMessage' => 'The Specified vpcId or vSwitchId not supported.',
          ),
          17 => 
          array (
            'errorCode' => 'ResourceGroupNotExist',
            'errorMessage' => 'The Specified ResourceGroupId does not exist.	',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'RealNameAuthenticationError',
            'errorMessage' => 'Your account has not passed the real-name authentication yet.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidCapacity.NotFound',
            'errorMessage' => 'The Capacity provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": \\"20905403119****\\",\\n  \\"RequestId\\": \\"561AFBF1-BE20-44DB-9BD1-6988B53E****\\",\\n  \\"InstanceIds\\": {\\n    \\"InstanceId\\": [\\n      \\"r-bp16e70a4338****\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '批量创建Redis实例',
      'summary' => '批量创建Redis实例。',
      'description' => '请确保在使用该接口前，已充分了解云数据库Redis产品的收费方式和[价格](~~54532~~)。
> 本接口仅支持创建Redis经典版实例、Tair内存型经典版实例。
推荐您使用创建单个实例的API接口：
> - [CreateInstance](~~473757~~)：创建Redis实例、Tair内存型经典版实例。
> - [CreateTairInstance](~~473770~~)：创建Tair云原生版实例（含内存型、持久内存、磁盘型）。',
      'requestParamsDescription' => '### Instances参数补充说明
  <table class="tg">
<thead>
  <tr>
    <th class="tg-4jvi">名称</th>
    <th class="tg-4jvi">类型</th>
    <th class="tg-4jvi">是否必选</th>
    <th class="tg-4jvi">示例值</th>
    <th class="tg-4jvi">描述</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-ajbx">RegionId</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">是</td>
    <td class="tg-ajbx">cn-hangzhou</td>
    <td class="tg-ajbx">地域ID，可调用<a href="~~61012~~">DescribeRegions</a>查询，使用此参数指定要创建实例的地域。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">IzNo</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">是</td>
    <td class="tg-ajbx">cn-hangzhou-b</td>
    <td class="tg-ajbx">主可用区ID，可调用<a href="~~61012~~">DescribeRegions</a>查询，使用此参数指定要创建实例的可用区。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">Quantity</td>
    <td class="tg-ajbx">Integer</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">1</td>
    <td class="tg-ajbx">要创建的实例数量，取值范围：<b>1</b>~<b>300</b>，默认值为<b>1</b>。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">InstanceType</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">Redis</td>
    <td class="tg-ajbx">实例类型，取值：<ul><li><b>Redis</b>（默认）：Redis实例。</li><li><b>Memcache</b>：Memcache实例。</li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">InstanceClass</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">redis.master.small.default</td>
    <td class="tg-ajbx">实例的规格，例如redis.master.small.default为社区版（经典版）标准架构双副本1 GB实例，详细信息请参见<a href="~~26350~~">规格查询导航</a>。<br><b>说明</b> 本参数和<b>Capacity</b>两者中必须传入一项。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">Capacity</td>
    <td class="tg-ajbx">Long</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">16384</td>
    <td class="tg-ajbx">实例的存储容量，单位为MB，详细信息请参见<a href="~~26350~~">规格查询导航</a>。<br><b>说明</b> 本参数和<b>InstanceClass</b>两者中必须传入一项。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">EngineVersion</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">5.0</td>
    <td class="tg-ajbx">Redis实例的大版本，取值：<ul><li><b>5.0</b>（默认）</li><li><b>4.0</b></li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">ChargeType</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">PrePaid</td>
    <td class="tg-ajbx">付费类型，取值：<ul><li><b>PrePaid</b>：包年包月（预付费）。</li><li><b>PostPaid</b>（默认）：按量付费（后付费）。</li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">Period</td>
    <td class="tg-ajbx">Long</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">12</td>
    <td class="tg-ajbx">付费周期，单位为月，取值：<b>1</b>~<b>9</b>、<b>12</b>、<b>24</b>、<b>36</b>、<b>60</b>。<br><b>说明</b> 当<b>ChargeType</b>参数取值为<b>PrePaid</b>时，本参数才可用且必须传入。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">AutoRenew</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">true</td>
    <td class="tg-ajbx">是否开启自动续费，取值：<ul><li><b>true</b>：开启。</li><li><b>false（默认）</b>：不开启。</li></ul><b>说明</b> 当<b>ChargeType</b>参数取值为<b>PrePaid</b>时，本参数才可用。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">InstanceName</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">apitest</td>
    <td class="tg-ajbx">实例的名称，需满足下述要求：<ul><li>以大小写字母或中文开头，长度为2~80个字符。</li><li>不支持空格和特殊字符：@/:=”&lt;&gt;{[]}</li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">Password</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">Pass!123456</td>
    <td class="tg-ajbx">实例的密码，需满足下述要求：<ul><li>长度为8~32位。</li><li>需包含大写字母、小写字母、特殊字符和数字中的至少三种。</li><li>支持的特殊字符为：!@#$%^&amp;*()_+-=</li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">NetworkType</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">VPC</td>
    <td class="tg-ajbx">网络类型，取值：<b>VPC（默认）</b>：专有网络VPC。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">VpcId</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">vpc-bp1nme44gek34slfc****</td>
    <td class="tg-ajbx">专有网络ID，可调用专有网络VPC的<a href="~~35739~~">DescribeVpcs</a>获取。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">VSwitchId</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">vsw-bp1e7clcw529l773d****</td>
    <td class="tg-ajbx">该专有网络下的虚拟交换机ID，可调用专有网络VPC的<a href="~~35739~~">DescribeVpcs</a>获取。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">NodeType</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">MASTER_SLAVE</td>
    <td class="tg-ajbx">节点类型，取值：<ul><li><b>STAND_ALONE</b>：单副本。</li><li><b>MASTER_SLAVE（默认）</b>：高可用（双副本）。</li></ul></td>
  </tr>
  <tr>
    <td class="tg-ajbx">SrcDBInstanceId</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">r-bp1zxszhcgatnx****</td>
    <td class="tg-ajbx">源实例ID，可调用<a href="~~60933~~">DescribeInstances</a>获取。<br><b>说明</b> 当您需要基于该实例的备份数据创建新实例时，您才需要传入本参数。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">BackupId</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">111111111</td>
    <td class="tg-ajbx">备份集ID，可通过调用<a href="~~61081~~">DescribeBackups</a>查询。<br><b>说明</b> 如需基于某个实例的备份数据创建新实例，在传入<b>SrcDBInstanceId</b>参数指定了源实例后，您还需要在本参数中指定源实例的备份集ID，系统将基于该备份集的数据创建新的实例。</td>
  </tr>
  <tr>
    <td class="tg-ajbx">RebuildInstance</td>
    <td class="tg-ajbx">String</td>
    <td class="tg-ajbx">否</td>
    <td class="tg-ajbx">false</td>
    <td class="tg-ajbx">是否需要从回收站中重建恢复源实例，取值：<ul><li><b>true</b>：需要。</li><li><b>false（默认）</b>：不需要。</li></ul><b>说明</b> 如果传入了本参数，则必须传入<b>SrcDBInstanceId</b>参数。</td>
  </tr>
</tbody>
</table>

### Instances参数请求示例
<pre>[{
    "RegionId": "cn-hangzhou",
    "izNo": "cn-hangzhou-b",
    "quantity": 1,
    "instanceType": "Redis",
    "instanceClass": "redis.logic.sharding.1g.2db.0rodb.4proxy.default",
    "EngineVersion": "5.0",
    "ChargeType": "PrePaid",
	"Period":"1"
}]</pre>',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableAdditionalBandwidth' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付款，取值：

* **true**：默认值，自动付款，请确保账号有足够的余额。
* **false**：手动付款。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据分片ID，您可以调用[DescribeLogicInstanceTopology](~~94665~~)获取，传入多个时使用英文逗号（,）分隔；您也可以传入**All**（即表示所有数据分片）。
> 当Redis实例为[集群架构](~~52228~~)或[读写分离架构](~~62870~~)时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要增加的带宽，单位为MB/s。取值为大于等于**0**的整数 ，最大可传入该实例（或单分片）规格默认带宽的6倍，但增加的上限为192MB/s。例如实例默认带宽为10 MB/s，可增加的范围为**0**~**60**。

> * 您可以调用[DescribeRoleZoneInfo](~~190794~~)接口，通过返回参数**DefaultBandWidth**获取默认最大带宽。更多关于实例规格的信息，请参见[实例规格查询导航](~~26350~~)。
> * 如果请求参数**NodeId**传入了多个数据分片ID，本参数传入的带宽值需和数据分片ID的顺序对应，多个带宽值之间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'OrderTimeLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买的时长，单位为天，取值：**1**、**2**、**3**、**7**、**14**、**30**、**60**、**90**、**180**、**365**、**730**、**1095**、**1825**。
> 如果需要继续使用购买的带宽，您需要在带宽到期前调用[RenewAdditionalBandwidth](~~211199~~)接口及时续费。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '30',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceBiz',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用来源，本参数仅用于内部维护使用，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'SDK',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启。
* **false**：不开启，默认值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，单位为月，取值：**1**、**2**、**3**、**4**、**5**、**6**、**7**、**8**、**9**、**12**、**24**、**36**、**60**。

> * 当**AutoRenew**参数取值为**true**时，本参数才可用且必须传入。
> * 该参数设置后暂不支持通过API查询，您可以在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后在**实例ID**文本框中输入实例ID加`-bw`后缀（例如r-bp1zxszhcgatnx****-bw）来查询。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '额外增加带宽的付费类型，取值：
* **PrePaid**：预付费，即包年包月。
* **PostPaid**：按量付费，当前仅支持该方式。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'PrePaid',
            'enum' => 
            array (
              0 => 'PostPaid',
              1 => 'PrePaid',
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
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2084452111111',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"2084452111111\\",\\n  \\"RequestId\\": \\"D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableAdditionalBandwidthResponse>\\n    <RequestId>D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\n    <OrderId>2084452111111</OrderId>\\n</EnableAdditionalBandwidthResponse>\\n","errorExample":""}]',
      'title' => '调整实例带宽',
      'summary' => '调整Redis实例的带宽，当前仅支持按量付费的计费方式，您仅需填写InstanceId、NodeId（可选）、Bandwidth、ChargeType参数即可。',
      'description' => '若您在调用本接口的同时，开启了实例带宽弹性伸缩功能，则实例会优先使用带宽弹性伸缩功能，且在带宽弹性回缩时，将回缩至实例规格的默认带宽。更多关于该功能限制、费用说明及常见问题，请参见[调整实例带宽](~~102588~~)。

> 调用本接口前，您可以调用[DescribeRoleZoneInfo](~~190794~~)查询实例中各数据节点的当前带宽。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的实例名称。名称为2~80个字符，以大小写英文字母或中文开头，不支持空格及特殊字符：`@/:=”<>{[]}`。',
            'type' => 'string',
            'required' => false,
            'example' => 'newinstancename',
          ),
        ),
        2 => 
        array (
          'name' => 'NewPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的默认账号密码，默认账号为以实例ID命名的账号（例如r-bp10noxlhcoim2****）。
> 长度为8~32位，需包含大写字母、小写字母、数字、特殊字符（支持`!@#$%^&*()_+-=`）中至少三种。',
            'type' => 'string',
            'required' => false,
            'example' => 'uW8+nsrp',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceReleaseProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">[实例释放保护状态](~~165005~~)，取值：</props>
<props="intl">实例释放保护状态，取值：</props>
* **true**：开启。
* **false**：关闭。

> 仅按量付费实例支持本参数。
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
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76',
              ),
            ),
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
            'errorMessage' => 'InstanceName or NewPassword at least one is mandatory for this action.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceName.Malformed',
            'errorMessage' => 'The Specified parameter InstanceName is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPassword.Malformed',
            'errorMessage' => 'The Specified parameter NewPassword is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'TaskExists',
            'errorMessage' => 'Specified task have existed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76\\"\\n}","errorExample":"{\\n  \\"RequestId\\":\\"EFC9161F-15E3-4A6E-8A99-C09916D1F464\\"\\n}"},{"type":"xml","example":"<ModifyInstanceAttributeResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyInstanceAttributeResponse>","errorExample":"<ModifyInstanceAttributeResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyInstanceAttributeResponse>"}]',
      'title' => '修改实例部分信息',
      'summary' => '修改一台实例的部分信息，包括实例密码、名称。',
      'description' => '该API对应的控制台操作请参见[修改密码](~~43874~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源组ID。

> * 您可以通过调用[ListResourceGroups](~~158855~~)接口或通过控制台获取资源组ID列表。相关操作，请参见[查看资源组基本信息](~~151181~~)。
> * 修改实例所属的资源组之前，您可以调用[ListResources](~~158866~~)接口查看实例现在所属的资源组。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
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
            'errorMessage' => 'The Specified resource group id is not found.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceAccount.NoPermission',
            'errorMessage' => 'Service account has no auth to do this action.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Resource',
            'errorMessage' => 'The resource does not EXIST.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyResourceGroupResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</ModifyResourceGroupResponse>","errorExample":""}]',
      'title' => '修改实例所属资源组',
      'summary' => '修改Redis实例所属的资源组。',
      'description' => '资源组（Resource Group）是在阿里云账号下进行资源分组管理的一种机制，资源组能够帮助您解决单个阿里云账号内的资源分组和授权管理的复杂性问题。更多信息，请参见[什么是资源管理](~~94475~~)。
> 更多关于资源组的接口调用说明，请参见[资源管理API概览](~~160024~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceMaintainTime' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaintainStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可维护时间段的开始时间，格式为<i>HH:mm</i>Z（UTC时间）。例如，需要在北京时间凌晨1点开始，应设置为`17:00Z`。调用该接口后，您可以到控制台查看实际时间，详情请参见[设置可维护时间段](~~55252~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '03:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'MaintainEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可维护时间段的结束时间，格式为<i>HH:mm</i>Z（UTC时间）。例如，需要在北京时间凌晨2点结束，应设置为`18:00Z`。

> 开始时间和结束时间的间隔不能低于1小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '04:00Z',
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
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidEndTime.Format',
            'errorMessage' => 'Specified end time is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76\\"\\n}"},{"type":"xml","example":"<ModifyInstanceMaintainTimeResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyInstanceMaintainTimeResponse>","errorExample":"<ModifyInstanceMaintainTimeResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyInstanceMaintainTimeResponse>"}]',
      'title' => '修改可维护时间段',
      'summary' => '修改Redis实例的可维护时间段，阿里云将在您设定的可维护时间段内对Redis实例进行例行维护。',
      'description' => '该API对应的控制台操作请参见[设置可维护时间段](~~55252~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceMajorVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'MajorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级实例版本。
- <props="china">云原生版</props><props="intl">云盘版</props>实例可升级的大版本取值：6.0或7.0。
- <props="china">经典版</props><props="intl">本地盘版</props>实例可升级的大版本取值：4.0（不推荐）或5.0。
> 仅支持升级至相同部署模式。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5.0',
          ),
        ),
        2 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级执行时间，取值：
* **Immediately**：立即执行，默认值。
* **MaintainTime**：在可维护时间段执行。

> 您可以调用[ModifyInstanceMaintainTime](~~61000~~)修改Redis实例的可维护时间段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => 'Immediately',
              3 => 'MaintainTime',
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
                'example' => 'AA587FB2-2593-4DFE-BE13-2494C2DF****',
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
            'errorCode' => 'NoQuota',
            'errorMessage' => 'Request zone has no quota to sell.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AA587FB2-2593-4DFE-BE13-2494C2DF****\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"AA587FB2-2593-4DFE-BE13-2494C2DF0CBF\\"\\n}"},{"type":"xml","example":"<ModifyInstanceMajorVersionResponse>  \\n    <RequestId>AA587FB2-2593-4DFE-BE13-2494C2DF****</RequestId>\\n</ModifyInstanceMajorVersionResponse>","errorExample":"<ModifyInstanceMajorVersionResponse>  \\n    <RequestId>AA587FB2-2593-4DFE-BE13-2494C2DF0CBF</RequestId>\\n</ModifyInstanceMajorVersionResponse>"}]',
      'title' => '升级大版本',
      'summary' => '升级Redis实例的大版本。',
      'description' => '该API对应的控制台操作请参见[升级大版本](~~101764~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceMinorVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Minorversion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要升级到的小版本，默认值：**latest_version**，即最新版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'latest_version',
            'default' => 'latest_version',
          ),
        ),
        2 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级执行时间，取值：
* **Immediately**：立即执行，默认值。
* **MaintainTime**：在可维护时间段执行。

> 您可以调用[ModifyInstanceMaintainTime](~~61000~~)修改Redis实例的可维护时间段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => 'Immediately',
              3 => 'MaintainTime',
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
                'example' => '28761557-0B33-41DF-AEEB-322DFF96****',
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
            'errorCode' => 'NoQuota',
            'errorMessage' => 'Request zone has no quota to sell.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"28761557-0B33-41DF-AEEB-322DFF96****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceMinorVersionResponse>\\r\\n    <RequestId>28761557-0B33-41DF-AEEB-322DFF96****</RequestId>\\r\\n</ModifyInstanceMinorVersionResponse>","errorExample":""}]',
      'title' => '升级小版本',
      'summary' => '升级Redis实例的小版本。',
      'description' => '不同的架构在升级时所采取的流程有所区别，详细介绍，请参见[小版本升级原理](~~56450~~)。

> * 调用本接口前，您可以调用[DescribeEngineVersion](~~95268~~)查询实例当前的小版本。
> * 在实例切换或主备切换阶段，实例将存在60秒以内的只读状态（等待数据完全同步），同时会发生秒级的连接闪断，请在业务低峰期进行升级，并确保应用程序具备重连机制。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDBInstanceAutoUpgrade' => 
    array (
      'summary' => '修改小版本自动升级开关',
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
            'description' => '实例ID，可调用DescribeDBInstances获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '小版本自动升级开关，取值：
* **1**：开启。
* **0**：关闭。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              0 => '0',
              1 => '1',
            ),
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
                'example' => '2FF6158E-3394-4A90-B634-79C49184****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FF6158E-3394-4A90-B634-79C49184****\\"\\n}","type":"json"}]',
      'title' => '修改小版本自动升级开关',
    ),
    'DescribeInstancesOverview' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~61012~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的实例ID。
> 默认查询该账号下所有实例。如需传入多个实例ID时，使用英文逗号（,）分隔实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态，取值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。

> 更多实例状态及详细信息，请参见[实例状态与影响](~~200740~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
* **PrePaid**：预付费，即包年包月。
* **PostPaid**：后付费，即按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
              2 => 'dhgpay',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型，取值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'CLASSIC',
            'enum' => 
            array (
              0 => 'CLASSIC',
              1 => 'VPC',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">Redis实例的引擎版本，返回值：**2.8**、**4.0**、**5.0**、**6.0**或**7.0**。</props>

<props="intl">Redis实例的引擎版本，返回值：**2.8**、**4.0**、**5.0**或**6.0**。</props>',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '4.0' => '4.0',
              '5.0' => '5.0',
              '6.0' => '6.0',
              '7.0' => '7.0',
              '2.8' => '2.8',
            ),
            'example' => '6.0',
            'enum' => 
            array (
              0 => '1.0',
              1 => '2.8',
              2 => '4.0',
              3 => '5.0',
              4 => '6.0',
              5 => '7.0',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，请参见[实例规格表](~~107984~~)。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
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
* **Tair**。
* **Redis**。
* **Memcache**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redis',
            'default' => 'Redis',
            'enum' => 
            array (
              0 => 'Redis',
              1 => 'Memcache',
              2 => 'tair_essd',
              3 => 'tair_scm',
              4 => 'tair_rdb',
              5 => 'Tair',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基于实例ID或者实例备注模糊搜索时使用的关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'apitest',
          ),
        ),
        11 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '架构类型，取值：
* **cluster**：集群版。
* **standard**：标准版。
* **rwsplit**：读写分离版。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
          ),
        ),
        12 => 
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
        13 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
> 您可以通过调用[ListResourceGroups](~~158855~~)接口或通过控制台获取资源组ID列表。相关操作，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        14 => 
        array (
          'name' => 'EditionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
* **Community**：社区版。
* **Enterprise**：企业版。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enterprise',
            'enum' => 
            array (
              0 => 'Enterprise',
              1 => 'Community',
            ),
          ),
        ),
        15 => 
        array (
          'name' => 'PrivateIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.49.***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E83311F-0EE4-4922-A3BF-730B312B****',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'description' => '由Instance（实例）组成的数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1nme44gek34slfc****',
                    ),
                    'PrivateIp' => 
                    array (
                      'description' => '专有网络IP地址，IP地址可能会发生变化，请通过ConnectionDomain（内网连接地址）进行连接。
> - 实例的网络类型为经典网络时，不会返回本参数。
> - 云盘版实例不会返回该参数。',
                      'type' => 'string',
                      'example' => '172.16.49.***',
                    ),
                    'Capacity' => 
                    array (
                      'description' => '实例容量， 单位：MB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4096',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例的创建时间。',
                      'type' => 'string',
                      'example' => '2018-11-07T08:49:00Z',
                    ),
                    'ConnectionDomain' => 
                    array (
                      'description' => '实例的内网连接地址。',
                      'type' => 'string',
                      'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费类型，取值：
* **PrePaid**：预付费，即包年包月。
* **PostPaid**：后付费，即按量付费。',
                      'type' => 'string',
                      'example' => 'PrePaid',
                    ),
                    'ArchitectureType' => 
                    array (
                      'description' => '架构类型，取值：
* **cluster**：集群版。
* **standard**：标准版。
* **rwsplit**：读写分离版。',
                      'type' => 'string',
                      'example' => 'cluster',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '网络类型，取值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
                      'type' => 'string',
                      'example' => 'CLASSIC',
                    ),
                    'EngineVersion' => 
                    array (
                      'description' => '<props="china">Redis实例的引擎版本，返回值：**2.8**、**4.0**、**5.0**、**6.0**或**7.0**。</props>

<props="intl">Redis实例的引擎版本，返回值：**2.8**、**4.0**、**5.0**或**6.0**。</props>',
                      'type' => 'string',
                      'example' => '6.0',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例的名称。',
                      'type' => 'string',
                      'example' => 'apitest',
                    ),
                    'GlobalInstanceId' => 
                    array (
                      'description' => '分布式实例ID。
> 当实例为分布式实例中的子实例时，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'gr-bp14rkqrhac****',
                    ),
                    'InstanceClass' => 
                    array (
                      'description' => '实例的规格。',
                      'type' => 'string',
                      'example' => 'redis.logic.sharding.2g.2db.0rodb.4proxy.default',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'r-bp1zxszhcgatnx****',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型，取值：
* **Tair**。
* **Redis**。
* **Memcache**。',
                      'type' => 'string',
                      'example' => 'Redis',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '包年包月实例到期时间。',
                      'type' => 'string',
                      'example' => '2022-06-13T16:00:00Z',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '虚拟交换机的ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1e7clcw529l773d****',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '实例所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmyiu4ekp****',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-b',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '实例状态，取值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'SecondaryZoneId' => 
                    array (
                      'description' => '备可用区ID。
> 当实例存在备可用区ID时，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-g',
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
            'errorCode' => 'InvalidInstanceIds.Malformed',
            'errorMessage' => 'The Specified parameter InstanceIds is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E83311F-0EE4-4922-A3BF-730B312B****\\",\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1nme44gek34slfc****\\",\\n      \\"PrivateIp\\": \\"172.16.49.***\\",\\n      \\"Capacity\\": 4096,\\n      \\"CreateTime\\": \\"2018-11-07T08:49:00Z\\",\\n      \\"ConnectionDomain\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n      \\"ChargeType\\": \\"PrePaid\\",\\n      \\"ArchitectureType\\": \\"cluster\\",\\n      \\"NetworkType\\": \\"CLASSIC\\",\\n      \\"EngineVersion\\": \\"6.0\\",\\n      \\"InstanceName\\": \\"apitest\\",\\n      \\"GlobalInstanceId\\": \\"gr-bp14rkqrhac****\\",\\n      \\"InstanceClass\\": \\"redis.logic.sharding.2g.2db.0rodb.4proxy.default\\",\\n      \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n      \\"InstanceType\\": \\"Redis\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"EndTime\\": \\"2022-06-13T16:00:00Z\\",\\n      \\"VSwitchId\\": \\"vsw-bp1e7clcw529l773d****\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n      \\"InstanceStatus\\": \\"Normal\\",\\n      \\"SecondaryZoneId\\": \\"cn-hangzhou-g\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesOverviewResponse>\\n    <Instances>\\n        <ArchitectureType>cluster</ArchitectureType>\\n        <Capacity>32768</Capacity>\\n        <ChargeType>PrePaid</ChargeType>\\n        <ConnectionDomain>r-bp1d****letsgv****.tairpena.rds.aliyuncs.com</ConnectionDomain>\\n        <CreateTime>2021-11-11T06:52:52Z</CreateTime>\\n        <EndTime>2021-12-11T16:00:00Z</EndTime>\\n        <EngineVersion>1.0</EngineVersion>\\n        <InstanceClass>tair.scm.cluster.sharding.common.ce</InstanceClass>\\n        <InstanceId>r-bp1d****letsgv****</InstanceId>\\n        <InstanceName>aep***-pull-cluster</InstanceName>\\n        <InstanceStatus>Normal</InstanceStatus>\\n        <InstanceType>tair_scm</InstanceType>\\n        <NetworkType>VPC</NetworkType>\\n        <PrivateIp>172.16.*.*</PrivateIp>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ResourceGroupId>rg-acfm22c********</ResourceGroupId>\\n        <VSwitchId>vsw-bp1p9le7ibusm********</VSwitchId>\\n        <VpcId>vpc-bp1jk5vwkcri2********</VpcId>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n    </Instances>\\n    <RequestId>E9848396-E363-5ECE-94D2-E0CF993*****</RequestId>\\n    <TotalCount>1</TotalCount>\\n</DescribeInstancesOverviewResponse>","errorExample":""}]',
      'title' => '查询实例概览',
      'summary' => '查询一个或多个Redis实例的信息概览。',
      'description' => '若您未指定请求参数，将返回所有实例的信息概览。
> 该接口返回结果均无分页。',
    ),
    'DescribeInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '56409',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreZ21KYW',
          3 => 'FEATUREkvstoreDER7E8',
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
            'description' => '实例所属的地域ID。

> 调用本接口时，如果传入了**Tag**参数，则本参数必须传入。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的实例ID。
> 如需传入多个实例ID时，使用英文逗号（,）分隔实例ID，最多一个请求传入 30 个实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态，取值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。

> 更多实例状态及详细信息，请参见[实例状态与影响](~~200740~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
* **PrePaid**：预付费，即包年包月。
* **PostPaid**：后付费，即按量付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络类型，取值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'CLASSIC',
            'enum' => 
            array (
              0 => 'CLASSIC',
              1 => 'VPC',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">Redis实例的引擎版本，取值：**2.8**、**4.0**、**5.0**或**6.0**。</props>

<props="intl">Redis实例的引擎版本，取值：**2.8**、**4.0**或**5.0**。</props>

<props="partner">Redis实例的引擎版本，取值：**2.8**、**4.0**或**5.0**。</props>',
            'type' => 'string',
            'required' => false,
            'example' => '4.0',
            'enum' => 
            array (
              0 => '1.0',
              1 => '2.8',
              2 => '4.0',
              3 => '5.0',
              4 => '6.0',
              5 => '7.0',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格，请参见[实例规格表](~~107984~~)。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表的页码，起始值为**1**，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最多可显示的行数，最大值为**50**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '30',
            'default' => '30',
          ),
        ),
        11 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
* **Tair**。
* **Redis**。
* **Memcache**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redis',
            'default' => 'Redis',
            'enum' => 
            array (
              0 => 'Redis',
              1 => 'Memcache',
              2 => 'tair_essd',
              3 => 'tair_scm',
              4 => 'Tair',
              5 => 'tair_rdb',
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持模糊搜索实例名称或实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'apitest',
          ),
        ),
        13 => 
        array (
          'name' => 'ArchitectureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '架构类型，取值：
* **cluster**：集群版。
* **standard**：标准版。
* **rwsplit**：读写分离版。',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
          ),
        ),
        14 => 
        array (
          'name' => 'Expired',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的过期状态，取值：

* **true**：已过期。
* **false**：未过期。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hongkong-b',
          ),
        ),
        16 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。
> 您可以通过调用[ListResourceGroups](~~158855~~)接口或通过控制台获取资源组ID列表。相关操作，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        17 => 
        array (
          'name' => 'GlobalInstance',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回的实例列表中，是否过滤分布式实例中的子实例，取值：
* **true**：只返回子实例信息。
* **false**：不返回子实例信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        18 => 
        array (
          'name' => 'EditionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：
* **Community**：社区版。
* **Enterprise**：企业版。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enterprise',
            'enum' => 
            array (
              0 => 'Enterprise',
              1 => 'Community',
            ),
          ),
        ),
        19 => 
        array (
          'name' => 'PrivateIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '172.16.49.***',
          ),
        ),
        20 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键，与Tag Value组成标签的键值对。
> 单次最多支持传入5组标签的键值对。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '存储类型',
                ),
                'Value' => 
                array (
                  'description' => '标签键的值，与Tag Key组成标签的键值对。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '开发',
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
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E83311F-0EE4-4922-A3BF-730B312B****',
              ),
              'PageNumber' => 
              array (
                'description' => '实例列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '输入时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '实例总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KVStoreInstance' => 
                  array (
                    'description' => '由Instance组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络（VPC）的ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1nme44gek34slfc****',
                        ),
                        'PrivateIp' => 
                        array (
                          'description' => '专有网络IP地址。
> 实例的网络类型为经典网络时，不会返回本参数。',
                          'type' => 'string',
                          'example' => '172.16.49.***',
                        ),
                        'Capacity' => 
                        array (
                          'description' => '实例容量， 单位：MB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4096',
                        ),
                        'ReplacateId' => 
                        array (
                          'description' => '多活实例的逻辑ID。',
                          'type' => 'string',
                          'example' => 'grr-bp11381ebc16****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '实例的创建时间。',
                          'type' => 'string',
                          'example' => '2018-11-07T08:49:00Z',
                        ),
                        'ConnectionDomain' => 
                        array (
                          'description' => '实例的内网连接地址。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
                        ),
                        'IsRds' => 
                        array (
                          'description' => '是否属RDS管控，返回值：
* **true**：是。
* **false**：否。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '付费类型，返回值：
* **PrePaid**：预付费。
* **PostPaid**：后付费。',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'ArchitectureType' => 
                        array (
                          'description' => '架构类型，返回值：
* **cluster**：集群版。
* **standard**：标准版。
* **rwsplit**：读写分离版。
* **NULL**：所有类型，默认值。 ',
                          'type' => 'string',
                          'example' => 'cluster',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型，返回值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
                          'type' => 'string',
                          'example' => 'CLASSIC',
                        ),
                        'ConnectionMode' => 
                        array (
                          'description' => '实例的访问模式，返回值：
* **Standard**：标准访问模式。
* **Safe**：数据库代理模式。',
                          'type' => 'string',
                          'example' => 'Standard',
                        ),
                        'Port' => 
                        array (
                          'description' => 'Redis服务端口。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6379',
                        ),
                        'SecondaryZoneId' => 
                        array (
                          'description' => '备可用区ID。
> 若**ZoneId**参数已返回多可用区，例如"cn-hangzhou-MAZ10(h,i)"，本参数将不返回备可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-h',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '<props="china">Redis实例的引擎版本，返回值：**2.8**、**4.0**、**5.0**或**6.0**。</props>

<props="intl">Redis实例的引擎版本，返回值：**2.8**、**4.0**或**5.0**。</props>

<props="partner">Redis实例的引擎版本，返回值：**2.8**、**4.0**或**5.0**。</props>',
                          'type' => 'string',
                          'example' => '4.0',
                        ),
                        'PackageType' => 
                        array (
                          'description' => '套餐类型，返回值：
* **standard**：标准套餐。
* **customized**：定制套餐。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'Config' => 
                        array (
                          'description' => '实例的参数设置情况，详情请参见[参数设置](~~43885~~)。',
                          'type' => 'string',
                          'example' => '{\\"maxmemory-policy\\":\\"volatile-lfu\\",\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64,\\"#no_loose_disabled-commands\\":\\"flushall,flushdb\\",\\"lazyfree-lazy-eviction\\":\\"yes\\"}',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '实例带宽，单位：MB/s。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '96',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例的名称。',
                          'type' => 'string',
                          'example' => 'apitest',
                        ),
                        'ShardCount' => 
                        array (
                          'description' => '集群的数据节点数。
> 云原生版集群或读写分离架构实例才会返回本参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'UserName' => 
                        array (
                          'description' => '连接使用的用户名，默认包含有一个以实例ID命名的用户名。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****',
                        ),
                        'GlobalInstanceId' => 
                        array (
                          'description' => '分布式实例ID。
> 当实例为分布式实例中的子实例时，才会返回该参数。',
                          'type' => 'string',
                          'example' => 'gr-bp14rkqrhac****',
                        ),
                        'QPS' => 
                        array (
                          'description' => '每秒请求数（Queries per Second）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100000',
                        ),
                        'InstanceClass' => 
                        array (
                          'description' => '实例的规格。',
                          'type' => 'string',
                          'example' => 'redis.logic.sharding.2g.2db.0rodb.4proxy.default',
                        ),
                        'DestroyTime' => 
                        array (
                          'description' => '销毁实例的时间。',
                          'type' => 'string',
                          'example' => '2019-04-28T10:03:01Z',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例的ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => '实例类型，返回值：
* **Tair**。
* **Redis**。
* **Memcache**。',
                          'type' => 'string',
                          'example' => 'Redis',
                        ),
                        'HasRenewChangeOrder' => 
                        array (
                          'description' => '是否有未生效的续费变配订单，返回值：
* **true**：是。
* **false**：否。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '包年包月实例到期时间。',
                          'type' => 'string',
                          'example' => '2019-06-13T16:00:00Z',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '虚拟交换机的ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1e7clcw529l773d****',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值：
* **double**：双副本。
* **single**：单副本（已下线）。',
                          'type' => 'string',
                          'example' => 'double',
                        ),
                        'Connections' => 
                        array (
                          'description' => '实例的连接数限制。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所属的资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'InstanceStatus' => 
                        array (
                          'description' => '实例状态，返回值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'ComputingType' => 
                        array (
                          'description' => '实例计算类型，返回值:

- **Ecs**: 云原生
- **Machine**: 物理机',
                          'type' => 'string',
                          'example' => 'Ecs',
                        ),
                        'CloudType' => 
                        array (
                          'description' => '仅云盒实例显示该参数。',
                          'type' => 'string',
                          'example' => 'cloudbox',
                        ),
                        'EditionType' => 
                        array (
                          'description' => '实例类型，取值：
- **Community**：社区版。
- **Enterprise**：企业版。',
                          'type' => 'string',
                          'example' => 'Enterprise',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '对象。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => 'Tag的Key。',
                                    'type' => 'string',
                                    'example' => 'key1',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => 'Tag的Value。',
                                    'type' => 'string',
                                    'example' => 'value1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ShardClass' => 
                        array (
                          'description' => '数据分片节点规格，规格详情请参见[规格查询导航](~~26350~~)。
> 集群架构实例的整体性能为：分片节点规格（ShardClass） * 分片数（ShardCount）。',
                          'type' => 'string',
                          'example' => 'redis.shard.small.ce',
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
            'errorCode' => 'InvalidInstanceIds.Malformed',
            'errorMessage' => 'The Specified parameter InstanceIds is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E83311F-0EE4-4922-A3BF-730B312B****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": {\\n    \\"KVStoreInstance\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp1nme44gek34slfc****\\",\\n        \\"PrivateIp\\": \\"172.16.49.***\\",\\n        \\"Capacity\\": 4096,\\n        \\"ReplacateId\\": \\"grr-bp11381ebc16****\\",\\n        \\"CreateTime\\": \\"2018-11-07T08:49:00Z\\",\\n        \\"ConnectionDomain\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n        \\"IsRds\\": true,\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"ArchitectureType\\": \\"cluster\\",\\n        \\"NetworkType\\": \\"CLASSIC\\",\\n        \\"ConnectionMode\\": \\"Standard\\",\\n        \\"Port\\": 6379,\\n        \\"SecondaryZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"EngineVersion\\": \\"4.0\\",\\n        \\"PackageType\\": \\"standard\\",\\n        \\"Config\\": \\"{\\\\\\\\\\\\\\"maxmemory-policy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lfu\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"EvictionPolicy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lru\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hash-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"zset-max-ziplist-entries\\\\\\\\\\\\\\":128,\\\\\\\\\\\\\\"zset-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"set-max-intset-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"hash-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"#no_loose_disabled-commands\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"flushall,flushdb\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"lazyfree-lazy-eviction\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"yes\\\\\\\\\\\\\\"}\\",\\n        \\"Bandwidth\\": 96,\\n        \\"InstanceName\\": \\"apitest\\",\\n        \\"ShardCount\\": 3,\\n        \\"UserName\\": \\"r-bp1zxszhcgatnx****\\",\\n        \\"GlobalInstanceId\\": \\"gr-bp14rkqrhac****\\",\\n        \\"QPS\\": 100000,\\n        \\"InstanceClass\\": \\"redis.logic.sharding.2g.2db.0rodb.4proxy.default\\",\\n        \\"DestroyTime\\": \\"2019-04-28T10:03:01Z\\",\\n        \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n        \\"InstanceType\\": \\"Redis\\",\\n        \\"HasRenewChangeOrder\\": false,\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"EndTime\\": \\"2019-06-13T16:00:00Z\\",\\n        \\"VSwitchId\\": \\"vsw-bp1e7clcw529l773d****\\",\\n        \\"NodeType\\": \\"double\\",\\n        \\"Connections\\": 20000,\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"InstanceStatus\\": \\"Normal\\",\\n        \\"ComputingType\\": \\"Ecs\\",\\n        \\"CloudType\\": \\"cloudbox\\",\\n        \\"EditionType\\": \\"Enterprise\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"key1\\",\\n              \\"Value\\": \\"value1\\"\\n            }\\n          ]\\n        },\\n        \\"ShardClass\\": \\"redis.shard.small.ce\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n   \\"PageNumber\\":1,\\n   \\"TotalCount\\":38,\\n   \\"PageSize\\":10,\\n   \\"RequestId\\":\\"9099BAE9-BE8A-4B25-8E96-3C22289C70A6\\",\\n   \\"Instances\\":{\\n       \\"KVStoreInstance\\":[\\n           {\\n               \\"Config\\":\\"{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"list-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"hash-max-ziplist-entries\\":512,\\"hash-max-ziplist-value\\":64,\\"list-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"zset-max-ziplist-value\\":64}\\",\\n               \\"HasRenewChangeOrder\\":false,\\n               \\"InstanceId\\":\\"r-xxxxxxxxxxxxxxx\\",\\n               \\"UserName\\":\\"r-xxxxxxxxxxxxxxx\\",\\n               \\"ZoneId\\":\\"cn-hangzhou-g\\",\\n               \\"ArchitectureType\\":\\"standard\\",\\n               \\"NetworkType\\":\\"Classic\\",\\n               \\"QPS\\":100000,\\n               \\"PackageType\\":\\"standard\\",\\n               \\"IsRds\\":true,\\n               \\"ConnectionDomain\\":\\"r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com\\",\\n               \\"EngineVersion\\":\\"2.8\\",\\n               \\"InstanceName\\":\\"zhai_test\\",\\n               \\"ReplacateId\\":\\"bls-xxxxxxxxxxxxxxx\\",\\n               \\"Bandwidth\\":16,\\n               \\"ChargeType\\":\\"PostPaid\\",\\n               \\"InstanceType\\":\\"Redis\\",\\n               \\"InstanceStatus\\":\\"Normal\\",\\n               \\"Port\\":6379,\\n               \\"InstanceClass\\":\\"redis.master.mid.default\\",\\n               \\"RegionId\\":\\"cn-hangzhou\\",\\n               \\"CreateTime\\":\\"2018-10-10T04:19:01Z\\",\\n               \\"NodeType\\":\\"double\\",\\n               \\"Capacity\\":2048,\\n               \\"Connections\\":10000\\n           }\\n       ]\\n   }\\n}"},{"type":"xml","example":"<DescribeInstancesResponse>\\r\\n    <Instances>\\r\\n        <KVStoreInstance>\\r\\n            <Connections>10000</Connections>\\r\\n            <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\r\\n            <Config>{&quot;EvictionPolicy&quot;:&quot;volatile-lru&quot;,&quot;hash-max-ziplist-entries&quot;:512,&quot;zset-max-ziplist-entries&quot;:128,&quot;list-max-ziplist-entries&quot;:512,&quot;list-max-ziplist-value&quot;:64,&quot;zset-max-ziplist-value&quot;:64,&quot;set-max-intset-entries&quot;:512,&quot;hash-max-ziplist-value&quot;:64}</Config>\\r\\n            <Port>6379</Port>\\r\\n            <HasRenewChangeOrder>false</HasRenewChangeOrder>\\r\\n            <ConnectionDomain>r-bp1wcw2rlw76acc5k****.redis.rds.aliyuncs.com</ConnectionDomain>\\r\\n            <Capacity>1024</Capacity>\\r\\n            <QPS>80000</QPS>\\r\\n            <PrivateIp>172.16.49.***</PrivateIp>\\r\\n            <InstanceStatus>Normal</InstanceStatus>\\r\\n            <NetworkType>VPC</NetworkType>\\r\\n            <Bandwidth>10</Bandwidth>\\r\\n            <PackageType>standard</PackageType>\\r\\n            <InstanceType>Redis</InstanceType>\\r\\n            <Tags>\\r\\n                <Tag>\\r\\n                    <Value>社区版</Value>\\r\\n                    <Key>类型</Key>\\r\\n                </Tag>\\r\\n            </Tags>\\r\\n            <ArchitectureType>standard</ArchitectureType>\\r\\n            <UserName>r-bp1wcw2rlw76ac****</UserName>\\r\\n            <EngineVersion>5.0</EngineVersion>\\r\\n            <ZoneId>cn-hangzhou-f</ZoneId>\\r\\n            <InstanceId>r-bp1wcw2rlw76ac****</InstanceId>\\r\\n            <VSwitchId>vsw-bp1w9ouei2nm66qlz****</VSwitchId>\\r\\n            <CreateTime>2020-03-31T06:56:22Z</CreateTime>\\r\\n            <InstanceClass>redis.master.small.default</InstanceClass>\\r\\n            <IsRds>true</IsRds>\\r\\n            <InstanceName>社区主从50</InstanceName>\\r\\n            <VpcId>vpc-bp1opxu1zkhn00gzv****</VpcId>\\r\\n            <ChargeType>PostPaid</ChargeType>\\r\\n            <NodeType>double</NodeType>\\r\\n            <RegionId>cn-hangzhou</RegionId>\\r\\n        </KVStoreInstance>\\r\\n    </Instances>\\r\\n    <TotalCount>1</TotalCount>\\r\\n    <RequestId>78DDAA9A-B09E-4BE0-AEAE-10A22924****</RequestId>\\r\\n    <PageSize>30</PageSize>\\r\\n    <PageNumber>1</PageNumber>\\r\\n</DescribeInstancesResponse>","errorExample":"<DescribeInstancesResponse>\\n <PageNumber>1</PageNumber>\\n <TotalCount>38</TotalCount>\\n <PageSize>10</PageSize>\\n <RequestId>9099BAE9-BE8A-4B25-8E96-3C22289C70A6</RequestId>\\n <Instances>\\n   <KVStoreInstance>\\n     <Config>{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"list-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"hash-max-ziplist-entries\\":512,\\"hash-max-ziplist-value\\":64,\\"list-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"zset-max-ziplist-value\\":64}</Config>\\n     <HasRenewChangeOrder>false</HasRenewChangeOrder>\\n     <InstanceId>r-xxxxxxxxxxxxxxx</InstanceId>\\n     <UserName>r-xxxxxxxxxxxxxxx</UserName>\\n     <ZoneId>cn-hangzhou-g</ZoneId>\\n     <ArchitectureType>standard</ArchitectureType>\\n     <NetworkType>Classic</NetworkType>\\n     <QPS>100000</QPS>\\n     <PackageType>standard</PackageType>\\n     <IsRds>true</IsRds>\\n     <ConnectionDomain>r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com</ConnectionDomain>\\n     <EngineVersion>2.8</EngineVersion>\\n     <InstanceName>zhai_test</InstanceName>\\n     <ReplacateId>bls-xxxxxxxxxxxxxxx</ReplacateId>\\n     <Bandwidth>16</Bandwidth>\\n     <ChargeType>PostPaid</ChargeType>\\n     <InstanceType>Redis</InstanceType>\\n     <InstanceStatus>Normal</InstanceStatus>\\n     <Port>6379</Port>\\n    <InstanceClass>redis.master.mid.default</InstanceClass>\\n     <RegionId>cn-hangzhou</RegionId>\\n     <CreateTime>2018-10-10T04:19:01Z</CreateTime>\\n     <NodeType>double</NodeType>\\n     <Capacity>2048</Capacity>\\n     <Connections>10000</Connections>\\n   </KVStoreInstance>\\n </Instances>\\n</DescribeInstancesResponse>"}]',
      'title' => '查询实例的列表信息',
      'summary' => '查询一个或多个Redis实例的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDedicatedClusterInstanceList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
            'description' => '地域ID，您可以调用[DescribeRegions](~~61012~~)查询。',
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
            'description' => '可用区ID，您可以调用[DescribeZones](~~94527~~)查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 该实例必须是通过专属集群创建的，更多信息，请参见[云数据库专属集群MyBase](~~141455~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态，取值：
* **0**：创建中。
* **1**：运行中。
* **3**：删除中。
* **5**：变配中。
* **6**：迁移中。
* **7**：备份恢复中。
* **8**：切换中。
* **9**：删除过期数据。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceNetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例连接地址的网络类型，取值：
* **0**：公网。
* **1**：经典网络。
* **2**：专有网络VPC。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值固定为**Redis**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redis',
            'default' => 'Redis',
            'enum' => 
            array (
              0 => 'Redis',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库版本号，取值固定为**5.0**。',
            'type' => 'string',
            'required' => false,
            'example' => '5.0',
            'enum' => 
            array (
              0 => '5.0',
              1 => '6.0',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专属集群ID，可在专属集群控制台的专属集群信息页获取。
> 如需传入多个，ID间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'dhg-5f2v98840ioq****',
          ),
        ),
        8 => 
        array (
          'name' => 'DedicatedHostName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专属集群的主机ID，可调用[DescribeDedicatedHosts](~~200944~~)获取。
> 如需传入多个，ID间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'ch-t4n664a9mal4c****',
          ),
        ),
        9 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的最大记录数，取值：**30**、**50**、**100**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'enum' => 
            array (
              0 => '30',
              1 => '50',
              2 => '100',
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
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页可展示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '25',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '712CCF2A-16BD-411B-93F7-E978BEF2****',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Instances' => 
              array (
                'description' => '实例信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '专有网络VPC ID。',
                      'type' => 'string',
                      'example' => 'vpc-t4n2clc70t3hqwsrr****',
                    ),
                    'CharacterType' => 
                    array (
                      'description' => '架构类型，返回值：
* **logic**：集群架构。
* **normal**：标准架构。',
                      'type' => 'string',
                      'example' => 'logic',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '虚拟交换机ID。',
                      'type' => 'string',
                      'example' => 'vsw-t4nvrca24dczppq44****',
                    ),
                    'InstanceClass' => 
                    array (
                      'description' => '实例规格。',
                      'type' => 'string',
                      'example' => 'redis.cluster.sharding.common.ce',
                    ),
                    'MaintainStartTime' => 
                    array (
                      'description' => '可维护时间段的开始时间，格式为<i>HH:mm</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '16:00Z',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例的创建时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-05-06T07:09:40Z',
                    ),
                    'ConnectionDomain' => 
                    array (
                      'description' => '直连地址。',
                      'type' => 'string',
                      'example' => 'r-t4ncdi1dgi0ja8****.redis.hangzhou.rds.aliyuncs.com',
                    ),
                    'MaintainEndTime' => 
                    array (
                      'description' => '可维护时间段的结束时间，格式为<i>HH:mm</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '17:00Z',
                    ),
                    'StorageType' => 
                    array (
                      'description' => '存储类型，返回值固定为LOCAL_SSD（[ESSD云盘](~~122389~~)）。',
                      'type' => 'string',
                      'example' => 'LOCAL_SSD',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'r-bp1e7vl6ygf1yq****',
                    ),
                    'BandWidth' => 
                    array (
                      'description' => '实例的默认带宽，单位为MB/s。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '24',
                    ),
                    'CurrentBandWidth' => 
                    array (
                      'description' => '实例当前的带宽，单位为MB/s，由默认带宽和增加的带宽组成。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '50',
                    ),
                    'EngineVersion' => 
                    array (
                      'description' => '数据库版本，返回值固定为**5.0**。',
                      'type' => 'string',
                      'example' => '5.0',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'testdb',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-e',
                    ),
                    'ClusterName' => 
                    array (
                      'description' => '专属集群名称。',
                      'type' => 'string',
                      'example' => 'testname',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '实例状态，返回值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Engine' => 
                    array (
                      'description' => '数据库类型，返回值固定为**redis**。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'ShardCount' => 
                    array (
                      'description' => '数据分片数量。
> 仅当Redis实例为[集群架构](~~52228~~)时，才会返回本参数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'CustomId' => 
                    array (
                      'description' => '内部参数，维护实例使用。',
                      'type' => 'string',
                      'example' => '4652****',
                    ),
                    'ProxyCount' => 
                    array (
                      'description' => '代理节点数量。

> * 返回值为**0**时，表示实例未开启代理模式；返回值为大于**0**的整数时（例如**1**），表示实例已开启代理模式。
> * 仅当Redis实例为[集群架构](~~52228~~)时，才会返回本参数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '专属集群ID。',
                      'type' => 'string',
                      'example' => 'dhg-rx71fc5ndh9o****',
                    ),
                    'InstanceNodeList' => 
                    array (
                      'description' => '节点信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'NodeIp' => 
                          array (
                            'description' => '节点IP地址。',
                            'type' => 'string',
                            'example' => '10.0.33.***',
                          ),
                          'DedicatedHostName' => 
                          array (
                            'description' => '专属集群的主机ID。',
                            'type' => 'string',
                            'example' => 'ch-bp13vf0y9gx3c****',
                          ),
                          'NodeType' => 
                          array (
                            'description' => '节点类型，返回值：
* **db**：数据节点。
* **proxy**：代理节点。
* **normal**：普通节点（标准架构的实例会返回该值）。',
                            'type' => 'string',
                            'example' => 'normal',
                          ),
                          'ZoneId' => 
                          array (
                            'description' => '节点所属的可用区。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou-h',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => 'Redis实例ID。',
                            'type' => 'string',
                            'example' => 'r-bp1e7vl6ygf1yq****',
                          ),
                          'Port' => 
                          array (
                            'description' => '节点的端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3001',
                          ),
                          'Role' => 
                          array (
                            'description' => '节点角色，返回值：
* **master**：主节点。
* **slave**：从节点。',
                            'type' => 'string',
                            'example' => 'master',
                          ),
                          'NodeId' => 
                          array (
                            'description' => '节点ID。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '17921111',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 25,\\n  \\"RequestId\\": \\"712CCF2A-16BD-411B-93F7-E978BEF2****\\",\\n  \\"TotalCount\\": 0,\\n  \\"Instances\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-t4n2clc70t3hqwsrr****\\",\\n      \\"CharacterType\\": \\"logic\\",\\n      \\"VswitchId\\": \\"vsw-t4nvrca24dczppq44****\\",\\n      \\"InstanceClass\\": \\"redis.cluster.sharding.common.ce\\",\\n      \\"MaintainStartTime\\": \\"16:00Z\\",\\n      \\"CreateTime\\": \\"2021-05-06T07:09:40Z\\",\\n      \\"ConnectionDomain\\": \\"r-t4ncdi1dgi0ja8****.redis.hangzhou.rds.aliyuncs.com\\",\\n      \\"MaintainEndTime\\": \\"17:00Z\\",\\n      \\"StorageType\\": \\"LOCAL_SSD\\",\\n      \\"InstanceId\\": \\"r-bp1e7vl6ygf1yq****\\",\\n      \\"BandWidth\\": 24,\\n      \\"CurrentBandWidth\\": 50,\\n      \\"EngineVersion\\": \\"5.0\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"InstanceName\\": \\"testdb\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n      \\"ClusterName\\": \\"testname\\",\\n      \\"InstanceStatus\\": \\"Normal\\",\\n      \\"Engine\\": \\"redis\\",\\n      \\"ShardCount\\": 3,\\n      \\"CustomId\\": \\"4652****\\",\\n      \\"ProxyCount\\": 1,\\n      \\"ClusterId\\": \\"dhg-rx71fc5ndh9o****\\",\\n      \\"InstanceNodeList\\": [\\n        {\\n          \\"NodeIp\\": \\"10.0.33.***\\",\\n          \\"DedicatedHostName\\": \\"ch-bp13vf0y9gx3c****\\",\\n          \\"NodeType\\": \\"normal\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n          \\"InstanceId\\": \\"r-bp1e7vl6ygf1yq****\\",\\n          \\"Port\\": 3001,\\n          \\"Role\\": \\"master\\",\\n          \\"NodeId\\": 17921111\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDedicatedClusterInstanceListResponse>\\n    <Instances>\\n        <StorageType>LOCAL_SSD</StorageType>\\n        <EngineVersion>5.0</EngineVersion>\\n        <ZoneId>cn-hangzhou-e</ZoneId>\\n        <InstanceId>r-bp1e7vl6ygf1yq****</InstanceId>\\n        <ClusterId>dhg-rx71fc5ndh9o****</ClusterId>\\n        <CreateTime>2021-05-06T07:09:40Z</CreateTime>\\n        <InstanceClass>redis.cluster.sharding.common.ce</InstanceClass>\\n        <CharacterType>logic</CharacterType>\\n        <VswitchId>vsw-t4nvrca24dczppq44****</VswitchId>\\n        <CurrentBandWidth>50</CurrentBandWidth>\\n        <ShardCount>3</ShardCount>\\n        <ConnectionDomain>r-t4ncdi1dgi0ja8****.redis.hangzhou.rds.aliyuncs.com</ConnectionDomain>\\n        <InstanceName>testdb</InstanceName>\\n        <BandWidth>24</BandWidth>\\n        <MaintainEndTime>17:00Z</MaintainEndTime>\\n        <VpcId>vpc-t4n2clc70t3hqwsrr****</VpcId>\\n        <InstanceStatus>Normal</InstanceStatus>\\n        <CustomId>4652****</CustomId>\\n        <ProxyCount>1</ProxyCount>\\n        <ClusterName>testname</ClusterName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Engine>redis</Engine>\\n        <MaintainStartTime>16:00Z</MaintainStartTime>\\n        <InstanceNodeList>\\n            <Role>master</Role>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <DedicatedHostName>ch-bp13vf0y9gx3c****</DedicatedHostName>\\n            <InstanceId>r-bp1e7vl6ygf1yq****</InstanceId>\\n            <Port>3001</Port>\\n            <NodeType>normal</NodeType>\\n            <NodeId>17921111</NodeId>\\n            <NodeIp>10.0.33.***</NodeIp>\\n        </InstanceNodeList>\\n    </Instances>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>712CCF2A-16BD-411B-93F7-E978BEF2****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeDedicatedClusterInstanceListResponse>","errorExample":""}]',
      'title' => '查看专属集群实例的列表',
      'summary' => '查询专属集群中的Redis实例信息。',
      'description' => '> 如需查询非专属集群下的Redis实例的信息，请调用[DescribeInstanceAttribute](~~60996~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CA40C261-EB72-4EDA-AC57-958722162595',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBInstanceAttribute' => 
                  array (
                    'description' => '实例详细信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络（VPC）的ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1nme44gek34slfc****',
                        ),
                        'PrivateIp' => 
                        array (
                          'description' => '专有网络IP地址。
> 实例的网络类型为经典网络时，不会返回本参数。',
                          'type' => 'string',
                          'example' => '172.16.49.***',
                        ),
                        'Capacity' => 
                        array (
                          'description' => '存储容量，单位：MB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1024',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '实例创建时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-03-06T10:42:03Z',
                        ),
                        'ConnectionDomain' => 
                        array (
                          'description' => '实例的内网连接地址。',
                          'type' => 'string',
                          'example' => 'r-bp1d72gwl41z7f****.redis.rds.aliyuncs.com',
                        ),
                        'IsRds' => 
                        array (
                          'description' => '是否属RDS管控，返回值：
* **true**：是。
* **false**：否。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ChargeType' => 
                        array (
                          'description' => '付费类型，返回值：
* **PrePaid**：预付费，即包年包月。
* **PostPaid**：后付费，即按量付费。',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'StorageType' => 
                        array (
                          'description' => '存储类型。',
                          'type' => 'string',
                          'example' => 'essd_pl1',
                        ),
                        'VpcAuthMode' => 
                        array (
                          'description' => 'VPC认证模式，返回值：
* **Open**：需要密码认证。
* **Close**：关闭密码认证，即开启了[VPC免密功能](~~85168~~)。',
                          'type' => 'string',
                          'example' => 'Open',
                        ),
                        'ArchitectureType' => 
                        array (
                          'description' => '实例的架构，返回值：
* **cluster**：集群版。
* **standard**：标准版。
* **rwsplit**：读写分离版。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'AvailabilityValue' => 
                        array (
                          'description' => '当月的可用性指标。',
                          'type' => 'string',
                          'example' => '100%',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型，返回值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
                          'type' => 'string',
                          'example' => 'CLASSIC',
                        ),
                        'Port' => 
                        array (
                          'description' => 'Redis服务端口。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6379',
                        ),
                        'SecondaryZoneId' => 
                        array (
                          'description' => '备可用区ID。
> 实例没有备可用区ID时，不返回本参数。',
                          'type' => 'string',
                          'example' => 'cn-hongkong-h',
                        ),
                        'PackageType' => 
                        array (
                          'description' => '套餐类型，返回值：
* **standard**：标准套餐。
* **customized**：定制套餐，已下线。',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '<props="china">数据库版本，返回值：**2.8**、**4.0**、**5.0**或**6.0**。</props>

<props="intl">数据库版本，返回值：**2.8**、**4.0**或**5.0**。</props>

<props="partner">数据库版本，返回值：**2.8**、**4.0**或**5.0**。</props>',
                          'type' => 'string',
                          'example' => '4.0',
                        ),
                        'Config' => 
                        array (
                          'description' => '实例的参数配置信息，格式为JSON，详情请参见[参数说明](~~43885~~)，
查看审计日志配置可使用[DescribeAuditLogConfig](~~473830~~)接口。',
                          'type' => 'string',
                          'example' => '{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}',
                        ),
                        'VpcCloudInstanceId' => 
                        array (
                          'description' => 'VPC实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1d72gwl41z7f****',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '带宽，单位：MB/s。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'apitest',
                        ),
                        'SecurityIPList' => 
                        array (
                          'description' => 'IP白名单。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'ShardCount' => 
                        array (
                          'description' => '分片数，本参数仅适用于中国站。

<props="china">当Redis实例为[集群架构](~~52228~~)的云盘实例时，才会返回本参数。</props>',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'ReadOnlyCount' => 
                        array (
                          'description' => '只读节点数，本参数仅适用于云盘版读写分离架构实例。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'GlobalInstanceId' => 
                        array (
                          'description' => '所属的分布式实例ID。
> 当Redis实例为分布式实例中的子实例时，才会返回本参数。',
                          'type' => 'string',
                          'example' => 'gr-bp14rkqrhac****',
                        ),
                        'QPS' => 
                        array (
                          'description' => '理论最大QPS值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100000',
                        ),
                        'AuditLogRetention' => 
                        array (
                          'description' => '审计日志中设置的日志保留时间，单位为天。0代表未开通审计日志，开通方式请参见[开通审计日志](~~102015~~)。',
                          'type' => 'string',
                          'example' => '15',
                        ),
                        'ZoneType' => 
                        array (
                          'description' => '可用区类型，返回值：
* **singlezone**：同城单可用区。
* **doublezone**：同城双可用区。',
                          'type' => 'string',
                          'example' => 'singlezone',
                        ),
                        'MaintainStartTime' => 
                        array (
                          'description' => '可运维开始时间，格式为<i>HH:mmZ</i>（UTC时间）。',
                          'type' => 'string',
                          'example' => '18:00Z',
                        ),
                        'MaintainEndTime' => 
                        array (
                          'description' => '可运维结束时间，格式为<i>HH:mmZ</i>（UTC时间）。',
                          'type' => 'string',
                          'example' => '22:00Z',
                        ),
                        'InstanceClass' => 
                        array (
                          'description' => '实例规格，请参见[实例规格表](~~107984~~)。',
                          'type' => 'string',
                          'example' => 'redis.master.small.default',
                        ),
                        'RealInstanceClass' => 
                        array (
                          'description' => '当实例为云盘集群实例时，本参数为云盘集群实例的实际分片规格，InstanceClass参数为虚拟规格。
> 如需查询该规格的实例费用，可在[DescribePrice](~~95612~~)接口中指定本参数返回的实例规格进行查询。',
                          'type' => 'string',
                          'example' => 'tair.rdb.with.proxy.1g',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1d72gwl41z7f****',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => '实例类型，返回值：
- **Tair**
- **Redis**
- **Memcache**',
                          'type' => 'string',
                          'example' => 'Redis',
                        ),
                        'HasRenewChangeOrder' => 
                        array (
                          'description' => '是否有未生效的续费变配订单，返回值：
* **true**：是。
* **false**：否。',
                          'type' => 'string',
                          'example' => 'false',
                        ),
                        'InstanceReleaseProtection' => 
                        array (
                          'description' => '是否开启了实例释放保护，返回值：
* **true**：已开启。
* **false**：未开启。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ReplicationMode' => 
                        array (
                          'description' => '副本架构，返回值：
* **master-slave**：标准版的主从架构。
* **cluster**：集群架构，包含读写分离版或集群版。
* **db**：云原生分片集群架构。',
                          'type' => 'string',
                          'example' => 'master-slave',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '预付费实例到期时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                          'type' => 'string',
                          'example' => '2019-04-06T10:42:03Z',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1e7clcw529l773d****',
                        ),
                        'ReplicaId' => 
                        array (
                          'description' => '副本ID。',
                          'type' => 'string',
                          'example' => 'bls-awxxxxxxxxxxxxx',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值：
* **double**：双副本。
* **single**：单副本。',
                          'type' => 'string',
                          'example' => 'double',
                        ),
                        'Connections' => 
                        array (
                          'description' => '实例连接数限制。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10000',
                        ),
                        'BackupLogStartTime' => 
                        array (
                          'description' => '允许闪回的最早时间点，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> * 当Redis实例开启了[数据闪回](~~148479~~)功能，才会返回本参数。
> * 调用[RestoreInstance](~~61083~~)接口执行数据闪回时，可通过本参数的返回值确认允许闪回的最早时间点（即**RestoreTime**可传入的最早时间点）。',
                          'type' => 'string',
                          'example' => '2021-07-06T05:49:55Z',
                        ),
                        'SlaveReadOnlyCount' => 
                        array (
                          'description' => '备可用区的只读节点数，该参数仅在多可用区中开启读写分离后才会返回。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所属的资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmyiu4ekp****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hongkong-b',
                        ),
                        'InstanceStatus' => 
                        array (
                          'description' => '实例状态，返回值：
* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。

> 更多实例状态及详细信息，请参见[实例状态与影响](~~200740~~)。',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'Engine' => 
                        array (
                          'description' => '数据库类型，返回值固定为**Redis**。',
                          'type' => 'string',
                          'example' => 'Redis',
                        ),
                        'Storage' => 
                        array (
                          'description' => '云盘的存储空间。',
                          'type' => 'string',
                          'example' => '50',
                        ),
                        'CloudType' => 
                        array (
                          'description' => '仅云盒实例显示该参数。',
                          'type' => 'string',
                          'example' => 'cloudbox',
                        ),
                        'IsOrderCompleted' => 
                        array (
                          'description' => '实例订单是否完成，用于判断变配订单是否到达终态，返回值：
* **true**：变配已完成，或进行未变配。
* **false**：变配中。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'IsSupportTDE' => 
                        array (
                          'description' => '实例是否支持开启透明数据加密TDE（Transparent Data Encryption）功能，返回值：
* **true**：支持，仅本地盘版[内存型](~~443827~~)实例支持。
* **false**：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签key。',
                                    'type' => 'string',
                                    'example' => 'tagkey',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签value。',
                                    'type' => 'string',
                                    'example' => 'tagvalue',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA40C261-EB72-4EDA-AC57-958722162595\\",\\n  \\"Instances\\": {\\n    \\"DBInstanceAttribute\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp1nme44gek34slfc****\\",\\n        \\"PrivateIp\\": \\"172.16.49.***\\",\\n        \\"Capacity\\": 1024,\\n        \\"CreateTime\\": \\"2019-03-06T10:42:03Z\\",\\n        \\"ConnectionDomain\\": \\"r-bp1d72gwl41z7f****.redis.rds.aliyuncs.com\\",\\n        \\"IsRds\\": true,\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"StorageType\\": \\"essd_pl1\\",\\n        \\"VpcAuthMode\\": \\"Open\\",\\n        \\"ArchitectureType\\": \\"standard\\",\\n        \\"AvailabilityValue\\": \\"100%\\",\\n        \\"NetworkType\\": \\"CLASSIC\\",\\n        \\"Port\\": 6379,\\n        \\"SecondaryZoneId\\": \\"cn-hongkong-h\\",\\n        \\"PackageType\\": \\"standard\\",\\n        \\"EngineVersion\\": \\"4.0\\",\\n        \\"Config\\": \\"{\\\\\\\\\\\\\\"EvictionPolicy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lru\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hash-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"zset-max-ziplist-entries\\\\\\\\\\\\\\":128,\\\\\\\\\\\\\\"zset-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"set-max-intset-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"hash-max-ziplist-value\\\\\\\\\\\\\\":64}\\",\\n        \\"VpcCloudInstanceId\\": \\"r-bp1d72gwl41z7f****\\",\\n        \\"Bandwidth\\": 10,\\n        \\"InstanceName\\": \\"apitest\\",\\n        \\"SecurityIPList\\": \\"127.0.0.1\\",\\n        \\"ShardCount\\": 2,\\n        \\"ReadOnlyCount\\": 5,\\n        \\"GlobalInstanceId\\": \\"gr-bp14rkqrhac****\\",\\n        \\"QPS\\": 100000,\\n        \\"AuditLogRetention\\": \\"15\\",\\n        \\"ZoneType\\": \\"singlezone\\",\\n        \\"MaintainStartTime\\": \\"18:00Z\\",\\n        \\"MaintainEndTime\\": \\"22:00Z\\",\\n        \\"InstanceClass\\": \\"redis.master.small.default\\",\\n        \\"RealInstanceClass\\": \\"tair.rdb.with.proxy.1g\\",\\n        \\"InstanceId\\": \\"r-bp1d72gwl41z7f****\\",\\n        \\"InstanceType\\": \\"Redis\\",\\n        \\"HasRenewChangeOrder\\": \\"false\\",\\n        \\"InstanceReleaseProtection\\": false,\\n        \\"ReplicationMode\\": \\"master-slave\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"EndTime\\": \\"2019-04-06T10:42:03Z\\",\\n        \\"VSwitchId\\": \\"vsw-bp1e7clcw529l773d****\\",\\n        \\"ReplicaId\\": \\"bls-awxxxxxxxxxxxxx\\",\\n        \\"NodeType\\": \\"double\\",\\n        \\"Connections\\": 10000,\\n        \\"BackupLogStartTime\\": \\"2021-07-06T05:49:55Z\\",\\n        \\"SlaveReadOnlyCount\\": 2,\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"ZoneId\\": \\"cn-hongkong-b\\",\\n        \\"InstanceStatus\\": \\"Normal\\",\\n        \\"Engine\\": \\"Redis\\",\\n        \\"Storage\\": \\"50\\",\\n        \\"CloudType\\": \\"cloudbox\\",\\n        \\"IsOrderCompleted\\": true,\\n        \\"IsSupportTDE\\": true,\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tagkey\\",\\n              \\"Value\\": \\"tagvalue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceAttributeResponse>\\n    <Instances>\\n        <DBInstanceAttribute>\\n            <Connections>10000</Connections>\\n            <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n            <Config>{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}</Config>\\n            <Port>6379</Port>\\n            <HasRenewChangeOrder>false</HasRenewChangeOrder>\\n            <ZoneType>singlezone</ZoneType>\\n            <ConnectionDomain>r-bp1wcw2rlw76acc5k****.redis.rds.aliyuncs.com</ConnectionDomain>\\n            <MaintainEndTime>22:00Z</MaintainEndTime>\\n            <Capacity>1024</Capacity>\\n            <QPS>100000</QPS>\\n            <PrivateIp>172.16.49.***</PrivateIp>\\n            <SecurityIPList>127.0.0.1</SecurityIPList>\\n            <InstanceStatus>Normal</InstanceStatus>\\n            <NetworkType>VPC</NetworkType>\\n            <Bandwidth>10</Bandwidth>\\n            <PackageType>standard</PackageType>\\n            <InstanceReleaseProtection>false</InstanceReleaseProtection>\\n            <InstanceType>Redis</InstanceType>\\n            <AvailabilityValue>100.0%</AvailabilityValue>\\n            <Engine>Redis</Engine>\\n            <MaintainStartTime>18:00Z</MaintainStartTime>\\n            <Tags>\\n                <Tag>\\n                    <Value>社区版</Value>\\n                    <Key>类型</Key>\\n                </Tag>\\n            </Tags>\\n            <ArchitectureType>standard</ArchitectureType>\\n            <EngineVersion>5.0</EngineVersion>\\n            <ZoneId>cn-hangzhou-f</ZoneId>\\n            <InstanceId>r-bp1wcw2rlw76ac****</InstanceId>\\n            <VSwitchId>vsw-bp1w9ouei2nm66qlz****</VSwitchId>\\n            <CreateTime>2020-03-31T14:56:22Z</CreateTime>\\n            <InstanceClass>redis.master.small.default</InstanceClass>\\n            <AuditLogRetention>7</AuditLogRetention>\\n            <IsRds>true</IsRds>\\n            <ReplicationMode>master-slave</ReplicationMode>\\n            <InstanceName>社区主从50</InstanceName>\\n            <VpcId>vpc-bp1opxu1zkhn00gzv****</VpcId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <VpcAuthMode>Open</VpcAuthMode>\\n            <NodeType>double</NodeType>\\n            <VpcCloudInstanceId>r-bp1wcw2rlw76ac****</VpcCloudInstanceId>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </DBInstanceAttribute>\\n    </Instances>\\n    <RequestId>D67A69DF-C1FC-4B01-B239-B17888CCFD2A</RequestId>\\n</DescribeInstanceAttributeResponse>","errorExample":""}]',
      'title' => '查询Redis实例的详细信息',
      'summary' => '查询Redis实例的详细信息。',
    ),
    'DescribeGlobalDistributeCache' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'GlobalInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分布式实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'gr-bp14rkqrhac****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'string',
            'required' => false,
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
            'description' => '每页记录数。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
            'default' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'SubInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'gr-bp1zcjlobkyrq****',
          ),
        ),
      ),
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
                'description' => '每页可展示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F3F44BE3-5419-4B61-9BAC-E66E295A****',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
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
              'GlobalDistributeCaches' => 
              array (
                'description' => '分布式实例详细信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '分布式实例状态，返回值：
* **Normal**：运行中。
* **Changing**：修改中。
* **Creating**：创建中。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'GlobalInstanceId' => 
                    array (
                      'description' => '分布式实例ID。',
                      'type' => 'string',
                      'example' => 'gr-bp14rkqrhac****',
                    ),
                    'SubInstances' => 
                    array (
                      'description' => '子实例详细信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceStatus' => 
                          array (
                            'description' => '子实例状态，返回值：

* **Normal**：正常。
* **Creating**：创建中。
* **Changing**：修改中。
* **Inactive**：被禁用。
* **Flushing**：清除中。
* **Released**：已释放。
* **Transforming**：转换中。
* **Unavailable**：服务停止。
* **Error**：创建失败。
* **Migrating**：迁移中。
* **BackupRecovering**：备份恢复中。
* **MinorVersionUpgrading**：小版本升级中。
* **NetworkModifying**：网络变更中。
* **SSLModifying**：SSL变更中。
* **MajorVersionUpgrading**：大版本升级中，可正常访问。

> 更多实例状态及详细信息，请参见[实例状态与影响](~~200740~~)。',
                            'type' => 'string',
                            'example' => 'Normal',
                          ),
                          'InstanceID' => 
                          array (
                            'description' => '子实例ID。',
                            'type' => 'string',
                            'example' => 'r-bp1zxszhcgatnx****',
                          ),
                          'InstanceClass' => 
                          array (
                            'description' => '子实例规格。更多信息，请参见：
* [内存型标准版规格](~~145228~~)。
* [内存型集群版规格](~~150458~~)。
* [内存型读写分离版规格](~~150459~~)。',
                            'type' => 'string',
                            'example' => 'redis.amber.logic.sharding.2g.2db.0rodb.6proxy.multithread',
                          ),
                          'GlobalInstanceId' => 
                          array (
                            'description' => '分布式实例ID。',
                            'type' => 'string',
                            'example' => 'gr-bp14rkqrhac****',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"F3F44BE3-5419-4B61-9BAC-E66E295A****\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalRecordCount\\": 1,\\n  \\"GlobalDistributeCaches\\": [\\n    {\\n      \\"Status\\": \\"Normal\\",\\n      \\"GlobalInstanceId\\": \\"gr-bp14rkqrhac****\\",\\n      \\"SubInstances\\": [\\n        {\\n          \\"InstanceStatus\\": \\"Normal\\",\\n          \\"InstanceID\\": \\"r-bp1zxszhcgatnx****\\",\\n          \\"InstanceClass\\": \\"redis.amber.logic.sharding.2g.2db.0rodb.6proxy.multithread\\",\\n          \\"GlobalInstanceId\\": \\"gr-bp14rkqrhac****\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGlobalDistributeCacheResponse>\\r\\n    <TotalRecordCount>1</TotalRecordCount>\\r\\n    <GlobalDistributeCaches>\\r\\n        <Status>Normal</Status>\\r\\n        <SubInstances>\\r\\n            <InstanceID>r-bp14of12k0f0lw****</InstanceID>\\r\\n            <InstanceStatus>Normal</InstanceStatus>\\r\\n            <GlobalInstanceId>gr-bp1zcjlobkyrq****</GlobalInstanceId>\\r\\n            <InstanceClass>redis.amber.logic.sharding.2g.2db.0rodb.6proxy.multithread</InstanceClass>\\r\\n            <RegionId>cn-hangzhou</RegionId>\\r\\n        </SubInstances>\\r\\n        <GlobalInstanceId>gr-bp1zcjlobkyrq****</GlobalInstanceId>\\r\\n    </GlobalDistributeCaches>\\r\\n    <RequestId>F3F44BE3-5419-4B61-9BAC-E66E295A****</RequestId>\\r\\n    <PageSize>20</PageSize>\\r\\n    <PageNumber>1</PageNumber>\\r\\n</DescribeGlobalDistributeCacheResponse>","errorExample":""}]',
      'title' => '查询分布式实例的详细信息',
      'summary' => '查询分布式实例的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEngineVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '56399',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
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
                'description' => '实例的小版本是否为最新，返回值：
* **true**：是。
* **false**：不是。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A52974D1-9D57-4805-86CC-92E6EDE8****',
              ),
              'ProxyMinorVersion' => 
              array (
                'description' => 'Proxy代理节点当前的小版本。
> 仅集群与读写分离架构实例返回本参数。',
                'type' => 'string',
                'example' => '6.6.0',
              ),
              'DBVersionRelease' => 
              array (
                'description' => '实例小版本的更新说明，包含发布时间、小版本号、类型（例如新特性）及详细说明等信息。',
                'type' => 'string',
                'example' => '{\\"releaseInfo\\":{\\"createTime\\":\\"2021-07-27\\",\\"level\\":1,\\"releaseVersion\\":\\"0.5.4\\",\\"releaseNote\\":\\"功能更新：增强稳定性。\\"}],\\"versionChangesLevel\\":2}',
              ),
              'ProxyVersionRelease' => 
              array (
                'description' => 'Proxy代理节点的小版本更新说明，包含发布时间、小版本号、类型（例如新特性）及详细说明等信息。
> 仅集群与读写分离架构实例返回本参数。',
                'type' => 'string',
                'example' => '{\\"releaseInfo\\":[{\\"createTime\\":\\"2021-06-08\\",\\"level\\":0,\\"releaseVersion\\":\\"6.6.2\\",\\"releaseNote\\":\\"新特性：增加对部分内部命令的支持。\\"}],\\"versionChangesLevel\\":2}',
              ),
              'EnableUpgradeMajorVersion' => 
              array (
                'description' => '实例是否可升级大版本，返回值：
* **true**：可升级。
* **false**：不可升级，通常已经是最新版本。

> 如需升级大版本，请调用[ModifyInstanceMajorVersion](~~95259~~)接口。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableUpgradeMinorVersion' => 
              array (
                'description' => '实例是否可升级小版本，返回值：

* **true**：可升级。
* **false**：已经是最新版本，不可升级。 

> 如需升级小版本，请调用[ModifyInstanceMinorVersion](~~129381~~)接口。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MajorVersion' => 
              array (
                'description' => '实例的大版本。',
                'type' => 'string',
                'example' => '5.0',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型，返回值：**redis**或**memcache**。',
                'type' => 'string',
                'example' => 'redis',
              ),
              'MinorVersion' => 
              array (
                'description' => '实例当前的小版本。',
                'type' => 'string',
                'example' => 'redis-5.0_0.5.0',
              ),
              'IsRedisCompatibleVersion' => 
              array (
                'description' => '是否Redis的兼容版本。',
                'type' => 'string',
                'example' => '1',
              ),
              'IsSSLEnable' => 
              array (
                'description' => '是否启用SSL。',
                'type' => 'string',
                'example' => '1',
              ),
              'IsNewSSLMode' => 
              array (
                'description' => '是否支持新版TLS。',
                'type' => 'string',
                'example' => '1',
              ),
              'IsAutoUpgradeOpen' => 
              array (
                'description' => '是否开启了小版本自动升级，取值：

- **0**：未开启。
- **1**：开启。',
                'type' => 'string',
                'example' => '0',
              ),
              'DBLatestMinorVersion' => 
              array (
                'description' => '该实例当前可升级至最新的小版本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'MinorVersion' => 
                  array (
                    'description' => '版本号。',
                    'type' => 'string',
                    'example' => '7.0.1.4',
                  ),
                  'Level' => 
                  array (
                    'description' => '版本变更的重要性，取值：
* **0**：一般重要
* **1**：比较重要
* **2**：非常重要',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'VersionRelease' => 
                  array (
                    'description' => '从实例当前小版本到最新小版本的版本演进路线，与版本文档一致，可以直接至版本说明文档查看更详细的信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VersionChangesLevel' => 
                      array (
                        'description' => '版本升级的重要性（推荐升级程度），取值：
* 0：一般重要
* 1：比较重要
* 2：非常重要',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'ReleaseInfo' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ReleaseInfoList' => 
                          array (
                            'description' => '小版本信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '小版本信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ReleaseVersion' => 
                                array (
                                  'description' => 'EMR发行版。',
                                  'type' => 'string',
                                  'example' => 'EMR-5.7.0',
                                ),
                                'CreateTime' => 
                                array (
                                  'description' => '实例的创建时间。',
                                  'type' => 'string',
                                  'example' => '2022-11-21T13:28Z',
                                ),
                                'ReleaseNote' => 
                                array (
                                  'description' => '版本发布说明',
                                  'type' => 'string',
                                  'example' => '发布说明',
                                ),
                                'Level' => 
                                array (
                                  'description' => '重要等级。',
                                  'type' => 'string',
                                  'example' => '0',
                                ),
                                'ReleaseNoteEn' => 
                                array (
                                  'description' => '可升级的版本英文描述。',
                                  'type' => 'string',
                                  'example' => '版本升级英文描述',
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
              'ProxyLatestMinorVersion' => 
              array (
                'description' => '该Proxy节点当前可升级至最新的小版本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'MinorVersion' => 
                  array (
                    'description' => '版本号。',
                    'type' => 'string',
                    'example' => '7.0.6',
                  ),
                  'Level' => 
                  array (
                    'description' => '版本变更的重要性，取值：
* **0**：一般重要
* **1**：比较重要
* **2**：非常重要',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'VersionRelease' => 
                  array (
                    'description' => '从实例当前小版本到最新小版本的版本演进路线，与版本文档一致，可以直接至版本说明文档查看更详细的信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ReleaseInfo' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ReleaseInfoList' => 
                          array (
                            'description' => '小版本信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '小版本信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ReleaseVersion' => 
                                array (
                                  'description' => 'EMR发行版。',
                                  'type' => 'string',
                                  'example' => 'EMR-5.9.1',
                                ),
                                'CreateTime' => 
                                array (
                                  'description' => '版本的发布时间',
                                  'type' => 'string',
                                  'example' => '2022-08-23T14:26:20Z',
                                ),
                                'ReleaseNote' => 
                                array (
                                  'description' => '版本的变更说明',
                                  'type' => 'string',
                                  'example' => 'x x x x',
                                ),
                                'Level' => 
                                array (
                                  'description' => '版本变更的重要性，取值：
* **0**：一般重要
* **1**：比较重要
* **2**：非常重要',
                                  'type' => 'string',
                                  'example' => '0',
                                ),
                                'ReleaseNoteEn' => 
                                array (
                                  'description' => '可升级的版本英文描述。',
                                  'type' => 'string',
                                  'example' => '版本升级英文描述',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'VersionChangesLevel' => 
                      array (
                        'description' => '版本升级的重要性（推荐升级程度），取值：
* 0：一般重要
* 1：比较重要
* 2：非常重要',
                        'type' => 'string',
                        'example' => '0',
                      ),
                    ),
                  ),
                ),
              ),
              'IsOpenNGLB' => 
              array (
                'description' => '是否开启NGBL模式，取值：
* **0**：未开启。
* **1**：开启。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IsLatestVersion\\": false,\\n  \\"RequestId\\": \\"A52974D1-9D57-4805-86CC-92E6EDE8****\\",\\n  \\"ProxyMinorVersion\\": \\"6.6.0\\",\\n  \\"DBVersionRelease\\": \\"{\\\\\\\\\\\\\\"releaseInfo\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"createTime\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2021-07-27\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"level\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"releaseVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.5.4\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"releaseNote\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"功能更新：增强稳定性。\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"versionChangesLevel\\\\\\\\\\\\\\":2}\\",\\n  \\"ProxyVersionRelease\\": \\"{\\\\\\\\\\\\\\"releaseInfo\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"createTime\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2021-06-08\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"level\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"releaseVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.6.2\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"releaseNote\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"新特性：增加对部分内部命令的支持。\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"versionChangesLevel\\\\\\\\\\\\\\":2}\\",\\n  \\"EnableUpgradeMajorVersion\\": true,\\n  \\"EnableUpgradeMinorVersion\\": true,\\n  \\"MajorVersion\\": \\"5.0\\",\\n  \\"Engine\\": \\"redis\\",\\n  \\"MinorVersion\\": \\"redis-5.0_0.5.0\\",\\n  \\"IsRedisCompatibleVersion\\": \\"1\\",\\n  \\"IsSSLEnable\\": \\"1\\",\\n  \\"IsNewSSLMode\\": \\"1\\",\\n  \\"IsAutoUpgradeOpen\\": \\"0\\",\\n  \\"DBLatestMinorVersion\\": {\\n    \\"MinorVersion\\": \\"7.0.1.4\\",\\n    \\"Level\\": \\"0\\",\\n    \\"VersionRelease\\": {\\n      \\"VersionChangesLevel\\": \\"0\\",\\n      \\"ReleaseInfo\\": {\\n        \\"ReleaseInfoList\\": [\\n          {\\n            \\"ReleaseVersion\\": \\"EMR-5.7.0\\",\\n            \\"CreateTime\\": \\"2022-11-21T13:28Z\\",\\n            \\"ReleaseNote\\": \\"发布说明\\",\\n            \\"Level\\": \\"0\\",\\n            \\"ReleaseNoteEn\\": \\"版本升级英文描述\\"\\n          }\\n        ]\\n      }\\n    }\\n  },\\n  \\"ProxyLatestMinorVersion\\": {\\n    \\"MinorVersion\\": \\"7.0.6\\",\\n    \\"Level\\": \\"0\\",\\n    \\"VersionRelease\\": {\\n      \\"ReleaseInfo\\": {\\n        \\"ReleaseInfoList\\": [\\n          {\\n            \\"ReleaseVersion\\": \\"EMR-5.9.1\\",\\n            \\"CreateTime\\": \\"2022-08-23T14:26:20Z\\",\\n            \\"ReleaseNote\\": \\"x x x x\\",\\n            \\"Level\\": \\"0\\",\\n            \\"ReleaseNoteEn\\": \\"版本升级英文描述\\"\\n          }\\n        ]\\n      },\\n      \\"VersionChangesLevel\\": \\"0\\"\\n    }\\n  },\\n  \\"IsOpenNGLB\\": \\"1\\"\\n}","errorExample":"{\\n    \\"MinorVersion\\":\\"redis_0.12.4\\",\\n    \\"IsLatestVersion\\":\\"false\\",\\n    \\"MajorVersion\\":\\"2.8\\",\\n    \\"EnableUpgradeMajorVersion\\":\\"true\\",\\n    \\"RequestId\\":\\"A49A2216-F6C9-43E2-A8F0-F217E57943C4\\",\\n    \\"EnableUpgradeMinorVersion\\":\\"true\\",\\n    \\"Engine\\":\\"redis\\"\\n}"},{"type":"xml","example":"<DescribeEngineVersionResponse>\\n    <MajorVersion>5.0</MajorVersion>\\n    <IsLatestVersion>false</IsLatestVersion>\\n    <RequestId>825F9CF7-4AE5-520C-93C7-7E0D2BEA0F8F</RequestId>\\n    <MinorVersion>redis-5.0_0.5.0</MinorVersion>\\n    <ProxyMinorVersion>6.6.0</ProxyMinorVersion>\\n    <Engine>redis</Engine>\\n    <EnableUpgradeMinorVersion>true</EnableUpgradeMinorVersion>\\n    <ProxyVersionRelease>{\\"releaseInfo\\":[{\\"createTime\\":\\"2021-05-26\\",\\"level\\":0,\\"releaseVersion\\":\\"6.6.1\\",\\"releaseNote\\":\\"[新特性]:新增TairZset数据结构，实现任意维度的double类型的分值排序，提升数据处理效率，且客户端适配简易，无需任何编解码封装。更多信息，请参见TairZset命令。\\"},{\\"createTime\\":\\"2021-06-08\\",\\"level\\":0,\\"releaseVersion\\":\\"6.6.2\\",\\"releaseNote\\":\\"[新特性]:增加对部分内部命令的支持。\\"},{\\"createTime\\":\\"2021-06-18\\",\\"level\\":1,\\"releaseVersion\\":\\"6.6.3\\",\\"releaseNote\\":\\"[功能优化]:优化多可用区容灾场景下的内部管控。\\"},{\\"createTime\\":\\"2021-07-08\\",\\"level\\":2,\\"releaseVersion\\":\\"6.6.4\\",\\"releaseNote\\":\\"[新特性]:CLIENT LIST、CLIENT KILL命令支持展示和操作进程维度的连接。\\\\n[缺陷修复]:修复TairZset命令不支持大写的问题，更多信息，请参见TairZset命令。\\"}],\\"versionChangesLevel\\":2}</ProxyVersionRelease>\\n    <EnableUpgradeMajorVersion>false</EnableUpgradeMajorVersion>\\n    <DBVersionRelease>{\\"releaseInfo\\":[{\\"createTime\\":\\"2021-04-26\\",\\"level\\":2,\\"releaseVersion\\":\\"0.5.2\\",\\"releaseNote\\":\\"[安全加固]:主要解决社区Lua JIT的安全性漏洞。\\\\n[新特性]:优化槽（slot）的迁移能力，云盘版实例可基于此实现无损扩缩容。\\\\n[新特性]:支持大Key（big key）实时统计。\\\\n[新特性]:支持通过公网获取虚拟IP（VIP）地址，为使用直连地址用户提供更好的支持。\\\\n\\"},{\\"createTime\\":\\"2021-07-21\\",\\"level\\":1,\\"releaseVersion\\":\\"0.5.3\\",\\"releaseNote\\":\\"[功能更新]:优化数据迁移完成后删除源端数据的流程，增强数据可靠性。\\\\n[功能更新]:简化数据迁移的增量数据同步流程。\\"},{\\"createTime\\":\\"2021-07-27\\",\\"level\\":1,\\"releaseVersion\\":\\"0.5.4\\",\\"releaseNote\\":\\"[功能更新]:增强稳定性。\\"}],\\"versionChangesLevel\\":2}</DBVersionRelease>\\n</DescribeEngineVersionResponse>","errorExample":"<DescribeEngineVersionResponse>  \\n  \\t<MinorVersion>redis_0.12.4</MinorVersion>\\n\\t<IsLatestVersion>false</IsLatestVersion>\\n\\t<MajorVersion>2.8</MajorVersion>\\n\\t<EnableUpgradeMajorVersion>true</EnableUpgradeMajorVersion>\\n\\t<RequestId>A49A2216-F6C9-43E2-A8F0-F217E57943C4</RequestId>\\n\\t<EnableUpgradeMinorVersion>true</EnableUpgradeMinorVersion>\\n\\t<Engine>redis</Engine>\\n</DescribeEngineVersionResponse>"}]',
      'title' => '查询Redis实例的大版本和小版本信息',
      'summary' => '查询Redis实例的大版本和小版本信息，同时可查询到小版本的发布日志信息。',
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-t4nlenc2p04uvb****',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的目标节点类型，取值：
* **0**：Proxy（代理）节点。
  > 该参数仅支持集群与读写分离架构实例。


* **1**：数据节点，默认值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
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
            'description' => '每页可展示的记录数，取值：**10**、**20**、**50**，默认值为**10**.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
            'enum' => 
            array (
              0 => '5',
              1 => '10',
              2 => '20',
              3 => '50',
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
                'example' => '224B97FB-A275-4EAC-86E9-8922FEA2****',
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
                'description' => '每页可展示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Node' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NodeInfo' => 
                  array (
                    'description' => 'Redis实例中各节点的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DefaultBandWidth' => 
                        array (
                          'description' => '节点默认的默认带宽，单位为MB/s。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '96',
                        ),
                        'CurrentMinorVersion' => 
                        array (
                          'description' => '节点当前的小版本。',
                          'type' => 'string',
                          'example' => 'redis-5.0_0.3.10',
                        ),
                        'CurrentBandWidth' => 
                        array (
                          'description' => '节点当前的带宽，单位为MB/s，由节点的默认带宽和增加的带宽组成。
> * 您可以调用[EnableAdditionalBandwidth](~~206173~~)接口设置要增加的带宽。
> * 通过本参数也可推算出增加的带宽大小，例如节点默认带宽为96 MB/s，本参数返回值为100，则增加了4 MB/s的带宽。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'InsType' => 
                        array (
                          'description' => '是否为只读节点，如果为只读节点，本参数返回值为**3**。
> 如果不是只读节点，不返回本参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'IsLatestVersion' => 
                        array (
                          'description' => '是否为最新的小版本，返回值：
* **0**：不是最新版本。
* **1**：是最新版本。

> 如需升级小版本，请调用[ModifyInstanceMinorVersion](~~129381~~)接口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'InsName' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'r-t4nlenc2p04uvb****',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值：
* **db**：数据节点。
* **proxy**：代理节点。
* **normal**：普通节点（标准架构的实例会返回该值）。',
                          'type' => 'string',
                          'example' => 'normal',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
                        ),
                        'IsOpenBandWidthService' => 
                        array (
                          'description' => '该节点是否增加了带宽，取值：
* **true**：未增加带宽。
* **false**：已增加带宽。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CustinsId' => 
                        array (
                          'description' => '数据分片节点ID。',
                          'type' => 'string',
                          'example' => '30381****',
                        ),
                        'Role' => 
                        array (
                          'description' => '节点角色，返回值：
* **master**：主节点。
* **slave**：从节点。',
                          'type' => 'string',
                          'example' => 'master',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '本参数仅作为Redis实例内部维护使用。',
                          'type' => 'string',
                          'example' => '10065****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"224B97FB-A275-4EAC-86E9-8922FEA2****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 2,\\n  \\"Node\\": {\\n    \\"NodeInfo\\": [\\n      {\\n        \\"DefaultBandWidth\\": 96,\\n        \\"CurrentMinorVersion\\": \\"redis-5.0_0.3.10\\",\\n        \\"CurrentBandWidth\\": 100,\\n        \\"InsType\\": 3,\\n        \\"IsLatestVersion\\": 1,\\n        \\"InsName\\": \\"r-t4nlenc2p04uvb****\\",\\n        \\"NodeType\\": \\"normal\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n        \\"IsOpenBandWidthService\\": true,\\n        \\"CustinsId\\": \\"30381****\\",\\n        \\"Role\\": \\"master\\",\\n        \\"NodeId\\": \\"10065****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRoleZoneInfoResponse>\\n    <TotalCount>2</TotalCount>\\n    <RequestId>224B97FB-A275-4EAC-86E9-8922FEA2****</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Node>\\n        <NodeInfo>\\n            <Role>slave</Role>\\n            <IsLatestVersion>1</IsLatestVersion>\\n            <ZoneId>cn-hangzhou-b</ZoneId>\\n            <NodeType>normal</NodeType>\\n            <IsOpenBandWidthService>true</IsOpenBandWidthService>\\n            <NodeId>10065****</NodeId>\\n            <CurrentMinorVersion>redis-5.0_0.3.10</CurrentMinorVersion>\\n            <CustinsId>30381****</CustinsId>\\n            <DefaultBandWidth>96</DefaultBandWidth>\\n            <InsName>r-t4nlenc2p04uvb****</InsName>\\n            <CurrentBandWidth>100</CurrentBandWidth>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Role>master</Role>\\n            <IsLatestVersion>1</IsLatestVersion>\\n            <ZoneId>cn-hangzhou-b</ZoneId>\\n            <NodeType>normal</NodeType>\\n            <IsOpenBandWidthService>true</IsOpenBandWidthService>\\n            <NodeId>10065****</NodeId>\\n            <CurrentMinorVersion>redis-5.0_0.3.10</CurrentMinorVersion>\\n            <CustinsId>30381****</CustinsId>\\n            <DefaultBandWidth>96</DefaultBandWidth>\\n            <InsName>r-t4nlenc2p04uvb****</InsName>\\n            <CurrentBandWidth>100</CurrentBandWidth>\\n        </NodeInfo>\\n    </Node>\\n</DescribeRoleZoneInfoResponse>\\n","errorExample":""}]',
      'title' => '查询节点和所属可用区信息',
      'summary' => '查询Redis实例中各节点的角色、类型、小版本和所属的可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterMemberInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例列表的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
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
            'description' => '每页可展示的最大记录数，取值：**30**、**50**、**100**，默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D9F3768-EDA9-4811-943E-42C8006E****',
              ),
              'ClusterChildren' => 
              array (
                'description' => '集群实例的数据节点信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Capacity' => 
                    array (
                      'description' => '单个数据节点的最大内存容量，单位为MB。
> 当**Service**返回值为**redis**（即节点类型为数据节点）时，才会返回本参数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '2****_176498472570****',
                    ),
                    'DiskSizeMB' => 
                    array (
                      'description' => '数据节点[ESSD云盘](~~122389~~)的存储空间，单位为MB。
> 该ESSD云盘仅用作系统运行使用（例如数据持久化），不作为数据存取的介质。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4096',
                    ),
                    'BandWidth' => 
                    array (
                      'description' => '节点的带宽，单位为MB/s。
> 当**Service**返回值为**redis**（即节点类型为数据节点）时，才会返回本参数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '96',
                    ),
                    'CurrentBandWidth' => 
                    array (
                      'description' => '节点当前的带宽，单位为MB/s，由节点的默认带宽和增加的带宽组成。

<props="china">当Redis实例通过专属集群创建时，才会返回本参数。</props>
',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'ClassCode' => 
                    array (
                      'description' => '数据节点的规格。更多信息，请参见<props="china"><ph>[云盘版实例规格](~~164477~~)</ph></props><props="intl"><ph>[持久内存型规格](~~184055~~)</ph></props><props="partner"><ph>[持久内存型规格](~~184055~~)</ph></props>。',
                      'type' => 'string',
                      'example' => 'redis.shard.small.ce',
                    ),
                    'BizType' => 
                    array (
                      'description' => '业务类型，返回值固定为**ALIYUN**。',
                      'type' => 'string',
                      'example' => 'ALIYUN',
                    ),
                    'Service' => 
                    array (
                      'description' => '节点类型，返回值：
* **redis**：数据节点。
* **redis_cs**：配置服务器节点。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'BinlogRetentionDays' => 
                    array (
                      'description' => 'binlog日志保存天数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '7',
                    ),
                    'Connections' => 
                    array (
                      'description' => '数据节点的最大连接数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20000',
                    ),
                    'ResourceGroupName' => 
                    array (
                      'description' => '节点所属的资源组名称。',
                      'type' => 'string',
                      'example' => 'GLOBAL_ZHANGJIAKOU_A',
                    ),
                    'ServiceVersion' => 
                    array (
                      'description' => '节点的大版本。',
                      'type' => 'string',
                      'example' => '5.0',
                    ),
                    'ReplicaSize' => 
                    array (
                      'description' => '子节点数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Name' => 
                    array (
                      'description' => '节点名称。',
                      'type' => 'string',
                      'example' => 'r-bp1zxszhcgatnx****-db-0',
                    ),
                    'Id' => 
                    array (
                      'description' => '节点的副本集ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '501791111',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D9F3768-EDA9-4811-943E-42C8006E****\\",\\n  \\"ClusterChildren\\": [\\n    {\\n      \\"Capacity\\": 1024,\\n      \\"UserId\\": \\"2****_176498472570****\\",\\n      \\"DiskSizeMB\\": 4096,\\n      \\"BandWidth\\": 96,\\n      \\"CurrentBandWidth\\": 100,\\n      \\"ClassCode\\": \\"redis.shard.small.ce\\",\\n      \\"BizType\\": \\"ALIYUN\\",\\n      \\"Service\\": \\"redis\\",\\n      \\"BinlogRetentionDays\\": 7,\\n      \\"Connections\\": 20000,\\n      \\"ResourceGroupName\\": \\"GLOBAL_ZHANGJIAKOU_A\\",\\n      \\"ServiceVersion\\": \\"5.0\\",\\n      \\"ReplicaSize\\": 0,\\n      \\"Name\\": \\"r-bp1zxszhcgatnx****-db-0\\",\\n      \\"Id\\": 501791111\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeClusterMemberInfoResponse>\\r\\n    <RequestId>D5362666-6A31-4DF6-99EB-93A74602****</RequestId>\\r\\n    <ClusterChildren>\\r\\n        <Service>redis_cs</Service>\\r\\n        <BizType>ALIYUN</BizType>\\r\\n        <DiskSizeMB>1024</DiskSizeMB>\\r\\n        <Name>r-8vbktttx3r6izp****-cs-0</Name>\\r\\n        <BinlogRetentionDays>7</BinlogRetentionDays>\\r\\n        <ClassCode>redis.sharding.midce.cs.default</ClassCode>\\r\\n        <UserId>2****_176498472570****</UserId>\\r\\n        <ServiceVersion>5.0</ServiceVersion>\\r\\n        <Id>501791111</Id>\\r\\n        <ReplicaSize>0</ReplicaSize>\\r\\n        <ResourceGroupName>GLOBAL_ZHANGJIAKOU_A</ResourceGroupName>\\r\\n    </ClusterChildren>\\r\\n    <ClusterChildren>\\r\\n        <Connections>20000</Connections>\\r\\n        <Service>redis</Service>\\r\\n        <BizType>ALIYUN</BizType>\\r\\n        <DiskSizeMB>4096</DiskSizeMB>\\r\\n        <Name>r-8vbktttx3r6izp****-db-1</Name>\\r\\n        <BinlogRetentionDays>7</BinlogRetentionDays>\\r\\n        <BandWidth>96</BandWidth>\\r\\n        <ClassCode>redis.shard.small.ce</ClassCode>\\r\\n        <Capacity>1024</Capacity>\\r\\n        <UserId>2****_176498472570****</UserId>\\r\\n        <ServiceVersion>5.0</ServiceVersion>\\r\\n        <Id>501791111</Id>\\r\\n        <ReplicaSize>0</ReplicaSize>\\r\\n        <ResourceGroupName>GLOBAL_ZHANGJIAKOU_A</ResourceGroupName>\\r\\n    </ClusterChildren>\\r\\n    <ClusterChildren>\\r\\n        <Connections>20000</Connections>\\r\\n        <Service>redis</Service>\\r\\n        <BizType>ALIYUN</BizType>\\r\\n        <DiskSizeMB>4096</DiskSizeMB>\\r\\n        <Name>r-8vbktttx3r6izp****-db-2</Name>\\r\\n        <BinlogRetentionDays>7</BinlogRetentionDays>\\r\\n        <BandWidth>96</BandWidth>\\r\\n        <ClassCode>redis.shard.small.ce</ClassCode>\\r\\n        <Capacity>1024</Capacity>\\r\\n        <UserId>2****_176498472570****</UserId>\\r\\n        <ServiceVersion>5.0</ServiceVersion>\\r\\n        <Id>501791111</Id>\\r\\n        <ReplicaSize>0</ReplicaSize>\\r\\n        <ResourceGroupName>GLOBAL_ZHANGJIAKOU_A</ResourceGroupName>\\r\\n    </ClusterChildren>\\r\\n</DescribeClusterMemberInfoResponse>","errorExample":""}]',
      'title' => '查询集群的节点配置信息',
      'summary' => '查询Redis集群实例的节点配置信息（例如规格、最大连接数等）。',
      'description' => '> 本接口仅适用于[云盘版实例](~~188068~~)（[集群架构](~~52228~~)）。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的记录数，取值： **30**、**50**、**100**，默认值为**30**。',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
            'docRequired' => true,
            'example' => '2020-11-20T01:00Z',
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
            'docRequired' => true,
            'example' => '2020-11-26T01:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态，传入多个值时使用英文逗号（,）分隔，取值：
* **0**：等待中。
* **1**：执行中。
* **2**：已结束。
* **4**：已关闭。
* **7**：暂停。
* **8**：中断。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'example' => '608FAEC9-485E-4C65-82DE-2E5B955E****',
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
                'description' => '每页可展示的记录数。',
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
                'description' => '任务信息详细列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态。

* **0**：等待中。
* **1**：执行中。
* **2**：已结束。
* **4**：已关闭。
* **7**：暂停。
* **8**：中断。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'FinishTime' => 
                    array (
                      'description' => '任务结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-11-13T06:17:18Z',
                    ),
                    'StepsInfo' => 
                    array (
                      'description' => '子任务步骤信息，格式为JSON。包含该子任务的预计剩余时间（**remain**）、任务名称（**name**）和任务进度（**progress**）信息。
> 如果不存在子步骤，不返回本参数。',
                      'type' => 'string',
                      'example' => '[{\\"remain\\":0,\\"name\\":\\"init_instance\\",\\"progress\\":100},{\\"remain\\":107,\\"name\\":\\"init_redis\\",\\"progress\\":12.3},{\\"remain\\":1881,\\"name\\":\\"init_config\\",\\"progress\\":0}]',
                    ),
                    'Progress' => 
                    array (
                      'description' => '任务进度，单位为百分比。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '100',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '任务开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2020-11-13T06:16:54Z',
                    ),
                    'Remain' => 
                    array (
                      'description' => '任务预计剩余时间，单位为秒。
> 如果任务不处于执行中，不返回本参数或返回的值为**0**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'CurrentStepName' => 
                    array (
                      'description' => '当前的子步骤名称。',
                      'type' => 'string',
                      'example' => 'init_redis',
                    ),
                    'StepProgressInfo' => 
                    array (
                      'description' => '任务的子步骤进度。
> 如果不存在子步骤，不返回本参数。',
                      'type' => 'string',
                      'example' => '3/3',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => '32302****',
                    ),
                    'TaskAction' => 
                    array (
                      'description' => '任务标识。',
                      'type' => 'string',
                      'example' => 'ModifyDBInstanceParameter',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"608FAEC9-485E-4C65-82DE-2E5B955E****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": \\"2\\",\\n      \\"FinishTime\\": \\"2020-11-13T06:17:18Z\\",\\n      \\"StepsInfo\\": \\"[{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"init_instance\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":100},{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":107,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"init_redis\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":12.3},{\\\\\\\\\\\\\\"remain\\\\\\\\\\\\\\":1881,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"init_config\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"progress\\\\\\\\\\\\\\":0}]\\",\\n      \\"Progress\\": 100,\\n      \\"BeginTime\\": \\"2020-11-13T06:16:54Z\\",\\n      \\"Remain\\": 60,\\n      \\"CurrentStepName\\": \\"init_redis\\",\\n      \\"StepProgressInfo\\": \\"3/3\\",\\n      \\"TaskId\\": \\"32302****\\",\\n      \\"TaskAction\\": \\"ModifyDBInstanceParameter\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTasksResponse>\\r\\n    <TotalRecordCount>1</TotalRecordCount>\\r\\n    <RequestId>5E064E50-5577-4059-BA11-8DCA20DB****</RequestId>\\r\\n    <PageSize>30</PageSize>\\r\\n    <PageNumber>1</PageNumber>\\r\\n    <Items>\\r\\n        <Status>2</Status>\\r\\n        <StepProgressInfo>3/3</StepProgressInfo>\\r\\n        <Progress>100</Progress>\\r\\n        <TaskId>326497463</TaskId>\\r\\n        <Remain>0</Remain>\\r\\n        <FinishTime>2020-11-25T08:48:00Z</FinishTime>\\r\\n        <TaskAction>CreateDBInstance</TaskAction>\\r\\n        <StepsInfo>[{\\"remain\\":0,\\"name\\":\\"init_instance\\",\\"progress\\":100},{\\"remain\\":0,\\"name\\":\\"init_redis\\",\\"progress\\":100},{\\"remain\\":0,\\"name\\":\\"init_config\\",\\"progress\\":100}]</StepsInfo>\\r\\n        <BeginTime>2020-11-25T08:40:07Z</BeginTime>\\r\\n    </Items>\\r\\n</DescribeTasksResponse>","errorExample":""}]',
      'title' => '查询实例某个时间段内所有任务信息',
      'summary' => '查询Redis实例某个时间段内运行的所有任务信息。',
      'description' => '在执行某些耗时较长的操作时，您可以调用本接口查询任务的处理进度信息。您也可以通过Redis控制台，进入目标Redis实例的**基本信息**页面，单击页面右上角的任务进度图标来查看当前任务的处理进度信息。',
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
      'operationType' => 'write',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceNetworkType' => 
              array (
                'description' => '网络类型，返回值：
* **CLASSIC**：经典网络。
* **VPC**：专有网络。',
                'type' => 'string',
                'example' => 'CLASSIC',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FC77D4E1-2A7C-4F0B-A4CC-CE0B9C314B9B',
              ),
              'NetInfoItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceNetInfo' => 
                  array (
                    'description' => '实例的网络信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DirectConnection' => 
                        array (
                          'description' => '是否为直连地址，返回值：
* **0**：非直连地址。
* **1**：直连地址。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '虚拟交换机的ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1e7clcw529l773d****',
                        ),
                        'DBInstanceNetType' => 
                        array (
                          'description' => '该网络信息所属的网络类型：
* **0**：公网。
* **1**：经典网络。
* **2**：专有网络。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Upgradeable' => 
                        array (
                          'description' => '经典网络连接地址的过期时间，即剩余有效时间，单位为秒。
> **0**表示不会过期。 ',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => 'Redis实例经典网络地址的有效时间，单位：秒。',
                          'type' => 'string',
                          'example' => '5183779',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '实例的连接地址。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
                        ),
                        'IPType' => 
                        array (
                          'description' => 'IP地址的网络类型，返回值： 
* **Public**：公网。
* **Inner**：经典网络。 
* **Private**：VPC网络。',
                          'type' => 'string',
                          'example' => 'Inner',
                        ),
                        'VPCInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1ky7j6qc7umk****',
                        ),
                        'Port' => 
                        array (
                          'description' => 'Redis服务端口。',
                          'type' => 'string',
                          'example' => '6379',
                        ),
                        'VPCId' => 
                        array (
                          'description' => '实例所属的专有网络（VPC）的ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp1nme44gek34slfc****',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '172.16.49.***',
                        ),
                        'IsSlaveProxy' => 
                        array (
                          'description' => '表示该地址是否为备可用区的连接地址，取值为1（表示备可用区）或0。
> 该地址仅在开通多可用区读写分离架构后返回。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceNetworkType\\": \\"CLASSIC\\",\\n  \\"RequestId\\": \\"FC77D4E1-2A7C-4F0B-A4CC-CE0B9C314B9B\\",\\n  \\"NetInfoItems\\": {\\n    \\"InstanceNetInfo\\": [\\n      {\\n        \\"DirectConnection\\": 0,\\n        \\"VSwitchId\\": \\"vsw-bp1e7clcw529l773d****\\",\\n        \\"DBInstanceNetType\\": \\"1\\",\\n        \\"Upgradeable\\": \\"0\\",\\n        \\"ExpiredTime\\": \\"5183779\\",\\n        \\"ConnectionString\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n        \\"IPType\\": \\"Inner\\",\\n        \\"VPCInstanceId\\": \\"r-bp1ky7j6qc7umk****\\",\\n        \\"Port\\": \\"6379\\",\\n        \\"VPCId\\": \\"vpc-bp1nme44gek34slfc****\\",\\n        \\"IPAddress\\": \\"172.16.49.***\\",\\n        \\"IsSlaveProxy\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n \\"RequestId\\":\\"314C4FB3-4256-424F-9AD9-1A6B3444160A\\",\\n \\"InstanceNetworkType\\":\\"Classic\\",\\n \\"NetInfoItems\\":{\\n   \\"InstanceNetInfo\\":[{\\n     \\"DBInstanceNetType\\":\\"1\\",\\n     \\"Port\\":\\"6379\\",\\n     \\"ConnectionString\\":\\"r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com\\",\\n     \\"VPCId\\":\\"\\",\\n     \\"IPAddress\\":\\"xxx.xxx.xxx.xxx\\",\\n     \\"IPType\\":\\"Inner\\",\\n     \\"Upgradeable\\":\\"0\\"\\n   \\t\\t\\t\\t   }]\\n   \\t\\t\\t }\\n}"},{"type":"xml","example":"<DescribeDBInstanceNetInfoResponse>\\n<NetInfoItems>\\n    <InstanceNetInfo>\\n        <IPType>Private</IPType>\\n        <VPCInstanceId>r-bp1ky7j6qc7umk****</VPCInstanceId>\\n        <VPCId>vpc-bp1opxu1zkhn00gzv****</VPCId>\\n        <DBInstanceNetType>2</DBInstanceNetType>\\n        <Port>6379</Port>\\n        <DirectConnection>0</DirectConnection>\\n        <Upgradeable>0</Upgradeable>\\n        <ConnectionString>r-bp1ky7j6qc7umk****.redis.rds.aliyuncs.com</ConnectionString>\\n        <IPAddress>172.16.49.***</IPAddress>\\n    </InstanceNetInfo>\\n</NetInfoItems>\\n<RequestId>500F0FD3-5065-4A1D-A27C-BBC567956068</RequestId>\\n<InstanceNetworkType>VPC</InstanceNetworkType>\\n</DescribeDBInstanceNetInfoResponse>","errorExample":"<DescribeDBInstanceNetInfoResponse>\\n <RequestId>314C4FB3-4256-424F-9AD9-1A6B3444160A</RequestId>\\n <InstanceNetworkType>Classic</InstanceNetworkType>\\n <NetInfoItems>\\n   <InstanceNetInfo>\\n     <DBInstanceNetType>1</DBInstanceNetType>\\n     <Port>6379</Port>\\n     <ConnectionString>r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com</ConnectionString>\\n     <VPCId></VPCId>\\n     <IPAddress>xxx.xxx.xxx.xxx</IPAddress>\\n     <IPType>Inner</IPType>\\n     <Upgradeable>0</Upgradeable>\\n   </InstanceNetInfo>\\n </NetInfoItems>\\n</DescribeDBInstanceNetInfoResponse>"}]',
      'title' => '查看Redis实例的网络信息',
      'summary' => '查看Redis实例的网络信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDBNodeDirectVipInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABAF95F6-35C1-4177-AF3A-70969EBD****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'DirectVipInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'VipInfo' => 
                  array (
                    'description' => '集群版Redis实例的分片Vip信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NodeId' => 
                        array (
                          'description' => '分片ID',
                          'type' => 'string',
                          'example' => 'r-8vb3679b04551444-db-2',
                        ),
                        'Vip' => 
                        array (
                          'description' => '分片所属的ip地址。',
                          'type' => 'string',
                          'example' => '100.115.61.8',
                        ),
                        'Port' => 
                        array (
                          'description' => '端口号，取值范围为**1024**~**65535**，默认值为**6379**。',
                          'type' => 'string',
                          'example' => '6379',
                        ),
                        'NetType' => 
                        array (
                          'description' => '安全组的网络类型，返回值：
* **vpc**：专有网络。',
                          'type' => 'string',
                          'example' => 'vpc',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ABAF95F6-35C1-4177-AF3A-70969EBD****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"DirectVipInfo\\": {\\n    \\"VipInfo\\": [\\n      {\\n        \\"NodeId\\": \\"r-8vb3679b04551444-db-2\\",\\n        \\"Vip\\": \\"100.115.61.8\\",\\n        \\"Port\\": \\"6379\\",\\n        \\"NetType\\": \\"vpc\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询直连实例子实例的 vip',
      'summary' => '查询集群版直连实例的子实例vip信息。',
      'description' => '><notice>只有云盘版实例支持此接口查询></notice>',
    ),
    'DescribeLogicInstanceTopology' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例的ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '794120D1-E0CF-4713-BAE4-EBAEA04506AF',
              ),
              'RedisProxyList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NodeInfo' => 
                  array (
                    'description' => '代理详情，包含代理节点信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Capacity' => 
                        array (
                          'description' => '节点的容量，单位为MB。',
                          'type' => 'string',
                          'example' => '5120',
                        ),
                        'Connection' => 
                        array (
                          'description' => '连接数限制。',
                          'type' => 'string',
                          'example' => '320000',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值：
* **db**：数据节点。
* **normal**：管理节点，由Proxy节点（代理节点）和CS节点（配置管理节点）组成。部分实例不会返回normal，而是分别返回proxy和cs。',
                          'type' => 'string',
                          'example' => 'proxy',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '节点的带宽限制，单位为MB/s。',
                          'type' => 'string',
                          'example' => '96',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'r-bp10noxlhcoim2****-proxy-3#542****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RedisShardList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NodeInfo' => 
                  array (
                    'description' => '分片详情，包含NodeInfo等子节点信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Capacity' => 
                        array (
                          'description' => '节点的容量，单位为MB。',
                          'type' => 'string',
                          'example' => '2048',
                        ),
                        'Connection' => 
                        array (
                          'description' => '连接数限制。',
                          'type' => 'string',
                          'example' => '10000',
                        ),
                        'NodeType' => 
                        array (
                          'description' => '节点类型，返回值：
* **proxy**：代理节点。
* **db**：数据节点。',
                          'type' => 'string',
                          'example' => 'db',
                        ),
                        'Bandwidth' => 
                        array (
                          'description' => '节点的带宽限制，单位为MB/s。',
                          'type' => 'string',
                          'example' => '96',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'r-bp10noxlhcoim2****-db-0#688****',
                        ),
                        'SubInstanceType' => 
                        array (
                          'description' => '子实例类型，返回值：
* **master**：主节点类型。
* **readonly**：只读实例类型。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                          ),
                          'example' => 'master',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"RequestId\\": \\"794120D1-E0CF-4713-BAE4-EBAEA04506AF\\",\\n  \\"RedisProxyList\\": {\\n    \\"NodeInfo\\": [\\n      {\\n        \\"Capacity\\": \\"5120\\",\\n        \\"Connection\\": \\"320000\\",\\n        \\"NodeType\\": \\"proxy\\",\\n        \\"Bandwidth\\": \\"96\\",\\n        \\"NodeId\\": \\"r-bp10noxlhcoim2****-proxy-3#542****\\"\\n      }\\n    ]\\n  },\\n  \\"RedisShardList\\": {\\n    \\"NodeInfo\\": [\\n      {\\n        \\"Capacity\\": \\"2048\\",\\n        \\"Connection\\": \\"10000\\",\\n        \\"NodeType\\": \\"db\\",\\n        \\"Bandwidth\\": \\"96\\",\\n        \\"NodeId\\": \\"r-bp10noxlhcoim2****-db-0#688****\\",\\n        \\"SubInstanceType\\": \\"master\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RedisShardList\\":\\n    {\\"NodeInfo\\":[{\\n  \\"NodeId\\":\\"r-xxxxxxxxxxxxxxx-proxy-3#5425423\\",\\n  \\"NodeType\\":\\"proxy\\",\\n   \\"Capacity\\":\\"5120\\",\\n   \\"Connection\\":\\"320000\\",\\n   \\"Bandwidth\\":96\\n\\t\\t\\t\\t }]},\\n  \\"InstanceId\\":\\"r-xxxxxxxxxxxxxxx\\",\\n  \\"RequestId\\":\\"5F749626-2B6A-4DC2-A010-B51F7C33084E\\"\\n }"},{"type":"xml","example":"<DescribeLogicInstanceTopologyResponse>\\n    <RedisShardList>\\n        <NodeInfo>\\n            <Capacity>2048</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>db</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-db-0#14965569</NodeId>\\n            <Connection>30000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>2048</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>db</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-db-1#14965575</NodeId>\\n            <Connection>30000</Connection>\\n        </NodeInfo>\\n    </RedisShardList>\\n    <RequestId>B5250FA2-CB49-4B68-9263-721099AC928A</RequestId>\\n    <InstanceId>r-bp10noxlhcoim2****</InstanceId>\\n    <RedisProxyList>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-0#14965583</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-1#14965585</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-2#14965587</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-3#14965589</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-4#14965591</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n        <NodeInfo>\\n            <Capacity>5120</Capacity>\\n            <Bandwidth>96</Bandwidth>\\n            <NodeType>proxy</NodeType>\\n            <NodeId>r-bp10noxlhcoim2****-proxy-5#14965571</NodeId>\\n            <Connection>20000</Connection>\\n        </NodeInfo>\\n    </RedisProxyList>\\n</DescribeLogicInstanceTopologyResponse>","errorExample":"<DescribeLogicInstanceTopologyResponse>\\n <RedisShardList>\\n   <NodeInfo>\\n     <NodeId>r-xxxxxxxxxxxxxxx-proxy-3#5425423</NodeId>\\n     <NodeType>proxy</NodeType>\\n     <Capacity>5120</Capacity>\\n     <Connection>320000</Connection>\\n     <Bandwidth>96</Bandwidth>\\n   </NodeInfo>\\n </RedisShardList>\\n <InstanceId>r-xxxxxxxxxxxxxxx</InstanceId>\\n <RequestId>5F749626-2B6A-4DC2-A010-B51F7C33084E</RequestId>\\n</DescribeLogicInstanceTopologyResponse>"}]',
      'title' => '查询Redis实例的逻辑拓扑结构',
      'summary' => '查询Redis实例的逻辑拓扑结构。',
      'description' => '仅集群与读写分离架构实例支持本接口。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartInstance' => 
    array (
      'summary' => '重启运行中的Redis实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重启时间，取值：
* **Immediately**：默认值，立即重启。
* **MaintainTime**：可运维时间段重启。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => 'Immediately',
              3 => 'MaintainTime',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'UpgradeMinorVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重启时是否将小版本升级到最新版，取值：
* **true**：升级小版本。
* **false**：不升级小版本。

> 默认值：**true**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFC9161F-15E3-4A6E-8A99-C33331****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '11111****',
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
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFC9161F-15E3-4A6E-8A99-C33331****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"TaskId\\": \\"11111****\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartInstanceResponse>\\r\\n    <RequestId>EFC9161F-15E3-4A6E-8A99-6661****</RequestId>\\r\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\r\\n    <TaskId>11111****</TaskId>\\r\\n</RestartInstanceResponse>","errorExample":""}]',
      'title' => '重启实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FlushExpireKeys' => 
    array (
      'summary' => '清除Redis实例中的过期Key。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'EffectiveTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行时间，取值：
* **Immediately**：立即执行，默认值。
* **MaintainTime**：在可维护时间段执行。

> 您可以调用[ModifyInstanceMaintainTime](~~61000~~)接口修改Redis实例的可维护时间段。',
            'type' => 'string',
            'required' => false,
            'example' => 'Immediately',
            'default' => '0',
            'enum' => 
            array (
              0 => 'Immediately',
              1 => 'MaintainTime',
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
                'example' => '82E30AB7-E3A4-46AC-88A0-3E4DCDC5****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '21986****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"82E30AB7-E3A4-46AC-88A0-3E4DCDC5****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"TaskId\\": \\"21986****\\"\\n}","errorExample":""},{"type":"xml","example":"<FlushExpireKeysResponse>\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\n    <RequestId>82E30AB7-E3A4-46AC-88A0-3E4DCDC5****</RequestId>\\n    <TaskId>21986****</TaskId>\\n</FlushExpireKeysResponse>","errorExample":""}]',
      'title' => '清除过期Key',
      'description' => '该API对应的控制台操作请参见[清除数据](~~43881~~)。

> 过期key清除后不可恢复，请谨慎使用该接口。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FlushInstanceForDB' => 
    array (
      'summary' => '清理实例中指定DB的数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定DB的索引号，取值为[0, 255]。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => 'Schema of Response',
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","type":"json"}]',
      'title' => '清理实例指定DB的数据',
      'description' => '云数据库Redis版与Tair实例支持256个DB，从DB0到DB255。每个DB没有单独的内存占用量限制，DB可使用的内存容量受该实例的总内存限制。您可以通过`SELECT`命令切换DB，更多信息请参见[Redis DB](~~38688~~)。
> 本接口仅支持云原生实例（原云盘）集群架构。',
    ),
    'FlushInstance' => 
    array (
      'summary' => '清空Redis实例中的数据，不可恢复。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E7',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E7\\"\\n}","errorExample":"{\\n  \\"RequestId\\":\\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E7\\"\\n}"},{"type":"xml","example":"<FlushInstanceResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</FlushInstanceResponse>","errorExample":"<FlushInstanceResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</FlushInstanceResponse>"}]',
      'title' => '清空实例中的数据',
      'description' => '该API对应的控制台操作请参见[清除数据](~~43881~~)。

> 调用此API删除数据前请妥善备份数据或确认数据无需备份。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchInstanceHA' => 
    array (
      'summary' => '执行主从切换（即切换节点角色），可应用于容灾演练、多可用区场景下的应用就近连接等需求。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据分片节点ID，您可以调用[DescribeRoleZoneInfo](~~190794~~)获取CustinsId参数，多个数据分片节点ID之间使用英文逗号（,）分隔，如需指定所有节点请输入`all`。
> 当Redis实例为集群或读写分离架构时，本参数才可用，且必填。
',
            'type' => 'string',
            'required' => false,
            'example' => '56****19,56****20',
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

> 您可以调用[ModifyInstanceMaintainTime](~~61000~~)修改Redis实例的可维护时间段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'SwitchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切换模式，取值：
* **AvailablePriority**：可用性优先，不考虑主从延迟，立即执行主从切换，可能会丢失少量数据。
* **ReliabilityPriority**：可靠性优先，确保主从同步无延迟时才执行主从切换，不会丢失数据。该模式在写入量较大且持续存在同步延迟的场景下，可能会造成主从切换失败。

> 您需要根据业务场景对数据、服务等方面的需求进行衡量，然后选取切换模式。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'AvailablePriority' => 'AvailablePriority',
              'ReliabilityPriority' => 'ReliabilityPriority',
            ),
            'example' => 'AvailablePriority',
            'default' => 'ReliabilityPriority',
            'enum' => 
            array (
              0 => 'AvailablePriority',
              1 => 'ReliabilityPriority',
              2 => 'DataConsistency',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchInstanceHAResponse>\\n    <RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\n</SwitchInstanceHAResponse>","errorExample":""}]',
      'title' => '切换实例HA',
      'description' => '> 关于多可用区场景下的应用就近连接的详细说明，请参见[场景示例](~~164222~~)。

调用本接口时，实例类型为高可用或双副本。

调用本接口将产生下述影响：
* 触发节点角色切换后，执行切换的数据节点将出现秒级的只读状态和连接闪断，请确保您的应用具备重连机制。
* 实例处于切换中状态时，您将无法执行实例级别的操作（例如变更配置、迁移可用区等）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SyncDtsStatus' => 
    array (
      'summary' => '在使用DTS迁移或同步Redis实例的数据前，您可以调用SyncDtsStatus可以限制该Redis实例执行变配操作，避免因变配引起的数据迁移或同步任务失败。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否限制实例执行变配操作，取值：
* **0**：不限制。
* **1**：限制，执行变配时将提示用户。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DTS的实例ID，您可以登录[DTS控制台](https://dts.console.aliyun.com/)查看。
> 由于Redis实例可能同时处于多个DTS的迁移或同步任务中时，当您需要取消对Redis实例的变配限制时，您可以传入本参数以避免重复调用本接口。',
            'type' => 'string',
            'required' => false,
            'example' => ' dtss0611o8vv90****',
            'maxLength' => 64,
            'minLength' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<SyncDtsStatusResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</SyncDtsStatusResponse>","errorExample":""}]',
      'title' => '设置是否限制实例变配',
      'description' => '- 本接口仅适用于<props="china">经典</props><props="intl">本地盘</props>版实例。
- 数据迁移或同步任务完成后，您可以再次调用本接口，解除变配限制。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveSubInstance' => 
    array (
      'summary' => '将子实例从分布式实例中移除并转变为普通Redis实例（数据会被保留）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '分布式实例中的子实例ID，可调用[DescribeGlobalDistributeCache](~~188699~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveSubInstanceResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</RemoveSubInstanceResponse>","errorExample":""}]',
      'title' => '将子实例转换为普通实例',
      'description' => '> 完成转换后，子实例将转变为普通Redis实例，您可以在对应地域的实例列表中找到该实例并进行管理。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LockDBInstanceWrite' => 
    array (
      'summary' => '锁定后，实例将仅支持读取数据，不支持写入。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
        'abilityTreeCode' => '192854',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
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
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'LockReason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '锁定原因。',
            'type' => 'string',
            'required' => true,
            'example' => '锁写操作验证。',
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
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '2BE6E619-A657-42E3-AD2D-18F8428A****',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例ID。

',
                'type' => 'string',
                'example' => 'r-2ev03avw0r0552***',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '21986****',
              ),
              'LockReason' => 
              array (
                'description' => '锁定原因。',
                'type' => 'string',
                'example' => '锁定写操作测试。',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2BE6E619-A657-42E3-AD2D-18F8428A****\\",\\n  \\"DBInstanceName\\": \\"r-2ev03avw0r0552***\\",\\n  \\"TaskId\\": 0,\\n  \\"LockReason\\": \\"锁定写操作测试。\\"\\n}","type":"json"}]',
      'title' => '锁定实例写操作',
    ),
    'UnlockDBInstanceWrite' => 
    array (
      'summary' => '对写锁定的实例进行解锁，解锁后，实例支持读取、写入数据。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '192855',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
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
            'example' => 'r-bp1zxszhcgatnx****',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
              'DBInstanceName' => 
              array (
                'description' => '实例名。',
                'type' => 'string',
                'example' => 'r-2ev03avw0r0552***',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\",\\n  \\"DBInstanceName\\": \\"r-2ev03avw0r0552***\\",\\n  \\"TaskId\\": 0\\n}","type":"json"}]',
      'title' => '解锁实例写锁定操作',
    ),
    'ModifyInstanceNetExpireTime' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的经典网络连接地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ClassicExpiredDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '延长经典网络连接地址的保留时间。取值：**14**、**30**、**60**或**120**，单位为天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '14',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C4AF387-1EA3-4C84-8013-3F6B973EDDF5',
              ),
              'NetInfoItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'NetInfoItem' => 
                  array (
                    'description' => '经典网络连接地址延长时间的详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Port' => 
                        array (
                          'description' => 'Redis服务端口。',
                          'type' => 'string',
                          'example' => '6379',
                        ),
                        'DBInstanceNetType' => 
                        array (
                          'description' => '网络类型，返回值为**Classic**（经典网络）。',
                          'type' => 'string',
                          'example' => 'Classic',
                        ),
                        'ConnectionString' => 
                        array (
                          'description' => '经典网络连接地址。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
                        ),
                        'ExpiredTime' => 
                        array (
                          'description' => '经典网络地址的过期时间。',
                          'type' => 'string',
                          'example' => '2019-08-01T09:29:18Z',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => '实例在经典网络中的IP地址。',
                          'type' => 'string',
                          'example' => '100.118.142.***',
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
            'errorCode' => 'ClassicExpiredDaysError',
            'errorMessage' => 'The ClassicExpiredDays can not set to 0.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"RequestId\\": \\"9C4AF387-1EA3-4C84-8013-3F6B973EDDF5\\",\\n  \\"NetInfoItems\\": {\\n    \\"NetInfoItem\\": [\\n      {\\n        \\"Port\\": \\"6379\\",\\n        \\"DBInstanceNetType\\": \\"Classic\\",\\n        \\"ConnectionString\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n        \\"ExpiredTime\\": \\"2019-08-01T09:29:18Z\\",\\n        \\"IPAddress\\": \\"100.118.142.***\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n\\t\\"InstanceId\\": \\"r-xxxxxxxxxxxxxxx\\",\\n\\t\\"RequestId\\": \\"9C4AF387-1EA3-4C84-8013-3F6B973EDDF5\\",\\n\\t\\"NetInfoItems\\": {\\n\\t\\t\\"NetInfoItem\\": [{\\n\\t\\t\\t\\t\\"ConnectionString\\": \\"r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com\\",\\n\\t\\t\\t\\t\\"Port\\": \\"6379\\",\\n\\t\\t\\t\\t\\"DBInstanceNetType\\": \\"Classic\\",\\n\\t\\t\\t\\t\\"IPAddress\\": \\"xxx.xxx.xxx.xxx\\",\\n\\t\\t\\t\\t\\"ExpiredTime\\": \\"2018-11-18T08:04:46Z\\"\\n\\t\\t\\t}\\n\\t\\t]\\n\\t}\\n}"},{"type":"xml","example":"<ModifyInstanceNetExpireTimeResponse>\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\n    <RequestId>9C4AF387-1EA3-4C84-8013-3F6B973EDDF5</RequestId>\\n    <NetInfoItems>\\n    <NetInfoItem>\\n        <ConnectionString>r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com</ConnectionString>\\n        <Port>6379</Port>\\n        <DBInstanceNetType>Classic</DBInstanceNetType>\\n        <IPAddress>100.118.142.***</IPAddress>\\n        <ExpiredTime>2019-08-01T09:29:18Z</ExpiredTime>\\n    </NetInfoItem>\\n    </NetInfoItems>\\n</ModifyInstanceNetExpireTimeResponse>","errorExample":"<ModifyInstanceNetExpireTimeResponse>\\n <InstanceId>r-xxxxxxxxxxxxxxx</InstanceId>\\n <RequestId>9C4AF387-1EA3-4C84-8013-3F6B973EDDF5</RequestId>\\n <NetInfoItems>\\n   <NetInfoItem>\\n     <ConnectionString>r-xxxxxxxxxxxxxxx.redis.rds.aliyuncs.com</ConnectionString>\\n     <Port>6379</Port>\\n     <DBInstanceNetType>Classic</DBInstanceNetType>\\n     <IPAddress>xxx.xxx.xxx.xxx</IPAddress>\\n     <ExpiredTime>2018-11-18T08:04:46Z</ExpiredTime>\\n   </NetInfoItem>\\n </NetInfoItems>\\n</ModifyInstanceNetExpireTimeResponse>"}]',
      'title' => '延长经典网络地址的保留时间',
      'summary' => '若Redis实例之前执行过由经典网络向VPC网络切换，并保留了经典网络连接地址，则可调用ModifyInstanceNetExpireTime延长经典网络连接地址的保留时间。',
      'description' => '该API对应的控制台操作请参见[修改原经典网络地址的使用期限](~~60062~~)。

> 将实例从经典网络切换到VPC网络的方法请参见[SwitchNetwork](~~61005~~)。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NewConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新连接地址的前缀。Redis连接地址格式为：`<前缀>.redis.rds.aliyuncs.com`。地址前缀需由小写英文字母、数字组成，但必须以小写字母开头，长度为8~40个字符。
> 请求参数**NewConnectionString**和**Port**两者中必须传入一项。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'standardredis123',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis实例当前的连接地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis服务的端口号，取值范围：**1024**~**65535**。
> 请求参数**NewConnectionString**和**Port**两者中必须传入一项。',
            'type' => 'string',
            'required' => false,
            'example' => '6379',
            'maxLength' => 5,
            'minLength' => 1,
            'pattern' => '^\\d+$',
          ),
        ),
        4 => 
        array (
          'name' => 'IPType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址的网络类型，取值：
* **Private**：专有网络。
* **Public**：公网。',
            'type' => 'string',
            'required' => false,
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
                'example' => '1790D68A-465C-44E3-BC24-9732652961F9',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NewConnectionStringNotSupport',
            'errorMessage' => 'Specified newConnectionString is not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidIPType.Format',
            'errorMessage' => 'Specified parameter IPType is not supported.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidConnectionStringOrPort.Duplicate',
            'errorMessage' => 'Specified connection string or port want to be modified is the same with current net type.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidConnectionString.Format',
            'errorMessage' => 'Specified connection string is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1790D68A-465C-44E3-BC24-9732652961F9\\"\\n}","errorExample":"{\\n\\t\\"code\\": \\"200\\",\\n\\t\\"data\\": {\\n\\t\\t\\"RequestId\\": \\"A7CCD05D-74FE-44DE-A4F0-C3EE58A252BE\\"\\n\\t},\\n\\t\\"successResponse\\": true\\n}"},{"type":"xml","example":"<ModifyDBInstanceConnectionStringResponse>\\n\\t<RequestId>1790D68A-465C-44E3-BC24-9732652961F9</RequestId>\\n</ModifyDBInstanceConnectionStringResponse>","errorExample":"<ModifyDBInstanceConnectionStringResponse>\\n\\t<code>200</code>\\n\\t<data>\\n\\t\\t<RequestId>A7CCD05D-74FE-44DE-A4F0-C3EE58A252BE</RequestId>\\n\\t</data>\\n\\t<successResponse>true</successResponse>\\n</ModifyDBInstanceConnectionStringResponse>"}]',
      'title' => '修改实例的连接地址和端口',
      'summary' => '修改Redis实例的连接地址和端口。',
      'description' => '该API对应的控制台操作请参见[修改连接地址](~~85683~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyIntranetAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'BandWidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要增加的带宽，单位为MB/s。取值为大于等于0的整数。通常最大可传入当前实例规格默认最大带宽的2倍（规格对应带宽信息，请参见[实例规格查询导航](~~26350~~)），但是也存在下述限制：
* 单实例的带宽不能超过所在主机的75%，主机规格及其带宽信息，请参见[主机规格详情](~~206343~~)。
* 所在主机上所有实例的带宽总和不能超过所在主机的150%，您可以设置超配满足错峰部署的带宽使用。具体操作，请参见[设置集群超配降低成本](~~183798~~)。

> 标准架构的实例如果不传入本参数，该实例的带宽会在当前带宽的基础上增加一倍。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据节点ID，您可以调用[DescribeClusterMemberInfo](~~193462~~)获取，传入多个时使用英文逗号（,）分隔。
> 当Redis实例为[集群架构](~~52228~~)时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '97AC8948-D7E4-457E-BE03-850CF04E****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"97AC8948-D7E4-457E-BE03-850CF04E****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyIntranetAttributeResponse>\\r\\n    <RequestId>97AC8948-D7E4-457E-BE03-850CF04E****</RequestId>\\r\\n</ModifyIntranetAttributeResponse>","errorExample":""}]',
      'title' => '调整专属集群中Redis实例的内网带宽',
      'summary' => '临时调整专属集群中Redis实例的内网带宽。',
      'description' => '> * 本接口仅适用于通过专属集群创建的Redis实例<props="china">，相关的控制台操作介绍及使用限制，请参见[修改带宽策略](~~206257~~)</props>。如需调整普通Redis实例的带宽，请调用[EnableAdditionalBandwidth](~~206173~~)接口。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeIntranetAttribute' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
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
              'AutoRenewal' => 
              array (
                'description' => '购买的带宽是否开启了自动续订，取值：
* **true**：已开启。
* **false**：未开启。

> 如果未购买带宽，则不返回本参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '25D42CC3-FBA1-4AEC-BCE2-B8DD3137****',
              ),
              'ExpireTime' => 
              array (
                'description' => '临时带宽的过期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z。
> 如果实例未执行过临时调整带宽或临时带宽已过期，本参数返回**0**。',
                'type' => 'string',
                'example' => '0',
              ),
              'IntranetBandwidth' => 
              array (
                'description' => '实例当前的内网带宽，本参数为实例中所有分片的带宽总和，单位MB/s。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '102',
              ),
              'HasPrePaidBandWidthOrderRunning' => 
              array (
                'description' => '实例是否有未到期的带宽包，取值：
* **true**：存在未到期的带宽包。
* **false**：不存在未到期的带宽包。
> 如果实例未购买额外的带宽，则不返回本参数。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BandwidthExpireTime' => 
              array (
                'description' => '购买带宽的过期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z。
> 如果实例未购买额外的带宽，则不返回本参数。',
                'type' => 'string',
                'example' => '2021-03-06T16:00:00Z',
              ),
              'BandwidthPrePaid' => 
              array (
                'description' => '带宽包付费类型，取值：
- **0**：按量付费。
- **1**：预付费。',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AutoRenewal\\": true,\\n  \\"RequestId\\": \\"25D42CC3-FBA1-4AEC-BCE2-B8DD3137****\\",\\n  \\"ExpireTime\\": \\"0\\",\\n  \\"IntranetBandwidth\\": 102,\\n  \\"HasPrePaidBandWidthOrderRunning\\": true,\\n  \\"BandwidthExpireTime\\": \\"2021-03-06T16:00:00Z\\",\\n  \\"BandwidthPrePaid\\": \\"0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeIntranetAttributeResponse>\\n    <IntranetBandwidth>102</IntranetBandwidth>\\n    <RequestId>25D42CC3-FBA1-4AEC-BCE2-B8DD3137****</RequestId>\\n    <BandwidthExpireTime>2021-03-06T16:00:00Z</BandwidthExpireTime>\\n    <AutoRenewal>true</AutoRenewal>\\n    <ExpireTime>0</ExpireTime>\\n</DescribeIntranetAttributeResponse>","errorExample":""}]',
      'title' => '查询实例的带宽信息',
      'summary' => '查询Redis实例当前的带宽。',
      'description' => '您可以调用[EnableAdditionalBandwidth](~~206173~~)接口为实例购买带宽。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchNetwork' => 
    array (
      'summary' => '切换Redis实例的专有网络VPC或交换机，如果Redis实例为经典网络，则会将其切换为专有网络。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'TargetNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要切换到的网络类型，取值固定为**VPC**，即专有网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'VPC',
            'default' => 'VPC',
            'enum' => 
            array (
              0 => 'CLASSIC',
              1 => 'VPC',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要切换到的目标专有网络ID，可调用专有网络VPC的[DescribeVpcs](~~35739~~)获取。

> * 目标专有网络所属的地域需和Redis实例相同。
> * 传入本参数后，您还需要传入**VSwitchId**参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vpc-bp1nme44gek34slfc****',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要切换到的目标专有网络下的虚拟交换机ID，可调用专有网络VPC的[DescribeVpcs](~~35739~~)获取。
> 目标虚拟交换机所属的可用区需和Redis实例相同。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        4 => 
        array (
          'name' => 'RetainClassic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果实例当前为经典网络，将其切换至专有网络时，是否保留原经典网络连接地址，取值：
* **True**：保留。
* **False**：默认值，不保留。

> 当实例的网络类型为经典网络时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'True',
          ),
        ),
        5 => 
        array (
          'name' => 'ClassicExpiredDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '经典网络连接地址的保留时间，取值：**14**、**30**、**60**、**120**，单位为天。

> * 当**RetainClassic**取值为**True**，本参数才可用且必须传入。
> * 完成切换后，您还可以调用[ModifyInstanceNetExpireTime](~~61010~~)修改经典网络连接地址的保留时间。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
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
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '578678678',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0997EE8-F4C2-4503-9168-85177ED78C70',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidToken.Malformed',
            'errorMessage' => 'The Specified parameter Token is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'VpcServiceError',
            'errorMessage' => 'Invoke vpc service failed.',
          ),
          2 => 
          array (
            'errorCode' => 'IzNotSupportVpcError',
            'errorMessage' => 'Specify iz not support vpc.',
          ),
          3 => 
          array (
            'errorCode' => 'IzNotSupportSwitchNetworkError',
            'errorMessage' => 'Specify iz not support switch network.',
          ),
          4 => 
          array (
            'errorCode' => 'VpcVerifyError',
            'errorMessage' => 'VpcId is wrong.',
          ),
          5 => 
          array (
            'errorCode' => 'VpcAndVSwitchNotChange',
            'errorMessage' => 'VpcId and vSwitchId not change.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAlreadyExists',
            'errorMessage' => 'Resource already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'InsufficientResourceCapacity',
            'errorMessage' => 'ip resource is conflict with other custins.',
          ),
          2 => 
          array (
            'errorCode' => 'VpcFreePasswordNoSupport',
            'errorMessage' => 'The custins opend VPCFreePassword not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"578678678\\",\\n  \\"RequestId\\": \\"F0997EE8-F4C2-4503-9168-85177ED78C70\\"\\n}","errorExample":"{\\n    \\"TaskId\\":\\"578678678\\",\\n    \\"requestId\\":\\"F0997EE8-F4C2-4503-9168-85177ED78C70\\"\\n}"},{"type":"xml","example":"<SwitchNetworkResponse>\\n    <TaskId>578678678</TaskId>\\n    <requestId>F0997EE8-F4C2-4503-9168-85177ED78C70</requestId>\\n</SwitchNetworkResponse>","errorExample":"<SwitchNetworkResponse>\\n <TaskId>578678678</TaskId>\\n <requestId>F0997EE8-F4C2-4503-9168-85177ED78C70</requestId>\\n</SwitchNetworkResponse>"}]',
      'title' => '切换专有网络VPC或交换机',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocateInstancePublicConnection' => 
    array (
      'summary' => '为Redis实例申请公网连接地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionStringPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网连接地址的前缀，需由小写英文字母与数字组成，以小写字母开头，长度为8~40个字符。
> 公网连接地址格式为：`<前缀>.redis.rds.aliyuncs.com`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis服务端口，取值范围：**1024**~**65535**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6379',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20C8341E-B5AD-4B24-BD82-D73241522ABF',
              ),
            ),
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
            'errorCode' => 'MissingConnectionString',
            'errorMessage' => 'ConnectionStringPrefix is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingPort',
            'errorMessage' => 'Port is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'NetTypeExists',
            'errorMessage' => 'Specified net type already existed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidConnectionString.Format',
            'errorMessage' => 'Specified connection string is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NewSSLAlreadyEnabled',
            'errorMessage' => 'new SSL have already been enabled.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'SSLNotSupportNetType',
            'errorMessage' => 'SSL instance does not support create public network.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20C8341E-B5AD-4B24-BD82-D73241522ABF\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateInstancePublicConnectionResponse>\\r\\n  <RequestId>20C8341E-B5AD-4B24-BD82-D73241522ABF</RequestId>\\r\\n</AllocateInstancePublicConnectionResponse>","errorExample":""}]',
      'title' => '为实例申请公网连接地址',
      'description' => '该API对应的控制台操作请参见[外网连接](~~43850~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseInstancePublicConnection' => 
    array (
      'summary' => '释放Redis实例的公网连接地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待释放的公网连接地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '88F850B5-CC68-48B4-83CA-5497C3C191DE',
              ),
            ),
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
            'errorCode' => 'MissingConnectionString',
            'errorMessage' => 'CurrentConnectionString is mandatory for this action.',
          ),
          2 => 
          array (
            'errorCode' => 'AtLeastOneNetTypeExists',
            'errorMessage' => 'Current DB instance net type does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"88F850B5-CC68-48B4-83CA-5497C3C191DE\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseInstancePublicConnectionResponse>\\r\\n  <RequestId>88F850B5-CC68-48B4-83CA-5497C3C191DE</RequestId>\\r\\n</ReleaseInstancePublicConnectionResponse>","errorExample":""}]',
      'title' => '释放公网连接地址',
      'description' => '该API对应的控制台操作请参见[释放外网连接地址](~~125424~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AllocateDirectConnection' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionString',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直连地址的前缀，由小写英文字母或数字组成，以小写字母开头，长度为8~40字符。默认为实例ID+`-direct`，例如实例ID为r-8vbwsicr5d5gse****，则该参数默认为`r-8vbwsicr5d5gse****-direct`。',
            'type' => 'string',
            'required' => false,
            'example' => 'redisdirect123',
          ),
        ),
        2 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端口号，取值范围为**1024**~**65535**，默认值为**6379**。',
            'type' => 'string',
            'required' => false,
            'example' => '6379',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetTypeExists',
            'errorMessage' => 'Specified net type already existed',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidConnType',
            'errorMessage' => 'Specified DB instance conn type is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'TaskHasExist',
            'errorMessage' => 'The task already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'ConnectionStringAlreadyExists',
            'errorMessage' => 'Specified connection string already exists in the Aliyun RDS.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidConnectionString.Format',
            'errorMessage' => 'Specified connection string is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'DirectConnectionAlreadyExists',
            'errorMessage' => 'Specified instance direct connection already exists.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidVPCParamGroup',
            'errorMessage' => 'Specified vpc param group is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidConnectionString',
            'errorMessage' => 'ConnectionString is invalid, valid regex: ^\\w+$',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectMinorVersion',
            'errorMessage' => 'Current engine minor version does not support operations.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceStatus.NotSupport',
            'errorMessage' => 'Instance status does not support this operation.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","type":"json"}]',
      'title' => '为Redis集群实例申请直连地址',
      'summary' => '为Redis集群实例申请直连地址。',
      'description' => '客户端可通过直连地址绕过代理，像连接原生Redis集群一样连接阿里云Redis集群，从而降低链路开销，进一步提升Redis服务的响应速度。更多详情请参见[开通直连访问](~~146901~~)。

调用本接口的Redis实例需满足下述条件：
* Redis实例为集群架构。
* <props="china">部署模式为经典。</props><props="intl">实例为本地盘版。</props>
* Redis实例的网络类型为专有网络。如果当前为经典网络，您可以调用[SwitchNetwork](~~61005~~)接口将其切换为专有网络。
* Redis实例的SSL加密功能需处于关闭状态。如果已开启SSL加密功能，您可以调用[ModifyInstanceSSL](~~96194~~)接口将其关闭。
* Redis实例所属的交换机需具备充足的可分配的IP地址数，详情请参见[查询Redis实例所属交换机可分配的IP地址数](~~183151~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseDirectConnection' => 
    array (
      'summary' => '释放Redis集群实例的直连地址。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'NetTypeNotExists',
            'errorMessage' => 'Specified net type not existed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceStatus.NotSupport',
            'errorMessage' => 'Instance status does not support this operation.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseDirectConnectionResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</ReleaseDirectConnectionResponse>","errorExample":""}]',
      'title' => '释放Redis集群实例的直连地址',
      'description' => '客户端可通过直连地址绕过代理，像连接原生Redis集群一样连接阿里云Redis集群，从而降低链路开销，进一步提升Redis服务的响应速度。更多信息，请参见[开通直连访问](~~146901~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchInstanceProxy' => 
    array (
      'summary' => '开启或关闭专属集群中Redis集群实例的代理模式。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchInstanceProxyResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</SwitchInstanceProxyResponse>","errorExample":""}]',
      'title' => '开启或关闭Redis集群实例的代理模式',
      'description' => '关于代理模式的详细介绍，请参见[Redis Proxy特性说明](~~142959~~)。
调用本接口时，需满足下述条件：
* Redis实例是通过专属集群创建的，更多信息，请参见[云数据库专属集群MyBase](~~141455~~)。
* Redis实例为[集群架构](~~52228~~)。

> 调用本接口前，您需要调用[DescribeDedicatedClusterInstanceList](~~229522~~)接口，通过返回参数**ProxyCount**的值来判断当前实例是否开启了代理模式。例如，返回值为0时，表示未开启代理模式；返回值大于0时，即表示已开启代理模式。',
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
            'description' => '实例ID。多个实例ID用英文逗号（,）分隔。
> 最多允许传入30个实例ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，取值范围为**1**~**12**，单位为月。实例即将到期时，系统将自动地以选择的续费时长进行续费。
> 当**AutoRenew**参数取值为**true**时，本参数才可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭自动续费，取值：
* **true**：开启。
* **false**。关闭。

> 默认值：**false**。',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'False',
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
                'example' => '52D901ED-E0A5-42FB-B9DB-39C295C3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"52D901ED-E0A5-42FB-B9DB-39C295C3****\\"\\n}","type":"json"}]',
      'title' => '开启或关闭实例自动续费',
      'summary' => '开启或者关闭Redis实例的到期前自动续费功能。',
      'description' => '> 自动续费将于实例到期前7天触发。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePrice' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '56424',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
          4 => 'FEATUREkvstore29KPQR',
          5 => 'FEATUREkvstoreORY3QZ',
          6 => 'FEATUREkvstoreMPSY6Q',
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
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用实例的存储容量指定规格，单位为MB。本参数仅查询Redis社区版经典部署模式的实例，推荐您使用**InstanceClass**参数精确地指定一个规格。
> 指定**InstanceClass**参数后，无需再指定本参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1024',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用**InstanceClass**编码指定实例规格。

**InstanceClass**查询步骤：
1. 在[规格查询导航](~~26350~~)中，根据需要选择实例类型，点击其**架构类型**列以打开规格文档。
2. 在规格文档的实例规格表中，选择需要的实例规格，并找到其**InstanceClass**列的编码。

查询云原生版集群架构实例时，需指定本参数为下述指定参数之一，并在Instances参数中指定具体待查询的实例规格。
- Redis集群架构：redis.cluster.sharding.common.ce
- Tair内存型集群架构：tair.rdb.cluster.sharding.common
- Tair持久内存型集群架构：tair.scm.cluster.sharding.common.ce',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型，取值：
* **BUY**：新购。
* **UPGRADE**：变更配置。
* **RENEW**：续费。
* **CONVERT**：转换付费类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'BUY',
            'enum' => 
            array (
              0 => 'BUY',
              1 => 'UPGRADE',
              2 => 'DOWNGRADE',
              3 => 'RENEW',
              4 => 'CONVERT',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[DescribeZones](~~94527~~)查询。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        5 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值：
* **PostPaid**（默认）：按量付费。
* **PrePaid**：包年包月。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
            'default' => 'PostPaid',
            'enum' => 
            array (
              0 => 'PrePaid',
              1 => 'PostPaid',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'NodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型，取值：
- **STAND_ALONE**：单副本。
- **MASTER_SLAVE**（默认）：高可用（双副本）。',
            'type' => 'string',
            'required' => false,
            'example' => 'MASTER_SLAVE',
            'default' => 'MASTER_SLAVE',
            'enum' => 
            array (
              0 => 'STAND_ALONE',
              1 => 'MASTER_SLAVE',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月时长，单位为月。取值范围：**1**~**9**、**12**、**24**、**36**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'Quantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买实例的数量，取值范围：**1**~**30**，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
> 当**OrderType**为**UPGRADE**或**RENEW**时必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        10 => 
        array (
          'name' => 'Instances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含查询云原生版集群架构实例或多个实例的JSON格式字符串，更多信息请参见Instances参数补充说明。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-b","ShardClass": "tair.scm.with.proxy.standard.2m.8d","ShardCount": "3","Period": "1","Quantity": "1"}]',
          ),
        ),
        11 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '活动ID、业务信息等扩展信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000000',
          ),
        ),
        12 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码，默认值：youhuiquan_promotion_option_id_for_blank，表示无优惠码。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        13 => 
        array (
          'name' => 'ForceUpgrade',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否强制变配，取值：
* **false**：是。
* **true**（默认）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'OrderParamOut',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回订单参数，可选值：
* **false**（默认）：不返回。
* **true**：返回。',
            'type' => 'string',
            'required' => false,
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
              'OrderParams' => 
              array (
                'description' => '订单参数，当OrderParamOut为`true`时返回。',
                'type' => 'string',
                'example' => 'String',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3A40BE4E-1890-4972-889C-FEFA37663635',
              ),
              'Order' => 
              array (
                'description' => '订单信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'OriginalAmount' => 
                  array (
                    'description' => '订单原价。',
                    'type' => 'string',
                    'example' => '0.21',
                  ),
                  'HandlingFeeAmount' => 
                  array (
                    'description' => '手续费。',
                    'type' => 'string',
                    'example' => '0.1',
                  ),
                  'Currency' => 
                  array (
                    'description' => '币种，中国站为CNY（人民币）；国际站为USD（美元）。',
                    'type' => 'string',
                    'example' => 'CNY',
                  ),
                  'DiscountAmount' => 
                  array (
                    'description' => '订单优惠金额。',
                    'type' => 'string',
                    'example' => '0.21',
                  ),
                  'TradeAmount' => 
                  array (
                    'description' => '订单实际交易价。',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'Coupons' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Coupon' => 
                      array (
                        'description' => '优惠券信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '优惠券信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
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
                              'example' => 'test',
                            ),
                            'Description' => 
                            array (
                              'description' => '优惠券描述。',
                              'type' => 'string',
                              'example' => 'coupondemo',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'RuleIds' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RuleId' => 
                      array (
                        'description' => '活动ID。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '活动ID。',
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'ShowDiscountInfo' => 
                  array (
                    'description' => '是否展示折扣信息。',
                    'type' => 'boolean',
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
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1*',
                      ),
                      'OriginalStandAmount' => 
                      array (
                        'description' => '原始官网总价。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '12*',
                      ),
                      'CheapStandAmount' => 
                      array (
                        'description' => '降价后官网总价。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '9*',
                      ),
                      'CheapRate' => 
                      array (
                        'description' => '降价比例。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '30%',
                      ),
                      'Differential' => 
                      array (
                        'description' => '差价优惠（订单总价展示）。',
                        'type' => 'integer',
                        'format' => 'int64',
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
                        'type' => 'integer',
                        'format' => 'int64',
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
                        'type' => 'boolean',
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
                            'example' => '
',
                          ),
                          'FinalFee' => 
                          array (
                            'description' => '优惠后费用。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '
',
                          ),
                          'ProdFee' => 
                          array (
                            'description' => '原价。',
                            'type' => 'number',
                            'format' => 'double',
                          ),
                          'ActivityId' => 
                          array (
                            'description' => '活动ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'OptionCode' => 
                          array (
                            'description' => '优惠ID。',
                            'type' => 'string',
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
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'IsContractActivity' => 
                  array (
                    'description' => '命中合同优惠。',
                    'type' => 'boolean',
                    'example' => 'false
',
                  ),
                  'StandPrice' => 
                  array (
                    'description' => '折扣价。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0
',
                  ),
                  'Code' => 
                  array (
                    'description' => '订单码。',
                    'type' => 'string',
                    'example' => '""
',
                  ),
                  'Message' => 
                  array (
                    'description' => '订单信息。',
                    'type' => 'string',
                    'example' => '""',
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
                    'description' => '活动规格。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RuleDescId' => 
                        array (
                          'description' => '策略ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1111111111',
                        ),
                        'Title' => 
                        array (
                          'description' => '策略标题。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Name' => 
                        array (
                          'description' => '活动名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'SubOrders' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubOrder' => 
                  array (
                    'description' => '优惠券对应的策略。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OriginalAmount' => 
                        array (
                          'description' => '订单原价。',
                          'type' => 'string',
                          'example' => '0.21',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1xxxxxxxxxxxxx',
                        ),
                        'DiscountAmount' => 
                        array (
                          'description' => '订单优惠金额。',
                          'type' => 'string',
                          'example' => '0.21',
                        ),
                        'TradeAmount' => 
                        array (
                          'description' => '订单实际交易价。',
                          'type' => 'string',
                          'example' => '10',
                        ),
                        'RuleIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RuleId' => 
                            array (
                              'description' => '活动ID。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '命中策略的ID。',
                                'type' => 'string',
                                'example' => 'RuleId: 1111111111',
                              ),
                            ),
                          ),
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
                                  'Selected' => 
                                  array (
                                    'description' => '是否外部选中。',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'CouponNo' => 
                                  array (
                                    'description' => '是否使用优惠券，取值说明：

- default或null（默认）：使用优惠券。
- youhuiquan_promotion_option_id_for_blank：不使用优惠券。',
                                    'type' => 'string',
                                    'example' => 'default',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '优惠券名称。',
                                    'type' => 'string',
                                  ),
                                  'Description' => 
                                  array (
                                    'description' => '备注。',
                                    'type' => 'string',
                                  ),
                                  'Show' => 
                                  array (
                                    'description' => '优惠是否展示。',
                                    'type' => 'boolean',
                                  ),
                                  'ActivityExtInfo' => 
                                  array (
                                    'description' => '活动额外信息。',
                                    'type' => 'object',
                                  ),
                                  'OptionCode' => 
                                  array (
                                    'description' => '活动额外信息。',
                                    'type' => 'string',
                                  ),
                                  'PromotionName' => 
                                  array (
                                    'description' => '优惠名称。',
                                    'type' => 'string',
                                  ),
                                  'PromotionOptionNo' => 
                                  array (
                                    'description' => '优惠号。',
                                    'type' => 'string',
                                  ),
                                  'CanPromFee' => 
                                  array (
                                    'description' => '可优惠价格。',
                                    'type' => 'string',
                                  ),
                                ),
                              ),
                            ),
                          ),
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
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'OriginalStandAmount' => 
                            array (
                              'description' => '原始官网总价。',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'CheapStandAmount' => 
                            array (
                              'description' => '降价后官网总价。',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'CheapRate' => 
                            array (
                              'description' => '降价比例。',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'Differential' => 
                            array (
                              'description' => '差价优惠（订单总价展示）。',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'DifferentialName' => 
                            array (
                              'description' => '差价优惠名称。',
                              'type' => 'string',
                            ),
                            'MonthPrice' => 
                            array (
                              'description' => '折合月价。',
                              'type' => 'integer',
                              'format' => 'int64',
                            ),
                            'IsContractActivity' => 
                            array (
                              'description' => '命中合同优惠。',
                              'type' => 'boolean',
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
                                ),
                                'FinalFee' => 
                                array (
                                  'description' => '优惠后费用。',
                                  'type' => 'number',
                                  'format' => 'double',
                                ),
                                'ProdFee' => 
                                array (
                                  'description' => '原价。',
                                  'type' => 'number',
                                  'format' => 'double',
                                ),
                                'ActivityId' => 
                                array (
                                  'description' => '活动id。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                                'OptionCode' => 
                                array (
                                  'description' => '优惠id。',
                                  'type' => 'string',
                                ),
                                'ActivityName' => 
                                array (
                                  'description' => '活动名称。',
                                  'type' => 'string',
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
                                        'example' => '
',
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
                            ),
                          ),
                        ),
                        'StandDiscountPrice' => 
                        array (
                          'description' => '折扣价格。',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'IsContractActivity' => 
                        array (
                          'description' => '命中合同优惠。',
                          'type' => 'boolean',
                        ),
                        'StandPrice' => 
                        array (
                          'description' => '折扣价。',
                          'type' => 'integer',
                          'format' => 'int64',
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
                                  'ModuleCode' => 
                                  array (
                                    'description' => '模块code。',
                                    'type' => 'string',
                                  ),
                                  'ModuleId' => 
                                  array (
                                    'description' => '模块Id。',
                                    'type' => 'string',
                                  ),
                                  'StandPrice' => 
                                  array (
                                    'description' => '折扣价。',
                                    'type' => 'number',
                                    'format' => 'double',
                                  ),
                                  'PricingModule' => 
                                  array (
                                    'description' => '是否计价项。',
                                    'type' => 'boolean',
                                  ),
                                  'ModuleName' => 
                                  array (
                                    'description' => '模块名称。',
                                    'type' => 'string',
                                  ),
                                  'DiscountFee' => 
                                  array (
                                    'description' => '折扣费用。',
                                    'type' => 'number',
                                    'format' => 'double',
                                  ),
                                  'TotalProductFee' => 
                                  array (
                                    'description' => '产品原价。',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.0
',
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
                                    'example' => '0.0
',
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
                                            'Type' => 
                                            array (
                                              'description' => '属性类型。',
                                              'type' => 'integer',
                                              'format' => 'int64',
                                            ),
                                            'Value' => 
                                            array (
                                              'description' => '属性类型。',
                                              'type' => 'string',
                                            ),
                                            'Code' => 
                                            array (
                                              'description' => '属性代码。',
                                              'type' => 'string',
                                            ),
                                            'Name' => 
                                            array (
                                              'description' => '属性名称。',
                                              'type' => 'string',
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
                                      ),
                                      'OriginalStandAmount' => 
                                      array (
                                        'description' => '原始官网总价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                      ),
                                      'CheapStandAmount' => 
                                      array (
                                        'description' => '降价后官网总价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                      ),
                                      'CheapRate' => 
                                      array (
                                        'description' => '降价比例。',
                                        'type' => 'number',
                                        'format' => 'double',
                                      ),
                                      'Differential' => 
                                      array (
                                        'description' => '差价优惠（订单总价展示）。',
                                        'type' => 'number',
                                        'format' => 'double',
                                      ),
                                      'DifferentialName' => 
                                      array (
                                        'description' => '差价优惠名称。',
                                        'type' => 'string',
                                      ),
                                      'MonthPrice' => 
                                      array (
                                        'description' => '折合月价。',
                                        'type' => 'number',
                                        'format' => 'double',
                                      ),
                                      'IsContractActivity' => 
                                      array (
                                        'description' => '命中合同优惠。',
                                        'type' => 'boolean',
                                      ),
                                      'IsShow' => 
                                      array (
                                        'description' => '是否展示降价幅度。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                      ),
                                      'StartTime' => 
                                      array (
                                        'description' => '活动开始时间。',
                                        'type' => 'string',
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
                                  'PromotionName' => 
                                  array (
                                    'description' => '优惠活动名称。',
                                    'type' => 'string',
                                  ),
                                  'PromotionId' => 
                                  array (
                                    'description' => '优惠ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                  ),
                                  'FinalPromFee' => 
                                  array (
                                    'description' => '优惠金额。',
                                    'type' => 'number',
                                    'format' => 'double',
                                  ),
                                  'OptionCode' => 
                                  array (
                                    'description' => '优惠券代号。',
                                    'type' => 'string',
                                  ),
                                  'PromType' => 
                                  array (
                                    'description' => '优惠子类型。',
                                    'type' => 'string',
                                  ),
                                  'ActivityExtInfo' => 
                                  array (
                                    'description' => '活动额外信息。',
                                    'type' => 'object',
                                  ),
                                  'DerivedPromType' => 
                                  array (
                                    'description' => '优惠子类型。',
                                    'type' => 'string',
                                  ),
                                  'PromotionCode' => 
                                  array (
                                    'description' => '优惠码。',
                                    'type' => 'string',
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
            'errorCode' => 'InvalidInstances.Format',
            'errorMessage' => 'The Specified parameter Instances is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'AlreadyHadTemporaryBandwidth',
            'errorMessage' => 'This instance have already had temporary bandwidth, please modify instance spec first.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderParams\\": \\"String\\",\\n  \\"RequestId\\": \\"3A40BE4E-1890-4972-889C-FEFA37663635\\",\\n  \\"Order\\": {\\n    \\"OriginalAmount\\": \\"0.21\\",\\n    \\"HandlingFeeAmount\\": \\"0.1\\",\\n    \\"Currency\\": \\"CNY\\",\\n    \\"DiscountAmount\\": \\"0.21\\",\\n    \\"TradeAmount\\": \\"10\\",\\n    \\"Coupons\\": {\\n      \\"Coupon\\": [\\n        {\\n          \\"IsSelected\\": \\"true\\",\\n          \\"CouponNo\\": \\"youhuiquan_promotion_option_id_for_blank\\",\\n          \\"Name\\": \\"test\\",\\n          \\"Description\\": \\"coupondemo\\"\\n        }\\n      ]\\n    },\\n    \\"RuleIds\\": {\\n      \\"RuleId\\": [\\n        \\"\\"\\n      ]\\n    },\\n    \\"ShowDiscountInfo\\": true,\\n    \\"DepreciateInfo\\": {\\n      \\"ListPrice\\": 0,\\n      \\"OriginalStandAmount\\": 0,\\n      \\"CheapStandAmount\\": 0,\\n      \\"CheapRate\\": 0,\\n      \\"Differential\\": 0,\\n      \\"DifferentialName\\": \\"XXXXX\\",\\n      \\"MonthPrice\\": 0,\\n      \\"IsContractActivity\\": false,\\n      \\"IsShow\\": true,\\n      \\"ContractActivity\\": {\\n        \\"FinalPromFee\\": 0,\\n        \\"FinalFee\\": 0,\\n        \\"ProdFee\\": 0,\\n        \\"ActivityId\\": 0,\\n        \\"OptionCode\\": \\"\\",\\n        \\"ActivityName\\": \\"合同优惠_整单_xxx折\\",\\n        \\"OptionIds\\": {\\n          \\"OptionId\\": [\\n            0\\n          ]\\n        }\\n      }\\n    },\\n    \\"StandDiscountPrice\\": 0,\\n    \\"IsContractActivity\\": true,\\n    \\"StandPrice\\": 0,\\n    \\"Code\\": \\"\\\\\\"\\\\\\"\\\\n\\",\\n    \\"Message\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"Rules\\": {\\n    \\"Rule\\": [\\n      {\\n        \\"RuleDescId\\": 1111111111,\\n        \\"Title\\": \\"test\\",\\n        \\"Name\\": \\"test\\"\\n      }\\n    ]\\n  },\\n  \\"SubOrders\\": {\\n    \\"SubOrder\\": [\\n      {\\n        \\"OriginalAmount\\": \\"0.21\\",\\n        \\"InstanceId\\": \\"r-bp1xxxxxxxxxxxxx\\",\\n        \\"DiscountAmount\\": \\"0.21\\",\\n        \\"TradeAmount\\": \\"10\\",\\n        \\"RuleIds\\": {\\n          \\"RuleId\\": [\\n            \\"RuleId: 1111111111\\"\\n          ]\\n        },\\n        \\"OptionalPromotions\\": {\\n          \\"OptionalPromotion\\": [\\n            {\\n              \\"Selected\\": false,\\n              \\"CouponNo\\": \\"default\\",\\n              \\"Name\\": \\"\\",\\n              \\"Description\\": \\"\\",\\n              \\"Show\\": true,\\n              \\"ActivityExtInfo\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"OptionCode\\": \\"\\",\\n              \\"PromotionName\\": \\"\\",\\n              \\"PromotionOptionNo\\": \\"\\",\\n              \\"CanPromFee\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"DepreciateInfo\\": {\\n          \\"ListPrice\\": 0,\\n          \\"OriginalStandAmount\\": 0,\\n          \\"CheapStandAmount\\": 0,\\n          \\"CheapRate\\": 0,\\n          \\"Differential\\": 0,\\n          \\"DifferentialName\\": \\"\\",\\n          \\"MonthPrice\\": 0,\\n          \\"IsContractActivity\\": true,\\n          \\"ContractActivity\\": {\\n            \\"FinalPromFee\\": 0,\\n            \\"FinalFee\\": 0,\\n            \\"ProdFee\\": 0,\\n            \\"ActivityId\\": 0,\\n            \\"OptionCode\\": \\"\\",\\n            \\"ActivityName\\": \\"\\",\\n            \\"OptionIds\\": {\\n              \\"OptionId\\": [\\n                0\\n              ]\\n            }\\n          },\\n          \\"StartTime\\": \\"\\"\\n        },\\n        \\"StandDiscountPrice\\": 0,\\n        \\"IsContractActivity\\": true,\\n        \\"StandPrice\\": 0,\\n        \\"ModuleInstance\\": {\\n          \\"ModuleInstance\\": [\\n            {\\n              \\"ModuleCode\\": \\"\\",\\n              \\"ModuleId\\": \\"\\",\\n              \\"StandPrice\\": 0,\\n              \\"PricingModule\\": true,\\n              \\"ModuleName\\": \\"\\",\\n              \\"DiscountFee\\": 0,\\n              \\"TotalProductFee\\": 0,\\n              \\"NeedOrderPay\\": true,\\n              \\"PayFee\\": 0,\\n              \\"ModuleAttrs\\": {\\n                \\"moduleAttr\\": [\\n                  {\\n                    \\"Type\\": 0,\\n                    \\"Value\\": \\"\\",\\n                    \\"Code\\": \\"\\",\\n                    \\"Name\\": \\"\\"\\n                  }\\n                ]\\n              },\\n              \\"ContractActivity\\": true,\\n              \\"DepreciateInfo\\": {\\n                \\"ListPrice\\": 0,\\n                \\"OriginalStandAmount\\": 0,\\n                \\"CheapStandAmount\\": 0,\\n                \\"CheapRate\\": 0,\\n                \\"Differential\\": 0,\\n                \\"DifferentialName\\": \\"\\",\\n                \\"MonthPrice\\": 0,\\n                \\"IsContractActivity\\": true,\\n                \\"IsShow\\": true,\\n                \\"StartTime\\": \\"\\"\\n              }\\n            }\\n          ]\\n        },\\n        \\"PromDetailList\\": {\\n          \\"PromDetail\\": [\\n            {\\n              \\"PromotionName\\": \\"\\",\\n              \\"PromotionId\\": 0,\\n              \\"FinalPromFee\\": 0,\\n              \\"OptionCode\\": \\"\\",\\n              \\"PromType\\": \\"\\",\\n              \\"ActivityExtInfo\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              },\\n              \\"DerivedPromType\\": \\"\\",\\n              \\"PromotionCode\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"ContractActivity\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribePriceResponse>\\n    <Order>\\n        <Currency>CNY</Currency>\\n        <RuleIds>\\n        </RuleIds>\\n        <TradeAmount>0</TradeAmount>\\n        <OriginalAmount>0</OriginalAmount>\\n        <Coupons>\\n        </Coupons>\\n        <DiscountAmount>0</DiscountAmount>\\n    </Order>\\n    <RequestId>3A40BE4E-1890-4972-889C-FEFA37663635</RequestId>\\n    <SubOrders>\\n        <SubOrder>\\n            <RuleIds>\\n            </RuleIds>\\n            <TradeAmount>0</TradeAmount>\\n            <OriginalAmount>0</OriginalAmount>\\n            <DiscountAmount>0</DiscountAmount>\\n        </SubOrder>\\n    </SubOrders>\\n    <Rules>\\n    </Rules>\\n</DescribePriceResponse>\\n","errorExample":""}]',
      'title' => '查询价格',
      'summary' => '查询创建Redis实例、升级配置或续费等操作产生的费用。',
      'requestParamsDescription' => '### Instances参数补充说明
以下说明仅适用于DescribePrice接口Instances参数的补充说明，不适用于其它接口。
<table class="tg">
<thead>
  <tr>
    <th class="tg-kk8z">名称</th>
    <th class="tg-kk8z">类型</th>
    <th class="tg-kk8z">是否必选</th>
    <th class="tg-fymr">示例值</th>
    <th class="tg-kk8z">描述</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-4nbs">InstanceId</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">r-7xv4s7q131smyx****</td>
    <td class="tg-4nbs">实例ID，当OrderType为UPGRADE或RENEW时必传。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">Capacity</td>
    <td class="tg-4nbs">Long</td>
    <td class="tg-4nbs">是</td>
    <td class="tg-0pky">16384</td>
    <td class="tg-4nbs">实例的存储容量，单位：MB。<br>说明：本参数和InstanceClass两者中必须传入一项。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">InstanceClass</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">是</td>
    <td class="tg-0pky">redis.master.small.default</td>
    <td class="tg-4nbs">实例规格，请参见<a href="~~26350~~">规格查询导航</a>。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">IzNo</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">是</td>
    <td class="tg-0pky">cn-hangzhou-b</td>
    <td class="tg-4nbs">可用区ID。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">NodeType</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">MASTER_SLAVE</td>
    <td class="tg-4nbs">节点类型，取值：<ul><li><b>STAND_ALONE</b>：单副本。</li><li><b>MASTER_SLAVE</b>（默认）：高可用（双副本）。</li></ul></td>
  </tr>
  <tr>
    <td class="tg-4nbs">Period</td>
    <td class="tg-4nbs">Long</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">1</td>
    <td class="tg-4nbs">包年包月时长，单位为月。取值范围：1~9、12、24、36。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">Quantity</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">1</td>
    <td class="tg-4nbs">购买实例的数量，取值范围：1~30。默认值：1。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">VPCId</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">vpc-bp1nme44gek34slfc****</td>
    <td class="tg-4nbs">VPC ID。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">VSwitchId</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">vsw-bp1e7clcw529l773d****</td>
    <td class="tg-4nbs">虚拟交换机ID。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">AutoPay</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">true</td>
    <td class="tg-4nbs">是否自动付款，取值：<ul><li><b>true</b>（默认）：是</li><li><b>false</b>：否</li></ul></td>
  </tr>
  <tr>
    <td class="tg-4nbs">InstanceName</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">test_123</td>
    <td class="tg-4nbs">实例名称。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">ShardClass</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">tair.rdb.2g</td>
    <td class="tg-4nbs">分片规格，本参数仅适用于创建云原生版集群架构实例。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">ShardCount</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">2</td>
    <td class="tg-4nbs">分片数，本参数仅适用于创建云原生版集群架构实例，您可以通过该参数实现自定义分片数量。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">ReadOnlyCount</td>
    <td class="tg-4nbs">Integer</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">2</td>
    <td class="tg-4nbs">总只读节点数量，本参数仅适用于创建云盘读写分离架构实例。</td>
  </tr>
  <tr>
    <td class="tg-4nbs">StorageType</td>
    <td class="tg-4nbs">String</td>
    <td class="tg-4nbs">否</td>
    <td class="tg-0pky">essd_pl2</td>
    <td class="tg-4nbs">Tair ESSD磁盘型的存储类型，取值为<b>essd_pl0</b>、<b>essd_pl1</b>、<b>essd_pl2</b>和<b>essd_pl3</b>，在指定本参数时，您还需同时指定<b>Capacity</b>与<b>InstanceClass</b>。更多信息请参见<a href="~~443846~~">磁盘型实例规格</a>。</td>
  </tr>
</tbody>
</table>

### Instances参数请求示例
查询Tair云原生版集群架构的请求示例：
<pre>{
  "RegionId": "cn-hangzhou",
  "OrderType": "BUY",
  "ChargeType": "PostPaid",
  "Instances": "[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-h", "ShardClass": "tair.rdb.with.proxy.2g", "ShardCount": "3", "Period": "1","Quantity": "1"}]",
  "ZoneId": "cn-hangzhou-h"
}</pre>
查询Tair ESSD磁盘型自定义存储类型的请求示例：
<pre>{
  "RegionId": "cn-hangzhou",
  "OrderType": "BUY",
  "ChargeType": "PostPaid",
  "Instances": "[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-h", "ShardClass": "tair.essd.standard.2xlarge", "ShardCount": "1", "Period": "1","Quantity": "1","Capacity": "512000","StorageType": "essd_pl2"}]",
  "ZoneId": "cn-hangzhou-h"
}</pre>
查询多个实例的请求示例：
<pre>{
  "RegionId": "cn-hangzhou",
  "OrderType": "BUY",
  "ChargeType": "PrePaid",
  "Period": 1,
  "Instances": "[{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-b","InstanceClass": "redis.master.small.default","Period": "1","Quantity": "1"}{"RegionId": "cn-hangzhou","ZoneId": "cn-hangzhou-b","InstanceClass": "redis.amber.logic.sharding.1g.2db.0rodb.6proxy.multithread","Period": "1","Quantity": "1"}]"
}
</pre>',
    ),
    'DescribeInstanceAutoRenewalAttribute' => 
    array (
      'summary' => '查看Redis实例是否开通自动续费。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的ID。
> 默认查询所有实例是否开通自动续费。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数，取值：**30**、**50**、**100**。
> 默认值：**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
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
            'description' => '页码，大于**0**且不超过Integer的最大值，默认值：**1**。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2B17D708-1D6D-49F3-B6D7-478371DD****',
              ),
              'PageNumber' => 
              array (
                'description' => '当前显示的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页显示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
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
                  'Item' => 
                  array (
                    'description' => '实例的自动续费信息组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Duration' => 
                        array (
                          'description' => '续费周期，单位为月。 ',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****',
                        ),
                        'AutoRenew' => 
                        array (
                          'description' => '自动续费状态，返回值：
* **true**：已开启。
* **false**：未开启。 ',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'Specified parameter exceeds range.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B17D708-1D6D-49F3-B6D7-478371DD****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 30,\\n  \\"TotalRecordCount\\": 1,\\n  \\"Items\\": {\\n    \\"Item\\": [\\n      {\\n        \\"Duration\\": 1,\\n        \\"DBInstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n        \\"AutoRenew\\": \\"true\\",\\n        \\"RegionId\\": \\"cn-shanghai\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n \\"Items\\": {\\n   \\"Item\\": [\\n     {\\n       \\"Duration\\": 1,\\n       \\"RegionId\\": \\"cn-shanghai\\",\\n       \\"DBInstanceId\\": \\"r-xxxxxxxxxxxxxxx\\",\\n       \\"AutoRenew\\": \\"true\\"\\n     }\\n   ]\\n },\\n \\"TotalRecordCount\\": 1,\\n \\"PageNumber\\": 1,\\n \\"RequestId\\": \\"2B17D708-1D6D-49F3-B6D7-478371DDDBE8\\",\\n \\"PageRecordCount\\": 1\\n}"},{"type":"xml","example":"<DescribeInstanceAutoRenewalAttributeResponse>\\n    <Items>\\n        <Item>\\n            <Duration>1</Duration>\\n            <RegionId>cn-shanghai</RegionId>\\n            <DBInstanceId>r-bp1zxszhcgatnx****</DBInstanceId>\\n            <AutoRenew>true</AutoRenew>\\n        </Item>\\n    </Items>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageNumber>1</PageNumber>\\n    <RequestId>2B17D708-1D6D-49F3-B6D7-478371DDDBE8</RequestId>\\n    <PageRecordCount>1</PageRecordCount>\\n</DescribeInstanceAutoRenewalAttributeResponse>","errorExample":"<DescribeInstanceAutoRenewalAttributeResponse>\\n <Items>\\n   <Item>\\n     <Duration>1</Duration>\\n     <RegionId>cn-shanghai</RegionId>\\n     <DBInstanceId>r-xxxxxxxxxxxxxxx</DBInstanceId>\\n     <AutoRenew>true</AutoRenew>\\n   </Item>\\n </Items>\\n <TotalRecordCount>1</TotalRecordCount>\\n <PageNumber>1</PageNumber>\\n <RequestId>2B17D708-1D6D-49F3-B6D7-478371DDDBE8</RequestId>\\n <PageRecordCount>1</PageRecordCount>\\n</DescribeInstanceAutoRenewalAttributeResponse>"}]',
      'title' => '查询实例是否开通自动续费',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewAdditionalBandwidth' => 
    array (
      'summary' => '为购买的Redis实例带宽续费。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：

* **true**：自动付费，默认值。
* **false**：手动付费。您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理** > **我的订单**，找到目标订单进行支付。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderTimeLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买的时长，单位为天，取值：**1**、**2**、**3**、**7**、**14**、**30**、**60**、**90**、**180**、**365**、**730**、**1095**、**1825**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '30',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceBiz',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用来源，本参数仅用于内部维护使用，无需传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'SDK',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2084452111111',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D622714-AEDD-4609-9167-F5DDD3D1****	',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"2084452111111\\",\\n  \\"RequestId\\": \\"D622714-AEDD-4609-9167-F5DDD3D1****\\\\t\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewAdditionalBandwidthResponse>\\r\\n    <RequestId>D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n    <OrderId>2084452111111</OrderId>\\r\\n</RenewAdditionalBandwidthResponse>","errorExample":""}]',
      'title' => '带宽续费',
      'description' => '请确保在使用该接口前，已充分了解云数据库Redis产品的收费方式和[价格](~~54532~~)。

您可以通过控制台（[调整实例带宽](~~102588~~)）或调用[EnableAdditionalBandwidth](~~206173~~)购买实例的带宽，如您需要继续使用购买的带宽，您需要在带宽到期前调用本接口及时续费。

> 在调用本接口前，您可以调用[DescribeIntranetAttribute](~~128715~~)，通过返回参数**BandwidthExpireTime**的值获取到购买的带宽的到期时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransformInstanceChargeType' => 
    array (
      'summary' => '转换Redis实例的付费类型，支持按量付费和包年包月付费类型之间的相互转换。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，您可以调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年包月的付费时长，单位为月，取值：**1**~**9**、**12**、**24**、**36**。
> 当**ChargeType**参数取值为**PrePaid**时，本参数才可用且必须传入。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费，取值：

* **true**：自动付费，默认值。
* **false**：手动付费。您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理** > **我的订单**，找到目标订单进行支付。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要转换到的付费类型，取值：
* **PrePaid**：包年包月，传入本值时，您还需要传入**Period**参数。
* **PostPaid**：按量付费。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PrePaid',
            'default' => '',
            'enum' => 
            array (
              0 => 'PostPaid',
              1 => 'PrePaid',
              2 => 'POSTPAID',
              3 => 'PREPAID',
              4 => 'PREPAY',
              5 => 'POSTPAY',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启。
* **false**（默认）：不开启。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'false' => '关闭',
              'true' => '开启',
            ),
            'example' => 'false',
            'default' => 'false',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期，单位为月，取值：**1**、**2**、**3**、**6**、**12**。

> 当**AutoRenew**取值为**true**时，本参数必须传入。',
            'type' => 'integer',
            'format' => 'int64',
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
              'EndTime' => 
              array (
                'description' => '实例的到期时间。
> 当实例的付费类型从按量付费转换为包年包月时，本参数才会返回具体的值。',
                'type' => 'string',
                'example' => '2021-05-13T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82C791FB-8979-489E-853D-706D7743****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '20881824000****',
              ),
            ),
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
          4 => 
          array (
            'errorCode' => 'Order.LatestOrderIsHanding',
            'errorMessage' => 'Latest order is handing, please retry later.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'RealNameAuthenticationError',
            'errorMessage' => 'Your account has not passed the real-name authentication yet.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-05-13T00:00:00Z\\",\\n  \\"RequestId\\": \\"82C791FB-8979-489E-853D-706D7743****\\",\\n  \\"OrderId\\": \\"20881824000****\\"\\n}","errorExample":""},{"type":"xml","example":"<TransformInstanceChargeTypeResponse>\\r\\n    <EndTime>2021-05-13T00:00:00Z</EndTime>\\r\\n    <RequestId>82C791FB-8979-489E-853D-706D7743****</RequestId>\\r\\n    <OrderId>20881824000****</OrderId>\\r\\n</TransformInstanceChargeTypeResponse>","errorExample":""}]',
      'title' => '转换付费类型',
      'description' => '请确保在调用本接口前，您已了解相关注意事项和费用说明，更多信息，请参见：
* [从按量付费转换为包年包月](~~54542~~)。
* [从包年包月转换为按量付费](~~211549~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewInstance' => 
    array (
      'summary' => '为Redis实例续费。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Capacity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储容量，单位为MB。续费并变配时可使用该参数指定需要变更到的规格。
> 如需在续费的同时变配，则`Capacity`和`InstanceClass`参数至少要传入一个。',
            'type' => 'string',
            'required' => false,
            'example' => '1024',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格编码，可根据[规格查询导航](~~26350~~)查找。续费并变配时可使用该参数指定需要变更到的规格。
> 如需在续费的同时变配，则`Capacity`和`InstanceClass`参数至少要传入一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'redis.master.small.default',
          ),
        ),
        3 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在原来的基础上，额外续费的周期，单位为月，取值：**1**~**9**、**12**、**24**、**36**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '6',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoPay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动付费。取值：

* **true**：自动付费，默认值。
* **false**：手动付费。

<props="china">选择为手动付费时，您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理** > **我的订单**，找到目标订单进行支付。</props>

<props="intl">选择为手动付费时，您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理**，找到目标订单进行支付。</props>



<props="partner">选择为手动付费时，您需要在控制台的顶部菜单栏，单击**费用** > **续费管理**，然后单击左侧导航栏的**订单管理**，找到目标订单进行支付。</props>
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'FromApp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于备注请求来源，默认值为**OpenAPI**，无需手动设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'OpenAPI',
            'default' => 'OpenApi',
          ),
        ),
        6 => 
        array (
          'name' => 'BusinessInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '活动ID、业务信息。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000',
          ),
        ),
        7 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠码，默认值为：`youhuiquan_promotion_option_id_for_blank`。',
            'type' => 'string',
            'required' => false,
            'example' => 'youhuiquan_promotion_option_id_for_blank',
            'default' => 'youhuiquan_promotion_option_id_for_blank',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，大小写敏感、不超过64个ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0.6823317918435086',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动续费，取值：
* **true**：开启，按以选择的续费时长进行续费，例如您选择续费时长为3个月，那么每次自动续费时会缴纳3个月的费用。
* **false**（默认）：不开启。',
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
              'EndTime' => 
              array (
                'description' => '订单结束时间。',
                'type' => 'string',
                'example' => '2019-02-19T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2222245-222A-4155-9349-E22222****',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'HasRenewChangeOrder',
            'errorMessage' => 'This instance has a renewChange order.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2019-02-19T00:00:00Z\\",\\n  \\"RequestId\\": \\"2222245-222A-4155-9349-E22222****\\",\\n  \\"OrderId\\": \\"111111111111111\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewInstanceResponse>\\r\\n    <OrderId>111111111111111</OrderId>\\r\\n    <RequestId>4D425645-A8BA-4155-9349-2222222****</RequestId>\\r\\n    <EndTime>2019-02-19T00:00:00Z</EndTime>\\r\\n</RenewInstanceResponse>","errorExample":""}]',
      'title' => '手动续费',
      'description' => '本接口仅适用于包年包月付费类型的Redis实例。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，需满足以下条件：
* 以英文字母开头，由小写英文字母、数字或下划线（_）组成。
* 长度不超过100个字符。
* 不能为[Redis账号名保留字](~~92665~~#title-84o-mok-b6h)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPrivilege',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号权限，取值：
* **RoleReadOnly**：只读权限。
* **RoleReadWrite**：读写权限，默认值。',
            'type' => 'string',
            'required' => false,
            'example' => 'RoleReadOnly',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号的密码。长度为8~32位，需包含大写字母、小写字母、特殊字符和数字中的至少三种，允许的特殊字符包括`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'uWonno21****',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号描述。
* 需以中文、英文字母开头，不能以`http: //`或`https: //`开头。
* 可以包含中文、英文字母、数字、下划线（_）和短划线（-）。 
* 长度为2~256个字符。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'testaccount',
          ),
        ),
        5 => 
        array (
          'name' => 'AccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号类型，取值固定为**Normal**（普通账号）。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABAF95F6-35C1-4177-AF3A-70969EBD****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'AcountName' => 
              array (
                'description' => '账号名称。',
                'type' => 'string',
                'example' => 'demoaccount',
              ),
            ),
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
            'errorMessage' => 'Specified AccountName already exists in this instance.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.Format',
            'errorMessage' => 'Specified AccountName is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Format',
            'errorMessage' => 'Current EngineVersion does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Format',
            'errorMessage' => 'Specified AccountDescription is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Format',
            'errorMessage' => 'Specified AccountPassword is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDBInstanceAccountMode.Format',
            'errorMessage' => 'Current DB instance AccountMode does not support this operation.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidAccountName.Forbid',
            'errorMessage' => 'Specified AccountName is a keyword.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidAccountPrivilege.Malformed',
            'errorMessage' => 'Specified account privilege is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountLimitExceeded',
            'errorMessage' => 'Exceeding the allowed amount of account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ABAF95F6-35C1-4177-AF3A-70969EBD****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"AcountName\\": \\"demoaccount\\"\\n}","errorExample":"{\\n \\"RequestId\\":\\"ABAF95F6-35C1-4177-AF3A-70969EBDF624\\",\\n \\"AcountName\\":\\"test2\\"\\n}"},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>D3876765-1983-4CBC-BB45-79EEBD6D****</RequestId>\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\n    <AcountName>demoaccount</AcountName>\\n</CreateAccountResponse>","errorExample":"<CreateAccountResponse>\\n <RequestId>ABAF95F6-35C1-4177-AF3A-70969EBDF624</RequestId>\\n <AcountName>test2</AcountName>\\n</CreateAccountResponse>"}]',
      'title' => '创建账号',
      'summary' => '可以在Redis实例中创建有特定权限的账号。',
      'description' => '> * 该API仅支持4.0或以上版本的Redis实例；
> * 使用该API需要实例状态为运行中； 
> * 一个实例下最多可创建18个账号。

该API对应的控制台操作请参见[账号管理](~~92665~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAccount' => 
    array (
      'summary' => '删除一个Redis账号。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，您可以调用[DescribeAccounts](~~95802~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoaccount',
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
                'example' => '8129F11A-D70B-43A6-9455-CE9EAA71****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Format',
            'errorMessage' => 'Specified AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Format',
            'errorMessage' => 'Current EngineVersion does not support operations.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationDenied.AccountStatus',
            'errorMessage' => 'The operation is not permitted due to status of account.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.NotFound',
            'errorMessage' => 'Specified AccountName does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8129F11A-D70B-43A6-9455-CE9EAA71****\\"\\n}","errorExample":"{\\n \\"RequestId\\":\\"8129F11A-D70B-43A6-9455-CE9EAA71F095\\"\\n}"},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>8129F11A-D70B-43A6-9455-CE9EAA71****</RequestId>\\n</DeleteAccountResponse>","errorExample":"<DeleteAccountResponse>\\n <RequestId>8129F11A-D70B-43A6-9455-CE9EAA71F095</RequestId>\\n</DeleteAccountResponse>"}]',
      'title' => '删除账号',
      'description' => '* 该API仅支持4.0版本的Redis实例；
* 实例的状态为运行中时才能调用该API。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，您可以调用[DescribeAccounts](~~95802~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的账号描述。
* 以中文、英文字母开头，不能以`http://`或`https://`开头。
* 可以包含中文、英文字母、数字、下划线（_）和短横线。
* 长度为2~256个字符。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testescription',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Format',
            'errorMessage' => 'Current EngineVersion does not support operations.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountDescription.Format',
            'errorMessage' => 'Specified AccountDescription is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B****\\"\\n}","errorExample":"{\\n  \\"RequestId\\":\\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76\\"\\n}"},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B****</RequestId>\\n</ModifyAccountDescriptionResponse>","errorExample":"<ModifyAccountDescriptionResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyAccountDescriptionResponse>"}]',
      'title' => '修改Redis账号的描述',
      'summary' => '修改Redis账号的描述。',
      'description' => '> 该API仅支持4.0或以上版本的Redis实例。',
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待修改密码的账号名，您可以调用[DescribeAccounts](~~95802~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'OldAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该账号的原密码。

> 如果忘记账号的密码，您也可以调用[ResetAccountPassword](~~95941~~)接口重置密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'oldPassWd999****',
          ),
        ),
        3 => 
        array (
          'name' => 'NewAccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该账号要设置的新密码。密码长度为8~32位，需包含大写字母、小写字母、数字、特殊字符中的至少三种，特殊字符为`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'newPassWd888****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountPasswordResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</ModifyAccountPasswordResponse>","errorExample":""}]',
      'title' => '修改账号密码',
      'summary' => '修改Redis实例中指定账号的密码。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的账号名。',
            'type' => 'string',
            'required' => false,
            'example' => 'demoaccount',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6C9E114C-217C-4118-83C0-B4070222****',
              ),
              'Accounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => 'Redis实例的账号信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountDescription' => 
                        array (
                          'description' => '账号备注信息。',
                          'type' => 'string',
                          'example' => 'testdec',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp10noxlhcoim2****',
                        ),
                        'AccountType' => 
                        array (
                          'description' => '账号类型，返回值：
* **Normal**：普通账号。
* **Super**：超级账号。',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '账号状态，返回值：
* **Unavailable**：不可用。
* **Available**：可用。',
                          'type' => 'string',
                          'example' => 'Available',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '账号名称。',
                          'type' => 'string',
                          'example' => 'demoaccount',
                        ),
                        'DatabasePrivileges' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DatabasePrivilege' => 
                            array (
                              'description' => '账号权限列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'AccountPrivilege' => 
                                  array (
                                    'description' => '账号权限，返回值：
* **RoleReadOnly**：只读权限。
* **RoleReadWrite**：读写权限，默认值。',
                                    'type' => 'string',
                                    'example' => 'RoleReadWrite',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6C9E114C-217C-4118-83C0-B4070222****\\",\\n  \\"Accounts\\": {\\n    \\"Account\\": [\\n      {\\n        \\"AccountDescription\\": \\"testdec\\",\\n        \\"InstanceId\\": \\"r-bp10noxlhcoim2****\\",\\n        \\"AccountType\\": \\"Normal\\",\\n        \\"AccountStatus\\": \\"Available\\",\\n        \\"AccountName\\": \\"demoaccount\\",\\n        \\"DatabasePrivileges\\": {\\n          \\"DatabasePrivilege\\": [\\n            {\\n              \\"AccountPrivilege\\": \\"RoleReadWrite\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"Accounts\\":{\\n      \\"Account\\":[\\n          {\\n              \\"DatabasePrivileges\\":{\\n                  \\"DatabasePrivilege\\":[\\n                      {\\n                          \\"AccountPrivilege\\":\\"RoleReadWrite\\"\\n                      }\\n                  ]\\n              },\\n              \\"AccountStatus\\":\\"Available\\",\\n              \\"InstanceId\\":\\"r-xxxxxxxxxxxxxxx\\",\\n              \\"AccountName\\":\\"r-xxxxxxxxxxxxxxx\\",\\n              \\"PrivExceeded\\":\\"0\\",\\n              \\"AccountType\\":\\"Normal\\"\\n          }\\n      ]\\n  },\\n  \\"RequestId\\":\\"6C9E114C-217C-4118-83C0-B40702221161\\"\\n}"},{"type":"xml","example":"<DescribeAccountsResponse>\\n    <RequestId>4A74FE3A-2BA8-4574-AB85-99C01707****</RequestId>\\n    <Accounts>\\n        <Account>\\n            <AccountStatus>Available</AccountStatus>\\n            <InstanceId>r-bp10noxlhcoim2****</InstanceId>\\n            <AccountType>Normal</AccountType>\\n            <DatabasePrivileges>\\n                <DatabasePrivilege>\\n                    <AccountPrivilege>RoleReadWrite</AccountPrivilege>\\n                </DatabasePrivilege>\\n            </DatabasePrivileges>\\n            <AccountName>r-bp10noxlhcoim2****</AccountName>\\n        </Account>\\n        <Account>\\n            <AccountDescription/>\\n            <AccountStatus>Available</AccountStatus>\\n            <InstanceId>r-bp10noxlhcoim2****</InstanceId>\\n            <AccountType>Normal</AccountType>\\n            <DatabasePrivileges>\\n                <DatabasePrivilege>\\n                    <AccountPrivilege>RoleReadWrite</AccountPrivilege>\\n                </DatabasePrivilege>\\n            </DatabasePrivileges>\\n            <AccountName>testaccount</AccountName>\\n        </Account>\\n    </Accounts>\\n</DescribeAccountsResponse>","errorExample":"<DescribeAccountsResponse>\\n <Accounts>\\n   <Account>\\n     <DatabasePrivileges>\\n       <DatabasePrivilege>\\n         <AccountPrivilege>RoleReadWrite</AccountPrivilege>\\n       </DatabasePrivilege>\\n     </DatabasePrivileges>\\n     <AccountStatus>Available</AccountStatus>\\n     <InstanceId>r-xxxxxxxxxxxxxxx</InstanceId>\\n     <AccountName>r-xxxxxxxxxxxxxxx</AccountName>\\n     <PrivExceeded>0</PrivExceeded>\\n     <AccountType>Normal</AccountType>\\n   </Account>\\n </Accounts>\\n <RequestId>6C9E114C-217C-4118-83C0-B40702221161</RequestId>\\n</DescribeAccountsResponse>"}]',
      'title' => '查找账号信息',
      'summary' => '查找指定Redis实例的帐户列表信息或实例中某个账号的信息。',
      'description' => '> 本接口仅适用于4.0或以上版本的Redis实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetAccountPassword' => 
    array (
      'summary' => '重置Redis账号的密码。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '账号所属实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，您可以调用[DescribeAccounts](~~95802~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新密码。长度为8~32位，需包含大写字母、小写字母、特殊字符和数字中的至少三种，允许的特殊字符包括`!@#$%^&*()_+-=`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'uWonno_221****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8BE02313-5395-4EBE-BAE7-E90A053F****',
              ),
            ),
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
            'errorMessage' => 'Specified AccountName already exists in this instance.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountName.Format',
            'errorMessage' => 'Specified AccountName is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEngineVersion.Format',
            'errorMessage' => 'Current EngineVersion does not support operations.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountPassword.Format',
            'errorMessage' => 'Specified AccountPassword is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'TaskExists',
            'errorMessage' => 'Specified task have existed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8BE02313-5395-4EBE-BAE7-E90A053F****\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"8BE02313-5395-4EBE-BAE7-E90A053F1E07\\"\\n}"},{"type":"xml","example":"<ResetAccountResponse>\\n    <RequestId>8BE02313-5395-4EBE-BAE7-E90A053F****</RequestId>\\n</ResetAccountResponse>","errorExample":"<ResetAccountResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ResetAccountResponse>"}]',
      'title' => '重置密码',
      'description' => '> 本接口仅支持4.0或以上版本的Redis实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GrantAccountPrivilege' => 
    array (
      'summary' => '修改Redis账号的权限。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '账号所属实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名，您可以调用[DescribeAccounts](~~95802~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoaccount',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPrivilege',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号权限，取值：
* RoleReadOnly：只读权限。
* RoleReadWrite：读写权限，默认值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RoleReadWrite',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3845BDF5-15A6-4444-B770-78501819****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.Format',
            'errorMessage' => 'Specified AccountName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountPrivilege.Format',
            'errorMessage' => 'Specified AccountPrivilege is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectAccount',
            'errorMessage' => 'Current DB instance account does not support this operation.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectMinorVersion',
            'errorMessage' => 'Current engine minor version does not support operations.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccountName.NotFound',
            'errorMessage' => 'Specified AccountName does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3845BDF5-15A6-4444-B770-78501819****\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"3845BDF5-15A6-4444-B770-785018191E25\\"\\n}"},{"type":"xml","example":"<GrantAccountPrivilegeResponse>\\n    <RequestId>3845BDF5-15A6-4444-B770-78501819****</RequestId>\\n</GrantAccountPrivilegeResponse>","errorExample":"<GrantAccountPrivilegeResponse>\\n <RequestId>3845BDF5-15A6-4444-B770-785018191E25</RequestId>\\n</GrantAccountPrivilegeResponse>"}]',
      'title' => '修改Redis账号的权限',
      'description' => '> * 该API仅支持4.0或以上版本的Redis实例； 
> * 调用该API需要实例的状态需为运行中。',
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
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
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
              'BackupJobID' => 
              array (
                'description' => '备份任务ID。  
针对2023-12-05前申请的集群实例，返回值是由各个子DB节点的jobId组成，例如2分片的集群实例，BackupJobID值的返回值会如 "10000,10001"。  
针对2023-12-05之后申请的集群实例，一个集群下所有DB节点的job统一由一个jobId描述，用户只需关心这一个jobId即可。',
                'type' => 'string',
                'example' => '"1022,2480"',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2FF6158E-3394-4A90-B634-79C49184****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BackupJobID\\": \\"\\\\\\"1022,2480\\\\\\"\\",\\n  \\"RequestId\\": \\"2FF6158E-3394-4A90-B634-79C49184****\\"\\n}","errorExample":"{\\n\\t\\"RequestId\\": \\"2D719BD9-A536-4D8B-BEA9-CD299DE2AE1B\\",\\n\\t\\"BackupJobID\\": \\"4679933\\"\\n}"},{"type":"xml","example":"<CreateBackupResponse>\\n    <RequestId>2FF6158E-3394-4A90-B634-79C49184****</RequestId>\\n    <BackupJobID>1162****</BackupJobID>\\n</CreateBackupResponse>","errorExample":"<CreateBackupResponse>\\n <RequestId>2D719BD9-A536-4D8B-BEA9-CD299DE2AE1B</RequestId>\\n <BackupJobID>4679933</BackupJobID>\\n</CreateBackupResponse>"}]',
      'title' => '手动备份数据',
      'summary' => '为Redis实例创建数据备份。',
      'description' => '该API对应的控制台操作请参见[备份与恢复](~~43886~~)。',
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
        'abilityTreeCode' => '56470',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreQ7TNCG',
          1 => 'FEATUREkvstore6TUUNS',
          2 => 'FEATUREkvstoreHXG88M',
          3 => 'FEATUREkvstoreGDR25F',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份时间，格式为<i>HH:mm</i>Z-<i>HH:mm</i>Z（UTC时间）。
> 必须为整点，且间隔时间为1小时。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '07:00Z-08:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期，取值：
* **Monday**：周一。
* **Tuesday**：周二。
* **Wednesday**：周三。
* **Thursday**：周四。
* **Friday**：周五。
* **Saturday**：周六。
* **Sunday**：周日。

> 支持多选，请使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Tuesday',
          ),
        ),
        3 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭数据闪回功能，取值：
* **1**：开启。同时，您还需确保已在实例的参数设置中开启AOF持久化（`appendonly`为`yes`），开启后，才能使用数据闪回功能。
* **0**：关闭，默认值。
> 仅Tair（Redis企业版）内存型和持久内存型支持该参数，更多信息请参见[数据闪回](~~443784~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份保留天数。默认7天，取值范围为7~730。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '730',
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
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B****\\"\\n}","errorExample":"{\\n\\"RequestId\\" : \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76”\\n}"},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B****</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":"<ModifyBackupPolicyResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</ModifyBackupPolicyResponse>"}]',
      'title' => '修改备份策略设置',
      'summary' => '修改Redis实例的自动备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupTasks' => 
    array (
      'summary' => '查询Redis实例的备份任务执行情况。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '56386',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreQ7TNCG',
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
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
            'example' => '1162****',
            'pattern' => '^\\d+$',
          ),
        ),
        2 => 
        array (
          'name' => 'JobMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值：
* **Automated**：系统自动备份，您可以调用[DescribeBackupPolicy](~~61078~~)查询自动备份策略。
* **Manual**：手动备份

> 默认返回所有备份模式的任务信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'Manual',
            'enum' => 
            array (
              0 => 'Manual',
              1 => 'Automated',
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
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BB73740C-23E2-4392-9DA4-2660C74C****',
              ),
              'BackupJobs' => 
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
                      'description' => '备份任务开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2021-01-05T19:24:00Z',
                    ),
                    'Process' => 
                    array (
                      'description' => '备份任务进度百分比。',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'JobMode' => 
                    array (
                      'description' => '备份模式，返回值：
* **Automated**：系统自动备份。
* **Manual**：手动备份。',
                      'type' => 'string',
                      'example' => 'Manual',
                    ),
                    'BackupJobID' => 
                    array (
                      'description' => '备份任务ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '29****10',
                    ),
                    'BackupProgressStatus' => 
                    array (
                      'description' => '备份任务状态，返回值：
* **NoStart**：未开始。
* **Preparing**：准备中。
* **Waiting**：等待中。
* **Uploading**：上传中
* **Checking**：检查中。
* **Finished**：已完成。',
                      'type' => 'string',
                      'example' => 'NoStart',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '数据节点ID。',
                      'type' => 'string',
                      'example' => '****',
                    ),
                    'TaskAction' => 
                    array (
                      'description' => '备份任务类型，返回值：
* **TempBackupTask**：临时备份任务，即手动备份。
* **NormalBackupTask**：普通备份任务，即自动备份。',
                      'type' => 'string',
                      'example' => 'NormalBackupTask',
                    ),
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '本组参数已弃用，请忽略。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthAction' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'AuthPrincipalDisplayName' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'AuthPrincipalOwnerId' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'AuthPrincipalType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'EncodedDiagnosticMessage' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'NoPermissionType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"RequestId\\": \\"BB73740C-23E2-4392-9DA4-2660C74C****\\",\\n  \\"BackupJobs\\": [\\n    {\\n      \\"StartTime\\": \\"2021-01-05T19:24:00Z\\",\\n      \\"Process\\": \\"0\\",\\n      \\"JobMode\\": \\"Manual\\",\\n      \\"BackupJobID\\": 0,\\n      \\"BackupProgressStatus\\": \\"NoStart\\",\\n      \\"NodeId\\": \\"****\\",\\n      \\"TaskAction\\": \\"NormalBackupTask\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": {\\n    \\"AuthAction\\": \\"_\\",\\n    \\"AuthPrincipalDisplayName\\": \\"_\\",\\n    \\"AuthPrincipalOwnerId\\": \\"_\\",\\n    \\"AuthPrincipalType\\": \\"_\\",\\n    \\"EncodedDiagnosticMessage\\": \\"_\\",\\n    \\"NoPermissionType\\": \\"_\\",\\n    \\"PolicyType\\": \\"_\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupTasksResponse>\\r\\n    <RequestId>BB73740C-23E2-4392-9DA4-2660C74C****</RequestId>\\r\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\r\\n    <BackupJobs>\\r\\n        <JobMode>Automated</JobMode>\\r\\n        <TaskAction>NormalBackupTask</TaskAction>\\r\\n        <StartTime>2021-01-05T19:24:00Z</StartTime>\\r\\n        <BackupProgressStatus>NoStart</BackupProgressStatus>\\r\\n        <Process>0</Process>\\r\\n        <BackupJobID>8491111</BackupJobID>\\r\\n    </BackupJobs>\\r\\n</DescribeBackupTasksResponse>","errorExample":""}]',
      'title' => '查询备份任务执行情况',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPolicy' => 
    array (
      'summary' => '查询Redis实例的备份策略，包括备份周期、备份时间等。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
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
                'description' => '备份保留天数。',
                'type' => 'string',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '90B82DB7-FB28-4CC2-ADBF-1F8659F3****',
              ),
              'PreferredBackupPeriod' => 
              array (
                'description' => '备份周期，返回值：
* **Monday**：周一。
* **Tuesday**：周二。
* **Wednesday**：周三。
* **Thursday**：周四。
* **Friday**：周五。
* **Saturday**：周六。
* **Sunday**：周日。 ',
                'type' => 'string',
                'example' => 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
              ),
              'PreferredNextBackupTime' => 
              array (
                'description' => '下次备份时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '2019-03-14T05:28Z',
              ),
              'PreferredBackupTime' => 
              array (
                'description' => '备份时间，格式为<i>HH:mm</i>Z-<i>HH:mm</i>Z（UTC时间）。',
                'type' => 'string',
                'example' => '05:00Z-06:00Z',
              ),
              'EnableBackupLog' => 
              array (
                'description' => '是否开启了增量备份，返回值：
* **1**：已开启。
* **0**：未开启。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '本组参数已弃用，请忽略。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthAction' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '_',
                  ),
                  'AuthPrincipalDisplayName' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'AuthPrincipalOwnerId' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'AuthPrincipalType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'EncodedDiagnosticMessage' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'NoPermissionType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '_',
                  ),
                ),
                'required' => false,
              ),
              'DbsInstance' => 
              array (
                'description' => '实例是否启用备份服务化，取值：
* **1**：开启
* **0**：未开启',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BackupRetentionPeriod\\": \\"7\\",\\n  \\"RequestId\\": \\"90B82DB7-FB28-4CC2-ADBF-1F8659F3****\\",\\n  \\"PreferredBackupPeriod\\": \\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\\",\\n  \\"PreferredNextBackupTime\\": \\"2019-03-14T05:28Z\\",\\n  \\"PreferredBackupTime\\": \\"05:00Z-06:00Z\\",\\n  \\"EnableBackupLog\\": 1,\\n  \\"AccessDeniedDetail\\": {\\n    \\"AuthAction\\": \\"_\\",\\n    \\"AuthPrincipalDisplayName\\": \\"_\\",\\n    \\"AuthPrincipalOwnerId\\": \\"_\\",\\n    \\"AuthPrincipalType\\": \\"_\\",\\n    \\"EncodedDiagnosticMessage\\": \\"_\\",\\n    \\"NoPermissionType\\": \\"_\\",\\n    \\"PolicyType\\": \\"_\\"\\n  },\\n  \\"DbsInstance\\": \\"0\\"\\n}","errorExample":"{\\n\\t\\"PreferredBackupPeriod\\": \\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\\",\\n\\t\\"RequestId\\": \\"90B82DB7-FB28-4CC2-ADBF-1F8659F30C26\\",\\n\\t\\"PreferredNextBackupTime\\": \\"2018-10-26T19:05Z\\",\\n\\t\\"PreferredBackupTime\\": \\"19:00Z-20:00Z\\",\\n\\t\\"BackupRetentionPeriod\\": \\"7\\"\\n}"},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <PreferredBackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</PreferredBackupPeriod>\\n    <RequestId>90B82DB7-FB28-4CC2-ADBF-1F8659F3****</RequestId>\\n    <PreferredNextBackupTime>2018-10-26T19:05Z</PreferredNextBackupTime>\\n    <PreferredBackupTime>19:00Z-20:00Z</PreferredBackupTime>\\n    <BackupRetentionPeriod>7</BackupRetentionPeriod>\\n</DescribeBackupPolicyResponse>","errorExample":"<PreferredBackupPeriod>Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday</PreferredBackupPeriod>\\n<RequestId>90B82DB7-FB28-4CC2-ADBF-1F8659F30C26</RequestId>\\n<PreferredNextBackupTime>2018-10-26T19:05Z</PreferredNextBackupTime>\\n<PreferredBackupTime>19:00Z-20:00Z</PreferredBackupTime>\\n<BackupRetentionPeriod>7</BackupRetentionPeriod>"}]',
      'title' => '查询自动备份策略',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackups' => 
    array (
      'summary' => '查询Redis实例的备份文件信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '56385',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstore6TUUNS',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份文件的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11611111',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupJobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份任务ID，由CreateBackup返回，CreateBackup若返回多个BackupJobId，则需要使用本接口分别对其查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10001',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最大记录数，取值：30、50、100、200或300。',
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
              3 => '200',
              4 => '300',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-11T10:00Z',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-14T18:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'NeedAof',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启AoF落盘，取值：
* **0**：关闭。
* **1**：开启。

> 默认值：**0**。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '963C20F0-7CE1-4591-AAF3-6F3CD1CE****',
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
                'description' => '每页最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalCount' => 
              array (
                'description' => '备份总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'FullStorageSize' => 
              array (
                'description' => '当前实例全量备份文件的大小，单位是字节。全量备份来源于每天定时备份、手动备份、缓存分析时生成的备份等。
> 该值和当前请求所响应的备份集数量以及大小无关，而是该实例当前所有有效全量备份的大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'LogStorageSize' => 
              array (
                'description' => '当前实例日志备份文件的大小，单位是字节，当且仅当开启闪回时才有效。
> 该值和当前请求所响应的备份集数量以及大小无关，而是该实例当前所有有效日志备份的大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5000',
              ),
              'FreeSize' => 
              array (
                'description' => '<props="china">该实例的免费备份额度，单位是字节，免费额度为实例规格默认内存量，更多信息请参见[备份商业化通知](~~2664017~~)。
全量备份和日志备份共享该免费额度。当变配实例规格时，实例的免费额度会产生变化。</props>
<props="intl">该参数未生效，请忽略该参数。</props>',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000',
              ),
              'Backups' => 
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
                        'BackupStatus' => 
                        array (
                          'description' => '备份状态，返回值：
* **Success**：成功。
* **Failed**：失败。',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '备份开始时间。',
                          'type' => 'string',
                          'example' => '2019-03-14T05:28:50Z',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型，返回值：
* **FullBackup**：全量备份。
* **IncrementalBackup**：增量备份。',
                          'type' => 'string',
                          'example' => 'FullBackup',
                        ),
                        'BackupDownloadURL' => 
                        array (
                          'description' => '备份文件的外网下载地址。',
                          'type' => 'string',
                          'example' => 'https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********',
                        ),
                        'NodeInstanceId' => 
                        array (
                          'description' => '节点ID。
> 当实例的架构为标准版时，本参数返回的是实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp10noxlhcoim2****-db-1',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '备份结束时间。',
                          'type' => 'string',
                          'example' => '2019-03-14T05:31:13Z',
                        ),
                        'BackupId' => 
                        array (
                          'description' => '备份文件ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '165*****50',
                        ),
                        'BackupDBNames' => 
                        array (
                          'description' => '备份的数据库，默认为**all**，即备份所有数据库。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '引擎版本，即Redis实例的大版本。',
                          'type' => 'string',
                          'example' => '4.0',
                        ),
                        'BackupIntranetDownloadURL' => 
                        array (
                          'description' => '备份文件的内网下载地址。

> 您可以在与该Redis实例连通的ECS（二者需属于同地域的经典网络或者在同一VPC内）上使用该地址下载目标备份文件。',
                          'type' => 'string',
                          'example' => 'https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份文件大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1024',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份模式，返回值：
* **Automated**：自动备份。
* **Manual**：手动备份。
         ',
                          'type' => 'string',
                          'example' => 'Automated',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '备份方法，返回值：
* **Logical**：逻辑备份。
* **Physical**：物理备份。 
         ',
                          'type' => 'string',
                          'example' => 'Physical',
                        ),
                        'BackupJobID' => 
                        array (
                          'description' => '备份任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '24340',
                        ),
                        'RecoverConfigMode' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'AccessDeniedDetail' => 
              array (
                'description' => '本组参数已弃用，请忽略。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthAction' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'AuthPrincipalDisplayName' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'AuthPrincipalOwnerId' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'AuthPrincipalType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'EncodedDiagnosticMessage' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'NoPermissionType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'PolicyType' => 
                  array (
                    'description' => '说明如上。',
                    'type' => 'string',
                    'example' => '-',
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
            'errorCode' => 'InvalidEngineVersion.Malformed',
            'errorMessage' => 'The Specified EngieVersion is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidStartTimeAndEndTime.Malformed',
            'errorMessage' => 'The end time must be greater than the start time.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified  parameter PageSize is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"963C20F0-7CE1-4591-AAF3-6F3CD1CE****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 5,\\n  \\"FullStorageSize\\": 1000,\\n  \\"LogStorageSize\\": 5000,\\n  \\"FreeSize\\": 100000,\\n  \\"Backups\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"BackupStatus\\": \\"Success\\",\\n        \\"BackupStartTime\\": \\"2019-03-14T05:28:50Z\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupDownloadURL\\": \\"https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********\\",\\n        \\"NodeInstanceId\\": \\"r-bp10noxlhcoim2****-db-1\\",\\n        \\"BackupEndTime\\": \\"2019-03-14T05:31:13Z\\",\\n        \\"BackupId\\": 0,\\n        \\"BackupDBNames\\": \\"all\\",\\n        \\"EngineVersion\\": \\"4.0\\",\\n        \\"BackupIntranetDownloadURL\\": \\"https://rdsbak-hk45-v2.oss-cn-hongkong.aliyuncs.com/********\\",\\n        \\"BackupSize\\": 1024,\\n        \\"BackupMode\\": \\"Automated\\",\\n        \\"BackupMethod\\": \\"Physical\\",\\n        \\"BackupJobID\\": 24340,\\n        \\"RecoverConfigMode\\": \\"\\"\\n      }\\n    ]\\n  },\\n  \\"AccessDeniedDetail\\": {\\n    \\"AuthAction\\": \\"-\\",\\n    \\"AuthPrincipalDisplayName\\": \\"-\\",\\n    \\"AuthPrincipalOwnerId\\": \\"-\\",\\n    \\"AuthPrincipalType\\": \\"-\\",\\n    \\"EncodedDiagnosticMessage\\": \\"-\\",\\n    \\"NoPermissionType\\": \\"-\\",\\n    \\"PolicyType\\": \\"-\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>721E2D39-351D-40E2-BF7C-B5075B0A****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Backups>\\n        <Backup>\\n            <BackupMethod>Physical</BackupMethod>\\n            <EngineVersion>4.0</EngineVersion>\\n            <BackupIntranetDownloadURL>http://rdsbak-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/********</BackupIntranetDownloadURL>\\n            <BackupMode>Automated</BackupMode>\\n            <BackupSize>2263040</BackupSize>\\n            <BackupId>775661111</BackupId>\\n            <NodeInstanceId>r-bp12fdcf4dea****</NodeInstanceId>\\n            <BackupDBNames>all</BackupDBNames>\\n            <BackupDownloadURL>http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/********</BackupDownloadURL>\\n            <BackupEndTime>2020-10-30T17:31:26Z</BackupEndTime>\\n            <BackupStartTime>2020-10-30T17:28:28Z</BackupStartTime>\\n            <BackupType>FullBackup</BackupType>\\n            <BackupJobID>27717</BackupJobID>\\n            <BackupStatus>Success</BackupStatus>\\n        </Backup>\\n    </Backups>\\n</DescribeBackupsResponse>","errorExample":""}]',
      'title' => '查看备份集列表',
    ),
    'RestoreInstance' => 
    array (
      'summary' => '恢复指定备份文件中的数据到Redis实例中。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的备份文件ID。您可以调用[DescribeBackups](~~61081~~)查询。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '78241****',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'RestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复类型，取值：
* **0**：默认值，恢复指定的备份集。><danger>备份集的数据会覆盖当前数据库中所有数据，请谨慎操作。></danger>
* **1**：恢复至指定的时间点，仅当实例开启了[数据闪回](~~148479~~)功能时，您才可以传入该值。传入为该值时，您还需要传入**RestoreTime**参数。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'pattern' => '^\\d+$',
            'default' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要恢复的时间点，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。

> * 当实例开启了[数据闪回](~~148479~~)后，您可以传入本参数和**FilterKey**参数实现将指定Key的数据恢复至某个时间点（秒级），其他的Key不受影响，可实现更精细化的数据恢复。
> * 传入本参数时，要求**RestoreType**参数传入的值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-07-06T07:25:57Z',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要恢复的Key，支持正则表达式，多个值使用英文逗号（,）分隔。

> * 例如正则表达式中，星号（`*`）表示匹配前面子表达式任意次，本参数传入`h.*llo`，系统将匹配`hllo`或`heeeello`等字符串。
> * 传入本参数时，要求**RestoreType**参数传入的值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => 'key:00000007198*',
          ),
        ),
        5 => 
        array (
          'name' => 'TimeShift',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '对Key的过期时间进行偏移处理，格式为yyyy-MM-ddTHH:mmZ（UTC时间）。实例会将Key在指定闪回时间点所剩余的过期时长，偏移至设置的过期偏移时间点开始计算。
> 该时间点不能早于指定的闪回时间点，也不能晚于提交恢复任务的时间点。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-07-06T08:25:57Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotSupport',
            'errorMessage' => 'This service not supported.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'Missing Required Param: BackupId or RestoreTime or RestoreType.',
          ),
          2 => 
          array (
            'errorCode' => 'ResroreParamNotMatch',
            'errorMessage' => 'restoreType is not match with backupId or restoreTime.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidRestoreTime.Format',
            'errorMessage' => 'Specified restore time is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'ZoneMigrationError.StillingRunning',
            'errorMessage' => 'Zone migration task is still running',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidBinlog.NotValid',
            'errorMessage' => 'The available binlog is not valid in recovery time.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B****\\"\\n}","errorExample":"{\\n\\"RequestId\\" : \\"AFA391BF-808F-4DA6-80A2-A382108A0945\\"\\n}"},{"type":"xml","example":"<RestoreInstanceResponse>\\n    <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B****</RequestId>\\n</RestoreInstanceResponse>","errorExample":"<RestoreInstanceResponse>\\n <RequestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B3E76</RequestId>\\n</RestoreInstanceResponse>"}]',
      'title' => '恢复Redis数据',
      'description' => '> * 当您的实例为[内存型（兼容Redis 5.0）](~~443827~~)或[持久内存型](~~443828~~)，且已开启了[数据闪回](~~443784~~)，您可以调用本接口将指定Key的数据恢复至某个秒级时间点，其他的Key不受影响，可实现更精细化的数据恢复。
> * 除上述以外的实例，调用本接口会使用备份数据覆盖Redis实例的现有数据，存在较大风险，请务必谨慎操作。 推荐调用[CreateInstance](~~60873~~)接口，将备份数据恢复至新实例中。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeClusterBackupList' => 
    array (
      'summary' => '查看Redis、Tair集群实例的备份列表。',
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
        'abilityTreeCode' => '187788',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~61012~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-zhangjiakou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-t4nj72oug5r5646qog',
          ),
        ),
        2 => 
        array (
          'name' => 'ClusterBackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群备份集ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cb-hyxdof5x9kqbtust
',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的记录数。',
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
              3 => '200',
              4 => '300',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2018-12-03T07:01Z',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2021-05-13T00:00:00Z',
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
            'description' => '请求响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => 'C009DA42-3B19-5B81-963D-1509DE2408DD',
              ),
              'MaxResults' => 
              array (
                'title' => 'MaxResults本次请求所返回的最大记录条数',
                'description' => 'MaxResults本次请求所返回的最大记录条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'PageNumber' => 
              array (
                'title' => '第几页，同请求参数',
                'description' => '第几页，同请求参数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '一页最大多少条记录，同请求参数',
                'description' => '一页最大多少条记录，同请求参数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'FullStorageSize' => 
              array (
                'title' => '当前实例全量备份大小',
                'description' => '当前实例全量备份文件的大小，单位是字节。全量备份来源于每天定时备份、手动备份、缓存分析时生成的备份等。
>该值和当前请求所响应的备份集数量以及大小无关，而是该实例当前所有有效全量备份的大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'LogStorageSize' => 
              array (
                'title' => '当前实例日志备份大小',
                'description' => '当前实例日志备份文件的大小，单位是字节，当且仅当开启闪回时才有效。
>该值和当前请求所响应的备份集数量以及大小无关，而是该实例当前所有有效日志备份的大小。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5000',
              ),
              'FreeSize' => 
              array (
                'title' => '当前实例备份免费量',
                'description' => '<props="china">该实例的免费备份额度，单位是字节，免费额度为实例规格默认内存量，更多信息请参见备份商业化通知。 全量备份和日志备份共享该免费额度。当变配实例规格时，实例的免费额度会产生变化。</props>
<props="intl">该参数未生效，请忽略该参数。</props>',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000',
              ),
              'ClusterBackups' => 
              array (
                'title' => '集群备份集列表，一个集群备份里面包含各个节点的备份集',
                'description' => '集群备份集列表，一个集群备份里面包含各个节点的备份集',
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
                      'description' => '集群备份集是否有效，子节点的备份集未完成或者失败时，为0',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ClusterBackupId' => 
                    array (
                      'title' => '集群备份集ID',
                      'description' => '集群备份集ID',
                      'type' => 'string',
                      'example' => 'cb-zmdqj2m3xyxjtdt0',
                    ),
                    'ClusterBackupStatus' => 
                    array (
                      'title' => '集群备份集状态',
                      'description' => '集群备份集状态。

- 成功：OK
- 运行中：RUNNING
- 失败：其他字段',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'ClusterBackupSize' => 
                    array (
                      'title' => '集群备份集大小',
                      'description' => '集群备份集大小',
                      'type' => 'string',
                      'example' => '2048',
                    ),
                    'ClusterBackupStartTime' => 
                    array (
                      'description' => '集群备份开始时间。',
                      'type' => 'string',
                      'example' => '2024-01-10T17:21:25Z',
                    ),
                    'ClusterBackupEndTime' => 
                    array (
                      'description' => '集群备份结束时间。',
                      'type' => 'string',
                      'example' => '2024-01-10T17:21:55Z',
                    ),
                    'ClusterBackupMode' => 
                    array (
                      'description' => '集群备份模式。',
                      'type' => 'string',
                      'example' => 'Automated',
                    ),
                    'ShardClassMemory' => 
                    array (
                      'title' => '做全量备份时，当时单个DB节点的内存规格大小，单位为MB',
                      'description' => '做全量备份时，当时单个DB节点的内存规格大小，单位为MB',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1024',
                    ),
                    'Backups' => 
                    array (
                      'title' => '单个集群备份集下，各个子节点的备份集集合',
                      'description' => '单个集群备份集下，各个子节点的备份集集合',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '备份集详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'BackupId' => 
                          array (
                            'description' => '备份文件的ID。',
                            'type' => 'string',
                            'example' => '514645788',
                          ),
                          'InstanceName' => 
                          array (
                            'description' => '实例的名称。',
                            'type' => 'string',
                            'example' => 'r-bp1y4is8svonly****-db-0',
                          ),
                          'BackupDownloadURL' => 
                          array (
                            'description' => '备份文件的外网下载地址。',
                            'type' => 'string',
                            'example' => 'http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb',
                          ),
                          'BackupIntranetDownloadURL' => 
                          array (
                            'description' => '备份文件的内网下载地址。

> 您可以在与该Redis实例连通的ECS（二者需属于同地域的经典网络或者在同一VPC内）上使用该地址下载目标备份文件。',
                            'type' => 'string',
                            'example' => 'http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote-internal.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb',
                          ),
                          'RecoverConfigMode' => 
                          array (
                            'description' => '该参数暂未生效，请忽略该参数。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'BackupStartTime' => 
                          array (
                            'description' => '本次备份开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                            'type' => 'string',
                            'example' => '2024-01-09T17:21:30Z',
                          ),
                          'BackupEndTime' => 
                          array (
                            'description' => '本次备份结束时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                            'type' => 'string',
                            'example' => '2024-01-09T17:21:57',
                          ),
                          'BackupSize' => 
                          array (
                            'description' => '备份文件大小，单位为Byte。',
                            'type' => 'string',
                            'example' => '1024',
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
                            'description' => '备份状态，返回值：
* **OK**：成功。
* **ERROR**：失败。',
                            'type' => 'string',
                            'example' => 'OK',
                          ),
                          'BackupName' => 
                          array (
                            'description' => '备份名称。',
                            'type' => 'string',
                            'example' => 'hins100322105_data_20240110012135.rdb',
                          ),
                          'Engine' => 
                          array (
                            'description' => '数据库类型，返回值固定为**redis**。',
                            'type' => 'string',
                            'example' => 'redis',
                          ),
                          'ExtraInfo' => 
                          array (
                            'description' => '附加信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CustinsDbVersion' => 
                              array (
                                'description' => 'DB 的版本',
                                'type' => 'string',
                                'example' => '5.0',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Progress' => 
                    array (
                      'title' => '备份进度，仅正在运行的备份才会显示进度',
                      'description' => '备份进度，仅正在运行的备份才会显示进度',
                      'type' => 'string',
                      'example' => '100%',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C009DA42-3B19-5B81-963D-1509DE2408DD\\",\\n  \\"MaxResults\\": 4,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"FullStorageSize\\": 1000,\\n  \\"LogStorageSize\\": 5000,\\n  \\"FreeSize\\": 100000,\\n  \\"ClusterBackups\\": [\\n    {\\n      \\"IsAvail\\": 1,\\n      \\"ClusterBackupId\\": \\"cb-zmdqj2m3xyxjtdt0\\",\\n      \\"ClusterBackupStatus\\": \\"OK\\",\\n      \\"ClusterBackupSize\\": \\"2048\\",\\n      \\"ClusterBackupStartTime\\": \\"2024-01-10T17:21:25Z\\",\\n      \\"ClusterBackupEndTime\\": \\"2024-01-10T17:21:55Z\\",\\n      \\"ClusterBackupMode\\": \\"Automated\\",\\n      \\"ShardClassMemory\\": 1024,\\n      \\"Backups\\": [\\n        {\\n          \\"BackupId\\": \\"514645788\\",\\n          \\"InstanceName\\": \\"r-bp1y4is8svonly****-db-0\\",\\n          \\"BackupDownloadURL\\": \\"http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb\\",\\n          \\"BackupIntranetDownloadURL\\": \\"http://rdsbakbucket-huhehaote-v2.oss-cn-huhehaote-internal.aliyuncs.com/custins424747958/hins100322105_data_20240110012135.rdb\\",\\n          \\"RecoverConfigMode\\": \\"null\\",\\n          \\"BackupStartTime\\": \\"2024-01-09T17:21:30Z\\",\\n          \\"BackupEndTime\\": \\"2024-01-09T17:21:57\\",\\n          \\"BackupSize\\": \\"1024\\",\\n          \\"IsAvail\\": \\"1\\",\\n          \\"BackupStatus\\": \\"OK\\",\\n          \\"BackupName\\": \\"hins100322105_data_20240110012135.rdb\\",\\n          \\"Engine\\": \\"redis\\",\\n          \\"ExtraInfo\\": {\\n            \\"CustinsDbVersion\\": \\"5.0\\"\\n          }\\n        }\\n      ],\\n      \\"Progress\\": \\"100%\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询集群实例的备份列表',
      'description' => '本接口仅适用于<props="china">云原生</props><props="intl">云盘</props>版实例。',
    ),
    'DescribeMonitorItems' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
                'example' => '8BEB2618-9517-43F3-A233-E0B34512****',
              ),
              'MonitorItems' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KVStoreMonitorItem' => 
                  array (
                    'description' => '监控参数列表。

> * **memoryUsage**、**GetQps**和**PutQps**监控指标仅在4.0及以上版本的实例中支持。其中，**GetQps**和**PutQps**监控指标需要实例为最新的小版本。升级方法请参见[升级大版本](~~101764~~)和[升级小版本](~~56450~~)。
> * Redis实例的引擎版本为2.8版本时，如果没有展示**hit_rate**监控指标，您需要升级小版本，详情请参见[升级小版本](~~56450~~)。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Unit' => 
                        array (
                          'description' => '监控项使用的单位。',
                          'type' => 'string',
                          'example' => 'Counts/s',
                        ),
                        'MonitorKey' => 
                        array (
                          'description' => '监控项。',
                          'type' => 'string',
                          'example' => 'select',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8BEB2618-9517-43F3-A233-E0B34512****\\",\\n  \\"MonitorItems\\": {\\n    \\"KVStoreMonitorItem\\": [\\n      {\\n        \\"Unit\\": \\"Counts/s\\",\\n        \\"MonitorKey\\": \\"select\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMonitorItemsResponse>\\n\\t<RequestId>8BEB2618-9517-43F3-A233-E0B34512****</RequestId>\\n\\t<MonitorItems>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>discard</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>zcount</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>select</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>sunionstore</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>zunionstore</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>del</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>zinterstore</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>echo</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>hscan</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>psubscribe</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>type</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>sinterstore</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>multi</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>randomkey</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t\\t<KVStoreMonitorItem>\\n\\t\\t\\t<Unit>Counts/s</Unit>\\n\\t\\t\\t<MonitorKey>setex</MonitorKey>\\n\\t\\t</KVStoreMonitorItem>\\n\\t</MonitorItems>\\n</DescribeMonitorItemsResponse>","errorExample":"{\\n    \\"MonitorItems\\" : {\\n        \\"MonitorItem\\" : [{\\n                \\"MonitorKey\\" : \\"GetQ\\",\\n                \\"Unit\\" : \\"Counts/s\\"\\n            }, {\\n                \\"MonitorKey\\" : \\"Flush\\",\\n                \\"Unit\\" : \\"Counts/s\\"\\n            }, {\\n                \\"MonitorKey\\" : \\"UsedMemCache\\",\\n                \\"Unit\\" : \\"Bytes\\"\\n            }, {\\n                \\"MonitorKey\\" : \\"ReplaceQ\\",\\n                \\"Unit\\" : \\"Counts/s\\"\\n            }\\n        ]\\n    },\\n    \\"RequestId\\" : \\"B906A893-58A3-4644-AC2D-A2C9B08706C1\\"\\n}"}]',
      'title' => '查询Redis监控项列表',
      'summary' => '查询Redis实例支持的监控项列表。',
      'description' => '> 为提升用户体验，云数据库Redis对性能监控进行了升级，本接口将下线。更多信息，请参见[【通知】云数据库Redis DescribeMonitorItems接口下线](~~189893~~)。

调用本接口获取到Redis监控项列表后，您可以调用[DescribeHistoryMonitorValues](~~61107~~)接口查询Redis实例的历史监控信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHistoryMonitorValues' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '56402',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreW1V0SW',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '历史监控开始时间点，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-11-06T00:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '历史监控结束时间点，须晚于历史监控开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。

> 支持查询最近1个月的监控数据，且最大查询范围不能超过7天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-11-06T00:30:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'IntervalForHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本参数已废弃，固定取值为`01m`。

实际会根据查询的开始时间和结束时间自动决定**查询的时间间隔**。以查询时间范围小于等于10分钟为例，数据聚合频率为5s/次，查询结果会按照5s/次的频率返回。
> * 查询结果会与实例的数据聚合频率对齐。若您传入的 StartTime 不在数据聚合时间点上，系统返回的首个时间点为最近的数据聚合时间点。例如您传入的 StartTime 为 2022-01-20T12:01:48Z，系统返回的首个时间点为 2022-01-20T12:01:45Z。
> * 如果实例的数据分片数大于等于32，最小的数据聚合频率为1分钟/次。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '01m',
            'enum' => 
            array (
              0 => '01m',
              1 => '05m',
              2 => '15m',
              3 => '60m',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'MonitorKeys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控指标，如需传入多个监控指标，需使用英文逗号（,）分隔。以CpuUsage为例：
- 若您希望查询所有数据节点（DB）整体的CPU使用率，请传入**CpuUsage$db**。
- 若您希望查询单个数据节点的CPU使用率，请传入**CpuUsage**，同时在NodeId参数指定DB 节点。

更多信息监控指标与详细说明，请参见下方的**MonitorKeys 参数补充说明**。
> * 默认为空，将返回UsedMemory与quotaMemory指标。
> * 为保障查询效率，查询单个节点的监控指标时，建议单次传入不超过5个监控指标；查询聚合监控指标时，建议单次不超过传入1个监控指标。

[MonitorKeys 参数补充说明](https://help.aliyun.com/zh/redis/developer-reference/api-r-kvstore-2015-01-01-describehistorymonitorvalues-redis)',
            'type' => 'string',
            'required' => false,
            'example' => 'CpuUsage',
          ),
        ),
        5 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的中的节点ID。传入本参数可查询指定节点的监控信息。

> * 当Redis实例的架构为读写分离或集群架构时，本参数才可用。
> * 您可以调用[DescribeLogicInstanceTopology](~~94665~~)接口查询节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0#1679****',
          ),
        ),
        6 => 
        array (
          'name' => 'NodeRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '若希望查询云原生版读写分离架构实例中只读节点的指标，您在传入具体**NodeId**的同时，还需要在本参数传入**READONLY**。
>  其余情况请无需传入（或传入**MASTER**）。',
            'type' => 'string',
            'required' => false,
            'example' => 'READONLY',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'MonitorHistory' => 
              array (
                'description' => '以JSON格式返回的监控信息，更多信息，请参见[监控参数说明](~~122091~~)。

> 为提高数据传输效率，只有非0的监控数据才会返回，其余未显示的监控数据均为默认值**0**。',
                'type' => 'string',
                'example' => '"{\\"2022-11-06T00:00:00Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:05Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:10Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:15Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:20Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:25Z\\":{\\"memoryUsage\\":\\"6.67\\"}}"',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F0997EE8-F4C2-4503-9168-85177ED7****',
              ),
            ),
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
            'errorMessage' => 'The Specified parameter "StartTime" is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Malformed',
            'errorMessage' => 'The Specified parameter "EndTime" is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MonitorHistory\\": \\"\\\\\\"{\\\\\\\\\\\\\\"2022-11-06T00:00:00Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"2022-11-06T00:00:05Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"2022-11-06T00:00:10Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"2022-11-06T00:00:15Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"2022-11-06T00:00:20Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"2022-11-06T00:00:25Z\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"memoryUsage\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.67\\\\\\\\\\\\\\"}}\\\\\\"\\",\\n  \\"RequestId\\": \\"F0997EE8-F4C2-4503-9168-85177ED7****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeHistoryMonitorValuesResponse>\\n    <MonitorHistory>{\\"2022-11-06T00:00:00Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:05Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:10Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:15Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:20Z\\":{\\"memoryUsage\\":\\"6.67\\"},\\"2022-11-06T00:00:25Z\\":{\\"memoryUsage\\":\\"6.67\\"}}</MonitorHistory>\\n    <RequestId>88523C30-8416-56E8-AAEF-64F849803C7C</RequestId>\\n</DescribeHistoryMonitorValuesResponse>","errorExample":""}]',
      'title' => '查看Redis实例的性能监控信息',
      'summary' => '查看Redis实例的性能监控信息。',
      'description' => '该API对应的控制台操作请参见[性能监控](~~43887~~)。',
      'requestParamsDescription' => '<h3 id="monitorKeys-note">MonitorKeys参数补充说明</h3>

调用OpenAPI时，请传入下表<b>MonitorKeys</b>列参数，系统将返回子监控项。实例支持通用类监控项和命令统计类监控项。
#### 通用类监控项
通用类监控项的使用说明如下，以CpuUsage为例：<ul id="856d247230qr6"><li id="856d247030hj3">查询所有数据节点（DB）整体的CPU使用率：您需要传入<b>CpuUsage$db</b>。</li><li id="d57d34a030dzn">查询单个数据节点的CPU使用率：您需要传入CpuUsage，同时在NodeId参数指定DB节点。</li><li id="c0832e1030amj">查询所有Proxy节点整体的CPU使用率：您需要传入<b>CpuUsage$proxy</b>。</li><li id="f22d4d5030tuu">查询单个Proxy节点的CPU使用率：您需要传入CpuUsage，同时在NodeId参数指定Proxy节点。</li></ul>
<table id="c63b44c030kq4" tablewidth="747" tablecolswidth="133 150 81 521 134" autofit="false"><colgroup colwidth="0.89*" style="width:17.80%"></colgroup><colgroup colwidth="1.01*" style="width:20.08%"></colgroup><colgroup colwidth="0.54*" style="width:10.84%"></colgroup><colgroup colwidth="3.5*" style="width:69.75%"></colgroup><colgroup colwidth="0.9*" style="width:17.94%"></colgroup><tbody><tr id="c63b6bd030k9l"><td id="c63b6bd1306my" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="c63b6bd230r3j"><b>MonitorKeys</b></p></td><td id="c63b6bd330km4" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="c63b6bd430i9j"><b>子监控项</b></p></td><td id="c63b6bd530kvm" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="c63b6bd630w20"><b>单位</b></p></td><td id="c63b6bd73070x" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="c63b6bd830u1v"><b>说明</b></p></td><td id="f1c6459030y64" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="f1c64591304n3"><b>支持范围</b></p></td></tr><tr id="d3bb144030wtu"><td id="d3bb144130cyw" colspan="1" rowspan="1"><p id="e971db2030kck">CpuUsage</p></td><td id="d3bb3b5130bwo" colspan="1" rowspan="1"><p id="d92caa1030n9z">CpuUsage</p></td><td id="d3bb3b5330ymf" colspan="1" rowspan="1"><p id="da72e5b03052x">%</p></td><td id="495781e07a4xf" colspan="1" rowspan="1"><p id="495781e17ano3">CPU使用率，范围为0~100。</p><note type="note" id="8ce84d307anl4"><p id="8ce7ff107aagm">若您的实例原先传入或返回RedisCpuUsage参数，您仍可以使用原参数。</p></note></td><td id="495781e27apho" colspan="1" rowspan="1"><ul id="7dcde0807abib"><li id="7dcde0817alfq"><p id="7dcde0827a5ou">DB</p></li><li id="1376630030px9"><p id="13752a80300e0">DB聚合</p></li><li id="16e9dee030nde"><p id="16e91b9030u73">Proxy</p></li><li id="1a97a4a030chn"><p id="1a9708603072u">Proxy聚合</p></li></ul></td></tr><tr id="c63b6be730754"><td id="c63b6be830jua" colspan="1" rowspan="1"><p id="c63b6be930yxk">MemoryUsage</p></td><td id="c63b6bea307ps" colspan="1" rowspan="1"><p id="c63b6beb30ant">memoryUsage</p></td><td id="c63b6bec30ae9" colspan="1" rowspan="1"><p id="c63b6bed30ubt">%</p></td><td id="c63b6bee30man" colspan="1" rowspan="1"><p id="c63b6bef30yra">内存使用率。</p></td><td id="f1c66ca4308je" colspan="1" rowspan="1"><ul id="5347dc6030gnj"><li id="5347dc61306lq"><p id="5347dc6230hvz">DB</p></li><li id="5347dc63303ee"><p id="5347dc6430rgd">DB聚合</p></li></ul></td></tr><tr id="c63b6bf0306xf"><td id="c63b6bf1305zy" colspan="1" rowspan="1"><p id="c63b6bf230x9h">quotaMemory</p></td><td id="c63b6bf33006m" colspan="1" rowspan="1"><p id="c63b6bf430flh">quotaMemory</p></td><td id="c63b6bf530j2x" colspan="1" rowspan="1"><p id="c63b6bf630rz1">Bytes</p></td><td id="c63b6bf73034k" colspan="1" rowspan="1"><p id="c63b6bf8305yd">当前分片的内存总量。</p></td><td id="f1c66ca630wx6" colspan="1" rowspan="1"><ul id="82644150307ze"><li id="8264686030684"><p id="8264686130nwh">DB</p></li><li id="8264686230z4n"><p id="8264686330tj5">DB聚合</p></li></ul></td></tr><tr id="c63b6bf930dnw" style="height:42px"><td id="c63b6bfa30gnm" colspan="1" rowspan="1"><p id="c63b6bfb30mix">UsedMemory</p></td><td id="c63b6bfc30ki8" colspan="1" rowspan="1"><p id="c63b6bfd30mpo">UsedMemory</p></td><td id="c63b6bfe304te" colspan="1" rowspan="1"><p id="c63b6bff303op">Bytes</p></td><td id="c63b6c0030ffn" colspan="1" rowspan="1"><p id="c63b6c01308w3">已使用内存量，包含数据和缓存部分。</p></td><td id="f1c66ca830tap" colspan="1" rowspan="1"><ul id="c29360803068r"><li id="c2936081307in"><p id="c293608230qaz">DB</p></li><li id="c293608330wte"><p id="c293608430n66">DB聚合</p></li></ul></td></tr><tr id="c63b6c0230kh0"><td id="c63b6c0330f6d" colspan="1" rowspan="1"><p id="c63b6c0430osx">Tair_PmemUsage</p></td><td id="c63b6c0530kpz" colspan="1" rowspan="1"><p id="c63b6c0630sv3">PmemUsage</p></td><td id="c63b6c0730np7" colspan="1" rowspan="1"><p id="c63b6c0830h5v">%</p></td><td id="c63b6c0930q11" colspan="1" rowspan="3"><p id="c63b6c0a305xq">分别为持久内存使用率、持久内存已使用量和持久内存的内存总量。</p><p id="c63b6c0b30vcf">仅持久内存型实例支持。</p></td><td id="f1c66caa30dqz" colspan="1" rowspan="3"><ul id="e083810030msg"><li id="e083810130pze"><p id="e083810230xnn">DB</p></li><li id="e083810330b1s"><p id="e0838104305mo">DB聚合</p></li></ul></td></tr><tr id="c63b92e030rk9" style="height:42px"><td id="c63b92e1309h5" colspan="1" rowspan="2"><p id="c63b92e230b26">Tair_Pmem</p></td><td id="c63b92e330jq3" colspan="1" rowspan="1"><p id="c63b92e4304y6">PmemUsed</p></td><td id="c63b92e530r56" colspan="1" rowspan="1"><p id="c63b92e630cel">Bytes</p></td></tr><tr id="c63b92e9307gl"><td id="c63b92ec303py" colspan="1" rowspan="1"><p id="c63b92ed30ap4">PmemQuota</p></td><td id="c63b92ee30b4c" colspan="1" rowspan="1"><p id="c63b92ef3016m">Bytes</p></td></tr><tr id="c63b92f230gec" style="height:42px"><td id="c63b92f330zt3" colspan="1" rowspan="3"><p id="c63b92f430yxi">Redis_DetailedSpaceUsage</p></td><td id="c63b92f530gzw" colspan="1" rowspan="1"><p id="c63b92f630xvv">ins_size</p></td><td id="c63b92f7304c4" colspan="1" rowspan="1"><p id="c63b92f8302j6">MB</p></td><td id="c63b92f930tr5" colspan="1" rowspan="3"><p id="c63b92fa30hpm">分别为实例占用总磁盘空间、数据文件占用的磁盘空间（包括AOF、RDB文件）和日志文件占用的磁盘空间（包含运行日志）。</p><p id="37e8c3f03029q">仅经典部署模式（原本地盘）的内存型实例支持。</p></td><td id="f1c693b130n84" colspan="1" rowspan="3"><ul id="fee907503078b"><li id="fee9075130tp4"><p id="fee9075230x12">DB</p></li><li id="fee9075330zv2"><p id="fee90754303ia">DB聚合</p></li></ul></td></tr><tr id="c63b92fb30za1"><td id="c63b92fe30l3q" colspan="1" rowspan="1"><p id="c63b92ff30fl1">data_size</p></td><td id="c63b930030gns" colspan="1" rowspan="1"><p id="c63b930130hyk">MB</p></td></tr><tr id="c63b930430qmp"><td id="c63b930730u5l" colspan="1" rowspan="1"><p id="c63b930830bcr">log_size</p></td><td id="c63b930930d89" colspan="1" rowspan="1"><p id="c63b930a30ppb">MB</p></td></tr><tr id="c63b930d30bdl"><td id="c63b930e3035s" colspan="1" rowspan="6"><p id="c63b930f308tv">Redis_Memory_Monitor</p></td><td id="c63b931030qp5" colspan="1" rowspan="1"><p id="c63b9311308tl">used_memory_rss</p></td><td id="c63b931230f8u" colspan="1" rowspan="1"><p id="c63b931330qjm">Bytes</p></td><td id="c63b931430ad6" colspan="1" rowspan="1"><p id="c63b9315303d0">该进程所占的物理内存，即操作系统分配给Tair服务的内存。</p></td><td id="f1c693b7301xs" colspan="1" rowspan="6"><ul id="139f4e2230606"><li id="139f4e2030c2g"><p id="11a6645030qym">DB</p></li></ul></td></tr><tr id="c63b9316306e9"><td id="c63b931930u1x" colspan="1" rowspan="1"><p id="c63b931a30rsw">used_memory_lua</p></td><td id="c63b931b30fz2" colspan="1" rowspan="1"><p id="c63b931c30ubl">Bytes</p></td><td id="c63b931d30y0i" colspan="1" rowspan="1"><p id="c63b931e300k6">Lua脚本使用内存量。</p></td></tr><tr id="c63b931f30w9u"><td id="c63b932230xed" colspan="1" rowspan="1"><p id="c63b932330q5c">used_memory_startup</p></td><td id="c63bb9f0307de" colspan="1" rowspan="1"><p id="c63bb9f1309gw">Bytes</p></td><td id="c63bb9f230kp8" colspan="1" rowspan="1"><p id="c63bb9f330xgj">Tair启动时消耗的内存。</p></td></tr><tr id="c63bb9f430avn"><td id="c63bb9f7303gk" colspan="1" rowspan="1"><p id="c63bb9f8309qy">lazyfree_pending_objects</p></td><td id="c63bb9f930xt1" colspan="1" rowspan="1"><p id="c63bb9fa303td">Counts</p></td><td id="c63bb9fb30d3x" colspan="1" rowspan="1"><p id="c63bb9fc30y3s">Tair执行lazy free操作，在等待被实际回收内容的键个数。</p></td></tr><tr id="c63bb9fd30w5v"><td id="c63bba0030arw" colspan="1" rowspan="1"><p id="c63bba0130183">used_memory_overhead</p></td><td id="c63bba0230ig5" colspan="1" rowspan="1"><p id="c63bba0330xo8">Bytes</p></td><td id="c63bba0430m33" colspan="1" rowspan="1"><p id="c63bba0530pat">Tair为维护数据集的内部机制所需的内存开销，包括所有客户端的输出缓冲区、查询缓冲区和AOF。</p></td></tr><tr id="c63bba063012j"><td id="c63bba0930psb" colspan="1" rowspan="1"><p id="c63bba0a30ll1">used_memory_dataset</p></td><td id="c63bba0b30kd8" colspan="1" rowspan="1"><p id="c63bba0c30rcu">Bytes</p></td><td id="c63bba0d30e0b" colspan="1" rowspan="1"><p id="c63bba0e30jxq">数据占用的内存空间。</p></td></tr><tr id="c63bba0f309w3"><td id="c63bba1030jim" colspan="1" rowspan="4"><p id="c63bba11306w7">UsedQPS</p></td><td id="c63bba1230nea" colspan="1" rowspan="1"><p id="c63bba13302nv">TotalQps</p></td><td id="c63bba1430pbc" colspan="1" rowspan="1"><p id="c63bba1530k1p">Counts/s</p></td><td id="c63bba16301mx" colspan="1" rowspan="1"><p id="c63bba1730ci1">每秒总请求数，包含读和写命令。</p></td><td id="f1c6bac430r6i" colspan="1" rowspan="4"><ul id="36e9baa030srl"><li id="36e9baa13016k"><p id="36e9baa2301ka">DB</p></li><li id="36e9baa330341"><p id="36e9baa4308sa">DB聚合</p></li><li id="36e9baa530i8d"><p id="36e9baa63034k">Proxy</p></li><li id="36e9baa730i1k"><p id="36e9baa83063g">Proxy聚合</p></li></ul></td></tr><tr id="c63bba1830rdd"><td id="c63bba1b309sv" colspan="1" rowspan="1"><p id="c63bba1c30vpu">GetQps</p></td><td id="c63bba1d30r8l" colspan="1" rowspan="1"><p id="c63bba1e30ju0">Counts/s</p></td><td id="c63bba1f30vkk" colspan="1" rowspan="2"><p id="c63bba2030fii">分别代表每秒读、写命令的请求数。实例的兼容版本需为Redis 4.0及以上。</p></td></tr><tr id="c63bba2130q03"><td id="c63bba2430ja6" colspan="1" rowspan="1"><p id="c63bba2530d44">PutQps</p></td><td id="c63bba26304v6" colspan="1" rowspan="1"><p id="c63bba27302aq">Counts/s</p></td></tr><tr id="c63be10030y6i"><td id="c63be10330xbq" colspan="1" rowspan="1"><p id="c63be10430ydt">OtherOps</p></td><td id="c63be10530bvb" colspan="1" rowspan="1"><p id="c63be10630hz2">Counts/s</p></td><td id="c63be10730h2d" colspan="1" rowspan="1"><p id="c63be108304i4">指PING、INFO、SELECT与AUTH等无读写属性的请求。由于Proxy对请求存在特殊处理，若实例带有Proxy节点，则OtherOps仅包含部分INFO请求。</p></td></tr><tr id="c63be11230bz2"><td id="c63be11330ikn" colspan="1" rowspan="1"><p id="c63be114304g1">ConnectionUsage</p></td><td id="c63be11530vwn" colspan="1" rowspan="1"><p id="c63be11630hlm">connectionUsage</p></td><td id="c63be11730x08" colspan="1" rowspan="1"><p id="c63be11830sc8">%</p></td><td id="c63be1193041o" colspan="1" rowspan="1"><p id="c63be11a300wu">连接数使用率，计算方法：已连接数÷实例支持的总连接数。客户端通过直连地址连接至<span id="5d15795032z5w" data-tag="ph" conref="t2130621.dita#task_2130621/ph_k2w_kxd_rk1" docType="TOPIC" baseUrl="t2223384_v2_7_2.xdita" data-latest="1" product="Tair"></span><span id="5d15795132q1t" conref="t2356531.xdita#span_product_simple_name_4265573" data-node="4265573" data-latest="1" baseUrl="t2223384_v2_7_2.xdita" docId="3761080" docType="TOPIC" data-source="reuse_library" data-tag="ph" product="redis"></span>实例（集群架构）时，此指标具备参考价值。</p></td><td id="f1c6e1d030254" colspan="1" rowspan="2"><ul id="5f663b90306sr"><li id="5f663b9130jjy"><p id="5f663b9230avr">DB</p></li><li id="5f663b9330qyp"><p id="5f663b9430ig1">DB聚合</p></li></ul></td></tr><tr id="c63be11b301r3"><td id="c63be11c30r67" colspan="1" rowspan="1"><p id="c63be11d30ign">UsedConnection</p></td><td id="c63be11e30065" colspan="1" rowspan="1"><p id="c63be11f30vhw">ConnCount</p></td><td id="c63be12030f66" colspan="1" rowspan="1"><p id="c63be12130o6e">Counts</p></td><td id="c63be122307xc" colspan="1" rowspan="1"><p id="c63be12330alh">已使用连接数。</p></td></tr><tr id="d42769a0309qb"><td id="d42769a130xwq" colspan="1" rowspan="1"><p id="53cc913030pjt">QPSUsage</p></td><td id="d42790b0308lf" colspan="1" rowspan="1"><p id="551a46e030hrk">qpsUsage</p></td><td id="d42790b230spk" colspan="1" rowspan="1"><p id="56aad1f030b69">%</p></td><td id="d42790b430sd2" colspan="1" rowspan="1"><p id="594d1b2030b3q">QPS使用率。</p></td><td id="d42790b630ofr" colspan="1" rowspan="1"><ul id="67a2ff5230qp2"><li id="67a2ff5030x4f"><p id="623f4c3030c85">DB</p></li></ul></td></tr><tr id="c63be124308i8"><td id="c63be12530a5k" colspan="1" rowspan="1"><p id="c63be12630hrl">IntranetIn</p></td><td id="c63be12730lux" colspan="1" rowspan="1"><p id="c63be12830oq2">InFlow</p></td><td id="c63be12930ta5" colspan="1" rowspan="1"><p id="c63be12a301ki">KB/s</p></td><td id="c63be12b30ir9" colspan="1" rowspan="2"><p id="c63be12c30ecn">入、出流量速率。</p></td><td id="f1c6e1d430gth" colspan="1" rowspan="2"><ul id="38fc2a70309gd"><li id="38fc2a7130gcp"><p id="38fc2a72308lx">DB</p></li><li id="38fc2a7330exh"><p id="38fc2a7430gvq">DB聚合</p></li><li id="38fc2a7530tym"><p id="38fc2a7630jce">Proxy</p></li><li id="38fc2a7730trw"><p id="38fc2a7830j2a">Proxy聚合</p></li></ul></td></tr><tr id="c63be12d3034k"><td id="c63be12e30gxr" colspan="1" rowspan="1"><p id="c63be12f30grp">IntranetOut</p></td><td id="c63be13030f54" colspan="1" rowspan="1"><p id="c63be13130knr">OutFlow</p></td><td id="c63be13230vx4" colspan="1" rowspan="1"><p id="c63be13330z3t">KB/s</p></td></tr><tr id="c63be13630cea"><td id="c63be13730cz8" colspan="1" rowspan="1"><p id="c63be1383081f">IntranetInRatio</p></td><td id="c63be1393096a" colspan="1" rowspan="1"><p id="c63be13a30hde">intranetInRatio</p></td><td id="c63be13b30y65" colspan="1" rowspan="1"><p id="c63be13c300x7">%</p></td><td id="c63be13d3092t" colspan="1" rowspan="2"><p id="c63be13e303w5">入、出流量使用率。</p></td><td id="f1c6e1d830kuo" colspan="1" rowspan="2"><ul id="3e77f97030x0x"><li id="3e77f97130leq"><p id="3e77f97230jf2">DB</p></li><li id="3e77f97330n5d"><p id="3e77f97430nfl">DB聚合</p></li></ul></td></tr><tr id="c63be13f30g3a"><td id="c63be14030unf" colspan="1" rowspan="1"><p id="c63be141300be">IntranetOutRatio</p></td><td id="c63be142302xp" colspan="1" rowspan="1"><p id="c63be14330zuz">intranetOutRatio</p></td><td id="c63be144307xr" colspan="1" rowspan="1"><p id="c63be145305g1">%</p></td></tr><tr id="c63be148306x6"><td id="c63be14930236" colspan="1" rowspan="1"><p id="c63be14a30wze">Redis_Avg_Rt_Monitor</p></td><td id="c63be14b30cdc" colspan="1" rowspan="1"><p id="c63be14c30qeb">AvgRt</p></td><td id="c63be14d30jx1" colspan="1" rowspan="1"><p id="c63be14e30ubd">us</p></td><td id="c63be14f30obk" colspan="1" rowspan="1"><p id="c63be150301gb">平均时延，为节点从接收命令到发出响应的时延平均值。</p></td><td id="f1c708e230q7v" colspan="1" rowspan="2"><ul id="695bbdc030g38"><li id="695bbdc130oae"><p id="695bbdc230jkj">DB</p></li><li id="695bbdc330hno"><p id="695bbdc430adk">DB聚合</p></li><li id="695bbdc530l40"><p id="695bbdc6303e8">Proxy</p></li><li id="695bbdc73089w"><p id="695bbdc8304gr">Proxy聚合</p></li></ul></td></tr><tr id="c63be151305k7"><td id="c63be15230s4e" colspan="1" rowspan="1"><p id="c63be15330dsq">Redis_Max_Rt_Monitor</p></td><td id="c63be15430a80" colspan="1" rowspan="1"><p id="c63be15530l3y">MaxRt</p></td><td id="c63be15630ex1" colspan="1" rowspan="1"><p id="c63be15730uv8">us</p></td><td id="c63be15830j3n" colspan="1" rowspan="1"><p id="c63be159308w9">最大时延，从节点从接收命令到发出响应的时延最大值。</p></td></tr><tr id="c63be15a30l0m"><td id="c63be15b30n5j" colspan="1" rowspan="8"><p id="c63be15c307sl">Redis_Basic_Monitor</p></td><td id="c63be15d3052k" colspan="1" rowspan="1"><p id="c63be15e304ux">Keys</p></td><td id="c63be15f30law" colspan="1" rowspan="1"><p id="c63be160302r5">Counts</p></td><td id="c63be16130n3q" colspan="1" rowspan="1"><p id="c63be162305ei">Key总数量，即实例存储的一级Key总数。</p></td><td id="f1c72ff130jqy" colspan="1" rowspan="8"><ul id="d1f2f2e030sd7"><li id="d1f2f2e130bq0"><p id="d1f2f2e230v49">DB</p></li><li id="d1f2f2e330mug"><p id="d1f2f2e430zqd">DB聚合</p></li></ul></td></tr><tr id="c63c081030wmq"><td id="c63c081330u60" colspan="1" rowspan="1"><p id="c63c081430zxw">Expires</p></td><td id="c63c081530g02" colspan="1" rowspan="1"><p id="c63c081630syi">Counts</p></td><td id="c63c081730uwh" colspan="1" rowspan="1"><p id="c63c081830e2w">实例中设置过期时间的Key数量，该指标展示的是采集数据时的瞬时值。</p></td></tr><tr id="c63c0819305f9"><td id="c63c081c30tq5" colspan="1" rowspan="1"><p id="c63c081d30xmf">ExpiredKeys</p></td><td id="c63c081e30f27" colspan="1" rowspan="1"><p id="c63c081f300u0">Counts</p></td><td id="c63c08203067e" colspan="1" rowspan="1"><p id="c63c0821304sx">历史累计淘汰的Key总数。</p></td></tr><tr id="c63c0822309ui"><td id="c63c082530a2e" colspan="1" rowspan="1"><p id="c63c082630lvv">EvictedKeys</p></td><td id="c63c082730f30" colspan="1" rowspan="1"><p id="c63c082830s5s">Counts</p></td><td id="c63c082930no8" colspan="1" rowspan="1"><p id="c63c082a30p8z">历史累计逐出的Key总数。</p></td></tr><tr id="c63c082b30wsq"><td id="c63c082e30shr" colspan="1" rowspan="1"><p id="c63c082f30y5d">ExpiredKeysPerSecond</p></td><td id="c63c083030ymm" colspan="1" rowspan="1"><p id="c63c083130dg3">Counts/s</p></td><td id="c63c083230tlx" colspan="1" rowspan="1"><p id="c63c0833307eh">每秒淘汰的Key数量。</p></td></tr><tr id="c63c083430h12"><td id="c63c083730mwa" colspan="1" rowspan="1"><p id="c63c083830yrr">EvictedKeysPerSecond</p></td><td id="c63c0839307g7" colspan="1" rowspan="1"><p id="c63c083a30tg8">Counts/s</p></td><td id="c63c083b30o0w" colspan="1" rowspan="1"><p id="c63c083c306kr">每秒逐出的Key数量。</p></td></tr><tr id="c63c083d30nie"><td id="c63c084030v9j" colspan="1" rowspan="1"><p id="c63c0841308sb">inmem_keys</p></td><td id="c63c0842301xw" colspan="1" rowspan="1"><p id="c63c084330jtc">Counts</p></td><td id="c63c084430aiv" colspan="1" rowspan="2"><p id="c63c084530c6r">该参数仅混合存储型实例（已停售）支持，可忽略。</p></td></tr><tr id="c63c084630orl"><td id="c63c0849305l9" colspan="1" rowspan="1"><p id="c63c084a30gmp">swapped_keys</p></td><td id="c63c084b30w0p" colspan="1" rowspan="1"><p id="c63c084c30vxr">Counts</p></td></tr><tr id="c63c084f30jag"><td id="c63c085030d2r" colspan="1" rowspan="4"><p id="c63c085130ung">Hit_Rate_Monitor</p><p id="c63c085230u65"></p></td><td id="c63c085330x3c" colspan="1" rowspan="1"><p id="c63c085430klt">hit_rate</p></td><td id="c63c085530l4j" colspan="1" rowspan="1"><p id="c63c085630fpi">%</p></td><td id="c63c085730n1s" colspan="1" rowspan="1"><p id="c63c085830bga">命中率计算方法：Key命中数÷（Key命中数+Key未命中数）。</p></td><td id="f1c77e1630u88" colspan="1" rowspan="4"><ul id="aaaa7dc030f07"><li id="aaaa7dc13096z"><p id="aaaa7dc230ssx">DB</p></li><li id="aaaa7dc330fkl"><p id="aaaa7dc430svp">DB聚合</p></li></ul></td></tr><tr id="c63c08593027z"><td id="c63c085c30mlg" colspan="1" rowspan="1"><p id="c63c085d30g0w">hit</p></td><td id="c63c085e30ubl" colspan="1" rowspan="1"><p id="c63c085f30130">Counts</p></td><td id="c63c086030x0t" colspan="1" rowspan="1"><p id="c63c08613082q">每秒命中的Key数量。</p></td></tr><tr id="c63c08623090g"><td id="c63c086530qm8" colspan="1" rowspan="1"><p id="c63c086630ujk">miss</p></td><td id="c63c086730i2j" colspan="1" rowspan="1"><p id="c63c0868307io">Counts</p></td><td id="c63c0869306c2" colspan="1" rowspan="1"><p id="c63c086a30zu0">每秒未命中的key数量。</p></td></tr><tr id="c63c086b30625"><td id="c63c086e307rx" colspan="1" rowspan="1"><p id="c63c086f30klt">evicted_keys_per_sec</p></td><td id="c63c087030o3g" colspan="1" rowspan="1"><p id="c63c087130lro">Counts</p></td><td id="c63c2f2030du0" colspan="1" rowspan="1"><p id="c63c2f2130xd7">每秒被驱逐的Key数量。</p></td></tr><tr id="c63c2f2230bhq"><td id="c63c2f2330fou" colspan="1" rowspan="1"><p id="c63c2f24302kl">DiskUsage</p></td><td id="c63c2f25305rv" colspan="1" rowspan="1"><p id="c63c2f2630edf">disk_usage</p></td><td id="c63c2f2730asz" colspan="1" rowspan="1"><p id="c63c2f283029i">%</p></td><td id="c63c2f29303bz" colspan="1" rowspan="4"><p id="c63c2f2a30yxn">分别为磁盘使用率、输入缓冲区占用大小、输出缓冲区占用大小和磁盘性能监控项，仅磁盘型实例支持。</p></td><td id="f1c7a52030pjl" colspan="1" rowspan="4"><ul id="eda89b7230jhq"><li id="eda89b7030pna"><p id="ec19be1030hmx">DB</p></li></ul></td></tr><tr id="c63c2f2b30kxn"><td id="c63c2f2c307qp" colspan="1" rowspan="2"><p id="c63c2f2d304cn">RocksDBConn</p></td><td id="c63c2f2e304rf" colspan="1" rowspan="1"><p id="c63c2f2f304ap">Tair_Connection_Monitor</p></td><td id="c63c2f3030lf1" colspan="1" rowspan="1"><p id="c63c2f3130nnw">Bytes</p></td></tr><tr id="c63c2f3430jm5"><td id="c63c2f3730axh" colspan="1" rowspan="1"><p id="c63c2f3830snm">Tair_Connection_Monitor</p></td><td id="c63c2f3930qkp" colspan="1" rowspan="1"><p id="c63c2f3a30d7f">Bytes</p></td></tr><tr id="c63c2f3d303g4"><td id="c63c2f3e30drp" colspan="1" rowspan="1"><p id="c63c2f3f30fmo">Tair_Disk_Monitor</p></td><td id="c63c2f4030e32" colspan="1" rowspan="1"><p id="c63c2f4130w6m">io_bandwidth_kbps、iops、iops_usage等。</p></td><td id="c63c2f4230qzw" colspan="1" rowspan="1"><p id="c63c2f43300bn"> %、ms、Counts等。</p></td></tr><tr id="a087786030rk9"><td id="aa1e4de230r06" colspan="1" rowspan="3"><p id="110ee39330c46"></p><p id="110ee39430ydg">UsedConnection</p></td><td id="aa1e4de530ki5" colspan="1" rowspan="1"><p id="110ee397305d8">ConnectionUsage</p></td><td id="aa1e4de730rs0" colspan="1" rowspan="1"><p id="110ee39930mj7">%</p></td><td id="aa1e4de930xhx" colspan="1" rowspan="1"><p id="110ee39b30dmc">连接数使用率，计算方法：已使用连接数÷实例支持的总连接数。客户端通过Proxy节点连接至<span id="63555ba032qsi" data-tag="ph" conref="t2130621.dita#task_2130621/ph_k2w_kxd_rk1" docType="TOPIC" baseUrl="t2223384_v2_7_2.xdita" data-latest="1" product="Tair"></span><span id="63555ba132vuh" conref="t2356531.xdita#span_product_simple_name_4265573" data-node="4265573" data-latest="1" baseUrl="t2223384_v2_7_2.xdita" docId="3761080" docType="TOPIC" data-source="reuse_library" data-tag="ph" product="redis"></span>实例（集群或读写分离架构）时，此指标具备参考价值。</p></td><td id="a0879f70304rx" colspan="1" rowspan="3"><ul id="b22e836030wep"><li id="b22e836130v5b"><p id="b22e8362301kw">Proxy</p></li><li id="b22e836330ryz"><p id="b22e8364300y0">Proxy聚合</p></li></ul></td></tr><tr id="9eff2ab030jco"><td id="aa1e4dee30iy1" colspan="1" rowspan="1"><p id="110ee3a0307l0">UsedConnection</p></td><td id="aa1e4df0306co" colspan="1" rowspan="1"><p id="110ee3a2302nr">Counts</p></td><td id="aa1e4df230yb0" colspan="1" rowspan="1"><p id="110ee3a430sx3">已使用连接数。</p></td></tr><tr id="9da7ff20301dj"><td id="aa1e4df730qfz" colspan="1" rowspan="1"><p id="110ee3a930c08">NewUserConnQps</p></td><td id="aa1e4df930qle" colspan="1" rowspan="1"><p id="110ee3ab300t3">Counts/s</p></td><td id="aa1e4dfb30ran" colspan="1" rowspan="1"><p id="110ee3ad3043p">客户端到Proxy节点每秒建立的连接数。</p></td></tr><tr id="5ef1c450306s1"><td id="7c9ea90230ruk" colspan="1" rowspan="4"><p id="110ee3c230csb">Redis_Package_Monitor</p></td><td id="7c9ea90430xtu" colspan="1" rowspan="1"><p id="110ee3c430zqx">request</p></td><td id="7c9ea90630gll" colspan="1" rowspan="1"><p id="110ee3c630s2t">Byte</p></td><td id="7c9ea90830dze" colspan="1" rowspan="1"><p id="110ee3c830xwv">单个请求的平均字节数。</p></td><td id="5ef1eb66300np" colspan="1" rowspan="12"><ul id="86883262300vb"><li id="86883260308ci"><p id="5ef1eb6730uxk">Proxy</p></li></ul></td></tr><tr id="650c445030re2"><td id="7c9ea90d305xv" colspan="1" rowspan="1"><p id="110ee3cd30mu7">response</p></td><td id="7c9ea90f30wiw" colspan="1" rowspan="1"><p id="110ee3cf30y9f">Byte</p></td><td id="7c9ea91130r7u" colspan="1" rowspan="1"><p id="110ee3d130wx5">单个响应的平均字节数。</p></td></tr><tr id="70a0e5a03011z"><td id="7c9ea91630zmp" colspan="1" rowspan="1"><p id="110ee3d6305uq">request_max</p></td><td id="7c9ea918308k4" colspan="1" rowspan="1"><p id="110ee3d8306p0">Byte</p></td><td id="7c9ea91a309ex" colspan="1" rowspan="1"><p id="110ee3da30z6t">单个请求的最大字节数。</p></td></tr><tr id="6f12cb90306op"><td id="7c9ea91f30qdj" colspan="1" rowspan="1"><p id="110ee3df3009t">response_max</p></td><td id="7c9ea92130l5y" colspan="1" rowspan="1"><p id="110ee3e130avq">Byte</p></td><td id="7c9ea923304c9" colspan="1" rowspan="1"><p id="110ee3e330iux">单个响应的最大字节数。</p></td></tr><tr id="6e0fb37030kkb"><td id="7c9ea92630tag" colspan="1" rowspan="4"><p id="110ee3f830ke9">RedisProxyConn</p></td><td id="7c9ea928306u3" colspan="1" rowspan="1"><p id="110ee3fa30hnk">RedisUsedConnection</p></td><td id="7c9ea92a30u4b" colspan="1" rowspan="1"><p id="110ee3fc3014l">Counts</p></td><td id="7c9ea92c303m6" colspan="1" rowspan="1"><p id="110ee3fe30xor">Proxy节点到数据节点的连接数。</p></td></tr><tr id="6d07924030v06"><td id="7c9ea93130bpl" colspan="1" rowspan="1"><p id="110ee40330ok8">NewDBConnQps</p></td><td id="7c9ea9333090d" colspan="1" rowspan="1"><p id="110ee40530hym">Counts/s</p></td><td id="7c9ea93530rvn" colspan="1" rowspan="1"><p id="110ee40730hgw">Proxy节点到数据节点每秒建立的连接数。</p></td></tr><tr id="6c064ee0308x9"><td id="7c9ea93a30w7l" colspan="1" rowspan="1"><p id="110ee40c300uv">DisconnectDBConn</p></td><td id="7c9ea93c30vdh" colspan="1" rowspan="1"><p id="110ee40e305s1">Counts</p></td><td id="7c9ea93e30fpp" colspan="1" rowspan="1"><p id="110ee410306m7">Proxy节点到数据节点累计断连次数。</p></td></tr><tr id="6ae8d0f030mne"><td id="7c9ea94330zqr" colspan="1" rowspan="1"><p id="110ee41530itw">DisconnectUserConn</p></td><td id="7c9ea94530kqt" colspan="1" rowspan="1"><p id="110ee41730wyo">Counts</p></td><td id="7c9ea947306dn" colspan="1" rowspan="1"><p id="110ee41930j2t">客户端到Proxy节点的累计断连次数。</p></td></tr><tr id="69c5adb030tk6"><td id="7c9ea94a30mgo" colspan="1" rowspan="4"><p id="110ee41c30kmp">TotalCalls</p></td><td id="7c9ea94c30w9i" colspan="1" rowspan="1"><p id="110ee41e30z01">TotalRefusedCommands</p></td><td id="7c9ea94e301wh" colspan="1" rowspan="1"><p id="110ee42030ns6">Counts</p></td><td id="7c9ea95030ean" colspan="1" rowspan="1"><p id="110ee42230d6w">累计拒绝命令数。</p></td></tr><tr id="68884bb030eup"><td id="7c9ea955301od" colspan="1" rowspan="1"><p id="110ee427306rl">TotalCallsPerSecCalls</p></td><td id="7c9ea95730lry" colspan="1" rowspan="1"><p id="110ee42930plh">Counts/s</p></td><td id="7c9ea95930i5z" colspan="1" rowspan="1"><p id="110ee42b30h2c">每秒请求数。</p></td></tr><tr id="66e60d6030fok"><td id="7c9ea95e30pq8" colspan="1" rowspan="1"><p id="110f0a8430ybh">TotalCallsPerSecRetryCalls</p></td><td id="7c9ea96030ei2" colspan="1" rowspan="1"><p id="110f0a86303pv">Counts/s</p></td><td id="7c9ea96230wcg" colspan="1" rowspan="1"><p id="110f0a8830txl">每秒请求重试数。</p></td></tr><tr id="60c795c030hzr"><td id="7c9ea967306mv" colspan="1" rowspan="1"><p id="110f0a8d308hl">TotalCallsPerSecRetryFailed</p></td><td id="7c9ea969305s1" colspan="1" rowspan="1"><p id="110f0a8f30lyy">Counts/s</p></td><td id="7c9ea96b30djk" colspan="1" rowspan="1"><p id="110f0a9130mhi">每秒失败请求数。</p></td></tr></tbody></table>

<details>
<summary>命令统计类监控项（如需查看请展开）</summary>
命令统计类监控项仅支持查询指定DB。在查询时，您需要传入对应的<b>MonitorKeys</b>参数，同时还需要在NodeId参数指定DB节点。

> Tair扩展命令监控组仅经典部署模式（原本地盘）的内存型实例支持。
<table id="86147d7030q32" tablewidth="929" tablecolswidth="129 148 86 520" autofit="false"><colgroup colwidth="0.56*" style="width:13.89%"></colgroup><colgroup colwidth="0.64*" style="width:15.93%"></colgroup><colgroup colwidth="0.37*" style="width:9.26%"></colgroup><colgroup colwidth="2.24*" style="width:55.97%"></colgroup><tbody><tr id="86147d71304op"><td id="86147d7230sgw" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="86147d7330301"><b>MonitorKeys</b></p></td><td id="86147d7430rur" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="86147d7530ypj"><b>子监控项</b></p></td><td id="86147d7630ppo" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="86147d77309de"><b>单位</b></p></td><td id="86147d7830hzn" colspan="1" rowspan="1" style="background-color:#e5e5e5"><p id="86147d7930wb2"><b>说明</b></p></td></tr><tr id="86147d7a3041m"><td id="86147d7b30kct" colspan="1" rowspan="1"><p id="86147d7c30a22">Redis_Keys_Monitor</p></td><td id="86147d7d30vnn" colspan="1" rowspan="1"><p id="86147d7e30qn8">del、dump、exists、expire、expireat、move、persist、pexpire、pexpireat、pttl、randomkey、rename、renamenx、restore、sort、ttl、type、scan</p></td><td id="86147d7f30kgi" colspan="1" rowspan="1"><p id="86147d8030eld">Counts/s</p></td><td id="86147d8130fbi" colspan="1" rowspan="1"><p id="86147d8230gdl">使用键值相关命令的监控信息，例如<b>DEL</b>、<b>EXISTS</b>等命令的调用次数。</p></td></tr><tr id="86147d8330vs2"><td id="86147d84300q2" colspan="1" rowspan="1"><p id="86147d8530myn">Redis_String_Monitor</p></td><td id="86147d8630rvg" colspan="1" rowspan="1"><p id="86147d8730aag">append、bitcount、bitop、decr、decrby、get、getbit、getrange、getset、incr、incrby、incrbyfloat、mget、mset、msetnx、psetex、set、setbit、setex、setnx、setrange、strlen</p></td><td id="86147d88306m6" colspan="1" rowspan="1"><p id="86147d8930s4b">Counts/s</p></td><td id="86147d8a303k8" colspan="1" rowspan="1"><p id="86147d8b30ag0">使用String数据类型相关命令的监控信息，例如<b>APPEND</b>、<b>MGET</b>等命令的调用次数。</p></td></tr><tr id="86147d8c30pw7"><td id="86147d8d30pv4" colspan="1" rowspan="1"><p id="86147d8e309sw">Redis_Hashes_Monitor</p></td><td id="86147d8f304lm" colspan="1" rowspan="1"><p id="86147d9030dri">hdel、hexists、hget、hgetall、hincrby、hincrbyfloat、hkeys、hlen、hmget、hmset、hset、hsetnx、hvals、hscan</p></td><td id="86147d91300ac" colspan="1" rowspan="1"><p id="86147d92307hj">Counts/s</p></td><td id="86147d93300v7" colspan="1" rowspan="1"><p id="86147d9430sbe">使用Hash数据类型相关命令的监控信息，例如<b>HGET</b>、<b>HDEL</b>等命令的调用次数。</p></td></tr><tr id="86147d9530zau"><td id="86147d9630awq" colspan="1" rowspan="1"><p id="86147d9730505">Redis_Lists_Monitor</p></td><td id="86147d9830e2k" colspan="1" rowspan="1"><p id="86147d9930f7u">blpop、brpop、brpoplpush、lindex、linsert、llen、lpop、lpush、lpushx、lrange、lrem、lset、ltrim、rpop、rpoplpush、rpush、rpushx</p></td><td id="86147d9a30d1m" colspan="1" rowspan="1"><p id="86147d9b30b63">Counts/s</p></td><td id="86147d9c30dee" colspan="1" rowspan="1"><p id="86147d9d30tqm">使用Lists数据类型相关命令的监控信息，例如<b>BLPOP</b>、<b>BRPOP</b>等命令的调用次数。</p></td></tr><tr id="86147d9e30i0g"><td id="86147d9f30ca5" colspan="1" rowspan="1"><p id="8614a48030jqh">Redis_Sets_Monitor</p></td><td id="8614a48130rfm" colspan="1" rowspan="1"><p id="8614a48230umy">sadd、scard、sdiff、sdiffstore、sinter、sinterstore、sismember、smembers、smove、spop、srandmember、srem、sunion、sunionstore、sscan</p></td><td id="8614a48330xkf" colspan="1" rowspan="1"><p id="8614a48430wa7">Counts/s</p></td><td id="8614a4853004j" colspan="1" rowspan="1"><p id="8614a48630m2l">使用Sets数据类型相关命令的监控信息，例如<b>SADD</b>、<b>SCARD</b>等命令的调用次数。</p></td></tr><tr id="8614a487305x6"><td id="8614a48830xxk" colspan="1" rowspan="1"><p id="8614a48930c3a">Redis_Zset_Monitor</p></td><td id="8614a48a30tul" colspan="1" rowspan="1"><p id="8614a48b30wbp">zadd、zcard、zcount、zincrby、zrange、zrangebyscore、zrank、zrem、zremrangebyrank、zremrangebyscore、zrevrange、zrevrangebyscore、zrevrank、zscore、zunionstore、zinterstore、zscan、zrangebylex、zlexcount、zremrangebylex、zpopmin、zpopmax、bzpopmin、bzpopmax</p></td><td id="8614a48c30xg1" colspan="1" rowspan="1"><p id="8614a48d30p0h">Counts/s</p></td><td id="8614a48e303yv" colspan="1" rowspan="1"><p id="8614a48f30ohj">使用Zset数据类型相关命令的监控信息，例如<b>ZADD</b>、<b>ZCARD</b>等命令的调用次数。</p></td></tr><tr id="8614a49030lhe"><td id="8614a491302ih" colspan="1" rowspan="1"><p id="8614a49230mhb">Redis_Hyperlog_Monitor</p></td><td id="8614a493308wi" colspan="1" rowspan="1"><p id="8614a49430a8o">pfadd、pfcount、pfmerge</p></td><td id="8614a49530f5p" colspan="1" rowspan="1"><p id="8614a49630jau">Counts/s</p></td><td id="8614a49730i5p" colspan="1" rowspan="1"><p id="8614a49830gw5">使用HyperLogLog数据类型相关命令的监控信息，例如<b>PFADD</b>、<b>PFCOUNT</b>等命令的调用次数。</p></td></tr><tr id="8614a49930gm2"><td id="8614a49a303il" colspan="1" rowspan="1"><p id="8614a49b30428">Redis_Pub_Sub_Monitor</p></td><td id="8614a49c301gf" colspan="1" rowspan="1"><p id="8614a49d30rcg">psubscribe、publish、pubsub、punsubscribe、subscribe、unsubscribe</p></td><td id="8614a49e30omp" colspan="1" rowspan="1"><p id="8614a49f30ryn">Counts/s</p></td><td id="8614a4a030m4t" colspan="1" rowspan="1"><p id="8614a4a130r7u">使用发布与订阅（Pub/Sub）功能相关命令的监控信息，例如<b>PUBLISH</b>、<b>SUBSCRIBE</b>等命令的调用次数。</p></td></tr><tr id="8614a4a230qbn"><td id="8614a4a330c6y" colspan="1" rowspan="1"><p id="8614a4a4308vv">Redis_Transaction_Monitor</p></td><td id="8614a4a5305wu" colspan="1" rowspan="1"><p id="8614a4a630tdv">discard、exec、multi、unwatch、watch</p></td><td id="8614a4a7305mo" colspan="1" rowspan="1"><p id="8614a4a8306oz">Counts/s</p></td><td id="8614a4a9303g4" colspan="1" rowspan="1"><p id="8614a4aa30k5y">使用事务（Transaction）相关命令的监控信息，例如<b>WATCH</b>、<b>MULTI</b>等命令的调用次数。</p></td></tr><tr id="8614a4ab30siu"><td id="8614a4ac30wee" colspan="1" rowspan="1"><p id="8614a4ad30t3q">Redis_Scripting_Monitor</p></td><td id="8614a4ae30p4d" colspan="1" rowspan="1"><p id="8614a4af30gld">eval、evalsha、script</p></td><td id="8614a4b030nbe" colspan="1" rowspan="1"><p id="8614a4b130dsd">Counts/s</p></td><td id="8614a4b230dy0" colspan="1" rowspan="1"><p id="8614a4b330mm9">使用Scripting相关命令的监控信息，例如<b>EVAL</b>、<b>EVALSHA</b>等命令的每秒调用次数。</p></td></tr><tr id="8614a4b430a58"><td id="8614a4b530ldt" colspan="1" rowspan="1"><p id="8614a4b6309kv">Calls_Monitor</p></td><td id="8614a4b730eut" colspan="1" rowspan="1"><p id="8614a4b83044t">flushall_calls、flushdb_calls、keys_calls</p></td><td id="8614a4b930jnl" colspan="1" rowspan="1"><p id="8614a4ba309aw">Counts</p></td><td id="8614a4bb302we" colspan="1" rowspan="1"><p id="8614a4bc30zcf"><b>FLUSHALL</b>、<b>FLUSHDB</b>、<b>KEYS</b>命令累计调用次数。</p></td></tr><tr id="8614a4bd30fe5"><td id="8614a4be30w6k" colspan="1" rowspan="1"><p id="8614a4bf30mc0">Redis_Connection_Monitor</p></td><td id="8614a4c030umk" colspan="1" rowspan="1"><p id="8614a4c130tsn">auth、echo、ping、quit、select</p></td><td id="8614a4c230dah" colspan="1" rowspan="1"><p id="8614a4c33094g">Counts/s</p></td><td id="8614a4c430r27" colspan="1" rowspan="1"><p id="8614a4c530k0o">使用Connection相关命令的监控信息，例如<b>AUTH</b>、<b>ECHO</b>等命令的每秒调用次数。</p></td></tr><tr id="8614a4c630a07"><td id="8614a4c730kbq" colspan="1" rowspan="1"><p id="8614a4c830aun">Redis_Server_Monitor</p></td><td id="8614a4c930d0x" colspan="1" rowspan="1"><p id="8614a4ca30wn1">bgsave、client、command、config、dbsize、debug、flushall、flushdb、info、monitor、slowlog、time</p></td><td id="8614a4cb30far" colspan="1" rowspan="1"><p id="8614a4cc30zbb">Counts/s</p></td><td id="8614a4cd308jk" colspan="1" rowspan="1"><p id="8614a4ce30uyb">使用Server相关命令的监控信息，例如<b>BGSAVE</b>、<b>CONFIG</b>等命令的每秒调用次数。</p></td></tr><tr id="8614a4cf30fzc"><td id="8614a4d0301gw" colspan="1" rowspan="1"><p id="8614a4d130rck"><i>Redis_Geo_Monitor</i></p></td><td id="8614a4d2309bn" colspan="1" rowspan="1"><p id="8614a4d330saj">geoadd、geohash、geopos、geodist、georadius、georadiusbymember</p></td><td id="8614a4d430o0n" colspan="1" rowspan="1"><p id="8614a4d530vni">Counts/s</p></td><td id="8614a4d630mhx" colspan="1" rowspan="1"><p id="8614a4d730o6i">使用Geo相关命令的监控信息，例如<b>GEOADD</b>、<b>GEOHASH</b>等命令的每秒调用次数。</p></td></tr><tr id="8614a4d830mnp"><td id="8614a4d930fpn" colspan="1" rowspan="1"><p id="8614a4da304ox"><i>Redis_Streams_Monitor</i></p></td><td id="8614a4db308p2" colspan="1" rowspan="1"><p id="8614a4dc30oh3">xinfo、xadd、xtrim、xdel、xrange、xrevrange、xlen、xread、xgroup、xreadgroup、xack、xclaim、xpending</p></td><td id="8614a4dd30oxn" colspan="1" rowspan="1"><p id="8614a4de30fgn">Counts/s</p></td><td id="8614a4df30y1b" colspan="1" rowspan="1"><p id="8614a4e0303mg">使用Streams相关命令的监控信息，例如<b>XINFO</b>、<b>XADD</b>等命令的每秒调用次数。</p></td></tr><tr id="8614a4e130ziw" otherprops="limitout"><td id="8614a4e2309fd" colspan="1" rowspan="1"><p id="8614a4e330aqx"><b data-tag="uicontrol" id="uicontrol_jf2_cus_l3q" conref="mcms_dita_kvstore-console-aliyun-com.dita#kvstore-console-aliyun-com/redis.cnst.monitor_group.script" data-isbold="true"></b></p></td><td id="8614a4e430uzz" colspan="1" rowspan="1"><p id="8614a4e530r9m"><draft-comment id="0e61b5f02029q" data-tag="draftComment">当前这三行跑不通，先注释掉。</draft-comment></p></td><td id="8614a4e630upa" colspan="1" rowspan="1"><p id="8614a4e730tm5">Counts/s</p></td><td id="8614a4e830lrs" colspan="1" rowspan="1"><p id="8614a4e930ud3">使用Lua脚本相关命令的监控信息，例如EVAL、SCRIPT等命令的调用次数。</p></td></tr><tr id="8614a4ea301xn"><td id="8614a4eb3081s" colspan="1" rowspan="1"><p id="8614a4ec30zn9">Redis_TairDoc_Monitor</p></td><td id="8614a4ed30cec" colspan="1" rowspan="1"><p id="8614a4ee30ong">jsondel、jsonget、jsonmget、jsonset、jsontype、jsonnumincrby、jsonstrappend、jsonstrlen、jsonarrappend、jsonarrpop、jsonarrinsert、jsonarrlen、jsonarrtrim</p></td><td id="8614a4ef30lxd" colspan="1" rowspan="1"><p id="8614a4f030a7c">Counts/s</p></td><td id="8614a4f130esr" colspan="1" rowspan="1"><p id="8614a4f2303uz"><a data-tag="xref" id="86173c9030p3s" href="t2221677.dita#concept_2353554" baseUrl="t2223384_v2_7_0.xdita" data-node="3646911" data-root="77521"></a>监控组，使用Doc相关命令的监控信息，例如<b>JSON.SET</b>、<b>JSON.GET</b>等命令的调用次数。</p></td></tr><tr id="8614a4f330qbm"><td id="8614a4f430vmj" colspan="1" rowspan="1"><p id="8614a4f5301e3">Redis_TairHash_Monitor</p></td><td id="8614a4f630jiv" colspan="1" rowspan="1"><p id="8614a4f7301j2">exhset、exhsetnx、exhmset、exhexpireat、exhexpire、exhmsetwithopts、exhpexpireat、exhpexpire、exhpttl、exhttl、exhver、exhsetver、exhincrby、exhincrbyfloat、exhget、exhgetwithver、exhmget、exhdel、exhlen、exhexists、exhkeys、exhvals、exhgetall、exhmgetwithver、exhsterlen、exhscan</p></td><td id="8614a4f830zca" colspan="1" rowspan="1"><p id="8614a4f930pxj">Counts/s</p></td><td id="8614a4fa30h7n" colspan="1" rowspan="1"><p id="8614a4fb303ks"><a data-tag="xref" id="86173c9130zpr" href="t2221675.dita#concept_2353551" baseUrl="t2223384_v2_7_0.xdita" data-node="3646908" data-root="77521"></a>监控组，使用exHash相关命令的监控信息，例如<b>EXHSET</b>、<b>EXHMSET</b>等命令的调用次数。</p></td></tr><tr id="8614a4fc30vnd"><td id="8614a4fd30ua3" colspan="1" rowspan="1"><p id="8614a4fe30pm6">Redis_TairString_Monitor</p></td><td id="8614a4ff30t6e" colspan="1" rowspan="1"><p id="8614a50030kwb">cas、cad、exset、exget、exsetver、exincrby、exincrbyfloat、excas、excad</p></td><td id="8614a501305na" colspan="1" rowspan="1"><p id="8614a50230mpr">Counts/s</p></td><td id="8614a503308ga" colspan="1" rowspan="1"><p id="8614a50430tuw"><a data-tag="xref" id="86173c9230vmv" href="t2218042.dita#concept_2353550" baseUrl="t2223384_v2_7_0.xdita" data-node="3646906" data-root="77521"></a>监控组，使用exString相关命令的监控信息，例如<b>EXSET</b>、<b>EXGET</b>等命令的调用次数。</p></td></tr><tr id="8614a50530nn5"><td id="8614a50630vk5" colspan="1" rowspan="1"><p id="8614a50730870">Redis_TairGis_Monitor</p></td><td id="8614a50830xvp" colspan="1" rowspan="1"><p id="8614a50930461">gisadd、gisget、gisdel、gissearch、giscontains、gisintersects、gisgetall</p></td><td id="8614a50a302fe" colspan="1" rowspan="1"><p id="8614a50b30wx5">Counts/s</p></td><td id="8614a50c301n0" colspan="1" rowspan="1"><p id="8614a50d30tj4"><a data-tag="xref" id="86173c93301em" href="t2219822.dita#concept_2353552" baseUrl="t2223384_v2_7_0.xdita" data-node="3646909" data-root="77521"></a>监控组，使用GIS相关命令的监控信息，例如<b>GIS.ADD</b>、<b>GIS.GET</b>、<b>GIS.DEL</b>等命令的调用次数。</p></td></tr><tr id="8614a50e308l4"><td id="8614a50f30sbo" colspan="1" rowspan="1"><p id="8614a510307ug">Redis_TairBloom_Monitor</p></td><td id="8614a51130n3n" colspan="1" rowspan="1"><p id="8614a51230lvz">bfadd、bfmadd、bfexists、bfmexists、bfinsert、bfreserve、bfdebug</p></td><td id="8614a51330ea8" colspan="1" rowspan="1"><p id="8614a51430bux">Counts/s</p></td><td id="8614a5153002k" colspan="1" rowspan="1"><p id="8614a51630u6d"><a data-tag="xref" id="86173c9430lit" href="t2219834.dita#concept_2353553" baseUrl="t2223384_v2_7_0.xdita" data-node="3646910" data-root="77521"></a>监控组，使用Bloom相关命令的监控信息，例如<b>BF.RESERVE</b>、<b>BF.ADD</b>等命令的调用次数。</p></td></tr></tbody></table>
</details>',
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Retention',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计日志保留天数，取值：**1**~**365**。
> * 当**DbAudit**取值为**true**时，本参数必须传入。
> * 本参数的设置对当前地域下的所有Redis实例生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '365',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'DbAudit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启审计日志，取值：
* **true**：默认值，开启。
* **false**：关闭。

> 当实例为[集群架构](~~52228~~)或[读写分离架构](~~62870~~)时，会同时开启或关闭数据节点和代理节点的审计日志，不支持单独开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidRetention',
            'errorMessage' => 'The Retention is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceConfigError',
            'errorMessage' => 'The request processing has failed due to resource config error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskHasExist',
            'errorMessage' => 'The task already exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B****\\"\\n}","type":"json"}]',
      'title' => '修改审计日志设置',
      'summary' => '开启或修改Redis实例的审计日志设置。',
      'description' => '请确保在使用该接口前，已充分了解审计日志的收费方式和[价格](~~54532~~)。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属地域的ID，您可以调用[DescribeInstanceAttribute](~~60996~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hanghzou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Retention' => 
              array (
                'description' => '审计日志的保留时长，单位为天。',
                'type' => 'string',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2BE6E619-A657-42E3-AD2D-18F8428A****',
              ),
              'DbAudit' => 
              array (
                'description' => '是否开启审计日志，返回值：
* **true**：开启。
* **false**：关闭。

> 您可以调用[ModifyAuditLogConfig](~~130206~~)接口为实例开启或关闭审计日志。',
                'type' => 'string',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The InstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Retention\\": \\"5\\",\\n  \\"RequestId\\": \\"2BE6E619-A657-42E3-AD2D-18F8428A****\\",\\n  \\"DbAudit\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '查询审计日志配置',
      'summary' => '查询Redis实例审计日志是否开启、日志保存时间等配置信息。',
      'description' => '> 您可以调用[ModifyAuditLogConfig](~~130206~~)接口为实例开启或关闭审计日志。更多信息，请参见[审计日志](~~102015~~)。

调用本接口时，Redis实例必须已开启审计日志开关，详情请参见[ModifyAuditLogConfig](~~130206~~)。',
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
            'description' => '需要查询的实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中的节点ID。传入本参数可查询指定节点的监控信息。

> * 当Redis实例的架构为读写分离或集群架构时，本参数才可用。
> * 您可以调用[DescribeLogicInstanceTopology](~~94665~~)接口查询节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号名称，默认（不填任何值）为查询所有账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis中的Database，默认（不填任何值）为查询所有DB，取值为0 ~ 255，示例0表示DB 0。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryKeywords',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据指定的命令查询审计日志，默认查询所有执行过的命令。

> 只能传入单个关键词。',
            'type' => 'string',
            'required' => false,
            'example' => 'maxclients',
          ),
        ),
        5 => 
        array (
          'name' => 'HostAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端IP，默认（不填任何值）为查询所有地址。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的最大记录数。',
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
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前显示的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-24T12:10:00Z',
          ),
        ),
        9 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 由于审计日志的条目数较多，一般查询的时间范围建议在10分钟以内，最长不超过1天。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-25T12:10:00Z',
          ),
        ),
      ),
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
                'example' => '2019-03-25T12:10:00Z',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2019-03-24T12:10:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9F5EB478-824E-4AC4-8D2B-58F31A02****',
              ),
              'InstanceName' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22222',
              ),
              'PageNumber' => 
              array (
                'description' => '当前显示的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SQL' => 
                  array (
                    'description' => '由审计日志组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HostAddress' => 
                        array (
                          'description' => '客户端地址。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'SQLText' => 
                        array (
                          'description' => '命令记录。',
                          'type' => 'string',
                          'example' => 'CONFIG GET maxmemory',
                        ),
                        'DatabaseName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'SQLType' => 
                        array (
                          'description' => '命令类型。',
                          'type' => 'string',
                          'example' => 'non_read_write',
                        ),
                        'ExecuteTime' => 
                        array (
                          'description' => '执行时间。',
                          'type' => 'string',
                          'example' => '2019-03-25T03:22:08Z',
                        ),
                        'TotalExecutionTimes' => 
                        array (
                          'description' => '执行消耗时间。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '节点ID。
> 实例为集群或读写分离架构时，本参数才会返回具体的节点ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****-db-0',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '账号名称。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => 'IP地址。',
                          'type' => 'string',
                          'example' => '192.16.100.***',
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
            'errorCode' => 'IncorrectDBInstance.NotSupported',
            'errorMessage' => 'This instance do not support log audit.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEndTime.Invalid',
            'errorMessage' => 'pecified end time is before this service active time.',
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
          4 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified  parameter PageSize is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidPageNumbers.Malformed',
            'errorMessage' => 'Specified page number is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidQueryTime.Format',
            'errorMessage' => 'Specified query time is not valid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2019-03-25T12:10:00Z\\",\\n  \\"StartTime\\": \\"2019-03-24T12:10:00Z\\",\\n  \\"RequestId\\": \\"9F5EB478-824E-4AC4-8D2B-58F31A02****\\",\\n  \\"InstanceName\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"TotalRecordCount\\": 22222,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"SQL\\": [\\n      {\\n        \\"HostAddress\\": \\"127.0.0.1\\",\\n        \\"SQLText\\": \\"CONFIG GET maxmemory\\",\\n        \\"DatabaseName\\": \\"demo\\",\\n        \\"SQLType\\": \\"non_read_write\\",\\n        \\"ExecuteTime\\": \\"2019-03-25T03:22:08Z\\",\\n        \\"TotalExecutionTimes\\": \\"0\\",\\n        \\"NodeId\\": \\"r-bp1zxszhcgatnx****-db-0\\",\\n        \\"AccountName\\": \\"demo\\",\\n        \\"IPAddress\\": \\"192.16.100.***\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditRecordsResponse>\\r\\n\\t<Items>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:08Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET band-width</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:08Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET maxmemory</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:08Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET maxclients</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:08Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET qps</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:03Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET qps</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:03Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET maxclients</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t\\t<SQL>\\r\\n\\t\\t\\t<TotalExecutionTimes>0</TotalExecutionTimes>\\r\\n\\t\\t\\t<DatabaseName>0</DatabaseName>\\r\\n\\t\\t\\t<HostAddress>127.0.0.1</HostAddress>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-25T03:22:03Z</ExecuteTime>\\r\\n\\t\\t\\t<SQLText>CONFIG GET maxmemory</SQLText>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<SQLType>non_read_write</SQLType>\\r\\n\\t\\t</SQL>\\r\\n\\t</Items>\\r\\n\\t<TotalRecordCount>36559</TotalRecordCount>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<PageSize>30</PageSize>\\r\\n\\t<RequestId>9F5EB478-824E-4AC4-8D2B-58F31A02****</RequestId>\\r\\n\\t<EndTime>2019-03-25T12:10:00Z</EndTime>\\r\\n\\t<StartTime>2019-03-24T12:10:00Z</StartTime>\\r\\n\\t<InstanceName>r-bp1zxszhcgatnx****</InstanceName>\\r\\n</DescribeAuditRecordsResponse>","errorExample":""}]',
      'title' => '查询Redis实例的审计日志',
      'summary' => '查询Redis实例的审计日志。',
      'description' => '调用本接口时，Redis 实例必须已开启审计日志开关，详情请参见[ModifyAuditLogConfig](~~130206~~)。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中的节点ID。传入本参数可查询指定节点的运行日志。

> * 当Redis实例的架构为读写分离或集群架构时，本参数才可用。
> * 如需传入本参数，您还需要传入**CharacterType**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，您可以查看72小时内的运行日志，格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018-12-03T07:01Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，且起止时间的范围不能超过1天（推荐范围为1小时），格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2018-12-03T08:01Z',
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
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据分片的角色类型，取值：
* **master **：主节点，默认值。
* **slave **：从节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'master',
            'default' => 'master',
            'enum' => 
            array (
              0 => 'master',
              1 => 'primary',
              2 => 'secondary',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的最大记录数，取值： **30**、**50**、**100**，默认值为**30**。',
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
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
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
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        9 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群实例的分片类型，取值：
* **proxy**：代理节点。
* **db**：数据节点。
* **cs**：config server节点。

> 传入本参数后，您还需要传入**NodeId**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'proxy',
            'enum' => 
            array (
              0 => 'proxy',
              1 => 'db',
              2 => 'cs',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'QueryKeyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询运行日志的关键词。',
            'type' => 'string',
            'required' => false,
            'example' => 'aof',
          ),
        ),
        11 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果的排序方式，取值：
* **asc**，表示顺序。
* **desc**，表示倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
            'default' => 'desc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'StartTime' => 
              array (
                'description' => '查询开始时间。',
                'type' => 'string',
                'example' => '2018-12-03T07:01Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '093B8579-9264-43A0-ABA9-AA86****',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页显示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'PageSize' => 
              array (
                'description' => '每页最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'Redis',
              ),
              'PageNumber' => 
              array (
                'description' => '当前显示的页码。',
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
                    'description' => '日志详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'description' => '日志生成时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                          'type' => 'string',
                          'example' => '2018-12-03T07:07:30Z',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****',
                        ),
                        'Content' => 
                        array (
                          'description' => '日志内容。',
                          'type' => 'string',
                          'example' => 'CONFIG REWRITE executed with success.',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '节点ID。
> 实例为标准架构时，本参数返回`(null)`',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****-db-0',
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
            'errorCode' => 'InvalidPageSize.Malformed',
            'errorMessage' => 'The specified  parameter PageSize is not valid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"StartTime\\": \\"2018-12-03T07:01Z\\",\\n  \\"RequestId\\": \\"093B8579-9264-43A0-ABA9-AA86****\\",\\n  \\"PageRecordCount\\": 5,\\n  \\"TotalRecordCount\\": 5,\\n  \\"PageSize\\": 30,\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"Engine\\": \\"Redis\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"LogRecords\\": [\\n      {\\n        \\"CreateTime\\": \\"2018-12-03T07:07:30Z\\",\\n        \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n        \\"Content\\": \\"CONFIG REWRITE executed with success.\\",\\n        \\"NodeId\\": \\"r-bp1zxszhcgatnx****-db-0\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRunningLogRecordsResponse>\\n    <TotalRecordCount>1</TotalRecordCount>\\n    <PageRecordCount>1</PageRecordCount>\\n    <RequestId>D73451AC-B9BA-46AA-8972-C17B967E****</RequestId>\\n    <PageSize>30</PageSize>\\n    <InstanceId>r-bp10noxlhcoim2****</InstanceId>\\n    <PageNumber>1</PageNumber>\\n    <StartTime>2020-11-08T02:00Z</StartTime>\\n    <Items>\\n        <LogRecords>\\n            <InstanceId>r-bp10noxlhcoim2****</InstanceId>\\n            <Content>126732:M 08 Nov 2020 10:02:03.955 # CONFIG REWRITE executed with success.</Content>\\n            <CreateTime>2020-11-08T02:02:06Z</CreateTime>\\n        </LogRecords>\\n    </Items>\\n</DescribeRunningLogRecordsResponse>","errorExample":""}]',
      'title' => '查询Redis实例的运行日志列表',
      'summary' => '查询Redis实例的运行日志。',
      'description' => '该API对应的控制台操作请参见[查询运行日志](~~101713~~)。
DescribeRunningLogRecords的调用频率上限为100次/分钟。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例中的节点ID。传入本参数可查询指定节点的慢日志信息。
> 当Redis实例的架构为读写分离或集群架构时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
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
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-10T14:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，必须晚于查询开始时间，且起止时间的范围不能超过1天（推荐范围为1小时），格式为<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-10T15:00Z',
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
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页可展示的最大记录数，取值：**30**、**50**、**100**，默认值为**30**。',
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
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，取值为大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'SlowLogRecordType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢日志类型，取值：
* **proxy**：代理节点中的慢日志。
* **db**：默认值，数据节点中的慢日志。',
            'type' => 'string',
            'required' => false,
            'example' => 'proxy',
            'default' => 'db',
            'enum' => 
            array (
              0 => 'proxy',
              1 => 'db',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'QueryKeyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可设置一个字符串类型的值，使用该值作为关键词对返回结果进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'keyword1',
          ),
        ),
        9 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的排序方式，取值：
* **ASC**：升序。
* **DESC**：默认值，降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
            'default' => 'DESC',
            'enum' => 
            array (
              0 => 'ASC',
              1 => 'DESC',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的排序依据，取值：
* **execution_time**：默认值，按照请求的执行开始时间排序。
* **latency**：按照请求的执行耗时排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'execution_time',
            'default' => 'execution_time',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'StartTime' => 
              array (
                'description' => '查询的开始时间。',
                'type' => 'string',
                'example' => '2019-03-10T14:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '686BB8A6-BBA5-47E5-8A75-D2ADE433****',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页显示的日志数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '日志条目总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的日志数上限。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp10n********',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'Redis',
              ),
              'PageNumber' => 
              array (
                'description' => '当前显示的页码。',
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
                    'description' => '由慢日志信息组成的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Account' => 
                        array (
                          'description' => '账号ID。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ElapsedTime' => 
                        array (
                          'description' => '执行时长，单位为微秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '248',
                        ),
                        'Command' => 
                        array (
                          'description' => '慢查询语句。',
                          'type' => 'string',
                          'example' => 'KEYS *',
                        ),
                        'DBName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ExecuteTime' => 
                        array (
                          'description' => '执行开始时间，格式：YYYY-MM-DDTHH:mm:ssZ。',
                          'type' => 'string',
                          'example' => '2019-03-12T09:18:41Z',
                        ),
                        'DataBaseName' => 
                        array (
                          'description' => '数据库名称，与**DBName**作用一致，推荐使用**DBName**参数。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'NodeId' => 
                        array (
                          'description' => '节点ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****-db-0',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '账号名称。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'IPAddress' => 
                        array (
                          'description' => '客户端的IP地址。',
                          'type' => 'string',
                          'example' => '172.16.88.***',
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
          ),
          3 => 
          array (
            'errorCode' => 'InvalidPageSize.Malformed',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          1 => 
          array (
            'errorCode' => 'ServerBusy',
            'errorMessage' => 'server busy now, please retry later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"StartTime\\": \\"2019-03-10T14:00Z\\",\\n  \\"RequestId\\": \\"686BB8A6-BBA5-47E5-8A75-D2ADE433****\\",\\n  \\"PageRecordCount\\": 1,\\n  \\"TotalRecordCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"InstanceId\\": \\"r-bp10n********\\",\\n  \\"Engine\\": \\"Redis\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"LogRecords\\": [\\n      {\\n        \\"Account\\": \\"0\\",\\n        \\"ElapsedTime\\": 248,\\n        \\"Command\\": \\"KEYS *\\",\\n        \\"DBName\\": \\"0\\",\\n        \\"ExecuteTime\\": \\"2019-03-12T09:18:41Z\\",\\n        \\"DataBaseName\\": \\"0\\",\\n        \\"NodeId\\": \\"r-bp1zxszhcgatnx****-db-0\\",\\n        \\"AccountName\\": \\"demo\\",\\n        \\"IPAddress\\": \\"172.16.88.***\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogRecordsResponse>\\r\\n\\t<Items>\\r\\n\\t\\t<LogRecords>\\r\\n\\t\\t\\t<Command>KEYS *</Command>\\r\\n\\t\\t\\t<ExecuteTime>2019-03-20T09:18:41Z</ExecuteTime>\\r\\n\\t\\t\\t<ElapsedTime>248</ElapsedTime>\\r\\n\\t\\t\\t<IPAddress>172.16.88.***</IPAddress>\\r\\n\\t\\t\\t<Account>0</Account>\\r\\n\\t\\t\\t<AccountName>0</AccountName>\\r\\n\\t\\t\\t<DataBaseName>-1</DataBaseName>\\r\\n\\t\\t\\t<DBName>-1</DBName>\\r\\n\\t\\t</LogRecords>\\r\\n\\t</Items>\\r\\n\\t<PageNumber>1</PageNumber>\\r\\n\\t<TotalRecordCount>1</TotalRecordCount>\\r\\n\\t<PageSize>30</PageSize>\\r\\n\\t<InstanceId>r-bp1zxszhcgatnx****-db-1</InstanceId>\\r\\n\\t<RequestId>686BB8A6-BBA5-47E5-8A75-D2ADE433****</RequestId>\\r\\n\\t<StartTime>2019-03-10T13:11Z</StartTime>\\r\\n\\t<Engine>Redis</Engine>\\r\\n\\t<PageRecordCount>1</PageRecordCount>\\r\\n</DescribeSlowLogRecordsResponse>","errorExample":""}]',
      'title' => '查看慢日志明细',
      'summary' => '查询Redis实例在指定时间内产生的慢日志。',
      'description' => '该API对应的控制台操作请参见[查询慢日志](~~95874~~)。
DescribeSlowLogRecords的调用频率上限为100次/分钟。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InitializeKvstorePermission' => 
    array (
      'summary' => '为云数据库Redis授权服务关联角色。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D2****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D2****\\"\\n}","errorExample":""},{"type":"xml","example":"<InitializeKvstorePermissionResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</InitializeKvstorePermissionResponse>","errorExample":""}]',
      'title' => '为Redis授权服务关联角色',
      'description' => '由于云数据库Redis的日志管理功能需要使用[日志服务](~~48869~~)的相关资源，使用云数据库Redis的日志管理功能前，您需要调用本接口将名称为AliyunServiceRoleForKvstore的关联角色授权给云数据库Redis使用。更多信息，请参见[Redis服务关联角色](~~184337~~)。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组下的IP列表，最多1000个。IP之间以逗号隔开，格式如下：0.0.0.0/0,10.23.12.24，或者10.23.12.24/24（CIDR模式，无类域间路由，/24表示地址中前缀的长度，范围1-32）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100.64.***.0/24,10.101.11.***',
          ),
        ),
        2 => 
        array (
          'name' => 'SecurityIpGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单分组的名称。
<warning>不可修改系统生成白名单分组。如果不传此字段，将默认修改 default 分组的白名单</warning>',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityIpGroupAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认为空。用于区分不同的属性值，控制台将不显示该值为**hidden**的白名单分组。 ',
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
            'description' => '修改方式，取值：
* **Cover**（默认）：覆盖原白名单。
* **Append**：追加白名单。
* **Delete**：删除该白名单。',
            'type' => 'string',
            'required' => false,
            'example' => 'Append',
            'default' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AAAF99B1-69ED-4E80-8CD5-272C09E4****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden.MinorVersion',
            'errorMessage' => 'The operation is not permitted for current minor version. ',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidGroupName.Format',
            'errorMessage' => 'Sepecified group name is not valid.',
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
            'errorCode' => 'InvalidSecurityIPList.NotFound',
            'errorMessage' => 'Specified same security IP does not exist or at least one security IP need.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'SecurityIPList.Duplicate',
            'errorMessage' => 'Specified same security IP already exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AAAF99B1-69ED-4E80-8CD5-272C09E4****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySecurityIpsResponse>\\n    <RequestId>AAAF99B1-69ED-4E80-8CD5-272C09E4****</RequestId>\\n</ModifySecurityIpsResponse>","errorExample":"{\\n\\"RequestId\\" : \\"AAAF99B1-69ED-4E80-8CD5-272C09E46ACF\\"\\n}"}]',
      'title' => '修改IP白名单',
      'summary' => '设置Redis实例的IP白名单。',
      'description' => '该API对应的控制台操作请参见[设置IP白名单](~~56464~~)。',
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待设置的安全组ID。最多可传入10个，安全组ID之间用英文逗号（,）分隔。
> 将覆盖原设置，取值参考查询您创建的安全组的基本信息[DescribeSecurityGroups](https://next.api.aliyun.com/api/Ecs/2014-05-26/DescribeSecurityGroups)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sg-bpcfmyiu4ekp****',
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
                'example' => '147CAC09-E8C6-43F8-9599-982A43D6****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'EngineNotSupported',
            'errorMessage' => 'Engine specified cannot be supported the operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AssociatedEcsSecurityGroupIdQuotaExceed',
            'errorMessage' => 'SecurityGroupId参数超过能使用的最大数量.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingInstanceId',
            'errorMessage' => 'InstanceId is mandatory for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Specified ecs security group id is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidIzNo.NotSupported',
            'errorMessage' => 'the Specified Zone not supported.',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter “DBInstanceId” that is mandatory for processing this request is not supplied.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'Specified instance does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRegionZoneNotFound',
            'errorMessage' => 'Specified Region does not exist in RDS.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"147CAC09-E8C6-43F8-9599-982A43D6****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifySecurityGroupConfigurationResponse>\\r\\n    <RequestId>147CAC09-E8C6-43F8-9599-982A43D6****</RequestId>\\r\\n</ModifySecurityGroupConfigurationResponse>","errorExample":""}]',
      'title' => '设置Redis实例白名单中的安全组',
      'summary' => '设置Redis实例白名单中的安全组。',
      'description' => '> 调用本接口会清空Redis实例白名单中原有的安全组，并将**SecurityGroupId**参数中指定的安全组加入至白名单。该API对应的控制台操作请参见[添加安全组](~~148267~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceSSL' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'SSLEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改TLS（SSL）设置，取值：
* **Disable**：关闭。
* **Enable**：开启。
* **Update**：更新证书。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Enable',
            'enum' => 
            array (
              0 => 'Disable',
              1 => 'Enable',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AD7E16AA-6B23-43BF-979C-07D957FB****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '32184****',
              ),
            ),
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectCharacterType',
            'errorMessage' => 'Current DB instance CharacterType does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
          2 => 
          array (
            'errorCode' => 'IncorrectDBInstanceState',
            'errorMessage' => 'Current DB instance state does not support this operation.',
          ),
          3 => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AD7E16AA-6B23-43BF-979C-07D957FB****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"TaskId\\": \\"32184****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceSSLResponse>\\n    <TaskId>32184****</TaskId>\\n    <RequestId>AD7E16AA-6B23-43BF-979C-07D957FB****</RequestId>\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\n</ModifyInstanceSSLResponse>","errorExample":"<ModifyInstanceSSLResponse>\\n <InstanceId>r-xxxxxxxxxxxxxxx</InstanceId>\\n <RequestId>52D901ED-E0A5-42FB-B9DB-39C295C37738</RequestId>\\n <TaskId>111</TaskId>\\n</ModifyInstanceSSLResponse>"}]',
      'title' => '修改TLS（SSL）配置',
      'summary' => '为Redis实例开启TLS（Transport Layer Security）加密协议配置。',
      'description' => '该API对应的控制台操作请参见[设置SSL加密](~~84898~~)。
> 如需指定SSL最低版本，您可以调用[ModifyInstanceConfig](~~61113~~)接口通过修改参数来实现。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'VpcAuthMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络下的认证模式，取值：
* **Open**：通过密码认证。
* **Close**：关闭密码认证，即开启免密访问。

> 默认值为**Open**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Close',
            'enum' => 
            array (
              0 => 'Open',
              1 => 'Close',
              2 => 'OPEN',
              3 => 'CLOSE',
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
                'example' => 'ABAF95F6-35C1-4177-AF3A-70969EBD****',
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
            'errorCode' => 'ParamNotSupportedForCurrentVersion',
            'errorMessage' => 'Parameter is not supported for current version.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ABAF95F6-35C1-4177-AF3A-70969EBD****\\"\\n}","errorExample":"{ \\n  \\"RequestId\\":\\"29896E96-E8C4-4F24-868A-6xxxxxxxx3\\"\\n}"},{"type":"xml","example":"<ModifyInstanceVpcAuthModeResponse>\\n    <RequestId>ABAF95F6-35C1-4177-AF3A-70969EBD****</RequestId>\\n</ModifyInstanceVpcAuthModeResponse>","errorExample":"<ModifyInstanceVpcAuthModeResponse>\\n <RequestId>EFC9161F-15E3-4A6E-8A99-Cxxxxxxxxx4</RequestId>\\n</ModifyInstanceVpcAuthModeResponse>"}]',
      'title' => '修改专有网络免密访问设置',
      'summary' => '开启或关闭专有网络免密访问，可在保障安全性的前提下，实现更便捷的数据库连接。',
      'description' => '设置免密访问后，同一专有网络内的云服务器无需使用密码即可连接Redis实例，同时也继续兼容通过用户名和密码的方式连接Redis实例。

> 调用本接口时需确保Redis实例的网络类型为专有网络。更多信息，请参见[开启免密访问](~~85168~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSecurityIps' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFC9161F-15E3-4A6E-8A99-C09916D1****',
              ),
              'SecurityIpGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SecurityIpGroup' => 
                  array (
                    'description' => '实例的IP白名单分组信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecurityIpGroupAttribute' => 
                        array (
                          'description' => 'IP白名单分组属性，默认为空。
> **hidden**分组表示经用户授权后，系统（DAS、DMS、DTS等）自动生成的白名单分组，此类白名单分组不支持修改、删除操作。 ',
                          'type' => 'string',
                          'example' => 'hidden',
                        ),
                        'SecurityIpList' => 
                        array (
                          'description' => 'IP白名单分组下的IP列表，最多1000个。',
                          'type' => 'string',
                          'example' => '100.100.202.***/24,10.10.10.***',
                        ),
                        'SecurityIpGroupName' => 
                        array (
                          'description' => 'IP白名单分组的名称。',
                          'type' => 'string',
                          'example' => 'default',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The InstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFC9161F-15E3-4A6E-8A99-C09916D1****\\",\\n  \\"SecurityIpGroups\\": {\\n    \\"SecurityIpGroup\\": [\\n      {\\n        \\"SecurityIpGroupAttribute\\": \\"hidden\\",\\n        \\"SecurityIpList\\": \\"100.100.202.***/24,10.10.10.***\\",\\n        \\"SecurityIpGroupName\\": \\"default\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"SecurityIpGroups\\":{\\n    \\"SecurityIpGroup\\":[{\\n        \\"SecurityIpList\\":\\"127.0.0.1\\",\\n\\t\\t\\"SecurityIpGroupAttribute\\":\\"\\",\\n\\t\\t\\"SecurityIpGroupName\\":\\"default\\"\\n\\t\\t\\t\\t\\t   },{\\n        \\"SecurityIpList\\":\\"11.xxx.xxx.xxx,10.xxx.xxx.xxx\\",\\n\\t\\t\\"SecurityIpGroupAttribute\\":\\"hidden\\",\\n\\t    \\"SecurityIpGroupName\\":\\"rds_replica_group\\"\\n\\t\\t\\t\\t\\t\\t}]\\n\\t\\t\\t\\t\\t },\\n \\"RequestId\\":\\"EFC9161F-15E3-4A6E-8A99-C09916D1F464\\"\\n}"},{"type":"xml","example":"<DescribeSecurityIpsResponse>\\r\\n    <SecurityIpGroups>\\r\\n        <SecurityIpGroup>\\r\\n            <SecurityIpList>127.0.0.1</SecurityIpList>\\r\\n            <SecurityIpGroupAttribute/>\\r\\n            <SecurityIpGroupName>default</SecurityIpGroupName>\\r\\n        </SecurityIpGroup>\\r\\n        <SecurityIpGroup>\\r\\n            <SecurityIpList>100.100.202.***/24,10.10.10.***</SecurityIpList>\\r\\n            <SecurityIpGroupAttribute>hidden</SecurityIpGroupAttribute>\\r\\n            <SecurityIpGroupName>rds_replica_group</SecurityIpGroupName>\\r\\n        </SecurityIpGroup>\\r\\n    </SecurityIpGroups>\\r\\n    <RequestId>EFC9161F-15E3-4A6E-8A99-C09916D1****</RequestId>\\r\\n</DescribeSecurityIpsResponse>","errorExample":"<DescribeSecurityIpsResponse>\\n <SecurityIpGroups>\\n   <SecurityIpGroup>\\n     <SecurityIpList>127.0.0.1</SecurityIpList>\\n     <SecurityIpGroupAttribute></SecurityIpGroupAttribute>\\n     <SecurityIpGroupName>default</SecurityIpGroupName>\\n   </SecurityIpGroup>\\n   <SecurityIpGroup>\\n     <SecurityIpList>11.111.111.111,10.200.200.200</SecurityIpList>\\n     <SecurityIpGroupAttribute>hidden</SecurityIpGroupAttribute>\\n     <SecurityIpGroupName>rds_replica_group</SecurityIpGroupName>\\n   </SecurityIpGroup>\\n </SecurityIpGroups>\\n <RequestId>EFC9161F-15E3-4A6E-8A99-C09916D1F464</RequestId>\\n</DescribeSecurityIpsResponse>"}]',
      'title' => '查询实例的IP白名单',
      'summary' => '查询Redis实例的IP白名单。',
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
      'operationType' => 'read',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '981C0D6A-D9DD-466C-92DA-F29DF755****',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EcsSecurityGroupRelation' => 
                  array (
                    'description' => '安全组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecurityGroupId' => 
                        array (
                          'description' => '安全组ID。',
                          'type' => 'string',
                          'example' => 'sg-bp14p9y07ns3gwq****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'NetType' => 
                        array (
                          'description' => '安全组的网络类型，返回值：
* **classic**：经典网络。
* **vpc**：专有网络。',
                          'type' => 'string',
                          'example' => 'vpc',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The InstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"981C0D6A-D9DD-466C-92DA-F29DF755****\\",\\n  \\"Items\\": {\\n    \\"EcsSecurityGroupRelation\\": [\\n      {\\n        \\"SecurityGroupId\\": \\"sg-bp14p9y07ns3gwq****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"NetType\\": \\"vpc\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSecurityGroupConfigurationResponse>\\n    <RequestId>981C0D6A-D9DD-466C-92DA-F29DF755****</RequestId>\\n    <Items>\\n        <EcsSecurityGroupRelation>\\n            <SecurityGroupId>sg-bp14p9y07ns3gwq****</SecurityGroupId>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <NetType>vpc</NetType>\\n        </EcsSecurityGroupRelation>\\n    </Items>\\n</DescribeSecurityGroupConfigurationResponse>","errorExample":""}]',
      'title' => '查询已配置的安全组',
      'summary' => '查看Redis白名单中设置的安全组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceSSL' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '02260F96-913E-4655-9BA5-A3651CAF****',
              ),
              'SSLEnabled' => 
              array (
                'description' => 'TLS（SSL）加密功能的状态：
* **Enable**：已开启。
* **Disable**：未开启。',
                'type' => 'string',
                'example' => 'Enable',
              ),
              'SSLExpiredTime' => 
              array (
                'description' => 'CA证书的过期时间。',
                'type' => 'string',
                'example' => '2020-08-05T09:05:53Z',
              ),
              'CertCommonName' => 
              array (
                'description' => 'CA证书的公共名，默认值为实例的内网连接地址。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com',
              ),
              'CertDownloadURL' => 
              array (
                'description' => 'CA证书的下载链接。',
                'type' => 'string',
                'example' => 'https://apsaradb-public.oss-ap-sout****-1.aliy****.com/ApsaraDB-CA-Chain.zip',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidRedisVersionPattern',
            'errorMessage' => 'Redis db or proxy version does not match specified pattern.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectCharacterType',
            'errorMessage' => 'Current DB instance CharacterType does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support operations.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The InstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"RequestId\\": \\"02260F96-913E-4655-9BA5-A3651CAF****\\",\\n  \\"SSLEnabled\\": \\"Enable\\",\\n  \\"SSLExpiredTime\\": \\"2020-08-05T09:05:53Z\\",\\n  \\"CertCommonName\\": \\"r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com\\",\\n  \\"CertDownloadURL\\": \\"https://apsaradb-public.oss-ap-sout****-1.aliy****.com/ApsaraDB-CA-Chain.zip\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceSSLResponse>\\n    <SSLEnabled>Enable</SSLEnabled>\\n    <SSLExpiredTime>2020-08-05T09:05:53Z</SSLExpiredTime>\\n    <InstanceId>r-bp1zxszhcgatnx****</InstanceId>\\n    <RequestId>02260F96-913E-4655-9BA5-A3651CAF****</RequestId>\\n    <CertCommonName>r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com</CertCommonName>\\n</DescribeInstanceSSLResponse>","errorExample":""}]',
      'title' => '查询是否开启TLS（SSL）加密',
      'summary' => '查询实例是否开启了TLS（SSL）加密认证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyInstanceConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Config',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需修改的实例参数，格式为JSON，修改后的值会覆盖原来的值。例如您只希望修改**maxmemory-policy**参数为**noeviction**，您可以传入`{"maxmemory-policy":"noeviction"}`。
> 关于各参数的详细说明，请参见[参数说明](~~259681~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"maxmemory-policy":"volatile-lru","zset-max-ziplist-entries":128,"zset-max-ziplist-value":64,"hash-max-ziplist-entries":512,"set-max-intset-entries":512}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D0C0AFC-E9CD-47A4-8395-5C31BF9B****',
              ),
            ),
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
            'errorCode' => 'ParamNotSupportedForCurrentVersion',
            'errorMessage' => 'Parameter is not supported for current version.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceType.NotSupport',
            'errorMessage' => 'Current instance type does not support this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkType.NotSupport',
            'errorMessage' => 'Current network type does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D0C0AFC-E9CD-47A4-8395-5C31BF9B****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceConfigResponse>\\n    <requestId>8D0C0AFC-E9CD-47A4-8395-5C31BF9B****</requestId>\\n</ModifyInstanceConfigResponse>","errorExample":""}]',
      'title' => '修改Redis实例的参数配置',
      'summary' => '修改Redis实例的参数配置。',
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
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的架构，更多信息，请参见[架构介绍](~~86132~~)。取值：
* **logic**：集群或读写分离架构。
* **normal**：主从架构。

<props="china">当**EngineVersion**取值为**6.0**时，本参数不支持传入**logic**。</props>



',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'logic',
            'enum' => 
            array (
              0 => 'logic',
              1 => 'normal',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Engine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值固定为**Redis**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Redis',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Redis实例的大版本，取值：**4.0**、**5.0**、**6.0**或**7.0**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。您可以通过调用[ListResourceGroups](~~158855~~)接口获取资源组ID。
> 您也可以通过控制台获取资源组ID，相关操作，请参见[查看资源组基本信息](~~151181~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmyiu4ekp****',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DA28D8E-514D-4F12-ADED-70A9C818****',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型，返回值固定为**Redis**。',
                'type' => 'string',
                'example' => 'redis',
              ),
              'EngineVersion' => 
              array (
                'description' => 'Redis实例的大版本。',
                'type' => 'string',
                'example' => '5.0',
              ),
              'ParameterCount' => 
              array (
                'description' => '参数个数。',
                'type' => 'string',
                'example' => '24',
              ),
              'Parameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateRecord' => 
                  array (
                    'description' => '参数的详细信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '参数值的可选范围。',
                          'type' => 'string',
                          'example' => '[yes|no]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名，更多关于参数作用的介绍和设置说明，请参见[参数说明](~~259681~~)。',
                          'type' => 'string',
                          'example' => 'appendonly',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数默认值。',
                          'type' => 'string',
                          'example' => 'yes',
                        ),
                        'ForceModify' => 
                        array (
                          'description' => '参数是否可修改，返回值：
* **true**：可修改。
* **false**：不可修改。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '参数修改后，是否需要重启生效，返回值：
* **true**：需要重启生效。
* **false**：修改后立即生效，无需重启。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数描述。',
                          'type' => 'string',
                          'example' => '开启aof持久化模式',
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
            'errorCode' => 'InvalidParameters.Format',
            'errorMessage' => 'Specified parameters is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParamNotSupportedForCurrentVersion',
            'errorMessage' => 'Parameter is not supported for current version.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DA28D8E-514D-4F12-ADED-70A9C818****\\",\\n  \\"Engine\\": \\"redis\\",\\n  \\"EngineVersion\\": \\"5.0\\",\\n  \\"ParameterCount\\": \\"24\\",\\n  \\"Parameters\\": {\\n    \\"TemplateRecord\\": [\\n      {\\n        \\"CheckingCode\\": \\"[yes|no]\\",\\n        \\"ParameterName\\": \\"appendonly\\",\\n        \\"ParameterValue\\": \\"yes\\",\\n        \\"ForceModify\\": true,\\n        \\"ForceRestart\\": true,\\n        \\"ParameterDescription\\": \\"开启aof持久化模式\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterTemplatesResponse>\\r\\n    <ParameterCount>24</ParameterCount>\\r\\n    <EngineVersion>5.0</EngineVersion>\\r\\n    <Parameters>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>no</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>#no_loose_check-whitelist-always</ParameterName>\\r\\n            <ParameterDescription>check whitelist always</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>.*</CheckingCode>\\r\\n            <ParameterValue/>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>#no_loose_disabled-commands</ParameterName>\\r\\n            <ParameterDescription>You can disable some dangerous commands, for example \\"keys,flushdb,flushall\\", the commands must be in [flushall,flushdb,keys,hgetall,eval,evalsha,script].</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>no</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>#no_loose_sentinel-enabled</ParameterName>\\r\\n            <ParameterDescription>Be compatible with sentinel mode.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>yes</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>appendonly</ParameterName>\\r\\n            <ParameterDescription>开启aof持久化模式</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>\\\\d+\\\\s+\\\\d+\\\\s+\\\\d+</CheckingCode>\\r\\n            <ParameterValue>33554432 8388608 60</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>client-output-buffer-limit pubsub</ParameterName>\\r\\n            <ParameterDescription>发布订阅客户端写缓冲区MB</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>yes</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>dynamic-hz</ParameterName>\\r\\n            <ParameterDescription>是否设置动态hz</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>512</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>hash-max-ziplist-entries</ParameterName>\\r\\n            <ParameterDescription>If hash fields are less than this value and hash value sizes are less than hash-max-ziplist-value, the ziplist will be used.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>64</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>hash-max-ziplist-value</ParameterName>\\r\\n            <ParameterDescription>If hash value sizes are than less this value and hash fields are less than hash-max-ziplist-entries, the ziplist will be used.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[1-500]</CheckingCode>\\r\\n            <ParameterValue>10</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>hz</ParameterName>\\r\\n            <ParameterDescription>设置Redis后台任务执行频率，比如清除过期键任务,设置范围为1到500，默认为10.越大CPU消耗越大，延迟越小，建议不要超过100</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>no</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>lazyfree-lazy-eviction</ParameterName>\\r\\n            <ParameterDescription>lazyfree switch on eviction.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>yes</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>lazyfree-lazy-expire</ParameterName>\\r\\n            <ParameterDescription>lazyfree switch on expire.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[yes|no]</CheckingCode>\\r\\n            <ParameterValue>yes</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>lazyfree-lazy-server-del</ParameterName>\\r\\n            <ParameterDescription>lazyfree switch on server implicit deletion.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-65535]</CheckingCode>\\r\\n            <ParameterValue>0</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>list-compress-depth</ParameterName>\\r\\n            <ParameterDescription>The number of entries on the list that are not compressed at both ends.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[-5-99999999]</CheckingCode>\\r\\n            <ParameterValue>-2</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>list-max-ziplist-size</ParameterName>\\r\\n            <ParameterDescription>Threadhold of ziplist size on quicklist.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[volatile-lru|allkeys-lru|volatile-random|allkeys-random|volatile-ttl|volatile-lfu|allkeys-lfu|noeviction]</CheckingCode>\\r\\n            <ParameterValue>volatile-lru</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>maxmemory-policy</ParameterName>\\r\\n            <ParameterDescription>To config how Redis will select what to remove when maxmemory is reached. There are eight behaviors that can be chose : volatile-lru,allkeys-lru,volatile-lfu,allkeys-lfu,volatile-random,allkeys-random,volatile-ttl,noeviction</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>.*</CheckingCode>\\r\\n            <ParameterValue/>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>notify-keyspace-events</ParameterName>\\r\\n            <ParameterDescription>keyspace-event notification feature.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>512</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>set-max-intset-entries</ParameterName>\\r\\n            <ParameterDescription>Sets have a special encoding in just one case: when a set is composed of just strings that happen to be integers in radix 10 in the range of 64 bit signed integers. The following configuration setting sets the limit in the size of the set in order to use this special memory saving encoding.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[10000-10000000]</CheckingCode>\\r\\n            <ParameterValue>20000</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>slowlog-log-slower-than</ParameterName>\\r\\n            <ParameterDescription>The time is expressed in microseconds, so 1000000 is equivalent to one second. The default setting for this is 20000 (20ms) and the lower bound of this setting is 10000 (10ms). </ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[100-10000]</CheckingCode>\\r\\n            <ParameterValue>1024</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>slowlog-max-len</ParameterName>\\r\\n            <ParameterDescription>The max slowlog count.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>4096</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>stream-node-max-bytes</ParameterName>\\r\\n            <ParameterDescription>stream节点大小限制，默认4096， 取值范围：&gt;=0, 0代表并没有限制</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>100</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>stream-node-max-entries</ParameterName>\\r\\n            <ParameterDescription>stream节点个数限制，默认100， 取值范围：&gt;=0, 0代表并没有限制</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-100000]</CheckingCode>\\r\\n            <ParameterValue>0</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>timeout</ParameterName>\\r\\n            <ParameterDescription>Close the connection after a client is idle for N seconds (0 to disable)</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>128</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>zset-max-ziplist-entries</ParameterName>\\r\\n            <ParameterDescription>Similarly to hashes and lists, sorted sets are also specially encoded in order to save a lot of space.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n        <TemplateRecord>\\r\\n            <ForceModify>1</ForceModify>\\r\\n            <CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n            <ParameterValue>64</ParameterValue>\\r\\n            <ForceRestart>false</ForceRestart>\\r\\n            <ParameterName>zset-max-ziplist-value</ParameterName>\\r\\n            <ParameterDescription>Similarly to hashes and lists, sorted sets are also specially encoded in order to save a lot of space.</ParameterDescription>\\r\\n        </TemplateRecord>\\r\\n    </Parameters>\\r\\n    <RequestId>9DA28D8E-514D-4F12-ADED-70A9C818F0A0</RequestId>\\r\\n    <Engine>redis</Engine>\\r\\n</DescribeParameterTemplatesResponse>","errorExample":""}]',
      'title' => '查询参数列表和默认值',
      'summary' => '查询Redis实例在不同架构和大版本下的参数列表和默认值。',
      'description' => '调用本接口查询到参数列表和默认值后，您还可以根据业务需求调用[ModifyInstanceConfig](~~61113~~)接口修改Redis实例的参数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Config' => 
              array (
                'description' => '实例的默认配置参数，更全面的参数配置请调用[Describeparamters](~~473847~~)接口。',
                'type' => 'string',
                'example' => '{\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4E2C08F6-2D11-4ECD-9A4C-27EF2D3D****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Config\\": \\"{\\\\\\\\\\\\\\"EvictionPolicy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"volatile-lru\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hash-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"zset-max-ziplist-entries\\\\\\\\\\\\\\":128,\\\\\\\\\\\\\\"list-max-ziplist-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"list-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"zset-max-ziplist-value\\\\\\\\\\\\\\":64,\\\\\\\\\\\\\\"set-max-intset-entries\\\\\\\\\\\\\\":512,\\\\\\\\\\\\\\"hash-max-ziplist-value\\\\\\\\\\\\\\":64}\\",\\n  \\"RequestId\\": \\"4E2C08F6-2D11-4ECD-9A4C-27EF2D3D****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceConfigResponse>\\n    <RequestId>4E2C08F6-2D11-4ECD-9A4C-27EF2D3D****</RequestId>\\n    <Config>{\\"#no_loose_statistics-cmds\\":\\"SET,GET\\",\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"slowlog-log-slower-than\\":\\"1000\\",\\"notify-keyspace-events\\":\\"$\\",\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64,\\"#no_loose_disabled-commands\\":\\"flushall\\"}</Config>\\n</DescribeInstanceConfigResponse>","errorExample":""}]',
      'title' => '查询实例参数配置',
      'summary' => '查询Redis实例的部分默认配置参数信息。',
      'description' => '本接口仅支持查询云原生版实例。
> 若实例为经典版，您可以通过[DescribeParameters](~~473847~~)接口进行查询。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询，使用此参数指定要创建实例的地域。',
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
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点ID。
> 传入本参数可查询集群实例中指定节点的参数配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1xxxxxxxxxxxxx-db-0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C1338BE-8DE8-4890-A900-E1BC06BF****',
              ),
              'Engine' => 
              array (
                'description' => '数据库类型。',
                'type' => 'string',
                'example' => 'redis',
              ),
              'EngineVersion' => 
              array (
                'description' => '数据库版本号。',
                'type' => 'string',
                'example' => '4.0',
              ),
              'ConfigParameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Parameter' => 
                  array (
                    'description' => '未生效的配置参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '校验代码，参数的可选范围。',
                          'type' => 'string',
                          'example' => '[0|1]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => 'script_check_enable',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数的值。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '是否需要重启生效，返回值：
* **True**：重启生效。
* **False**：无需重启，提交后即生效。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数的描述。',
                          'type' => 'string',
                          'example' => 'Check all keys passed in the KEYS array map to the same slot.',
                        ),
                        'ModifiableStatus' => 
                        array (
                          'description' => '参数是否可修改，返回值：
* **False**：不可修改。
* **True**：可修改。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RunningParameters' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Parameter' => 
                  array (
                    'description' => '运行参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CheckingCode' => 
                        array (
                          'description' => '参数的可选范围。',
                          'type' => 'string',
                          'example' => '[0|1]',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => '#no_loose_disabled-commands',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数的值。',
                          'type' => 'string',
                          'example' => 'keys,flushall,flushdb',
                        ),
                        'ForceRestart' => 
                        array (
                          'description' => '是否需要重启生效，返回值：
* **True**：重启生效。
* **False**：无需重启，提交后即生效。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'ParameterDescription' => 
                        array (
                          'description' => '参数的描述。',
                          'type' => 'string',
                          'example' => 'You can disable some dangerous commands, for example \\"keys,flushdb,flushall\\", the commands must be in [flushall,flushdb,keys,hgetall,eval,evalsha,script].',
                        ),
                        'ModifiableStatus' => 
                        array (
                          'description' => '参数是否可修改，返回值：
* **False**：不可修改。
* **True**：可修改。',
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
            'errorMessage' => 'Specified DB instance class is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9C1338BE-8DE8-4890-A900-E1BC06BF****\\",\\n  \\"Engine\\": \\"redis\\",\\n  \\"EngineVersion\\": \\"4.0\\",\\n  \\"ConfigParameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"CheckingCode\\": \\"[0|1]\\",\\n        \\"ParameterName\\": \\"script_check_enable\\",\\n        \\"ParameterValue\\": \\"1\\",\\n        \\"ForceRestart\\": true,\\n        \\"ParameterDescription\\": \\"Check all keys passed in the KEYS array map to the same slot.\\",\\n        \\"ModifiableStatus\\": true\\n      }\\n    ]\\n  },\\n  \\"RunningParameters\\": {\\n    \\"Parameter\\": [\\n      {\\n        \\"CheckingCode\\": \\"[0|1]\\",\\n        \\"ParameterName\\": \\"#no_loose_disabled-commands\\",\\n        \\"ParameterValue\\": \\"keys,flushall,flushdb\\",\\n        \\"ForceRestart\\": \\"true\\",\\n        \\"ParameterDescription\\": \\"You can disable some dangerous commands, for example \\\\\\\\\\\\\\"keys,flushdb,flushall\\\\\\\\\\\\\\", the commands must be in [flushall,flushdb,keys,hgetall,eval,evalsha,script].\\",\\n        \\"ModifiableStatus\\": \\"true\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParametersResponse>\\r\\n\\t<ConfigParameters></ConfigParameters>\\r\\n\\t<RequestId>9C1338BE-8DE8-4890-A900-E1BC06BF****</RequestId>\\r\\n\\t<RunningParameters>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>check whitelist always</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>no</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[yes|no]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>#no_loose_check-whitelist-always</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>You can disable some dangerous commands, for example &quot;keys,flushdb,flushall&quot;, the commands must be in [flushall,flushdb,keys,hgetall,eval,evalsha,script].</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>keys,flushall,flushdb</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>.*</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>#no_loose_disabled-commands</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>开启关闭SSL</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>yes</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[yes|no]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>#no_loose_ssl-enabled</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>Be compatible with cluster mode.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>0</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0|1]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>cluster_compat_enable</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>Check all keys passed in the KEYS array map to the same slot.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>1</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0|1]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>script_check_enable</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>If hash fields are less than this value and hash value sizes are less than hash-max-ziplist-value, the ziplist will be used.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>512</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>hash-max-ziplist-entries</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>If hash value sizes are than less this value and hash fields are less than hash-max-ziplist-entries, the ziplist will be used.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>64</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>hash-max-ziplist-value</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>lazyfree switch on eviction.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>yes</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[yes|no]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>lazyfree-lazy-eviction</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>lazyfree switch on expire.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>yes</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[yes|no]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>lazyfree-lazy-expire</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>lazyfree switch on server implicit deletion.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>yes</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[yes|no]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>lazyfree-lazy-server-del</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The number of entries on the list that are not compressed at both ends.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>0</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-65535]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>list-compress-depth</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>Threadhold of ziplist size on quicklist.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>-2</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[-5-99999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>list-max-ziplist-size</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>To config how Redis will select what to remove when maxmemory is reached. There are eight behaviors that can be chose : volatile-lru,allkeys-lru,volatile-lfu,allkeys-lfu,volatile-random,allkeys-random,volatile-ttl,noeviction</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>volatile-lfu</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[volatile-lru|allkeys-lru|volatile-random|allkeys-random|volatile-ttl|volatile-lfu|allkeys-lfu|noeviction]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>maxmemory-policy</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>\\r\\n\\t\\t\\t\\tSets have a special encoding in just one case: when a set is composed\\r\\n\\t\\t\\t\\tof just strings that happen to be integers in radix 10 in the range\\r\\n\\t\\t\\t\\tof 64 bit signed integers.\\r\\n\\t\\t\\t\\tThe following configuration setting sets the limit in the size of the\\r\\n\\t\\t\\tset in order to use this special memory saving encoding.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>512</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>set-max-intset-entries</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>\\r\\n\\t\\t\\t\\tThe time is expressed in microseconds, so 1000000 is equivalent\\r\\n\\t\\t\\t\\tto one second. Note that a negative number disables the slow log,\\r\\n\\t\\t\\twhile a value of zero forces the logging of every command.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>10000</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-10000000]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>slowlog-log-slower-than</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>The max slowlog count.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>1024</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[100-10000]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>slowlog-max-len</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>\\r\\n\\t\\t\\t\\tSimilarly to hashes and lists, sorted sets are also specially encoded in\\r\\n\\t\\t\\torder to save a lot of space.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>128</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>zset-max-ziplist-entries</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t\\t<Parameter>\\r\\n\\t\\t\\t<ParameterDescription>\\r\\n\\t\\t\\t\\tSimilarly to hashes and lists, sorted sets are also specially encoded in\\r\\n\\t\\t\\torder to save a lot of space.</ParameterDescription>\\r\\n\\t\\t\\t<ParameterValue>64</ParameterValue>\\r\\n\\t\\t\\t<CheckingCode>[0-999999999999999]</CheckingCode>\\r\\n\\t\\t\\t<ForceRestart>false</ForceRestart>\\r\\n\\t\\t\\t<ModifiableStatus>true</ModifiableStatus>\\r\\n\\t\\t\\t<ParameterName>zset-max-ziplist-value</ParameterName>\\r\\n\\t\\t</Parameter>\\r\\n\\t</RunningParameters>\\r\\n\\t<EngineVersion>4.0</EngineVersion>\\r\\n\\t<Engine>redis</Engine>\\r\\n</DescribeParametersResponse>","errorExample":"{\\n   \\"ConfigParameters\\":{\\n       \\"Parameter\\":[\\n\\n       ]\\n   },\\n   \\"RequestId\\":\\"90A7936F-B9A3-4226-9B47-CF1D0EF81604\\",\\n   \\"RunningParameters\\":{\\n       \\"Parameter\\":[\\n           {\\n               \\"ParameterDescription\\":\\"Redis可支持的最大key，value长度\\",\\n               \\"ParameterValue\\":\\"4194304\\",\\n               \\"CheckingCode\\":\\"[0-9]+\\",\\n               \\"ForceRestart\\":\\"false\\",\\n               \\"ModifiableStatus\\":\\"true\\",\\n               \\"ParameterName\\":\\"#no_loose_max-memcached-allow-request-length\\"\\n           },\\n           {\\n               \\"ParameterValue\\":\\"512\\",\\n               \\"CheckingCode\\":\\"[0-999999999999999]\\",\\n               \\"ForceRestart\\":\\"false\\",\\n               \\"ModifiableStatus\\":\\"true\\",\\n               \\"ParameterName\\":\\"set-max-intset-entries\\"\\n           },\\n           {\\n               \\"ParameterValue\\":\\"64\\",\\n               \\"CheckingCode\\":\\"[0-999999999999999]\\",\\n               \\"ForceRestart\\":\\"false\\",\\n               \\"ModifiableStatus\\":\\"true\\",\\n               \\"ParameterName\\":\\"zset-max-ziplist-value\\"\\n           }\\n       ]\\n   },\\n   \\"EngineVersion\\":\\"2.8\\",\\n   \\"Engine\\":\\"redis\\"\\n}"}]',
      'title' => '查询Redis实例的配置参数和运行参数',
      'summary' => '查询Redis实例的配置参数和运行参数。',
      'description' => '本接口仅支持查询经典版实例。
> 若实例为云原生版，您可以通过[DescribeInstanceConfig](~~473846~~)接口进行查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点ID。
> 传入本参数可查询集群实例中指定节点的参数配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1xxxxxxxxxxxxx-db-0',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-09-05T08:49:27Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，必须晚于查询开始时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-09-05T09:49:27Z',
          ),
        ),
        4 => 
        array (
          'name' => 'ParameterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数名。',
            'type' => 'string',
            'required' => false,
            'example' => 'script_check_enable',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '963C20F0-7CE1-4591-AAF3-6F3CD1CE****',
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
                        'OldParameterValue' => 
                        array (
                          'description' => '变更前的参数值。',
                          'type' => 'string',
                          'example' => '-2',
                        ),
                        'ParameterName' => 
                        array (
                          'description' => '参数名。',
                          'type' => 'string',
                          'example' => 'script_check_enable',
                        ),
                        'NewParameterValue' => 
                        array (
                          'description' => '变更后的参数值。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '修改时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                          'type' => 'string',
                          'example' => '2022-09-05T09:56:10Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"963C20F0-7CE1-4591-AAF3-6F3CD1CE****\\",\\n  \\"HistoricalParameters\\": {\\n    \\"HistoricalParameter\\": [\\n      {\\n        \\"OldParameterValue\\": \\"-2\\",\\n        \\"ParameterName\\": \\"script_check_enable\\",\\n        \\"NewParameterValue\\": \\"0\\",\\n        \\"ModifyTime\\": \\"2022-09-05T09:56:10Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterModificationHistoryResponse>\\n    <RequestId>F8A9016D-51B4-56FF-AF08-2660FB8E92A8</RequestId>\\n    <HistoricalParameters>\\n        <HistoricalParameter>\\n            <NewParameterValue>-1</NewParameterValue>\\n            <ModifyTime>2022-09-05T09:56:10Z</ModifyTime>\\n            <OldParameterValue>-2</OldParameterValue>\\n            <ParameterName>list-max-ziplist-size</ParameterName>\\n        </HistoricalParameter>\\n    </HistoricalParameters>\\n</DescribeParameterModificationHistoryResponse>","errorExample":""}]',
      'title' => '查询参数修改历史',
      'summary' => '查询Tair或Redis实例的参数修改历史。',
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
            'description' => '实例所属的地域ID。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
              1 => 'instance',
            ),
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
            'example' => '212db86sca4384811e0b5e8707ec2****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。

> * 本参数和**Tag**参数两者中必须传入一项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'r-bp1zxszhcgatnx****',
            ),
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****',
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
            'description' => '实例的标签信息。本参数和**ResourceId**参数两者中必须传入一项。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'demokey',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'demovalue',
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
            'description' => '对象。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的token继续查询。',
                'type' => 'string',
                'example' => '212db86sca4384811e0b5e8707ec2****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '47A514A1-4B77-4E30-B4C5-2A880650****',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '实例和标签的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagValue' => 
                        array (
                          'description' => '标签的值。',
                          'type' => 'string',
                          'example' => 'demovalue',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。返回值固定为**ALIYUN::KVSTORE::INSTANCE**，即云数据库Redis实例。',
                          'type' => 'string',
                          'example' => 'ALIYUN::KVSTORE::INSTANCE',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID，即Redis实例的ID。',
                          'type' => 'string',
                          'example' => 'r-bp1zxszhcgatnx****',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签的键。',
                          'type' => 'string',
                          'example' => 'demokey',
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
            'errorMessage' => 'The specified parameter Tag.n.Key or TagKey.n is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter Tag.n.Value is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter ResourceId.n is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter Tag.n or ResourceId.n is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter Scope is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter Tag.n.Key is duplicated.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86sca4384811e0b5e8707ec2****\\",\\n  \\"RequestId\\": \\"47A514A1-4B77-4E30-B4C5-2A880650****\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"TagValue\\": \\"demovalue\\",\\n        \\"ResourceType\\": \\"ALIYUN::KVSTORE::INSTANCE\\",\\n        \\"ResourceId\\": \\"r-bp1zxszhcgatnx****\\",\\n        \\"TagKey\\": \\"demokey\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <TagResources>\\n        <TagResource>\\n            <ResourceType>ALIYUN::KVSTORE::INSTANCE</ResourceType>\\n            <TagValue>demovalue1</TagValue>\\n            <ResourceId>r-bp1zxszhcgatnx****</ResourceId>\\n            <TagKey>demokey1</TagKey>\\n        </TagResource>\\n        <TagResource>\\n            <ResourceType>ALIYUN::KVSTORE::INSTANCE</ResourceType>\\n            <TagValue>demovalue1</TagValue>\\n            <ResourceId>r-bp1zxszhcgatnx****</ResourceId>\\n            <TagKey>demokey1</TagKey>\\n        </TagResource>\\n        <TagResource>\\n            <ResourceType>ALIYUN::KVSTORE::INSTANCE</ResourceType>\\n            <TagValue>demovalue2</TagValue>\\n            <ResourceId>r-bp1zxszhcgatnx****</ResourceId>\\n            <TagKey>demokey2</TagKey>\\n        </TagResource>\\n        <TagResource>\\n            <ResourceType>ALIYUN::KVSTORE::INSTANCE</ResourceType>\\n            <TagValue>demovalue2</TagValue>\\n            <ResourceId>r-bp1zxszhcgatnx****</ResourceId>\\n            <TagKey>demokey2</TagKey>\\n        </TagResource>\\n    </TagResources>\\n    <RequestId>47A514A1-4B77-4E30-B4C5-2A880650****</RequestId>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询标签列表',
      'summary' => '查询Redis实例和标签的绑定关系。',
      'description' => '该API对应的控制台操作请参见[根据标签筛选实例](~~119160~~)和[查看实例绑定的标签](~~134038~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
    array (
      'summary' => '为一个或多个Redis实例绑定标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例所属的地域ID。',
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
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
              1 => 'instance',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID，支持设置多个。
> **N**表示传入第几个实例ID。例如**ResourceId.1**表示传入第一个实例ID；**ResourceId.2**表示传入第二个实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'r-bp1zxszhcgatnx****',
            ),
            'required' => true,
            'example' => 'r-bp1zxszhcgatnx****',
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
            'description' => '实例的标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。

> * **N**表示传入第几个标签的键。例如**Tag.1.Key**表示传入第一个标签的键；**Tag.2.Key**表示传入第二个标签的键。
> * 如果标签的键不存在，则自动创建。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'demokey',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。

> **N**表示传入第几个标签的值。例如**Tag.1.Value**表示传入第一个标签的值；**Tag.2.Value**表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'demovalue',
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
                'example' => '4BD4E308-A3D8-4CD1-98B3-0ADAEE38****',
              ),
            ),
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
            'errorMessage' => 'The Tags parameter number is exceed, Valid is 20.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagKey.Malformed',
            'errorMessage' => 'The specified parameter Tag.n.Key or TagKey.n is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter Tag.n.Value is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter ResourceId.n is not valid.',
          ),
          4 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter Tag.n or ResourceId.n is needed.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter Scope is not valid.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.CustomTags',
            'errorMessage' => 'The Custom Tags parameter number is exceed. Valid is 20.',
          ),
          8 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter Tag.n.Key is duplicated.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.QuotaExceed',
            'errorMessage' => 'The Tags parameter number is exceed. Valid is 20.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4BD4E308-A3D8-4CD1-98B3-0ADAEE38****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\r\\n    <RequestId>4BD4E308-A3D8-4CD1-98B3-0ADAEE38****</RequestId>\\r\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为一个或多个Redis实例绑定标签',
      'description' => '在实例数量较多的情况下，您可以创建多个标签，为实例绑定不同的标签对其进行分类，之后通过标签进行实例筛选。

* 标签由一对键（key）值（value）组成，键在同账号同地域下唯一，值无此限制。
* 若设置的标签不存在，则自动创建该标签并绑定到目标实例。
* 若实例已经绑定了有相同键的标签，则进行覆盖绑定。
* 每个实例最多可以绑定20个标签。
* 每次调用最多设置50个实例进行批量标签绑定。

该API对应的控制台操作请参见[新建标签](~~118779~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
      'summary' => '将标签从Redis实例解绑。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID，可调用[DescribeRegions](~~61012~~)查询。',
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
            'description' => '资源类型，取值：**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
              1 => 'instance',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑实例上的所有标签，取值：
* **true**：解绑实例上的所有标签。
* **false**：不解绑实例上的所有标签，默认值。

> 如果同时设置了**TagKey.N**和本参数，则本参数不生效。',
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
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'r-bp1zxszhcgatnx****',
            ),
            'required' => true,
            'example' => 'r-bp1zxszhcgatnx****',
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
            'description' => '标签键列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'demokey',
            ),
            'required' => false,
            'example' => 'demokey',
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
                'example' => '601B6F25-21E7-4484-99D5-3EF2625C****',
              ),
            ),
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
            'errorMessage' => 'The specified parameter Tag.n.Key or TagKey.n is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidTagValue.Malformed',
            'errorMessage' => 'The specified parameter Tag.n.Value is not valid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The specified parameter ResourceId.n is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissParameter.TagOrResourceId',
            'errorMessage' => 'The parameter Tag.n or ResourceId.n is needed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Scope',
            'errorMessage' => 'The specified parameter Scope is not valid.',
          ),
          5 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter number is exceed.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The Tags parameter number is exceed.',
          ),
          7 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The specified parameter Tag.n.Key is duplicated.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The specified parameter ResourceType is not valid.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"601B6F25-21E7-4484-99D5-3EF2625C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\r\\n    <RequestId>601B6F25-21E7-4484-99D5-3EF2625C****</RequestId>\\r\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为实例解绑标签',
      'description' => '* 每次解绑的标签数量不能超过20个；
* 标签从一个实例解绑后，如果没有绑定到其它实例，则该标签自动被删除。

该API对应的控制台操作请参见[解绑标签](~~119157~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCacheAnalysisTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BBC1E3D6-7C88-4DF5-9A3D-0DB1E6D9****',
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
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BBC1E3D6-7C88-4DF5-9A3D-0DB1E6D9****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateCacheAnalysisTaskResponse>\\r\\n    <RequestId>BBC1E3D6-7C88-4DF5-9A3D-0DB1E6D9****</RequestId>\\r\\n</CreateCacheAnalysisTaskResponse>","errorExample":""}]',
      'title' => '创建缓存分析任务',
      'summary' => '手动发起Redis缓存分析任务。',
      'description' => '本接口已下线，请使用新接口，更多信息请参见[实时Top Key统计与离线全量Key分析](~~184226~~)。',
      'extraInfo' => ' ',
    ),
    'DescribeCacheAnalysisReport' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的日期，每次可查询一天的离线全量Key分析结果，格式为<i>yyyy-MM-dd</i>Z（UTC时间）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-08-05Z',
          ),
        ),
        2 => 
        array (
          'name' => 'AnalysisType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分析类型，取值固定为**BigKey**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'BigKey',
            'enum' => 
            array (
              0 => 'HotKey',
              1 => 'BigKey',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的记录数，取值：**30**、**50**或**100**。
> 默认值：**30**。',
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
          'name' => 'PageNumbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要返回的页码。
> 如果该值大于返回结果的最大页数，则返回的大key结果为空。',
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
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群版Redis实例的子节点ID。
> 如果不设置将返回所有子节点的分析结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
      ),
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
                'description' => '当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A057C066-C3F5-4CC9-9FE4-A8D8B0DC****',
              ),
              'PageRecordCount' => 
              array (
                'description' => '当前页显示的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'TotalRecordCount' => 
              array (
                'description' => '所有页的记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '160',
              ),
              'BigKeys' => 
              array (
                'description' => '大key列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '大key。',
                  'type' => 'object',
                  'example' => '[{"db": "0", "qps": 0, "keyType": "list", "isExpired": "no", "analysisType": "BIGKEY", "key": "mylist", "memory": 1005377, "size": 200000}]',
                ),
              ),
              'HotKeys' => 
              array (
                'description' => '热点key列表。
> 暂不支持热点key分析，无返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '热点key。',
                  'type' => 'object',
                  'example' => '[]',
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
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"A057C066-C3F5-4CC9-9FE4-A8D8B0DC****\\",\\n  \\"PageRecordCount\\": 30,\\n  \\"TotalRecordCount\\": 160,\\n  \\"BigKeys\\": [\\n    [\\n      {\\n        \\"db\\": \\"0\\",\\n        \\"qps\\": 0,\\n        \\"keyType\\": \\"list\\",\\n        \\"isExpired\\": \\"no\\",\\n        \\"analysisType\\": \\"BIGKEY\\",\\n        \\"key\\": \\"mylist\\",\\n        \\"memory\\": 1005377,\\n        \\"size\\": 200000\\n      }\\n    ]\\n  ],\\n  \\"HotKeys\\": [\\n    []\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCacheAnalysisReportResponse>\\r\\n    <PageNumber>1</PageNumber>\\r\\n\\t<TotalRecordCount>160</TotalRecordCount>\\r\\n\\t<PageSize>30</PageSize>\\r\\n\\t<RequestId>A057C066-C3F5-4CC9-9FE4-A8D8B0DC****</RequestId>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>list</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>mylist</key>\\r\\n\\t\\t<memory>1005377</memory>\\r\\n\\t\\t<size>200000</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:23124</key>\\r\\n\\t\\t<memory>970</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:167541</key>\\r\\n\\t\\t<memory>967</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:152015</key>\\r\\n\\t\\t<memory>958</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:30883</key>\\r\\n\\t\\t<memory>955</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:81031</key>\\r\\n\\t\\t<memory>953</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:152007</key>\\r\\n\\t\\t<memory>952</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:161880</key>\\r\\n\\t\\t<memory>951</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:194610</key>\\r\\n\\t\\t<memory>949</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:53620</key>\\r\\n\\t\\t<memory>948</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:23525</key>\\r\\n\\t\\t<memory>946</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:89333</key>\\r\\n\\t\\t<memory>946</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:23687</key>\\r\\n\\t\\t<memory>945</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:32653</key>\\r\\n\\t\\t<memory>945</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:72166</key>\\r\\n\\t\\t<memory>945</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:195881</key>\\r\\n\\t\\t<memory>944</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:160121</key>\\r\\n\\t\\t<memory>944</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:93626</key>\\r\\n\\t\\t<memory>944</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:138451</key>\\r\\n\\t\\t<memory>944</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:183732</key>\\r\\n\\t\\t<memory>943</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:143393</key>\\r\\n\\t\\t<memory>943</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:109289</key>\\r\\n\\t\\t<memory>943</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:153637</key>\\r\\n\\t\\t<memory>942</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:171049</key>\\r\\n\\t\\t<memory>942</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:53013</key>\\r\\n\\t\\t<memory>941</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:103664</key>\\r\\n\\t\\t<memory>941</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:180733</key>\\r\\n\\t\\t<memory>941</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:69766</key>\\r\\n\\t\\t<memory>941</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:125910</key>\\r\\n\\t\\t<memory>940</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<BigKeys>\\r\\n\\t\\t<db>0</db>\\r\\n\\t\\t<qps>0</qps>\\r\\n\\t\\t<keyType>hash</keyType>\\r\\n\\t\\t<isExpired>no</isExpired>\\r\\n\\t\\t<analysisType>BIGKEY</analysisType>\\r\\n\\t\\t<key>customer:10653</key>\\r\\n\\t\\t<memory>940</memory>\\r\\n\\t\\t<size>11</size>\\r\\n\\t</BigKeys>\\r\\n\\t<PageRecordCount>30</PageRecordCount>\\r\\n</DescribeCacheAnalysisReportResponse>","errorExample":""}]',
      'title' => '查看实例缓存分析报告',
      'summary' => '查看Redis实例在指定日期中的缓存分析报告。',
      'description' => '本接口已下线，请使用新接口，更多信息请参见[实时Top Key统计与离线全量Key分析](~~184226~~)。',
    ),
    'DescribeCacheAnalysisReportList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'Days',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询最近几天内的分析结果，默认查询最近7天的分析结果。

> 如果查询时当日的自动分析尚未开始，且没有手动发起分析任务，则本日没有记录。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回的记录数，取值**30**、**50**或**100**。
> 默认值：**30**。',
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
          'name' => 'PageNumbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要返回的页码。',
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
          'name' => 'NodeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群版Redis实例的子节点ID。

> 如果不设置将返回所有子节点的分析结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'r-bp1zxszhcgatnx****-db-0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => '1041xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '743D0A03-52DE-4E6F-8D09-EC1414CF****',
              ),
              'DailyTasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DailyTask' => 
                  array (
                    'description' => '离线全量Key分析报告列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '离线全量Key分析发起的日期。',
                          'type' => 'string',
                          'example' => '2019-08-01Z',
                        ),
                        'Tasks' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Task' => 
                            array (
                              'description' => '离线全量Key分析报告。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '离线全量Key分析报告。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Status' => 
                                  array (
                                    'description' => '离线全量Key分析任务的状态，返回值：
* **success**：成功。
* **running**：进行中。',
                                    'type' => 'string',
                                    'example' => 'success',
                                  ),
                                  'StartTime' => 
                                  array (
                                    'description' => '离线全量Key分析任务的开始时间。',
                                    'type' => 'string',
                                    'example' => '2019-08-01T19:08:49Z',
                                  ),
                                  'TaskId' => 
                                  array (
                                    'description' => '任务ID。',
                                    'type' => 'string',
                                    'example' => '156465****',
                                  ),
                                  'NodeId' => 
                                  array (
                                    'description' => '集群版Redis实例的子节点ID。',
                                    'type' => 'string',
                                    'example' => 'r-bp1zxszhcgatnx****-db-0',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'IncorrectEngineVersion',
            'errorMessage' => 'Current engine version does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"1041xxxx\\",\\n  \\"RequestId\\": \\"743D0A03-52DE-4E6F-8D09-EC1414CF****\\",\\n  \\"DailyTasks\\": {\\n    \\"DailyTask\\": [\\n      {\\n        \\"Date\\": \\"2019-08-01Z\\",\\n        \\"Tasks\\": {\\n          \\"Task\\": [\\n            {\\n              \\"Status\\": \\"success\\",\\n              \\"StartTime\\": \\"2019-08-01T19:08:49Z\\",\\n              \\"TaskId\\": \\"156465****\\",\\n              \\"NodeId\\": \\"r-bp1zxszhcgatnx****-db-0\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCacheAnalysisReportListResponse>\\r\\n    <InstanceId>1041xxxx</InstanceId>\\r\\n    <RequestId>BFB9478A-119E-4589-B02C-2D2EBE5E****</RequestId>\\r\\n    <DailyTasks>\\r\\n        <DailyTask>\\r\\n            <Date>2019-08-03Z</Date>\\r\\n            <Tasks>\\r\\n                <Task>\\r\\n                    <Status>success</Status>\\r\\n                    <NodeId>r-bp1zxszhcgatnx****-db-0</NodeId>\\r\\n                    <StartTime>2019-08-03T19:08:48Z</StartTime>\\r\\n                    <TaskId>156483****</TaskId>\\r\\n                </Task>\\r\\n                <Task>\\r\\n                    <Status>success</Status>\\r\\n                    <NodeId>r-bp1zxszhcgatnx****-db-1</NodeId>\\r\\n                    <StartTime>2019-08-03T19:08:49Z</StartTime>\\r\\n                    <TaskId>156483****</TaskId>\\r\\n                </Task>\\r\\n            </Tasks>\\r\\n        </DailyTask>\\r\\n        <DailyTask>\\r\\n            <Date>2019-08-02Z</Date>\\r\\n            <Tasks>\\r\\n                <Task>\\r\\n                    <Status>success</Status>\\r\\n                    <NodeId>r-bp1zxszhcgatnx****-db-0</NodeId>\\r\\n                    <StartTime>2019-08-02T19:08:55Z</StartTime>\\r\\n                    <TaskId>156474****</TaskId>\\r\\n                </Task>\\r\\n                <Task>\\r\\n                    <Status>success</Status>\\r\\n                    <NodeId>r-bp1zxszhcgatnx****-db-1</NodeId>\\r\\n                    <StartTime>2019-08-02T19:08:55Z</StartTime>\\r\\n                    <TaskId>156474****</TaskId>\\r\\n                </Task>\\r\\n            </Tasks>\\r\\n        </DailyTask>\\r\\n    </DailyTasks>\\r\\n</DescribeCacheAnalysisReportListResponse>","errorExample":""}]',
      'title' => '查询Redis实例的缓存分析报告列表',
      'summary' => '查询Redis实例的缓存分析报告列表。',
      'description' => '本接口已下线，请使用新接口，更多信息请参见[实时Top Key统计与离线全量Key分析](~~184226~~)。',
    ),
    'ModifyInstanceTDE' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'TDEStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启TDE功能，取值：**Enabled**。
> TDE功能开启后暂不支持关闭，开启前请评估是否影响业务。更多信息，请参见[开启透明数据加密TDE](~~265913~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Enabled',
          ),
        ),
        2 => 
        array (
          'name' => 'EncryptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密算法，默认AES-CTR-256。
> 当**TDEStatus**参数取值为**Enabled**时，本参数才可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'AES-CTR-256',
          ),
        ),
        3 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义密钥ID，您可以调用[DescribeEncryptionKeyList](~~302339~~)获取。

> * 如果不传入本参数，则由[密钥管理服务](~~28935~~)自动生成密钥。
> * 如需创建自定义密钥，您可以调用密钥管理服务的[CreateKey](~~28947~~)接口。',
            'type' => 'string',
            'required' => false,
            'example' => 'ad463061-992d-4195-8a94-ed63********',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息，完成授权后即可使用相关密钥管理服务，格式：`acs:ram::$accountID:role/$roleName` 。

> * `$accountID`：云账号ID。您可以登录阿里云控制台，将鼠标悬停在右上角头像的位置，单击**安全设置**进行查看。
> * `$roleName`：RAM角色名称，取值固定为：**AliyunRdsInstanceEncryptionDefaultRole**。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceName.Malformed',
            'errorMessage' => 'The Specified parameter InstanceName is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'TaskExists',
            'errorMessage' => 'Specified task have existed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyInstanceTDEResponse>\\r\\n\\t<RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\r\\n</ModifyInstanceTDEResponse>","errorExample":""}]',
      'title' => '开启透明数据加密TDE',
      'summary' => '为Redis实例开启透明数据加密TDE功能，支持自定义密钥。',
      'description' => '> 关于透明数据加密TDE（Transparent Data Encryption）的详细介绍及开启后的影响，请参见[开启透明数据加密TDE](~~265913~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceTDEStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
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
                'description' => 'TDE加密功能是否开启，返回值：
* **Enabled**：开启。
* **Disabled**：关闭。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
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
            'errorCode' => 'InvalidInstanceId.NotFound',
            'errorMessage' => 'The InstanceId provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TDEStatus\\": \\"Enabled\\",\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceTDEStatusResponse>\\n    <TDEStatus>Enabled</TDEStatus>\\n    <RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\n</DescribeInstanceTDEStatusResponse>","errorExample":""}]',
      'title' => '查询实例是否开启TDE加密',
      'summary' => '查询Redis实例是否开启了TDE加密功能。',
      'description' => '关于透明数据加密TDE（Transparent Data Encryption）的详细介绍及注意事项，请参见[开启透明数据加密TDE](~~265913~~)。
> 您可以调用[ModifyInstanceTDE](~~302337~~)开启或关闭TDE加密功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEncryptionKeyList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '10E2160B-959C-5C3E-BFE6-86EC5925****',
              ),
              'KeyIds' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'KeyId' => 
                  array (
                    'description' => '该地域下可使用的自定义密钥的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自定义密钥。',
                      'type' => 'string',
                      'example' => 'a0e7e2c9-8ee5-40ed-bbca-7dbc********',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10E2160B-959C-5C3E-BFE6-86EC5925****\\",\\n  \\"KeyIds\\": {\\n    \\"KeyId\\": [\\n      \\"a0e7e2c9-8ee5-40ed-bbca-7dbc********\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEncryptionKeyListResponse>\\n    <RequestId>10E2160B-959C-5C3E-BFE6-86EC5925****</RequestId>\\n    <KeyIds>\\n        <KeyId>a0e7e2c9-8ee5-40ed-bbca-7dbc********</KeyId>\\n        <KeyId>ad463061-992d-4195-8a94-ed63********</KeyId>\\n    </KeyIds>\\n</DescribeEncryptionKeyListResponse>","errorExample":""}]',
      'title' => '查询实例的自定义密钥列表',
      'summary' => '查询Redis使用的自定义密钥列表。',
      'description' => '* 调用[ModifyInstanceTDE](~~302337~~)开启透明数据加密TDE时，可使用自定义密钥，本接口可帮助您查询实例已使用的自定义密钥。如需创建自定义密钥，请调用密钥管理服务的[CreateKey](~~28947~~)接口。
* 关于透明数据加密TDE的详细介绍及注意事项，请参见[开启透明数据加密TDE](~~265913~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEncryptionKey' => 
    array (
      'summary' => '查询Redis实例的透明数据加密TDE自定义密钥的详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'EncryptionKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的自定义密钥ID，可调用[DescribeEncryptionKeyList](~~302339~~)接口查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'ad463061-992d-4195-8a94-ed63********',
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
              'DeleteDate' => 
              array (
                'description' => '实例密钥的预计删除时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 本参数返回内容为空时，表示密钥不会被自动删除。',
                'type' => 'string',
                'example' => '2021-09-24T18:22:03Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9A931CE5-C926-5E09-B0EC-6299C4A6****',
              ),
              'Description' => 
              array (
                'description' => '密钥的描述信息，默认为空。',
                'type' => 'string',
                'example' => 'testkey',
              ),
              'Origin' => 
              array (
                'description' => '密钥材料的来源，返回值**Aliyun_KMS**，即表示阿里云[密钥管理服务KMS](~~28935~~)。',
                'type' => 'string',
                'example' => 'Aliyun_KMS',
              ),
              'MaterialExpireTime' => 
              array (
                'description' => '密钥的过期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 本参数返回内容为空时，表示密钥不会过期。',
                'type' => 'string',
                'example' => '2021-09-24T18:22:03Z',
              ),
              'EncryptionKeyStatus' => 
              array (
                'description' => '实例的密钥状态，返回值：
* **Enabled**：可用。
* **Disabled**：不可用。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'KeyUsage' => 
              array (
                'description' => '实例密钥的用途，返回值`ENCRYPT/DECRYPT`即表示加密和解密。',
                'type' => 'string',
                'example' => 'ENCRYPT/DECRYPT',
              ),
              'EncryptionKey' => 
              array (
                'description' => '实例的密钥ID。',
                'type' => 'string',
                'example' => 'ad463061-992d-4195-8a94-ed63********',
              ),
              'Creator' => 
              array (
                'description' => '密钥创建者的云账号ID。',
                'type' => 'string',
                'example' => '17649847********',
              ),
              'EncryptionName' => 
              array (
                'description' => '加密算法。',
                'type' => 'string',
                'example' => 'AES-CTR-256',
              ),
              'RoleArn' => 
              array (
                'description' => '指定待授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息。',
                'type' => 'string',
                'example' => 'acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceType.NotSupport',
            'errorMessage' => 'Current instance type does not support this operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeleteDate\\": \\"2021-09-24T18:22:03Z\\",\\n  \\"RequestId\\": \\"9A931CE5-C926-5E09-B0EC-6299C4A6****\\",\\n  \\"Description\\": \\"testkey\\",\\n  \\"Origin\\": \\"Aliyun_KMS\\",\\n  \\"MaterialExpireTime\\": \\"2021-09-24T18:22:03Z\\",\\n  \\"EncryptionKeyStatus\\": \\"Enabled\\",\\n  \\"KeyUsage\\": \\"ENCRYPT/DECRYPT\\",\\n  \\"EncryptionKey\\": \\"ad463061-992d-4195-8a94-ed63********\\",\\n  \\"Creator\\": \\"17649847********\\",\\n  \\"EncryptionName\\": \\"AES-CTR-256\\",\\n  \\"RoleArn\\": \\"acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeEncryptionKeyResponse>\\n    <Origin>Aliyun_KMS</Origin>\\n    <Description>testkey</Description>\\n    <EncryptionKeyStatus>Enabled</EncryptionKeyStatus>\\n    <RequestId>9A931CE5-C926-5E09-B0EC-6299C4A6****</RequestId>\\n    <MaterialExpireTime>2021-09-24T18:22:03Z</MaterialExpireTime>\\n    <KeyUsage>ENCRYPT/DECRYPT</KeyUsage>\\n    <EncryptionKey>ad463061-992d-4195-8a94-ed63********</EncryptionKey>\\n    <Creator>17649847********</Creator>\\n    <DeleteDate>2021-09-24T18:22:03Z</DeleteDate>\\n</DescribeEncryptionKeyResponse>","errorExample":""}]',
      'title' => '查询实例的TDE自定义密钥详情',
      'description' => '调用本接口时，要求实例已通过自定义密钥的方式开启了数据加密TDE（Transparent Data Encryption）功能，相关接口，请参见[ModifyInstanceTDE](~~302337~~)。


> 关于透明数据加密TDE的详细介绍及注意事项，请参见[开启透明数据加密TDE](~~265913~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckCloudResourceAuthorized' => 
    array (
      'summary' => '查询Redis实例是否已被授权使用KMS密钥服务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[DescribeInstances](~~60933~~)获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息，完成该角色的授权后即可使用相关密钥管理服务，格式：`acs:ram::$accountID:role/$roleName` 。

> * `$accountID`：云账号ID。您可以登录阿里云控制台，将鼠标悬停在右上角头像的位置，单击**安全设置**进行查看。
> * `$roleName`：RAM角色名称，取值固定为：**AliyunRdsInstanceEncryptionDefaultRole**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole',
          ),
        ),
      ),
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
                'description' => '授权状态，返回值：
* **0**：未授权。
* **1**：已授权。
* **2**：未开通密钥管理服务，具体操作，请参见[开通密钥管理服务](~~153781~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A501A191-BD70-5E50-98A9-C2A486A82****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorizationState\\": 1,\\n  \\"RequestId\\": \\"A501A191-BD70-5E50-98A9-C2A486A82****\\"\\n}","errorExample":""},{"type":"xml","example":"<CheckCloudResourceAuthorizedResponse>\\n    <AuthorizationState>1</AuthorizationState>\\n    <RequestId>A501A191-BD70-5E50-98A9-C2A486A82****</RequestId>\\n</CheckCloudResourceAuthorizedResponse>","errorExample":""}]',
      'title' => '查询是否已授权KMS密钥',
      'description' => '* 关于透明数据加密TDE（Transparent Data Encryption）的详细介绍及注意事项，请参见[开启透明数据加密TDE](~~265913~~)。
* 调用本接口确认已授权后，您可以调用[ModifyInstanceTDE](~~302337~~)接口开启TDE加密功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
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
        'operationType' => 'get',
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
            'description' => '待处理事件所属的地域ID，可调用[DescribeRegions](~~61012~~)查询。',
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
- **Scheduled**：等待执行
- **Running**：执行中
- **Succeed**：执行成功
- **Failed**：执行失败
- **Cancelling**：正在终止
- **Canceled**：已终止
- **Waiting**：等待预设时间
> 默认为空，表示全选，如需选择多个状态请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'Scheduled',
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
            'example' => 'r-uf62br2491p5l****
',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，用于查询已知ID的任务默认为空，表示不限制。如需查询多个请用英文逗号（,）分隔，最多支持30个。',
            'type' => 'string',
            'required' => false,
            'example' => 't-83br18hloy3faf****
',
          ),
        ),
        7 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，用于查询特定类型任务情况，默认为空，表示不限制，取值如下：
- **ModifyInsSpec**：规格变更或迁移
- **DeleteInsNode**：删除分片
- **AddInsNode**：增加分片
- **HaSwitch**：实例主备切换
- **RestartIns**：重启实例
- **CreateIns**：创建实例
- **ModifyInsConfig**：配置变更
> 如需查询多个请用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'ModifyInsSpec',
          ),
        ),
        8 => 
        array (
          'name' => 'FromStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询任务的最早开始时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），最早支持查询30天前的数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-01-02T11:31:03Z',
          ),
        ),
        9 => 
        array (
          'name' => 'ToStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询任务的最晚开始时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间），需晚于任务的最早开始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-02-02T11:31:03Z',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
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
- **Scheduled**：等待执行
- **Running**：执行中
- **Succeed**：执行成功
- **Failed**：执行失败
- **Cancelling**：正在终止
- **Canceled**：已终止
- **Waiting**：等待预设时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'Running',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 't-83br18hloy3faf****',
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
                      'example' => '2022-02-03T11:31:03Z',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '任务结束时间，格式为yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-02-03T12:06:17Z',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。
- **ModifyInsSpec**：规格变更或迁移
- **DeleteInsNode**：删除分片
- **AddInsNode**：增加分片
- **HaSwitch**：实例主备切换
- **RestartIns**：重启实例
- **CreateIns**：创建实例
- **ModifyInsConfig**：配置变更',
                      'type' => 'string',
                      'example' => 'ModifyInsSpec',
                    ),
                    'RemainTime' => 
                    array (
                      'description' => '预估剩余执行时间，单位秒，0表示已执行完成。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1000',
                    ),
                    'Progress' => 
                    array (
                      'description' => '当前进度，范围为[0,100]。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '79.0',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
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
                      'example' => 'r-bp1zxszhcgatnx****',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'dba-tair-test-qcloud',
                    ),
                    'DbType' => 
                    array (
                      'description' => 'DB类型，固定为redis。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'Product' => 
                    array (
                      'description' => '产品，固定为kvstore。',
                      'type' => 'string',
                      'example' => 'kvstore',
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
{"steps": [
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
* **retry**：重试
* **cancel**：取消
* **modifySwitchTime**：修改切换时间或恢复时间',
                      'type' => 'string',
                      'example' => '{"steps":[{"action_info":{"Waiting":["modifySwitchTime"]},"step_name":"exec_task"}]}',
                    ),
                    'Uid' => 
                    array (
                      'description' => '资源所属的用户ID。',
                      'type' => 'string',
                      'example' => '141345906006****',
                    ),
                    'CallerSource' => 
                    array (
                      'description' => '请求用户ID，callerSource为User时代表用户UID。',
                      'type' => 'string',
                      'example' => '141345906006****',
                    ),
                    'CallerUid' => 
                    array (
                      'description' => '请求来源。 
* **System**：系统自动
* **User**：用户',
                      'type' => 'string',
                      'example' => 'User',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 5,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"TaskId\\": \\"t-83br18hloy3faf****\\",\\n      \\"CurrentStepName\\": \\"exec_task\\",\\n      \\"StartTime\\": \\"2022-02-03T11:31:03Z\\",\\n      \\"EndTime\\": \\"2022-02-03T12:06:17Z\\",\\n      \\"TaskType\\": \\"ModifyInsSpec\\",\\n      \\"RemainTime\\": 1000,\\n      \\"Progress\\": 79,\\n      \\"RegionId\\": \\"cn-shanghai\\",\\n      \\"InstanceType\\": \\"Instance\\",\\n      \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n      \\"InstanceName\\": \\"dba-tair-test-qcloud\\",\\n      \\"DbType\\": \\"redis\\",\\n      \\"Product\\": \\"kvstore\\",\\n      \\"TaskDetail\\": \\"{\\\\\\\\\\\\\\"callerUid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"}\\",\\n      \\"ReasonCode\\": \\"小版本升级\\",\\n      \\"ActionInfo\\": \\"{\\\\\\"steps\\\\\\":[{\\\\\\"action_info\\\\\\":{\\\\\\"Waiting\\\\\\":[\\\\\\"modifySwitchTime\\\\\\"]},\\\\\\"step_name\\\\\\":\\\\\\"exec_task\\\\\\"}]}\\",\\n      \\"Uid\\": \\"141345906006****\\",\\n      \\"CallerSource\\": \\"141345906006****\\",\\n      \\"CallerUid\\": \\"User\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询历史运维任务',
    ),
    'ModifyActiveOperationTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运维任务ID，多个ID间使用英文逗号（,）分隔。
> 您可以调用[DescribeActiveOperationTask](~~197387~~)获取运维任务ID。',
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
            'description' => '要设置的计划切换时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。
> 不能晚于最晚操作时间，您可以调用[DescribeActiveOperationTask](~~197387~~)，通过返回参数**Deadline**的值来获取最晚操作时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-10-17T18:50:00Z',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
            ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Ids\\": \\"11111,22222\\",\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyActiveOperationTaskResponse>\\n    <RequestId>5D622714-AEDD-4609-9167-F5DDD3D1****</RequestId>\\n    <Ids>11111,22222</Ids>\\n</ModifyActiveOperationTaskResponse>","errorExample":""}]',
      'title' => '修改运维任务的计划切换时间',
      'summary' => '修改运维任务的计划切换时间。',
      'description' => '云数据库Redis的运维事件（如实例迁移、版本升级等）除了通过短信、语音、邮件或站内信通知之外，还会在控制台进行通知。除通过调用本接口修改计划切换时间以外，你还可以通过控制台来修改，具体操作，请参见[查询或管理待处理事件](~~187022~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeActiveOperationTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待处理事件所属的地域ID，可调用[DescribeRegions](~~61012~~)接口获取。
> 取值为**all**表示所有地域ID。',
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
            'description' => '任务类型，取值：

- **rds\\_apsaradb\\_ha**：主从节点切换。
- **rds\\_apsaradb\\_transfer**：实例迁移。
- **rds\\_apsaradb\\_upgrade**：小版本升级。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rds_apsaradb_ha',
          ),
        ),
        2 => 
        array (
          'name' => 'IsHistory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回历史任务，取值：
* **0**：默认值，返回当前任务。
* **1**：返回历史任务。',
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
            'description' => '每页可展示的最大记录数，取值需大于**10**，默认值为**30**。',
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
            'description' => '页码，大于**0**且不超过Integer数据类型的最大值，默认值为**1**。',
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
                'example' => '2E1FF0CC-F42A-4B6F-A1F4-A17B1451****',
              ),
              'PageSize' => 
              array (
                'description' => '每页可展示的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
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
                'description' => '运维任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态，返回值：
* **2**：等待用户指定时间。
* **3**：等待处理。
* **4**：处理中。进入此状态后，不可调用[ModifyActiveOperationTask](~~197384~~)修改计划切换时间。
* **5**：成功。
* **6**：失败。
* **7**：已取消。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'Deadline' => 
                    array (
                      'description' => '运维任务执行时间可调整范围的最晚期时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-29T13:59:59Z',
                    ),
                    'PrepareInterval' => 
                    array (
                      'description' => '运维任务开始时间到切换时间之间所需的准备时间，格式为<i>HH:mm:ss</i>。',
                      'type' => 'string',
                      'example' => '14:00:00',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型，返回值：

- **rds\\_apsaradb\\_ha**：主从节点切换。
- **rds\\_apsaradb\\_transfer**：实例迁移。
- **rds\\_apsaradb\\_upgrade**：小版本升级。
- **all**：所有任务类型。',
                      'type' => 'string',
                      'example' => 'rds_apsaradb_upgrade',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '运维任务执行的时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-20T02:40:00Z',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '运维任务修改时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-02-24T08:18:53Z',
                    ),
                    'InsName' => 
                    array (
                      'description' => 'Redis实例ID。',
                      'type' => 'string',
                      'example' => 'r-bp1lgal1sdvxrz****',
                    ),
                    'DbType' => 
                    array (
                      'description' => '数据库类型，返回值：**redis**。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'Region' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hanghzou',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '运维任务的创建时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-02-24T06:00:11Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '运维任务ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1****1',
                    ),
                    'SwitchTime' => 
                    array (
                      'description' => '系统发起的切换操作的时间，格式为<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。',
                      'type' => 'string',
                      'example' => '2023-03-20T03:10:00Z',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"2E1FF0CC-F42A-4B6F-A1F4-A17B1451****\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 5,\\n      \\"Deadline\\": \\"2023-03-29T13:59:59Z\\",\\n      \\"PrepareInterval\\": \\"14:00:00\\",\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"StartTime\\": \\"2023-03-20T02:40:00Z\\",\\n      \\"ModifiedTime\\": \\"2023-02-24T08:18:53Z\\",\\n      \\"InsName\\": \\"r-bp1lgal1sdvxrz****\\",\\n      \\"DbType\\": \\"redis\\",\\n      \\"Region\\": \\"cn-hanghzou\\",\\n      \\"CreatedTime\\": \\"2023-02-24T06:00:11Z\\",\\n      \\"Id\\": 0,\\n      \\"SwitchTime\\": \\"2023-03-20T03:10:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTaskResponse>\\r\\n    <TotalRecordCount>1</TotalRecordCount>\\r\\n    <RequestId>2E1FF0CC-F42A-4B6F-A1F4-A17B1451****</RequestId>\\r\\n    <PageSize>30</PageSize>\\r\\n    <PageNumber>1</PageNumber>\\r\\n    <Items>\\r\\n        <Status>5</Status>\\r\\n        <CreatedTime>2019-10-17T20:28:31Z</CreatedTime>\\r\\n        <Deadline>2019-10-21T15:59:59Z</Deadline>\\r\\n        <StartTime>2019-10-17T17:50:00Z</StartTime>\\r\\n        <InsName>r-bp1lgal1sdvxrz****</InsName>\\r\\n        <DbType>redis</DbType>\\r\\n        <ModifiedTime>2019-10-17T20:28:31Z</ModifiedTime>\\r\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\r\\n        <PrepareInterval>01:00:00</PrepareInterval>\\r\\n        <Region>cn-hangzhou</Region>\\r\\n        <Id>114111</Id>\\r\\n        <SwitchTime>2019-10-17T18:50:00Z</SwitchTime>\\r\\n    </Items>\\r\\n</DescribeActiveOperationTaskResponse>","errorExample":""}]',
      'title' => '查询运维任务详情',
      'summary' => '查询Redis实例的运维任务详情。',
      'description' => '调用本接口查询到当前有运维任务后，您还可以调用[ModifyActiveOperationTask](~~197384~~)修改运维任务的计划切换时间。',
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
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => 'rg-acfmyiu4ekp****',
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

> 多个IP地址需要用英文逗号（,）分隔，不可重复，上限为1000个。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.1,10.10.10.10,172.16.0.1',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => '全局IP白名单模板信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'IP白名单模板信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GlobalSecurityGroupId' => 
                    array (
                      'description' => 'IP白名单模板ID。',
                      'type' => 'string',
                      'example' => 'g-sdgwqyp4f5j1x3qk****',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.0.1,10.10.10.10,172.16.0.1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-sdgwqyp4f5j1x3qk****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1,10.10.10.10,172.16.0.1\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '创建IP白名单模板',
    ),
    'ModifyGlobalSecurityIPGroupName' => 
    array (
      'summary' => '修改全局IP白名单模板的名称。',
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
            'description' => '修改后的IP白名单模板名称。IP白名单模板名称需满足如下要求：

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
            'description' => 'IP白名单模板ID，您可以调用[DescribeGlobalSecurityIPGroup](~~2400079~~)接口获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'g-kd2iop4aur9qwxnvh***',
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
                'example' => '2B17D708-1D6D-49F3-B6D7-478371DD****',
              ),
            ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2B17D708-1D6D-49F3-B6D7-478371DD****\\"\\n}","type":"json"}]',
      'title' => '修改IP白名单模板名称',
    ),
    'DescribeGlobalSecurityIPGroupRelation' => 
    array (
      'summary' => '查询实例关联的全局IP白名单模板信息。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'r-t4n885e834f6****',
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
      ),
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
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-t4n885e834f6****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B7BFB11-C077-4FE3-B051-F69CEB******',
              ),
              'GlobalSecurityIPGroupRel' => 
              array (
                'description' => '关联的全局IP白名单模板信息。',
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
> 多个IP地址需要用英文逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '192.168.0.1,10.10.10.10',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GlobalIgName' => 
                    array (
                      'description' => 'IP白名单模板名称。',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"DBClusterId\\": \\"r-t4n885e834f6****\\",\\n  \\"RequestId\\": \\"9B7BFB11-C077-4FE3-B051-F69CEB******\\",\\n  \\"GlobalSecurityIPGroupRel\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GIpList\\": \\"192.168.0.1,10.10.10.10\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GlobalIgName\\": \\"test_123\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询实例关联的IP白名单模板信息',
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
            'example' => 'g-kd2iop4aur9qwxnvh***',
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
            'example' => 'rg-acfmyiu4e******',
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
                'example' => 'AD425AD3-CC7B-4EE2-A5CB-2F61BA73****',
              ),
            ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AD425AD3-CC7B-4EE2-A5CB-2F61BA73****\\"\\n}","type":"json"}]',
      'title' => '删除IP白名单模板',
      'description' => '删除IP白名单模板前，您需要先解绑（取消关联）已关联该模板的实例。',
    ),
    'ModifyGlobalSecurityIPGroup' => 
    array (
      'summary' => '修改全局IP白名单模板。',
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
            'example' => 'rg-acfmyiu4ekp****',
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
- 长度为2~120个字符。
> 本参数将覆盖原值。',
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
            'description' => 'IP白名单模板内的IP地址。
> 本参数将覆盖原值。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.0.1,10.10.10.10,172.16.0.1',
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
                'example' => '686BB8A6-BBA5-47E5-8A75-D2ADE433****',
              ),
            ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"686BB8A6-BBA5-47E5-8A75-D2ADE433****\\"\\n}","type":"json"}]',
      'title' => '修改IP白名单模板',
    ),
    'ModifyGlobalSecurityIPGroupRelation' => 
    array (
      'summary' => '将指定实例添加到指定的IP白名单模板中。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'r-t4n885e834f6****',
          ),
        ),
        2 => 
        array (
          'name' => 'GlobalSecurityGroupId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => 'IP白名单模板ID。
> 若您需要取消关联模板，您可以删除对应IP白名单模板ID，本参数会覆盖原值。若您需要取消所有关联模板，您可以传入空字符串。',
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
                'example' => '1E83311F-0EE4-4922-A3BF-730B312B****',
              ),
            ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E83311F-0EE4-4922-A3BF-730B312B****\\"\\n}","type":"json"}]',
      'title' => '将实例添加到IP白名单模板中',
    ),
    'DescribeGlobalSecurityIPGroup' => 
    array (
      'summary' => '查询全局IP白名单模板列表。',
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
        'abilityTreeCode' => '169265',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreJ7QDWH',
          1 => 'FEATUREkvstore4XSUU7',
          2 => 'FEATUREkvstoreDER7E8',
          3 => 'FEATUREkvstoreZ21KYW',
        ),
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
            'example' => 'rg-acfmyiu4ekp****',
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
                'example' => '2FF6158E-3394-4A90-B634-79C49184****',
              ),
              'GlobalSecurityIPGroup' => 
              array (
                'description' => 'IP白名单模板信息。',
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
                      'description' => 'IP白名单模板名称。',
                      'type' => 'string',
                      'example' => 'test_123',
                    ),
                    'GIpList' => 
                    array (
                      'description' => '白名单模板内的IP地址。
> 多个IP地址需要用英文逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '192.168.0.1,10.10.10.10',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DBInstances' => 
                    array (
                      'description' => '关联该IP白名单模板的实例ID集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例ID。',
                        'type' => 'string',
                        'example' => 'r-t4n885e834f6****',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FF6158E-3394-4A90-B634-79C49184****\\",\\n  \\"GlobalSecurityIPGroup\\": [\\n    {\\n      \\"GlobalSecurityGroupId\\": \\"g-zsldxfiwjmti0kcm****\\",\\n      \\"GlobalIgName\\": \\"test_123\\",\\n      \\"GIpList\\": \\"192.168.0.1,10.10.10.10\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DBInstances\\": [\\n        \\"r-t4n885e834f6****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询IP白名单模板列表',
    ),
    'ModifyInstanceParameter' => 
    array (
      'summary' => '将参数模板应用到指定实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板ID。
> 您可以通过DescribeParameterGroups接口查看目标地域的参数模板列表，包括参数模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'g-idhwofwofewhf****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'r-bp1zxszhcgatnx****',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"hz": "50"}',
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
            'description' => '请求响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '561AFBF1-BE20-44DB-9BD1-6988B53E****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'r-bp1zxszhcgatnx****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '578678678',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"561AFBF1-BE20-44DB-9BD1-6988B53E****\\",\\n  \\"InstanceId\\": \\"r-bp1zxszhcgatnx****\\",\\n  \\"TaskId\\": 578678678\\n}","type":"json"}]',
      'title' => '应用参数模板到实例',
    ),
    'DeleteParameterGroup' => 
    array (
      'summary' => '删除参数模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '179016',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreDVVZYL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模版唯一标识',
            'type' => 'string',
            'required' => true,
            'example' => 'rpg-sys-00*****
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '2BE6E619-A657-42E3-AD2D-18F8428A****',
              ),
              'ParamGroupId' => 
              array (
                'description' => '参数模板ID，全局唯一。',
                'type' => 'string',
                'example' => 'sys-001*****
',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2BE6E619-A657-42E3-AD2D-18F8428A****\\",\\n  \\"ParamGroupId\\": \\"sys-001*****\\\\n\\"\\n}","type":"json"}]',
      'title' => '删除参数模板',
    ),
    'DescribeParameterGroupSupportParam' => 
    array (
      'summary' => '不同版本的参数模版支持设置的参数列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '179022',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstore9GDS4D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类别，取值：
- **standard**：社区版
- **enterprise**：Tair（Redis企业版）',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
          ),
        ),
        1 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎兼容版本。',
            'type' => 'string',
            'required' => true,
            'example' => '5.0',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值：
- **redis**：Redis或Tair内存型。
- **tair_pena**：Tair持久内存型。
- **tair_pdb**：Tair云盘（ESSD）型。',
            'type' => 'string',
            'required' => false,
            'example' => 'redis',
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
                'example' => 'BB73740C-23E2-4392-9DA4-2660C74C****',
              ),
              'ResourceList' => 
              array (
                'description' => '参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DbType' => 
                    array (
                      'description' => '引擎类型。',
                      'type' => 'string',
                      'example' => 'redis',
                    ),
                    'DbVersion' => 
                    array (
                      'description' => '引擎兼容版本。',
                      'type' => 'string',
                      'example' => '5.0',
                    ),
                    'Category' => 
                    array (
                      'description' => '产品类别。',
                      'type' => 'string',
                      'example' => 'standard',
                    ),
                    'ParamName' => 
                    array (
                      'description' => '支持设置的参数。',
                      'type' => 'string',
                      'example' => 'rt_threshold_ms',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BB73740C-23E2-4392-9DA4-2660C74C****\\",\\n  \\"ResourceList\\": [\\n    {\\n      \\"DbType\\": \\"redis\\",\\n      \\"DbVersion\\": \\"5.0\\",\\n      \\"Category\\": \\"standard\\",\\n      \\"ParamName\\": \\"rt_threshold_ms\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '参数模版支持设置的参数列表',
    ),
    'DescribeParameterGroup' => 
    array (
      'summary' => '查询参数模版基本信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '179009',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstore9GDS4D',
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
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rpg-sys-00*****',
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
                'example' => 'A501A191-BD70-5E50-98A9-C2A486A82****',
              ),
              'ParameterGroup' => 
              array (
                'description' => '返回参数模板对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'EngineVersion' => 
                  array (
                    'description' => '引擎兼容版本。',
                    'type' => 'string',
                    'example' => '5.0',
                  ),
                  'Modified' => 
                  array (
                    'description' => '参数模板的最近修改时间。',
                    'type' => 'string',
                    'example' => '2023-04-18 16:32:45',
                  ),
                  'ParameterGroupName' => 
                  array (
                    'description' => '参数模板名称。',
                    'type' => 'string',
                    'example' => 'testGroupName',
                  ),
                  'ParameterGroupDesc' => 
                  array (
                    'description' => '参数模版的描述信息。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Engine' => 
                  array (
                    'description' => '参数模本引擎',
                    'type' => 'string',
                    'example' => 'redis',
                  ),
                  'ParamGroupId' => 
                  array (
                    'description' => '参数模板ID，全局唯一。',
                    'type' => 'string',
                    'example' => 'sys-001*****',
                  ),
                  'Created' => 
                  array (
                    'description' => '参数模板的创建时间。',
                    'type' => 'string',
                    'example' => '2023-04-18 16:32:45',
                  ),
                  'Category' => 
                  array (
                    'description' => '产品类别，取值：
- **0**：社区版
- **1**：Tair（Redis企业版）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ParamGroupsDetails' => 
                  array (
                    'description' => '参数模板的参数详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParamName' => 
                        array (
                          'description' => '参数名称。',
                          'type' => 'string',
                          'example' => 'timeout',
                        ),
                        'ParamValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => '1000',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A501A191-BD70-5E50-98A9-C2A486A82****\\",\\n  \\"ParameterGroup\\": {\\n    \\"EngineVersion\\": \\"5.0\\",\\n    \\"Modified\\": \\"2023-04-18 16:32:45\\",\\n    \\"ParameterGroupName\\": \\"testGroupName\\",\\n    \\"ParameterGroupDesc\\": \\"test\\",\\n    \\"Engine\\": \\"redis\\",\\n    \\"ParamGroupId\\": \\"sys-001*****\\",\\n    \\"Created\\": \\"2023-04-18 16:32:45\\",\\n    \\"Category\\": 1,\\n    \\"ParamGroupsDetails\\": [\\n      {\\n        \\"ParamName\\": \\"timeout\\",\\n        \\"ParamValue\\": \\"1000\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询参数模版基本信息',
    ),
    'ModifyParameterGroup' => 
    array (
      'summary' => '修改参数模板的设置。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '178977',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstoreDVVZYL',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类别，取值：
- **standard**：社区版
- **enterprise**：Tair（Redis企业版）',
            'type' => 'string',
            'required' => true,
            'example' => 'enterprise',
          ),
        ),
        2 => 
        array (
          'name' => 'ParameterGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sys-001****',
          ),
        ),
        3 => 
        array (
          'name' => 'ParameterGroupDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板的描述。长度为0~200个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'ParameterGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改参数模板的名称，需满足如下要求：
* 由英文、数字、和下划线（_）组成，以字母开头，不能包含中文。
* 长度为8~64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'testGroupName',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数和对应值的JSON格式文本，格式：{"参数1":"参数1值","参数2":"参数2值",...}，传入的值将覆盖原内容。
> 不同版本可添加的参数以控制台为准。',
            'type' => 'string',
            'required' => true,
            'example' => '{"hz":"12"}',
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
                'example' => 'AD425AD3-CC7B-4EE2-A5CB-2F61BA73****',
              ),
              'ParamGroupId' => 
              array (
                'description' => '参数模板ID。',
                'type' => 'string',
                'example' => 'testGroupName',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AD425AD3-CC7B-4EE2-A5CB-2F61BA73****\\",\\n  \\"ParamGroupId\\": \\"testGroupName\\"\\n}","type":"json"}]',
      'title' => '修改参数模版',
    ),
    'DescribeParameterGroups' => 
    array (
      'summary' => '查询可用的参数模版列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '179002',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstore9GDS4D',
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
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DbType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型，取值为**redis**（默认）、**tair**。',
            'type' => 'string',
            'required' => false,
            'example' => 'redis',
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
                'example' => '686BB8A6-BBA5-47E5-8A75-D2ADE433****',
              ),
              'ParameterGroups' => 
              array (
                'description' => '参数模版列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EngineVersion' => 
                    array (
                      'description' => '引擎兼容版本。',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'Modified' => 
                    array (
                      'description' => '参数模板的最近修改时间。',
                      'type' => 'string',
                      'example' => '2023-04-18 16:32:45',
                    ),
                    'ParameterGroupName' => 
                    array (
                      'description' => '参数模版名称。',
                      'type' => 'string',
                      'example' => 'testGroupName',
                    ),
                    'ParameterGroupDesc' => 
                    array (
                      'description' => '参数模版的描述信息。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Engine' => 
                    array (
                      'description' => '引擎类型，取值如下：
- **redis**：Redis或Tair内存型。
- **tair_pena**：Tair持久内存型。
- **tair_pdb**：Tair云盘（ESSD）型。',
                      'type' => 'string',
                      'example' => 'tair_pena',
                    ),
                    'ParamGroupId' => 
                    array (
                      'description' => '参数模板ID。',
                      'type' => 'string',
                      'example' => 'test01',
                    ),
                    'Created' => 
                    array (
                      'description' => '参数模版的创建时间。',
                      'type' => 'string',
                      'example' => '2023-04-18 16:32:45
',
                    ),
                    'Category' => 
                    array (
                      'description' => '产品类别，取值：
- **0**：社区版
- **1**：Tair（Redis企业版）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"686BB8A6-BBA5-47E5-8A75-D2ADE433****\\",\\n  \\"ParameterGroups\\": [\\n    {\\n      \\"EngineVersion\\": \\"5\\",\\n      \\"Modified\\": \\"2023-04-18 16:32:45\\",\\n      \\"ParameterGroupName\\": \\"testGroupName\\",\\n      \\"ParameterGroupDesc\\": \\"test\\",\\n      \\"Engine\\": \\"tair_pena\\",\\n      \\"ParamGroupId\\": \\"test01\\",\\n      \\"Created\\": \\"2023-04-18 16:32:45\\\\n\\",\\n      \\"Category\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询参数模版列表',
    ),
    'CreateParameterGroup' => 
    array (
      'summary' => '创建参数模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类别，取值：
* **standard**：社区版。
* **enterprise**：Tair（Redis企业版）。',
            'type' => 'string',
            'required' => true,
            'example' => 'enterprise',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值：
* **redis**：Redis或Tair内存型。
* **tair_pena**：Tair持久内存型。
* **tair_pdb**：Tair云盘（ESSD）型。',
            'type' => 'string',
            'required' => true,
            'example' => 'redis',
          ),
        ),
        3 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '兼容版本，取值：
* Redis社区版支持**5.0**、**6.0**和**7.0**。
* Tair内存型支持**5.0**、**6.0**。
* Tair持久内存型支持**6.0**。
* Tair云盘（ESSD）型支持**4.0**。',
            'type' => 'string',
            'required' => true,
            'example' => '6.0',
          ),
        ),
        4 => 
        array (
          'name' => 'ParameterGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板的名称，需满足如下要求：
- 由英文、数字、和下划线（_）组成，以字母开头，不能包含中文。
- 长度为8~64个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'tw_test1',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数和对应值的JSON格式文本，格式：{"参数1":"参数1值","参数2":"参数2值"......}。
> 不同版本可添加的参数以控制台为准。',
            'type' => 'string',
            'required' => true,
            'example' => '{"hz":"15","#no_loose_disabled-commands":"flushall"}',
          ),
        ),
        6 => 
        array (
          'name' => 'ParameterGroupDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数模板的描述。长度为0~200个字符。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '62DA5BE5-F9C9-527C-ACCB-4D783C297A3A',
              ),
              'ParamGroupId' => 
              array (
                'description' => '参数模板ID。',
                'type' => 'string',
                'example' => 'g-51ii2ienn0dg0xi8****',
              ),
            ),
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"62DA5BE5-F9C9-527C-ACCB-4D783C297A3A\\",\\n  \\"ParamGroupId\\": \\"g-51ii2ienn0dg0xi8****\\"\\n}","type":"json"}]',
      'title' => '创建参数模板',
      'description' => '实例为云原生部署模式（原云盘实例）。',
    ),
    'DescribeParameterGroupTemplateList' => 
    array (
      'summary' => '查询参数模板支持设置的参数列表',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '180928',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREkvstore9GDS4D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类别，取值：

standard：社区版。
enterprise：Tair（Redis企业版）。',
            'type' => 'string',
            'required' => true,
            'example' => 'standard',
          ),
        ),
        1 => 
        array (
          'name' => 'EngineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '兼容版本，取值：

Redis社区版支持5.0、6.0和7.0。
Tair内存型支持5.0、6.0。
Tair持久内存型支持6.0。
Tair云盘（ESSD）型支持4.0。',
            'type' => 'string',
            'required' => true,
            'example' => '5.0',
          ),
        ),
        2 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值：

redis：Redis或Tair内存型。
tair_pena：Tair持久内存型。
tair_pdb：Tair云盘（ESSD）型。',
            'type' => 'string',
            'required' => true,
            'example' => 'redis',
          ),
        ),
        3 => 
        array (
          'name' => 'CharacterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的角色类型，取值说明：
logic 集群逻辑实例；
db 集群db实例；
proxy 集群proxy实例；
cs 集群cs实例；
normal 主从db实例',
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
                'example' => '5D622714-AEDD-4609-9167-F5DDD3D1****',
              ),
              'EngineVersion' => 
              array (
                'description' => '兼容版本，取值：

Redis社区版支持5.0、6.0和7.0。 Tair内存型支持5.0、6.0。 Tair持久内存型支持6.0。 Tair云盘（ESSD）型支持4.0。',
                'type' => 'string',
                'example' => '5',
              ),
              'Parameters' => 
              array (
                'description' => '参数的详细信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SupportModifyForMinorVersion' => 
                    array (
                      'description' => '是否支持修改小版本true/false。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CheckingCode' => 
                    array (
                      'description' => '检查参数正则表达式',
                      'type' => 'string',
                      'example' => '"\\\\d+\\\\s+\\\\d+\\\\s+\\\\d+"',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '参数默认值。',
                      'type' => 'string',
                      'example' => '10',
                    ),
                    'Revisable' => 
                    array (
                      'description' => '是否可以修改

- **0**：不能修改；
- **1**：修改。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'Factor' => 
                    array (
                      'description' => '整除因子。对于整数和字节类型的参数，参数值除了必须满足参数的可选范围，还须是Factor（不等于0）的倍数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ParameterName' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'appendonly',
                    ),
                    'Unit' => 
                    array (
                      'description' => '参数值单位。
INT: 普通的整型，STRING: 固定的字符串，B: 字节',
                      'type' => 'string',
                      'example' => 'STRING',
                    ),
                    'ParameterDescription' => 
                    array (
                      'description' => '参数描述。',
                      'type' => 'string',
                      'example' => '开启aof持久化模式',
                    ),
                    'Effective' => 
                    array (
                      'description' => '是否生效：0否，1是',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5D622714-AEDD-4609-9167-F5DDD3D1****\\",\\n  \\"EngineVersion\\": \\"5\\",\\n  \\"Parameters\\": [\\n    {\\n      \\"SupportModifyForMinorVersion\\": true,\\n      \\"CheckingCode\\": \\"\\\\\\"\\\\\\\\\\\\\\\\d+\\\\\\\\\\\\\\\\s+\\\\\\\\\\\\\\\\d+\\\\\\\\\\\\\\\\s+\\\\\\\\\\\\\\\\d+\\\\\\"\\",\\n      \\"ParameterValue\\": \\"10\\",\\n      \\"Revisable\\": 0,\\n      \\"Factor\\": 1,\\n      \\"ParameterName\\": \\"appendonly\\",\\n      \\"Unit\\": \\"STRING\\",\\n      \\"ParameterDescription\\": \\"开启aof持久化模式\\",\\n      \\"Effective\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '参数模版系统参数',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'r-kvstore.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'r-kvstore.cn-zhengzhou-jva.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'r-kvstore.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'r-kvstore.cn-nanjing.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'r-kvstore.cn-fuzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'r-kvstore.cn-guangzhou.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'r-kvstore.cn-chengdu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'r-kvstore.cn-hongkong.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'r-kvstore.ap-northeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'r-kvstore.ap-northeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'r-kvstore.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'r-kvstore.ap-southeast-2.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'r-kvstore.ap-southeast-3.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'r-kvstore.ap-southeast-5.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'r-kvstore.ap-southeast-6.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'r-kvstore.us-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'r-kvstore.us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'r-kvstore.eu-west-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'r-kvstore.eu-central-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'r-kvstore.ap-south-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'r-kvstore.me-east-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'r-kvstore.ap-southeast-7.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'r-kvstore.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'r-kvstore.me-central-1.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-wuhan-lr',
      'endpoint' => 'r-kvstore.cn-wuhan-lr.aliyuncs.com',
    ),
  ),
);
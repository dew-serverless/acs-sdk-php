<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Drds',
    'version' => '2019-01-23',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 117683,
      'title' => '实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDrdsInstance',
        1 => 'CreateOrderForRds',
        2 => 'ModifyDrdsInstanceDescription',
        3 => 'UpdateResourceGroupAttribute',
        4 => 'DescribeDrdsInstances',
        5 => 'DescribeDrdsDbInstance',
        6 => 'DescribeDrdsInstance',
        7 => 'DescribeDrdsParams',
        8 => 'DescribeDrdsTasks',
        9 => 'DescribeHotDbList',
        10 => 'DescribeInstanceSwitchAzone',
        11 => 'DescribeInstanceSwitchNetwork',
        12 => 'DescribeInstDbLogInfo',
        13 => 'DescribePreCheckResult',
        14 => 'DescribeRdsCommodity',
        15 => 'RemoveDrdsInstance',
      ),
    ),
    1 => 
    array (
      'id' => 117700,
      'title' => '数据库管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDrdsDB',
        1 => 'DescribeDrdsDBs',
        2 => 'DescribeDrdsDB',
        3 => 'DescribeDrdsDbInstances',
        4 => 'DescribeDrdsDbRdsNameList',
        5 => 'DescribeDrdsShardingDbs',
        6 => 'CheckDrdsDbName',
        7 => 'RemoveDrdsDbFailedRecord',
        8 => 'RemoveDrdsDb',
      ),
    ),
    2 => 
    array (
      'id' => 117711,
      'title' => '存储管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyRdsReadWeight',
        1 => 'DescribeRdsPerformanceSummary',
        2 => 'DescribeRdsSuperAccountInstances',
        3 => 'DescribeDrdsDBCluster',
        4 => 'DescribeRDSPerformance',
        5 => 'DescribeDbInstances',
        6 => 'DescribeDbInstanceDbs',
      ),
    ),
    3 => 
    array (
      'id' => 117719,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstanceAccount',
        1 => 'RemoveInstanceAccount',
      ),
    ),
    4 => 
    array (
      'id' => 117722,
      'title' => 'SQL审计',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableSqlAudit',
        1 => 'DisableSqlAudit',
        2 => 'DescribeDrdsSqlAuditStatus',
        3 => 'DescribeInstDbSlsInfo',
        4 => 'DescribeDrdsSlowSqls',
        5 => 'CheckSqlAuditEnableStatus',
      ),
    ),
    5 => 
    array (
      'id' => 117729,
      'title' => '备份和恢复',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartRestore',
        1 => 'SetBackupPolicy',
        2 => 'EnableSqlFlashbackMatchSwitch',
        3 => 'DescribeBackMenu',
        4 => 'DescribeRestoreOrder',
        5 => 'DescribeBackupDbs',
        6 => 'DescribeBackupSets',
        7 => 'DescribeBackupPolicy',
        8 => 'DescribeBackupTimes',
        9 => 'RemoveBackupsSet',
        10 => 'PutStartBackup',
      ),
    ),
    6 => 
    array (
      'id' => 117741,
      'title' => '网络和连接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstanceInternetAddress',
        1 => 'UpdateInstanceNetwork',
        2 => 'ReleaseInstanceInternetAddress',
      ),
    ),
    7 => 
    array (
      'id' => 117745,
      'title' => '安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyDrdsIpWhiteList',
        1 => 'DescribeDrdsDBIpWhiteList',
      ),
    ),
    8 => 
    array (
      'id' => 117748,
      'title' => '扩容管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitCleanTask',
        1 => 'SubmitSmoothExpandPreCheck',
        2 => 'CheckExpandStatus',
        3 => 'SubmitHotExpandTask',
        4 => 'SubmitHotExpandPreCheckTask',
      ),
    ),
    9 => 
    array (
      'id' => 117756,
      'title' => '任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeSqlFlashbakTask',
        1 => 'SubmitSqlFlashbackTask',
      ),
    ),
    10 => 
    array (
      'id' => 117759,
      'title' => '表拆分',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateShardTask',
        1 => 'DescribeInstanceAccounts',
        2 => 'DescribeExpandLogicTableInfoList',
        3 => 'DescribeTable',
        4 => 'DescribeTableListByType',
        5 => 'DescribeShardTaskInfo',
        6 => 'ValidateShardTask',
      ),
    ),
    11 => 
    array (
      'id' => 117768,
      'title' => '广播表',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetupBroadcastTables',
        1 => 'DescribeBroadcastTables',
        2 => 'SwitchGlobalBroadcastType',
      ),
    ),
    12 => 
    array (
      'id' => 117772,
      'title' => '数据表管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetupTable',
        1 => 'DescribeTables',
      ),
    ),
    13 => 
    array (
      'id' => 117775,
      'title' => '标签和参数设置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetupDrdsParams',
        1 => 'ListTagResources',
        2 => 'TagResources',
        3 => 'UntagResources',
      ),
    ),
    14 => 
    array (
      'id' => 117780,
      'title' => '实例版本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDrdsInstanceVersion',
        1 => 'DescribeDrdsInstanceLevelTasks',
        2 => 'UpgradeInstanceVersion',
      ),
    ),
    15 => 
    array (
      'id' => 117784,
      'title' => '性能监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDrdsInstanceMonitor',
        1 => 'DescribeDrdsInstanceDbMonitor',
      ),
    ),
    16 => 
    array (
      'id' => 169169,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeAccountPassword',
        1 => 'ChangeInstanceAzone',
        2 => 'DescribeBackupLocal',
        3 => 'DescribeDrdsRdsInstances',
        4 => 'DescribeRecycleBinStatus',
        5 => 'DescribeRecycleBinTables',
        6 => 'EnableInstanceIpv6Address',
        7 => 'FlashbackRecycleBinTable',
        8 => 'GetDrdsDbRdsRelationInfo',
        9 => 'ManagePrivateRds',
        10 => 'ModifyAccountDescription',
        11 => 'ModifyAccountPrivilege',
        12 => 'ModifyPolarDbReadWeight',
        13 => 'RefreshDrdsAtomUrl',
        14 => 'RemoveRecycleBinTable',
        15 => 'RestartDrdsInstance',
        16 => 'RollbackInstanceVersion',
        17 => 'SetBackupLocal',
        18 => 'SetupRecycleBinStatus',
        19 => 'SubmitSmoothExpandPreCheckTask',
        20 => 'UpdatePrivateRdsClass',
        21 => 'UpgradeHiStoreInstance',
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
    'CreateDrdsInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述，需满足如下要求：

- 不能以http://或https://开头。
- 必须以字母或中文开头，可包含大小写字母、中文、数字、下划线（_）或短划线（-）。
- 长度为2~256个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
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
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-e',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，仅支持PRIVATE，即专享实例。

> 您也可以传入1表示专享实例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PRIVATE',
            'enum' => 
            array (
              0 => 'PRIVATE',
              1 => 'PUBLIC',
              2 => '1',
              3 => '0',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Quantity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建实例的数量，仅支持传入1，即一次只能创建一个实例。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceSeries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例系列参数，取值范围如下：

- **drds.sn2.4c16g**：入门版
- **drds.sn2.8c32g**：标准版
- **drds.sn2.16c64g**：企业版',
            'type' => 'string',
            'required' => true,
            'example' => 'drds.sn2.4c16g',
          ),
        ),
        6 => 
        array (
          'name' => 'Specification',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格码，取值由实例系列加具体实例规格组成，例如drds.sn2.4c16g.8c32g。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds.sn2.4c16g.8C32g',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c1dd299c-10c6-11ea-bbbb-************',
          ),
        ),
        8 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型，取值范围如下：

- **drdsPre**：包年包月（也称预付费）。
- **drdsPost**：按量付费（也称后付费）。
- **drdsRo**：创建只读实例时，默认按量付费模式。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdsPost',
          ),
        ),
        9 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-**********',
          ),
        ),
        10 => 
        array (
          'name' => 'VswitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-**********',
          ),
        ),
        11 => 
        array (
          'name' => 'isHa',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为高可用实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或包月类型，取值范围如下：

- **year**：年
- **month**：月

> 若付费类型为drdsPre，该参数为必传参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'month',
            'enum' => 
            array (
              0 => 'year',
              1 => 'month',
            ),
          ),
        ),
        13 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包年或包月实例的购买时长。

- 当PricingCycle为year时，取值范围为1~3。
- 当PricingCycle为month时，取值范围为1~9。

> 仅当付费类型是drdsPre时该参数生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'IsAutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动续费，取值范围如下：

- **true**：如果按月购买则自动续费一个月，如果按年购买则自动续费一年。
- **false**：不自动续费。

> 仅当付费类型为drdsPre时该参数生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'MasterInstId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主实例ID，仅在创建只读实例时填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds***********',
          ),
        ),
        16 => 
        array (
          'name' => 'MySQLVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例支持的MySQL版本，取值范围如下：

- **5**：与MySQL 5.x完全兼容（默认）
- **8**：与MySQL 8.0完全兼容

> 仅当创建主实例时该参数生效，只读实例的MySQL版本默认与主实例相同。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        17 => 
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D99D4644-A70D-49A3-B8B4-767ACC50SE2R',
              ),
              'Data' => 
              array (
                'description' => '结果详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '111111111111111',
                  ),
                  'DrdsInstanceIdList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'drdsInstanceIdList' => 
                      array (
                        'description' => '实例信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'drds************',
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
            'errorCode' => 'ParameterError',
            'errorMessage' => 'Parameter error',
          ),
          1 => 
          array (
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
          2 => 
          array (
            'errorCode' => 'ServiceUnable',
            'errorMessage' => 'The service is not available now, please try again later',
          ),
          3 => 
          array (
            'errorCode' => 'OperationDenied',
            'errorMessage' => 'drds service is not enable for you',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.DRDSInstance',
            'errorMessage' => 'The quota of create instance exceeds.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The RegionId provided does not exist in our records.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidDescription.MalFormed',
            'errorMessage' => 'The specified parameter description is not valid.',
          ),
          7 => 
          array (
            'errorCode' => 'CommunicateWithManager.Error',
            'errorMessage' => 'Internal Error. Communicate with drds manager error',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidVSwitchId',
            'errorMessage' => 'Invalid vswitchId',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidVpcId',
            'errorMessage' => 'Invalid vpcId, or the region of vpc does not match',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidZoneId.Mismatch',
            'errorMessage' => 'zone is illegal in this order',
          ),
          11 => 
          array (
            'errorCode' => 'LowInventory.ServerError',
            'errorMessage' => 'low inventory error',
          ),
          12 => 
          array (
            'errorCode' => 'publicInstanceAlreadExist.Error',
            'errorMessage' => 'a public Drds instance is exist',
          ),
          13 => 
          array (
            'errorCode' => 'CreateDRDSInstanceId.Error',
            'errorMessage' => 'create Drds instance id error',
          ),
          14 => 
          array (
            'errorCode' => 'ResourceInsufficient',
            'errorMessage' => 'resource is Insufficient',
          ),
          15 => 
          array (
            'errorCode' => 'AnotherOrderExist.Error',
            'errorMessage' => 'there is another order',
          ),
          16 => 
          array (
            'errorCode' => 'InstanceExceedLimit.Error',
            'errorMessage' => 'instance number has exceeded',
          ),
          17 => 
          array (
            'errorCode' => 'InvalidParameter.Quantity',
            'errorMessage' => 'Invalid parameter of quantity',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidParameter.RegionId',
            'errorMessage' => 'Invalid parameter of region id',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidParameter.ZoneId',
            'errorMessage' => 'Invalid parameter of zone id',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParameter.PayType',
            'errorMessage' => 'Invalid parameter of pay type',
          ),
          21 => 
          array (
            'errorCode' => 'InvalidParameter.Spection',
            'errorMessage' => 'Invalid parameter of specification',
          ),
          22 => 
          array (
            'errorCode' => 'InvalidParameter.Series',
            'errorMessage' => 'Invalid parameter of series',
          ),
          23 => 
          array (
            'errorCode' => 'InvalidParameter.duration_pricingCycle',
            'errorMessage' => 'when payType=drdsPre, duration and pricingCycle is required',
          ),
          24 => 
          array (
            'errorCode' => 'InvalidParameter.year.duration',
            'errorMessage' => 'when pricingCycle=year, duration must between 1 to 3',
          ),
          25 => 
          array (
            'errorCode' => 'InvalidParameter.month.duration',
            'errorMessage' => 'when pricingCycle=month, duration must between 1 to 9',
          ),
          26 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceType.Error',
            'errorMessage' => 'Invalid parameter of Type, public is not supported',
          ),
          27 => 
          array (
            'errorCode' => 'QueryVSwitchFailed.InvalidVpcIdOrServerError',
            'errorMessage' => 'Query VSwitch failed, please check vpcId',
          ),
          28 => 
          array (
            'errorCode' => 'RegionNotSupportVPC.Error',
            'errorMessage' => 'This region does not support vpc instance',
          ),
          29 => 
          array (
            'errorCode' => 'UserAccountVerify.Failed',
            'errorMessage' => 'User account verify failed. Please verify first',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"D99D4644-A70D-49A3-B8B4-767ACC50SE2R\\",\\n  \\"Data\\": {\\n    \\"OrderId\\": 111111111111111,\\n    \\"DrdsInstanceIdList\\": {\\n      \\"drdsInstanceIdList\\": [\\n        \\"drds************\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDrdsInstanceResponse>\\n    <Success>true</Success>\\n    <RequestId>D99D4644-A70D-49A3-B8B4-767ACC50SE2R</RequestId>\\n    <Data>\\n        <OrderId>111111111111111</OrderId>\\n        <DrdsInstanceIdList>drds************</DrdsInstanceIdList>\\n    </Data>\\n</CreateDrdsInstanceResponse>","errorExample":""}]',
      'title' => '创建一个实例',
      'summary' => '创建新实例。',
    ),
    'CreateOrderForRds' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域Id',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RDS下单参数JOSN，参考[创建RDS实例](~~26228~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '{"key":"value"}',
          ),
        ),
      ),
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
                'description' => '购买成功的RDS实例ID',
                'type' => 'string',
                'example' => '[rm-***********]',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9819BC51-D33D-4EB1-B80F-A89A20******',
              ),
              'Success' => 
              array (
                'description' => '成功标识',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"[rm-***********]\\",\\n  \\"RequestId\\": \\"9819BC51-D33D-4EB1-B80F-A89A20******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateOrderForRdsResponse>    \\n    <Data>[rm-***********]</Data>\\n\\t<RequestId>9819BC51-D33D-4EB1-B80F-A89A20******</RequestId>\\n\\t<Success>true</Success>\\n</CreateOrderForRdsResponse>","errorExample":""}]',
      'title' => '创建购买RDS的订单',
      'summary' => '调用CreateOrderForRds接口创建购买RDS的订单。',
      'description' => '请确保在使用该接口前，已充分了解本产品的收费方式和[价格](https://www.aliyun.com/price/product#/rds/detail)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDrdsInstanceDescription' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例描述信息。',
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
                'example' => 'C44CA24C-C7C4-4C0F-8AC9-1343F2******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"C44CA24C-C7C4-4C0F-8AC9-1343F2******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C44CA24C-C7C4-4C0F-8AC9-1343F2******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '修改实例描述',
      'summary' => '调用ModifyDrdsInstanceDescription接口修改实例描述。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateResourceGroupAttribute' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例的地域ID。
> 您可以调用[DescribeDrdsInstances](~~139284~~)接口查看账号下的实例详情，包括地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标实例ID。
> 您可以调用[DescribeDrdsInstances](~~139284~~)接口查看账号下的实例详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds***********',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标资源组ID。
> 您可以调用[ListResourceGroups](~~158855~~)接口查看资源组详情，包括资源组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-***************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '91C7CAB5-3B2E-4FB6-893C-0162C0******',
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
            'errorCode' => 'DRDSDB.NotExist',
            'errorMessage' => 'The database does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"91C7CAB5-3B2E-4FB6-893C-0162C0******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateResourceGroupAttributeResponse>\\r\\n<RequestId>91C7CAB5-3B2E-4FB6-893C-0162C0******</RequestId>\\r\\n</UpdateResourceGroupAttributeResponse>","errorExample":""}]',
      'title' => '将实例转移至新的资源组',
      'summary' => '调用UpdateResourceGroupAttribute接口将实例转移至新的资源组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76004',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrdsQ69M1H',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型。
- **共享实例**：0
- **专享实例**：1',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => 'PRIVATE',
              1 => 'PUBLIC',
              2 => '1',
              3 => '0',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_test',
          ),
        ),
        2 => 
        array (
          'name' => 'Expired',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否过期。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
            'default' => '1',
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
            'required' => false,
            'example' => '20',
            'default' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID，可以为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'NULL',
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
            'enum' => 
            array (
              0 => 'cn-shenzhen',
              1 => 'cn-beijing',
              2 => 'cn-shenzhen-finance-1',
              3 => 'cn-north-2-gov-1',
              4 => 'cn-qingdao',
              5 => 'cn-shanghai',
              6 => 'cn-shanghai-finance-1',
              7 => 'cn-hongkong',
              8 => 'cn-hangzhou-finance',
              9 => 'ap-southeast-1',
              10 => 'cn-huhehaote',
              11 => 'us-east-1',
              12 => 'cn-zhangjiakou',
              13 => 'cn-hangzhou',
              14 => 'us-west-1',
              15 => 'cn-wulanchabu',
              16 => 'eu-central-1',
              17 => 'ap-southeast-5',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Mix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持混合查询。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'FALSE',
          ),
        ),
        8 => 
        array (
          'name' => 'ProductVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品版本号，可取值为V1或V2。',
            'type' => 'string',
            'required' => false,
            'example' => 'V1',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签属性列表。',
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
                  'example' => 'acs:newretail:domain',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'NEW_RETAIL',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8734773E-7B21-4A22-9106-CBD245F8****',
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
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => '实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '虚拟专用网络ID。',
                          'type' => 'string',
                          'example' => 'vpc-bp**********',
                        ),
                        'Status' => 
                        array (
                          'description' => '实例状态。',
                          'type' => 'string',
                          'example' => 'RUN',
                        ),
                        'Type' => 
                        array (
                          'description' => '实例类型。
- **PUBLIC**：共享实例
- **PRIVATE**：独享实例',
                          'type' => 'string',
                          'example' => 'PRIVATE',
                        ),
                        'CommodityCode' => 
                        array (
                          'description' => '商品代码。',
                          'type' => 'string',
                          'example' => 'drdsPost',
                        ),
                        'MachineType' => 
                        array (
                          'description' => '实例机器类型，仅支持ecs。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568620311000',
                        ),
                        'VersionAction' => 
                        array (
                          'description' => '实例版本可用操作。',
                          'type' => 'string',
                          'example' => 'Upgradable',
                        ),
                        'InstanceSeries' => 
                        array (
                          'description' => '实例规格系列。',
                          'type' => 'string',
                          'example' => 'drds.sn2.4c16g',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。
- **CLASSIC**：经典网络
- **VPC**：专有网络',
                          'type' => 'string',
                          'example' => 'CLASSIC',
                        ),
                        'Label' => 
                        array (
                          'description' => '实例标签。

- **NORMAL**：普通实例

- **HA**：高可用实例

- **VPC**：VPC实例',
                          'type' => 'string',
                          'example' => 'NORMAL',
                        ),
                        'ProductVersion' => 
                        array (
                          'description' => '产品版本号。',
                          'type' => 'string',
                          'example' => 'V1',
                        ),
                        'InstanceSpec' => 
                        array (
                          'description' => '实例规格。',
                          'type' => 'string',
                          'example' => 'drds.sn2.4c16g.8C32G',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-e',
                        ),
                        'VpcCloudInstanceId' => 
                        array (
                          'description' => 'VPC集群中的实例ID。',
                          'type' => 'string',
                          'example' => 'drdssen12****',
                        ),
                        'Description' => 
                        array (
                          'description' => '实例描述。',
                          'type' => 'string',
                          'example' => 'drds_test',
                        ),
                        'Version' => 
                        array (
                          'description' => '实例版本。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-aek2ljh3ye4****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区。',
                          'type' => 'string',
                          'example' => 'vsw-bpxxxxxxxxxxxxx96',
                        ),
                        'DrdsInstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'drdssen12****',
                        ),
                        'ExpireDate' => 
                        array (
                          'description' => '过期时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4724323200000',
                        ),
                        'MasterInstanceId' => 
                        array (
                          'description' => '主实例ID。',
                          'type' => 'string',
                          'example' => 'drdssen12****',
                        ),
                        'OrderInstanceId' => 
                        array (
                          'description' => '购买的实例ID。',
                          'type' => 'string',
                          'example' => 'drdssen12****',
                        ),
                        'InstRole' => 
                        array (
                          'description' => '实例角色。
- **MASTER**：主实例
- **SLAVE**：分析型只读实例
- **SLAVE_FLOW**：并发型只读实例',
                          'type' => 'string',
                          'example' => 'MASTER',
                        ),
                        'Vips' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Vip' => 
                            array (
                              'description' => 'VIP列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VpcId' => 
                                  array (
                                    'description' => '虚拟专用网络ID。',
                                    'type' => 'string',
                                    'example' => 'vpc-bpxxxxxxxxxxxy',
                                  ),
                                  'Type' => 
                                  array (
                                    'description' => 'VIP类型。
- **intranet**：内网
- **internet**：外网',
                                    'type' => 'string',
                                    'example' => 'intranet',
                                  ),
                                  'VswitchId' => 
                                  array (
                                    'description' => '虚拟交换机ID。',
                                    'type' => 'string',
                                    'example' => 'vsw-bpxxxxxxxxxxxxx96',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => 'VIP开放端口。',
                                    'type' => 'string',
                                    'example' => '3306',
                                  ),
                                  'IP' => 
                                  array (
                                    'description' => 'IP地址。',
                                    'type' => 'string',
                                    'example' => '10.23.***.***',
                                  ),
                                  'dns' => 
                                  array (
                                    'description' => 'VIP绑定的域名。',
                                    'type' => 'string',
                                    'example' => 'drdssen1243as.drds.aliyuncs.com',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ReadOnlyDBInstanceIds' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReadOnlyDBInstanceId' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '只读实例ID列表。',
                                'type' => 'string',
                                'example' => 'drdssen12****',
                              ),
                            ),
                          ),
                        ),
                        'series' => 
                        array (
                          'description' => '实例系列，取值如下：

- **starter**：入门版
- **enterprise**：企业版
- **standard**：标准版',
                          'type' => 'string',
                          'example' => 'enterprise',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
          1 => 
          array (
            'errorCode' => 'ServiceUnable',
            'errorMessage' => 'The service is not available now, please try again later',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidRegionId.NotFound',
            'errorMessage' => 'The RegionId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8734773E-7B21-4A22-9106-CBD245F8****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 1,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"VpcId\\": \\"vpc-bp**********\\",\\n        \\"Status\\": \\"RUN\\",\\n        \\"Type\\": \\"PRIVATE\\",\\n        \\"CommodityCode\\": \\"drdsPost\\",\\n        \\"MachineType\\": \\"ecs\\",\\n        \\"CreateTime\\": 1568620311000,\\n        \\"VersionAction\\": \\"Upgradable\\",\\n        \\"InstanceSeries\\": \\"drds.sn2.4c16g\\",\\n        \\"NetworkType\\": \\"CLASSIC\\",\\n        \\"Label\\": \\"NORMAL\\",\\n        \\"ProductVersion\\": \\"V1\\",\\n        \\"InstanceSpec\\": \\"drds.sn2.4c16g.8C32G\\",\\n        \\"RegionId\\": \\"cn-hangzhou-e\\",\\n        \\"VpcCloudInstanceId\\": \\"drdssen12****\\",\\n        \\"Description\\": \\"drds_test\\",\\n        \\"Version\\": 0,\\n        \\"ResourceGroupId\\": \\"rg-aek2ljh3ye4****\\",\\n        \\"ZoneId\\": \\"vsw-bpxxxxxxxxxxxxx96\\",\\n        \\"DrdsInstanceId\\": \\"drdssen12****\\",\\n        \\"ExpireDate\\": 4724323200000,\\n        \\"MasterInstanceId\\": \\"drdssen12****\\",\\n        \\"OrderInstanceId\\": \\"drdssen12****\\",\\n        \\"InstRole\\": \\"MASTER\\",\\n        \\"Vips\\": {\\n          \\"Vip\\": [\\n            {\\n              \\"VpcId\\": \\"vpc-bpxxxxxxxxxxxy\\",\\n              \\"Type\\": \\"intranet\\",\\n              \\"VswitchId\\": \\"vsw-bpxxxxxxxxxxxxx96\\",\\n              \\"Port\\": \\"3306\\",\\n              \\"IP\\": \\"10.23.***.***\\",\\n              \\"dns\\": \\"drdssen1243as.drds.aliyuncs.com\\"\\n            }\\n          ]\\n        },\\n        \\"ReadOnlyDBInstanceIds\\": {\\n          \\"ReadOnlyDBInstanceId\\": [\\n            \\"drdssen12****\\"\\n          ]\\n        },\\n        \\"series\\": \\"enterprise\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsInstancesResponse>\\n    <RequestId>8734773E-7B21-4A22-9106-CBD245F8****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>1</Total>\\n    <Instances>\\n        <VpcId>vpc-bp**********</VpcId>\\n        <Status>RUN</Status>\\n        <Type>PRIVATE</Type>\\n        <CommodityCode>drdsPost</CommodityCode>\\n        <MachineType>ecs</MachineType>\\n        <CreateTime>1568620311000</CreateTime>\\n        <VersionAction>Upgradable</VersionAction>\\n        <InstanceSeries>drds.sn2.4c16g</InstanceSeries>\\n        <NetworkType>CLASSIC</NetworkType>\\n        <Label>NORMAL</Label>\\n        <ProductVersion>V1</ProductVersion>\\n        <InstanceSpec>drds.sn2.4c16g.8C32G</InstanceSpec>\\n        <RegionId>cn-hangzhou-e</RegionId>\\n        <VpcCloudInstanceId>drdssen12****</VpcCloudInstanceId>\\n        <Description>drds_test</Description>\\n        <Version>0</Version>\\n        <ResourceGroupId>rg-aek2ljh3ye4****</ResourceGroupId>\\n        <ZoneId>vsw-bpxxxxxxxxxxxxx96</ZoneId>\\n        <DrdsInstanceId>drdssen12****</DrdsInstanceId>\\n        <ExpireDate>4724323200000</ExpireDate>\\n        <MasterInstanceId>drdssen12****</MasterInstanceId>\\n        <OrderInstanceId>drdssen12****</OrderInstanceId>\\n        <InstRole>MASTER</InstRole>\\n        <Vips>\\n            <VpcId>vpc-bpxxxxxxxxxxxy</VpcId>\\n            <Type>intranet</Type>\\n            <VswitchId>vsw-bpxxxxxxxxxxxxx96</VswitchId>\\n            <Port>3306</Port>\\n            <IP>10.23.***.***</IP>\\n            <dns>drdssen1243as.drds.aliyuncs.com</dns>\\n        </Vips>\\n        <ReadOnlyDBInstanceIds>drdssen12****</ReadOnlyDBInstanceIds>\\n        <series>enterprise</series>\\n    </Instances>\\n</DescribeDrdsInstancesResponse>","errorExample":""}]',
      'title' => '查询DRDS实例列表',
      'summary' => '通过DescribeDrdsInstances接口查询DRDS实例列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDbInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '75989',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。

',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbga1138****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私有定制RDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-bp1t1mk5a5bdj****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4FE09970-CA69-4144-88CA-67FB4BTY56G3',
              ),
              'DbInstance' => 
              array (
                'description' => '私有定制RDS实例详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ExpireTime' => 
                  array (
                    'description' => '实例过期时间，格式为Unix时间戳，单位为秒。
>仅预付费实例支持该参数。',
                    'type' => 'string',
                    'example' => '12341434315',
                  ),
                  'PayType' => 
                  array (
                    'description' => '实例付费类型，取值范围如下：

- **Prepaid**：包年包月（即预付费）
- **Postaid**：按量付费（即后付费或按小时付费）',
                    'type' => 'string',
                    'example' => 'Postpaid',
                  ),
                  'DBInstanceStatus' => 
                  array (
                    'description' => '实例状态。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '实例网络类型，目前仅支持专有网络**VPC**。',
                    'type' => 'string',
                    'example' => 'VPC',
                  ),
                  'Port' => 
                  array (
                    'description' => '实例访问端口。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3306',
                  ),
                  'EngineVersion' => 
                  array (
                    'description' => '实例引擎版本，目前仅支持**5.7**版本。',
                    'type' => 'string',
                    'example' => '5.7',
                  ),
                  'DmInstanceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'dm-*************',
                  ),
                  'ConnectUrl' => 
                  array (
                    'description' => '私有定制RDS连接地址。',
                    'type' => 'string',
                    'example' => 'rm-***************.mysql.rds.aliyuncs.com',
                  ),
                  'ReadWeight' => 
                  array (
                    'description' => '实例读比例。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '70',
                  ),
                  'RdsInstType' => 
                  array (
                    'description' => '实例类型。',
                    'type' => 'string',
                    'example' => 'RDS',
                  ),
                  'RemainDays' => 
                  array (
                    'description' => '实例过期剩余天数。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'DBInstanceId' => 
                  array (
                    'description' => '私有定制RDS实例ID。',
                    'type' => 'string',
                    'example' => 'rm-***************',
                  ),
                  'DbInstType' => 
                  array (
                    'description' => '实例类型，取值范围如下：

- **Primary**：主实例
- **ReadOnly**：只读实例',
                    'type' => 'string',
                    'example' => 'Primary',
                  ),
                  'Engine' => 
                  array (
                    'description' => '实例引擎，目前仅支持**MySQL**。',
                    'type' => 'string',
                    'example' => 'MySQL',
                  ),
                  'ReadOnlyInstances' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ReadOnlyInstance' => 
                      array (
                        'description' => '只读实例列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ExpireTime' => 
                            array (
                              'description' => '实例过期时间戳。',
                              'type' => 'string',
                              'example' => '1823487328173',
                            ),
                            'PayType' => 
                            array (
                              'description' => '实例购买类型。',
                              'type' => 'string',
                              'example' => 'Postpaid',
                            ),
                            'VersionAction' => 
                            array (
                              'description' => '无效字段',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'DBInstanceStatus' => 
                            array (
                              'description' => '实例状态。',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'NetworkType' => 
                            array (
                              'description' => '实例网络类型。',
                              'type' => 'string',
                              'example' => 'VPC',
                            ),
                            'Port' => 
                            array (
                              'description' => '实例访问端口。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '3306',
                            ),
                            'EngineVersion' => 
                            array (
                              'description' => '实例引擎版本。',
                              'type' => 'string',
                              'example' => '5.7',
                            ),
                            'DmInstanceId' => 
                            array (
                              'description' => '资源ID。',
                              'type' => 'string',
                              'example' => 'dm-*************',
                            ),
                            'ConnectUrl' => 
                            array (
                              'description' => '只读实例连接地址。',
                              'type' => 'string',
                              'example' => 'rm-bp1ub71ct9skc3yxx.mysql.rds.aliyuncs.com',
                            ),
                            'ReadWeight' => 
                            array (
                              'description' => '实例读比例。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '30',
                            ),
                            'RdsInstType' => 
                            array (
                              'description' => '实例类型。',
                              'type' => 'string',
                              'example' => 'RDS',
                            ),
                            'RemainDays' => 
                            array (
                              'description' => '实例过期剩余天数。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'DBInstanceId' => 
                            array (
                              'description' => '只读实例ID。',
                              'type' => 'string',
                              'example' => 'rm-bp1ub71ct9skc****',
                            ),
                            'DbInstType' => 
                            array (
                              'description' => '实例类型。',
                              'type' => 'string',
                              'example' => 'RDS',
                            ),
                            'Engine' => 
                            array (
                              'description' => '实例引擎。',
                              'type' => 'string',
                              'example' => 'MySQL',
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
            'errorCode' => 'InvalidParameter.MasterDbInstanceRelease',
            'errorMessage' => 'The master db instance has been released',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"4FE09970-CA69-4144-88CA-67FB4BTY56G3\\",\\n  \\"DbInstance\\": {\\n    \\"ExpireTime\\": \\"12341434315\\",\\n    \\"PayType\\": \\"Postpaid\\",\\n    \\"DBInstanceStatus\\": \\"1\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"Port\\": 3306,\\n    \\"EngineVersion\\": \\"5.7\\",\\n    \\"DmInstanceId\\": \\"dm-*************\\",\\n    \\"ConnectUrl\\": \\"rm-***************.mysql.rds.aliyuncs.com\\",\\n    \\"ReadWeight\\": 70,\\n    \\"RdsInstType\\": \\"RDS\\",\\n    \\"RemainDays\\": \\"0\\",\\n    \\"DBInstanceId\\": \\"rm-***************\\",\\n    \\"DbInstType\\": \\"Primary\\",\\n    \\"Engine\\": \\"MySQL\\",\\n    \\"ReadOnlyInstances\\": {\\n      \\"ReadOnlyInstance\\": [\\n        {\\n          \\"ExpireTime\\": \\"1823487328173\\",\\n          \\"PayType\\": \\"Postpaid\\",\\n          \\"VersionAction\\": 0,\\n          \\"DBInstanceStatus\\": \\"1\\",\\n          \\"NetworkType\\": \\"VPC\\",\\n          \\"Port\\": 3306,\\n          \\"EngineVersion\\": \\"5.7\\",\\n          \\"DmInstanceId\\": \\"dm-*************\\",\\n          \\"ConnectUrl\\": \\"rm-bp1ub71ct9skc3yxx.mysql.rds.aliyuncs.com\\",\\n          \\"ReadWeight\\": 30,\\n          \\"RdsInstType\\": \\"RDS\\",\\n          \\"RemainDays\\": \\"0\\",\\n          \\"DBInstanceId\\": \\"rm-bp1ub71ct9skc****\\",\\n          \\"DbInstType\\": \\"RDS\\",\\n          \\"Engine\\": \\"MySQL\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsDbInstanceResponse>\\n    <Success>true</Success>\\n    <RequestId>4FE09970-CA69-4144-88CA-67FB4BTY56G3</RequestId>\\n    <DbInstance>\\n        <ExpireTime>12341434315</ExpireTime>\\n        <PayType>Postpaid</PayType>\\n        <DBInstanceStatus>1</DBInstanceStatus>\\n        <NetworkType>VPC</NetworkType>\\n        <Port>3306</Port>\\n        <EngineVersion>5.7</EngineVersion>\\n        <DmInstanceId>dm-*************</DmInstanceId>\\n        <ConnectUrl>rm-***************.mysql.rds.aliyuncs.com</ConnectUrl>\\n        <ReadWeight>70</ReadWeight>\\n        <RdsInstType>RDS</RdsInstType>\\n        <RemainDays>0</RemainDays>\\n        <DBInstanceId>rm-***************</DBInstanceId>\\n        <DbInstType>Primary</DbInstType>\\n        <Engine>MySQL</Engine>\\n        <ReadOnlyInstances>\\n            <ExpireTime>1823487328173</ExpireTime>\\n            <PayType>Postpaid</PayType>\\n            <VersionAction>0</VersionAction>\\n            <DBInstanceStatus>1</DBInstanceStatus>\\n            <NetworkType>VPC</NetworkType>\\n            <Port>3306</Port>\\n            <EngineVersion>5.7</EngineVersion>\\n            <DmInstanceId>dm-*************</DmInstanceId>\\n            <ConnectUrl>rm-bp1ub71ct9skc3yxx.mysql.rds.aliyuncs.com</ConnectUrl>\\n            <ReadWeight>30</ReadWeight>\\n            <RdsInstType>RDS</RdsInstType>\\n            <RemainDays>0</RemainDays>\\n            <DBInstanceId>rm-bp1ub71ct9skc****</DBInstanceId>\\n            <DbInstType>RDS</DbInstType>\\n            <Engine>MySQL</Engine>\\n        </ReadOnlyInstances>\\n    </DbInstance>\\n</DescribeDrdsDbInstanceResponse>","errorExample":""}]',
      'title' => '查询 RDS 存储实例详情',
      'summary' => '查询 DRDS 的 RDS 存储实例详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga1138****',
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
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B4F76641-BA45-4320-BE7C-9C62CFDAC9B2',
              ),
              'Data' => 
              array (
                'description' => '实例详情列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '实例类型，独享实例PRIVATE，共享实例PUBLIC。',
                    'type' => 'string',
                    'example' => 'PRIVATE',
                  ),
                  'Status' => 
                  array (
                    'description' => '实例状态。',
                    'type' => 'string',
                    'example' => 'RUN',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '实例创建的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1568620311000',
                  ),
                  'VersionAction' => 
                  array (
                    'description' => '实例版本可用操作。',
                    'type' => 'string',
                    'example' => 'Upgradeable',
                  ),
                  'StorageType' => 
                  array (
                    'description' => '存储实例类型。',
                    'type' => 'string',
                    'example' => 'RDS',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '网络类型，经典网络CLASSIC，VPC网络为VPC。',
                    'type' => 'string',
                    'example' => 'CLASSIC',
                  ),
                  'Label' => 
                  array (
                    'description' => '实例标签：

- **普通实例**： **NORMAL**

- **高可用实例**： **HA**

- **VPC实例**：**VPC**',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'MysqlVersion' => 
                  array (
                    'description' => '实例支持的MySQL版本。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'InstanceSpec' => 
                  array (
                    'description' => '实例规格。',
                    'type' => 'string',
                    'example' => 'drds.sn2.4c16g.8C32G',
                  ),
                  'VpcCloudInstanceId' => 
                  array (
                    'description' => 'VPC集群中的实例ID。',
                    'type' => 'string',
                    'example' => 'drdssen12****',
                  ),
                  'Description' => 
                  array (
                    'description' => '实例描述。',
                    'type' => 'string',
                    'example' => 'drds_test',
                  ),
                  'Version' => 
                  array (
                    'description' => '实例版本，目前为空。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExpireDate' => 
                  array (
                    'description' => '实例过期的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4724323200000',
                  ),
                  'MasterInstanceId' => 
                  array (
                    'description' => '主实例ID。

> 当实例类型为只读实例时，才会返回该参数。',
                    'type' => 'string',
                    'example' => 'drdssen1243as',
                  ),
                  'CommodityCode' => 
                  array (
                    'description' => '商品代码。',
                    'type' => 'string',
                    'example' => 'drdsPost',
                  ),
                  'MachineType' => 
                  array (
                    'description' => '实例机器类型，固定为**ecs**。',
                    'type' => 'string',
                    'example' => 'ecs',
                  ),
                  'InstanceSeries' => 
                  array (
                    'description' => '实例规格系列。',
                    'type' => 'string',
                    'example' => 'drds.sn2.4c16g',
                  ),
                  'ProductVersion' => 
                  array (
                    'description' => '产品版本。',
                    'type' => 'string',
                    'example' => '5.3.*',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID，可以为空。',
                    'type' => 'string',
                    'example' => 'NULL',
                  ),
                  'DrdsInstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'drdssen1243as',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-e',
                  ),
                  'InstRole' => 
                  array (
                    'description' => '实例角色，取值如下：

- **主实例**： MASTER
- **分析型只读实例**：SLAVE
- **并发型只读实例**：SLAVE_FLOW',
                    'type' => 'string',
                    'example' => 'MASTER',
                  ),
                  'OrderInstanceId' => 
                  array (
                    'description' => '购买的实例ID。',
                    'type' => 'string',
                    'example' => 'drdssen12****',
                  ),
                  'Vips' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Vip' => 
                      array (
                        'description' => 'VIP列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => 'VIP 类型，内网 intranet，外网 internet',
                              'type' => 'string',
                              'example' => 'intranet',
                            ),
                            'VpcId' => 
                            array (
                              'description' => 'VPC的ID。',
                              'type' => 'string',
                              'example' => 'vpc-bp**********',
                            ),
                            'VswitchId' => 
                            array (
                              'description' => '虚拟交换机的ID。',
                              'type' => 'string',
                              'example' => 'vsw-bp***********',
                            ),
                            'Dns' => 
                            array (
                              'description' => 'VIP绑定的域名。',
                              'type' => 'string',
                              'example' => 'drdssen1243as.drds.aliyuncs.com',
                            ),
                            'Port' => 
                            array (
                              'description' => 'VIP开放端口。',
                              'type' => 'string',
                              'example' => '3306',
                            ),
                            'ExpireDays' => 
                            array (
                              'description' => 'VIP过期剩余天数。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ReadOnlyDBInstanceIds' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ReadOnlyDBInstanceId' => 
                      array (
                        'description' => '只读实例ID列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '只读实例ID列表。',
                          'type' => 'string',
                          'example' => 'drdssen12****',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B4F76641-BA45-4320-BE7C-9C62CFDAC9B2\\",\\n  \\"Data\\": {\\n    \\"Type\\": \\"PRIVATE\\",\\n    \\"Status\\": \\"RUN\\",\\n    \\"CreateTime\\": 1568620311000,\\n    \\"VersionAction\\": \\"Upgradeable\\",\\n    \\"StorageType\\": \\"RDS\\",\\n    \\"NetworkType\\": \\"CLASSIC\\",\\n    \\"Label\\": \\"NORMAL\\",\\n    \\"MysqlVersion\\": 5,\\n    \\"InstanceSpec\\": \\"drds.sn2.4c16g.8C32G\\",\\n    \\"VpcCloudInstanceId\\": \\"drdssen12****\\",\\n    \\"Description\\": \\"drds_test\\",\\n    \\"Version\\": 0,\\n    \\"ExpireDate\\": 4724323200000,\\n    \\"MasterInstanceId\\": \\"drdssen1243as\\",\\n    \\"CommodityCode\\": \\"drdsPost\\",\\n    \\"MachineType\\": \\"ecs\\",\\n    \\"InstanceSeries\\": \\"drds.sn2.4c16g\\",\\n    \\"ProductVersion\\": \\"5.3.*\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ResourceGroupId\\": \\"NULL\\",\\n    \\"DrdsInstanceId\\": \\"drdssen1243as\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n    \\"InstRole\\": \\"MASTER\\",\\n    \\"OrderInstanceId\\": \\"drdssen12****\\",\\n    \\"Vips\\": {\\n      \\"Vip\\": [\\n        {\\n          \\"Type\\": \\"intranet\\",\\n          \\"VpcId\\": \\"vpc-bp**********\\",\\n          \\"VswitchId\\": \\"vsw-bp***********\\",\\n          \\"Dns\\": \\"drdssen1243as.drds.aliyuncs.com\\",\\n          \\"Port\\": \\"3306\\",\\n          \\"ExpireDays\\": 0\\n        }\\n      ]\\n    },\\n    \\"ReadOnlyDBInstanceIds\\": {\\n      \\"ReadOnlyDBInstanceId\\": [\\n        \\"drdssen12****\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsInstanceResponse>\\n    <Success>true</Success>\\n    <RequestId>B4F76641-BA45-4320-BE7C-9C62CFDAC9B2</RequestId>\\n    <Data>\\n        <Type>PRIVATE</Type>\\n        <Status>RUN</Status>\\n        <CreateTime>1568620311000</CreateTime>\\n        <VersionAction>Upgradeable</VersionAction>\\n        <StorageType>RDS</StorageType>\\n        <NetworkType>CLASSIC</NetworkType>\\n        <Label>NORMAL</Label>\\n        <MysqlVersion>5</MysqlVersion>\\n        <InstanceSpec>drds.sn2.4c16g.8C32G</InstanceSpec>\\n        <VpcCloudInstanceId>drdssen12****</VpcCloudInstanceId>\\n        <Description>drds_test</Description>\\n        <Version>0</Version>\\n        <ExpireDate>4724323200000</ExpireDate>\\n        <MasterInstanceId>drdssen1243as</MasterInstanceId>\\n        <CommodityCode>drdsPost</CommodityCode>\\n        <MachineType>ecs</MachineType>\\n        <InstanceSeries>drds.sn2.4c16g</InstanceSeries>\\n        <ProductVersion>5.3.*</ProductVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ResourceGroupId>NULL</ResourceGroupId>\\n        <DrdsInstanceId>drdssen1243as</DrdsInstanceId>\\n        <ZoneId>cn-hangzhou-e</ZoneId>\\n        <InstRole>MASTER</InstRole>\\n        <OrderInstanceId>drdssen12****</OrderInstanceId>\\n        <Vips>\\n            <Type>intranet</Type>\\n            <VpcId>vpc-bp**********</VpcId>\\n            <VswitchId>vsw-bp***********</VswitchId>\\n            <Dns>drdssen1243as.drds.aliyuncs.com</Dns>\\n            <Port>3306</Port>\\n            <ExpireDays>0</ExpireDays>\\n        </Vips>\\n        <ReadOnlyDBInstanceIds>drdssen12****</ReadOnlyDBInstanceIds>\\n    </Data>\\n</DescribeDrdsInstanceResponse>","errorExample":""}]',
      'title' => '查询 DRDS 实例详情',
      'summary' => '调用DescribeDrdsInstance接口查询实例详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsParams' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76006',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DescribeDrdsParams',
          ),
        ),
        2 => 
        array (
          'name' => 'ParamLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数级别，取值：
* **INSTANCE**：实例级别
* **DB**：数据库级别',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
          ),
        ),
        3 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '查询是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
              ),
              'List' => 
              array (
                'description' => '参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParamDefaultValue' => 
                    array (
                      'description' => '参数默认值。',
                      'type' => 'string',
                      'example' => '1000',
                    ),
                    'ParamLevel' => 
                    array (
                      'description' => '参数级别。',
                      'type' => 'string',
                      'example' => 'INSTANCE',
                    ),
                    'ParamName' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => '慢SQL阈值',
                    ),
                    'ParamType' => 
                    array (
                      'description' => '参数类型。',
                      'type' => 'string',
                      'example' => 'CONFIG',
                    ),
                    'ParamValue' => 
                    array (
                      'description' => '参数值。',
                      'type' => 'string',
                      'example' => '1000',
                    ),
                    'NeedRestart' => 
                    array (
                      'description' => '是否需要重启。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ParamRanges' => 
                    array (
                      'description' => '参数值区间。',
                      'type' => 'string',
                      'example' => '[1000-900000]',
                    ),
                    'DbName' => 
                    array (
                      'description' => '数据库名称。',
                      'type' => 'string',
                      'example' => 'drds_test',
                    ),
                    'ParamEnglishName' => 
                    array (
                      'description' => '参数英文名称。',
                      'type' => 'string',
                      'example' => 'SLOW_SQL_TIME',
                    ),
                    'ParamDesc' => 
                    array (
                      'description' => '参数描述。',
                      'type' => 'string',
                      'example' => '慢SQL阈值（单位：ms）',
                    ),
                    'ParamVariableName' => 
                    array (
                      'description' => '参数变量名称。',
                      'type' => 'string',
                      'example' => 'slowSqlTime',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\",\\n  \\"List\\": [\\n    {\\n      \\"ParamDefaultValue\\": \\"1000\\",\\n      \\"DbName\\": \\"drds_test\\",\\n      \\"ParamLevel\\": \\"INSTANCE\\",\\n      \\"ParamName\\": \\"慢SQL阈值\\",\\n      \\"ParamEnglishName\\": \\"SLOW_SQL_TIME\\",\\n      \\"ParamType\\": \\"CONFIG\\",\\n      \\"ParamValue\\": \\"1000\\",\\n      \\"ParamDesc\\": \\"慢SQL阈值（单位：ms）\\",\\n      \\"NeedRestart\\": true,\\n      \\"ParamVariableName\\": \\"slowSqlTime\\",\\n      \\"ParamRanges\\": \\"[1000-900000]\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsParamsReponse>\\n<RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n<List>\\n    <ParamRanges>[1000-900000]</ParamRanges>\\n    <ParamLevel>INSTANCE</ParamLevel>\\n    <ParamVariableName>slowSqlTime</ParamVariableName>\\n    <ParamEnglishName>SLOW_SQL_TIME</ParamEnglishName>\\n    <ParamValue>1000</ParamValue>\\n    <ParamDefaultValue>1000</ParamDefaultValue>\\n    <NeedRestart>true</NeedRestart>\\n    <DbName>drds_test</DbName>\\n    <ParamName>慢SQL阈值</ParamName>\\n    <ParamType>CONFIG</ParamType>\\n    <ParamDesc>慢SQL阈值（单位：ms）</ParamDesc>\\n</List>\\n<Success>true</Success>\\n</DescribeDrdsParamsReponse>","errorExample":""}]',
      'title' => '查询 DRDS 的参数列表',
      'summary' => '调用DescribeDrdsParams接口查询参数列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsTasks' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdsxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型。',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CD412DF7-F21D-44CE-88FF-ED24917174A8',
              ),
              'Tasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Task' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'State' => 
                        array (
                          'description' => '任务状态。',
                          'type' => 'string',
                          'example' => 'FAILED',
                        ),
                        'Content' => 
                        array (
                          'description' => '任务内容。',
                          'type' => 'string',
                          'example' => 'upgrade_instance',
                        ),
                        'Id' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '64148',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"CD412DF7-F21D-44CE-88FF-ED24917174A8\\",\\n  \\"Tasks\\": {\\n    \\"Task\\": [\\n      {\\n        \\"State\\": \\"FAILED\\",\\n        \\"Content\\": \\"upgrade_instance\\",\\n        \\"Id\\": 64148\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsTasksReponse>\\n<Tasks>\\n    <Task>\\n        <State>FAILED</State>\\n        <Content>upgrade_instance</Content>\\n        <Id>64148</Id>\\n    </Task>\\n</Tasks>\\n<RequestId>CD412DF7-F21D-44CE-88FF-ED24917174A8</RequestId>\\n<Success>true</Success>\\n</DescribeDrdsTasksReponse>","errorExample":""}]',
      'title' => '查询实例变更任务',
      'summary' => '调用DescribeDrdsTasks接口查询实例变更任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHotDbList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds**********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
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
              'Msg' => 
              array (
                'description' => '信息。',
                'type' => 'string',
                'example' => 'msg',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B6B7BDC-575D-4A77-A4F8-24B7EF******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RandomCode' => 
                  array (
                    'description' => '随机数。',
                    'type' => 'string',
                    'example' => 'jzhz',
                  ),
                  'List' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'InstanceDb' => 
                      array (
                        'description' => '列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InstanceName' => 
                            array (
                              'description' => '实例名称。',
                              'type' => 'string',
                              'example' => 'instanceName',
                            ),
                            'HotDbList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'data' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '热点库列表。',
                                    'type' => 'string',
                                    'example' => 'hot_dtstest0512_****_****',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"msg\\",\\n  \\"RequestId\\": \\"0B6B7BDC-575D-4A77-A4F8-24B7EF******\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RandomCode\\": \\"jzhz\\",\\n    \\"List\\": {\\n      \\"InstanceDb\\": [\\n        {\\n          \\"InstanceName\\": \\"instanceName\\",\\n          \\"HotDbList\\": {\\n            \\"data\\": [\\n              \\"hot_dtstest0512_****_****\\"\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeHotDbListReponse>\\n<Msg>msg</Msg>\\n<RequestId>0B6B7BDC-575D-4A77-A4F8-24B7EF******</RequestId>\\n<Data>\\n    <List>\\n        <InstanceDb>\\n            <InstanceName>instanceName</InstanceName>\\n        </InstanceDb>\\n        <InstanceDb>\\n            <HotDbList>\\n                <data>hot_dtstest0512_****_****</data>\\n            </HotDbList>\\n        </InstanceDb>\\n    </List>\\n    <RandomCode>jzhz</RandomCode>\\n</Data>\\n<Success>true</Success>\\n</DescribeHotDbListReponse>","errorExample":""}]',
      'title' => '查看热点扩容db列表',
      'summary' => '调用DescribeHotDbList接口查看热点扩容的数据库列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceSwitchAzone' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdsxxxxxxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-23ERW',
              ),
              'Result' => 
              array (
                'description' => '查询结果列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'OriginAzoneId' => 
                  array (
                    'description' => '源可用区ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-a',
                  ),
                  'SwitchAble' => 
                  array (
                    'description' => '是否可以切换可用区。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'TargetAzones' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TargetAzone' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '目标可用区。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-a,cn-hangzhou-b',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-23ERW\\",\\n  \\"Result\\": {\\n    \\"OriginAzoneId\\": \\"cn-hangzhou-a\\",\\n    \\"SwitchAble\\": true,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"TargetAzones\\": {\\n      \\"TargetAzone\\": [\\n        \\"cn-hangzhou-a,cn-hangzhou-b\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceSwitchAzoneReponse>\\n<RequestId>DSSDF-SEWE-23ERW</RequestId>\\n<Success>true</Success>\\n<Result>\\n    <OriginAzoneId>cn-hangzhou-a</OriginAzoneId>\\n    <TargetAzones>\\n        <TargetAzone>cn-hangzhou-a,cn-hangzhou-b</TargetAzone>\\n    </TargetAzones>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <SwitchAble>true</SwitchAble>\\n</Result>\\n</DescribeInstanceSwitchAzoneReponse>","errorExample":""}]',
      'title' => '查看是否切换可用区',
      'summary' => '调用DescribeInstanceSwitchAzone接口查看是否可以切换可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceSwitchNetwork' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '03E12FE3-1638-483E-A9B6-1A9120SER56T',
              ),
              'VpcInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'VpcInfo' => 
                  array (
                    'description' => '专有网络VPC详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'VpcId' => 
                        array (
                          'description' => '专有网络VPC的ID。',
                          'type' => 'string',
                          'example' => 'vpc_id',
                        ),
                        'VpcName' => 
                        array (
                          'description' => '专有网络VPC名称。',
                          'type' => 'string',
                          'example' => 'vpc_name',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'VswitchInfos' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'VswitchInfo' => 
                            array (
                              'description' => '交换机列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VpcId' => 
                                  array (
                                    'description' => '专有网络VPC的ID。',
                                    'type' => 'string',
                                    'example' => 'vpc_id',
                                  ),
                                  'DrdsSupported' => 
                                  array (
                                    'description' => '是否支持实例。',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'VswitchId' => 
                                  array (
                                    'description' => '交换机的ID。',
                                    'type' => 'string',
                                    'example' => 'vswitch_id',
                                  ),
                                  'AzoneId' => 
                                  array (
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-a',
                                  ),
                                  'VswitchName' => 
                                  array (
                                    'description' => '交换机的名称。',
                                    'type' => 'string',
                                    'example' => 'vswitch_name',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"03E12FE3-1638-483E-A9B6-1A9120SER56T\\",\\n  \\"VpcInfos\\": {\\n    \\"VpcInfo\\": [\\n      {\\n        \\"VpcId\\": \\"vpc_id\\",\\n        \\"VpcName\\": \\"vpc_name\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"VswitchInfos\\": {\\n          \\"VswitchInfo\\": [\\n            {\\n              \\"VpcId\\": \\"vpc_id\\",\\n              \\"DrdsSupported\\": true,\\n              \\"VswitchId\\": \\"vswitch_id\\",\\n              \\"AzoneId\\": \\"cn-hangzhou-a\\",\\n              \\"VswitchName\\": \\"vswitch_name\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>03E12FE3-1638-483E-A9B6-1A9120SER56T</RequestId>\\n<VpcInfos>\\n    <VpcInfo>\\n        <VpcId>vpc_id</VpcId>\\n        <VpcName>vpc_name</VpcName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <VswitchInfos>\\n            <VswitchInfo>\\n                <DrdsSupported>true</DrdsSupported>\\n                <VpcId>vpc_id</VpcId>\\n                <VswitchName>vswitch_name</VswitchName>\\n                <AzoneId>cn-hangzhou-a</AzoneId>\\n                <VswitchId>vswitch_id</VswitchId>\\n            </VswitchInfo>\\n        </VswitchInfos>\\n    </VpcInfo>\\n</VpcInfos>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询实例是否可以切换网络',
      'summary' => '调用DescribeInstanceSwitchNetwork查询实例是否可以切换网络。',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstDbLogInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5438952-70EE-4FA5-87A9-080DB0ASD45F',
              ),
              'LogTimeRange' => 
              array (
                'description' => '可查询时间。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportOldestTime' => 
                  array (
                    'description' => '结束时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1568367711',
                  ),
                  'SupportLatestTime' => 
                  array (
                    'description' => '开始时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1568267711',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"A5438952-70EE-4FA5-87A9-080DB0ASD45F\\",\\n  \\"LogTimeRange\\": {\\n    \\"SupportOldestTime\\": 1568367711,\\n    \\"SupportLatestTime\\": 1568267711\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A5438952-70EE-4FA5-87A9-080DB0ASD45F</RequestId>\\n<LogTimeRange>\\n    <SupportOldestTime>1568367711</SupportOldestTime>\\n    <SupportLatestTime>1568267711</SupportLatestTime>\\n</LogTimeRange>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询支持导入历史SQL数据时间范围',
      'summary' => '查询数据库支持导入历史SQL数据的时间范围。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePreCheckResult' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga76p6****',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4561',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DescribePreCheckResult',
              ),
              'PreCheckResult' => 
              array (
                'description' => '预检结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PreCheckName' => 
                  array (
                    'description' => '预检名称。',
                    'type' => 'string',
                    'example' => '是否有唯一键',
                  ),
                  'State' => 
                  array (
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => 'FAIL',
                  ),
                  'SubCheckItems' => 
                  array (
                    'description' => '子预检任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorMsgCode' => 
                        array (
                          'description' => '报错code。',
                          'type' => 'string',
                          'example' => '1004',
                        ),
                        'PreCheckItemName' => 
                        array (
                          'description' => '预检名称。',
                          'type' => 'string',
                          'example' => '唯一键',
                        ),
                        'State' => 
                        array (
                          'description' => '任务状态。',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'ErrorMsgParams' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '报错参数。',
                            'type' => 'string',
                            'example' => 'table1',
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
            'errorCode' => '%s',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DescribePreCheckResult\\",\\n  \\"PreCheckResult\\": {\\n    \\"PreCheckName\\": \\"是否有唯一键\\",\\n    \\"State\\": \\"FAIL\\",\\n    \\"SubCheckItems\\": [\\n      {\\n        \\"ErrorMsgCode\\": \\"1004\\",\\n        \\"PreCheckItemName\\": \\"唯一键\\",\\n        \\"State\\": \\"成功\\",\\n        \\"ErrorMsgParams\\": [\\n          \\"table1\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PreCheckResult>\\n    <State>FAIL</State>\\n    <PreCheckName>是否有唯一键</PreCheckName>\\n    <SubCheckItems>\\n        <PreCheckItemName>唯一键</PreCheckItemName>\\n        <State>成功</State>\\n        <ErrorMsgCode>1004</ErrorMsgCode>\\n        <ErrorMsgParams>table1</ErrorMsgParams>\\n    </SubCheckItems>\\n</PreCheckResult>\\n<RequestId>DescribePreCheckResult</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看预检结果',
      'summary' => '调用DescribePreCheckResult接口查看预检结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRdsCommodity' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品代码。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdsPost',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订单类型。',
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
              'Data' => 
              array (
                'description' => '结果。',
                'type' => 'string',
                'example' => 'test',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC3ABA3E-0F8A-4596-9104-F5155C34315B',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"test\\",\\n  \\"RequestId\\": \\"DC3ABA3E-0F8A-4596-9104-F5155C34315B\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC3ABA3E-0F8A-4596-9104-F5155C34315B</RequestId>\\n<Data>test</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看RDS售卖数据',
      'summary' => '调用DescribeRdsCommodity接口查询存储层售卖数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveDrdsInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ReleasePrepayInstance',
            'errorMessage' => 'The pay type of this drds instance is prepay',
          ),
          1 => 
          array (
            'errorCode' => 'RemoveDrdsDBFirst',
            'errorMessage' => 'There are Drds DB exist in this instance. Please delete drds db first',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ERR_INSTANCE_RELEASE_ALREADY',
            'errorMessage' => '实例已释放',
          ),
          1 => 
          array (
            'errorCode' => 'ERR_INSTANCE_CAN_NOT_RELEASE',
            'errorMessage' => '实例暂时无法释放',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveDrdsInstanceResponse>\\n<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Success>true</Success>\\n</RemoveDrdsInstanceResponse>","errorExample":""}]',
      'title' => '释放目标实例',
      'summary' => '调用RemoveDrdsInstance接口释放目标实例。',
      'description' => '> * 只能释放按量付费（后付费）实例。
* 实例处于变配中或关联有数据库时，无法调用本接口释放实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDrdsDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbgal154****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testdb',
          ),
        ),
        2 => 
        array (
          'name' => 'Encode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库所用编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'utf8',
            'default' => 'utf8mb4',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库访问密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_sample_password',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '库的拆分方式。取值范围如下：

- **HORIZONTAL**：表示水平拆分，即通常所说的分库分表方式。
- **VERTICAL**：表示垂直拆分。',
            'type' => 'string',
            'required' => false,
            'example' => 'HORIZONTAL',
            'default' => 'HORIZONTAL',
          ),
        ),
        5 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '挂载的存储类型，目前仅支持RDS。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
            'default' => 'RDS',
          ),
        ),
        6 => 
        array (
          'name' => 'DbInstanceIsCreating',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '建库所涉及的RDS是否正在创建中。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数仅在垂直拆分时使用。
参数表示垂直拆分场景下，拥有所有RDS上相应数据库访问权限的一个账号名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_sample_account',
          ),
        ),
        8 => 
        array (
          'name' => 'RdsInstance',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '该参数仅在水平拆分时必填，参数是一个符合JSON数组格式的字符串。',
              'type' => 'string',
              'required' => false,
              'example' => '["drds_sample_rds_id1", "drds_sample_rds_id2"]',
            ),
            'required' => false,
            'example' => '["drds_sample_rds_id1", "drds_sample_rds_id2"]',
            'maxItems' => 1000,
          ),
        ),
        9 => 
        array (
          'name' => 'RdsSuperAccount',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS超级账户信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Password' => 
                array (
                  'description' => 'RDS超级账号密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'drds_sample_rds_super_password',
                ),
                'DbInstanceId' => 
                array (
                  'description' => 'RDS实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'drds_sample_rds_id',
                ),
                'AccountName' => 
                array (
                  'description' => 'RDS超级账号名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'drds_sample_rds_super_account',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        10 => 
        array (
          'name' => 'InstDbName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据库列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DbInstanceId' => 
                array (
                  'description' => '需要垂直拆分的RDS ID，该参数仅在垂直拆分时使用。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'drds_sample_rds_id',
                ),
                'ShardDbName' => 
                array (
                  'description' => '拆分数据库列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '参数表示对应RDS实例中需要垂直拆分的数据库列表，参数是一个符合JSON数组格式的字符串。
该参数仅在垂直拆分时使用。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '["db1", "db2"]',
                  ),
                  'required' => false,
                  'example' => '["drds_sample_db1", "drds_sample_db2"]',
                  'maxItems' => 30,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'FF13E47D-4E38-4A5A-BA68-32A554AD45T6',
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
            'errorCode' => 'InvalidInstance.CreateDbForSlave',
            'errorMessage' => 'Db Creation in slave drds instance not support.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.InstDbName',
            'errorMessage' => 'The parameter InstDbName is empty',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FF13E47D-4E38-4A5A-BA68-32A554AD45T6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDrdsDBResponse>\\n    <Success>true</Success>\\n    <RequestId>FF13E47D-4E38-4A5A-BA68-32A554AD45T6</RequestId>\\n</CreateDrdsDBResponse>","errorExample":""}]',
      'title' => '创建数据库实例',
      'summary' => '创建DRDS数据库。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDBs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga1138****',
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
            'description' => '每页记录数，取值为**30**、**50**或**100**。

默认值为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '1000',
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
            'type' => 'object',
            'properties' => 
            array (
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'string',
                'example' => '30',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '006B7D19-8CDB-4AA6-AAE7-23C107GS3W2T',
              ),
              'Total' => 
              array (
                'description' => '数据库列表的总数量。',
                'type' => 'string',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Db' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '数据库状态。',
                          'type' => 'string',
                          'example' => 'NORMAL',
                        ),
                        'DbName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'drds_test',
                        ),
                        'Schema' => 
                        array (
                          'description' => '系统为拆分后的数据库分配的schema ID。',
                          'type' => 'string',
                          'example' => 'drds_test_1563773871118kxqd',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '数据库创建时间，格式为Unix时间戳，单位为毫秒。',
                          'type' => 'string',
                          'example' => '1563773824000',
                        ),
                        'Mode' => 
                        array (
                          'description' => '数据库拆分模式，取值范围如下：
* **HORIZONTAL**：水平拆分
* **VERTICAL**：垂直拆分',
                          'type' => 'string',
                          'example' => 'HORIZONTAL',
                        ),
                        'DbInstType' => 
                        array (
                          'description' => '数据库类型，取值为**RDS**或**POLARDB**。',
                          'type' => 'string',
                          'example' => 'RDS',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": \\"30\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"RequestId\\": \\"006B7D19-8CDB-4AA6-AAE7-23C107GS3W2T\\",\\n  \\"Total\\": \\"1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Db\\": [\\n      {\\n        \\"Status\\": \\"NORMAL\\",\\n        \\"DbName\\": \\"drds_test\\",\\n        \\"Schema\\": \\"drds_test_1563773871118kxqd\\",\\n        \\"CreateTime\\": \\"1563773824000\\",\\n        \\"Mode\\": \\"HORIZONTAL\\",\\n        \\"DbInstType\\": \\"RDS\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsDBsResponse>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <RequestId>006B7D19-8CDB-4AA6-AAE7-23C107GS3W2T</RequestId>\\n    <Total>1</Total>\\n    <Success>true</Success>\\n    <Data>\\n        <Status>NORMAL</Status>\\n        <DbName>drds_test</DbName>\\n        <Schema>drds_test_1563773871118kxqd</Schema>\\n        <CreateTime>1563773824000</CreateTime>\\n        <Mode>HORIZONTAL</Mode>\\n        <DbInstType>RDS</DbInstType>\\n    </Data>\\n</DescribeDrdsDBsResponse>","errorExample":""}]',
      'title' => '查看实例下的数据库列表',
      'summary' => '调用DescribeDrdsDBs接口查看实例下的数据库详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDB' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'db_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '58FB0EC7-CF71-4E48-92FB-CF070D******',
              ),
              'Data' => 
              array (
                'description' => '数据库详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '数据库状态，取值范围如下：
* **TO_BE_INIT**：创建中
* **NORMAL**：运行中',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'DbName' => 
                  array (
                    'description' => '数据库名称。',
                    'type' => 'string',
                    'example' => 'db_test',
                  ),
                  'Schema' => 
                  array (
                    'description' => '数据库物理名。',
                    'type' => 'string',
                    'example' => 'db_test*******************',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '数据库创建的时间点，格式为Unix时间戳，单位为毫秒（ms）。',
                    'type' => 'string',
                    'example' => '1602050276000',
                  ),
                  'Mode' => 
                  array (
                    'description' => '数据库拆分方式，取值范围如下：
* **HORIZONTAL**：水平拆分
* **VERTICAL**：垂直拆分',
                    'type' => 'string',
                    'example' => 'HORIZONTAL',
                  ),
                  'DbInstType' => 
                  array (
                    'description' => '数据库的存储类型。',
                    'type' => 'string',
                    'example' => 'RDS',
                  ),
                  'InstRole' => 
                  array (
                    'description' => '数据库所属的实例类型，取值范围如下：
* **MASTER**：主实例
* **SLAVE**：只读实例',
                    'type' => 'string',
                    'example' => 'MASTER',
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
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"58FB0EC7-CF71-4E48-92FB-CF070D******\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"DbName\\": \\"db_test\\",\\n    \\"Schema\\": \\"db_test*******************\\",\\n    \\"CreateTime\\": \\"1602050276000\\",\\n    \\"Mode\\": \\"HORIZONTAL\\",\\n    \\"DbInstType\\": \\"RDS\\",\\n    \\"InstRole\\": \\"MASTER\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>58FB0EC7-CF71-4E48-92FB-CF070D******</RequestId>\\n<Data>\\n    <Status>NORMAL</Status>\\n    <DbInstType>RDS</DbInstType>\\n    <InstRole>MASTER</InstRole>\\n    <Schema>db_test*******************</Schema>\\n    <Mode>HORIZONTAL</Mode>\\n    <CreateTime>1602050276000</CreateTime>\\n    <DbName>db_test</DbName>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看实例下的数据库详情',
      'summary' => '调用DescribeDrdsDB接口查询实例下的数据库详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDbInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbga1138****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbname',
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
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '20',
          ),
        ),
      ),
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
                'description' => '每页大小。',
                'type' => 'string',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
              ),
              'Total' => 
              array (
                'description' => 'RDS主实例总数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DbInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstance' => 
                  array (
                    'description' => '数据库下的存储实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExpireTime' => 
                        array (
                          'description' => '存储实例过期时间。',
                          'type' => 'string',
                          'example' => '1237486127634',
                        ),
                        'PayType' => 
                        array (
                          'description' => '付费类型。',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '- 0：创建中
- 1：运行中
- 3：删除中
- 5：重启中
- 6：升降级中
- 7：备份中
- 8：内外网切换中
- 9：迁移中
- 11：迁移数据中
- 12：生成灾备实例中
- 13：数据导入中
- 14：从其他 RDS 实例导入数据中
- 15：容灾切换中
- 16：创建临时实例中
- 17：网络创建中
- 18：实例克隆中
- 19：链路切换中
- 20：只读实例迁移中',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '网络类型。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Port' => 
                        array (
                          'description' => '端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3306',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '存储引擎版本，比如RDS for MySQL的5.7、5.6、5.5。',
                          'type' => 'string',
                          'example' => '5.7',
                        ),
                        'DmInstanceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'dm-hbgau1zp****',
                        ),
                        'ConnectUrl' => 
                        array (
                          'description' => '存储实例的链接地址，调用对应存储（比如RDS）接口返回的链接地址。',
                          'type' => 'string',
                          'example' => 'rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com',
                        ),
                        'ReadWeight' => 
                        array (
                          'description' => '在数据库中的读写权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'RdsInstType' => 
                        array (
                          'description' => '是RDS主实例还是只读实例。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'RemainDays' => 
                        array (
                          'description' => '预付费实例剩余过期天数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '存储实例ID。',
                          'type' => 'string',
                          'example' => 'rm-bp1t1mk5a5bdj****',
                        ),
                        'DbInstType' => 
                        array (
                          'description' => '存储实例类型，仅支持RDS。',
                          'type' => 'string',
                          'example' => 'RDS',
                        ),
                        'Engine' => 
                        array (
                          'description' => '存储引擎，比如RDS的MySQL。',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'ReadOnlyInstances' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReadOnlyInstance' => 
                            array (
                              'description' => '存储实例的只读实例列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ExpireTime' => 
                                  array (
                                    'description' => '存储实例过期时间戳。',
                                    'type' => 'string',
                                    'example' => '123421352351234',
                                  ),
                                  'PayType' => 
                                  array (
                                    'description' => '付费类型。',
                                    'type' => 'string',
                                    'example' => 'Postpaid',
                                  ),
                                  'DBInstanceStatus' => 
                                  array (
                                    'description' => '存储实例状态。',
                                    'type' => 'string',
                                    'example' => '1',
                                  ),
                                  'NetworkType' => 
                                  array (
                                    'description' => '实例网络类型。',
                                    'type' => 'string',
                                    'example' => 'VPC',
                                  ),
                                  'Port' => 
                                  array (
                                    'description' => '实例访问端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '3306',
                                  ),
                                  'EngineVersion' => 
                                  array (
                                    'description' => '存储实例引擎版本。',
                                    'type' => 'string',
                                    'example' => '5.7',
                                  ),
                                  'DmInstanceId' => 
                                  array (
                                    'description' => '资源ID。',
                                    'type' => 'string',
                                    'example' => 'dm-hbgau1zp****',
                                  ),
                                  'ConnectUrl' => 
                                  array (
                                    'description' => '存储实例的链接地址，调用对应存储（比如RDS）接口返回的链接地址。',
                                    'type' => 'string',
                                    'example' => 'rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com',
                                  ),
                                  'ReadWeight' => 
                                  array (
                                    'description' => '实例读写比例。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '70',
                                  ),
                                  'RdsInstType' => 
                                  array (
                                    'description' => '实例类型。',
                                    'type' => 'string',
                                    'example' => 'RDS',
                                  ),
                                  'InstanceName' => 
                                  array (
                                    'description' => '保留字段。',
                                    'type' => 'string',
                                    'example' => '**',
                                  ),
                                  'RemainDays' => 
                                  array (
                                    'description' => '实例过期剩余天数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'DbInstType' => 
                                  array (
                                    'description' => '存储实例类型。',
                                    'type' => 'string',
                                    'example' => 'RDS',
                                  ),
                                  'Engine' => 
                                  array (
                                    'description' => '存储实例引擎。',
                                    'type' => 'string',
                                    'example' => 'MySQL',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": \\"10\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\",\\n  \\"Total\\": \\"1\\",\\n  \\"Success\\": true,\\n  \\"DbInstances\\": {\\n    \\"DbInstance\\": [\\n      {\\n        \\"ExpireTime\\": \\"1237486127634\\",\\n        \\"PayType\\": \\"PostPaid\\",\\n        \\"DBInstanceStatus\\": \\"1\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"Port\\": 3306,\\n        \\"EngineVersion\\": \\"5.7\\",\\n        \\"DmInstanceId\\": \\"dm-hbgau1zp****\\",\\n        \\"ConnectUrl\\": \\"rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com\\",\\n        \\"ReadWeight\\": 30,\\n        \\"RdsInstType\\": \\"Primary\\",\\n        \\"RemainDays\\": 0,\\n        \\"DBInstanceId\\": \\"rm-bp1t1mk5a5bdj****\\",\\n        \\"DbInstType\\": \\"RDS\\",\\n        \\"Engine\\": \\"MySQL\\",\\n        \\"ReadOnlyInstances\\": {\\n          \\"ReadOnlyInstance\\": [\\n            {\\n              \\"ExpireTime\\": \\"123421352351234\\",\\n              \\"PayType\\": \\"Postpaid\\",\\n              \\"DBInstanceStatus\\": \\"1\\",\\n              \\"NetworkType\\": \\"VPC\\",\\n              \\"Port\\": 3306,\\n              \\"EngineVersion\\": \\"5.7\\",\\n              \\"DmInstanceId\\": \\"dm-hbgau1zp****\\",\\n              \\"ConnectUrl\\": \\"rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com\\",\\n              \\"ReadWeight\\": 70,\\n              \\"RdsInstType\\": \\"RDS\\",\\n              \\"InstanceName\\": \\"**\\",\\n              \\"RemainDays\\": 0,\\n              \\"DbInstType\\": \\"RDS\\",\\n              \\"Engine\\": \\"MySQL\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsDbInstancesResponse>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n    <Total>1</Total>\\n    <Success>true</Success>\\n    <DbInstances>\\n        <ExpireTime>1237486127634</ExpireTime>\\n        <PayType>PostPaid</PayType>\\n        <DBInstanceStatus>1</DBInstanceStatus>\\n        <NetworkType>VPC</NetworkType>\\n        <Port>3306</Port>\\n        <EngineVersion>5.7</EngineVersion>\\n        <DmInstanceId>dm-hbgau1zp****</DmInstanceId>\\n        <ConnectUrl>rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com</ConnectUrl>\\n        <ReadWeight>30</ReadWeight>\\n        <RdsInstType>Primary</RdsInstType>\\n        <RemainDays>0</RemainDays>\\n        <DBInstanceId>rm-bp1t1mk5a5bdj****</DBInstanceId>\\n        <DbInstType>RDS</DbInstType>\\n        <Engine>MySQL</Engine>\\n        <ReadOnlyInstances>\\n            <ExpireTime>123421352351234</ExpireTime>\\n            <PayType>Postpaid</PayType>\\n            <DBInstanceStatus>1</DBInstanceStatus>\\n            <NetworkType>VPC</NetworkType>\\n            <Port>3306</Port>\\n            <EngineVersion>5.7</EngineVersion>\\n            <DmInstanceId>dm-hbgau1zp****</DmInstanceId>\\n            <ConnectUrl>rm-bp1t1mk5a5b******.mysql.rds.aliyuncs.com</ConnectUrl>\\n            <ReadWeight>70</ReadWeight>\\n            <RdsInstType>RDS</RdsInstType>\\n            <InstanceName>**</InstanceName>\\n            <RemainDays>0</RemainDays>\\n            <DbInstType>RDS</DbInstType>\\n            <Engine>MySQL</Engine>\\n        </ReadOnlyInstances>\\n    </DbInstances>\\n</DescribeDrdsDbInstancesResponse>","errorExample":""}]',
      'title' => '查询数据库 RDS 列表',
      'summary' => '查询 DRDS 数据库下面的 RDS 列表。',
      'description' => '查询 DRDS 数据库下面的 RDS 主实例列表，每个 RDS 主实例的 ReadOnlyInstances 属性是该 RDS 在当前数据库中使用的 RDS 只读实例列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDbRdsNameList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'drdsxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7E6FA2BF-05F2-44DD-95C0-D1B5B8xxxxxx',
              ),
              'InstanceNameList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceName' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '存储实例ID列表。',
                      'type' => 'string',
                      'example' => 'rm-bpxxxxxxxxxxxxxxx',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"7E6FA2BF-05F2-44DD-95C0-D1B5B8xxxxxx\\",\\n  \\"InstanceNameList\\": {\\n    \\"InstanceName\\": [\\n      \\"rm-bpxxxxxxxxxxxxxxx\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsDbRdsNameList>\\n\\t<RequestId>37537B38-A663-45CB-A81F-E3B202BB2415</RequestId>\\n\\t<InstanceNameList>\\n\\t\\t<InstanceName>rm-m5xxxxxxxxx82</InstanceName>\\n\\t</InstanceNameList>\\n\\t<Success>true</Success>\\n</DescribeDrdsDbRdsNameList>\\t","errorExample":""}]',
      'title' => '查询 DRDS 数据库存储实例列表',
      'summary' => '调用DescribeDrdsDbRdsNameList接口查询存储实例列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsShardingDbs' => 
    array (
      'summary' => '调用DescribeDrdsShardingDbs接口查询PolarDB-X下的水平拆分数据库。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB-X的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbgaf3c63qbo',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB-X实例的数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库匹配格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。',
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
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '509BDE17-505A-4B3B-854D-30D3F092502F',
              ),
              'ShardingDbs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ShardingDb' => 
                  array (
                    'description' => '返回结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MinPoolSize' => 
                        array (
                          'description' => '连接池最小个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'MaxPoolSize' => 
                        array (
                          'description' => '连接池最大个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'DbInstanceId' => 
                        array (
                          'description' => 'RDS实例ID。',
                          'type' => 'string',
                          'example' => 'rm-bp1hjzn0yv5j2****',
                        ),
                        'ConnectUrl' => 
                        array (
                          'description' => '连接url。',
                          'type' => 'string',
                          'example' => '100.100.64.100:11569',
                        ),
                        'GroupName' => 
                        array (
                          'description' => '物理分片名称。',
                          'type' => 'string',
                          'example' => 'TEMP1_1568171495522SABE_KUP4_0000',
                        ),
                        'DbType' => 
                        array (
                          'description' => '数据库类型。',
                          'type' => 'string',
                          'example' => 'mysql',
                        ),
                        'IdleTimeOut' => 
                        array (
                          'description' => '空闲超时时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'ShardingDbName' => 
                        array (
                          'description' => '物理分库名。',
                          'type' => 'string',
                          'example' => 'temp1_zhk1_0000',
                        ),
                        'BlockingTimeout' => 
                        array (
                          'description' => '控制事务为获取锁而需要等待的时长。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5000',
                        ),
                        'PreparedStatementCacheSize' => 
                        array (
                          'description' => '结果缓存大小。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ConnectionProperties' => 
                        array (
                          'description' => '连接串属性。',
                          'type' => 'string',
                          'example' => 'connectTimeout=3000;autoReconnect=true;failOverReadOnly=false;socketTimeout=900000;rewriteBatchedStatements=true;characterEncoding=utf8',
                        ),
                        'UserName' => 
                        array (
                          'description' => '连接RDS的用户名。',
                          'type' => 'string',
                          'example' => 'pg284mi8',
                        ),
                        'DbStatus' => 
                        array (
                          'description' => '数据库状态。',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数。',
                'type' => 'string',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'string',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '返回的列表总数量。',
                'type' => 'string',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
          1 => 
          array (
            'errorCode' => 'ServiceUnable',
            'errorMessage' => 'The service is not available now, please try again later',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Mismatch',
            'errorMessage' => 'The specified parameter does not match.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDbname.MalFormed',
            'errorMessage' => 'The specified db name does not match.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"509BDE17-505A-4B3B-854D-30D3F092502F\\",\\n  \\"ShardingDbs\\": {\\n    \\"ShardingDb\\": [\\n      {\\n        \\"MinPoolSize\\": 5,\\n        \\"MaxPoolSize\\": 60,\\n        \\"DbInstanceId\\": \\"rm-bp1hjzn0yv5j2****\\",\\n        \\"ConnectUrl\\": \\"100.100.64.100:11569\\",\\n        \\"GroupName\\": \\"TEMP1_1568171495522SABE_KUP4_0000\\",\\n        \\"DbType\\": \\"mysql\\",\\n        \\"IdleTimeOut\\": 30,\\n        \\"ShardingDbName\\": \\"temp1_zhk1_0000\\",\\n        \\"BlockingTimeout\\": 5000,\\n        \\"PreparedStatementCacheSize\\": 0,\\n        \\"ConnectionProperties\\": \\"connectTimeout=3000;autoReconnect=true;failOverReadOnly=false;socketTimeout=900000;rewriteBatchedStatements=true;characterEncoding=utf8\\",\\n        \\"UserName\\": \\"pg284mi8\\",\\n        \\"DbStatus\\": \\"running\\"\\n      }\\n    ]\\n  },\\n  \\"PageNumber\\": \\"1\\",\\n  \\"PageSize\\": \\"20\\",\\n  \\"Total\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsShardingDbsResponse>\\n    <Success>true</Success>\\n    <RequestId>509BDE17-505A-4B3B-854D-30D3F092502F</RequestId>\\n    <ShardingDbs>\\n        <MinPoolSize>5</MinPoolSize>\\n        <MaxPoolSize>60</MaxPoolSize>\\n        <DbInstanceId>rm-bp1hjzn0yv5j2****</DbInstanceId>\\n        <ConnectUrl>100.100.64.100:11569</ConnectUrl>\\n        <GroupName>TEMP1_1568171495522SABE_KUP4_0000</GroupName>\\n        <DbType>mysql</DbType>\\n        <IdleTimeOut>30</IdleTimeOut>\\n        <ShardingDbName>temp1_zhk1_0000</ShardingDbName>\\n        <BlockingTimeout>5000</BlockingTimeout>\\n        <PreparedStatementCacheSize>0</PreparedStatementCacheSize>\\n        <ConnectionProperties>connectTimeout=3000;autoReconnect=true;failOverReadOnly=false;socketTimeout=900000;rewriteBatchedStatements=true;characterEncoding=utf8</ConnectionProperties>\\n        <UserName>pg284mi8</UserName>\\n        <DbStatus>running</DbStatus>\\n    </ShardingDbs>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>1</Total>\\n</DescribeDrdsShardingDbsResponse>","errorExample":""}]',
      'title' => '查询DRDS下水平拆分数据库',
    ),
    'CheckDrdsDbName' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 实例 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'drds********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 数据库名',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => 'CF38538C-68BD-4278-B58F-EDE96F******',
              ),
              'Result' => 
              array (
                'description' => '检查结果。true：数据库名合法， false：数据库名不合法',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'InvalidDbName.Empty',
            'errorMessage' => 'DbName can not be empty',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbName.Keyword',
            'errorMessage' => 'Current DbName is the keyword',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbName.DuplicatedInPublic',
            'errorMessage' => 'Current DbName is duplicated in public instance',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidDbName.Duplicated',
            'errorMessage' => 'Current DbName provided has already existed in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CF38538C-68BD-4278-B58F-EDE96F******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Result>true</Result>\\n<RequestId>CF38538C-68BD-4278-B58F-EDE96F******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '检查DRDS的数据库名是否合法',
      'summary' => '调用CheckDrdsDbName接口检查DRDS的数据库名是否合法。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveDrdsDbFailedRecord' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
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
                'example' => 'D98BC610-5A91-453A-BC44-5873EF******',
              ),
              'Result' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。',
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
            'errorCode' => 'InvalidDbName.Empty',
            'errorMessage' => 'DbName can not be empty',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D98BC610-5A91-453A-BC44-5873EF******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D98BC610-5A91-453A-BC44-5873EF******</RequestId>\\n<Success>true</Success>\\n<Result>true</Result>","errorExample":""}]',
      'title' => '删除建库失败记录',
      'summary' => '调用RemoveDrdsDbFailedRecord接口删除建库失败记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveDrdsDb' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库所属的DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库名称。',
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
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B12FC174-D5CE-4A6E-83C1-0F8F86******',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B12FC174-D5CE-4A6E-83C1-0F8F86******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B12FC174-D5CE-4A6E-83C1-0F8F86******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除数据库',
      'summary' => '删除DRDS下面的数据库。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyRdsReadWeight' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RDS实例列表，多个列表间用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => 'rm-****************,rm-****************',
          ),
        ),
        3 => 
        array (
          'name' => 'Weights',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RDS各个实例对应的权重值，多个权重间用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '14,86',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'B12FC174-D5CE-4A6E-83C1-0F8F86******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidDbName',
            'errorMessage' => 'The dbName does not exist in this drds instance',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ReadWeighAndRdsNotMapping',
            'errorMessage' => 'The parameter read weight and rds instance not mapping',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidReadWeight',
            'errorMessage' => 'The parameter read weight is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B12FC174-D5CE-4A6E-83C1-0F8F86******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B12FC174-D5CE-4A6E-83C1-0F8F86******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '修改RDS实例的读写权重',
      'summary' => '调用ModifyRdsReadWeight接口修改RDS实例的读写权重。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRdsPerformanceSummary' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'RdsInstanceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS实例列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'rm-*****************',
            'maxItems' => 100,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '当前API是否请求成功

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B6876277-ECFD-4658-AC1E-A7FAD8******',
              ),
              'RdsPerformanceInfos' => 
              array (
                'description' => '对象集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Cpu' => 
                    array (
                      'description' => 'RDS的CPU使用情况。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.26',
                    ),
                    'ActiveSessions' => 
                    array (
                      'description' => '当前RDS实例活跃会话数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'TotalSessions' => 
                    array (
                      'description' => '当前RDS会话总数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '162',
                    ),
                    'RdsId' => 
                    array (
                      'description' => 'RDS实例ID。',
                      'type' => 'string',
                      'example' => 'rm-**************',
                    ),
                    'Iops' => 
                    array (
                      'description' => 'RDS的IOPS数据。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '17.62',
                    ),
                    'SpaceUsage' => 
                    array (
                      'description' => 'RDS的磁盘使用量，单位为MB。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4145144777',
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
            'errorCode' => '%s',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B6876277-ECFD-4658-AC1E-A7FAD8******\\",\\n  \\"RdsPerformanceInfos\\": [\\n    {\\n      \\"Cpu\\": 0.26,\\n      \\"ActiveSessions\\": 0,\\n      \\"TotalSessions\\": 162,\\n      \\"RdsId\\": \\"rm-**************\\",\\n      \\"Iops\\": 17.62,\\n      \\"SpaceUsage\\": 4145144777\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B6876277-ECFD-4658-AC1E-A7FAD8******</RequestId>\\n<RdsPerformanceInfos>\\n    <TotalSessions>162</TotalSessions>\\n    <SpaceUsage>4145144777</SpaceUsage>\\n    <Cpu>0.26</Cpu>\\n    <Iops>17.62</Iops>\\n    <RdsId>rm-**************</RdsId>\\n    <ActiveSessions>0</ActiveSessions>\\n</RdsPerformanceInfos>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询RDS性能（如CPU）详情',
      'summary' => '调用DescribeRdsPerformanceSummary接口查询RDS性能（如CPU）详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRdsSuperAccountInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例类型，默认值为**RDS**。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
            'default' => 'RDS',
          ),
        ),
        2 => 
        array (
          'name' => 'RdsInstance',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'RDS实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => '[\'rm-*****************\',\'rm-*****************\']',
            'maxItems' => 30,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D64DE5944A1E541E0******',
              ),
              'DbInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstance' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '高权限账号集合对象。',
                      'type' => 'string',
                      'example' => 'rm-*****************',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D64DE5944A1E541E0******\\",\\n  \\"DbInstances\\": {\\n    \\"DbInstance\\": [\\n      \\"rm-*****************\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4DFD4978-FA5F-4C3C-A30D-AD4D164AD674</RequestId>\\n<DbInstances>\\n</DbInstances>","errorExample":""}]',
      'title' => '获取RDS高权限账号',
      'summary' => '调用DescribeRdsSuperAccountInstances获取RDS高权限账号。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDBCluster' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB集群ID。',
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
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '60A77FD6-0DE4-4A34-B6FB-9C2673******',
              ),
              'DbInstance' => 
              array (
                'description' => 'PolarDB的实例信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ExpireTime' => 
                  array (
                    'description' => 'PolarDB实例过期时间。',
                    'type' => 'string',
                    'example' => '2019-09-27 11:22:33',
                  ),
                  'PayType' => 
                  array (
                    'description' => 'PolarDB实例购买类型。',
                    'type' => 'string',
                    'example' => 'Postpaid',
                  ),
                  'DBInstanceStatus' => 
                  array (
                    'description' => 'PolarDB实例状态。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => 'PolarDB实例网络类型。',
                    'type' => 'string',
                    'example' => 'VPC',
                  ),
                  'Port' => 
                  array (
                    'description' => 'PolarDB访问端口。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3306',
                  ),
                  'EngineVersion' => 
                  array (
                    'description' => 'DRDS数据库存储引擎版本。',
                    'type' => 'string',
                    'example' => '8.0',
                  ),
                  'RdsInstType' => 
                  array (
                    'description' => 'RDS实例类型，PolarDB集群不支持该参数。',
                    'type' => 'string',
                    'example' => 'ignore',
                  ),
                  'RemainDays' => 
                  array (
                    'description' => 'PolarDB实例剩余天数。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'DBInstanceId' => 
                  array (
                    'description' => 'PolarDB集群ID。',
                    'type' => 'string',
                    'example' => 'pc-*****************',
                  ),
                  'DbInstType' => 
                  array (
                    'description' => 'DRDS数据库存储类型。',
                    'type' => 'string',
                    'example' => 'POLARDB',
                  ),
                  'Engine' => 
                  array (
                    'description' => 'DRDS数据库存储引擎类型。',
                    'type' => 'string',
                    'example' => 'POLARDB',
                  ),
                  'ReadMode' => 
                  array (
                    'description' => '数据库存储类型为PolarDB时，DRDS的读流量配置模式。

取值范围如下：
* **DEFAULT**： 默认模式（即读流量全部发往PolarDB读写节点）。
* **CUSTOM**： 用户自定义模式（即您可以自定义流量发往读写节点和只读节点的配比）。
* **BALANCE**：读均衡模式（读流量由PolarDB集群的读负载模块自动分配，也可以理解为读流量均衡分配到各个节点）。',
                    'type' => 'string',
                    'example' => 'CUSTOM',
                  ),
                  'Endpoints' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Endpoint' => 
                      array (
                        'description' => 'DRDS管理的PolarDB读写分离连接地址。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReadWeight' => 
                            array (
                              'description' => 'DRDS数据库管理的该连接地址的读比例。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '85',
                            ),
                            'EndpointId' => 
                            array (
                              'description' => 'PolarDB连接地址ID。',
                              'type' => 'string',
                              'example' => 'pe-*****************',
                            ),
                            'NodeIds' => 
                            array (
                              'description' => 'PolarDB连接地址下的节点ID列表，多个节点间用英文逗号（,）隔开。',
                              'type' => 'string',
                              'example' => 'pi-*****************,pi-*****************',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'DBNodes' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DBNode' => 
                      array (
                        'description' => 'PolarDB集群中的节点信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DBNodeRole' => 
                            array (
                              'description' => 'PolarDB集群中节点的角色，取值范围如下：
* **Reader**
* **Writer**',
                              'type' => 'string',
                              'example' => 'Reader',
                            ),
                            'ZoneId' => 
                            array (
                              'description' => 'PolarDB集群节点的可用区ID。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou-i',
                            ),
                            'DBNodeId' => 
                            array (
                              'description' => 'PolarDB集群中节点的ID。',
                              'type' => 'string',
                              'example' => 'pi-***************',
                            ),
                            'DBNodeStatus' => 
                            array (
                              'description' => 'PolarDB集群节点的状态。',
                              'type' => 'string',
                              'example' => 'Running',
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
            'errorCode' => 'InvalidParameter.MasterDbInstanceRelease',
            'errorMessage' => 'The master db instance has been released',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"60A77FD6-0DE4-4A34-B6FB-9C2673******\\",\\n  \\"DbInstance\\": {\\n    \\"ExpireTime\\": \\"2019-09-27 11:22:33\\",\\n    \\"PayType\\": \\"Postpaid\\",\\n    \\"DBInstanceStatus\\": \\"1\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"Port\\": 3306,\\n    \\"EngineVersion\\": \\"8.0\\",\\n    \\"RdsInstType\\": \\"ignore\\",\\n    \\"RemainDays\\": \\"0\\",\\n    \\"DBInstanceId\\": \\"pc-*****************\\",\\n    \\"DbInstType\\": \\"POLARDB\\",\\n    \\"Engine\\": \\"POLARDB\\",\\n    \\"ReadMode\\": \\"CUSTOM\\",\\n    \\"Endpoints\\": {\\n      \\"Endpoint\\": [\\n        {\\n          \\"ReadWeight\\": 85,\\n          \\"EndpointId\\": \\"pe-*****************\\",\\n          \\"NodeIds\\": \\"pi-*****************,pi-*****************\\"\\n        }\\n      ]\\n    },\\n    \\"DBNodes\\": {\\n      \\"DBNode\\": [\\n        {\\n          \\"DBNodeRole\\": \\"Reader\\",\\n          \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n          \\"DBNodeId\\": \\"pi-***************\\",\\n          \\"DBNodeStatus\\": \\"Running\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>60A77FD6-0DE4-4A34-B6FB-9C2673******</RequestId>\\n<DbInstance>\\n    <DbInstType>POLARDB</DbInstType>\\n    <EngineVersion>8.0</EngineVersion>\\n    <DBInstanceStatus>1</DBInstanceStatus>\\n    <Port>3306</Port>\\n    <PayType>Postpaid</PayType>\\n    <Endpoints>\\n        <Endpoint>\\n            <ReadWeight>85</ReadWeight>\\n            <NodeIds>pi-*****************</NodeIds>\\n            <EndpointId>pc-*****************</EndpointId>\\n        </Endpoint>\\n        <Endpoint>\\n            <ReadWeight>15</ReadWeight>\\n            <NodeIds>pi-*****************,pi-*****************</NodeIds>\\n            <EndpointId>pe-*****************</EndpointId>\\n        </Endpoint>\\n    </Endpoints>\\n    <DBInstanceId>pc-*****************</DBInstanceId>\\n    <DBNodes>\\n        <DBNode>\\n            <DBNodeStatus>Running</DBNodeStatus>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <DBNodeRole>Reader</DBNodeRole>\\n            <DBNodeId>pi-*****************</DBNodeId>\\n        </DBNode>\\n        <DBNode>\\n            <DBNodeStatus>Running</DBNodeStatus>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <DBNodeRole>Writer</DBNodeRole>\\n            <DBNodeId>pi-*****************</DBNodeId>\\n        </DBNode>\\n        <DBNode>\\n            <DBNodeStatus>Running</DBNodeStatus>\\n            <ZoneId>cn-hangzhou-i</ZoneId>\\n            <DBNodeRole>Reader</DBNodeRole>\\n            <DBNodeId>pi-*****************</DBNodeId>\\n        </DBNode>\\n    </DBNodes>\\n    <NetworkType>VPC</NetworkType>\\n    <ReadMode>CUSTOM</ReadMode>\\n    <ExpireTime/>\\n    <RemainDays>0</RemainDays>\\n    <Engine>POLARDB</Engine>\\n</DbInstance>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询逻辑库下PolarDB集群具体信息',
      'summary' => '查询DRDS逻辑库下PolarDB集群具体信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRDSPerformance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X实例ID。</props>

<props="intl">DRDS实例ID。</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'RdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层RDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-************',
          ),
        ),
        2 => 
        array (
          'name' => 'Keys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能监控指标，允许一次传入多个指标进行查询，多个指标参数间用英文逗号（,）隔开。
> 更多关于性能监控指标详情，请参见[存储监控](~~186705~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MySQL_MemCpuUsage',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1603123290000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1603209690000',
          ),
        ),
        5 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库引擎类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'mysql',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB53EC68-463C-4187-8D2B-C2AD8C******',
              ),
              'Data' => 
              array (
                'description' => '查询结果集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '监控指标名称。',
                      'type' => 'string',
                      'example' => 'cpuusage',
                    ),
                    'NodeName' => 
                    array (
                      'description' => '节点名称。
>仅数据库存储类型为PolarDB MySQL时返回该参数，RDS MySQL不会返回该参数。',
                      'type' => 'string',
                      'example' => 'pi-*************',
                    ),
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'NodeNum' => 
                    array (
                      'description' => '节点数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Values' => 
                    array (
                      'description' => '监控指标数据详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Date' => 
                          array (
                            'description' => '获取监控指标数值的时间点，格式为Unix时间戳（UTC时间），单位为毫秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1603209660000',
                          ),
                          'Value' => 
                          array (
                            'description' => '监控指标数值。',
                            'type' => 'string',
                            'example' => '0.58',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Monitor.QueryRdsFailure',
            'errorMessage' => 'Failed to query RDS monitor info.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DB53EC68-463C-4187-8D2B-C2AD8C******\\",\\n  \\"Data\\": [\\n    {\\n      \\"Key\\": \\"cpuusage\\",\\n      \\"NodeName\\": \\"pi-*************\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"NodeNum\\": 1,\\n      \\"Values\\": [\\n        {\\n          \\"Date\\": 1603209660000,\\n          \\"Value\\": \\"0.58\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRDSPerformanceResponse>\\n<RequestId>DB53EC68-463C-4187-8D2B-C2AD8C******</RequestId>\\n<Data>\\n    <NodeNum>1</NodeNum>\\n    <Values>\\n        <Value>0.58</Value>\\n        <Date>1603209660000</Date>\\n    </Values>\\n    <Unit>%</Unit>\\n    <Key>cpuusage</Key>\\n</Data>\\n<Data>\\n    <NodeNum>1</NodeNum>\\n    <Values>\\n        <Value>9.75</Value>\\n        <Date>1603209660000</Date>\\n    </Values>\\n    <Unit>%</Unit>\\n    <Key>memusage</Key>\\n</Data>\\n<Success>true</Success>\\n</DescribeRDSPerformanceResponse>","errorExample":""}]',
      'title' => '查询存储层RDS性能数据详情',
      'summary' => '调用DescribeRDSPerformance接口查询存储层RDS性能数据详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDbInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '75986',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrdsD0NTUP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'Search',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层实例ID或集群ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pc-***************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层类型，取值为POLARDB或RDS。',
            'type' => 'string',
            'required' => false,
            'example' => 'POLARDB',
            'default' => 'RDS',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => '分页每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '30',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '293275B3-8FC0-4619-A26E-6F062FASD56R',
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
                        'InstanceNetworkType' => 
                        array (
                          'description' => '存储层实例网络类型，取值范围如下：

- **VPC**：专有网络
- **CLASSIC**：经典网络',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'DBInstanceType' => 
                        array (
                          'description' => '存储层实例类型。',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-a',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '存储层实例状态，取值范围如下：

- **0**：创建中
- **1**：使用中
- **3**：删除中
- **5**：重启中
- **6**：升降级中
- **7**：恢复中
- **8**：内外网切换中',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '存储层实例ID。',
                          'type' => 'string',
                          'example' => 'rm-****************',
                        ),
                        'Engine' => 
                        array (
                          'description' => '存储层实例内核。',
                          'type' => 'string',
                          'example' => '存储层实例内核。',
                        ),
                        'DBInstanceDescription' => 
                        array (
                          'description' => '存储层实例描述。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '存储层实例内核版本。',
                          'type' => 'string',
                          'example' => '5.7',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'ReadOnlyDBInstanceId' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ReadOnlyDBInstanceId' => 
                            array (
                              'description' => '存储层实例下的只读实例。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '存储层实例下的只读实例。',
                                'type' => 'string',
                                'example' => '[]',
                              ),
                            ),
                          ),
                        ),
                        'AllowAllCategory' => 
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"293275B3-8FC0-4619-A26E-6F062FASD56R\\",\\n  \\"Items\\": {\\n    \\"DBInstance\\": [\\n      {\\n        \\"InstanceNetworkType\\": \\"VPC\\",\\n        \\"DBInstanceType\\": \\"Primary\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n        \\"DBInstanceStatus\\": 0,\\n        \\"DBInstanceId\\": \\"rm-****************\\",\\n        \\"Engine\\": \\"存储层实例内核。\\",\\n        \\"DBInstanceDescription\\": \\"test\\",\\n        \\"EngineVersion\\": \\"5.7\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ReadOnlyDBInstanceId\\": {\\n          \\"ReadOnlyDBInstanceId\\": [\\n            \\"[]\\"\\n          ]\\n        },\\n        \\"AllowAllCategory\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDbInstancesResponse>\\n    <RequestId>293275B3-8FC0-4619-A26E-6F062FASD56R</RequestId>\\n    <Items>\\n        <InstanceNetworkType>VPC</InstanceNetworkType>\\n        <DBInstanceType>Primary</DBInstanceType>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <DBInstanceStatus>0</DBInstanceStatus>\\n        <DBInstanceId>rm-****************</DBInstanceId>\\n        <Engine>存储层实例内核。</Engine>\\n        <DBInstanceDescription>test</DBInstanceDescription>\\n        <EngineVersion>5.7</EngineVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ReadOnlyDBInstanceId>[]</ReadOnlyDBInstanceId>\\n    </Items>\\n</DescribeDbInstancesResponse>","errorExample":""}]',
      'title' => '查看存储层实例列表',
      'summary' => '查看存储层（如RDS或PolarDB）的实例列表。',
    ),
    'DescribeDbInstanceDbs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层数据库所属实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pc-****************',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X高级账号名称，若没有高级账号则无需填写。关于高级账号，详情请参见[账号管理](https://help.aliyun.com/document_detail/98664.html)。</props>

<props="intl">DRDS高级账号名称，若无高级账号则无需填写。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X高级账号密码，若没有高级账号则无需填写。关于高级账号，详情请参见[账号管理](https://help.aliyun.com/document_detail/98664.html)。</props>

<props="intl">DRDS高级账号密码，若没有高级账号则无需填写。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => 'pwd_111111',
          ),
        ),
        4 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库存储类型，取值为**POLARDB**或**RDS**。',
            'type' => 'string',
            'required' => false,
            'example' => 'POLARDB',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E9F3D991-08DE-4B74-BE0E-06B809******',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Total' => 
              array (
                'description' => '数据库总数。',
                'type' => 'string',
                'example' => '1',
              ),
              'Databases' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Database' => 
                  array (
                    'description' => '数据库详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '数据库状态，取值范围如下：
* **0**：创建中
* **1**：可用
* **3**：正在删除 ',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'DbName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'db_test',
                        ),
                        'Description' => 
                        array (
                          'description' => '数据库描述。',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E9F3D991-08DE-4B74-BE0E-06B809******\\",\\n  \\"Success\\": true,\\n  \\"Total\\": \\"1\\",\\n  \\"Databases\\": {\\n    \\"Database\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"DbName\\": \\"db_test\\",\\n        \\"Description\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Databases>\\n    <Database>\\n        <Status>1</Status>\\n        <Description>test</Description>\\n        <DbName>db_test</DbName>\\n    </Database>\\n</Databases>\\n<total>1</total>\\n<RequestId>E9F3D991-08DE-4B74-BE0E-06B809******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看目标存储实例下的数据库列表',
      'summary' => '调用DescribeDbInstanceDbs接口查看目标存储实例下的数据库列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstanceAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdsjiii1b49****',
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
            'example' => 'drds_sample_account',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_sample_password',
          ),
        ),
        3 => 
        array (
          'name' => 'DbPrivilege',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据库访问权限列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DbName' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test123',
                ),
                'Privilege' => 
                array (
                  'description' => '需要创建的账号对数据库的访问权限。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DDL',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF13E47D-4E38-4A5A-BA68-4E610EVF56DC',
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
            'errorCode' => 'OperationFailed.CreateAccount',
            'errorMessage' => 'Create account failed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FF13E47D-4E38-4A5A-BA68-4E610EVF56DC\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateInstanceAccountResponse>\\n    <Success>true</Success>\\n    <RequestId>FF13E47D-4E38-4A5A-BA68-4E610EVF56DC</RequestId>\\n</CreateInstanceAccountResponse>","errorExample":""}]',
      'title' => '创建 DRDS 实例级账号',
      'summary' => '调用CreateInstanceAccount接口创建DRDS实例级账号。',
    ),
    'RemoveInstanceAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
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
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationFailed.RemoveInstanceAccount',
            'errorMessage' => 'Remove instance account failed',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除实例管理账号',
      'summary' => '调用RemoveInstanceAccount接口删除实例管理账号。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableSqlAudit' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启SQL审计的数据库名称。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'IsRecall',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否回溯历史SQL进行审计。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'RecallStartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回溯开始时间，格式为时间戳（单位为毫秒）。',
            'type' => 'string',
            'required' => false,
            'example' => '1568875132000',
          ),
        ),
        4 => 
        array (
          'name' => 'RecallEndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回溯结束时间，格式为时间戳（单位为毫秒）。
>回溯结束时间需晚于开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '1568875132000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '463A5F0F-12AD-4544-A902-B2B983******',
              ),
              'Result' => 
              array (
                'description' => 'SQL审计功能是否开启成功。',
                'type' => 'boolean',
                'example' => 'true',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"463A5F0F-12AD-4544-A902-B2B983******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Result>true</Result>\\n<RequestId>463A5F0F-12AD-4544-A902-B2B983******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '开启SQL审计功能',
      'summary' => '调用EnableSqlAudit接口开启SQL审计功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableSqlAudit' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS的数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E273749A-9A33-44CF-ABE7-0CB19C******',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E273749A-9A33-44CF-ABE7-0CB19C******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E273749A-9A33-44CF-ABE7-0CB19C******</RequestId>\\n<Success>true</Success>\\n<Result>true</Result>","errorExample":""}]',
      'title' => '取消SQL审计',
      'summary' => '调用DisableSqlAudit接口取消SQL审计。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsSqlAuditStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'DC3ABA3E-0F8A-4596-9104-F5155C******',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => '结果集。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExtraSlsLogStore' => 
                        array (
                          'description' => '外部投递的SLS LogStore。
>仅当开启外部投递时会显示该参数。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DbName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Detailed' => 
                        array (
                          'description' => '是否支持完整的报表，取值为true或false。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'ExtraWriteEnabled' => 
                        array (
                          'description' => '是否开启外部投递，取值为true或false。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '是否可用，取值为true或false。',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'ExtraAliUid' => 
                        array (
                          'description' => '外部投递的Uid。
>仅当开启外部投递时会显示该参数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '111',
                        ),
                        'ExtraSlsProject' => 
                        array (
                          'description' => '外部投递的SLS project。
>仅当开启外部投递时会显示该参数。',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DC3ABA3E-0F8A-4596-9104-F5155C******\\",\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      {\\n        \\"ExtraSlsLogStore\\": \\"test\\",\\n        \\"DbName\\": \\"test\\",\\n        \\"Detailed\\": \\"true\\",\\n        \\"ExtraWriteEnabled\\": false,\\n        \\"Enabled\\": \\"true\\",\\n        \\"ExtraAliUid\\": 111,\\n        \\"ExtraSlsProject\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DC3ABA3E-0F8A-4596-9104-F5155C******</RequestId>\\n<Data>\\n    <Data>\\n        <ExtraAliUid>111</ExtraAliUid>\\n        <ExtraSlsProject>test</ExtraSlsProject>\\n        <ExtraWriteEnabled>false</ExtraWriteEnabled>\\n        <Enabled>true</Enabled>\\n        <DbName>test</DbName>\\n        <ExtraSlsLogStore>test</ExtraSlsLogStore>\\n        <Detailed>true</Detailed>\\n    </Data>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询DRDS SQL审计信息',
      'summary' => '调用DescribeDrdsSqlAuditStatus接口查询DRDS SQL审计信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstDbSlsInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC3ABA3E-0F8A-4596-9104-F5155C******',
              ),
              'AuditInfo' => 
              array (
                'description' => 'SQL审计详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogStore' => 
                  array (
                    'description' => 'LogStore的名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Project' => 
                  array (
                    'description' => 'SLS Project的名称。',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DC3ABA3E-0F8A-4596-9104-F5155C******\\",\\n  \\"AuditInfo\\": {\\n    \\"LogStore\\": \\"test\\",\\n    \\"Project\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstDbSlsInfoResponse>\\n    <AuditInfo>\\n        <LogStore>test</LogStore>\\n        <Project>test</Project>\\n    </AuditInfo>\\n    <RequestId>DC3ABA3E-0F8A-4596-9104-F5155C******</RequestId>\\n    <Success>true</Success>\\n</DescribeInstDbSlsInfoResponse>","errorExample":""}]',
      'title' => '查询SLS和LogStore名称',
      'summary' => '查询SQL审计时使用的SLS Project和LogStore的名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsSlowSqls' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_db',
          ),
        ),
        2 => 
        array (
          'name' => 'ExeTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL执行时间，单位为毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1000',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询结束时间，格式为Unix时间戳，单位为毫秒（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1568269711000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL查询开始时间，格式为Unix时间戳，单位为毫秒（UTC时间）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1568267711000',
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
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
            'default' => '30',
          ),
        ),
      ),
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
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '509BDE17-505A-4B3B-854D-30D3F0******',
              ),
              'Total' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Item' => 
                  array (
                    'description' => '慢SQL详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SendTime' => 
                        array (
                          'description' => '慢SQL发送时间，单位为毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568267711',
                        ),
                        'Host' => 
                        array (
                          'description' => '执行机器的IP。',
                          'type' => 'string',
                          'example' => '10.0.***.***',
                        ),
                        'Sql' => 
                        array (
                          'description' => '慢SQL内容。',
                          'type' => 'string',
                          'example' => 'SELECT   count(1) from   payment_order where   order_status = \'08\';',
                        ),
                        'ResponseTime' => 
                        array (
                          'description' => '响应时间，单位为毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568267711',
                        ),
                        'Schema' => 
                        array (
                          'description' => '数据库名称。',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"509BDE17-505A-4B3B-854D-30D3F0******\\",\\n  \\"Total\\": 1,\\n  \\"Success\\": true,\\n  \\"Items\\": {\\n    \\"Item\\": [\\n      {\\n        \\"SendTime\\": 1568267711,\\n        \\"Host\\": \\"10.0.***.***\\",\\n        \\"Sql\\": \\"SELECT   count(1) from   payment_order where   order_status = \'08\';\\",\\n        \\"ResponseTime\\": 1568267711,\\n        \\"Schema\\": \\"user\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsSlowSqlsReponse>\\n<RequestId>509BDE17-505A-4B3B-854D-30D3F0******</RequestId>\\n<PageSize>20</PageSize>\\n<PageNumber>1</PageNumber>\\n<Total>1</Total>\\n<Items>\\n    <Item>\\n        <SendTime>1568267711</SendTime>\\n        <Schema>user</Schema>\\n        <ResponseTime>1568267711</ResponseTime>\\n        <Host>10.0.***.***</Host>\\n        <Sql>SELECT   count(1) from   payment_order where   order_status = \'08\';</Sql>\\n    </Item>\\n</Items>\\n<Success>true</Success>\\n</DescribeDrdsSlowSqlsReponse>","errorExample":""}]',
      'title' => '查看慢SQL',
      'summary' => '查看DRDS慢SQL。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckSqlAuditEnableStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
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
              'Status' => 
              array (
                'description' => 'SQL审计功能开启状态，取值范围如下：
* enabled：已开启
* disabled：未开启',
                'type' => 'string',
                'example' => 'enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF13E47D-4E38-4A5A-BA68-32A554******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"enabled\\",\\n  \\"RequestId\\": \\"FF13E47D-4E38-4A5A-BA68-32A554******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Status>\\"disabled\\"</Status>\\n<RequestId>FF13E47D-4E38-4A5A-BA68-32A554******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '校验DRDS逻辑库SQL审计是否已开启',
      'summary' => '调用CheckSqlAuditEnableStatus接口校验DRDS逻辑库SQL审计是否已开启。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartRestore' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rds********',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的恢复时间，格式为`yyyy-MM-dd HH:mm:ss`。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-10 20:18:18',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份方式，取值范围如下：
* logic：逻辑备份
* phy：快速备份',
            'type' => 'string',
            'required' => false,
            'example' => 'phy',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份级别，取值范围如下：
* db：数据库级别
* instance：实例级别',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupDbNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要恢复的数据库名列表，多个数据库之间用英文逗号（,）分隔。
> 如不填任何数据库名称则默认恢复实例下所有数据库。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1,test2',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS备份集ID。
> 若不填该参数，则默认按时间点（PreferredBackupTime）恢复。',
            'type' => 'string',
            'required' => false,
            'example' => '23***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '721C71DD-D3D0-4327-BFDD-678326******',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"721C71DD-D3D0-4327-BFDD-678326******\\",\\n  \\"Result\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Result>success</Result>\\n<RequestId>721C71DD-D3D0-4327-BFDD-678326******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '启动基于备份的恢复任务',
      'summary' => '调用StartRestore接口启动基于备份的恢复任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetBackupPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份周期，取值范围如下：
* 0：周一
* 1：周二
* 2：周三
* 3：周四
* 4：周五
* 5：周六
* 6：周日',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'PreferredBackupStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始备份时间。',
            'type' => 'string',
            'required' => false,
            'example' => '11:30:30',
          ),
        ),
        3 => 
        array (
          'name' => 'PreferredBackupEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束备份时间。',
            'type' => 'string',
            'required' => false,
            'example' => '12:30:30',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值范围如下：
* **logic**：逻辑备份
* **phy**：物理备份',
            'type' => 'string',
            'required' => false,
            'example' => 'phy',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份级别，取值范围如下：
* db：数据库级
* instance：实例级',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
        6 => 
        array (
          'name' => 'BackupDbNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份涉及到的数据库，多个数据库间用英文逗号（,）隔开。
> 仅当备份级别为数据库级时该参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1,test2',
          ),
        ),
        7 => 
        array (
          'name' => 'BackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份日志是否开启，取值范围如下：
* 1：开启
* 0：关闭',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'DataBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据备份保留天数，取值范围为7~730天。',
            'type' => 'string',
            'required' => false,
            'example' => '7',
          ),
        ),
        9 => 
        array (
          'name' => 'LogBackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志保留天数，取值范围为7~730天，且必须小于或等于数据备份天数。',
            'type' => 'string',
            'required' => false,
            'example' => '7',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
              ),
              'Result' => 
              array (
                'description' => '备份策略是否设置成功。',
                'type' => 'string',
                'example' => 'success',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Result\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Result>success</Result>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '设置备份策略',
      'summary' => '调用SetBackupPolicy接口设置备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableSqlFlashbackMatchSwitch' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标数据库名称。',
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
                'example' => '463A5F0F-12AD-4544-A902-B2B983******',
              ),
              'Result' => 
              array (
                'description' => '开启结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果。
',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"463A5F0F-12AD-4544-A902-B2B983******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Result>true</Result>\\n<RequestId>463A5F0F-12AD-4544-A902-B2B983******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '实现SQL闪回时精确恢复数据',
      'summary' => '此时DRDS数据库使用的RDS的BINLOG中会增加执行QUERY的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackMenu' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '60C21BE4-EDFE-454C-95ED-3A5C74******',
              ),
              'List' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'description' => '备份信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Support' => 
                        array (
                          'description' => '是否支持备份恢复。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'MenuName' => 
                        array (
                          'description' => '备份方式，取值范围如下：
* **logic**：逻辑备份
* **phy**：物理备份',
                          'type' => 'string',
                          'example' => 'phy',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"60C21BE4-EDFE-454C-95ED-3A5C74******\\",\\n  \\"List\\": {\\n    \\"list\\": [\\n      {\\n        \\"Support\\": true,\\n        \\"MenuName\\": \\"phy\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<List>\\n    <MenuName>phy</MenuName>\\n    <Support>true</Support>\\n</List>\\n<List>\\n    <MenuName>logic</MenuName>\\n    <Support>true</Support>\\n</List>\\n<RequestId>60C21BE4-EDFE-454C-95ED-3A5C74******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询实例是否支持备份恢复',
      'summary' => '调用DescribeBackMenu接口查询实例是否支持备份恢复。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredBackupTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-16 15:12:53',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，取值为**logic**或**phy**。',
            'type' => 'string',
            'required' => false,
            'example' => 'phy',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份级别，取值范围如下：
* **db**：库级别
* **instance**：实例级别',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupDbNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份涉及的数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_flashback',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1918df27-4563-11e9-8403-af4fbe******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0AD2DE5D-B86B-40B5-9678-487D37******',
              ),
              'RestoreOrderDO' => 
              array (
                'description' => '返回数据对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'DrdsOrderDOList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DrdsOrderDOList' => 
                      array (
                        'description' => '恢复的订单信息。',
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
                              'example' => 'vpc-*******************',
                            ),
                            'Network' => 
                            array (
                              'description' => '网络类型，取值范围如下：
* **classic**：经典网络
* **vpc**：专有网络',
                              'type' => 'string',
                              'example' => 'vpc',
                            ),
                            'VSwtichId' => 
                            array (
                              'description' => '专有网络交换机ID。',
                              'type' => 'string',
                              'example' => 'vsw-*******************',
                            ),
                            'InstSpec' => 
                            array (
                              'description' => '实例规格。',
                              'type' => 'string',
                              'example' => '4C8G * 2',
                            ),
                            'AzoneId' => 
                            array (
                              'description' => '可用区ID。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou-e',
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
                  'RdsOrderDOList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RdsOrderDOList' => 
                      array (
                        'description' => '恢复的RDS订单信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Network' => 
                            array (
                              'description' => '网络类型，取值范围如下：
* **classic**：经典网络
* **vpc**：专有网络',
                              'type' => 'string',
                              'example' => 'VPC',
                            ),
                            'Version' => 
                            array (
                              'description' => '版本号。',
                              'type' => 'string',
                              'example' => '5.6',
                            ),
                            'InstanceClass' => 
                            array (
                              'description' => '实例规格。',
                              'type' => 'string',
                              'example' => 'rds.mysql.s2.large',
                            ),
                            'DbInstanceStorage' => 
                            array (
                              'description' => '磁盘容量。',
                              'type' => 'string',
                              'example' => '10240',
                            ),
                            'Num' => 
                            array (
                              'description' => '数量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'Engine' => 
                            array (
                              'description' => '存储引擎。',
                              'type' => 'string',
                              'example' => 'MYSQL',
                            ),
                            'AzoneId' => 
                            array (
                              'description' => '可用区ID。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou-g',
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
                  'PolarOrderDOList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PolarOrderDOList' => 
                      array (
                        'description' => '恢复的PolarDB订单信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Network' => 
                            array (
                              'description' => '网络类型，取值范围如下：
* **classic**：经典网络
* **vpc**：专有网络',
                              'type' => 'string',
                              'example' => 'VPC',
                            ),
                            'Version' => 
                            array (
                              'description' => '版本号。',
                              'type' => 'string',
                              'example' => '5.6',
                            ),
                            'InstanceClass' => 
                            array (
                              'description' => '实例规格',
                              'type' => 'string',
                              'example' => 'polar.mysql.x4.large',
                            ),
                            'DbInstanceStorage' => 
                            array (
                              'description' => '磁盘容量。',
                              'type' => 'string',
                              'example' => '10240',
                            ),
                            'Num' => 
                            array (
                              'description' => '数量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'Engine' => 
                            array (
                              'description' => 'PolarDB存储引擎。',
                              'type' => 'string',
                              'example' => 'POLARDB',
                            ),
                            'AzoneId' => 
                            array (
                              'description' => '可用区ID。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou-g',
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
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0AD2DE5D-B86B-40B5-9678-487D37******\\",\\n  \\"RestoreOrderDO\\": {\\n    \\"DrdsOrderDOList\\": {\\n      \\"DrdsOrderDOList\\": [\\n        {\\n          \\"VpcId\\": \\"vpc-*******************\\",\\n          \\"Network\\": \\"vpc\\",\\n          \\"VSwtichId\\": \\"vsw-*******************\\",\\n          \\"InstSpec\\": \\"4C8G * 2\\",\\n          \\"AzoneId\\": \\"cn-hangzhou-e\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ]\\n    },\\n    \\"RdsOrderDOList\\": {\\n      \\"RdsOrderDOList\\": [\\n        {\\n          \\"Network\\": \\"VPC\\",\\n          \\"Version\\": \\"5.6\\",\\n          \\"InstanceClass\\": \\"rds.mysql.s2.large\\",\\n          \\"DbInstanceStorage\\": \\"10240\\",\\n          \\"Num\\": 1,\\n          \\"Engine\\": \\"MYSQL\\",\\n          \\"AzoneId\\": \\"cn-hangzhou-g\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ]\\n    },\\n    \\"PolarOrderDOList\\": {\\n      \\"PolarOrderDOList\\": [\\n        {\\n          \\"Network\\": \\"VPC\\",\\n          \\"Version\\": \\"5.6\\",\\n          \\"InstanceClass\\": \\"polar.mysql.x4.large\\",\\n          \\"DbInstanceStorage\\": \\"10240\\",\\n          \\"Num\\": 1,\\n          \\"Engine\\": \\"POLARDB\\",\\n          \\"AzoneId\\": \\"cn-hangzhou-g\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0AD2DE5D-B86B-40B5-9678-487D37******</RequestId>\\n<RestoreOrderDO>\\n    <RdsOrderDOList>\\n    </RdsOrderDOList>\\n    <DrdsOrderDOList>\\n        <DrdsOrderDOList>\\n            <InstSpec>4C8G * 2</InstSpec>\\n            <AzoneId>cn-hangzhou-e</AzoneId>\\n            <Network>vpc</Network>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <VpcId>vpc-*******************</VpcId>\\n        </DrdsOrderDOList>\\n    </DrdsOrderDOList>\\n    <PolarOrderDOList>\\n        <PolarOrderDOList>\\n            <InstanceClass>polar.mysql.x4.large</InstanceClass>\\n            <Num>1</Num>\\n            <AzoneId>cn-hangzhou-g</AzoneId>\\n            <Network>VPC</Network>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <DbInstanceStorage>10240</DbInstanceStorage>\\n            <Version>5.6</Version>\\n            <Engine>POLARDB</Engine>\\n        </PolarOrderDOList>\\n        <PolarOrderDOList>\\n            <InstanceClass>polar.mysql.x4.large</InstanceClass>\\n            <Num>1</Num>\\n            <AzoneId>cn-hangzhou-g</AzoneId>\\n            <Network>VPC</Network>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <DbInstanceStorage>10240</DbInstanceStorage>\\n            <Version>5.6</Version>\\n            <Engine>POLARDB</Engine>\\n        </PolarOrderDOList>\\n    </PolarOrderDOList>\\n</RestoreOrderDO>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看本次恢复购买订单详情',
      'summary' => '查看本次恢复购买的订单详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupDbs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'PreferredRestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按恢复时间查询。',
            'type' => 'string',
            'required' => false,
            'example' => '1568632541236',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按备份集ID查询',
            'type' => 'string',
            'required' => false,
            'example' => '201908367',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '842DFA7F-B09B-42A2-B115-E684AE******',
              ),
              'DbNames' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'dbName' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库列表。',
                      'type' => 'string',
                      'example' => '["db1","db2"]',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"842DFA7F-B09B-42A2-B115-E684AE******\\",\\n  \\"DbNames\\": {\\n    \\"dbName\\": [\\n      \\"[\\\\\\"db1\\\\\\",\\\\\\"db2\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DbNames>\\n</DbNames>\\n<RequestId>842DFA7F-B09B-42A2-B115-E684AE******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询可以恢复的数据库列表',
      'summary' => '调用DescribeBackupDbs接口查询可以恢复的数据库列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupSets' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为时间戳（单位为毫秒）。',
            'type' => 'string',
            'required' => true,
            'example' => '1591327800000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为时间戳（单位为毫秒）。
> 查询结束时间需晚于查询开始时间',
            'type' => 'string',
            'required' => true,
            'example' => '1591326000000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '7103AEE3-9025-442F-B82B-BABD0A******',
              ),
              'BackupSets' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'backupSet' => 
                  array (
                    'description' => '备份集列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EnableRecovery' => 
                        array (
                          'description' => '该备份集是否可恢复。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Status' => 
                        array (
                          'description' => '备份状态，取值范围如下：
* -1：失败
* 0：未开始
*  1：运行中
*  2：成功',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'BackupConsitentTime' => 
                        array (
                          'description' => '备份恢复持续时间。',
                          'type' => 'string',
                          'example' => '2020-06-05 11:31:38',
                        ),
                        'BackupType' => 
                        array (
                          'description' => '备份类型，取值范围如下：
* manual：手动备份
* auto：自动备份',
                          'type' => 'string',
                          'example' => 'manual',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '备份开始时间，格式为时间戳（单位为毫秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1591327754000',
                        ),
                        'BackupLevel' => 
                        array (
                          'description' => '备份级别，取值范围如下：
* db：数据库级别
* instance：实例级别',
                          'type' => 'string',
                          'example' => 'instance',
                        ),
                        'BackupMode' => 
                        array (
                          'description' => '备份方式，取值范围如下：
* logic：逻辑备份
* phy：快速备份',
                          'type' => 'string',
                          'example' => 'logic',
                        ),
                        'BackupEndTime' => 
                        array (
                          'description' => '备份结束时间，格式为时间戳（单位为毫秒）。
> 0表示未结束。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1591327899000',
                        ),
                        'Id' => 
                        array (
                          'description' => '备份集ID。',
                          'type' => 'string',
                          'example' => 'ba30d5c4-a6dc-11ea-bd40-************',
                        ),
                        'BackupTotalSize' => 
                        array (
                          'description' => '备份集大小，单位为M。',
                          'type' => 'string',
                          'example' => '93.24',
                        ),
                        'BackupDbs' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'backupDb' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '备份的数据库列表。',
                                'type' => 'string',
                                'example' => '["dts********"]',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"7103AEE3-9025-442F-B82B-BABD0A******\\",\\n  \\"BackupSets\\": {\\n    \\"backupSet\\": [\\n      {\\n        \\"EnableRecovery\\": false,\\n        \\"Status\\": 2,\\n        \\"BackupConsitentTime\\": \\"2020-06-05 11:31:38\\",\\n        \\"BackupType\\": \\"manual\\",\\n        \\"BackupStartTime\\": 1591327754000,\\n        \\"BackupLevel\\": \\"instance\\",\\n        \\"BackupMode\\": \\"logic\\",\\n        \\"BackupEndTime\\": 1591327899000,\\n        \\"Id\\": \\"ba30d5c4-a6dc-11ea-bd40-************\\",\\n        \\"BackupTotalSize\\": \\"93.24\\",\\n        \\"BackupDbs\\": {\\n          \\"backupDb\\": [\\n            \\"[\\\\\\"dts********\\\\\\"]\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7103AEE3-9025-442F-B82B-BABD0A******</RequestId>\\n<BackupSets>\\n    <backupSet>\\n        <Status>2</Status>\\n        <BackupTotalSize>93.24</BackupTotalSize>\\n        <BackupConsitentTime>2020-06-05 11:31:38</BackupConsitentTime>\\n        <BackupEndTime>1591327899000</BackupEndTime>\\n        <BackupMode>logic</BackupMode>\\n        <BackupLevel>instance</BackupLevel>\\n        <BackupStartTime>1591327754000</BackupStartTime>\\n        <BackupType>manual</BackupType>\\n        <BackupDbs>\\n            <backupDb>dts********</backupDb>\\n        </BackupDbs>\\n        <Id>ba30d5c4-a6dc-11ea-bd40-************</Id>\\n        <EnableRecovery>true</EnableRecovery>\\n    </backupSet>\\n</BackupSets>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询备份集信息',
      'summary' => '调用DescribeBackupSets接口查询备份集信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbga71nn****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '操作是否成功。取值：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8FAF3989-79CD-4A67-8FFD-97899B64SD5T',
              ),
              'BackupPolicyDO' => 
              array (
                'description' => '备份策略设置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'BackupDbName' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => 'null',
                  ),
                  'LogBackupRetentionPeriod' => 
                  array (
                    'description' => '日志备份保留天数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'DataBackupRetentionPeriod' => 
                  array (
                    'description' => '数据备份保留时，单位为天。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'BackupType' => 
                  array (
                    'description' => '备份类型，取值范围如下：

- manual：手动备份
- auto：自动备份',
                    'type' => 'string',
                    'example' => 'auto',
                  ),
                  'BackupLevel' => 
                  array (
                    'description' => '备份级别，取值范围如下：

- db：数据库级别
- instance：实例级别',
                    'type' => 'string',
                    'example' => 'db',
                  ),
                  'LocalLogRetentionHours' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'HighSpaceUsageProtection' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupRetentionPeriod' => 
                  array (
                    'description' => '备份保留天数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '8',
                  ),
                  'BackupPolicyMode' => 
                  array (
                    'description' => '备份策略模式，取值范围如下：

- DataBackupPolicy：数据备份策略
- LogBackupPolicy：日志备份策略',
                    'type' => 'string',
                    'example' => 'DataBackupPolicy',
                  ),
                  'PreferredBackupPeriod' => 
                  array (
                    'description' => '备份周期，允许传入多个时间周期，多个周期间用英文逗号（,）分隔，取值范围如下：
- 1: 星期日
- 2: 星期一
- 3: 星期二
- 4: 星期三
- 5: 星期四
- 6: 星期五
- 7: 星期六',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'LocalLogRetentionSpace' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupAppName' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'PreferredBackupTime' => 
                  array (
                    'description' => '备份的时间段（UTC时间）。',
                    'type' => 'string',
                    'example' => '22:00:00-23:00:00',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupMode' => 
                  array (
                    'description' => '备份方式，取值范围如下：
* **logic**：逻辑备份
* **phy**：快速备份',
                    'type' => 'string',
                    'example' => 'phy',
                  ),
                  'BackupLog' => 
                  array (
                    'description' => '是否开启备份日志，取值范围如下：
* **1**：开启
* **0**：关闭',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'NextBackupActuallyTime' => 
                  array (
                    'description' => '此api无返回',
                    'type' => 'string',
                    'example' => 'null',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"8FAF3989-79CD-4A67-8FFD-97899B64SD5T\\",\\n  \\"BackupPolicyDO\\": {\\n    \\"BackupDbName\\": \\"null\\",\\n    \\"LogBackupRetentionPeriod\\": 10,\\n    \\"DataBackupRetentionPeriod\\": 10,\\n    \\"BackupType\\": \\"auto\\",\\n    \\"BackupLevel\\": \\"db\\",\\n    \\"LocalLogRetentionHours\\": 0,\\n    \\"HighSpaceUsageProtection\\": 0,\\n    \\"GmtModified\\": 0,\\n    \\"BackupRetentionPeriod\\": 8,\\n    \\"BackupPolicyMode\\": \\"DataBackupPolicy\\",\\n    \\"PreferredBackupPeriod\\": \\"2\\",\\n    \\"LocalLogRetentionSpace\\": 0,\\n    \\"BackupAppName\\": \\"null\\",\\n    \\"PreferredBackupTime\\": \\"22:00:00-23:00:00\\",\\n    \\"GmtCreate\\": 0,\\n    \\"BackupMode\\": \\"phy\\",\\n    \\"BackupLog\\": \\"1\\",\\n    \\"NextBackupActuallyTime\\": \\"null\\"\\n  }\\n}","type":"json"}]',
      'title' => '查看集群自动备份策略',
      'summary' => '调用DescribeBackupPolicy接口查看备份策略设置详情。',
    ),
    'DescribeBackupTimes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbga71nn****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => '4780A19F-5ECB-4C56-AD20-966A3FF9DE5R',
              ),
              'RestoreTime' => 
              array (
                'description' => '可恢复时间详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                    'type' => 'string',
                    'example' => '1568636922671',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                    'type' => 'string',
                    'example' => '1568632853000',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"4780A19F-5ECB-4C56-AD20-966A3FF9DE5R\\",\\n  \\"RestoreTime\\": {\\n    \\"EndTime\\": \\"1568636922671\\",\\n    \\"StartTime\\": \\"1568632853000\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4780A19F-5ECB-4C56-AD20-966A3FF9DE5R</RequestId>\\n<Success>true</Success>\\n<RestoreTime>\\n    <EndTime>1568636922671</EndTime>\\n    <StartTime>1568632853000</StartTime>\\n</RestoreTime>","errorExample":""}]',
      'title' => '查询实例可恢复到的目标时间',
      'summary' => '调用DescribeBackupTimes接口查看实例可恢复到的目标时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveBackupsSet' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID，您可以调用[DescribeBackupSets](~~139331~~)接口查询备份集ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ba30d5c4-a6dc-11ea-bd40-************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '70FED5BE-4DDC-4556-AD35-5A6D27******',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"70FED5BE-4DDC-4556-AD35-5A6D27******\\",\\n  \\"Result\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>70FED5BE-4DDC-4556-AD35-5A6D27******</RequestId>\\n<Success>true</Success>\\n<Result>success</Result>","errorExample":""}]',
      'title' => '删除备份集',
      'summary' => '调用RemoveBackupsSet接口删除备份集。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PutStartBackup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds****c6vxxyzd',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份模式，详情请参见[备份模式](~~108631~~)，取值范围如下：
*  phy：快速备份
* logic：一致性备份',
            'type' => 'string',
            'required' => false,
            'example' => 'phy',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份等级，取值范围如下：  
* instance：实例级    
* db：数据库级    ',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupDbNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果是数据库级备份，需要指定需要备份的数据库列表，多个数据库间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'db_1, db_2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D64DE5944A1E541E0******',
              ),
              'Result' => 
              array (
                'description' => '请求结果描述。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5D64DE5944A1E541E0******\\",\\n  \\"Result\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>07D9CC74-2707-4234-BC5A-1F11AE******</RequestId>\\n    <Success>true</Success>\\n    <Result>success</Result>\\n</data>","errorExample":""}]',
      'title' => '通过提交数据备份任务',
      'summary' => '通过调用PutStartBackup接口提交数据备份任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInstanceInternetAddress' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds****************',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '错误码。
> 仅当接口调用出错时会出现该参数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '404',
              ),
              'Data' => 
              array (
                'description' => '创建公网IP是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1DF6052F-15E2-4E69-9628-D6BCC3******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 404,\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"1DF6052F-15E2-4E69-9628-D6BCC3******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Data>true</Data>\\n<RequestId>1DF6052F-15E2-4E69-9628-D6BCC3******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '为DRDS实例创建公网IP',
      'summary' => '调用CreateInstanceInternetAddress接口为DRDS实例创建公网IP。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateInstanceNetwork' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds******',
          ),
        ),
        1 => 
        array (
          'name' => 'SrcInstanceNetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例当前的网络类型，取值范围如下：
* vpc：专有网络
* classic：经典网络',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'classic',
          ),
        ),
        2 => 
        array (
          'name' => 'RetainClassic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保留经典网络地址。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ClassicExpiredDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '经典网络地址保留天数。',
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
                'example' => 'DSSDF-SEWE-*****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ERR_INSTANCE_CANNOT_SWITCH_NETWORK_FOR_PUBLIC',
            'errorMessage' => 'Public instance cannot switch network to VPC',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '切换DRDS实例的网络类型',
      'summary' => '调用UpdateInstanceNetwork接口切换DRDS实例的网络类型。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseInstanceInternetAddress' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所在地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
            'default' => 'center',
          ),
        ),
      ),
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
                'description' => '当前API返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FD17CD3C-3355-49E8-9231-FE2DB0******',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"FD17CD3C-3355-49E8-9231-FE2DB0******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FD17CD3C-3355-49E8-9231-FE2DB0******</RequestId>\\n<Data>true</Data>","errorExample":""}]',
      'title' => '释放实例外网地址',
      'summary' => '保证实例安全性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDrdsIpWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76084',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrdsJOW4UL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds****c6vxxyzd',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'IpWhiteList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改后的白名单列表，多个白名单IP间用英文（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => '127.***.***.***,10.***.***.***',
          ),
        ),
        3 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改模式，取值范围如下：
* `true`：追加修改  
* `false`：覆盖修改',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'drds_******',
          ),
        ),
        5 => 
        array (
          'name' => 'GroupAttribute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组描述。',
            'type' => 'string',
            'required' => false,
            'example' => '分组1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '933A1EC2-8260-4D4F-A56A-73BA27******',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"933A1EC2-8260-4D4F-A56A-73BA27******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>933A1EC2-8260-4D4F-A56A-73BA27******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '修改数据库白名单',
      'summary' => '调用ModifyDrdsIpWhiteList接口修改数据库白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsDBIpWhiteList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '实例所在地域。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds********',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test_db',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'group1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '017453B9-0001-4745-87BF-DD612D850ED0',
              ),
              'IpWhiteList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Ip' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'IP白名单列表。',
                      'type' => 'string',
                      'example' => '10.23.***.***,10.23.***.***/24',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The Drds DbName provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"017453B9-0001-4745-87BF-DD612D850ED0\\",\\n  \\"IpWhiteList\\": {\\n    \\"Ip\\": [\\n      \\"10.23.***.***,10.23.***.***/24\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsDBIpWhiteListResponse>\\n    <Success>true</Success>\\n    <RequestId>017453B9-0001-4745-87BF-DD612D850ED0</RequestId>\\n    <IpWhiteList>10.23.***.***,10.23.***.***/24</IpWhiteList>\\n</DescribeDrdsDBIpWhiteListResponse>","errorExample":""}]',
      'title' => '获取IP白名单列表',
      'summary' => '查看目标数据库的IP白名单列表。',
    ),
    'SubmitCleanTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩容数据库的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentJobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该扩容任务的任务ID，提交扩容任务的请求会返回。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该扩容任务的JobId，与ParentJobId取值相同。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'ExpandType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩容类型，取值范围如下：
* smooth_expand：平滑扩容
* hot_expand：热点扩容',
            'type' => 'string',
            'required' => true,
            'example' => 'smooth_expand',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-*****',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '提交清理扩容任务',
      'summary' => '调用SubmitCleanTask接口提交清理扩容任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitSmoothExpandPreCheck' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*******',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库的类型，取值范围如下：
* RDS
* POLARDB',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'description' => '提交任务的结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE104D26-AC19-49B5-AC67-947F69******',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '11111',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"RequestId\\": \\"FE104D26-AC19-49B5-AC67-947F69******\\",\\n  \\"TaskId\\": 11111,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FE104D26-AC19-49B5-AC67-947F69******</RequestId>\\n<TaskId>97358</TaskId>\\n<Success>true</Success>\\n<Msg>success</Msg>","errorExample":""}]',
      'title' => '提交平滑扩容预检任务',
      'summary' => '调用SubmitSmoothExpandPreCheck接口提交平滑扩容预检任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckExpandStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds***********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
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
                'example' => '7CDBA7D5-8D62-4D24-9C65-510D62******',
              ),
              'Data' => 
              array (
                'description' => '校验结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Msg' => 
                  array (
                    'description' => '附加说明信息。',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'IsActive' => 
                  array (
                    'description' => '是否可进行扩容操作。',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"7CDBA7D5-8D62-4D24-9C65-510D62******\\",\\n  \\"Data\\": {\\n    \\"Msg\\": \\"success\\",\\n    \\"IsActive\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Data>\\n    <IsActive>true</IsActive>\\n    <Msg/>\\n</Data>\\n<RequestId>7CDBA7D5-8D62-4D24-9C65-510D62******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '校验数据库是否可进行扩容操作',
      'summary' => '校验DRDS数据库是否可进行平滑扩容等扩容操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitHotExpandTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbga1138****',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceDbMapping',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标实例数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DbList' => 
                array (
                  'description' => '目标热点分库。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'hot_test_****_****',
                ),
                'InstanceName' => 
                array (
                  'description' => '目标热点库所在的RDS实例名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-bp1t1mk5a5bdj****',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 30,
          ),
        ),
        5 => 
        array (
          'name' => 'Mapping',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '目标数据库数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'HotDbName' => 
                array (
                  'description' => '热点库名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'hot_test_****_****',
                ),
                'ShardTbValue' => 
                array (
                  'description' => '表级拆分键值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'HotTableName' => 
                array (
                  'description' => '热点分表名称，必须以逻辑表名为前缀。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test_table_*****',
                ),
                'ShardDbValue' => 
                array (
                  'description' => '数据库级拆分键值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'TbShardColumn' => 
                array (
                  'description' => '关联表表拆分键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'platform',
                ),
                'DbShardColumn' => 
                array (
                  'description' => '关联表数据库拆分键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'platform',
                ),
                'LogicTable' => 
                array (
                  'description' => '热点扩容的逻辑表名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test_table',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 30,
          ),
        ),
        6 => 
        array (
          'name' => 'SupperAccountMapping',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '超级账户数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'InstanceName' => 
                array (
                  'description' => '拥有高权限的RDS实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-bp1t1mk5a5bdj****',
                ),
                'SupperAccount' => 
                array (
                  'description' => 'RDS实例高权限账号的名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'SupperPassword' => 
                array (
                  'description' => 'RDS实例高权限账号的密码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '11111111',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        7 => 
        array (
          'name' => 'ExtendedMapping',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '扩容数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SrcDb' => 
                array (
                  'description' => '源物理分库名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'SrcInstanceId' => 
                array (
                  'description' => '源物理分库所在RDS实例ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rm-bp1t1mk5a5bdj****',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 30,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B6B7BDC-575D-4A77-A4F8-24B7EFERV45Y',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0B6B7BDC-575D-4A77-A4F8-24B7EFERV45Y\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitHotExpandTaskResponse>\\n    <Success>true</Success>\\n    <RequestId>0B6B7BDC-575D-4A77-A4F8-24B7EFERV45Y</RequestId>\\n</SubmitHotExpandTaskResponse>","errorExample":""}]',
      'title' => '提交热点扩容任务',
      'summary' => '调用SubmitHotExpandTask接口提交热点扩容任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitHotExpandPreCheckTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drd*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbInstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库的类型，取值范围如下：
* RDS
* POLARDB',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
        3 => 
        array (
          'name' => 'TableList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '表名。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => 'test',
            'maxItems' => 30,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'description' => '提交任务的结果。',
                'type' => 'string',
                'example' => 'scucess',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE104D26-AC19-49B5-AC67-947F69*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '11111',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"scucess\\",\\n  \\"RequestId\\": \\"FE104D26-AC19-49B5-AC67-947F69*****\\",\\n  \\"TaskId\\": 11111,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>FE104D26-AC19-49B5-AC67-947F69*****</RequestId>\\n<TaskId>97358</TaskId>\\n<Success>true</Success>\\n<Msg>success</Msg>","errorExample":""}]',
      'title' => '提交热点扩容预检任务',
      'summary' => '主要包括无主键表的检查。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSqlFlashbakTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds****c6vxxyzd',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D64DE59-44A1-E541-E0CB-B7E5C4305162',
              ),
              'SqlFlashbackTasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SqlFlashbackTask' => 
                  array (
                    'description' => '闪回任务返回对象。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TableName' => 
                        array (
                          'description' => '数据所属的表。',
                          'type' => 'string',
                          'example' => 'drds_params',
                        ),
                        'SearchEndTime' => 
                        array (
                          'description' => '搜索的结束时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568509597000',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '下载地址过期时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1569216270000',
                        ),
                        'DownloadUrl' => 
                        array (
                          'description' => '下载地址。',
                          'type' => 'string',
                          'example' => 'http://...',
                        ),
                        'RecallProgress' => 
                        array (
                          'description' => '逆向召回进度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'SqlPk' => 
                        array (
                          'description' => 'SQL设计的主键值。',
                          'type' => 'string',
                          'example' => 'id',
                        ),
                        'InstId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'drdshbga76p6****',
                        ),
                        'RecallType' => 
                        array (
                          'description' => '回溯类型，取值如下：

- **0**：精确查找
- **1**：模糊查找',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SearchStartTime' => 
                        array (
                          'description' => '搜索的开始时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568609597000',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568611469000',
                        ),
                        'SqlCounter' => 
                        array (
                          'description' => '恢复的数据行数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DbName' => 
                        array (
                          'description' => '闪回任务的数据库名。',
                          'type' => 'string',
                          'example' => 'drds_flashback',
                        ),
                        'RecallRestoreType' => 
                        array (
                          'description' => '恢复类型，取值如下：

- **1**：镜像恢复
- **2**：逆向恢复',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568611408000',
                        ),
                        'TraceId' => 
                        array (
                          'description' => 'SQL的trace_id。',
                          'type' => 'string',
                          'example' => 'trace',
                        ),
                        'Id' => 
                        array (
                          'description' => '主键ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '238',
                        ),
                        'RecallStatus' => 
                        array (
                          'description' => '数据召回任务状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SqlType' => 
                        array (
                          'description' => 'SQL的类型。',
                          'type' => 'string',
                          'example' => 'Insert,Update,Delete',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"5D64DE59-44A1-E541-E0CB-B7E5C4305162\\",\\n  \\"SqlFlashbackTasks\\": {\\n    \\"SqlFlashbackTask\\": [\\n      {\\n        \\"TableName\\": \\"drds_params\\",\\n        \\"SearchEndTime\\": 1568509597000,\\n        \\"ExpireTime\\": 1569216270000,\\n        \\"DownloadUrl\\": \\"http://...\\",\\n        \\"RecallProgress\\": 10,\\n        \\"InstId\\": \\"drdshbga76p6****\\",\\n        \\"SqlPk\\": \\"id\\",\\n        \\"RecallType\\": 1,\\n        \\"GmtModified\\": 1568611469000,\\n        \\"SearchStartTime\\": 1568609597000,\\n        \\"DbName\\": \\"drds_flashback\\",\\n        \\"SqlCounter\\": 0,\\n        \\"RecallRestoreType\\": 1,\\n        \\"GmtCreate\\": 1568611408000,\\n        \\"TraceId\\": \\"trace\\",\\n        \\"Id\\": 238,\\n        \\"SqlType\\": \\"Insert,Update,Delete\\",\\n        \\"RecallStatus\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SqlFlashbackTasks>\\n    <SqlFlashbackTask>\\n        <GmtModified>1568611469000</GmtModified>\\n        <SearchEndTime>1568509597000</SearchEndTime>\\n        <RecallStatus>1</RecallStatus>\\n        <SqlPk>id</SqlPk>\\n        <RecallRestoreType>1</RecallRestoreType>\\n        <TableName>drds_params</TableName>\\n        <GmtCreate>1568611408000</GmtCreate>\\n        <SearchStartTime>1568609597000</SearchStartTime>\\n        <InstId>drdshbga76p6****</InstId>\\n        <RecallType>1</RecallType>\\n        <TraceId>trace</TraceId>\\n        <SqlType>Insert,Update,Delete</SqlType>\\n        <DbName>drds_flashback</DbName>\\n        <Id>238</Id>\\n        <ExpireTime>1569216270000</ExpireTime>\\n        <SqlCounter>0</SqlCounter>\\n        <RecallProgress>10</RecallProgress>\\n        <DownloadUrl>http://...</DownloadUrl>\\n    </SqlFlashbackTask>\\n</SqlFlashbackTasks>\\n<RequestId>5D64DE59-44A1-E541-E0CB-B7E5C4305162</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看闪回任务的列表',
      'summary' => '查看闪回任务的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitSqlFlashbackTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
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
            'description' => '执行闪回SQL的开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-10 20:23:23',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '闪回SQL执行的结束时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2019-09-10 23:23:23',
          ),
        ),
        4 => 
        array (
          'name' => 'TraceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '闪回SQL的Trace ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ase*****',
          ),
        ),
        5 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行闪回SQL操作的表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'SqlType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL的类型，取值范围为INSERT、UPDATE、DELETE，多种类型间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'INSERT,UPDATE',
          ),
        ),
        7 => 
        array (
          'name' => 'SqlPk',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '闪回SQL的主键。',
            'type' => 'string',
            'required' => false,
            'example' => '11111',
          ),
        ),
        8 => 
        array (
          'name' => 'RecallType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '精确匹配或者模糊匹配，取值范围如下：
* 0：精确匹配
* 1：模糊匹配',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'RecallRestoreType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复类型，取值范围如下：
* 1：镜像恢复
* 0：逆向恢复',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
                'example' => 'DSSDF-SEWE-*****',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1111',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": 1111\\n}","errorExample":""},{"type":"xml","example":"<SubmitSqlFlashbackTaskResponse>\\n\\t<RequestId>DSSDF-SEWE-*****</RequestId>\\n\\t<Success>True</Success>\\n    <TaskId>1111</TaskId>\\n</SubmitSqlFlashbackTaskResponse>","errorExample":""}]',
      'title' => '提交SQL闪回任务',
      'summary' => '调用SubmitSqlFlashbackTask接口提交SQL闪回任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateShardTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源表表名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_tb1',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表表名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_tb2',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型，取值范围为`SHARD_TO_SINGLE`、`SINGLE_TO_SHARD`、 `SHARD_TO_SHARD`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SINGLE_TO_SHARD',
          ),
        ),
      ),
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
                'description' => '任务创建结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F8997D95-94AD-416A-AE70-E24D08******',
              ),
              'Success' => 
              array (
                'description' => '请求结果',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"F8997D95-94AD-416A-AE70-E24D08******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Data>true</Data>\\n<RequestId>F8997D95-94AD-416A-AE70-E24D08******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建拆分任务',
      'summary' => '调用CreateShardTask接口创建拆分任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceAccounts' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds*********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E2E4056D-57EB-4353-8355-2E6284******',
              ),
              'InstanceAccounts' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceAccount' => 
                  array (
                    'description' => '实例账号列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Host' => 
                        array (
                          'description' => '可以访问数据库的IP地址。<note>**%**表示任何IP地址都能访问。</note>
',
                          'type' => 'string',
                          'example' => '%',
                        ),
                        'Description' => 
                        array (
                          'description' => '账号备注。高级账号默认为**Created by DRDS**，普通账号无任何备注。备注信息可以在账号管理中自定义修改。',
                          'type' => 'string',
                          'example' => 'Created by DRDS',
                        ),
                        'AccountType' => 
                        array (
                          'description' => '账号类型。
- **0**表示高级账号。
- **1**表示普通账号。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'AccountName' => 
                        array (
                          'description' => '账号名称。',
                          'type' => 'string',
                          'example' => 'test_rds3',
                        ),
                        'DbPrivileges' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DbPrivilege' => 
                            array (
                              'description' => '数据库权限信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'DbName' => 
                                  array (
                                    'description' => '数据库名称。',
                                    'type' => 'string',
                                    'example' => 'test_rds3',
                                  ),
                                  'Privilege' => 
                                  array (
                                    'description' => '账号权限。
- **R**：读权限。
- **W**：写权限。
- **DDL**：执行DDL操作的权限。
- **DML**：执行DML操作的权限。',
                                    'type' => 'string',
                                    'example' => 'R',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"E2E4056D-57EB-4353-8355-2E6284******\\",\\n  \\"InstanceAccounts\\": {\\n    \\"InstanceAccount\\": [\\n      {\\n        \\"Host\\": \\"%\\",\\n        \\"Description\\": \\"Created by DRDS\\",\\n        \\"AccountType\\": 1,\\n        \\"AccountName\\": \\"test_rds3\\",\\n        \\"DbPrivileges\\": {\\n          \\"DbPrivilege\\": [\\n            {\\n              \\"DbName\\": \\"test_rds3\\",\\n              \\"Privilege\\": \\"R\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceAccountsResponse>\\n    <InstanceAccounts>\\n        <InstanceAccount>\\n            <Description>Created by DRDS</Description>\\n            <DbPrivileges>\\n                <DbPrivilege>\\n                    <DbName>drds_flashback</DbName>\\n                    <Privilege>ROOT</Privilege>\\n                </DbPrivilege>\\n            </DbPrivileges>\\n            <Host>%</Host>\\n            <AccountName>drds_flashback</AccountName>\\n            <AccountType>0</AccountType>\\n        </InstanceAccount>\\n    \\n    </InstanceAccounts>\\n    <RequestId>2D77B55F-50C4-4FC5-A89A-7746B7D5781D</RequestId>\\n    <Success>true</Success>\\n</DescribeInstanceAccountsResponse>","errorExample":""}]',
      'title' => '查看实例账号信息',
      'summary' => '调用DescribeInstanceAccounts接口查询实例账号信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeExpandLogicTableInfoList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds_flashback',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B6B7BDC-575D-4A77-A4F8-24B7EF******',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'data' => 
                  array (
                    'description' => '结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ShardTbKey' => 
                        array (
                          'description' => '表拆分键。',
                          'type' => 'string',
                          'example' => 'address',
                        ),
                        'TableName' => 
                        array (
                          'description' => '数据表名。',
                          'type' => 'string',
                          'example' => 'employee_split2',
                        ),
                        'ShardDbKey' => 
                        array (
                          'description' => '库拆分键。',
                          'type' => 'string',
                          'example' => 'id',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0B6B7BDC-575D-4A77-A4F8-24B7EF******\\",\\n  \\"Data\\": {\\n    \\"data\\": [\\n      {\\n        \\"ShardTbKey\\": \\"address\\",\\n        \\"TableName\\": \\"employee_split2\\",\\n        \\"ShardDbKey\\": \\"id\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeExpandLogicTableInfoListReponse>\\n<RequestId>0B6B7BDC-575D-4A77-A4F8-24B7EF******</RequestId>\\n<Data>\\n    <data>\\n        <TableName>employee_split2</TableName>\\n        <ShardTbKey>address</ShardTbKey>\\n        <ShardDbKey>id</ShardDbKey>\\n    </data>\\n</Data>\\n<Success>true</Success>\\n</DescribeExpandLogicTableInfoListReponse>","errorExample":""}]',
      'title' => '查看逻辑表拆分建',
      'summary' => '调用DescribeExpandLogicTableInfoList接口查看拆分键。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
        'abilityTreeCode' => '76053',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds_flashback',
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
            'required' => true,
            'docRequired' => true,
            'example' => 'employee_split',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => 'B5644ABB-559A-4A1C-83F2-9E7209******',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'List' => 
                  array (
                    'description' => '返回数据集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Index' => 
                        array (
                          'description' => '主键。',
                          'type' => 'string',
                          'example' => 'PRI',
                        ),
                        'IsAllowNull' => 
                        array (
                          'description' => '是否允许为空。',
                          'type' => 'string',
                          'example' => 'NO',
                        ),
                        'ColumnName' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'example' => 'Id',
                        ),
                        'IsPk' => 
                        array (
                          'description' => '是否为主键。',
                          'type' => 'string',
                          'example' => 'YES',
                        ),
                        'ColumnType' => 
                        array (
                          'description' => '列类型。',
                          'type' => 'string',
                          'example' => 'bigint(20)',
                        ),
                        'Extra' => 
                        array (
                          'description' => 'Extra',
                          'type' => 'string',
                          'example' => 'auto_increment',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B5644ABB-559A-4A1C-83F2-9E7209******\\",\\n  \\"Data\\": {\\n    \\"List\\": [\\n      {\\n        \\"Index\\": \\"PRI\\",\\n        \\"IsAllowNull\\": \\"NO\\",\\n        \\"ColumnName\\": \\"Id\\",\\n        \\"IsPk\\": \\"YES\\",\\n        \\"ColumnType\\": \\"bigint(20)\\",\\n        \\"Extra\\": \\"auto_increment\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B5644ABB-559A-4A1C-83F2-9E7209******</RequestId>\\n<Data>\\n    <List>\\n        <ColumnName>Id</ColumnName>\\n        <ColumnType>bigint(20)</ColumnType>\\n        <Extra>auto_increment</Extra>\\n        <IsAllowNull>NO</IsAllowNull>\\n        <IsPk>YES</IsPk>\\n        <Index>PRI</Index>\\n    </List>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取 Table 结构信息',
      'summary' => '调用DescribeTable接口查询table结构信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTableListByType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga76p6****',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds_flash****',
          ),
        ),
        3 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索字段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'drdshbga76p61861',
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
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页。',
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
          'name' => 'TableType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SINGLE',
            'enum' => 
            array (
              0 => 'SINGLE',
              1 => 'SHARD',
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
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '第几页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => 'B360F47B-59E3-4D1C-BA03-6BFB1C993F88',
              ),
              'Total' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'List' => 
              array (
                'description' => '返回集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Property' => 
                    array (
                      'description' => '属性。',
                      'type' => 'string',
                      'example' => 'single',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'employee_split',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"B360F47B-59E3-4D1C-BA03-6BFB1C993F88\\",\\n  \\"Total\\": 1,\\n  \\"Success\\": true,\\n  \\"List\\": [\\n    {\\n      \\"Property\\": \\"single\\",\\n      \\"TableName\\": \\"employee_split\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<PageSize>10</PageSize>\\n<RequestId>B360F47B-59E3-4D1C-BA03-6BFB1C993F88</RequestId>\\n<PageNumber>1</PageNumber>\\n<Total>1</Total>\\n<List>\\n    <TableName>employee_split</TableName>\\n    <Property>single</Property>\\n</List>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据类型获取表集合',
      'summary' => '调用DescribeTableListByType接口根据类型获取表集合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeShardTaskInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'jjjjjj_ppppp',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源表名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a1',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a2',
            'maxLength' => 100,
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
              'Success' => 
              array (
                'description' => '请求是否成功。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID，如果遇到问题请提供这个请求ID，由工作人员为您排查。',
                'type' => 'string',
                'example' => '5D64DE5944A1E541E0CB908A',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '状态。',
                    'type' => 'string',
                    'example' => '增量追平',
                  ),
                  'Stage' => 
                  array (
                    'description' => '当前阶段。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'Progress' => 
                  array (
                    'description' => '进度。',
                    'type' => 'string',
                    'example' => '70',
                  ),
                  'Expired' => 
                  array (
                    'description' => '过期时间。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'TargetTableName' => 
                  array (
                    'description' => '目标表名。',
                    'type' => 'string',
                    'example' => 'a2',
                  ),
                  'SourceTableName' => 
                  array (
                    'description' => '源表名。',
                    'type' => 'string',
                    'example' => 'a1',
                  ),
                  'Full' => 
                  array (
                    'description' => '全量迁移。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StartTime' => 
                      array (
                        'description' => '开始时间。',
                        'type' => 'string',
                        'example' => '2019-09-16 15:11:53',
                      ),
                      'Progress' => 
                      array (
                        'description' => '当前进度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                      'Tps' => 
                      array (
                        'description' => '数据库每秒处理的事务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Total' => 
                      array (
                        'description' => '任务数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                      'Expired' => 
                      array (
                        'description' => '任务过期时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'FullCheck' => 
                  array (
                    'description' => '全量检查。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StartTime' => 
                      array (
                        'description' => '开始时间。',
                        'type' => 'string',
                        'example' => '2019-09-16 15:12:53',
                      ),
                      'Progress' => 
                      array (
                        'description' => '当前进度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Tps' => 
                      array (
                        'description' => '数据库每秒处理的事务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Total' => 
                      array (
                        'description' => '任务总数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Expired' => 
                      array (
                        'description' => '过期时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'FullRevise' => 
                  array (
                    'description' => '全量订正。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StartTime' => 
                      array (
                        'description' => '开始时间。',
                        'type' => 'string',
                        'example' => '2019-09-16 15:12:53',
                      ),
                      'Progress' => 
                      array (
                        'description' => '当前进度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Tps' => 
                      array (
                        'description' => '数据库每秒处理的事务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Total' => 
                      array (
                        'description' => '任务数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Expired' => 
                      array (
                        'description' => '过期时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'Review' => 
                  array (
                    'description' => '检查。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StartTime' => 
                      array (
                        'description' => '开始时间。',
                        'type' => 'string',
                        'example' => '2019-09-16 15:12:53',
                      ),
                      'Progress' => 
                      array (
                        'description' => '进度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Tps' => 
                      array (
                        'description' => '数据库每秒处理的事务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Total' => 
                      array (
                        'description' => '任务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'Expired' => 
                      array (
                        'description' => '过期。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'Increment' => 
                  array (
                    'description' => '增量。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Delay' => 
                      array (
                        'description' => '延迟。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1568617906',
                      ),
                      'StartTime' => 
                      array (
                        'description' => '开始时间。',
                        'type' => 'string',
                        'example' => '2019-09-16 15:12:53',
                      ),
                      'Tps' => 
                      array (
                        'description' => '数据库每秒处理的事务数。',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"5D64DE5944A1E541E0CB908A\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"增量追平\\",\\n    \\"Stage\\": \\"2\\",\\n    \\"Progress\\": \\"70\\",\\n    \\"Expired\\": \\"0\\",\\n    \\"TargetTableName\\": \\"a2\\",\\n    \\"SourceTableName\\": \\"a1\\",\\n    \\"Full\\": {\\n      \\"StartTime\\": \\"2019-09-16 15:11:53\\",\\n      \\"Progress\\": 100,\\n      \\"Tps\\": 0,\\n      \\"Total\\": 2,\\n      \\"Expired\\": 0\\n    },\\n    \\"FullCheck\\": {\\n      \\"StartTime\\": \\"2019-09-16 15:12:53\\",\\n      \\"Progress\\": 0,\\n      \\"Tps\\": 0,\\n      \\"Total\\": 0,\\n      \\"Expired\\": 0\\n    },\\n    \\"FullRevise\\": {\\n      \\"StartTime\\": \\"2019-09-16 15:12:53\\",\\n      \\"Progress\\": 0,\\n      \\"Tps\\": 0,\\n      \\"Total\\": 0,\\n      \\"Expired\\": 0\\n    },\\n    \\"Review\\": {\\n      \\"StartTime\\": \\"2019-09-16 15:12:53\\",\\n      \\"Progress\\": 0,\\n      \\"Tps\\": 10,\\n      \\"Total\\": 5,\\n      \\"Expired\\": 0\\n    },\\n    \\"Increment\\": {\\n      \\"Delay\\": 1568617906,\\n      \\"StartTime\\": \\"2019-09-16 15:12:53\\",\\n      \\"Tps\\": 10\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5D64DE5944A1E541E0CB908A</RequestId>\\n<Data>\\n    <Status>增量追平</Status>\\n    <SourceTableName>a1</SourceTableName>\\n    <Progress>70</Progress>\\n    <Stage>2</Stage>\\n    <Expired>0</Expired>\\n    <TargetTableName>a2</TargetTableName>\\n    <Full>\\n        <Progress>100</Progress>\\n        <Tps>0</Tps>\\n        <Total>2</Total>\\n        <StartTime>2019-09-16 15:11:53</StartTime>\\n        <Expired>0</Expired>\\n    </Full>\\n    <FullCheck>\\n        <Progress>0</Progress>\\n        <Tps>0</Tps>\\n        <Total>0</Total>\\n        <StartTime>2019-09-16 15:12:53</StartTime>\\n        <Expired>0</Expired>\\n    </FullCheck>\\n    <FullRevise>\\n        <Progress>0</Progress>\\n        <Tps>0</Tps>\\n        <Total>0</Total>\\n        <StartTime>2019-09-16 15:12:53</StartTime>\\n        <Expired>0</Expired>\\n    </FullRevise>\\n    <Review>\\n        <Progress>0</Progress>\\n        <Tps>10</Tps>\\n        <Total>5</Total>\\n        <StartTime>2019-09-16 15:12:53</StartTime>\\n        <Expired>0</Expired>\\n    </Review>\\n    <Increment>\\n        <Tps>10</Tps>\\n        <StartTime>2019-09-16 15:12:53</StartTime>\\n        <Delay>1568617906</Delay>\\n    </Increment>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '拆分变更工具详情',
      'summary' => '调用DescribeShardTaskInfo查询拆分变更工具详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ValidateShardTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'none',
        'abilityTreeCode' => '76153',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrdsTIBR6Q',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds23ds****',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源表名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'buyer',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标表名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'buyer_new',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        5 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型。 取值：
* **SINGLE\\_TO\\_SHARD**：单表转分表
* **SHARD\\_TO\\_SINGLE**： 分表转单表
* **SHARD\\_TO\\_SHARD**：分表转分表',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SINGLE_TO_SHARD',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B6B7BDC-575D-4A77-A4F8-24B7EFAS45FG',
              ),
              'List' => 
              array (
                'description' => '检查结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Result' => 
                    array (
                      'description' => '检查结果。取值：
* **0**：检查通过
* **1**：检查不通过',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Item' => 
                    array (
                      'description' => '检查项。',
                      'type' => 'string',
                      'example' => 'same_schema',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"0B6B7BDC-575D-4A77-A4F8-24B7EFAS45FG\\",\\n  \\"List\\": [\\n    {\\n      \\"Result\\": 0,\\n      \\"Item\\": \\"same_schema\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0B6B7BDC-575D-4A77-A4F8-24B7EFAS45FG</RequestId>\\n<List>\\n    <Item>same_schema</Item>\\n    <Result>0</Result>\\n</List>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '校验拆分变更任务是否合法',
      'summary' => '调用ValidateShardTask接口校验拆分变更任务是否合法。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetupBroadcastTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76118',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds6IJXJ3',
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Active',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '激活广播表开关。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DRDS表格名称。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'test',
            'maxItems' => 20,
          ),
        ),
      ),
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
                'description' => '广播表设置是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
              ),
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Data>true</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '设置广播表',
      'summary' => '调用SetupBroadcastTables接口设置广播表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBroadcastTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
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
        3 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询内容。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'tb1',
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
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'example' => '86E420ED-43F2-4788-A58C-921849******',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IsShard' => 
              array (
                'description' => '是否拆分。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageNumber' => 
              array (
                'description' => '分页当前页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'Total' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'List' => 
              array (
                'description' => '广播表列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '广播表激活状态，取值范围如下：
* **1**：激活
* **2**：激活中
* **3**：激活异常',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'IsShard' => 
                    array (
                      'description' => '是否拆分表。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Broadcast' => 
                    array (
                      'description' => '是否是广播表。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Table' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'nation',
                    ),
                    'DbInstType' => 
                    array (
                      'description' => '数据库存储类型，取值范围如下：
* **0**：RDS
* **4**：PolarDB',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'BroadcastType' => 
                    array (
                      'description' => '广播表类型，取值：
* **1**：多写模式
* **2**：同步模式',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"86E420ED-43F2-4788-A58C-921849******\\",\\n  \\"Success\\": true,\\n  \\"IsShard\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 40,\\n  \\"Total\\": 2,\\n  \\"List\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"IsShard\\": false,\\n      \\"Broadcast\\": true,\\n      \\"Table\\": \\"nation\\",\\n      \\"DbInstType\\": 0,\\n      \\"BroadcastType\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBroadcastTablesReponse>\\n    <IsShard>true</IsShard>\\n    <RequestId>86E420ED-43F2-4788-A58C-921849******</RequestId>\\n    <PageSize>40</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>2</Total>\\n    <List>\\n        <Status>1</Status>\\n        <DbInstType>0</DbInstType>\\n        <IsShard>false</IsShard>\\n        <Table>nation</Table>\\n        <Broadcast>true</Broadcast>\\n        <BroadcastType>1</BroadcastType>\\n    </List>\\n    <Success>true</Success>\\n</DescribeBroadcastTablesReponse>","errorExample":""}]',
      'title' => '查询广播表',
      'summary' => '调用DescribeBroadcastTables接口查询广播表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchGlobalBroadcastType' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds********',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
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
              'Data' => 
              array (
                'description' => '广播表从多写切换成异步链路模式是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-*****',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Data>true</Data>\\n<success>true</success>","errorExample":""}]',
      'title' => '将广播表从多写切换成异步链路模式',
      'summary' => '调用SwitchGlobalBroadcastType接口将广播表从多写切换成异步链路模式。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetupTable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表所在的数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'AllowFullTableScan',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许全表扫描。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '关联的表名。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'test',
            'maxItems' => 20,
          ),
        ),
      ),
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
                'description' => '全表扫描是否使用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Data>true</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '使用全表扫描',
      'summary' => '调用SetupTable接口使用全表扫描。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeTables' => 
    array (
      'summary' => '调用DescribeTables接口获取表信息列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条件，取值为目标实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'drds************',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83AC3D7E-461C-4D87-8ACD-6CC295******',
              ),
              'Total' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'List' => 
              array (
                'description' => '返回的表信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '拆分任务状态，取值范围如下：

- 0：正常、无任务；
- 1：变更中、有拆分任务。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'IsLocked' => 
                    array (
                      'description' => '是否锁定。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ShardKey' => 
                    array (
                      'description' => '拆分键。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'IsShard' => 
                    array (
                      'description' => '是否拆分。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Broadcast' => 
                    array (
                      'description' => '是否为广播表。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AllowFullTableScan' => 
                    array (
                      'description' => '是否允许全表扫描。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Table' => 
                    array (
                      'description' => '表名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DbInstType' => 
                    array (
                      'description' => '实例类型，取值范围如下：

- 0：独享型；
- 1：共享型。',
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
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"83AC3D7E-461C-4D87-8ACD-6CC295******\\",\\n  \\"Total\\": 1,\\n  \\"Success\\": true,\\n  \\"List\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"IsLocked\\": false,\\n      \\"ShardKey\\": \\"null\\",\\n      \\"IsShard\\": false,\\n      \\"Broadcast\\": false,\\n      \\"AllowFullTableScan\\": false,\\n      \\"Table\\": \\"test\\",\\n      \\"DbInstType\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTablesResponse>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <RequestId>83AC3D7E-461C-4D87-8ACD-6CC295******</RequestId>\\n    <Total>1</Total>\\n    <Success>true</Success>\\n    <List>\\n        <Status>0</Status>\\n        <IsLocked>false</IsLocked>\\n        <ShardKey>null</ShardKey>\\n        <IsShard>false</IsShard>\\n        <Broadcast>false</Broadcast>\\n        <AllowFullTableScan>false</AllowFullTableScan>\\n        <Table>test</Table>\\n        <DbInstType>0</DbInstType>\\n    </List>\\n</DescribeTablesResponse>","errorExample":""}]',
      'title' => '获取表信息列表',
    ),
    'SetupDrdsParams' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76119',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdsjiii1b49****',
          ),
        ),
        2 => 
        array (
          'name' => 'ParamLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数设置的级别。取值范围如下：

- **NSTANCE**：实例级
- **DB**：数据库级',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DB',
          ),
        ),
        3 => 
        array (
          'name' => 'Data',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DbName' => 
                array (
                  'description' => '参数对应的数据库名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test_db',
                ),
                'ParamType' => 
                array (
                  'description' => '参数类型，取值范围如下：

- **ATOM**：三层数据源中的配置项；
- **CONFIG**：Server Config中的配置项；
- **DIAMOND**：Diamond中的配置项。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ATOM',
                ),
                'ParamValue' => 
                array (
                  'description' => '参数值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'true',
                ),
                'ParamVariableName' => 
                array (
                  'description' => '参数名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FORBID_EXECUTE_DML_ALL',
                ),
                'ParamRanges' => 
                array (
                  'description' => '参数取值范围。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[true|false]',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 20,
          ),
        ),
      ),
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
                'description' => '返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
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
            'errorCode' => '%s',
            'errorMessage' => '%s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetupDrdsParamsResponse>\\n    <Data>true</Data>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</SetupDrdsParamsResponse>","errorExample":""}]',
      'title' => '配置实例的参数',
      'summary' => '调用SetupDrdsParams接口配置实例的参数。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为INSTANCE。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '6ab4640a-479b-41d0-ad3c-c6e888bc3d8f',
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
                  'description' => '标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'color',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'red',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'dm-hbgau1zp****',
            ),
            'required' => false,
            'maxItems' => 51,
          ),
        ),
      ),
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
                'description' => '分页token。',
                'type' => 'string',
                'example' => '6ab4640a-479b-41d0-ad3c-c6e888bc3d8f',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '58CE1CB0-F0F4-4BA3-B876-135DC47DF52F',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TagResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagResource' => 
                  array (
                    'description' => '标签资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型，取值固定为INSTANCE。',
                          'type' => 'string',
                          'example' => 'INSTANCE',
                        ),
                        'TagValue' => 
                        array (
                          'description' => '标签的值。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'drdshzsd11****',
                        ),
                        'TagKey' => 
                        array (
                          'description' => '标签的键。',
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
            'errorCode' => 'InvalidParameter.tagKey',
            'errorMessage' => 'Check the parameter tagKey %s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.tagValue',
            'errorMessage' => 'Check the parameter tagValue %s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.tags.exceed',
            'errorMessage' => 'Tags num exceed 10',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.instanceId.and.tags',
            'errorMessage' => 'you must have one of Tags and InstanceId',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.tags.json.error',
            'errorMessage' => 'The parameter tags is not a JsonArray',
          ),
          5 => 
          array (
            'errorCode' => 'TagService.%s',
            'errorMessage' => 'TagService return errorMsg: %s',
          ),
          6 => 
          array (
            'errorCode' => 'TagApi.InvalidParameter.resourceId.exceed',
            'errorMessage' => 'ResourceId num exceed 50',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"6ab4640a-479b-41d0-ad3c-c6e888bc3d8f\\",\\n  \\"RequestId\\": \\"58CE1CB0-F0F4-4BA3-B876-135DC47DF52F\\",\\n  \\"Success\\": true,\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"INSTANCE\\",\\n        \\"TagValue\\": \\"1\\",\\n        \\"ResourceId\\": \\"drdshzsd11****\\",\\n        \\"TagKey\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>6ab4640a-479b-41d0-ad3c-c6e888bc3d8f</NextToken>\\n    <RequestId>58CE1CB0-F0F4-4BA3-B876-135DC47DF52F</RequestId>\\n    <Success>true</Success>\\n    <TagResources>\\n        <ResourceType>INSTANCE</ResourceType>\\n        <TagValue>1</TagValue>\\n        <ResourceId>drdshzsd11****</ResourceId>\\n        <TagKey>test</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询资源绑定的标签列表',
      'summary' => '调用ListTagResources查询资源标签。',
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
            'description' => '资源类型，取值固定为INSTANCE。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
            ),
          ),
        ),
        2 => 
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
                  'description' => '标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'color',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'red',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'dm-hbgau1zp****',
            ),
            'required' => true,
            'maxItems' => 51,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE5D94E3-3C93-3594-95D9-AAED2A980915',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.tagKey',
            'errorMessage' => 'Check the parameter tagKey %s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.tagValue',
            'errorMessage' => 'Check the parameter tagValue %s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.tags.exceed',
            'errorMessage' => 'Tags num exceed 10',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.tags.notFound',
            'errorMessage' => 'Tags connot be empty',
          ),
          4 => 
          array (
            'errorCode' => 'TagService.%s',
            'errorMessage' => 'TagService return errorMsg: %s',
          ),
          5 => 
          array (
            'errorCode' => 'TagApi.InvalidParameter.resourceId.exceed',
            'errorMessage' => 'ResourceId num exceed 50',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FE5D94E3-3C93-3594-95D9-AAED2A980915\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <Success>true</Success>\\n    <RequestId>FE5D94E3-3C93-3594-95D9-AAED2A980915</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为资源打标签',
      'summary' => '调用TagResources接口为资源打标签。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '76148',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
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
            'description' => '资源类型，取值固定为INSTANCE。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE',
            'enum' => 
            array (
              0 => 'INSTANCE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除资源的所有标签。',
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
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'drds********',
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
            'description' => '标签的键。
> N表示传入第几个标签的键。例如：* Tag.1.Key表示传入第一个标签的键。* Tag.2.Key表示传入第二个标签的键。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => 'color',
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
                'example' => 'DSSDF-SEWE-*****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.tagKey',
            'errorMessage' => 'Check the parameter tagKey %s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.tagValue',
            'errorMessage' => 'Check the parameter tagValue %s',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.tags.exceed',
            'errorMessage' => 'Tags num exceed 10',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.tags.notFound',
            'errorMessage' => 'Tags connot be empty',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.tags.json.error',
            'errorMessage' => 'Thr parameter tags is not a JsonArray',
          ),
          5 => 
          array (
            'errorCode' => 'TagService.%s',
            'errorMessage' => 'TagService return errorMsg: %s',
          ),
          6 => 
          array (
            'errorCode' => 'TagApi.InvalidParameter.resourceId.exceed',
            'errorMessage' => 'ResourceId num exceed 50',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '取消资源的标签',
      'summary' => '调用UntagResources接口取消资源的标签。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsInstanceVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga1138****',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
              ),
              'Data' => 
              array (
                'description' => '实例版本详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'NewestVersion' => 
                  array (
                    'description' => '最新实例版本。',
                    'type' => 'string',
                    'example' => '5.4.12-16315258',
                  ),
                  'InstanceVersion' => 
                  array (
                    'description' => '当前实例版本。',
                    'type' => 'string',
                    'example' => '5.3.12-15682777',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\",\\n  \\"Data\\": {\\n    \\"NewestVersion\\": \\"5.4.12-16315258\\",\\n    \\"InstanceVersion\\": \\"5.3.12-15682777\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsInstanceVersionResponse>\\n    <Success>true</Success>\\n    <RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n    <Data>\\n        <NewestVersion>5.4.12-16315258</NewestVersion>\\n        <InstanceVersion>5.3.12-15682777</InstanceVersion>\\n    </Data>\\n</DescribeDrdsInstanceVersionResponse>","errorExample":""}]',
      'title' => '查看实例版本',
      'summary' => '查询 DRDS 实例版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsInstanceLevelTasks' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drdssen12****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
              ),
              'Tasks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Task' => 
                  array (
                    'description' => '未完成任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskType' => 
                        array (
                          'description' => '任务类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '11',
                        ),
                        'TaskPhase' => 
                        array (
                          'description' => '任务阶段。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Progress' => 
                        array (
                          'description' => '任务进度，取值0-100。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '99',
                        ),
                        'AllowCancel' => 
                        array (
                          'description' => '是否允许取消。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '任务状态，正在执行0，成功1，失败2，取消3。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ShowProgress' => 
                        array (
                          'description' => '是否显示进度。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'TaskName' => 
                        array (
                          'description' => '任务名称。',
                          'type' => 'string',
                          'example' => 'upgrade_instance',
                        ),
                        'ProgressDescription' => 
                        array (
                          'description' => '进度描述。',
                          'type' => 'string',
                          'example' => '正在执行',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '任务创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568705520000',
                        ),
                        'TargetId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12312',
                        ),
                        'ErrMsg' => 
                        array (
                          'description' => '任务错误信息。',
                          'type' => 'string',
                          'example' => '实例状态异常',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\",\\n  \\"Tasks\\": {\\n    \\"Task\\": [\\n      {\\n        \\"TaskType\\": 11,\\n        \\"TaskPhase\\": \\"1\\",\\n        \\"Progress\\": 99,\\n        \\"AllowCancel\\": false,\\n        \\"TaskStatus\\": 0,\\n        \\"ShowProgress\\": true,\\n        \\"TaskName\\": \\"upgrade_instance\\",\\n        \\"ProgressDescription\\": \\"正在执行\\",\\n        \\"GmtCreate\\": 1568705520000,\\n        \\"TargetId\\": 12312,\\n        \\"ErrMsg\\": \\"实例状态异常\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsInstanceLevelTasksResponse>\\n    <Success>true</Success>\\n    <RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n    <Tasks>\\n        <TaskType>11</TaskType>\\n        <TaskPhase>1</TaskPhase>\\n        <Progress>99</Progress>\\n        <AllowCancel>false</AllowCancel>\\n        <TaskStatus>0</TaskStatus>\\n        <ShowProgress>true</ShowProgress>\\n        <TaskName>upgrade_instance</TaskName>\\n        <ProgressDescription>正在执行</ProgressDescription>\\n        <GmtCreate>1568705520000</GmtCreate>\\n        <TargetId>12312</TargetId>\\n        <ErrMsg>实例状态异常</ErrMsg>\\n    </Tasks>\\n</DescribeDrdsInstanceLevelTasksResponse>","errorExample":""}]',
      'title' => '查询 DRDS 实例级未完成任务',
      'summary' => '调用DescribeDrdsInstanceLevelTasks接口查询实例中未完成的任务。',
    ),
    'UpgradeInstanceVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbgaen89****',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        2 => 
        array (
          'name' => 'Rpm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号，无需填写。',
            'type' => 'string',
            'required' => false,
            'example' => 't-drds-server-5.4.12-16348095.noarch.rpm',
          ),
        ),
      ),
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
                'description' => '请求结果。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"success\\",\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeInstanceVersionResponse>\\n    <Data>success</Data>\\n    <RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n</UpgradeInstanceVersionResponse>","errorExample":""}]',
      'title' => '升级DRDS实例的版本',
      'summary' => '调用UpgradeInstanceVersion接口升级DRDS实例的版本。 。',
    ),
    'DescribeDrdsInstanceMonitor' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*********',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能监控指标，允许一次传入多个指标进行查询，多个指标参数间用英文逗号（,）隔开。
> 更多关于性能监控指标详情，请参见[实例监控](~~186703~~)。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpu',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1603123290000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。

> 如果查询时间范围小于1小时，会返回结束时间前1小时的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1603209690000',
          ),
        ),
        4 => 
        array (
          'name' => 'PeriodMultiple',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '监控数据周期倍数。例如，各资源监控项的数据采集周期均默认为1分钟，若设置周期倍数为2，则表示当前资源监控项数据采集周期为2分钟。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
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
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4',
              ),
              'Data' => 
              array (
                'description' => '查询结果集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '监控指标名称。',
                      'type' => 'string',
                      'example' => 'cpu',
                    ),
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => '%',
                    ),
                    'NodeNum' => 
                    array (
                      'description' => '节点数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Values' => 
                    array (
                      'description' => '监控指标数据详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Date' => 
                          array (
                            'description' => '获取监控指标数值的时间点，格式为Unix时间戳（UTC时间），单位为毫秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1603163400000',
                          ),
                          'Value' => 
                          array (
                            'description' => '监控指标数值。',
                            'type' => 'string',
                            'example' => '1.40',
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
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Mismatch',
            'errorMessage' => 'Invalid parameter of key',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.time',
            'errorMessage' => 'The startTime and endTime must in one week',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.periodMultiple',
            'errorMessage' => 'The periodMultiple is too larger than the time between startTime and endTime',
          ),
          4 => 
          array (
            'errorCode' => 'DrdsInstance.NotExists',
            'errorMessage' => 'The drds instance does not exist.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Monitor.QueryRdsFailure',
            'errorMessage' => 'Failed to query RDS monitor info.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4\\",\\n  \\"Data\\": [\\n    {\\n      \\"Key\\": \\"cpu\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"NodeNum\\": 1,\\n      \\"Values\\": [\\n        {\\n          \\"Date\\": 1603163400000,\\n          \\"Value\\": \\"1.40\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2F7F8080-9132-4279-85D0-B7E5C4</RequestId>\\n<Data>\\n    <NodeNum>1</NodeNum>\\n    <Unit>%</Unit>\\n    <Key>cpu</Key>\\n    <Values>\\n        <Value>1.40</Value>\\n        <Date>1603163400000</Date>\\n    </Values>\\n</Data>","errorExample":""}]',
      'title' => '查询实例监控数据详情',
      'summary' => '调用DescribeDrdsInstanceMonitor接口查询实例监控数据详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsInstanceDbMonitor' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X实例ID。</props>

<props="intl">DRDS实例ID。</props>',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds_test',
          ),
        ),
        2 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '性能监控指标，允许一次传入多个指标进行查询，多个指标参数间用英文逗号（,）隔开。
>更多关于性能监控指标详情，请参见[数据库监控](~~186704~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'qps',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1603162800000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1603166400000',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4******',
              ),
              'Data' => 
              array (
                'description' => '监控数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '监控指标的名称。',
                      'type' => 'string',
                      'example' => 'qps',
                    ),
                    'Unit' => 
                    array (
                      'description' => '监控指标的单位。',
                      'type' => 'string',
                      'example' => 'qps',
                    ),
                    'Values' => 
                    array (
                      'description' => '监控数据值详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Date' => 
                          array (
                            'description' => '获取该监控数据值的时间点，格式为Unix时间戳，单位为毫秒。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1603162805000',
                          ),
                          'Value' => 
                          array (
                            'description' => '数据值。',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Mismatch',
            'errorMessage' => 'Invalid parameter of key',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.time',
            'errorMessage' => 'The startTime and endTime must in one week',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDbName.NotFound',
            'errorMessage' => 'The DrdsInstanceId or DbName provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4******\\",\\n  \\"Data\\": [\\n    {\\n      \\"Key\\": \\"qps\\",\\n      \\"Unit\\": \\"qps\\",\\n      \\"Values\\": [\\n        {\\n          \\"Date\\": 1603162805000,\\n          \\"Value\\": \\"0\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDrdsInstanceDbMonitorResponse>\\n<RequestId>01685B03-4099-414F-B9E1-DB994947CA8E</RequestId>\\n<Data>\\n    <Values>\\n        <Value>0</Value>\\n        <Date>1602234005000</Date>\\n    </Values>\\n    <Unit>qps</Unit>\\n    <Key>qps</Key>\\n</Data>\\n<Success>true</Success>\\n</DescribeDrdsInstanceDbMonitorResponse>","errorExample":""}]',
      'title' => '查询数据库的性能监控数据',
      'summary' => '调用DescribeDrdsInstanceDbMonitor接口查询数据库的性能监控数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ChangeAccountPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds********',
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
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新后的密码。',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-*****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionUnauthorized',
            'errorMessage' => 'The specified action is not available for you',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidDRDSInstanceId.NotFound',
            'errorMessage' => 'The DrdsInstanceId provided does not exist in our records.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '重置DRDS数据库密码',
      'summary' => '调用ChangeAccountPassword接口重置DRDS数据库密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ChangeInstanceAzone' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'none',
        'abilityTreeCode' => '75934',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdsjiii1b49****',
          ),
        ),
        1 => 
        array (
          'name' => 'OriginAzoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '原可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-B',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetAzoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-A',
          ),
        ),
        3 => 
        array (
          'name' => 'DrdsRegionId',
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
        4 => 
        array (
          'name' => 'ChangeVSwitch',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否更新交换机，取值如下：

- **true**：是
- **false**：否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'NewVSwitch',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '新交换机的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-wz9ckkba51zrh********',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F7F8080-9132-4279-85D0-B7E5C4305162',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ERR_INSTANCE_NOT_RUNNING_STATUS',
            'errorMessage' => 'The instance status is not running',
          ),
          1 => 
          array (
            'errorCode' => 'ERR_OTHER_MULTI_AZONE_SWITCH',
            'errorMessage' => 'Change to multiple azone should have even number of nodes',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F7F8080-9132-4279-85D0-B7E5C4305162\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeInstanceAzoneResponse>\\n    <Success>true</Success>\\n    <RequestId>2F7F8080-9132-4279-85D0-B7E5C4305162</RequestId>\\n</ChangeInstanceAzoneResponse>","errorExample":""}]',
      'title' => '切换实例可用区',
      'summary' => '切换 DRDS 实例可用区。',
    ),
    'DescribeBackupLocal' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'FDC9CFD5-306D-4A23-9D8C-057274C6****',
              ),
              'BackupPolicyDO' => 
              array (
                'description' => '备份策略设置详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'BackupDbName' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'LogBackupRetentionPeriod' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'DataBackupRetentionPeriod' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupType' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'BackupLevel' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'LocalLogRetentionHours' => 
                  array (
                    'description' => '日志备份本地保留小时数，取值范围为0~168，**0**表示不保留，默认值为**18**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '18',
                  ),
                  'HighSpaceUsageProtection' => 
                  array (
                    'description' => '当实例使用空间超过90%或剩余空间小于5GB时，是否开启无条件清理Binlog，取值范围如下：
* 1：开启 
* 0：不开启',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupRetentionPeriod' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupPolicyMode' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'PreferredBackupPeriod' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'LocalLogRetentionSpace' => 
                  array (
                    'description' => '本地日志最大空间使用率。 取值范围为0~50，此为循环空间，默认为**30**。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'BackupAppName' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'PreferredBackupTime' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BackupMode' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'BackupLog' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'NextBackupActuallyTime' => 
                  array (
                    'description' => '本Api无此返回',
                    'type' => 'string',
                    'example' => 'null',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"FDC9CFD5-306D-4A23-9D8C-057274C6****\\",\\n  \\"BackupPolicyDO\\": {\\n    \\"BackupDbName\\": \\"null\\",\\n    \\"LogBackupRetentionPeriod\\": 0,\\n    \\"DataBackupRetentionPeriod\\": 0,\\n    \\"BackupType\\": \\"null\\",\\n    \\"BackupLevel\\": \\"null\\",\\n    \\"LocalLogRetentionHours\\": 18,\\n    \\"HighSpaceUsageProtection\\": 1,\\n    \\"GmtModified\\": 0,\\n    \\"BackupRetentionPeriod\\": 0,\\n    \\"BackupPolicyMode\\": \\"null\\",\\n    \\"PreferredBackupPeriod\\": \\"null\\",\\n    \\"LocalLogRetentionSpace\\": 30,\\n    \\"BackupAppName\\": \\"null\\",\\n    \\"PreferredBackupTime\\": \\"null\\",\\n    \\"GmtCreate\\": 0,\\n    \\"BackupMode\\": \\"null\\",\\n    \\"BackupLog\\": \\"null\\",\\n    \\"NextBackupActuallyTime\\": \\"null\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupLocalResponse>\\n\\t<RequestId>FDC9CFD5-306D-4A23-9D8C-057274C6****</RequestId>\\n\\t<Success>true</Success>\\n\\t<BackupPolicyDO>\\n\\t\\t<LocalLogRetentionHours>18</LocalLogRetentionHours>\\n\\t\\t<LocalLogRetentionSpace>30</LocalLogRetentionSpace>\\n\\t\\t<HighSpaceUsageProtection>1</HighSpaceUsageProtection>\\n\\t</BackupPolicyDO>\\n</DescribeBackupLocalResponse>","errorExample":""}]',
      'title' => '查看本地备份集',
      'summary' => '调用DescribeBackupLocal接口查看本地日志设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDrdsRdsInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X实例ID。</props>
<props="intl">DRDS实例ID。</props>
> 您可以调用[DescribeDrdsInstances](~~139284~~)查看目标账号下所有实例详情，包括实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*************',
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
                'example' => '123DB16B-02F2-45F7-A571-843991******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DbInstances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DbInstance' => 
                  array (
                    'description' => '存储层私有定制RDS实例信息详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DBInstanceCPU' => 
                        array (
                          'description' => '存储层私有定制RDS实例的CPU核数。',
                          'type' => 'string',
                          'example' => '8',
                        ),
                        'DBInstanceMemory' => 
                        array (
                          'description' => '存储层私有定制RDS实例的内存，单位：M。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '8192',
                        ),
                        'PayType' => 
                        array (
                          'description' => '存储层私有定制RDS实例的付费方式，取值范围如下：

* Postpaid：按量付费（即后付费）
* Prepaid：包年包月（即预付费）',
                          'type' => 'string',
                          'example' => 'PostPaid',
                        ),
                        'DBInstanceStatus' => 
                        array (
                          'description' => '存储层私有定制RDS实例的状态，取值范围如下：
* 0：创建中
* 1：运行中
* 3：删除中
* 5：重启中
* 6：升降级中
* 7：备份中
* 8：内外网切换中
* 9：迁移中
* 11：迁移数据中
* 12：生成灾备实例中
* 13：数据导入中
* 14：从其他RDS实例导入数据中
* 15：容灾切换中
* 16：创建临时实例中
* 17：网络创建中
* 18：实例克隆中
* 19：链路切换中
* 20：只读实例迁移中',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '存储层私有定制RDS实例的网络类型，固定为VPC（专有网络）。',
                          'type' => 'string',
                          'example' => 'VPC',
                        ),
                        'Port' => 
                        array (
                          'description' => '内网连接端口。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3306',
                        ),
                        'EngineVersion' => 
                        array (
                          'description' => '存储层私有定制RDS实例的引擎版本号，固定为8.0。',
                          'type' => 'string',
                          'example' => '8.0',
                        ),
                        'DmInstanceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'dm-*************',
                        ),
                        'DBInstanceStorage' => 
                        array (
                          'description' => '存储层私有定制RDS实例的存储空间，单位：GB。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'ConnectUrl' => 
                        array (
                          'description' => '存储层私有定制RDS实例的内网连接地址。',
                          'type' => 'string',
                          'example' => 'rm-***************.mysql.rds.aliyuncs.com',
                        ),
                        'ReadWeight' => 
                        array (
                          'description' => '目标存储层私有定制RDS实例的读写权重。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RdsInstType' => 
                        array (
                          'description' => '存储层私有定制RDS实例的类型，取值范围如下：

* Primary：主实例
* Readonly：只读实例',
                          'type' => 'string',
                          'example' => 'Primary',
                        ),
                        'DBInstanceClassType' => 
                        array (
                          'description' => '实例规格族，取值范围如下：

* **x**：通用型
* **d**：独享套餐
* **h**：独占物理机',
                          'type' => 'string',
                          'example' => 'x',
                        ),
                        'DBInstanceId' => 
                        array (
                          'description' => '存储层私有定制RDS实例ID。',
                          'type' => 'string',
                          'example' => 'rm-*****************',
                        ),
                        'Engine' => 
                        array (
                          'description' => '存储层私有定制RDS实例的引擎类型，固定为MySQL。',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'DbInstType' => 
                        array (
                          'description' => '存储层实例类型，固定为RDS。',
                          'type' => 'string',
                          'example' => 'RDS',
                        ),
                        'LockMode' => 
                        array (
                          'description' => 'RDS的锁定状态，取值范围：0|1|2|3|4|5

 0，正常

1，手动触发锁

2，实例过期自动锁定

3，实例回滚前的自动锁定

4，实例空间满自动锁定

5，只读实例空间满自动锁定',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'LockReason' => 
                        array (
                          'description' => 'RDS锁定的原因',
                          'type' => 'string',
                          'example' => '手动触发锁',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123DB16B-02F2-45F7-A571-843991******\\",\\n  \\"Success\\": true,\\n  \\"DbInstances\\": {\\n    \\"DbInstance\\": [\\n      {\\n        \\"DBInstanceCPU\\": \\"8\\",\\n        \\"DBInstanceMemory\\": 8192,\\n        \\"PayType\\": \\"PostPaid\\",\\n        \\"DBInstanceStatus\\": \\"1\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"Port\\": 3306,\\n        \\"EngineVersion\\": \\"8.0\\",\\n        \\"DmInstanceId\\": \\"dm-*************\\",\\n        \\"DBInstanceStorage\\": 20,\\n        \\"ConnectUrl\\": \\"rm-***************.mysql.rds.aliyuncs.com\\",\\n        \\"ReadWeight\\": 0,\\n        \\"RdsInstType\\": \\"Primary\\",\\n        \\"DBInstanceClassType\\": \\"x\\",\\n        \\"DBInstanceId\\": \\"rm-*****************\\",\\n        \\"Engine\\": \\"MySQL\\",\\n        \\"DbInstType\\": \\"RDS\\",\\n        \\"LockMode\\": 1,\\n        \\"LockReason\\": \\"手动触发锁\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>123DB16B-02F2-45F7-A571-843991******</RequestId>\\n<DbInstances>\\n    <DbInstance>\\n        <DbInstType>RDS</DbInstType>\\n        <DBInstanceMemory>8192</DBInstanceMemory>\\n        <EngineVersion>8</EngineVersion>\\n        <DBInstanceStatus>6</DBInstanceStatus>\\n        <Port>3306</Port>\\n        <PayType>PostPaid</PayType>\\n        <DBInstanceCPU>4</DBInstanceCPU>\\n        <DBInstanceClassType>x</DBInstanceClassType>\\n        <ConnectUrl>rm-************.mysql.rds.aliyuncs.com</ConnectUrl>\\n        <ReadWeight>0</ReadWeight>\\n        <DBInstanceId>rm-************</DBInstanceId>\\n        <NetworkType>VPC</NetworkType>\\n        <DBInstanceStorage>20</DBInstanceStorage>\\n        <RdsInstType>Primary</RdsInstType>\\n        <DmInstanceId>dm-************</DmInstanceId>\\n        <Engine>MySQL</Engine>\\n    </DbInstance>\\n</DbInstances>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '私有定制RDS实例详情',
      'summary' => '查看目标PolarDB-X实例下所有的私有定制RDS实例详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRecycleBinStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS上创建的数据库名称。',
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
              'Status' => 
              array (
                'description' => '表回收站状态，取值范围如下：
* disable：未开启
* enable：开启',
                'type' => 'string',
                'example' => 'disable',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ACB5258F-25AF-4D7C-8FAA-B6FE60******',
              ),
              'Success' => 
              array (
                'description' => '请求结果。

',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"disable\\",\\n  \\"RequestId\\": \\"ACB5258F-25AF-4D7C-8FAA-B6FE60******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Status>enable</Status>\\n<RequestId>ACB5258F-25AF-4D7C-8FAA-B6FE60******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看表回收站状态',
      'summary' => '调用DescribeRecycleBinStatus接口查看表回收站状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRecycleBinTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds***********',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求结果。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5D64DE5944A1E541E0CB908A',
              ),
              'Data' => 
              array (
                'description' => '返回数据对象。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OriginalTableName' => 
                    array (
                      'description' => '原始表名。',
                      'type' => 'string',
                      'example' => 'BIN_T4AG3CY5WWXPKHITCHJY',
                    ),
                    'TableName' => 
                    array (
                      'description' => '表名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-09-16 14:42:06',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"5D64DE5944A1E541E0CB908A\\",\\n  \\"Data\\": [\\n    {\\n      \\"OriginalTableName\\": \\"BIN_T4AG3CY5WWXPKHITCHJY\\",\\n      \\"TableName\\": \\"test\\",\\n      \\"CreateTime\\": \\"2019-09-16 14:42:06\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>EC985705-2D6B-4B84-9732-BF8F5D******</RequestId>\\n<Data>\\n    <OriginalTableName>BIN_T4AG3CY5WWXPKHITCHJY</OriginalTableName>\\n    <TableName>test</TableName>\\n    <CreateTime>2019-09-16 14:42:06</CreateTime>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询可回收的表',
      'summary' => '查询可回收的表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableInstanceIpv6Address' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
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
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7E9F7F16-05B5-42DA-94D6-E36402******',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"7E9F7F16-05B5-42DA-94D6-E36402******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>7E9F7F16-05B5-42DA-94D6-E36402******</RequestId>\\n<Data>true</Data>","errorExample":""}]',
      'title' => '创建IPv6地址',
      'summary' => '调用EnableInstanceIpv6Address接口创建IPv6地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FlashbackRecycleBinTable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76063',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表所在的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表所在的数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要恢复的逻辑表名称。',
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
              'Data' => 
              array (
                'description' => '是否成功恢复已删除的逻辑表。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '463A5F0F-12AD-4544-A902-B2B983******',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"463A5F0F-12AD-4544-A902-B2B983******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Result>true</Result>\\n<RequestId>463A5F0F-12AD-4544-A902-B2B983******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '恢复删除的逻辑表',
      'summary' => '恢复删除的逻辑表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDrdsDbRdsRelationInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
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
        'abilityTreeCode' => '76066',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbga948vbpd2',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Db名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testDb',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '查询是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '82FD0D9B-9A65-40D3-B1D9-8851B1D4AF75',
              ),
              'Data' => 
              array (
                'description' => '存储实例结构列表，每一项对应一个主存储实例。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RdsInstanceId' => 
                    array (
                      'description' => '存储实例ID。',
                      'type' => 'string',
                      'example' => 'rm-bp16ad920ndxxxx02',
                    ),
                    'UsedInstanceType' => 
                    array (
                      'description' => '使用中的存储实例类型。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'UsedInstanceId' => 
                    array (
                      'description' => '使用中的存储实例ID，对主DRDS实例为主存储实例，对只读DRDS实例为选用的存储实例。',
                      'type' => 'string',
                      'example' => 'rm-bp1l8xi1dd9xxxxbj',
                    ),
                    'ReadOnlyInstanceInfo' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '只读存储实例ID列表。',
                        'type' => 'string',
                        'example' => '[]',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"82FD0D9B-9A65-40D3-B1D9-8851B1D4AF75\\",\\n  \\"Data\\": [\\n    {\\n      \\"RdsInstanceId\\": \\"rm-bp16ad920ndxxxx02\\",\\n      \\"UsedInstanceType\\": \\"RDS\\",\\n      \\"UsedInstanceId\\": \\"rm-bp1l8xi1dd9xxxxbj\\",\\n      \\"ReadOnlyInstanceInfo\\": [\\n        \\"[]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>82FD0D9B-9A65-40D3-B1D9-8851B1D4AF75</RequestId>\\n<Data>\\n    <UsedInstanceId>rm-bp1l8xi1dd9xxxxbj</UsedInstanceId>\\n    <UsedInstanceType>RDS</UsedInstanceType>\\n    <RdsInstanceId>rm-bp16ad920ndxxxx02</RdsInstanceId>\\n    <ReadOnlyInstanceInfo>[]</ReadOnlyInstanceInfo>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询数据库存储实例结构',
      'summary' => '调用GetDrdsDbRdsRelationInfo接口查询数据库存储实例结构。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ManagePrivateRds' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '<props="china">PolarDB-X实例所在的地域ID。</props>
<props="intl">DRDS实例实例所在的地域ID。</props>
> 您可以调用[DescribeDrdsInstances](~~139284~~)查看目标账号下所有实例详情，包括地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hanzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X实例ID。</props>
<props="intl">DRDS实例ID。</props>
> 您可以调用[DescribeDrdsInstances](~~139284~~)查看目标账号下所有实例详情，包括实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*************',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层私有定制RDS实例ID。

> 您可以调用[DescribeDrdsRdsInstances](~~215526~~)查看所有存储层私有定制RDS实例详情，包括实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-***************',
          ),
        ),
        3 => 
        array (
          'name' => 'RdsAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前支持对私有定制RDS实例执行如下管理操作：
* **DescribeDBInstanceAttribute**：查询私有定制RDS实例的详细信息。
* **DescribeAvailableClasses**：查询私有定制RDS实例可购买规格，包括规格代码和存储空间。
* **DescribeSQLCollectorPolicy**：查询私有定制RDS实例的SQL洞察（SQL审计）状态。
* **ModifySQLCollectorPolicy**：开启或关闭私有定制RDS实例的SQL洞察（SQL审计）功能。
* **DescribeParameters**：查询私有定制RDS实例当前的参数配置。
* **ModifyParameter**：修改私有定制RDS实例参数。
* **DescribeDBInstanceHAConfig**：查询私有定制RDS实例的高可用模式和数据复制方式。
* **SwitchDBInstanceHA**：切换私有定制RDS实例的主备实例。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SwitchDBInstanceHA',
          ),
        ),
        4 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要转发的私有定制RDS接口的请求参数及其值的JOSN串，参数的值都是字符串类型，例如`{NodeId:"1797****"}`。

各私有定制RDS接口的请求参数及取值范围，请参见如下文档中请求参数的部分：
* [DescribeDBInstanceAttribute](~~26231~~)
* [DescribeAvailableClasses](~~196546~~)
* [DescribeSQLCollectorPolicy](~~26292~~)
* [ModifySQLCollectorPolicy](~~26293~~)
* [DescribeParameters](~~26285~~)
* [ModifyParameter](~~26286~~)
* [DescribeDBInstanceHAConfig](~~26244~~)
* [SwitchDBInstanceHA](~~26251~~)

> 针对上述各接口的必选请求参数，`Action`和`DBInstanceId`参数值无需传入，其他必选请求参数必须传入。
',
            'type' => 'string',
            'required' => false,
            'example' => '{NodeId:"1797****"}',
            'default' => '{}',
          ),
        ),
      ),
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
                'description' => '转发私有定制RDS接口返回的参数结果集。',
                'type' => 'string',
                'example' => '{"requestId":"E63C810A-4A13-47B6-BA67-C0E23A******"}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0237BCD2-2C7A-4F86-A766-657AF6******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'RDSAPI.ERROR',
            'errorMessage' => 'Failed to call the RDS API operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"requestId\\\\\\":\\\\\\"E63C810A-4A13-47B6-BA67-C0E23A******\\\\\\"}\\",\\n  \\"RequestId\\": \\"0237BCD2-2C7A-4F86-A766-657AF6******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0237BCD2-2C7A-4F86-A766-657AF6******</RequestId>\\n<Data>{\\"requestId\\":\\"E63C810A-4A13-47B6-BA67-C0E23A******\\"}</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '管理私有RDS',
      'summary' => '调用ManagePrivateRds接口管理存储层私有定制RDS实例。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
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
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号描述。',
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
                'example' => '2F93CCD5-806F-4470-BBC7-20476A******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationFailed.ModifyAccountDescription',
            'errorMessage' => 'Modify account description failed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2F93CCD5-806F-4470-BBC7-20476A******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2F93CCD5-806F-4470-BBC7-20476A******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '修改账号描述',
      'summary' => '调用ModifyAccountDescription接口修改账号描述。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAccountPrivilege' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdshbgaen89****',
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
            'example' => 'account_sec',
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
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'DbPrivilege',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '数据库权限列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DbName' => 
                array (
                  'description' => '数据库名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test123',
                ),
                'Privilege' => 
                array (
                  'description' => '账号权限。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ReadWrite',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '73559800-3c8c-11ec-bd40-99cfcff3fe1e',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationFailed.ModifyAccountPrivilege',
            'errorMessage' => 'Modify account privilege failed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"73559800-3c8c-11ec-bd40-99cfcff3fe1e\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountPrivilegeResponse>\\n    <Success>true</Success>\\n    <RequestId>73559800-3c8c-11ec-bd40-99cfcff3fe1e</RequestId>\\n</ModifyAccountPrivilegeResponse>","errorExample":""}]',
      'title' => '修改账号权限',
      'summary' => '修改账号权限。',
    ),
    'ModifyPolarDbReadWeight' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'DbNodeIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标PolarDB集群下对应的节点列表，不同集群的节点间用英文逗号（,）分组，组内节点用英文冒号（:）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => 'pi-****************,pi-****************:pi-****************',
          ),
        ),
        3 => 
        array (
          'name' => 'DbInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Polar集群ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pc-****************',
          ),
        ),
        4 => 
        array (
          'name' => 'Weights',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'PolarDB分组对应的权重，多个权重间用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '14,86',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
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
                'example' => 'B12FC174-D5CE-4A6E-83C1-0F8F86******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidDbName',
            'errorMessage' => 'The dbName does not exist in this drds instance',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ReadWeighAndRdsNotMapping',
            'errorMessage' => 'The parameter read weight and rds instance not mapping',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.InvalidReadWeight',
            'errorMessage' => 'The parameter read weight is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B12FC174-D5CE-4A6E-83C1-0F8F86******\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B12FC174-D5CE-4A6E-83C1-0F8F86******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '修改PolarDB的读写权重',
      'summary' => '调用ModifyPolarDbReadWeight接口修改PolarDB的读写权重。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RefreshDrdsAtomUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
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
                'example' => 'B12FC174-D5CE-4A6E-83C1-0F8F86******',
              ),
              'Result' => 
              array (
                'description' => '刷新分库连接结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '当前API是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B12FC174-D5CE-4A6E-83C1-0F8F86******\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B12FC174-D5CE-4A6E-83C1-0F8F86******</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '刷新DRDS分库连接',
      'summary' => 'RDS连接变更后，刷新DRDS分库连接保证其到RDS的链路畅通。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveRecycleBinTable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS逻辑表名称。',
            'type' => 'string',
            'required' => false,
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
              'Data' => 
              array (
                'description' => '回收站中的表是否被清除。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Success>true</Success>\\n<Data>true</Data>","errorExample":""}]',
      'title' => '清除回收站中的表',
      'summary' => '清除回收站中的表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartDrdsInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'drds************',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'description' => '异步任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": 1\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Success>true</Success>\\n<TaskId>1</TaskId>","errorExample":""}]',
      'title' => '重启实例',
      'summary' => '调用RestartDrdsInstance接口重启实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RollbackInstanceVersion' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76115',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
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
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
      ),
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
                'description' => '实例版本是否回滚成功。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-*****',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"DSSDF-SEWE-*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RollbackInstanceVersionResponse>\\n<RequestId>DSSDF-SEWE-*****</RequestId>\\n<Data>true</Data>\\n</RollbackInstanceVersionResponse>","errorExample":""}]',
      'title' => '回滚DRDS实例的版本',
      'summary' => '回滚DRDS实例的版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetBackupLocal' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'drdshbgag23d13fds',
          ),
        ),
        1 => 
        array (
          'name' => 'LocalLogRetentionHours',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志备份本地保留小时数。取值为0~7*24，0表示不保留，默认为18',
            'type' => 'string',
            'required' => false,
            'example' => '12',
          ),
        ),
        2 => 
        array (
          'name' => 'LocalLogRetentionSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地日志最大空间使用率。 取值为0~50，此为循环空间，默认为30。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'HighSpaceUsageProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例使用空间>= 90%，或者剩余空间小于5GB时，是否无条件清理Binlog：1: 开启 0：不开启',
            'type' => 'string',
            'required' => false,
            'example' => '80',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6F70CE62-5077-4B7B-95BC-4DAC45614DBE',
              ),
              'Result' => 
              array (
                'description' => '操作返回结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => 'api调用结果',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F70CE62-5077-4B7B-95BC-4DAC45614DBE\\",\\n  \\"Result\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetBackupLocalResponse>\\n\\t  <RequestId>A3140FC7-B78B-4D8E-B0C8-926D28669934</RequestId>\\n\\t  <Success>true</Success>\\n\\t  <Result>success</Result>\\n</SetBackupLocalResponse>","errorExample":""}]',
      'title' => '设置本地备份集策略',
      'summary' => '修改备份策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetupRecycleBinStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'default' => 'center',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds************',
          ),
        ),
        2 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'StatusAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '表回收站的开启状态，取值范围如下：
* enable：开启
* disable：关闭',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'enable',
          ),
        ),
      ),
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
                'description' => '表回收站是否开启。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A3140FC7-B78B-4D8E-B0C8-926D28******',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"A3140FC7-B78B-4D8E-B0C8-926D28******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A3140FC7-B78B-4D8E-B0C8-926D28******</RequestId>\\n<Data>true</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '开启表回收站',
      'summary' => '调用SetupRecycleBinStatus接口开启表回收站。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitSmoothExpandPreCheckTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'none',
        'abilityTreeCode' => '76140',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 实例 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'drds823s4esd',
          ),
        ),
        1 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 数据库名',
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
              'Msg' => 
              array (
                'description' => '提交任务的结果信息',
                'type' => 'string',
                'example' => 'scucess',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-23ERW',
              ),
              'TaskId' => 
              array (
                'description' => '任务 ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2321',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"scucess\\",\\n  \\"RequestId\\": \\"DSSDF-SEWE-23ERW\\",\\n  \\"TaskId\\": 2321,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitSmoothExpandPreCheckTaskResponse>\\n   <Msg>success</Msg>\\n   <RequestId>FE104D26-AC19-49B5-AC67-947F6915E07E</RequestId>\\n   <Success>true</Success>\\n   <TaskId>97358</TaskId>\\n</SubmitSmoothExpandPreCheckTaskResponse>","errorExample":""}]',
      'title' => '提交平滑扩容预检任务',
      'summary' => '提交平滑扩容预检任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdatePrivateRdsClass' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '76150',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdrds25BO3L',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RdsClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新后的存储层私有定制RDS实例规格码。

> 您可以调用[DescribeAvailableClasses](~~196546~~)接口查看可购买的存储层私有定制RDS实例规格，包括规格代码和存储空间范围。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'rds.mysql.c1.xlarge',
          ),
        ),
        1 => 
        array (
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">PolarDB-X实例ID。</props>
<props="intl">DRDS实例ID。</props>
> 您可以调用[DescribeDrdsInstances](~~139284~~)查看目标账号下所有实例详情，包括实例ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drds*************',
          ),
        ),
        2 => 
        array (
          'name' => 'DBInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储层私有定制RDS实例ID。

<props="china">> 您可以调用[DescribeDrdsRdsInstances](~~xxxx~~)查看目标PolarDB-X实例下所有存储层私有定制RDS实例详情，包括实例ID。</props>

<props="intl">> 您可以调用[DescribeDrdsRdsInstances](~~xxxx~~)查看目标DRDS实例下所有存储层RDS实例详情，包括实例ID。</props>
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rm-***************',
          ),
        ),
        3 => 
        array (
          'name' => 'Storage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新后的存储层私有定制RDS实例的存储空间。

> 您可以调用[DescribeAvailableClasses](~~196546~~)接口查看可购买的存储层私有定制RDS实例规格，包括规格代码和存储空间范围。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoUseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券抵扣购买费用，取值为：**true**或**false**（默认值）。

> 使用代金券后，若需要进行降配操作，由代金券抵扣的金额将不会进行退款。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'PrePayDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '无效字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '{     "orderId": "209136011******"   }',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '57D86AB4-8703-4DF4-BAB6-F7DE44******',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'ModifyRdsClassApiError',
            'errorMessage' => 'Failed to modify the class of the RDS instance.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{     \\\\\\"orderId\\\\\\": \\\\\\"209136011******\\\\\\"   }\\",\\n  \\"RequestId\\": \\"57D86AB4-8703-4DF4-BAB6-F7DE44******\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>65C49036-181C-40A3-9034-465E417C6491</RequestId>\\n<Data>\\n    <orderId>209136011******</orderId>\\n</Data>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '升级或降级存储层私有定制RDS',
      'summary' => '升级或降级存储层私有定制RDS实例的规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeHiStoreInstance' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DrdsInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'drdssad23sdfc',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域 ID ',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'center',
          ),
        ),
        2 => 
        array (
          'name' => 'HistoreInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DRDS 列式存储实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hi-sesex2e',
          ),
        ),
      ),
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
                'description' => '升级版本请求是否成功，成功返回 true， 失败则返回错误信息',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => 'DSSDF-SEWE-23ERW',
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
            'errorMessage' => 'The request processing has failed due to some unknown error.  默认错误码',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"DSSDF-SEWE-23ERW\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeHiStoreInstanceResponse>\\n\\t<RequestId>DSSDF-SEWE-23ERW</RequestId>\\n\\t<Data>True</Data>\\n</UpgradeHiStoreInstanceResponse>","errorExample":""}]',
      'title' => '升级Histore实例',
      'summary' => '升级 DRDS 列式存储的版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'drds.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'drds.cn-hangzhou.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'drds.ap-southeast-1.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'drds.cn-beijing.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'drds.cn-hongkong.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'drds.cn-huhehaote.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'drds.cn-north-2-gov-1.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'drds.cn-qingdao.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'drds.cn-shanghai.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'drds.cn-shanghai-finance-1.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'drds.cn-shenzhen.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'drds.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'drds.cn-zhangjiakou.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'drds.us-east-1.aliyuncs.com',
    ),
  ),
);
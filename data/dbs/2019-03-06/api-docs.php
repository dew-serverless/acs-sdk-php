<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dbs',
    'version' => '2019-03-06',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 60077,
      'title' => '备份计划',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBackupPlan',
        1 => 'CreateAndStartBackupPlan',
        2 => 'StartBackupPlan',
        3 => 'EnableBackupLog',
        4 => 'StopBackupPlan',
        5 => 'DisableBackupLog',
        6 => 'ModifyBackupObjects',
        7 => 'ModifyBackupSourceEndpoint',
        8 => 'ModifyStorageStrategy',
        9 => 'ModifyBackupPlanName',
        10 => 'ModifyBackupStrategy',
        11 => 'DescribeBackupPlanList',
        12 => 'DescribeRestoreRangeInfo',
        13 => 'DescribeBackupPlanBilling',
        14 => 'ConfigureBackupPlan',
        15 => 'RenewBackupPlan',
        16 => 'UpgradeBackupPlan',
        17 => 'ReleaseBackupPlan',
      ),
    ),
    1 => 
    array (
      'id' => 60096,
      'title' => '备份任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeIncrementBackupList',
        1 => 'DescribeFullBackupList',
      ),
    ),
    2 => 
    array (
      'id' => 60100,
      'title' => '恢复任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRestoreTask',
        1 => 'StartRestoreTask',
        2 => 'DescribeRestoreTaskList',
      ),
    ),
    3 => 
    array (
      'id' => 60104,
      'title' => '备份网关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeBackupGatewayList',
      ),
    ),
    4 => 
    array (
      'id' => 60118,
      'title' => '备份集下载',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFullBackupSetDownload',
        1 => 'CreateIncrementBackupSetDownload',
        2 => 'ModifyBackupSetDownloadRules',
        3 => 'DescribeBackupSetDownloadTaskList',
      ),
    ),
    5 => 
    array (
      'id' => 60106,
      'title' => '服务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGetDBListFromAgentTask',
        1 => 'DescribeNodeCidrList',
        2 => 'DescribeJobErrorCode',
        3 => 'DescribePreCheckProgressList',
        4 => 'DescribeDLAService',
        5 => 'GetDBListFromAgent',
        6 => 'DescribeRegions',
        7 => 'InitializeDbsServiceLinkedRole',
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
    'CreateBackupPlan' => 
    array (
      'summary' => '该接口用于创建一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBS地域，该参数为必填项，可通过[DescribeRegions](~~437238~~)查看DBS支持地域。

> 更多详情信息，请参见[服务接入点](~~437201~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格，取值如下：

- **micro**：入门型
- **small**：低配型
- **medium**：中配型
- **large**：高配型
- **xlarge**：高配型（无流量上限）

> 规格越高，备份与恢复的性能越高，更多信息，请参见[规格说明](~~84372~~)。
',
            'type' => 'string',
            'required' => true,
            'example' => 'micro',
          ),
        ),
        2 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值如下：

- **MySQL**
- **MSSQL**
- **Oracle**
- **MariaDB**
- **PostgreSQL**
- **DRDS**
- **MongoDB**
- **Redis**',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份方式，取值如下：
- **logical**：逻辑备份
- **physical**：物理备份
- **duplication**：转储备份',
            'type' => 'string',
            'required' => true,
            'example' => 'logical',
          ),
        ),
        4 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或者包月类型，取值如下：
- **Year**：包年
- **Month**：包月',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        5 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买时长，取值如下：
- 当参数**Period**为**Year**时，**UsedTime**取值为1~5。
- 当参数**Period**为**Month**时，**UsedTime**取值为1~11。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支付方式，取值如下：
- **postpay**：后付费（按量付费）
- **prepay**：预付费（包年包月）

> 默认为**prepay**。当**BackupMethod**为**duplication**支持**postpay**方式。',
            'type' => 'string',
            'required' => false,
            'example' => 'prepay',
          ),
        ),
        7 => 
        array (
          'name' => 'DatabaseRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库地域。
> 当**PayType**为**postpay**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'StorageRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储地域。
> 当**PayType**为**postpay**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例类型，取值如下：
- **RDS**
- **PolarDB**
- **DDS**：阿里云MongoDB
- **Kvstore**：阿里云Redis
- **Other**：通过IP:Port接入的数据库
- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）

> 当**PayType**为**postpay**时，此项必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        10 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数暂未开放使用。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        11 => 
        array (
          'name' => 'FromApp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于备注请求来源，默认值为OpenAPI，无需手动设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'OpenAPI',
          ),
        ),
        12 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输入任意字符串，用于保证请求幂等性。',
            'type' => 'string',
            'required' => false,
            'example' => 'KJSAHKJFHKJSHFKASHFKJADFHKDXXXX',
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
            'example' => 'rg-aekzecovzti****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回值详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7BCF6D62-885F-5A4A-91A1-679760E7****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbsrhahrsu2****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '21437345592****',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"7BCF6D62-885F-5A4A-91A1-679760E7****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"BackupPlanId\\": \\"dbsrhahrsu2****\\",\\n  \\"OrderId\\": \\"21437345592****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupPlanResponse>\\n    <RequestId>7BCF6D62-885F-5A4A-91A1-679760E7****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsrhahrsu2****</BackupPlanId>\\n    <OrderId>21437345592****</OrderId>\\n    <Success>true</Success>\\n</CreateBackupPlanResponse>","errorExample":""}]',
      'title' => '创建备份计划',
      'description' => '本接口对应的控制台操作，请参见[购买备份计划](~~65909~~)。',
    ),
    'CreateAndStartBackupPlan' => 
    array (
      'summary' => '该接口用于创建、配置并启动备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
备份计划ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbstooi0*******',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBS支持地域，可调用[DescribeRegions](~~437238~~)接口查看。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划的规格，取值：
- **micro**
- **small**
- **medium**
- **large**
- **xlarge**

> 规格越高，备份与恢复的性能越高。更多信息，请参见[规格说明](~~84372~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'micro',
          ),
        ),
        3 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值：
- **MySQL**
- **MSSQL**
- **Oracle**
- **MariaDB**
- **PostgreSQL**
- **DRDS**
- **MongoDB**
- **Redis**',
            'type' => 'string',
            'required' => true,
            'example' => 'MySQL',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份方式，取值：
- **logical**：逻辑备份
- **physical**：物理备份
- **duplication**：转储备份',
            'type' => 'string',
            'required' => true,
            'example' => 'logical',
          ),
        ),
        5 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或者包月类型，取值：
- **Year**：包年
- **Month**：包月',
            'type' => 'string',
            'required' => false,
            'example' => 'Year',
          ),
        ),
        6 => 
        array (
          'name' => 'UsedTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定购买时长，取值：
- 当参数**Period**为**Year**时，**UsedTime**取值为1~5。
- 当参数**Period**为**Month**时，**UsedTime**取值为1~11。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支付方式，取值：
- **postpay**：后付费（按量付费）
- **prepay**：预付费（包年包月）

> 默认**prepay**，目前只有**BackupMethod**为**duplication**时支持**postpay**。',
            'type' => 'string',
            'required' => false,
            'example' => 'postpay',
          ),
        ),
        8 => 
        array (
          'name' => 'DatabaseRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库地域。
> 当**PayType**为**postpay**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'StorageRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储地域。
> 当**PayType**为**postpay**时，该参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例类型，取值：
- **RDS**
- **PolarDB**
- **DDS**：阿里云MongoDB
- **Kvstore**：阿里云Redis
- **Other**：通过IP:Port接入的数据库
- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）
> 当**PayType**为**postpay**时，必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        11 => 
        array (
          'name' => 'StorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数暂未开放使用。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        12 => 
        array (
          'name' => 'FromApp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于备注请求来源，默认值为OpenApi，无需手动设置。',
            'type' => 'string',
            'required' => false,
            'example' => 'OpenApi',
          ),
        ),
        13 => 
        array (
          'name' => 'SourceEndpointInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库所在位置，取值：
- **RDS**
- **ECS**
- **Express**：通过专线/VPN网关/智能网关接入的数据库
- **Agent**：通过备份网关接入的数据库
- **DDS**：云MongoDB
- **Other**：通过IP:Port直连的数据库
- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
        14 => 
        array (
          'name' => 'SourceEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库地域。
> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**、**Agent**时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        15 => 
        array (
          'name' => 'SourceEndpointInstanceID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例ID。

> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**时，该参数必传。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-uf6wjk5xxxxxxxxxx',
          ),
        ),
        16 => 
        array (
          'name' => 'SourceEndpointIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。

> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-uf6wjk5xxxxxxx.mysql.rds.aliyuncs.com',
          ),
        ),
        17 => 
        array (
          'name' => 'SourceEndpointPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库端口。

> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**、**ECS**时，该参数必传。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        18 => 
        array (
          'name' => 'SourceEndpointDatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。

> 数据库类型为**PostgreSQL**、**MongoDB**时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRDS',
          ),
        ),
        19 => 
        array (
          'name' => 'SourceEndpointUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。

> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**MSSQL**时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRDS',
          ),
        ),
        20 => 
        array (
          'name' => 'SourceEndpointPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。

> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**MSSQL**时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testPassword',
          ),
        ),
        21 => 
        array (
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID。

> - **SourceEndpoint**.**InstanceType**为**agent**时，该参数必传。
> - 如何创建备份网关，请参见[添加备份网关](~~93250~~)。
> - 您可以通过[DescribeBackupGatewayList](~~437230~~)查看已有备份网关列表。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '23313123312',
          ),
        ),
        22 => 
        array (
          'name' => 'OSSBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS Bucket名称。
默认：系统自动生成新的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestOssBucket',
          ),
        ),
        23 => 
        array (
          'name' => 'BackupObjects',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份对象。',
            'type' => 'string',
            'required' => false,
            'example' => '[     {         "DBName":"待备份库名",         "SchemaName":"待备份 Schema 名",         "TableIncludes":[{             "TableName":"待备份表表名"         }],         "TableExcludes":[{             "TableName":"待备份库名不需要备份表的表名"         }]     } ]',
          ),
        ),
        24 => 
        array (
          'name' => 'BackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值：
- **Monday**：周一
- **Tuesday**：周二
- **Wednesday**：周三
- **Thursday**：周四
- **Friday**：周五
- **Saturday**：周六
- **Sunday**：周日

> 支持选择多个取值，用英文逗号（,）分开。',
            'type' => 'string',
            'required' => false,
            'example' => 'Monday',
          ),
        ),
        25 => 
        array (
          'name' => 'BackupStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份开始时间，格式为<i>HH:mm</i>（UTC时间）。',
            'type' => 'string',
            'required' => false,
            'example' => '14:22',
          ),
        ),
        26 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启增量日志备份，取值：
- **true**：开启
- **false**：关闭',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        27 => 
        array (
          'name' => 'BackupLogIntervalSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量时间间隔，以秒（s）为单位。
> 仅选择**物理备份**时需要传入该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        28 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份数据保留时间，取值：0~1825，默认为730天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '730',
          ),
        ),
        29 => 
        array (
          'name' => 'DuplicationInfrequentAccessPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为低频访问存储时间，默认为180天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '180',
          ),
        ),
        30 => 
        array (
          'name' => 'DuplicationArchivePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为归档冷备存储时间，默认为365天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '365',
          ),
        ),
        31 => 
        array (
          'name' => 'BackupPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义备份计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi0*******',
          ),
        ),
        32 => 
        array (
          'name' => 'SourceEndpointOracleSID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Oracle SID名称，数据库类型为Oracle时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        33 => 
        array (
          'name' => 'BackupStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内置存储类型：
- 空（默认）：备份数据存储在用户OSS上。
- system ：备份数据存储在DBS的内置OSS上。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        34 => 
        array (
          'name' => 'BackupSpeedLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘IO限制， 单位为KB/s。
> 该参数仅对MySQL物理备份生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '262144',
          ),
        ),
        35 => 
        array (
          'name' => 'BackupRateLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络带宽限制，单位为KB/s，最大允许10 GB。
> 该参数仅对MySQL物理备份生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '262144',
          ),
        ),
        36 => 
        array (
          'name' => 'BackupStrategyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值：
- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。
- **manual**：手动备份。

> 默认为**simple**。',
            'type' => 'string',
            'required' => false,
            'example' => 'simple',
          ),
        ),
        37 => 
        array (
          'name' => 'CrossAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '1648821913******',
          ),
        ),
        38 => 
        array (
          'name' => 'CrossRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的RAM角色名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test123',
          ),
        ),
        39 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASDASDASDSADASFCZXVZ',
          ),
        ),
        40 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzecovzti****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
              ),
              'CreateBackupSet' => 
              array (
                'description' => '是否开启备份集，返回值如下：
- **true**：开启
- **false**：关闭',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbs1hvb0wwwe****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2056157***',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"CreateBackupSet\\": true,\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"BackupPlanId\\": \\"dbs1hvb0wwwe****\\",\\n  \\"OrderId\\": \\"2056157***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAndStartBackupPlanResponse>\\n    <RequestId>3321E2F6-98E3-4B81-ADEC-9FD1BC06249A</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1hrlzt68t7ko1</BackupPlanId>\\n    <OrderId>208422747270728</OrderId>\\n    <Success>true</Success>\\n</CreateAndStartBackupPlanResponse>","errorExample":""}]',
      'title' => '创建并启动备份计划',
      'description' => '请确保在使用该接口前，已充分了解数据库备份DBS产品的[收费方式和价格](~~70005~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartBackupPlan' => 
    array (
      'summary' => '该接口用于启动一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsqdss5tmh****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回详情信息。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP·状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D13761C3-9971-5C02-B789-3F3CD159****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.  ',
              ),
              'CreatedFullBackupsetId' => 
              array (
                'description' => '全量备份集ID。',
                'type' => 'string',
                'example' => '1h7toien3****',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbsqdss5tm****',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D13761C3-9971-5C02-B789-3F3CD159****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"CreatedFullBackupsetId\\": \\"1h7toien3****\\",\\n  \\"BackupPlanId\\": \\"dbsqdss5tm****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartBackupPlanResponse>\\n    <RequestId>D13761C3-9971-5C02-B789-3F3CD159****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsqdss5tmh***</BackupPlanId>\\n    <CreatedFullBackupsetId>1h7toien3****</CreatedFullBackupsetId>\\n    <Success>true</Success>\\n</StartBackupPlanResponse>","errorExample":""}]',
      'title' => '启动备份计划',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableBackupLog' => 
    array (
      'summary' => '该接口用于开启备份计划中的增量备份。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi******',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbs',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否执行成功。返回值：
- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'findValidDBSJob error',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi******',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查。返回值：
- true：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。
- false：不会触发预检查。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi******\\",\\n  \\"NeedPrecheck\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<NeedPrecheck>false</NeedPrecheck>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
      'title' => '开启增量备份',
      'description' => '## 影响
开启增量备份不会产生任何费用，但因增量备份会生成对应的备份流量和存储量，该部分收费标准与全量备份的收费标准相同，且都可以用备份计划或存储包的免费额度进行抵扣。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopBackupPlan' => 
    array (
      'summary' => '该接口用于暂停一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01XXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'StopMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '暂停方式，取值：
- ALL：暂停备份计划、全量数据备份任务、增量日志备份任务、恢复任务
- PLAN：只暂停备份计划
',
            'type' => 'string',
            'required' => true,
            'example' => 'ALL',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbs1h****usfa',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\"\\n}","errorExample":""},{"type":"xml","example":"<StopBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</StopBackupPlanReponse>","errorExample":""}]',
      'title' => '暂停备份计划',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableBackupLog' => 
    array (
      'summary' => '该接口用于关闭备份计划中的增量备份。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCziJZNwH****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否执行成功。返回值：
- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'findValidDBSJob error',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01****',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查。返回值：
- true：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。
- false：不会触发预检查。',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi01****\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<NeedPrecheck>false</NeedPrecheck>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
      'title' => '关闭增量备份',
      'description' => '## 影响
关闭后，您的备份计划将不再进行增量备份。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupObjects' => 
    array (
      'summary' => '该接口用于修改一个DBS备份计划的备份对象。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbs1h****usfa',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupObjects',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BackupObjects 的定义格式为 JSON 字符串，定义如下：
```
[
    {
        "DBName":"待备份库名",
        "SchemaName":"待备份 Schema 名",
        "TableIncludes":[{
        	"TableName":"待备份表表名"
        }],
        "TableExcludes":[{
            "TableName":"待备份库名不需要备份表的表名"
        }]
    }
]
```

* 当用户只配置了`DBName`，不配置其他子对象的规则，那么表示迁移这个数据库下面的所有对象。
* 当用户配置了`DBName`，且配置了部分对象的规则，那么不配置的对象默认不迁移。各种对象名的定义可以支持如下的正则表达式：
	* 点号`.`：表示匹配除`\\r\\n`之外的任何单个字符。
	* 星号`*`：表示匹配前面子表达式任意次，`h*llo`匹配 `hllo`、`heeeello`等字符串。
	* 问号`?`：表示匹配前面子表达式零次或1次，`h.?llo`匹配`hllo`、`hello`，但不能匹配`haello`。
	* 字符集合`[characters]`：表示匹配方括号内任意一个字符，例如`h[aello]`匹配`hallo`、`hello`。
	* 负值字符集合`[^characters]`：表示不匹配方括号内任意一个字符，例如`h[^ae]llo`匹配`hcllo`、`hdllo`，但是不能匹配`hallo`、`hello`。
	* 字符范围`[character1-character2]`：表示 `character1-character2`范围内的字符都可以匹配，例如 `[0-9]`、`[a-z]`。

> `SchemaName` 和 `NewSchemaName`只用于 MSSQL，其他数据库的库名定义使用 `DBName`和`NewDBName`参数。',
            'type' => 'string',
            'required' => true,
            'example' => '[     {         "DBName":"17xxx92xxxx374",         "SchemaName":"gy9xnj8xxxxxx",         "TableIncludes":[{         	"TableName":"test1"         }],         "TableExcludes":[{             "TableName":"test2"         }]     } ]',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbs1h****usfa',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查，如果为true则需要再调用[StartBackupPlan](~~437206~~)接口启动备份计划。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\",\\n  \\"NeedPrecheck\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupObjectsReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupObjectsReponse>","errorExample":""}]',
      'title' => '修改备份对象',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupSourceEndpoint' => 
    array (
      'summary' => '该接口用于修改数据库备份源。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbs1h****usfa',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceEndpointInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库所在位置，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。取值如下：

- **RDS**
- **ECS**
- **Express**：通过专线/VPN网关/智能网关接入的数据库
- **Agent**：通过备份网关接入的数据库
- **DDS**：云MongoDB
- **Other**：通过IP:Port直连的数据库',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库地域，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceEndpointInstanceID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express时，该参数必传。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp1p8c29479jv****',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceEndpointIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为Express、Agent、Other时该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => '100.*.*.10:3306',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceEndpointPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库端口，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为Express、Agent、Other、ECS，该参数必传。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceEndpointDatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。

- 数据库类型为PostgreSQL、MongoDB时，该参数必传。
- 数据库所在位置为Agent且数据库类型为MSSQL时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceEndpointUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

数据库类型为Redis，或者数据库所在位置为Agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceEndpointPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。

数据库类型为Redis，或者数据库所在位置为Agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        9 => 
        array (
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为Agent时，该参数必传。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '21321323213',
          ),
        ),
        10 => 
        array (
          'name' => 'BackupObjects',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份对象，当数据库所在位置为Agent时，该参数非必须，其他场景均必传。可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{  "DBName":"待备份库名", "SchemaName":"待备份 Schema 名", "TableIncludes":[{ "TableName":"待备份表表名" }],  "TableExcludes":[{"TableName":"待备份库名不需要备份表的表名" }] } ]',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceEndpointOracleSID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Oracle SID名称，数据库类型为Oracle时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        12 => 
        array (
          'name' => 'CrossAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的UID，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '2xxx7778xxxxxxxxxx',
          ),
        ),
        13 => 
        array (
          'name' => 'CrossRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的RAM角色名称，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'test123',
          ),
        ),
        14 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbs1h****usfa',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查，如果为true则需要再调用StartBackupPlan接口启动备份计划。',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupSourceEndpointResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1h****usfa</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyBackupSourceEndpointResponse>","errorExample":""}]',
      'title' => '修改数据库备份源',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyStorageStrategy' => 
    array (
      'summary' => '该接口用于修改备份计划中的存储数据的生命周期。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsqdss5tmh****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份数据保留时间，单位为天，取值：0~1825。

> 默认为730（天）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '730',
          ),
        ),
        2 => 
        array (
          'name' => 'DuplicationInfrequentAccessPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为低频访问存储时间。需要小于归档冷备存储时间（DuplicationArchivePeriod参数）。更多关于低频访问存储的说明，请参见[存储类型介绍](~~51374~~)。
> 默认为180（天）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '190',
          ),
        ),
        3 => 
        array (
          'name' => 'DuplicationArchivePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为归档冷备存储时间。需要小于备份数据保留时间（BackupRetentionPeriod参数）。更多关于归档存储的说明，请参见[存储类型介绍](~~51374~~)。
> 默认为365（天）。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '366',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbstest',
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
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E995F91F-6F89-503B-9F7D-502F58FD****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'findValidDBSJob error',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbsqdss5tmh****',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查，返回值如下：

- **true**：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。
- **false**：不会触发预检查。',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"E995F91F-6F89-503B-9F7D-502F58FD****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbsqdss5tmh****\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyStorageStrategyResponse>\\n    <RequestId>E995F91F-6F89-503B-9F7D-502F58FD****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsqdss5tmh****</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyStorageStrategyResponse>","errorExample":""}]',
      'title' => '修改存储数据的生命周期',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupPlanName' => 
    array (
      'summary' => '该接口用于修改一个备份计划名称。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi0XXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi0XXXX',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi0XXXX',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi0XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPlanNameReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupPlanNameReponse>","errorExample":""}]',
      'title' => '修改备份计划名称',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupStrategy' => 
    array (
      'summary' => '该接口用于修改备份计划的备份时间。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01XXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值如下：
- Monday：周一
- Tuesday：周二
- Wednesday：周三
- Thursday：周四
- Friday：周五
- Saturday：周六
- Sunday：周日

> BackupPeriod值必须指定每周至少两天，且日期间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'Monday,Tuesday,Wednesday',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份开始时间，取值：格式：HH:mm。

> 该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '14:22',
          ),
        ),
        3 => 
        array (
          'name' => 'BackupStrategyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值：
- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。
- **manual**：手动备份。

> 默认为**simple**。',
            'type' => 'string',
            'required' => false,
            'example' => 'simple',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupLogIntervalSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量时间间隔，以秒（s）为单位。
> 仅支持物理备份。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01XXXX',
              ),
              'NeedPrecheck' => 
              array (
                'description' => '本次修改是否会触发预检查，如果为true则需要，再调用StartBackupPlan接口启动备份计划。',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01XXXX\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupStrategyReponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1h****usfa</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyBackupStrategyReponse>","errorExample":""}]',
      'title' => '修改备份时间',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPlanList' => 
    array (
      'summary' => '该接口用于查看一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，支持查询多个备份计划，英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbstooi01exXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DBS地域，可通过调用[DescribeRegions](~~437238~~)接口查看DBS支持地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值为1~100。

> 默认为**30**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'BackupPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test123',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupPlanStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划状态，取值：

* **wait**：未配置
* **init**：未启动（预检查失败）
* **running**：运行中
* **stop**：失败
* **pause**：暂停
* **locked**：锁定中
* **check_pass**：预检查通过',
            'type' => 'string',
            'required' => false,
            'example' => 'wait',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASDASDASDSADASFCZXVZ',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzecovzti****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
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
                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'InvalidParameterValid',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'TotalElements' => 
              array (
                'description' => '总备份计划数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackupPlanDetail' => 
                  array (
                    'description' => '备份计划详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回值。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CrossRoleName' => 
                        array (
                          'description' => '跨阿里云账号备份的RAM角色名称。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'SourceEndpointInstanceType' => 
                        array (
                          'description' => '数据库所在位置，返回值如下：
- **rds**
- **ecs**
- **express**：通过专线/VPN网关/智能网关接入的数据库
- **agent**：通过备份网关接入的数据库
- **dds**：云MongoDB
- **other**：通过IP:Port直连的数据库',
                          'type' => 'string',
                          'example' => 'rds',
                        ),
                        'BackupSetDownloadDir' => 
                        array (
                          'description' => '备份集下载服务器目录。',
                          'type' => 'string',
                          'example' => '*/test/test123',
                        ),
                        'SourceEndpointIpPort' => 
                        array (
                          'description' => '数据库连接地址。',
                          'type' => 'string',
                          'example' => '100.*.*.10:33204',
                        ),
                        'CrossAliyunId' => 
                        array (
                          'description' => '跨阿里云账号备份的uid。',
                          'type' => 'string',
                          'example' => '2xxx7778xxxxxxxxxx',
                        ),
                        'DuplicationArchivePeriod' => 
                        array (
                          'description' => '转为归档冷备存储时间（天）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '365',
                        ),
                        'BackupPlanId' => 
                        array (
                          'description' => '备份计划ID。',
                          'type' => 'string',
                          'example' => 'dbstooi01eXXXX',
                        ),
                        'EndTimestampForRestore' => 
                        array (
                          'description' => '数据库可恢复时间段的结束时间，格式为时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'BackupPlanStatus' => 
                        array (
                          'description' => '备份计划状态，返回值如下：
- **wait**：未配置
- **init**：未启动（预检查失败）
- **running**：运行中
- **stop**：失败
- **pause**：暂停
- **locked**：锁定中
- **check_pass**：预检查通过',
                          'type' => 'string',
                          'example' => 'init',
                        ),
                        'BackupSetDownloadFullDataFormat' => 
                        array (
                          'description' => '备份集下载全量数据格式：
* **Native**
* **SQL**
* **CSV**
* **JSON**',
                          'type' => 'string',
                          'example' => 'SQL',
                        ),
                        'BackupRetentionPeriod' => 
                        array (
                          'description' => '备份数据保留时间，返回值：0~1825（天）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '365',
                        ),
                        'OSSBucketRegion' => 
                        array (
                          'description' => 'OSS Bucket地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'SourceEndpointOracleSID' => 
                        array (
                          'description' => 'Oracle SID名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'BackupStorageType' => 
                        array (
                          'description' => '内置存储类型，返回值如下：

- 空（默认）：备份数据存储在用户OSS上。
- system ：备份数据存储在DBS的内置OSS上。',
                          'type' => 'string',
                          'example' => 'system',
                        ),
                        'BackupMethod' => 
                        array (
                          'description' => '备份方式，返回值如下：
- **logical**：逻辑备份
- **physical**：物理备份
- **duplication**：转储备份',
                          'type' => 'string',
                          'example' => 'logical',
                        ),
                        'SourceEndpointRegion' => 
                        array (
                          'description' => '数据库地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'BackupPeriod' => 
                        array (
                          'description' => '全量备份周期，返回值如下：
- **Monday**：周一
- **Tuesday**：周二
- **Wednesday**：周三
- **Thursday**：周四
- **Friday**：周五
- **Saturday**：周六
- **Sunday**：周日',
                          'type' => 'string',
                          'example' => 'Monday',
                        ),
                        'SourceEndpointDatabaseName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'BackupSetDownloadGatewayId' => 
                        array (
                          'description' => '备份集下载备份网关ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123123',
                        ),
                        'BackupPlanCreateTime' => 
                        array (
                          'description' => '备份计划创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1582527713000',
                        ),
                        'InstanceClass' => 
                        array (
                          'description' => '规格，返回值如下：

- **micro**：入门型
- **small**：低配型
- **medium**：中配型
- **large**：高配型
- **xlarge**：高配型（无流量上限）',
                          'type' => 'string',
                          'example' => 'micro',
                        ),
                        'BackupSetDownloadTargetType' => 
                        array (
                          'description' => '备份集下载目标类型。

> 唯一取值：agent，表示已安装备份网关。',
                          'type' => 'string',
                          'example' => 'agent',
                        ),
                        'DuplicationInfrequentAccessPeriod' => 
                        array (
                          'description' => '转为低频访问存储时间（天）。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '180',
                        ),
                        'BackupStartTime' => 
                        array (
                          'description' => '全量备份开始时间，格式为HH:mm。',
                          'type' => 'string',
                          'example' => '14:22',
                        ),
                        'ErrMessage' => 
                        array (
                          'description' => '预检查任务异常信息。',
                          'type' => 'string',
                          'example' => '  can not connect to oracle instance orcl with user dbs',
                        ),
                        'BackupObjects' => 
                        array (
                          'description' => '备份对象。',
                          'type' => 'string',
                          'example' => '[     {         \\"DBName\\":\\"待备份库名\\",         \\"SchemaName\\":\\"待备份 Schema 名\\",         \\"TableIncludes\\":[{             \\"TableName\\":\\"待备份表表名\\"         }],         \\"TableExcludes\\":[{             \\"TableName\\":\\"待备份库名不需要备份表的表名\\"         }]     } ]',
                        ),
                        'BeginTimestampForRestore' => 
                        array (
                          'description' => '可数据库恢复时间段的开始时间，返回值：1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'SourceEndpointInstanceID' => 
                        array (
                          'description' => '数据库实例ID。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'OpenBackupSetAutoDownload' => 
                        array (
                          'description' => '是否开启自动备份集下载功能。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'BackupPlanName' => 
                        array (
                          'description' => '备份计划名称。',
                          'type' => 'string',
                          'example' => 'dbstooi01e****',
                        ),
                        'OSSBucketName' => 
                        array (
                          'description' => 'OSS Bucket名称。',
                          'type' => 'string',
                          'example' => 'dbs-backup-1857XXXXX489',
                        ),
                        'BackupGatewayId' => 
                        array (
                          'description' => '备份网关ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '827362187368736',
                        ),
                        'SourceEndpointUserName' => 
                        array (
                          'description' => '数据库账号。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'BackupSetDownloadIncrementDataFormat' => 
                        array (
                          'description' => '备份集下载全量数据格式：
* **Native**
* **SQL**
* **CSV**
* **JSON**',
                          'type' => 'string',
                          'example' => 'SQL',
                        ),
                        'EnableBackupLog' => 
                        array (
                          'description' => '是否开启增量日志备份，返回值如下：
- **true**：开启
- **false**：关闭',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-aekzecovzti****',
                        ),
                        'DatabaseType' => 
                        array (
                          'description' => '数据库类型。',
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
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"InvalidParameterValid\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 4,\\n  \\"TotalElements\\": 100,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupPlanDetail\\": [\\n      {\\n        \\"CrossRoleName\\": \\"test123\\",\\n        \\"SourceEndpointInstanceType\\": \\"rds\\",\\n        \\"BackupSetDownloadDir\\": \\"*/test/test123\\",\\n        \\"SourceEndpointIpPort\\": \\"100.*.*.10:33204\\",\\n        \\"CrossAliyunId\\": \\"2xxx7778xxxxxxxxxx\\",\\n        \\"DuplicationArchivePeriod\\": 365,\\n        \\"BackupPlanId\\": \\"dbstooi01eXXXX\\",\\n        \\"EndTimestampForRestore\\": 1554560477000,\\n        \\"BackupPlanStatus\\": \\"init\\",\\n        \\"BackupSetDownloadFullDataFormat\\": \\"SQL\\",\\n        \\"BackupRetentionPeriod\\": 365,\\n        \\"OSSBucketRegion\\": \\"cn-hangzhou\\",\\n        \\"SourceEndpointOracleSID\\": \\"test\\",\\n        \\"BackupStorageType\\": \\"system\\",\\n        \\"BackupMethod\\": \\"logical\\",\\n        \\"SourceEndpointRegion\\": \\"cn-hangzhou\\",\\n        \\"BackupPeriod\\": \\"Monday\\",\\n        \\"SourceEndpointDatabaseName\\": \\"test\\",\\n        \\"BackupSetDownloadGatewayId\\": 123123,\\n        \\"BackupPlanCreateTime\\": 1582527713000,\\n        \\"InstanceClass\\": \\"micro\\",\\n        \\"BackupSetDownloadTargetType\\": \\"agent\\",\\n        \\"DuplicationInfrequentAccessPeriod\\": 180,\\n        \\"BackupStartTime\\": \\"14:22\\",\\n        \\"ErrMessage\\": \\"  can not connect to oracle instance orcl with user dbs\\",\\n        \\"BackupObjects\\": \\"[     {         \\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份库名\\\\\\\\\\\\\\",         \\\\\\\\\\\\\\"SchemaName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份 Schema 名\\\\\\\\\\\\\\",         \\\\\\\\\\\\\\"TableIncludes\\\\\\\\\\\\\\":[{             \\\\\\\\\\\\\\"TableName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份表表名\\\\\\\\\\\\\\"         }],         \\\\\\\\\\\\\\"TableExcludes\\\\\\\\\\\\\\":[{             \\\\\\\\\\\\\\"TableName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份库名不需要备份表的表名\\\\\\\\\\\\\\"         }]     } ]\\",\\n        \\"BeginTimestampForRestore\\": 1554560477000,\\n        \\"SourceEndpointInstanceID\\": \\"test\\",\\n        \\"OpenBackupSetAutoDownload\\": true,\\n        \\"BackupPlanName\\": \\"dbstooi01e****\\",\\n        \\"OSSBucketName\\": \\"dbs-backup-1857XXXXX489\\",\\n        \\"BackupGatewayId\\": 827362187368736,\\n        \\"SourceEndpointUserName\\": \\"test\\",\\n        \\"BackupSetDownloadIncrementDataFormat\\": \\"SQL\\",\\n        \\"EnableBackupLog\\": true,\\n        \\"ResourceGroupId\\": \\"rg-aekzecovzti****\\",\\n        \\"DatabaseType\\": \\"MySQL\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlanListResponse>\\n    <PageSize>30</PageSize>\\n    <RequestId>4F1888AC-1138-4995-B9FE-D2734F61C058</RequestId>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <Items>\\n        <BackupPlanDetail>\\n            <BackupPlanName>dbXXXXX7ltj</BackupPlanName>\\n            <BackupMethod>logical</BackupMethod>\\n            <BackupPlanCreateTime>1583000</BackupPlanCreateTime>\\n            <BackupPeriod>MONDAY</BackupPeriod>\\n            <BackupObjects>[     {         \\"DBName\\":\\"Database name to be backed up\\",         \\"SchemaName\\":\\"Schema name to be backed up\\",         \\"TableIncludes\\":[{             \\"TableName\\":\\"Table name of the table to be backed up\\"         }],         \\"TableExcludes\\":[{             \\"TableName\\":\\"The name of the database to be backed up does not need the name of the table to be backed up\\"         }]     } ]</BackupObjects>\\n            <SourceEndpointInstanceID>rm-bp1p8XXXXXv8pxe</SourceEndpointInstanceID>\\n            <InstanceClass>medium</InstanceClass>\\n            <OSSBucketRegion>cn-hangzhou</OSSBucketRegion>\\n            <SourceEndpointRegion>cn-hangzhou</SourceEndpointRegion>\\n            <SourceEndpointIpPort>100.X.X.10:33204</SourceEndpointIpPort>\\n            <DuplicationArchivePeriod>365</DuplicationArchivePeriod>\\n            <OSSBucketName>dbs-backup-1857XXXXX489</OSSBucketName>\\n            <BackupPlanStatus>init</BackupPlanStatus>\\n            <BackupStartTime>14:22</BackupStartTime>\\n            <EnableBackupLog>true</EnableBackupLog>\\n            <BackupPlanId>dbXXXXXx7ltj</BackupPlanId>\\n            <BackupRetentionPeriod>730</BackupRetentionPeriod>\\n            <SourceEndpointInstanceType>rds</SourceEndpointInstanceType>\\n            <SourceEndpointUserName>test</SourceEndpointUserName>\\n            <DuplicationInfrequentAccessPeriod>180</DuplicationInfrequentAccessPeriod>\\n        </BackupPlanDetail>\\n    </Items>\\n    <TotalPages>1</TotalPages>\\n    <Success>true</Success>\\n</DescribeBackupPlanListResponse>","errorExample":""}]',
      'title' => '查看备份计划',
      'description' => '请在使用本接口前，提前开通OSS服务，更多信息请参见[对象存储OSS](~~31817~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreRangeInfo' => 
    array (
      'summary' => '该接口用于查看一个备份计划可恢复时间段详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbssl67c7mx****',
          ),
        ),
        1 => 
        array (
          'name' => 'BeginTimestampForRestore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询可恢复开始时间，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1646674092000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTimestampForRestore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询可恢复结束时间，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1646846814000',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。    
',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'RecentlyRestore',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启最近恢复。',
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
            'description' => '接口返回信息如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E2BD9DFC-6760-5F49-97C5-DA739E29****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DBSRecoverRange' => 
                  array (
                    'description' => '可恢复时间段信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体详情记录。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTimestampForRestore' => 
                        array (
                          'description' => '可恢复结束时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1646760308000',
                        ),
                        'SourceEndpointInstanceType' => 
                        array (
                          'description' => '数据库所在位置。',
                          'type' => 'string',
                          'example' => 'rds',
                        ),
                        'RangeType' => 
                        array (
                          'description' => '可恢复时间段类型，返回值如下：
- **point**：该时间段为全量备份离散时间点。
- **range**：该时间段为连续备份时间段，可指定任意时间。',
                          'type' => 'string',
                          'example' => 'point',
                        ),
                        'BeginTimestampForRestore' => 
                        array (
                          'description' => '可恢复开始时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1646760282000',
                        ),
                        'SourceEndpointInstanceID' => 
                        array (
                          'description' => '数据库实例ID。',
                          'type' => 'string',
                          'example' => 'rm-bp106x9tk2c91****',
                        ),
                        'FullBackupList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FullBackupDetail' => 
                            array (
                              'description' => '当RangeType为point时，该字段展示这个时间段范围内所有的权利。备份点信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '具体详情如下。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'EndTime' => 
                                  array (
                                    'description' => '全量备份结束时间，返回值：1646760308000。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1646760308000',
                                  ),
                                  'StartTime' => 
                                  array (
                                    'description' => '全量备份开始时间，返回值：1646760282000。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1646760282000',
                                  ),
                                  'BackupSetId' => 
                                  array (
                                    'description' => '备份集ID。',
                                    'type' => 'string',
                                    'example' => 'qecnsxkd****',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"E2BD9DFC-6760-5F49-97C5-DA739E29****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"Items\\": {\\n    \\"DBSRecoverRange\\": [\\n      {\\n        \\"EndTimestampForRestore\\": 1646760308000,\\n        \\"SourceEndpointInstanceType\\": \\"rds\\",\\n        \\"RangeType\\": \\"point\\",\\n        \\"BeginTimestampForRestore\\": 1646760282000,\\n        \\"SourceEndpointInstanceID\\": \\"rm-bp106x9tk2c91****\\",\\n        \\"FullBackupList\\": {\\n          \\"FullBackupDetail\\": [\\n            {\\n              \\"EndTime\\": 1646760308000,\\n              \\"StartTime\\": 1646760282000,\\n              \\"BackupSetId\\": \\"qecnsxkd****\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRestoreRangeInfoResponse>\\n    <RequestId>E2BD9DFC-6760-5F49-97C5-DA739E29****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Items>\\n        <DBSRecoverRange>\\n            <RangeType>point</RangeType>\\n            <SourceEndpointInstanceID>rm-bp106x9tk2c91****</SourceEndpointInstanceID>\\n            <FullBackupList>\\n                <FullBackupDetail>\\n                    <EndTime>1646760308000</EndTime>\\n                    <StartTime>1646760282000</StartTime>\\n                    <BackupSetId>qecnsxkd****</BackupSetId>\\n                </FullBackupDetail>\\n            </FullBackupList>\\n            <SourceEndpointInstanceType>rds</SourceEndpointInstanceType>\\n            <EndTimestampForRestore>1646760308000</EndTimestampForRestore>\\n            <BeginTimestampForRestore>1646760282000</BeginTimestampForRestore>\\n        </DBSRecoverRange>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeRestoreRangeInfoResponse>","errorExample":""}]',
      'title' => '查看可恢复时间段详情',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupPlanBilling' => 
    array (
      'summary' => '该接口用于查看备份计划计费信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01ex****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。
',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ShowStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示存储类型。',
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
              'HttpStatusCode' => 
              array (
                'description' => '错误码值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD7BC7F5-4E3A-5DF3-BFF9-831503C4D9E3',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码字符串。',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '请求成功状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'This backupPlan can\'t support this action',
              ),
              'Item' => 
              array (
                'description' => '备份计划计费信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'BuyCreateTimestamp' => 
                  array (
                    'description' => '实例购买时间，格式为时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1658372830000',
                  ),
                  'FullStorageSize' => 
                  array (
                    'description' => '实例全量备份数据内置存储量，单位为字节（B）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '151',
                  ),
                  'BuyExpiredTimestamp' => 
                  array (
                    'description' => '实例到期时间，格式为时间戳。
> 该参数仅在BuyChargeType选择PREPAY时显示。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1661097600000',
                  ),
                  'BuySpec' => 
                  array (
                    'description' => '实例规格。',
                    'type' => 'string',
                    'example' => 'micro',
                  ),
                  'QuotaEndTimestamp' => 
                  array (
                    'description' => '免费备份流量计费周期结束时间，格式为时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1659283200000',
                  ),
                  'IsExpired' => 
                  array (
                    'description' => '实例是否过期。
> 该参数仅在BuyChargeType选择PREPAY时显示。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'QuotaStartTimestamp' => 
                  array (
                    'description' => '免费备份流量计费周期开始时间，格式为时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1656604800000',
                  ),
                  'TotalFreeBytes' => 
                  array (
                    'description' => '当月免费备份总流量，单位为字节（B）。
> 该参数仅在BuyChargeType选择PREPAY且IsFreeBytesUnlimited为false时显示。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '858993459200',
                  ),
                  'PaiedBytes' => 
                  array (
                    'description' => '当月付费备份流量合计，单位为字节（B）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UsedFullBytes' => 
                  array (
                    'description' => '当月付费全量备份流量，单位为字节（B）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'IsFreeBytesUnlimited' => 
                  array (
                    'description' => '实例是否为无备份流量上限规格。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ContStorageSize' => 
                  array (
                    'description' => '实例增量备份数据内置存储量，单位为字节（B）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10437039',
                  ),
                  'BuyChargeType' => 
                  array (
                    'description' => '购买费用类型，返回值如下：

- **PREPAY**：预付费（包年包月）
- **POSTPAY**：后付费（按量付费）',
                    'type' => 'string',
                    'example' => 'PREPAY',
                  ),
                  'UsedIncrementBytes' => 
                  array (
                    'description' => '当月付费增量备份流量，单位为字节（B）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '9406734',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"DD7BC7F5-4E3A-5DF3-BFF9-831503C4D9E3\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"Item\\": {\\n    \\"BuyCreateTimestamp\\": 1658372830000,\\n    \\"FullStorageSize\\": 151,\\n    \\"BuyExpiredTimestamp\\": 1661097600000,\\n    \\"BuySpec\\": \\"micro\\",\\n    \\"QuotaEndTimestamp\\": 1659283200000,\\n    \\"IsExpired\\": true,\\n    \\"QuotaStartTimestamp\\": 1656604800000,\\n    \\"TotalFreeBytes\\": 858993459200,\\n    \\"PaiedBytes\\": 0,\\n    \\"UsedFullBytes\\": 0,\\n    \\"IsFreeBytesUnlimited\\": true,\\n    \\"ContStorageSize\\": 10437039,\\n    \\"BuyChargeType\\": \\"PREPAY\\",\\n    \\"UsedIncrementBytes\\": 9406734\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlanBillingResponse>\\n<Item>\\n    <IsExpired/>\\n    <BuyExpiredTimestamp/>\\n    <TotalFreeBytes/>\\n    <PaiedBytes/>\\n    <QuotaStartTimestamp/>\\n    <FullStorageSize/>\\n    <BuyCreateTimestamp/>\\n    <IsFreeBytesUnlimited/>\\n    <QuotaEndTimestamp/>\\n    <ContStorageSize/>\\n    <BuySpec/>\\n    <BuyChargeType/>\\n    <UsedIncrementBytes/>\\n    <UsedFullBytes/>\\n</Item>\\n<RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n<HttpStatusCode>400</HttpStatusCode>\\n<ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>InvalidParameter</ErrCode>\\n</DescribeBackupPlanBillingResponse>\\n","errorExample":""}]',
      'title' => '查看备份计划计费信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConfigureBackupPlan' => 
    array (
      'summary' => '该接口用于配置一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi0*******',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceEndpointInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库所在位置，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。取值如下：

- **RDS**
- **ECS**
- **Express**：通过专线/VPN网关/智能网关接入的数据库
- **Agent**：通过备份网关接入的数据库
- **DDS**：云MongoDB
- **Other**：通过IP:Port直连的数据库',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库地域，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceEndpointInstanceID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**时，该参数必传。
',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-uf6wjk5*********',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceEndpointIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为**express**、**agent**、**other**时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-uf6wjk5*******.mysql.rds.aliyuncs.com',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceEndpointPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库端口，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**、**ECS**时，该参数必传。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceEndpointDatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> 数据库类型为**PostgreSQL**、**MongoDB**时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRDS',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceEndpointUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。

> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**SQL Server**时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testRDS',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceEndpointPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。

> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**SQL Server**时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'testPassword',
          ),
        ),
        9 => 
        array (
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **SourceEndpointInstanceType**为**agent**时，该参数必传。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '23313123312',
          ),
        ),
        10 => 
        array (
          'name' => 'OSSBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS Bucket名称。

> 系统默认自动生成新的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestOssBucket',
          ),
        ),
        11 => 
        array (
          'name' => 'BackupObjects',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份对象，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '[     {         "DBName":"待备份库名",         "SchemaName":"待备份 Schema 名",         "TableIncludes":[{             "TableName":"待备份表表名"         }],         "TableExcludes":[{             "TableName":"待备份库名不需要备份表的表名"         }]     } ]',
          ),
        ),
        12 => 
        array (
          'name' => 'BackupPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值：
- **Monday**：周一
- **Tuesday**：周二
- **Wednesday**：周三
- **Thursday**：周四
- **Friday**：周五
- **Saturday**：周六
- **Sunday**：周日',
            'type' => 'string',
            'required' => false,
            'example' => 'Monday',
          ),
        ),
        13 => 
        array (
          'name' => 'BackupStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份开始时间，格式为<i>HH:mm</i>Z（UTC时间）。可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '14:22',
          ),
        ),
        14 => 
        array (
          'name' => 'EnableBackupLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启增量日志备份，取值：
- **true**：开启
- **false**：关闭',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'BackupLogIntervalSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量时间间隔，以秒（s）为单位。
> 仅支持物理备份。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        16 => 
        array (
          'name' => 'BackupRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份数据保留时间，取值：0 ~ 1825，默认为730天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '730',
          ),
        ),
        17 => 
        array (
          'name' => 'DuplicationInfrequentAccessPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为低频访问存储时间，默认为180天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '180',
          ),
        ),
        18 => 
        array (
          'name' => 'DuplicationArchivePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转为归档冷备存储时间，默认为365天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '365',
          ),
        ),
        19 => 
        array (
          'name' => 'BackupPlanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义备份计划名称，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi0*******',
          ),
        ),
        20 => 
        array (
          'name' => 'SourceEndpointOracleSID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Oracle SID名称。

> 数据库类型为Oracle时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        21 => 
        array (
          'name' => 'BackupStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内置存储类型：
- 空（默认）：备份数据存储在用户OSS上。
- system ：备份数据存储在DBS的内置OSS上。',
            'type' => 'string',
            'required' => false,
            'example' => '无',
          ),
        ),
        22 => 
        array (
          'name' => 'BackupSpeedLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '磁盘IO限制 ， 单位为KB/s。
> 仅对MySQL物理备份生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '262144',
          ),
        ),
        23 => 
        array (
          'name' => 'BackupRateLimit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网络带宽限制， 单位为KB/s ，最大允许10GB。
> 仅对MySQL物理备份生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '262144',
          ),
        ),
        24 => 
        array (
          'name' => 'BackupStrategyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份周期，取值：
- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。
- **manual**：手动备份。

> 默认为**simple**。',
            'type' => 'string',
            'required' => false,
            'example' => 'simple',
          ),
        ),
        25 => 
        array (
          'name' => 'CrossAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的UID，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '2xxx7778xxxxxxxxxx',
          ),
        ),
        26 => 
        array (
          'name' => 'CrossRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的RAM角色名称，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'test123',
          ),
        ),
        27 => 
        array (
          'name' => 'AutoStartBackup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动备份。

- **true**：开启
- **false**：不开启',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        28 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
        29 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzecovzti****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '详情信息如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F1FB49D4-B504-47F1-9F43-D7EAB33F****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01ex****',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"F1FB49D4-B504-47F1-9F43-D7EAB33F****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"BackupPlanId\\": \\"dbstooi01ex****\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfigureBackupPlanResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbstooi01ex****</BackupPlanId>\\n    <Success>true</Success>\\n</ConfigureBackupPlanResponse>","errorExample":""}]',
      'title' => '配置备份计划',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewBackupPlan' => 
    array (
      'summary' => '该接口用于续费一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取此参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01exxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定预付费实例为包年或者包月类型，取值：
- Year：包年
- Month：包月',
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
            'description' => '指定购买时长，取值：
- 当参数Period为Year时，UsedTime取值为1~5。
- 当参数Period为Month时，UsedTime取值为1~11。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'HKAJHFIUEQWBFIJSNFOIWHN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'Http状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01exxx',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '202020202020',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01exxx\\",\\n  \\"OrderId\\": \\"202020202020\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<OrderId>2056157****</OrderId>\\n<Success>true</Success>\\n</RenewBackupPlanReponse>","errorExample":""}]',
      'title' => '续费备份计划',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeBackupPlan' => 
    array (
      'summary' => '该接口用于升级一个DBS备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01eXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格，取值：
- micro
- small
- medium
- large
- xlarge',
            'type' => 'string',
            'required' => true,
            'example' => 'micro',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'Http状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01XXXX',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2056157****',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01XXXX\\",\\n  \\"OrderId\\": \\"2056157****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<OrderId>2056157****</OrderId>\\n<Success>true</Success>\\n</UpgradeBackupPlanReponse>","errorExample":""}]',
      'title' => '升级备份计划',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseBackupPlan' => 
    array (
      'summary' => '该接口用于释放一个按量付费的备份计划。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbs',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否执行成功。返回值：
- true：执行成功
- false：执行失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'findValidDBSJob error',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01xxxx',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi01xxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>false</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
      'title' => '释放按量付费的备份计划',
      'description' => '## 影响
释放后，您的备份实例即会停止服务，不再产生费用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeIncrementBackupList' => 
    array (
      'summary' => '该接口用于查看DBS增量备份任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsqdss5tmh****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值30、50、100。

> 默认每页记录数为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'ShowStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示存储类型，取值如下：

- true
- false

> 默认true。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始备份时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1570701361528',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束备份时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1570701361600',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A5D52069-E8AA-5056-8C5C-654C3610****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。
',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。
',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalElements' => 
              array (
                'description' => '增量备份任务总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IncrementBackupFile' => 
                  array (
                    'description' => '增量备份任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '增量备份任务详情信息如下。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTime' => 
                        array (
                          'description' => '备份结束时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1648434713000',
                        ),
                        'BackupSetExpiredTime' => 
                        array (
                          'description' => '备份集保留到期时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1711506719000',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '备份开始时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1648433764000',
                        ),
                        'StorageMethod' => 
                        array (
                          'description' => '存储类型，返回值如下：

- **Standard**：标准存储
- **IA**：低频访问存储
- **Archive**：归档存储
- **UNKNOWN**：未知，通常是任务未完成时的状态',
                          'type' => 'string',
                          'example' => 'Standard',
                        ),
                        'BackupSetJobId' => 
                        array (
                          'description' => '备份集任务ID。',
                          'type' => 'string',
                          'example' => '1hv5g9wk4****',
                        ),
                        'BackupSetId' => 
                        array (
                          'description' => '备份集ID。',
                          'type' => 'string',
                          'example' => 'mysql-bin.00****',
                        ),
                        'BackupStatus' => 
                        array (
                          'description' => '备份任务状态，返回值如下：

- **INIT**：未启动
- **FILLING**：备份中
- **COMPLETED**：完成
- **UNCOMPLETED**：未完成',
                          'type' => 'string',
                          'example' => 'FILLING',
                        ),
                        'SourceEndpointIpPort' => 
                        array (
                          'description' => '数据库连接地址。',
                          'type' => 'string',
                          'example' => '172.1XX.103.1:4XXX',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '18535',
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 0,\\n  \\"RequestId\\": \\"A5D52069-E8AA-5056-8C5C-654C3610****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"IncrementBackupFile\\": [\\n      {\\n        \\"EndTime\\": 1648434713000,\\n        \\"BackupSetExpiredTime\\": 1711506719000,\\n        \\"StartTime\\": 1648433764000,\\n        \\"StorageMethod\\": \\"Standard\\",\\n        \\"BackupSetJobId\\": \\"1hv5g9wk4****\\",\\n        \\"BackupSetId\\": \\"mysql-bin.00****\\",\\n        \\"BackupStatus\\": \\"FILLING\\",\\n        \\"SourceEndpointIpPort\\": \\"172.1XX.103.1:4XXX\\",\\n        \\"BackupSize\\": 18535\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIncrementBackupListResponse>\\n    <RequestId>A5D52069-E8AA-5056-8C5C-654C3610****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <IncrementBackupFile>\\n            <SourceEndpointIpPort>172.1XX.103.1:4XXX</SourceEndpointIpPort>\\n            <EndTime>1648434713000</EndTime>\\n            <BackupSetJobId>1hv5g9wk4****</BackupSetJobId>\\n            <BackupSize>18535</BackupSize>\\n            <StartTime>1648433764000</StartTime>\\n            <BackupSetExpiredTime>1711506719000</BackupSetExpiredTime>\\n            <BackupSetId>mysql-bin.00****</BackupSetId>\\n            <BackupStatus>FILLING</BackupStatus>\\n        </IncrementBackupFile>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeIncrementBackupListResponse>","errorExample":""}]',
      'title' => '查看增量备份任务列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFullBackupList' => 
    array (
      'summary' => '该接口用于查看DBS全量备份任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbsr179qz******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值：
- 30
- 50
- 100

默认为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'ShowStorageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示存储类型。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1iukx5h******',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始备份时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1676887100',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束备份时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1676887128',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
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
                'example' => '636BC118-6080-4119-A6B5-C199CEC1037D',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。
',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否执行成功。返回值：
- **true**：执行成功。
- **false**：执行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalElements' => 
              array (
                'description' => '总全量备份任务数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FullBackupFile' => 
                  array (
                    'description' => '全量备份任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '全量备份任务详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FinishTime' => 
                        array (
                          'description' => '任务结束时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676887128000',
                        ),
                        'BackupStatus' => 
                        array (
                          'description' => '备份任务状态，取值：
- schedule：初始化中
- running：运行中
- finish：完成
- stop：失败
- pause：暂停',
                          'type' => 'string',
                          'example' => 'finish',
                        ),
                        'SourceEndpointIpPort' => 
                        array (
                          'description' => '数据库连接地址。',
                          'type' => 'string',
                          'example' => '121.XXX.XXX.144:3306',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务开始时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676886947000',
                        ),
                        'ErrMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'NULL',
                        ),
                        'BackupObjects' => 
                        array (
                          'description' => '备份对象。',
                          'type' => 'string',
                          'example' => '[{\\"DBName\\":\\"test\\"}]',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '备份结束时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676887128000',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '备份开始时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676887100000',
                        ),
                        'BackupSetExpiredTime' => 
                        array (
                          'description' => '备份集保留到期时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677491900000',
                        ),
                        'StorageMethod' => 
                        array (
                          'description' => '存储类型，取值：
- Standard：标准存储
- IA：低频访问存储
- Archive：归档存储
- UNKNOWN：未知，通常是任务未完成时的状态',
                          'type' => 'string',
                          'example' => 'Standard',
                        ),
                        'BackupSetId' => 
                        array (
                          'description' => '备份集ID。',
                          'type' => 'string',
                          'example' => '1iukx5h******',
                        ),
                        'BackupSize' => 
                        array (
                          'description' => '备份大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '580',
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"636BC118-6080-4119-A6B5-C199CEC1037D\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": {\\n    \\"FullBackupFile\\": [\\n      {\\n        \\"FinishTime\\": 1676887128000,\\n        \\"BackupStatus\\": \\"finish\\",\\n        \\"SourceEndpointIpPort\\": \\"121.XXX.XXX.144:3306\\",\\n        \\"CreateTime\\": 1676886947000,\\n        \\"ErrMessage\\": \\"NULL\\",\\n        \\"BackupObjects\\": \\"[{\\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"}]\\",\\n        \\"EndTime\\": 1676887128000,\\n        \\"StartTime\\": 1676887100000,\\n        \\"BackupSetExpiredTime\\": 1677491900000,\\n        \\"StorageMethod\\": \\"Standard\\",\\n        \\"BackupSetId\\": \\"1iukx5h******\\",\\n        \\"BackupSize\\": 580\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFullBackupListReponse>\\n<RequestId>636BC118-6080-4119-A6B5-C199CEC1037D</RequestId>\\n<PageSize>30</PageSize>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>1</TotalElements>\\n<TotalPages>1</TotalPages>\\n<Items>\\n    <FullBackupFile>\\n        <SourceEndpointIpPort>100.X.X.10:33204</SourceEndpointIpPort>\\n        <StorageMethod>Standard</StorageMethod>\\n        <BackupObjects>[{\\"DBName\\":\\"test_y\\"}]</BackupObjects>\\n        <EndTime>1583741465000</EndTime>\\n        <FinishTime>1583741466000</FinishTime>\\n        <BackupSize>151</BackupSize>\\n        <CreateTime>1583740896000</CreateTime>\\n        <StartTime>1583741439000</StartTime>\\n        <BackupSetExpiredTime>1646813439000</BackupSetExpiredTime>\\n        <BackupSetId>1ibh2XXXXXXX</BackupSetId>\\n        <BackupStatus>finish</BackupStatus>\\n    </FullBackupFile>\\n</Items>\\n<Success>true</Success>\\n</DescribeFullBackupListReponse>","errorExample":""}]',
      'title' => '查看全量备份任务列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateRestoreTask' => 
    array (
      'summary' => '该接口用于创建DBS恢复任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbs1hvb0ww****',
          ),
        ),
        1 => 
        array (
          'name' => 'DestinationEndpointInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库所在位置，取值：
- **RDS**
- **ECS**
- **Express**：通过专线/VPN网关/智能网关接入的数据库
- **Agent**：通过备份网关接入的数据库
- **DDS**：云MongoDB
- **Other**：通过IP:Port直连的数据库
- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）',
            'type' => 'string',
            'required' => true,
            'example' => 'RDS',
          ),
        ),
        2 => 
        array (
          'name' => 'DestinationEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例的地域。
>**DestinationEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationEndpointInstanceID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库实例ID。

> **DestinationEndpointInstanceType**为RDS、ECS、DDS、Express时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp1p8c29*****',
          ),
        ),
        4 => 
        array (
          'name' => 'DestinationEndpointIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。

> **DestinationEndpointInstanceType**为express、agent、other，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp*****9jv8pxero.mysql.rds.aliyuncs.com',
          ),
        ),
        5 => 
        array (
          'name' => 'DestinationEndpointPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库端口。

> **DestinationEndpointInstanceType**为express、agent、other、ECS，该参数必传。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        6 => 
        array (
          'name' => 'DestinationEndpointDatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。

> 数据库类型为PostgreSQL、MongoDB时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'DestinationEndpointUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库账号。

> 数据库类型为Redis，或者数据库所在位置为agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        8 => 
        array (
          'name' => 'DestinationEndpointPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码。

> 数据库类型为Redis，或者数据库所在位置为agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        9 => 
        array (
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID。

> **DestinationEndpointInstanceType**为agent时，该参数必传。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4312****',
          ),
        ),
        10 => 
        array (
          'name' => 'RestoreObjects',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复对象。

- 详情请参见下面的**RestoreObjects**参数定义，当数据库所在位置为agent时，该参数非必须，其他场景均必传。
- 传入模板：`[{ "DBName": "待恢复库名", "NewDBName": "目标待恢复库名" }] `

> 使用本API接口恢复对象仅支持恢复到数据库级别，如需配置指定表的恢复，请前往控制台进行操作。具体请参见[恢复数据库](~~85543~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL表级别恢复示例如下：
[{\\"DBName\\":\\"dbname\\", \\"NewDBName\\":\\"dbname1\\"}]',
          ),
        ),
        11 => 
        array (
          'name' => 'RestoreTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复时间，取值：1554560477000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1554560477000',
          ),
        ),
        12 => 
        array (
          'name' => 'BackupSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复所使用的全量备份集ID，和RestoreTime互斥。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbs1hvb0w*****',
          ),
        ),
        13 => 
        array (
          'name' => 'RestoreTaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复任务名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        14 => 
        array (
          'name' => 'DestinationEndpointOracleSID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Oracle SID名称。

> 数据库类型为Oracle时，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        15 => 
        array (
          'name' => 'RestoreDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '**DestinationEndpointInstanceType**为agent且备份计划为MySQL时必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        16 => 
        array (
          'name' => 'RestoreHome',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库程序目录。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        17 => 
        array (
          'name' => 'DuplicateConflict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '同名对象冲突处理方式，当前支持：

**renamenew**：遇到同名对象则重命名',
            'type' => 'string',
            'required' => false,
            'example' => 'renamenew',
          ),
        ),
        18 => 
        array (
          'name' => 'CrossAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的UID。',
            'type' => 'string',
            'required' => false,
            'example' => '2749528728********',
          ),
        ),
        19 => 
        array (
          'name' => 'CrossRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跨阿里云账号备份的RAM角色名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test123',
          ),
        ),
        20 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOC********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.  ',
              ),
              'RestoreTaskId' => 
              array (
                'description' => '恢复任务ID。',
                'type' => 'string',
                'example' => 's102h*****',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"RestoreTaskId\\": \\"s102h*****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRestoreTaskResponse>\\n<RestoreTaskId>s102hXXXXX</RestoreTaskId>\\n<RequestId>60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>\\n</CreateRestoreTaskResponse>\\n","errorExample":""}]',
      'title' => '创建恢复任务',
      'description' => '### 相关操作文档

- [恢复数据库](~~85543~~)
- [各类数据库恢复配置教程](~~197144~~)',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartRestoreTask' => 
    array (
      'summary' => '该接口用于启动一个DBS恢复任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'RestoreTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 's102h7rfXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.',
              ),
              'RestoreTaskId' => 
              array (
                'description' => '恢复任务ID。',
                'type' => 'string',
                'example' => 's102h7rfXXXX',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"RestoreTaskId\\": \\"s102h7rfXXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RestoreTaskId>s102h7rf5anq</RestoreTaskId>\\n<RequestId>60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '启动恢复任务',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRestoreTaskList' => 
    array (
      'summary' => '该接口用于查看DBS恢复任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。

> 请填入本参数BackupPlanId或RestoreTaskId。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbs1hvb0wwwXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复任务ID，支持多个查询，使用半角逗号（,）分隔。您可以调用[CreateRestoreTask](~~437226~~)接口获取该参数。

> 请填入本参数RestoreTaskId或BackupPlanId，同时填入时会导致报错。',
            'type' => 'string',
            'required' => false,
            'example' => 's102h7rf5anq',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值为1~100。

> 默认为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始备份时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1570701361528',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束备份时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1570701361528',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
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
                'example' => '9C397502-B4F2-4E22-AD97-C81F0049F3F3',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalElements' => 
              array (
                'description' => '总恢复任务数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RestoreTaskDetail' => 
                  array (
                    'description' => '备份计划详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RestoreStatus' => 
                        array (
                          'description' => '恢复任务状态，取值：
- init：未启动或预检查失败
- running：运行中
- stop：失败
- pause：暂停
- check_pass：预检查通过',
                          'type' => 'string',
                          'example' => 'running',
                        ),
                        'FullStruAfterRestoreProgress' => 
                        array (
                          'description' => '全量结构后置恢复进度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'CrossRoleName' => 
                        array (
                          'description' => '跨阿里云账号备份的RAM角色名称。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'RestoreDir' => 
                        array (
                          'description' => '恢复路径。',
                          'type' => 'string',
                          'example' => '100.X.X.10:33204',
                        ),
                        'CrossAliyunId' => 
                        array (
                          'description' => '跨阿里云账号备份的UID。',
                          'type' => 'string',
                          'example' => '2xxx7778xxxxxxxxxx',
                        ),
                        'RestoreObjects' => 
                        array (
                          'description' => '恢复对象。',
                          'type' => 'string',
                          'example' => '[     {         \\"DBName\\":\\"test\\"       } ]',
                        ),
                        'BackupPlanId' => 
                        array (
                          'description' => '备份计划ID。',
                          'type' => 'string',
                          'example' => 'dbs1hvb0wXXXX',
                        ),
                        'DestinationEndpointRegion' => 
                        array (
                          'description' => '数据库地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'RestoreTaskCreateTime' => 
                        array (
                          'description' => '恢复任务创建时间，取值：1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'DestinationEndpointUserName' => 
                        array (
                          'description' => '数据库账号。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'RestoreTaskFinishTime' => 
                        array (
                          'description' => '恢复任务完成时间，取值：1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'DestinationEndpointIpPort' => 
                        array (
                          'description' => '数据库连接地址。',
                          'type' => 'string',
                          'example' => '100.X.X.10:33204',
                        ),
                        'DestinationEndpointDatabaseName' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'DestinationEndpointInstanceType' => 
                        array (
                          'description' => '数据库所在位置，取值：
- RDS
- ECS
- Express：通过专线/VPN网关/智能网关接入的数据库
- agent：通过备份网关接入的数据库
- dds：云MongoDB
- other：通过IP:Port直连的数据库',
                          'type' => 'string',
                          'example' => 'RDS',
                        ),
                        'DestinationEndpointOracleSID' => 
                        array (
                          'description' => 'Oracle SID名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'FullStruforeRestoreProgress' => 
                        array (
                          'description' => '全量结构前置恢复进度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ErrMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'NULL',
                        ),
                        'RestoreTaskId' => 
                        array (
                          'description' => '恢复任务ID。',
                          'type' => 'string',
                          'example' => 's1XXXXXX',
                        ),
                        'FullDataRestoreProgress' => 
                        array (
                          'description' => '全量数据恢复进度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'ContinuousRestoreProgress' => 
                        array (
                          'description' => '增量日志恢复进度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'DestinationEndpointInstanceID' => 
                        array (
                          'description' => '数据库实例ID。',
                          'type' => 'string',
                          'example' => 'rm-bp1p8c2947XXX',
                        ),
                        'BackupSetId' => 
                        array (
                          'description' => '恢复所使用的全量备份集ID。',
                          'type' => 'string',
                          'example' => '1ibh2f5uXXX',
                        ),
                        'BackupGatewayId' => 
                        array (
                          'description' => '备份网关ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '324234332',
                        ),
                        'RestoreTaskName' => 
                        array (
                          'description' => '恢复任务名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'RestoreTime' => 
                        array (
                          'description' => '恢复时间，取值：1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"9C397502-B4F2-4E22-AD97-C81F0049F3F3\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"RestoreTaskDetail\\": [\\n      {\\n        \\"RestoreStatus\\": \\"running\\",\\n        \\"FullStruAfterRestoreProgress\\": 100,\\n        \\"CrossRoleName\\": \\"test123\\",\\n        \\"RestoreDir\\": \\"100.X.X.10:33204\\",\\n        \\"CrossAliyunId\\": \\"2xxx7778xxxxxxxxxx\\",\\n        \\"RestoreObjects\\": \\"[     {         \\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"       } ]\\",\\n        \\"BackupPlanId\\": \\"dbs1hvb0wXXXX\\",\\n        \\"DestinationEndpointRegion\\": \\"cn-hangzhou\\",\\n        \\"RestoreTaskCreateTime\\": 1554560477000,\\n        \\"DestinationEndpointUserName\\": \\"test\\",\\n        \\"RestoreTaskFinishTime\\": 1554560477000,\\n        \\"DestinationEndpointIpPort\\": \\"100.X.X.10:33204\\",\\n        \\"DestinationEndpointDatabaseName\\": \\"test\\",\\n        \\"DestinationEndpointInstanceType\\": \\"RDS\\",\\n        \\"DestinationEndpointOracleSID\\": \\"test\\",\\n        \\"FullStruforeRestoreProgress\\": 0,\\n        \\"ErrMessage\\": \\"NULL\\",\\n        \\"RestoreTaskId\\": \\"s1XXXXXX\\",\\n        \\"FullDataRestoreProgress\\": 100,\\n        \\"ContinuousRestoreProgress\\": 100,\\n        \\"DestinationEndpointInstanceID\\": \\"rm-bp1p8c2947XXX\\",\\n        \\"BackupSetId\\": \\"1ibh2f5uXXX\\",\\n        \\"BackupGatewayId\\": 324234332,\\n        \\"RestoreTaskName\\": \\"test\\",\\n        \\"RestoreTime\\": 1554560477000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PageSize>30</PageSize>\\n<RequestId>9C397502-B4F2-4E22-AD97-C81F0049F3F3</RequestId>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>1</TotalElements>\\n<Items>\\n    <RestoreTaskDetail>\\n        <FullStruAfterRestoreProgress>0</FullStruAfterRestoreProgress>\\n        <FullStruforeRestoreProgress>0</FullStruforeRestoreProgress>\\n        <BackupSetId>1ibXXXXX7qw</BackupSetId>\\n        <RestoreStatus>check_pass</RestoreStatus>\\n        <DestinationEndpointInstanceType>rds</DestinationEndpointInstanceType>\\n        <RestoreTime>1583741465000</RestoreTime>\\n        <DestinationEndpointRegion>cn-hangzhou</DestinationEndpointRegion>\\n        <FullDataRestoreProgress>0</FullDataRestoreProgress>\\n        <RestoreTaskId>s10XXXXnq</RestoreTaskId>\\n        <DestinationEndpointIpPort>100.X.X.10:33204</DestinationEndpointIpPort>\\n        <DestinationEndpointUserName>testygx</DestinationEndpointUserName>\\n        <RestoreObjects>[     {         \\"DBName\\":\\"test_ygx\\"       } ]</RestoreObjects>\\n        <RestoreTaskName>test</RestoreTaskName>\\n        <BackupPlanId>dbs1hvb0wwweusfa</BackupPlanId>\\n        <RestoreTaskCreateTime>1583743872000</RestoreTaskCreateTime>\\n        <DestinationEndpointInstanceID>rm-bp1p8c29479jv8pxe</DestinationEndpointInstanceID>\\n    </RestoreTaskDetail>\\n</Items>\\n<TotalPages>1</TotalPages>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看恢复任务列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupGatewayList' => 
    array (
      'summary' => '该接口用于查看DBS备份网关列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'description' => 'DBS地域，取值：
- **cn-hangzhou**：公有云杭州
- **cn-shanghai**：公有云上海
- **cn-qingdao**：公有云青岛
- **cn-beijing**：公有云北京
- **cn-shenzhen**：公有云深圳
- **cn-hongkong**：公有云中国香港
- **ap-southeat-1**：公有云新加坡
- **cn-hangzhou-finance**：金融云杭州
- **cn-shanghai-finance**：金融云上海
- **cn-shenzhen-finance**：金融云深圳',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Identifier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关唯一标识，支持多个查询，用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '7213527653217',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值：
- **30**
- **50**
- **100**

> 默认为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
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
                'example' => '46361705-8531-492F-807E-A97E482DD4A1',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.  ',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalElements' => 
              array (
                'description' => '总备份网关数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackupGateway' => 
                  array (
                    'description' => '备份网关详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'description' => '备份网关显示名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'BackupGatewayCreateTime' => 
                        array (
                          'description' => '备份网关创建时间，取值1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'BackupGatewayId' => 
                        array (
                          'description' => '备份网关ID。',
                          'type' => 'string',
                          'example' => '2321313123',
                        ),
                        'Region' => 
                        array (
                          'description' => '地域。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Identifier' => 
                        array (
                          'description' => '备份网关唯一标识。',
                          'type' => 'string',
                          'example' => 'sgdsajhdgu',
                        ),
                        'SourceEndpointInternetIP' => 
                        array (
                          'description' => '安装备份网关的主机公网IP。',
                          'type' => 'string',
                          'example' => 'XX.XX.XX.XX',
                        ),
                        'BackupGatewayStatus' => 
                        array (
                          'description' => '备份网关状态，取值：
- ONLINE：在线
- OFFLINE：离线
- STOPPED：停止
- UPGRADING：升级中',
                          'type' => 'string',
                          'example' => 'ONLINE',
                        ),
                        'SourceEndpointIntranetIP' => 
                        array (
                          'description' => '安装备份网关的主机私网IP。',
                          'type' => 'string',
                          'example' => 'XX.XX.XX.XX',
                        ),
                        'LastHeartbeatTime' => 
                        array (
                          'description' => '上次心跳汇报时间，取值：1554560477000。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554560477000',
                        ),
                        'SourceEndpointHostname' => 
                        array (
                          'description' => '安装备份网关的主机名称。',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"46361705-8531-492F-807E-A97E482DD4A1\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 0,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupGateway\\": [\\n      {\\n        \\"DisplayName\\": \\"test\\",\\n        \\"BackupGatewayCreateTime\\": 1554560477000,\\n        \\"BackupGatewayId\\": \\"2321313123\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Identifier\\": \\"sgdsajhdgu\\",\\n        \\"SourceEndpointInternetIP\\": \\"XX.XX.XX.XX\\",\\n        \\"BackupGatewayStatus\\": \\"ONLINE\\",\\n        \\"SourceEndpointIntranetIP\\": \\"XX.XX.XX.XX\\",\\n        \\"LastHeartbeatTime\\": 1554560477000,\\n        \\"SourceEndpointHostname\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PageSize>30</PageSize>\\n<RequestId>46361705-8531-492F-807E-A97E482DD4A1</RequestId>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>0</TotalElements>\\n<Items/>\\n<TotalPages>0</TotalPages>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看备份网关列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFullBackupSetDownload' => 
    array (
      'summary' => '该接口用于创建并启动全量备份集下载任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份集ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbs1hvXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupSetDataFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份集下载格式。取值：
- **Native**
- **SQL**
- **CSV** 
- **JSON**

> 默认CSV。
',
            'type' => 'string',
            'required' => false,
            'example' => 'SQL',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupSetDownloadTaskId' => 
              array (
                'description' => '备份集下载任务ID。',
                'type' => 'string',
                'example' => 'dbstooi01exxxxx',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupSetDownloadTaskId\\": \\"dbstooi01exxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFullBackupSetDownloadResponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupSetDownloadTaskId>dbstooi01exxxxx</BackupSetDownloadTaskId>\\n<Success>true</Success>\\n</CreateFullBackupSetDownloadResponse>\\n","errorExample":""}]',
      'title' => '创建全量备份集下载任务',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateIncrementBackupSetDownload' => 
    array (
      'summary' => '该接口用于创建并启动增量备份集下载任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量备份集ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01exxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupSetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量文件名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupSetDataFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '增量备份集下载格式。取值：
- **Native**
- **SQL**
- **CSV**  
- **JSON**

> 默认 Native。',
            'type' => 'string',
            'required' => false,
            'example' => 'Native',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid. ',
              ),
              'BackupSetDownloadTaskId' => 
              array (
                'description' => '备份集下载任务ID。',
                'type' => 'string',
                'example' => 'dbstooi01exxxxx',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupSetDownloadTaskId\\": \\"dbstooi01exxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIncrementBackupSetDownloadResponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupSetDownloadTaskId>dbstooi01exxxxx</BackupSetDownloadTaskId>\\n<Success>true</Success>\\n</CreateIncrementBackupSetDownloadResponse>","errorExample":""}]',
      'title' => '创建增量备份集下载任务',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyBackupSetDownloadRules' => 
    array (
      'summary' => '该接口用于开启、修改、关闭自动下载功能。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口查看。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'OpenAutoDownload',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自动下载，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载备份网关ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '23312323',
          ),
        ),
        3 => 
        array (
          'name' => 'FullDataFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载全量数据格式：
- Native
- SQL
- CSV
- JSON

> 默认 CSV。
',
            'type' => 'string',
            'required' => false,
            'example' => 'CSV',
          ),
        ),
        4 => 
        array (
          'name' => 'IncrementDataFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载增量数据格式：
- Native
- SQL
- CSV
- JSON

> 默认Native。',
            'type' => 'string',
            'required' => false,
            'example' => 'Native',
          ),
        ),
        5 => 
        array (
          'name' => 'BackupSetDownloadDir',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载服务器目录。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'BackupSetDownloadTargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载目标类型 。
> 默认agent：已安装备份网关，目前仅此项。
',
            'type' => 'string',
            'required' => false,
            'example' => 'agent',
          ),
        ),
        7 => 
        array (
          'name' => 'BackupSetDownloadTargetTypeLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载目标目录类型，如果是开启自动下载，则必填，取值：
- local
- nas
- ftp
- minio

> 默认为local。',
            'type' => 'string',
            'required' => false,
            'example' => 'local',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.  ',
              ),
              'BackupPlanId' => 
              array (
                'description' => '备份计划ID。',
                'type' => 'string',
                'example' => 'dbstooi01exxxx',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"BackupPlanId\\": \\"dbstooi01exxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupSetDownloadRulesResponse><RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01exxxx</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupSetDownloadRulesResponse>","errorExample":""}]',
      'title' => '设置备份集下载规则',
      'description' => '使用本接口前请先确认备份数据是否存储在DBS的内置OSS上，您可通过调用[DescribeBackupPlanList](~~437215~~)接口查看BackupStorageType取值情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeBackupSetDownloadTaskList' => 
    array (
      'summary' => '该接口用于查看DBS备份集下载列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。

> **BackupPlanId**或**BackupSetDownloadTaskId**任选其一作为请求参数必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbsqhnuhyw3****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupSetDownloadTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份集下载任务ID。

- 全量备份：可通过调用[CreateFullBackupSetDownload](~~437241~~)接口获取该参数的值。
- 增量备份：可通过调用[CreateIncrementBackupSetDownload](~~437242~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => 'urxgrxt7****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录数，取值30、50、100。

> 默认每页记录数为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，大于等于0且不超过Integer的最大值，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输入任意值，用于保证请求的幂等性，防止重复提交请求。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzXXXXXX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情信息。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'PageNum' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6DC3D286-E0E6-5988-A558-2184984B****',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- **true**：请求成功
- **false**：请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalElements' => 
              array (
                'description' => '总备份集下载记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页的记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'BackupSetDownloadTaskDetail' => 
                  array (
                    'description' => '备份计划详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '备份计划详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BackupSetDownloadStatus' => 
                        array (
                          'description' => '备份集下载状态，返回值如下：

- **checking**：预检查中
- **init**：预检查失败（未启动）
- **check_pass**：预检查通过
- **pause**：暂停
- **schedule**：等待调度
- **running**：运行中
- **stop**：失败
- **finish**：完成',
                          'type' => 'string',
                          'example' => 'finish',
                        ),
                        'BackupSetDataSize' => 
                        array (
                          'description' => '备份集数据大小。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '237837',
                        ),
                        'BackupSetDownloadTargetType' => 
                        array (
                          'description' => '备份集下载目标类型。

> 仅自动下载显示，agent表示已安装备份网关。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'BackupSetDownloadDir' => 
                        array (
                          'description' => '备份集下载服务器目录。

> 仅自动下载有值。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'ErrMessage' => 
                        array (
                          'description' => '异常信息。',
                          'type' => 'string',
                          'example' => 'java.lang.IndexOutOfBoundsException.',
                        ),
                        'BackupSetDownloadCreateTime' => 
                        array (
                          'description' => '创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1642044001000',
                        ),
                        'BackupPlanId' => 
                        array (
                          'description' => '备份计划ID。',
                          'type' => 'string',
                          'example' => 'qhnuhyw3****',
                        ),
                        'BackupSetDbType' => 
                        array (
                          'description' => '数据库类型。',
                          'type' => 'string',
                          'example' => 'MySQL',
                        ),
                        'BackupSetDownloadInternetUrl' => 
                        array (
                          'description' => '备份集公网下载地址。

> 仅手工下载类型，且转换完成的有值。',
                          'type' => 'string',
                          'example' => '"//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example"',
                        ),
                        'BackupSetId' => 
                        array (
                          'description' => '源备份集ID。',
                          'type' => 'string',
                          'example' => '1h7za2yws****',
                        ),
                        'BackupSetDownloadIntranetUrl' => 
                        array (
                          'description' => '备份集内网下载地址。

> 仅手工下载类型，且转换完成的有值。',
                          'type' => 'string',
                          'example' => '"//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example"',
                        ),
                        'BackupGatewayId' => 
                        array (
                          'description' => '备份集备份网关，仅自动下载有值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '无',
                        ),
                        'BackupSetDownloadWay' => 
                        array (
                          'description' => '下载类型，返回值如下：

- **manual**：手工
- **auto**：自动',
                          'type' => 'string',
                          'example' => 'manual',
                        ),
                        'BackupSetDownloadFinishTime' => 
                        array (
                          'description' => '完成时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1642044013000',
                        ),
                        'BackupSetJobType' => 
                        array (
                          'description' => '源备份集任务类型，返回值如下：

- **cbs_backup_sub_full**：逻辑全量任务
- **cbs_backup_sub_cont**：逻辑增量任务',
                          'type' => 'string',
                          'example' => 'cbs_backup_sub_cont',
                        ),
                        'BackupSetDownloadTaskId' => 
                        array (
                          'description' => '备份集下载任务ID。',
                          'type' => 'string',
                          'example' => 'urxgrxt7****',
                        ),
                        'BackupSetDownloadTaskName' => 
                        array (
                          'description' => '备份集下载任务名称。',
                          'type' => 'string',
                          'example' => '1h7za2yws****-ManualCont',
                        ),
                        'BackupSetDataFormat' => 
                        array (
                          'description' => '备份集下载数据格式，取值如下：

- **Native**
- **SQL**
- **CSV** 
- **JSON**',
                          'type' => 'string',
                          'example' => 'Native',
                        ),
                        'BackupSetCode' => 
                        array (
                          'description' => '源备份集编码。',
                          'type' => 'string',
                          'example' => 'mysql-bin.00XXXX',
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 0,\\n  \\"RequestId\\": \\"6DC3D286-E0E6-5988-A558-2184984B****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupSetDownloadTaskDetail\\": [\\n      {\\n        \\"BackupSetDownloadStatus\\": \\"finish\\",\\n        \\"BackupSetDataSize\\": 237837,\\n        \\"BackupSetDownloadTargetType\\": \\"无\\",\\n        \\"BackupSetDownloadDir\\": \\"无\\",\\n        \\"ErrMessage\\": \\"java.lang.IndexOutOfBoundsException.\\",\\n        \\"BackupSetDownloadCreateTime\\": 1642044001000,\\n        \\"BackupPlanId\\": \\"qhnuhyw3****\\",\\n        \\"BackupSetDbType\\": \\"MySQL\\",\\n        \\"BackupSetDownloadInternetUrl\\": \\"\\\\\\"//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example\\\\\\"\\",\\n        \\"BackupSetId\\": \\"1h7za2yws****\\",\\n        \\"BackupSetDownloadIntranetUrl\\": \\"\\\\\\"//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example\\\\\\"\\",\\n        \\"BackupGatewayId\\": 0,\\n        \\"BackupSetDownloadWay\\": \\"manual\\",\\n        \\"BackupSetDownloadFinishTime\\": 1642044013000,\\n        \\"BackupSetJobType\\": \\"cbs_backup_sub_cont\\",\\n        \\"BackupSetDownloadTaskId\\": \\"urxgrxt7****\\",\\n        \\"BackupSetDownloadTaskName\\": \\"1h7za2yws****-ManualCont\\",\\n        \\"BackupSetDataFormat\\": \\"Native\\",\\n        \\"BackupSetCode\\": \\"mysql-bin.00XXXX\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupSetDownloadTaskListResponse>\\n    <RequestId>6DC3D286-E0E6-5988-A558-2184984B****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <BackupSetDownloadTaskDetail>\\n            <BackupSetDbType>MySQL</BackupSetDbType>\\n            <BackupSetDownloadCreateTime>1642044001000</BackupSetDownloadCreateTime>\\n            <BackupSetDownloadTaskName>1h7za2yws****-ManualCont</BackupSetDownloadTaskName>\\n            <BackupSetDownloadWay>manual</BackupSetDownloadWay>\\n            <BackupSetCode>mysql-bin.00XXXX</BackupSetCode>\\n            <BackupSetId>1h7za2yws****</BackupSetId>\\n            <BackupSetDownloadStatus>finish</BackupSetDownloadStatus>\\n            <BackupSetDownloadIntranetUrl>//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example</BackupSetDownloadIntranetUrl>\\n            <BackupSetDownloadInternetUrl>//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example</BackupSetDownloadInternetUrl>\\n            <BackupSetDownloadTaskId>urxgrxt7****</BackupSetDownloadTaskId>\\n            <BackupSetDownloadFinishTime>1642044013000</BackupSetDownloadFinishTime>\\n            <BackupSetJobType>cbs_backup_sub_cont</BackupSetJobType>\\n            <BackupSetDataFormat>Native</BackupSetDataFormat>\\n            <BackupPlanId>qhnuhyw3****</BackupPlanId>\\n            <BackupSetDataSize>237837</BackupSetDataSize>\\n        </BackupSetDownloadTaskDetail>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeBackupSetDownloadTaskListResponse>","errorExample":""}]',
      'title' => '查看备份集下载列表',
    ),
    'CreateGetDBListFromAgentTask' => 
    array (
      'summary' => '该接口用于通过备份网关获取数据库列表任务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口查看。

> 此参数为必填项。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '160813',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型，取值：

- **MySQL**
- **MSSQL**
- **Oracle**
- **MariaDB**
- **PostgreSQL**
- **DRDS**
- **MongoDB**
- **Redis**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceEndpointIP',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接地址。',
            'type' => 'string',
            'required' => false,
            'example' => '123.0.XX.XX',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceEndpointPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接端口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。

',
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
              'HttpStatusCode' => 
              array (
                'description' => '错误码值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码字符串。
',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '请求状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'This backupPlan can\'t support this action',
              ),
              'TaskId' => 
              array (
                'description' => '异步任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"TaskId\\": 123456\\n}","errorExample":""},{"type":"xml","example":"<CreateGetDBListFromAgentTaskResponse>\\n<TaskId>123456</TaskId>\\n<RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n<HttpStatusCode>400</HttpStatusCode>\\n<ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>InvalidParameter</ErrCode>\\n</CreateGetDBListFromAgentTaskResponse>","errorExample":""}]',
      'title' => '创建数据库列表任务',
      'description' => '本API操作会返回TaskId，您可以使用[GetDBListFromAgent](~~437237~~)接口做结果查询。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeNodeCidrList' => 
    array (
      'summary' => '该接口用于查看DBS运行节点网段列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'description' => 'DBS地域，可通过调用[DescribeRegions](~~437238~~)接口查看DBS支持地域。',
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
            'description' => '用于保证请求的幂等性，防止重复提交请求。    
',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5B352E69-E7B1-4EA7-BB8E-29FFE969C791',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。
',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。
',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'IntranetIPs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IntranetIP' => 
                  array (
                    'description' => '内网网段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '内网网段。',
                      'type' => 'string',
                      'example' => '"10.X.X.0/24"',
                    ),
                  ),
                ),
              ),
              'InternetIPs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InternetIP' => 
                  array (
                    'description' => '公网网段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '公网网段。',
                      'type' => 'string',
                      'example' => '"10.X.X.0/24"',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"5B352E69-E7B1-4EA7-BB8E-29FFE969C791\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"IntranetIPs\\": {\\n    \\"IntranetIP\\": [\\n      \\"\\\\\\"10.X.X.0/24\\\\\\"\\"\\n    ]\\n  },\\n  \\"InternetIPs\\": {\\n    \\"InternetIP\\": [\\n      \\"\\\\\\"10.X.X.0/24\\\\\\"\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5B352E69-E7B1-4EA7-BB8E-29FFE969C791</RequestId>\\n<InternetIPs>\\n    <InternetIP>118.X.X.0/24</InternetIP>\\n    <InternetIP>47.X.X.0/24</InternetIP>\\n</InternetIPs>\\n<HttpStatusCode>200</HttpStatusCode>\\n<IntranetIPs>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n</IntranetIPs>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看DBS运行节点网段',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeJobErrorCode' => 
    array (
      'summary' => '该接口用于查看DBS任务错误码信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全量备份或恢复任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'r1iv62ud****',
          ),
        ),
        1 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '错误信息语言，取值如下：

- **en**：英文（默认值）
- **cn**：中文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。    
',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCz****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID.',
                'type' => 'string',
                'example' => '1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。
',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。
',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'Item' => 
              array (
                'description' => '错误码信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobState' => 
                  array (
                    'description' => '任务状态。',
                    'type' => 'string',
                    'example' => 'init',
                  ),
                  'ErrorMessage' => 
                  array (
                    'description' => '标准化错误信息。',
                    'type' => 'string',
                    'example' => 'Describe preCheck progress failed.',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'failed',
                  ),
                  'JobId' => 
                  array (
                    'description' => '全量备份或者恢复任务ID。',
                    'type' => 'string',
                    'example' => 'r1iv62ud****',
                  ),
                  'JobType' => 
                  array (
                    'description' => 'DBS内部任务类型id。',
                    'type' => 'string',
                    'example' => 'testId',
                  ),
                  'Language' => 
                  array (
                    'description' => '错误信息语言。',
                    'type' => 'string',
                    'example' => 'en',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Item\\": {\\n    \\"JobState\\": \\"init\\",\\n    \\"ErrorMessage\\": \\"Describe preCheck progress failed.\\",\\n    \\"ErrorCode\\": \\"failed\\",\\n    \\"JobId\\": \\"r1iv62ud****\\",\\n    \\"JobType\\": \\"testId\\",\\n    \\"Language\\": \\"en\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeJobErrorCodeReponse>\\n<Item>\\n    <Language>en</Language>\\n    <JobId>tooi0XXXX</JobId>\\n</Item>\\n<RequestId>1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>\\n</DescribeJobErrorCodeReponse>","errorExample":""}]',
      'title' => '查看任务错误码信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePreCheckProgressList' => 
    array (
      'summary' => '该接口用于查看备份计划预检查进度和恢复任务预检查进度。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID。

> 请填入BackupPlanId或RestoreTaskId。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbsr1l3ro21****',
          ),
        ),
        1 => 
        array (
          'name' => 'RestoreTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '恢复任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dbasdsa****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。    
',
            'type' => 'string',
            'required' => false,
            'example' => 'ETnLKlblzczshOTUbOCziJZNwH****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '预检查状态，返回值如下：
- **running**：运行中
- **failed**：失败
- **finish**：完成',
                'type' => 'string',
                'example' => 'finish',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C4A45FE1-A903-470D-B113-F12A4DF942AB',
              ),
              'Progress' => 
              array (
                'description' => '预检查进度，返回值范围：0~100。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。
',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '返回是否成功，返回值如下：

- **true**：返回成功
- **false**：返回失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。
',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.     ',
              ),
              'Items' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PreCheckProgressDetail' => 
                  array (
                    'description' => '进度明细列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FinishTime' => 
                        array (
                          'description' => '完成时间，格式为Unix时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1704351396000',
                        ),
                        'State' => 
                        array (
                          'description' => '进度状态，返回值如下：
- **init**：初始化
- **warning**：警告
- **catched**：异常
- **running**：运行中
- **failed**：失败
- **finish**：完成',
                          'type' => 'string',
                          'example' => 'warning',
                        ),
                        'BootTime' => 
                        array (
                          'description' => '启动时间，格式为Unix时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1704351395000',
                        ),
                        'JobId' => 
                        array (
                          'description' => '进度ID。',
                          'type' => 'string',
                          'example' => 'qxwmxh2b****',
                        ),
                        'Item' => 
                        array (
                          'description' => '检查项编码。',
                          'type' => 'string',
                          'example' => 'CHECK_BINLOG_ON',
                        ),
                        'ErrMsg' => 
                        array (
                          'description' => '异常信息。',
                          'type' => 'string',
                          'example' => 'java.lang.RuntimeException: Could not find any schema ......',
                        ),
                        'OrderNum' => 
                        array (
                          'description' => '序号。',
                          'type' => 'string',
                          'example' => '30',
                        ),
                        'Names' => 
                        array (
                          'description' => '检查项分组。',
                          'type' => 'string',
                          'example' => 'CHECK_BINLOG_ON_DETAIL',
                        ),
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"finish\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"C4A45FE1-A903-470D-B113-F12A4DF942AB\\",\\n  \\"Progress\\": 100,\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Items\\": {\\n    \\"PreCheckProgressDetail\\": [\\n      {\\n        \\"FinishTime\\": 1704351396000,\\n        \\"State\\": \\"warning\\",\\n        \\"BootTime\\": 1704351395000,\\n        \\"JobId\\": \\"qxwmxh2b****\\",\\n        \\"Item\\": \\"CHECK_BINLOG_ON\\",\\n        \\"ErrMsg\\": \\"java.lang.RuntimeException: Could not find any schema ......\\",\\n        \\"OrderNum\\": \\"30\\",\\n        \\"Names\\": \\"CHECK_BINLOG_ON_DETAIL\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"</DescribePreCheckProgressListReponse>\\n<Status>failed</Status>\\n<Progress>20</Progress>\\n<RequestId>C4A45FE1-A903-470D-B113-F12A4DF942AB</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Items>\\n    <PreCheckProgressDetail>\\n        <Names>CHECK_MYSQL_PASSOWRD_FORMAT_DETAIL</Names>\\n        <Item>CHECK_MYSQL_PASSOWRD_FORMAT</Item>\\n        <OrderNum>90</OrderNum>\\n        <State>init</State>\\n        <BootTime>1583734969000</BootTime>\\n        <JobId>uvk8f6fxnq5s</JobId>\\n    </PreCheckProgressDetail>\\n</Items>\\n<ErrMessage>java.lang.RuntimeException: Could not find any schema ......</ErrMessage>\\n<Success>true</Success>\\n</DescribePreCheckProgressListReponse>\\n\\n","errorExample":""}]',
      'title' => '查看预检查进度列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDLAService' => 
    array (
      'summary' => '该接口用于查看备份计划的数据查询服务（DLA）。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupPlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份计划ID，您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'dbstooi01exXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任意字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'DBS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Param.NotFound',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'State' => 
              array (
                'description' => '备份计划的DLA服务状态， 取值：
- **Running**：运行中
- **Closing**：关闭中
- **Closed**：已关闭',
                'type' => 'string',
                'example' => 'Running',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified parameter %s value is not valid.',
              ),
              'AutoAdd' => 
              array (
                'description' => '是否开启增量数据自动入湖，开启后，系统会自动将新产生的备份集添加入湖，取值：
- **true**：开启
- **false**：不开启',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HaveJobFailed' => 
              array (
                'description' => '返回结果中是否存在失败的DLA任务，取值：
- **true**：存在
- **false**：不存在',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"State\\": \\"Running\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"AutoAdd\\": true,\\n  \\"HaveJobFailed\\": false\\n}","errorExample":""},{"type":"xml","example":"<DescribeDLAServiceResponse>\\n    <AutoAdd>false</AutoAdd>\\n    <RequestId>6158A77E-AD6F-4C8F-BC0C-C8E1ABF836F3</RequestId>\\n    <HaveJobFailed>false</HaveJobFailed>\\n    <State>Closed</State>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Success>true</Success>\\n</DescribeDLAServiceResponse>","errorExample":""}]',
      'title' => '查看数据查询服务（DLA）',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDBListFromAgent' => 
    array (
      'summary' => '该接口用于通过备份网关获取物理备份的库表数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
          'name' => 'BackupGatewayId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关ID，可通过调用[DescribeBackupGatewayList](~~437230~~)接口获取该参数的值。

> 此参数为必填项。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '160***',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceEndpointRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备份网关地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异步任务ID，调用[CreateGetDBListFromAgentTask](~~437232~~)获取该参数的值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。

',
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
            'description' => '返回值详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => '错误码值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码字符串。
',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '请求成功状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'This backupPlan can\'t support this action',
              ),
              'DbList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'dbName' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库列表。',
                      'type' => 'string',
                      'example' => 'TaskDB',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"DbList\\": {\\n    \\"dbName\\": [\\n      \\"TaskDB\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDBListFromAgentReponse>\\n    <RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n    <Success>true</Success>\\n    <DbList>\\n        <dbName>TaskDB</dbName>\\n    </DbList>\\n    <ErrCode>InvalidParameter</ErrCode>\\n</GetDBListFromAgentReponse>","errorExample":""}]',
      'title' => '通过备份网关获取数据库列表',
      'description' => '您需要调用[CreateGetDBListFromAgentTask](~~437232~~)接口创建一个异步任务获取TaskId（异步任务ID）。将TaskId传入GetDBListFromAgent接口后，即可获取物理备份库表数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRegions' => 
    array (
      'summary' => '该接口用于查看DBS支持地域。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'description' => '返回值参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'description' => '错误码值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
              ),
              'ErrCode' => 
              array (
                'description' => '错误码字符串。
',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '请求状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'This backupPlan can\'t support this action',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RegionCode' => 
                  array (
                    'description' => '支持地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '支持地域列表。',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"Regions\\": {\\n    \\"RegionCode\\": [\\n      \\"cn-hangzhou\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <Regions>\\n        <RegionCode/>\\n    </Regions>\\n    <ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n    <Success>true</Success>\\n    <ErrCode>InvalidParameter</ErrCode>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查看DBS支持地域',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InitializeDbsServiceLinkedRole' => 
    array (
      'summary' => '该接口用于将服务关联角色（AliyunServiceRoleForDBS）授权给DBS。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
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
            'description' => '返回参数详情如下。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '空值。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'EntityAlreadyExists.Role',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'EntityAlreadyExists.Role : The role already exists:AliyunServiceRoleForDBS\\r\\nRequestId : 73******-3B4D-501A-9505-FA8B9******',
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
            'errorCode' => 'Request.Forbidden',
            'errorMessage' => 'Have no Permissions',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"null\\",\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"EntityAlreadyExists.Role\\",\\n  \\"ErrMessage\\": \\"EntityAlreadyExists.Role : The role already exists:AliyunServiceRoleForDBS\\\\\\\\r\\\\\\\\nRequestId : 73******-3B4D-501A-9505-FA8B9******\\"\\n}","errorExample":""},{"type":"xml","example":"<InitializeDbsServiceLinkedRoleResponse>\\r\\n    <RequestId>1FB42980-238F-43DC-942D-097562C01B5B</RequestId>\\r\\n    <ErrorCode>Success</ErrorCode>\\r\\n    <Success>true</Success>    \\r\\n</InitializeDbsServiceLinkedRoleResponse>","errorExample":""}]',
      'title' => '授权DBS服务关联角色',
      'description' => 'DBS接入您在阿里云购买的云数据库（如RDS、MongoDB、 Redis、PolarDB）或阿里云ECS上自建的数据库时， 需通过服务关联角色（AliyunServiceRoleForDBS）获取访问权限。更多信息，请参见[开通数据库备份DBS服务](~~162603~~)。',
      'requestParamsDescription' => '当前API无需请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dbs-api.cn-chengdu.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'dbs-api.cn-huhehaote.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dbs-api.ap-southeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'dbs-api.ap-southeast-2.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'dbs-api.ap-southeast-3.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'dbs-api.ap-southeast-5.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'dbs-api.ap-northeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dbs-api.eu-central-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'dbs-api.ap-south-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'dbs-api.eu-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dbs-api.cn-zhangjiakou.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
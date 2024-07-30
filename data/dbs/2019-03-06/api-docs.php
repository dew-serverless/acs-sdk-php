<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dbs',
        'version' => '2019-03-06',
    ],
    'directories' => [
        [
            'id' => 60077,
            'title' => '备份计划',
            'type' => 'directory',
            'children' => [
                'CreateBackupPlan',
                'CreateAndStartBackupPlan',
                'StartBackupPlan',
                'EnableBackupLog',
                'StopBackupPlan',
                'DisableBackupLog',
                'ModifyBackupObjects',
                'ModifyBackupSourceEndpoint',
                'ModifyStorageStrategy',
                'ModifyBackupPlanName',
                'ModifyBackupStrategy',
                'DescribeBackupPlanList',
                'DescribeRestoreRangeInfo',
                'DescribeBackupPlanBilling',
                'ConfigureBackupPlan',
                'RenewBackupPlan',
                'UpgradeBackupPlan',
                'ReleaseBackupPlan',
            ],
        ],
        [
            'id' => 60096,
            'title' => '备份任务',
            'type' => 'directory',
            'children' => [
                'DescribeIncrementBackupList',
                'DescribeFullBackupList',
            ],
        ],
        [
            'id' => 60100,
            'title' => '恢复任务',
            'type' => 'directory',
            'children' => [
                'CreateRestoreTask',
                'StartRestoreTask',
                'DescribeRestoreTaskList',
            ],
        ],
        [
            'id' => 60104,
            'title' => '备份网关',
            'type' => 'directory',
            'children' => [
                'DescribeBackupGatewayList',
            ],
        ],
        [
            'id' => 60118,
            'title' => '备份集下载',
            'type' => 'directory',
            'children' => [
                'CreateFullBackupSetDownload',
                'CreateIncrementBackupSetDownload',
                'ModifyBackupSetDownloadRules',
                'DescribeBackupSetDownloadTaskList',
            ],
        ],
        [
            'id' => 60106,
            'title' => '服务管理',
            'type' => 'directory',
            'children' => [
                'CreateGetDBListFromAgentTask',
                'DescribeNodeCidrList',
                'DescribeJobErrorCode',
                'DescribePreCheckProgressList',
                'DescribeDLAService',
                'GetDBListFromAgent',
                'DescribeRegions',
                'InitializeDbsServiceLinkedRole',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateBackupPlan' => [
            'summary' => '该接口用于创建一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBS地域，该参数为必填项，可通过[DescribeRegions](~~437238~~)查看DBS支持地域。'."\n"
                            ."\n"
                            .'> 更多详情信息，请参见[服务接入点](~~437201~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规格，取值如下：'."\n"
                            ."\n"
                            .'- **micro**：入门型'."\n"
                            .'- **small**：低配型'."\n"
                            .'- **medium**：中配型'."\n"
                            .'- **large**：高配型'."\n"
                            .'- **xlarge**：高配型（无流量上限）'."\n"
                            ."\n"
                            .'> 规格越高，备份与恢复的性能越高，更多信息，请参见[规格说明](~~84372~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'micro',
                    ],
                ],
                [
                    'name' => 'DatabaseType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，取值如下：'."\n"
                            ."\n"
                            .'- **MySQL**'."\n"
                            .'- **MSSQL**'."\n"
                            .'- **Oracle**'."\n"
                            .'- **MariaDB**'."\n"
                            .'- **PostgreSQL**'."\n"
                            .'- **DRDS**'."\n"
                            .'- **MongoDB**'."\n"
                            .'- **Redis**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'BackupMethod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份方式，取值如下：'."\n"
                            .'- **logical**：逻辑备份'."\n"
                            .'- **physical**：物理备份'."\n"
                            .'- **duplication**：转储备份',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'logical',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费实例为包年或者包月类型，取值如下：'."\n"
                            .'- **Year**：包年'."\n"
                            .'- **Month**：包月',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买时长，取值如下：'."\n"
                            .'- 当参数**Period**为**Year**时，**UsedTime**取值为1~5。'."\n"
                            .'- 当参数**Period**为**Month**时，**UsedTime**取值为1~11。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支付方式，取值如下：'."\n"
                            .'- **postpay**：后付费（按量付费）'."\n"
                            .'- **prepay**：预付费（包年包月）'."\n"
                            ."\n"
                            .'> 默认为**prepay**。当**BackupMethod**为**duplication**支持**postpay**方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prepay',
                    ],
                ],
                [
                    'name' => 'DatabaseRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库地域。'."\n"
                            .'> 当**PayType**为**postpay**时，该参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StorageRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储地域。'."\n"
                            .'> 当**PayType**为**postpay**时，该参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例类型，取值如下：'."\n"
                            .'- **RDS**'."\n"
                            .'- **PolarDB**'."\n"
                            .'- **DDS**：阿里云MongoDB'."\n"
                            .'- **Kvstore**：阿里云Redis'."\n"
                            .'- **Other**：通过IP:Port接入的数据库'."\n"
                            .'- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）'."\n"
                            ."\n"
                            .'> 当**PayType**为**postpay**时，此项必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数暂未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'FromApp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于备注请求来源，默认值为OpenAPI，无需手动设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OpenAPI',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '输入任意字符串，用于保证请求幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'KJSAHKJFHKJSHFKASHFKJADFHKDXXXX',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzecovzti****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7BCF6D62-885F-5A4A-91A1-679760E7****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbsrhahrsu2****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '21437345592****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"7BCF6D62-885F-5A4A-91A1-679760E7****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"BackupPlanId\\": \\"dbsrhahrsu2****\\",\\n  \\"OrderId\\": \\"21437345592****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupPlanResponse>\\n    <RequestId>7BCF6D62-885F-5A4A-91A1-679760E7****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsrhahrsu2****</BackupPlanId>\\n    <OrderId>21437345592****</OrderId>\\n    <Success>true</Success>\\n</CreateBackupPlanResponse>","errorExample":""}]',
            'title' => '创建备份计划',
            'description' => '本接口对应的控制台操作，请参见[购买备份计划](~~65909~~)。',
        ],
        'CreateAndStartBackupPlan' => [
            'summary' => '该接口用于创建、配置并启动备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'备份计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbstooi0*******',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBS支持地域，可调用[DescribeRegions](~~437238~~)接口查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划的规格，取值：'."\n"
                            .'- **micro**'."\n"
                            .'- **small**'."\n"
                            .'- **medium**'."\n"
                            .'- **large**'."\n"
                            .'- **xlarge**'."\n"
                            ."\n"
                            .'> 规格越高，备份与恢复的性能越高。更多信息，请参见[规格说明](~~84372~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'micro',
                    ],
                ],
                [
                    'name' => 'DatabaseType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，取值：'."\n"
                            .'- **MySQL**'."\n"
                            .'- **MSSQL**'."\n"
                            .'- **Oracle**'."\n"
                            .'- **MariaDB**'."\n"
                            .'- **PostgreSQL**'."\n"
                            .'- **DRDS**'."\n"
                            .'- **MongoDB**'."\n"
                            .'- **Redis**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'BackupMethod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份方式，取值：'."\n"
                            .'- **logical**：逻辑备份'."\n"
                            .'- **physical**：物理备份'."\n"
                            .'- **duplication**：转储备份',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'logical',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费实例为包年或者包月类型，取值：'."\n"
                            .'- **Year**：包年'."\n"
                            .'- **Month**：包月',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买时长，取值：'."\n"
                            .'- 当参数**Period**为**Year**时，**UsedTime**取值为1~5。'."\n"
                            .'- 当参数**Period**为**Month**时，**UsedTime**取值为1~11。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支付方式，取值：'."\n"
                            .'- **postpay**：后付费（按量付费）'."\n"
                            .'- **prepay**：预付费（包年包月）'."\n"
                            ."\n"
                            .'> 默认**prepay**，目前只有**BackupMethod**为**duplication**时支持**postpay**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'postpay',
                    ],
                ],
                [
                    'name' => 'DatabaseRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库地域。'."\n"
                            .'> 当**PayType**为**postpay**时，该参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StorageRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储地域。'."\n"
                            .'> 当**PayType**为**postpay**时，该参数必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例类型，取值：'."\n"
                            .'- **RDS**'."\n"
                            .'- **PolarDB**'."\n"
                            .'- **DDS**：阿里云MongoDB'."\n"
                            .'- **Kvstore**：阿里云Redis'."\n"
                            .'- **Other**：通过IP:Port接入的数据库'."\n"
                            .'- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）'."\n"
                            .'> 当**PayType**为**postpay**时，必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数暂未开放使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'FromApp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于备注请求来源，默认值为OpenApi，无需手动设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OpenApi',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库所在位置，取值：'."\n"
                            .'- **RDS**'."\n"
                            .'- **ECS**'."\n"
                            .'- **Express**：通过专线/VPN网关/智能网关接入的数据库'."\n"
                            .'- **Agent**：通过备份网关接入的数据库'."\n"
                            .'- **DDS**：云MongoDB'."\n"
                            .'- **Other**：通过IP:Port直连的数据库'."\n"
                            .'- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库地域。'."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**、**Agent**时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例ID。'."\n"
                            ."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**时，该参数必传。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6wjk5xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SourceEndpointIP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址。'."\n"
                            ."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6wjk5xxxxxxx.mysql.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库端口。'."\n"
                            ."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**、**ECS**时，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'SourceEndpointDatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。'."\n"
                            ."\n"
                            .'> 数据库类型为**PostgreSQL**、**MongoDB**时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。'."\n"
                            ."\n"
                            .'> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**MSSQL**时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。'."\n"
                            ."\n"
                            .'> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**MSSQL**时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testPassword',
                    ],
                ],
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID。'."\n"
                            ."\n"
                            .'> - **SourceEndpoint**.**InstanceType**为**agent**时，该参数必传。'."\n"
                            .'> - 如何创建备份网关，请参见[添加备份网关](~~93250~~)。'."\n"
                            .'> - 您可以通过[DescribeBackupGatewayList](~~437230~~)查看已有备份网关列表。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '23313123312',
                    ],
                ],
                [
                    'name' => 'OSSBucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS Bucket名称。'."\n"
                            .'默认：系统自动生成新的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestOssBucket',
                    ],
                ],
                [
                    'name' => 'BackupObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份对象。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[     {         "DBName":"待备份库名",         "SchemaName":"待备份 Schema 名",         "TableIncludes":[{             "TableName":"待备份表表名"         }],         "TableExcludes":[{             "TableName":"待备份库名不需要备份表的表名"         }]     } ]',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值：'."\n"
                            .'- **Monday**：周一'."\n"
                            .'- **Tuesday**：周二'."\n"
                            .'- **Wednesday**：周三'."\n"
                            .'- **Thursday**：周四'."\n"
                            .'- **Friday**：周五'."\n"
                            .'- **Saturday**：周六'."\n"
                            .'- **Sunday**：周日'."\n"
                            ."\n"
                            .'> 支持选择多个取值，用英文逗号（,）分开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Monday',
                    ],
                ],
                [
                    'name' => 'BackupStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份开始时间，格式为<i>HH:mm</i>（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '14:22',
                    ],
                ],
                [
                    'name' => 'EnableBackupLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启增量日志备份，取值：'."\n"
                            .'- **true**：开启'."\n"
                            .'- **false**：关闭',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'BackupLogIntervalSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量时间间隔，以秒（s）为单位。'."\n"
                            .'> 仅选择**物理备份**时需要传入该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'BackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份数据保留时间，取值：0~1825，默认为730天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '730',
                    ],
                ],
                [
                    'name' => 'DuplicationInfrequentAccessPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为低频访问存储时间，默认为180天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '180',
                    ],
                ],
                [
                    'name' => 'DuplicationArchivePeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为归档冷备存储时间，默认为365天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BackupPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义备份计划名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi0*******',
                    ],
                ],
                [
                    'name' => 'SourceEndpointOracleSID',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Oracle SID名称，数据库类型为Oracle时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'BackupStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内置存储类型：'."\n"
                            .'- 空（默认）：备份数据存储在用户OSS上。'."\n"
                            .'- system ：备份数据存储在DBS的内置OSS上。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'BackupSpeedLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘IO限制， 单位为KB/s。'."\n"
                            .'> 该参数仅对MySQL物理备份生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '262144',
                    ],
                ],
                [
                    'name' => 'BackupRateLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络带宽限制，单位为KB/s，最大允许10 GB。'."\n"
                            .'> 该参数仅对MySQL物理备份生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '262144',
                    ],
                ],
                [
                    'name' => 'BackupStrategyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值：'."\n"
                            .'- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。'."\n"
                            .'- **manual**：手动备份。'."\n"
                            ."\n"
                            .'> 默认为**simple**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'simple',
                    ],
                ],
                [
                    'name' => 'CrossAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1648821913******',
                    ],
                ],
                [
                    'name' => 'CrossRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的RAM角色名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASDASDASDSADASFCZXVZ',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzecovzti****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'CreateBackupSet' => [
                                'description' => '是否开启备份集，返回值如下：'."\n"
                                    .'- **true**：开启'."\n"
                                    .'- **false**：关闭',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbs1hvb0wwwe****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2056157***',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"CreateBackupSet\\": true,\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"BackupPlanId\\": \\"dbs1hvb0wwwe****\\",\\n  \\"OrderId\\": \\"2056157***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAndStartBackupPlanResponse>\\n    <RequestId>3321E2F6-98E3-4B81-ADEC-9FD1BC06249A</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1hrlzt68t7ko1</BackupPlanId>\\n    <OrderId>208422747270728</OrderId>\\n    <Success>true</Success>\\n</CreateAndStartBackupPlanResponse>","errorExample":""}]',
            'title' => '创建并启动备份计划',
            'description' => '请确保在使用该接口前，已充分了解数据库备份DBS产品的[收费方式和价格](~~70005~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartBackupPlan' => [
            'summary' => '该接口用于启动一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbsqdss5tmh****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回详情信息。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP·状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D13761C3-9971-5C02-B789-3F3CD159****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.  ',
                            ],
                            'CreatedFullBackupsetId' => [
                                'description' => '全量备份集ID。',
                                'type' => 'string',
                                'example' => '1h7toien3****',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbsqdss5tm****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D13761C3-9971-5C02-B789-3F3CD159****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"CreatedFullBackupsetId\\": \\"1h7toien3****\\",\\n  \\"BackupPlanId\\": \\"dbsqdss5tm****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartBackupPlanResponse>\\n    <RequestId>D13761C3-9971-5C02-B789-3F3CD159****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsqdss5tmh***</BackupPlanId>\\n    <CreatedFullBackupsetId>1h7toien3****</CreatedFullBackupsetId>\\n    <Success>true</Success>\\n</StartBackupPlanResponse>","errorExample":""}]',
            'title' => '启动备份计划',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableBackupLog' => [
            'summary' => '该接口用于开启备份计划中的增量备份。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi******',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbs',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- true：执行成功'."\n"
                                    .'- false：执行失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'findValidDBSJob error',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi******',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查。返回值：'."\n"
                                    .'- true：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。'."\n"
                                    .'- false：不会触发预检查。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi******\\",\\n  \\"NeedPrecheck\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<NeedPrecheck>false</NeedPrecheck>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
            'title' => '开启增量备份',
            'description' => '## 影响'."\n"
                .'开启增量备份不会产生任何费用，但因增量备份会生成对应的备份流量和存储量，该部分收费标准与全量备份的收费标准相同，且都可以用备份计划或存储包的免费额度进行抵扣。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopBackupPlan' => [
            'summary' => '该接口用于暂停一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01XXXX',
                    ],
                ],
                [
                    'name' => 'StopMethod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '暂停方式，取值：'."\n"
                            .'- ALL：暂停备份计划、全量数据备份任务、增量日志备份任务、恢复任务'."\n"
                            .'- PLAN：只暂停备份计划'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbs1h****usfa',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\"\\n}","errorExample":""},{"type":"xml","example":"<StopBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</StopBackupPlanReponse>","errorExample":""}]',
            'title' => '暂停备份计划',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableBackupLog' => [
            'summary' => '该接口用于关闭备份计划中的增量备份。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCziJZNwH****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- true：执行成功'."\n"
                                    .'- false：执行失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'findValidDBSJob error',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01****',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查。返回值：'."\n"
                                    .'- true：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。'."\n"
                                    .'- false：不会触发预检查。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi01****\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<NeedPrecheck>false</NeedPrecheck>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
            'title' => '关闭增量备份',
            'description' => '## 影响'."\n"
                .'关闭后，您的备份计划将不再进行增量备份。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupObjects' => [
            'summary' => '该接口用于修改一个DBS备份计划的备份对象。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbs1h****usfa',
                    ],
                ],
                [
                    'name' => 'BackupObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BackupObjects 的定义格式为 JSON 字符串，定义如下：'."\n"
                            .'```'."\n"
                            .'['."\n"
                            .'    {'."\n"
                            .'        "DBName":"待备份库名",'."\n"
                            .'        "SchemaName":"待备份 Schema 名",'."\n"
                            .'        "TableIncludes":[{'."\n"
                            .'        	"TableName":"待备份表表名"'."\n"
                            .'        }],'."\n"
                            .'        "TableExcludes":[{'."\n"
                            .'            "TableName":"待备份库名不需要备份表的表名"'."\n"
                            .'        }]'."\n"
                            .'    }'."\n"
                            .']'."\n"
                            .'```'."\n"
                            ."\n"
                            .'* 当用户只配置了`DBName`，不配置其他子对象的规则，那么表示迁移这个数据库下面的所有对象。'."\n"
                            .'* 当用户配置了`DBName`，且配置了部分对象的规则，那么不配置的对象默认不迁移。各种对象名的定义可以支持如下的正则表达式：'."\n"
                            .'	* 点号`.`：表示匹配除`\\r\\n`之外的任何单个字符。'."\n"
                            .'	* 星号`*`：表示匹配前面子表达式任意次，`h*llo`匹配 `hllo`、`heeeello`等字符串。'."\n"
                            .'	* 问号`?`：表示匹配前面子表达式零次或1次，`h.?llo`匹配`hllo`、`hello`，但不能匹配`haello`。'."\n"
                            .'	* 字符集合`[characters]`：表示匹配方括号内任意一个字符，例如`h[aello]`匹配`hallo`、`hello`。'."\n"
                            .'	* 负值字符集合`[^characters]`：表示不匹配方括号内任意一个字符，例如`h[^ae]llo`匹配`hcllo`、`hdllo`，但是不能匹配`hallo`、`hello`。'."\n"
                            .'	* 字符范围`[character1-character2]`：表示 `character1-character2`范围内的字符都可以匹配，例如 `[0-9]`、`[a-z]`。'."\n"
                            ."\n"
                            .'> `SchemaName` 和 `NewSchemaName`只用于 MSSQL，其他数据库的库名定义使用 `DBName`和`NewDBName`参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[     {         "DBName":"17xxx92xxxx374",         "SchemaName":"gy9xnj8xxxxxx",         "TableIncludes":[{         	"TableName":"test1"         }],         "TableExcludes":[{             "TableName":"test2"         }]     } ]',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbs1h****usfa',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查，如果为true则需要再调用[StartBackupPlan](~~437206~~)接口启动备份计划。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\",\\n  \\"NeedPrecheck\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupObjectsReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupObjectsReponse>","errorExample":""}]',
            'title' => '修改备份对象',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupSourceEndpoint' => [
            'summary' => '该接口用于修改数据库备份源。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbs1h****usfa',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库所在位置，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。取值如下：'."\n"
                            ."\n"
                            .'- **RDS**'."\n"
                            .'- **ECS**'."\n"
                            .'- **Express**：通过专线/VPN网关/智能网关接入的数据库'."\n"
                            .'- **Agent**：通过备份网关接入的数据库'."\n"
                            .'- **DDS**：云MongoDB'."\n"
                            .'- **Other**：通过IP:Port直连的数据库',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库地域，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express时，该参数必传。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp1p8c29479jv****',
                    ],
                ],
                [
                    'name' => 'SourceEndpointIP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为Express、Agent、Other时该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.*.*.10:3306',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库端口，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为Express、Agent、Other、ECS，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'SourceEndpointDatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。'."\n"
                            ."\n"
                            .'- 数据库类型为PostgreSQL、MongoDB时，该参数必传。'."\n"
                            .'- 数据库所在位置为Agent且数据库类型为MSSQL时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SourceEndpointUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'数据库类型为Redis，或者数据库所在位置为Agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。'."\n"
                            ."\n"
                            .'数据库类型为Redis，或者数据库所在位置为Agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为Agent时，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '21321323213',
                    ],
                ],
                [
                    'name' => 'BackupObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份对象，当数据库所在位置为Agent时，该参数非必须，其他场景均必传。可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{  "DBName":"待备份库名", "SchemaName":"待备份 Schema 名", "TableIncludes":[{ "TableName":"待备份表表名" }],  "TableExcludes":[{"TableName":"待备份库名不需要备份表的表名" }] } ]',
                    ],
                ],
                [
                    'name' => 'SourceEndpointOracleSID',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Oracle SID名称，数据库类型为Oracle时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'CrossAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的UID，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2xxx7778xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'CrossRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的RAM角色名称，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22E****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbs1h****usfa',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查，如果为true则需要再调用StartBackupPlan接口启动备份计划。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22E****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbs1h****usfa\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupSourceEndpointResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1h****usfa</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyBackupSourceEndpointResponse>","errorExample":""}]',
            'title' => '修改数据库备份源',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyStorageStrategy' => [
            'summary' => '该接口用于修改备份计划中的存储数据的生命周期。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbsqdss5tmh****',
                    ],
                ],
                [
                    'name' => 'BackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份数据保留时间，单位为天，取值：0~1825。'."\n"
                            ."\n"
                            .'> 默认为730（天）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '730',
                    ],
                ],
                [
                    'name' => 'DuplicationInfrequentAccessPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为低频访问存储时间。需要小于归档冷备存储时间（DuplicationArchivePeriod参数）。更多关于低频访问存储的说明，请参见[存储类型介绍](~~51374~~)。'."\n"
                            .'> 默认为180（天）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '190',
                    ],
                ],
                [
                    'name' => 'DuplicationArchivePeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为归档冷备存储时间。需要小于备份数据保留时间（BackupRetentionPeriod参数）。更多关于归档存储的说明，请参见[存储类型介绍](~~51374~~)。'."\n"
                            .'> 默认为365（天）。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '366',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbstest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E995F91F-6F89-503B-9F7D-502F58FD****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'findValidDBSJob error',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbsqdss5tmh****',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：已触发预检查，且需要您手动调用[StartBackupPlan](~~437206~~)接口，启动备份计划。'."\n"
                                    .'- **false**：不会触发预检查。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"E995F91F-6F89-503B-9F7D-502F58FD****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbsqdss5tmh****\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyStorageStrategyResponse>\\n    <RequestId>E995F91F-6F89-503B-9F7D-502F58FD****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbsqdss5tmh****</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyStorageStrategyResponse>","errorExample":""}]',
            'title' => '修改存储数据的生命周期',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupPlanName' => [
            'summary' => '该接口用于修改一个备份计划名称。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi0XXXX',
                    ],
                ],
                [
                    'name' => 'BackupPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi0XXXX',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi0XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi0XXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPlanNameReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupPlanNameReponse>","errorExample":""}]',
            'title' => '修改备份计划名称',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupStrategy' => [
            'summary' => '该接口用于修改备份计划的备份时间。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01XXXX',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值如下：'."\n"
                            .'- Monday：周一'."\n"
                            .'- Tuesday：周二'."\n"
                            .'- Wednesday：周三'."\n"
                            .'- Thursday：周四'."\n"
                            .'- Friday：周五'."\n"
                            .'- Saturday：周六'."\n"
                            .'- Sunday：周日'."\n"
                            ."\n"
                            .'> BackupPeriod值必须指定每周至少两天，且日期间用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Monday,Tuesday,Wednesday',
                    ],
                ],
                [
                    'name' => 'BackupStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份开始时间，取值：格式：HH:mm。'."\n"
                            ."\n"
                            .'> 该参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '14:22',
                    ],
                ],
                [
                    'name' => 'BackupStrategyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值：'."\n"
                            .'- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。'."\n"
                            .'- **manual**：手动备份。'."\n"
                            ."\n"
                            .'> 默认为**simple**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'simple',
                    ],
                ],
                [
                    'name' => 'BackupLogIntervalSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量时间间隔，以秒（s）为单位。'."\n"
                            .'> 仅支持物理备份。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01XXXX',
                            ],
                            'NeedPrecheck' => [
                                'description' => '本次修改是否会触发预检查，如果为true则需要，再调用StartBackupPlan接口启动备份计划。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01XXXX\\",\\n  \\"NeedPrecheck\\": false\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupStrategyReponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbs1h****usfa</BackupPlanId>\\n    <NeedPrecheck>false</NeedPrecheck>\\n    <Success>true</Success>\\n</ModifyBackupStrategyReponse>","errorExample":""}]',
            'title' => '修改备份时间',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupPlanList' => [
            'summary' => '该接口用于查看一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，支持查询多个备份计划，英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbstooi01exXXXX',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBS地域，可通过调用[DescribeRegions](~~437238~~)接口查看DBS支持地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值为1~100。'."\n"
                            ."\n"
                            .'> 默认为**30**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BackupPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'BackupPlanStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划状态，取值：'."\n"
                            ."\n"
                            .'* **wait**：未配置'."\n"
                            .'* **init**：未启动（预检查失败）'."\n"
                            .'* **running**：运行中'."\n"
                            .'* **stop**：失败'."\n"
                            .'* **pause**：暂停'."\n"
                            .'* **locked**：锁定中'."\n"
                            .'* **check_pass**：预检查通过',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wait',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASDASDASDSADASFCZXVZ',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzecovzti****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameterValid',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'TotalElements' => [
                                'description' => '总备份计划数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupPlanDetail' => [
                                        'description' => '备份计划详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CrossRoleName' => [
                                                    'description' => '跨阿里云账号备份的RAM角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'test123',
                                                ],
                                                'SourceEndpointInstanceType' => [
                                                    'description' => '数据库所在位置，返回值如下：'."\n"
                                                        .'- **rds**'."\n"
                                                        .'- **ecs**'."\n"
                                                        .'- **express**：通过专线/VPN网关/智能网关接入的数据库'."\n"
                                                        .'- **agent**：通过备份网关接入的数据库'."\n"
                                                        .'- **dds**：云MongoDB'."\n"
                                                        .'- **other**：通过IP:Port直连的数据库',
                                                    'type' => 'string',
                                                    'example' => 'rds',
                                                ],
                                                'BackupSetDownloadDir' => [
                                                    'description' => '备份集下载服务器目录。',
                                                    'type' => 'string',
                                                    'example' => '*/test/test123',
                                                ],
                                                'SourceEndpointIpPort' => [
                                                    'description' => '数据库连接地址。',
                                                    'type' => 'string',
                                                    'example' => '100.*.*.10:33204',
                                                ],
                                                'CrossAliyunId' => [
                                                    'description' => '跨阿里云账号备份的uid。',
                                                    'type' => 'string',
                                                    'example' => '2xxx7778xxxxxxxxxx',
                                                ],
                                                'DuplicationArchivePeriod' => [
                                                    'description' => '转为归档冷备存储时间（天）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '365',
                                                ],
                                                'BackupPlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'dbstooi01eXXXX',
                                                ],
                                                'EndTimestampForRestore' => [
                                                    'description' => '数据库可恢复时间段的结束时间，格式为时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'BackupPlanStatus' => [
                                                    'description' => '备份计划状态，返回值如下：'."\n"
                                                        .'- **wait**：未配置'."\n"
                                                        .'- **init**：未启动（预检查失败）'."\n"
                                                        .'- **running**：运行中'."\n"
                                                        .'- **stop**：失败'."\n"
                                                        .'- **pause**：暂停'."\n"
                                                        .'- **locked**：锁定中'."\n"
                                                        .'- **check_pass**：预检查通过',
                                                    'type' => 'string',
                                                    'example' => 'init',
                                                ],
                                                'BackupSetDownloadFullDataFormat' => [
                                                    'description' => '备份集下载全量数据格式：'."\n"
                                                        .'* **Native**'."\n"
                                                        .'* **SQL**'."\n"
                                                        .'* **CSV**'."\n"
                                                        .'* **JSON**',
                                                    'type' => 'string',
                                                    'example' => 'SQL',
                                                ],
                                                'BackupRetentionPeriod' => [
                                                    'description' => '备份数据保留时间，返回值：0~1825（天）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '365',
                                                ],
                                                'OSSBucketRegion' => [
                                                    'description' => 'OSS Bucket地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'SourceEndpointOracleSID' => [
                                                    'description' => 'Oracle SID名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'BackupStorageType' => [
                                                    'description' => '内置存储类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- 空（默认）：备份数据存储在用户OSS上。'."\n"
                                                        .'- system ：备份数据存储在DBS的内置OSS上。',
                                                    'type' => 'string',
                                                    'example' => 'system',
                                                ],
                                                'BackupMethod' => [
                                                    'description' => '备份方式，返回值如下：'."\n"
                                                        .'- **logical**：逻辑备份'."\n"
                                                        .'- **physical**：物理备份'."\n"
                                                        .'- **duplication**：转储备份',
                                                    'type' => 'string',
                                                    'example' => 'logical',
                                                ],
                                                'SourceEndpointRegion' => [
                                                    'description' => '数据库地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'BackupPeriod' => [
                                                    'description' => '全量备份周期，返回值如下：'."\n"
                                                        .'- **Monday**：周一'."\n"
                                                        .'- **Tuesday**：周二'."\n"
                                                        .'- **Wednesday**：周三'."\n"
                                                        .'- **Thursday**：周四'."\n"
                                                        .'- **Friday**：周五'."\n"
                                                        .'- **Saturday**：周六'."\n"
                                                        .'- **Sunday**：周日',
                                                    'type' => 'string',
                                                    'example' => 'Monday',
                                                ],
                                                'SourceEndpointDatabaseName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'BackupSetDownloadGatewayId' => [
                                                    'description' => '备份集下载备份网关ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123123',
                                                ],
                                                'BackupPlanCreateTime' => [
                                                    'description' => '备份计划创建时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1582527713000',
                                                ],
                                                'InstanceClass' => [
                                                    'description' => '规格，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **micro**：入门型'."\n"
                                                        .'- **small**：低配型'."\n"
                                                        .'- **medium**：中配型'."\n"
                                                        .'- **large**：高配型'."\n"
                                                        .'- **xlarge**：高配型（无流量上限）',
                                                    'type' => 'string',
                                                    'example' => 'micro',
                                                ],
                                                'BackupSetDownloadTargetType' => [
                                                    'description' => '备份集下载目标类型。'."\n"
                                                        ."\n"
                                                        .'> 唯一取值：agent，表示已安装备份网关。',
                                                    'type' => 'string',
                                                    'example' => 'agent',
                                                ],
                                                'DuplicationInfrequentAccessPeriod' => [
                                                    'description' => '转为低频访问存储时间（天）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '180',
                                                ],
                                                'BackupStartTime' => [
                                                    'description' => '全量备份开始时间，格式为HH:mm。',
                                                    'type' => 'string',
                                                    'example' => '14:22',
                                                ],
                                                'ErrMessage' => [
                                                    'description' => '预检查任务异常信息。',
                                                    'type' => 'string',
                                                    'example' => '  can not connect to oracle instance orcl with user dbs',
                                                ],
                                                'BackupObjects' => [
                                                    'description' => '备份对象。',
                                                    'type' => 'string',
                                                    'example' => '[     {         \\"DBName\\":\\"待备份库名\\",         \\"SchemaName\\":\\"待备份 Schema 名\\",         \\"TableIncludes\\":[{             \\"TableName\\":\\"待备份表表名\\"         }],         \\"TableExcludes\\":[{             \\"TableName\\":\\"待备份库名不需要备份表的表名\\"         }]     } ]',
                                                ],
                                                'BeginTimestampForRestore' => [
                                                    'description' => '可数据库恢复时间段的开始时间，返回值：1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'SourceEndpointInstanceID' => [
                                                    'description' => '数据库实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'OpenBackupSetAutoDownload' => [
                                                    'description' => '是否开启自动备份集下载功能。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'BackupPlanName' => [
                                                    'description' => '备份计划名称。',
                                                    'type' => 'string',
                                                    'example' => 'dbstooi01e****',
                                                ],
                                                'OSSBucketName' => [
                                                    'description' => 'OSS Bucket名称。',
                                                    'type' => 'string',
                                                    'example' => 'dbs-backup-1857XXXXX489',
                                                ],
                                                'BackupGatewayId' => [
                                                    'description' => '备份网关ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '827362187368736',
                                                ],
                                                'SourceEndpointUserName' => [
                                                    'description' => '数据库账号。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'BackupSetDownloadIncrementDataFormat' => [
                                                    'description' => '备份集下载全量数据格式：'."\n"
                                                        .'* **Native**'."\n"
                                                        .'* **SQL**'."\n"
                                                        .'* **CSV**'."\n"
                                                        .'* **JSON**',
                                                    'type' => 'string',
                                                    'example' => 'SQL',
                                                ],
                                                'EnableBackupLog' => [
                                                    'description' => '是否开启增量日志备份，返回值如下：'."\n"
                                                        .'- **true**：开启'."\n"
                                                        .'- **false**：关闭',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-aekzecovzti****',
                                                ],
                                                'DatabaseType' => [
                                                    'description' => '数据库类型。',
                                                    'type' => 'string',
                                                    'example' => 'MySQL',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"InvalidParameterValid\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 4,\\n  \\"TotalElements\\": 100,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupPlanDetail\\": [\\n      {\\n        \\"CrossRoleName\\": \\"test123\\",\\n        \\"SourceEndpointInstanceType\\": \\"rds\\",\\n        \\"BackupSetDownloadDir\\": \\"*/test/test123\\",\\n        \\"SourceEndpointIpPort\\": \\"100.*.*.10:33204\\",\\n        \\"CrossAliyunId\\": \\"2xxx7778xxxxxxxxxx\\",\\n        \\"DuplicationArchivePeriod\\": 365,\\n        \\"BackupPlanId\\": \\"dbstooi01eXXXX\\",\\n        \\"EndTimestampForRestore\\": 1554560477000,\\n        \\"BackupPlanStatus\\": \\"init\\",\\n        \\"BackupSetDownloadFullDataFormat\\": \\"SQL\\",\\n        \\"BackupRetentionPeriod\\": 365,\\n        \\"OSSBucketRegion\\": \\"cn-hangzhou\\",\\n        \\"SourceEndpointOracleSID\\": \\"test\\",\\n        \\"BackupStorageType\\": \\"system\\",\\n        \\"BackupMethod\\": \\"logical\\",\\n        \\"SourceEndpointRegion\\": \\"cn-hangzhou\\",\\n        \\"BackupPeriod\\": \\"Monday\\",\\n        \\"SourceEndpointDatabaseName\\": \\"test\\",\\n        \\"BackupSetDownloadGatewayId\\": 123123,\\n        \\"BackupPlanCreateTime\\": 1582527713000,\\n        \\"InstanceClass\\": \\"micro\\",\\n        \\"BackupSetDownloadTargetType\\": \\"agent\\",\\n        \\"DuplicationInfrequentAccessPeriod\\": 180,\\n        \\"BackupStartTime\\": \\"14:22\\",\\n        \\"ErrMessage\\": \\"  can not connect to oracle instance orcl with user dbs\\",\\n        \\"BackupObjects\\": \\"[     {         \\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份库名\\\\\\\\\\\\\\",         \\\\\\\\\\\\\\"SchemaName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份 Schema 名\\\\\\\\\\\\\\",         \\\\\\\\\\\\\\"TableIncludes\\\\\\\\\\\\\\":[{             \\\\\\\\\\\\\\"TableName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份表表名\\\\\\\\\\\\\\"         }],         \\\\\\\\\\\\\\"TableExcludes\\\\\\\\\\\\\\":[{             \\\\\\\\\\\\\\"TableName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"待备份库名不需要备份表的表名\\\\\\\\\\\\\\"         }]     } ]\\",\\n        \\"BeginTimestampForRestore\\": 1554560477000,\\n        \\"SourceEndpointInstanceID\\": \\"test\\",\\n        \\"OpenBackupSetAutoDownload\\": true,\\n        \\"BackupPlanName\\": \\"dbstooi01e****\\",\\n        \\"OSSBucketName\\": \\"dbs-backup-1857XXXXX489\\",\\n        \\"BackupGatewayId\\": 827362187368736,\\n        \\"SourceEndpointUserName\\": \\"test\\",\\n        \\"BackupSetDownloadIncrementDataFormat\\": \\"SQL\\",\\n        \\"EnableBackupLog\\": true,\\n        \\"ResourceGroupId\\": \\"rg-aekzecovzti****\\",\\n        \\"DatabaseType\\": \\"MySQL\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlanListResponse>\\n    <PageSize>30</PageSize>\\n    <RequestId>4F1888AC-1138-4995-B9FE-D2734F61C058</RequestId>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <Items>\\n        <BackupPlanDetail>\\n            <BackupPlanName>dbXXXXX7ltj</BackupPlanName>\\n            <BackupMethod>logical</BackupMethod>\\n            <BackupPlanCreateTime>1583000</BackupPlanCreateTime>\\n            <BackupPeriod>MONDAY</BackupPeriod>\\n            <BackupObjects>[     {         \\"DBName\\":\\"Database name to be backed up\\",         \\"SchemaName\\":\\"Schema name to be backed up\\",         \\"TableIncludes\\":[{             \\"TableName\\":\\"Table name of the table to be backed up\\"         }],         \\"TableExcludes\\":[{             \\"TableName\\":\\"The name of the database to be backed up does not need the name of the table to be backed up\\"         }]     } ]</BackupObjects>\\n            <SourceEndpointInstanceID>rm-bp1p8XXXXXv8pxe</SourceEndpointInstanceID>\\n            <InstanceClass>medium</InstanceClass>\\n            <OSSBucketRegion>cn-hangzhou</OSSBucketRegion>\\n            <SourceEndpointRegion>cn-hangzhou</SourceEndpointRegion>\\n            <SourceEndpointIpPort>100.X.X.10:33204</SourceEndpointIpPort>\\n            <DuplicationArchivePeriod>365</DuplicationArchivePeriod>\\n            <OSSBucketName>dbs-backup-1857XXXXX489</OSSBucketName>\\n            <BackupPlanStatus>init</BackupPlanStatus>\\n            <BackupStartTime>14:22</BackupStartTime>\\n            <EnableBackupLog>true</EnableBackupLog>\\n            <BackupPlanId>dbXXXXXx7ltj</BackupPlanId>\\n            <BackupRetentionPeriod>730</BackupRetentionPeriod>\\n            <SourceEndpointInstanceType>rds</SourceEndpointInstanceType>\\n            <SourceEndpointUserName>test</SourceEndpointUserName>\\n            <DuplicationInfrequentAccessPeriod>180</DuplicationInfrequentAccessPeriod>\\n        </BackupPlanDetail>\\n    </Items>\\n    <TotalPages>1</TotalPages>\\n    <Success>true</Success>\\n</DescribeBackupPlanListResponse>","errorExample":""}]',
            'title' => '查看备份计划',
            'description' => '请在使用本接口前，提前开通OSS服务，更多信息请参见[对象存储OSS](~~31817~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRestoreRangeInfo' => [
            'summary' => '该接口用于查看一个备份计划可恢复时间段详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbssl67c7mx****',
                    ],
                ],
                [
                    'name' => 'BeginTimestampForRestore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询可恢复开始时间，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1646674092000',
                    ],
                ],
                [
                    'name' => 'EndTimestampForRestore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询可恢复结束时间，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1646846814000',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。    '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
                [
                    'name' => 'RecentlyRestore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启最近恢复。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回信息如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E2BD9DFC-6760-5F49-97C5-DA739E29****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBSRecoverRange' => [
                                        'description' => '可恢复时间段信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '具体详情记录。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndTimestampForRestore' => [
                                                    'description' => '可恢复结束时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1646760308000',
                                                ],
                                                'SourceEndpointInstanceType' => [
                                                    'description' => '数据库所在位置。',
                                                    'type' => 'string',
                                                    'example' => 'rds',
                                                ],
                                                'RangeType' => [
                                                    'description' => '可恢复时间段类型，返回值如下：'."\n"
                                                        .'- **point**：该时间段为全量备份离散时间点。'."\n"
                                                        .'- **range**：该时间段为连续备份时间段，可指定任意时间。',
                                                    'type' => 'string',
                                                    'example' => 'point',
                                                ],
                                                'BeginTimestampForRestore' => [
                                                    'description' => '可恢复开始时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1646760282000',
                                                ],
                                                'SourceEndpointInstanceID' => [
                                                    'description' => '数据库实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'rm-bp106x9tk2c91****',
                                                ],
                                                'FullBackupList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FullBackupDetail' => [
                                                            'description' => '当RangeType为point时，该字段展示这个时间段范围内所有的权利。备份点信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '具体详情如下。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'EndTime' => [
                                                                        'description' => '全量备份结束时间，返回值：1646760308000。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '1646760308000',
                                                                    ],
                                                                    'StartTime' => [
                                                                        'description' => '全量备份开始时间，返回值：1646760282000。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '1646760282000',
                                                                    ],
                                                                    'BackupSetId' => [
                                                                        'description' => '备份集ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'qecnsxkd****',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"E2BD9DFC-6760-5F49-97C5-DA739E29****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"Items\\": {\\n    \\"DBSRecoverRange\\": [\\n      {\\n        \\"EndTimestampForRestore\\": 1646760308000,\\n        \\"SourceEndpointInstanceType\\": \\"rds\\",\\n        \\"RangeType\\": \\"point\\",\\n        \\"BeginTimestampForRestore\\": 1646760282000,\\n        \\"SourceEndpointInstanceID\\": \\"rm-bp106x9tk2c91****\\",\\n        \\"FullBackupList\\": {\\n          \\"FullBackupDetail\\": [\\n            {\\n              \\"EndTime\\": 1646760308000,\\n              \\"StartTime\\": 1646760282000,\\n              \\"BackupSetId\\": \\"qecnsxkd****\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRestoreRangeInfoResponse>\\n    <RequestId>E2BD9DFC-6760-5F49-97C5-DA739E29****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Items>\\n        <DBSRecoverRange>\\n            <RangeType>point</RangeType>\\n            <SourceEndpointInstanceID>rm-bp106x9tk2c91****</SourceEndpointInstanceID>\\n            <FullBackupList>\\n                <FullBackupDetail>\\n                    <EndTime>1646760308000</EndTime>\\n                    <StartTime>1646760282000</StartTime>\\n                    <BackupSetId>qecnsxkd****</BackupSetId>\\n                </FullBackupDetail>\\n            </FullBackupList>\\n            <SourceEndpointInstanceType>rds</SourceEndpointInstanceType>\\n            <EndTimestampForRestore>1646760308000</EndTimestampForRestore>\\n            <BeginTimestampForRestore>1646760282000</BeginTimestampForRestore>\\n        </DBSRecoverRange>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeRestoreRangeInfoResponse>","errorExample":""}]',
            'title' => '查看可恢复时间段详情',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupPlanBilling' => [
            'summary' => '该接口用于查看备份计划计费信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01ex****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ShowStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否展示存储类型。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => '错误码值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD7BC7F5-4E3A-5DF3-BFF9-831503C4D9E3',
                            ],
                            'ErrCode' => [
                                'description' => '错误码字符串。',
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                            'Success' => [
                                'description' => '请求成功状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'This backupPlan can\'t support this action',
                            ],
                            'Item' => [
                                'description' => '备份计划计费信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'BuyCreateTimestamp' => [
                                        'description' => '实例购买时间，格式为时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1658372830000',
                                    ],
                                    'FullStorageSize' => [
                                        'description' => '实例全量备份数据内置存储量，单位为字节（B）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '151',
                                    ],
                                    'BuyExpiredTimestamp' => [
                                        'description' => '实例到期时间，格式为时间戳。'."\n"
                                            .'> 该参数仅在BuyChargeType选择PREPAY时显示。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1661097600000',
                                    ],
                                    'BuySpec' => [
                                        'description' => '实例规格。',
                                        'type' => 'string',
                                        'example' => 'micro',
                                    ],
                                    'QuotaEndTimestamp' => [
                                        'description' => '免费备份流量计费周期结束时间，格式为时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1659283200000',
                                    ],
                                    'IsExpired' => [
                                        'description' => '实例是否过期。'."\n"
                                            .'> 该参数仅在BuyChargeType选择PREPAY时显示。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'QuotaStartTimestamp' => [
                                        'description' => '免费备份流量计费周期开始时间，格式为时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1656604800000',
                                    ],
                                    'TotalFreeBytes' => [
                                        'description' => '当月免费备份总流量，单位为字节（B）。'."\n"
                                            .'> 该参数仅在BuyChargeType选择PREPAY且IsFreeBytesUnlimited为false时显示。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '858993459200',
                                    ],
                                    'PaiedBytes' => [
                                        'description' => '当月付费备份流量合计，单位为字节（B）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'UsedFullBytes' => [
                                        'description' => '当月付费全量备份流量，单位为字节（B）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'IsFreeBytesUnlimited' => [
                                        'description' => '实例是否为无备份流量上限规格。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ContStorageSize' => [
                                        'description' => '实例增量备份数据内置存储量，单位为字节（B）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10437039',
                                    ],
                                    'BuyChargeType' => [
                                        'description' => '购买费用类型，返回值如下：'."\n"
                                            ."\n"
                                            .'- **PREPAY**：预付费（包年包月）'."\n"
                                            .'- **POSTPAY**：后付费（按量付费）',
                                        'type' => 'string',
                                        'example' => 'PREPAY',
                                    ],
                                    'UsedIncrementBytes' => [
                                        'description' => '当月付费增量备份流量，单位为字节（B）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '9406734',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"DD7BC7F5-4E3A-5DF3-BFF9-831503C4D9E3\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"Item\\": {\\n    \\"BuyCreateTimestamp\\": 1658372830000,\\n    \\"FullStorageSize\\": 151,\\n    \\"BuyExpiredTimestamp\\": 1661097600000,\\n    \\"BuySpec\\": \\"micro\\",\\n    \\"QuotaEndTimestamp\\": 1659283200000,\\n    \\"IsExpired\\": true,\\n    \\"QuotaStartTimestamp\\": 1656604800000,\\n    \\"TotalFreeBytes\\": 858993459200,\\n    \\"PaiedBytes\\": 0,\\n    \\"UsedFullBytes\\": 0,\\n    \\"IsFreeBytesUnlimited\\": true,\\n    \\"ContStorageSize\\": 10437039,\\n    \\"BuyChargeType\\": \\"PREPAY\\",\\n    \\"UsedIncrementBytes\\": 9406734\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPlanBillingResponse>\\n<Item>\\n    <IsExpired/>\\n    <BuyExpiredTimestamp/>\\n    <TotalFreeBytes/>\\n    <PaiedBytes/>\\n    <QuotaStartTimestamp/>\\n    <FullStorageSize/>\\n    <BuyCreateTimestamp/>\\n    <IsFreeBytesUnlimited/>\\n    <QuotaEndTimestamp/>\\n    <ContStorageSize/>\\n    <BuySpec/>\\n    <BuyChargeType/>\\n    <UsedIncrementBytes/>\\n    <UsedFullBytes/>\\n</Item>\\n<RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n<HttpStatusCode>400</HttpStatusCode>\\n<ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>InvalidParameter</ErrCode>\\n</DescribeBackupPlanBillingResponse>\\n","errorExample":""}]',
            'title' => '查看备份计划计费信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConfigureBackupPlan' => [
            'summary' => '该接口用于配置一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi0*******',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库所在位置，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。取值如下：'."\n"
                            ."\n"
                            .'- **RDS**'."\n"
                            .'- **ECS**'."\n"
                            .'- **Express**：通过专线/VPN网关/智能网关接入的数据库'."\n"
                            .'- **Agent**：通过备份网关接入的数据库'."\n"
                            .'- **DDS**：云MongoDB'."\n"
                            .'- **Other**：通过IP:Port直连的数据库',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库地域，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SourceEndpointInstanceID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**RDS**、**ECS**、**DDS**、**Express**时，该参数必传。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6wjk5*********',
                    ],
                ],
                [
                    'name' => 'SourceEndpointIP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为**express**、**agent**、**other**时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6wjk5*******.mysql.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库端口，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpoint**.**InstanceType**为**express**、**agent**、**other**、**ECS**时，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'SourceEndpointDatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> 数据库类型为**PostgreSQL**、**MongoDB**时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。'."\n"
                            ."\n"
                            .'> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**SQL Server**时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testRDS',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。'."\n"
                            ."\n"
                            .'> 数据库类型为**Redis**，或者数据库所在位置为**agent**且数据库类型为**SQL Server**时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testPassword',
                    ],
                ],
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **SourceEndpointInstanceType**为**agent**时，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '23313123312',
                    ],
                ],
                [
                    'name' => 'OSSBucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS Bucket名称。'."\n"
                            ."\n"
                            .'> 系统默认自动生成新的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestOssBucket',
                    ],
                ],
                [
                    'name' => 'BackupObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份对象，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[     {         "DBName":"待备份库名",         "SchemaName":"待备份 Schema 名",         "TableIncludes":[{             "TableName":"待备份表表名"         }],         "TableExcludes":[{             "TableName":"待备份库名不需要备份表的表名"         }]     } ]',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值：'."\n"
                            .'- **Monday**：周一'."\n"
                            .'- **Tuesday**：周二'."\n"
                            .'- **Wednesday**：周三'."\n"
                            .'- **Thursday**：周四'."\n"
                            .'- **Friday**：周五'."\n"
                            .'- **Saturday**：周六'."\n"
                            .'- **Sunday**：周日',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Monday',
                    ],
                ],
                [
                    'name' => 'BackupStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份开始时间，格式为<i>HH:mm</i>Z（UTC时间）。可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '14:22',
                    ],
                ],
                [
                    'name' => 'EnableBackupLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启增量日志备份，取值：'."\n"
                            .'- **true**：开启'."\n"
                            .'- **false**：关闭',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'BackupLogIntervalSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量时间间隔，以秒（s）为单位。'."\n"
                            .'> 仅支持物理备份。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'BackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份数据保留时间，取值：0 ~ 1825，默认为730天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '730',
                    ],
                ],
                [
                    'name' => 'DuplicationInfrequentAccessPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为低频访问存储时间，默认为180天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '180',
                    ],
                ],
                [
                    'name' => 'DuplicationArchivePeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '转为归档冷备存储时间，默认为365天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BackupPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义备份计划名称，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi0*******',
                    ],
                ],
                [
                    'name' => 'SourceEndpointOracleSID',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Oracle SID名称。'."\n"
                            ."\n"
                            .'> 数据库类型为Oracle时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'BackupStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内置存储类型：'."\n"
                            .'- 空（默认）：备份数据存储在用户OSS上。'."\n"
                            .'- system ：备份数据存储在DBS的内置OSS上。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'BackupSpeedLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '磁盘IO限制 ， 单位为KB/s。'."\n"
                            .'> 仅对MySQL物理备份生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '262144',
                    ],
                ],
                [
                    'name' => 'BackupRateLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络带宽限制， 单位为KB/s ，最大允许10GB。'."\n"
                            .'> 仅对MySQL物理备份生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '262144',
                    ],
                ],
                [
                    'name' => 'BackupStrategyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，取值：'."\n"
                            .'- **simple**：周期备份，和BackupPeriod、BackupStartTime配合使用。'."\n"
                            .'- **manual**：手动备份。'."\n"
                            ."\n"
                            .'> 默认为**simple**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'simple',
                    ],
                ],
                [
                    'name' => 'CrossAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的UID，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2xxx7778xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'CrossRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的RAM角色名称，可通过调用[DescribeRestoreTaskList](~~437228~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'AutoStartBackup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动备份。'."\n"
                            ."\n"
                            .'- **true**：开启'."\n"
                            .'- **false**：不开启',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzecovzti****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情信息如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F1FB49D4-B504-47F1-9F43-D7EAB33F****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01ex****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"F1FB49D4-B504-47F1-9F43-D7EAB33F****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"BackupPlanId\\": \\"dbstooi01ex****\\"\\n}","errorExample":""},{"type":"xml","example":"<ConfigureBackupPlanResponse>\\n    <RequestId>D6E068C3-25BC-455A-85FE-45F0B22E****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <BackupPlanId>dbstooi01ex****</BackupPlanId>\\n    <Success>true</Success>\\n</ConfigureBackupPlanResponse>","errorExample":""}]',
            'title' => '配置备份计划',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RenewBackupPlan' => [
            'summary' => '该接口用于续费一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取此参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01exxx',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费实例为包年或者包月类型，取值：'."\n"
                            .'- Year：包年'."\n"
                            .'- Month：包月',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买时长，取值：'."\n"
                            .'- 当参数Period为Year时，UsedTime取值为1~5。'."\n"
                            .'- 当参数Period为Month时，UsedTime取值为1~11。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HKAJHFIUEQWBFIJSNFOIWHN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'Http状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01exxx',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '202020202020',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01exxx\\",\\n  \\"OrderId\\": \\"202020202020\\"\\n}","errorExample":""},{"type":"xml","example":"<RenewBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<OrderId>2056157****</OrderId>\\n<Success>true</Success>\\n</RenewBackupPlanReponse>","errorExample":""}]',
            'title' => '续费备份计划',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpgradeBackupPlan' => [
            'summary' => '该接口用于升级一个DBS备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01eXXXX',
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规格，取值：'."\n"
                            .'- micro'."\n"
                            .'- small'."\n"
                            .'- medium'."\n"
                            .'- large'."\n"
                            .'- xlarge',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'micro',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'Http状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01XXXX',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2056157****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupPlanId\\": \\"dbstooi01XXXX\\",\\n  \\"OrderId\\": \\"2056157****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeBackupPlanReponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbs1h****usfa</BackupPlanId>\\n<OrderId>2056157****</OrderId>\\n<Success>true</Success>\\n</UpgradeBackupPlanReponse>","errorExample":""}]',
            'title' => '升级备份计划',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleaseBackupPlan' => [
            'summary' => '该接口用于释放一个按量付费的备份计划。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01xxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbs',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- true：执行成功'."\n"
                                    .'- false：执行失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'findValidDBSJob error',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"findValidDBSJob error\\",\\n  \\"BackupPlanId\\": \\"dbstooi01xxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01xxxx</BackupPlanId>\\n<ErrMessage>findValidDBSJob error</ErrMessage>\\n<Success>false</Success>\\n<ErrCode>Param.NotFound</ErrCode>","errorExample":""}]',
            'title' => '释放按量付费的备份计划',
            'description' => '## 影响'."\n"
                .'释放后，您的备份实例即会停止服务，不再产生费用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeIncrementBackupList' => [
            'summary' => '该接口用于查看DBS增量备份任务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbsqdss5tmh****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值30、50、100。'."\n"
                            ."\n"
                            .'> 默认每页记录数为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串，用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ShowStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否显示存储类型，取值如下：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false'."\n"
                            ."\n"
                            .'> 默认true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始备份时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570701361528',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束备份时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570701361600',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A5D52069-E8AA-5056-8C5C-654C3610****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalElements' => [
                                'description' => '增量备份任务总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'IncrementBackupFile' => [
                                        'description' => '增量备份任务详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '增量备份任务详情信息如下。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndTime' => [
                                                    'description' => '备份结束时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1648434713000',
                                                ],
                                                'BackupSetExpiredTime' => [
                                                    'description' => '备份集保留到期时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1711506719000',
                                                ],
                                                'StartTime' => [
                                                    'description' => '备份开始时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1648433764000',
                                                ],
                                                'StorageMethod' => [
                                                    'description' => '存储类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **Standard**：标准存储'."\n"
                                                        .'- **IA**：低频访问存储'."\n"
                                                        .'- **Archive**：归档存储'."\n"
                                                        .'- **UNKNOWN**：未知，通常是任务未完成时的状态',
                                                    'type' => 'string',
                                                    'example' => 'Standard',
                                                ],
                                                'BackupSetJobId' => [
                                                    'description' => '备份集任务ID。',
                                                    'type' => 'string',
                                                    'example' => '1hv5g9wk4****',
                                                ],
                                                'BackupSetId' => [
                                                    'description' => '备份集ID。',
                                                    'type' => 'string',
                                                    'example' => 'mysql-bin.00****',
                                                ],
                                                'BackupStatus' => [
                                                    'description' => '备份任务状态，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **INIT**：未启动'."\n"
                                                        .'- **FILLING**：备份中'."\n"
                                                        .'- **COMPLETED**：完成'."\n"
                                                        .'- **UNCOMPLETED**：未完成',
                                                    'type' => 'string',
                                                    'example' => 'FILLING',
                                                ],
                                                'SourceEndpointIpPort' => [
                                                    'description' => '数据库连接地址。',
                                                    'type' => 'string',
                                                    'example' => '172.1XX.103.1:4XXX',
                                                ],
                                                'BackupSize' => [
                                                    'description' => '备份大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '18535',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 0,\\n  \\"RequestId\\": \\"A5D52069-E8AA-5056-8C5C-654C3610****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"IncrementBackupFile\\": [\\n      {\\n        \\"EndTime\\": 1648434713000,\\n        \\"BackupSetExpiredTime\\": 1711506719000,\\n        \\"StartTime\\": 1648433764000,\\n        \\"StorageMethod\\": \\"Standard\\",\\n        \\"BackupSetJobId\\": \\"1hv5g9wk4****\\",\\n        \\"BackupSetId\\": \\"mysql-bin.00****\\",\\n        \\"BackupStatus\\": \\"FILLING\\",\\n        \\"SourceEndpointIpPort\\": \\"172.1XX.103.1:4XXX\\",\\n        \\"BackupSize\\": 18535\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeIncrementBackupListResponse>\\n    <RequestId>A5D52069-E8AA-5056-8C5C-654C3610****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <IncrementBackupFile>\\n            <SourceEndpointIpPort>172.1XX.103.1:4XXX</SourceEndpointIpPort>\\n            <EndTime>1648434713000</EndTime>\\n            <BackupSetJobId>1hv5g9wk4****</BackupSetJobId>\\n            <BackupSize>18535</BackupSize>\\n            <StartTime>1648433764000</StartTime>\\n            <BackupSetExpiredTime>1711506719000</BackupSetExpiredTime>\\n            <BackupSetId>mysql-bin.00****</BackupSetId>\\n            <BackupStatus>FILLING</BackupStatus>\\n        </IncrementBackupFile>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeIncrementBackupListResponse>","errorExample":""}]',
            'title' => '查看增量备份任务列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeFullBackupList' => [
            'summary' => '该接口用于查看DBS全量备份任务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbsr179qz******',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值：'."\n"
                            .'- 30'."\n"
                            .'- 50'."\n"
                            .'- 100'."\n"
                            ."\n"
                            .'默认为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ShowStorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否显示存储类型。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1iukx5h******',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始备份时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1676887100',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束备份时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1676887128',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '636BC118-6080-4119-A6B5-C199CEC1037D',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否执行成功。返回值：'."\n"
                                    .'- **true**：执行成功。'."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalElements' => [
                                'description' => '总全量备份任务数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'FullBackupFile' => [
                                        'description' => '全量备份任务详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '全量备份任务详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FinishTime' => [
                                                    'description' => '任务结束时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1676887128000',
                                                ],
                                                'BackupStatus' => [
                                                    'description' => '备份任务状态，取值：'."\n"
                                                        .'- schedule：初始化中'."\n"
                                                        .'- running：运行中'."\n"
                                                        .'- finish：完成'."\n"
                                                        .'- stop：失败'."\n"
                                                        .'- pause：暂停',
                                                    'type' => 'string',
                                                    'example' => 'finish',
                                                ],
                                                'SourceEndpointIpPort' => [
                                                    'description' => '数据库连接地址。',
                                                    'type' => 'string',
                                                    'example' => '121.XXX.XXX.144:3306',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '任务开始时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1676886947000',
                                                ],
                                                'ErrMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'NULL',
                                                ],
                                                'BackupObjects' => [
                                                    'description' => '备份对象。',
                                                    'type' => 'string',
                                                    'example' => '[{\\"DBName\\":\\"test\\"}]',
                                                ],
                                                'EndTime' => [
                                                    'description' => '备份结束时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1676887128000',
                                                ],
                                                'StartTime' => [
                                                    'description' => '备份开始时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1676887100000',
                                                ],
                                                'BackupSetExpiredTime' => [
                                                    'description' => '备份集保留到期时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1677491900000',
                                                ],
                                                'StorageMethod' => [
                                                    'description' => '存储类型，取值：'."\n"
                                                        .'- Standard：标准存储'."\n"
                                                        .'- IA：低频访问存储'."\n"
                                                        .'- Archive：归档存储'."\n"
                                                        .'- UNKNOWN：未知，通常是任务未完成时的状态',
                                                    'type' => 'string',
                                                    'example' => 'Standard',
                                                ],
                                                'BackupSetId' => [
                                                    'description' => '备份集ID。',
                                                    'type' => 'string',
                                                    'example' => '1iukx5h******',
                                                ],
                                                'BackupSize' => [
                                                    'description' => '备份大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '580',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"636BC118-6080-4119-A6B5-C199CEC1037D\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": {\\n    \\"FullBackupFile\\": [\\n      {\\n        \\"FinishTime\\": 1676887128000,\\n        \\"BackupStatus\\": \\"finish\\",\\n        \\"SourceEndpointIpPort\\": \\"121.XXX.XXX.144:3306\\",\\n        \\"CreateTime\\": 1676886947000,\\n        \\"ErrMessage\\": \\"NULL\\",\\n        \\"BackupObjects\\": \\"[{\\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"}]\\",\\n        \\"EndTime\\": 1676887128000,\\n        \\"StartTime\\": 1676887100000,\\n        \\"BackupSetExpiredTime\\": 1677491900000,\\n        \\"StorageMethod\\": \\"Standard\\",\\n        \\"BackupSetId\\": \\"1iukx5h******\\",\\n        \\"BackupSize\\": 580\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFullBackupListReponse>\\n<RequestId>636BC118-6080-4119-A6B5-C199CEC1037D</RequestId>\\n<PageSize>30</PageSize>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>1</TotalElements>\\n<TotalPages>1</TotalPages>\\n<Items>\\n    <FullBackupFile>\\n        <SourceEndpointIpPort>100.X.X.10:33204</SourceEndpointIpPort>\\n        <StorageMethod>Standard</StorageMethod>\\n        <BackupObjects>[{\\"DBName\\":\\"test_y\\"}]</BackupObjects>\\n        <EndTime>1583741465000</EndTime>\\n        <FinishTime>1583741466000</FinishTime>\\n        <BackupSize>151</BackupSize>\\n        <CreateTime>1583740896000</CreateTime>\\n        <StartTime>1583741439000</StartTime>\\n        <BackupSetExpiredTime>1646813439000</BackupSetExpiredTime>\\n        <BackupSetId>1ibh2XXXXXXX</BackupSetId>\\n        <BackupStatus>finish</BackupStatus>\\n    </FullBackupFile>\\n</Items>\\n<Success>true</Success>\\n</DescribeFullBackupListReponse>","errorExample":""}]',
            'title' => '查看全量备份任务列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRestoreTask' => [
            'summary' => '该接口用于创建DBS恢复任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbs1hvb0ww****',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointInstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库所在位置，取值：'."\n"
                            .'- **RDS**'."\n"
                            .'- **ECS**'."\n"
                            .'- **Express**：通过专线/VPN网关/智能网关接入的数据库'."\n"
                            .'- **Agent**：通过备份网关接入的数据库'."\n"
                            .'- **DDS**：云MongoDB'."\n"
                            .'- **Other**：通过IP:Port直连的数据库'."\n"
                            .'- **dg**：无公网IP:Port的自建数据库（通过数据库网关DG接入）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例的地域。'."\n"
                            .'>**DestinationEndpointInstanceType**为RDS、ECS、DDS、Express、Agent时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointInstanceID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例ID。'."\n"
                            ."\n"
                            .'> **DestinationEndpointInstanceType**为RDS、ECS、DDS、Express时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp1p8c29*****',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointIP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址。'."\n"
                            ."\n"
                            .'> **DestinationEndpointInstanceType**为express、agent、other，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp*****9jv8pxero.mysql.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库端口。'."\n"
                            ."\n"
                            .'> **DestinationEndpointInstanceType**为express、agent、other、ECS，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointDatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。'."\n"
                            ."\n"
                            .'> 数据库类型为PostgreSQL、MongoDB时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。'."\n"
                            ."\n"
                            .'> 数据库类型为Redis，或者数据库所在位置为agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。'."\n"
                            ."\n"
                            .'> 数据库类型为Redis，或者数据库所在位置为agent且数据库类型为MSSQL时该参数非必须，其他场景均必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID。'."\n"
                            ."\n"
                            .'> **DestinationEndpointInstanceType**为agent时，该参数必传。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4312****',
                    ],
                ],
                [
                    'name' => 'RestoreObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复对象。'."\n"
                            ."\n"
                            .'- 详情请参见下面的**RestoreObjects**参数定义，当数据库所在位置为agent时，该参数非必须，其他场景均必传。'."\n"
                            .'- 传入模板：`[{ "DBName": "待恢复库名", "NewDBName": "目标待恢复库名" }] `'."\n"
                            ."\n"
                            .'> 使用本API接口恢复对象仅支持恢复到数据库级别，如需配置指定表的恢复，请前往控制台进行操作。具体请参见[恢复数据库](~~85543~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL表级别恢复示例如下：'."\n"
                            .'[{\\"DBName\\":\\"dbname\\", \\"NewDBName\\":\\"dbname1\\"}]',
                    ],
                ],
                [
                    'name' => 'RestoreTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复时间，取值：1554560477000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1554560477000',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复所使用的全量备份集ID，和RestoreTime互斥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbs1hvb0w*****',
                    ],
                ],
                [
                    'name' => 'RestoreTaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DestinationEndpointOracleSID',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Oracle SID名称。'."\n"
                            ."\n"
                            .'> 数据库类型为Oracle时，该参数必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RestoreDir',
                    'in' => 'query',
                    'schema' => [
                        'description' => '**DestinationEndpointInstanceType**为agent且备份计划为MySQL时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RestoreHome',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库程序目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DuplicateConflict',
                    'in' => 'query',
                    'schema' => [
                        'description' => '同名对象冲突处理方式，当前支持：'."\n"
                            ."\n"
                            .'**renamenew**：遇到同名对象则重命名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'renamenew',
                    ],
                ],
                [
                    'name' => 'CrossAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2749528728********',
                    ],
                ],
                [
                    'name' => 'CrossRoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨阿里云账号备份的RAM角色名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOC********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.  ',
                            ],
                            'RestoreTaskId' => [
                                'description' => '恢复任务ID。',
                                'type' => 'string',
                                'example' => 's102h*****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"RestoreTaskId\\": \\"s102h*****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRestoreTaskResponse>\\n<RestoreTaskId>s102hXXXXX</RestoreTaskId>\\n<RequestId>60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>\\n</CreateRestoreTaskResponse>\\n","errorExample":""}]',
            'title' => '创建恢复任务',
            'description' => '### 相关操作文档'."\n"
                ."\n"
                .'- [恢复数据库](~~85543~~)'."\n"
                .'- [各类数据库恢复配置教程](~~197144~~)',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartRestoreTask' => [
            'summary' => '该接口用于启动一个DBS恢复任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RestoreTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 's102h7rfXXXX',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'RestoreTaskId' => [
                                'description' => '恢复任务ID。',
                                'type' => 'string',
                                'example' => 's102h7rfXXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"RestoreTaskId\\": \\"s102h7rfXXXX\\"\\n}","errorExample":""},{"type":"xml","example":"<RestoreTaskId>s102h7rf5anq</RestoreTaskId>\\n<RequestId>60AF7C5D-EF4D-4D48-8FD5-C0823FDF28AC</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '启动恢复任务',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRestoreTaskList' => [
            'summary' => '该接口用于查看DBS恢复任务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。'."\n"
                            ."\n"
                            .'> 请填入本参数BackupPlanId或RestoreTaskId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbs1hvb0wwwXXXXX',
                    ],
                ],
                [
                    'name' => 'RestoreTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务ID，支持多个查询，使用半角逗号（,）分隔。您可以调用[CreateRestoreTask](~~437226~~)接口获取该参数。'."\n"
                            ."\n"
                            .'> 请填入本参数RestoreTaskId或BackupPlanId，同时填入时会导致报错。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's102h7rf5anq',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值为1~100。'."\n"
                            ."\n"
                            .'> 默认为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始备份时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570701361528',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束备份时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570701361528',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9C397502-B4F2-4E22-AD97-C81F0049F3F3',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalElements' => [
                                'description' => '总恢复任务数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'RestoreTaskDetail' => [
                                        'description' => '备份计划详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RestoreStatus' => [
                                                    'description' => '恢复任务状态，取值：'."\n"
                                                        .'- init：未启动或预检查失败'."\n"
                                                        .'- running：运行中'."\n"
                                                        .'- stop：失败'."\n"
                                                        .'- pause：暂停'."\n"
                                                        .'- check_pass：预检查通过',
                                                    'type' => 'string',
                                                    'example' => 'running',
                                                ],
                                                'FullStruAfterRestoreProgress' => [
                                                    'description' => '全量结构后置恢复进度。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'CrossRoleName' => [
                                                    'description' => '跨阿里云账号备份的RAM角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'test123',
                                                ],
                                                'RestoreDir' => [
                                                    'description' => '恢复路径。',
                                                    'type' => 'string',
                                                    'example' => '100.X.X.10:33204',
                                                ],
                                                'CrossAliyunId' => [
                                                    'description' => '跨阿里云账号备份的UID。',
                                                    'type' => 'string',
                                                    'example' => '2xxx7778xxxxxxxxxx',
                                                ],
                                                'RestoreObjects' => [
                                                    'description' => '恢复对象。',
                                                    'type' => 'string',
                                                    'example' => '[     {         \\"DBName\\":\\"test\\"       } ]',
                                                ],
                                                'BackupPlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'dbs1hvb0wXXXX',
                                                ],
                                                'DestinationEndpointRegion' => [
                                                    'description' => '数据库地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'RestoreTaskCreateTime' => [
                                                    'description' => '恢复任务创建时间，取值：1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'DestinationEndpointUserName' => [
                                                    'description' => '数据库账号。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RestoreTaskFinishTime' => [
                                                    'description' => '恢复任务完成时间，取值：1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'DestinationEndpointIpPort' => [
                                                    'description' => '数据库连接地址。',
                                                    'type' => 'string',
                                                    'example' => '100.X.X.10:33204',
                                                ],
                                                'DestinationEndpointDatabaseName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'DestinationEndpointInstanceType' => [
                                                    'description' => '数据库所在位置，取值：'."\n"
                                                        .'- RDS'."\n"
                                                        .'- ECS'."\n"
                                                        .'- Express：通过专线/VPN网关/智能网关接入的数据库'."\n"
                                                        .'- agent：通过备份网关接入的数据库'."\n"
                                                        .'- dds：云MongoDB'."\n"
                                                        .'- other：通过IP:Port直连的数据库',
                                                    'type' => 'string',
                                                    'example' => 'RDS',
                                                ],
                                                'DestinationEndpointOracleSID' => [
                                                    'description' => 'Oracle SID名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'FullStruforeRestoreProgress' => [
                                                    'description' => '全量结构前置恢复进度。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ErrMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'NULL',
                                                ],
                                                'RestoreTaskId' => [
                                                    'description' => '恢复任务ID。',
                                                    'type' => 'string',
                                                    'example' => 's1XXXXXX',
                                                ],
                                                'FullDataRestoreProgress' => [
                                                    'description' => '全量数据恢复进度。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'ContinuousRestoreProgress' => [
                                                    'description' => '增量日志恢复进度。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'DestinationEndpointInstanceID' => [
                                                    'description' => '数据库实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'rm-bp1p8c2947XXX',
                                                ],
                                                'BackupSetId' => [
                                                    'description' => '恢复所使用的全量备份集ID。',
                                                    'type' => 'string',
                                                    'example' => '1ibh2f5uXXX',
                                                ],
                                                'BackupGatewayId' => [
                                                    'description' => '备份网关ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '324234332',
                                                ],
                                                'RestoreTaskName' => [
                                                    'description' => '恢复任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RestoreTime' => [
                                                    'description' => '恢复时间，取值：1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"9C397502-B4F2-4E22-AD97-C81F0049F3F3\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"RestoreTaskDetail\\": [\\n      {\\n        \\"RestoreStatus\\": \\"running\\",\\n        \\"FullStruAfterRestoreProgress\\": 100,\\n        \\"CrossRoleName\\": \\"test123\\",\\n        \\"RestoreDir\\": \\"100.X.X.10:33204\\",\\n        \\"CrossAliyunId\\": \\"2xxx7778xxxxxxxxxx\\",\\n        \\"RestoreObjects\\": \\"[     {         \\\\\\\\\\\\\\"DBName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"       } ]\\",\\n        \\"BackupPlanId\\": \\"dbs1hvb0wXXXX\\",\\n        \\"DestinationEndpointRegion\\": \\"cn-hangzhou\\",\\n        \\"RestoreTaskCreateTime\\": 1554560477000,\\n        \\"DestinationEndpointUserName\\": \\"test\\",\\n        \\"RestoreTaskFinishTime\\": 1554560477000,\\n        \\"DestinationEndpointIpPort\\": \\"100.X.X.10:33204\\",\\n        \\"DestinationEndpointDatabaseName\\": \\"test\\",\\n        \\"DestinationEndpointInstanceType\\": \\"RDS\\",\\n        \\"DestinationEndpointOracleSID\\": \\"test\\",\\n        \\"FullStruforeRestoreProgress\\": 0,\\n        \\"ErrMessage\\": \\"NULL\\",\\n        \\"RestoreTaskId\\": \\"s1XXXXXX\\",\\n        \\"FullDataRestoreProgress\\": 100,\\n        \\"ContinuousRestoreProgress\\": 100,\\n        \\"DestinationEndpointInstanceID\\": \\"rm-bp1p8c2947XXX\\",\\n        \\"BackupSetId\\": \\"1ibh2f5uXXX\\",\\n        \\"BackupGatewayId\\": 324234332,\\n        \\"RestoreTaskName\\": \\"test\\",\\n        \\"RestoreTime\\": 1554560477000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PageSize>30</PageSize>\\n<RequestId>9C397502-B4F2-4E22-AD97-C81F0049F3F3</RequestId>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>1</TotalElements>\\n<Items>\\n    <RestoreTaskDetail>\\n        <FullStruAfterRestoreProgress>0</FullStruAfterRestoreProgress>\\n        <FullStruforeRestoreProgress>0</FullStruforeRestoreProgress>\\n        <BackupSetId>1ibXXXXX7qw</BackupSetId>\\n        <RestoreStatus>check_pass</RestoreStatus>\\n        <DestinationEndpointInstanceType>rds</DestinationEndpointInstanceType>\\n        <RestoreTime>1583741465000</RestoreTime>\\n        <DestinationEndpointRegion>cn-hangzhou</DestinationEndpointRegion>\\n        <FullDataRestoreProgress>0</FullDataRestoreProgress>\\n        <RestoreTaskId>s10XXXXnq</RestoreTaskId>\\n        <DestinationEndpointIpPort>100.X.X.10:33204</DestinationEndpointIpPort>\\n        <DestinationEndpointUserName>testygx</DestinationEndpointUserName>\\n        <RestoreObjects>[     {         \\"DBName\\":\\"test_ygx\\"       } ]</RestoreObjects>\\n        <RestoreTaskName>test</RestoreTaskName>\\n        <BackupPlanId>dbs1hvb0wwweusfa</BackupPlanId>\\n        <RestoreTaskCreateTime>1583743872000</RestoreTaskCreateTime>\\n        <DestinationEndpointInstanceID>rm-bp1p8c29479jv8pxe</DestinationEndpointInstanceID>\\n    </RestoreTaskDetail>\\n</Items>\\n<TotalPages>1</TotalPages>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查看恢复任务列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupGatewayList' => [
            'summary' => '该接口用于查看DBS备份网关列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBS地域，取值：'."\n"
                            .'- **cn-hangzhou**：公有云杭州'."\n"
                            .'- **cn-shanghai**：公有云上海'."\n"
                            .'- **cn-qingdao**：公有云青岛'."\n"
                            .'- **cn-beijing**：公有云北京'."\n"
                            .'- **cn-shenzhen**：公有云深圳'."\n"
                            .'- **cn-hongkong**：公有云中国香港'."\n"
                            .'- **ap-southeat-1**：公有云新加坡'."\n"
                            .'- **cn-hangzhou-finance**：金融云杭州'."\n"
                            .'- **cn-shanghai-finance**：金融云上海'."\n"
                            .'- **cn-shenzhen-finance**：金融云深圳',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关唯一标识，支持多个查询，用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7213527653217',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值：'."\n"
                            .'- **30**'."\n"
                            .'- **50**'."\n"
                            .'- **100**'."\n"
                            ."\n"
                            .'> 默认为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为：0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46361705-8531-492F-807E-A97E482DD4A1',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.  ',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalElements' => [
                                'description' => '总备份网关数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupGateway' => [
                                        'description' => '备份网关详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '备份网关显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'BackupGatewayCreateTime' => [
                                                    'description' => '备份网关创建时间，取值1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'BackupGatewayId' => [
                                                    'description' => '备份网关ID。',
                                                    'type' => 'string',
                                                    'example' => '2321313123',
                                                ],
                                                'Region' => [
                                                    'description' => '地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'Identifier' => [
                                                    'description' => '备份网关唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'sgdsajhdgu',
                                                ],
                                                'SourceEndpointInternetIP' => [
                                                    'description' => '安装备份网关的主机公网IP。',
                                                    'type' => 'string',
                                                    'example' => 'XX.XX.XX.XX',
                                                ],
                                                'BackupGatewayStatus' => [
                                                    'description' => '备份网关状态，取值：'."\n"
                                                        .'- ONLINE：在线'."\n"
                                                        .'- OFFLINE：离线'."\n"
                                                        .'- STOPPED：停止'."\n"
                                                        .'- UPGRADING：升级中',
                                                    'type' => 'string',
                                                    'example' => 'ONLINE',
                                                ],
                                                'SourceEndpointIntranetIP' => [
                                                    'description' => '安装备份网关的主机私网IP。',
                                                    'type' => 'string',
                                                    'example' => 'XX.XX.XX.XX',
                                                ],
                                                'LastHeartbeatTime' => [
                                                    'description' => '上次心跳汇报时间，取值：1554560477000。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1554560477000',
                                                ],
                                                'SourceEndpointHostname' => [
                                                    'description' => '安装备份网关的主机名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"46361705-8531-492F-807E-A97E482DD4A1\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 0,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupGateway\\": [\\n      {\\n        \\"DisplayName\\": \\"test\\",\\n        \\"BackupGatewayCreateTime\\": 1554560477000,\\n        \\"BackupGatewayId\\": \\"2321313123\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Identifier\\": \\"sgdsajhdgu\\",\\n        \\"SourceEndpointInternetIP\\": \\"XX.XX.XX.XX\\",\\n        \\"BackupGatewayStatus\\": \\"ONLINE\\",\\n        \\"SourceEndpointIntranetIP\\": \\"XX.XX.XX.XX\\",\\n        \\"LastHeartbeatTime\\": 1554560477000,\\n        \\"SourceEndpointHostname\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PageSize>30</PageSize>\\n<RequestId>46361705-8531-492F-807E-A97E482DD4A1</RequestId>\\n<PageNum>0</PageNum>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalElements>0</TotalElements>\\n<Items/>\\n<TotalPages>0</TotalPages>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查看备份网关列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateFullBackupSetDownload' => [
            'summary' => '该接口用于创建并启动全量备份集下载任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份集ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbs1hvXXXXX',
                    ],
                ],
                [
                    'name' => 'BackupSetDataFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份集下载格式。取值：'."\n"
                            .'- **Native**'."\n"
                            .'- **SQL**'."\n"
                            .'- **CSV** '."\n"
                            .'- **JSON**'."\n"
                            ."\n"
                            .'> 默认CSV。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SQL',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupSetDownloadTaskId' => [
                                'description' => '备份集下载任务ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01exxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupSetDownloadTaskId\\": \\"dbstooi01exxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFullBackupSetDownloadResponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupSetDownloadTaskId>dbstooi01exxxxx</BackupSetDownloadTaskId>\\n<Success>true</Success>\\n</CreateFullBackupSetDownloadResponse>\\n","errorExample":""}]',
            'title' => '创建全量备份集下载任务',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateIncrementBackupSetDownload' => [
            'summary' => '该接口用于创建并启动增量备份集下载任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量备份集ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01exxxxx',
                    ],
                ],
                [
                    'name' => 'BackupSetName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量文件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'BackupSetDataFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '增量备份集下载格式。取值：'."\n"
                            .'- **Native**'."\n"
                            .'- **SQL**'."\n"
                            .'- **CSV**  '."\n"
                            .'- **JSON**'."\n"
                            ."\n"
                            .'> 默认 Native。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Native',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid. ',
                            ],
                            'BackupSetDownloadTaskId' => [
                                'description' => '备份集下载任务ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01exxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid. \\",\\n  \\"BackupSetDownloadTaskId\\": \\"dbstooi01exxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIncrementBackupSetDownloadResponse>\\n<RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupSetDownloadTaskId>dbstooi01exxxxx</BackupSetDownloadTaskId>\\n<Success>true</Success>\\n</CreateIncrementBackupSetDownloadResponse>","errorExample":""}]',
            'title' => '创建增量备份集下载任务',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyBackupSetDownloadRules' => [
            'summary' => '该接口用于开启、修改、关闭自动下载功能。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口查看。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01xxxx',
                    ],
                ],
                [
                    'name' => 'OpenAutoDownload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动下载，默认false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载备份网关ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '23312323',
                    ],
                ],
                [
                    'name' => 'FullDataFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载全量数据格式：'."\n"
                            .'- Native'."\n"
                            .'- SQL'."\n"
                            .'- CSV'."\n"
                            .'- JSON'."\n"
                            ."\n"
                            .'> 默认 CSV。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CSV',
                    ],
                ],
                [
                    'name' => 'IncrementDataFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载增量数据格式：'."\n"
                            .'- Native'."\n"
                            .'- SQL'."\n"
                            .'- CSV'."\n"
                            .'- JSON'."\n"
                            ."\n"
                            .'> 默认Native。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Native',
                    ],
                ],
                [
                    'name' => 'BackupSetDownloadDir',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载服务器目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'BackupSetDownloadTargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载目标类型 。'."\n"
                            .'> 默认agent：已安装备份网关，目前仅此项。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'agent',
                    ],
                ],
                [
                    'name' => 'BackupSetDownloadTargetTypeLocation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载目标目录类型，如果是开启自动下载，则必填，取值：'."\n"
                            .'- local'."\n"
                            .'- nas'."\n"
                            .'- ftp'."\n"
                            .'- minio'."\n"
                            ."\n"
                            .'> 默认为local。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'local',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6E068C3-25BC-455A-85FE-45F0B22ECB1F',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.  ',
                            ],
                            'BackupPlanId' => [
                                'description' => '备份计划ID。',
                                'type' => 'string',
                                'example' => 'dbstooi01exxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"D6E068C3-25BC-455A-85FE-45F0B22ECB1F\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.  \\",\\n  \\"BackupPlanId\\": \\"dbstooi01exxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupSetDownloadRulesResponse><RequestId>D6E068C3-25BC-455A-85FE-45F0B22ECB1F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<BackupPlanId>dbstooi01exxxx</BackupPlanId>\\n<Success>true</Success>\\n</ModifyBackupSetDownloadRulesResponse>","errorExample":""}]',
            'title' => '设置备份集下载规则',
            'description' => '使用本接口前请先确认备份数据是否存储在DBS的内置OSS上，您可通过调用[DescribeBackupPlanList](~~437215~~)接口查看BackupStorageType取值情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupSetDownloadTaskList' => [
            'summary' => '该接口用于查看DBS备份集下载列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> **BackupPlanId**或**BackupSetDownloadTaskId**任选其一作为请求参数必填项。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbsqhnuhyw3****',
                    ],
                ],
                [
                    'name' => 'BackupSetDownloadTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集下载任务ID。'."\n"
                            ."\n"
                            .'- 全量备份：可通过调用[CreateFullBackupSetDownload](~~437241~~)接口获取该参数的值。'."\n"
                            .'- 增量备份：可通过调用[CreateIncrementBackupSetDownload](~~437242~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'urxgrxt7****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的记录数，取值30、50、100。'."\n"
                            ."\n"
                            .'> 默认每页记录数为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于等于0且不超过Integer的最大值，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '输入任意值，用于保证请求的幂等性，防止重复提交请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzXXXXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情信息。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'PageNum' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6DC3D286-E0E6-5988-A558-2184984B****',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'TotalPages' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalElements' => [
                                'description' => '总备份集下载记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'BackupSetDownloadTaskDetail' => [
                                        'description' => '备份计划详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '备份计划详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'BackupSetDownloadStatus' => [
                                                    'description' => '备份集下载状态，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **checking**：预检查中'."\n"
                                                        .'- **init**：预检查失败（未启动）'."\n"
                                                        .'- **check_pass**：预检查通过'."\n"
                                                        .'- **pause**：暂停'."\n"
                                                        .'- **schedule**：等待调度'."\n"
                                                        .'- **running**：运行中'."\n"
                                                        .'- **stop**：失败'."\n"
                                                        .'- **finish**：完成',
                                                    'type' => 'string',
                                                    'example' => 'finish',
                                                ],
                                                'BackupSetDataSize' => [
                                                    'description' => '备份集数据大小。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '237837',
                                                ],
                                                'BackupSetDownloadTargetType' => [
                                                    'description' => '备份集下载目标类型。'."\n"
                                                        ."\n"
                                                        .'> 仅自动下载显示，agent表示已安装备份网关。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'BackupSetDownloadDir' => [
                                                    'description' => '备份集下载服务器目录。'."\n"
                                                        ."\n"
                                                        .'> 仅自动下载有值。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'ErrMessage' => [
                                                    'description' => '异常信息。',
                                                    'type' => 'string',
                                                    'example' => 'java.lang.IndexOutOfBoundsException.',
                                                ],
                                                'BackupSetDownloadCreateTime' => [
                                                    'description' => '创建时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1642044001000',
                                                ],
                                                'BackupPlanId' => [
                                                    'description' => '备份计划ID。',
                                                    'type' => 'string',
                                                    'example' => 'qhnuhyw3****',
                                                ],
                                                'BackupSetDbType' => [
                                                    'description' => '数据库类型。',
                                                    'type' => 'string',
                                                    'example' => 'MySQL',
                                                ],
                                                'BackupSetDownloadInternetUrl' => [
                                                    'description' => '备份集公网下载地址。'."\n"
                                                        ."\n"
                                                        .'> 仅手工下载类型，且转换完成的有值。',
                                                    'type' => 'string',
                                                    'example' => '"//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example"',
                                                ],
                                                'BackupSetId' => [
                                                    'description' => '源备份集ID。',
                                                    'type' => 'string',
                                                    'example' => '1h7za2yws****',
                                                ],
                                                'BackupSetDownloadIntranetUrl' => [
                                                    'description' => '备份集内网下载地址。'."\n"
                                                        ."\n"
                                                        .'> 仅手工下载类型，且转换完成的有值。',
                                                    'type' => 'string',
                                                    'example' => '"//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example"',
                                                ],
                                                'BackupGatewayId' => [
                                                    'description' => '备份集备份网关，仅自动下载有值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '无',
                                                ],
                                                'BackupSetDownloadWay' => [
                                                    'description' => '下载类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **manual**：手工'."\n"
                                                        .'- **auto**：自动',
                                                    'type' => 'string',
                                                    'example' => 'manual',
                                                ],
                                                'BackupSetDownloadFinishTime' => [
                                                    'description' => '完成时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1642044013000',
                                                ],
                                                'BackupSetJobType' => [
                                                    'description' => '源备份集任务类型，返回值如下：'."\n"
                                                        ."\n"
                                                        .'- **cbs_backup_sub_full**：逻辑全量任务'."\n"
                                                        .'- **cbs_backup_sub_cont**：逻辑增量任务',
                                                    'type' => 'string',
                                                    'example' => 'cbs_backup_sub_cont',
                                                ],
                                                'BackupSetDownloadTaskId' => [
                                                    'description' => '备份集下载任务ID。',
                                                    'type' => 'string',
                                                    'example' => 'urxgrxt7****',
                                                ],
                                                'BackupSetDownloadTaskName' => [
                                                    'description' => '备份集下载任务名称。',
                                                    'type' => 'string',
                                                    'example' => '1h7za2yws****-ManualCont',
                                                ],
                                                'BackupSetDataFormat' => [
                                                    'description' => '备份集下载数据格式，取值如下：'."\n"
                                                        ."\n"
                                                        .'- **Native**'."\n"
                                                        .'- **SQL**'."\n"
                                                        .'- **CSV** '."\n"
                                                        .'- **JSON**',
                                                    'type' => 'string',
                                                    'example' => 'Native',
                                                ],
                                                'BackupSetCode' => [
                                                    'description' => '源备份集编码。',
                                                    'type' => 'string',
                                                    'example' => 'mysql-bin.00XXXX',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"PageNum\\": 0,\\n  \\"RequestId\\": \\"6DC3D286-E0E6-5988-A558-2184984B****\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"TotalPages\\": 1,\\n  \\"TotalElements\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"Items\\": {\\n    \\"BackupSetDownloadTaskDetail\\": [\\n      {\\n        \\"BackupSetDownloadStatus\\": \\"finish\\",\\n        \\"BackupSetDataSize\\": 237837,\\n        \\"BackupSetDownloadTargetType\\": \\"无\\",\\n        \\"BackupSetDownloadDir\\": \\"无\\",\\n        \\"ErrMessage\\": \\"java.lang.IndexOutOfBoundsException.\\",\\n        \\"BackupSetDownloadCreateTime\\": 1642044001000,\\n        \\"BackupPlanId\\": \\"qhnuhyw3****\\",\\n        \\"BackupSetDbType\\": \\"MySQL\\",\\n        \\"BackupSetDownloadInternetUrl\\": \\"\\\\\\"//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example\\\\\\"\\",\\n        \\"BackupSetId\\": \\"1h7za2yws****\\",\\n        \\"BackupSetDownloadIntranetUrl\\": \\"\\\\\\"//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example\\\\\\"\\",\\n        \\"BackupGatewayId\\": 0,\\n        \\"BackupSetDownloadWay\\": \\"manual\\",\\n        \\"BackupSetDownloadFinishTime\\": 1642044013000,\\n        \\"BackupSetJobType\\": \\"cbs_backup_sub_cont\\",\\n        \\"BackupSetDownloadTaskId\\": \\"urxgrxt7****\\",\\n        \\"BackupSetDownloadTaskName\\": \\"1h7za2yws****-ManualCont\\",\\n        \\"BackupSetDataFormat\\": \\"Native\\",\\n        \\"BackupSetCode\\": \\"mysql-bin.00XXXX\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupSetDownloadTaskListResponse>\\n    <RequestId>6DC3D286-E0E6-5988-A558-2184984B****</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNum>0</PageNum>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <BackupSetDownloadTaskDetail>\\n            <BackupSetDbType>MySQL</BackupSetDbType>\\n            <BackupSetDownloadCreateTime>1642044001000</BackupSetDownloadCreateTime>\\n            <BackupSetDownloadTaskName>1h7za2yws****-ManualCont</BackupSetDownloadTaskName>\\n            <BackupSetDownloadWay>manual</BackupSetDownloadWay>\\n            <BackupSetCode>mysql-bin.00XXXX</BackupSetCode>\\n            <BackupSetId>1h7za2yws****</BackupSetId>\\n            <BackupSetDownloadStatus>finish</BackupSetDownloadStatus>\\n            <BackupSetDownloadIntranetUrl>//dbs-13XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou-internal.example</BackupSetDownloadIntranetUrl>\\n            <BackupSetDownloadInternetUrl>//dbs-137XXXX-cn-hangzhou-1hr5cpbtmXXXX.oss-cn-hangzhou.example</BackupSetDownloadInternetUrl>\\n            <BackupSetDownloadTaskId>urxgrxt7****</BackupSetDownloadTaskId>\\n            <BackupSetDownloadFinishTime>1642044013000</BackupSetDownloadFinishTime>\\n            <BackupSetJobType>cbs_backup_sub_cont</BackupSetJobType>\\n            <BackupSetDataFormat>Native</BackupSetDataFormat>\\n            <BackupPlanId>qhnuhyw3****</BackupPlanId>\\n            <BackupSetDataSize>237837</BackupSetDataSize>\\n        </BackupSetDownloadTaskDetail>\\n    </Items>\\n    <Success>true</Success>\\n</DescribeBackupSetDownloadTaskListResponse>","errorExample":""}]',
            'title' => '查看备份集下载列表',
        ],
        'CreateGetDBListFromAgentTask' => [
            'summary' => '该接口用于通过备份网关获取数据库列表任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID，可通过调用[DescribeBackupPlanList](~~437215~~)接口查看。'."\n"
                            ."\n"
                            .'> 此参数为必填项。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '160813',
                    ],
                ],
                [
                    'name' => 'DatabaseType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，取值：'."\n"
                            ."\n"
                            .'- **MySQL**'."\n"
                            .'- **MSSQL**'."\n"
                            .'- **Oracle**'."\n"
                            .'- **MariaDB**'."\n"
                            .'- **PostgreSQL**'."\n"
                            .'- **DRDS**'."\n"
                            .'- **MongoDB**'."\n"
                            .'- **Redis**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'SourceEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SourceEndpointIP',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'SourceEndpointPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => '错误码值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
                            ],
                            'ErrCode' => [
                                'description' => '错误码字符串。'."\n",
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                            'Success' => [
                                'description' => '请求状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'This backupPlan can\'t support this action',
                            ],
                            'TaskId' => [
                                'description' => '异步任务ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123456',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"TaskId\\": 123456\\n}","errorExample":""},{"type":"xml","example":"<CreateGetDBListFromAgentTaskResponse>\\n<TaskId>123456</TaskId>\\n<RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n<HttpStatusCode>400</HttpStatusCode>\\n<ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n<Success>true</Success>\\n<ErrCode>InvalidParameter</ErrCode>\\n</CreateGetDBListFromAgentTaskResponse>","errorExample":""}]',
            'title' => '创建数据库列表任务',
            'description' => '本API操作会返回TaskId，您可以使用[GetDBListFromAgent](~~437237~~)接口做结果查询。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeNodeCidrList' => [
            'summary' => '该接口用于查看DBS运行节点网段列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DBS地域，可通过调用[DescribeRegions](~~437238~~)接口查看DBS支持地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。    '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5B352E69-E7B1-4EA7-BB8E-29FFE969C791',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'IntranetIPs' => [
                                'type' => 'object',
                                'properties' => [
                                    'IntranetIP' => [
                                        'description' => '内网网段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网网段。',
                                            'type' => 'string',
                                            'example' => '"10.X.X.0/24"',
                                        ],
                                    ],
                                ],
                            ],
                            'InternetIPs' => [
                                'type' => 'object',
                                'properties' => [
                                    'InternetIP' => [
                                        'description' => '公网网段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '公网网段。',
                                            'type' => 'string',
                                            'example' => '"10.X.X.0/24"',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"5B352E69-E7B1-4EA7-BB8E-29FFE969C791\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"IntranetIPs\\": {\\n    \\"IntranetIP\\": [\\n      \\"\\\\\\"10.X.X.0/24\\\\\\"\\"\\n    ]\\n  },\\n  \\"InternetIPs\\": {\\n    \\"InternetIP\\": [\\n      \\"\\\\\\"10.X.X.0/24\\\\\\"\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5B352E69-E7B1-4EA7-BB8E-29FFE969C791</RequestId>\\n<InternetIPs>\\n    <InternetIP>118.X.X.0/24</InternetIP>\\n    <InternetIP>47.X.X.0/24</InternetIP>\\n</InternetIPs>\\n<HttpStatusCode>200</HttpStatusCode>\\n<IntranetIPs>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n    <IntranetIP>10.X.X.0/24</IntranetIP>\\n</IntranetIPs>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查看DBS运行节点网段',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeJobErrorCode' => [
            'summary' => '该接口用于查看DBS任务错误码信息。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份或恢复任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'r1iv62ud****',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'description' => '错误信息语言，取值如下：'."\n"
                            ."\n"
                            .'- **en**：英文（默认值）'."\n"
                            .'- **cn**：中文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。    '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCz****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID.',
                                'type' => 'string',
                                'example' => '1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'Item' => [
                                'description' => '错误码信息。',
                                'type' => 'object',
                                'properties' => [
                                    'JobState' => [
                                        'description' => '任务状态。',
                                        'type' => 'string',
                                        'example' => 'init',
                                    ],
                                    'ErrorMessage' => [
                                        'description' => '标准化错误信息。',
                                        'type' => 'string',
                                        'example' => 'Describe preCheck progress failed.',
                                    ],
                                    'ErrorCode' => [
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => 'failed',
                                    ],
                                    'JobId' => [
                                        'description' => '全量备份或者恢复任务ID。',
                                        'type' => 'string',
                                        'example' => 'r1iv62ud****',
                                    ],
                                    'JobType' => [
                                        'description' => 'DBS内部任务类型id。',
                                        'type' => 'string',
                                        'example' => 'testId',
                                    ],
                                    'Language' => [
                                        'description' => '错误信息语言。',
                                        'type' => 'string',
                                        'example' => 'en',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Item\\": {\\n    \\"JobState\\": \\"init\\",\\n    \\"ErrorMessage\\": \\"Describe preCheck progress failed.\\",\\n    \\"ErrorCode\\": \\"failed\\",\\n    \\"JobId\\": \\"r1iv62ud****\\",\\n    \\"JobType\\": \\"testId\\",\\n    \\"Language\\": \\"en\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeJobErrorCodeReponse>\\n<Item>\\n    <Language>en</Language>\\n    <JobId>tooi0XXXX</JobId>\\n</Item>\\n<RequestId>1FC2F86D-AFF4-4ED9-BB25-ADDE196CB2B5</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Success>true</Success>\\n</DescribeJobErrorCodeReponse>","errorExample":""}]',
            'title' => '查看任务错误码信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribePreCheckProgressList' => [
            'summary' => '该接口用于查看备份计划预检查进度和恢复任务预检查进度。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID。'."\n"
                            ."\n"
                            .'> 请填入BackupPlanId或RestoreTaskId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbsr1l3ro21****',
                    ],
                ],
                [
                    'name' => 'RestoreTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '恢复任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbasdsa****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。    '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCziJZNwH****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '预检查状态，返回值如下：'."\n"
                                    .'- **running**：运行中'."\n"
                                    .'- **failed**：失败'."\n"
                                    .'- **finish**：完成',
                                'type' => 'string',
                                'example' => 'finish',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C4A45FE1-A903-470D-B113-F12A4DF942AB',
                            ],
                            'Progress' => [
                                'description' => '预检查进度，返回值范围：0~100。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。'."\n",
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '返回是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：返回成功'."\n"
                                    .'- **false**：返回失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。'."\n",
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.     ',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'PreCheckProgressDetail' => [
                                        'description' => '进度明细列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回参数。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FinishTime' => [
                                                    'description' => '完成时间，格式为Unix时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1704351396000',
                                                ],
                                                'State' => [
                                                    'description' => '进度状态，返回值如下：'."\n"
                                                        .'- **init**：初始化'."\n"
                                                        .'- **warning**：警告'."\n"
                                                        .'- **catched**：异常'."\n"
                                                        .'- **running**：运行中'."\n"
                                                        .'- **failed**：失败'."\n"
                                                        .'- **finish**：完成',
                                                    'type' => 'string',
                                                    'example' => 'warning',
                                                ],
                                                'BootTime' => [
                                                    'description' => '启动时间，格式为Unix时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1704351395000',
                                                ],
                                                'JobId' => [
                                                    'description' => '进度ID。',
                                                    'type' => 'string',
                                                    'example' => 'qxwmxh2b****',
                                                ],
                                                'Item' => [
                                                    'description' => '检查项编码。',
                                                    'type' => 'string',
                                                    'example' => 'CHECK_BINLOG_ON',
                                                ],
                                                'ErrMsg' => [
                                                    'description' => '异常信息。',
                                                    'type' => 'string',
                                                    'example' => 'java.lang.RuntimeException: Could not find any schema ......',
                                                ],
                                                'OrderNum' => [
                                                    'description' => '序号。',
                                                    'type' => 'string',
                                                    'example' => '30',
                                                ],
                                                'Names' => [
                                                    'description' => '检查项分组。',
                                                    'type' => 'string',
                                                    'example' => 'CHECK_BINLOG_ON_DETAIL',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"finish\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"C4A45FE1-A903-470D-B113-F12A4DF942AB\\",\\n  \\"Progress\\": 100,\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.     \\",\\n  \\"Items\\": {\\n    \\"PreCheckProgressDetail\\": [\\n      {\\n        \\"FinishTime\\": 1704351396000,\\n        \\"State\\": \\"warning\\",\\n        \\"BootTime\\": 1704351395000,\\n        \\"JobId\\": \\"qxwmxh2b****\\",\\n        \\"Item\\": \\"CHECK_BINLOG_ON\\",\\n        \\"ErrMsg\\": \\"java.lang.RuntimeException: Could not find any schema ......\\",\\n        \\"OrderNum\\": \\"30\\",\\n        \\"Names\\": \\"CHECK_BINLOG_ON_DETAIL\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"</DescribePreCheckProgressListReponse>\\n<Status>failed</Status>\\n<Progress>20</Progress>\\n<RequestId>C4A45FE1-A903-470D-B113-F12A4DF942AB</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Items>\\n    <PreCheckProgressDetail>\\n        <Names>CHECK_MYSQL_PASSOWRD_FORMAT_DETAIL</Names>\\n        <Item>CHECK_MYSQL_PASSOWRD_FORMAT</Item>\\n        <OrderNum>90</OrderNum>\\n        <State>init</State>\\n        <BootTime>1583734969000</BootTime>\\n        <JobId>uvk8f6fxnq5s</JobId>\\n    </PreCheckProgressDetail>\\n</Items>\\n<ErrMessage>java.lang.RuntimeException: Could not find any schema ......</ErrMessage>\\n<Success>true</Success>\\n</DescribePreCheckProgressListReponse>\\n\\n","errorExample":""}]',
            'title' => '查看预检查进度列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDLAService' => [
            'summary' => '该接口用于查看备份计划的数据查询服务（DLA）。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份计划ID，您可以调用[DescribeBackupPlanList](~~437215~~)查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dbstooi01exXXXX',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任意字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DBS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'ErrCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'Param.NotFound',
                            ],
                            'Success' => [
                                'description' => '是否请求成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'State' => [
                                'description' => '备份计划的DLA服务状态， 取值：'."\n"
                                    .'- **Running**：运行中'."\n"
                                    .'- **Closing**：关闭中'."\n"
                                    .'- **Closed**：已关闭',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'The specified parameter %s value is not valid.',
                            ],
                            'AutoAdd' => [
                                'description' => '是否开启增量数据自动入湖，开启后，系统会自动将新产生的备份集添加入湖，取值：'."\n"
                                    .'- **true**：开启'."\n"
                                    .'- **false**：不开启',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HaveJobFailed' => [
                                'description' => '返回结果中是否存在失败的DLA任务，取值：'."\n"
                                    .'- **true**：存在'."\n"
                                    .'- **false**：不存在',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"ErrCode\\": \\"Param.NotFound\\",\\n  \\"Success\\": true,\\n  \\"State\\": \\"Running\\",\\n  \\"ErrMessage\\": \\"The specified parameter %s value is not valid.\\",\\n  \\"AutoAdd\\": true,\\n  \\"HaveJobFailed\\": false\\n}","errorExample":""},{"type":"xml","example":"<DescribeDLAServiceResponse>\\n    <AutoAdd>false</AutoAdd>\\n    <RequestId>6158A77E-AD6F-4C8F-BC0C-C8E1ABF836F3</RequestId>\\n    <HaveJobFailed>false</HaveJobFailed>\\n    <State>Closed</State>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Success>true</Success>\\n</DescribeDLAServiceResponse>","errorExample":""}]',
            'title' => '查看数据查询服务（DLA）',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDBListFromAgent' => [
            'summary' => '该接口用于通过备份网关获取物理备份的库表数据。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BackupGatewayId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关ID，可通过调用[DescribeBackupGatewayList](~~437230~~)接口获取该参数的值。'."\n"
                            ."\n"
                            .'> 此参数为必填项。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '160***',
                    ],
                ],
                [
                    'name' => 'SourceEndpointRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份网关地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异步任务ID，调用[CreateGetDBListFromAgentTask](~~437232~~)获取该参数的值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => '错误码值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
                            ],
                            'ErrCode' => [
                                'description' => '错误码字符串。'."\n",
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                            'Success' => [
                                'description' => '请求成功状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'This backupPlan can\'t support this action',
                            ],
                            'DbList' => [
                                'type' => 'object',
                                'properties' => [
                                    'dbName' => [
                                        'description' => '数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库列表。',
                                            'type' => 'string',
                                            'example' => 'TaskDB',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"DbList\\": {\\n    \\"dbName\\": [\\n      \\"TaskDB\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDBListFromAgentReponse>\\n    <RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n    <Success>true</Success>\\n    <DbList>\\n        <dbName>TaskDB</dbName>\\n    </DbList>\\n    <ErrCode>InvalidParameter</ErrCode>\\n</GetDBListFromAgentReponse>","errorExample":""}]',
            'title' => '通过备份网关获取数据库列表',
            'description' => '您需要调用[CreateGetDBListFromAgentTask](~~437232~~)接口创建一个异步任务获取TaskId（异步任务ID）。将TaskId传入GetDBListFromAgent接口后，即可获取物理备份库表数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRegions' => [
            'summary' => '该接口用于查看DBS支持地域。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'description' => '错误码值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EB4DFD5E-3618-498D-BE35-4DBEA0072122',
                            ],
                            'ErrCode' => [
                                'description' => '错误码字符串。'."\n",
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                            'Success' => [
                                'description' => '请求状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'This backupPlan can\'t support this action',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'RegionCode' => [
                                        'description' => '支持地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '支持地域列表。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": 400,\\n  \\"RequestId\\": \\"EB4DFD5E-3618-498D-BE35-4DBEA0072122\\",\\n  \\"ErrCode\\": \\"InvalidParameter\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"This backupPlan can\'t support this action\\",\\n  \\"Regions\\": {\\n    \\"RegionCode\\": [\\n      \\"cn-hangzhou\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>EB4DFD5E-3618-498D-BE35-4DBEA0072122</RequestId>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <Regions>\\n        <RegionCode/>\\n    </Regions>\\n    <ErrMessage>This backupPlan can\'t support this action</ErrMessage>\\n    <Success>true</Success>\\n    <ErrCode>InvalidParameter</ErrCode>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查看DBS支持地域',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'InitializeDbsServiceLinkedRole' => [
            'summary' => '该接口用于将服务关联角色（AliyunServiceRoleForDBS）授权给DBS。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数详情如下。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '空值。',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F1888AC-1138-4995-B9FE-D2734F61C058',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误码。',
                                'type' => 'string',
                                'example' => 'EntityAlreadyExists.Role',
                            ],
                            'ErrMessage' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'EntityAlreadyExists.Role : The role already exists:AliyunServiceRoleForDBS\\r\\nRequestId : 73******-3B4D-501A-9505-FA8B9******',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Request.Forbidden',
                        'errorMessage' => 'Have no Permissions',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"null\\",\\n  \\"RequestId\\": \\"4F1888AC-1138-4995-B9FE-D2734F61C058\\",\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"EntityAlreadyExists.Role\\",\\n  \\"ErrMessage\\": \\"EntityAlreadyExists.Role : The role already exists:AliyunServiceRoleForDBS\\\\\\\\r\\\\\\\\nRequestId : 73******-3B4D-501A-9505-FA8B9******\\"\\n}","errorExample":""},{"type":"xml","example":"<InitializeDbsServiceLinkedRoleResponse>\\r\\n    <RequestId>1FB42980-238F-43DC-942D-097562C01B5B</RequestId>\\r\\n    <ErrorCode>Success</ErrorCode>\\r\\n    <Success>true</Success>    \\r\\n</InitializeDbsServiceLinkedRoleResponse>","errorExample":""}]',
            'title' => '授权DBS服务关联角色',
            'description' => 'DBS接入您在阿里云购买的云数据库（如RDS、MongoDB、 Redis、PolarDB）或阿里云ECS上自建的数据库时， 需通过服务关联角色（AliyunServiceRoleForDBS）获取访问权限。更多信息，请参见[开通数据库备份DBS服务](~~162603~~)。',
            'requestParamsDescription' => '当前API无需请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dbs-api.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dbs-api.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dbs-api.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dbs-api.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dbs-api.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dbs-api.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dbs-api.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dbs-api.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dbs-api.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dbs-api.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dbs-api.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
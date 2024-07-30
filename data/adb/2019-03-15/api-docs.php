<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'adb',
        'version' => '2019-03-15',
    ],
    'directories' => [
        [
            'id' => 74180,
            'title' => '集群管理',
            'type' => 'directory',
            'children' => [
                'CreateDBCluster',
                'DeleteDBCluster',
                'ModifyDBCluster',
                'ModifyDBClusterMaintainTime',
                'ModifyDBClusterPayType',
                'ModifyAutoRenewAttribute',
                'ModifyDBClusterDescription',
                'ModifyDBClusterResourceGroup',
                'DescribeDBClusters',
                'DescribeDBClusterStatus',
                'DescribeDBClusterAttribute',
                'DescribeAutoRenewAttribute',
                'DescribeAvailableResource',
                'DescribeComputeResource',
                'DescribeEIURange',
                'AttachUserENI',
                'DetachUserENI',
                'DescribeKernelVersion',
                'UpgradeKernelVersion',
            ],
        ],
        [
            'id' => 74192,
            'title' => '资源组管理（旧版）',
            'type' => 'directory',
            'children' => [
                'CreateDBResourcePool',
                'DeleteDBResourcePool',
                'ModifyDBResourcePool',
                'DescribeDBResourcePool',
                'BindDBResourcePoolWithUser',
                'UnbindDBResourcePoolWithUser',
            ],
        ],
        [
            'id' => 181276,
            'title' => '资源组管理（新版）',
            'type' => 'directory',
            'children' => [
                'CreateDBResourceGroup',
                'BindDBResourceGroupWithUser',
                'UnbindDBResourceGroupWithUser',
                'DescribeDBResourceGroup',
                'ModifyDBResourceGroup',
                'DeleteDBResourceGroup',
            ],
        ],
        [
            'id' => 74199,
            'title' => '弹性计划管理',
            'type' => 'directory',
            'children' => [
                'CreateElasticPlan',
                'DeleteElasticPlan',
                'ModifyElasticPlan',
                'DescribeElasticDailyPlan',
                'DescribeElasticPlan',
            ],
        ],
        [
            'id' => 74205,
            'title' => '数据库',
            'type' => 'directory',
            'children' => [
                'DescribeTables',
                'DescribeAllDataSource',
                'DescribeSchemas',
                'DescribeTableDetail',
                'DescribeProcessList',
                'DescribeColumns',
                'DescribeTaskInfo',
                'DescribeSQLPlan',
                'DescribeSQLPlanTask',
                'DescribeTablePartitionDiagnose',
                'DescribeLoadTasksRecords',
                'DescribeConnectionCountRecords',
                'KillProcess',
            ],
        ],
        [
            'id' => 74219,
            'title' => '日志管理',
            'type' => 'directory',
            'children' => [
                'ModifyAuditLogConfig',
                'DescribeSlowLogRecords',
                'DescribeAuditLogConfig',
                'DescribeAuditLogRecords',
            ],
        ],
        [
            'id' => 74225,
            'title' => '地域管理',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 74227,
            'title' => '网络管理',
            'type' => 'directory',
            'children' => [
                'ModifyClusterConnectionString',
                'DescribeDBClusterNetInfo',
                'AllocateClusterPublicConnection',
                'ReleaseClusterPublicConnection',
            ],
        ],
        [
            'id' => 74232,
            'title' => '账号管理',
            'type' => 'directory',
            'children' => [
                'CreateAccount',
                'DeleteAccount',
                'ModifyAccountDescription',
                'DescribeAllAccounts',
                'DescribeAccounts',
                'DescribeOperatorPermission',
                'GrantOperatorPermission',
                'ResetAccountPassword',
                'RevokeOperatorPermission',
            ],
        ],
        [
            'id' => 74242,
            'title' => '标签管理',
            'type' => 'directory',
            'children' => [
                'ListTagResources',
                'TagResources',
                'UntagResources',
            ],
        ],
        [
            'id' => 74246,
            'title' => '备份恢复',
            'type' => 'directory',
            'children' => [
                'ModifyBackupPolicy',
                'ModifyLogBackupPolicy',
                'DescribeBackupPolicy',
                'DescribeBackups',
            ],
        ],
        [
            'id' => 74251,
            'title' => '安全管理',
            'type' => 'directory',
            'children' => [
                'ModifyDBClusterAccessWhiteList',
                'DescribeDBClusterAccessWhiteList',
            ],
        ],
        [
            'id' => 74254,
            'title' => '监控管理',
            'type' => 'directory',
            'children' => [
                'DescribeDBClusterHealthStatus',
                'DescribeDBClusterPerformance',
                'DescribeDBClusterResourcePoolPerformance',
                'DescribeInclinedTables',
            ],
        ],
        [
            'id' => 74259,
            'title' => '运维事件',
            'type' => 'directory',
            'children' => [
                'ModifyMaintenanceAction',
                'DescribeMaintenanceAction',
            ],
        ],
        [
            'id' => 74262,
            'title' => 'SQL诊断',
            'type' => 'directory',
            'children' => [
                'DescribeDiagnosisTasks',
                'DescribeDiagnosisRecords',
                'DescribeDiagnosisDimensions',
                'DescribeDownloadRecords',
                'DownloadDiagnosisRecords',
                'DescribeDiagnosisSQLInfo',
                'DescribeDiagnosisMonitorPerformance',
                'DescribeSQLPatterns',
                'DescribePatternPerformance',
                'EnableAdviceService',
                'ApplyAdviceById',
                'BatchApplyAdviceByIdList',
                'DescribeAdviceServiceEnabled',
                'DescribeAppliedAdvices',
                'DescribeAvailableAdvices',
                'DisableAdviceService',
            ],
        ],
        [
            'id' => 190394,
            'title' => '空间分析',
            'type' => 'directory',
            'children' => [
                'DescribeDBClusterSpaceSummary',
            ],
        ],
        [
            'id' => 74267,
            'title' => '实例运行报告',
            'type' => 'directory',
            'children' => [
                'DescribeTableAccessCount',
                'DescribeSqlPattern',
            ],
        ],
        [
            'id' => 186969,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeVSwitches',
                'MigrateDBCluster',
                'DescribeTableStatistics',
                'ModifyResubmitConfig',
                'DescribeResubmitConfig',
                'DescribeSQAConfig',
                'ModifySQAConfig',
                'DescribeDBClusterSSL',
                'ModifyDBClusterSSL',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DescribeExcessivePrimaryKeys',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDBCluster' => [
            'summary' => '创建AnalyticDB for MySQL数仓版集群。',
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'DBClusterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版集群版本。取值：**3.0**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3.0',
                    ],
                ],
                [
                    'name' => 'DBClusterCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系列。取值说明：'."\n"
                            .'- **Cluster**：预留模式集群版。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅中国内地地域和新加坡地域支持购买预留模式集群版。其中，新加坡地域仅支持在按量付费模式下购买预留模式集群版。</props>'."\n"
                            ."\n"
                            .'- **MixedStorage**：弹性模式集群版（新版）。'."\n"
                            ."\n"
                            .'> 当DBClusterCategory为Cluster时，Mode参数必须填写Reserver；当DBClusterCategory为MixedStorage时，Mode参数必须填写Flexible，否则会导致创建集群失败。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Cluster',
                    ],
                ],
                [
                    'name' => 'DBClusterClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群规格，取值：'."\n"
                            ."\n"
                            .'- **C8**'."\n"
                            .'- **C32**'."\n"
                            ."\n"
                            .'>Mode取值为Reserver（即预留模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'C8',
                    ],
                ],
                [
                    'name' => 'DBNodeGroupCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点组数量，取值范围为：1~200（整数）。'."\n"
                            .'>Mode取值为Reserver（即预留模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DBNodeStorage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点存储空间，单位：GB。取值说明：'."\n"
                            ."\n"
                            .'- 规格为C8时，取值范围为：100~1000。'."\n"
                            .'- 规格为C32时，取值范围为：100~8000。'."\n"
                            ."\n"
                            .'> - Mode取值为Reserver（即预留模式）时，本参数必填。'."\n"
                            .'> - 1000 GB以下步长为100 GB，1000 GB以上步长为1000 GB。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'DBClusterNetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型：**VPC**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VPC',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群描述。'."\n"
                            .'- 不能以`http://`或者`https`开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型。取值说明：'."\n"
                            ."\n"
                            .'- **Postpaid**：按量付费。'."\n"
                            .'- **Prepaid**：预付费（包年包月）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Postpaid',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群为包年或包月类型。取值说明：'."\n"
                            .'- **Year**：包年类型。'."\n"
                            .'- **Month**：包月类型。'."\n"
                            ."\n"
                            .'>PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预付费集群的购买时长。取值说明：'."\n"
                            ."\n"
                            .'- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。'."\n"
                            .'- 当Period为Month时，UsedTime取值范围为：1~11（整数）。'."\n"
                            ."\n"
                            .'> - PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。'."\n"
                            .'> - 购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VPCId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1at5ze0t5u3xtqn****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp1aadw9k19x6cis9****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，保证在不同请求间唯一。大小写敏感、不超过64个ASCII 字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-t7241****',
                    ],
                ],
                [
                    'name' => 'ExecutorCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。'."\n"
                                        ."\n"
                                        .'> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag1',
                                ],
                                'Value' => [
                                    'description' => '标签值，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。'."\n"
                                        ."\n"
                                        .'> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模式。取值说明：'."\n"
                            .'- **Reserver**：预留模式。'."\n"
                            .'- **Flexible**：弹性模式。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Reserver',
                    ],
                ],
                [
                    'name' => 'StorageResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ComputeResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计算资源用于数据计算，增加计算资源可以提高数据查询速度。计算资源分为集群版和单机版，其中：'."\n"
                            .'- 集群版为16核64 GB（集群版）、24核96 GB（集群版）和32核及以上规格。集群版支持资源池隔离，分时弹性功能和数据冷热分层。'."\n"
                            .'- 单机版为8核32 GB和16核64 GB（单机版）。单机版不提供SLA承诺，故障恢复耗时长（大约为4~8小时），不建议用于生产环境。'."\n"
                            ."\n"
                            .'> - 您可以调用[DescribeAvailableResource](~~190632~~)接口查询指定地域中可用的计算资源。'."\n"
                            .'> - Mode取值为**Flexible**（即弹性模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32Core128GBNEW',
                    ],
                ],
                [
                    'name' => 'RestoreType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'SourceDBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'BackupSetID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'RestoreTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预留参数，不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ElasticIOResource',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '弹性IO资源（Elastic IO Unit，简称EIU），更多详情，请参见[EIU详解](~~189505~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'DiskEncryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启云盘加密。取值：'."\n"
                            ."\n"
                            .'- true：是。'."\n"
                            .'- false：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'KmsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于云盘加密的kmsId，仅当DiskEncryption为true时有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-4690g37929****',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1r053byu48p****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '202353278****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ResourceGroupId\\": \\"rg-4690g37929****\\",\\n  \\"DBClusterId\\": \\"am-bp1r053byu48p****\\",\\n  \\"OrderId\\": \\"202353278****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ResourceGroupId>rg-4690g37929****</ResourceGroupId>\\n    <DBClusterId>am-bp1r053byu48p****</DBClusterId>\\n    <OrderId>202353278****</OrderId>\\n</CreateDBClusterResponse>","errorExample":""}]',
            'title' => '创建集群',
            'description' => '### 注意事项'."\n"
                .'集群创建成功后，将按照您选的集群规格计费。数仓版（3.0）集群的计费项与定价，详情请参见[数仓版（3.0）计费项](~~303131~~)和[数仓版（3.0）产品定价](~~135229~~)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDBCluster' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1u8c0mgfg58****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '421693038',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1u8c0mgfg58****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 421693038,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp1u8c0mgfg58****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBClusterResponse>\\n    <TaskId>421693038</TaskId>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp1u8c0mgfg58****</DBClusterId>\\n</DeleteDBClusterResponse>","errorExample":""}]',
            'title' => '删除集群',
            'summary' => '删除AnalyticDB MySQL集群。',
            'description' => '- 包年包月集群无法通过API删除，到期后会自动被释放。如果在确保集群不再使用后，您可以在用户中心申请退订。关于集群退款的详细信息，请参见[退款说明](~~471477~~)。'."\n"
                .'- 删除集群后，资源会立即释放，数据不再保留且无法找回，请谨慎操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDBCluster' => [
            'summary' => '对AnalyticDB MySQL集群进行升降配。',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1u8c0mgfg58****',
                    ],
                ],
                [
                    'name' => 'DBNodeGroupCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点组数量，取值范围为：1~200。'."\n"
                            .'> Mode取值为Reserver（即预留模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DBNodeStorage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点存储空间，取值说明：'."\n"
                            .'<props="china">'."\n"
                            .'- 规格为C8时，取值范围为：100~1000GB。</props>'."\n"
                            .'<props="intl">'."\n"
                            .'- 规格为C8时，取值范围为：100~2000GB。</props>'."\n"
                            .'- 规格为C32时，取值范围为：100~8000GB。'."\n"
                            ."\n"
                            .'> - Mode取值为Reserver（即预留模式）时，本参数必填。'."\n"
                            .'> - 1000GB以下步长为100GB，1000GB以上步长为1000GB。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '200',
                    ],
                ],
                [
                    'name' => 'DBNodeClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点规格，取值：'."\n"
                            .'- **C8**'."\n"
                            .'- **C32**'."\n"
                            .'> Mode取值为Reserver（即预留模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'C32',
                    ],
                ],
                [
                    'name' => 'ModifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更类型，取值说明：'."\n"
                            ."\n"
                            .'- **Upgrade**：升级。'."\n"
                            .'- **Downgrade**：降级。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Upgrade',
                    ],
                ],
                [
                    'name' => 'ExecutorCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，通过[DescribeRegions](~~143074~~)查看可用的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StorageResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '不涉及。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ComputeResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计算资源，您可以调用[DescribeAvailableResource](~~190632~~)接口查询指定地域中可用的计算资源。'."\n"
                            .'> Mode取值为Flexible（即弹性模式）时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32Core128GBNEW',
                    ],
                ],
                [
                    'name' => 'ElasticIOResourceSize',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '弹性资源单节点规格。取值说明：'."\n"
                            .'- **8Core64GB**：单节点规格选择**8Core64GB**时，一组弹性IO资源的规格为24Core192 GB。'."\n"
                            .'- **12Core96GB**：单节点规格选择**12Core96GB**时，一组弹性IO资源的规格为36Core288 GB。'."\n"
                            ."\n"
                            .'> 仅当集群满足如下条件时，支持该配置。'."\n"
                            .'> - 集群系列需为弹性模式。'."\n"
                            .'> - 华南3（广州）、华南1（深圳）、华东1（杭州）、华东2（上海）、华北1（青岛）、华北2（北京）和华北3（张家口）地域计算资源为16核64 GB（集群版）或以上规格的集群。'."\n"
                            .'> - 其他地域计算资源为32核128 GB或以上规格的集群。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8Core64GB',
                        'enum' => [
                            '8Core64GB',
                            '12Core96GB',
                            '16Core128GB',
                        ],
                    ],
                ],
                [
                    'name' => 'ElasticIOResource',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '弹性IO资源的数量。不同的弹性IO资源规格，可购买的数量不同。'."\n"
                            .'- 弹性IO资源规格为8核64 GB，最多可购买32组。'."\n"
                            .'- 弹性IO资源规格为12核96 GB，最多可购买16组。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DBClusterCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系列。取值说明：'."\n"
                            .'- **Cluster**：预留模式集群版。'."\n"
                            ."\n"
                            .'<props="china">'."\n"
                            .'> 仅中国内地地域和新加坡地域支持购买预留模式集群版。其中，新加坡地域仅支持在按量付费模式下购买预留模式集群版。</props>'."\n"
                            ."\n"
                            .'- **MixedStorage**：弹性模式集群版（新版）。'."\n"
                            .'> 当DBClusterCategory为Cluster时，Mode参数必须填写Reserver；当DBClusterCategory为MixedStorage时，Mode参数必须填写Flexible，否则会导致创建集群失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MixedStorage',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模式。取值说明：'."\n"
                            ."\n"
                            .'- **Reserver**：预留模式。'."\n"
                            .'- **Flexible**：弹性模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Flexible',
                    ],
                ],
                [
                    'name' => 'DiskPerformanceLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云盘PL等级。取值可选：'."\n"
                            .'- PL0'."\n"
                            .'- PL1'."\n"
                            .'- PL2'."\n"
                            .'- PL3',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PL1',
                        'enum' => [
                            'PL1',
                            'PL2',
                            'PL3',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1u8c0mgfg58****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2035629****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp1u8c0mgfg58****\\",\\n  \\"OrderId\\": \\"2035629****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp1u8c0mgfg58****</DBClusterId>\\n    <OrderId>2035629****</OrderId>\\n</ModifyDBClusterResponse>","errorExample":""}]',
            'title' => '对集群进行升降配',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDBClusterMaintainTime' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp111m2cfrdl****',
                    ],
                ],
                [
                    'name' => 'MaintainTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群的可维护时间段，格式为hh:mmZ-hh:mmZ。'."\n"
                            .'> 时间间隔只能为1小时，且需要设置为整点。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '22:00Z-23:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '65BDA532-28AF-4122-AA39-B382721EEE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterMaintainTimeResponse>\\n    <RequestId>65BDA532-28AF-4122-AA39-B382721EEE64</RequestId>\\n</ModifyDBClusterMaintainTimeResponse>","errorExample":""}]',
            'title' => '修改集群可维护时间段',
            'summary' => '调用ModifyDBClusterMaintainTime接口修改实例可维护时间段。',
        ],
        'ModifyDBClusterPayType' => [
            'summary' => '调用ModifyDBClusterPayType接口修改AnalyticDB MySQL集群的付费类型。',
            'methods' => [
                'get',
                'post',
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
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型。取值说明：'."\n"
                            .'- **Postpaid**：按量付费。'."\n"
                            .'- **Prepaid**：预付费（包年包月）。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'Prepaid',
                        'enum' => [
                            'Postpaid',
                            'Prepaid',
                        ],
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定预付费集群为包年或包月类型。取值说明：'."\n"
                            .'- **Year**：包年类型。'."\n"
                            .'- **Month**：包月类型。'."\n"
                            ."\n"
                            .'> PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                        'enum' => [
                            'Year',
                            'Month',
                        ],
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预付费集群的购买时长。取值说明：'."\n"
                            ."\n"
                            .'- 当Period为Year时，UsedTime取值范围为：1、2、3、5（整数）。'."\n"
                            .'- 当Period为Month时，UsedTime取值范围为：1~11（整数）。'."\n"
                            ."\n"
                            .'> - PayType为Prepaid（即预付费（包年包月））时，本参数为必填参数。'."\n"
                            .'> - 购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
                        'type' => 'string',
                        'required' => false,
                        'maximum' => '9',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DbClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp11q28kvl688****',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2023532****',
                            ],
                            'PayType' => [
                                'description' => '付费类型。取值说明：'."\n"
                                    .'- **Postpaid**：按量付费。'."\n"
                                    .'- **Prepaid**：预付费（包年包月）。',
                                'type' => 'string',
                                'example' => 'Prepaid',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidPayType.Malformed',
                        'errorMessage' => 'The specified parameter "PayType" is not changed.',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n  \\"OrderId\\": \\"2023532****\\",\\n  \\"PayType\\": \\"Prepaid\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterPayTypeResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n    <OrderId>2023532****</OrderId>\\n    <PayType>Prepaid</PayType>\\n</ModifyDBClusterPayTypeResponse>","errorExample":""}]',
            'title' => '修改集群的付费类型',
        ],
        'ModifyAutoRenewAttribute' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1u389j9zjh5****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RenewalStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费状态。取值：'."\n"
                            ."\n"
                            .'- **AutoRenewal**：自动续费；'."\n"
                            ."\n"
                            .'- **Normal**：手动续费；'."\n"
                            ."\n"
                            .'- **NotRenewal**：到期不续费。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AutoRenewal',
                        'default' => 'AutoRenewal',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时长。默认值为**1**。'."\n"
                            ."\n"
                            .'- 当PeriodUnit为**Month**时，取值为1~11（整数）。'."\n"
                            ."\n"
                            .'- 当PeriodUnit为**Year**时，取值为1、2、3、5（整数）。'."\n"
                            .'>购买的时间越长价格越优惠，购买1年的实际价格会比购买10个月或11个月更划算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PeriodUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '续费时长单位。默认值为**Month**。'."\n"
                            ."\n"
                            .'- **Year**：年。'."\n"
                            ."\n"
                            .'- **Month**：月。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Year',
                        'default' => 'Month',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4CE6DF97-AEA4-484F-906F-C407EE3770EB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4CE6DF97-AEA4-484F-906F-C407EE3770EB\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAutoRenewAttributeResponse>\\n    <RequestId>4CE6DF97-AEA4-484F-906F-C407EE3770EB</RequestId>\\n</ModifyAutoRenewAttributeResponse>","errorExample":""}]',
            'title' => '设置包年包月集群自动续费状态',
            'summary' => '调用ModifyAutoRenewAttribute接口设置包年包月集群自动续费状态。',
        ],
        'ModifyDBClusterDescription' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群描述。'."\n"
                            ."\n"
                            .'- 不能以`http://`或者`https`开头；'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adb_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '17F57FEE-EA4F-4337-8D2E-9C23CAA63D74',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17F57FEE-EA4F-4337-8D2E-9C23CAA63D74\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBClusterDescriptionResponse>\\n    <RequestId>17F57FEE-EA4F-4337-8D2E-9C23CAA63D74</RequestId>\\n</ModifyDBClusterDescriptionResponse>","errorExample":""}]',
            'title' => '修改集群的备注名',
            'summary' => '调用ModifyDBClusterDescription接口修改集群的备注名，方便维护管理。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDBClusterResourceGroup' => [
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
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bpxxxxx',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组id。资源组详情请参见[查看资源组基本信息](~~151181~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rg-acxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '65BDA532-28AF-4122-AA39-B382721EEE64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"65BDA532-28AF-4122-AA39-B382721EEE64\\"\\n}","type":"json"}]',
            'title' => '修改数据库集群资源组',
            'summary' => '调用ModifyDBClusterResourceGroup接口修改AnalyticDB MySQL集群的资源组。',
        ],
        'DescribeDBClusters' => [
            'summary' => '查询AnalyticDB MySQL实例列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10802',
                'abilityTreeNodes' => [
                    'FEATUREadsQEKELU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以输入上述地域中任意的集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'DBClusterDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群描述。'."\n"
                            .'- 不能以`http://`或者`https://`开头。'."\n"
                            .'- 长度为2~256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群状态，取值说明：'."\n"
                            .'- **Preparing**：准备中'."\n"
                            .'- **Creating**：创建中'."\n"
                            .'- **Restoring**：备份恢复中'."\n"
                            .'- **Running**：运行中'."\n"
                            .'- **Deleting**：删除中'."\n"
                            .'- **ClassChanging**：变配中'."\n"
                            .'- **NetAddressCreating**：创建网络中'."\n"
                            .'- **NetAddressDeleting**：删除网络中',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929XXXX',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签信息列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '列表详情。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。'."\n"
                                        ."\n"
                                        .'> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag1',
                                ],
                                'Value' => [
                                    'description' => '标签值，可以根据标签过滤集群列表。最多20对标签，各个标签对的数字n必须不同，且必须是从1开始的连续整数。`Tag.N.Key`对应的值为`Tag.N.Value`。'."\n"
                                        ."\n"
                                        .'> 最多支持64个字符，不能以`aliyun`、`acs:`、`http://`或者`https://`开头。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'DBVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群版本，固定取值为**3.0**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表详情。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBCluster' => [
                                        'description' => '集群信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列表详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DtsJobId' => [
                                                    'description' => 'DTS同步任务ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'dtsb1578j90XXXX',
                                                ],
                                                'DBNodeCount' => [
                                                    'description' => '节点组个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'Expired' => [
                                                    'description' => '集群是否过期。取值说明：'."\n"
                                                        .'* **true**：已过期。'."\n"
                                                        .'* **false**：未过期。',
                                                    'type' => 'string',
                                                    'example' => 'false',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '集群创建时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>，例如<i>2021-04-01T09:50:18Z</i>。',
                                                    'type' => 'string',
                                                    'example' => '2021-04-01T09:50:18Z',
                                                ],
                                                'PayType' => [
                                                    'description' => '集群付费类型，取值说明：'."\n"
                                                        .'* **Postpaid**：按量付费（即后付费）。'."\n"
                                                        .'* **Prepaid**：包年包月（即预付费）。',
                                                    'type' => 'string',
                                                    'example' => 'Postpaid',
                                                ],
                                                'DiskType' => [
                                                    'description' => '集群的磁盘类型，取值说明：'."\n"
                                                        .'* **local_ssd**：本地磁盘。'."\n"
                                                        .'* **cloud**：普通云盘。'."\n"
                                                        .'* **cloud_ssd**：SSD云盘。'."\n"
                                                        .'* **cloud_efficiency**：高效云盘。'."\n"
                                                        .'* **cloud_essd0**：PL0等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd**：PL1等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd2**：PL2 等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd3**：PL3 等级的ESSD云盘。'."\n"
                                                        ."\n"
                                                        .'> 更多关于ESSD云盘的详情，请参见[ESSD云盘规格](~~122389~~)。',
                                                    'type' => 'string',
                                                    'example' => 'cloud_essd',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签信息列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '列表详情。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键。'."\n"
                                                                            .'> 您可以调用[TagResources](~~179253~~)接口为目标集群创建标签。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag1',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'test1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Mode' => [
                                                    'description' => '集群模式，取值说明：'."\n"
                                                        .'* **flexible**：弹性模式。'."\n"
                                                        .'* **reserver**：预留模式。'."\n"
                                                        ."\n"
                                                        .'> - 更多关于集群模式的介绍，请参见[产品系列](~~205001~~)。',
                                                    'type' => 'string',
                                                    'example' => 'flexible',
                                                ],
                                                'Port' => [
                                                    'description' => '集群端口号，默认为3306。',
                                                    'type' => 'string',
                                                    'example' => '3306',
                                                ],
                                                'LockMode' => [
                                                    'description' => '集群的锁定模式，取值说明：'."\n"
                                                        .'* **Unlock**：正常（即未锁定）。'."\n"
                                                        .'* **ManualLock**：手动触发锁定。'."\n"
                                                        .'* **LockByExpiration**：集群过期自动锁定。'."\n"
                                                        .'* **LockByRestoration**：集群回滚前自动锁定。'."\n"
                                                        .'* **LockByDiskQuota**：集群中空间满（即数据占用的存储空间已到达上限水位的90%）自动锁定。',
                                                    'type' => 'string',
                                                    'example' => 'Unlock',
                                                ],
                                                'StorageResource' => [
                                                    'description' => '弹性模式用的存储资源规格，用于数据读写，增加该资源能提高集群读写能力。',
                                                    'type' => 'string',
                                                    'example' => '8Core32GB',
                                                ],
                                                'ExecutorCount' => [
                                                    'description' => '弹性模式下集群使用的计算节点数量。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => ' 集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp163885f8q21****',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '集群的公网连接地址。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp163885f8q21****.ads.aliyuncs.com',
                                                ],
                                                'RdsInstanceId' => [
                                                    'description' => '同步源RDS实例ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>',
                                                    'type' => 'string',
                                                    'example' => 'rm-bp11q28kvl688****',
                                                ],
                                                'DBClusterType' => [
                                                    'description' => '集群类型，取值说明：'."\n"
                                                        .'* **Common**：常规集群。'."\n"
                                                        .'* **RDS_ANALYSIS**：MySQL分析实例。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'Common',
                                                ],
                                                'CommodityCode' => [
                                                    'description' => '商品code，固定为**ads**。',
                                                    'type' => 'string',
                                                    'example' => 'ads',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '集群到期时间，UTC时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>，例如<i>2999-09-08T16:00:00Z</i>。'."\n"
                                                        ."\n"
                                                        .'> * 若目标集群付费模式为包年包月，则返回实际到期时间。'."\n"
                                                        .'> * 若目标集群付费模式为按量付费，则返回固定值**2999-09-08T16:00:00Z**。',
                                                    'type' => 'string',
                                                    'example' => '2999-09-08T16:00:00Z',
                                                ],
                                                'DBNodeStorage' => [
                                                    'description' => '集群的存储空间，单位：GB。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '300',
                                                ],
                                                'DBNodeClass' => [
                                                    'description' => '节点规格。',
                                                    'type' => 'string',
                                                    'example' => 'E8',
                                                ],
                                                'LockReason' => [
                                                    'description' => '集群锁定原因。'."\n"
                                                        .'> 仅当集群被锁定时会返回该参数，固定为**instance_expire**。',
                                                    'type' => 'string',
                                                    'example' => 'instance_expired',
                                                ],
                                                'VPCId' => [
                                                    'description' => '专有网络（VPC）ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp13h7uzhulpuxvnpXXXX',
                                                ],
                                                'RegionId' => [
                                                    'description' => '集群所在的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'ComputeResource' => [
                                                    'description' => '弹性模式下使用的计算资源规格，用于数据计算。增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                                                    'type' => 'string',
                                                    'example' => '8Core32GB',
                                                ],
                                                'ElasticIOResource' => [
                                                    'description' => '弹性IO资源（Elastic IO Unit，简称EIU），更多详情，请参见[EIU详解](~~189505~~)。'."\n"
                                                        .'> 仅弹性模式集群会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp1syh8vvw8yech7nXXXX',
                                                ],
                                                'DBVersion' => [
                                                    'description' => '数据库版本，当前仅支持**3.0**版本。',
                                                    'type' => 'string',
                                                    'example' => '3.0',
                                                ],
                                                'VPCCloudInstanceId' => [
                                                    'description' => 'VPC实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp163885f8q21****-controller',
                                                ],
                                                'DBClusterStatus' => [
                                                    'description' => '集群状态。更多详情，请参见[集群状态表](~~143075~~)。',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmyiu4ekp****',
                                                ],
                                                'DBClusterNetworkType' => [
                                                    'description' => '集群网络类型。仅支持**VPC**（专有网络）类型。',
                                                    'type' => 'string',
                                                    'example' => 'vpc',
                                                ],
                                                'DBClusterDescription' => [
                                                    'description' => '集群的描述信息。',
                                                    'type' => 'string',
                                                    'example' => 'adb_test',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '集群所在的可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-h',
                                                ],
                                                'Category' => [
                                                    'description' => '产品系列，取值说明：'."\n"
                                                        .'* **BASIC**：预留模式基础版'."\n"
                                                        .'* **CLUSTER**：预留模式集群版'."\n"
                                                        .'* **MIXED_STORAGE**：弹性模式集群版（新版）'."\n"
                                                        ."\n"
                                                        .'> 更多关于集群系列的介绍，请参见[产品系列](~~205001~~)。',
                                                    'type' => 'string',
                                                    'example' => 'MIXED_STORAGE',
                                                ],
                                                'Engine' => [
                                                    'description' => '集群引擎，固定为**AnalyticDB**。',
                                                    'type' => 'string',
                                                    'example' => 'AnalyticDB',
                                                ],
                                                'InnerIp' => [
                                                    'description' => '公网IP。',
                                                    'type' => 'string',
                                                    'example' => '10.1.xx.xx',
                                                ],
                                                'InnerPort' => [
                                                    'description' => '端口号。',
                                                    'type' => 'string',
                                                    'example' => '3306',
                                                ],
                                                'TaskInfo' => [
                                                    'description' => '任务进度信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => '任务名称。',
                                                            'type' => 'string',
                                                            'example' => 'analyticDBFlexibleScaleOut',
                                                        ],
                                                        'Status' => [
                                                            'description' => '任务状态，取值为：'."\n"
                                                                .'- **NOT_RUN**：等待运行。'."\n"
                                                                .'- **RUNNING**：运行中。'."\n"
                                                                .'- **SUCCEED**：已结束。',
                                                            'type' => 'string',
                                                            'example' => 'RUNNING',
                                                            'enum' => [
                                                                'RUNNING',
                                                                'SUCCEED',
                                                                'NOT_RUN',
                                                            ],
                                                        ],
                                                        'Progress' => [
                                                            'description' => '任务进度，单位：%。',
                                                            'type' => 'string',
                                                            'example' => '10',
                                                        ],
                                                        'StepList' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'StepList' => [
                                                                    'description' => '任务步骤。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '任务步骤。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'StepName' => [
                                                                                'description' => '步骤名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'ApplyResource',
                                                                            ],
                                                                            'StepDesc' => [
                                                                                'description' => '步骤描述。',
                                                                                'type' => 'string',
                                                                                'example' => 'Apply resource',
                                                                            ],
                                                                            'StepStatus' => [
                                                                                'description' => '步骤状态，取值为：'."\n"
                                                                                    .'- **NOT_RUN**：等待运行。'."\n"
                                                                                    .'- **RUNNING**：运行中。'."\n"
                                                                                    .'- **SUCCEED**：已结束。',
                                                                                'type' => 'string',
                                                                                'example' => 'SUCCEED',
                                                                                'enum' => [
                                                                                    'RUNNING',
                                                                                    'SUCCEED',
                                                                                    'NOT_RUN',
                                                                                ],
                                                                            ],
                                                                            'StepProgress' => [
                                                                                'description' => '步骤进度，单位：%。',
                                                                                'type' => 'string',
                                                                                'example' => '50',
                                                                            ],
                                                                            'StartTime' => [
                                                                                'description' => '步骤开始时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                                                                'type' => 'string',
                                                                                'example' => '2024-03-10T09:28:34Z',
                                                                            ],
                                                                            'EndTime' => [
                                                                                'description' => '步骤结束时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                                                                'type' => 'string',
                                                                                'example' => '2024-03-10T10:28:34Z',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ProductVersion' => [
                                                    'type' => 'string',
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
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"DtsJobId\\": \\"dtsb1578j90XXXX\\",\\n        \\"DBNodeCount\\": 1,\\n        \\"Expired\\": \\"false\\",\\n        \\"CreateTime\\": \\"2021-04-01T09:50:18Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"DiskType\\": \\"cloud_essd\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"StorageResource\\": \\"8Core32GB\\",\\n        \\"ExecutorCount\\": \\"1\\",\\n        \\"DBClusterId\\": \\"am-bp163885f8q21****\\",\\n        \\"ConnectionString\\": \\"am-bp163885f8q21****.ads.aliyuncs.com\\",\\n        \\"RdsInstanceId\\": \\"rm-bp11q28kvl688****\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBNodeStorage\\": 300,\\n        \\"DBNodeClass\\": \\"E8\\",\\n        \\"LockReason\\": \\"instance_expired\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpuxvnpXXXX\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ComputeResource\\": \\"8Core32GB\\",\\n        \\"ElasticIOResource\\": 0,\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yech7nXXXX\\",\\n        \\"DBVersion\\": \\"3.0\\",\\n        \\"VPCCloudInstanceId\\": \\"am-bp163885f8q21****-controller\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"vpc\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Category\\": \\"MIXED_STORAGE\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"InnerIp\\": \\"10.1.xx.xx\\",\\n        \\"InnerPort\\": \\"3306\\",\\n        \\"TaskInfo\\": {\\n          \\"Name\\": \\"analyticDBFlexibleScaleOut\\",\\n          \\"Status\\": \\"RUNNING\\",\\n          \\"Progress\\": \\"10\\",\\n          \\"StepList\\": {\\n            \\"StepList\\": [\\n              {\\n                \\"StepName\\": \\"ApplyResource\\",\\n                \\"StepDesc\\": \\"Apply resource\\",\\n                \\"StepStatus\\": \\"SUCCEED\\",\\n                \\"StepProgress\\": \\"50\\",\\n                \\"StartTime\\": \\"2024-03-10T09:28:34Z\\",\\n                \\"EndTime\\": \\"2024-03-10T10:28:34Z\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ProductVersion\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClustersResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DtsJobId>dtsb1578j90XXXX</DtsJobId>\\n        <DBNodeCount>1</DBNodeCount>\\n        <Expired>false</Expired>\\n        <CreateTime>2021-04-01T09:50:18Z</CreateTime>\\n        <PayType>Postpaid</PayType>\\n        <DiskType>cloud_essd</DiskType>\\n        <Tags>\\n            <Key>tag1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <StorageResource>8Core32GB</StorageResource>\\n        <ExecutorCount>1</ExecutorCount>\\n        <DBClusterId>am-bp163885f8q21****</DBClusterId>\\n        <ConnectionString>am-bp163885f8q21****.ads.aliyuncs.com</ConnectionString>\\n        <RdsInstanceId>rm-bp11q28kvl688****</RdsInstanceId>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads</CommodityCode>\\n        <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n        <DBNodeStorage>300</DBNodeStorage>\\n        <DBNodeClass>E8</DBNodeClass>\\n        <LockReason>instance_expired</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpuxvnpXXXX</VPCId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ComputeResource>8Core32GB</ComputeResource>\\n        <ElasticIOResource>0</ElasticIOResource>\\n        <VSwitchId>vsw-bp1syh8vvw8yech7nXXXX</VSwitchId>\\n        <DBVersion>3.0</DBVersion>\\n        <VPCCloudInstanceId>am-bp163885f8q21****-controller</VPCCloudInstanceId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>vpc</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>MIXED_STORAGE</Category>\\n        <Engine>AnalyticDB</Engine>\\n        <InnerIp>10.1.xx.xx</InnerIp>\\n        <InnerPort>3306</InnerPort>\\n    </Items>\\n</DescribeDBClustersResponse>","errorExample":""}]',
            'title' => '查询实例列表',
        ],
        'DescribeDBClusterStatus' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '集群的状态列表。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '集群状态。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群状态，取值说明：'."\n"
                                        .'- **Preparing**：准备中。'."\n"
                                        ."\n"
                                        .'- **Creating**：创建中。'."\n"
                                        ."\n"
                                        .'- **Restoring**：备份恢复中。'."\n"
                                        ."\n"
                                        .'- **Running**：运行中。'."\n"
                                        ."\n"
                                        .'- **Deleting**：删除中。'."\n"
                                        ."\n"
                                        .'- **ClassChanging**：变配中。'."\n"
                                        ."\n"
                                        .'- **NetAddressCreating**：创建网络中。'."\n"
                                        ."\n"
                                        .'- **NetAddressDeleting**：释放网络中。'."\n"
                                        ."\n"
                                        .'- **NetAddressModifying**：网络地址修改中。'."\n"
                                        ."\n"
                                        .'- **EngineVersionUpgrading**：版本升级中。',
                                    'type' => 'string',
                                    'example' => '["Preparing","Creating","Restoring","Running","Deleting","ClassChanging","NetAddressCreating","NetAddressDeleting","NetAddressModifying","EngineVersionUpgrading"]',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAU',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": [\\n    \\"[\\\\\\"Preparing\\\\\\",\\\\\\"Creating\\\\\\",\\\\\\"Restoring\\\\\\",\\\\\\"Running\\\\\\",\\\\\\"Deleting\\\\\\",\\\\\\"ClassChanging\\\\\\",\\\\\\"NetAddressCreating\\\\\\",\\\\\\"NetAddressDeleting\\\\\\",\\\\\\"NetAddressModifying\\\\\\",\\\\\\"EngineVersionUpgrading\\\\\\"]\\"\\n  ],\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAU\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterStatusResponse>\\n    <Status>Preparing</Status>\\n    <Status>Creating</Status>\\n    <Status>Restoring</Status>\\n    <Status>Running</Status>\\n    <Status>Deleting</Status>\\n    <Status>ClassChanging</Status>\\n    <Status>NetAddressCreating</Status>\\n    <Status>NetAddressDeleting</Status>\\n    <Status>NetAddressModifying</Status>\\n    <Status>EngineVersionUpgrading</Status>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEAU</RequestId>\\n</DescribeDBClusterStatusResponse>","errorExample":""}]',
            'title' => '查看集群的运行状态',
            'summary' => '调用DescribeDBClusterStatus接口查询AnalyticDB MySQL数仓版（3.0）集群的状态列表。',
        ],
        'DescribeDBClusterAttribute' => [
            'summary' => '调用DescribeDBClusterAttribute接口查看目标AnalyticDB MySQL版集群的详细信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10798',
                'abilityTreeNodes' => [
                    'FEATUREadsQEKELU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp111m2cfrdl1****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2895BB82-B2C1-408E-AA73-DB8D59******',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBCluster' => [
                                        'description' => '集群信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列表详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreationTime' => [
                                                    'description' => '集群创建时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-04-01T09:50:18Z',
                                                ],
                                                'EnableSpark' => [
                                                    'description' => '是否创建了Spark集群。取值说明：'."\n"
                                                        .'* **true**：已创建。'."\n"
                                                        .'* **false**：未创建。'."\n",
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'DtsJobId' => [
                                                    'description' => 'DTS同步任务ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'dtsb1hp3790****',
                                                ],
                                                'DBNodeCount' => [
                                                    'description' => '节点组个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'Expired' => [
                                                    'description' => '集群是否过期。取值说明：'."\n"
                                                        .'* **true**：已过期。'."\n"
                                                        .'* **false**：未过期。',
                                                    'type' => 'string',
                                                    'example' => 'false',
                                                ],
                                                'MaintainTime' => [
                                                    'description' => '集群的可维护时间段，格式为<i>HH:mmZ- HH:mmZ</i>，例如：<i>04:00Z-05:00Z</i>，表示可维护时间段为4点至5点。'."\n"
                                                        .'> 更多关于可维护时间段的信息，请参见[设置可维护时间段](~~122569~~)。',
                                                    'type' => 'string',
                                                    'example' => '04:00Z-05:00Z',
                                                ],
                                                'PayType' => [
                                                    'description' => '集群付费类型，取值说明：'."\n"
                                                        .'* **Postpaid**：按量付费（即后付费）。'."\n"
                                                        .'* **Prepaid**：包年包月（即预付费）。',
                                                    'type' => 'string',
                                                    'example' => 'Postpaid',
                                                ],
                                                'DiskType' => [
                                                    'description' => '集群的磁盘类型，取值说明：'."\n"
                                                        .'* **local_ssd**：本地磁盘。'."\n"
                                                        .'* **cloud**：普通云盘。'."\n"
                                                        .'* **cloud_ssd**：SSD云盘。'."\n"
                                                        .'* **cloud_efficiency**：高效云盘。'."\n"
                                                        .'* **cloud_essd0**：PL0等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd**：PL1等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd2**：PL2 等级的ESSD云盘。'."\n"
                                                        .'* **cloud_essd3**：PL3 等级的ESSD云盘。'."\n"
                                                        ."\n"
                                                        .'> 更多关于ESSD云盘的详情，请参见[ESSD云盘规格](~~122389~~)。',
                                                    'type' => 'string',
                                                    'example' => 'cloud_essd',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签信息列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '列表详情。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => '标签键。'."\n"
                                                                            .'> 您可以调用[TagResources](~~179253~~)接口为目标集群创建标签。',
                                                                        'type' => 'string',
                                                                        'example' => 'tag1',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'test1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Mode' => [
                                                    'description' => '集群模式，取值说明：'."\n"
                                                        .'* **flexible**：弹性模式。'."\n"
                                                        .'* **reserver**：预留模式。'."\n"
                                                        ."\n"
                                                        .'> 更多关于集群模式的介绍，请参见[产品系列](~~205001~~)。',
                                                    'type' => 'string',
                                                    'example' => 'flexible',
                                                ],
                                                'Port' => [
                                                    'description' => '集群端口号。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3306',
                                                ],
                                                'LockMode' => [
                                                    'description' => '集群的锁定模式，取值说明：'."\n"
                                                        .'* **Unlock**：正常（即未锁定）。'."\n"
                                                        .'* **ManualLock**：手动触发锁定。'."\n"
                                                        .'* **LockByExpiration**：集群过期自动锁定。'."\n"
                                                        .'* **LockByRestoration**：集群回滚前自动锁定。'."\n"
                                                        .'* **LockByDiskQuota**：集群中空间满（即数据占用的存储空间已到达上限水位的90%）自动锁定。',
                                                    'type' => 'string',
                                                    'example' => 'Unlock',
                                                ],
                                                'EngineVersion' => [
                                                    'description' => '集群引擎版本。',
                                                    'type' => 'string',
                                                    'example' => '3.1.1.9',
                                                ],
                                                'EnableAirflow' => [
                                                    'description' => '是否创建了Airflow集群。取值说明：'."\n"
                                                        .'* **true**：已创建。'."\n"
                                                        .'* **false**：未创建。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ExecutorCount' => [
                                                    'description' => '弹性模式下集群使用的计算节点数量。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'StorageResource' => [
                                                    'description' => '弹性模式用的存储资源规格，用于数据读写，增加该资源能提高集群读写能力。',
                                                    'type' => 'string',
                                                    'example' => '8Core32GB',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp111m2cfrdl1****',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '集群的VPC连接地址。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp111m2cfrdl1****.ads.aliyuncs.com',
                                                ],
                                                'RdsInstanceId' => [
                                                    'description' => '同步源RDS实例ID。仅MySQL分析实例会返回该参数。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'rm-bp837jsdp2****',
                                                ],
                                                'DBClusterType' => [
                                                    'description' => '集群类型。取值说明：'."\n"
                                                        .'* **Common**：常规集群。'."\n"
                                                        .'* **RDS_ANALYSIS**：MySQL分析实例。<props="china"><ph>更多详情，请参见[MySQL分析实例简介](~~154779~~)。</ph></props>'."\n",
                                                    'type' => 'string',
                                                    'example' => 'Common',
                                                ],
                                                'CommodityCode' => [
                                                    'description' => '商品付费类型，取值说明：'."\n"
                                                        .'- **ads**：按量付费商品。'."\n"
                                                        .'- **ads_pre**：包年包月商品。',
                                                    'type' => 'string',
                                                    'example' => 'ads',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '集群到期时间，格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间），例如<i>2999-09-08T16:00:00Z</i>。'."\n"
                                                        ."\n"
                                                        .'> * 若目标集群付费模式为包年包月，则返回实际到期时间。'."\n"
                                                        .'> * 若目标集群付费模式为按量付费，则返回固定值**2999-09-08T16:00:00Z**。',
                                                    'type' => 'string',
                                                    'example' => '2999-09-08T16:00:00Z',
                                                ],
                                                'DBNodeStorage' => [
                                                    'description' => '集群的存储空间，单位：GB。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '300',
                                                ],
                                                'DBNodeClass' => [
                                                    'description' => '节点规格。',
                                                    'type' => 'string',
                                                    'example' => 'E8',
                                                ],
                                                'LockReason' => [
                                                    'description' => '集群锁定原因。'."\n"
                                                        .'> 仅当集群被锁定时会返回该参数，固定为**instance_expire**。',
                                                    'type' => 'string',
                                                    'example' => 'instance_expired',
                                                ],
                                                'VPCId' => [
                                                    'description' => '专有网络（VPC）ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-bp13h7uzhulpuxvnp****',
                                                ],
                                                'ComputeResource' => [
                                                    'description' => '弹性模式下使用的计算资源规格，用于数据计算。增加计算资源能加快查询速度，可以根据集群实际性能按需弹性扩缩。',
                                                    'type' => 'string',
                                                    'example' => '8Core32GB',
                                                ],
                                                'RegionId' => [
                                                    'description' => '集群所在的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'ElasticIOResource' => [
                                                    'description' => '弹性IO资源的数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp1syh8vvw8yech7n****',
                                                ],
                                                'DBVersion' => [
                                                    'description' => '数据库版本，当前仅支持**3.0**版本。',
                                                    'type' => 'string',
                                                    'example' => '3.0',
                                                ],
                                                'VPCCloudInstanceId' => [
                                                    'description' => 'VPC实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp111m2cfrdl1****-controller',
                                                ],
                                                'DBClusterStatus' => [
                                                    'description' => '集群状态。更多详情，请参见[集群状态表](~~143075~~)。',
                                                    'type' => 'string',
                                                    'example' => 'Running',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmyiu4ekp****',
                                                ],
                                                'DBClusterNetworkType' => [
                                                    'description' => '集群网络类型。仅支持**VPC**（专有网络）类型。',
                                                    'type' => 'string',
                                                    'example' => 'vpc',
                                                ],
                                                'DBClusterDescription' => [
                                                    'description' => '集群的描述信息。',
                                                    'type' => 'string',
                                                    'example' => 'adb_test',
                                                ],
                                                'UserENIStatus' => [
                                                    'description' => '是否已启用ENI（Elastic Network Interface，弹性网卡）网络，取值说明：'."\n"
                                                        .'* **true**：已启用。'."\n"
                                                        .'* **false**：未启用。'."\n",
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '集群所在的可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-h',
                                                ],
                                                'Category' => [
                                                    'description' => '产品系列，取值说明：'."\n"
                                                        .'* **BASIC**：预留模式基础版'."\n"
                                                        .'* **CLUSTER**：预留模式集群版'."\n"
                                                        .'* **MIXED_STORAGE**：弹性模式集群版（新版）'."\n"
                                                        ."\n"
                                                        .'> 更多关于集群系列的介绍，请参见[产品系列](~~205001~~)。',
                                                    'type' => 'string',
                                                    'example' => 'MIXED_STORAGE',
                                                ],
                                                'Engine' => [
                                                    'description' => '集群引擎，固定为**AnalyticDB**。',
                                                    'type' => 'string',
                                                    'example' => 'AnalyticDB',
                                                ],
                                                'KmsId' => [
                                                    'description' => '用于加密云盘数据的密钥ID。'."\n"
                                                        .'> 仅当AnalyticDB MySQL集群开启云盘加密时才会返回该参数。',
                                                    'type' => 'string',
                                                    'example' => 'e1935511-cf88-1123-a0f8-1be8d251****',
                                                ],
                                                'InnerIp' => [
                                                    'description' => '公网IP。',
                                                    'type' => 'string',
                                                    'example' => '10.1.XX.XX',
                                                ],
                                                'InnerPort' => [
                                                    'description' => '公网端口号。',
                                                    'type' => 'string',
                                                    'example' => '3306',
                                                ],
                                                'DiskPerformanceLevel' => [
                                                    'description' => '云盘等级。',
                                                    'type' => 'string',
                                                    'example' => 'PL1',
                                                ],
                                                'ElasticIOResourceSize' => [
                                                    'description' => '弹性资源单节点规格。取值说明：'."\n"
                                                        .'- 8Core64GB：单节点规格为8Core64GB时，一组弹性IO资源的规格为24Core192 GB。'."\n"
                                                        .'- 12Core96GB：单节点规格为12Core96GB时，一组弹性IO资源的规格为36Core288 GB。',
                                                    'type' => 'string',
                                                    'example' => '8Core64GB',
                                                ],
                                                'DiskEncryption' => [
                                                    'description' => '是否开启云盘加密。取值：'."\n"
                                                        ."\n"
                                                        .'- true：是。'."\n"
                                                        .'- false：否。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'TaskInfo' => [
                                                    'description' => '任务信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => '任务名称。',
                                                            'type' => 'string',
                                                            'example' => 'analyticDBFlexibleScaleOut',
                                                        ],
                                                        'Status' => [
                                                            'description' => '任务状态，取值为：'."\n"
                                                                .'- **NOT_RUN**：等待运行。'."\n"
                                                                .'- **RUNNING**：运行中。'."\n"
                                                                .'- **SUCCEED**：已结束。',
                                                            'type' => 'string',
                                                            'example' => 'RUNNING',
                                                            'enum' => [
                                                                'RUNNING',
                                                                'SUCCEED',
                                                                'NOT_RUN',
                                                            ],
                                                        ],
                                                        'Progress' => [
                                                            'description' => '任务进度，单位：%。',
                                                            'type' => 'string',
                                                            'example' => '10',
                                                        ],
                                                        'StepList' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'StepList' => [
                                                                    'description' => '任务步骤。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '任务步骤。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'StepName' => [
                                                                                'description' => '步骤名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'ApplyResource',
                                                                            ],
                                                                            'StepDesc' => [
                                                                                'description' => '步骤描述。',
                                                                                'type' => 'string',
                                                                                'example' => 'Apply resource',
                                                                            ],
                                                                            'StepStatus' => [
                                                                                'description' => '步骤状态，取值为：'."\n"
                                                                                    .'- **NOT_RUN**：等待运行。'."\n"
                                                                                    .'- **RUNNING**：运行中。'."\n"
                                                                                    .'- **SUCCEED**：已结束。',
                                                                                'type' => 'string',
                                                                                'example' => 'SUCCEED',
                                                                                'enum' => [
                                                                                    'RUNNING',
                                                                                    'SUCCEED',
                                                                                    'NOT_RUN',
                                                                                ],
                                                                            ],
                                                                            'StepProgress' => [
                                                                                'description' => '步骤进度，单位：%。',
                                                                                'type' => 'string',
                                                                                'example' => '50',
                                                                            ],
                                                                            'StartTime' => [
                                                                                'description' => '步骤开始时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                                                                'type' => 'string',
                                                                                'example' => '2024-03-10T09:28:34Z',
                                                                            ],
                                                                            'EndTime' => [
                                                                                'description' => '步骤结束时间，格式为 YYYY-MM-DDThh:mm:ssZ。',
                                                                                'type' => 'string',
                                                                                'example' => '2024-03-10T10:28:34Z',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ProductVersion' => [
                                                    'type' => 'string',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2895BB82-B2C1-408E-AA73-DB8D59******\\",\\n  \\"Items\\": {\\n    \\"DBCluster\\": [\\n      {\\n        \\"CreationTime\\": \\"2021-04-01T09:50:18Z\\",\\n        \\"EnableSpark\\": false,\\n        \\"DtsJobId\\": \\"dtsb1hp3790****\\",\\n        \\"DBNodeCount\\": 1,\\n        \\"Expired\\": \\"false\\",\\n        \\"MaintainTime\\": \\"04:00Z-05:00Z\\",\\n        \\"PayType\\": \\"Postpaid\\",\\n        \\"DiskType\\": \\"cloud_essd\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"tag1\\",\\n              \\"Value\\": \\"test1\\"\\n            }\\n          ]\\n        },\\n        \\"Mode\\": \\"flexible\\",\\n        \\"Port\\": 3306,\\n        \\"LockMode\\": \\"Unlock\\",\\n        \\"EngineVersion\\": \\"3.1.1.9\\",\\n        \\"EnableAirflow\\": true,\\n        \\"ExecutorCount\\": \\"1\\",\\n        \\"StorageResource\\": \\"8Core32GB\\",\\n        \\"DBClusterId\\": \\"am-bp111m2cfrdl1****\\",\\n        \\"ConnectionString\\": \\"am-bp111m2cfrdl1****.ads.aliyuncs.com\\",\\n        \\"RdsInstanceId\\": \\"rm-bp837jsdp2****\\",\\n        \\"DBClusterType\\": \\"Common\\",\\n        \\"CommodityCode\\": \\"ads\\",\\n        \\"ExpireTime\\": \\"2999-09-08T16:00:00Z\\",\\n        \\"DBNodeStorage\\": 300,\\n        \\"DBNodeClass\\": \\"E8\\",\\n        \\"LockReason\\": \\"instance_expired\\",\\n        \\"VPCId\\": \\"vpc-bp13h7uzhulpuxvnp****\\",\\n        \\"ComputeResource\\": \\"8Core32GB\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ElasticIOResource\\": 2,\\n        \\"VSwitchId\\": \\"vsw-bp1syh8vvw8yech7n****\\",\\n        \\"DBVersion\\": \\"3.0\\",\\n        \\"VPCCloudInstanceId\\": \\"am-bp111m2cfrdl1****-controller\\",\\n        \\"DBClusterStatus\\": \\"Running\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmyiu4ekp****\\",\\n        \\"DBClusterNetworkType\\": \\"vpc\\",\\n        \\"DBClusterDescription\\": \\"adb_test\\",\\n        \\"UserENIStatus\\": true,\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"Category\\": \\"MIXED_STORAGE\\",\\n        \\"Engine\\": \\"AnalyticDB\\",\\n        \\"KmsId\\": \\"e1935511-cf88-1123-a0f8-1be8d251****\\",\\n        \\"InnerIp\\": \\"10.1.XX.XX\\",\\n        \\"InnerPort\\": \\"3306\\",\\n        \\"DiskPerformanceLevel\\": \\"PL1\\",\\n        \\"ElasticIOResourceSize\\": \\"8Core64GB\\",\\n        \\"DiskEncryption\\": false,\\n        \\"TaskInfo\\": {\\n          \\"Name\\": \\"analyticDBFlexibleScaleOut\\",\\n          \\"Status\\": \\"RUNNING\\",\\n          \\"Progress\\": \\"10\\",\\n          \\"StepList\\": {\\n            \\"StepList\\": [\\n              {\\n                \\"StepName\\": \\"ApplyResource\\",\\n                \\"StepDesc\\": \\"Apply resource\\",\\n                \\"StepStatus\\": \\"SUCCEED\\",\\n                \\"StepProgress\\": \\"50\\",\\n                \\"StartTime\\": \\"2024-03-10T09:28:34Z\\",\\n                \\"EndTime\\": \\"2024-03-10T10:28:34Z\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"ProductVersion\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterAttributeResponse>\\n    <RequestId>2895BB82-B2C1-408E-AA73-DB8D59******</RequestId>\\n    <Items>\\n        <CreationTime>2021-04-01T09:50:18Z</CreationTime>\\n        <EnableSpark>false</EnableSpark>\\n        <DtsJobId>dtsb1hp3790****</DtsJobId>\\n        <DBNodeCount>1</DBNodeCount>\\n        <Expired>false</Expired>\\n        <MaintainTime>04:00Z-05:00Z</MaintainTime>\\n        <PayType>Postpaid</PayType>\\n        <DiskType>cloud_essd</DiskType>\\n        <Tags>\\n            <Key>tag1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <Mode>flexible</Mode>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <EngineVersion>3.1.1.9</EngineVersion>\\n        <EnableAirflow>true</EnableAirflow>\\n        <ExecutorCount>1</ExecutorCount>\\n        <StorageResource>8Core32GB</StorageResource>\\n        <DBClusterId>am-bp111m2cfrdl1****</DBClusterId>\\n        <ConnectionString>am-bp111m2cfrdl1****.ads.aliyuncs.com</ConnectionString>\\n        <RdsInstanceId>rm-bp837jsdp2****</RdsInstanceId>\\n        <DBClusterType>Common</DBClusterType>\\n        <CommodityCode>ads</CommodityCode>\\n        <ExpireTime>2999-09-08T16:00:00Z</ExpireTime>\\n        <DBNodeStorage>300</DBNodeStorage>\\n        <DBNodeClass>E8</DBNodeClass>\\n        <LockReason>instance_expired</LockReason>\\n        <VPCId>vpc-bp13h7uzhulpuxvnp****</VPCId>\\n        <ComputeResource>8Core32GB</ComputeResource>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ElasticIOResource>2</ElasticIOResource>\\n        <VSwitchId>vsw-bp1syh8vvw8yech7n****</VSwitchId>\\n        <DBVersion>3.0</DBVersion>\\n        <VPCCloudInstanceId>am-bp111m2cfrdl1****-controller</VPCCloudInstanceId>\\n        <DBClusterStatus>Running</DBClusterStatus>\\n        <ResourceGroupId>rg-acfmyiu4ekp****</ResourceGroupId>\\n        <DBClusterNetworkType>vpc</DBClusterNetworkType>\\n        <DBClusterDescription>adb_test</DBClusterDescription>\\n        <UserENIStatus>true</UserENIStatus>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <Category>MIXED_STORAGE</Category>\\n        <Engine>AnalyticDB</Engine>\\n        <KmsId>e1935511-cf88-1123-a0f8-1be8d251****</KmsId>\\n        <InnerIp>10.1.XX.XX</InnerIp>\\n        <InnerPort>3306</InnerPort>\\n        <DiskPerformanceLevel>PL1</DiskPerformanceLevel>\\n        <ElasticIOResourceSize>8Core64GB</ElasticIOResourceSize>\\n    </Items>\\n</DescribeDBClusterAttributeResponse>","errorExample":""}]',
            'title' => '查询集群的详细属性',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAutoRenewAttribute' => [
            'summary' => '调用DescribeAutoRenewAttribute接口查询包年包月集群自动续费状态。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'如果有多个集群ID，以英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- 30'."\n"
                            .'- 50'."\n"
                            .'- 100'."\n"
                            ."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值：大于0且不超过Integer的最大值。'."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalRecordCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'PageRecordCount' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'AutoRenewAttribute' => [
                                        'description' => '集群续费信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DBClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp11q28kvl688****',
                                                ],
                                                'PeriodUnit' => [
                                                    'description' => '续费时长单位，取值说明：'."\n"
                                                        .'- **Year**：年。'."\n"
                                                        .'- **Month**：月。',
                                                    'type' => 'string',
                                                    'example' => 'Year',
                                                ],
                                                'Duration' => [
                                                    'description' => '续费时长。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'RenewalStatus' => [
                                                    'description' => '续费状态。取值说明：'."\n"
                                                        .'- **AutoRenewal**：自动续费。'."\n"
                                                        .'- **Normal**：手动续费，集群到期前通过短信提醒。'."\n"
                                                        .'- **NotRenewal**：到期不续费，集群到期前无提醒，只在到期前第三天发送不续费提醒。',
                                                    'type' => 'string',
                                                    'example' => 'AutoRenewal',
                                                ],
                                                'AutoRenewEnabled' => [
                                                    'description' => '是否开启自动续费，取值说明：'."\n"
                                                        .'- **true**：开启。'."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalRecordCount\\": 20,\\n  \\"PageRecordCount\\": 30,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": {\\n    \\"AutoRenewAttribute\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n        \\"PeriodUnit\\": \\"Year\\",\\n        \\"Duration\\": 1,\\n        \\"RenewalStatus\\": \\"AutoRenewal\\",\\n        \\"AutoRenewEnabled\\": true,\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalRecordCount>20</TotalRecordCount>\\n<PageRecordCount>30</PageRecordCount>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PageNumber>1</PageNumber>\\n<Items>\\n    <AutoRenewAttribute>\\n        <AutoRenewEnabled>true</AutoRenewEnabled>\\n        <RenewalStatus>AutoRenewal</RenewalStatus>\\n        <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n        <Duration>1</Duration>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <PeriodUnit>Year</PeriodUnit>\\n    </AutoRenewAttribute>\\n</Items>","errorExample":""}]',
            'title' => '查询包年包月集群自动续费状态',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAvailableResource' => [
            'summary' => '调用DescribeAvailableResource接口查询指定可用区资源。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)查看。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-k',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型，取值说明：'."\n"
                            .'- **PrePaid**：包年包月。'."\n"
                            .'- **PostPaid**：按量付费。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'PostPaid',
                        'default' => 'PrePaid',
                        'enum' => [
                            'PrePaid',
                            'PostPaid',
                        ],
                    ],
                ],
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回值的语言，取值说明：'."\n"
                            .'- **zh-CN**（默认值）：中文。'."\n"
                            .'- **en-US**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
                [
                    'name' => 'DBClusterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数仓版集群版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '支持的地域列表。',
                        'type' => 'object',
                        'properties' => [
                            'RegionId' => [
                                'description' => '地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'AvailableZoneList' => [
                                'description' => '支持的可用区列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '支持的可用区列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-h',
                                        ],
                                        'SupportedMode' => [
                                            'description' => '支持的模式列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '支持的模式列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Mode' => [
                                                        'description' => '支持的模式，取值说明：'."\n"
                                                            .'- **flexible**：弹性模式。'."\n"
                                                            .'- **reserver**：预留模式。',
                                                        'type' => 'string',
                                                        'example' => 'flexible',
                                                    ],
                                                    'SupportedSerialList' => [
                                                        'description' => '支持的系列列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '支持的系列列表。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Serial' => [
                                                                    'description' => '支持的系列，取值说明：'."\n"
                                                                        .'- **basic**：基础版'."\n"
                                                                        .'- **cluster**：集群版'."\n"
                                                                        .'- **mixed_storage**：集群版（新版）'."\n",
                                                                    'type' => 'string',
                                                                    'example' => 'mixed_storage',
                                                                ],
                                                                'SupportedFlexibleResource' => [
                                                                    'description' => '弹性模式支持的资源列表。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '弹性模式支持的资源列表。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'StorageType' => [
                                                                                'description' => '磁盘类型，取值说明：'."\n"
                                                                                    .'- **hdd**：机械硬盘'."\n"
                                                                                    .'- **ssd**：固态硬盘',
                                                                                'type' => 'string',
                                                                                'example' => 'hdd',
                                                                            ],
                                                                            'SupportedComputeResource' => [
                                                                                'description' => '支持的计算资源。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '支持的计算资源列表。',
                                                                                    'type' => 'string',
                                                                                    'example' => '['."\n"
                                                                                        .'                    "8Core32GB",'."\n"
                                                                                        .'                    "16Core64GB",'."\n"
                                                                                        .'                    "16Core64GBNEW",'."\n"
                                                                                        .'                    "24Core96GBNEW",'."\n"
                                                                                        .'                    "32Core128GBNEW",'."\n"
                                                                                        .'                    "48Core192GBNEW",'."\n"
                                                                                        .'                    "64Core256GBNEW",'."\n"
                                                                                        .'                    "80Core320GBNEW",'."\n"
                                                                                        .'                    "96Core384GBNEW",'."\n"
                                                                                        .'                    "128Core512GBNEW",'."\n"
                                                                                        .'                    "160Core640GBNEW",'."\n"
                                                                                        .'                    "192Core768GBNEW",'."\n"
                                                                                        .'                    "224Core896GBNEW",'."\n"
                                                                                        .'                    "256Core1024GBNEW",'."\n"
                                                                                        .'                    "288Core1152GBNEW",'."\n"
                                                                                        .'                    "320Core1280GBNEW",'."\n"
                                                                                        .'                    "384Core1536GBNEW",'."\n"
                                                                                        .'                    "416Core1664GBNEW",'."\n"
                                                                                        .'                    "448Core1792GBNEW",'."\n"
                                                                                        .'                    "480Core1920GBNEW",'."\n"
                                                                                        .'                    "512Core2048GBNEW",'."\n"
                                                                                        .'                    "576Core2304GBNEW",'."\n"
                                                                                        .'                    "640Core2560GBNEW",'."\n"
                                                                                        .'                    "768Core3072GBNEW",'."\n"
                                                                                        .'                    "800Core3200GBNEW",'."\n"
                                                                                        .'                    "896Core3584GBNEW",'."\n"
                                                                                        .'                    "960Core3840GBNEW",'."\n"
                                                                                        .'                    "1024Core4096GBNEW",'."\n"
                                                                                        .'                    "1120Core4480GBNEW",'."\n"
                                                                                        .'                    "1280Core5120GBNEW",'."\n"
                                                                                        .'                    "1440Core5760GBNEW",'."\n"
                                                                                        .'                    "1600Core6400GBNEW",'."\n"
                                                                                        .'                    "1792Core7168GBNEW",'."\n"
                                                                                        .'                    "1920Core7680GBNEW",'."\n"
                                                                                        .'                    "2048Core8192GBNEW",'."\n"
                                                                                        .'                    "2400Core9600GBNEW",'."\n"
                                                                                        .'                    "2560Core10240GBNEW",'."\n"
                                                                                        .'                    "2880Core11520GBNEW",'."\n"
                                                                                        .'                    "3200Core12800GBNEW",'."\n"
                                                                                        .'                    "4800Core19200GBNEW",'."\n"
                                                                                        .'                    "5600Core22400GBNEW",'."\n"
                                                                                        .'                    "6400Core25600GBNEW",'."\n"
                                                                                        .'                    "8000Core32000GBNEW",'."\n"
                                                                                        .'                    "8800Core35200GBNEW",'."\n"
                                                                                        .'                    "9600Core38400GBNEW"'."\n"
                                                                                        .'                  ]',
                                                                                ],
                                                                            ],
                                                                            'SupportedStorageResource' => [
                                                                                'description' => '支持的存储资源。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '不涉及。',
                                                                                    'type' => 'string',
                                                                                    'example' => '无',
                                                                                ],
                                                                            ],
                                                                            'SupportedElasticIOResource' => [
                                                                                'description' => '支持的弹性IO资源。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'Step' => [
                                                                                        'description' => '步长。',
                                                                                        'type' => 'string',
                                                                                        'example' => '1',
                                                                                    ],
                                                                                    'MinCount' => [
                                                                                        'description' => '最小值。',
                                                                                        'type' => 'string',
                                                                                        'example' => '0',
                                                                                    ],
                                                                                    'MaxCount' => [
                                                                                        'description' => '最大值。',
                                                                                        'type' => 'string',
                                                                                        'example' => '200',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                                'SupportedInstanceClassList' => [
                                                                    'description' => '预留模式支持的资源列表。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '预留模式支持的资源列表。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'InstanceClass' => [
                                                                                'description' => '支持的规格。',
                                                                                'type' => 'string',
                                                                                'example' => 'C32',
                                                                            ],
                                                                            'Tips' => [
                                                                                'description' => '规格的描述。',
                                                                                'type' => 'string',
                                                                                'example' => 'C32',
                                                                            ],
                                                                            'SupportedNodeCountList' => [
                                                                                'description' => '支持的计算节点数。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '支持的计算节点数。',
                                                                                    'type' => 'object',
                                                                                    'properties' => [
                                                                                        'StorageSize' => [
                                                                                            'description' => '支持的存储大小，单位GB。',
                                                                                            'type' => 'array',
                                                                                            'items' => [
                                                                                                'description' => '支持的存储大小，单位GB。',
                                                                                                'type' => 'string',
                                                                                                'example' => '100',
                                                                                            ],
                                                                                        ],
                                                                                        'NodeCount' => [
                                                                                            'description' => '支持的节点数。',
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'Step' => [
                                                                                                    'description' => '步长。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '1',
                                                                                                ],
                                                                                                'MinCount' => [
                                                                                                    'description' => '最小值。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '1',
                                                                                                ],
                                                                                                'MaxCount' => [
                                                                                                    'description' => '最大值。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '200',
                                                                                                ],
                                                                                            ],
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'SupportedExecutorList' => [
                                                                                'description' => '预留参数不涉及。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '预留参数不涉及。',
                                                                                    'type' => 'object',
                                                                                    'properties' => [
                                                                                        'NodeCount' => [
                                                                                            'description' => '节点数详情。',
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'Step' => [
                                                                                                    'description' => '预留参数不涉及。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '无',
                                                                                                ],
                                                                                                'MinCount' => [
                                                                                                    'description' => '预留参数不涉及。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '无',
                                                                                                ],
                                                                                                'MaxCount' => [
                                                                                                    'description' => '预留参数不涉及。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '无',
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
                                        'SupportedComputeResource' => [
                                            'description' => '预留参数不涉及。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '预留参数不涉及。',
                                                'type' => 'string',
                                                'example' => '无',
                                            ],
                                        ],
                                        'SupportedStorageResource' => [
                                            'description' => '预留参数不涉及。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '预留参数不涉及。',
                                                'type' => 'string',
                                                'example' => '无',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"AvailableZoneList\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"SupportedMode\\": [\\n        {\\n          \\"Mode\\": \\"flexible\\",\\n          \\"SupportedSerialList\\": [\\n            {\\n              \\"Serial\\": \\"mixed_storage\\",\\n              \\"SupportedFlexibleResource\\": [\\n                {\\n                  \\"StorageType\\": \\"hdd\\",\\n                  \\"SupportedComputeResource\\": [\\n                    \\"[\\\\n                    \\\\\\"8Core32GB\\\\\\",\\\\n                    \\\\\\"16Core64GB\\\\\\",\\\\n                    \\\\\\"16Core64GBNEW\\\\\\",\\\\n                    \\\\\\"24Core96GBNEW\\\\\\",\\\\n                    \\\\\\"32Core128GBNEW\\\\\\",\\\\n                    \\\\\\"48Core192GBNEW\\\\\\",\\\\n                    \\\\\\"64Core256GBNEW\\\\\\",\\\\n                    \\\\\\"80Core320GBNEW\\\\\\",\\\\n                    \\\\\\"96Core384GBNEW\\\\\\",\\\\n                    \\\\\\"128Core512GBNEW\\\\\\",\\\\n                    \\\\\\"160Core640GBNEW\\\\\\",\\\\n                    \\\\\\"192Core768GBNEW\\\\\\",\\\\n                    \\\\\\"224Core896GBNEW\\\\\\",\\\\n                    \\\\\\"256Core1024GBNEW\\\\\\",\\\\n                    \\\\\\"288Core1152GBNEW\\\\\\",\\\\n                    \\\\\\"320Core1280GBNEW\\\\\\",\\\\n                    \\\\\\"384Core1536GBNEW\\\\\\",\\\\n                    \\\\\\"416Core1664GBNEW\\\\\\",\\\\n                    \\\\\\"448Core1792GBNEW\\\\\\",\\\\n                    \\\\\\"480Core1920GBNEW\\\\\\",\\\\n                    \\\\\\"512Core2048GBNEW\\\\\\",\\\\n                    \\\\\\"576Core2304GBNEW\\\\\\",\\\\n                    \\\\\\"640Core2560GBNEW\\\\\\",\\\\n                    \\\\\\"768Core3072GBNEW\\\\\\",\\\\n                    \\\\\\"800Core3200GBNEW\\\\\\",\\\\n                    \\\\\\"896Core3584GBNEW\\\\\\",\\\\n                    \\\\\\"960Core3840GBNEW\\\\\\",\\\\n                    \\\\\\"1024Core4096GBNEW\\\\\\",\\\\n                    \\\\\\"1120Core4480GBNEW\\\\\\",\\\\n                    \\\\\\"1280Core5120GBNEW\\\\\\",\\\\n                    \\\\\\"1440Core5760GBNEW\\\\\\",\\\\n                    \\\\\\"1600Core6400GBNEW\\\\\\",\\\\n                    \\\\\\"1792Core7168GBNEW\\\\\\",\\\\n                    \\\\\\"1920Core7680GBNEW\\\\\\",\\\\n                    \\\\\\"2048Core8192GBNEW\\\\\\",\\\\n                    \\\\\\"2400Core9600GBNEW\\\\\\",\\\\n                    \\\\\\"2560Core10240GBNEW\\\\\\",\\\\n                    \\\\\\"2880Core11520GBNEW\\\\\\",\\\\n                    \\\\\\"3200Core12800GBNEW\\\\\\",\\\\n                    \\\\\\"4800Core19200GBNEW\\\\\\",\\\\n                    \\\\\\"5600Core22400GBNEW\\\\\\",\\\\n                    \\\\\\"6400Core25600GBNEW\\\\\\",\\\\n                    \\\\\\"8000Core32000GBNEW\\\\\\",\\\\n                    \\\\\\"8800Core35200GBNEW\\\\\\",\\\\n                    \\\\\\"9600Core38400GBNEW\\\\\\"\\\\n                  ]\\"\\n                  ],\\n                  \\"SupportedStorageResource\\": [\\n                    \\"无\\"\\n                  ],\\n                  \\"SupportedElasticIOResource\\": {\\n                    \\"Step\\": \\"1\\",\\n                    \\"MinCount\\": \\"0\\",\\n                    \\"MaxCount\\": \\"200\\"\\n                  }\\n                }\\n              ],\\n              \\"SupportedInstanceClassList\\": [\\n                {\\n                  \\"InstanceClass\\": \\"C32\\",\\n                  \\"Tips\\": \\"C32\\",\\n                  \\"SupportedNodeCountList\\": [\\n                    {\\n                      \\"StorageSize\\": [\\n                        \\"100\\"\\n                      ],\\n                      \\"NodeCount\\": {\\n                        \\"Step\\": \\"1\\",\\n                        \\"MinCount\\": \\"1\\",\\n                        \\"MaxCount\\": \\"200\\"\\n                      }\\n                    }\\n                  ],\\n                  \\"SupportedExecutorList\\": [\\n                    {\\n                      \\"NodeCount\\": {\\n                        \\"Step\\": \\"无\\",\\n                        \\"MinCount\\": \\"无\\",\\n                        \\"MaxCount\\": \\"无\\"\\n                      }\\n                    }\\n                  ]\\n                }\\n              ]\\n            }\\n          ]\\n        }\\n      ],\\n      \\"SupportedComputeResource\\": [\\n        \\"无\\"\\n      ],\\n      \\"SupportedStorageResource\\": [\\n        \\"无\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableResourceResponse>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <AvailableZoneList>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <SupportedMode>\\n            <Mode>flexible</Mode>\\n            <SupportedSerialList>\\n                <Serial>mixed_storage</Serial>\\n                <SupportedFlexibleResource>\\n                    <StorageType>hdd</StorageType>\\n                    <SupportedComputeResource>32Core128GB</SupportedComputeResource>\\n                    <SupportedElasticIOResource>\\n                        <Step>1</Step>\\n                        <MinCount>0</MinCount>\\n                        <MaxCount>200</MaxCount>\\n                    </SupportedElasticIOResource>\\n                </SupportedFlexibleResource>\\n                <SupportedInstanceClassList>\\n                    <InstanceClass>C32</InstanceClass>\\n                    <Tips>C32</Tips>\\n                    <SupportedNodeCountList>\\n                        <StorageSize>100</StorageSize>\\n                        <NodeCount>\\n                            <Step>1</Step>\\n                            <MinCount>1</MinCount>\\n                            <MaxCount>200</MaxCount>\\n                        </NodeCount>\\n                    </SupportedNodeCountList>\\n                </SupportedInstanceClassList>\\n            </SupportedSerialList>\\n        </SupportedMode>\\n    </AvailableZoneList>\\n</DescribeAvailableResourceResponse>","errorExample":""}]',
            'title' => '查询指定可用区资源',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeComputeResource' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版集群版本。取值：**3.0**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.0',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing-f',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'Migrate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询AnalyticDB MySQL数仓版迁移至AnalyticDB MySQL湖仓版的可用计算资源。取值：'."\n"
                            .'- **true**'."\n"
                            .'- **false**（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ComputeResource' => [
                                'description' => '计算资源规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayValue' => [
                                            'description' => '控制台显示的计算资源规格。',
                                            'type' => 'string',
                                            'example' => '8 Core 32 GB（单机版）',
                                        ],
                                        'RealValue' => [
                                            'description' => '真实的计算资源规格。',
                                            'type' => 'string',
                                            'example' => '8 Core 32 GB',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEAW',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ComputeResource\\": [\\n    {\\n      \\"DisplayValue\\": \\"8 Core 32 GB（单机版）\\",\\n      \\"RealValue\\": \\"8 Core 32 GB\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEAW\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeComputeResourceResponse>\\n    <ComputeResource>\\n        <DisplayValue>8 Core 32 GB（单机版）</DisplayValue>\\n        <RealValue>8 Core 32 GB</RealValue>\\n    </ComputeResource>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEAW</RequestId>\\n</DescribeComputeResourceResponse>","errorExample":""}]',
            'title' => '查询物理资源',
            'summary' => '调用DescribeComputeResource接口查询AnalyticDB MySQL数仓版（3.0）集群指定地域下的计算资源规格。',
        ],
        'DescribeEIURange' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'- 当**Operation**为**Buy**时，该参数可以为空。'."\n"
                            .'-  当**Operation**为**Upgrade**或**Downgrade**时，该参数必填。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'am-bp16t5ci7r74s****',
                    ],
                ],
                [
                    'name' => 'ComputeResource',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '计算资源规格。'."\n"
                            .'>您可以调用[DescribeComputeResource](~~469002~~)接口查看计算资源规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "RealValue": "32Core128GBNEW",'."\n"
                            .'      "DisplayValue": "32Core128GB"'."\n"
                            .'    }',
                    ],
                ],
                [
                    'name' => 'Operation',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '操作类型，取值说明：'."\n"
                            .'- **Buy**：新购集群。'."\n"
                            .'- **Modify**：变配集群。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Buy',
                        'default' => 'buy',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看集群的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版集群的版本。取值：**3.0**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.0',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~612293~~)接口查看集群的可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'StorageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储资源规格，默认规格为**8ACU**，取值范围：'."\n"
                            .'- **8ACU**'."\n"
                            .'- **12ACU**'."\n"
                            .'- **16ACU**',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8ACU',
                    ],
                ],
                [
                    'name' => 'SubOperation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子操作类型，取值说明：'."\n"
                            .'- **Upgrade**：升配集群。'."\n"
                            .'- **Downgrade**：降配集群。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Upgrade',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EIUInfo' => [
                                'description' => '弹性IO资源的数量列表。',
                                'type' => 'object',
                                'properties' => [
                                    'EIURange' => [
                                        'description' => '弹性IO资源数量的取值范围列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '弹性IO资源数量的取值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1,2,3,4,...200',
                                        ],
                                    ],
                                    'DefaultValue' => [
                                        'description' => '弹性IO资源数量的建议取值。',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'StorageResourceRange' => [
                                        'description' => '预留参数不涉及。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '预留参数不涉及。',
                                            'type' => 'string',
                                            'example' => 'none',
                                        ],
                                    ],
                                    'MinValue' => [
                                        'description' => '预留参数不涉及。',
                                        'type' => 'string',
                                        'example' => 'none'."\n",
                                    ],
                                    'MaxValue' => [
                                        'description' => '预留参数不涉及。',
                                        'type' => 'string',
                                        'example' => 'none'."\n",
                                    ],
                                    'Step' => [
                                        'description' => '预留参数不涉及。',
                                        'type' => 'string',
                                        'example' => 'none'."\n",
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ET****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EIUInfo\\": {\\n    \\"EIURange\\": [\\n      0\\n    ],\\n    \\"DefaultValue\\": \\"2\\",\\n    \\"StorageResourceRange\\": [\\n      \\"none\\"\\n    ],\\n    \\"MinValue\\": \\"none\\\\n\\",\\n    \\"MaxValue\\": \\"none\\\\n\\",\\n    \\"Step\\": \\"none\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ET****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeEIURangeResponse>\\n    <EIUInfo>\\n        <DefaultValue>2</DefaultValue>\\n    </EIUInfo>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n</DescribeEIURangeResponse>","errorExample":""}]',
            'title' => '查询弹性IO资源数量信息',
            'summary' => '调用DescribeEIURange接口查询AnalyticDB MySQL数仓版（3.0）集群可选择的弹性IO资源数量范围。',
        ],
        'AttachUserENI' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'The specified instance state does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachUserENIResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</AttachUserENIResponse>","errorExample":""}]',
            'title' => '打通用户ENI',
            'summary' => '调用AttachUserENI接口为AnalyticDB MySQL数仓版（3.0）集群创建VPC弹性网卡。',
            'description' => '### 使用说明'."\n"
                .'该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）。',
        ],
        'DetachUserENI' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachUserENIResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DetachUserENIResponse>","errorExample":""}]',
            'title' => '关闭用户ENI',
            'summary' => '调用DetachUserENI接口删除AnalyticDB MySQL数仓版（3.0）集群已创建的VPC弹性网卡。',
            'description' => '### 使用说明'."\n"
                .'该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）。',
        ],
        'DescribeKernelVersion' => [
            'summary' => '调用DescrbeKernelVersion接口查看目标AnalyticDB MySQL版集群的内核版本信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '216345',
                'abilityTreeNodes' => [
                    'FEATUREadsQEKELU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> * 您可以调用[DescribeDBClusters](~~98094~~)接口查看目标地域下所有的集群信息，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~612293~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'KernelVersion' => [
                                'description' => '集群内核版本号，例如：**3.1.8**。',
                                'type' => 'string',
                                'example' => '3.1.8',
                            ],
                            'ExpireDate' => [
                                'description' => '版本维护到期时间，时间格式为yyyy-MM-DD HH:mm:ss。超过此时间后，系统将不再维护该版本，若有问题，请升级到更高版本。',
                                'type' => 'string',
                                'example' => '2023-06-01T10:36:30Z',
                            ],
                            'AvailableKernelVersions' => [
                                'description' => '当前版本支持升级到的目标版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'KernelVersion' => [
                                            'description' => '集群内核版本号，例如：**3.1.9**。',
                                            'type' => 'string',
                                            'example' => '3.1.9',
                                        ],
                                        'ReleaseDate' => [
                                            'description' => '内核版本的发布时间。时间格式为yyyy-MM-DD HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '2023-06-01T10:36:30Z'."\n",
                                        ],
                                        'ExpireDate' => [
                                            'description' => '版本维护到期时间，时间格式为yyyy-MM-DD HH:mm:ss。超过此时间后，系统将不再维护该版本，若有问题，请升级到更高版本。',
                                            'type' => 'string',
                                            'example' => '2024-06-01T10:36:30Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"KernelVersion\\": \\"3.1.8\\",\\n  \\"ExpireDate\\": \\"2023-06-01T10:36:30Z\\",\\n  \\"AvailableKernelVersions\\": [\\n    {\\n      \\"KernelVersion\\": \\"3.1.9\\",\\n      \\"ReleaseDate\\": \\"2023-06-01T10:36:30Z\\\\n\\",\\n      \\"ExpireDate\\": \\"2024-06-01T10:36:30Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询集群内核版本',
        ],
        'UpgradeKernelVersion' => [
            'summary' => '升级目标AnalyticDB MySQL版集群的内核版本。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '216466',
                'abilityTreeNodes' => [
                    'FEATUREadsQEKELU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6g8w25jacm7****',
                    ],
                ],
                [
                    'name' => 'DBVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要升级到的目标内核版本。'."\n"
                            .'> 您可以调用**DescribeKernelVersion**接口查询集群支持的内核版本列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.1.9',
                    ],
                ],
                [
                    'name' => 'SwitchMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行时间，取值：'."\n"
                            .'* **0**：立即执行，默认值。'."\n"
                            .'* **1**：在可维护时间段执行。'."\n"
                            ."\n"
                            .'> 您可以调用[ModifyDBClusterMaintainTime](~~612236~~)修改集群的可维护时间段。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'The specified instance state does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
            'title' => '升级集群内核版本',
        ],
        'CreateDBResourcePool' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'- 长度不超过255个字符。'."\n"
                            .'- 必须以数字、大写字母或小写字母开头。'."\n"
                            .'- 可包含数字、大写字母、小写字母、中划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL查询的执行模式，取值说明：'."\n"
                            .'- **batch**：批处理模式。'."\n"
                            .'- **interactive**（默认值）：交互执行模式。'."\n"
                            .'> 详情请参见[查询执行模式](~~189502~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'interactive',
                    ],
                ],
                [
                    'name' => 'NodeNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数量，默认节点数0。'."\n"
                            .'- 1个节点的资源量为16核64 GB。'."\n"
                            .'- （节点数量*16核64 GB）的资源量不能超过集群总的资源量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4294967296',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</CreateDBResourcePoolResponse>","errorExample":""}]',
            'title' => '创建资源组',
            'summary' => '调用CreateDBResourcePool接口创建资源组。仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
            'description' => '### 注意事项'."\n"
                .'该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDBResourcePool' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_group',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DeleteDBResourcePoolResponse>","errorExample":""}]',
            'title' => '删除资源组',
            'summary' => '调用DeleteDBResourcePool接口删除资源组。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
            'description' => '**注意事项**'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 不能删除默认资源组USER_DEFAULT。',
        ],
        'ModifyDBResourcePool' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_group',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL查询的执行模式，取值说明：'."\n"
                            .'- **batch**：批处理模式。'."\n"
                            .'- **interactive**：交互执行模式。'."\n"
                            .'> 此参数不填写时，SQL查询的执行模式仍为原值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'batch',
                    ],
                ],
                [
                    'name' => 'NodeNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数量。'."\n"
                            ."\n"
                            .'- 1个节点的资源量为16核64 GB。'."\n"
                            .'- 修改的资源量不能超过集群总的资源量。'."\n"
                            ."\n"
                            .'> - 此参数不填写时，节点数量仍为原值。'."\n"
                            .'> - 参数QueryType和NodeNum至少填写一个。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4294967296',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyDBResourcePoolResponse>","errorExample":""}]',
            'title' => '更新资源组资源',
            'summary' => '调用ModifyDBResourcePool接口更新资源组的资源。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
            'description' => '### 注意事项'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 不支持修改默认资源组USER_DEFAULT的节点数量。',
        ],
        'DescribeDBResourcePool' => [
            'summary' => '调用DescribeDBResourcePool接口查询集群的资源组信息。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'USER_DEFAULT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '资源组',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PoolsInfo' => [
                                'description' => '资源组信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源组',
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryType' => [
                                            'description' => 'SQL查询的执行模式，取值说明：'."\n"
                                                .'- **batch**：批查询模式。'."\n"
                                                .'- **interactive**：交互执行模式。'."\n"
                                                ."\n"
                                                .'> 详情请参见[查询执行模式](~~189502~~)。',
                                            'type' => 'string',
                                            'example' => 'default_type',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-09 16:57:35.241',
                                        ],
                                        'PoolName' => [
                                            'description' => '资源组名称。',
                                            'type' => 'string',
                                            'example' => 'USER_DEFAULT',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-09 16:57:35.241',
                                        ],
                                        'PoolUsers' => [
                                            'description' => '资源组绑定的数据库账号。',
                                            'type' => 'string',
                                            'example' => 'testb,testc',
                                        ],
                                        'NodeNum' => [
                                            'description' => '节点数量。'."\n"
                                                .'> 1个节点的资源量为16核64 GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp11q28kvl688****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PoolsInfo\\": [\\n    {\\n      \\"QueryType\\": \\"default_type\\",\\n      \\"UpdateTime\\": \\"2022-03-09 16:57:35.241\\",\\n      \\"PoolName\\": \\"USER_DEFAULT\\",\\n      \\"CreateTime\\": \\"2022-03-09 16:57:35.241\\",\\n      \\"PoolUsers\\": \\"testb,testc\\",\\n      \\"NodeNum\\": 2\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBResourcePoolResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PoolsInfo>\\n        <QueryType>default_type</QueryType>\\n        <UpdateTime>2022-03-09 16:57:35.241</UpdateTime>\\n        <PoolName>USER_DEFAULT</PoolName>\\n        <CreateTime>2022-03-09 16:57:35.241</CreateTime>\\n        <PoolUsers>testb,testc</PoolUsers>\\n        <NodeNum>2</NodeNum>\\n    </PoolsInfo>\\n    <DBClusterId>am-bp11q28kvl688****</DBClusterId>\\n</DescribeDBResourcePoolResponse>","errorExample":""}]',
            'title' => '查询集群的资源组信息',
            'description' => '### 注意事项'."\n"
                .'该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BindDBResourcePoolWithUser' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PoolUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要绑定的数据库账号。既可以绑定数据库普通账号，也可以绑定数据库高权限账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'accout',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<BindDBResourcePoolWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</BindDBResourcePoolWithUserResponse>","errorExample":""}]',
            'title' => '将资源组与数据库用户进行绑定',
            'summary' => '调用BindDBResourcePoolWithUser接口将资源组与数据库用户进行绑定。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
            'description' => '### 注意事项'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 默认资源组USER_DEFAULT不支持绑定数据库账号。',
        ],
        'UnbindDBResourcePoolWithUser' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'PoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PoolUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'accout',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDBResourcePoolWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</UnbindDBResourcePoolWithUserResponse>","errorExample":""}]',
            'title' => '解绑资源组用户',
            'summary' => '调用UnbindDBResourcePoolWithUser接口解绑资源组用户。该接口仅适用于AnalyticDB MySQL弹性模式集群版（新版）。',
        ],
        'CreateDBResourceGroup' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'- 长度不超过255个字符。'."\n"
                            .'- 必须以数字、大写字母或小写字母开头。'."\n"
                            .'- 可包含数字、大写字母、小写字母、中划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_group',
                    ],
                ],
                [
                    'name' => 'GroupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询类型，取值说明：'."\n"
                            .'- **interactive**：交互查询模式。'."\n"
                            .'- **batch**（默认值）：默认查询模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'interactive',
                    ],
                ],
                [
                    'name' => 'NodeNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数量，默认值为0。'."\n"
                            .'- 1个节点的资源量为16核64 GB。'."\n"
                            .'- 节点数量不能过大，需满足节点数量*16核64 GB小于等于集群剩余可用资源。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4294967296',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'OperationDenied.DBClusterStatus',
                        'errorMessage' => 'The operation is not permitted due to cluster status.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResourceGroupResponse>\\n    <RequestId>3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8</RequestId>\\n</CreateDBResourceGroupResponse>","errorExample":""}]',
            'title' => '创建资源组',
            'summary' => '调用CreateDBResourceGroup接口为AnalyticDB MySQL数仓版（3.0）集群创建资源组。',
            'description' => '### 注意事项'."\n"
                .'该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
        ],
        'BindDBResourceGroupWithUser' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'GroupUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要绑定的数据库账号。既可以绑定数据库普通账号，也可以绑定数据库高权限账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'accout',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UserAndPoolAlreadyBind',
                        'errorMessage' => 'The specified user already binds the resource pool.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<BindDBResourceGroupWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</BindDBResourceGroupWithUserResponse>","errorExample":""}]',
            'title' => '将资源组与数据库用户进行绑定',
            'summary' => '调用BindDBResourceGroupWithUser接口为AnalyticDB MySQL数仓版（3.0）集群的资源组绑定数据库账号。',
            'description' => '### 注意事项'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 默认资源组USER_DEFAULT不支持绑定数据库账号。',
        ],
        'UnbindDBResourceGroupWithUser' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'GroupUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'accout',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindDBResourceGroupWithUserResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</UnbindDBResourceGroupWithUserResponse>","errorExample":""}]',
            'title' => '解绑资源组和用户',
            'summary' => '调用UnbindDBResourceGroupWithUser接口为AnalyticDB MySQL数仓版（3.0）集群的资源组解绑数据库账号。',
        ],
        'DescribeDBResourceGroup' => [
            'summary' => '调用DescribeDBResourceGroup接口查询AnalyticDB MySQL数仓版（3.0）集群的资源组信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'USER_DEFAULT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '资源组',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'GroupsInfo' => [
                                'description' => '资源组信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源组',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupType' => [
                                            'description' => '查询类型。取值说明：'."\n"
                                                .'- **interactive**：交互查询模式。'."\n"
                                                .'- **batch**：默认查询模式。'."\n"
                                                ."\n"
                                                .'> 详情请参见[查询执行模式](~~189502~~)。',
                                            'type' => 'string',
                                            'example' => 'interactive',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-11-09 16:57:35.241',
                                        ],
                                        'GroupName' => [
                                            'description' => '资源组名称。',
                                            'type' => 'string',
                                            'example' => 'USER_DEFAULT',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-09 16:57:35.241',
                                        ],
                                        'GroupUsers' => [
                                            'description' => '资源组绑定的数据库账号。',
                                            'type' => 'string',
                                            'example' => 'testb,testc',
                                        ],
                                        'NodeNum' => [
                                            'description' => '节点数量。1个节点的资源量为16核64 GB。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1ub9grke1****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"GroupsInfo\\": [\\n    {\\n      \\"GroupType\\": \\"interactive\\",\\n      \\"UpdateTime\\": \\"2022-11-09 16:57:35.241\\",\\n      \\"GroupName\\": \\"USER_DEFAULT\\",\\n      \\"CreateTime\\": \\"2022-10-09 16:57:35.241\\",\\n      \\"GroupUsers\\": \\"testb,testc\\",\\n      \\"NodeNum\\": 2\\n    }\\n  ],\\n  \\"DBClusterId\\": \\"am-bp1ub9grke1****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <GroupsInfo>\\n        <GroupType>interactive</GroupType>\\n        <UpdateTime>2022-11-09 16:57:35.241</UpdateTime>\\n        <GroupName>USER_DEFAULT</GroupName>\\n        <CreateTime>2022-10-09 16:57:35.241</CreateTime>\\n        <GroupUsers>testb,testc</GroupUsers>\\n        <NodeNum>2</NodeNum>\\n    </GroupsInfo>\\n    <DBClusterId>am-bp1ub9grke1****</DBClusterId>\\n</DescribeDBResourceGroupResponse>","errorExample":""}]',
            'title' => '查询数据库资源组信息',
            'description' => '### 注意事项'."\n"
                .'该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。',
        ],
        'ModifyDBResourceGroup' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_group',
                    ],
                ],
                [
                    'name' => 'GroupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询类型。取值说明：'."\n"
                            .'- **interactive**：交互查询模式。'."\n"
                            .'- **batch**：默认查询模式。'."\n"
                            ."\n"
                            .'> 详情请参见[查询执行模式](~~189502~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'batch',
                    ],
                ],
                [
                    'name' => 'NodeNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点数量，默认值为0。'."\n"
                            .'- 1个节点的资源量为16核64 GB。'."\n"
                            .'- 节点数量不能过大，需满足节点数量*16核64 GB小于等于集群剩余可用资源。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4294967296',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'The specified instance state does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyDBResourceGroupResponse>","errorExample":""}]',
            'title' => '修改数据库集群资源组',
            'summary' => '调用ModifyDBResourceGroup接口变更AnalyticDB MySQL数仓版（3.0）集群资源组的节点数量或查询模式。',
            'description' => '### 注意事项'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 不支持修改默认资源组USER_DEFAULT的节点数量。',
        ],
        'DeleteDBResourceGroup' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_group',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResourceGroupResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</DeleteDBResourceGroupResponse>","errorExample":""}]',
            'title' => '删除资源组',
            'summary' => '调用DeleteDBResourceGroup接口删除AnalyticDB MySQL数仓版（3.0）集群的指定资源组。',
            'description' => '### 注意事项'."\n"
                .'- 该接口仅适用于32核及以上规格的弹性模式集群版（新版）集群。'."\n"
                .'- 不能删除默认资源组USER_DEFAULT。',
        ],
        'CreateElasticPlan' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1d8lbdj22rx****',
                    ],
                ],
                [
                    'name' => 'ElasticPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划名称。取值说明：'."\n"
                            .'- 长度为2~30字符。'."\n"
                            .'- 由大写字母、小写字母、数字或下划线（_）组成。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourcePoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'realtime',
                        'default' => 'USER_DEFAULT',
                    ],
                ],
                [
                    'name' => 'ElasticPlanNodeNum',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '弹性计划节点数。'."\n"
                            ."\n"
                            .'- 当ElasticPlanType为**worker**时，该参数可以不填写或者填写0。'."\n"
                            ."\n"
                            .'- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数必须填写大于0的数字。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ElasticPlanTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划扩容时间，只支持设置整点时间。格式：HH:mm:ss。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '08:00:00',
                    ],
                ],
                [
                    'name' => 'ElasticPlanTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划还原时间，只支持设置整点时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10:00:00',
                    ],
                ],
                [
                    'name' => 'ElasticPlanWeeklyRepeat',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '执行弹性计划的周期。0~6表示周日到周六，多个日期用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1,2,3,4,5',
                    ],
                ],
                [
                    'name' => 'ElasticPlanMonthlyRepeat',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '执行弹性计划的周期。数字表示每个月的几号，多个日期用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1,15,25',
                    ],
                ],
                [
                    'name' => 'ElasticPlanStartDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划起始日期，格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-12-02',
                    ],
                ],
                [
                    'name' => 'ElasticPlanEndDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划结束日期，格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-12-09',
                    ],
                ],
                [
                    'name' => 'ElasticPlanEnable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划是否生效，取值说明：'."\n"
                            ."\n"
                            .'- **true**（默认值）：生效。'."\n"
                            ."\n"
                            .'- **false**：不生效。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ElasticPlanType',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '表示分时弹性计划类型'."\n"
                            .'    ■ ExecutorCombineWorker：计算存储联动变配'."\n"
                            .'    ■ Executor：计算独立弹性'."\n"
                            .'    ■ Worker：存储独立弹性',
                        'description' => '弹性计划资源类型，取值说明：'."\n"
                            ."\n"
                            .'- **worker**：弹性IO资源单独弹性。'."\n"
                            .'- **executor**：计算资源单独弹性。'."\n"
                            .'- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。'."\n"
                            ."\n"
                            .'> - 如果要使用**executorcombineworker**，集群内核版本需为3.1.3.2及以上版本。'."\n"
                            .'> - 如果要使用**worker**或**executor**，集群内核版本需为3.1.6.1及以上版本，且需要通过提交工单申请。申请通过后，才能使用**worker**或**executor**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'worker',
                    ],
                ],
                [
                    'name' => 'ElasticPlanWorkerSpec',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '表示存储独立弹性时worker垂直变配到哪种规格',
                        'description' => '弹性计划支持扩容的资源规格。取值说明：'."\n"
                            .'- 8 Core 64 GB（默认规格）'."\n"
                            .'- 16 Core 64 GB'."\n"
                            .'- 32 Core 64 GB'."\n"
                            .'- 64 Core 128 GB'."\n"
                            .'- 12 Core 96 GB'."\n"
                            .'- 24 Core 96 GB'."\n"
                            .'- 52 Core 86 GB',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32 Core 64 GB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</CreateElasticPlanResponse>","errorExample":""}]',
            'title' => '创建分时弹性计划',
            'summary' => '调用CreateElasticPlan创建分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
            'description' => '### 使用说明'."\n"
                .'该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteElasticPlan' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'ElasticPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划名称。'."\n"
                            .'> 调用[DescribeElasticPlans](~~601334~~)接口可以查看集群的弹性计划名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
            'title' => '删除分时弹性计划',
            'summary' => '调用DeleteElasticPlan接口删除分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyElasticPlan' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1rqvm70uh2v****',
                    ],
                ],
                [
                    'name' => 'ElasticPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划名称，取值说明：'."\n"
                            ."\n"
                            .'- 长度为2~30字符。'."\n"
                            .'- 由大写字母、小写字母、数字或下划线（_）组成。'."\n"
                            .'>您可以调用[DescribeElasticPlan](~~190596~~)接口查看指定集群下所有弹性计划的详细信息，包括弹性计划名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'realtime',
                    ],
                ],
                [
                    'name' => 'ResourcePoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'test',
                        'default' => 'USER_DEFAULT',
                    ],
                ],
                [
                    'name' => 'ElasticPlanNodeNum',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '弹性计划节点数。'."\n"
                            ."\n"
                            .'- 当ElasticPlanType为**worker**时，该参数可以不填写或者填写0。'."\n"
                            ."\n"
                            .'- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数必须填写大于0的数字。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ElasticPlanTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划扩容时间，只支持设置整点时间。格式：HH:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8:00:00',
                    ],
                ],
                [
                    'name' => 'ElasticPlanTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划还原时间，只支持设置整点时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10:00:00',
                    ],
                ],
                [
                    'name' => 'ElasticPlanWeeklyRepeat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行弹性计划的周期。0~6表示周日到周六，多个日期用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,2,3,4,5',
                    ],
                ],
                [
                    'name' => 'ElasticPlanMonthlyRepeat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行弹性计划的周期。数字表示每个月的几号，多个日期用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,15,25',
                    ],
                ],
                [
                    'name' => 'ElasticPlanStartDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划起始日期，格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-12-02',
                    ],
                ],
                [
                    'name' => 'ElasticPlanEndDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划结束日期，格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-12-09',
                    ],
                ],
                [
                    'name' => 'ElasticPlanEnable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划是否生效，取值说明：'."\n"
                            ."\n"
                            .'- **true**（默认值）：生效。'."\n"
                            .'- **false**：不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ElasticPlanType',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '弹性计划资源类型，取值说明：'."\n"
                            ."\n"
                            .'- **worker**：弹性IO资源单独弹性。'."\n"
                            .'- **executor**：计算资源单独弹性。'."\n"
                            .'- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。'."\n"
                            ."\n"
                            .'> - 如果要使用**executorcombineworker**，集群内核版本需为3.1.3.2及以上版本。'."\n"
                            .'> - 如果要使用**worker**或**executor**，集群内核版本需为3.1.6.1及以上版本，且需要通过提交工单申请。申请通过后，才能使用**worker**或**executor**。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'worker',
                    ],
                ],
                [
                    'name' => 'ElasticPlanWorkerSpec',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '弹性计划支持扩容的资源规格，取值说明：'."\n"
                            ."\n"
                            .'- 8 Core 64 GB（默认规格）'."\n"
                            ."\n"
                            .'- 16 Core 64 GB'."\n"
                            ."\n"
                            .'- 32 Core 64 GB'."\n"
                            ."\n"
                            .'- 64 Core 128 GB'."\n"
                            ."\n"
                            .'- 12 Core 96 GB'."\n"
                            ."\n"
                            .'- 24 Core 96 GB'."\n"
                            ."\n"
                            .'- 52 Core 86 GB',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '16 Core 64 GB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ElasticPlanParameterError',
                        'errorMessage' => 'The specified elastic plan parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyElasticPlanResponse>","errorExample":""}]',
            'title' => '修改分时弹性计划',
            'summary' => '调用ModifyElasticPlan修改分时弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
            'description' => '该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeElasticDailyPlan' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'ElasticPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划名称。取值说明：'."\n"
                            .'- 长度为2~30字符。'."\n"
                            .'- 由大写字母、小写字母、数字或下划线（_）组成。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'realtimeplan',
                    ],
                ],
                [
                    'name' => 'ResourcePoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'>您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ElasticDailyPlanDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当天弹性计划的起始日期，格式：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-12-02',
                    ],
                ],
                [
                    'name' => 'ElasticDailyPlanStatusList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当天弹性计划执行状态，同时查询多个状态用半角逗号（,）分隔，取值说明：'."\n"
                            .'- **1**：未执行。'."\n"
                            .'- **2**：执行中。'."\n"
                            .'- **3**：执行成功。'."\n"
                            .'- **4**：执行失败。'."\n"
                            ."\n"
                            .' ',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'ElasticDailyPlanList' => [
                                'description' => '当天弹性计划的信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结构体'."\n"
                                        ."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '当天弹性计划执行状态，同时查询多个状态用半角逗号（,）分隔，取值说明：'."\n"
                                                .'- **1**：未执行。'."\n"
                                                .'- **2**：执行中。'."\n"
                                                .'- **3**：执行成功。'."\n"
                                                .'- **4**：执行失败。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'Day' => [
                                            'description' => '当天弹性计划的起始日期，格式：yyyy-MM-dd。',
                                            'type' => 'string',
                                            'example' => '2022-12-02',
                                        ],
                                        'ResourcePoolName' => [
                                            'description' => '资源组名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'StartTs' => [
                                            'description' => '实际扩容时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-12-02 16:00:00',
                                        ],
                                        'PlanEndTs' => [
                                            'description' => '计划还原时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-12-02 16:00:00',
                                        ],
                                        'PlanStartTs' => [
                                            'description' => '计划扩容时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-12-02 15:00:00',
                                        ],
                                        'ElasticNodeNum' => [
                                            'description' => '弹性计划节点数。'."\n"
                                                ."\n"
                                                .'- 当ElasticPlanType为**worker**时，该参数不返回或返回结果为0。'."\n"
                                                ."\n"
                                                .'- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数返回结果为大于0的数字。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'EndTs' => [
                                            'description' => '实际还原时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-12-02 16:00:00',
                                        ],
                                        'PlanName' => [
                                            'description' => '弹性计划名称。',
                                            'type' => 'string',
                                            'example' => 'realtimeplan',
                                        ],
                                        'ElasticPlanType' => [
                                            'description' => '弹性计划资源类型，取值说明：'."\n"
                                                ."\n"
                                                .'- **worker**：弹性IO资源单独弹性。'."\n"
                                                ."\n"
                                                .'- **executor**：计算资源单独弹性。'."\n"
                                                ."\n"
                                                .'- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。',
                                            'type' => 'string',
                                            'example' => 'worker',
                                        ],
                                        'ElasticPlanWorkerSpec' => [
                                            'description' => '弹性计划支持扩容的资源规格。取值说明：'."\n"
                                                ."\n"
                                                .'- 8 Core 64 GB（默认规格）'."\n"
                                                ."\n"
                                                .'- 16 Core 64 GB'."\n"
                                                ."\n"
                                                .'- 32 Core 64 GB'."\n"
                                                ."\n"
                                                .'- 64 Core 128 GB'."\n"
                                                ."\n"
                                                .'- 12 Core 96 GB'."\n"
                                                ."\n"
                                                .'- 24 Core 96 GB'."\n"
                                                ."\n"
                                                .'- 52 Core 86 GB',
                                            'type' => 'string',
                                            'example' => '16 Core 64 GB',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ElasticDailyPlanList\\": [\\n    {\\n      \\"Status\\": 3,\\n      \\"Day\\": \\"2022-12-02\\",\\n      \\"ResourcePoolName\\": \\"test\\",\\n      \\"StartTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanEndTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanStartTs\\": \\"2022-12-02 15:00:00\\",\\n      \\"ElasticNodeNum\\": 0,\\n      \\"EndTs\\": \\"2022-12-02 16:00:00\\",\\n      \\"PlanName\\": \\"realtimeplan\\",\\n      \\"ElasticPlanType\\": \\"worker\\",\\n      \\"ElasticPlanWorkerSpec\\": \\"16 Core 64 GB\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticDailyPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ElasticDailyPlanList>\\n        <Status>3</Status>\\n        <Day>2022-12-02</Day>\\n        <ResourcePoolName>test</ResourcePoolName>\\n        <StartTs>2022-12-02 16:00:00</StartTs>\\n        <PlanEndTs>2022-12-02 16:00:00</PlanEndTs>\\n        <PlanStartTs>2022-12-02 15:00:00</PlanStartTs>\\n        <ElasticNodeNum>1</ElasticNodeNum>\\n        <EndTs>2022-12-02 16:00:00</EndTs>\\n        <PlanName>realtimeplan</PlanName>\\n        <ElasticPlanType>worker</ElasticPlanType>\\n        <ElasticPlanWorkerSpec>16 Core 64 GB</ElasticPlanWorkerSpec>\\n    </ElasticDailyPlanList>\\n</DescribeElasticDailyPlanResponse>","errorExample":""}]',
            'title' => '查询分时弹性计划日计划执行信息',
            'summary' => '调用DescribeElasticDailyPlan接口查询分时弹性计划日计划执行信息。该接口仅适用于ADB弹性模式集群版（新版）。',
            'description' => '### 使用说明'."\n"
                .'该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeElasticPlan' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp278jg9****',
                    ],
                ],
                [
                    'name' => 'ElasticPlanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划名称，取值说明：'."\n"
                            .'- 长度为2~30字符。'."\n"
                            .'- 由大写字母、小写字母、数字或下划线（_）组成。'."\n"
                            .'>不填写该参数时，返回指定集群下所有弹性计划的详细信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'realtime',
                    ],
                ],
                [
                    'name' => 'ResourcePoolName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'>- 您可以调用[DescribeDBResourceGroup](~~466685~~)接口查看资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'USER_DEFAULT',
                    ],
                ],
                [
                    'name' => 'ElasticPlanEnable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '弹性计划是否生效，取值说明：'."\n"
                            .'- **true**（默认值）：生效。'."\n"
                            .'- **false**：不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'ElasticPlanList' => [
                                'description' => '弹性计划列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '弹性计划还原时间，与弹性计划扩容时间的间隔不能超过24小时。格式：HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '10:00:00',
                                        ],
                                        'WeeklyRepeat' => [
                                            'description' => '执行弹性计划的周期。0～6表示周日到周六，多个日期用半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '3,4,5,6',
                                        ],
                                        'MonthlyRepeat' => [
                                            'description' => '执行弹性计划的周期。表示每个月的几号，多个日期用半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '1,15,25',
                                        ],
                                        'StartTime' => [
                                            'description' => '弹性计划扩容时间，格式：HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '08:00:00',
                                        ],
                                        'ResourcePoolName' => [
                                            'description' => '资源组名称。',
                                            'type' => 'string',
                                            'example' => 'USER_DEFAULT',
                                        ],
                                        'StartDay' => [
                                            'description' => '弹性计划起始日期，只有设置了弹性计划起始日期才会返回参数值。格式：yyyy-MM-dd。',
                                            'type' => 'string',
                                            'example' => '2022-12-02',
                                        ],
                                        'ElasticNodeNum' => [
                                            'description' => '弹性计划节点数。'."\n"
                                                ."\n"
                                                .'- 当ElasticPlanType为**worker**时，该参数不返回或返回结果为0。'."\n"
                                                ."\n"
                                                .'- 当ElasticPlanType为**executorcombineworker**或**executor**时，该参数返回结果为大于0的数字。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Enable' => [
                                            'description' => '弹性计划是否生效，取值说明：'."\n"
                                                .'- **true**（默认值）：生效。'."\n"
                                                .'- **false**：不生效。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'EndDay' => [
                                            'description' => '弹性计划结束日期，只有设置了弹性计划结束日期才会返回参数值。格式：yyyy-MM-dd。',
                                            'type' => 'string',
                                            'example' => '2022-12-09',
                                        ],
                                        'PlanName' => [
                                            'description' => '弹性计划名称。',
                                            'type' => 'string',
                                            'example' => 'realtime',
                                        ],
                                        'ElasticPlanType' => [
                                            'description' => '弹性计划资源类型，取值说明：'."\n"
                                                ."\n"
                                                .'- **worker**：弹性IO资源单独弹性。'."\n"
                                                .'- **executor**：计算资源单独弹性。'."\n"
                                                .'- **executorcombineworker**（默认值）：计算，弹性IO资源按默认比例弹性。',
                                            'type' => 'string',
                                            'example' => 'worker',
                                        ],
                                        'ElasticPlanWorkerSpec' => [
                                            'description' => '弹性计划支持扩容的资源规格，取值说明：'."\n"
                                                ."\n"
                                                .'- 8 Core 64 GB（默认规格）'."\n"
                                                ."\n"
                                                .'- 16 Core 64 GB'."\n"
                                                ."\n"
                                                .'- 32 Core 64 GB'."\n"
                                                ."\n"
                                                .'- 64 Core 128 GB'."\n"
                                                ."\n"
                                                .'- 12 Core 96 GB'."\n"
                                                ."\n"
                                                .'- 24 Core 96 GB'."\n"
                                                ."\n"
                                                .'- 52 Core 86 GB',
                                            'type' => 'string',
                                            'example' => '16 Core 64 GB',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"ElasticPlanList\\": [\\n    {\\n      \\"EndTime\\": \\"10:00:00\\",\\n      \\"WeeklyRepeat\\": \\"3,4,5,6\\",\\n      \\"MonthlyRepeat\\": \\"1,15,25\\",\\n      \\"StartTime\\": \\"08:00:00\\",\\n      \\"ResourcePoolName\\": \\"USER_DEFAULT\\",\\n      \\"StartDay\\": \\"2022-12-02\\",\\n      \\"ElasticNodeNum\\": 0,\\n      \\"Enable\\": true,\\n      \\"EndDay\\": \\"2022-12-09\\",\\n      \\"PlanName\\": \\"realtime\\",\\n      \\"ElasticPlanType\\": \\"worker\\",\\n      \\"ElasticPlanWorkerSpec\\": \\"16 Core 64 GB\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeElasticPlanResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <ElasticPlanList>\\n        <EndTime>10:00:00</EndTime>\\n        <WeeklyRepeat>3,4,5,6</WeeklyRepeat>\\n        <StartTime>08:00:00</StartTime>\\n        <ResourcePoolName>USER_DEFAULT</ResourcePoolName>\\n        <StartDay>2022-12-02</StartDay>\\n        <ElasticNodeNum>0</ElasticNodeNum>\\n        <Enable>true</Enable>\\n        <EndDay>2022-12-09</EndDay>\\n        <PlanName>realtime</PlanName>\\n        <ElasticPlanType>WORKER</ElasticPlanType>\\n        <ElasticPlanWorkerSpec>16 Core 64 GB</ElasticPlanWorkerSpec>\\n    </ElasticPlanList>\\n</DescribeElasticPlanResponse>","errorExample":""}]',
            'title' => '查询弹性计划',
            'summary' => '调用DescribeElasticPlan接口查询弹性计划。该接口仅适用于ADB弹性模式集群版（新版）。',
            'description' => '### 使用说明'."\n"
                .'该接口仅适用于AnalyticDB MySQL数仓版（3.0）弹性模式集群版（新版）32核及以上规格的集群。',
        ],
        'DescribeTables' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'SchemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。'."\n"
                            .' '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adb_demo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Table' => [
                                        'description' => '表列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TableName' => [
                                                    'description' => '表名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1r053byu48p****',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"am-bp1r053byu48p****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取表信息列表',
            'summary' => '调用DescribeTables接口枚举实例指定数据库下所有表列表。',
        ],
        'DescribeAllDataSource' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~612241~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1pke2pcfavw****',
                    ],
                ],
                [
                    'name' => 'SchemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。'."\n"
                            .' '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '421794A3-72A5-5D27-9E8B-A75A4C503E17',
                            ],
                            'Tables' => [
                                'type' => 'object',
                                'properties' => [
                                    'Table' => [
                                        'description' => '表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '表列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TableName' => [
                                                    'description' => '表名。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1pke2pcfavw****',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名称。'."\n"
                                                        .' '."\n",
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Columns' => [
                                'type' => 'object',
                                'properties' => [
                                    'Column' => [
                                        'description' => '列信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '列数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'bigint',
                                                ],
                                                'ColumnName' => [
                                                    'description' => '列名',
                                                    'type' => 'string',
                                                    'example' => 'id',
                                                ],
                                                'TableName' => [
                                                    'description' => '表名。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'AutoIncrementColumn' => [
                                                    'description' => '列是否自增，取值说明：'."\n"
                                                        .'- **true**：自增。'."\n"
                                                        .'- **false**：不自增。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1pke2pcfavw****',
                                                ],
                                                'PrimaryKey' => [
                                                    'description' => '列是否为主键，取值说明：'."\n"
                                                        .'- **true**：主键。'."\n"
                                                        .'- **false**：非主键。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Schemas' => [
                                'type' => 'object',
                                'properties' => [
                                    'Schema' => [
                                        'description' => '数据库信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1pke2pcfavw****',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"Tables\\": {\\n    \\"Table\\": [\\n      {\\n        \\"TableName\\": \\"test\\",\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Columns\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  },\\n  \\"Schemas\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp1pke2pcfavw****\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '枚举数据库列表',
            'summary' => '枚举实例下所有数据库列表、表列表和列列表。',
        ],
        'DescribeSchemas' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Schema' => [
                                        'description' => '数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DBClusterId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1xxxxxxxx47',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Schema\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp1xxxxxxxx47\\",\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSchemasResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Items>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Items>\\n</DescribeSchemasResponse>","errorExample":""}]',
            'title' => '枚举实例下所有数据库列表',
            'summary' => '调用DescribeSchemas接口枚举实例下所有数据库列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTableDetail' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10825',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'SchemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AvgSize' => [
                                'description' => '平均分区行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'description' => '分区列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Shard' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Size' => [
                                                    'description' => '表大小，行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'Id' => [
                                                    'description' => '分区号（只返回分区名数字部分）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AvgSize\\": 0,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Shard\\": [\\n      {\\n        \\"Size\\": 0,\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AvgSize>0</AvgSize>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>1</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>2</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>3</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>4</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>5</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>6</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>7</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>8</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>9</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>10</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>11</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>12</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>13</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>14</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>15</Id>\\n    </Shard>\\n    <Shard>\\n        <Size>0</Size>\\n        <Id>16</Id>\\n    </Shard>\\n</Items>","errorExample":""}]',
            'title' => '查询表详情',
            'summary' => '调用DescribeTableDetail接口查看表在每个Shard的数据分布情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeProcessList' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'ShowFull',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否展示完整的SQL语句。取值说明：'."\n"
                            .'- **True**：展示完整的SQL语句。'."\n"
                            .'- **False**：只展示SQL语句的前100个字符。'."\n"
                            ."\n"
                            .'> 默认值False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                    ],
                ],
                [
                    'name' => 'RunningTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按运行时间过滤，展示大于该运行时间的查询。单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'User',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按用户名过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤关键字，目前仅支持过滤**SELECT**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定字段排序，JSON格式，`[{"Field":"Time","Type":"Desc" },{ "Field":"User", "Type":"Asc" }]`，取值说明：'."\n"
                            .'- **Field**：需要排序的字段名，支持Time，User，Host，DB字段。'."\n"
                            .'- **Type**：排序类型，**Desc**为降序，**Asc**为升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[ { "Field":"Time","Type":"Desc" },  { "Field":"User", "Type":"Asc" }]',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '总页数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Process' => [
                                        'description' => '任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'StartTime' => [
                                                    'description' => '任务的开始时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                                    'type' => 'string',
                                                    'example' => '2020-11-19T02:48:15Z',
                                                ],
                                                'Time' => [
                                                    'description' => '查询任务已运行时间。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '11',
                                                ],
                                                'ProcessId' => [
                                                    'description' => '任务的唯一标识，KILL PROCESS时使用。',
                                                    'type' => 'string',
                                                    'example' => '202011191048151921681492420315100****',
                                                ],
                                                'Host' => [
                                                    'description' => '发起查询的IP地址。',
                                                    'type' => 'string',
                                                    'example' => '192.168.XX.XX:12308',
                                                ],
                                                'DB' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
                                                ],
                                                'Command' => [
                                                    'description' => '命令类型，仅支持SELECT类型。',
                                                    'type' => 'string',
                                                    'example' => 'SELECT',
                                                ],
                                                'User' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'Id' => [
                                                    'description' => '工作线程ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '49104',
                                                ],
                                                'Info' => [
                                                    'description' => '正在运行的SQL语句，默认返回前100字符。当传入参数ShowFull为True时，显示全文。',
                                                    'type' => 'string',
                                                    'example' => 'select * from sbtest1,sbtest2,sbtest3,sbtest4',
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
                400 => [
                    [
                        'errorCode' => 'IncorrectModuleVersion',
                        'errorMessage' => 'The specified module version does not support this operation.',
                    ],
                    [
                        'errorCode' => 'AnalyticDBKernelError',
                        'errorMessage' => 'Calling AnalyticDB Kernel error',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Process\\": [\\n      {\\n        \\"StartTime\\": \\"2020-11-19T02:48:15Z\\",\\n        \\"Time\\": 11,\\n        \\"ProcessId\\": \\"202011191048151921681492420315100****\\",\\n        \\"Host\\": \\"192.168.XX.XX:12308\\",\\n        \\"DB\\": \\"adb_demo\\",\\n        \\"Command\\": \\"SELECT\\",\\n        \\"User\\": \\"test\\",\\n        \\"Id\\": 49104,\\n        \\"Info\\": \\"select * from sbtest1,sbtest2,sbtest3,sbtest4\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeProcessListResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <StartTime>2020-11-19T02:48:15Z</StartTime>\\n        <Time>11</Time>\\n        <ProcessId>202011191048151921681492420315100****</ProcessId>\\n        <Host>192.168.XX.XX:12308</Host>\\n        <DB>adb_demo</DB>\\n        <Command>SELECT</Command>\\n        <User>test</User>\\n        <Id>49104</Id>\\n        <Info>select * from sbtest1,sbtest2,sbtest3,sbtest4</Info>\\n    </Items>\\n</DescribeProcessListResponse>","errorExample":""}]',
            'title' => '查看集群正在运行的查询',
            'summary' => '调用DescribeProcessList接口查看实例正在运行的查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeColumns' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'SchemaName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Column' => [
                                        'description' => '列列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '列数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'bigint',
                                                ],
                                                'ColumnName' => [
                                                    'description' => '列名。',
                                                    'type' => 'string',
                                                    'example' => 'id',
                                                ],
                                                'TableName' => [
                                                    'description' => '表名。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'AutoIncrementColumn' => [
                                                    'description' => '是否自增。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'DBClusterId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1xxxxxxxx47',
                                                ],
                                                'PrimaryKey' => [
                                                    'description' => '是否主键。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'SchemaName' => [
                                                    'description' => '数据库名。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Column\\": [\\n      {\\n        \\"Type\\": \\"bigint\\",\\n        \\"ColumnName\\": \\"id\\",\\n        \\"TableName\\": \\"test\\",\\n        \\"AutoIncrementColumn\\": true,\\n        \\"DBClusterId\\": \\"am-bp1xxxxxxxx47\\",\\n        \\"PrimaryKey\\": false,\\n        \\"SchemaName\\": \\"adb_demo\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>id</ColumnName>\\n        <Type>bigint</Type>\\n        <AutoIncrementColumn>true</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>name</ColumnName>\\n        <Type>varchar</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>value</ColumnName>\\n        <Type>int</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n    <Column>\\n        <TableName>test</TableName>\\n        <ColumnName>ts</ColumnName>\\n        <Type>timestamp</Type>\\n        <AutoIncrementColumn>false</AutoIncrementColumn>\\n        <DBClusterId>am-bp1xxxxxxxx47</DBClusterId>\\n        <PrimaryKey>false</PrimaryKey>\\n        <SchemaName>adb_demo</SchemaName>\\n    </Column>\\n</Items>","errorExample":""}]',
            'title' => '枚举实例下指定表格的列列表',
            'summary' => '调用DescribeColumns接口枚举实例下指定表格的列列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTaskInfo' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hongkong',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '225685759',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskInfo' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态：'."\n"
                                            ."\n"
                                            .'- Waiting：等待中'."\n"
                                            .'- Running：执行中'."\n"
                                            .'- Finished：已结束'."\n"
                                            .'- Failed：失败'."\n"
                                            .'- Closed：已关闭'."\n"
                                            .'- Cancel：已取消'."\n"
                                            .'- Retry：重试'."\n"
                                            .'- Pause：暂停'."\n"
                                            .'- Stop：中断',
                                        'type' => 'string',
                                        'example' => 'Finished',
                                    ],
                                    'FinishTime' => [
                                        'description' => '结束时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2020-01-07T08:08:50Z',
                                    ],
                                    'Progress' => [
                                        'description' => '进度，单位：百分比（%）。',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                    'BeginTime' => [
                                        'description' => '开始时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2020-01-07T07:39:56Z',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '225685759',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskInfo\\": {\\n    \\"Status\\": \\"Finished\\",\\n    \\"FinishTime\\": \\"2020-01-07T08:08:50Z\\",\\n    \\"Progress\\": \\"100\\",\\n    \\"BeginTime\\": \\"2020-01-07T07:39:56Z\\",\\n    \\"TaskId\\": 225685759\\n  },\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
            'title' => '查询相关管控任务流进度',
            'summary' => '调用DescribeTaskInfo接口查看相关管控任务流进度。',
        ],
        'DescribeSQLPlan' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-****************',
                    ],
                ],
                [
                    'name' => 'ProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。'."\n"
                            .'> 您可以调用[DescribeProcessList](~~612277~~)接口查看目标SQL的任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '202105271604431720161662490345*******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '22D6DEF0-CBC7-4388-A41C-D5FD62******',
                            ],
                            'StageList' => [
                                'description' => '计划阶段的信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'State' => [
                                            'description' => '该计划阶段的最终执行状态，取值范围如下：'."\n"
                                                .'* FINISHED：完成。'."\n"
                                                .'* CANCELED：取消。'."\n"
                                                .'* ABORTED：中止。'."\n"
                                                .'* FAILED：失败。',
                                            'type' => 'string',
                                            'example' => 'FINISHED',
                                        ],
                                        'CPUTimeAvg' => [
                                            'description' => '该阶段的`CPU Time`在各个计算节点的平均值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5984',
                                        ],
                                        'CPUTimeMax' => [
                                            'description' => '该阶段的`CPU Time`在各个计算节点的最大值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5984',
                                        ],
                                        'OperatorCost' => [
                                            'description' => '该阶段内部总的算子耗时，等同于该阶段的CPU Time，可用于判断查询哪些部分消耗了较多的计算资源。单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5984',
                                        ],
                                        'ScanTimeMax' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的最大值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'InputSizeMax' => [
                                            'description' => '阶段在各个计算节点的输入数据量的最大值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '173',
                                        ],
                                        'StageId' => [
                                            'description' => '阶段ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ScanSizeMax' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的最大值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CPUTimeMin' => [
                                            'description' => '该阶段的`CPU Time`在各个计算节点的最小值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '47',
                                        ],
                                        'ScanTimeMin' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的最小值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ScanSizeMin' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的最小值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'InputSizeMin' => [
                                            'description' => '阶段在各个计算节点的输入数据量的最小值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '173',
                                        ],
                                        'PeakMemory' => [
                                            'description' => '执行目标SQL时的峰值内存，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '74208',
                                        ],
                                        'ScanTimeAvg' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点读取数据耗时的平均值，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ScanSizeAvg' => [
                                            'description' => '带数据扫描算子的阶段在各个存储节点的扫描数据量的平均值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'InputSizeAvg' => [
                                            'description' => '阶段在各个计算节点的输入数据量的平均值，单位为Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '173',
                                        ],
                                    ],
                                ],
                            ],
                            'OriginInfo' => [
                                'description' => 'SQL Plan的详细原始数据。',
                                'type' => 'string',
                                'example' => '{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"session\\":{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"hasSharedStage\\":false,\\"parentId\\":0}}',
                            ],
                            'Detail' => [
                                'description' => '目标SQL的详细执行信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SQL' => [
                                        'description' => 'SQL语句。',
                                        'type' => 'string',
                                        'example' => 'INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source',
                                    ],
                                    'OutputSize' => [
                                        'description' => '目标SQL语句的总输出数据量，单位为Byte。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '9',
                                    ],
                                    'State' => [
                                        'description' => '目标SQL语句的最终执行状态，取值范围如下：'."\n"
                                            .'* FINISHED：完成。'."\n"
                                            .'* FAILED ：失败。',
                                        'type' => 'string',
                                        'example' => 'FINISHED',
                                    ],
                                    'OutputRows' => [
                                        'description' => '目标SQL的总输出行数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'User' => [
                                        'description' => '提交目标SQL语句的用户名。',
                                        'type' => 'string',
                                        'example' => 'test_acc',
                                    ],
                                    'StartTime' => [
                                        'description' => '目标SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒。',
                                        'type' => 'string',
                                        'example' => '1622102683243',
                                    ],
                                    'TotalStage' => [
                                        'description' => '目标SQL中包含的总阶段个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'QueuedTime' => [
                                        'description' => '执行目标SQL的排队时间，单位为毫秒（ms）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'TotalTime' => [
                                        'description' => '目标SQL的执行总耗时，单位为毫秒（ms）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2340',
                                    ],
                                    'TotalTask' => [
                                        'description' => '目标SQL中包含的总任务个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'Database' => [
                                        'description' => '执行目标SQL的数据库名称。',
                                        'type' => 'string',
                                        'example' => 'adb_demo',
                                    ],
                                    'PeakMemory' => [
                                        'description' => '执行目标SQL时的峰值内存，单位为Byte。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '441802',
                                    ],
                                    'ClientIP' => [
                                        'description' => '提交目标SQL语句的客户端IP地址。',
                                        'type' => 'string',
                                        'example' => '172.16.***.***',
                                    ],
                                    'PlanningTime' => [
                                        'description' => '执行目标SQL时生成执行计划的时间，单位为毫秒（ms）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '86',
                                    ],
                                    'CPUTime' => [
                                        'description' => '执行目标SQL时，算子处理数据单元的总耗时，是多服务器多线程上的累计值。单位为毫秒（ms）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"22D6DEF0-CBC7-4388-A41C-D5FD62******\\",\\n  \\"StageList\\": [\\n    {\\n      \\"State\\": \\"FINISHED\\",\\n      \\"CPUTimeAvg\\": 5984,\\n      \\"CPUTimeMax\\": 5984,\\n      \\"OperatorCost\\": 5984,\\n      \\"ScanTimeMax\\": 0,\\n      \\"InputSizeMax\\": 173,\\n      \\"StageId\\": 1,\\n      \\"ScanSizeMax\\": 0,\\n      \\"CPUTimeMin\\": 47,\\n      \\"ScanTimeMin\\": 0,\\n      \\"ScanSizeMin\\": 0,\\n      \\"InputSizeMin\\": 173,\\n      \\"PeakMemory\\": 74208,\\n      \\"ScanTimeAvg\\": 0,\\n      \\"ScanSizeAvg\\": 0,\\n      \\"InputSizeAvg\\": 173\\n    }\\n  ],\\n  \\"OriginInfo\\": \\"{\\\\\\\\\\\\\\"queryId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20210527_160443_10581_hdhzr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"session\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"queryId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20210527_160443_10581_hdhzr\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"hasSharedStage\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"parentId\\\\\\\\\\\\\\":0}}\\",\\n  \\"Detail\\": {\\n    \\"SQL\\": \\"INSERT OVERWRITE INTO hdfs_import_external\\\\\\\\nSELECT *\\\\\\\\nFROM adb_hdfs_import_source\\",\\n    \\"OutputSize\\": 9,\\n    \\"State\\": \\"FINISHED\\",\\n    \\"OutputRows\\": 1,\\n    \\"User\\": \\"test_acc\\",\\n    \\"StartTime\\": \\"1622102683243\\",\\n    \\"TotalStage\\": 4,\\n    \\"QueuedTime\\": 0,\\n    \\"TotalTime\\": 2340,\\n    \\"TotalTask\\": 4,\\n    \\"Database\\": \\"adb_demo\\",\\n    \\"PeakMemory\\": 441802,\\n    \\"ClientIP\\": \\"172.16.***.***\\",\\n    \\"PlanningTime\\": 86,\\n    \\"CPUTime\\": 6100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLPlanResponse>\\n    <RequestId>22D6DEF0-CBC7-4388-A41C-D5FD62******</RequestId>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>0</StageId>\\n        <PeakMemory>264960</PeakMemory>\\n        <CPUTimeMax>47</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>1023</InputSizeMax>\\n        <InputSizeMin>1023</InputSizeMin>\\n        <InputSizeAvg>1023</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>47</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>47</CPUTimeMin>\\n        <CPUTimeAvg>47</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>1</StageId>\\n        <PeakMemory>74208</PeakMemory>\\n        <CPUTimeMax>5984</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>173</InputSizeMax>\\n        <InputSizeMin>173</InputSizeMin>\\n        <InputSizeAvg>173</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>5984</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>5984</CPUTimeMin>\\n        <CPUTimeAvg>5984</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>0</ScanSizeMin>\\n        <ScanSizeAvg>0</ScanSizeAvg>\\n        <StageId>2</StageId>\\n        <PeakMemory>102634</PeakMemory>\\n        <CPUTimeMax>18</CPUTimeMax>\\n        <ScanTimeMin>0</ScanTimeMin>\\n        <ScanTimeAvg>0</ScanTimeAvg>\\n        <InputSizeMax>173</InputSizeMax>\\n        <InputSizeMin>173</InputSizeMin>\\n        <InputSizeAvg>173</InputSizeAvg>\\n        <ScanSizeMax>0</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>18</OperatorCost>\\n        <ScanTimeMax>0</ScanTimeMax>\\n        <CPUTimeMin>18</CPUTimeMin>\\n        <CPUTimeAvg>18</CPUTimeAvg>\\n    </StageList>\\n    <StageList>\\n        <ScanSizeMin>36</ScanSizeMin>\\n        <ScanSizeAvg>36</ScanSizeAvg>\\n        <StageId>3</StageId>\\n        <PeakMemory>0</PeakMemory>\\n        <CPUTimeMax>51</CPUTimeMax>\\n        <ScanTimeMin>10</ScanTimeMin>\\n        <ScanTimeAvg>10</ScanTimeAvg>\\n        <InputSizeMax>36</InputSizeMax>\\n        <InputSizeMin>36</InputSizeMin>\\n        <InputSizeAvg>36</InputSizeAvg>\\n        <ScanSizeMax>36</ScanSizeMax>\\n        <State>FINISHED</State>\\n        <OperatorCost>51</OperatorCost>\\n        <ScanTimeMax>10</ScanTimeMax>\\n        <CPUTimeMin>51</CPUTimeMin>\\n        <CPUTimeAvg>51</CPUTimeAvg>\\n    </StageList>\\n    <OriginInfo>{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"session\\":{\\"queryId\\":\\"20210527_160443_10581_hdhzr\\",\\"hasSharedStage\\":false,\\"parentId\\":0}}</OriginInfo>\\n    <Detail>\\n        <TotalTask>4</TotalTask>\\n        <OutputSize>9</OutputSize>\\n        <User>test_acc</User>\\n        <TotalStage>4</TotalStage>\\n        <PeakMemory>441802</PeakMemory>\\n        <StartTime>1622102683243</StartTime>\\n        <ClientIP>172.16.***.***</ClientIP>\\n        <SQL>INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source</SQL>\\n        <CPUTime>6100</CPUTime>\\n        <QueuedTime>0</QueuedTime>\\n        <State>FINISHED</State>\\n        <Database>adb_demo</Database>\\n        <TotalTime>2340</TotalTime>\\n        <PlanningTime>86</PlanningTime>\\n        <OutputRows>1</OutputRows>\\n    </Detail>\\n</DescribeSQLPlanResponse>","errorExample":""}]',
            'title' => '查询基础信息和计划信息',
            'summary' => '调用DescribeSQLPlan接口查询目标SQL，例如查询语句或ETL（Extract Transform Load）任务语句的计划信息。',
        ],
        'DescribeSQLPlanTask' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'ProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '201907241445301720211111570315107****',
                    ],
                ],
                [
                    'name' => 'StageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属阶段。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1785135913****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'TaskList' => [
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ScanCost' => [
                                            'description' => '带数据源的任务的扫描数据耗时。单位：ms。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'OutputSize' => [
                                            'description' => '任务的输出数据量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '945',
                                        ],
                                        'InputSize' => [
                                            'description' => '任务的输入数据量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3763',
                                        ],
                                        'State' => [
                                            'description' => '任务最终执行状态：'."\n"
                                                ."\n"
                                                .'- FINISHED：完成。'."\n"
                                                .'- CANCELED：取消。'."\n"
                                                .'- ABORTED：中止。'."\n"
                                                .'- FAILED：失败。',
                                            'type' => 'string',
                                            'example' => 'FINISHED',
                                        ],
                                        'OperatorCost' => [
                                            'description' => '任务在某个节点的算子总耗时，是个多线程累加值，可以用于判断计算是否存在长尾。单位：ms。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3',
                                        ],
                                        'OutputRows' => [
                                            'description' => '任务的输出数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '105',
                                        ],
                                        'ScanSize' => [
                                            'description' => '带数据源的任务的扫描数据量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ElapsedTime' => [
                                            'description' => '任务从创建到结束的时间差。单位：ms。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'ScanRows' => [
                                            'description' => '带数据源的任务的扫描数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'PeakMemory' => [
                                            'description' => '任务在某个节点的峰值内存。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '898576',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '198877623',
                                        ],
                                        'InputRows' => [
                                            'description' => '任务的输入数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '105',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"TaskList\\": [\\n    {\\n      \\"OutputSize\\": 945,\\n      \\"ScanCost\\": 0,\\n      \\"InputSize\\": 3763,\\n      \\"State\\": \\"FINISHED\\",\\n      \\"OperatorCost\\": 3,\\n      \\"OutputRows\\": 105,\\n      \\"ScanSize\\": 0,\\n      \\"ElapsedTime\\": 10,\\n      \\"ScanRows\\": 0,\\n      \\"PeakMemory\\": 898576,\\n      \\"TaskId\\": 198877623,\\n      \\"InputRows\\": 105\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<TaskList>\\n    <OutputSize>945</OutputSize>\\n    <TaskId>198877623</TaskId>\\n    <InputSize>3763</InputSize>\\n    <PeakMemory>898576</PeakMemory>\\n    <ElapsedTime>10</ElapsedTime>\\n    <InputRows>105</InputRows>\\n    <ScanRows>0</ScanRows>\\n    <ScanCost>0</ScanCost>\\n    <State>FINISHED</State>\\n    <OutputRows>105</OutputRows>\\n    <OperatorCost>3</OperatorCost>\\n    <ScanSize>0</ScanSize>\\n</TaskList>","errorExample":""}]',
            'title' => '查询计划任务信息',
            'summary' => '调用DescribeSQLPlanTask查询任务信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeTablePartitionDiagnose' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10826',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~612241~~)接口查看目标地域下所有AnalyticDB MySQL数仓版集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bpxxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            ."\n"
                            .'- 30；'."\n"
                            .'- 50；'."\n"
                            .'- 100；'."\n"
                            ."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => '[{"Field":"SchemaName", "Type": "desc" }]',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PageSize' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '123',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '34',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'rm-uf6wjk5xxxxxxxxxx',
                            ],
                            'SuggestMaxRecordsPerPartition' => [
                                'description' => '建议每个二级分区的最大行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '640000000',
                            ],
                            'SuggestMinRecordsPerPartition' => [
                                'description' => '建议每个二级分区的最小行数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '64000000',
                            ],
                            'Items' => [
                                'description' => '表统计信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TableName' => [
                                            'description' => '表名。',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'PartitionDetail' => [
                                            'description' => '不合理分区。',
                                            'type' => 'string',
                                            'example' => '[20210110, 20210113,20210123]',
                                        ],
                                        'SchemaName' => [
                                            'description' => '数据库名。',
                                            'type' => 'string',
                                            'example' => 'test_db',
                                        ],
                                        'PartitionNumber' => [
                                            'description' => '分区个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '34',
                                        ],
                                        'SpaceRatio' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'TotalSize' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                    ],
                                ],
                            ],
                            'DetectionItems' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageSize\\": 123,\\n  \\"PageNumber\\": 34,\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\",\\n  \\"SuggestMaxRecordsPerPartition\\": 640000000,\\n  \\"SuggestMinRecordsPerPartition\\": 64000000,\\n  \\"Items\\": [\\n    {\\n      \\"TableName\\": \\"user\\",\\n      \\"PartitionDetail\\": \\"[20210110, 20210113,20210123]\\",\\n      \\"SchemaName\\": \\"test_db\\",\\n      \\"PartitionNumber\\": 34,\\n      \\"SpaceRatio\\": 0,\\n      \\"TotalSize\\": 0\\n    }\\n  ],\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>1</TotalCount>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PageSize>123</PageSize>\\n<PageNumber>34</PageNumber>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>\\n<SuggestMaxRecordsPerPartition>640000000</SuggestMaxRecordsPerPartition>\\n<SuggestMinRecordsPerPartition>64000000</SuggestMinRecordsPerPartition>\\n<Items>\\n    <TableName>user</TableName>\\n    <PartitionDetail>[20210110, 20210113,20210123]</PartitionDetail>\\n    <SchemaName>test_db</SchemaName>\\n    <PartitionNumber>34</PartitionNumber>\\n</Items>","errorExample":""}]',
            'title' => '查询二级分区诊断新系列',
            'summary' => '调用DescribeTablePartitionDiagnose查询二级分区诊断新系列。',
        ],
        'DescribeLoadTasksRecords' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp2590j****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            .'> 建议查询开始时间设置为30天内的任意时间点。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-05-18T06:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，需晚于查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-05-18T06:30:00Z',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入导出任务所涉及的数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值范围如下：'."\n"
                            .'* **30**（默认值）。'."\n"
                            .'* **50**。'."\n"
                            .'* **100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定字段对任务进行升序或降序排列。参数值需为JSON字符串类型，例如：`[{"Field":"CreateTime", "Type":"desc"}]`'."\n"
                            ."\n"
                            .'> * `Field`表示需要排序的字段名，支持的字段为：`State`、`CreateTime`、`DBName`、`ProcessID`、`UpdateTime`、`JobName`和`ProcessRows`。'."\n"
                            .'> * `Type`表示排序类型，取值范围为`Desc`（降序）或`Asc`（升序），取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"CreateTime", "Type":"desc"}]',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的异步导入或导出任务的状态，取值范围如下：'."\n"
                            .'* **INIT**：任务初始化。'."\n"
                            .'* **RUNNING**：任务进行中。'."\n"
                            .'* **FINISH**：任务执行成功。'."\n"
                            .'* **FAILED**：任务执行失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FINISH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '任务总数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C60B05DB-2B77-421A-98E9-92C20E******',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp2590j****',
                            ],
                            'LoadTasksRecords' => [
                                'description' => '任务信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Sql' => [
                                            'description' => '异步导入导出任务中使用的SQL语句详情。',
                                            'type' => 'string',
                                            'example' => 'insert overwrite into courses_external_table\\nselect * from courses',
                                        ],
                                        'State' => [
                                            'description' => '任务状态。',
                                            'type' => 'string',
                                            'example' => 'FINISH',
                                        ],
                                        'CreateTime' => [
                                            'description' => '任务开始时间，精确到毫秒，格式为<i>yyyy-MM-ddTHH:mm:ss.SSSZ</i>。',
                                            'type' => 'string',
                                            'example' => '2021-05-18 18:47:27.0',
                                        ],
                                        'DBName' => [
                                            'description' => '导入导出任务涉及的数据库名称。',
                                            'type' => 'string',
                                            'example' => 'adb_demo',
                                        ],
                                        'ProcessID' => [
                                            'description' => '进程ID。',
                                            'type' => 'string',
                                            'example' => '2021051818472717201616624903453******',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '任务状态的更新时间，精确到毫秒，格式为<i>yyyy-MM-ddTHH:mm:ss.SSSZ</i>。',
                                            'type' => 'string',
                                            'example' => '2021-05-18 18:47:31.0',
                                        ],
                                        'JobName' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '2021051818472717201616624903453******',
                                        ],
                                        'ProcessRows' => [
                                            'description' => '异步导入导出任务所处理的数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"C60B05DB-2B77-421A-98E9-92C20E******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-bp2590j****\\",\\n  \\"LoadTasksRecords\\": [\\n    {\\n      \\"Sql\\": \\"insert overwrite into courses_external_table\\\\\\\\nselect * from courses\\",\\n      \\"State\\": \\"FINISH\\",\\n      \\"CreateTime\\": \\"2021-05-18 18:47:27.0\\",\\n      \\"DBName\\": \\"adb_demo\\",\\n      \\"ProcessID\\": \\"2021051818472717201616624903453******\\",\\n      \\"UpdateTime\\": \\"2021-05-18 18:47:31.0\\",\\n      \\"JobName\\": \\"2021051818472717201616624903453******\\",\\n      \\"ProcessRows\\": 6\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeLoadTasksRecordsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>C60B05DB-2B77-421A-98E9-92C20E******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-bp2590j****</DBClusterId>\\n    <LoadTasksRecords>\\n        <Sql>insert overwrite into courses_external_table\\\\nselect * from courses</Sql>\\n        <State>FINISH</State>\\n        <CreateTime>2021-05-18 18:47:27.0</CreateTime>\\n        <DBName>adb_demo</DBName>\\n        <ProcessID>2021051818472717201616624903453******</ProcessID>\\n        <UpdateTime>2021-05-18 18:47:31.0</UpdateTime>\\n        <JobName>2021051818472717201616624903453******</JobName>\\n        <ProcessRows>6</ProcessRows>\\n    </LoadTasksRecords>\\n</DescribeLoadTasksRecordsResponse>","errorExample":""}]',
            'title' => '查询加载任务记录',
            'summary' => '查看异步导入导出任务的详情。',
            'description' => '更多关于异步提交导入导出任务的详情，请参见[异步提交导入导出任务](~~160291~~)。',
        ],
        'DescribeConnectionCountRecords' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1jj9xqft1po****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '562C7F89-FBE6-4A04-AAAA-7EBC25******',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1jj9xqft1po****',
                            ],
                            'AccessIpRecords' => [
                                'description' => '客户端IP信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessIp' => [
                                            'description' => '客户端IP。',
                                            'type' => 'string',
                                            'example' => '42.120.XX.XX',
                                        ],
                                        'Count' => [
                                            'description' => '连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'UserRecords' => [
                                'description' => '用户信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'User' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Count' => [
                                            'description' => '连接数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"562C7F89-FBE6-4A04-AAAA-7EBC25******\\",\\n  \\"DBClusterId\\": \\"am-bp1jj9xqft1po****\\",\\n  \\"AccessIpRecords\\": [\\n    {\\n      \\"AccessIp\\": \\"42.120.XX.XX\\",\\n      \\"Count\\": 1\\n    }\\n  ],\\n  \\"UserRecords\\": [\\n    {\\n      \\"User\\": \\"test\\",\\n      \\"Count\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeConnectionCountRecordsResponse>\\n    <RequestId>562C7F89-FBE6-4A04-AAAA-7EBC25******</RequestId>\\n    <DBClusterId>am-bp1jj9xqft1po****</DBClusterId>\\n    <AccessIpRecords>\\n        <AccessIp>42.120.XX.XX</AccessIp>\\n        <Count>1</Count>\\n    </AccessIpRecords>\\n    <UserRecords>\\n        <User>test</User>\\n        <Count>1</Count>\\n    </UserRecords>\\n</DescribeConnectionCountRecordsResponse>","errorExample":""}]',
            'title' => '查询连接记录数',
            'summary' => '返回目标AnalyticDB MySQL版集群当前的连接数。',
        ],
        'KillProcess' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'ProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要被终止任务的唯一标识，调用[DescribeProcessList](~~190092~~)返回。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '202011191048151921681492420315100****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
            'title' => '终止正在进行的任务',
            'summary' => '调用KillProcess接口终止正在进行的任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAuditLogConfig' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-t4nj8619bz2w3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AuditLogStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL审计的开启状态。取值说明：'."\n"
                            .'- **on**：开启SQL审计。'."\n"
                            .'- **off**：关闭SQL审计。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'on',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'UpdateSucceed' => [
                                'description' => '是否已更新SQL审计的开启状态。取值说明：'."\n"
                                    .'- **true**：状态已更新。'."\n"
                                    .'- **false**：状态更新失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"UpdateSucceed\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyAuditLogConfigResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <UpdateSucceed>true</UpdateSucceed>\\n</ModifyAuditLogConfigResponse>","errorExample":""}]',
            'title' => '修改审计日志设置',
            'summary' => '调用ModifyAuditLogConfig接口修改审计日志设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSlowLogRecords' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1rqvm70uh2****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-05-20T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            .'> 查询结束时间需晚于查询开始时间，且与查询开始时间间隔小于7天。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-05-27T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProcessID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '进程ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021052716044317201616624903453******',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]`。其中：'."\n"
                            .'* `Field`表示需要排序的字段名，支持如下取值：'."\n"
                            .'    * **HostAddress**：连接数据库的客户端地址。'."\n"
                            .'    * **UserName**：用户名。'."\n"
                            .'    * **ExecutionStartTime**：目标SQL的执行开始时间。'."\n"
                            .'    * **QueryTime**：目标SQL执行时长。'."\n"
                            .'    * **PeakMemoryUsage**：执行目标SQL语句时的峰值内存。'."\n"
                            .'    * **ScanRows**：带数据源的任务的扫描数据行数。'."\n"
                            .'    * **ScanSize**：扫描的数据量。'."\n"
                            .'    * **ScanTime**：扫描数据总耗时。'."\n"
                            .'    * **PlanningTime**：执行计划生成耗时。'."\n"
                            .'    * **WallTime**：查询中的所有算子在各个节点CPU Time的累加值。'."\n"
                            .'    * **ProcessID**：进程ID。'."\n"
                            ."\n"
                            .'* `Type`表示排序类型，支持如下取值：'."\n"
                            .'    * **Desc**：降序。'."\n"
                            .'    * **Asc**：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"ExecutionStartTime","Type":"Desc"},{"Field":"ScanRows","Type":"Asc"}]',
                    ],
                ],
                [
                    'name' => 'Range',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据指定字段的最大值（`Max`）和最小值（`Min`）进行范围过滤，格式为JSON格式，是一个JSON数组，例如`[{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]`。'."\n"
                            ."\n"
                            .'其中`Field`字段表示需要限制范围的字段，支持如下取值：'."\n"
                            .'* **ScanSize**：扫描的数据量，单位：KB。'."\n"
                            .'* **QueryTime**：执行时长，单位：毫秒（ms）。'."\n"
                            .'* **PeakMemoryUsage**：执行目标SQL语句时的峰值内存，单位：KB。'."\n"
                            ."\n"
                            .'> `Min`表示查询范围最小值（左值），`Max`表示查询范围最大值（右值），数据类型都为String。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"ScanSize","Min":"1000000","Max":"10000000"},{"Field":"QueryTime","Min":"1000","Max":"10000"}]',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询状态。取值说明：'."\n"
                            .'- **Successed**：成功。'."\n"
                            .'- **Failed**：失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Successed',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '参数列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D7559209-7EC3-41E1-8F78-156990******',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1rqvm70uh2****',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'SlowLogRecord' => [
                                        'description' => '慢日志明细列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '参数列表。'."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'HostAddress' => [
                                                    'description' => '连接数据库的客户端地址。',
                                                    'type' => 'string',
                                                    'example' => '172.16.**.**',
                                                ],
                                                'ScanTime' => [
                                                    'description' => '扫描数据总耗时，是多个TableScanNode在多个节点上的累加值，单位：毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'SQLText' => [
                                                    'description' => 'SQL语句详情。',
                                                    'type' => 'string',
                                                    'example' => 'INSERT OVERWRITE INTO hdfs_import_external\\nSELECT *\\nFROM adb_hdfs_import_source',
                                                ],
                                                'OutputSize' => [
                                                    'description' => '任务的输出数据量。单位：Byte。',
                                                    'type' => 'string',
                                                    'example' => '0.009',
                                                ],
                                                'PeakMemoryUsage' => [
                                                    'description' => '执行目标SQL语句时的峰值内存，单位：KB。',
                                                    'type' => 'string',
                                                    'example' => '431.447',
                                                ],
                                                'State' => [
                                                    'description' => 'SQL语句的执行状态。',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESSED',
                                                ],
                                                'WallTime' => [
                                                    'description' => '查询中的所有算子在各个节点CPU Time的累加值，单位：毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '6100',
                                                ],
                                                'ScanSize' => [
                                                    'description' => '扫描的数据量，单位：KB。',
                                                    'type' => 'string',
                                                    'example' => '0.035',
                                                ],
                                                'ExecutionStartTime' => [
                                                    'description' => '执行开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-05-27T08:04:43Z',
                                                ],
                                                'QueryTime' => [
                                                    'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2344',
                                                ],
                                                'ReturnRowCounts' => [
                                                    'description' => '返回行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'ScanRows' => [
                                                    'description' => '带数据源的任务的扫描数据行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3',
                                                ],
                                                'ParseRowCounts' => [
                                                    'description' => '解析行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'DBName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'adb_demo',
                                                ],
                                                'PlanningTime' => [
                                                    'description' => '执行计划生成耗时，单位：毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12',
                                                ],
                                                'QueueTime' => [
                                                    'description' => '查询执行前的排队时间，单位：毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'UserName' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'ProcessID' => [
                                                    'description' => '进程ID。',
                                                    'type' => 'string',
                                                    'example' => '2021052716044317201616624903453******',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"100\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"D7559209-7EC3-41E1-8F78-156990******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-bp1rqvm70uh2****\\",\\n  \\"Items\\": {\\n    \\"SlowLogRecord\\": [\\n      {\\n        \\"HostAddress\\": \\"172.16.**.**\\",\\n        \\"ScanTime\\": 10,\\n        \\"SQLText\\": \\"INSERT OVERWRITE INTO hdfs_import_external\\\\\\\\nSELECT *\\\\\\\\nFROM adb_hdfs_import_source\\",\\n        \\"OutputSize\\": \\"0.009\\",\\n        \\"PeakMemoryUsage\\": \\"431.447\\",\\n        \\"State\\": \\"SUCCESSED\\",\\n        \\"WallTime\\": 6100,\\n        \\"ScanSize\\": \\"0.035\\",\\n        \\"ExecutionStartTime\\": \\"2021-05-27T08:04:43Z\\",\\n        \\"QueryTime\\": 2344,\\n        \\"ReturnRowCounts\\": 1,\\n        \\"ScanRows\\": 3,\\n        \\"ParseRowCounts\\": 0,\\n        \\"DBName\\": \\"adb_demo\\",\\n        \\"PlanningTime\\": 12,\\n        \\"QueueTime\\": 0,\\n        \\"UserName\\": \\"test\\",\\n        \\"ProcessID\\": \\"2021052716044317201616624903453******\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSlowLogRecordsResponse>\\n    <TotalCount>100</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>D7559209-7EC3-41E1-8F78-156990******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-bp1rqvm70uh2****</DBClusterId>\\n    <Items>\\n        <HostAddress>172.16.**.**</HostAddress>\\n        <ScanTime>10</ScanTime>\\n        <SQLText>INSERT OVERWRITE INTO hdfs_import_external\\\\nSELECT *\\\\nFROM adb_hdfs_import_source</SQLText>\\n        <OutputSize>0.009</OutputSize>\\n        <PeakMemoryUsage>431.447</PeakMemoryUsage>\\n        <State>SUCCESSED</State>\\n        <WallTime>6100</WallTime>\\n        <ScanSize>0.035</ScanSize>\\n        <ExecutionStartTime>2021-05-27T08:04:43Z</ExecutionStartTime>\\n        <QueryTime>2344</QueryTime>\\n        <ReturnRowCounts>1</ReturnRowCounts>\\n        <ScanRows>3</ScanRows>\\n        <ParseRowCounts>0</ParseRowCounts>\\n        <DBName>adb_demo</DBName>\\n        <PlanningTime>12</PlanningTime>\\n        <QueueTime>0</QueueTime>\\n        <UserName>test</UserName>\\n        <ProcessID>2021052716044317201616624903453******</ProcessID>\\n    </Items>\\n</DescribeSlowLogRecordsResponse>","errorExample":""}]',
            'title' => '查询慢日志明细',
            'summary' => '调用DescribeSlowLogRecords接口查看AnalyticDB MySQL版集群的慢日志明细。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAuditLogConfig' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10786',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-t4nj8619bz2w3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详细信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
                            ],
                            'AuditLogStatus' => [
                                'description' => 'SQL审计的开启状态。取值说明：'."\n"
                                    .'- **on**：开启SQL审计。'."\n"
                                    .'- **off**：关闭SQL审计。',
                                'type' => 'string',
                                'example' => 'on',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-t4nj8619bz2w3****',
                            ],
                            'AccessDeniedDetail' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\",\\n  \\"AuditLogStatus\\": \\"on\\",\\n  \\"DBClusterId\\": \\"am-t4nj8619bz2w3****\\",\\n  \\"AccessDeniedDetail\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogConfigResponse>\\n    <RequestId>F0983B43-B2EC-536A-8791-142B5CF1E9B6</RequestId>\\n    <AuditLogStatus>on</AuditLogStatus>\\n    <DBClusterId>am-t4nj8619bz2w3****</DBClusterId>\\n</DescribeAuditLogConfigResponse>","errorExample":""}]',
            'title' => '查询集群审计日志设置',
            'summary' => '查询集群审计日志设置。',
        ],
        'DescribeAuditLogRecords' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Perth',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-t4nj8619bz2w3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，UTC时间，格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                            .'> 仅当SQL审计状态为开启时，才能查询到SQL审计日志，且只支持查询30天内的SQL审计日志。如果中途关闭了SQL审计，再次打开时，仅能查询到再次打开后的SQL审计日志。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-01-23T02:18Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，UTC时间，格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                            ."\n"
                            .'> - 查询结束时间需晚于查询开始时间。'."\n"
                            .'> - 查询开始时间与查询结束时间的间隔不能超过24小时。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-01-23T22:18Z',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行SQL的数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'QueryKeyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对查询包含目标关键字的SQL进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb',
                    ],
                ],
                [
                    'name' => 'SqlType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL类型，取值：'."\n"
                            .'- **DELETE**'."\n"
                            .'- **SELECT**'."\n"
                            .'- **UPDATE**'."\n"
                            .'- **INSERT_INTO_SELECT**'."\n"
                            .'- **ALTER**'."\n"
                            .'- **DROP**'."\n"
                            .'- **CREATE**'."\n"
                            ."\n\n"
                            .'> 每次仅允许传入一种类型查询，若该参数为空，默认查询**SELECT**类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT',
                    ],
                ],
                [
                    'name' => 'Succeed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL是否执行成功，取值说明：'."\n"
                            .'* **true**：执行成功。'."\n"
                            .'* **false**：执行失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'HostAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行目标SQL的客户端IP地址和端口号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.104.XX.XX:43908',
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按SQL执行时间进行正序或倒序排序，取值说明：'."\n"
                            .'* **asc**：正序。'."\n"
                            .'* **desc**：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asc',
                    ],
                ],
                [
                    'name' => 'User',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行目标SQL的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_user',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含Field和Type两个字段。'."\n"
                            .'- Field表示需要排序的字段名，取值说明：'."\n"
                            .'    - HostAddress：连接数据库的客户端地址。'."\n"
                            .'    - Succeed：目标SQL是否执行成功。'."\n"
                            .'    - TotalTime：目标SQL的执行总耗时。'."\n"
                            .'    - DBName：执行目标SQL的数据库名称。'."\n"
                            .'    - SQLType：SQL类型。'."\n"
                            .'    - User：执行目标SQL的用户名。'."\n"
                            .'    - ExecuteTime：目标SQL的执行开始时间。'."\n"
                            .'- Type表示排序类型，取值说明：'."\n"
                            .'    - Desc：降序。'."\n"
                            .'    - Asc：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"ExecuteTime","Type":"Desc"},{"Field":"HostAddress","Type":"Asc"}]',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **10**'."\n"
                            .'- **30**'."\n"
                            .'- **50**'."\n"
                            .'- **100**'."\n"
                            .'> 本参数不填写时，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8A564B7F-8C00-43C0-8EC5-919FBB70573',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-t4nj8619bz2w3****',
                            ],
                            'Items' => [
                                'description' => 'SQL审计日志详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'HostAddress' => [
                                            'description' => '执行目标SQL的客户端IP地址和端口号。',
                                            'type' => 'string',
                                            'example' => '100.104.XX.XX:43908',
                                        ],
                                        'Succeed' => [
                                            'description' => '目标SQL是否执行成功。取值说明：'."\n"
                                                .'- **true**：执行成功。'."\n"
                                                .'- **false**：执行失败。',
                                            'type' => 'string',
                                            'example' => 'true',
                                        ],
                                        'SQLText' => [
                                            'description' => 'SQL语句详情。',
                                            'type' => 'string',
                                            'example' => 'SELECT * FROM tb_courses',
                                        ],
                                        'TotalTime' => [
                                            'description' => '目标SQL的执行时长，单位：毫秒（ms）。',
                                            'type' => 'string',
                                            'example' => '216',
                                        ],
                                        'ConnId' => [
                                            'description' => '此参数无效。',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'DBName' => [
                                            'description' => '执行目标SQL的数据库名称。',
                                            'type' => 'string',
                                            'example' => 'adb_test',
                                        ],
                                        'SQLType' => [
                                            'description' => '目标SQL的类型。',
                                            'type' => 'string',
                                            'example' => 'SELECT',
                                        ],
                                        'ExecuteTime' => [
                                            'description' => '目标SQL的执行开始时间，本地时间，格式为：yyyy-MM-dd HH:mm:ss。',
                                            'type' => 'string',
                                            'example' => '2022-01-23 16:05:08',
                                        ],
                                        'ProcessID' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '202106081752021720161662490345362390',
                                        ],
                                        'User' => [
                                            'description' => '执行目标SQL的用户名。',
                                            'type' => 'string',
                                            'example' => 'test_user',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"RequestId\\": \\"8A564B7F-8C00-43C0-8EC5-919FBB70573\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-t4nj8619bz2w3****\\",\\n  \\"Items\\": [\\n    {\\n      \\"HostAddress\\": \\"100.104.XX.XX:43908\\",\\n      \\"Succeed\\": \\"true\\",\\n      \\"SQLText\\": \\"SELECT * FROM tb_courses\\",\\n      \\"TotalTime\\": \\"216\\",\\n      \\"ConnId\\": \\"无\\",\\n      \\"DBName\\": \\"adb_test\\",\\n      \\"SQLType\\": \\"SELECT\\",\\n      \\"ExecuteTime\\": \\"2022-01-23 16:05:08\\",\\n      \\"ProcessID\\": \\"202106081752021720161662490345362390\\",\\n      \\"User\\": \\"test_user\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAuditLogRecordsResponse>\\n    <TotalCount>1</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>8A564B7F-8C00-43C0-8EC5-919FBB70573</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-t4nj8619bz2w3****</DBClusterId>\\n    <Items>\\n        <HostAddress>100.104.XX.XX:43908</HostAddress>\\n        <Succeed>true</Succeed>\\n        <SQLText>SELECT * FROM tb_courses</SQLText>\\n        <TotalTime>216</TotalTime>\\n        <ConnId>无</ConnId>\\n        <DBName>adb_test</DBName>\\n        <SQLType>SELECT</SQLType>\\n        <ExecuteTime>2022-01-23 16:05:08</ExecuteTime>\\n        <ProcessID>202106081752021720161662490345362390</ProcessID>\\n        <User>test_user</User>\\n    </Items>\\n</DescribeAuditLogRecordsResponse>","errorExample":""}]',
            'title' => '查询集群的SQL审计日志',
            'summary' => '调用DescribeAuditLogRecords接口查询AnalyticDB MySQL版集群的SQL审计日志。',
            'description' => '调用本接口查看AnalyticDB MySQL集群的SQL审计日志前，需要开启SQL审计。您可以调用[DescribeAuditLogConfig](~~190628~~)接口查询SQL审计的开启状态，如未开启，可调用[ModifyAuditLogConfig](~~190629~~)接口开启SQL审计。'."\n"
                ."\n"
                .'仅当SQL审计状态为开启时，才能查询到SQL审计日志，且只支持查询30天内的SQL审计日志。如果中途关闭了SQL审计，再次打开时，仅能查询到再次打开后的SQL审计日志。SQL审计日志不记录**INSERT INTO VALUES**、**REPLACE INTO VALUES**和**UPSERT INTO VALUES**操作。',
        ],
        'DescribeRegions' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域名称和可用区名称（即返回数据中`LocalName`）返回值所使用的语言，取值说明：'."\n"
                            .'* **zh-CN**：中文。'."\n"
                            .'* **en-US**：英文。'."\n"
                            .'* **ja**：日文。'."\n"
                            ."\n"
                            .'> 若该参数不填写，默认使用中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en-US',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '421794A3-72A5-5D27-9E8B-A75A4C503E17',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => '地域对应的接入地址。',
                                                    'type' => 'string',
                                                    'example' => 'adb.aliyuncs.com',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => 'China (Hangzhou)',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'Zones' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Zone' => [
                                                            'description' => '可用区列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '详情。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ZoneId' => [
                                                                        'description' => '可用区ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-hangzhou-h',
                                                                    ],
                                                                    'VpcEnabled' => [
                                                                        'description' => '目标可用区是否支持VPC，取值说明：'."\n"
                                                                            .'* **true**：支持。'."\n"
                                                                            .'* **false**：不支持。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'LocalName' => [
                                                                        'description' => '可用区名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'Hangzhou Zone H',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"421794A3-72A5-5D27-9E8B-A75A4C503E17\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"adb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"China (Hangzhou)\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n              \\"VpcEnabled\\": true,\\n              \\"LocalName\\": \\"Hangzhou Zone H\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>421794A3-72A5-5D27-9E8B-A75A4C503E17</RequestId>\\n    <Regions>\\n        <RegionEndpoint>adb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>China (Hangzhou)</LocalName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-h</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n            <LocalName>Hangzhou Zone H</LocalName>\\n        </Zones>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询用户可选的地域和可用区',
            'summary' => '调用DescribeRegions接口查询ADB可选的地域和可用区。',
        ],
        'ModifyClusterConnectionString' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp18934i73vb****',
                    ],
                ],
                [
                    'name' => 'ConnectionStringPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定义公网连接地址的前缀。'."\n"
                            .'- 以小写字母开头，可包含小写字母、数字和中划线（-）。'."\n"
                            .'- 长度不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-123',
                    ],
                ],
                [
                    'name' => 'CurrentConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前AnalyticDB MySQL数仓版（3.0）集群的公网连接地址。'."\n"
                            .'> 您可以调用[DescribeDBClusterNetInfo](~~143384~~)接口查看集群的公网连接地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp18934i73vb****.ads.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口号，固定为**3306**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '3306',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '370D09FD-442A-5225-AAD3-7362CAE39177',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"370D09FD-442A-5225-AAD3-7362CAE39177\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyClusterConnectionStringResponse>\\n    <RequestId>370D09FD-442A-5225-AAD3-7362CAE39177</RequestId>\\n</ModifyClusterConnectionStringResponse>","errorExample":""}]',
            'title' => '修改集群的网络连接地址',
            'summary' => '调用ModifyClusterConnectionString接口修改实例的网络连接地址。',
        ],
        'DescribeDBClusterNetInfo' => [
            'summary' => '调用DescribeDBClusterNetInfo接口查询集群的网络信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10799',
                'abilityTreeNodes' => [
                    'FEATUREads4DZDZG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群所在的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ClusterNetworkType' => [
                                'description' => '集群网络类型。',
                                'type' => 'string',
                                'example' => 'VPC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Address' => [
                                        'description' => '集群列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。'."\n"
                                                        .'> 当NetType取值为Public时，交换机ID返回为空。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-xxxxxx',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '集群连接地址。',
                                                    'type' => 'string',
                                                    'example' => 'am-bpxxxxxxxx.ads.aliyuncs.com',
                                                ],
                                                'NetType' => [
                                                    'description' => '网络类型。取值说明：'."\n"
                                                        ."\n"
                                                        .'- **Public**：公网；'."\n"
                                                        .'- **VPC**：VPC。',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'Port' => [
                                                    'description' => '集群连接端口。',
                                                    'type' => 'string',
                                                    'example' => '3306',
                                                ],
                                                'VPCId' => [
                                                    'description' => 'VPC ID。'."\n"
                                                        .'> 当NetType取值为Public时，VPC ID返回为空。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-xxxxxxxxx',
                                                ],
                                                'IPAddress' => [
                                                    'description' => 'IP地址。',
                                                    'type' => 'string',
                                                    'example' => '192.168.x.x',
                                                ],
                                                'ConnectionStringPrefix' => [
                                                    'description' => '集群连接地址前缀。',
                                                    'type' => 'string',
                                                    'example' => 'am-bpxxxxxxxx89k51380',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterNetworkType\\": \\"VPC\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"Address\\": [\\n      {\\n        \\"VSwitchId\\": \\"vsw-xxxxxx\\",\\n        \\"ConnectionString\\": \\"am-bpxxxxxxxx.ads.aliyuncs.com\\",\\n        \\"NetType\\": \\"VPC\\",\\n        \\"Port\\": \\"3306\\",\\n        \\"VPCId\\": \\"vpc-xxxxxxxxx\\",\\n        \\"IPAddress\\": \\"192.168.x.x\\",\\n        \\"ConnectionStringPrefix\\": \\"am-bpxxxxxxxx89k51380\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterNetInfoResponse>\\n    <ClusterNetworkType>VPC</ClusterNetworkType>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <Items>\\n        <VSwitchId>vsw-xxxxxx</VSwitchId>\\n        <ConnectionString>am-bpxxxxxxxx.ads.aliyuncs.com</ConnectionString>\\n        <NetType>VPC</NetType>\\n        <Port>3306</Port>\\n        <VPCId>vpc-xxxxxxxxx</VPCId>\\n        <IPAddress>192.168.x.x</IPAddress>\\n        <ConnectionStringPrefix>am-bpxxxxxxxx89k51380</ConnectionStringPrefix>\\n    </Items>\\n</DescribeDBClusterNetInfoResponse>","errorExample":""}]',
            'title' => '查询集群的网络信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AllocateClusterPublicConnection' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp278jg9****',
                    ],
                ],
                [
                    'name' => 'ConnectionStringPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网连接地址的前缀。'."\n"
                            .'- 由小写字母开头，必须包含小写字母、数字和中划线（-）组成。'."\n"
                            .'- 长度不超过30个字符。'."\n"
                            .'- 默认使用集群名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'am-bp278jg9****.ads.aliyuncs.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateClusterPublicConnectionResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</AllocateClusterPublicConnectionResponse>","errorExample":""}]',
            'title' => '为集群申请公网连接地址',
            'summary' => '调用AllocateClusterPublicConnection接口为ADB实例申请公网连接地址。',
        ],
        'ReleaseClusterPublicConnection' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
            'title' => '释放集群的公网连接地址',
            'summary' => '调用ReleaseClusterPublicConnection接口释放集群的公网连接地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名称，需符合如下要求：'."\n"
                            .'- 以小写字母开头，以小写字母或数字结尾。'."\n"
                            .'- 由小写字母、数字或下划线（_）组成。'."\n"
                            .'- 长度为2~16个字符。'."\n"
                            .'- 不能使用预留的账号名称，如root、admin和opsadmin。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_accout',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名的密码，需符合如下要求：'."\n"
                            .'- 由大写字母、小写字母、数字、特殊字符中的任意三种组成。'."\n"
                            .'- 特殊符号包含：`!@#$%^&*()_+-=`'."\n"
                            .'- 密码长度为8~32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Test_accout1',
                    ],
                ],
                [
                    'name' => 'AccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号描述。'."\n"
                            .'- 不能以`http://`或者`https://`开头。'."\n"
                            .'- 长度不超过256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '数据库测试账号',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号类型，取值说明：'."\n"
                            .'- **Normal**：普通账号。一个集群最多可以创建256个普通账号。'."\n"
                            .'- **Super**（默认值）：高权限账号。一个集群只能创建一个高权限账号。'."\n"
                            .'> - 当集群无账号，调用接口创建账号时，既可以创建高权限账号，也可以创建普通账号。如果集群已有高权限账号，调用接口创建账号时，必须选择Normal才能创建成功。'."\n"
                            .'> - 账号创建完成后，高权限账号拥有该集群中所有数据库的权限。普通账号默认没有权限，需要通过高权限账号手动为普通账号授予指定数据库的权限。详情请参见[为用户授权](~~123662~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1564657730',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp1r053byu48p****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\",\\n  \\"DBClusterId\\": \\"am-bp1r053byu48p****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <TaskId>1564657730</TaskId>\\n    <RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>\\n    <DBClusterId>am-bp1r053byu48p****</DBClusterId>\\n</CreateAccountResponse>","errorExample":""}]',
            'title' => '创建账户',
            'summary' => '调用CreateAccount接口创建账号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAccount' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rm-uf6wjk5xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_accout',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- Normal：普通账号。'."\n"
                            .'- Super：高权限账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2FED790E-FB61-4721-8C1C-07C627FA5A19</RequestId>","errorExample":""}]',
            'title' => '删除数据库账号',
            'summary' => '调用DeleteAccount接口删除数据库账号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAccountDescription' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testacc',
                    ],
                ],
                [
                    'name' => 'AccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改账号备注：'."\n"
                            ."\n"
                            .'- 以中文、英文字母开头。'."\n"
                            .'- 可以包含中文、英文字符、数字、”_”、” -”。'."\n"
                            .'- 不能以`http://`、`https:// `开头。'."\n"
                            .'- 长度为2-256个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'AccDesc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
            'title' => '修改数据库账号的备注信息',
            'summary' => '调用ModifyAccountDescription接口修改数据库账号的备注信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAllAccounts' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'AccountList' => [
                                'description' => '账号列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'User' => [
                                            'description' => '账号名。',
                                            'type' => 'string',
                                            'example' => 'rdsdt_dts_adb',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"AccountList\\": [\\n    {\\n      \\"User\\": \\"rdsdt_dts_adb\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<AccountList>\\n    <User>rdsdt_dts_adb</User>\\n</AccountList>","errorExample":""}]',
            'title' => '查询账号信息',
            'summary' => '查询指定集群、指定数据库的账号列表信息或某个指定账号的信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAccounts' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'amv-bp11q28kvl688****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。'."\n"
                            .'> 此参数不填写时，默认返回所有数据库账号信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_accout',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号类型，不填写时默认查询所有类型的账号信息。取值说明：'."\n"
                            .'- **Normal**：普通账号。'."\n"
                            .'- **Super**：高权限账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Super',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9CCFAAB4-97B7-5800-B9F2-685EB596E3EF',
                            ],
                            'AccountList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DBAccount' => [
                                        'description' => '账号列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountStatus' => [
                                                    'description' => '账号状态。取值说明：'."\n"
                                                        .'- **Creating**：创建中。'."\n"
                                                        .'- **Available**：可用。'."\n"
                                                        .'- **Deleting**：删除中。',
                                                    'type' => 'string',
                                                    'example' => 'Available',
                                                ],
                                                'AccountDescription' => [
                                                    'description' => '账号描述。',
                                                    'type' => 'string',
                                                    'example' => 'C@test',
                                                ],
                                                'AccountType' => [
                                                    'description' => '账号类型，取值说明：'."\n"
                                                        .'- **Normal**：普通账号。'."\n"
                                                        .'- **Super**：高权限账号。',
                                                    'type' => 'string',
                                                    'example' => 'Super',
                                                ],
                                                'AccountName' => [
                                                    'description' => '数据库账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'adb_user1',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9CCFAAB4-97B7-5800-B9F2-685EB596E3EF\\",\\n  \\"AccountList\\": {\\n    \\"DBAccount\\": [\\n      {\\n        \\"AccountStatus\\": \\"Available\\",\\n        \\"AccountDescription\\": \\"C@test\\",\\n        \\"AccountType\\": \\"Super\\",\\n        \\"AccountName\\": \\"adb_user1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询数据库账号信息',
            'summary' => '调用DescribeAccounts接口查询集群的账号信息。',
        ],
        'DescribeOperatorPermission' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6wjk5xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreatedTime' => [
                                'description' => '授权生效时间。',
                                'type' => 'string',
                                'example' => '2019-05-20T05:41:19Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Privileges' => [
                                'description' => '已获得的授权类型：Control|Data。',
                                'type' => 'string',
                                'example' => 'Control,Data',
                            ],
                            'ExpiredTime' => [
                                'description' => '授权过期时间。',
                                'type' => 'string',
                                'example' => '2019-05-20T07:41:19Z',
                            ],
                            'DBClusterId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'am-uf6wjk5xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CreatedTime\\": \\"2019-05-20T05:41:19Z\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Privileges\\": \\"Control,Data\\",\\n  \\"ExpiredTime\\": \\"2019-05-20T07:41:19Z\\",\\n  \\"DBClusterId\\": \\"am-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatedTime>2019-05-20T05:41:19Z</CreatedTime>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Privileges>Control,Data</Privileges>\\n<ExpiredTime>2019-05-20T07:41:19Z</ExpiredTime>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
            'title' => '查询集群服务账号的授权详情',
            'summary' => '调用DescribeOperatorPermission接口查询集群服务账号的授权详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GrantOperatorPermission' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1565u55p32****',
                    ],
                ],
                [
                    'name' => 'ExpiredTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务账号权限过期时间。UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2022-11-30T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'Privileges',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限名称。取值说明：'."\n"
                            .'- **Control**：配置权限，查看和修改集群配置。'."\n"
                            .'- **Data**：数据权限，查看表结构、索引和SQL。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Control',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A438072A-E2E7-5509-9A3F-66293512A820',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RelatedTaskNotFinish',
                        'errorMessage' => 'The related task does not finish.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A438072A-E2E7-5509-9A3F-66293512A820\\"\\n}","errorExample":""},{"type":"xml","example":"<GrantOperatorPermissionResponse>\\n    <RequestId>A438072A-E2E7-5509-9A3F-66293512A820</RequestId>\\n</GrantOperatorPermissionResponse>","errorExample":""}]',
            'title' => '为集群服务账号授权',
            'summary' => '调用GrantOperatorPermission接口为集群服务账号授权。',
            'description' => '### 使用说明'."\n"
                .'您在使用云原生数据仓库AnalyticDB MySQL版集群过程中需要阿里云技术支持时，如果技术支持过程中需要对您的集群进行操作，您需要授权AnalyticDB MySQL集群的服务账号，技术支持人员才可以通过服务账号提供技术支持服务。在授权有效期结束后，服务账号的权限会被自动回收。',
        ],
        'ResetAccountPassword' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rm-uf6wjk5xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_accout',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名密码。'."\n"
                            ."\n"
                            .'- 密码由大写字母、小写字母、数字以及特殊符号组成。'."\n"
                            .'- 特殊符号包含：（!）、（@）、（#）、（$）、（%）、（^）、（&）、（*）（()）、（_）、（+）、（-）、（=）'."\n"
                            .'- 密码长度为8字符~32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Test_accout1',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1. Normal：普通账号；'."\n"
                            .'2. Super：高权限账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Normal',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1564657730',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'DBClusterId' => [
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'rm-uf6wjk5xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>1564657730</TaskId>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
            'title' => '重置账号密码',
            'summary' => '调用ResetAccountPassword接口重置数据库账号的密码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RevokeOperatorPermission' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6wjk5xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RelatedTaskNotFinish',
                        'errorMessage' => 'The related task does not finish.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>","errorExample":""}]',
            'title' => '撤销集群服务账号权限',
            'summary' => '调用RevokeOperatorPermission接口撤销集群服务账号权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型定义。唯一取值：**cluster**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cluster',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来返回更多结果。第一次查询不需要提供这个参数，如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的Token继续查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '212db86sca4384811e0b5e8707ec21345',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '集群ID。支持同时传入多个集群ID，N的取值范围为：1~50。'."\n"
                            .'> ResourceId.N参数和Tag.N.Key参数至少传入一个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '集群ID。支持同时传入多个集群ID，N的取值范围为：1~50。'."\n"
                                .'> ResourceId.N参数和Tag.N.Key参数至少传入一个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'am-bp1l20nxxxxxxxxxx',
                        ],
                        'required' => false,
                        'example' => 'am-bp1l20nxxxxxxxxxx',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。支持同时传入多个标签键，不允许传入空字符串。N的取值范围为：1~20。'."\n"
                                        ."\n"
                                        .'> ResourceId.N参数和Tag.N.Key参数至少传入一个。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testkey1',
                                ],
                                'Value' => [
                                    'description' => '标签键对应的标签值。支持同时传入多个标签值，允许传入空字符串。N的取值范围为：1~20。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testvalue1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '用来返回更多结果。如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的token继续查询。',
                                'type' => 'string',
                                'example' => '212db86sca4384811e0b5e8707ec21345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '184DE106-CB2C-4DD2-B57F-396652E6C8F8',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '查询到的集群和标签的信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'description' => '资源类型，cluster即云原生数据仓库AnalyticDB MySQL集群。',
                                                    'type' => 'string',
                                                    'example' => 'cluster',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签键对应的标签值。',
                                                    'type' => 'string',
                                                    'example' => 'testvalue1',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp1l20nxxxxxxxxxx',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'testkey1',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"212db86sca4384811e0b5e8707ec21345\\",\\n  \\"RequestId\\": \\"184DE106-CB2C-4DD2-B57F-396652E6C8F8\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"cluster\\",\\n        \\"TagValue\\": \\"testvalue1\\",\\n        \\"ResourceId\\": \\"am-bp1l20nxxxxxxxxxx\\",\\n        \\"TagKey\\": \\"testkey1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>212db86sca4384811e0b5e8707ec21345</NextToken>\\n    <RequestId>184DE106-CB2C-4DD2-B57F-396652E6C8F8</RequestId>\\n    <TagResources>\\n        <ResourceType>cluster</ResourceType>\\n        <TagValue>testvalue1</TagValue>\\n        <ResourceId>am-bp1l20nxxxxxxxxxx</ResourceId>\\n        <TagKey>testkey1</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询标签列表',
            'summary' => '调用ListTagResources查询一个或多个AnalyticDB MySQL集群已绑定的标签列表，或者查询一个或多个标签绑定的AnalyticDB MySQL集群列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群类型，取值：**ALIYUN::ADB::CLUSTER**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALIYUN::ADB::CLUSTER',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '绑定标签的集群ID。若需要为多个集群同时添加标签，请单击**添加**并输入集群ID。'."\n"
                            ."\n"
                            .'> - 一次最多为50个集群同时绑定标签。'."\n"
                            .'> - 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '绑定标签的集群ID。若需要为多个集群同时添加标签，请单击**添加**并输入集群ID。'."\n"
                                ."\n"
                                .'> - 一次最多为50个集群同时绑定标签。'."\n"
                                .'> - 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'am-bp1gfds6a32s9****',
                        ],
                        'required' => true,
                        'example' => 'am-bp1xxx.1',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。若您需要为目标集群一次性添加多个标签，请单击**添加**并输入标签键和对应的标签值。'."\n"
                                        .'> 每次最多添加20对标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testkey1',
                                ],
                                'Value' => [
                                    'description' => '标签键对应的标签值。若您需要为目标集群一次性添加多个标签，请单击**添加**并输入标签键和对应的标签值。'."\n"
                                        .'> 每次最多添加20对标签。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testvalue1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '863D51B7-5321-41D8-A0B6-A088B0450EFD',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"863D51B7-5321-41D8-A0B6-A088B0450EFD\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>863D51B7-5321-41D8-A0B6-A088B0450EFD</RequestId>","errorExample":""}]',
            'title' => '为集群绑定标签',
            'summary' => '为AnalyticDB MySQL集群绑定标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，取值固定为**ALIYUN::ADB::CLUSTER**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALIYUN::ADB::CLUSTER',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解绑实例上的所有标签，默认值为false，取值：'."\n"
                            ."\n"
                            .'- **true**：解绑实例上的所有标签。'."\n"
                            .'- **false**：不解绑实例上的所有标签。'."\n"
                            ."\n"
                            .'> 如果同时传入TagKey和本参数，本参数不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '集群ID，N的取值范围：1~50。',
                        'type' => 'array',
                        'items' => [
                            'description' => '集群ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'am-t4n6k19t9p9f3d0j0',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源的标签键，N的取值范围：1~20。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'productvalue',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D69A58F-345C-4FDE-88E4-BF5189484043',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189484043\\"\\n}","type":"json"}]',
            'title' => '为指定的实例列表统一解绑标签',
            'summary' => '解绑后，如果该标签没有绑定其他任何实例。',
        ],
        'ModifyBackupPolicy' => [
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
                [
                    'name' => 'PreferredBackupTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行全量备份的开始时间，格式为HH:mmZ-HH:mmZ（UTC时间）。'."\n"
                            ."\n"
                            .'> 时间范围限制为1小时。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '00:00Z-01:00Z',
                    ],
                ],
                [
                    'name' => 'PreferredBackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份周期，多个取值用英文逗号（,）隔开。取值说明：'."\n"
                            .'- **Monday**：周一。'."\n"
                            .'- **Tuesday**：周二。'."\n"
                            .'- **Wednesday**：周三。'."\n"
                            .'- **Thursday**：周四。'."\n"
                            .'- **Friday**：周五。'."\n"
                            .'- **Saturday**：周六。'."\n"
                            .'- **Sunday**：周日。'."\n"
                            ."\n"
                            .'> 为保证数据安全，最少选择两个。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Monday,Wednesday,Friday,Sunday',
                    ],
                ],
                [
                    'name' => 'BackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全量备份保留天数，取值范围为：7~730。'."\n"
                            .'> 本参数不填写，默认为7天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                        'default' => '7',
                    ],
                ],
                [
                    'name' => 'EnableBackupLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志（实时）备份。取值说明：'."\n"
                            .'- **Enable**：开启。'."\n"
                            .'- **Disable**：关闭。'."\n"
                            .'> 本参数不填写，默认开启。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enable',
                    ],
                ],
                [
                    'name' => 'LogBackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志（实时）数据备份保留天数，取值范围为：7~730。'."\n"
                            .'> 本参数不填写，默认为7天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '730',
                        'minimum' => '7',
                        'example' => '30',
                        'default' => '7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyBackupPolicyResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyBackupPolicyResponse>","errorExample":""}]',
            'title' => '修改备份策略设置',
            'summary' => '调用ModifyBackupPolicy接口修改AnalyticDB MySQL版实例的备份策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyLogBackupPolicy' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfm4f7oger****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'EnableBackupLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志备份。取值说明：'."\n"
                            .'- **Enable**：开启。'."\n"
                            .'- **Disable**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Enable',
                    ],
                ],
                [
                    'name' => 'LogBackupRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据备份保留天数，取值范围：7~730。'."\n"
                            .'> 此参数不填写，默认为7天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                        'default' => '7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyLogBackupPolicyResponse>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n</ModifyLogBackupPolicyResponse>","errorExample":""}]',
            'title' => '修改日志备份策略设置',
            'summary' => '调用ModifyLogBackupPolicy接口修改日志备份设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackupPolicy' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PreferredBackupPeriod' => [
                                'description' => '数据备份周期，多个取值用英文逗号（,）隔开。取值：'."\n"
                                    ."\n"
                                    .'- Monday：周一；'."\n"
                                    .'- Tuesday：周二；'."\n"
                                    .'- Wednesday：周三；'."\n"
                                    .'- Thursday：周四；'."\n"
                                    .'- Friday：周五；'."\n"
                                    .'- Saturday：周六；'."\n"
                                    .'- Sunday：周日。',
                                'type' => 'string',
                                'example' => 'Tuesday,Friday',
                            ],
                            'LogBackupRetentionPeriod' => [
                                'description' => '日志备份保留天数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '7',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PreferredBackupTime' => [
                                'description' => '数据备份时间，格式：HH:mmZ-HH:mmZ。',
                                'type' => 'string',
                                'example' => '15:00Z-16:00Z',
                            ],
                            'EnableBackupLog' => [
                                'description' => '是否开启。'."\n"
                                    ."\n"
                                    .'- true：开启。'."\n"
                                    .'- false：关闭。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'BackupRetentionPeriod' => [
                                'description' => '数据备份保留天数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PreferredBackupPeriod\\": \\"Tuesday,Friday\\",\\n  \\"LogBackupRetentionPeriod\\": 7,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PreferredBackupTime\\": \\"15:00Z-16:00Z\\",\\n  \\"EnableBackupLog\\": \\"true\\",\\n  \\"BackupRetentionPeriod\\": 7\\n}","errorExample":""},{"type":"xml","example":"<PreferredBackupPeriod>Tuesday,Friday</PreferredBackupPeriod>\\n<LogBackupRetentionPeriod>7</LogBackupRetentionPeriod>\\n<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<PreferredBackupTime>15:00Z-16:00Z</PreferredBackupTime>\\n<EnableBackupLog>true</EnableBackupLog>\\n<BackupRetentionPeriod>7</BackupRetentionPeriod>","errorExample":""}]',
            'title' => '查询集群自动备份策略',
            'summary' => '调用DescribeBackupPolicy接口查看集群备份设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeBackups' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10791',
                'abilityTreeNodes' => [
                    'FEATUREadsM6VDCK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域下AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp18934i73vb5****',
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32732****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，格式：yyyy-MM-ddTHH:mmZ。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-06-01T16:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，需要大于查询开始时间，格式：yyyy-MM-ddTHH:mmZ。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2022-06-02T16:00Z',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值：大于0且不超过Integer数据类型最大值的正整数。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CrossUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CrossRole',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '备份集列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '300',
                            ],
                            'PageSize' => [
                                'description' => '本页备份集个数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'Backup' => [
                                        'description' => '备份集列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '备份集详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DBClusterId' => [
                                                    'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'am-bp18934i73vb5****',
                                                ],
                                                'BackupType' => [
                                                    'description' => '备份类型。取值说明：'."\n"
                                                        .'- **FullBackup**：全量备份。'."\n"
                                                        .'- **IncrementalBackup**：增量备份。',
                                                    'type' => 'string',
                                                    'example' => 'FullBackup',
                                                ],
                                                'BackupStartTime' => [
                                                    'description' => '备份开始时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-06-01T16:00Z',
                                                ],
                                                'BackupSize' => [
                                                    'description' => '备份文件大小，单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2167808',
                                                ],
                                                'BackupEndTime' => [
                                                    'description' => '备份结束时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-06-02T16:00Z',
                                                ],
                                                'BackupId' => [
                                                    'description' => '备份集ID。',
                                                    'type' => 'string',
                                                    'example' => '32732****',
                                                ],
                                                'BackupMethod' => [
                                                    'description' => '备份方法。只支持快照备份（Snapshot）。',
                                                    'type' => 'string',
                                                    'example' => 'Snapshot',
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
                        'errorCode' => 'CrossUser.CheckFailed',
                        'errorMessage' => 'The input UID and role is not authorized.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"300\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Backup\\": [\\n      {\\n        \\"DBClusterId\\": \\"am-bp18934i73vb5****\\",\\n        \\"BackupType\\": \\"FullBackup\\",\\n        \\"BackupStartTime\\": \\"2022-06-01T16:00Z\\",\\n        \\"BackupSize\\": 2167808,\\n        \\"BackupEndTime\\": \\"2022-06-02T16:00Z\\",\\n        \\"BackupId\\": \\"32732****\\",\\n        \\"BackupMethod\\": \\"Snapshot\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupsResponse>\\n    <TotalCount>300</TotalCount>\\n    <PageSize>30</PageSize>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <DBClusterId>am-bp18934i73vb5****</DBClusterId>\\n        <BackupType>FullBackup</BackupType>\\n        <BackupStartTime>2022-06-01T16:00Z</BackupStartTime>\\n        <BackupSize>2167808</BackupSize>\\n        <BackupEndTime>2022-06-02T16:00Z</BackupEndTime>\\n        <BackupId>32732****</BackupId>\\n        <BackupMethod>Snapshot</BackupMethod>\\n    </Items>\\n</DescribeBackupsResponse>","errorExample":""}]',
            'title' => '查询备份集列表',
            'summary' => '调用DescribeBackups接口查看集群的备份列表。',
        ],
        'ModifyDBClusterAccessWhiteList' => [
            'summary' => '创建或修改集群的白名单（包括IP白名单和安全组）。',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rm-uf6wjk5xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'SecurityIps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群的IP白名单，多个IP地址之间以英文逗号（,）隔开，不可重复，最多500个。支持如下两种格式：'."\n"
                            ."\n"
                            .'- IP地址形式，例如：10.23.12.24。'."\n"
                            .'- CIDR形式，例如：10.23.12.24/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。'."\n"
                            ."\n"
                            .'> ModifyMode值为Delete时，此参数值可以是空，其他情况下必须有非空值。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10.23.12.24',
                    ],
                ],
                [
                    'name' => 'DBClusterIPArrayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改的IP白名单分组名称，默认操作**Default**分组。'."\n"
                            .'IP白名单分组名称以小写字母开头、以数字或小写字母结尾，可包含小写字母、数字及’_’，长度为2~32。'."\n"
                            ."\n"
                            .'单个集群最多支持50个白名单分组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DBClusterIPArrayAttribute',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单分组属性，默认为空。'."\n"
                            .'控制台不显示带有**hidden**属性的分组，带有该标签的分组通常是用于访问DTS、DRDS服务的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hidden',
                    ],
                ],
                [
                    'name' => 'ModifyMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改白名单的方式。取值：'."\n"
                            ."\n"
                            .'- Cover：覆盖原IP白名单。'."\n"
                            .'- Append：增加IP。'."\n"
                            .'- Delete：删除IP。'."\n"
                            ."\n"
                            .'默认值：Cover。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Cover',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '任务ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1564657730',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'rm-uf6wjk5xxxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SecurityIPList.Duplicate',
                        'errorMessage' => 'The specified IP address is duplicate.',
                    ],
                    [
                        'errorCode' => 'InvalidSecurityIPList.Malformed',
                        'errorMessage' => 'The specified SecurityIPList is incorrectly formatted.',
                    ],
                    [
                        'errorCode' => 'InvalidSecurityIPList.Duplicate',
                        'errorMessage' => 'Specified security IP list is not valid: Duplicate IP address in the list',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": 1564657730,\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"DBClusterId\\": \\"rm-uf6wjk5xxxxxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<TaskId>1564657730</TaskId>\\n<RequestId>D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC</RequestId>\\n<DBClusterId>rm-uf6wjk5xxxxxxxxxx</DBClusterId>","errorExample":""}]',
            'title' => '创建或修改集群的白名单',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDBClusterAccessWhiteList' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6wjk5xxxxxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'IPArray' => [
                                        'description' => 'IP白名单分组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DBClusterIPArrayAttribute' => [
                                                    'description' => '白名单分组属性，默认为空。'."\n"
                                                        ."\n"
                                                        .'> 控制台不显示带有**hidden**属性的分组，带有该标签的分组通常是用于访问DTS、DRDS服务的。',
                                                    'type' => 'string',
                                                    'example' => 'hidden',
                                                ],
                                                'SecurityIPList' => [
                                                    'description' => 'IP白名单分组下的IP列表，最多1000个，以英文逗号（,）隔开。',
                                                    'type' => 'string',
                                                    'example' => '127.0.0.1',
                                                ],
                                                'DBClusterIPArrayName' => [
                                                    'description' => 'IP白名单分组名称。'."\n"
                                                        .'- IP白名单分组名称以小写字母开头、以数字或小写字母结尾，可包含小写字母、数字及’_’，长度为2~32。'."\n"
                                                        .'- 单个集群最多支持50个白名单分组。',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"Items\\": {\\n    \\"IPArray\\": [\\n      {\\n        \\"DBClusterIPArrayAttribute\\": \\"hidden\\",\\n        \\"SecurityIPList\\": \\"127.0.0.1\\",\\n        \\"DBClusterIPArrayName\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEF</RequestId>\\n<Items>\\n    <IPArray>\\n        <DBClusterIPArrayName>test</DBClusterIPArrayName>\\n        <SecurityIPList>127.0.0.1</SecurityIPList>\\n        <DBClusterIPArrayAttribute>hidden</DBClusterIPArrayAttribute>\\n    </IPArray>\\n</Items>","errorExample":""}]',
            'title' => '查询集群的IP白名单',
            'summary' => '调用DescribeDBClusterAccessWhiteList接口查看集群的IP白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDBClusterHealthStatus' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1d8lbdj22rx****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '集群健康状态列表。',
                        'type' => 'object',
                        'properties' => [
                            'CS' => [
                                'description' => '实例接入节点状态列表。',
                                'type' => 'object',
                                'properties' => [
                                    'ActiveCount' => [
                                        'description' => '健康节点个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'UnavailableCount' => [
                                        'description' => '不可用节点个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'RiskCount' => [
                                        'description' => '风险节点个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ExpectedCount' => [
                                        'description' => '接入节点总个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Status' => [
                                        'description' => '实例接入节点状态，取值说明：'."\n"
                                            .'- **RISK**：风险。'."\n"
                                            .'- **NORMAL**：健康。'."\n"
                                            .'- **UNAVAILABLE**：不可用。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                ],
                            ],
                            'Executor' => [
                                'description' => '计算节点组健康状态列表。',
                                'type' => 'object',
                                'properties' => [
                                    'ActiveCount' => [
                                        'description' => '健康计算节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'UnavailableCount' => [
                                        'description' => '不可用计算节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'RiskCount' => [
                                        'description' => '风险计算节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ExpectedCount' => [
                                        'description' => '计算节点组总个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Status' => [
                                        'description' => '计算节点组健康状态，取值说明：'."\n"
                                            .'- **RISK**：风险。'."\n"
                                            .'- **NORMAL**：健康。'."\n"
                                            .'- **UNAVAILABLE**：不可用。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                ],
                            ],
                            'Worker' => [
                                'description' => '存储节点组健康状态列表。',
                                'type' => 'object',
                                'properties' => [
                                    'ActiveCount' => [
                                        'description' => '健康存储节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'UnavailableCount' => [
                                        'description' => '不可用存储节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'RiskCount' => [
                                        'description' => '风险存储节点组个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ExpectedCount' => [
                                        'description' => '存储节点组总个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Status' => [
                                        'description' => '存储节点组健康状态，取值说明：'."\n"
                                            .'- **RISK**：风险。'."\n"
                                            .'- **NORMAL**：健康。'."\n"
                                            .'- **UNAVAILABLE**：不可用。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                ],
                            ],
                            'InstanceStatus' => [
                                'description' => '集群的健康状态，取值说明：'."\n"
                                    .'- **RISK**：风险。'."\n"
                                    .'- **NORMAL**：健康。'."\n"
                                    .'- **UNAVAILABLE**：不可用。'."\n"
                                    .'>当集群的实例接入节点状态、计算节点组健康状态和存储节点组健康状态，三个健康状态均为**健康**且实例探活成功，则集群的健康状态为**健康**；当三个健康状态中包含**风险**时，则集群的健康状态为**风险**；当三个健康状态中包含**不可用**时，则集群的健康状态为**不可用**。',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CS\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"Executor\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"Worker\\": {\\n    \\"ActiveCount\\": 2,\\n    \\"UnavailableCount\\": 0,\\n    \\"RiskCount\\": 0,\\n    \\"ExpectedCount\\": 2,\\n    \\"Status\\": \\"NORMAL\\"\\n  },\\n  \\"InstanceStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEA\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterHealthStatusResponse>\\n    <CS>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </CS>\\n    <Executor>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </Executor>\\n    <Worker>\\n        <ActiveCount>2</ActiveCount>\\n        <UnavailableCount>0</UnavailableCount>\\n        <RiskCount>0</RiskCount>\\n        <ExpectedCount>2</ExpectedCount>\\n        <Status>NORMAL</Status>\\n    </Worker>\\n    <InstanceStatus>NORMAL</InstanceStatus>\\n    <RequestId>1AD222E9-E606-4A42-BF6D-8A4442913CEA</RequestId>\\n</DescribeDBClusterHealthStatusResponse>","errorExample":""}]',
            'title' => '查询集群健康检查状态',
            'summary' => '调用DescribeDBClusterHealthStatus接口查看AnalyticDB MySQL数仓版（3.0）集群的健康状态。',
        ],
        'DescribeDBClusterPerformance' => [
            'summary' => '调用DescribeDBClusterPerformance接口查看目标集群的性能数据。',
            'methods' => [
                'get',
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL版集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL版集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-8vbf80pjcz*****',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的性能指标名称，多个值之间用英文逗号（,）分隔。支持查询如下性能指标：'."\n"
                            .'* CPU'."\n"
                            .'    * **AnalyticDB_CPU**：CPU平均使用率。'."\n"
                            .'* 连接数'."\n"
                            .'    * **AnalyticDB_Connections**：数据库连接数。'."\n"
                            .'* 写入'."\n"
                            .'    * **AnalyticDB_TPS**：写入TPS。'."\n"
                            .'    * **AnalyticDB_InsertRT**：写入响应时间。'."\n"
                            .'    * **AnalyticDB_InsertBytes**：写入吞吐量。'."\n"
                            .'* 更新'."\n"
                            .'    * **AnalyticDB_UpdateRT**：更新响应时间。'."\n"
                            .'* 删除'."\n"
                            .'    * **AnalyticDB_DeleteRT**：删除响应时间。'."\n"
                            .'* 查询'."\n"
                            .'    * **AnalyticDB_QPS**：查询QPS。'."\n"
                            .'    * **AnalyticDB_QueryRT**：查询响应时间。'."\n"
                            .'    * **AnalyticDB_QueryWaitTime**：查询等待耗时。'."\n"
                            .'* 磁盘'."\n"
                            .'    * **AnalyticDB_IO**：磁盘IO吞吐。'."\n"
                            .'    * **AnalyticDB_IO_UTIL**：磁盘IO使用率。'."\n"
                            .'    * **AnalyticDB_IO_WAIT**：磁盘IO等待时间。    '."\n"
                            .'    * **AnalyticDB_IOPS**：磁盘IOPS。'."\n"
                            .'    * **AnalyticDB_DiskUsage**：磁盘用量。'."\n"
                            .'    * **AnalyticDB_HotDataDiskUsage**：热数据磁盘用量。'."\n"
                            .'    * **AnalyticDB_ColdDataDiskUsage**：冷数据磁盘用量。'."\n"
                            .'* 其他'."\n"
                            .'  * **AnalyticDB_BuildTaskCount**：Build任务数。'."\n"
                            .'  * **AnalyticDB_ComputeMemoryUsedRatio**: 计算内存使用率。'."\n"
                            ."\n\n"
                            .'> 若该参数留空，默认返回上述所有性能指标的值。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'AnalyticDB_CPU',
                        'default' => 'AnalyticDB_CPU_Usage_Percentage',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mmZ</i>（UTC时间）。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2021-05-03T15:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式为<i>yyyy-MM-ddTHH:mmZ</i>（UTC时间）。'."\n"
                            ."\n"
                            .'> 查询结束时间需晚于开始时间，且开始时间和结束时间的时间间隔不能超过两天。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2021-05-03T15:01Z',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群所在的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourcePools',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表详情。',
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '查询结束时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-05-03T15:01:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25B56BC7-4978-40B3-9E48-4B7067******',
                            ],
                            'StartTime' => [
                                'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-05-03T15:00:00Z',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-8vbf80pjcz*****',
                            ],
                            'Performances' => [
                                'description' => '集群性能指标列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '性能指标名称。',
                                            'type' => 'string',
                                            'example' => 'AnalyticDB_CPU',
                                        ],
                                        'Unit' => [
                                            'description' => '数据单位。',
                                            'type' => 'string',
                                            'example' => '%',
                                        ],
                                        'Series' => [
                                            'description' => '性能数据列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Values' => [
                                                        'description' => '性能指标数值详情。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '不同时间点下的性能值详情。',
                                                            'type' => 'string',
                                                            'example' => '[               "2021-05-03T15:00:12.72Z",               "0.1250"             ],             [               "2021-05-03T15:00:42.739Z",               "0.3125"             ]',
                                                        ],
                                                    ],
                                                    'Name' => [
                                                        'description' => '*   CPU'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_CPU**：CPU平均使用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_avg\\_cpu\\_used：存储节点平均CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   worker\\_max\\_cpu\\_used：存储节点最大CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   executor\\_avg\\_cpu\\_used：计算节点平局CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   executor\\_max\\_cpu\\_used：计算节点最大CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'*   连接数'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_Connections**：数据库连接数。'."\n"
                                                            .'        '."\n"
                                                            .'        *   connections：集群当前连接数。'."\n"
                                                            .'            '."\n"
                                                            .'*   写入'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_TPS**：写入TPS。'."\n"
                                                            .'        '."\n"
                                                            .'        *   tps：insert\\_tps、update\\_tps、 delete\\_tps和load\\_tps的累加值。'."\n"
                                                            .'            '."\n"
                                                            .'        *   insert\\_tps：INSERT INTO VALUES操作每秒成功数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   update\\_tps：UPDATE操作每秒成功数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   delete\\_tps：DELETE操作每秒成功数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   load\\_tps：LOAD操作(INSERT OVERWRITE)每秒成功数。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_InsertRT**：写入响应时间。'."\n"
                                                            .'        '."\n"
                                                            .'        *   insert\\_avg\\_rt：写入操作平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   insert\\_max\\_rt：写入操作最大耗时。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_InsertBytes**：写入吞吐量。'."\n"
                                                            .'        '."\n"
                                                            .'        *   insert\\_in\\_bytes：写入数据量。'."\n"
                                                            .'            '."\n"
                                                            .'*   更新'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_UpdateRT**：更新响应时间。'."\n"
                                                            .'        '."\n"
                                                            .'        *   updateinto\\_avg\\_rt：UPDATE操作平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   updateinto\\_max\\_rt：UPDATE操作最大耗时。'."\n"
                                                            .'            '."\n"
                                                            .'*   删除'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_DeleteRT**：删除响应时间。'."\n"
                                                            .'        '."\n"
                                                            .'        *   delete\\_avg\\_rt：delete操作平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   delete\\_max\\_rt：delete操作平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'*   查询'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_QPS**：QPS。'."\n"
                                                            .'        '."\n"
                                                            .'        *   qps：SELECT操作每秒完成数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   etl\\_qps：ETL操作(INSERT OVERWRITE)每秒完成数。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_QueryRT**：查询响应时间。'."\n"
                                                            .'        '."\n"
                                                            .'        *   query\\_avg\\_rt：查询平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   query\\_max\\_rt：查询最大耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   etl\\_avg\\_rt：ETL操作平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   etl\\_max\\_rt：ETL操作最大耗时。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_QueryWaitTime**：查询等待耗时。'."\n"
                                                            .'        '."\n"
                                                            .'        *   query\\_avg\\_wait\\_time：查询(包括SELECT和ETL)平均等待时间。'."\n"
                                                            .'            '."\n"
                                                            .'        *   query\\_max\\_wait\\_time：查询(包括SELECT和ETL)最大等待时间。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_QueryFailedRatio：查询失败率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   query\\_failed\\_ratio：查询(包括SELECT和ETL)失败率。'."\n"
                                                            .'            '."\n"
                                                            .'*   磁盘'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_IO**：磁盘IO吞吐。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_avg\\_read\\_bytes\\_ratio：存储节点平均读操作吞吐。'."\n"
                                                            .'            '."\n"
                                                            .'        *   worker\\_avg\\_write\\_bytes\\_ratio：存储节点平均写操作吞吐。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_IO\\_UTIL**：磁盘IO使用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_avg\\_io\\_util：存储节点IO使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_IO\\_WAIT**：IO等待时间。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_avg\\_io\\_await：存储节点平均IO等待时间。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_IOPS**：磁盘IOPS。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_avg\\_read\\_ratio：存储节点平均读IOPS。'."\n"
                                                            .'            '."\n"
                                                            .'        *   worker\\_avg\\_write\\_ratio：存储节点平均写IOPS。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_DiskUsage**：磁盘用量。'."\n"
                                                            .'        '."\n"
                                                            .'        *   disk\\_used\\_ratio：磁盘空间使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   worker\\_max\\_node\\_disk\\_used\\_ratio：磁盘空间使用率最大节点的使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_HotDataDiskUsage**：热数据磁盘用量。'."\n"
                                                            .'        '."\n"
                                                            .'        *   local\\_disk\\_used：热数据磁盘使用量。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_ColdDataDiskUsage**：冷数据磁盘用量。'."\n"
                                                            .'        '."\n"
                                                            .'        *   remote\\_disk\\_used：冷数据磁盘使用量。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_DiskUsedRatio：空间分析-节点磁盘使用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   disk\\_used\\_ratio：平均节点磁盘使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   worker\\_max\\_node\\_disk\\_used\\_ratio：最大节点磁盘使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_DiskUsedSize：集群总数据量。'."\n"
                                                            .'        '."\n"
                                                            .'        *   disk\\_no\\_log\\_used：（数仓版预留模式集群）总数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   disk\\_no\\_log\\_used\\_max：（数仓版预留模式集群）最大节点数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   disk\\_no\\_log\\_used\\_avg：（数仓版预留模式集群）平均节点数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   user\\_used\\_disk\\_max：（数仓版弹性模式集群）最大节点热数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   user\\_used\\_disk\\_avg：（数仓版弹性模式集群）最大节点热数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   hot\\_disk\\_used：（数仓版弹性模式集群）热数据量。'."\n"
                                                            .'            '."\n"
                                                            .'        *   cold\\_disk\\_used：（数仓版弹性模式集群）冷数据量。'."\n"
                                                            .'            '."\n"
                                                            .'*   其他'."\n"
                                                            .'    '."\n"
                                                            .'    *   **AnalyticDB\\_BuildTaskCount**：Build任务数'."\n"
                                                            .'        '."\n"
                                                            .'        *   max\\_build\\_task\\_count：运行中的最大Build任务数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   avg\\_build\\_task\\_count：运行中的平均Build任务数。'."\n"
                                                            .'            '."\n"
                                                            .'    *   **AnalyticDB\\_ComputeMemoryUsedRatio**: 计算内存使用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   max\\_worker\\_compute\\_memory\\_used\\_ratio：存储节点最大计算内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   avg\\_worker\\_compute\\_memory\\_used\\_ratio：存储节点平均计算内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   max\\_executor\\_compute\\_memory\\_used\\_ratio：计算节点最大计算内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   avg\\_executor\\_compute\\_memory\\_used\\_ratio：计算节点平均计算内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_UnavailableNodeCount：不可用节点数。'."\n"
                                                            .'        '."\n"
                                                            .'        *   worker\\_unavailable\\_node\\_count：存储节点不可用节点数。'."\n"
                                                            .'            '."\n"
                                                            .'        *   executor\\_unavailable\\_node\\_count：计算节点不可用节点数。'."\n"
                                                            .'            '."\n"
                                                            .'*   WLM相关'."\n"
                                                            .'    '."\n"
                                                            .'    *   AnalyticDB\\_WLM\\_ResubmitQueries\\_Count：WLM重新投递查询数。'."\n"
                                                            .'        '."\n"
                                                            .'        *   AnalyticDB\\_WLM\\_ResubmitQueries\\_Count：WLM重新投递查询数。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_WLM\\_SQA\\_AvgRt\\_MS：WLM小查询加速平均耗时。'."\n"
                                                            .'        '."\n"
                                                            .'        *   AnalyticDB\\_WLM\\_SQA\\_AvgRt\\_MS：WLM小查询加速平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_WLM\\_SQA\\_Queries\\_Count：WLM小查询加速查询数。'."\n"
                                                            .'        '."\n"
                                                            .'        *   AnalyticDB\\_WLM\\_SQA\\_Queries\\_Count：WLM小查询加速查询数。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_WLM\\_TotalQueries\\_Count：WLM总查询数。'."\n"
                                                            .'        '."\n"
                                                            .'        *   AnalyticDB\\_WLM\\_TotalQueries\\_Count：WLM总查询数。'."\n"
                                                            .'            '."\n"
                                                            .'*   APS相关'."\n"
                                                            .'    '."\n"
                                                            .'    *   AnalyticDB\\_APS\\_BPS：数仓版aps bps。'."\n"
                                                            .'        '."\n"
                                                            .'        *   APS\\_Read\\_BPS：APS读BPS。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_APS\\_CPU：数仓版APS CPU利用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   APS\\_CPU\\_Avg\\_Usage\\_Percentage：APS平均CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   APS\\_CPU\\_Max\\_Usage\\_Percentage：APS最大CPU使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_APS\\_Memory：数仓版APS内存利用率。'."\n"
                                                            .'        '."\n"
                                                            .'        *   APS\\_Memory\\_Avg\\_Usage\\_Percentage：APS平均内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'        *   APS\\_Memory\\_Max\\_Usage\\_Percentage：APS最大内存使用率。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_APS\\_RPS：数仓版RPS RPS。'."\n"
                                                            .'        '."\n"
                                                            .'        *   APS\\_Read\\_RPS：APS读RPS。'."\n"
                                                            .'            '."\n"
                                                            .'    *   AnalyticDB\\_APS\\_RT：数仓版APS RT。'."\n"
                                                            .'        '."\n"
                                                            .'        *   APS\\_Read\\_Avg\\_RT：APS平均耗时。'."\n"
                                                            .'            '."\n"
                                                            .'        *   APS\\_Read\\_Max\\_RT：APS最大耗时。',
                                                        'type' => 'string',
                                                        'example' => 'worker_avg_cpu_used',
                                                    ],
                                                    'Tags' => [
                                                        'description' => '标签。',
                                                        'type' => 'string',
                                                        'example' => 'instance_name: "amv-8vbf80pjcz*****"',
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
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-05-03T15:01:00Z\\",\\n  \\"RequestId\\": \\"25B56BC7-4978-40B3-9E48-4B7067******\\",\\n  \\"StartTime\\": \\"2021-05-03T15:00:00Z\\",\\n  \\"DBClusterId\\": \\"am-8vbf80pjcz*****\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_CPU\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[               \\\\\\"2021-05-03T15:00:12.72Z\\\\\\",               \\\\\\"0.1250\\\\\\"             ],             [               \\\\\\"2021-05-03T15:00:42.739Z\\\\\\",               \\\\\\"0.3125\\\\\\"             ]\\"\\n          ],\\n          \\"Name\\": \\"worker_avg_cpu_used\\",\\n          \\"Tags\\": \\"instance_name: \\\\\\"amv-8vbf80pjcz*****\\\\\\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterPerformanceResponse>\\n    <RequestId>25B56BC7-4978-40B3-9E48-4B7067******</RequestId>\\n    <EndTime>2021-05-03T15:01:00Z</EndTime>\\n    <DBClusterId>am-bp**************</DBClusterId>\\n    <StartTime>2021-05-03T15:00:00Z</StartTime>\\n    <Performances>\\n        <Series>\\n            <Values>\\n                <0>2021-05-03T15:00:12.72Z</0>\\n                <1>0.1875</1>\\n            </Values>\\n            <Values>\\n                <0>2021-05-03T15:00:42.739Z</0>\\n                <1>0.1250</1>\\n            </Values>\\n            <Name>worker_avg_cpu_used</Name>\\n        </Series>\\n        <Series>\\n            <Values>\\n                <0>2021-05-03T15:00:12.72Z</0>\\n                <1>0.1250</1>\\n            </Values>\\n            <Values>\\n                <0>2021-05-03T15:00:42.739Z</0>\\n                <1>0.3125</1>\\n            </Values>\\n            <Name>executor_avg_cpu_used</Name>\\n        </Series>\\n        <Unit>%</Unit>\\n        <Key>AnalyticDB_CPU</Key>\\n    </Performances>\\n</DescribeDBClusterPerformanceResponse>","errorExample":""}]',
            'title' => '查看集群性能数据',
            'description' => '根据性能参数查看某个集群、某时间段范围内的性能监控数据。采集粒度为30秒。支持对慢SQL进行查询，提供SQL查询时长、扫描行数、扫描量等监控内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDBClusterResourcePoolPerformance' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-****************',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源池数据监控指标。允许同时输入多个指标进行查询，多个指标间用英文逗号（,）分隔。支持监控如下指标：'."\n"
                            .'- **AnalyticDB\\_RP_CPU** ：CPU平均使用率，单位：%。'."\n"
                            .'- **AnalyticDB\\_RP_RT**：查询响应时间（RT），单位：毫秒（ms）。'."\n"
                            .'- **AnalyticDB\\_RP_QPS**：每秒查询率（QPS），单位：数值。'."\n"
                            .'- **AnalyticDB\\_RP_WaitTime**：查询等待时间，单位：毫秒（ms）。'."\n"
                            .'- **AnalyticDB\\_RP_OriginalNode**：资源池基础节点数。'."\n"
                            .'- **AnalyticDB\\_RP_ActualNode**：资源池分时弹性实际弹出的节点数（即执行扩容计划时实际增加的节点数）。'."\n"
                            .'- **AnalyticDB\\_RP_PlanNode**：资源池分时弹性计划弹出的节点数。'."\n"
                            .'- **AnalyticDB\\_RP_TotalNode**：资源池拥有的总节点数，总节点数=基础节点数+分时弹性计划中实际生效的节点数。'."\n"
                            ."\n"
                            .'> - 若该参数留空，默认返回所有指标的监控数据详情。'."\n"
                            .'> - 更多关于资源池弹性计划的信息，请参见[资源弹性扩容](~~189507~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AnalyticDB_RP_CPU',
                    ],
                ],
                [
                    'name' => 'ResourcePools',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标资源池名称。允许同时输入多个资源池名称进行查询，多个名称间用英文逗号（,）分隔。'."\n"
                            ."\n"
                            .'> * 输入的资源池名称不区分大小写，例如`USER_DEFAULT`与`user_default`表示的是同一个资源池。'."\n"
                            .'> * 若该参数留空，将返回`USER_DEFAULT`即默认资源池的监控信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TEST_POOL',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源池数据监控开始时间。格式<i>为yyyy-MM-ddTHH:mmZ</i>（UTC时间）。'."\n"
                            .'> 仅支持查看最近2天的资源池监控信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-06-10T07:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源池数据监控结束时间，结束时间需晚于开始时间。格式<i>为yyyy-MM-ddTHH:mmZ</i>（UTC时间）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-06-10T07:01Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '资源池数据监控结束时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-06-10T07:01:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C7EDB8E4-9769-4233-88C7-DCA4C9******',
                            ],
                            'StartTime' => [
                                'description' => '资源池数据监控开始时间，格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-06-10T07:00:00',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-****************',
                            ],
                            'Performances' => [
                                'description' => '以监控指标为维度的数据详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '资源池数据监控指标。',
                                            'type' => 'string',
                                            'example' => 'AnalyticDB_RP_CPU',
                                        ],
                                        'Unit' => [
                                            'description' => '监控指标的单位。',
                                            'type' => 'string',
                                            'example' => '%',
                                        ],
                                        'ResourcePoolPerformances' => [
                                            'description' => '以资源池为维度的监控数据列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ResourcePoolName' => [
                                                        'description' => '资源池名称。',
                                                        'type' => 'string',
                                                        'example' => 'test_pool',
                                                    ],
                                                    'ResourcePoolSeries' => [
                                                        'description' => '资源池监控数据的序列列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '详情。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Values' => [
                                                                    'description' => '监控指标数值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '不同时间点下的资源池监控项数值。',
                                                                        'type' => 'string',
                                                                        'example' => '["2021-06-10T07:00:22.601Z","0.0000"],["2021-06-10T07:00:52.62Z","0.0312"]',
                                                                    ],
                                                                ],
                                                                'Name' => [
                                                                    'description' => '监控指标名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'cpu',
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
                400 => [
                    [
                        'errorCode' => 'InvalidStartTime.Malformed',
                        'errorMessage' => 'The specified StartTime is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-06-10T07:01:00Z\\",\\n  \\"RequestId\\": \\"C7EDB8E4-9769-4233-88C7-DCA4C9******\\",\\n  \\"StartTime\\": \\"2021-06-10T07:00:00\\",\\n  \\"DBClusterId\\": \\"am-****************\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_RP_CPU\\",\\n      \\"Unit\\": \\"%\\",\\n      \\"ResourcePoolPerformances\\": [\\n        {\\n          \\"ResourcePoolName\\": \\"test_pool\\",\\n          \\"ResourcePoolSeries\\": [\\n            {\\n              \\"Values\\": [\\n                \\"[\\\\\\"2021-06-10T07:00:22.601Z\\\\\\",\\\\\\"0.0000\\\\\\"],[\\\\\\"2021-06-10T07:00:52.62Z\\\\\\",\\\\\\"0.0312\\\\\\"]\\"\\n              ],\\n              \\"Name\\": \\"cpu\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBClusterResourcePoolPerformanceResponse>\\n    <RequestId>C7EDB8E4-9769-4233-88C7-DCA4C9******</RequestId>\\n    <EndTime>2021-06-10T07:01:00Z</EndTime>\\n    <StartTime>2021-06-10T07:00:00Z</StartTime>\\n    <Performances>\\n        <ResourcePoolPerformances>\\n            <ResourcePoolSeries>\\n                <Values>\\n                    <0>2021-06-10T07:00:22.601Z</0>\\n                    <1>0.0000</1>\\n                </Values>\\n                <Values>\\n                    <0>2021-06-10T07:00:52.62Z</0>\\n                    <1>0.0312</1>\\n                </Values>\\n                <Name>cpu</Name>\\n            </ResourcePoolSeries>\\n            <ResourcePoolName>test_pool</ResourcePoolName>\\n        </ResourcePoolPerformances>\\n        <Unit>%</Unit>\\n        <Key>AnalyticDB_RP_CPU</Key>\\n    </Performances>\\n</DescribeDBClusterResourcePoolPerformanceResponse>","errorExample":""}]',
            'title' => '查询集群资源池监控信息',
            'summary' => '查询弹性模式集群版（新版）ADB集群的资源池监控信息。',
            'description' => '> 您还可以在控制台上以图表的形式查看AnalyticDB MySQL版弹性模式集群版（新版）资源池监控信息。更多详细信息，请参见[查看监控信息](~~188721~~)。',
        ],
        'DescribeInclinedTables' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '10807',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-k2jofo4pi5zhd****',
                    ],
                ],
                [
                    'name' => 'TableType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表类型，取值说明：'."\n"
                            .'- **FactTable**：分区表。'."\n"
                            .'- **DimensionTable**：维度表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FactTable',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定字段排序，json格式：JSON数组，有序，按顺序输入排列字段和升降序类型：'."\n"
                            ."\n"
                            .'如：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'['."\n"
                            ."\n"
                            .'    {'."\n"
                            ."\n"
                            .'        "Field":"Name",'."\n"
                            ."\n"
                            .'        "Type":"Asc"'."\n"
                            ."\n"
                            .'    }'."\n"
                            ."\n"
                            .']'."\n"
                            .'```'."\n"
                            ."\n"
                            .'其中Field表示需要排序的字段名，目前仅支持对"Name" 字段排序。'."\n"
                            .'Type表示排序类型 Desc为降序，Asc为升序。'."\n"
                            ."\n"
                            .'均不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[      {          "Field":"Name",          "Type":"Asc"      }  ]',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            ."\n"
                            .'- 30；'."\n"
                            .'- 50；'."\n"
                            .'- 100；'."\n"
                            ."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => 'cn-zhangjiakou',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '15',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => '表列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Table' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'type' => 'string',
                                                ],
                                                'Schema' => [
                                                    'type' => 'string',
                                                ],
                                                'Size' => [
                                                    'type' => 'string',
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'IsIncline' => [
                                                    'type' => 'string',
                                                ],
                                                'TotalSize' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'SpaceRatio' => [
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                ],
                                                'RowCount' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DetectionItems' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"15\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"Items\\": {\\n    \\"Table\\": [\\n      {\\n        \\"Type\\": \\"\\",\\n        \\"Schema\\": \\"\\",\\n        \\"Size\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"IsIncline\\": \\"\\",\\n        \\"TotalSize\\": 0,\\n        \\"SpaceRatio\\": 0,\\n        \\"RowCount\\": 0\\n      }\\n    ]\\n  },\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"Status\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看表监控',
            'summary' => '调用DescribeInclinedTables接口查看表监控。',
        ],
        'ModifyMaintenanceAction' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929XXXX',
                    ],
                ],
                [
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标待处理运维事件的ID。支持输入多个ID来批量修改切换时间，多个ID间用英文逗号（,）隔开。'."\n"
                            ."\n"
                            .'> * 您可以调用[DescribeMaintenanceAction](~~271738~~)接口查看目标待处理运维事件的详情，包括ID。'."\n"
                            .'> * 仅待处理运维事件支持修改切换时间，历史运维事件不支持修改切换时间。关于待处理运维事件和历史运维事件的状态详情，请参见[DescribeMaintenanceAction](~~271738~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '11111',
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '后台将在指定时间点执行目标待处理运维事件所对应的操作。格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-07-09T22:00:00Z',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标待处理运维事件所在地域的地域ID。'."\n"
                            .'> * 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'Ids' => [
                                'description' => '目标运维事件ID。',
                                'type' => 'string',
                                'example' => '11111',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7856CBE7-5BD0-4EE1-AC62-749392******',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RequiredParam.NotFound',
                        'errorMessage' => 'Required input param is not found.',
                    ],
                    [
                        'errorCode' => 'TaskModifyError',
                        'errorMessage' => 'Part of the tasks cannot be modified.',
                    ],
                    [
                        'errorCode' => 'SwitchTimeAfterDeadline',
                        'errorMessage' => 'The switch time should be earlier than deadline.',
                    ],
                    [
                        'errorCode' => 'StartTimeBeforeNow',
                        'errorMessage' => 'The start time should not be earlier than the current time.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'IncorrectTaskStatus',
                        'errorMessage' => 'Certain task\'s status does not support this operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Ids\\": \\"11111\\",\\n  \\"RequestId\\": \\"7856CBE7-5BD0-4EE1-AC62-749392******\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyMaintenanceActionResponse>\\n    <Ids>11111</Ids>\\n    <RequestId>7856CBE7-5BD0-4EE1-AC62-749392******</RequestId>\\n</ModifyMaintenanceActionResponse>","errorExample":""}]',
            'title' => '修改维护动作',
            'summary' => '调用ModifyMaintenanceAction接口修改运维事件的执行时间。',
        ],
        'DescribeMaintenanceAction' => [
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
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。取值如下：'."\n"
                            .'* 运维事件所在地域的地域ID，如`cn-hangzhou`。您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。'."\n"
                            .'* 您也可以输入`all`查看当前账号下所有地域下的所有运维事件，当`Region`设置为`all`时，`TaskType`也必须设置为`all`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维事件的类型，取值如下：'."\n"
                            .'* **rds_apsaradb_upgrade**：数据库软件升级。'."\n"
                            .'* **all**：查看当前账号下所有地域下的所有运维事件，当`Region`设置为`all`时，`TaskType`也必须设置为`all`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rds_apsaradb_upgrade',
                    ],
                ],
                [
                    'name' => 'IsHistory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回待处理或历史运维事件的详情，取值如下：'."\n"
                            .'* **0**：返回待处理运维事件的详情。'."\n"
                            .'* **1**：返回历史运维事件的详情。'."\n"
                            ."\n"
                            .'若该参数留空，默认返回待处理运维事件的详情。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维事件所在地域的地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E774C8A9-8819-4A09-9E91-07C078******',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalRecordCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Items' => [
                                'description' => '事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '事件状态。'."\n"
                                                .'- 若您设置`IsHistory`为**0**，则返回待处理运维事件状态的详情，取值范围如下：'."\n"
                                                .'    - **WAITING_MODIFY**：等待用户设置运维事件开始时间。'."\n"
                                                .'    - **WAITING**：运维事件正在等待处理。'."\n"
                                                .'    - **PROCESSING**：运维事件正在处理中（不支持修改处于该状态下事件的切换时间）。'."\n"
                                                .'- 若您设置`IsHistory`为**1**，则返回历史运维事件状态的详情，取值范围如下：'."\n"
                                                .'     - **SUCCESS**：事件结束且执行成功。'."\n"
                                                .'     - **FAILED**：事件结束但执行失败。'."\n"
                                                .'     - **CANCEL**：事件已取消。',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'Deadline' => [
                                            'description' => '运维事件执行时间可调整范围的最晚时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-07-04T15:59:59Z',
                                        ],
                                        'PrepareInterval' => [
                                            'description' => '运维事件切换之前所需的准备时间，格式为`HH:mm:ss`。',
                                            'type' => 'string',
                                            'example' => '02:00:00',
                                        ],
                                        'DBType' => [
                                            'description' => '数据库的引擎类型。',
                                            'type' => 'string',
                                            'example' => 'analyticdb',
                                        ],
                                        'StartTime' => [
                                            'description' => '后台执行该运维事件的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-07-03T04:00:00Z',
                                        ],
                                        'TaskType' => [
                                            'description' => '运维事件的类型。',
                                            'type' => 'string',
                                            'example' => 'rds_apsaradb_upgrade',
                                        ],
                                        'DBVersion' => [
                                            'description' => '数据库引擎版本号。',
                                            'type' => 'string',
                                            'example' => '3.0',
                                        ],
                                        'DBClusterId' => [
                                            'description' => '运维事件所涉及集群的集群ID。',
                                            'type' => 'string',
                                            'example' => 'am-****************',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改运维事件切换时间的时间点，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-07-03T06:33:00Z',
                                        ],
                                        'Region' => [
                                            'description' => '运维事件所在地域的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ResultInfo' => [
                                            'description' => '运维事件的执行结果。'."\n"
                                                .'> 仅当`Status`（状态）取值为**FAILED**（运维事件结束但执行失败）或**CANCEL**（事件已取消）时，返回该参数。',
                                            'type' => 'string',
                                            'example' => 'autoCancel',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '运维事件的创建时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T02:44:27Z',
                                        ],
                                        'Id' => [
                                            'description' => '运维事件的ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '11111',
                                        ],
                                        'SwitchTime' => [
                                            'description' => '运维事件预计的切换时间，格式为`yyyy-MM-ddTHH:mm:ssZ`（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-07-03T06:00:00Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'RequiredParam.NotFound',
                        'errorMessage' => 'Required input param is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"RequestId\\": \\"E774C8A9-8819-4A09-9E91-07C078******\\",\\n  \\"PageSize\\": 30,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"Deadline\\": \\"2021-07-04T15:59:59Z\\",\\n      \\"PrepareInterval\\": \\"02:00:00\\",\\n      \\"DBType\\": \\"analyticdb\\",\\n      \\"StartTime\\": \\"2021-07-03T04:00:00Z\\",\\n      \\"TaskType\\": \\"rds_apsaradb_upgrade\\",\\n      \\"DBVersion\\": \\"3.0\\",\\n      \\"DBClusterId\\": \\"am-****************\\",\\n      \\"ModifiedTime\\": \\"2021-07-03T06:33:00Z\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"ResultInfo\\": \\"autoCancel\\",\\n      \\"CreatedTime\\": \\"2021-06-30T02:44:27Z\\",\\n      \\"Id\\": 11111,\\n      \\"SwitchTime\\": \\"2021-07-03T06:00:00Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMaintenanceActionResponse>\\n    <TotalRecordCount>2</TotalRecordCount>\\n    <RequestId>E774C8A9-8819-4A09-9E91-07C078******</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Items>\\n        <Status>SUCCESS</Status>\\n        <CreatedTime>2021-06-30T02:44:27Z</CreatedTime>\\n        <Deadline>2021-07-04T15:59:59Z</Deadline>\\n        <StartTime>2021-07-03T04:00:00Z</StartTime>\\n        <DBClusterId>am-****************</DBClusterId>\\n        <DBType>analyticdb</DBType>\\n        <DBVersion>3.0</DBVersion>\\n        <ModifiedTime>2021-07-03T06:33:00Z</ModifiedTime>\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\n        <PrepareInterval>02:00:00</PrepareInterval>\\n        <Region>cn-hangzhou</Region>\\n        <Id>11111</Id>\\n        <SwitchTime>2021-07-03T06:00:00Z</SwitchTime>\\n    </Items>\\n    <Items>\\n        <Status>CANCEL</Status>\\n        <CreatedTime>2021-06-25T06:32:45Z</CreatedTime>\\n        <Deadline>2021-06-29T15:59:59Z</Deadline>\\n        <StartTime>2021-06-26T16:10:00Z</StartTime>\\n        <DBClusterId>am-****************</DBClusterId>\\n        <DBType>analyticdb</DBType>\\n        <DBVersion>3.0</DBVersion>\\n        <ModifiedTime>2021-06-26T18:40:00Z</ModifiedTime>\\n        <TaskType>rds_apsaradb_upgrade</TaskType>\\n        <PrepareInterval>02:00:00</PrepareInterval>\\n        <Region>cn-hangzhou</Region>\\n        <Id>22222</Id>\\n        <ResultInfo>autoCancel</ResultInfo>\\n        <SwitchTime>2021-06-26T18:10:00Z</SwitchTime>\\n    </Items>\\n</DescribeMaintenanceActionResponse>","errorExample":""}]',
            'title' => '查询运维事件的详情',
            'summary' => '调用DescribeMaintenanceAction接口查询运维事件的详细信息。',
        ],
        'DescribeDiagnosisTasks' => [
            'summary' => '获取指定查询ID和Stage ID的分布式子任务执行详情信息。',
            'methods' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            ."\n"
                            .'> 您可以通过[DescribeDBClusters](~~129857~~)接口查看账号下AnalyticDB MySQL数仓版集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版支持的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。'."\n"
                            .'> 您可以调用[DescribeProcessList](~~190092~~)接口查看目标SQL的任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '202011191048151921681492420315100****',
                    ],
                ],
                [
                    'name' => 'StageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定`ProcessId`对应查询的某个Stage ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Stage[26]',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定字段对任务进行升序或降序排列。参数值需为JSON字符串类型，例如：`[{"Field":"CreateTime", "Type":"desc"}]`'."\n"
                            ."\n"
                            .'> * `Field`表示需要排序的字段名，支持的字段为：`State`、`CreateTime`、`DBName`、`ProcessID`、`UpdateTime`、`JobName`和`ProcessRows`。'."\n"
                            .'> * `Type`表示排序类型，取值范围为`Desc`（降序）或`Asc`（升序），取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"StartTime", "Type": "desc" }]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- 30（默认值）。'."\n"
                            .'- 50。'."\n"
                            .'- 100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的异步导入或导出任务的状态，取值说明如下：'."\n"
                            .'* **RUNNING**：任务进行中。'."\n"
                            .'* **FINISHED**：任务执行成功。'."\n"
                            .'* **FAILED**：任务执行失败。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'FAILED' => 'FAILED',
                            'RUNNING' => 'RUNNING',
                            'FINISHED' => 'FINISHED',
                        ],
                        'example' => 'RUNNING',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发起查询的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '任务列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
                            ],
                            'TaskList' => [
                                'description' => '子任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '子任务详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ScanCost' => [
                                            'description' => '带数据源的任务的扫描数据耗时。单位：毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'OutputDataSize' => [
                                            'description' => '任务的输出数据量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'InputDataSize' => [
                                            'description' => '任务的输入数据量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'State' => [
                                            'description' => '任务最终执行状态：'."\n"
                                                ."\n"
                                                .'- FINISHED：完成。'."\n"
                                                .'- CANCELED：取消。'."\n"
                                                .'- ABORTED：中止。'."\n"
                                                .'- FAILED：失败。',
                                            'type' => 'string',
                                            'example' => 'FINISHED',
                                        ],
                                        'OperatorCost' => [
                                            'description' => '任务在某个节点的算子总耗时，为多线程累加值，可用于判断计算是否存在长尾。单位：毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3',
                                        ],
                                        'OutputRows' => [
                                            'description' => '任务的输出数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '105',
                                        ],
                                        'ScanDataSize' => [
                                            'description' => '任务的扫描数据量，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'ElapsedTime' => [
                                            'description' => '任务从创建到结束的时长。单位：毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '456',
                                        ],
                                        'ScanRows' => [
                                            'description' => '带数据源的任务的扫描数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'PeakMemory' => [
                                            'description' => '任务的峰值内存，单位Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '22568****',
                                        ],
                                        'InputRows' => [
                                            'description' => '任务的输入数据行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '105',
                                        ],
                                        'TaskCreateTime' => [
                                            'description' => '任务创建时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-12-12 00:00:12',
                                        ],
                                        'TaskEndTime' => [
                                            'description' => '任务实际结束的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2022-12-22 00:00:00',
                                        ],
                                        'TaskHost' => [
                                            'description' => '任务机器的IP。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'Drivers' => [
                                            'description' => '任务执行的并行度。',
                                            'type' => 'string',
                                            'example' => '16',
                                        ],
                                        'QueuedTime' => [
                                            'description' => '任务执行前的排队时间，单位：毫秒（ms）。',
                                            'type' => 'string',
                                            'example' => '12',
                                        ],
                                        'ComputeTimeRatio' => [
                                            'description' => '任务所有算子的累加耗时除以任务的并行度后，和ElapsedTime的比值，可用于判断任务的是否为真正耗时的任务。如果比值较大，说明该任务大部分时间在实际执行计算任务；如果比值较小，说明该任务大部分时间在等待被调度或者因其他原因被阻塞。',
                                            'type' => 'string',
                                            'example' => '0.89',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '某个Stage总的任务数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '33',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\",\\n  \\"TaskList\\": [\\n    {\\n      \\"ScanCost\\": 0,\\n      \\"OutputDataSize\\": 123,\\n      \\"InputDataSize\\": 123,\\n      \\"State\\": \\"FINISHED\\",\\n      \\"OperatorCost\\": 3,\\n      \\"OutputRows\\": 105,\\n      \\"ScanDataSize\\": 123,\\n      \\"ElapsedTime\\": 456,\\n      \\"ScanRows\\": 0,\\n      \\"PeakMemory\\": 234,\\n      \\"TaskId\\": \\"22568****\\",\\n      \\"InputRows\\": 105,\\n      \\"TaskCreateTime\\": 0,\\n      \\"TaskEndTime\\": 0,\\n      \\"TaskHost\\": \\"192.168.XX.XX\\",\\n      \\"Drivers\\": \\"16\\",\\n      \\"QueuedTime\\": \\"12\\",\\n      \\"ComputeTimeRatio\\": \\"0.89\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 33\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisTasksResponse>\\n    <RequestId>F0983B43-B2EC-536A-8791-142B5CF1E9B6</RequestId>\\n    <TaskList>\\n        <ScanCost>0</ScanCost>\\n        <OutputDataSize>123</OutputDataSize>\\n        <InputDataSize>123</InputDataSize>\\n        <State>FINISHED</State>\\n        <OperatorCost>3</OperatorCost>\\n        <OutputRows>105</OutputRows>\\n        <ScanDataSize>123</ScanDataSize>\\n        <ElapsedTime>456</ElapsedTime>\\n        <ScanRows>0</ScanRows>\\n        <PeakMemory>234</PeakMemory>\\n        <TaskId>22568****</TaskId>\\n        <InputRows>105</InputRows>\\n        <TaskHost>192.168.xx.xx</TaskHost>\\n        <Drivers>16</Drivers>\\n        <QueuedTime>12</QueuedTime>\\n        <ComputeTimeRatio>0.89</ComputeTimeRatio>\\n    </TaskList>\\n    <TotalCount>33</TotalCount>\\n</DescribeDiagnosisTasksResponse>","errorExample":""}]',
            'title' => 'Stage的子任务执行详情',
        ],
        'DescribeDiagnosisRecords' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            .'> 仅支持查看14天内的数据。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1632931200000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            ."\n"
                            .'> * 查询结束时间需晚于查询开始时间。'."\n"
                            .'> * 开始时间与结束时间的间隔不能超过24小时。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1633017540000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'QueryCondition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定SQL的查询条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`），`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：'."\n"
                            .'- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。'."\n"
                            .'- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。'."\n"
                            .'- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"Type":"status","Value":"finished"}',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'select',
                    ],
                ],
                [
                    'name' => 'MinPeakMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的最小峰值内存，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaxPeakMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的最大峰值内存，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '89000000',
                    ],
                ],
                [
                    'name' => 'MinScanSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的最小扫描量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaxScanSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的最大扫描量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '104428198',
                    ],
                ],
                [
                    'name' => 'ResourceGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句所属的资源组。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user_default',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行SQL语句的用户名。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_user',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行SQL语句的数据库。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问源地址。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL语句所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59.82.xx.xx',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据指定字段对SQL语句进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{"Field":"StartTime", "Type": "desc" }]`。其中：'."\n"
                            ."\n"
                            .'- `Field`表示需要排序的字段名，支持如下字段：'."\n"
                            .'    - `StartTime`：执行开始时间。'."\n"
                            .'    - `Status`：执行状态。'."\n"
                            .'    - `UserName`：用户名称。'."\n"
                            .'    - `Cost`：执行耗时。'."\n"
                            .'    - `PeakMemory`：峰值内存。'."\n"
                            .'    - `ScanSize`：扫描数据量。'."\n"
                            .'    - `Database`：数据库名称。'."\n"
                            .'    - `ClientIp`：访问源地址.'."\n"
                            .'    - `ResourceGroup`：资源组。'."\n"
                            .'    - `QueueTime`：排队耗时。'."\n"
                            .'    - `OutputRows`：输出行数。'."\n"
                            .'    - `OutputDataSize`：输出数据量。'."\n"
                            .'    - `ResourceCostRank`：SQL内部算子的耗时排名（仅当`QueryCondition`取值为`{"Type":"status","Value":"running"}`时，支持使用该字段）。'."\n"
                            ."\n"
                            .'- `Type`表示排序类型，支持如下取值（取值均不区分大小写）：'."\n"
                            .'    - `Desc`：降序。'."\n"
                            .'    - `Asc`：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"StartTime", "Type": "desc" }]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值为**30**（默认值）、**50**或**100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PatternId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL Pattern的ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeSQLPatterns](~~321868~~)接口查看指定时间内目标AnalyticDB MySQL集群下所有的SQL Pattern列表信息，包括SQL Pattern的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5575924945138******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Querys' => [
                                'description' => 'SQL语句详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SQL' => [
                                            'description' => 'SQL语句详情。'."\n"
                                                .'> 出于性能考虑，当前SQL语句最长支持显示5120个字符，超出限制的SQL语句会被截断。您可以调用[DownloadDiagnosisRecords](~~308212~~)接口下载符合指定条件的SQL语句的摘要信息，包括完整的SQL语句。',
                                            'type' => 'string',
                                            'example' => 'SELECT count(*)\\nFROM nation',
                                        ],
                                        'SQLTruncatedThreshold' => [
                                            'description' => 'SQL语句的截断阈值，固定为5120个字符。超过该长度的SQL语句会被截断。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5120',
                                        ],
                                        'Status' => [
                                            'description' => 'SQL语句的状态，取值为：'."\n"
                                                .'- **running**：执行中。'."\n"
                                                .'- **finished**：已完成。'."\n"
                                                .'- **failed**：执行失败。',
                                            'type' => 'string',
                                            'example' => 'finished',
                                        ],
                                        'OutputDataSize' => [
                                            'description' => '返回数据量，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9',
                                        ],
                                        'Cost' => [
                                            'description' => '查询的总耗时。单位：毫秒。'."\n"
                                                .'> 该耗时指标是`QueuedTime`、`TotalPlanningTime`和`ExecutionTime`三个耗时指标的累加值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'OutputRows' => [
                                            'description' => '返回行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'RcHost' => [
                                            'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP和端口信息。',
                                            'type' => 'string',
                                            'example' => '10.0.xx.xx:3004',
                                        ],
                                        'ScanSize' => [
                                            'description' => '扫描数据量，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9',
                                        ],
                                        'ProcessId' => [
                                            'description' => '查询ID。',
                                            'type' => 'string',
                                            'example' => '2021093000414401000000023503151******',
                                        ],
                                        'StartTime' => [
                                            'description' => 'SQL语句的执行开始时间，格式为Unix时间戳，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1632933704000',
                                        ],
                                        'SQLTruncated' => [
                                            'description' => '查询结果的长度是否超过阈值（即是否被截断），取值如下：'."\n"
                                                .'- **true**：查询结果的长度超过阈值。'."\n"
                                                .'- **false**：查询结果的长度未超过阈值。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Database' => [
                                            'description' => '执行SQL语句的数据库名称。',
                                            'type' => 'string',
                                            'example' => 'adb_demo',
                                        ],
                                        'ScanRows' => [
                                            'description' => '扫描行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ResourceCostRank' => [
                                            'description' => 'SQL语句内部算子的耗时排名。'."\n"
                                                .'> 仅状态为执行中，即`Status`取值为`running`的SQL语句支持返回该字段。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ClientIp' => [
                                            'description' => '访问源地址。',
                                            'type' => 'string',
                                            'example' => '59.82.xx.xx',
                                        ],
                                        'PeakMemory' => [
                                            'description' => '峰值内存，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '16648',
                                        ],
                                        'QueueTime' => [
                                            'description' => '排队耗时，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ResourceGroup' => [
                                            'description' => 'SQL语句所属的资源池。',
                                            'type' => 'string',
                                            'example' => 'user_default',
                                        ],
                                        'UserName' => [
                                            'description' => '执行SQL语句的用户名。',
                                            'type' => 'string',
                                            'example' => 'test_user',
                                        ],
                                        'ExecutionTime' => [
                                            'description' => '查询执行的耗时，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6',
                                        ],
                                        'TotalPlanningTime' => [
                                            'description' => '生成执行计划的耗时，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'EtlWriteRows' => [
                                            'description' => 'ETL任务写表的行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'TotalStages' => [
                                            'description' => '查询生成的总Stage数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '109462AF-B5FA-3D5A-9377-B27E5B******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Querys\\": [\\n    {\\n      \\"SQL\\": \\"SELECT count(*)\\\\\\\\nFROM nation\\",\\n      \\"SQLTruncatedThreshold\\": 5120,\\n      \\"Status\\": \\"finished\\",\\n      \\"OutputDataSize\\": 9,\\n      \\"Cost\\": 10,\\n      \\"OutputRows\\": 1,\\n      \\"RcHost\\": \\"10.0.xx.xx:3004\\",\\n      \\"ScanSize\\": 9,\\n      \\"ProcessId\\": \\"2021093000414401000000023503151******\\",\\n      \\"StartTime\\": 1632933704000,\\n      \\"SQLTruncated\\": false,\\n      \\"Database\\": \\"adb_demo\\",\\n      \\"ScanRows\\": 1,\\n      \\"ResourceCostRank\\": 1,\\n      \\"ClientIp\\": \\"59.82.xx.xx\\",\\n      \\"PeakMemory\\": 16648,\\n      \\"QueueTime\\": 0,\\n      \\"ResourceGroup\\": \\"user_default\\",\\n      \\"UserName\\": \\"test_user\\",\\n      \\"ExecutionTime\\": 6,\\n      \\"TotalPlanningTime\\": 4,\\n      \\"EtlWriteRows\\": 0,\\n      \\"TotalStages\\": 2\\n    }\\n  ],\\n  \\"RequestId\\": \\"109462AF-B5FA-3D5A-9377-B27E5B******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisRecordsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Querys>\\n        <SQL>SELECT count(*)\\\\nFROM nation</SQL>\\n        <SQLTruncatedThreshold>5120</SQLTruncatedThreshold>\\n        <Status>finished</Status>\\n        <OutputDataSize>9</OutputDataSize>\\n        <Cost>10</Cost>\\n        <OutputRows>1</OutputRows>\\n        <RcHost>10.0.xx.xx:3004</RcHost>\\n        <ScanSize>9</ScanSize>\\n        <ProcessId>2021093000414401000000023503151******</ProcessId>\\n        <StartTime>1632933704000</StartTime>\\n        <SQLTruncated>false</SQLTruncated>\\n        <Database>adb_demo</Database>\\n        <ScanRows>1</ScanRows>\\n        <ResourceCostRank>1</ResourceCostRank>\\n        <ClientIp>59.82.xx.xx</ClientIp>\\n        <PeakMemory>16648</PeakMemory>\\n        <QueueTime>0</QueueTime>\\n        <ResourceGroup>user_default</ResourceGroup>\\n        <UserName>test_user</UserName>\\n        <ExecutionTime>6</ExecutionTime>\\n        <TotalPlanningTime>4</TotalPlanningTime>\\n        <EtlWriteRows>0</EtlWriteRows>\\n        <TotalStages>2</TotalStages>\\n    </Querys>\\n    <RequestId>109462AF-B5FA-3D5A-9377-B27E5B******</RequestId>\\n</DescribeDiagnosisRecordsResponse>","errorExample":""}]',
            'title' => '查询诊断记录',
            'summary' => '查看目标AnalyticDB MySQL版集群中符合指定检索条件的SQL语句摘要信息。',
        ],
        'DescribeDiagnosisDimensions' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bt6u59zcmd945****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            .'> 最多仅支持查看14天前的数据，查询超过14天前的数据返回结果为空。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1625220210000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            ."\n"
                            .'> * 查询结束时间需晚于查询开始时间。'."\n"
                            .'> * 开始时间与结束时间的间隔不能超过24小时。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1625220213000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'QueryCondition',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL查询的条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`）；`Value`、`Min`或`Max`表示该维度下的查询范围。取值说明：'."\n"
                            .'- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。'."\n"
                            .'- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。'."\n"
                            .'- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Type":"maxCost","Value":"100"}',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'ClientIps' => [
                                'description' => '访问源地址列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '访问源地址。',
                                    'type' => 'string',
                                    'example' => '106.11.xx.xx',
                                ],
                            ],
                            'ResourceGroups' => [
                                'description' => '资源组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源组名称。',
                                    'type' => 'string',
                                    'example' => 'user_default',
                                ],
                            ],
                            'UserNames' => [
                                'description' => '用户名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户名。',
                                    'type' => 'string',
                                    'example' => 'test_user',
                                ],
                            ],
                            'Databases' => [
                                'description' => '数据库列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据库名称。',
                                    'type' => 'string',
                                    'example' => 'tpch_1g',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E0B56BCD-1BED-30EC-8CAF-1D1E5F******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClientIps\\": [\\n    \\"106.11.xx.xx\\"\\n  ],\\n  \\"ResourceGroups\\": [\\n    \\"user_default\\"\\n  ],\\n  \\"UserNames\\": [\\n    \\"test_user\\"\\n  ],\\n  \\"Databases\\": [\\n    \\"tpch_1g\\"\\n  ],\\n  \\"RequestId\\": \\"E0B56BCD-1BED-30EC-8CAF-1D1E5F******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisDimensionsResponse>\\n    <ClientIps>[\\"106.11.xx.xx\\",\\"106.11.xx.xx\\"]</ClientIps>\\n    <ResourceGroups>[\\"user_default\\"]</ResourceGroups>\\n    <UserNames>[\\"test_user\\"]</UserNames>\\n    <Databases>[\\"tpch_1g\\"]</Databases>\\n    <RequestId>E0B56BCD-1BED-30EC-8CAF-1D1E5F******</RequestId>\\n</DescribeDiagnosisDimensionsResponse>","errorExample":""}]',
            'title' => '查询诊断维度',
            'summary' => '查看符合指定检索条件的SQL在资源组、数据库名、用户名以及访问源地址等维度下的去重统计信息。',
        ],
        'DescribeDownloadRecords' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-****************',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'Records' => [
                                'description' => '下载列表详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态，取值为：'."\n"
                                                .'- **running**：正在下载。'."\n"
                                                .'- **finished**：已完成。'."\n"
                                                .'- **failed**：下载失败。',
                                            'type' => 'string',
                                            'example' => 'finished',
                                        ],
                                        'DownloadId' => [
                                            'description' => '下载任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '69',
                                        ],
                                        'ExceptionMsg' => [
                                            'description' => '下载任务失败时返回的异常信息。',
                                            'type' => 'string',
                                            'example' => 'The query result is empty.',
                                        ],
                                        'Url' => [
                                            'description' => '文件下载地址。',
                                            'type' => 'string',
                                            'example' => 'https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******"',
                                        ],
                                        'FileName' => [
                                            'description' => '下载文件名。',
                                            'type' => 'string',
                                            'example' => '20210806094635-20210806095135',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '987F51BE-C4CB-332A-B159-63CE87******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Records\\": [\\n    {\\n      \\"Status\\": \\"finished\\",\\n      \\"DownloadId\\": 69,\\n      \\"ExceptionMsg\\": \\"The query result is empty.\\",\\n      \\"Url\\": \\"https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&OSSAccessKeyId=*********&Signature=******\\\\\\"\\",\\n      \\"FileName\\": \\"20210806094635-20210806095135\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"987F51BE-C4CB-332A-B159-63CE87******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeDownloadRecordsResponse>\\n    <RequestId>987F51BE-C4CB-332A-B159-63CE87******</RequestId>\\n    <Records>\\n        <Status>failed</Status>\\n        <FileName>20210806094635-20210806095135.xlsx</FileName>\\n        <ExceptionMsg>The query result is empty.</ExceptionMsg>\\n        <Url/>\\n        <DownloadId>73</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210805104301-20210805164302.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164302.xlsx?Expires=1943514161&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>72</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210805104301-20210805164301.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210805104301-20210805164301.xlsx?Expires=1943513847&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>71</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210804234858-20210805114858.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210804234858-20210805114858.xlsx?Expires=1943495349&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>70</DownloadId>\\n    </Records>\\n    <Records>\\n        <Status>finished</Status>\\n        <FileName>20210702180330-20210702180333.xlsx</FileName>\\n        <ExceptionMsg/>\\n        <Url>https://perth-download-task.oss-cn-beijing.aliyuncs.com/adbmysql/query-sql-logs/am-**************/20210702180330-20210702180333.xlsx?Expires=1941607637&amp;OSSAccessKeyId=*********&amp;Signature=******</Url>\\n        <DownloadId>69</DownloadId>\\n    </Records>\\n</DescribeDownloadRecordsResponse>","errorExample":""}]',
            'title' => '查询下载记录',
            'summary' => '查看目标AnalyticDB MySQL版集群中最近5次的SQL查询下载任务列表。',
        ],
        'DownloadDiagnosisRecords' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            .'> 最多仅支持查看14天前的数据。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1625220210000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，格式为Unix时间戳，单位：毫秒。'."\n"
                            ."\n"
                            .'> * 查询结束时间需晚于查询开始时间。'."\n"
                            .'> * 开始时间与结束时间的间隔不能超过24小时。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1625220213000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'QueryCondition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定SQL查询的条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持`maxCost`、`status`和`cost`3个取值）；`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：'."\n"
                            .'- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。'."\n"
                            .'- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。'."\n"
                            .'- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"Type":"status","Value":"finished"}',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'select',
                    ],
                ],
                [
                    'name' => 'MinPeakMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL的最小峰值内存，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '88000000',
                    ],
                ],
                [
                    'name' => 'MaxPeakMemory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL的最大峰值内存，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '88000000',
                    ],
                ],
                [
                    'name' => 'MinScanSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL的最小扫描量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100000000',
                    ],
                ],
                [
                    'name' => 'MaxScanSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL的最大扫描量，单位：Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '110000000',
                    ],
                ],
                [
                    'name' => 'ResourceGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标SQL所属的资源组。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user_default',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行目标SQL的用户名。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_user',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行目标SQL的数据库。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adb_demo',
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问源地址。'."\n"
                            .'> 您可以调用[DescribeDiagnosisDimensions](~~308210~~)接口查看符合指定检索条件的SQL所属的资源组、数据库名、用户名以及访问源地址信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'DownloadId' => [
                                'description' => '下载ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '68',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D4ACF4E0-2952-3A87-9A2C-474058******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DownloadId\\": 68,\\n  \\"RequestId\\": \\"D4ACF4E0-2952-3A87-9A2C-474058******\\"\\n}","errorExample":""},{"type":"xml","example":"<DownloadDiagnosisRecordsResponse>\\n    <RequestId>D4ACF4E0-2952-3A87-9A2C-474058******</RequestId>\\n    <DownloadId>68</DownloadId>\\n</DownloadDiagnosisRecordsResponse>","errorExample":""}]',
            'title' => '下载诊断记录',
            'summary' => '下载目标AnalyticDB MySQL版集群中符合指定条件的查询SQL的摘要信息。',
        ],
        'DescribeDiagnosisSQLInfo' => [
            'methods' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下AnalyticDB MySQL数仓版集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL支持的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询ID。'."\n"
                            .'> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括查询ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021070216432217201616806503453******',
                    ],
                ],
                [
                    'name' => 'ProcessStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒（ms）。'."\n"
                            .'> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括SQL语句的执行开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1625215402000',
                    ],
                ],
                [
                    'name' => 'ProcessState',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句的状态，取值如下：'."\n"
                            .'- **running**：执行中。'."\n"
                            .'- **finished**：已完成。'."\n"
                            .'- **failed**：执行失败。'."\n"
                            .'> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括SQL语句的状态信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'running',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日语。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'ProcessRcHost',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP和端口信息。'."\n"
                            .'> 您可以调用[DescribeDiagnosisRecords](~~308207~~)接口查看指定的AnalyticDB MySQL集群中SQL摘要信息，包括前端节点IP和端口信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '192.45.***.***:3145',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'DiagnosisSQLInfo' => [
                                'description' => 'SQL的执行详情，包括详细的SQL语句、统计信息、执行计划和算子信息等。',
                                'type' => 'string',
                                'example' => '{     "DiagnosisSQLInfo": {         "hasSharedStage": false,         "resourceGroup": "user_default",         "cost": 274,         "queuedTime": 0,         "outputDataSize": 9,         "scheduled": true,         "query": "/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \'1995-09-01\' AND l_shipdate &lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH",         "outputRows": 1,         "userName": "test_user",         "parentId": 0,         "maxOutputRows": 200000,         "scanSize": 8247470,         "peakMemory": 13188295,         "startTime": 1626330527632,         "state": "FINISHED",         "endTime": 1626330527905,         "writeTableRows": 0,         "scanRows": 351966     } }',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'StageInfos' => [
                                'description' => '查询的分阶段执行信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询的分阶段执行信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InputRows' => [
                                            'description' => 'Stage总的输入行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'InputDataSize' => [
                                            'description' => 'Stage总的输入数据量，单位为Bytes。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2341',
                                        ],
                                        'OutputRows' => [
                                            'description' => 'Stage总的输出行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '231',
                                        ],
                                        'OutputDataSize' => [
                                            'description' => 'Stage总的输出数据量，单位为Bytes。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12344',
                                        ],
                                        'PeakMemory' => [
                                            'description' => 'Stage总的峰值内存，单位为Bytes。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3421',
                                        ],
                                        'OperatorCost' => [
                                            'description' => 'Stage的算子累积耗时，单位为毫秒（ms）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2341',
                                        ],
                                        'StageId' => [
                                            'description' => 'StageID。',
                                            'type' => 'string',
                                            'example' => 'Stage[26]',
                                        ],
                                        'State' => [
                                            'description' => 'Stage状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'FAILED' => 'FAILED',
                                                'RUNNING' => 'RUNNING',
                                                'FINISHED' => 'FINISHED',
                                            ],
                                            'example' => 'RUNNING',
                                        ],
                                        'Progress' => [
                                            'description' => 'Stage的执行进度。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '0.3',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiagnosisSQLInfo\\": \\"{     \\\\\\"DiagnosisSQLInfo\\\\\\": {         \\\\\\"hasSharedStage\\\\\\": false,         \\\\\\"resourceGroup\\\\\\": \\\\\\"user_default\\\\\\",         \\\\\\"cost\\\\\\": 274,         \\\\\\"queuedTime\\\\\\": 0,         \\\\\\"outputDataSize\\\\\\": 9,         \\\\\\"scheduled\\\\\\": true,         \\\\\\"query\\\\\\": \\\\\\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \'1995-09-01\' AND l_shipdate &lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\\\\\",         \\\\\\"outputRows\\\\\\": 1,         \\\\\\"userName\\\\\\": \\\\\\"test_user\\\\\\",         \\\\\\"parentId\\\\\\": 0,         \\\\\\"maxOutputRows\\\\\\": 200000,         \\\\\\"scanSize\\\\\\": 8247470,         \\\\\\"peakMemory\\\\\\": 13188295,         \\\\\\"startTime\\\\\\": 1626330527632,         \\\\\\"state\\\\\\": \\\\\\"FINISHED\\\\\\",         \\\\\\"endTime\\\\\\": 1626330527905,         \\\\\\"writeTableRows\\\\\\": 0,         \\\\\\"scanRows\\\\\\": 351966     } }\\",\\n  \\"RequestId\\": \\"1\\",\\n  \\"StageInfos\\": [\\n    {\\n      \\"InputRows\\": 123,\\n      \\"InputDataSize\\": 2341,\\n      \\"OutputRows\\": 231,\\n      \\"OutputDataSize\\": 12344,\\n      \\"PeakMemory\\": 3421,\\n      \\"OperatorCost\\": 2341,\\n      \\"StageId\\": \\"Stage[26]\\",\\n      \\"State\\": \\"RUNNING\\",\\n      \\"Progress\\": 0.3\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisSQLInfoResponse>\\n    <DiagnosisSQLInfo>{     \\"DiagnosisSQLInfo\\": {         \\"hasSharedStage\\": false,         \\"resourceGroup\\": \\"user_default\\",         \\"cost\\": 274,         \\"queuedTime\\": 0,         \\"outputDataSize\\": 9,         \\"scheduled\\": true,         \\"query\\": \\"/*+display=tpch_q14*/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \'PROMO%\' THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &amp;gt;= DATE \'1995-09-01\' AND l_shipdate &amp;lt; DATE \'1995-09-01\' + INTERVAL \'1\' MONTH\\",         \\"outputRows\\": 1,         \\"userName\\": \\"test_user\\",         \\"parentId\\": 0,         \\"maxOutputRows\\": 200000,         \\"scanSize\\": 8247470,         \\"peakMemory\\": 13188295,         \\"startTime\\": 1626330527632,         \\"state\\": \\"FINISHED\\",         \\"endTime\\": 1626330527905,         \\"writeTableRows\\": 0,         \\"scanRows\\": 351966     } }</DiagnosisSQLInfo>\\n    <RequestId>1</RequestId>\\n    <StageInfos>\\n        <InputRows>123</InputRows>\\n        <InputDataSize>2341</InputDataSize>\\n        <OutputRows>231</OutputRows>\\n        <OutputDataSize>12344</OutputDataSize>\\n        <PeakMemory>3421</PeakMemory>\\n        <OperatorCost>2341</OperatorCost>\\n        <StageId>Stage[26]</StageId>\\n        <State>RUNNING</State>\\n        <Progress>0.3</Progress>\\n    </StageInfos>\\n</DescribeDiagnosisSQLInfoResponse>","errorExample":""}]',
            'title' => '查询诊断SQL信息',
            'summary' => '查看某个SQL的执行详情，包括执行计划、运行信息、资源使用、自诊断结果等。',
        ],
        'DescribeDiagnosisMonitorPerformance' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp108q1py5r78****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。格式为Unix时间戳，单位为毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1671684348000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。格式为Unix时间戳，单位为毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1671687948000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'QueryCondition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定SQL的查询条件，格式为JSON字符串，包含`Type`、`Value`、`Min`或`Max`等字段。其中`Type` 表示查询维度（当前仅支持3个取值：`maxCost`、`status`和`cost`），`Value`、`Min`或`Max`表示该维度下的查询范围。具体支持的取值范围如下：'."\n"
                            .'- ` {"Type":"maxCost","Value":"100"}`：表示查看执行耗时最长的前100条SQL详情，当前`Value`的取值仅支持设置为100。'."\n"
                            .'- `{"Type":"status","Value":"finished"}`：表示查看已完成的SQL详情。您也可以将`Value`设置为`running`或`failed`来查询正在执行或执行失败的SQL详情。'."\n"
                            .'- `{"Type":"cost","Min":"10","Max":"200"}`：表示查看执行耗时为10毫秒~200毫秒的SQL详情，您也可以自定义执行耗时的最大值与最小值，单位：毫秒。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{\\"Type\\":\\"maxCost\\",\\"Value\\":\\"100\\"}',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，支持如下语言：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PerformancesThreshold' => [
                                'description' => '绘制甘特图的查询条数阈值，默认为10000条。'."\n"
                                    ."\n"
                                    .'> 即使实际的查询条数多于10000条，也只会使用10000条查询绘制甘特图。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10000',
                            ],
                            'PerformancesTruncated' => [
                                'description' => '当前返回的查询是否为全部查询。返回值说明：'."\n"
                                    ."\n"
                                    .'- true：当前返回的查询条数是全部查询。'."\n"
                                    .'- false：后台限制了返回条数，即当前返回的查询不是全部查询。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8',
                            ],
                            'Performances' => [
                                'description' => '绘制甘特图的数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '甘特图性能数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'SQL语句的状态，取值为：'."\n"
                                                .'- **running**：执行中。'."\n"
                                                .'- **finished**：已完成。'."\n"
                                                .'- **failed**：执行失败。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'ProcessId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '202210311015270330101470300315153****',
                                        ],
                                        'StartTime' => [
                                            'description' => '目标SQL语句的执行开始时间，格式为Unix时间戳，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1669011260000',
                                        ],
                                        'Cost' => [
                                            'description' => '查询的总耗时。单位：毫秒。'."\n"
                                                .'> 该耗时指标是`QueuedTime`、`TotalPlanningTime`和`ExecutionTime`三个耗时指标的累加值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '252',
                                        ],
                                        'ScanRows' => [
                                            'description' => '扫描行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2345',
                                        ],
                                        'PeakMemory' => [
                                            'description' => '查询的峰值内存，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'RcHost' => [
                                            'description' => '执行SQL语句的AnalyticDB MySQL前端节点IP。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'ScanSize' => [
                                            'description' => '扫描数据量，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'UserName' => [
                                            'description' => '提交查询使用的用户名。',
                                            'type' => 'string',
                                            'example' => 'rpt',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PerformancesThreshold\\": 10000,\\n  \\"PerformancesTruncated\\": false,\\n  \\"RequestId\\": \\"0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Status\\": \\"running\\",\\n      \\"ProcessId\\": \\"202210311015270330101470300315153****\\",\\n      \\"StartTime\\": 1669011260000,\\n      \\"Cost\\": 252,\\n      \\"ScanRows\\": 2345,\\n      \\"PeakMemory\\": 123,\\n      \\"RcHost\\": \\"192.168.XX.XX\\",\\n      \\"ScanSize\\": 123,\\n      \\"UserName\\": \\"rpt\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDiagnosisMonitorPerformanceResponse>\\n    <PerformancesThreshold>10000</PerformancesThreshold>\\n    <PerformancesTruncated>false</PerformancesTruncated>\\n    <RequestId>0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8</RequestId>\\n    <Performances>\\n        <Status>running</Status>\\n        <ProcessId>202210311015270330101470300315153****</ProcessId>\\n        <StartTime>1669011260000</StartTime>\\n        <Cost>252</Cost>\\n        <ScanRows>2345</ScanRows>\\n        <PeakMemory>123</PeakMemory>\\n        <RcHost>192.168.XX.XX</RcHost>\\n        <ScanSize>123</ScanSize>\\n        <UserName>rpt</UserName>\\n    </Performances>\\n</DescribeDiagnosisMonitorPerformanceResponse>","errorExample":""}]',
            'title' => '查询智能运维的监控信息',
            'summary' => '用于获取用户选定时间范围内查询的执行开始时间信息和结束时间信息。',
        ],
        'DescribeSQLPatterns' => [
            'summary' => '调用DescribeSQLPatterns接口查看指定日期内AnalyticDB MySQL版集群下的SQL Pattern列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            ."\n"
                            .'> - 仅支持查看最近14天的数据。例如：当前时间为2021-11-22T12:00:00Z，最早可以查询到2021-11-09T12:00:00Z的数据。'."\n"
                            .'> - 查询开始时间和查询结束时间的间隔不能大于24小时。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-09-30T00:10:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            .'> 查询结束时间需晚于查询开始时间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-09-30T00:15:00Z',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"AverageQueryTime","Type":"Asc"}]`。其中：'."\n"
                            .'- `Field`表示排序字段。取值说明：'."\n"
                            .'    - `PatternCreationTime`：查询时间范围内，Pattern的最早提交时间。'."\n"
                            .'    - `AverageQueryTime`：查询时间范围内，Pattern的平均总耗时。'."\n"
                            .'    - `MaxQueryTime`：查询时间范围内，Pattern的最大总耗时。'."\n"
                            .'    - `AverageExecutionTime`: 查询时间范围内，Pattern的平均执行耗时。'."\n"
                            .'    - `MaxExecutionTime`: 查询时间范围内，Pattern的最大执行耗时。'."\n"
                            .'    - `AveragePeakMemory`: 查询时间范围内，Pattern的平均峰值内存。'."\n"
                            .'    - `MaxPeakMemory`: 查询时间范围内，Pattern的最大峰值内存。'."\n"
                            .'    - `AverageScanSize`: 查询时间范围内，Pattern的平均数据读取量。'."\n"
                            .'    - `MaxScanSize`: 查询时间范围内，Pattern的最大数据读取量。'."\n"
                            .'    - `QueryCount`: 查询时间范围内，Pattern的执行次数。'."\n"
                            .'    - `FailedCount`: 查询时间范围内，Pattern的失败次数。'."\n"
                            ."\n"
                            .'- `Type`表示排序方式。取值说明（取值不区分大小写）：'."\n"
                            .'    - `Asc`：升序排序。'."\n"
                            .'    - `Desc`： 降序排序。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"Field":"AverageQueryTime","Type":"Asc"}]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。'."\n"
                            .'> 本参数不填写，默认为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值说明：'."\n"
                            .'- **30**'."\n"
                            .'- **50**'."\n"
                            .'- **100**'."\n"
                            ."\n"
                            .'> 本参数不填写，默认为**30**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置下载文件的文件标题以及部分错误信息的语言，取值说明：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '列表信息。',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PatternDetails' => [
                                'description' => 'SQL Pattern的详细信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SQLPattern' => [
                                            'description' => 'SQL Pattern的具体语句。',
                                            'type' => 'string',
                                            'example' => 'SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)',
                                        ],
                                        'PatternId' => [
                                            'description' => 'SQL Pattern的ID。',
                                            'type' => 'string',
                                            'example' => '5575924945138******',
                                        ],
                                        'User' => [
                                            'description' => '提交Pattern相关的SQL数据库用户名。',
                                            'type' => 'string',
                                            'example' => 'reporter',
                                        ],
                                        'AccessIp' => [
                                            'description' => '提交Pattern相关的SQL客户端IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.xx.xx',
                                        ],
                                        'Tables' => [
                                            'description' => 'SQL Pattern扫描的列表。',
                                            'type' => 'string',
                                            'example' => 'tpch.orders',
                                        ],
                                        'PatternCreationTime' => [
                                            'description' => '查询时间范围内，Pattern的最早提交时间。单位：毫秒。',
                                            'type' => 'string',
                                            'example' => '2021-11-12 03:06:00',
                                        ],
                                        'AverageQueryTime' => [
                                            'description' => '查询时间范围内，Pattern的平均总耗时。单位：毫秒。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '4',
                                        ],
                                        'MaxQueryTime' => [
                                            'description' => '查询时间范围内，Pattern的最大总耗时。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2341',
                                        ],
                                        'AverageExecutionTime' => [
                                            'description' => '查询时间范围内，Pattern的平均执行时间。单位：毫秒。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '234.78',
                                        ],
                                        'MaxExecutionTime' => [
                                            'description' => '查询时间范围内，Pattern的最大执行时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2142',
                                        ],
                                        'AveragePeakMemory' => [
                                            'description' => '查询时间范围内，Pattern的平均峰值内存。单位：Byte。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '234.22',
                                        ],
                                        'MaxPeakMemory' => [
                                            'description' => 'Pattern相关SQL的最大峰值内存。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234149',
                                        ],
                                        'AverageScanSize' => [
                                            'description' => '查询时间范围内，Pattern的平均数据读取量。单位：Byte。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '234149.23',
                                        ],
                                        'MaxScanSize' => [
                                            'description' => 'Pattern相关SQL的最大数据读取量。单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234149',
                                        ],
                                        'QueryCount' => [
                                            'description' => '查询时间范围内，Pattern的执行次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '345',
                                        ],
                                        'FailedCount' => [
                                            'description' => '查询时间范围内，Pattern的失败次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234',
                                        ],
                                        'Blockable' => [
                                            'description' => '能否拦截当前SQL Pattern的运行。取值说明：'."\n"
                                                .'* **true**：支持拦截。'."\n"
                                                .'* **false**：不支持拦截。'."\n"
                                                .'> 目前AnalyticDB MySQL版仅支持Select和Insert相关语句的拦截。'."\n"
                                                ."\n",
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"PatternDetails\\": [\\n    {\\n      \\"SQLPattern\\": \\"SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)\\",\\n      \\"PatternId\\": \\"5575924945138******\\",\\n      \\"User\\": \\"reporter\\",\\n      \\"AccessIp\\": \\"192.168.xx.xx\\",\\n      \\"Tables\\": \\"tpch.orders\\",\\n      \\"PatternCreationTime\\": \\"2021-11-12 03:06:00\\",\\n      \\"AverageQueryTime\\": 4,\\n      \\"MaxQueryTime\\": 2341,\\n      \\"AverageExecutionTime\\": 234.78,\\n      \\"MaxExecutionTime\\": 2142,\\n      \\"AveragePeakMemory\\": 234.22,\\n      \\"MaxPeakMemory\\": 234149,\\n      \\"AverageScanSize\\": 234149.23,\\n      \\"MaxScanSize\\": 234149,\\n      \\"QueryCount\\": 345,\\n      \\"FailedCount\\": 234,\\n      \\"Blockable\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSQLPatternsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <PatternDetails>\\n        <SQLPattern>SELECT * FROM KEPLER_META_NODE_STATIC_INFO WHERE elastic_node = ? OR (elastic_node = ? AND enable = ?)</SQLPattern>\\n        <PatternId>5575924945138******</PatternId>\\n        <User>reporter</User>\\n        <AccessIp>192.168.xx.xx</AccessIp>\\n        <Tables>tpch.orders</Tables>\\n        <PatternCreationTime>2021-11-12 03:06:00</PatternCreationTime>\\n        <AverageQueryTime>4</AverageQueryTime>\\n        <MaxQueryTime>2341</MaxQueryTime>\\n        <AverageExecutionTime>234.78</AverageExecutionTime>\\n        <MaxExecutionTime>2142</MaxExecutionTime>\\n        <AveragePeakMemory>234.22</AveragePeakMemory>\\n        <MaxPeakMemory>234149</MaxPeakMemory>\\n        <AverageScanSize>234149.23</AverageScanSize>\\n        <MaxScanSize>234149</MaxScanSize>\\n        <QueryCount>345</QueryCount>\\n        <FailedCount>234</FailedCount>\\n        <Blockable>true</Blockable>\\n    </PatternDetails>\\n    <RequestId>6BE0EDD1-0DE6-3EB6-81BF-BFE4F2******</RequestId>\\n</DescribeSQLPatternsResponse>","errorExample":""}]',
            'title' => '查询SQL模式列表',
        ],
        'DescribePatternPerformance' => [
            'summary' => '调用DescribePatternPerformance接口查看指定时间段内SQL Pattern的各指标（如查询时间、平均内存消耗）详情。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-****************',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            ."\n"
                            .'> - 仅支持查看最近14天内的数据。例如：当前日期为北京时间11月22日，最早可以查询到北京时间11月9日（UTC时间：2021-11-08T16:00:00Z)的数据，若查询时间早于11月9日（UTC时间：2021-11-08T16:00:00Z)，返回值为空。'."\n"
                            .'> - 查询开始时间和查询结束时间的间隔不能大于24小时。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-11-18T00:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。'."\n"
                            .'> 查询结束时间需晚于查询开始时间。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-11-18T18:05:00Z',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PatternId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL Pattern的ID。'."\n"
                            .'> 您可以调用[DescribeSQLPatterns](~~321868~~)接口查看指定时间内目标AnalyticDB MySQL集群下所有的SQL Pattern列表信息，包括SQL Pattern的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3847585356974******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '列表。',
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-11-18T18:05Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '210f47011634026610213529******',
                            ],
                            'StartTime' => [
                                'description' => '查询开始时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-11-18T00:00Z',
                            ],
                            'Performances' => [
                                'description' => '性能指标列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '查询的性能指标项。取值说明：'."\n"
                                                .'- **AnalyticDB_PatternQueryCount**：Pattern相关查询的总次数。'."\n"
                                                .'- **AnalyticDB_PatternQueryTime**：Pattern相关查询的总耗时。'."\n"
                                                .'- **AnalyticDB_PatternExecutionTime**：Pattern相关查询的执行耗时。'."\n"
                                                .'- **AnalyticDB_PatternPeakMemory**：Pattern相关查询的峰值内存。'."\n"
                                                .'- **AnalyticDB_PatternScanSize**：Pattern相关查询的数据读取量。',
                                            'type' => 'string',
                                            'example' => 'AnalyticDB_PatternQueryCount',
                                        ],
                                        'Unit' => [
                                            'description' => '性能指标项对应的单位。取值说明：'."\n"
                                                .'- 当性能指标项为查询时间相关（即`Key`值为`AnalyticDB_PatternQueryTime`或`AnalyticDB_PatternExecutionTime`）时，该返回值为**ms**。'."\n"
                                                .'- 当性能指标项为峰值内存相关（即`Key`值为`AnalyticDB_PatternPeakMemory`）时，该返回值为**MB**。'."\n"
                                                .'- 当性能指标项为数据读取量（即`Key`值为`AnalyticDB_PatternScanSize`）时，该返回值为**MB**。'."\n"
                                                .'- 当性能指标项为查询次数（即`Key`值为`AnalyticDB_PatternQueryCount`）时，该返回值为空。',
                                            'type' => 'string',
                                            'example' => 'ms',
                                        ],
                                        'Series' => [
                                            'description' => '性能指标项下各性能值的详情。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Values' => [
                                                        'description' => '性能值列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '性能值。',
                                                            'type' => 'string',
                                                            'example' => '[               "2021-11-18 13:38:00",               "224"             ]',
                                                        ],
                                                    ],
                                                    'Name' => [
                                                        'description' => '性能值名称。取值说明：'."\n"
                                                            .'- 当`Key`值为`AnalyticDB_PatternQueryCount`时，该参数返回 `pattern_query_count`，即当前Pattern相关SQL的执行次数。'."\n"
                                                            .'- 当`Key`值为`AnalyticDB_PatternQueryTime`时，该参数返回：'."\n"
                                                            .'    -  `average_query_time`，即当前Pattern相关SQL的平均总耗时。'."\n"
                                                            .'    - `max_query_time`，即当前Pattern相关SQL的最大总耗时。'."\n"
                                                            .'- 当`Key`值为`AnalyticDB_PatternExecutionTime`时，该参数返回：'."\n"
                                                            .'    -  `average_execution_time`，即当前Pattern相关SQL的平均执行耗时。'."\n"
                                                            .'    - `max_execution_time`，即当前Pattern相关SQL的最大执行耗时。'."\n"
                                                            .'-  当`Key`值为`AnalyticDB_PatternPeakMemory`时，该参数返回：'."\n"
                                                            .'    - `average_peak_memory`，即当前Pattern相关SQL的平均峰值内存。'."\n"
                                                            .'    - `max_peak_memory`，即当前Pattern相关SQL的最大峰值内存。'."\n"
                                                            .'-  当`Key`值为`AnalyticDB_PatternScanSize`时，该参数返回：'."\n"
                                                            .'    -  `average_scan_size`，即当前Pattern相关SQL的平均读取数据量。'."\n"
                                                            .'    - `max_scan_size`，即当前Pattern相关SQL的最大数据读取量。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'max_query_time',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-11-18T18:05Z\\",\\n  \\"RequestId\\": \\"210f47011634026610213529******\\",\\n  \\"StartTime\\": \\"2021-11-18T00:00Z\\",\\n  \\"Performances\\": [\\n    {\\n      \\"Key\\": \\"AnalyticDB_PatternQueryCount\\",\\n      \\"Unit\\": \\"ms\\",\\n      \\"Series\\": [\\n        {\\n          \\"Values\\": [\\n            \\"[               \\\\\\"2021-11-18 13:38:00\\\\\\",               \\\\\\"224\\\\\\"             ]\\"\\n          ],\\n          \\"Name\\": \\"max_query_time\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribePatternPerformanceResponse>\\n    <EndTime>2021-11-18T18:05Z</EndTime>\\n    <RequestId>210f47011634026610213529******</RequestId>\\n    <StartTime>2021-11-18T00:00Z</StartTime>\\n    <Performances>\\n        <Key>AnalyticDB_PatternQueryCount</Key>\\n        <Unit>ms</Unit>\\n        <Series>\\n            <Values>[               \\"2021-11-18 13:38:00\\",               \\"224\\"             ]</Values>\\n            <Name>max_query_time</Name>\\n        </Series>\\n    </Performances>\\n</DescribePatternPerformanceResponse>","errorExample":""}]',
            'title' => '查询模式性能',
        ],
        'EnableAdviceService' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1q10xxzq2z4****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '调用结果的信息。取值说明：'."\n"
                                    .'- 请求正常，返回**Success**。 '."\n"
                                    .'- 请求异常，返回具体异常信息。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E1745C03-7CCE-55CF-932E-08121AAFA6AF',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"E1745C03-7CCE-55CF-932E-08121AAFA6AF\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableAdviceServiceResponse>\\n    <Message>Success</Message>\\n    <RequestId>E1745C03-7CCE-55CF-932E-08121AAFA6AF</RequestId>\\n</EnableAdviceServiceResponse>","errorExample":""}]',
            'title' => '开通建议服务',
            'summary' => '用EnableAdviceService来开启建议服务。',
        ],
        'ApplyAdviceById' => [
            'summary' => '调用ApplyAdviceById接口应用一条优化建议。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6g8w25jacm7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'regionId',
                        'description' => '地域ID。'."\n"
                            .'> 您可以通过[DescribeRegions](~~143074~~)查看可用的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AdviceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AdviceId',
                        'description' => '建议ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0baf1f52-53df-487f-8292-99a03716****',
                    ],
                ],
                [
                    'name' => 'AdviceDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AdviceDate',
                        'description' => '建议生成的日期。格式：yyyyMMdd（UTC时间）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20221101',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Execution Status',
                                'description' => '应用建议执行结果。取值说明：'."\n"
                                    .'- 请求正常，返回**SUCCESS**。 '."\n"
                                    .'- 请求异常，返回具体异常错误信息。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'SUCCESS' => 'SUCCESS',
                                    '报错信息' => '报错信息',
                                ],
                                'example' => 'SUCCESS',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5DC10091-348D-12B1-906D-AB49D658012E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"5DC10091-348D-12B1-906D-AB49D658012E\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyAdviceByIdResponse>\\n    <Message>SUCCESS</Message>\\n    <RequestId>5DC10091-348D-12B1-906D-AB49D658012E</RequestId>\\n</ApplyAdviceByIdResponse>","errorExample":""}]',
            'title' => '应用优化建议',
        ],
        'BatchApplyAdviceByIdList' => [
            'summary' => '用BatchApplyAdviceByIdList接口批量应用多条优化建议。',
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
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6g8w25jacm7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'regionId',
                        'description' => '地域ID，通过[DescribeRegions](~~143074~~)查看可用的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AdviceIdList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待批量应用的建议ID列表，多个建议ID之间用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c2589ff3-e86c-4f19-80c8-2aeb7dd9****,53414470-ebf4-4a53-a312-8a1ad8fd****,6e8dce84-fec8-4b0b-9c04-b0cea12c****,b3b9703d-55ca-47e0-96dd-6a4a9dbf****',
                    ],
                ],
                [
                    'name' => 'AdviceDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AdviceDate',
                        'description' => '建议生成的日期。格式：yyyyMMdd（UTC时间）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20221115',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Execution Status',
                                'description' => '批量应用建议执行结果。取值说明：'."\n"
                                    .'- 请求正常，返回**SUCCESS**。 '."\n"
                                    .'- 请求异常，返回具体异常错误信息。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '86F92D26-B774-5FA1-8E53-82CBEEEBB012',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"86F92D26-B774-5FA1-8E53-82CBEEEBB012\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchApplyAdviceByIdListResponse>\\n    <Message>SUCCESS</Message>\\n    <RequestId>86F92D26-B774-5FA1-8E53-82CBEEEBB012</RequestId>\\n</BatchApplyAdviceByIdListResponse>","errorExample":""}]',
            'title' => '批量应用优化建议',
        ],
        'DescribeAdviceServiceEnabled' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-2ze0vp0j6t3to****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Message',
                                'description' => '调用结果的信息。取值说明：'."\n"
                                    .'- 请求正常，返回**Success**。 '."\n"
                                    .'- 请求异常，返回具体异常信息。',
                                'type' => 'string',
                                'example' => '[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E031AABF-BD56-5966-A063-4283EF18DB45',
                            ],
                            'Result' => [
                                'title' => 'Advice Service Enabled',
                                'description' => '建议服务是否开启。取值说明：'."\n"
                                    .'- 开启，返回**True**。 '."\n"
                                    .'- 关闭，返回**False**。',
                                'type' => 'boolean',
                                'example' => 'False',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****\\",\\n  \\"RequestId\\": \\"E031AABF-BD56-5966-A063-4283EF18DB45\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdviceServiceEnabledResponse>\\n    <Message>[Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****</Message>\\n    <RequestId>E031AABF-BD56-5966-A063-4283EF18DB45</RequestId>\\n    <Result>false</Result>\\n</DescribeAdviceServiceEnabledResponse>","errorExample":""}]',
            'title' => '查询建议服务是否开启',
            'summary' => '用DescribeAdviceServiceEnabled来查询建议服务是否开启。',
        ],
        'DescribeAppliedAdvices' => [
            'summary' => '调用DescribeAppliedAdvices接口来显示已应用的优化建议。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '73895',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6g8w25jacm7****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'RegionId',
                        'description' => '地域ID。'."\n"
                            .'> 您可通过接口[DescribeRegions](~~143074~~)查看可用的地域ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'StartTime',
                        'description' => '查询建议的开始日期，格式为yyyyMMdd（UTC时间）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20220811',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'EndTime',
                        'description' => '查询建议的结束日期，格式为yyyyMMdd（UTC时间）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20220824',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Lang',
                        'description' => '设置建议的显示语言，取值说明：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageNumber',
                        'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AdviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SchemaTableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Items' => [
                                'title' => 'Items',
                                'description' => '详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '建议列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AdviceId' => [
                                            'title' => 'AdviceId',
                                            'description' => '建议ID。',
                                            'type' => 'string',
                                            'example' => '7417db9c-914d-43f3-a123-4d0e448f****',
                                        ],
                                        'SubmitTime' => [
                                            'title' => 'SubmitTime',
                                            'description' => '建议下发的时间，格式：yyMMddHHmm（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2208131600',
                                        ],
                                        'SubmitStatus' => [
                                            'title' => 'SubmitStatus',
                                            'description' => '建议的下发状态。'."\n"
                                                .'取值说明：'."\n"
                                                .'- **SUCCEED**：成功。'."\n"
                                                .'- **FAILED**：失败。',
                                            'type' => 'string',
                                            'example' => 'SUCCEED',
                                        ],
                                        'SQL' => [
                                            'title' => 'SQL',
                                            'description' => '应用建议的SQL语句。',
                                            'type' => 'string',
                                            'example' => 'alter table `schema1`.`table1` drop key col1_1_idx',
                                        ],
                                        'RollbackSQL' => [
                                            'title' => 'RollbackSQL',
                                            'description' => '回滚建议的SQL语句。',
                                            'type' => 'string',
                                            'example' => 'alter table `schema1`.`table1` add key col1_1_idx(col1)',
                                        ],
                                        'JobStatus' => [
                                            'title' => 'JobStatus',
                                            'description' => '执行建议的任务的状态。'."\n"
                                                .'取值说明：'."\n"
                                                .'- **SUCCEED**：成功。'."\n"
                                                .'- **FAILED**：失败。',
                                            'type' => 'string',
                                            'example' => 'SUCCEED',
                                        ],
                                        'Benefit' => [
                                            'title' => 'Benefit',
                                            'description' => '建议的收益。',
                                            'type' => 'string',
                                            'example' => '节省0.4 GB的存储空间',
                                        ],
                                        'BuildSQL' => [
                                            'title' => 'Benefit',
                                            'description' => '执行Build任务的SQL语句。',
                                            'type' => 'string',
                                            'example' => 'build table `schema1`.`table1`',
                                        ],
                                        'TotalCount' => [
                                            'title' => 'TotalCount',
                                            'description' => '返回的建议总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'PageSize' => [
                                            'title' => 'PageSize',
                                            'description' => '每页记录数，取值：'."\n"
                                                .'- **30**（默认值）'."\n"
                                                .'- **50**'."\n"
                                                .'- **100**',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'PageNumber' => [
                                            'title' => 'PageNumber',
                                            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'SchemaName' => [
                                            'type' => 'string',
                                        ],
                                        'TableName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '84489769-3065-5A28-A4CB-977CD426F1C3',
                            ],
                            'TotalCount' => [
                                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'SchemaTableNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"AdviceId\\": \\"7417db9c-914d-43f3-a123-4d0e448f****\\",\\n      \\"SubmitTime\\": \\"2208131600\\",\\n      \\"SubmitStatus\\": \\"SUCCEED\\",\\n      \\"SQL\\": \\"alter table `schema1`.`table1` drop key col1_1_idx\\",\\n      \\"RollbackSQL\\": \\"alter table `schema1`.`table1` add key col1_1_idx(col1)\\",\\n      \\"JobStatus\\": \\"SUCCEED\\",\\n      \\"Benefit\\": \\"节省0.4 GB的存储空间\\",\\n      \\"BuildSQL\\": \\"build table `schema1`.`table1`\\",\\n      \\"TotalCount\\": 1,\\n      \\"PageSize\\": 30,\\n      \\"PageNumber\\": 1,\\n      \\"SchemaName\\": \\"\\",\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"84489769-3065-5A28-A4CB-977CD426F1C3\\",\\n  \\"TotalCount\\": 1,\\n  \\"SchemaTableNames\\": [\\n    \\"\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAppliedAdvicesResponse>\\n    <Items>\\n        <AdviceId>7417db9c-914d-43f3-a123-4d0e448f****</AdviceId>\\n        <SubmitTime>2022-08-20T16:00:00Z</SubmitTime>\\n        <SubmitStatus>SUCCEED</SubmitStatus>\\n        <SQL>alter table `schema1`.`table1` drop key col1_1_idx</SQL>\\n        <RollbackSQL>alter table `schema1`.`table1` add key col1_1_idx(col1)</RollbackSQL>\\n        <JobStatus>SUCCEED</JobStatus>\\n        <Benefit>节省0.4GB空间</Benefit>\\n        <BuildSQL>build table `schema1`.`table1`</BuildSQL>\\n        <TotalCount>1</TotalCount>\\n        <PageSize>30</PageSize>\\n        <PageNumber>1</PageNumber>\\n    </Items>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <RequestId>84489769-3065-5A28-A4CB-977CD426F1C3</RequestId>\\n    <TotalCount>1</TotalCount>\\n</DescribeAppliedAdvicesResponse>","errorExample":""}]',
            'title' => '显示已采纳的优化',
        ],
        'DescribeAvailableAdvices' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '73942',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp198m028ih55****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'RegionId',
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看可用地域的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AdviceDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AdviceDate',
                        'description' => '建议的生成日期，格式为yyyyMMdd（UTC时间）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '20221124',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Lang',
                        'description' => '设置建议的显示语言，取值说明：'."\n"
                            .'- **zh**：简体中文（默认语言）。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageNumber',
                        'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AdviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '建议的类型，取值说明：'."\n"
                            .'- **INDEX**：索引优化。'."\n"
                            .'- **TIERING**：冷热数据优化。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Index',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，支持根据表名模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'you_table_name',
                    ],
                ],
                [
                    'name' => 'SchemaTableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名和表名的字符串拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tpch.lineitem',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：'."\n"
                            .'- `Field`表示排序字段。支持如下取值：'."\n"
                            .'    - `TableSchema`：表所属的数据库名。'."\n"
                            .'    - `TableName`：表名。'."\n"
                            .'    - `AccessCount`：表被访问的次数。'."\n"
                            .'- `Type`表示排序方式。支持如下取值：'."\n"
                            .'    - `Asc`：升序排序。'."\n"
                            .'    - `Desc`： 降序排序。'."\n"
                            ."\n"
                            .'> 若不设置参数，默认按照目标表所属的数据库升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"Field\\":\\"Benefit\\",\\"Type\\":\\"Desc\\"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Items' => [
                                'title' => 'Items',
                                'description' => '详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '建议列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AdviceId' => [
                                            'title' => 'AdviceId',
                                            'description' => '建议ID。',
                                            'type' => 'string',
                                            'example' => 'dcd04135-0925-4aed-a5a7-e7d92cb1****',
                                        ],
                                        'AdviceDate' => [
                                            'title' => 'AdviceDate',
                                            'description' => '建议生成的时间，格式：yyyyMMdd（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '20221124',
                                        ],
                                        'AdviceType' => [
                                            'title' => 'AdviceType',
                                            'description' => '建议的类型，取值说明：'."\n"
                                                .'- **Index**：索引优化。'."\n"
                                                .'- **Tiering**：冷热数据优化。',
                                            'type' => 'string',
                                            'example' => 'Index',
                                        ],
                                        'SQL' => [
                                            'title' => 'SQL',
                                            'description' => '应用建议的SQL语句。',
                                            'type' => 'string',
                                            'example' => 'alter table `schema1`.`table1` drop key col1_1_idx',
                                        ],
                                        'Reason' => [
                                            'title' => 'Reason',
                                            'description' => '生成优化建议的原因。',
                                            'type' => 'string',
                                            'example' => '15天未使用，历史使用统计概率小于1%',
                                        ],
                                        'Benefit' => [
                                            'title' => 'Benefit',
                                            'description' => '建议的收益。',
                                            'type' => 'string',
                                            'example' => '节省0.4 GB的存储空间。',
                                        ],
                                        'TotalCount' => [
                                            'title' => 'TotalCount',
                                            'description' => '返回的建议总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'PageSize' => [
                                            'title' => 'PageSize',
                                            'description' => '每页记录数，取值：'."\n"
                                                .'- **30**（默认值）'."\n"
                                                .'- **50**'."\n"
                                                .'- **100**',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'PageNumber' => [
                                            'title' => 'PageNumber',
                                            'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'SchemaName' => [
                                            'description' => '数据库名。',
                                            'type' => 'string',
                                            'example' => 'adb_demo',
                                        ],
                                        'TableName' => [
                                            'description' => '表名。',
                                            'type' => 'string',
                                            'example' => 'test_table',
                                        ],
                                    ],
                                ],
                            ],
                            'PageNumber' => [
                                'title' => 'PageNumber',
                                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => 'PageSize',
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '96A55627-28E9-5E47-B8F6-D786BE551349',
                            ],
                            'TotalCount' => [
                                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '30',
                            ],
                            'SchemaTableNames' => [
                                'description' => '数据库名和表名的字符串拼接列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据库名和表名的字符串拼接。',
                                    'type' => 'string',
                                    'example' => '['."\n"
                                        .'  "tpch.lineitem",'."\n"
                                        .'  "tpch.partsupp",'."\n"
                                        .'  "tpch.orders"'."\n"
                                        .']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter.PageSize',
                        'errorMessage' => 'The PageSize parameter is required.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Items\\": [\\n    {\\n      \\"AdviceId\\": \\"dcd04135-0925-4aed-a5a7-e7d92cb1****\\",\\n      \\"AdviceDate\\": \\"20221124\\",\\n      \\"AdviceType\\": \\"Index\\",\\n      \\"SQL\\": \\"alter table `schema1`.`table1` drop key col1_1_idx\\",\\n      \\"Reason\\": \\"15天未使用，历史使用统计概率小于1%\\",\\n      \\"Benefit\\": \\"节省0.4 GB的存储空间。\\",\\n      \\"TotalCount\\": 30,\\n      \\"PageSize\\": 30,\\n      \\"PageNumber\\": 1,\\n      \\"SchemaName\\": \\"adb_demo\\",\\n      \\"TableName\\": \\"test_table\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"RequestId\\": \\"96A55627-28E9-5E47-B8F6-D786BE551349\\",\\n  \\"TotalCount\\": 30,\\n  \\"SchemaTableNames\\": [\\n    \\"[\\\\n  \\\\\\"tpch.lineitem\\\\\\",\\\\n  \\\\\\"tpch.partsupp\\\\\\",\\\\n  \\\\\\"tpch.orders\\\\\\"\\\\n]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAvailableAdvicesResponse>\\n    <Items>\\n        <AdviceId>dcd04135-0925-4aed-a5a7-e7d92cb1****</AdviceId>\\n        <AdviceDate>20221124</AdviceDate>\\n        <AdviceType>Index</AdviceType>\\n        <SQL>alter table `schema1`.`table1` drop key col1_1_idx</SQL>\\n        <Reason>15天未使用，历史使用统计概率小于1%</Reason>\\n        <Benefit>节省0.4GB空间</Benefit>\\n        <TotalCount>30</TotalCount>\\n        <PageSize>30</PageSize>\\n        <PageNumber>1</PageNumber>\\n    </Items>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <RequestId>96A55627-28E9-5E47-B8F6-D786BE551349</RequestId>\\n    <TotalCount>30</TotalCount>\\n</DescribeAvailableAdvicesResponse>","errorExample":""}]',
            'title' => '显示可用优化建议',
            'summary' => '用DescribeAvailableAdvices来显示可用优化建议。',
        ],
        'DisableAdviceService' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf67culrr26q2****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以通过[DescribeRegions](~~143074~~)查看可用地域的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '调用结果的信息。取值说明：'."\n"
                                    .'- 请求正常，返回**Success**。 '."\n"
                                    .'- 请求异常，返回具体异常信息。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '57EC6CCA-A582-572C-A33D-F61845CBC03C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"57EC6CCA-A582-572C-A33D-F61845CBC03C\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableAdviceServiceResponse>\\n    <Message>Success</Message>\\n    <RequestId>57EC6CCA-A582-572C-A33D-F61845CBC03C</RequestId>\\n</DisableAdviceServiceResponse>","errorExample":""}]',
            'title' => '关闭建议服务',
            'summary' => '用DisableAdviceService来关闭建议服务。',
        ],
        'DescribeDBClusterSpaceSummary' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Perth',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1u8c0mgfg58****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '25B56BC7-4978-40B3-9E48-4B7067******',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalSize' => [
                                        'description' => '总数据量，单位：Byte。'."\n"
                                            ."\n"
                                            .'> 计算公式为：总数据量 = 热数据总量 + 冷数据总量。',
                                        'type' => 'string',
                                        'example' => '8388608',
                                    ],
                                    'HotData' => [
                                        'description' => '热数据。',
                                        'type' => 'object',
                                        'properties' => [
                                            'TotalSize' => [
                                                'description' => '热数据总量，单位：Byte。'."\n"
                                                    ."\n"
                                                    .'> 计算公式为：热数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '4194304',
                                            ],
                                            'DataSize' => [
                                                'description' => '表记录数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'IndexSize' => [
                                                'description' => '普通索引数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'PrimaryKeyIndexSize' => [
                                                'description' => '主键索引数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'OtherSize' => [
                                                'description' => '其他，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                        ],
                                    ],
                                    'ColdData' => [
                                        'description' => '冷数据。',
                                        'type' => 'object',
                                        'properties' => [
                                            'TotalSize' => [
                                                'description' => '冷数据总量，单位：Byte。'."\n"
                                                    ."\n"
                                                    .'> 计算公式为：冷数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '4194304',
                                            ],
                                            'DataSize' => [
                                                'description' => '表记录数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'IndexSize' => [
                                                'description' => '普通索引数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'PrimaryKeyIndexSize' => [
                                                'description' => '主键索引数据量，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'OtherSize' => [
                                                'description' => '其他，单位：Byte。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                        ],
                                    ],
                                    'DataGrowth' => [
                                        'description' => '数据增长量。',
                                        'type' => 'object',
                                        'properties' => [
                                            'DayGrowth' => [
                                                'description' => '近1天增长量，单位：Byte。'."\n"
                                                    ."\n"
                                                    .'> 计算公式为：近1天增长量 = 当前总数据量 - 1天前总数据量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
                                            ],
                                            'WeekGrowth' => [
                                                'description' => '近7天日均增长量，单位：Byte。'."\n"
                                                    ."\n"
                                                    .'> 计算公式为：近7天日均增长量 = (当前总数据量 - 7天前总数据量) / 7。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1048576',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"25B56BC7-4978-40B3-9E48-4B7067******\\",\\n  \\"Data\\": {\\n    \\"TotalSize\\": \\"8388608\\",\\n    \\"HotData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"ColdData\\": {\\n      \\"TotalSize\\": 4194304,\\n      \\"DataSize\\": 1048576,\\n      \\"IndexSize\\": 1048576,\\n      \\"PrimaryKeyIndexSize\\": 1048576,\\n      \\"OtherSize\\": 1048576\\n    },\\n    \\"DataGrowth\\": {\\n      \\"DayGrowth\\": 1048576,\\n      \\"WeekGrowth\\": 1048576\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查看集群的空间概览',
            'summary' => '查看实例的空间概览信息，包括总数据量、热数据量、冷数据量、数据增长量等。',
        ],
        'DescribeTableAccessCount' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标表名。'."\n"
                            .'> 若该参数留空，则会返回当前日期内目标集群下所有表的使用频次数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CUSTOMER',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的日期，格式为<i>yyyy-MM-dd</i>（UTC时间）。'."\n"
                            .'> 仅支持查看30天内的数据。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-08-30',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：'."\n"
                            .'- `Field`表示排序字段。支持如下取值：'."\n"
                            .'    - `TableSchema`：表所属的数据库名。'."\n"
                            .'    - `TableName`：表名。'."\n"
                            .'    - `AccessCount`：表被访问的次数。'."\n"
                            .'- `Type`表示排序方式。支持如下取值：'."\n"
                            .'    - `Asc`：升序排序。'."\n"
                            .'    - `Desc`： 降序排序。'."\n"
                            ."\n"
                            .'> 若不设置参数，默认按照目标表所属的数据库升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"TableSchema","Type":"Asc"}]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值为任意正整数。默认为**30**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C242707A-01D1-54DA-A5F6-671557******',
                            ],
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => '表使用详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ReportDate' => [
                                            'description' => '表使用日期。',
                                            'type' => 'string',
                                            'example' => '2021-08-30',
                                        ],
                                        'TableSchema' => [
                                            'description' => '表所属的数据库。',
                                            'type' => 'string',
                                            'example' => 'tpch',
                                        ],
                                        'AccessCount' => [
                                            'description' => '表被访问的次数。',
                                            'type' => 'string',
                                            'example' => '6',
                                        ],
                                        'TableName' => [
                                            'description' => '表名。',
                                            'type' => 'string',
                                            'example' => 'CUSTOMER',
                                        ],
                                        'InstanceName' => [
                                            'description' => '表所属集群的集群ID。',
                                            'type' => 'string',
                                            'example' => 'am-bp1r053byu48p****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C242707A-01D1-54DA-A5F6-671557******\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"ReportDate\\": \\"2021-08-30\\",\\n      \\"TableSchema\\": \\"tpch\\",\\n      \\"AccessCount\\": \\"6\\",\\n      \\"TableName\\": \\"CUSTOMER\\",\\n      \\"InstanceName\\": \\"am-bp1r053byu48p****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTableAccessCountResponse>\\n    <RequestId>C242707A-01D1-54DA-A5F6-671557******</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <ReportDate>2021-08-30</ReportDate>\\n        <TableSchema>tpch</TableSchema>\\n        <AccessCount>6</AccessCount>\\n        <TableName>CUSTOMER</TableName>\\n        <InstanceName>am-bp1r053byu48p****</InstanceName>\\n    </Items>\\n</DescribeTableAccessCountResponse>","errorExample":""}]',
            'title' => '查询表访问统计信息',
            'summary' => '查看指定日期内AnalyticDB MySQL版集群下目标表或所有表的被访问次数。',
        ],
        'DescribeSqlPattern' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的日期，格式为<i>yyyy-MM-dd</i>（UTC时间）。'."\n"
                            .'> 仅支持查看30天内的数据。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-08-30',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"Pattern","Type":"Asc"}]`。其中：'."\n"
                            .'- `Field`表示排序字段。支持如下取值：'."\n"
                            .'    - `Pattern`：SQL Pattern。'."\n"
                            .'    - `AccessIP`：客户端IP。'."\n"
                            .'    - `User`：用户名。'."\n"
                            .'    - `QueryCount`：查询总数。'."\n"
                            .'    - `AvgPeakMemory`：平均峰值内存，单位：KB。'."\n"
                            .'    - `MaxPeakMemory`：最大峰值内存，单位：KB。'."\n"
                            .'    - `AvgCpuTime`：平均计算耗时，单位：ms。'."\n"
                            .'    - `MaxCpuTime`：最大计算耗时，单位：ms。'."\n"
                            .'    - `AvgStageCount`：平均Stage个数。'."\n"
                            .'    - `MaxStageCount`：最大Stage个数。'."\n"
                            .'    - `AvgTaskCount`：平均Task个数。'."\n"
                            .'    - `MaxTaskCount`：最大Task个数。'."\n"
                            .'    - `AvgScanSize`：平均扫描量，单位：KB。'."\n"
                            .'    - `MaxScanSize`：最大扫描量，单位：KB。'."\n"
                            ."\n"
                            .'- `Type`表示排序方式。支持如下取值：'."\n"
                            .'    - `Asc`：升序排序。'."\n"
                            .'    - `Desc`： 降序排序。'."\n"
                            ."\n"
                            .'> - 若不设置参数，默认按照`Pattern`字段升序排列。'."\n"
                            .'> - 若需要按照`AccessIP`字段排序，则`Type`参数必须设置为`accessip`；若需要按照`User`字段排序，则`Type`参数必须留空或设置为`user`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '[{"Field":"Pattern","Type":"Asc"}]',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型的最大值。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SqlPattern',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要包含的SQL Pattern的关键字。'."\n"
                            .'> 若该参数不填，默认返回目标集群在`StartTime`参数所设日期内的所有SQL Pattern详情。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定维度来聚合SQL Pattern。支持如下取值：'."\n"
                            .' - `user`：按用户维度聚合。'."\n"
                            .' - `accessip`：按访问IP来源聚合。'."\n"
                            ."\n"
                            .'> 若该参数不填，默认按照 `user`维度聚合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值为任意正整数。默认为**30**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看AnalyticDB MySQL版支持的地域和可用区信息，包括地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '详情。',
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => 'SQL Pattern详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AvgStageCount' => [
                                            'description' => '平均Stage个数。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'MaxCpuTime' => [
                                            'description' => '最大计算耗时，单位：ms。',
                                            'type' => 'string',
                                            'example' => '17',
                                        ],
                                        'AccessIP' => [
                                            'description' => '客户端IP。'."\n"
                                                .'> 仅当`Type`参数设置为`accessip`时，支持返回该参数。',
                                            'type' => 'string',
                                            'example' => '100.104.***.***',
                                        ],
                                        'AvgScanSize' => [
                                            'description' => '平均扫描量，单位：KB。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'MaxScanSize' => [
                                            'description' => '最大扫描量，单位：KB。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'MaxPeakMemory' => [
                                            'description' => '最大峰值内存，单位：KB。',
                                            'type' => 'string',
                                            'example' => '480096',
                                        ],
                                        'AvgCpuTime' => [
                                            'description' => '平均计算耗时，单位：ms。',
                                            'type' => 'string',
                                            'example' => '1.0625',
                                        ],
                                        'User' => [
                                            'description' => '用户名。'."\n"
                                                .'> 仅当`Type`参数留空或设置为`user`时，支持返回该参数。',
                                            'type' => 'string',
                                            'example' => 'test_acc',
                                        ],
                                        'AvgPeakMemory' => [
                                            'description' => '平均峰值内存，单位：KB。',
                                            'type' => 'string',
                                            'example' => '240048',
                                        ],
                                        'MaxStageCount' => [
                                            'description' => '最大Stage个数。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'MaxTaskCount' => [
                                            'description' => '最大Task个数。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'InstanceName' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'am-bp1r053byu48p****',
                                        ],
                                        'QueryCount' => [
                                            'description' => '查询总数。',
                                            'type' => 'string',
                                            'example' => '16',
                                        ],
                                        'ReportDate' => [
                                            'description' => '查询日期。',
                                            'type' => 'string',
                                            'example' => '2021-08-30',
                                        ],
                                        'Pattern' => [
                                            'description' => 'SQL Pattern。',
                                            'type' => 'string',
                                            'example' => 'SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1',
                                        ],
                                        'AvgTaskCount' => [
                                            'description' => '平均Task个数。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B6F2D1B4-2C9F-5622-B424-5E7965******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 30,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"AvgStageCount\\": \\"2\\",\\n      \\"MaxCpuTime\\": \\"17\\",\\n      \\"AccessIP\\": \\"100.104.***.***\\",\\n      \\"AvgScanSize\\": \\"0\\",\\n      \\"MaxScanSize\\": \\"0\\",\\n      \\"MaxPeakMemory\\": \\"480096\\",\\n      \\"AvgCpuTime\\": \\"1.0625\\",\\n      \\"User\\": \\"test_acc\\",\\n      \\"AvgPeakMemory\\": \\"240048\\",\\n      \\"MaxStageCount\\": \\"2\\",\\n      \\"MaxTaskCount\\": \\"2\\",\\n      \\"InstanceName\\": \\"am-bp1r053byu48p****\\",\\n      \\"QueryCount\\": \\"16\\",\\n      \\"ReportDate\\": \\"2021-08-30\\",\\n      \\"Pattern\\": \\"SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1\\",\\n      \\"AvgTaskCount\\": \\"2\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B6F2D1B4-2C9F-5622-B424-5E7965******\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSqlPatternResponse>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <AvgStageCount>2</AvgStageCount>\\n        <MaxCpuTime>17</MaxCpuTime>\\n        <AccessIP>100.104.***.***</AccessIP>\\n        <AvgScanSize>0</AvgScanSize>\\n        <MaxScanSize>0</MaxScanSize>\\n        <MaxPeakMemory>480096</MaxPeakMemory>\\n        <AvgCpuTime>1.0625</AvgCpuTime>\\n        <User>test_acc</User>\\n        <AvgPeakMemory>240048</AvgPeakMemory>\\n        <MaxStageCount>2</MaxStageCount>\\n        <MaxTaskCount>2</MaxTaskCount>\\n        <InstanceName>am-bp1r053byu48p****</InstanceName>\\n        <QueryCount>16</QueryCount>\\n        <ReportDate>2021-08-30</ReportDate>\\n        <Pattern>SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1</Pattern>\\n        <AvgTaskCount>2</AvgTaskCount>\\n    </Items>\\n    <RequestId>B6F2D1B4-2C9F-5622-B424-5E7965******</RequestId>\\n</DescribeSqlPatternResponse>","errorExample":""}]',
            'title' => '查询SQL模式',
            'summary' => '查看指定日期内AnalyticDB MySQL版集群下的SQL模板详情。',
        ],
        'DescribeVSwitches' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看专有网络ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp13h7uzhulpuxvnp****',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'VswId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-8vbpu1teend1qcosfojlz',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D65A809F-34CE-4550-9BC1-0ED21ETG380',
                            ],
                            'VSwitches' => [
                                'description' => '交换机列表。',
                                'type' => 'object',
                                'properties' => [
                                    'VSwitch' => [
                                        'description' => '交换机信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '交换机的状态，取值：'."\n"
                                                        .'**Pending**：配置中。'."\n"
                                                        .'**Available**：可用。',
                                                    'type' => 'string',
                                                    'example' => 'Available',
                                                ],
                                                'IsDefault' => [
                                                    'description' => '是否为默认交换机，取值：'."\n"
                                                        .'**true**：是默认交换机。'."\n"
                                                        .'**false**：不是默认交换机。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机的ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-25bcdxs7pv1****',
                                                ],
                                                'CidrBlock' => [
                                                    'description' => '交换机的IPv4网段。',
                                                    'type' => 'string',
                                                    'example' => '172.16.0.0/24',
                                                ],
                                                'RegionNo' => [
                                                    'description' => '交换机所属的地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '交换机的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-01-18T12:43:57Z',
                                                ],
                                                'AliUid' => [
                                                    'description' => 'RAM账号ID。',
                                                    'type' => 'string',
                                                    'example' => '195813423043****',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '交换机的修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-01-22T12:43:57Z',
                                                ],
                                                'Bid' => [
                                                    'description' => '用户渠道ID。',
                                                    'type' => 'string',
                                                    'example' => '2****',
                                                ],
                                                'IzNo' => [
                                                    'description' => '交换机所属的可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-k',
                                                ],
                                                'VSwitchName' => [
                                                    'description' => '交换机的名称。',
                                                    'type' => 'string',
                                                    'example' => 'vswitch',
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
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D65A809F-34CE-4550-9BC1-0ED21ETG380\\",\\n  \\"VSwitches\\": {\\n    \\"VSwitch\\": [\\n      {\\n        \\"Status\\": \\"Available\\",\\n        \\"IsDefault\\": false,\\n        \\"VSwitchId\\": \\"vsw-25bcdxs7pv1****\\",\\n        \\"CidrBlock\\": \\"172.16.0.0/24\\",\\n        \\"RegionNo\\": \\"cn-hangzhou\\",\\n        \\"GmtCreate\\": \\"2022-01-18T12:43:57Z\\",\\n        \\"AliUid\\": \\"195813423043****\\",\\n        \\"GmtModified\\": \\"2022-01-22T12:43:57Z\\",\\n        \\"Bid\\": \\"2****\\",\\n        \\"IzNo\\": \\"cn-hangzhou-k\\",\\n        \\"VSwitchName\\": \\"vswitch\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeVSwitchesResponse>\\n    <RequestId>D65A809F-34CE-4550-9BC1-0ED21ETG380</RequestId>\\n    <VSwitches>\\n        <VSwitch>\\n            <Status>Available</Status>\\n            <IsDefault>false</IsDefault>\\n            <VSwitchId>vsw-25bcdxs7pv1****</VSwitchId>\\n            <CidrBlock>172.16.0.0/24</CidrBlock>\\n            <RegionNo>cn-hangzhou</RegionNo>\\n            <GmtCreate>2022-01-18T12:43:57Z</GmtCreate>\\n            <AliUid>195813423043****</AliUid>\\n            <GmtModified>2022-01-22T12:43:57Z</GmtModified>\\n            <Bid>2****</Bid>\\n            <IzNo>cn-hangzhou-k</IzNo>\\n            <VSwitchName>vswitch</VSwitchName>\\n        </VSwitch>\\n    </VSwitches>\\n</DescribeVSwitchesResponse>","errorExample":""}]',
            'title' => '查询可组网信息',
            'summary' => '调用DescribeVSwitches接口查询交换机列表。',
        ],
        'MigrateDBCluster' => [
            'summary' => '调用MigrateDBCluster将AnalyticDB MySQL数仓版（3.0）迁移至AnalyticDB MySQL湖仓版（3.0）集群。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1xxxxxxxx47',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F0983B43-B2EC-536A-8791-142B5CF1E9B6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectDBInstanceState',
                        'errorMessage' => 'The specified instance state does not support this operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F0983B43-B2EC-536A-8791-142B5CF1E9B6\\"\\n}","type":"json"}]',
            'title' => '迁移集群',
        ],
        'DescribeTableStatistics' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'Perth',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '16754',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            ."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp183qgrwywa6****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0的正整数。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据指定字段进行排序，格式为JSON，是一个有序JSON数组，按输入数组的顺序进行复合排序，包含`Field`和`Type`两个字段，例如`[{ "Field":"TableName", "Type":"Asc" }]`。其中：'."\n"
                            .'* `Field`表示需要排序的字段名。支持排序的字段包括：TableName、ColdDataSize、DataSize、PrimaryKeyIndexSize、RowCount、IndexSize、SchemaName、PartitionCount。'."\n"
                            .'* `Type`表示排序类型，支持如下取值（取值均不区分大小写）：'."\n"
                            .'    * **Desc**：降序。'."\n"
                            .'    * **Asc**：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[ { "Field":"TableName", "Type":"Asc" } ]',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字，支持根据表名模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'you_table_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总记录数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '本页记录数。',
                                'type' => 'string',
                                'example' => '30',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4C4433FF-5D3A-4C3E-A19C-6D93B2******',
                            ],
                            'PageNumber' => [
                                'description' => '页数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'am-****************',
                            ],
                            'Items' => [
                                'type' => 'object',
                                'properties' => [
                                    'TableStatisticRecords' => [
                                        'description' => '表统计信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SchemaName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_schema',
                                                ],
                                                'TableName' => [
                                                    'description' => '表名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_table',
                                                ],
                                                'RowCount' => [
                                                    'description' => '表行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3',
                                                ],
                                                'DataSize' => [
                                                    'description' => '表记录数据量，单位：Byte。'."\n"
                                                        ."\n"
                                                        .'> 表记录数据量，不包含普通索引、主键索引的数据。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15592',
                                                ],
                                                'IndexSize' => [
                                                    'description' => '普通索引数据量，单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3076',
                                                ],
                                                'PrimaryKeyIndexSize' => [
                                                    'description' => '主键索引数据量，单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16340',
                                                ],
                                                'PartitionCount' => [
                                                    'description' => '分区数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'ColdDataSize' => [
                                                    'description' => '冷数据总量，单位：Byte。'."\n"
                                                        .'> 仅内核版本为3.1.3.4或以上集群才会返回该参数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'SpaceRatio' => [
                                                    'description' => '表空间占比，单位：%。'."\n"
                                                        ."\n"
                                                        .'> 计算公式为：表空间占比 = 表总数据量 / 实例总数据量 * 100。',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '66.23',
                                                ],
                                                'TotalSize' => [
                                                    'description' => '总数据量，单位：Byte。'."\n"
                                                        ."\n"
                                                        .'> 总数据量的计算，以下2个公式都成立。计算公式1：总数据量 = 热数据量 + 冷数据量，计算公式2：总数据量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1577',
                                                ],
                                                'HotDataSize' => [
                                                    'description' => '热数据量，单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1048576',
                                                ],
                                                'OtherSize' => [
                                                    'description' => '其他，单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1048576',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageSize\\": \\"30\\",\\n  \\"RequestId\\": \\"4C4433FF-5D3A-4C3E-A19C-6D93B2******\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"DBClusterId\\": \\"am-****************\\",\\n  \\"Items\\": {\\n    \\"TableStatisticRecords\\": [\\n      {\\n        \\"SchemaName\\": \\"test_schema\\",\\n        \\"TableName\\": \\"test_table\\",\\n        \\"RowCount\\": 3,\\n        \\"DataSize\\": 15592,\\n        \\"IndexSize\\": 3076,\\n        \\"PrimaryKeyIndexSize\\": 16340,\\n        \\"PartitionCount\\": 1,\\n        \\"ColdDataSize\\": 0,\\n        \\"SpaceRatio\\": 66.23,\\n        \\"TotalSize\\": 1577,\\n        \\"HotDataSize\\": 1048576,\\n        \\"OtherSize\\": 1048576\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeTableStatisticsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>4C4433FF-5D3A-4C3E-A19C-6D93B2******</RequestId>\\n    <PageSize>30</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <DBClusterId>am-****************</DBClusterId>\\n    <Items>\\n        <TableStatisticRecords>\\n            <TableName>test_table</TableName>\\n            <ColdDataSize>0</ColdDataSize>\\n            <DataSize>15592</DataSize>\\n            <PrimaryKeyIndexSize>16340</PrimaryKeyIndexSize>\\n            <IndexSize>3076</IndexSize>\\n            <RowCount>3</RowCount>\\n            <PartitionCount>1</PartitionCount>\\n            <SchemaName>test_schema</SchemaName>\\n        </TableStatisticRecords>\\n    </Items>\\n</DescribeTableStatisticsResponse>","errorExample":""}]',
            'title' => '查询表统计信息',
            'summary' => '查询目标AnalyticDB MySQL集群中的表信息统计详情。',
            'description' => '> 更多关于表信息统计的详情，请参见[监控信息](~~188721~~)。',
        ],
        'ModifyResubmitConfig' => [
            'summary' => '修改Resubmit配置',
            'methods' => [
                'get',
                'post',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL集群的详情，包括集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-uf6wjk5xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '作业投递规则。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'GroupName' => [
                                    'description' => '源资源组名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test2',
                                ],
                                'PeakMemory' => [
                                    'description' => '峰值内存。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '32',
                                ],
                                'QueryTime' => [
                                    'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '300',
                                ],
                                'ExceedMemoryException' => [
                                    'description' => '是否配置内存溢出异常。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                ],
                                'TargetGroupName' => [
                                    'description' => '目标资源组名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test_target_group',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
            'title' => '修改作业投递规则',
        ],
        'DescribeResubmitConfig' => [
            'summary' => '查询Resubmit配置',
            'methods' => [
                'get',
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929XXXX',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看目标地域下所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-8vbyw9awuj141haf9',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'> 您可以调用[DescribeDBResourceGroup](~~459446~~)接口查看指定集群的资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_group',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8D217417-BBA7-566C-9B9D-FFCBC86112B0',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                                    .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                                'type' => 'string',
                                'example' => 'am-8vbyw9awuj141haf9',
                            ],
                            'Rules' => [
                                'description' => '规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PeakMemory' => [
                                            'description' => '峰值内存。',
                                            'type' => 'string',
                                            'example' => '32',
                                        ],
                                        'QueryTime' => [
                                            'description' => 'SQL语句执行时长，单位：毫秒（ms）。',
                                            'type' => 'string',
                                            'example' => '300',
                                        ],
                                        'TargetGroupName' => [
                                            'description' => '目标资源组名称。',
                                            'type' => 'string',
                                            'example' => 'test_target_group',
                                        ],
                                        'ExceedMemoryException' => [
                                            'description' => '是否配置内存溢出异常。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'GroupName' => [
                                            'description' => '源资源组名称。',
                                            'type' => 'string',
                                            'example' => 'test_group',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D217417-BBA7-566C-9B9D-FFCBC86112B0\\",\\n  \\"DBClusterId\\": \\"am-8vbyw9awuj141haf9\\",\\n  \\"Rules\\": [\\n    {\\n      \\"PeakMemory\\": \\"32\\",\\n      \\"QueryTime\\": \\"300\\",\\n      \\"TargetGroupName\\": \\"test_target_group\\",\\n      \\"ExceedMemoryException\\": false,\\n      \\"GroupName\\": \\"test_group\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询作业投递规则',
        ],
        'DescribeSQAConfig' => [
            'summary' => '调用DescribeSQAConfig接口查询集群小查询加速的配置。',
            'methods' => [
                'get',
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~143074~~)接口查看指定AnalyticDB MySQL数仓版（3.0）支持的地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-8vbyw9awuj141haf9',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'> 您可以调用[DescribeDBResourceGroup](~~612410~~)接口查看指定集群的资源组信息，包括资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBE843D8-964D-5EA3-9D31-822125611B6E',
                            ],
                            'DBClusterId' => [
                                'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                                    .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域下AnalyticDB MySQL数仓版（3.0）集群ID。',
                                'type' => 'string',
                                'example' => 'am-8vbyw9awuj141haf9',
                            ],
                            'GroupName' => [
                                'description' => '资源组名称。',
                                'type' => 'string',
                                'example' => 'test_group',
                            ],
                            'SQAStatus' => [
                                'description' => '是否启用小查询加速。',
                                'type' => 'string',
                                'example' => 'off',
                                'enum' => [],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CBE843D8-964D-5EA3-9D31-822125611B6E\\",\\n  \\"DBClusterId\\": \\"am-8vbyw9awuj141haf9\\",\\n  \\"GroupName\\": \\"test_group\\",\\n  \\"SQAStatus\\": \\"off\\"\\n}","type":"json"}]',
            'title' => '查询小查询加速配置',
        ],
        'ModifySQAConfig' => [
            'summary' => '修改SQA配置',
            'methods' => [
                'get',
                'post',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查询目标地域中所有AnalyticDB MySQL数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-8vb369k7zxdt10tz0',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组名称。'."\n"
                            .'> 您可以调用[DescribeDBResourceGroup](~~459446~~)接口查看指定集群的资源组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SQAStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用小查询加速。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'off',
                        'enum' => [
                            'on',
                            'off',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '494486CE-6F49-574E-B304-29127EA12E36',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"494486CE-6F49-574E-B304-29127EA12E36\\"\\n}","type":"json"}]',
            'title' => '修改作业投递规则',
        ],
        'DescribeDBClusterSSL' => [
            'summary' => '调用DescribeDBClusterSSL接口查询集群的SSL配置情况。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '220651',
                'abilityTreeNodes' => [
                    'FEATUREadsG383TB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1ub9grke1****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '348303D8-6F42-5141-9B00-A6EECA1E37B6',
                            ],
                            'ExpireTime' => [
                                'description' => 'SSL 证书有效期。格式：yyyy-MM-ddTHH:mm:ssZ（UTC 时间）。',
                                'type' => 'string',
                                'example' => '2022-10-11T08:16:43Z',
                            ],
                            'ConnectionString' => [
                                'description' => '受SSL保护的连接地址。',
                                'type' => 'string',
                                'example' => 'am-d7oualxo05x4o5be872***.ads.aliyuncs.com',
                            ],
                            'SSLEnabled' => [
                                'description' => '是否开启SSL。'."\n"
                                    .'取值： '."\n"
                                    .'- true：开启。'."\n"
                                    .'- false：关闭。',
                                'type' => 'boolean',
                                'enumValueTitles' => [
                                    'true' => 'true',
                                    'false' => 'false',
                                ],
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"348303D8-6F42-5141-9B00-A6EECA1E37B6\\",\\n  \\"ExpireTime\\": \\"2022-10-11T08:16:43Z\\",\\n  \\"ConnectionString\\": \\"am-d7oualxo05x4o5be872***.ads.aliyuncs.com\\",\\n  \\"SSLEnabled\\": true\\n}","type":"json"}]',
            'title' => '查询ADB实例的SSL配置',
        ],
        'ModifyDBClusterSSL' => [
            'summary' => '调用ModifyDBClusterSSL接口修改集群的SSL链路配置。',
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
                'abilityTreeCode' => '216076',
                'abilityTreeNodes' => [
                    'FEATUREadsG383TB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AnalyticDB MySQL数仓版（3.0）集群ID。'."\n"
                            .'>您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1r053byu48p****',
                    ],
                ],
                [
                    'name' => 'EnableSSL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启或关闭SSL，取值：'."\n"
                            ."\n"
                            .'- true：开启'."\n"
                            .'- false: 关闭',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'true' => 'true',
                            'false' => 'false',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要创建或更新服务器证书的内网或外网连接地址。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'am-d7oualxo05x4o5be872***.ads.aliyuncs.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\"\\n}","type":"json"}]',
            'title' => '修改ADB实例的SSL配置',
        ],
        'DescribeExcessivePrimaryKeys' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '209775',
                'abilityTreeNodes' => [
                    'FEATUREadsDAZVRM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。'."\n"
                            ."\n"
                            .'> 您可以通过[DescribeDBClusters](~~129857~~)接口查看账号下AnalyticDB MySQL数仓版集群的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'am-bp1u8c0mgfg58****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            .'> 您可以调用[DescribeRegions](~~454314~~)接口查看指定AnalyticDB MySQL数仓版（3.0）集群的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式为<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2021-09-30T00:10Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式：<i>yyyy-MM-ddTHH:mm:ssZ</i>（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2023-05-15T07:15Z',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值范围如下：'."\n"
                            .'* **30**（默认值）。'."\n"
                            .'* **50**。'."\n"
                            .'* **100**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '20',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，取值为大于0且不超过Integer数据类型最大值的正整数。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置建议的显示语言，取值说明：'."\n"
                            .'- **zh（默认值）**：简体中文。'."\n"
                            .'- **en**：英文。'."\n"
                            .'- **ja**：日文。'."\n"
                            .'- **zh-tw**：繁体中文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将查询结果按指定字段进行排序。格式为JSON字符串，例如`[{"Field":"TableSchema","Type":"Asc"}]`。其中：'."\n"
                            .'- `Field`表示排序字段。支持如下取值：'."\n"
                            .'    - `TableSchema`：表所属的数据库名。'."\n"
                            .'    - `TableName`：表名。'."\n"
                            .'    - `AccessCount`：表被访问的次数。'."\n"
                            .'- `Type`表示排序方式。支持如下取值：'."\n"
                            .'    - `Asc`：升序排序。'."\n"
                            .'    - `Desc`： 降序排序。'."\n"
                            ."\n"
                            .'> 若不设置参数，默认按照目标表所属的数据库升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"Field":"TableName","Type":"Desc"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '返回的结果总数，取值为：大于等于0且不超过Integer数据类型的最大值，默认值为0。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '页码，取值为：大于0且不超过Integer数据类型的最大值，默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'maximum' => '2147483647',
                                'minimum' => '1',
                                'example' => '1',
                                'default' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页记录数，取值：'."\n"
                                    .'- **30**（默认值）'."\n"
                                    .'- **50**'."\n"
                                    .'- **100**',
                                'type' => 'integer',
                                'format' => 'int32',
                                'maximum' => '100',
                                'minimum' => '10',
                                'example' => '10',
                                'default' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AD222E9-E606-4A42-BF6D-8A4442913CEF',
                            ],
                            'DBClusterId' => [
                                'description' => '集群ID。'."\n"
                                    .'> 您可以调用[DescribeDBClusters](~~129857~~)接口查看数仓版（3.0）集群的集群ID。',
                                'type' => 'string',
                                'example' => 'am-bp11q28kvl688****',
                            ],
                            'Tables' => [
                                'description' => '表列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '检测结果列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'TableName' => [
                                            'description' => '表名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'SchemaName' => [
                                            'description' => '数据库名。',
                                            'type' => 'string',
                                            'example' => 'adb_demo',
                                        ],
                                        'ColumnCount' => [
                                            'description' => '总列数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '26',
                                        ],
                                        'PrimaryKeyCount' => [
                                            'description' => '主键字段个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'PrimaryKeyColumns' => [
                                            'description' => '主键字段列表。',
                                            'type' => 'string',
                                            'example' => 'id,date',
                                        ],
                                        'SpaceRatio' => [
                                            'description' => '表空间占比，单位：%。'."\n"
                                                ."\n"
                                                .'> 计算公式为：表空间占比 = (表总数据量 / 实例总数据量) * 100。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                        ],
                                        'TotalSize' => [
                                            'description' => '冷数据总量，单位：Byte。'."\n"
                                                ."\n"
                                                .'> 计算公式为：冷数据总量 = 表记录数据量 + 普通索引数据量 + 主键索引数据量 + 其他。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1073741824',
                                        ],
                                        'PrimaryKeyIndexSize' => [
                                            'description' => '主键索引数据量，单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2345',
                                        ],
                                    ],
                                ],
                            ],
                            'DetectionItems' => [
                                'description' => '检测项及检测结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '检测项及检测结果列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '检测项名。',
                                            'type' => 'string',
                                            'example' => '主键字段过多',
                                        ],
                                        'Message' => [
                                            'description' => '检测结果。',
                                            'type' => 'string',
                                            'example' => '检测到表存在主键过多的情况',
                                        ],
                                        'Status' => [
                                            'description' => '检测结果状态程度。',
                                            'type' => 'string',
                                            'example' => 'NORMAL'."\n"
                                                .'WARNING'."\n"
                                                .'CRITICAL',
                                        ],
                                    ],
                                ],
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "PolicyType": "AccountLevelIdentityBasedPolicy",'."\n"
                                    .'    "AuthPrincipalOwnerId": "1906102576997697",'."\n"
                                    .'    "EncodedDiagnosticMessage": "AQIBIAAAAOPdwKY2QLOvgMEc7SkkoJfj1kvZwsaRqNYMh10Tv0wTe0fCzaCdrvgazfNb0EnJKETgXyhR+3BIQjx9WAqZryejBsp1Bl4qI5En/D9dEhcXAtKCxCmE2kZCiEzpy8BoEUt+bs0DmlaGWO5xkEpttypLIB4rUhDvZd+zwPg4EXk4KSSWSWsurxtqDkKEMshKlQFBTKvJcNqPqHV6lwR4INiAGjIvK1ngXxN1O+6ORRB6A8YvztEOGywOk81ZmuNk0YrNy+qk7+UVDTHeXKsy8h9e/ePY/LMidj0RCmDpo/YpCumd0UGe0qEPe2U+UJAm/+UHlnEFLVg6BP3yIB5D++MCy7mgWm8Kwyhk62IeYly4hQ+5IpXjkh1GQXuDgLVVPVpxEek9n30vnCUL4KsaMgfa7dgojb+3TM8xGsD2zVK5STJNrsXclscIJEqyNXd7CBYiRJVZi1HPO6drN9WW0chLpCSTgjO8n0bNanZaxXKumW9PSwV58UoSFASeMWfZK3TLngX+oq8nGmnTwcJosVjfF4RGzAnS1IXt0Q9N2WHDnpwyLBU/nOz7Hsy8IZ+h+OVjsBTXSM9688/vOF707a5mNzpETvQeGRcua3A5livcKAM2cML0yeUs/Zyj/+BGqtVa+wektspDHC/CECh6R5lxQjRmUdPawY8VDs2onmdLuEH8DdmYt+Yv/jBFBUMWOyAluzkPYcX5nuQKouCIUJUFTSbsJsuH5CTIh7Ls5rbmkj+T1qTVz8gnDR8LxwaqoMSna+elXgVyOOxXtMkenVntsmoC3p/4G7yTPL1hu8JyWGIIvZHZGGLXGEH7FeSuMV8buKxPGFWG3arG8e9LGvDdz5dgTien4y6G5AQ0o1iQdXDos5VWdH3u7k5PrsvdEOpvMi6uSd8a42na80FsYlgGlwM5upydcWUC5Un2HCkJpT1xgk2L6shdVTrK6bidRrqE784FhW9bBQePzGaxSupPENZya0VUctRt+7uq3QwIn4y5jzjgX0E0jgmqPrgiVDjBesMQZYfGPCGysWYWYzfoh+G6V7N2VVGtNnGUwNWzM0WJBPONAgxPv+AmixFRCQ==",'."\n"
                                    .'    "AuthPrincipalType": "SubUser",'."\n"
                                    .'    "AuthPrincipalDisplayName": "202515810214480629",'."\n"
                                    .'    "NoPermissionType": "ImplicitDeny",'."\n"
                                    .'    "AuthAction": "adb:DescribeExcessivePrimaryKeys"'."\n"
                                    .'  }',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBCluster.NotFound',
                        'errorMessage' => 'The DBClusterId provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": \\"1\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"1AD222E9-E606-4A42-BF6D-8A4442913CEF\\",\\n  \\"DBClusterId\\": \\"am-bp11q28kvl688****\\",\\n  \\"Tables\\": [\\n    {\\n      \\"TableName\\": \\"test\\",\\n      \\"SchemaName\\": \\"adb_demo\\",\\n      \\"ColumnCount\\": 26,\\n      \\"PrimaryKeyCount\\": 1,\\n      \\"PrimaryKeyColumns\\": \\"id,date\\",\\n      \\"SpaceRatio\\": 20,\\n      \\"TotalSize\\": 1073741824,\\n      \\"PrimaryKeyIndexSize\\": 2345\\n    }\\n  ],\\n  \\"DetectionItems\\": [\\n    {\\n      \\"Name\\": \\"主键字段过多\\",\\n      \\"Message\\": \\"检测到表存在主键过多的情况\\",\\n      \\"Status\\": \\"NORMAL\\\\nWARNING\\\\nCRITICAL\\"\\n    }\\n  ],\\n  \\"AccessDeniedDetail\\": \\"{\\\\n    \\\\\\"PolicyType\\\\\\": \\\\\\"AccountLevelIdentityBasedPolicy\\\\\\",\\\\n    \\\\\\"AuthPrincipalOwnerId\\\\\\": \\\\\\"1906102576997697\\\\\\",\\\\n    \\\\\\"EncodedDiagnosticMessage\\\\\\": \\\\\\"AQIBIAAAAOPdwKY2QLOvgMEc7SkkoJfj1kvZwsaRqNYMh10Tv0wTe0fCzaCdrvgazfNb0EnJKETgXyhR+3BIQjx9WAqZryejBsp1Bl4qI5En/D9dEhcXAtKCxCmE2kZCiEzpy8BoEUt+bs0DmlaGWO5xkEpttypLIB4rUhDvZd+zwPg4EXk4KSSWSWsurxtqDkKEMshKlQFBTKvJcNqPqHV6lwR4INiAGjIvK1ngXxN1O+6ORRB6A8YvztEOGywOk81ZmuNk0YrNy+qk7+UVDTHeXKsy8h9e/ePY/LMidj0RCmDpo/YpCumd0UGe0qEPe2U+UJAm/+UHlnEFLVg6BP3yIB5D++MCy7mgWm8Kwyhk62IeYly4hQ+5IpXjkh1GQXuDgLVVPVpxEek9n30vnCUL4KsaMgfa7dgojb+3TM8xGsD2zVK5STJNrsXclscIJEqyNXd7CBYiRJVZi1HPO6drN9WW0chLpCSTgjO8n0bNanZaxXKumW9PSwV58UoSFASeMWfZK3TLngX+oq8nGmnTwcJosVjfF4RGzAnS1IXt0Q9N2WHDnpwyLBU/nOz7Hsy8IZ+h+OVjsBTXSM9688/vOF707a5mNzpETvQeGRcua3A5livcKAM2cML0yeUs/Zyj/+BGqtVa+wektspDHC/CECh6R5lxQjRmUdPawY8VDs2onmdLuEH8DdmYt+Yv/jBFBUMWOyAluzkPYcX5nuQKouCIUJUFTSbsJsuH5CTIh7Ls5rbmkj+T1qTVz8gnDR8LxwaqoMSna+elXgVyOOxXtMkenVntsmoC3p/4G7yTPL1hu8JyWGIIvZHZGGLXGEH7FeSuMV8buKxPGFWG3arG8e9LGvDdz5dgTien4y6G5AQ0o1iQdXDos5VWdH3u7k5PrsvdEOpvMi6uSd8a42na80FsYlgGlwM5upydcWUC5Un2HCkJpT1xgk2L6shdVTrK6bidRrqE784FhW9bBQePzGaxSupPENZya0VUctRt+7uq3QwIn4y5jzjgX0E0jgmqPrgiVDjBesMQZYfGPCGysWYWYzfoh+G6V7N2VVGtNnGUwNWzM0WJBPONAgxPv+AmixFRCQ==\\\\\\",\\\\n    \\\\\\"AuthPrincipalType\\\\\\": \\\\\\"SubUser\\\\\\",\\\\n    \\\\\\"AuthPrincipalDisplayName\\\\\\": \\\\\\"202515810214480629\\\\\\",\\\\n    \\\\\\"NoPermissionType\\\\\\": \\\\\\"ImplicitDeny\\\\\\",\\\\n    \\\\\\"AuthAction\\\\\\": \\\\\\"adb:DescribeExcessivePrimaryKeys\\\\\\"\\\\n  }\\"\\n}","type":"json"}]',
            'title' => '检测主键过多表',
            'summary' => '查看集群存在主键过多的表。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'adb.ap-southeast-7.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'adb.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'adb.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'adb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'adb.ap-northeast-2.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'adb.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'adb.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'adb.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'adb.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'adb.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'adb.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'adb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'adb.aliyuncs.com',
        ],
    ],
];
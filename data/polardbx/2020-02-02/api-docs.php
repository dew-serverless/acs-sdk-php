<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'polardbx',
        'version' => '2020-02-02',
    ],
    'directories' => [
        [
            'id' => 119060,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'CreateDBInstance',
                'DeleteDBInstance',
                'DescribeDBInstanceAttribute',
                'DescribeDBInstanceConfig',
                'DescribeDBInstances',
                'DescribeDBInstanceSSL',
                'DescribeDBInstanceTDE',
                'DescribeDBInstanceTopology',
                'DescribeDBInstanceViaEndpoint',
                'DescribeDBNodePerformance',
                'ModifyDBInstanceConfig',
                'ModifyDBInstanceDescription',
                'ReleaseInstancePublicConnection',
                'RestartDBInstance',
                'UpgradeDBInstanceKernelVersion',
                'ModifyDBInstanceClass',
                'DescribeDBInstanceHA',
                'UpdatePolarDBXInstanceNode',
            ],
        ],
        [
            'id' => 119019,
            'title' => '任务管理',
            'type' => 'directory',
            'children' => [
                'DescribeTasks',
                'DescribeScaleOutMigrateTaskList',
            ],
        ],
        [
            'id' => 119022,
            'title' => 'SSL加密',
            'type' => 'directory',
            'children' => [
                'UpdateDBInstanceSSL',
            ],
        ],
        [
            'id' => 119025,
            'title' => '参数管理',
            'type' => 'directory',
            'children' => [
                'ModifyParameter',
                'DescribeParameterTemplates',
                'DescribeParameters',
            ],
        ],
        [
            'id' => 119029,
            'title' => '备份管理',
            'type' => 'directory',
            'children' => [
                'CreateBackup',
                'DescribeBackupPolicy',
                'DescribeBackupSetList',
                'DescribeBinaryLogList',
                'UpdateBackupPolicy',
            ],
        ],
        [
            'id' => 119037,
            'title' => '数据安全',
            'type' => 'directory',
            'children' => [
                'UpdateDBInstanceTDE',
                'ModifySecurityIps',
                'DescribeUserEncryptionKeyList',
                'DescribeSecurityIps',
            ],
        ],
        [
            'id' => 119043,
            'title' => '账号管理',
            'type' => 'directory',
            'children' => [
                'CreateAccount',
                'CreateSuperAccount',
                'DeleteAccount',
                'DescribeAccountList',
                'ModifyAccountDescription',
            ],
        ],
        [
            'id' => 119049,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 119051,
            'title' => '数据库管理',
            'type' => 'directory',
            'children' => [
                'CreateDB',
                'DeleteDB',
                'DescribeCharacterSet',
                'DescribeDbList',
                'DescribeDistributeTableList',
                'ModifyDatabaseDescription',
            ],
        ],
        [
            'id' => 189406,
            'title' => '标签管理',
            'type' => 'directory',
            'children' => [
                'DescribeTags',
                'ListTagResources',
                'TagResources',
                'UntagResources',
                'SwitchDBInstanceHA',
            ],
        ],
        [
            'id' => 189465,
            'title' => '无标题232',
            'type' => 'directory',
            'children' => [
                'ResetAccountPassword',
                'ReleaseColdDataVolume',
                'ModifyDBInstanceConnectionString',
                'ModifyActiveOperationTasks',
                'ModifyActiveOperationMaintainConf',
                'ModifyAccountPrivilege',
                'EnableRightsSeparation',
                'DisableRightsSeparation',
                'DescribeEvents',
                'DescribeColdDataBasicInfo',
                'DescribeBackupSet',
                'AlignStoragePrimaryAzone',
                'AllocateColdDataVolume',
                'AllocateInstancePublicConnection',
                'CancelActiveOperationTasks',
                'ChangeResourceGroup',
                'CheckCloudResourceAuthorized',
                'DescribeActiveOperationMaintainConf',
                'DescribeActiveOperationTaskCount',
                'DescribeActiveOperationTasks',
                'DescribeArchiveTableList',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDBInstance' => [
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
                'abilityTreeCode' => '86227',
                'abilityTreeNodes' => [
                    'FEATUREdrdsIT76F2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例付费类型。'."\n"
                            ."\n"
                            .'- **PREPAY**：包年包月'."\n"
                            .'- **POSTPAY**：按量付费',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'PREPAY',
                    ],
                ],
                [
                    'name' => 'DBNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例节点数量，最小为2。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DBNodeClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点规格：'."\n"
                            ."\n"
                            .'- **polarx.x4.medium.2e**：2核8 GB'."\n"
                            .'- **polarx.x4.large.2e**：4核16 GB'."\n"
                            .'- **polarx.x8.large.2e**：4核32 GB'."\n"
                            .'- **polarx.x4.xlarge.2e**：8核32 GB'."\n"
                            .'- **polarx.x8.xlarge.2e**：8核64 GB'."\n"
                            .'- **polarx.x4.2xlarge.2e**：16核64 GB'."\n"
                            .'- **polarx.x8.2xlarge.2e**：16核128 GB'."\n"
                            .'- **polarx.x4.4xlarge.2e**：32核128 GB'."\n"
                            .'- **polarx.x8.4xlarge.2e**：32核256 GB'."\n"
                            .'- **polarx.st.8xlarge.2e**：60核470 GB'."\n"
                            .'- **polarx.st.12xlarge.2e**：90核720 GB',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'polarx.x4.2xlarge.2d',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等请求串，保持每次创建不同即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxx-xxx',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型，仅支持VPC网络。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc',
                    ],
                ],
                [
                    'name' => 'VPCId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-*****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-*********',
                    ],
                ],
                [
                    'name' => 'UsedTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预付费时，可以选择买几个月或者几年。'."\n"
                            ."\n"
                            .'> Period设置为Year时，该参数支持的取值为1、2、3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '收费周期，包年包月只能选Year、Month， 按量付费默认选择Hour。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Month',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可以为空，资源组ID，暂时不支持。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'null',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动续费，默认为true。'."\n"
                            ."\n"
                            .'- **true**：是'."\n"
                            .'- **false**：否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mysql引擎版本，5.7或者8.0。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5.7',
                    ],
                ],
                [
                    'name' => 'IsReadDBInstance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为只读实例。'."\n"
                            ."\n"
                            .'- **true**：是'."\n"
                            .'- **false**：否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PrimaryDBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果为只读实例，需要指定主实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-*********',
                    ],
                ],
                [
                    'name' => 'TopologyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拓扑类型：'."\n"
                            ."\n"
                            .'- **3azones**：三可用区；'."\n"
                            .'- **1azone**：单可用区。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3azones',
                    ],
                ],
                [
                    'name' => 'PrimaryZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shenzhen-e',
                    ],
                ],
                [
                    'name' => 'SecondaryZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '次可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shenzhen-a',
                    ],
                ],
                [
                    'name' => 'TertiaryZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第三可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shenzhen-e',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例可用区。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-a',
                    ],
                ],
                [
                    'name' => 'CnClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计算节点规格：'."\n"
                            ."\n"
                            .'- **polarx.x4.medium.2e**：2核8 GB'."\n"
                            .'- **polarx.x4.large.2e**：4核16 GB'."\n"
                            .'- **polarx.x8.large.2e**：4核32 GB'."\n"
                            .'- **polarx.x4.xlarge.2e**：8核32 GB'."\n"
                            .'- **polarx.x8.xlarge.2e**：8核64 GB'."\n"
                            .'- **polarx.x4.2xlarge.2e**：16核64 GB'."\n"
                            .'- **polarx.x8.2xlarge.2e**：16核128 GB'."\n"
                            .'- **polarx.x4.4xlarge.2e**：32核128 GB'."\n"
                            .'- **polarx.x8.4xlarge.2e**：32核256 GB'."\n"
                            .'- **polarx.st.8xlarge.2e**：60核470 GB'."\n"
                            .'- **polarx.st.12xlarge.2e**：90核720 GB',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'polarx.x4.medium.2e',
                    ],
                ],
                [
                    'name' => 'DnClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储节点规格：'."\n"
                            ."\n"
                            .'- **mysql.n4.medium.25**：2核8 GB'."\n"
                            .'- **mysql.n4.large.25**：4核16 GB'."\n"
                            .'- **mysql.x8.large.25**：4核32 GB'."\n"
                            .'- **mysql.n4.xlarge.25**：8核32 GB'."\n"
                            .'- **mysql.x8.xlarge.25**：8核64 GB'."\n"
                            .'- **mysql.n4.2xlarge.25**：16核64 GB'."\n"
                            .'- **mysql.x8.2xlarge.25**：16核128 GB'."\n"
                            .'- **mysql.x4.4xlarge.25**：32核128 GB'."\n"
                            .'- **mysql.x8.4xlarge.25**：32核256 GB'."\n"
                            .'- **mysql.st.8xlarge.25**：60核470 GB'."\n"
                            .'- **mysql.st.12xlarge.25**：90核720 GB',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mysql.n4.medium.25',
                    ],
                ],
                [
                    'name' => 'CNNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计算节点个数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DNNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储节点个数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'IsColumnarReadDBInstance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建的实例是否为列存只读实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Series',
                    'in' => 'query',
                    'schema' => [
                        'title' => '企业版: enterprise'."\n"
                            .'标准版: standard',
                        'description' => '企业版: enterprise'."\n"
                            .'标准版: standard',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enterprise',
                        'default' => 'enterprise',
                        'enum' => [
                            'enterprise',
                            'standard',
                        ],
                    ],
                ],
                [
                    'name' => 'DnStorageSpace',
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
                            'DBInstanceName' => [
                                'description' => '创建的实例名称。',
                                'type' => 'string',
                                'example' => 'pxc-*********',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'OrderId' => [
                                'description' => '订单号。',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBInstanceName\\": \\"pxc-*********\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"OrderId\\": \\"12345\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBInstanceResponse>\\n    <DBInstanceName>pxc-*********</DBInstanceName>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <OrderId>12345</OrderId>\\n</CreateDBInstanceResponse>","errorExample":""}]',
            'title' => '创建实例',
            'summary' => '调用CreateDBInstance接口创建PolarDB-X实例。',
        ],
        'DeleteDBInstance' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
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
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBInstanceResponse>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n</DeleteDBInstanceResponse>","errorExample":""}]',
            'title' => '删除实例',
            'summary' => '调用DeleteDBInstance接口删除实例。',
        ],
        'DescribeDBInstanceAttribute' => [
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
                'abilityTreeCode' => '86240',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzaxhezhs5***',
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
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'DBInstance' => [
                                'description' => '数据库实例信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '实例类型：'."\n"
                                            ."\n"
                                            .'- **ReadWrite**： 主实例；'."\n"
                                            .'- **ReadOnly**： 只读实例。',
                                        'type' => 'string',
                                        'example' => 'ReadWrite',
                                    ],
                                    'Status' => [
                                        'description' => '实例状态，详情请参见[实例状态表](~~339826~~)。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'RightsSeparationStatus' => [
                                        'description' => '三权分立状态：'."\n"
                                            ."\n"
                                            .'- **disabled**：未开启；'."\n"
                                            .'- **enabled**：开启；'."\n"
                                            .'- **processing**： 处理中；'."\n"
                                            .'- **unknown**：未知，可能是实例无法连接导致。',
                                        'type' => 'string',
                                        'example' => 'disabled',
                                    ],
                                    'DBNodeCount' => [
                                        'description' => '实例节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Expired' => [
                                        'description' => '是否过期：'."\n"
                                            ."\n"
                                            .'- **true**：过期；'."\n"
                                            .'- **false**：正常。',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-08-31T08:56:25.000+0000',
                                    ],
                                    'PayType' => [
                                        'description' => '实例付费方式，取值：'."\n"
                                            ."\n"
                                            .'- **Postpaid**：按量付费；'."\n"
                                            .'- **Prepaid**：包年包月。',
                                        'type' => 'string',
                                        'example' => 'Postpaid',
                                    ],
                                    'Port' => [
                                        'description' => '内网连接端口。',
                                        'type' => 'string',
                                        'example' => '3306',
                                    ],
                                    'LockMode' => [
                                        'description' => '实例锁定模式：'."\n"
                                            ."\n"
                                            .'- **Unlock**：正常；'."\n"
                                            .'- **ManualLock**：手动触发锁定；'."\n"
                                            .'- **LockByExpiration**：实例过期自动锁定；'."\n"
                                            .'- **LockByRestoration**：实例回滚前的自动锁定；'."\n"
                                            .'- **LockByDiskQuota**：实例空间满自动锁定；'."\n"
                                            .'- **LockReadInstanceByDiskQuota**：只读实例空间满自动锁定。',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'Description' => [
                                        'description' => '实例描述。',
                                        'type' => 'string',
                                        'example' => 'test instance',
                                    ],
                                    'ConnectionString' => [
                                        'description' => '内网连接信息。',
                                        'type' => 'string',
                                        'example' => 'pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com',
                                    ],
                                    'StorageUsed' => [
                                        'description' => '已经使用的存储，单位为B。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '17042505728',
                                    ],
                                    'ExpireDate' => [
                                        'description' => '到期时间。格式为yyyy-MM-ddTHH:mm:ss.sss+0000（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-08-31T16:00:00.000+0000',
                                    ],
                                    'CommodityCode' => [
                                        'description' => '实例商品种类，固定取值为drds_polarxpost_public_cn。',
                                        'type' => 'string',
                                        'example' => 'drds_polarxpost_public_cn',
                                    ],
                                    'MaintainStartTime' => [
                                        'description' => '实例可维护开始时间，此处为UTC时间，加8小时才是控制台上显示的可维护时间段。',
                                        'type' => 'string',
                                        'example' => '06:00',
                                    ],
                                    'DBInstanceType' => [
                                        'description' => '实例类型：'."\n"
                                            ."\n"
                                            .'- **ReadWrite**： 主实例；'."\n"
                                            .'- **ReadOnly**： 只读实例。',
                                        'type' => 'string',
                                        'example' => 'ReadWrite',
                                    ],
                                    'DBNodeClass' => [
                                        'description' => '实例节点规格。',
                                        'type' => 'string',
                                        'example' => 'polarx.x4.large.2e',
                                    ],
                                    'LatestMinorVersion' => [
                                        'description' => '当前实例支持的最新内核版本。',
                                        'type' => 'string',
                                        'example' => 'polarx-kernel_5.4.11-16301083_xcluster-20210805',
                                    ],
                                    'MaintainEndTime' => [
                                        'description' => '实例可维护结束时间，此处为UTC时间，加8小时为控制台上显示的可维护时间段。',
                                        'type' => 'string',
                                        'example' => '06:00',
                                    ],
                                    'DBType' => [
                                        'description' => '数据库类型，固定取值为polarx。',
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'RightsSeparationEnabled' => [
                                        'description' => '三权分立状态：'."\n"
                                            ."\n"
                                            .'- **false**：未开启'."\n"
                                            .'- **true**：开启',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'VPCId' => [
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-xxxxx',
                                    ],
                                    'MinorVersion' => [
                                        'description' => '当前内核版本。',
                                        'type' => 'string',
                                        'example' => 'polarx-kernel_5.4.11-16301083_xcluster-20210805',
                                    ],
                                    'RegionId' => [
                                        'description' => '实例所在地域。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Network' => [
                                        'description' => '实例的网络类型，仅支持取值VPC，表示专有网络。',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'DBVersion' => [
                                        'description' => '数据库版本。',
                                        'type' => 'string',
                                        'example' => '5.5',
                                    ],
                                    'VSwitchId' => [
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-********',
                                    ],
                                    'ZoneId' => [
                                        'description' => '实例所在可用区。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-a',
                                    ],
                                    'Engine' => [
                                        'description' => '数据库类型，固定取值为polarx。',
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'KindCode' => [
                                        'description' => '实例引擎版本，内部参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '18',
                                    ],
                                    'Id' => [
                                        'description' => '主实例的ID，如果没有返回此参数则表示该实例是主实例。',
                                        'type' => 'string',
                                        'example' => 'pxc-zkralxpc5d****',
                                    ],
                                    'DBNodes' => [
                                        'description' => '数据库节点信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ComputeNodeId' => [
                                                    'description' => '计算节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'pxc-i-********',
                                                ],
                                                'NodeClass' => [
                                                    'description' => '节点规格。',
                                                    'type' => 'string',
                                                    'example' => 'polarx.x4.large.2e',
                                                ],
                                                'DataNodeId' => [
                                                    'description' => '存储节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'pxc-xdb-xxxxxx',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '节点所在可用区名称。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-a',
                                                ],
                                                'Id' => [
                                                    'description' => '逻辑节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'pxi-*********',
                                                ],
                                                'RegionId' => [
                                                    'description' => '节点所在地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ConnAddrs' => [
                                        'description' => '连接地址信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '连接的种类，**VPC**为内网连接，**PUBLIC**为公网连接。',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-*********',
                                                ],
                                                'Port' => [
                                                    'description' => '连接端口号。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3306',
                                                ],
                                                'VPCId' => [
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-xxxxxx',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '连接地址。',
                                                    'type' => 'string',
                                                    'example' => 'polardbx-xxx.aliyuncs.com',
                                                ],
                                                'VpcInstanceId' => [
                                                    'description' => 'vpc 内部CloudInstanceId，可以忽略',
                                                    'type' => 'string',
                                                    'example' => 'pxc-zkralxpc5d****',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ReadDBInstances' => [
                                        'description' => '只读实例名称列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '只读实例名称。',
                                            'type' => 'string',
                                            'example' => 'pxr-*********',
                                        ],
                                    ],
                                    'ColumnarReadDBInstances' => [
                                        'description' => '列存只读实例信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '',
                                            'description' => '列存只读实例信息。',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'title' => '资源组ID',
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-*********',
                                    ],
                                    'TagSet' => [
                                        'title' => '标签集合',
                                        'description' => '标签集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'title' => '标签名称',
                                                    'description' => '标签名称。',
                                                    'type' => 'string',
                                                    'example' => 'key2',
                                                ],
                                                'Value' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'value2',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CnNodeCount' => [
                                        'description' => 'CN节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'DnNodeCount' => [
                                        'description' => 'DN节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'CnNodeClassCode' => [
                                        'description' => 'CN节点规格：'."\n"
                                            .'- **polarx.x4.medium.2e**：2核8G'."\n"
                                            .'- **polarx.x4.large.2e**：4核16G'."\n"
                                            .'- **polarx.x8.large.2e**：4核32G'."\n"
                                            .'- **polarx.x4.xlarge.2e**：8核32G'."\n"
                                            .'- **polarx.x8.xlarge.2e**：8核64G'."\n"
                                            .'- **polarx.x4.2xlarge.2e**：16核64G'."\n"
                                            .'- **polarx.x8.2xlarge.2e**：16核128G'."\n"
                                            .'- **polarx.x4.4xlarge.2e**：32核128G'."\n"
                                            .'- **polarx.x8.4xlarge.2e**：32核256G'."\n"
                                            .'- **polarx.st.8xlarge.2e**：60核470G'."\n"
                                            .'- **polarx.st.12xlarge.2e**：90核720G',
                                        'type' => 'string',
                                        'example' => 'polarx.x4.xlarge.2e',
                                    ],
                                    'DnNodeClassCode' => [
                                        'description' => 'DN节点规格：'."\n"
                                            .'- **mysql.n2.medium.25**：2核4G'."\n"
                                            .'- **mysql.n4.medium.25**：2核8G'."\n"
                                            .'- **mysql.x8.medium.25**：2核16G'."\n"
                                            .'- **mysql.n2.large.25**：4核8G'."\n"
                                            .'- **mysql.n4.large.25**：4核16G'."\n"
                                            .'- **mysql.x8.large.25**：4核32G'."\n"
                                            .'- **mysql.n2.xlarge.25**：8核16G'."\n"
                                            .'- **mysql.n4.xlarge.25**：8核32G'."\n"
                                            .'- **mysql.x8.xlarge.25**：8核64G'."\n"
                                            .'- **mysql.n4.2xlarge.25**：16核64G'."\n"
                                            .'- **mysql.x8.2xlarge.25**：16核128G'."\n"
                                            .'- **mysql.x4.4xlarge.25**：32核128G'."\n"
                                            .'- **mysql.x8.4xlarge.25**：32核256G'."\n"
                                            .'- **mysql.st.8xlarge.25**：60核470G'."\n"
                                            .'- **mysql.st.12xlarge.25**：90核720G',
                                        'type' => 'string',
                                        'example' => 'mysql.x8.large.25',
                                    ],
                                    'Series' => [
                                        'description' => '实例系列，取值如下：'."\n"
                                            ."\n"
                                            .'- **enterprise**：企业版'."\n"
                                            .'- **standard**：标准版',
                                        'type' => 'string',
                                        'example' => 'enterprise',
                                    ],
                                    'LTSVersions' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'LTS版本号。',
                                            'type' => 'string',
                                            'example' => 'X.X.X.X',
                                        ],
                                        'required' => true,
                                    ],
                                    'TopologyType' => [
                                        'title' => '拓扑类型：'."\n"
                                            ."\n"
                                            .'- **3azones**：三可用区；'."\n"
                                            .'- **1azone**：单可用区。',
                                        'description' => '拓扑类型：'."\n"
                                            ."\n"
                                            .'- **3azones**：三可用区；'."\n"
                                            .'- **1azone**：单可用区。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'required' => true,
                                        'example' => '3azones',
                                        'pattern' => '',
                                        'default' => '3azones',
                                    ],
                                    'PrimaryZone' => [
                                        'title' => '主可用区。',
                                        'description' => '主可用区。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'required' => true,
                                        'example' => 'cn-shenzhen-e',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'SecondaryZone' => [
                                        'title' => '次可用区。',
                                        'description' => '次可用区。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'cn-shenzhen-a',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'TertiaryZone' => [
                                        'title' => '第三可用区。',
                                        'description' => '第三可用区。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'cn-shenzhen-e',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'DifferentDNSpec' => [
                                        'description' => '实例的DN节点之间的规格是否相同，取值如下：'."\n"
                                            ."\n"
                                            .'- true：规格不同'."\n"
                                            .'- false：规格相同',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [],
                                        'example' => 'false',
                                    ],
                                    'ColumnarInstanceName' => [
                                        'description' => '列存引擎实例名称。',
                                        'type' => 'string',
                                        'example' => 'xxxx',
                                    ],
                                    'CanNotCreateColumnar' => [
                                        'description' => '是否支持列存索引功能。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SpecCategory' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"DBInstance\\": {\\n    \\"Type\\": \\"ReadWrite\\",\\n    \\"Status\\": \\"Running\\",\\n    \\"RightsSeparationStatus\\": \\"disabled\\",\\n    \\"DBNodeCount\\": 2,\\n    \\"Expired\\": \\"false\\",\\n    \\"CreateTime\\": \\"2021-08-31T08:56:25.000+0000\\",\\n    \\"PayType\\": \\"Postpaid\\",\\n    \\"Port\\": \\"3306\\",\\n    \\"LockMode\\": \\"Unlock\\",\\n    \\"Description\\": \\"test instance\\",\\n    \\"ConnectionString\\": \\"pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com\\",\\n    \\"StorageUsed\\": 17042505728,\\n    \\"ExpireDate\\": \\"2022-08-31T16:00:00.000+0000\\",\\n    \\"CommodityCode\\": \\"drds_polarxpost_public_cn\\",\\n    \\"MaintainStartTime\\": \\"06:00\\",\\n    \\"DBInstanceType\\": \\"ReadWrite\\",\\n    \\"DBNodeClass\\": \\"polarx.x4.large.2e\\",\\n    \\"LatestMinorVersion\\": \\"polarx-kernel_5.4.11-16301083_xcluster-20210805\\",\\n    \\"MaintainEndTime\\": \\"06:00\\",\\n    \\"DBType\\": \\"polarx\\",\\n    \\"RightsSeparationEnabled\\": false,\\n    \\"VPCId\\": \\"vpc-xxxxx\\",\\n    \\"MinorVersion\\": \\"polarx-kernel_5.4.11-16301083_xcluster-20210805\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Network\\": \\"VPC\\",\\n    \\"DBVersion\\": \\"5.5\\",\\n    \\"VSwitchId\\": \\"vsw-********\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n    \\"Engine\\": \\"polarx\\",\\n    \\"KindCode\\": 18,\\n    \\"Id\\": \\"pxc-zkralxpc5d****\\",\\n    \\"DBNodes\\": [\\n      {\\n        \\"ComputeNodeId\\": \\"pxc-i-********\\",\\n        \\"NodeClass\\": \\"polarx.x4.large.2e\\",\\n        \\"DataNodeId\\": \\"pxc-xdb-xxxxxx\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n        \\"Id\\": \\"pxi-*********\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ],\\n    \\"ConnAddrs\\": [\\n      {\\n        \\"Type\\": \\"VPC\\",\\n        \\"VSwitchId\\": \\"vsw-*********\\",\\n        \\"Port\\": 3306,\\n        \\"VPCId\\": \\"vpc-xxxxxx\\",\\n        \\"ConnectionString\\": \\"polardbx-xxx.aliyuncs.com\\",\\n        \\"VpcInstanceId\\": \\"pxc-zkralxpc5d****\\"\\n      }\\n    ],\\n    \\"ReadDBInstances\\": [\\n      \\"pxr-*********\\"\\n    ],\\n    \\"ColumnarReadDBInstances\\": [\\n      \\"xxx\\"\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-*********\\",\\n    \\"TagSet\\": [\\n      {\\n        \\"Key\\": \\"key2\\",\\n        \\"Value\\": \\"value2\\"\\n      }\\n    ],\\n    \\"CnNodeCount\\": 2,\\n    \\"DnNodeCount\\": 2,\\n    \\"CnNodeClassCode\\": \\"polarx.x4.xlarge.2e\\",\\n    \\"DnNodeClassCode\\": \\"mysql.x8.large.25\\",\\n    \\"Series\\": \\"enterprise\\",\\n    \\"LTSVersions\\": [\\n      \\"X.X.X.X\\"\\n    ],\\n    \\"TopologyType\\": \\"3azones\\",\\n    \\"PrimaryZone\\": \\"cn-shenzhen-e\\",\\n    \\"SecondaryZone\\": \\"cn-shenzhen-a\\",\\n    \\"TertiaryZone\\": \\"cn-shenzhen-e\\",\\n    \\"DifferentDNSpec\\": false,\\n    \\"ColumnarInstanceName\\": \\"xxxx\\",\\n    \\"CanNotCreateColumnar\\": true,\\n    \\"SpecCategory\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceAttributeResponse>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <DBInstance>\\n        <Type>ReadWrite</Type>\\n        <Status>Running</Status>\\n        <RightsSeparationStatus>disabled</RightsSeparationStatus>\\n        <DBNodeCount>2</DBNodeCount>\\n        <Expired>false</Expired>\\n        <CreateTime>2021-08-31T08:56:25.000+0000</CreateTime>\\n        <PayType>Postpaid</PayType>\\n        <Port>3306</Port>\\n        <LockMode>Unlock</LockMode>\\n        <Description>test instance</Description>\\n        <ConnectionString>pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com</ConnectionString>\\n        <StorageUsed>17042505728</StorageUsed>\\n        <ExpireDate>2022-08-31T16:00:00.000+0000</ExpireDate>\\n        <CommodityCode>drds_polarxpost_public_cn</CommodityCode>\\n        <MaintainStartTime>06:00</MaintainStartTime>\\n        <DBInstanceType>ReadWrite</DBInstanceType>\\n        <DBNodeClass>polarx.x4.large.2e</DBNodeClass>\\n        <LatestMinorVersion>polarx-kernel_5.4.11-16301083_xcluster-20210805</LatestMinorVersion>\\n        <MaintainEndTime>06:00</MaintainEndTime>\\n        <DBType>polarx</DBType>\\n        <RightsSeparationEnabled>false</RightsSeparationEnabled>\\n        <VPCId>vpc-xxxxx</VPCId>\\n        <MinorVersion>polarx-kernel_5.4.11-16301083_xcluster-20210805</MinorVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Network>VPC</Network>\\n        <DBVersion>5.5</DBVersion>\\n        <VSwitchId>vsw-********</VSwitchId>\\n        <ZoneId>cn-hangzhou-a</ZoneId>\\n        <Engine>polarx</Engine>\\n        <KindCode>18</KindCode>\\n        <Id>pxc-zkralxpc5d****</Id>\\n        <DBNodes>\\n            <ComputeNodeId>pxc-i-********</ComputeNodeId>\\n            <NodeClass>polarx.x4.large.2e</NodeClass>\\n            <DataNodeId>pxc-xdb-xxxxxx</DataNodeId>\\n            <ZoneId>cn-hangzhou-a</ZoneId>\\n            <Id>pxi-*********</Id>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </DBNodes>\\n        <ConnAddrs>\\n            <Type>VPC</Type>\\n            <VSwitchId>vsw-*********</VSwitchId>\\n            <Port>3306</Port>\\n            <VPCId>vpc-xxxxxx</VPCId>\\n            <ConnectionString>polardbx-xxx.aliyuncs.com</ConnectionString>\\n            <VpcInstanceId>pxc-zkralxpc5d****</VpcInstanceId>\\n        </ConnAddrs>\\n        <ReadDBInstances>pxr-*********</ReadDBInstances>\\n        <ResourceGroupId>rg-*********</ResourceGroupId>\\n        <TagSet>\\n            <Key>key2</Key>\\n            <Value>value2</Value>\\n        </TagSet>\\n        <CnNodeCount>2</CnNodeCount>\\n        <DnNodeCount>2</DnNodeCount>\\n        <CnNodeClassCode>polarx.x4.xlarge.2e</CnNodeClassCode>\\n        <DnNodeClassCode>mysql.x8.large.25</DnNodeClassCode>\\n        <Series>enterprise</Series>\\n        <LTSVersions>X.X.X.X</LTSVersions>\\n        <TopologyType>3azones</TopologyType>\\n        <PrimaryZone>cn-shenzhen-e</PrimaryZone>\\n        <SecondaryZone>cn-shenzhen-a</SecondaryZone>\\n        <TertiaryZone>cn-shenzhen-e</TertiaryZone>\\n    </DBInstance>\\n</DescribeDBInstanceAttributeResponse>","errorExample":""}]',
            'title' => '查询实例属性',
            'summary' => '调用DescribeDBInstanceAttribute接口获取实例属性。',
        ],
        'DescribeDBInstanceConfig' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86241',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-*********',
                    ],
                ],
                [
                    'name' => 'ConfigName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置标识， 默认：htap。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'htap',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'ConfigName' => [
                                        'description' => '配置Key。',
                                        'type' => 'string',
                                        'example' => 'htap',
                                    ],
                                    'DbInstanceName' => [
                                        'description' => '实例ID。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'pxc-sprcym7g7w****',
                                    ],
                                    'ConfigValue' => [
                                        'description' => '配置项，说明如下：'."\n"
                                            ."\n"
                                            .'- attendHtapList：开启Htap的实例列表。'."\n"
                                            .'- autoAttendHtap：是否自动把新建的只读实例加入到HTAP列表里。'."\n"
                                            .'- delayExecutionStrategy：当只读延迟到达storageDelayThreshold设定的值时，将只读流量切回主实例。默认值为1，取值为0或1。'."\n"
                                            .'- enableConsistentReplicaRead：是否开启一致性读。'."\n"
                                            .'- storageDelayThreshold：只读实例延迟阈值，默认3s，范围为：0~3600*24。'."\n"
                                            .'- enableHtap：是否开始Htap。'."\n"
                                            .'- masterReadWeight：主节点读权重，设置100表示100%的流量打到主节点，范围为：0~100。',
                                        'type' => 'string',
                                        'example' => '{\\"attendHtapList\\":[\\"pxc-hzruyzes08****\\"],\\"autoAttendHtap\\":\\"true\\",\\"delayExecutionStrategy\\":1,\\"enableConsistentReplicaRead\\":true,\\"enableHtap\\":\\"true\\",\\"masterReadWeight\\":100,\\"storageDelayThreshold\\":3}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"ConfigName\\": \\"htap\\",\\n    \\"DbInstanceName\\": \\"pxc-sprcym7g7w****\\",\\n    \\"ConfigValue\\": \\"{\\\\\\\\\\\\\\"attendHtapList\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"pxc-hzruyzes08****\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"autoAttendHtap\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"delayExecutionStrategy\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"enableConsistentReplicaRead\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"enableHtap\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"masterReadWeight\\\\\\\\\\\\\\":100,\\\\\\\\\\\\\\"storageDelayThreshold\\\\\\\\\\\\\\":3}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceConfigResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Data>\\n        <ConfigName>htap</ConfigName>\\n        <DbInstanceName>pxc-sprcym7g7w****</DbInstanceName>\\n        <ConfigValue>{\\\\\\"attendHtapList\\\\\\":[\\\\\\"pxc-hzruyzes08****\\\\\\"],\\\\\\"autoAttendHtap\\\\\\":\\\\\\"true\\\\\\",\\\\\\"delayExecutionStrategy\\\\\\":1,\\\\\\"enableConsistentReplicaRead\\\\\\":true,\\\\\\"enableHtap\\\\\\":\\\\\\"true\\\\\\",\\\\\\"masterReadWeight\\\\\\":100,\\\\\\"storageDelayThreshold\\\\\\":3}</ConfigValue>\\n    </Data>\\n</DescribeDBInstanceConfigResponse>","errorExample":""}]',
            'title' => '查询实例配置参数',
            'summary' => '调用DescribeDBInstanceConfig接口获取实例配置参数。',
        ],
        'DescribeDBInstances' => [
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
                'abilityTreeCode' => '86242',
                'abilityTreeNodes' => [
                    'FEATUREdrdsQ69M1H',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                        'enum' => [
                            'cn-shenzhen',
                            'cn-beijing',
                            'cn-wulanchabu',
                            'cn-shenzhen-finance-1',
                            'cn-north-2-gov-1',
                            'cn-qingdao',
                            'cn-shanghai',
                            'cn-shanghai-finance-1',
                            'cn-hongkong',
                            'cn-hangzhou-finance',
                            'ap-southeast-1',
                            'eu-central-1',
                            'cn-huhehaote',
                            'ap-southeast-5',
                            'us-east-1',
                            'cn-zhangjiakou',
                            'us-west-1',
                            'cn-hangzhou',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页下标：从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                        'pattern' => '^\\d+$',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页面大小，取值如下：'."\n"
                            ."\n"
                            .'- 30'."\n"
                            .'- 50'."\n"
                            .'- 100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '5',
                        'enumValueTitles' => [],
                        'example' => '30',
                        'pattern' => '^\\d+$',
                        'default' => '30',
                        'enum' => [
                            '30',
                            '50',
                            '100',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmyst47******',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签过滤条件',
                        'description' => '标签列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"TagKey\\":\\"test\\",\\"TagValue\\":\\"test-value\\"}]',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dinga93c84f4d***',
                    ],
                ],
                [
                    'name' => 'Series',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '实例系列，取值如下：'."\n"
                            ."\n"
                            .'- **enterprise**：企业版'."\n"
                            .'- **standard**：标准版',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enterprise',
                    ],
                ],
                [
                    'name' => 'MustHasCdc',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否必须有日志引擎。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息列表。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'PageNumber' => [
                                'description' => '页面下标。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalNumber' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'DBInstances' => [
                                'description' => '实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '实例类型：'."\n"
                                                ."\n"
                                                .'- **ReadWrite**： 主实例'."\n"
                                                .'- **ReadOnly**： 只读实例',
                                            'type' => 'string',
                                            'example' => 'ReadWrite',
                                        ],
                                        'Status' => [
                                            'description' => '实例状态，详情请参见[实例状态表](~~339826~~)。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'CommodityCode' => [
                                            'description' => '商品类型。',
                                            'type' => 'string',
                                            'example' => 'drds_polarxpre_public_cn',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '过期时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-01T16:00:00.000+0000',
                                        ],
                                        'Expired' => [
                                            'description' => '是否过期。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-01T03:49:50.000+0000',
                                        ],
                                        'PayType' => [
                                            'description' => '实例付费方式，取值：'."\n"
                                                ."\n"
                                                .'- **Postpaid**：按量付费；'."\n"
                                                .'- **Prepaid**：包年包月。',
                                            'type' => 'string',
                                            'example' => 'Prepaid',
                                        ],
                                        'LockReason' => [
                                            'description' => '锁定原因。',
                                            'type' => 'string',
                                            'example' => '欠费',
                                        ],
                                        'DBType' => [
                                            'description' => '数据库类型。',
                                            'type' => 'string',
                                            'example' => 'polarx',
                                        ],
                                        'LockMode' => [
                                            'description' => '是否锁定。',
                                            'type' => 'string',
                                            'example' => 'Unlock',
                                        ],
                                        'VPCId' => [
                                            'description' => 'VPC ID。',
                                            'type' => 'string',
                                            'example' => 'VPCID',
                                        ],
                                        'MinorVersion' => [
                                            'description' => '当前内核版本。',
                                            'type' => 'string',
                                            'example' => 'polarx-kernel_5.4.12-16349923_xcluster-20210926',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Network' => [
                                            'description' => '网络类型。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'DBVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '5.7',
                                        ],
                                        'Description' => [
                                            'description' => '数据库描述。',
                                            'type' => 'string',
                                            'example' => '测试',
                                        ],
                                        'NodeClass' => [
                                            'description' => '规格。',
                                            'type' => 'string',
                                            'example' => 'polarx.x4.large.2e',
                                        ],
                                        'StorageUsed' => [
                                            'description' => '存储使用。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '40658534400',
                                        ],
                                        'NodeCount' => [
                                            'description' => '节点个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'ZoneId' => [
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-g',
                                        ],
                                        'Engine' => [
                                            'description' => '引擎型号。',
                                            'type' => 'string',
                                            'example' => 'polarx',
                                        ],
                                        'Id' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'pxc-hzr2yeov******',
                                        ],
                                        'Nodes' => [
                                            'description' => '节点列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '节点列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ZoneId' => [
                                                        'description' => '可用区ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-g',
                                                    ],
                                                    'Id' => [
                                                        'description' => '节点ID。',
                                                        'type' => 'string',
                                                        'example' => 'pxi-zd89wrzqh******',
                                                    ],
                                                    'ClassCode' => [
                                                        'description' => '实例规格。',
                                                        'type' => 'string',
                                                        'example' => 'polarx.x4.large.2e',
                                                    ],
                                                    'RegionId' => [
                                                        'description' => '区域ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou-g-aliyun',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ReadDBInstances' => [
                                            'description' => '只读实例列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '只读实例名称。',
                                                'type' => 'string',
                                                'example' => 'pxr-hzr2yeov******',
                                            ],
                                        ],
                                        'ColumnarReadDBInstances' => [
                                            'description' => '列存只读实例信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列存只读实例信息。',
                                                'type' => 'string',
                                                'example' => 'xxxxxxxx',
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'title' => '资源组ID',
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-xxxxxx',
                                        ],
                                        'TagSet' => [
                                            'title' => '标签集合',
                                            'description' => '标签集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签集合。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '标签名称',
                                                        'description' => '标签名称。',
                                                        'type' => 'string',
                                                        'example' => 'key1',
                                                    ],
                                                    'Value' => [
                                                        'title' => '标签值',
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'DBInstanceName' => [
                                            'title' => '数据库实例名称',
                                            'description' => '数据库实例名称。',
                                            'type' => 'string',
                                            'example' => 'pxc-xxxxx',
                                        ],
                                        'DnNodeCount' => [
                                            'description' => 'DN节点个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'CnNodeCount' => [
                                            'description' => 'CN节点个数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'CnNodeClassCode' => [
                                            'description' => 'CN节点规格。'."\n"
                                                ."\n"
                                                .'- **polarx.x4.medium.2e**：2核8G'."\n"
                                                .'- **polarx.x4.large.2e**：4核16G'."\n"
                                                .'- **polarx.x8.large.2e**：4核32G'."\n"
                                                .'- **polarx.x4.xlarge.2e**：8核32G'."\n"
                                                .'- **polarx.x8.xlarge.2e**：8核64G'."\n"
                                                .'- **polarx.x4.2xlarge.2e**：16核64G'."\n"
                                                .'- **polarx.x8.2xlarge.2e**：16核128G'."\n"
                                                .'- **polarx.x4.4xlarge.2e**：32核128G'."\n"
                                                .'- **polarx.x8.4xlarge.2e**：32核256G'."\n"
                                                .'- **polarx.st.8xlarge.2e**：60核470G'."\n"
                                                .'- **polarx.st.12xlarge.2e**：90核720G',
                                            'type' => 'string',
                                            'example' => 'polarx.x4.large.2e',
                                        ],
                                        'DnNodeClassCode' => [
                                            'description' => 'DN节点规格。'."\n"
                                                .'- **mysql.n2.medium.25**：2核4G'."\n"
                                                .'- **mysql.n4.medium.25**：2核8G'."\n"
                                                .'- **mysql.x8.medium.25**：2核16G'."\n"
                                                .'- **mysql.n2.large.25**：4核8G'."\n"
                                                .'- **mysql.n4.large.25**：4核16G'."\n"
                                                .'- **mysql.x8.large.25**：4核32G'."\n"
                                                .'- **mysql.n2.xlarge.25**：8核16G'."\n"
                                                .'- **mysql.n4.xlarge.25**：8核32G'."\n"
                                                .'- **mysql.x8.xlarge.25**：8核64G'."\n"
                                                .'- **mysql.n4.2xlarge.25**：16核64G'."\n"
                                                .'- **mysql.x8.2xlarge.25**：16核128G'."\n"
                                                .'- **mysql.x4.4xlarge.25**：32核128G'."\n"
                                                .'- **mysql.x8.4xlarge.25**：32核256G'."\n"
                                                .'- **mysql.st.8xlarge.25**：60核470G'."\n"
                                                .'- **mysql.st.12xlarge.25**：90核720G',
                                            'type' => 'string',
                                            'example' => 'mysql.n4.medium.25',
                                        ],
                                        'Series' => [
                                            'description' => '实例系列，取值如下：'."\n"
                                                ."\n"
                                                .'- **enterprise**：企业版'."\n"
                                                .'- **standard**：标准版',
                                            'type' => 'string',
                                            'example' => 'enterprise',
                                        ],
                                        'ContainBinlogX' => [
                                            'description' => '是否包含多流日志服务，取值如下：'."\n"
                                                ."\n"
                                                .'- **true**：是'."\n"
                                                .'- **false**：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SupportBinlogX' => [
                                            'description' => '当前实例是否支持多流，取值如下：'."\n"
                                                ."\n"
                                                .'- **true**：是'."\n"
                                                .'- **false**：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CdcInstanceName' => [
                                            'description' => '日志节点名称。',
                                            'type' => 'string',
                                            'example' => 'pxc-c-dmlgit****',
                                        ],
                                        'TopologyType' => [
                                            'title' => '拓扑类型：'."\n"
                                                ."\n"
                                                .'- **3azones**：三可用区；'."\n"
                                                .'- **1azone**：单可用区。',
                                            'description' => '拓扑类型：'."\n"
                                                ."\n"
                                                .'- **3azones**：三可用区；'."\n"
                                                .'- **1azone**：单可用区。',
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'required' => true,
                                            'example' => '3azones',
                                            'pattern' => '',
                                            'default' => '3azones',
                                        ],
                                        'TertiaryZone' => [
                                            'title' => '第三可用区。',
                                            'description' => '第三可用区。',
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'example' => 'cn-hangzhou-k',
                                            'pattern' => '',
                                            'default' => '',
                                        ],
                                        'PrimaryZone' => [
                                            'title' => '主可用区。',
                                            'description' => '主可用区。',
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'required' => true,
                                            'example' => 'cn-hangzhou-j',
                                            'pattern' => '',
                                            'default' => '',
                                        ],
                                        'SecondaryZone' => [
                                            'title' => '次可用区。',
                                            'description' => '次可用区。',
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'example' => 'cn-hangzhou-l',
                                            'pattern' => '',
                                            'default' => '',
                                        ],
                                        'ColumnarInstanceName' => [
                                            'description' => '列存引擎实例名称。',
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'isInGdn' => [
                                            'type' => 'boolean',
                                        ],
                                        'gdnRole' => [
                                            'type' => 'string',
                                        ],
                                        'CpuType' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalNumber\\": 30,\\n  \\"DBInstances\\": [\\n    {\\n      \\"Type\\": \\"ReadWrite\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"CommodityCode\\": \\"drds_polarxpre_public_cn\\",\\n      \\"ExpireTime\\": \\"2021-12-01T16:00:00.000+0000\\",\\n      \\"Expired\\": false,\\n      \\"CreateTime\\": \\"2021-11-01T03:49:50.000+0000\\",\\n      \\"PayType\\": \\"Prepaid\\",\\n      \\"LockReason\\": \\"欠费\\",\\n      \\"DBType\\": \\"polarx\\",\\n      \\"LockMode\\": \\"Unlock\\",\\n      \\"VPCId\\": \\"VPCID\\",\\n      \\"MinorVersion\\": \\"polarx-kernel_5.4.12-16349923_xcluster-20210926\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Network\\": \\"VPC\\",\\n      \\"DBVersion\\": \\"5.7\\",\\n      \\"Description\\": \\"测试\\",\\n      \\"NodeClass\\": \\"polarx.x4.large.2e\\",\\n      \\"StorageUsed\\": 40658534400,\\n      \\"NodeCount\\": 5,\\n      \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n      \\"Engine\\": \\"polarx\\",\\n      \\"Id\\": \\"pxc-hzr2yeov******\\",\\n      \\"Nodes\\": [\\n        {\\n          \\"ZoneId\\": \\"cn-hangzhou-g\\",\\n          \\"Id\\": \\"pxi-zd89wrzqh******\\",\\n          \\"ClassCode\\": \\"polarx.x4.large.2e\\",\\n          \\"RegionId\\": \\"cn-hangzhou-g-aliyun\\"\\n        }\\n      ],\\n      \\"ReadDBInstances\\": [\\n        \\"pxr-hzr2yeov******\\"\\n      ],\\n      \\"ColumnarReadDBInstances\\": [\\n        \\"xxxxxxxx\\"\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-xxxxxx\\",\\n      \\"TagSet\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"DBInstanceName\\": \\"pxc-xxxxx\\",\\n      \\"DnNodeCount\\": 2,\\n      \\"CnNodeCount\\": 2,\\n      \\"CnNodeClassCode\\": \\"polarx.x4.large.2e\\",\\n      \\"DnNodeClassCode\\": \\"mysql.n4.medium.25\\",\\n      \\"Series\\": \\"enterprise\\",\\n      \\"ContainBinlogX\\": true,\\n      \\"SupportBinlogX\\": true,\\n      \\"CdcInstanceName\\": \\"pxc-c-dmlgit****\\",\\n      \\"TopologyType\\": \\"3azones\\",\\n      \\"TertiaryZone\\": \\"cn-hangzhou-k\\",\\n      \\"PrimaryZone\\": \\"cn-hangzhou-j\\",\\n      \\"SecondaryZone\\": \\"cn-hangzhou-l\\",\\n      \\"ColumnarInstanceName\\": \\"xxxxxxxx\\",\\n      \\"isInGdn\\": true,\\n      \\"gdnRole\\": \\"\\",\\n      \\"CpuType\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstancesResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalNumber>30</TotalNumber>\\n    <DBInstances>\\n        <Type>ReadWrite</Type>\\n        <Status>Running</Status>\\n        <CommodityCode>drds_polarxpre_public_cn</CommodityCode>\\n        <ExpireTime>2021-12-01T16:00:00.000+0000</ExpireTime>\\n        <Expired>false</Expired>\\n        <CreateTime>2021-11-01T03:49:50.000+0000</CreateTime>\\n        <PayType>Prepaid</PayType>\\n        <LockReason>欠费</LockReason>\\n        <DBType>polarx</DBType>\\n        <LockMode>Unlock</LockMode>\\n        <VPCId>VPCID</VPCId>\\n        <MinorVersion>polarx-kernel_5.4.12-16349923_xcluster-20210926</MinorVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Network>VPC</Network>\\n        <DBVersion>5.7</DBVersion>\\n        <Description>测试</Description>\\n        <NodeClass>polarx.x4.large.2e</NodeClass>\\n        <StorageUsed>40658534400</StorageUsed>\\n        <NodeCount>5</NodeCount>\\n        <ZoneId>cn-hangzhou-g</ZoneId>\\n        <Engine>polarx</Engine>\\n        <Id>pxc-hzr2yeov******</Id>\\n        <Nodes>\\n            <ZoneId>cn-hangzhou-g</ZoneId>\\n            <Id>pxi-zd89wrzqh******</Id>\\n            <ClassCode>polarx.x4.large.2e</ClassCode>\\n            <RegionId>cn-hangzhou-g-aliyun</RegionId>\\n        </Nodes>\\n        <ReadDBInstances>pxr-hzr2yeov******</ReadDBInstances>\\n        <ResourceGroupId>rg-xxxxxx</ResourceGroupId>\\n        <TagSet>\\n            <Key>key1</Key>\\n            <Value>value1</Value>\\n        </TagSet>\\n        <DBInstanceName>pxc-xxxxx</DBInstanceName>\\n        <DnNodeCount>2</DnNodeCount>\\n        <CnNodeCount>2</CnNodeCount>\\n        <CnNodeClassCode>polarx.x4.large.2e</CnNodeClassCode>\\n        <DnNodeClassCode>mysql.n4.medium.25</DnNodeClassCode>\\n        <Series>enterprise</Series>\\n        <ContainBinlogX>true</ContainBinlogX>\\n        <SupportBinlogX>true</SupportBinlogX>\\n        <CdcInstanceName>pxc-c-dmlgit****</CdcInstanceName>\\n        <TopologyType>3azones</TopologyType>\\n        <TertiaryZone>cn-hangzhou-k</TertiaryZone>\\n        <PrimaryZone>cn-hangzhou-j</PrimaryZone>\\n        <SecondaryZone>cn-hangzhou-l</SecondaryZone>\\n        <ColumnarInstanceName>xxxxx</ColumnarInstanceName>\\n    </DBInstances>\\n</DescribeDBInstancesResponse>","errorExample":""}]',
            'title' => '查询数据库实例列表',
            'summary' => '调用DescribeDBInstances接口查询实例列表。',
        ],
        'DescribeDBInstanceSSL' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86243',
                'abilityTreeNodes' => [
                    'FEATUREdrdsUULYZA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-*********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
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
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'SSLEnabled' => [
                                        'description' => '实例是否开启SSL：'."\n"
                                            ."\n"
                                            .'- **true**：开启'."\n"
                                            .'- **false**： 关闭',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'SSLExpiredTime' => [
                                        'description' => '证书过期时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-04T09:39:07Z',
                                    ],
                                    'CertCommonName' => [
                                        'description' => '证书绑定域名。',
                                        'type' => 'string',
                                        'example' => 'pxc-sddddddcym7g7w****.polarx.singapore.rds.aliyuncs.com',
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
                    [
                        'errorCode' => 'InvalidAction',
                        'errorMessage' => 'The specified Action is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"SSLEnabled\\": false,\\n    \\"SSLExpiredTime\\": \\"2022-11-04T09:39:07Z\\",\\n    \\"CertCommonName\\": \\"pxc-sddddddcym7g7w****.polarx.singapore.rds.aliyuncs.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceSSLResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Data>\\n        <SSLEnabled>false</SSLEnabled>\\n        <SSLExpiredTime>2022-11-04T09:39:07Z</SSLExpiredTime>\\n        <CertCommonName>pxc-sddddddcym7g7w****.polarx.singapore.rds.aliyuncs.com</CertCommonName>\\n    </Data>\\n</DescribeDBInstanceSSLResponse>","errorExample":""}]',
            'title' => '查看SSL信息',
            'summary' => '查看SSL信息。',
        ],
        'DescribeDBInstanceTDE' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86244',
                'abilityTreeNodes' => [
                    'FEATUREdrds9HBOA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的地域ID。'."\n",
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
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'TDEStatus' => [
                                        'description' => '是否开启TDE：'."\n"
                                            ."\n"
                                            .'- 0 = 未开启；'."\n"
                                            .'- 1 = 已开启。',
                                        'type' => 'string',
                                        'example' => '0',
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
                        'errorCode' => 'IncorrectEngineVersion',
                        'errorMessage' => 'The current engine version does not support the operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"TDEStatus\\": \\"0\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceTDEResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Data>\\n        <TDEStatus>0</TDEStatus>\\n    </Data>\\n</DescribeDBInstanceTDEResponse>","errorExample":""}]',
            'title' => '获取实例TDE的详细信息',
            'summary' => '调用DescribeDBInstanceTDE接口获取实例TDE的详细信息。',
        ],
        'DescribeDBInstanceTopology' => [
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
                'abilityTreeCode' => '86245',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的地域ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询拓扑中历史实例范围开始时间，格式为yyyy-MM-dd HH:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-21T10:30:45Z 04:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询拓扑中历史实例范围结束时间，格式为yyyy-MM-dd HH:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-22T10:30:45Z 04:00:00',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'LogicInstanceTopology' => [
                                        'description' => '拓扑信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'DBInstanceName' => [
                                                'description' => '实例名称。',
                                                'type' => 'string',
                                                'example' => 'pxc-sprcym7g7w****',
                                            ],
                                            'DBInstanceCreateTime' => [
                                                'description' => '实例创建时间，格式为yyyy-MM-dd HH:mm:ss。',
                                                'type' => 'string',
                                                'example' => '2021-10-21T10:30:45Z 04:00:00',
                                            ],
                                            'MaintainStartTime' => [
                                                'description' => '运维开始时间，格式为HH:mm:ss。',
                                                'type' => 'string',
                                                'example' => '04:00:00',
                                            ],
                                            'MaintainEndTime' => [
                                                'description' => '运维结束时间，格式为HH:mm:ss。',
                                                'type' => 'string',
                                                'example' => '05:00:00',
                                            ],
                                            'LockReason' => [
                                                'description' => '锁定原因。',
                                                'type' => 'string',
                                                'example' => '欠费',
                                            ],
                                            'DBInstanceStatus' => [
                                                'description' => '实例状态。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '8',
                                            ],
                                            'LockMode' => [
                                                'description' => '锁定状态 ：'."\n"
                                                    ."\n"
                                                    .'- **0**：未锁定；'."\n"
                                                    .'- **1**：锁定。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'EngineVersion' => [
                                                'description' => '引擎版本，默认2.0。',
                                                'type' => 'string',
                                                'example' => '2.0',
                                            ],
                                            'DBInstanceStorage' => [
                                                'description' => '存储节点个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'DBInstanceConnType' => [
                                                'description' => '表示用lvs做负载均衡。',
                                                'type' => 'string',
                                                'example' => 'lvs',
                                            ],
                                            'DBInstanceId' => [
                                                'description' => '实例ID。',
                                                'type' => 'string',
                                                'example' => '304726047',
                                            ],
                                            'Engine' => [
                                                'description' => '引擎， 默认：polarx。',
                                                'type' => 'string',
                                                'example' => 'polarx',
                                            ],
                                            'DBInstanceDescription' => [
                                                'description' => '实例描述。',
                                                'type' => 'string',
                                                'example' => 'pxc-sprcym7******',
                                            ],
                                            'DBInstanceStatusDescription' => [
                                                'description' => '实例状态描述。',
                                                'type' => 'string',
                                                'example' => 'TDE_MODIFYING',
                                            ],
                                            'Items' => [
                                                'description' => '节点列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '节点信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DBInstanceCreateTime' => [
                                                            'description' => '实例创建时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-10-21T10:30:45Z',
                                                        ],
                                                        'DBInstanceName' => [
                                                            'description' => '实例名称。',
                                                            'type' => 'string',
                                                            'example' => 'pxc-i-tk6t4z****',
                                                        ],
                                                        'CharacterType' => [
                                                            'description' => '节点属性，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **polarx_cn**：计算节点；'."\n"
                                                                .'- **polarx_store**：数据节点；'."\n"
                                                                .'- **polarx_gms**：GMS节点。',
                                                            'type' => 'string',
                                                            'example' => '节点角色',
                                                        ],
                                                        'MaintainStartTime' => [
                                                            'description' => '运维开始时间。',
                                                            'type' => 'string',
                                                            'example' => '不展示',
                                                        ],
                                                        'DiskSize' => [
                                                            'description' => '磁盘大小。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '3145728',
                                                        ],
                                                        'MaintainEndTime' => [
                                                            'description' => '运维结束时间。',
                                                            'type' => 'string',
                                                            'example' => '不展示',
                                                        ],
                                                        'LockReason' => [
                                                            'description' => '锁定原因。',
                                                            'type' => 'string',
                                                            'example' => '不展示',
                                                        ],
                                                        'DBInstanceStatus' => [
                                                            'description' => '实例状态。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '8',
                                                        ],
                                                        'LockMode' => [
                                                            'description' => '是否锁定，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **0**：未锁定；'."\n"
                                                                .'- **1**：锁定。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'EngineVersion' => [
                                                            'description' => '引擎版本，默认2.0。',
                                                            'type' => 'string',
                                                            'example' => '5.7',
                                                        ],
                                                        'DBInstanceConnType' => [
                                                            'description' => '连接类型。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '不展示',
                                                        ],
                                                        'MaxConnections' => [
                                                            'description' => '最大连接数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '4000',
                                                        ],
                                                        'DBInstanceId' => [
                                                            'description' => '实例ID。',
                                                            'type' => 'string',
                                                            'example' => '304726049',
                                                        ],
                                                        'Engine' => [
                                                            'description' => '引擎版本，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **mysql **'."\n"
                                                                .'- **polarx_cdc**'."\n"
                                                                .'- **polarx_dn**',
                                                            'type' => 'string',
                                                            'example' => 'mysql',
                                                        ],
                                                        'MaxIops' => [
                                                            'description' => '最大Iops。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '7000',
                                                        ],
                                                        'DBInstanceDescription' => [
                                                            'description' => '实例描述。',
                                                            'type' => 'string',
                                                            'example' => '不展示',
                                                        ],
                                                        'DBInstanceStatusDescription' => [
                                                            'description' => '实例状态描述。',
                                                            'type' => 'string',
                                                            'example' => '不展示',
                                                        ],
                                                        'ConnectionIp' => [
                                                            'description' => '数据结构体。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '连接信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Port' => [
                                                                        'description' => '端口。',
                                                                        'type' => 'string',
                                                                        'example' => '3306',
                                                                    ],
                                                                    'DBInstanceNetType' => [
                                                                        'description' => '内部连接的方式，固定取值为1，表示经典网络。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                    'ConnectionString' => [
                                                                        'description' => '连接信息。',
                                                                        'type' => 'string',
                                                                        'example' => 'pxc-xdb-m-pxcdym7g7w********.mysql.singapore.rds.aliyuncs.com',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Region' => [
                                                            'description' => '节点所属地域，如果为RDS节点，多个子节点的地域以 \';\' 分割。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou',
                                                        ],
                                                        'Azone' => [
                                                            'description' => '节点所属可用区，如果为RDS节点，多个子节点的可用区以\';\'分割。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou-a',
                                                        ],
                                                        'Role' => [
                                                            'description' => '节点角色，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **master**：主节点'."\n"
                                                                .'- **standby**：备节点',
                                                            'type' => 'string',
                                                            'example' => 'master',
                                                        ],
                                                        'Activated' => [
                                                            'description' => '节点是否启用，计算层仅启用主可用区节点，在实例执行主备切换后计算层备用节点会切换为主节点，所有存储层节点均启用。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'AzoneRoleList' => [
                                                            'description' => 'RDS三节点的数据信息列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Azone' => [
                                                                        'description' => 'RDS三节点中某个节点所属可用区。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-hangzhou-a',
                                                                    ],
                                                                    'Role' => [
                                                                        'description' => 'RDS三节点中某个节点的角色，取值如下：'."\n"
                                                                            ."\n"
                                                                            .'- **leader**：主节点'."\n"
                                                                            .'- **follower**：从节点'."\n"
                                                                            .'- **logger**：日志节点',
                                                                        'type' => 'string',
                                                                        'example' => 'leader',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Status' => [
                                                            'description' => '节点状态：'."\n"
                                                                ."\n"
                                                                .'- **0**：运行中'."\n"
                                                                .'- **1**：创建中'."\n"
                                                                .'- **2**：异常'."\n"
                                                                .'- **3**：已过期'."\n"
                                                                .'- **4**：释放中'."\n"
                                                                .'- **5**：已释放'."\n"
                                                                .'- **6**：锁定',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'NodeClass' => [
                                                            'description' => '节点规格：'."\n"
                                                                ."\n"
                                                                .'- **polarx.x4.medium.2e**：2核8 GB'."\n"
                                                                .'- **polarx.x4.large.2e**：4核16 GB'."\n"
                                                                .'- **polarx.x8.large.2e**：4核32 GB'."\n"
                                                                .'- **polarx.x4.xlarge.2e**：8核32 GB'."\n"
                                                                .'- **polarx.x8.xlarge.2e**：8核64 GB'."\n"
                                                                .'- **polarx.x4.2xlarge.2e**：16核64 GB'."\n"
                                                                .'- **polarx.x8.2xlarge.2e**：16核128 GB'."\n"
                                                                .'- **polarx.x4.4xlarge.2e**：32核128 GB'."\n"
                                                                .'- **polarx.x8.4xlarge.2e**：32核256 GB'."\n"
                                                                .'- **polarx.st.8xlarge.2e**：60核470 GB'."\n"
                                                                .'- **polarx.st.12xlarge.2e**：90核720 GB',
                                                            'type' => 'string',
                                                            'example' => 'polarx.x4.large.2e',
                                                        ],
                                                        'Version' => [
                                                            'description' => '日志节点版本。',
                                                            'type' => 'string',
                                                            'example' => 'polarx-cdc-kernel-2.0.0-3985896',
                                                        ],
                                                        'PhyInstanceName' => [
                                                            'description' => '物理实例名',
                                                            'type' => 'string',
                                                            'example' => 'pxc-unrbk8oyz**********',
                                                        ],
                                                        'StorageUsed' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'HistoryItems' => [
                                                'description' => '历史节点列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CharacterType' => [
                                                            'description' => '节点属性，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **polarx_cn**：计算节点；'."\n"
                                                                .'- **polarx_store**：数据节点；'."\n"
                                                                .'- **polarx_gms**：GMS节点。',
                                                            'type' => 'string',
                                                            'example' => '节点角色',
                                                        ],
                                                        'Role' => [
                                                            'description' => '节点角色，取值如下：'."\n"
                                                                ."\n"
                                                                .'- **master**：主节点'."\n"
                                                                .'- **standby**：备节点',
                                                            'type' => 'string',
                                                            'example' => 'master',
                                                        ],
                                                        'DBInstanceName' => [
                                                            'description' => '实例名称。',
                                                            'type' => 'string',
                                                            'example' => 'pxc-sprcym7g7w****',
                                                        ],
                                                        'DBInstanceId' => [
                                                            'description' => '实例ID。',
                                                            'type' => 'string',
                                                            'example' => '304726049',
                                                        ],
                                                        'Region' => [
                                                            'description' => '节点所属地域，如果为RDS节点，多个子节点的地域以 \';\' 分割。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou',
                                                        ],
                                                        'Azone' => [
                                                            'description' => '节点所属可用区，如果为RDS节点，多个子节点的可用区以\';\'分割。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou-a',
                                                        ],
                                                        'Activated' => [
                                                            'description' => '节点是否启用，计算层仅启用主可用区节点，在实例执行主备切换后计算层备用节点会切换为主节点，所有存储层节点均启用。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'PhyInstanceName' => [
                                                            'description' => '物理实例名。',
                                                            'type' => 'string',
                                                            'example' => 'pxc-unrbk8oyz**********',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"LogicInstanceTopology\\": {\\n      \\"DBInstanceName\\": \\"pxc-sprcym7g7w****\\",\\n      \\"DBInstanceCreateTime\\": \\"2021-10-21T10:30:45Z 04:00:00\\",\\n      \\"MaintainStartTime\\": \\"04:00:00\\",\\n      \\"MaintainEndTime\\": \\"05:00:00\\",\\n      \\"LockReason\\": \\"欠费\\",\\n      \\"DBInstanceStatus\\": 8,\\n      \\"LockMode\\": 0,\\n      \\"EngineVersion\\": \\"2.0\\",\\n      \\"DBInstanceStorage\\": 1,\\n      \\"DBInstanceConnType\\": \\"lvs\\",\\n      \\"DBInstanceId\\": \\"304726047\\",\\n      \\"Engine\\": \\"polarx\\",\\n      \\"DBInstanceDescription\\": \\"pxc-sprcym7******\\",\\n      \\"DBInstanceStatusDescription\\": \\"TDE_MODIFYING\\",\\n      \\"Items\\": [\\n        {\\n          \\"DBInstanceCreateTime\\": \\"2021-10-21T10:30:45Z\\",\\n          \\"DBInstanceName\\": \\"pxc-i-tk6t4z****\\",\\n          \\"CharacterType\\": \\"节点角色\\",\\n          \\"MaintainStartTime\\": \\"不展示\\",\\n          \\"DiskSize\\": 3145728,\\n          \\"MaintainEndTime\\": \\"不展示\\",\\n          \\"LockReason\\": \\"不展示\\",\\n          \\"DBInstanceStatus\\": 8,\\n          \\"LockMode\\": 0,\\n          \\"EngineVersion\\": \\"5.7\\",\\n          \\"DBInstanceConnType\\": 0,\\n          \\"MaxConnections\\": 4000,\\n          \\"DBInstanceId\\": \\"304726049\\",\\n          \\"Engine\\": \\"mysql\\",\\n          \\"MaxIops\\": 7000,\\n          \\"DBInstanceDescription\\": \\"不展示\\",\\n          \\"DBInstanceStatusDescription\\": \\"不展示\\",\\n          \\"ConnectionIp\\": [\\n            {\\n              \\"Port\\": \\"3306\\",\\n              \\"DBInstanceNetType\\": 1,\\n              \\"ConnectionString\\": \\"pxc-xdb-m-pxcdym7g7w********.mysql.singapore.rds.aliyuncs.com\\"\\n            }\\n          ],\\n          \\"Region\\": \\"cn-hangzhou\\",\\n          \\"Azone\\": \\"cn-hangzhou-a\\",\\n          \\"Role\\": \\"master\\",\\n          \\"Activated\\": true,\\n          \\"AzoneRoleList\\": [\\n            {\\n              \\"Azone\\": \\"cn-hangzhou-a\\",\\n              \\"Role\\": \\"leader\\"\\n            }\\n          ],\\n          \\"Status\\": \\"0\\",\\n          \\"NodeClass\\": \\"polarx.x4.large.2e\\",\\n          \\"Version\\": \\"polarx-cdc-kernel-2.0.0-3985896\\",\\n          \\"PhyInstanceName\\": \\"pxc-unrbk8oyz**********\\",\\n          \\"StorageUsed\\": \\"\\"\\n        }\\n      ],\\n      \\"HistoryItems\\": [\\n        {\\n          \\"CharacterType\\": \\"节点角色\\",\\n          \\"Role\\": \\"master\\",\\n          \\"DBInstanceName\\": \\"pxc-sprcym7g7w****\\",\\n          \\"DBInstanceId\\": \\"304726049\\",\\n          \\"Region\\": \\"cn-hangzhou\\",\\n          \\"Azone\\": \\"cn-hangzhou-a\\",\\n          \\"Activated\\": true,\\n          \\"PhyInstanceName\\": \\"pxc-unrbk8oyz**********\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBInstanceTopologyResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Data>\\n        <LogicInstanceTopology>\\n            <DBInstanceName>pxc-sprcym7g7w****</DBInstanceName>\\n            <DBInstanceCreateTime>2021-10-21T10:30:45Z 04:00:00</DBInstanceCreateTime>\\n            <MaintainStartTime>04:00:00</MaintainStartTime>\\n            <MaintainEndTime>05:00:00</MaintainEndTime>\\n            <LockReason>欠费</LockReason>\\n            <DBInstanceStatus>8</DBInstanceStatus>\\n            <LockMode>0</LockMode>\\n            <EngineVersion>2.0</EngineVersion>\\n            <DBInstanceStorage>1</DBInstanceStorage>\\n            <DBInstanceConnType>lvs</DBInstanceConnType>\\n            <DBInstanceId>304726047</DBInstanceId>\\n            <Engine>polarx</Engine>\\n            <DBInstanceDescription>pxc-sprcym7******</DBInstanceDescription>\\n            <DBInstanceStatusDescription>TDE_MODIFYING</DBInstanceStatusDescription>\\n            <Items>\\n                <DBInstanceCreateTime>2021-10-21T10:30:45Z</DBInstanceCreateTime>\\n                <DBInstanceName>pxc-i-tk6t4z****</DBInstanceName>\\n                <CharacterType>节点角色</CharacterType>\\n                <MaintainStartTime>不展示</MaintainStartTime>\\n                <DiskSize>3145728</DiskSize>\\n                <MaintainEndTime>不展示</MaintainEndTime>\\n                <LockReason>不展示</LockReason>\\n                <DBInstanceStatus>8</DBInstanceStatus>\\n                <LockMode>0</LockMode>\\n                <EngineVersion>5.7</EngineVersion>\\n                <MaxConnections>4000</MaxConnections>\\n                <DBInstanceId>304726049</DBInstanceId>\\n                <Engine>mysql</Engine>\\n                <MaxIops>7000</MaxIops>\\n                <DBInstanceDescription>不展示</DBInstanceDescription>\\n                <DBInstanceStatusDescription>不展示</DBInstanceStatusDescription>\\n                <ConnectionIp>\\n                    <Port>3306</Port>\\n                    <DBInstanceNetType>1</DBInstanceNetType>\\n                    <ConnectionString>pxc-xdb-m-pxcdym7g7w********.mysql.singapore.rds.aliyuncs.com</ConnectionString>\\n                </ConnectionIp>\\n                <Region>cn-hangzhou</Region>\\n                <Azone>cn-hangzhou-a</Azone>\\n                <Role>master</Role>\\n                <Activated>true</Activated>\\n                <AzoneRoleList>\\n                    <Azone>cn-hangzhou-a</Azone>\\n                    <Role>leader</Role>\\n                </AzoneRoleList>\\n                <Status>0</Status>\\n                <NodeClass>polarx.x4.large.2e</NodeClass>\\n                <Version>polarx-cdc-kernel-2.0.0-3985896</Version>\\n                <PhyInstanceName>pxc-unrbk8oyz**********</PhyInstanceName>\\n            </Items>\\n            <HistoryItems>\\n                <CharacterType>节点角色</CharacterType>\\n                <Role>master</Role>\\n                <DBInstanceName>pxc-sprcym7g7w****</DBInstanceName>\\n                <DBInstanceId>304726049</DBInstanceId>\\n                <Region>cn-hangzhou</Region>\\n                <Azone>cn-hangzhou-a</Azone>\\n                <Activated>true</Activated>\\n                <PhyInstanceName>pxc-unrbk8oyz**********</PhyInstanceName>\\n            </HistoryItems>\\n        </LogicInstanceTopology>\\n    </Data>\\n</DescribeDBInstanceTopologyResponse>","errorExample":""}]',
            'title' => '查询实例拓扑信息',
            'summary' => '调用DescribeDBInstanceTopology接口获取实例拓扑信息。',
        ],
        'DescribeDBInstanceViaEndpoint' => [
            'summary' => '通过实例的连接地址获取实例的基本信息',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Endpoint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的连接地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hz*******.polarx.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => '14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC',
                            ],
                            'DBInstance' => [
                                'description' => '实例信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '实例类型：'."\n"
                                            ."\n"
                                            .'- **ReadWrite**： 主实例；'."\n"
                                            .'- **ReadOnly**： 只读实例。',
                                        'type' => 'string',
                                        'example' => 'ReadWrite',
                                    ],
                                    'Status' => [
                                        'description' => '实例状态，详情请参见[实例状态表](~~339826~~)。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'RightsSeparationStatus' => [
                                        'description' => '三权分立状态：'."\n"
                                            ."\n"
                                            .'- **disabled**：未开启；'."\n"
                                            .'- **enabled**：开启；'."\n"
                                            .'- **processing**： 处理中；'."\n"
                                            .'- **unknown**：未知，可能是实例无法连接导致。',
                                        'type' => 'string',
                                        'example' => 'disabled',
                                    ],
                                    'DBNodeCount' => [
                                        'description' => '实例节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Expired' => [
                                        'description' => '是否过期：'."\n"
                                            ."\n"
                                            .'- **true**：过期；'."\n"
                                            .'- **false**：正常。',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-08-31T08:56:25.000+0000',
                                    ],
                                    'PayType' => [
                                        'description' => '实例付费方式，取值：'."\n"
                                            ."\n"
                                            .'- **Postpaid**：按量付费；'."\n"
                                            .'- **Prepaid**：包年包月。',
                                        'type' => 'string',
                                        'example' => 'Postpaid',
                                    ],
                                    'Port' => [
                                        'description' => '实例连接端口',
                                        'type' => 'string',
                                        'example' => '3306',
                                    ],
                                    'LockMode' => [
                                        'description' => '实例锁定模式：'."\n"
                                            ."\n"
                                            .'- **Unlock**：正常；'."\n"
                                            .'- **ManualLock**：手动触发锁定；'."\n"
                                            .'- **LockByExpiration**：实例过期自动锁定；'."\n"
                                            .'- **LockByRestoration**：实例回滚前的自动锁定；'."\n"
                                            .'- **LockByDiskQuota**：实例空间满自动锁定；'."\n"
                                            .'- **LockReadInstanceByDiskQuota**：只读实例空间满自动锁定。',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'Description' => [
                                        'description' => '实例描述。',
                                        'type' => 'string',
                                        'example' => 'test instance',
                                    ],
                                    'ConnectionString' => [
                                        'description' => '实例连接地址',
                                        'type' => 'string',
                                        'example' => 'pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com',
                                    ],
                                    'StorageUsed' => [
                                        'description' => '已经使用的存储，单位为B。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '17042505728',
                                    ],
                                    'ExpireDate' => [
                                        'description' => '到期时间。格式为yyyy-MM-ddTHH:mm:ss.sss+0000（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-08-31T16:00:00.000+0000',
                                    ],
                                    'CommodityCode' => [
                                        'description' => '实例商品种类，固定取值为drds_polarxpost_public_cn。',
                                        'type' => 'string',
                                        'example' => 'drds_polarxpost_public_cn',
                                    ],
                                    'MaintainStartTime' => [
                                        'description' => '实例可维护开始时间，此处为UTC时间，加8小时才是控制台上显示的可维护时间段。',
                                        'type' => 'string',
                                        'example' => '06:00',
                                    ],
                                    'DBInstanceType' => [
                                        'description' => '实例类型：'."\n"
                                            ."\n"
                                            .'- **ReadWrite**： 主实例；'."\n"
                                            .'- **ReadOnly**： 只读实例。',
                                        'type' => 'string',
                                        'example' => 'ReadWrite',
                                    ],
                                    'DBNodeClass' => [
                                        'description' => '实例节点规格。',
                                        'type' => 'string',
                                        'example' => 'polarx.x4.large.2e',
                                    ],
                                    'LatestMinorVersion' => [
                                        'description' => '当前实例支持的最新内核版本。',
                                        'type' => 'string',
                                        'example' => 'polarx-kernel_5.4.11-16301083_xcluster-20210805',
                                    ],
                                    'MaintainEndTime' => [
                                        'description' => '实例可维护结束时间，此处为UTC时间，加8小时为控制台上显示的可维护时间段。',
                                        'type' => 'string',
                                        'example' => '06:00',
                                    ],
                                    'DBType' => [
                                        'description' => '数据库类型，固定取值为polarx。',
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'RightsSeparationEnabled' => [
                                        'description' => '三权分立状态：'."\n"
                                            ."\n"
                                            .'- **false**：未开启'."\n"
                                            .'- **true**：开启',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'VPCId' => [
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-xxxxx',
                                    ],
                                    'MinorVersion' => [
                                        'description' => '当前内核版本。',
                                        'type' => 'string',
                                        'example' => 'polarx-kernel_5.4.11-16301083_xcluster-20210805',
                                    ],
                                    'RegionId' => [
                                        'description' => '实例所在地域。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Network' => [
                                        'description' => '实例的网络类型，仅支持取值VPC，表示专有网络。',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'DBVersion' => [
                                        'description' => '数据库版本。',
                                        'type' => 'string',
                                        'example' => '5.5',
                                    ],
                                    'VSwitchId' => [
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-********',
                                    ],
                                    'ZoneId' => [
                                        'description' => '实例所在可用区。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-a',
                                    ],
                                    'Engine' => [
                                        'description' => '数据库类型，固定取值为MySQL。',
                                        'type' => 'string',
                                        'example' => 'MySQL',
                                    ],
                                    'KindCode' => [
                                        'description' => '实例引擎版本，内部参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '18',
                                    ],
                                    'Id' => [
                                        'description' => '主实例的ID，如果没有返回此参数则表示该实例是主实例。',
                                        'type' => 'string',
                                        'example' => 'pxc-zkralxpc5d****',
                                    ],
                                    'DBNodes' => [
                                        'description' => '数据库节点信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库节点信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ComputeNodeId' => [
                                                    'description' => '计算节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'pxc-i-********',
                                                ],
                                                'NodeClass' => [
                                                    'description' => '节点规格。',
                                                    'type' => 'string',
                                                    'example' => 'polarx.x4.large.2e',
                                                ],
                                                'DataNodeId' => [
                                                    'description' => '存储节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'pxc-xdb-xxxxxx',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '节点所在可用区名称。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-a',
                                                ],
                                                'Id' => [
                                                    'description' => '逻辑节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'pxi-*********',
                                                ],
                                                'RegionId' => [
                                                    'description' => '节点所在地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ConnAddrs' => [
                                        'description' => '连接地址信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '连接地址信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '连接的种类，**VPC**为内网连接，**PUBLIC**为公网连接。',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-*********',
                                                ],
                                                'Port' => [
                                                    'description' => '连接端口号。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3306',
                                                ],
                                                'VPCId' => [
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-xxxxxx',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '连接地址。',
                                                    'type' => 'string',
                                                    'example' => 'polardbx-xxx.aliyuncs.com',
                                                ],
                                                'VpcInstanceId' => [
                                                    'description' => 'vpc 内部CloudInstanceId，可以忽略',
                                                    'type' => 'string',
                                                    'example' => 'pxc-zkralxpc5d****',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ReadDBInstances' => [
                                        'description' => '只读实例名称。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '只读实例名称。',
                                            'type' => 'string',
                                            'example' => 'pxr-*********',
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'title' => '资源组ID',
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-xxxx',
                                    ],
                                    'TagSet' => [
                                        'title' => '标签集合',
                                        'description' => '标签集合',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'title' => '标签名称',
                                                    'description' => '标签名称',
                                                    'type' => 'string',
                                                    'example' => 'key2',
                                                ],
                                                'Value' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => 'value2',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CnNodeCount' => [
                                        'description' => 'CN节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'DnNodeCount' => [
                                        'description' => 'DN节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'CnNodeClassCode' => [
                                        'description' => 'CN节点规格：'."\n"
                                            .'- **polarx.x4.medium.2e**：2核8G'."\n"
                                            .'- **polarx.x4.large.2e**：4核16G'."\n"
                                            .'- **polarx.x8.large.2e**：4核32G'."\n"
                                            .'- **polarx.x4.xlarge.2e**：8核32G'."\n"
                                            .'- **polarx.x8.xlarge.2e**：8核64G'."\n"
                                            .'- **polarx.x4.2xlarge.2e**：16核64G'."\n"
                                            .'- **polarx.x8.2xlarge.2e**：16核128G'."\n"
                                            .'- **polarx.x4.4xlarge.2e**：32核128G'."\n"
                                            .'- **polarx.x8.4xlarge.2e**：32核256G'."\n"
                                            .'- **polarx.st.8xlarge.2e**：60核470G'."\n"
                                            .'- **polarx.st.12xlarge.2e**：90核720G',
                                        'type' => 'string',
                                        'example' => 'polarx.x4.xlarge.2e',
                                    ],
                                    'DnNodeClassCode' => [
                                        'description' => 'DN节点规格：'."\n"
                                            .'- **mysql.n2.medium.25**：2核4G'."\n"
                                            .'- **mysql.n4.medium.25**：2核8G'."\n"
                                            .'- **mysql.x8.medium.25**：2核16G'."\n"
                                            .'- **mysql.n2.large.25**：4核8G'."\n"
                                            .'- **mysql.n4.large.25**：4核16G'."\n"
                                            .'- **mysql.x8.large.25**：4核32G'."\n"
                                            .'- **mysql.n2.xlarge.25**：8核16G'."\n"
                                            .'- **mysql.n4.xlarge.25**：8核32G'."\n"
                                            .'- **mysql.x8.xlarge.25**：8核64G'."\n"
                                            .'- **mysql.n4.2xlarge.25**：16核64G'."\n"
                                            .'- **mysql.x8.2xlarge.25**：16核128G'."\n"
                                            .'- **mysql.x4.4xlarge.25**：32核128G'."\n"
                                            .'- **mysql.x8.4xlarge.25**：32核256G'."\n"
                                            .'- **mysql.st.8xlarge.25**：60核470G'."\n"
                                            .'- **mysql.st.12xlarge.25**：90核720G',
                                        'type' => 'string',
                                        'example' => 'mysql.x8.large.25',
                                    ],
                                    'Series' => [
                                        'description' => '实例系列，取值如下：'."\n"
                                            ."\n"
                                            .'- **enterprise**：企业版'."\n"
                                            .'- **standard**：标准版',
                                        'type' => 'string',
                                        'example' => 'enterprise',
                                    ],
                                    'LTSVersions' => [
                                        'description' => 'LTS版本号。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'LTS版本号。',
                                            'type' => 'string',
                                            'example' => 'X.X.X.X',
                                        ],
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC\\",\\n  \\"DBInstance\\": {\\n    \\"Type\\": \\"ReadWrite\\",\\n    \\"Status\\": \\"Running\\",\\n    \\"RightsSeparationStatus\\": \\"disabled\\",\\n    \\"DBNodeCount\\": 2,\\n    \\"Expired\\": \\"false\\",\\n    \\"CreateTime\\": \\"2021-08-31T08:56:25.000+0000\\",\\n    \\"PayType\\": \\"Postpaid\\",\\n    \\"Port\\": \\"3306\\",\\n    \\"LockMode\\": \\"Unlock\\",\\n    \\"Description\\": \\"test instance\\",\\n    \\"ConnectionString\\": \\"pxc-sprpx766vo****.polarx.singapore.rds.aliyuncs.com\\",\\n    \\"StorageUsed\\": 17042505728,\\n    \\"ExpireDate\\": \\"2022-08-31T16:00:00.000+0000\\",\\n    \\"CommodityCode\\": \\"drds_polarxpost_public_cn\\",\\n    \\"MaintainStartTime\\": \\"06:00\\",\\n    \\"DBInstanceType\\": \\"ReadWrite\\",\\n    \\"DBNodeClass\\": \\"polarx.x4.large.2e\\",\\n    \\"LatestMinorVersion\\": \\"polarx-kernel_5.4.11-16301083_xcluster-20210805\\",\\n    \\"MaintainEndTime\\": \\"06:00\\",\\n    \\"DBType\\": \\"polarx\\",\\n    \\"RightsSeparationEnabled\\": false,\\n    \\"VPCId\\": \\"vpc-xxxxx\\",\\n    \\"MinorVersion\\": \\"polarx-kernel_5.4.11-16301083_xcluster-20210805\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Network\\": \\"VPC\\",\\n    \\"DBVersion\\": \\"5.5\\",\\n    \\"VSwitchId\\": \\"vsw-********\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n    \\"Engine\\": \\"MySQL\\",\\n    \\"KindCode\\": 18,\\n    \\"Id\\": \\"pxc-zkralxpc5d****\\",\\n    \\"DBNodes\\": [\\n      {\\n        \\"ComputeNodeId\\": \\"pxc-i-********\\",\\n        \\"NodeClass\\": \\"polarx.x4.large.2e\\",\\n        \\"DataNodeId\\": \\"pxc-xdb-xxxxxx\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n        \\"Id\\": \\"pxi-*********\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ],\\n    \\"ConnAddrs\\": [\\n      {\\n        \\"Type\\": \\"VPC\\",\\n        \\"VSwitchId\\": \\"vsw-*********\\",\\n        \\"Port\\": 3306,\\n        \\"VPCId\\": \\"vpc-xxxxxx\\",\\n        \\"ConnectionString\\": \\"polardbx-xxx.aliyuncs.com\\",\\n        \\"VpcInstanceId\\": \\"pxc-zkralxpc5d****\\"\\n      }\\n    ],\\n    \\"ReadDBInstances\\": [\\n      \\"pxr-*********\\"\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-xxxx\\",\\n    \\"TagSet\\": [\\n      {\\n        \\"Key\\": \\"key2\\",\\n        \\"Value\\": \\"value2\\"\\n      }\\n    ],\\n    \\"CnNodeCount\\": 2,\\n    \\"DnNodeCount\\": 2,\\n    \\"CnNodeClassCode\\": \\"polarx.x4.xlarge.2e\\",\\n    \\"DnNodeClassCode\\": \\"mysql.x8.large.25\\",\\n    \\"Series\\": \\"enterprise\\",\\n    \\"LTSVersions\\": [\\n      \\"X.X.X.X\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '通过连接地址获取实例信息',
        ],
        'DescribeDBNodePerformance' => [
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
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标名称，多个用英文逗号分隔，最多6个。详细内容请参见[性能参数表](https://help.aliyun.com/document_detail/332726.htm)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Cpu_Usage,Mem_Usage',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间, 格式： YYYY-MM-ddTHH:mmZ（UTC时间）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2012-06-08T15:00Z',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PolarDB-X实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-*******',
                    ],
                ],
                [
                    'name' => 'DBNodeIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点名称，多个用英文逗号分隔，CDC节点和计算节点一次最多支持10个节点，数据节点一次最多支持1个节点。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-i-******,pxc-i-*******',
                    ],
                ],
                [
                    'name' => 'CharacterType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点类型。目前包含polarx\\_cn、polarx\\_dn、polarx\\_cdc、polarx\\_gms。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'polarx_cn',
                    ],
                ],
                [
                    'name' => 'DBNodeRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点类型，取值：'."\n"
                            .'- master：主节点'."\n"
                            .'- slave：备节点'."\n"
                            ."\n"
                            .'只对DN和GMS节点生效。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'master',
                    ],
                ],
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
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间, 格式： YYYY-MM-ddTHH:mmZ（UTC时间）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2012-06-18T15:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'description' => '查询结束时间, 格式： YYYY-MM-ddTHH:mm:ssZ（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-10-20T02:00Z',
                            ],
                            'StartTime' => [
                                'description' => '查询开始时间, 格式： YYYY-MM-ddTHH:mm:ssZ（UTC时间）。',
                                'type' => 'string',
                                'example' => '2021-10-20T00:00Z',
                            ],
                            'DBInstanceName' => [
                                'description' => '实例名称。',
                                'type' => 'string',
                                'example' => 'pxc-********',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EFB5E10B-5268-170F-A378-9AF86CCEACC8',
                            ],
                            'PerformanceKeys' => [
                                'type' => 'object',
                                'properties' => [
                                    'PerformanceItem' => [
                                        'description' => '性能数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MetricName' => [
                                                    'description' => '具体的性能指标度量名称。',
                                                    'type' => 'string',
                                                    'example' => 'logic_tps',
                                                ],
                                                'DBNodeId' => [
                                                    'description' => '节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'pxc-i-********',
                                                ],
                                                'Measurement' => [
                                                    'description' => '性能指标。',
                                                    'type' => 'string',
                                                    'example' => 'Logic_TPS',
                                                ],
                                                'Points' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PerformanceItemValue' => [
                                                            'description' => '性能数据数组。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Value' => [
                                                                        'description' => '监控指标数据值。',
                                                                        'type' => 'string',
                                                                        'example' => '42.38',
                                                                    ],
                                                                    'Timestamp' => [
                                                                        'description' => '监控指标的具体时间点，格式为时间戳，单位为毫秒。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '1600822800000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2021-10-20T02:00Z\\",\\n  \\"StartTime\\": \\"2021-10-20T00:00Z\\",\\n  \\"DBInstanceName\\": \\"pxc-********\\",\\n  \\"RequestId\\": \\"EFB5E10B-5268-170F-A378-9AF86CCEACC8\\",\\n  \\"PerformanceKeys\\": {\\n    \\"PerformanceItem\\": [\\n      {\\n        \\"MetricName\\": \\"logic_tps\\",\\n        \\"DBNodeId\\": \\"pxc-i-********\\",\\n        \\"Measurement\\": \\"Logic_TPS\\",\\n        \\"Points\\": {\\n          \\"PerformanceItemValue\\": [\\n            {\\n              \\"Value\\": \\"42.38\\",\\n              \\"Timestamp\\": 1600822800000\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDBNodePerformanceResponse>\\n    <EndTime>2021-10-20T02:00Z</EndTime>\\n    <StartTime>2021-10-20T00:00Z</StartTime>\\n    <DBInstanceName>pxc-********</DBInstanceName>\\n    <RequestId>EFB5E10B-5268-170F-A378-9AF86CCEACC8</RequestId>\\n    <PerformanceKeys>\\n        <MetricName>logic_tps</MetricName>\\n        <DBNodeId>pxc-i-********</DBNodeId>\\n        <Measurement>Logic_TPS</Measurement>\\n        <Points>\\n            <Value>42.38</Value>\\n            <Timestamp>1600822800000</Timestamp>\\n        </Points>\\n    </PerformanceKeys>\\n</DescribeDBNodePerformanceResponse>","errorExample":""}]',
            'title' => '查询实例性能数据',
            'summary' => '调用DescribeDBNodePerformance接口查询实例性能数据。',
        ],
        'ModifyDBInstanceConfig' => [
            'summary' => '调用ModifyDBInstanceConfig接口修改实例配置项。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '86279',
                'abilityTreeNodes' => [
                    'FEATUREdrdsTQTDLY',
                ],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'ConfigName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待修改的配置项，详情请参见[计算层变量](~~316576~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ENABLE_CONSISTENT_REPLICA_READ',
                    ],
                ],
                [
                    'name' => 'ConfigValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果configName = ENABLE_CONSISTENT_REPLICA_READ， 取值”true”或“false”。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
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
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceConfigResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</ModifyDBInstanceConfigResponse>","errorExample":""}]',
            'title' => '修改实例配置项',
        ],
        'ModifyDBInstanceDescription' => [
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
            'systemTags' => [],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'DBInstanceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例备注描述。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试实例',
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
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceDescriptionResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</ModifyDBInstanceDescriptionResponse>","errorExample":""}]',
            'title' => '修改实例描述',
            'summary' => '调用ModifyDBInstanceDescription接口修改实例备注描述。',
        ],
        'ReleaseInstancePublicConnection' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'CurrentConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例连接串。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasdyuoo.polarx.rds.aliyuncs.com',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseInstancePublicConnectionResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</ReleaseInstancePublicConnectionResponse>","errorExample":""}]',
            'title' => '释放实例的外网连接地址',
            'summary' => '调用ReleaseInstancePublicConnection接口释放实例公网连接。',
        ],
        'RestartDBInstance' => [
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
            'systemTags' => [],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
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
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartDBInstanceResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</RestartDBInstanceResponse>","errorExample":""}]',
            'title' => '重启实例',
            'summary' => '调用RestartDBInstance接口重启实例。',
        ],
        'UpgradeDBInstanceKernelVersion' => [
            'methods' => [
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'SwitchMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '切换模式： 0:立刻执行，1：运维时间执行',
                        'description' => '切换模式。取值：'."\n"
                            ."\n"
                            .'- 0：立即切换。'."\n"
                            .'- 1：在可运维时间段内切换。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MinorVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内核版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'polarx-kernel_5.4.12-16349923_xcluster-20210926',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DBInstanceName' => [
                                'description' => '实例名称ID。',
                                'type' => 'string',
                                'example' => 'pxc-hzjasd****',
                            ],
                            'TargetMinorVersion' => [
                                'description' => '目标版本号。',
                                'type' => 'string',
                                'example' => 'polarx-kernel_5.4.7-16001481_xcluster-20200910',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'TaskId' => [
                                'description' => '后端任务ID。',
                                'type' => 'string',
                                'example' => '422922413',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DBInstanceName\\": \\"pxc-hzjasd****\\",\\n  \\"TargetMinorVersion\\": \\"polarx-kernel_5.4.7-16001481_xcluster-20200910\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"TaskId\\": \\"422922413\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeDBInstanceKernelVersionResponse>\\n    <DBInstanceName>pxc-hzjasd****</DBInstanceName>\\n    <TargetMinorVersion>polarx-kernel_5.4.7-16001481_xcluster-20200910</TargetMinorVersion>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <TaskId>422922413</TaskId>\\n</UpgradeDBInstanceKernelVersionResponse>","errorExample":""}]',
            'title' => '升级数据库实例内核版本',
            'summary' => '调用UpgradeDBInstanceKernelVersion接口更新实例内核版本。',
        ],
        'ModifyDBInstanceClass' => [
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
            'systemTags' => [],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'TargetDBInstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变配目标规格：'."\n"
                            ."\n"
                            .'- **polarx.x4.medium.2e**：2核8G'."\n"
                            .'- **polarx.x4.large.2e**：4核16G'."\n"
                            .'- **polarx.x8.large.2e**：4核32G'."\n"
                            .'- **polarx.x4.xlarge.2e**：8核32G'."\n"
                            .'- **polarx.x8.xlarge.2e**：8核64G'."\n"
                            .'- **polarx.x4.2xlarge.2e**：16核64G'."\n"
                            .'- **polarx.x8.2xlarge.2e**：16核128G'."\n"
                            .'- **polarx.x4.4xlarge.2e**：32核128G'."\n"
                            .'- **polarx.x8.4xlarge.2e**：32核256G'."\n"
                            .'- **polarx.st.8xlarge.2e**：60核470G'."\n"
                            .'- **polarx.st.12xlarge.2e**：90核720G',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'polarx.x4.xlarge.2e',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端token，保证唯一任意字符串。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                    ],
                ],
                [
                    'name' => 'CnClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计算节点规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4核32G',
                    ],
                ],
                [
                    'name' => 'DnClass',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储节点规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4核32G',
                    ],
                ],
                [
                    'name' => 'SpecifiedDNScale',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SpecifiedDNSpecMapJson',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SwitchTime',
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
                            'OrderId' => [
                                'description' => '交易订单ID，实例升配或降配，变更实例规格，会产生交易订单。',
                                'type' => 'string',
                                'example' => '20211103105558',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20211103105558\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceClassResponse>\\n    <OrderId>20211103105558</OrderId>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</ModifyDBInstanceClassResponse>","errorExample":""}]',
            'title' => '修改实例规格',
            'summary' => '调用ModifyDBInstanceClass接口修改实例规格。',
        ],
        'DescribeDBInstanceHA' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '132465',
                'abilityTreeNodes' => [
                    'FEATUREdrdsHIZOSR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'TopologyType' => [
                                        'type' => 'string',
                                    ],
                                    'PrimaryRegionId' => [
                                        'type' => 'string',
                                    ],
                                    'PrimaryAzoneId' => [
                                        'type' => 'string',
                                    ],
                                    'SecondaryRegionId' => [
                                        'type' => 'string',
                                    ],
                                    'SecondaryAzoneId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdatePolarDBXInstanceNode' => [
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
            'systemTags' => [],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasdyuoo',
                    ],
                ],
                [
                    'name' => 'DbInstanceNodeCount',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '实例目标节点数，取值范围：0-99。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端token，任意随机字符串。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                    ],
                ],
                [
                    'name' => 'CNNodeCount',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '计算节点个数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DNNodeCount',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '存储节点个数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'StoragePoolName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeleteDNIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AddDNSpec',
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
                            'OrderId' => [
                                'description' => '变更实例节点数时产生的订单ID。',
                                'type' => 'string',
                                'example' => '20211103105558',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20211103105558\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdatePolarDBXInstanceNodeResponse>\\n    <OrderId>20211103105558</OrderId>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</UpdatePolarDBXInstanceNodeResponse>","errorExample":""}]',
            'title' => '更新节点',
            'summary' => '调用UpdatePolarDBXInstanceNode接口变更实例节点数，包括扩容和缩容。该请求会产生交易订单。',
        ],
        'DescribeTasks' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务开始时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2021-11-01',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务结束时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2021-11-04',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页每页大小，取值范围为：5~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '30',
                        'example' => '20',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '30',
                        'default' => '1',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6045D78-C119-5A17-9DEA-0F810394E008',
                            ],
                            'PageNumber' => [
                                'description' => '分页页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageRecordCount' => [
                                'description' => '分页每页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalRecordCount' => [
                                'description' => '分页总共条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Items' => [
                                'description' => '结果项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态：'."\n"
                                                ."\n"
                                                .'- **RUNNING**: 任务运行中；'."\n"
                                                .'- **FAILED**：任务失败中断。',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'FinishTime' => [
                                            'description' => '任务结束时间，格式为yyyy-MM-dd\'T\'HH:mm:ss\'Z\'。',
                                            'type' => 'string',
                                            'example' => '2021-10-20T20:00:00Z',
                                        ],
                                        'Progress' => [
                                            'description' => '任务进度，单位%。',
                                            'type' => 'string',
                                            'example' => '80',
                                        ],
                                        'BeginTime' => [
                                            'description' => '任务开始时间，格式为yyyy-MM-dd\'T\'HH:mm:ss\'Z\'。',
                                            'type' => 'string',
                                            'example' => '2021-10-20T19:40:00Z',
                                        ],
                                        'TaskErrorCode' => [
                                            'description' => '任务失败的code。',
                                            'type' => 'string',
                                            'example' => 'TaskErrorCode',
                                        ],
                                        'DBName' => [
                                            'description' => '任务相关的数据库名，一般为空。',
                                            'type' => 'string',
                                            'example' => 'DBName',
                                        ],
                                        'ProgressInfo' => [
                                            'description' => '任务进度详细情况，一般为空。',
                                            'type' => 'string',
                                            'example' => 'ProgressInfo',
                                        ],
                                        'ScaleOutToken' => [
                                            'description' => '如果是扩容任务，则会有一个扩容ID，后台唯一键。',
                                            'type' => 'string',
                                            'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => '20089398',
                                        ],
                                        'TaskErrorMessage' => [
                                            'description' => '任务失败信息。',
                                            'type' => 'string',
                                            'example' => 'TaskErrorMessage',
                                        ],
                                        'TaskAction' => [
                                            'description' => '任务Action，后端任务类型唯一键。',
                                            'type' => 'string',
                                            'example' => 'multi_scale_out',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6045D78-C119-5A17-9DEA-0F810394E008\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageRecordCount\\": 30,\\n  \\"TotalRecordCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": \\"RUNNING\\",\\n      \\"FinishTime\\": \\"2021-10-20T20:00:00Z\\",\\n      \\"Progress\\": \\"80\\",\\n      \\"BeginTime\\": \\"2021-10-20T19:40:00Z\\",\\n      \\"TaskErrorCode\\": \\"TaskErrorCode\\",\\n      \\"DBName\\": \\"DBName\\",\\n      \\"ProgressInfo\\": \\"ProgressInfo\\",\\n      \\"ScaleOutToken\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n      \\"TaskId\\": \\"20089398\\",\\n      \\"TaskErrorMessage\\": \\"TaskErrorMessage\\",\\n      \\"TaskAction\\": \\"multi_scale_out\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeTasksResponse>\\n    <RequestId>D6045D78-C119-5A17-9DEA-0F810394E008</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageRecordCount>30</PageRecordCount>\\n    <TotalRecordCount>2</TotalRecordCount>\\n    <Items>\\n        <Status>RUNNING</Status>\\n        <FinishTime>2021-10-20T20:00:00Z</FinishTime>\\n        <Progress>80</Progress>\\n        <BeginTime>2021-10-20T19:40:00Z</BeginTime>\\n        <TaskErrorCode>TaskErrorCode</TaskErrorCode>\\n        <DBName>DBName</DBName>\\n        <ProgressInfo>ProgressInfo</ProgressInfo>\\n        <ScaleOutToken>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</ScaleOutToken>\\n        <TaskId>20089398</TaskId>\\n        <TaskErrorMessage>TaskErrorMessage</TaskErrorMessage>\\n        <TaskAction>multi_scale_out</TaskAction>\\n    </Items>\\n</DescribeTasksResponse>","errorExample":""}]',
            'title' => '获取实例任务列表',
            'summary' => '获取实例任务列表。',
        ],
        'DescribeScaleOutMigrateTaskList' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86260',
                'abilityTreeNodes' => [
                    'FEATUREdrds0SX279',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Progress' => [
                                'description' => '迁移任务进度。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '32',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Progress\\": 32,\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeScaleOutMigrateTaskListResponse>\\n    <Progress>32</Progress>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n</DescribeScaleOutMigrateTaskListResponse>","errorExample":""}]',
            'title' => '展示数据迁移任务进度',
            'summary' => '展示ScaleOut迁移任务进度。',
        ],
        'UpdateDBInstanceSSL' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86293',
                'abilityTreeNodes' => [
                    'FEATUREdrdsUULYZA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'EnableSSL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启SSL。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'CertCommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书绑定域名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'pxc-hzrqjarxdocd4t.polarx.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Data' => [
                                'description' => '请求返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '后端任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2209883',
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
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 2209883\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateDBInstanceSSLResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Data>\\n        <TaskId>2209883</TaskId>\\n    </Data>\\n</UpdateDBInstanceSSLResponse>","errorExample":""}]',
            'title' => '更新实例SSL配置',
            'summary' => '更新实例SSL配置。',
        ],
        'ModifyParameter' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86282',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasdyuoo',
                    ],
                ],
                [
                    'name' => 'ParamLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- **compute**：计算层参数；'."\n"
                            .'- **storage**：存储层参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'compute',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数为符合JSON格式的字符串，MapKey表示参数名称，MapValue表示参数值。可修改的具体参数是动态增删的，请通过[DescribeParameterTemplates](~~196856~~)接口获取，一次可以传入多个参数。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"CONN_POOL_BLOCK_TIMEOUT":6000}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端请求Token，任意唯一字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
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
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyParameterResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n</ModifyParameterResponse>","errorExample":""}]',
            'title' => '修改实例参数',
            'summary' => '调用ModifyParameter接口修改实例参数，包括计算层和存储层。',
        ],
        'DescribeParameterTemplates' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86254',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'ParamLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数级别，取值如下：'."\n"
                            .'- **compute**：计算层；'."\n"
                            .'- **storage**：存储层。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'compute',
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
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Engine' => [
                                        'description' => '引擎，默认polarx。',
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'EngineVersion' => [
                                        'description' => '引擎版本，默认2.0。',
                                        'type' => 'string',
                                        'example' => '2.0',
                                    ],
                                    'ParameterCount' => [
                                        'description' => '参数个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '218',
                                    ],
                                    'Parameters' => [
                                        'description' => '参数列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CheckingCode' => [
                                                    'description' => '检测约制。',
                                                    'type' => 'string',
                                                    'example' => '[0|1]',
                                                ],
                                                'ParameterName' => [
                                                    'description' => '参数名。',
                                                    'type' => 'string',
                                                    'example' => 'loose_enable_gts',
                                                ],
                                                'Dynamic' => [
                                                    'description' => '是否动态：'."\n"
                                                        ."\n"
                                                        .'- **0**：否；'."\n"
                                                        .'- **1**：是。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ParameterValue' => [
                                                    'description' => '参数值。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'ParameterDescription' => [
                                                    'description' => '参数描述。',
                                                    'type' => 'string',
                                                    'example' => 'polarx hatp addition param',
                                                ],
                                                'Revisable' => [
                                                    'description' => '是否可以修改'."\n"
                                                        ."\n"
                                                        .'- **0**：不能修改；'."\n"
                                                        .'- **1**：修改。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
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
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"Engine\\": \\"polarx\\",\\n    \\"EngineVersion\\": \\"2.0\\",\\n    \\"ParameterCount\\": 218,\\n    \\"Parameters\\": [\\n      {\\n        \\"CheckingCode\\": \\"[0|1]\\",\\n        \\"ParameterName\\": \\"loose_enable_gts\\",\\n        \\"Dynamic\\": 0,\\n        \\"ParameterValue\\": \\"1\\",\\n        \\"ParameterDescription\\": \\"polarx hatp addition param\\",\\n        \\"Revisable\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParameterTemplatesResponse>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Data>\\n        <Engine>polarx</Engine>\\n        <EngineVersion>2.0</EngineVersion>\\n        <ParameterCount>218</ParameterCount>\\n        <Parameters>\\n            <CheckingCode>[0|1]</CheckingCode>\\n            <ParameterName>loose_enable_gts</ParameterName>\\n            <Dynamic>0</Dynamic>\\n            <ParameterValue>1</ParameterValue>\\n            <ParameterDescription>polarx hatp addition param</ParameterDescription>\\n            <Revisable>0</Revisable>\\n        </Parameters>\\n    </Data>\\n</DescribeParameterTemplatesResponse>","errorExample":""}]',
            'title' => '查看参数模版详情',
            'summary' => '调用DescribeParameterTemplates接口获取实例参数模版列表。',
        ],
        'DescribeParameters' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'ParamLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数级别，取值：'."\n"
                            ."\n"
                            .'- compute：计算层 ；'."\n"
                            .'- storage：存储层。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'compute',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '6BA32080EEA',
                            ],
                            'Data' => [
                                'description' => '参数详情。',
                                'type' => 'object',
                                'properties' => [
                                    'EngineVersion' => [
                                        'description' => '引擎版本，默认2.0。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '2.0',
                                    ],
                                    'Engine' => [
                                        'description' => '引擎，默认polarx。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'ConfigParameters' => [
                                        'description' => '原始参数列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParameterDescription' => [
                                                    'description' => '参数描述。',
                                                    'type' => 'string',
                                                    'example' => '存储节点私有协议开关(-1关闭，0开启)',
                                                ],
                                                'ParameterName' => [
                                                    'description' => '参数名称。',
                                                    'type' => 'string',
                                                    'example' => 'CONN_POOL_XPROTO_STORAGE_DB_PORT',
                                                ],
                                                'ParameterValue' => [
                                                    'description' => '参数值。',
                                                    'type' => 'string',
                                                    'example' => '-1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RunningParameters' => [
                                        'description' => '运行中的参数详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParameterDescription' => [
                                                    'description' => '参数描述。',
                                                    'type' => 'string',
                                                    'example' => '存储节点私有协议开关(-1关闭，0开启)',
                                                ],
                                                'ParameterName' => [
                                                    'description' => '参数名称。',
                                                    'type' => 'string',
                                                    'example' => 'CONN_POOL_XPROTO_STORAGE_DB_PORT',
                                                ],
                                                'ParameterValue' => [
                                                    'description' => '参数取值。',
                                                    'type' => 'string',
                                                    'example' => '-1',
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
                        'errorCode' => 'InvalidDBInstance.NotFound',
                        'errorMessage' => 'The specified DB instance does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6BA32080EEA\\",\\n  \\"Data\\": {\\n    \\"EngineVersion\\": \\"2.0\\",\\n    \\"Engine\\": \\"polarx\\",\\n    \\"ConfigParameters\\": [\\n      {\\n        \\"ParameterDescription\\": \\"存储节点私有协议开关(-1关闭，0开启)\\",\\n        \\"ParameterName\\": \\"CONN_POOL_XPROTO_STORAGE_DB_PORT\\",\\n        \\"ParameterValue\\": \\"-1\\"\\n      }\\n    ],\\n    \\"RunningParameters\\": [\\n      {\\n        \\"ParameterDescription\\": \\"存储节点私有协议开关(-1关闭，0开启)\\",\\n        \\"ParameterName\\": \\"CONN_POOL_XPROTO_STORAGE_DB_PORT\\",\\n        \\"ParameterValue\\": \\"-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeParametersResponse>\\n    <RequestId>6BA32080EEA</RequestId>\\n    <Data>\\n        <EngineVersion>2.0</EngineVersion>\\n        <Engine>polarx</Engine>\\n        <ConfigParameters>\\n            <ParameterDescription>存储节点私有协议开关(-1关闭，0开启)</ParameterDescription>\\n            <ParameterName>CONN_POOL_XPROTO_STORAGE_DB_PORT</ParameterName>\\n            <ParameterValue>-1</ParameterValue>\\n        </ConfigParameters>\\n        <RunningParameters>\\n            <ParameterDescription>存储节点私有协议开关(-1关闭，0开启)</ParameterDescription>\\n            <ParameterName>CONN_POOL_XPROTO_STORAGE_DB_PORT</ParameterName>\\n            <ParameterValue>-1</ParameterValue>\\n        </RunningParameters>\\n    </Data>\\n</DescribeParametersResponse>","errorExample":""}]',
            'title' => '获取参数列表',
            'summary' => '调用DescribeParameters接口获取实例参数。',
        ],
        'CreateBackup' => [
            'methods' => [
                'post',
                'get',
                'put',
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
                'operationType' => 'none',
                'abilityTreeCode' => '86225',
                'abilityTreeNodes' => [
                    'FEATUREdrdsE1M93A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-**************',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份种类，目前只支持“0”，表示快速备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功为空，失败为报错信息。',
                                'type' => 'string',
                                'example' => '*****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'BackupSetId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"*****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"BackupSetId\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateBackupResponse>\\n    <Message>*****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <BackupSetId>627833</BackupSetId>\\n    </Data>\\n</CreateBackupResponse>","errorExample":""}]',
            'title' => '创建备份',
            'summary' => '调用CreateBackup接口创建备份。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '86236',
                'abilityTreeNodes' => [
                    'FEATUREdrdsE1M93A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'B87E2AB3-B7C9-4394-9160-7F639F732031',
                            ],
                            'Success' => [
                                'description' => ' 请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回体。',
                                'type' => 'object',
                                'properties' => [
                                    'LogLocalRetentionSpace' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'DBInstanceName' => [
                                        'type' => 'string',
                                    ],
                                    'BackupWay' => [
                                        'type' => 'string',
                                    ],
                                    'BackupPeriod' => [
                                        'type' => 'string',
                                    ],
                                    'ForceCleanOnHighSpaceUsage' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BackupType' => [
                                        'type' => 'string',
                                    ],
                                    'LocalLogRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemoveLogRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BackupPlanBegin' => [
                                        'type' => 'string',
                                    ],
                                    'BackupSetRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'IsEnabled' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ColdDataBackupInterval' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ColdDataBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'LocalLogRetentionNumber' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'IsCrossRegionDataBackupEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'IsCrossRegionLogBackupEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'DestCrossRegion' => [
                                        'type' => 'string',
                                    ],
                                    'CrossRegionDataBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CrossRegionLogBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"B87E2AB3-B7C9-4394-9160-7F639F732031\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LogLocalRetentionSpace\\": 0,\\n    \\"DBInstanceName\\": \\"\\",\\n    \\"BackupWay\\": \\"\\",\\n    \\"BackupPeriod\\": \\"\\",\\n    \\"ForceCleanOnHighSpaceUsage\\": 0,\\n    \\"BackupType\\": \\"\\",\\n    \\"LocalLogRetention\\": 0,\\n    \\"RemoveLogRetention\\": 0,\\n    \\"BackupPlanBegin\\": \\"\\",\\n    \\"BackupSetRetention\\": 0,\\n    \\"IsEnabled\\": 0,\\n    \\"ColdDataBackupInterval\\": 0,\\n    \\"ColdDataBackupRetention\\": 0,\\n    \\"LocalLogRetentionNumber\\": 0,\\n    \\"IsCrossRegionDataBackupEnabled\\": true,\\n    \\"IsCrossRegionLogBackupEnabled\\": true,\\n    \\"DestCrossRegion\\": \\"\\",\\n    \\"CrossRegionDataBackupRetention\\": 0,\\n    \\"CrossRegionLogBackupRetention\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupPolicyResponse>\\n    <Message>success</Message>\\n    <RequestId>B87E2AB3-B7C9-4394-9160-7F639F732031</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <LogLocalRetentionSpace>30</LogLocalRetentionSpace>\\n        <DBInstanceName>pxc-xxxxxx</DBInstanceName>\\n        <BackupWay>P</BackupWay>\\n        <BackupPeriod>1001000</BackupPeriod>\\n        <ForceCleanOnHighSpaceUsage>1</ForceCleanOnHighSpaceUsage>\\n        <BackupType>0</BackupType>\\n        <LocalLogRetention>30</LocalLogRetention>\\n        <RemoveLogRetention>7</RemoveLogRetention>\\n        <BackupPlanBegin>03:00Z</BackupPlanBegin>\\n        <BackupSetRetention>7</BackupSetRetention>\\n        <IsEnabled>1</IsEnabled>\\n        <ColdDataBackupInterval>30</ColdDataBackupInterval>\\n        <ColdDataBackupRetention>30</ColdDataBackupRetention>\\n        <LocalLogRetentionNumber>60</LocalLogRetentionNumber>\\n        <IsCrossRegionDataBackupEnabled>false</IsCrossRegionDataBackupEnabled>\\n        <IsCrossRegionLogBackupEnabled>false</IsCrossRegionLogBackupEnabled>\\n        <DestCrossRegion>cn-shanghai</DestCrossRegion>\\n        <CrossRegionDataBackupRetention>30</CrossRegionDataBackupRetention>\\n        <CrossRegionLogBackupRetention>30</CrossRegionLogBackupRetention>\\n    </Data>\\n</DescribeBackupPolicyResponse>","errorExample":""}]',
            'title' => '查询实例备份设置',
            'summary' => '调用DescribeBackupPolicy接口查询实例备份设置。',
        ],
        'DescribeBackupSetList' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '86237',
                'abilityTreeNodes' => [
                    'FEATUREdrdsE1M93A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-xxxxxx',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间的时间戳， 单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1635707845000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间的时间戳， 单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1635707845000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的数据大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页下标，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DestCrossRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集所在的地域，指定后可返回某个具体地域的备份集，一次仅支持指定一个地域。',
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
                            'Message' => [
                                'description' => '返回信息，成功为success，错误返回错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1A6D328C-84B8-40DC-BF49-6C73984D7494',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '备份结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1635706960956',
                                        ],
                                        'Status' => [
                                            'description' => '备份集状态：'."\n"
                                                ."\n"
                                                .'- **0**： 备份中；'."\n"
                                                .'- **1**：备份成功；'."\n"
                                                .'- **2**：备份失败。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BackupSetSize' => [
                                            'description' => '备份集大小， 单位为byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '88803195',
                                        ],
                                        'BackupSetId' => [
                                            'description' => '备份集ID。',
                                            'type' => 'string',
                                            'example' => '111',
                                        ],
                                        'BackupType' => [
                                            'description' => '备份类型：'."\n"
                                                ."\n"
                                                .'- **0**：快速备份；'."\n"
                                                .'- **1**：一致性备份。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BeginTime' => [
                                            'description' => '备份开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1635706960956',
                                        ],
                                        'BackupModel' => [
                                            'description' => '备份模式：'."\n"
                                                ."\n"
                                                .'- **0**：自动备份；'."\n"
                                                .'- **1**：手动备份。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"1A6D328C-84B8-40DC-BF49-6C73984D7494\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": 1635706960956,\\n      \\"Status\\": 1,\\n      \\"BackupSetSize\\": 88803195,\\n      \\"BackupSetId\\": \\"111\\",\\n      \\"BackupType\\": 1,\\n      \\"BeginTime\\": 1635706960956,\\n      \\"BackupModel\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupSetListResponse>\\n    <Message>success</Message>\\n    <RequestId>1A6D328C-84B8-40DC-BF49-6C73984D7494</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <EndTime>1635706960956</EndTime>\\n        <Status>1</Status>\\n        <BackupSetSize>88803195</BackupSetSize>\\n        <BackupSetId>111</BackupSetId>\\n        <BackupType>1</BackupType>\\n        <BeginTime>1635706960956</BeginTime>\\n        <BackupModel>0</BackupModel>\\n    </Data>\\n</DescribeBackupSetListResponse>","errorExample":""}]',
            'title' => '查看备份集列表',
            'summary' => '调用DescribeBackupSetList接口查看备份集列表。',
        ],
        'DescribeBinaryLogList' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86238',
                'abilityTreeNodes' => [
                    'FEATUREdrdsAS582G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页获取当前binlog列表时，需填写当前页码，默认从第1页开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                        'pattern' => '^\\d+$',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页获取binlog数量，默认填写30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '5',
                        'example' => '30',
                        'pattern' => '^\\d+$',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hz1fds',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询binlog列表开始时间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-09-09 10:27:46',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询binlog列表结束时间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2021-11-09 10:27:46',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2DFF784E-DC31-5BBC-9B25-9261CD9E0AA9',
                            ],
                            'PageNumber' => [
                                'description' => '当前查询的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '当前页显示的binlog数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'TotalNumber' => [
                                'description' => '查询到的binlog文件总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'LogList' => [
                                'description' => 'binlog文件列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '当前binlog结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-09 10:27:46',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '最后更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-09 10:27:46',
                                        ],
                                        'UploadHost' => [
                                            'description' => '备份host。',
                                            'type' => 'string',
                                            'example' => '10.110.88.9',
                                        ],
                                        'UploadStatus' => [
                                            'description' => '备份状态：'."\n"
                                                ."\n"
                                                .'- 0：未备份； '."\n"
                                                .'- 1：备份中； '."\n"
                                                .'- 2：已备份。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'DownloadLink' => [
                                            'description' => '文件下载链接，2天内有效。',
                                            'type' => 'string',
                                            'example' => 'http://polarx-cdc-binlog-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/polardbx_cdc/pxc-hzfd132143sfds1/binlog.000001?Expires=1636469502&OSSAccessKeyId=LT13fds12dsafddsf&Signature=fdpm%bdsfadsa%2F%bdsafdsaf%3D',
                                        ],
                                        'BeginTime' => [
                                            'description' => '日志开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-09 10:27:46',
                                        ],
                                        'LogSize' => [
                                            'description' => '当前日志文件大小。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '536870912',
                                        ],
                                        'FileName' => [
                                            'description' => 'binlog文件名称。',
                                            'type' => 'string',
                                            'example' => 'binlog.000001',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '文件创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-09 10:27:46',
                                        ],
                                        'PurgeStatus' => [
                                            'description' => '清理状态：'."\n"
                                                ."\n"
                                                .'- 0：未删除； '."\n"
                                                .'- 1：已删除。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Id' => [
                                            'description' => '当前记录的唯一ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2DFF784E-DC31-5BBC-9B25-9261CD9E0AA9\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 30,\\n  \\"TotalNumber\\": 100,\\n  \\"LogList\\": [\\n    {\\n      \\"EndTime\\": \\"2021-11-09 10:27:46\\",\\n      \\"ModifiedTime\\": \\"2021-11-09 10:27:46\\",\\n      \\"UploadHost\\": \\"10.110.88.9\\",\\n      \\"UploadStatus\\": 2,\\n      \\"DownloadLink\\": \\"http://polarx-cdc-binlog-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/polardbx_cdc/pxc-hzfd132143sfds1/binlog.000001?Expires=1636469502&OSSAccessKeyId=LT13fds12dsafddsf&Signature=fdpm%bdsfadsa%2F%bdsafdsaf%3D\\",\\n      \\"BeginTime\\": \\"2021-09-09 10:27:46\\",\\n      \\"LogSize\\": 536870912,\\n      \\"FileName\\": \\"binlog.000001\\",\\n      \\"CreatedTime\\": \\"2021-09-09 10:27:46\\",\\n      \\"PurgeStatus\\": 0,\\n      \\"Id\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBinaryLogListResponse>\\n    <RequestId>2DFF784E-DC31-5BBC-9B25-9261CD9E0AA9</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>30</PageSize>\\n    <TotalNumber>100</TotalNumber>\\n    <LogList>\\n        <EndTime>2021-11-09 10:27:46</EndTime>\\n        <ModifiedTime>2021-11-09 10:27:46</ModifiedTime>\\n        <UploadHost>10.110.88.9</UploadHost>\\n        <UploadStatus>2</UploadStatus>\\n        <DownloadLink>http://polarx-cdc-binlog-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/polardbx_cdc/pxc-hzfd132143sfds1/binlog.000001?Expires=1636469502&amp;OSSAccessKeyId=LT13fds12dsafddsf&amp;Signature=fdpm%bdsfadsa%2F%bdsafdsaf%3D</DownloadLink>\\n        <BeginTime>2021-09-09 10:27:46</BeginTime>\\n        <LogSize>536870912</LogSize>\\n        <FileName>binlog.000001</FileName>\\n        <CreatedTime>2021-09-09 10:27:46</CreatedTime>\\n        <PurgeStatus>0</PurgeStatus>\\n        <Id>100</Id>\\n    </LogList>\\n</DescribeBinaryLogListResponse>","errorExample":""}]',
            'title' => '查询Binlog日志',
            'summary' => '调用DescribeBinaryLogList接口查询Binlog日志。',
            'description' => '- binlog文件默认保存15天。'."\n"
                .'- 返回的日志列表中包含日志记录结束时间在查询开始时间之后，并且日志记录开始时间在查询结束时间之前的所有日志。'."\n"
                .'- 当DownloadLink不为NULL时，用户可以根据此URL下载备份文件，此URL自生成后2天内有效，请在过期时间之前下载。',
        ],
        'UpdateBackupPolicy' => [
            'methods' => [
                'post',
                'get',
                'put',
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
                'operationType' => 'none',
                'abilityTreeCode' => '86292',
                'abilityTreeNodes' => [
                    'FEATUREdrds8KEOBF',
                ],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasdyuoo',
                    ],
                ],
                [
                    'name' => 'BackupPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份周期。至少需要指定2天，7位数数值，从左到右每一位数值代表周一到周日是否开启备份。取值0代表不备份，取值1代表备份：'."\n"
                            ."\n"
                            .'- 第一位数值：周一'."\n"
                            .'- 第二位数值：周二'."\n"
                            .'- 第三位数值：周三'."\n"
                            .'- 第四位数值：周四'."\n"
                            .'- 第五位数值：周五'."\n"
                            .'- 第六位数值：周六'."\n"
                            .'- 第七位数值：周日'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1001000',
                    ],
                ],
                [
                    'name' => 'BackupPlanBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每天备份开启时间，UTC时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '03:00Z',
                    ],
                ],
                [
                    'name' => 'BackupSetRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份集保留时间，单位天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份种类，目前只支持“0”，表示快速备份。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'BackupWay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备份手段，枚举值'."\n"
                            ."\n"
                            .'- **P**：物理备份'."\n"
                            .'- **L**：逻辑备份',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'P',
                    ],
                ],
                [
                    'name' => 'ForceCleanOnHighSpaceUsage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当实例总空间使用率超过80%或剩余空间不足50 GB时，是否强制清理Binlog。从最早的开始清理，直到总空间使用率降到80%以下且剩余空间大于50 GB。取值如下：'."\n"
                            ."\n"
                            .'- **1**：是'."\n"
                            .'- **0**：否',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启备份，固定值1，表示开启。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'LocalLogRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志备份本地保留小时数， 范围为0到7×24小时， 0表示不保留，默认7小时。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'RemoveLogRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志备份远程保留天数（ 7~730） 单位天， 默认7天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'LogLocalRetentionSpace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本地日志最大空间使用率，参数大小为0~50，此为循环空间，默认为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ColdDataBackupInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '冷数据备份间隔天数，取值范围为1~59。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'ColdDataBackupRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '冷数据备份保留天数，取值范围为30~730。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'LocalLogRetentionNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本地Binlog保留个数，默认为60，取值范围为6~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'IsCrossRegionDataBackupEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启跨地域数据备份，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'IsCrossRegionLogBackupEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启跨地域日志备份，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DestCrossRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨地域备份的目标地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'CrossRegionDataBackupRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨地域数据备份的保存时间，单位：天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'CrossRegionLogBackupRetention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨地域日志备份的保存时间，单位：天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回的策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'LogLocalRetentionSpace' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'DBInstanceName' => [
                                        'type' => 'string',
                                    ],
                                    'BackupWay' => [
                                        'type' => 'string',
                                    ],
                                    'BackupPeriod' => [
                                        'type' => 'string',
                                    ],
                                    'ForceCleanOnHighSpaceUsage' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BackupType' => [
                                        'type' => 'string',
                                    ],
                                    'LocalLogRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemoveLogRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BackupPlanBegin' => [
                                        'type' => 'string',
                                    ],
                                    'BackupSetRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'IsEnabled' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ColdDataBackupInterval' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ColdDataBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'LocalLogRetentionNumber' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'IsCrossRegionDataBackupEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'IsCrossRegionLogBackupEnabled' => [
                                        'type' => 'boolean',
                                    ],
                                    'DestCrossRegion' => [
                                        'type' => 'string',
                                    ],
                                    'CrossRegionDataBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CrossRegionLogBackupRetention' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LogLocalRetentionSpace\\": 0,\\n    \\"DBInstanceName\\": \\"\\",\\n    \\"BackupWay\\": \\"\\",\\n    \\"BackupPeriod\\": \\"\\",\\n    \\"ForceCleanOnHighSpaceUsage\\": 0,\\n    \\"BackupType\\": \\"\\",\\n    \\"LocalLogRetention\\": 0,\\n    \\"RemoveLogRetention\\": 0,\\n    \\"BackupPlanBegin\\": \\"\\",\\n    \\"BackupSetRetention\\": 0,\\n    \\"IsEnabled\\": 0,\\n    \\"ColdDataBackupInterval\\": 0,\\n    \\"ColdDataBackupRetention\\": 0,\\n    \\"LocalLogRetentionNumber\\": 0,\\n    \\"IsCrossRegionDataBackupEnabled\\": true,\\n    \\"IsCrossRegionLogBackupEnabled\\": true,\\n    \\"DestCrossRegion\\": \\"\\",\\n    \\"CrossRegionDataBackupRetention\\": 0,\\n    \\"CrossRegionLogBackupRetention\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateBackupPolicyResponse>\\n    <Message>success</Message>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <LogLocalRetentionSpace>30</LogLocalRetentionSpace>\\n        <DBInstanceName>pxc-hzjasdyuoo</DBInstanceName>\\n        <BackupWay>P</BackupWay>\\n        <BackupPeriod>1001000</BackupPeriod>\\n        <ForceCleanOnHighSpaceUsage>1</ForceCleanOnHighSpaceUsage>\\n        <BackupType>0</BackupType>\\n        <LocalLogRetention>7</LocalLogRetention>\\n        <RemoveLogRetention>7</RemoveLogRetention>\\n        <BackupPlanBegin>03:00Z</BackupPlanBegin>\\n        <BackupSetRetention>30</BackupSetRetention>\\n        <IsEnabled>1</IsEnabled>\\n        <ColdDataBackupInterval>30</ColdDataBackupInterval>\\n        <ColdDataBackupRetention>30</ColdDataBackupRetention>\\n        <LocalLogRetentionNumber>60</LocalLogRetentionNumber>\\n        <IsCrossRegionDataBackupEnabled>false</IsCrossRegionDataBackupEnabled>\\n        <IsCrossRegionLogBackupEnabled>false</IsCrossRegionLogBackupEnabled>\\n        <DestCrossRegion>cn-shanghai</DestCrossRegion>\\n        <CrossRegionDataBackupRetention>30</CrossRegionDataBackupRetention>\\n        <CrossRegionLogBackupRetention>30</CrossRegionLogBackupRetention>\\n    </Data>\\n</UpdateBackupPolicyResponse>","errorExample":""}]',
            'title' => '修改实例备份策略',
            'summary' => '调用UpdateBackupPolicy接口修改实例备份策略。',
        ],
        'UpdateDBInstanceTDE' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86295',
                'abilityTreeNodes' => [
                    'FEATUREdrds9HBOA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'TDEStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启，固定取值1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EncryptionKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义密钥ID时传入。也可以不传入使用后端自动生成。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'RkVBNURDMjAtNkQ4QS01OTc5LTk3QUEtRkM1NzU0Nk******',
                    ],
                ],
                [
                    'name' => 'RoleArn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '角色的全局资源描述符，用来指定具体角色。详情请参见RAM角色概览。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'acs:ram::1406926****:role/aliyunrdsinstanceencryptiondefaultrole',
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
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Data' => [
                                'description' => '返回信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '后端任务ID。',
                                        'type' => 'string',
                                        'example' => '42292****',
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
                        'errorCode' => 'IncorrectEngineVersion',
                        'errorMessage' => 'The current engine version does not support the operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"42292****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateDBInstanceTDEResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Data>\\n        <TaskId>42292****</TaskId>\\n    </Data>\\n</UpdateDBInstanceTDEResponse>","errorExample":""}]',
            'title' => '开启实例TDE',
            'summary' => '调用UpdateDBInstanceTDE接口开启实例TDE。',
        ],
        'ModifySecurityIps' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例的白名单分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'SecurityIPList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单分组里的IP列表，多个IP白名单间用英文逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.0.1,192.168.0.0',
                    ],
                ],
                [
                    'name' => 'ModifyMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单修改模式，取值范围如下：'."\n"
                            ."\n"
                            .'- 0：覆盖修改白名单分组；'."\n"
                            .'- 1：新增白名单分组；'."\n"
                            .'- 2：删除白名单分组。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '请求返回信息，正确显示success，错误显示错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifySecurityIpsResponse>\\n    <Message>success</Message>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Success>true</Success>\\n</ModifySecurityIpsResponse>","errorExample":""}]',
            'title' => '修改实例白名单',
            'summary' => '调用ModifySecurityIps接口修改实例白名单。',
        ],
        'DescribeUserEncryptionKeyList' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86265',
                'abilityTreeNodes' => [
                    'FEATUREdrds9HBOA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-hzjasd****',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'KeyIds' => [
                                        'description' => '密钥列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户密钥。',
                                            'type' => 'string',
                                            'example' => 'RkVBNURDMjAtNkQ4QS01OTc5LTk3QUEtRkM1NzU0Nk******',
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
                        'errorCode' => 'IncorrectEngineVersion',
                        'errorMessage' => 'The current engine version does not support the operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Data\\": {\\n    \\"KeyIds\\": [\\n      \\"RkVBNURDMjAtNkQ4QS01OTc5LTk3QUEtRkM1NzU0Nk******\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserEncryptionKeyListResponse>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Data>\\n        <KeyIds>RkVBNURDMjAtNkQ4QS01OTc5LTk3QUEtRkM1NzU0Nk******</KeyIds>\\n    </Data>\\n</DescribeUserEncryptionKeyListResponse>","errorExample":""}]',
            'title' => '获取用户TDE秘钥列表',
            'summary' => '调用DescribeUserEncryptionKeyList接口获取用户TDE秘钥列表。',
        ],
        'DescribeSecurityIps' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '接口额外返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceName' => [
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'pxc-hzjasd****',
                                    ],
                                    'GroupItems' => [
                                        'description' => '白名单分组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupName' => [
                                                    'description' => '白名单分组名称。',
                                                    'type' => 'string',
                                                    'example' => 'defaultGroup',
                                                ],
                                                'SecurityIPList' => [
                                                    'description' => '分组白名单详情。',
                                                    'type' => 'string',
                                                    'example' => '127.0.0.1,172.168.0.0',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DBInstanceName\\": \\"pxc-hzjasd****\\",\\n    \\"GroupItems\\": [\\n      {\\n        \\"GroupName\\": \\"defaultGroup\\",\\n        \\"SecurityIPList\\": \\"127.0.0.1,172.168.0.0\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSecurityIpsResponse>\\n    <Message>success</Message>\\n    <RequestId>14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <DBInstanceName>pxc-hzjasd****</DBInstanceName>\\n        <GroupItems>\\n            <GroupName>defaultGroup</GroupName>\\n            <SecurityIPList>127.0.0.1,172.168.0.0</SecurityIPList>\\n        </GroupItems>\\n    </Data>\\n</DescribeSecurityIpsResponse>","errorExample":""}]',
            'title' => '查看实例白名单信息',
            'summary' => '调用DescribeSecurityIps接口查看实例白名单。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-**************',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待创建的账号名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testAccount',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待创建账号的账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Test@1111',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权数据库名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'testdb',
                    ],
                ],
                [
                    'name' => 'AccountPrivilege',
                    'in' => 'query',
                    'schema' => [
                        'description' => '给新创建的账号授权某数据库的权限，包括：'."\n"
                            ."\n"
                            .'- ReadWrite'."\n"
                            .'- ReadOnly'."\n"
                            .'- DMLOnly'."\n"
                            .'- DDLOnly',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ReadWrite',
                    ],
                ],
                [
                    'name' => 'AccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号名称。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityAccount',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号密码。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityPassword',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功为空，失败为报错信息。',
                                'type' => 'string',
                                'example' => '****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <Message>****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</CreateAccountResponse>","errorExample":""}]',
            'title' => '创建普通账号',
            'summary' => '调用CreateAccount接口创建账号。',
        ],
        'CreateSuperAccount' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-************',
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
                        'example' => 'dba',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testdbapassword',
                    ],
                ],
                [
                    'name' => 'AccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testdbadescription',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功为空，失败返回错误信息。',
                                'type' => 'string',
                                'example' => '*****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"*****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateSuperAccountResponse>\\n    <Message>*****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</CreateSuperAccountResponse>","errorExample":""}]',
            'title' => '创建高权限账号',
            'summary' => '调用CreateSuperAccount接口创建高权限账号，一个实例只能有一个高权限账号。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-*********',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除的账号名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testaccount',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号名称。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityAccount',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号密码。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityPassword',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功为空，失败返回错误信息。',
                                'type' => 'string',
                                'example' => '****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <Message>****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</DeleteAccountResponse>","errorExample":""}]',
            'title' => '删除实例账号',
            'summary' => '调用DeleteAccount接口删除账号。',
        ],
        'DescribeAccountList' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名称，需要查询某个账号时输入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testaccount',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号类型，需要查询某类账号时输入，null返回所有账号。'."\n"
                            ."\n"
                            .'- 开启三权分立前：0代表普通账号，1代表高权限账号；'."\n"
                            .'- 开启三权分立后，0代表普通账号，2代表系统管理员账号，3代表安全管理员账号，4代表审计管理员账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtCreated' => [
                                            'description' => '账号创建时间.',
                                            'type' => 'string',
                                            'example' => '2012-06-08T15:00Z',
                                        ],
                                        'DBInstanceName' => [
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'pxc-*********',
                                        ],
                                        'AccountDescription' => [
                                            'description' => '账号描述。',
                                            'type' => 'string',
                                            'example' => 'testaccount desc',
                                        ],
                                        'DBName' => [
                                            'description' => '账号被授予权限的数据库。',
                                            'type' => 'string',
                                            'example' => 'testdb',
                                        ],
                                        'AccountPrivilege' => [
                                            'description' => '账号被授予的权限。',
                                            'type' => 'string',
                                            'example' => 'ReadWrite',
                                        ],
                                        'AccountType' => [
                                            'description' => '账号类型。'."\n"
                                                ."\n"
                                                .'- 开启三权分立前：0代表普通账号，1代表高权限账号；'."\n"
                                                .'- 开启三权分立后，0代表普通账号，2代表系统管理员账号，3代表安全管理员账号，4代表审计管理员账号。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'AccountName' => [
                                            'description' => '账号名称。',
                                            'type' => 'string',
                                            'example' => 'testAccount',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"GmtCreated\\": \\"2012-06-08T15:00Z\\",\\n      \\"DBInstanceName\\": \\"pxc-*********\\",\\n      \\"AccountDescription\\": \\"testaccount desc\\",\\n      \\"DBName\\": \\"testdb\\",\\n      \\"AccountPrivilege\\": \\"ReadWrite\\",\\n      \\"AccountType\\": \\"0\\",\\n      \\"AccountName\\": \\"testAccount\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountListResponse>\\n    <Message>success</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <GmtCreated>2012-06-08T15:00Z</GmtCreated>\\n        <DBInstanceName>pxc-*********</DBInstanceName>\\n        <AccountDescription>testaccount desc</AccountDescription>\\n        <DBName>testdb</DBName>\\n        <AccountPrivilege>ReadWrite</AccountPrivilege>\\n        <AccountType>0</AccountType>\\n        <AccountName>testAccount</AccountName>\\n    </Data>\\n</DescribeAccountListResponse>","errorExample":""}]',
            'title' => '查询实例账号信息',
            'summary' => '调用DescribeAccountList接口获取账号列表。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account',
                    ],
                ],
                [
                    'name' => 'AccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试账号',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '接口额外返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'msg',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"msg\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountDescriptionResponse>\\n    <Message>msg</Message>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Success>true</Success>\\n</ModifyAccountDescriptionResponse>","errorExample":""}]',
            'title' => '修改实例的账号描述信息',
            'summary' => '调用ModifyAccountDescription接口修改账号备注描述。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '86259',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 错误代码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => ' 错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ErrorCode' => [
                                'description' => '错误代码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '区域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SupportPolarx10' => [
                                                    'description' => '支持polardb-x 1.0版本。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'SupportPolarx20' => [
                                                    'description' => '支持polardb-x 2.0版本。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RegionId' => [
                                                    'description' => '实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'ch-hangzhou',
                                                ],
                                                'Zones' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Zone' => [
                                                            'description' => '可用区列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ZoneId' => [
                                                                        'description' => '可用区。',
                                                                        'type' => 'string',
                                                                        'example' => 'cn-hangzhou-a',
                                                                    ],
                                                                    'VpcEnabled' => [
                                                                        'description' => '是否支持vpc。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"SupportPolarx10\\": true,\\n        \\"SupportPolarx20\\": true,\\n        \\"RegionId\\": \\"ch-hangzhou\\",\\n        \\"Zones\\": {\\n          \\"Zone\\": [\\n            {\\n              \\"ZoneId\\": \\"cn-hangzhou-a\\",\\n              \\"VpcEnabled\\": true\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Regions>\\n        <SupportPolarx10>true</SupportPolarx10>\\n        <SupportPolarx20>true</SupportPolarx20>\\n        <RegionId>ch-hangzhou</RegionId>\\n        <Zones>\\n            <ZoneId>cn-hangzhou-a</ZoneId>\\n            <VpcEnabled>true</VpcEnabled>\\n        </Zones>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查看可选的地域和可用区',
            'summary' => '调用DescribeRegions接口获取地域列表。',
        ],
        'CreateDB' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-**************',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建的数据库授权的指定账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testaccount',
                    ],
                ],
                [
                    'name' => 'Charset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '字符集，支持如下字符集：'."\n"
                            ."\n"
                            .'- **utf8**'."\n"
                            .'- **gbk**'."\n"
                            .'- **latin1**'."\n"
                            .'- **utf8mb4**',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'utf8mb4',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建的数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testdb',
                    ],
                ],
                [
                    'name' => 'AccountPrivilege',
                    'in' => 'query',
                    'schema' => [
                        'description' => '给新创建的账号授权某数据库的权限，包括：'."\n"
                            ."\n"
                            .'- **ReadWrite**'."\n"
                            .'- **ReadOnly**'."\n"
                            .'- **DMLOnly**'."\n"
                            .'- **DDLOnly**',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ReadWrite',
                    ],
                ],
                [
                    'name' => 'DbDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'db for test',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号名称。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityAccount',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号密码。'."\n"
                            ."\n"
                            .'> 若已开启三权分立模式，该参数必填，未开启三权分立可以不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'securityPassword',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => 'drds/auto 用来区分所建库为自动拆分模式，还是手动拆分模式',
                        'description' => '创建数据库时选择的模式，取值如下：'."\n"
                            ."\n"
                            .'- **auto**：该模式的数据库支持自动分区，即创建表时无需指定分区键；'."\n"
                            .'- **drds**：该模式的数据库不支持自动分区，创建表时需使用专用的分库分表语法，指定分库分表键。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto',
                        'enum' => [
                            'drds',
                            'auto',
                        ],
                    ],
                ],
                [
                    'name' => 'StoragePoolName',
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
                            'Message' => [
                                'description' => '成功为空，失败返回错误信息。',
                                'type' => 'string',
                                'example' => '*****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"*****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateDBResponse>\\n    <Message>*****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</CreateDBResponse>","errorExample":""}]',
            'title' => '创建数据库',
            'summary' => '调用CreateDB接口创建数据库。',
        ],
        'DeleteDB' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testdb',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功为空，失败返回错误信息。',
                                'type' => 'string',
                                'example' => '*****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"*****\\",\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBResponse>\\n    <Message>*****</Message>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n    <Success>true</Success>\\n</DeleteDBResponse>","errorExample":""}]',
            'title' => '删除数据库',
            'summary' => '调用DeleteDB接口删除数据库。',
        ],
        'DescribeCharacterSet' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-*********',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
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
                            'Message' => [
                                'description' => '返回信息，正确返回success，错误返回错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '709C1E40-092D-4A3D-9958-6D7438******',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Engine' => [
                                        'description' => '目标实例下数据库的存储类型，目前仅支持polarx。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'polarx',
                                    ],
                                    'CharacterSet' => [
                                        'description' => '实例支持的字符编码集，取值范围如下：'."\n"
                                            ."\n"
                                            .'- utf8mb4'."\n"
                                            .'- gbk'."\n"
                                            .'- latin1'."\n"
                                            .'- utf8',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '字符集。',
                                            'type' => 'string',
                                            'example' => 'utf8',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"709C1E40-092D-4A3D-9958-6D7438******\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Engine\\": \\"polarx\\",\\n    \\"CharacterSet\\": [\\n      \\"utf8\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCharacterSetResponse>\\n    <Message>success</Message>\\n    <RequestId>709C1E40-092D-4A3D-9958-6D7438******</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <Engine>polarx</Engine>\\n        <CharacterSet>utf8</CharacterSet>\\n    </Data>\\n</DescribeCharacterSetResponse>","errorExample":""}]',
            'title' => '查询字符集',
            'summary' => '调用DescribeCharacterSet接口查询目标实例下数据库所支持的字符集类型。',
        ],
        'DescribeDbList' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属的地域ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'db_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据库列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DBName' => [
                                            'description' => '数据库名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'DBDescription' => [
                                            'description' => '数据库描述。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'DBInstanceName' => [
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'pxc-********',
                                        ],
                                        'CharacterSetName' => [
                                            'description' => '字符集。',
                                            'type' => 'string',
                                            'example' => 'utf8mb4',
                                        ],
                                        'Accounts' => [
                                            'description' => '账户列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'AccountPrivilege' => [
                                                        'description' => '权限。',
                                                        'type' => 'string',
                                                        'example' => 'ReadWrite',
                                                    ],
                                                    'AccountName' => [
                                                        'description' => '账户名称。',
                                                        'type' => 'string',
                                                        'example' => 'root4test',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"DBName\\": \\"test\\",\\n      \\"DBDescription\\": \\"test\\",\\n      \\"DBInstanceName\\": \\"pxc-********\\",\\n      \\"CharacterSetName\\": \\"utf8mb4\\",\\n      \\"Accounts\\": [\\n        {\\n          \\"AccountPrivilege\\": \\"ReadWrite\\",\\n          \\"AccountName\\": \\"root4test\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDbListResponse>\\n    <Message>Success</Message>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <DBName>test</DBName>\\n        <DBDescription>test</DBDescription>\\n        <DBInstanceName>pxc-********</DBInstanceName>\\n        <CharacterSetName>utf8mb4</CharacterSetName>\\n        <Accounts>\\n            <AccountPrivilege>ReadWrite</AccountPrivilege>\\n            <AccountName>root4test</AccountName>\\n        </Accounts>\\n    </Data>\\n</DescribeDbListResponse>","errorExample":""}]',
            'title' => '查询获取实例下的数据库信息',
            'summary' => '调用DescribeDbList接口获取数据库列表。',
        ],
        'DescribeDistributeTableList' => [
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
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sbtest1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C458B1E8-1683-3645-B154-6BA32080EEA',
                            ],
                            'Success' => [
                                'description' => '是否请求成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Tables' => [
                                        'description' => '表列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TableName' => [
                                                    'description' => '表名。',
                                                    'type' => 'string',
                                                    'example' => 'sbtest1',
                                                ],
                                                'TableType' => [
                                                    'description' => '表类型。',
                                                    'type' => 'string',
                                                    'example' => 'multi',
                                                ],
                                                'TbKey' => [
                                                    'description' => '表key。',
                                                    'type' => 'string',
                                                    'example' => '“”',
                                                ],
                                                'DbKey' => [
                                                    'description' => '数据key。',
                                                    'type' => 'string',
                                                    'example' => 'id',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"C458B1E8-1683-3645-B154-6BA32080EEA\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Tables\\": [\\n      {\\n        \\"TableName\\": \\"sbtest1\\",\\n        \\"TableType\\": \\"multi\\",\\n        \\"TbKey\\": \\"“”\\",\\n        \\"DbKey\\": \\"id\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDistributeTableListResponse>\\n    <Message>Success</Message>\\n    <RequestId>C458B1E8-1683-3645-B154-6BA32080EEA</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <Tables>\\n            <TableName>sbtest1</TableName>\\n            <TableType>multi</TableType>\\n            <TbKey>“”</TbKey>\\n            <DbKey>id</DbKey>\\n        </Tables>\\n    </Data>\\n</DescribeDistributeTableListResponse>","errorExample":""}]',
            'title' => '获取数据库表列表',
            'summary' => '调用DescribeDistributeTableList接口获取数据库表列表。',
        ],
        'ModifyDatabaseDescription' => [
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
            'systemTags' => [],
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
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzjasd****',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testDB',
                    ],
                ],
                [
                    'name' => 'DbDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库备注描述。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试数据库',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '接口额外返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FEA5DC20-6D8A-5979-97AA-FC57546ADC20',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FEA5DC20-6D8A-5979-97AA-FC57546ADC20\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyDatabaseDescriptionResponse>\\n    <Message>success</Message>\\n    <RequestId>FEA5DC20-6D8A-5979-97AA-FC57546ADC20</RequestId>\\n    <Success>true</Success>\\n</ModifyDatabaseDescriptionResponse>","errorExample":""}]',
            'title' => '修改数据库描述',
            'summary' => '调用ModifyDatabaseDescription接口修改数据库备注描述。',
        ],
        'DescribeTags' => [
            'summary' => '获取标签信息。',
            'methods' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '117148',
                'abilityTreeNodes' => [
                    'FEATUREdrdsJGJ3OD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-xxx',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签Key',
                        'description' => '标签Key',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'requestid',
                            ],
                            'TagInfos' => [
                                'title' => '标签信息列表',
                                'description' => '标签信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagKey' => [
                                            'title' => '标签Key',
                                            'description' => '标签Key',
                                            'type' => 'string',
                                            'example' => 'testKey',
                                        ],
                                        'TagValue' => [
                                            'title' => '标签Value',
                                            'description' => '标签Value',
                                            'type' => 'string',
                                            'example' => 'testValue',
                                        ],
                                        'DBInstanceIds' => [
                                            'title' => '标签关联数据库实例列表',
                                            'description' => '标签关联数据库实例列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '实例名称',
                                                'type' => 'string',
                                                'example' => '数据库实例',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"requestid\\",\\n  \\"TagInfos\\": [\\n    {\\n      \\"TagKey\\": \\"testKey\\",\\n      \\"TagValue\\": \\"testValue\\",\\n      \\"DBInstanceIds\\": [\\n        \\"数据库实例\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取标签信息',
        ],
        'ListTagResources' => [
            'summary' => '标签列表获取。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '115498',
                'abilityTreeNodes' => [
                    'FEATUREdrdsJGJ3OD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxdds',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型，必须填写：PolarDBXInstance',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PolarDBXInstance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pxc-xxxx',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2',
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
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'type' => 'string',
                                'example' => 'xxdd',
                            ],
                            'RequestId' => [
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'xxxx-xxxxxx',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'title' => '资源列表',
                                        'description' => '资源列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'title' => '资源类型',
                                                    'description' => '资源类型',
                                                    'type' => 'string',
                                                    'example' => 'PolarDBXInstance',
                                                ],
                                                'TagValue' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'ResourceId' => [
                                                    'title' => '资源ID',
                                                    'description' => '资源ID',
                                                    'type' => 'string',
                                                    'example' => 'pxc-xxxx',
                                                ],
                                                'TagKey' => [
                                                    'title' => '标签键',
                                                    'description' => '标签键',
                                                    'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"xxdd\\",\\n  \\"RequestId\\": \\"xxxx-xxxxxx\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"PolarDBXInstance\\",\\n        \\"TagValue\\": \\"1\\",\\n        \\"ResourceId\\": \\"pxc-xxxx\\",\\n        \\"TagKey\\": \\"1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '标签列表获取',
        ],
        'TagResources' => [
            'summary' => '调用TagResources接口为资源打标签。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '115494',
                'abilityTreeNodes' => [
                    'FEATUREdrdsJGJ3OD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型,必须为：PolarDBXInstance',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PolarDBXInstance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pxc-xxxxx',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '12',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '22',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'xxxx-xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxxx-xxxx\\"\\n}","type":"json"}]',
            'title' => '为资源打标签',
        ],
        'UntagResources' => [
            'summary' => '资源删除标签。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '115497',
                'abilityTreeNodes' => [
                    'FEATUREdrdsJGJ3OD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型,必须为：PolarDBXInstance',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PolarDBXInstance',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'description' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => '是否全部删除',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID，最多50个子项',
                        'description' => '资源ID，最多50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pxc-xxxxx',
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
                        'title' => '标签键，最多20个子项',
                        'description' => '标签键，最多20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签KEY',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1',
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
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'xxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxxxxx\\"\\n}","type":"json"}]',
            'title' => '资源删除标签',
        ],
        'SwitchDBInstanceHA' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '132469',
                'abilityTreeNodes' => [
                    'FEATUREdrds7CT80F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'TargetPrimaryRegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'TargetPrimaryAzoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-htri0ori2r4k9p',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account',
                    ],
                ],
                [
                    'name' => 'AccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*****',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'account_sec',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息，成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '唯一请求ID。',
                                'type' => 'string',
                                'example' => '73559800-3c8c-11ec-bd40-99cfcff3fe1e',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73559800-3c8c-11ec-bd40-99cfcff3fe1e\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ResetAccountPasswordResponse>\\n    <Message>success</Message>\\n    <RequestId>73559800-3c8c-11ec-bd40-99cfcff3fe1e</RequestId>\\n    <Success>true</Success>\\n</ResetAccountPasswordResponse>","errorExample":""}]',
            'title' => 'ResetAccountPassword',
            'summary' => '重置账号密码。',
        ],
        'ReleaseColdDataVolume' => [
            'summary' => '调用ReleaseColdDataVolume接口',
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
                'operationType' => 'none',
                'abilityTreeCode' => '137137',
                'abilityTreeNodes' => [
                    'FEATUREdrdsONAWER',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzravgpt8q****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => 'EA330983-C895-57C0-AE82-5A63106EBB10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA330983-C895-57C0-AE82-5A63106EBB10\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseColdDataVolumeResponse>\\n    <RequestId>EA330983-C895-57C0-AE82-5A63106EBB10</RequestId>\\n</ReleaseColdDataVolumeResponse>","errorExample":""}]',
            'title' => 'ReleaseColdDataVolume',
        ],
        'ModifyDBInstanceConnectionString' => [
            'summary' => '修改实例地址链接串。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '115860',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例Id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-unrf5ssig0ecg8',
                    ],
                ],
                [
                    'name' => 'NewPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的地址前缀',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test2',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址原链接信息',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-unrf5ssig0ecg8.polarx.huhehaote.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'NewPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的地址端口',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3300',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '接口返回信息，一般为错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '新的地址链接串信息',
                                'type' => 'object',
                                'properties' => [
                                    'ConnectionString' => [
                                        'description' => '地址链接串',
                                        'type' => 'string',
                                        'example' => 'test2.polarx.huhehaote.rds.aliyuncs.com',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '实例Id',
                                        'type' => 'string',
                                        'example' => 'pxc-unrf5ssig0ecg8',
                                    ],
                                    'DBInstanceNetType' => [
                                        'description' => '地址链接串的网络类型',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Port' => [
                                        'description' => '地址端口',
                                        'type' => 'string',
                                        'example' => '3300',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '接口返回Code',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求RequestId，唯一标识',
                                'type' => 'string',
                                'example' => 'c3cf535c-a585-11ea-8263-00163e04d3a7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ConnectionString\\": \\"test2.polarx.huhehaote.rds.aliyuncs.com\\",\\n    \\"DBInstanceName\\": \\"pxc-unrf5ssig0ecg8\\",\\n    \\"DBInstanceNetType\\": \\"1\\",\\n    \\"Port\\": \\"3300\\"\\n  },\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"c3cf535c-a585-11ea-8263-00163e04d3a7\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDBInstanceConnectionStringResponse>\\n    <Message>success</Message>\\n    <Data>\\n        <ConnectionString>test2.polarx.huhehaote.rds.aliyuncs.com</ConnectionString>\\n        <DBInstanceName>pxc-unrf5ssig0ecg8</DBInstanceName>\\n        <DBInstanceNetType>1</DBInstanceNetType>\\n        <Port>3300</Port>\\n    </Data>\\n    <Code>200</Code>\\n    <RequestId>c3cf535c-a585-11ea-8263-00163e04d3a7</RequestId>\\n</ModifyDBInstanceConnectionStringResponse>","errorExample":""}]',
            'title' => '修改实例地址链接串',
        ],
        'ModifyActiveOperationTasks' => [
            'summary' => '调用ModifyActiveOperationTasks接口修改运维事件执行时间。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '103010',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域IID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维事件ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始切换时间，格式为：YYYY-MM-DDThh:mm:ssZ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-08-15T12:00:00Z',
                    ],
                ],
                [
                    'name' => 'ImmediateStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否立即执行：'."\n"
                            ."\n"
                            .'- 1：立即执行'."\n"
                            .'- 0：指定时间执行',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '8C9CC90A-9532-4752-B59F-580112C5A45B',
                            ],
                            'Ids' => [
                                'description' => '运维事件ID列表， 以英文逗号隔开。',
                                'type' => 'string',
                                'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C9CC90A-9532-4752-B59F-580112C5A45B\\",\\n  \\"Ids\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyActiveOperationTasksResponse>\\n    <RequestId>8C9CC90A-9532-4752-B59F-580112C5A45B</RequestId>\\n    <Ids>1</Ids>\\n</ModifyActiveOperationTasksResponse>","errorExample":""}]',
            'title' => '修改运维事件执行时间',
        ],
        'ModifyActiveOperationMaintainConf' => [
            'summary' => '调用ModifyActiveOperationMaintainConf接口修改运维事件时间配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '103016',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'CycleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '循环模式：Week，周。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Week',
                    ],
                ],
                [
                    'name' => 'CycleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周选择 ：1-7。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,2,3,4,5,6,7',
                    ],
                ],
                [
                    'name' => 'MaintainStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '02:00:00Z',
                    ],
                ],
                [
                    'name' => 'MaintainEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '02:00:00Z',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启：'."\n"
                            ."\n"
                            .'- **1**： 开启'."\n"
                            .'- **0**： 关闭',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '4035409E-7297-4115-ABC9-C1C3942BC069',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4035409E-7297-4115-ABC9-C1C3942BC069\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyActiveOperationMaintainConfResponse>\\n    <RequestId>4035409E-7297-4115-ABC9-C1C3942BC069</RequestId>\\n</ModifyActiveOperationMaintainConfResponse>","errorExample":""}]',
            'title' => '修改运维事件时间配置',
        ],
        'ModifyAccountPrivilege' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-htri0ori2r4k9p',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account_sec',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'sbtest',
                    ],
                ],
                [
                    'name' => 'AccountPrivilege',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号权限，取值如下：'."\n"
                            ."\n"
                            .'- **ReadWrite**'."\n"
                            .'- **ReadOnly**'."\n"
                            .'- **DMLOnly**'."\n"
                            .'- **DDLOnly**',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ReadWrite',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'account_audit',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '唯一请求ID。',
                                'type' => 'string',
                                'example' => '73559800-3c8c-11ec-bd40-99cfcff3fe1e',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73559800-3c8c-11ec-bd40-99cfcff3fe1e\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyAccountPrivilegeResponse>\\n    <Message>success</Message>\\n    <RequestId>73559800-3c8c-11ec-bd40-99cfcff3fe1e</RequestId>\\n    <Success>true</Success>\\n</ModifyAccountPrivilegeResponse>","errorExample":""}]',
            'title' => 'ModifyAccountPrivilege',
            'summary' => '修改普通账号的权限。',
        ],
        'EnableRightsSeparation' => [
            'summary' => '打开三权分立。',
            'methods' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86271',
                'abilityTreeNodes' => [
                    'FEATUREdrdsUFZO07',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-htri0ori2r4k9p',
                    ],
                ],
                [
                    'name' => 'SecurityAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account_sec',
                    ],
                ],
                [
                    'name' => 'SecurityAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*****',
                    ],
                ],
                [
                    'name' => 'SecurityAccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全管理员账号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
                [
                    'name' => 'AuditAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审计员账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account_audit',
                    ],
                ],
                [
                    'name' => 'AuditAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审计员账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '******',
                    ],
                ],
                [
                    'name' => 'AuditAccountDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审计员账号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '唯一请求ID。',
                                'type' => 'string',
                                'example' => '73559800-3c8c-11ec-bd40-99cfcff3fe1e',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73559800-3c8c-11ec-bd40-99cfcff3fe1e\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableRightsSeparationResponse>\\n    <Message>success</Message>\\n    <RequestId>73559800-3c8c-11ec-bd40-99cfcff3fe1e</RequestId>\\n    <Success>true</Success>\\n</EnableRightsSeparationResponse>","errorExample":""}]',
            'title' => 'EnableRightsSeparation',
        ],
        'DisableRightsSeparation' => [
            'methods' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hanghzou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-sprcym7g7w****',
                    ],
                ],
                [
                    'name' => 'DbaAccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'dba账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'account_1',
                    ],
                ],
                [
                    'name' => 'DbaAccountPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'dba账号密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '成功返回success，错误返回对应错误码。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '唯一请求ID。',
                                'type' => 'string',
                                'example' => 'FE5D94E3-3C93-3594-95D9-AAED2A980915',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FE5D94E3-3C93-3594-95D9-AAED2A980915\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableRightsSeparationResponse>\\n    <Message>success</Message>\\n    <RequestId>FE5D94E3-3C93-3594-95D9-AAED2A980915</RequestId>\\n    <Success>true</Success>\\n</DisableRightsSeparationResponse>","errorExample":""}]',
            'title' => 'DisableRightsSeparation',
            'summary' => '关闭三权分立。',
        ],
        'DescribeEvents' => [
            'summary' => '获取历史事件。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '103087',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-18T03:07:25Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-10-18T03:07:25Z',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页面大小',
                        'description' => '页面大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页面下标',
                        'description' => '页面下标。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果集。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4748127A-6D50-432C-B635-433467074C27',
                            ],
                            'TotalRecordCount' => [
                                'title' => '总页数',
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'EventItems' => [
                                'title' => '事件体',
                                'description' => '事件体。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EventId' => [
                                            'title' => '事件ID',
                                            'description' => '事件ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '50421290',
                                        ],
                                        'EventName' => [
                                            'title' => '事件名称',
                                            'description' => '事件名称。',
                                            'type' => 'string',
                                            'example' => 'ModifySecurityIps',
                                        ],
                                        'EventPayload' => [
                                            'title' => '补充信息',
                                            'description' => '补充信息。',
                                            'type' => 'string',
                                            'example' => '{\\"Domain\\": \\"rds-cn-hangzhou.aliyuncs.com\\"}',
                                        ],
                                        'EventReason' => [
                                            'title' => '原因',
                                            'description' => '原因。',
                                            'type' => 'string',
                                            'example' => 'FROM_USER',
                                        ],
                                        'EventRecordTime' => [
                                            'title' => '记录时间',
                                            'description' => '记录时间。',
                                            'type' => 'string',
                                            'example' => '2021-10-15T06:39:49Z',
                                        ],
                                        'EventTime' => [
                                            'title' => '事件时间',
                                            'description' => '事件时间。',
                                            'type' => 'string',
                                            'example' => '2021-10-15T06:35:00Z',
                                        ],
                                        'EventType' => [
                                            'title' => '事件类型',
                                            'description' => '事件类型。',
                                            'type' => 'string',
                                            'example' => 'SecurityManagement',
                                        ],
                                        'EventUserType' => [
                                            'title' => '事件用户类型',
                                            'description' => '事件用户类型。',
                                            'type' => 'string',
                                            'example' => 'USRE',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域ID',
                                            'description' => '区域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ResourceName' => [
                                            'title' => '资源名',
                                            'description' => '资源名。',
                                            'type' => 'string',
                                            'example' => 'px-bp1v8udesc89g156g',
                                        ],
                                        'ResourceType' => [
                                            'title' => '资源类型',
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'instance',
                                        ],
                                    ],
                                ],
                            ],
                            'PageSize' => [
                                'title' => '页面大小',
                                'description' => '页面大小。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => '页面下标',
                                'description' => '页面下标。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4748127A-6D50-432C-B635-433467074C27\\",\\n  \\"TotalRecordCount\\": 20,\\n  \\"EventItems\\": [\\n    {\\n      \\"EventId\\": 50421290,\\n      \\"EventName\\": \\"ModifySecurityIps\\",\\n      \\"EventPayload\\": \\"{\\\\\\\\\\\\\\"Domain\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"rds-cn-hangzhou.aliyuncs.com\\\\\\\\\\\\\\"}\\",\\n      \\"EventReason\\": \\"FROM_USER\\",\\n      \\"EventRecordTime\\": \\"2021-10-15T06:39:49Z\\",\\n      \\"EventTime\\": \\"2021-10-15T06:35:00Z\\",\\n      \\"EventType\\": \\"SecurityManagement\\",\\n      \\"EventUserType\\": \\"USRE\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ResourceName\\": \\"px-bp1v8udesc89g156g\\",\\n      \\"ResourceType\\": \\"instance\\"\\n    }\\n  ],\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventsResponse>\\n    <RequestId>4748127A-6D50-432C-B635-433467074C27</RequestId>\\n    <TotalRecordCount>20</TotalRecordCount>\\n    <EventItems>\\n        <EventId>50421290</EventId>\\n        <EventName>ModifySecurityIps</EventName>\\n        <EventPayload>{\\\\\\"Domain\\\\\\": \\\\\\"rds-cn-hangzhou.aliyuncs.com\\\\\\"}</EventPayload>\\n        <EventReason>FROM_USER</EventReason>\\n        <EventRecordTime>2021-10-15T06:39:49Z</EventRecordTime>\\n        <EventTime>2021-10-15T06:35:00Z</EventTime>\\n        <EventType>SecurityManagement</EventType>\\n        <EventUserType>USRE</EventUserType>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ResourceName>px-bp1v8udesc89g156g</ResourceName>\\n        <ResourceType>instance</ResourceType>\\n    </EventItems>\\n    <PageSize>20</PageSize>\\n    <PageNumber>1</PageNumber>\\n</DescribeEventsResponse>","errorExample":""}]',
            'title' => '获取历史事件',
        ],
        'DescribeColdDataBasicInfo' => [
            'summary' => '冷存储基础信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '137149',
                'abilityTreeNodes' => [
                    'FEATUREdrdsONAWER',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'title' => '详情信息',
                                'type' => 'object',
                                'properties' => [
                                    'EnableStatus' => [
                                        'title' => '是否开启冷存储',
                                        'type' => 'boolean',
                                    ],
                                    'CloudProduct' => [
                                        'title' => '底层存储云产品',
                                        'type' => 'string',
                                    ],
                                    'VolumeName' => [
                                        'title' => '存储卷名',
                                        'type' => 'string',
                                    ],
                                    'BackupSetSpaceSize' => [
                                        'title' => '有效备份集数据大小',
                                        'type' => 'number',
                                        'format' => 'double',
                                    ],
                                    'BackupSetCount' => [
                                        'title' => '备份集个数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CurrentSpaceSize' => [
                                        'title' => '冷存储数据大小',
                                        'type' => 'number',
                                        'format' => 'double',
                                    ],
                                    'DataRedundancyType' => [
                                        'type' => 'string',
                                    ],
                                    'WriteAccessNum' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                    ],
                                    'ReadAccessNum' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'RegionId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeBackupSet' => [
            'summary' => '调用DescribeBackupSet接口查看备份集详情。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '135043',
                'abilityTreeNodes' => [
                    'FEATUREdrdsE1M93A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'polardb-x实例名',
                        'description' => 'PolarDB-X实例名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pxc-htri0ori2r****',
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '备份集ID',
                        'description' => '备份集ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DestCrossRegion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '跨地域备份的目标地域。',
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
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'successs',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1A6D328C-84B8-40DC-BF49-6C73984D7494',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'title' => '备份结束时间',
                                            'description' => '备份结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1650251308000',
                                        ],
                                        'Status' => [
                                            'title' => '状态',
                                            'description' => '备份集状态：'."\n"
                                                ."\n"
                                                .'- **0**： 备份中；'."\n"
                                                .'- **1**：备份成功；'."\n"
                                                .'- **2**：备份失败。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BackupSetSize' => [
                                            'title' => '备份集大小',
                                            'description' => '备份集大小， 单位为byte。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '88803195',
                                        ],
                                        'BackupSetId' => [
                                            'title' => '备份集ID',
                                            'description' => '备份集ID。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '111',
                                        ],
                                        'BackupType' => [
                                            'title' => '备份类型',
                                            'description' => '备份类型：'."\n"
                                                ."\n"
                                                .'- **0**：快速备份；'."\n"
                                                .'- **1**：一致性备份。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'BeginTime' => [
                                            'title' => '备份开始时间',
                                            'description' => '备份开始时间。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1650250861754',
                                        ],
                                        'BackupModel' => [
                                            'title' => '备份模式',
                                            'description' => '备份模式：'."\n"
                                                ."\n"
                                                .'- **0**：自动备份；'."\n"
                                                .'- **1**：手动备份。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'OSSList' => [
                                            'description' => '备份集OSS信息列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'BackupSetFile' => [
                                                        'title' => 'OSS 文件名',
                                                        'description' => 'OSS文件名。',
                                                        'type' => 'string',
                                                        'example' => 'hins3084_data_20220418110623_qp.xb',
                                                    ],
                                                    'LinkExpiredTime' => [
                                                        'title' => '过期时间',
                                                        'description' => 'OSS文件链接过期时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-04-20T08:01:37Z',
                                                    ],
                                                    'IntranetDownloadLink' => [
                                                        'title' => '内网OSS 下载地址',
                                                        'description' => '内网OSS下载地址。',
                                                        'type' => 'string',
                                                        'example' => 'http://pre-rdsbak-cn-beijing.oss-cn-beijing-internal.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?',
                                                    ],
                                                    'DownloadLink' => [
                                                        'title' => '外网下载地址',
                                                        'description' => '外网下载地址。',
                                                        'type' => 'string',
                                                        'example' => 'https://pre-rdsbak-cn-xxx.oss-cn-beijing.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?OSSAccessKeyId=LTAI5tJEmRFdJ8aBPDR7****&Expires=1650441697&dd=7KJzkUSbXf6dwy',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"successs\\",\\n  \\"RequestId\\": \\"1A6D328C-84B8-40DC-BF49-6C73984D7494\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": 1650251308000,\\n      \\"Status\\": 1,\\n      \\"BackupSetSize\\": 88803195,\\n      \\"BackupSetId\\": 111,\\n      \\"BackupType\\": 1,\\n      \\"BeginTime\\": 1650250861754,\\n      \\"BackupModel\\": 0,\\n      \\"OSSList\\": [\\n        {\\n          \\"BackupSetFile\\": \\"hins3084_data_20220418110623_qp.xb\\",\\n          \\"LinkExpiredTime\\": \\"2022-04-20T08:01:37Z\\",\\n          \\"IntranetDownloadLink\\": \\"http://pre-rdsbak-cn-beijing.oss-cn-beijing-internal.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?\\",\\n          \\"DownloadLink\\": \\"https://pre-rdsbak-cn-xxx.oss-cn-beijing.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?OSSAccessKeyId=LTAI5tJEmRFdJ8aBPDR7****&Expires=1650441697&dd=7KJzkUSbXf6dwy\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBackupSetResponse>\\n    <Message>successs</Message>\\n    <RequestId>1A6D328C-84B8-40DC-BF49-6C73984D7494</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <EndTime>1650251308000</EndTime>\\n        <Status>1</Status>\\n        <BackupSetSize>88803195</BackupSetSize>\\n        <BackupSetId>111</BackupSetId>\\n        <BackupType>1</BackupType>\\n        <BeginTime>1650250861754</BeginTime>\\n        <BackupModel>0</BackupModel>\\n        <OSSList>\\n            <BackupSetFile>hins3084_data_20220418110623_qp.xb</BackupSetFile>\\n            <LinkExpiredTime>2022-04-20T08:01:37Z</LinkExpiredTime>\\n            <IntranetDownloadLink>http://pre-rdsbak-cn-beijing.oss-cn-beijing-internal.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?</IntranetDownloadLink>\\n            <DownloadLink>https://pre-rdsbak-cn-xxx.oss-cn-beijing.aliyuncs.com/custins2255/hins3084_data_20220418110623_qp.xb?OSSAccessKeyId=LTAI5tJEmRFdJ8aBPDR7****&amp;Expires=1650441697&amp;dd=7KJzkUSbXf6dwy</DownloadLink>\\n        </OSSList>\\n    </Data>\\n</DescribeBackupSetResponse>","errorExample":""}]',
            'title' => 'DescribeBackupSet',
        ],
        'AlignStoragePrimaryAzone' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '132459',
                'abilityTreeNodes' => [
                    'FEATUREdrds7CT80F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'StorageInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AllocateColdDataVolume' => [
            'summary' => '调用AllocateColdDataVolume接口',
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
                'operationType' => 'none',
                'abilityTreeCode' => '137133',
                'abilityTreeNodes' => [
                    'FEATUREdrdsONAWER',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-hzravgpt8q****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
                        'type' => 'string',
                        'required' => true,
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
                                'example' => 'D6A4256F-7B83-5BD7-9AC0-72E1FAC05330',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6A4256F-7B83-5BD7-9AC0-72E1FAC05330\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateColdDataVolumeResponse>\\n    <RequestId>D6A4256F-7B83-5BD7-9AC0-72E1FAC05330</RequestId>\\n</AllocateColdDataVolumeResponse>","errorExample":""}]',
            'title' => 'AllocateColdDataVolume',
        ],
        'AllocateInstancePublicConnection' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-**************',
                    ],
                ],
                [
                    'name' => 'ConnectionStringPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网地址前缀。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-**************',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网地址端口。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所在地域。',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B2F3840-5C98-475C-B269-2D5C3A31797C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B2F3840-5C98-475C-B269-2D5C3A31797C\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateInstancePublicConnectionResponse>\\n    <RequestId>9B2F3840-5C98-475C-B269-2D5C3A31797C</RequestId>\\n</AllocateInstancePublicConnectionResponse>","errorExample":""}]',
            'title' => '申请外网连接地址',
            'summary' => '调用AllocateInstancePublicConnection接口创建公网IP。',
        ],
        'CancelActiveOperationTasks' => [
            'summary' => '调用CancelActiveOperationTasks接口取消运维事件任务。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '102580',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件ID集合，以英文逗号隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '111',
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
                                'example' => 'AE4F6C34-065F-45AA-B5DC-4B8D816F6305',
                            ],
                            'Ids' => [
                                'description' => '事件ID集合， 以英文逗号隔开。',
                                'type' => 'string',
                                'example' => '111,1223',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AE4F6C34-065F-45AA-B5DC-4B8D816F6305\\",\\n  \\"Ids\\": \\"111,1223\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelActiveOperationTasksResponse>\\n    <RequestId>AE4F6C34-065F-45AA-B5DC-4B8D816F6305</RequestId>\\n    <Ids>111,1223</Ids>\\n</CancelActiveOperationTasksResponse>","errorExample":""}]',
            'title' => '取消运维事件任务',
        ],
        'ChangeResourceGroup' => [
            'summary' => '修改实例资源组。',
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '116109',
                'abilityTreeNodes' => [
                    'FEATUREdrdsJGJ3OD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型，目前仅支持PolarDB-X 2.0实例一种类型的资源。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PolarDBXInstance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源ID',
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pxc-szrwrbp693****',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '新资源组ID',
                        'description' => '新资源组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-acfmwolx3j4****',
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
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3WE34',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3WE34\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeResourceGroupResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3WE34</RequestId>\\n</ChangeResourceGroupResponse>","errorExample":""}]',
            'title' => '修改实例资源组',
        ],
        'CheckCloudResourceAuthorized' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '86218',
                'abilityTreeNodes' => [
                    'FEATUREdrds25BO3L',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例所属地域的ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'pxc-********',
                    ],
                ],
                [
                    'name' => 'RoleArn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定已授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息，完成该角色的授权后即可使用相关密钥管理服务，格式：acs:ram::$accountID:role/$roleName 。'."\n"
                            ."\n"
                            .'- $accountID：云账号ID。您可以登录阿里云控制台，将鼠标悬停在右上角头像的位置，单击安全设置进行查看。'."\n"
                            .'- $roleName：RAM角色名称，取值固定为：AliyunRdsInstanceEncryptionDefaultRole。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'A501A191-BD70-5E50-98A9-C2A486A82****',
                            ],
                            'Data' => [
                                'description' => '返回体。',
                                'type' => 'object',
                                'properties' => [
                                    'AuthorizationState' => [
                                        'description' => '授权状态，包括如下返回值：'."\n"
                                            ."\n"
                                            .'- **0**：未授权；'."\n"
                                            .'- **1**：已授权；'."\n"
                                            .'- **2**：未开通密钥管理服务。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'RoleArn' => [
                                        'description' => '指定已授权角色的全局资源描述符ARN（Alibaba Cloud Resource Name）信息，完成该角色的授权后即可使用相关密钥管理服务，格式：acs:ram::$accountID:role/$roleName 。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole',
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
                        'errorCode' => 'IncorrectEngineVersion',
                        'errorMessage' => 'The current engine version does not support the operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A501A191-BD70-5E50-98A9-C2A486A82****\\",\\n  \\"Data\\": {\\n    \\"AuthorizationState\\": \\"0\\",\\n    \\"RoleArn\\": \\"acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CheckCloudResourceAuthorizedResponse>\\n    <RequestId>A501A191-BD70-5E50-98A9-C2A486A82****</RequestId>\\n    <Data>\\n        <AuthorizationState>0</AuthorizationState>\\n        <RoleArn>acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole</RoleArn>\\n    </Data>\\n</CheckCloudResourceAuthorizedResponse>","errorExample":""}]',
            'title' => 'KMS秘钥授权校验',
            'summary' => '调用CheckCloudResourceAuthorized接口查询PolarDB-X实例是否已被授权使用KMS密钥服务。',
        ],
        'DescribeActiveOperationMaintainConf' => [
            'summary' => '调用DescribeActiveOperationMaintainConf接口展示运维时间配置。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '103014',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果集。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestid',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1A586DCB-39A6-4050-81CC-C7BD4CCDB49F',
                            ],
                            'Config' => [
                                'title' => '配置信息',
                                'description' => '配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-08-11T10:08:27Z',
                                    ],
                                    'CycleTime' => [
                                        'title' => '循环时间',
                                        'description' => '循环时间。',
                                        'type' => 'string',
                                        'example' => '1,2,3,4,5,6,7',
                                    ],
                                    'CycleType' => [
                                        'title' => '循环类型',
                                        'description' => '循环类型。',
                                        'type' => 'string',
                                        'example' => 'Week',
                                    ],
                                    'MaintainEndTime' => [
                                        'title' => '运维结束时间',
                                        'description' => '运维结束时间。',
                                        'type' => 'string',
                                        'example' => '04:00:00Z',
                                    ],
                                    'MaintainStartTime' => [
                                        'title' => '运维开始时间',
                                        'description' => '运维开始时间。',
                                        'type' => 'string',
                                        'example' => '04:00:00Z',
                                    ],
                                    'ModifiedTime' => [
                                        'title' => '修改时间',
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-08-11T10:08:27Z',
                                    ],
                                    'Status' => [
                                        'title' => '状态',
                                        'description' => '状态。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'HasConfig' => [
                                'title' => '用户是否配置：1:已经配置。 0.未配置',
                                'description' => '是否已配置：'."\n"
                                    ."\n"
                                    .'- 1：已经配置；'."\n"
                                    .'- 0：未配置。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1A586DCB-39A6-4050-81CC-C7BD4CCDB49F\\",\\n  \\"Config\\": {\\n    \\"CreatedTime\\": \\"2021-08-11T10:08:27Z\\",\\n    \\"CycleTime\\": \\"1,2,3,4,5,6,7\\",\\n    \\"CycleType\\": \\"Week\\",\\n    \\"MaintainEndTime\\": \\"04:00:00Z\\",\\n    \\"MaintainStartTime\\": \\"04:00:00Z\\",\\n    \\"ModifiedTime\\": \\"2021-08-11T10:08:27Z\\",\\n    \\"Status\\": 1\\n  },\\n  \\"HasConfig\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationMaintainConfResponse>\\n    <RequestId>1A586DCB-39A6-4050-81CC-C7BD4CCDB49F</RequestId>\\n    <Config>\\n        <CreatedTime>2021-08-11T10:08:27Z</CreatedTime>\\n        <CycleTime>1,2,3,4,5,6,7</CycleTime>\\n        <CycleType>Week</CycleType>\\n        <MaintainEndTime>04:00:00Z</MaintainEndTime>\\n        <MaintainStartTime>04:00:00Z</MaintainStartTime>\\n        <ModifiedTime>2021-08-11T10:08:27Z</ModifiedTime>\\n        <Status>1</Status>\\n    </Config>\\n    <HasConfig>1</HasConfig>\\n</DescribeActiveOperationMaintainConfResponse>","errorExample":""}]',
            'title' => '展示运维时间配置',
        ],
        'DescribeActiveOperationTaskCount' => [
            'summary' => '获取运维事件总数。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '103006',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品， 默认polarx。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'polarx',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留参数，无需填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Category',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果集。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EC7E27FC-58F8-4722-89BB-D1B6D0971956',
                            ],
                            'NeedPop' => [
                                'description' => '是否需要弹窗：'."\n"
                                    ."\n"
                                    .'- 1：需要'."\n"
                                    .'- 0：不需要',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TaskCount' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC7E27FC-58F8-4722-89BB-D1B6D0971956\\",\\n  \\"NeedPop\\": 1,\\n  \\"TaskCount\\": 20\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTaskCountResponse>\\n    <RequestId>EC7E27FC-58F8-4722-89BB-D1B6D0971956</RequestId>\\n    <NeedPop>1</NeedPop>\\n    <TaskCount>20</TaskCount>\\n</DescribeActiveOperationTaskCountResponse>","errorExample":""}]',
            'title' => '获取运维事件总数',
        ],
        'DescribeActiveOperationTasks' => [
            'summary' => '调用DescribeActiveOperationTasks接口获取运维事件。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '102988',
                'abilityTreeNodes' => [
                    'FEATUREdrdsZVW4NQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型，all代表查询该用户下所有的任务，固定取值为all。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名， 默认值为polarx。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'polarx',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型，固定值：polarx。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'polarx',
                    ],
                ],
                [
                    'name' => 'InsName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名，默认为空字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pxc-xxxxx',
                    ],
                ],
                [
                    'name' => 'ChangeLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变更级别，默认all：'."\n"
                            ."\n"
                            .'- **all**：选择全部异常修复和系统运维的级别'."\n"
                            .'- **S0**：异常修复'."\n"
                            .'- **S1**：系统运维',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数, 默认每页25条。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '25',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，大于0，默认1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态，取值：'."\n"
                            ."\n"
                            .'- **-1**：选择全部待执行和执行中的任务  '."\n"
                            .'- **3**：待执行 '."\n"
                            .'- **4**：执行中',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'AllowChange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许修改时间，取值：'."\n"
                            ."\n"
                            .'- **-1**：允许修改全部运维事件的时间'."\n"
                            .'- **0**：不允许 '."\n"
                            .'- **1**：允许',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'AllowCancel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许取消，取值：'."\n"
                            .'- **-1**：允许取消全部运维事件'."\n"
                            .'- **0**：不允许 '."\n"
                            .'- **1**：允许',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果集。',
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '每页记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalRecordCount' => [
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '23',
                            ],
                            'Items' => [
                                'description' => '参数列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AllowCancel' => [
                                            'description' => '是否允许取消'."\n"
                                                ."\n"
                                                .'- **0**：否'."\n"
                                                .'- **1**：是',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'AllowChange' => [
                                            'description' => '是否允许修改'."\n"
                                                ."\n"
                                                .'- **0**：否'."\n"
                                                .'- **1**：是',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'ChangeLevel' => [
                                            'description' => '变动等级（可忽略）。',
                                            'type' => 'string',
                                            'example' => 'Risk',
                                        ],
                                        'ChangeLevelEn' => [
                                            'description' => '变动等级英文。',
                                            'type' => 'string',
                                            'example' => 'Risk repairment',
                                        ],
                                        'ChangeLevelZh' => [
                                            'description' => '变动等级中文。',
                                            'type' => 'string',
                                            'example' => '风险修复',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-15T16:00:00Z',
                                        ],
                                        'CurrentAVZ' => [
                                            'description' => '当前AVZ。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai-et-a',
                                        ],
                                        'DbType' => [
                                            'description' => '数据库类型。',
                                            'type' => 'string',
                                            'example' => 'polarx',
                                        ],
                                        'DbVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '2.0',
                                        ],
                                        'Deadline' => [
                                            'description' => '截止时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-15T16:00:00Z',
                                        ],
                                        'Id' => [
                                            'description' => '任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Impact' => [
                                            'description' => '影响（不输出）。',
                                            'type' => 'string',
                                            'example' => '--',
                                        ],
                                        'ImpactEn' => [
                                            'description' => '影响英文。',
                                            'type' => 'string',
                                            'example' => 'Transient instance disconnection',
                                        ],
                                        'ImpactZh' => [
                                            'description' => '影响中文。',
                                            'type' => 'string',
                                            'example' => '中断',
                                        ],
                                        'InsComment' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                        'InsName' => [
                                            'description' => '实例名。',
                                            'type' => 'string',
                                            'example' => 'pxc-dd',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-15T16:00:00Z',
                                        ],
                                        'PrepareInterval' => [
                                            'description' => '准备间隔。',
                                            'type' => 'string',
                                            'example' => '03:00:00',
                                        ],
                                        'Region' => [
                                            'description' => '区域。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai-et15-b01',
                                        ],
                                        'ResultInfo' => [
                                            'description' => '结果信息（可忽略）。',
                                            'type' => 'string',
                                            'example' => '--',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-15T16:00:00Z',
                                        ],
                                        'Status' => [
                                            'description' => '状态 ：'."\n"
                                                ."\n"
                                                .'- **3**：待执行 '."\n"
                                                .'- **4**：执行中',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3',
                                        ],
                                        'SubInsNames' => [
                                            'description' => '子实例列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '子实例列表项。',
                                                'type' => 'string',
                                                'example' => 'pxc-xx',
                                            ],
                                        ],
                                        'SwitchTime' => [
                                            'description' => '切换时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-15T16:00:00Z',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型。',
                                            'type' => 'string',
                                            'example' => 'rds_apsaradb_transfer',
                                        ],
                                        'TaskTypeEn' => [
                                            'description' => '任务类型英文（可忽略）。',
                                            'type' => 'string',
                                            'example' => '--',
                                        ],
                                        'TaskTypeZh' => [
                                            'description' => '任务类型中文（可忽略）。',
                                            'type' => 'string',
                                            'example' => '--',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 12,\\n  \\"RequestId\\": \\"xxxx\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalRecordCount\\": 23,\\n  \\"Items\\": [\\n    {\\n      \\"AllowCancel\\": \\"0\\",\\n      \\"AllowChange\\": \\"0\\",\\n      \\"ChangeLevel\\": \\"Risk\\",\\n      \\"ChangeLevelEn\\": \\"Risk repairment\\",\\n      \\"ChangeLevelZh\\": \\"风险修复\\",\\n      \\"CreatedTime\\": \\"2021-06-15T16:00:00Z\\",\\n      \\"CurrentAVZ\\": \\"cn-shanghai-et-a\\",\\n      \\"DbType\\": \\"polarx\\",\\n      \\"DbVersion\\": \\"2.0\\",\\n      \\"Deadline\\": \\"2021-06-15T16:00:00Z\\",\\n      \\"Id\\": 1,\\n      \\"Impact\\": \\"--\\",\\n      \\"ImpactEn\\": \\"Transient instance disconnection\\",\\n      \\"ImpactZh\\": \\"中断\\",\\n      \\"InsComment\\": \\"xxx\\",\\n      \\"InsName\\": \\"pxc-dd\\",\\n      \\"ModifiedTime\\": \\"2021-06-15T16:00:00Z\\",\\n      \\"PrepareInterval\\": \\"03:00:00\\",\\n      \\"Region\\": \\"cn-shanghai-et15-b01\\",\\n      \\"ResultInfo\\": \\"--\\",\\n      \\"StartTime\\": \\"2021-06-15T16:00:00Z\\",\\n      \\"Status\\": 3,\\n      \\"SubInsNames\\": [\\n        \\"pxc-xx\\"\\n      ],\\n      \\"SwitchTime\\": \\"2021-06-15T16:00:00Z\\",\\n      \\"TaskType\\": \\"rds_apsaradb_transfer\\",\\n      \\"TaskTypeEn\\": \\"--\\",\\n      \\"TaskTypeZh\\": \\"--\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeActiveOperationTasksResponse>\\n    <PageSize>12</PageSize>\\n    <RequestId>xxxx</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalRecordCount>23</TotalRecordCount>\\n    <Items>\\n        <AllowCancel>0</AllowCancel>\\n        <AllowChange>0</AllowChange>\\n        <ChangeLevel>Risk</ChangeLevel>\\n        <ChangeLevelEn>Risk repairment</ChangeLevelEn>\\n        <ChangeLevelZh>风险修复</ChangeLevelZh>\\n        <CreatedTime>2021-06-15T16:00:00Z</CreatedTime>\\n        <CurrentAVZ>cn-shanghai-et-a</CurrentAVZ>\\n        <DbType>polarx</DbType>\\n        <DbVersion>2.0</DbVersion>\\n        <Deadline>2021-06-15T16:00:00Z</Deadline>\\n        <Id>1</Id>\\n        <Impact>--</Impact>\\n        <ImpactEn>Transient instance disconnection</ImpactEn>\\n        <ImpactZh>中断</ImpactZh>\\n        <InsComment>xxx</InsComment>\\n        <InsName>pxc-dd</InsName>\\n        <ModifiedTime>2021-06-15T16:00:00Z</ModifiedTime>\\n        <PrepareInterval>03:00:00</PrepareInterval>\\n        <Region>cn-shanghai-et15-b01</Region>\\n        <ResultInfo>--</ResultInfo>\\n        <StartTime>2021-06-15T16:00:00Z</StartTime>\\n        <Status>3</Status>\\n        <SubInsNames>pxc-xx</SubInsNames>\\n        <SwitchTime>2021-06-15T16:00:00Z</SwitchTime>\\n        <TaskType>rds_apsaradb_transfer</TaskType>\\n        <TaskTypeEn>--</TaskTypeEn>\\n        <TaskTypeZh>--</TaskTypeZh>\\n    </Items>\\n</DescribeActiveOperationTasksResponse>","errorExample":""}]',
            'title' => '获取运维事件',
        ],
        'DescribeArchiveTableList' => [
            'summary' => '冷存储表列表',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '137155',
                'abilityTreeNodes' => [
                    'FEATUREdrds9ED9RQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '20',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页下表， 从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'SchemaName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'title' => '总数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'PageIndex' => [
                                        'title' => '页面下标',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'PageSize' => [
                                        'title' => '页面大小',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Tables' => [
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '冷存储表信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'SchemaName' => [
                                                    'title' => '库名',
                                                    'type' => 'string',
                                                ],
                                                'TableName' => [
                                                    'title' => '表名',
                                                    'type' => 'string',
                                                ],
                                                'CreatedDate' => [
                                                    'title' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'SpaceSize' => [
                                                    'title' => '占用空间大小',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                ],
                                                'FileCount' => [
                                                    'title' => '文件个数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'LastSuccessArchiveTime' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'ArchiveStatus' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TobeArchivedConut' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RunningCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'SuccessCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PausedCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'polardbx.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'polardbx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'polardbx.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'polardbx.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'polardbx.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'polardbx.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'polardbx.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'polardbx.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'polardbx.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'polardbx.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'polardbx.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'polardbx.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'polardbx.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'polardbx.us-west-1.aliyuncs.com',
        ],
    ],
];
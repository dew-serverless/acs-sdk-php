<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Ddi',
        'version' => '2020-06-17',
    ],
    'directories' => [
        [
            'id' => 112433,
            'title' => '集群操作',
            'type' => 'directory',
            'children' => [
                'CreateClusterV2',
                'ReleaseCluster',
                'DescribeClusterV2',
                'ListClusters',
            ],
        ],
        [
            'id' => 112438,
            'title' => '作业和工作流',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 112439,
                    'title' => '作业子文件夹的增删改查',
                    'type' => 'directory',
                    'children' => [
                        'CreateFlowCategory',
                        'DeleteFlowCategory',
                    ],
                ],
                [
                    'id' => 112443,
                    'title' => '工作流的增删改查',
                    'type' => 'directory',
                    'children' => [
                        'CreateFlow',
                        'DeleteFlow',
                        'ListFlow',
                        'DescribeFlow',
                    ],
                ],
                [
                    'id' => 112452,
                    'title' => '作业的增删改查',
                    'type' => 'directory',
                    'children' => [
                        'CreateFlowJob',
                        'CloneFlowJob',
                        'SubmitFlowJob',
                        'KillFlowJob',
                        'ModifyFlowJob',
                        'DescribeFlowJob',
                        'ListFlowJobs',
                        'ListFlowJobHistory',
                    ],
                ],
                'RerunFlow',
                'SubmitFlow',
                'ResumeFlow',
            ],
        ],
        [
            'id' => 112470,
            'title' => '项目',
            'type' => 'directory',
            'children' => [
                'CreateFlowProject',
                'CreateFlowProjectUser',
                'DeleteFlowProject',
                'DeleteFlowProjectUser',
                'ModifyFlowProject',
                'DescribeFlowProject',
                'ListFlowProjects',
                'ListFlowProjectUser',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'DescribeFlowCategoryTree',
                'DescribeFlowEntitySnapshot',
                'DescribeFlowNodeInstance',
                'ModifyFlowForWeb',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateClusterV2' => [
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
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群的名字。长度限制为 1-64 个字符，只允许包含中文、字母、数字、-、_。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bi_spark',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。目前支持华东 1、华东 2、华南 1、华北 2、华北 3、美西、新加坡、德国。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。'."\n"
                            ."\n"
                            .'华东 1（杭州）支持：cn-hangzhou-b、cn-hangzhou-e、cn-hangzhou-f、cn-hangzhou-g、cn-hangzhou-h、cn-hangzhou-i。'."\n"
                            .'华东 2（上海）支持：cn-shanghai-a、cn-shanghai-b、cn-shanghai-c、cn-shanghai-d、cn-shanghai-e、cn-shanghai-f、cn-shanghai-g。'."\n"
                            .'华北 2（北京）支持：cn-beijing-a、cn-beijing-b、cn-beijing-c、cn-beijing-d、cn-beijing-e、cn-beijing-f、cn-beijing-g'."\n"
                            .'华南 1（深圳）支持：cn-shenzhen-a、cn-shenzhen-b、cn-shenzhen-c、cn-shenzhen-d。'."\n"
                            .'华北 5（呼和浩特）支持：cn-huhehaote-a、cn-huhehaote-b。'."\n"
                            .'美国（弗吉尼亚）支持：us-east-1a、us-east-1b。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-b',
                    ],
                ],
                [
                    'name' => 'LogPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ath	'."\n"
                            .'OSS日志路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss//bucketname/path',
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全组 ID。可以在ECS中创建一个然后使用。需要确认的是，如果使用已有的安全组，会被增加上默认安全组策略：入只开放22端口，出开放所有端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sg-bp1id7ajv83kmqwq****',
                    ],
                ],
                [
                    'name' => 'IsOpenPublicIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启公网IP。如果开启，默认会带有8MB的带宽',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'SecurityGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要新建的安全组名称。如果不指定安全组ID，那么将使用这个名字创建一个新的安全组。当集群创建完成以后，可以在集群详情中看到创建的安全组ID。这个安全组将会带有默认的安全组策略：入只开放22端口，出开放所有端口',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddi-sg',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '付费类型：'."\n"
                            ."\n"
                            .'PostPaid：按量付费。'."\n"
                            .'PrePaid：包年包月。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PostPaid',
                        'default' => 'PostPaid',
                        'enum' => [
                            'PostPaid',
                            'PrePaid',
                        ],
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包年包月时间（包月数有：1、2、3、4、5、6、7、8、9、12、24、36）。ChargeType=PrePaid 时，必填。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '36',
                        'minimum' => '1',
                        'example' => '30',
                        'default' => '1',
                        'enum' => [
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '7',
                            '8',
                            '9',
                            '12',
                            '24',
                            '36',
                        ],
                    ],
                ],
                [
                    'name' => 'Auto',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包年包月集群是否自动续费',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'AutoPayOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动付费。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID，NetType=vpc时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1l4urd87xlh7i4b****',
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID，NetType=vpc时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-bp10tvjyc77psy0z5****',
                    ],
                ],
                [
                    'name' => 'NetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc',
                        'default' => 'classic',
                        'enum' => [
                            'classic',
                            'vpc',
                        ],
                    ],
                ],
                [
                    'name' => 'UserDefinedEmrEcsRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于免AK访问OSS的Role',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliyunDDIAccessingOSSRole',
                        'default' => 'AliyunEmrEcsDefaultRole',
                    ],
                ],
                [
                    'name' => 'EmrVer',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Databricks 数据洞察版本号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DDI-v1.0',
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '标准型',
                        'enum' => [
                            'HADOOP',
                            'HBASE',
                            'KAFKA',
                            'GATEWAY',
                            'DRUID',
                            'ZOOKEEPER',
                            'DATA_SCIENCE',
                            'FLINK',
                            'CLICKHOUSE',
                            'DATABRICKS_DATAINSIGHT',
                        ],
                    ],
                ],
                [
                    'name' => 'EnableHighAvailability',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启高可用集群。如果开启高可用，需要两台Master节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UseLocalMetaDb',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用本地Hive元数据库。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'EnableSsh',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启SSH。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'InstanceGeneration',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例分代。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs-3',
                    ],
                ],
                [
                    'name' => 'MasterPwd',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Master节点SSH访问密码。需要满足ECS的密码规则：8-30个字符，且同时包含任意三项（大、小写字母、数字和特殊符号）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pwd',
                    ],
                ],
                [
                    'name' => 'KeyPairName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥对。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_pair',
                    ],
                ],
                [
                    'name' => 'MetaStoreType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统一元数据类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'local',
                        'enum' => [
                            'local',
                            'unified',
                            'user_rds',
                            'dlf',
                        ],
                    ],
                ],
                [
                    'name' => 'MetaStoreConf',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统一元数据的配置信息。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rds-xxx.com',
                    ],
                ],
                [
                    'name' => 'ClickHouseConf',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ExtraAttributes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '附加属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[]',
                    ],
                ],
                [
                    'name' => 'DepositType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '托管类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HALF_MANAGED',
                        'default' => 'HALF_MANAGED',
                        'enum' => [
                            'FULLY_MANAGED',
                            'HALF_MANAGED',
                        ],
                    ],
                ],
                [
                    'name' => 'MachineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器类型。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS',
                        'default' => 'ECS',
                        'enum' => [
                            'ECS',
                            'DOCKER',
                            'PYHSICAL_MACHINE',
                        ],
                    ],
                ],
                [
                    'name' => 'UseCustomHiveMetaDB',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段，无需填写。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'InitCustomHiveMetaDB',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'保留字段，无需填写。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Configurations',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段，无需填写。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnableEas',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否高安全集群。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'RelatedClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前集群是gateway时，其关联的主集群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C-D7958B72E59B****',
                    ],
                ],
                [
                    'name' => 'WhiteListType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单类型。取值：'."\n"
                            ."\n"
                            .'IP：IP白名单分组。'."\n"
                            .'SecurityGroup：安全组。'."\n"
                            ."\n"
                            .'默认为：IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IP',
                        'enum' => [
                            'IP',
                            'SEC_GROUP',
                        ],
                    ],
                ],
                [
                    'name' => 'AuthorizeContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段，无需填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例和节点ECS实例所在的企业资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端令牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[]',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Password' => [
                                    'description' => 'Knox用户的密码。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'pwd',
                                ],
                                'UserId' => [
                                    'description' => 'Knox用户的用户RAM ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '123456789',
                                ],
                                'UserName' => [
                                    'description' => 'Knox用户的用户名。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'username',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'HostComponentInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '主机组件信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '主机组件信息',
                            'type' => 'object',
                            'properties' => [
                                'ComponentNameList' => [
                                    'description' => '组件列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '组件列表',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '无',
                                    ],
                                    'required' => false,
                                    'example' => 'NAMENODE',
                                    'maxItems' => 20,
                                ],
                                'HostName' => [
                                    'description' => '主机名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ddi-header-1',
                                ],
                                'ServiceName' => [
                                    'description' => '服务名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'SPARK',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 500,
                    ],
                ],
                [
                    'name' => 'ServiceInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '集群的服务详情信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ServiceName' => [
                                    'description' => '服务名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'SPARK',
                                ],
                                'ServiceVersion' => [
                                    'description' => '服务内部版本。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2.3.3-1.0.2',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 500,
                    ],
                ],
                [
                    'name' => 'PromotionInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '促销信息列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ProductCode' => [
                                    'description' => '促销信息，产品代码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[]',
                                    'enum' => [
                                        'emr',
                                        'ecs',
                                    ],
                                ],
                                'PromotionOptionCode' => [
                                    'description' => '促销信息，促销选项代码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[]',
                                ],
                                'PromotionOptionNo' => [
                                    'description' => '促销信息  促销编号',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '[]',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 500,
                    ],
                ],
                [
                    'name' => 'HostGroup',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '机器组列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'AutoRenew' => [
                                    'description' => '机器组机器是否自动续费。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'false',
                                    'default' => 'false',
                                ],
                                'ChargeType' => [
                                    'description' => '机器组机器付费类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PostPaid',
                                    'default' => 'PostPaid',
                                    'enum' => [
                                        'PostPaid',
                                        'PrePaid',
                                    ],
                                ],
                                'ClusterId' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'Comment' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'CreateType' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                    'default' => 'MANUAL',
                                    'enum' => [
                                        'ON-DEMAND',
                                        'MANUAL',
                                    ],
                                ],
                                'DiskCapacity' => [
                                    'description' => '机器组的数据盘容量。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '20000',
                                    'minimum' => '40',
                                    'example' => '80',
                                ],
                                'DiskCount' => [
                                    'description' => '机器组的数据盘数量。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '4',
                                    'minimum' => '1',
                                    'example' => '4',
                                ],
                                'DiskType' => [
                                    'description' => '机器组的数据盘类型。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'CLOUD_ESSD',
                                    'enum' => [
                                        'CLOUD',
                                        'CLOUD_EFFICIENCY',
                                        'CLOUD_SSD',
                                        'LOCAL_DISK',
                                    ],
                                ],
                                'GpuDriver' => [
                                    'description' => 'GPU驱动。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cuda9',
                                ],
                                'HostGroupId' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'HostGroupName' => [
                                    'description' => '主实例组',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '主实例组',
                                ],
                                'HostGroupType' => [
                                    'description' => '机器组类型，枚举值：'."\n"
                                        ."\n"
                                        .'MASTER'."\n"
                                        .'Worker',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'MASTER',
                                    'enum' => [
                                        'CORE',
                                        'MASTER',
                                        'TASK',
                                        'GATEWAY',
                                    ],
                                ],
                                'InstanceType' => [
                                    'description' => '机器组型号',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'ecs.g5.2xlargeg',
                                ],
                                'NodeCount' => [
                                    'description' => '机器组节点数。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '1000',
                                    'minimum' => '2',
                                    'example' => '2',
                                ],
                                'Period' => [
                                    'description' => '包年包月时间（包月数有1、2、3、4、5、6、7、8、9、12、24、36）。HostGroup.n.ChargeType=PrePaid时，必填。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '36',
                                    'default' => '1',
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                        '4',
                                        '5',
                                        '6',
                                        '7',
                                        '8',
                                        '9',
                                        '12',
                                        '24',
                                        '36',
                                    ],
                                ],
                                'SysDiskCapacity' => [
                                    'description' => '	'."\n"
                                        .'机器组的系统盘容量。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '500',
                                    'minimum' => '40',
                                    'example' => '80',
                                ],
                                'SysDiskType' => [
                                    'description' => '机器组的系统盘类型。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'CLOUD_SSD',
                                    'enum' => [
                                        'CLOUD',
                                        'CLOUD_EFFICIENCY',
                                        'CLOUD_SSD',
                                    ],
                                ],
                                'VSwitchId' => [
                                    'description' => '虚拟交换机ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'vsw-bp10tvjyc77psy0z5****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'BootstrapAction',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '引导操作的详细信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Arg' => [
                                    'description' => '引导操作参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '--a=b',
                                ],
                                'Name' => [
                                    'description' => '引导操作名字。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'name',
                                ],
                                'Path' => [
                                    'description' => '引导操作脚本路径。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'oss://bucket/path',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '自定义配置。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ConfigKey' => [
                                    'description' => '自定义配置项的Key。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'fs.trash.interval',
                                ],
                                'ConfigValue' => [
                                    'description' => '自定义配置项的值。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '60',
                                ],
                                'Encrypt' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'FileName' => [
                                    'description' => '自定义配置项所属文件名。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'spark-site',
                                ],
                                'Replace' => [
                                    'description' => '保留字段，无需填写。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '0',
                                ],
                                'ServiceName' => [
                                    'description' => '自定义配置项服务名（大写）。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'SPARK',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => 'DDI实例和节点ECS实例的标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => 'DDI实例和节点ECS实例的标签值。N的取值范围：1~20。一旦传入该值，可以为空字符串。标签值的取值范围：1~128，不能以acs:开头，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
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
                            'ClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'C-D7958B72E59B****	',
                            ],
                            'CoreOrderId' => [
                                'description' => 'Core节点订单ID。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'EmrOrderId' => [
                                'description' => 'Databricks 数据洞察订单ID。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'MasterOrderId' => [
                                'description' => 'Master节点订单ID。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ECSInfo.DiskSize.TooSmall',
                        'errorMessage' => 'The disk size must be greater than or equal to 80 GB.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.ECSOrder.IndexMissing',
                        'errorMessage' => 'The order information is invalid.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.ECSOrder.MasterIndexMissing',
                        'errorMessage' => 'The order information is invalid.',
                    ],
                    [
                        'errorCode' => 'Forbbiden',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.ECSOrder.SlaveOrderMissing',
                        'errorMessage' => 'The order information is invalid.',
                    ],
                    [
                        'errorCode' => 'RAM.Permission.NotAllow',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.ECSOrder.NodeCount.TooSmall',
                        'errorMessage' => 'You must increase the number of nodes.',
                    ],
                    [
                        'errorCode' => 'SecurityGroup.IsEmpty',
                        'errorMessage' => 'You must specify the security group name.',
                    ],
                    [
                        'errorCode' => 'User.Account.Abnormal',
                        'errorMessage' => 'The user account is out of service.',
                    ],
                    [
                        'errorCode' => 'Master.Pwd.Cannot.Blank',
                        'errorMessage' => 'You must specify Master password.',
                    ],
                    [
                        'errorCode' => 'LogPath.Cannot.Blank',
                        'errorMessage' => 'You must specify the log path.',
                    ],
                    [
                        'errorCode' => 'HighAvailability.Master.NodeCount.Not.Match',
                        'errorMessage' => 'The HighAvailability parameter does not match the master node count.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Period',
                        'errorMessage' => 'The specified period is invalid.',
                    ],
                    [
                        'errorCode' => 'Balance.Not.Enough',
                        'errorMessage' => 'Your account does not have enough balance.',
                    ],
                    [
                        'errorCode' => 'VSwitch.NotBelongTo.Zone',
                        'errorMessage' => 'The specified VSwitch does not belong to the specified zone.',
                    ],
                    [
                        'errorCode' => 'InsufficientBalance',
                        'errorMessage' => 'Your account does not have enough balance.',
                    ],
                    [
                        'errorCode' => 'DB.Fail',
                        'errorMessage' => 'A database access error occurred.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.ECSOrder.INVALID',
                        'errorMessage' => 'The order creation parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'Ecs.InstanceType.NotSupported',
                        'errorMessage' => 'The ECS instance type %s is not supported in DDI.',
                    ],
                    [
                        'errorCode' => 'DiskType.Invalid',
                        'errorMessage' => 'The disk type %s is invalid.',
                    ],
                    [
                        'errorCode' => 'Unsupported.DiskType',
                        'errorMessage' => 'The ECS instance type %s does not support the disk type %s.',
                    ],
                    [
                        'errorCode' => 'Unsupported.ZoneId',
                        'errorMessage' => 'The zone %s is not supported.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.DiskSize.TooBig',
                        'errorMessage' => 'The maximum size of the disk is exceeded.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.DiskCount.ExceedLimit',
                        'errorMessage' => 'The maximum number of disks is exceeded.',
                    ],
                    [
                        'errorCode' => 'ECSInfo.NodeType.Unsupported',
                        'errorMessage' => 'The specified node type is not supported.',
                    ],
                    [
                        'errorCode' => 'Must.Specify.MasterNode',
                        'errorMessage' => 'You must specify Master node information.',
                    ],
                    [
                        'errorCode' => 'Only.Support.One.Master',
                        'errorMessage' => 'Only one master node is supported in a DDI cluster.',
                    ],
                    [
                        'errorCode' => 'Have.Orders.Wait.For.Pay',
                        'errorMessage' => 'A payable order already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidDataDiskSize.ValueNotSupported',
                        'errorMessage' => 'The specified data disk size is invalid.',
                    ],
                    [
                        'errorCode' => 'Cluster.WaitForPay.OverLimit',
                        'errorMessage' => 'Too many clusters are waiting for payment.',
                    ],
                    [
                        'errorCode' => 'User.OtherUserResource.NotAllow',
                        'errorMessage' => 'You are not authorized to operate other users resource.',
                    ],
                    [
                        'errorCode' => 'AuthRealNameNotPass',
                        'errorMessage' => 'User real name authenticate failed!',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ClusterId\\": \\"C-D7958B72E59B****\\\\t\\",\\n  \\"CoreOrderId\\": \\"0\\",\\n  \\"EmrOrderId\\": \\"0\\",\\n  \\"MasterOrderId\\": \\"0\\",\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\"\\n}","errorExample":""},{"type":"xml","example":"<MasterOrderId>0</MasterOrderId>\\n<CoreOrderId>0</CoreOrderId>\\n<RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n<ClusterId>C-D7958B72E59B****</ClusterId>\\n<EmrOrderId>0</EmrOrderId>","errorExample":""}]',
            'title' => 'CreateClusterV2',
            'summary' => '调用CreateClusterV2，创建一个Databricks 数据洞察集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReleaseCluster' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'C-D7958B72E59B****',
                    ],
                ],
                [
                    'name' => 'ForceRelease',
                    'in' => 'query',
                    'schema' => [
                        'description' => '正常释放时，如果您打开了日志保存，系统会花费几分钟时间将作业的日志都保存到您的OSS空间中。'."\n"
                            .'您也可以勾选强制释放选项，放弃日志的保存，立即释放。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
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
                                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Cluster.RegionId.NotMatch',
                        'errorMessage' => 'The cluster does not exist in region %s.',
                    ],
                    [
                        'errorCode' => 'Cluster.Cannot.Release',
                        'errorMessage' => 'Failed to release the cluster.',
                    ],
                    [
                        'errorCode' => 'Prepaid.Cluster.Cannot.Release',
                        'errorMessage' => 'Prepaid clusters do not support the release operation.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'ClusterId.NotFound',
                        'errorMessage' => 'The specified cluster ID %s does not exist.',
                    ],
                    [
                        'errorCode' => 'RAM.Permission.NotAllow',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'User.Account.Abnormal',
                        'errorMessage' => 'The user account is out of service.',
                    ],
                    [
                        'errorCode' => 'Cluster.Role.NotConfirm',
                        'errorMessage' => 'The DDI RAM role has not been granted.',
                    ],
                    [
                        'errorCode' => 'DB.Fail',
                        'errorMessage' => 'A database access error occurred.',
                    ],
                    [
                        'errorCode' => 'User.OtherUserResource.NotAllow',
                        'errorMessage' => 'You are not authorized to operate other users resource.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Params.Illegal',
                        'errorMessage' => 'The format of the specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\"\\n}","errorExample":""},{"type":"xml","example":"<ReleaseClusterResponse>\\n    <RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n</ReleaseClusterResponse>","errorExample":""}]',
            'title' => '释放集群所有节点',
            'summary' => '释放集群所有节点。',
        ],
        'DescribeClusterV2' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'C-E331B8AC12BF****',
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
                                'example' => '14E9C045-9B8D-4D1E-8D23-FC0027B6D947',
                            ],
                            'ClusterInfo' => [
                                'description' => '集群详情。',
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-bp1l4urd87xlh7i4****',
                                    ],
                                    'LogEnable' => [
                                        'description' => '是否打开集群OSS日志。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TaskNodeInService' => [
                                        'description' => '使用中的Task节点数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'AutoScalingSpotWithLimitAllowed' => [
                                        'description' => '是否允许使用弹性伸缩竞价实例。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'UserId' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => '125046002175****',
                                    ],
                                    'ChargeType' => [
                                        'description' => '付费方式。',
                                        'type' => 'string',
                                        'example' => 'PostPaid',
                                    ],
                                    'StopTime' => [
                                        'description' => '集群停止时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1543804234000',
                                    ],
                                    'DepositType' => [
                                        'description' => '集群托管方式。',
                                        'type' => 'string',
                                        'example' => 'HALF_MANAGED',
                                    ],
                                    'CreateType' => [
                                        'description' => '集群创建的方式。',
                                        'type' => 'string',
                                        'example' => 'MANUAL',
                                    ],
                                    'RelateClusterId' => [
                                        'description' => '针对Gateway， 关联的主集群ID。',
                                        'type' => 'string',
                                        'example' => 'C-D7958B72E59****',
                                    ],
                                    'SecurityGroupName' => [
                                        'description' => '安全组名。',
                                        'type' => 'string',
                                        'example' => 'ddi-default-securitygroup',
                                    ],
                                    'ResizeDiskEnable' => [
                                        'description' => '是否允许扩容磁盘。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ImageId' => [
                                        'description' => '创建集群使用的镜像ID。',
                                        'type' => 'string',
                                        'example' => 'm-bp118knl07yk88y8s6cj',
                                    ],
                                    'UserDefinedEmrEcsRole' => [
                                        'description' => '使用的DDI权限名。',
                                        'type' => 'string',
                                        'example' => 'AliyunDDIAccessingOSSRole',
                                    ],
                                    'MetaStoreType' => [
                                        'description' => '统一元数据类型。',
                                        'type' => 'string',
                                        'example' => 'local',
                                    ],
                                    'StartTime' => [
                                        'description' => '集群启动时间（时间戳）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1543804234000',
                                    ],
                                    'Configurations' => [
                                        'description' => '无需填写。',
                                        'type' => 'string',
                                        'example' => '[]',
                                    ],
                                    'LogPath' => [
                                        'description' => '集群OSS日志路径。',
                                        'type' => 'string',
                                        'example' => 'oss://bucketname/path',
                                    ],
                                    'AutoScalingVersion' => [
                                        'description' => '保留字段。',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'NetType' => [
                                        'description' => '集群网络类型。',
                                        'type' => 'string',
                                        'example' => 'vpc',
                                    ],
                                    'ZoneId' => [
                                        'description' => '可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-b',
                                    ],
                                    'CreateResource' => [
                                        'description' => '集群标记，无需关注。',
                                        'type' => 'string',
                                        'example' => 'ECM_DDI',
                                    ],
                                    'Status' => [
                                        'description' => '集群状态。',
                                        'type' => 'string',
                                        'example' => 'IDLE',
                                    ],
                                    'RunningTime' => [
                                        'description' => '已经运行的时间（秒数）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1102',
                                    ],
                                    'HighAvailabilityEnable' => [
                                        'description' => '是否高可用集群。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SecurityGroupId' => [
                                        'description' => '安全组ID。',
                                        'type' => 'string',
                                        'example' => 'sg-bp1bvompzxgx7q0****',
                                    ],
                                    'AutoScalingAllowed' => [
                                        'description' => '允许弹性扩容。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MasterNodeInService' => [
                                        'description' => '使用中的Master节点数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'AutoScalingEnable' => [
                                        'description' => '是否开启弹性扩容。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'AutoScalingWithGraceAllowed' => [
                                        'description' => '保留字段。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CoreNodeInService' => [
                                        'description' => '使用中的Core节点数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'ShowSoftwareInterface' => [
                                        'description' => '是否展示快捷链接页面。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'K8sClusterId' => [
                                        'description' => 'K8s集群ID',
                                        'type' => 'string',
                                        'example' => '[]',
                                    ],
                                    'AutoScalingByLoadAllowed' => [
                                        'description' => '是否允许按负载伸缩。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LocalMetaDb' => [
                                        'description' => '是否使用Hive本地元数据库。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'InstanceGeneration' => [
                                        'description' => 'ECS分代。',
                                        'type' => 'string',
                                        'example' => 'ecs-3',
                                    ],
                                    'Name' => [
                                        'description' => '集群名。',
                                        'type' => 'string',
                                        'example' => 'cluster_name',
                                    ],
                                    'EasEnable' => [
                                        'description' => '是否高安全集群。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MachineType' => [
                                        'description' => '集群的主机类型，目前默认为ECS。',
                                        'type' => 'string',
                                        'example' => 'ECS',
                                    ],
                                    'MasterNodeTotal' => [
                                        'description' => 'Master节点总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Period' => [
                                        'description' => '机器组的包年包月时间（包月数有1、2、3、4、5、6、7、8、9、12、24、36）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '36',
                                    ],
                                    'ExtraInfo' => [
                                        'description' => 'Stack的附加信息。',
                                        'type' => 'string',
                                        'example' => '-None-',
                                    ],
                                    'IoOptimized' => [
                                        'description' => '是否I/O优化。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'VSwitchId' => [
                                        'description' => '虚拟交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-bp11qjbyggil4pow0****',
                                    ],
                                    'ExpiredTime' => [
                                        'description' => '包年包月集群的过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1544076205000',
                                    ],
                                    'CoreNodeTotal' => [
                                        'description' => 'Core节点总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'GatewayClusterIds' => [
                                        'description' => '包含的Gateway集群ID。',
                                        'type' => 'string',
                                        'example' => 'C-D7958B72E59B****',
                                    ],
                                    'BootstrapFailed' => [
                                        'description' => '引导操作执行结果。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Id' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'C-E331B8AC12BF****',
                                    ],
                                    'TaskNodeTotal' => [
                                        'description' => 'Task节点总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'GatewayClusterInfoList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'GatewayClusterInfo' => [
                                                'description' => 'Gateway集群概况信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ClusterName' => [
                                                            'description' => 'Gateway集群名。',
                                                            'type' => 'string',
                                                            'example' => 'gateway-name',
                                                        ],
                                                        'Status' => [
                                                            'description' => 'Gateway集群状态。',
                                                            'type' => 'string',
                                                            'example' => 'IDLE',
                                                        ],
                                                        'ClusterId' => [
                                                            'description' => 'Gateway集群ID。',
                                                            'type' => 'string',
                                                            'example' => 'C-D7958B72E59B****',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'HostGroupList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'HostGroup' => [
                                                'description' => '集群机器组列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'LockType' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'HostGroupSubType' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'HostGroupType' => [
                                                            'description' => '机器组角色。',
                                                            'type' => 'string',
                                                            'example' => 'CORE',
                                                        ],
                                                        'HostGroupChangeStatus' => [
                                                            'description' => '保留字段。升配任务的执行状态，枚举值：IN_PROGRESS、COMPLETED和FAILED。',
                                                            'type' => 'string',
                                                            'example' => 'IN_PROGRESS',
                                                        ],
                                                        'ChargeType' => [
                                                            'description' => '付费类型。',
                                                            'type' => 'string',
                                                            'example' => 'PostPaid',
                                                        ],
                                                        'LockReason' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'DiskType' => [
                                                            'description' => '数据盘磁盘类型。',
                                                            'type' => 'string',
                                                            'example' => 'CLOUD_ESSD',
                                                        ],
                                                        'HostGroupId' => [
                                                            'description' => '机器组ID。',
                                                            'type' => 'string',
                                                            'example' => 'G-9D08642FB8CE****',
                                                        ],
                                                        'BandWidth' => [
                                                            'description' => '带宽。',
                                                            'type' => 'string',
                                                            'example' => '10',
                                                        ],
                                                        'InstanceType' => [
                                                            'description' => '机器组实例类型。',
                                                            'type' => 'string',
                                                            'example' => 'ecs.n4.2xlarge',
                                                        ],
                                                        'DiskCount' => [
                                                            'description' => '数据盘数量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '4',
                                                        ],
                                                        'Period' => [
                                                            'description' => '包年包月时间（天）。',
                                                            'type' => 'string',
                                                            'example' => '30',
                                                        ],
                                                        'DiskCapacity' => [
                                                            'description' => '数据盘容量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '120',
                                                        ],
                                                        'CpuCore' => [
                                                            'description' => 'CPU核心数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '16',
                                                        ],
                                                        'MemoryCapacity' => [
                                                            'description' => '内存大小。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '16',
                                                        ],
                                                        'NodeCount' => [
                                                            'description' => '机器组节点数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '4',
                                                        ],
                                                        'HostGroupChangeType' => [
                                                            'description' => '机器组当前的操作类型，枚举值：RESIZE_DISK、MODIFY_INSTANCE_TYPE和RESTART_HOST_GROUP。',
                                                            'type' => 'string',
                                                            'example' => 'RESIZE_DISK',
                                                        ],
                                                        'HostGroupName' => [
                                                            'description' => '机器组名称。',
                                                            'type' => 'string',
                                                            'example' => '主实例组',
                                                        ],
                                                        'Nodes' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Node' => [
                                                                    'description' => '机器节点。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Status' => [
                                                                                'description' => '状态。',
                                                                                'type' => 'string',
                                                                                'example' => 'NORMAL',
                                                                            ],
                                                                            'SupportIpV6' => [
                                                                                'description' => '是否支持IPV6。',
                                                                                'type' => 'boolean',
                                                                                'example' => 'false',
                                                                            ],
                                                                            'InnerIp' => [
                                                                                'description' => '内网IP。',
                                                                                'type' => 'string',
                                                                                'example' => '192.168.128.236',
                                                                            ],
                                                                            'ExpiredTime' => [
                                                                                'description' => '超时时间。',
                                                                                'type' => 'string',
                                                                                'example' => '2099-12-31T15:59Z',
                                                                            ],
                                                                            'CreateTime' => [
                                                                                'description' => '创建时间。',
                                                                                'type' => 'string',
                                                                                'example' => '1543804242000',
                                                                            ],
                                                                            'ZoneId' => [
                                                                                'description' => '可用区。',
                                                                                'type' => 'string',
                                                                                'example' => 'cn-hangzhou-e',
                                                                            ],
                                                                            'InstanceId' => [
                                                                                'description' => 'ECS实例ID。',
                                                                                'type' => 'string',
                                                                                'example' => 'i-bp1ftve3lzvpm16hp7lo',
                                                                            ],
                                                                            'EmrExpiredTime' => [
                                                                                'description' => 'DDI超时时间。',
                                                                                'type' => 'string',
                                                                                'example' => '2099-12-31T15:59Z',
                                                                            ],
                                                                            'PubIp' => [
                                                                                'description' => '公网IP。',
                                                                                'type' => 'string',
                                                                                'example' => '47.99.***.***',
                                                                            ],
                                                                            'DaemonInfos' => [
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'DaemonInfo' => [
                                                                                        'description' => '保留字段。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'Name' => [
                                                                                                    'description' => '保留字段。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '0',
                                                                                                ],
                                                                                            ],
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'DiskInfos' => [
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'DiskInfo' => [
                                                                                        'description' => '磁盘信息。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'Type' => [
                                                                                                    'description' => '磁盘类型。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'data',
                                                                                                ],
                                                                                                'DiskId' => [
                                                                                                    'description' => '磁盘ID。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'd-bp15vg2nr3x2t0f37ko9',
                                                                                                ],
                                                                                                'Size' => [
                                                                                                    'description' => '磁盘容量（G）。',
                                                                                                    'type' => 'integer',
                                                                                                    'format' => 'int32',
                                                                                                    'example' => '80',
                                                                                                ],
                                                                                                'Device' => [
                                                                                                    'description' => '	'."\n"
                                                                                                        .'磁盘名。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => '/dev/xvdb',
                                                                                                ],
                                                                                                'DiskName' => [
                                                                                                    'description' => '磁盘名。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'disk1',
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
                                    ],
                                    'BootstrapActionList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'BootstrapAction' => [
                                                'description' => '引导操作列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Path' => [
                                                            'description' => '引导操作脚本路径。',
                                                            'type' => 'string',
                                                            'example' => 'oss://bucket/path',
                                                        ],
                                                        'Name' => [
                                                            'description' => '引导操作的名字。',
                                                            'type' => 'string',
                                                            'example' => 'action_name',
                                                        ],
                                                        'Arg' => [
                                                            'description' => '引导操作的参数。',
                                                            'type' => 'string',
                                                            'example' => '--a',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RelateClusterInfo' => [
                                        'description' => '针对Gateway, 关联的主集群信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ClusterName' => [
                                                'description' => '关联集群名称。',
                                                'type' => 'string',
                                                'example' => 'main',
                                            ],
                                            'Status' => [
                                                'description' => '状态。',
                                                'type' => 'string',
                                                'example' => 'SUCCESS',
                                            ],
                                            'ClusterId' => [
                                                'description' => '关联集群ID。',
                                                'type' => 'string',
                                                'example' => 'C-D7958B72E59B****',
                                            ],
                                        ],
                                    ],
                                    'HostPoolInfo' => [
                                        'description' => '机器池信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'HpName' => [
                                                'description' => '机器池名称。',
                                                'type' => 'string',
                                                'example' => 'name',
                                            ],
                                            'HpBizId' => [
                                                'description' => '机器池 ID。',
                                                'type' => 'string',
                                                'example' => 'id',
                                            ],
                                        ],
                                    ],
                                    'FailReason' => [
                                        'description' => '集群创建失败的原因。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ErrorMsg' => [
                                                'description' => '创建失败错误信息。',
                                                'type' => 'string',
                                                'example' => 'The specified ImageId does not exist.',
                                            ],
                                            'RequestId' => [
                                                'description' => '创建集群请求ID。',
                                                'type' => 'string',
                                                'example' => 'B8DC3A91-3953-4444-92BB-DBC29C47EC1A',
                                            ],
                                            'ErrorCode' => [
                                                'description' => '创建失败错误码。',
                                                'type' => 'string',
                                                'example' => 'InvalidImageId.NotFound',
                                            ],
                                        ],
                                    ],
                                    'SoftwareInfo' => [
                                        'description' => '服务列表。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ClusterType' => [
                                                'description' => '集群类型。',
                                                'type' => 'string',
                                                'example' => '标准型',
                                            ],
                                            'EmrVer' => [
                                                'description' => 'DDI版本号。',
                                                'type' => 'string',
                                                'example' => 'DDI-V1.0',
                                            ],
                                            'Softwares' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Software' => [
                                                        'description' => '服务列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DisplayName' => [
                                                                    'description' => '服务名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'SPARK',
                                                                ],
                                                                'OnlyDisplay' => [
                                                                    'description' => '是否展现。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'false',
                                                                ],
                                                                'StartTpe' => [
                                                                    'description' => '启动类型。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '1',
                                                                ],
                                                                'Name' => [
                                                                    'description' => '服务内部名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'HIVE',
                                                                ],
                                                                'Version' => [
                                                                    'description' => '服务版本。',
                                                                    'type' => 'string',
                                                                    'example' => '2.3.3',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AccessInfo' => [
                                        'description' => '集群连接信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ZKLinks' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ZKLink' => [
                                                        'description' => 'ZooKeeper连接信息。'."\n"
                                                            ."\n",
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Port' => [
                                                                    'description' => 'ZooKeeper连接端口。',
                                                                    'type' => 'string',
                                                                    'example' => '2181',
                                                                ],
                                                                'Link' => [
                                                                    'description' => 'ZooKeeper连接地址。',
                                                                    'type' => 'string',
                                                                    'example' => 'ddi-worker-1,ddi-header-2,ddi-header-1',
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
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'ClusterId.NotFound',
                        'errorMessage' => 'The cluster ID does not exist.',
                    ],
                    [
                        'errorCode' => 'RAM.Permission.NotAllow',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'DB.Fail',
                        'errorMessage' => 'A database access error occurred.',
                    ],
                    [
                        'errorCode' => 'User.OtherUserResource.NotAllow',
                        'errorMessage' => 'You are not authorized to operate other users resource.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Params.Illegal',
                        'errorMessage' => 'The format of the specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14E9C045-9B8D-4D1E-8D23-FC0027B6D947\\",\\n  \\"ClusterInfo\\": {\\n    \\"VpcId\\": \\"vpc-bp1l4urd87xlh7i4****\\",\\n    \\"LogEnable\\": true,\\n    \\"TaskNodeInService\\": 2,\\n    \\"AutoScalingSpotWithLimitAllowed\\": false,\\n    \\"UserId\\": \\"125046002175****\\",\\n    \\"ChargeType\\": \\"PostPaid\\",\\n    \\"StopTime\\": 1543804234000,\\n    \\"DepositType\\": \\"HALF_MANAGED\\",\\n    \\"CreateType\\": \\"MANUAL\\",\\n    \\"RelateClusterId\\": \\"C-D7958B72E59****\\",\\n    \\"SecurityGroupName\\": \\"ddi-default-securitygroup\\",\\n    \\"ResizeDiskEnable\\": true,\\n    \\"ImageId\\": \\"m-bp118knl07yk88y8s6cj\\",\\n    \\"UserDefinedEmrEcsRole\\": \\"AliyunDDIAccessingOSSRole\\",\\n    \\"MetaStoreType\\": \\"local\\",\\n    \\"StartTime\\": 1543804234000,\\n    \\"Configurations\\": \\"[]\\",\\n    \\"LogPath\\": \\"oss://bucketname/path\\",\\n    \\"AutoScalingVersion\\": \\"false\\",\\n    \\"NetType\\": \\"vpc\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-b\\",\\n    \\"CreateResource\\": \\"ECM_DDI\\",\\n    \\"Status\\": \\"IDLE\\",\\n    \\"RunningTime\\": 1102,\\n    \\"HighAvailabilityEnable\\": true,\\n    \\"SecurityGroupId\\": \\"sg-bp1bvompzxgx7q0****\\",\\n    \\"AutoScalingAllowed\\": false,\\n    \\"MasterNodeInService\\": 2,\\n    \\"AutoScalingEnable\\": false,\\n    \\"AutoScalingWithGraceAllowed\\": false,\\n    \\"CoreNodeInService\\": 3,\\n    \\"ShowSoftwareInterface\\": true,\\n    \\"K8sClusterId\\": \\"[]\\",\\n    \\"AutoScalingByLoadAllowed\\": true,\\n    \\"LocalMetaDb\\": true,\\n    \\"InstanceGeneration\\": \\"ecs-3\\",\\n    \\"Name\\": \\"cluster_name\\",\\n    \\"EasEnable\\": true,\\n    \\"MachineType\\": \\"ECS\\",\\n    \\"MasterNodeTotal\\": 2,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Period\\": 36,\\n    \\"ExtraInfo\\": \\"-None-\\",\\n    \\"IoOptimized\\": true,\\n    \\"VSwitchId\\": \\"vsw-bp11qjbyggil4pow0****\\",\\n    \\"ExpiredTime\\": 1544076205000,\\n    \\"CoreNodeTotal\\": 3,\\n    \\"GatewayClusterIds\\": \\"C-D7958B72E59B****\\",\\n    \\"BootstrapFailed\\": false,\\n    \\"Id\\": \\"C-E331B8AC12BF****\\",\\n    \\"TaskNodeTotal\\": 2,\\n    \\"GatewayClusterInfoList\\": {\\n      \\"GatewayClusterInfo\\": [\\n        {\\n          \\"ClusterName\\": \\"gateway-name\\",\\n          \\"Status\\": \\"IDLE\\",\\n          \\"ClusterId\\": \\"C-D7958B72E59B****\\"\\n        }\\n      ]\\n    },\\n    \\"HostGroupList\\": {\\n      \\"HostGroup\\": [\\n        {\\n          \\"LockType\\": \\"0\\",\\n          \\"HostGroupSubType\\": \\"0\\",\\n          \\"HostGroupType\\": \\"CORE\\",\\n          \\"HostGroupChangeStatus\\": \\"IN_PROGRESS\\",\\n          \\"ChargeType\\": \\"PostPaid\\",\\n          \\"LockReason\\": \\"0\\",\\n          \\"DiskType\\": \\"CLOUD_ESSD\\",\\n          \\"HostGroupId\\": \\"G-9D08642FB8CE****\\",\\n          \\"BandWidth\\": \\"10\\",\\n          \\"InstanceType\\": \\"ecs.n4.2xlarge\\",\\n          \\"DiskCount\\": 4,\\n          \\"Period\\": \\"30\\",\\n          \\"DiskCapacity\\": 120,\\n          \\"CpuCore\\": 16,\\n          \\"MemoryCapacity\\": 16,\\n          \\"NodeCount\\": 4,\\n          \\"HostGroupChangeType\\": \\"RESIZE_DISK\\",\\n          \\"HostGroupName\\": \\"主实例组\\",\\n          \\"Nodes\\": {\\n            \\"Node\\": [\\n              {\\n                \\"Status\\": \\"NORMAL\\",\\n                \\"SupportIpV6\\": false,\\n                \\"InnerIp\\": \\"192.168.128.236\\",\\n                \\"ExpiredTime\\": \\"2099-12-31T15:59Z\\",\\n                \\"CreateTime\\": \\"1543804242000\\",\\n                \\"ZoneId\\": \\"cn-hangzhou-e\\",\\n                \\"InstanceId\\": \\"i-bp1ftve3lzvpm16hp7lo\\",\\n                \\"EmrExpiredTime\\": \\"2099-12-31T15:59Z\\",\\n                \\"PubIp\\": \\"47.99.***.***\\",\\n                \\"DaemonInfos\\": {\\n                  \\"DaemonInfo\\": [\\n                    {\\n                      \\"Name\\": \\"0\\"\\n                    }\\n                  ]\\n                },\\n                \\"DiskInfos\\": {\\n                  \\"DiskInfo\\": [\\n                    {\\n                      \\"Type\\": \\"data\\",\\n                      \\"DiskId\\": \\"d-bp15vg2nr3x2t0f37ko9\\",\\n                      \\"Size\\": 80,\\n                      \\"Device\\": \\"/dev/xvdb\\",\\n                      \\"DiskName\\": \\"disk1\\"\\n                    }\\n                  ]\\n                }\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    },\\n    \\"BootstrapActionList\\": {\\n      \\"BootstrapAction\\": [\\n        {\\n          \\"Path\\": \\"oss://bucket/path\\",\\n          \\"Name\\": \\"action_name\\",\\n          \\"Arg\\": \\"--a\\"\\n        }\\n      ]\\n    },\\n    \\"RelateClusterInfo\\": {\\n      \\"ClusterName\\": \\"main\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"ClusterId\\": \\"C-D7958B72E59B****\\"\\n    },\\n    \\"HostPoolInfo\\": {\\n      \\"HpName\\": \\"name\\",\\n      \\"HpBizId\\": \\"id\\"\\n    },\\n    \\"FailReason\\": {\\n      \\"ErrorMsg\\": \\"The specified ImageId does not exist.\\",\\n      \\"RequestId\\": \\"B8DC3A91-3953-4444-92BB-DBC29C47EC1A\\",\\n      \\"ErrorCode\\": \\"InvalidImageId.NotFound\\"\\n    },\\n    \\"SoftwareInfo\\": {\\n      \\"ClusterType\\": \\"标准型\\",\\n      \\"EmrVer\\": \\"DDI-V1.0\\",\\n      \\"Softwares\\": {\\n        \\"Software\\": [\\n          {\\n            \\"DisplayName\\": \\"SPARK\\",\\n            \\"OnlyDisplay\\": false,\\n            \\"StartTpe\\": 1,\\n            \\"Name\\": \\"HIVE\\",\\n            \\"Version\\": \\"2.3.3\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"AccessInfo\\": {\\n      \\"ZKLinks\\": {\\n        \\"ZKLink\\": [\\n          {\\n            \\"Port\\": \\"2181\\",\\n            \\"Link\\": \\"ddi-worker-1,ddi-header-2,ddi-header-1\\"\\n          }\\n        ]\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ClusterInfo>\\n    <TaskNodeInService>2</TaskNodeInService>\\n    <ShowSoftwareInterface>true</ShowSoftwareInterface>\\n    <CoreNodeInService>3</CoreNodeInService>\\n    <HostPoolInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </HostPoolInfo>\\n    <BootstrapActionList>\\n        <BootstrapAction>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </BootstrapAction>\\n        <BootstrapAction>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </BootstrapAction>\\n    </BootstrapActionList>\\n    <ResizeDiskEnable>true</ResizeDiskEnable>\\n    <FailReason>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </FailReason>\\n    <K8sClusterId>[]</K8sClusterId>\\n    <Name>cluster_name</Name>\\n    <HighAvailabilityEnable>true</HighAvailabilityEnable>\\n    <AutoScalingVersion>false</AutoScalingVersion>\\n    <ExpiredTime>1544076205000</ExpiredTime>\\n    <CreateType>MANUAL</CreateType>\\n    <ImageId>m-bp118knl07yk88y8s6cj</ImageId>\\n    <AutoScalingSpotWithLimitAllowed>false</AutoScalingSpotWithLimitAllowed>\\n    <UserDefinedEmrEcsRole>AliyunDDIAccessingOSSRole</UserDefinedEmrEcsRole>\\n    <AutoScalingAllowed>false</AutoScalingAllowed>\\n    <StopTime>1543804234000</StopTime>\\n    <Status>IDLE</Status>\\n    <CreateResource>ECM_DDI</CreateResource>\\n    <BootstrapFailed>false</BootstrapFailed>\\n    <VSwitchId>vsw-bp11qjbyggil4pow0****</VSwitchId>\\n    <DepositType>HALF_MANAGED</DepositType>\\n    <StartTime>1543804234000</StartTime>\\n    <Period>36</Period>\\n    <MetaStoreType>local</MetaStoreType>\\n    <GatewayClusterInfoList>\\n        <GatewayClusterInfo>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </GatewayClusterInfo>\\n        <GatewayClusterInfo>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </GatewayClusterInfo>\\n    </GatewayClusterInfoList>\\n    <EasEnable>true</EasEnable>\\n    <VpcId>vpc-bp1l4urd87xlh7i4****</VpcId>\\n    <HostGroupList>\\n        <HostGroup>\\n            <Status>IDLE</Status>\\n            <ClusterId>C-D7958B72E59B****</ClusterId>\\n            <ClusterName>gateway-name</ClusterName>\\n        </HostGroup>\\n        <HostGroup>\\n            <HostGroupType>CORE</HostGroupType>\\n            <HostGroupSubType>0</HostGroupSubType>\\n            <HostGroupChangeType>RESIZE_DISK</HostGroupChangeType>\\n            <DiskCount>4</DiskCount>\\n            <HostGroupChangeStatus>IN_PROGRESS</HostGroupChangeStatus>\\n            <NodeCount>4</NodeCount>\\n            <Period>30</Period>\\n            <MemoryCapacity>16</MemoryCapacity>\\n            <HostGroupName>主实例组</HostGroupName>\\n            <LockType>0</LockType>\\n            <DiskType>CLOUD_ESSD</DiskType>\\n            <BandWidth>10</BandWidth>\\n            <DiskCapacity>120</DiskCapacity>\\n            <HostGroupId>G-9D08642FB8CE****</HostGroupId>\\n            <ChargeType>PostPaid</ChargeType>\\n            <CpuCore>16</CpuCore>\\n            <InstanceType>ecs.n4.2xlarge</InstanceType>\\n            <LockReason>0</LockReason>\\n        </HostGroup>\\n        <HostGroup>\\n            <Nodes>\\n                <Node>\\n                    <Status>NORMAL</Status>\\n                    <ZoneId>cn-hangzhou-e</ZoneId>\\n                    <InnerIp>192.168.128.236</InnerIp>\\n                    <InstanceId>i-bp1ftve3lzvpm16hp7lo</InstanceId>\\n                    <ExpiredTime>2099-12-31T15:59Z</ExpiredTime>\\n                    <CreateTime>1543804242000</CreateTime>\\n                    <PubIp>47.99.***.***</PubIp>\\n                    <EmrExpiredTime>2099-12-31T15:59Z</EmrExpiredTime>\\n                    <SupportIpV6>false</SupportIpV6>\\n                </Node>\\n                <Node>\\n                    <DaemonInfos>\\n                        <DaemonInfo>\\n                            <Name>0</Name>\\n                        </DaemonInfo>\\n                        <DaemonInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DaemonInfo>\\n                    </DaemonInfos>\\n                    <DiskInfos>\\n                        <DiskInfo>\\n                            <Name>0</Name>\\n                        </DiskInfo>\\n                        <DiskInfo>\\n                            <Type>data</Type>\\n                            <Device>/dev/xvdb</Device>\\n                            <Size>80</Size>\\n                            <DiskName>disk1</DiskName>\\n                            <DiskId>d-bp15vg2nr3x2t0f37ko9</DiskId>\\n                        </DiskInfo>\\n                    </DiskInfos>\\n                </Node>\\n            </Nodes>\\n        </HostGroup>\\n        <HostGroup>\\n            <Path>oss://bucket/path</Path>\\n            <Arg>--a</Arg>\\n            <Name>action_name</Name>\\n        </HostGroup>\\n    </HostGroupList>\\n    <Id>C-E331B8AC12BF****</Id>\\n    <SoftwareInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </SoftwareInfo>\\n    <SecurityGroupName>emr-default-securitygroup</SecurityGroupName>\\n    <LogEnable>true</LogEnable>\\n    <MasterNodeInService>2</MasterNodeInService>\\n    <RelateClusterInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </RelateClusterInfo>\\n    <RelateClusterId>C-D7958B72E59****</RelateClusterId>\\n    <AutoScalingByLoadAllowed>true</AutoScalingByLoadAllowed>\\n    <AutoScalingWithGraceAllowed>false</AutoScalingWithGraceAllowed>\\n    <CoreNodeTotal>3</CoreNodeTotal>\\n    <Configurations>[]</Configurations>\\n    <NetType>vpc</NetType>\\n    <LocalMetaDb>true</LocalMetaDb>\\n    <GatewayClusterIds>C-D7958B72E59B****</GatewayClusterIds>\\n    <IoOptimized>true</IoOptimized>\\n    <ZoneId>cn-hangzhou-b</ZoneId>\\n    <SecurityGroupId>sg-bp1bvompzxgx7q0****</SecurityGroupId>\\n    <MachineType>ECS</MachineType>\\n    <TaskNodeTotal>2</TaskNodeTotal>\\n    <AccessInfo>\\n        <Status>SUCCESS</Status>\\n        <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n        <ZKLinks>\\n            <ZKLink>\\n                <Port>2181</Port>\\n                <Link>ddi-worker-1,ddi-header-2,ddi-header-1</Link>\\n            </ZKLink>\\n        </ZKLinks>\\n        <ClusterId>C-D7958B72E59B****</ClusterId>\\n        <HpBizId>id</HpBizId>\\n        <Softwares>\\n            <Software>\\n                <StartTpe>1</StartTpe>\\n                <Version>2.3.3</Version>\\n                <DisplayName>SPARK</DisplayName>\\n                <OnlyDisplay>false</OnlyDisplay>\\n                <Name>HIVE</Name>\\n            </Software>\\n        </Softwares>\\n        <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n        <ClusterName>main</ClusterName>\\n        <EmrVer>DDI-V1.0</EmrVer>\\n        <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        <ClusterType>标准型</ClusterType>\\n        <HpName>name</HpName>\\n    </AccessInfo>\\n    <ExtraInfo>-None-</ExtraInfo>\\n    <MasterNodeTotal>2</MasterNodeTotal>\\n    <UserId>125046002175****</UserId>\\n    <ChargeType>PostPaid</ChargeType>\\n    <AutoScalingEnable>false</AutoScalingEnable>\\n    <InstanceGeneration>ecs-3</InstanceGeneration>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <LogPath>oss://bucketname/path</LogPath>\\n    <RunningTime>1102</RunningTime>\\n</ClusterInfo>\\n<RequestId>14E9C045-9B8D-4D1E-8D23-FC0027B6D947</RequestId>","errorExample":""}]',
            'title' => '查询集群基本信息',
            'summary' => '查询集群的基本信息，包括：付费、ECS机器概况和DDI服务列表等。',
            'description' => '****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListClusters' => [
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
                    'name' => 'CreateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群创建类型。可选值：'."\n"
                            .'ON-DEMAND。'."\n"
                            .'MANUAL。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ON-DEMAND',
                        'enum' => [
                            'ON-DEMAND',
                            'MANUAL',
                        ],
                    ],
                ],
                [
                    'name' => 'MachineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机器类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS',
                        'enum' => [
                            'ECS',
                            'DOCKER',
                            'PYHSICAL_MACHINE',
                            'ECS_FROM_ECM_HOSTPOOL',
                        ],
                    ],
                ],
                [
                    'name' => 'IsDesc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否倒序排列。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'DepositType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '托管类型，标识集群是全托管还是半托管。枚举值：'."\n"
                            ."\n"
                            .'HALF_MANAGED。'."\n"
                            .'FULLY_MANAGED。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HALF_MANAGED',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页分数，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'DefaultStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查询默认状态为初始化中、等待构建、空闲、运行中、释放中、创建失败的集群。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cluster_name',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DDI实例和节点ECS实例所在的企业资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'ClusterTypeList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '集群类型列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'DATABRICKS DATAINSIGHT',
                        ],
                        'required' => false,
                        'example' => '["HADOOP","KAFKA"]',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'StatusList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '状态列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Running',
                        ],
                        'required' => false,
                        'example' => '["CREATING","IDLE"]',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => 'DDI实例和节点ECS实例的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => 'DDI实例和节点ECS实例的标签值。N的取值范围：1~20。一旦传入该值，可以为空字符串。标签值的取值范围1~128，不能以acs:开头，不能包含http://或者https://。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ExpiredTagList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '保留字段。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'None',
                        ],
                        'required' => false,
                        'example' => '0',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22',
                            ],
                            'PageNumber' => [
                                'description' => '分页页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Clusters' => [
                                'type' => 'object',
                                'properties' => [
                                    'ClusterInfo' => [
                                        'description' => '集群列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '集群类型。',
                                                    'type' => 'string',
                                                    'example' => '标准型',
                                                ],
                                                'Status' => [
                                                    'description' => '集群状态。',
                                                    'type' => 'string',
                                                    'example' => 'IDEL',
                                                ],
                                                'RunningTime' => [
                                                    'description' => '已运行时间（秒）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2345',
                                                ],
                                                'MetaStoreType' => [
                                                    'description' => '统一元数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'local',
                                                ],
                                                'MachineType' => [
                                                    'description' => '集群的主机类型，目前默认为ECS。',
                                                    'type' => 'string',
                                                    'example' => 'ECS',
                                                ],
                                                'OrderList' => [
                                                    'description' => '订单列表。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1542784048000',
                                                ],
                                                'ChargeType' => [
                                                    'description' => '付费类型。',
                                                    'type' => 'string',
                                                    'example' => 'PostPaid',
                                                ],
                                                'DepositType' => [
                                                    'description' => '托管类型，标识集群是全托管还是半托管。枚举值：HALF_MANAGED、FULLY_MANAGED。',
                                                    'type' => 'string',
                                                    'example' => 'HALF_MANAGED',
                                                ],
                                                'Period' => [
                                                    'description' => '包年包月时间（可选包月数量有：1、2、3、4、5、6、7、8、9、12、24、36。）',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'K8sClusterId' => [
                                                    'description' => 'K8s集群ID。',
                                                    'type' => 'string',
                                                    'example' => '[]',
                                                ],
                                                'ExpiredTime' => [
                                                    'description' => '包年包月集群超时时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1542784048000',
                                                ],
                                                'HasUncompletedOrder' => [
                                                    'description' => '是否有未完成的订单。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Name' => [
                                                    'description' => '集群名。',
                                                    'type' => 'string',
                                                    'example' => 'cluster_name',
                                                ],
                                                'CreateResource' => [
                                                    'description' => '自动附加到DDI集群的标签。',
                                                    'type' => 'string',
                                                    'example' => 'ECM_DDI',
                                                ],
                                                'Id' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'C-010A704DA760****',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'TagValue' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => '[]',
                                                                    ],
                                                                    'TagKey' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => '[]',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'OrderTaskInfo' => [
                                                    'description' => '保留字段，订单任务信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TargetCount' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CurrentCount' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'OrderIdList' => [
                                                            'description' => '保留字段。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                    ],
                                                ],
                                                'FailReason' => [
                                                    'description' => '创建失败原因。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ErrorMsg' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'The specified ImageId does not exist.',
                                                        ],
                                                        'RequestId' => [
                                                            'description' => '请求ID。',
                                                            'type' => 'string',
                                                            'example' => 'B8DC3A91-3953-4444-92BB-DBC29C47EC1A',
                                                        ],
                                                        'ErrorCode' => [
                                                            'description' => '错误码。',
                                                            'type' => 'string',
                                                            'example' => 'InvalidImageId.NotFound',
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
                        'errorCode' => 'EcmClusterId.NotFound',
                        'errorMessage' => 'The cluster ID is invalid.',
                    ],
                    [
                        'errorCode' => 'DB.Fail',
                        'errorMessage' => 'A database access error occurred.',
                    ],
                    [
                        'errorCode' => 'RAM.Permission.NotAllow',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Invalid.Cluster.Status',
                        'errorMessage' => 'The cluster status %s is invalid.',
                    ],
                    [
                        'errorCode' => 'Invalid.Cluster.Type',
                        'errorMessage' => 'The cluster type %s is invalid.',
                    ],
                    [
                        'errorCode' => 'User.OtherUserResource.NotAllow',
                        'errorMessage' => 'You are not authorized to operate other users resource.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Params.Illegal',
                        'errorMessage' => 'The format of the specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 12,\\n  \\"Clusters\\": {\\n    \\"ClusterInfo\\": [\\n      {\\n        \\"Type\\": \\"标准型\\",\\n        \\"Status\\": \\"IDEL\\",\\n        \\"RunningTime\\": 2345,\\n        \\"MetaStoreType\\": \\"local\\",\\n        \\"MachineType\\": \\"ECS\\",\\n        \\"OrderList\\": \\"0\\",\\n        \\"CreateTime\\": 1542784048000,\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"DepositType\\": \\"HALF_MANAGED\\",\\n        \\"Period\\": 10,\\n        \\"K8sClusterId\\": \\"[]\\",\\n        \\"ExpiredTime\\": 1542784048000,\\n        \\"HasUncompletedOrder\\": false,\\n        \\"Name\\": \\"cluster_name\\",\\n        \\"CreateResource\\": \\"ECM_DDI\\",\\n        \\"Id\\": \\"C-010A704DA760****\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"[]\\",\\n              \\"TagKey\\": \\"[]\\"\\n            }\\n          ]\\n        },\\n        \\"OrderTaskInfo\\": {\\n          \\"TargetCount\\": 0,\\n          \\"CurrentCount\\": 0,\\n          \\"OrderIdList\\": \\"0\\"\\n        },\\n        \\"FailReason\\": {\\n          \\"ErrorMsg\\": \\"The specified ImageId does not exist.\\",\\n          \\"RequestId\\": \\"B8DC3A91-3953-4444-92BB-DBC29C47EC1A\\",\\n          \\"ErrorCode\\": \\"InvalidImageId.NotFound\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>12</TotalCount>\\n<RequestId>BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22</RequestId>\\n<PageSize>10</PageSize>\\n<PageNumber>1</PageNumber>\\n<Clusters>\\n    <ClusterInfo>\\n        <Status>IDEL</Status>\\n        <CreateResource>ECM_DDI</CreateResource>\\n        <CreateTime>1542784048000</CreateTime>\\n        <MachineType>ECS</MachineType>\\n        <DepositType>HALF_MANAGED</DepositType>\\n        <Period>10</Period>\\n        <MetaStoreType>local</MetaStoreType>\\n        <K8sClusterId/>\\n        <Name>cluster_name</Name>\\n        <Type>标准型</Type>\\n        <ChargeType>PostPaid</ChargeType>\\n        <ExpiredTime>1542784048000</ExpiredTime>\\n        <Id>C-010A704DA760****</Id>\\n        <OrderList>0</OrderList>\\n        <HasUncompletedOrder>false</HasUncompletedOrder>\\n        <RunningTime>2345</RunningTime>\\n    </ClusterInfo>\\n    <ClusterInfo>\\n        <Tags>\\n            <Tag>\\n                <TagKey/>\\n                <TagValue/>\\n            </Tag>\\n        </Tags>\\n    </ClusterInfo>\\n    <ClusterInfo>\\n        <OrderTaskInfo>\\n            <OrderIdList>0</OrderIdList>\\n            <TargetCount>0</TargetCount>\\n            <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n            <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n            <CurrentCount>0</CurrentCount>\\n            <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        </OrderTaskInfo>\\n        <FailReason>\\n            <OrderIdList>0</OrderIdList>\\n            <TargetCount>0</TargetCount>\\n            <RequestId>B8DC3A91-3953-4444-92BB-DBC29C47EC1A</RequestId>\\n            <ErrorMsg>The specified ImageId does not exist.</ErrorMsg>\\n            <CurrentCount>0</CurrentCount>\\n            <ErrorCode>InvalidImageId.NotFound</ErrorCode>\\n        </FailReason>\\n    </ClusterInfo>\\n</Clusters>","errorExample":""}]',
            'title' => 'ListClusters',
            'summary' => '调用ListClusters分页查询集群列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateFlowCategory' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-A4XDIAFWCF00X',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'myFolder',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型：'."\n"
                            ."\n"
                            .'- FLOW: 工作流'."\n"
                            .'- JOB: 作业',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FLOW',
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父目录ID，为空时则默认为root目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FC-AF08490649B8****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '新增的目录文件夹ID。',
                                'type' => 'string',
                                'example' => 'FC-AF08490649B8****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FC-AF08490649B8****\\",\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowCategoryResponse>\\n    <Id>FC-AF08490649B8****</Id>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</CreateFlowCategoryResponse>","errorExample":""}]',
            'title' => '创建工作流子文件夹',
            'summary' => '用于创建工作流或者作业子文件夹。',
        ],
        'DeleteFlowCategory' => [
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
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。您可以调用DescribeFlowCategory查看。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FC-075AB9477DAE****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-ABD24A6163D3****',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
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
                            'Data' => [
                                'description' => '返回执行结果，包含如下：'."\n"
                                    ."\n"
                                    .'- true：删除成功。'."\n"
                                    .'- false：删除失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowCategoryResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</DeleteFlowCategoryResponse>","errorExample":""}]',
            'title' => '删除工作流目录',
            'summary' => '调用DeleteFlowCategory接口，删除工作流目录。',
        ],
        'CreateFlow' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-ED2F3E844FE3****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录名称。您可以调用ListFlowProject查看',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'myFlow',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目描述。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '这是一个项目描述',
                    ],
                ],
                [
                    'name' => 'StartSchedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始调度时间，长整型时间戳.。例如：System.currentTimeMillis()。'."\n"
                            .'- 必须小于EndSchedule。'."\n"
                            .'- 当CronExpr不为空时，此项必填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1538017814000',
                    ],
                ],
                [
                    'name' => 'EndSchedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度失效时间，长整型时间戳，例如System.currentTimeMillis()。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1538018814000',
                    ],
                ],
                [
                    'name' => 'CronExpression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间周期调度的cron表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0 0-23/1 * * ?',
                    ],
                ],
                [
                    'name' => 'CreateCluster',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否通过集群模板创建集群，true表示通过集群模板创建集群，ClusterId应设置为集群模板 ID(CT-xxx)，否则为已有集群 ID（C-xxx）。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C-A23BD131A862****',
                    ],
                ],
                [
                    'name' => 'HostName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点实例运行所在主机的名称。您可以调用ListFlow或登录主机使用hostname命令查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'emr-header-1.cluster-123456',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'Application',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'APP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'AlertConf',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警通知配置，eventId目前支持以下告警：'."\n"
                            .'- EMR-210401001（工作流失败报警）。'."\n"
                            .'- EMR-110401002（工作流成功通知）。'."\n"
                            .'- EMR-110401015（工作流节点失败报警）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
                    ],
                ],
                [
                    'name' => 'AlertUserGroupBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警用户组信息。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
                    ],
                ],
                [
                    'name' => 'AlertDingDingGroupBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警钉钉群信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '已过期',
                    ],
                ],
                [
                    'name' => 'ParentFlowList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '依赖的上游工作流列表，以逗号分隔。您可以调用ListFlowInstance查看工作流ID。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
                    ],
                ],
                [
                    'name' => 'ParentCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '新创建的工作流ID。',
                                'type' => 'string',
                                'example' => 'F-7A39731FE719****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"F-7A39731FE719****\\",\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowResponse>\\n    <Id>F-7A39731FE719****</Id>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</CreateFlowResponse>","errorExample":""}]',
            'title' => '创建工作流',
            'summary' => '创建一个工作流，对应于项目空间 -> 工作流设计页面 -> 新建工作流。',
        ],
        'DeleteFlow' => [
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
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'F-7A39731FE719****',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
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
                            'Data' => [
                                'description' => '返回执行结果，包含如下：'."\n"
                                    .'- true：删除成功。'."\n"
                                    .'- false：删除失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '11BAFBD8-8509-4177-A26D-407505E73713',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"11BAFBD8-8509-4177-A26D-407505E73713\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>11BAFBD8-8509-4177-A26D-407505E73713</RequestId>\\n</DeleteFlowResponse>","errorExample":""}]',
            'title' => '删除工作流',
            'summary' => '删除工作流。',
        ],
        'ListFlow' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FP-3535FE0BE522****',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。您可以调用ListFlowJob查看。',
                        'description' => '作业ID。您可以调用ListFlowJob查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FJ-F32FB31D8295****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流名称。您可以调用ListFlowInstance查看。',
                        'description' => '工作流名称。您可以调用ListFlowInstance查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_flow',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
                        'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F-A32FB31D8295****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C-F32FB31D8295****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态：  STOP_SCHEDULE（停止调度） UNDER_SCHEDULE（调度中）',
                        'description' => '状态：  '."\n"
                            ."\n"
                            .'- STOP_SCHEDULE（停止调度）'."\n"
                            ."\n"
                            .'- UNDER_SCHEDULE（调度中）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STOP_SCHEDULE',
                    ],
                ],
                [
                    'name' => 'Periodic',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否调度。',
                        'description' => '是否调度。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。',
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页查询数量。',
                        'description' => '每页查询数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD',
                            ],
                            'PageNumber' => [
                                'title' => '页码。',
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页数量。',
                                'description' => '每页数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Total' => [
                                'title' => '总数。',
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Flow' => [
                                'type' => 'object',
                                'properties' => [
                                    'Flow' => [
                                        'title' => '工作流列表',
                                        'description' => '工作流列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '支持状态：'."\n"
                                                        .'- STOP_SCHEDULE（停止调度）'."\n"
                                                        .'- UNDER_SCHEDULE（调度中）',
                                                    'type' => 'string',
                                                    'example' => 'STOP_SCHEDULE',
                                                ],
                                                'Type' => [
                                                    'description' => '目前只支持DATABRICKS_INSIGHT。',
                                                    'type' => 'string',
                                                    'example' => 'DATABRICKS_INSIGHT',
                                                ],
                                                'AlertUserGroupBizId' => [
                                                    'description' => '	'."\n"
                                                        .'报警用户组信息。',
                                                    'type' => 'string',
                                                    'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
                                                ],
                                                'Periodic' => [
                                                    'description' => '是否周期执行：'."\n"
                                                        .'- true：周期执行。'."\n"
                                                        .'- false：非周期行执行。',
                                                    'type' => 'boolean',
                                                    'example' => 'Periodic',
                                                ],
                                                'ProjectId' => [
                                                    'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                                                    'type' => 'string',
                                                    'example' => 'ProjectId',
                                                ],
                                                'HostName' => [
                                                    'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
                                                    'type' => 'string',
                                                    'example' => 'emr-header-1.cluster-123456',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'Description' => [
                                                    'description' => '	'."\n"
                                                        .'工作流描述。',
                                                    'type' => 'string',
                                                    'example' => '这是一个创建工作流描述',
                                                ],
                                                'CreateCluster' => [
                                                    'description' => '是否创建集群：'."\n"
                                                        .'- true：ClusterId为集群模板id（CT-XXXXXX）。'."\n"
                                                        .'- false：ClusterId为集群id（C-XXXXXX）。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'StartSchedule' => [
                                                    'description' => '开始调度时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'EndSchedule' => [
                                                    'description' => '结束调度时间。'."\n"
                                                        ."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'Graph' => [
                                                    'description' => '图形信息。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => '{"nodes":[{"id":"48d474ea","index":0,"spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","attribute":{"type":"START"},"shape":"startControlNode","type":"node","y":250,"size":"80*34","x":500},{"id":"7ba480b3","index":1,"spmAnchorId":"5176.8250060.0.i19.771e28d0IPNQGE","attribute":{"jobType":"SHELL","jobId":"FJ-7BE1062897B19D25","type":"JOB"},"config":{"hostName":""},"label":"fail_job","shape":"shellJobNode","type":"node","y":398.5,"size":"170*34","x":470.5},{"id":"33202d60","index":2,"spmAnchorId":"5176.8250060.0.i23.771e28d0IPNQGE","attribute":{"type":"END"},"shape":"endControlNode","type":"node","y":562.5,"size":"80*34","x":430.5}],"edges":[{"id":"28167ea0","index":3,"source":"48d474ea","sourceAnchor":0,"target":"7ba480b3","targetAnchor":0},{"id":"e8d5ff52","index":4,"source":"7ba480b3","sourceAnchor":1,"target":"33202d60","targetAnchor":0}]}',
                                                ],
                                                'AlertDingDingGroupBizId' => [
                                                    'description' => '报警钉钉群信息。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'AUG-c917bbfaf6494bbfacdee69c8284967c',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间。'."\n"
                                                        ."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'CategoryId' => [
                                                    'description' => '工作流目录ID。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'FC-F2495319DA05****',
                                                ],
                                                'CronExpr' => [
                                                    'description' => '调度Cron表达式。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => '0 0 0-23/1 * * ?',
                                                ],
                                                'Name' => [
                                                    'description' => '工作流名称。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'my_flow_demo',
                                                ],
                                                'Id' => [
                                                    'description' => '工作流ID。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'F-7A39731FE719****',
                                                ],
                                                'AlertConf' => [
                                                    'description' => '报警通知配置，eventId目前支持：'."\n"
                                                        .'- EMR-210401001（工作流失败报警）。'."\n"
                                                        .'- EMR-110401002（工作流成功通知）。'."\n"
                                                        .'- EMR-110401015（工作流节点失败报警）。'."\n",
                                                    'type' => 'string',
                                                    'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
                                                ],
                                                'ClusterId' => [
                                                    'description' => '集群或集群模板ID。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'C-A23BD131A862****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 1,\\n  \\"Flow\\": {\\n    \\"Flow\\": [\\n      {\\n        \\"Status\\": \\"STOP_SCHEDULE\\",\\n        \\"Type\\": \\"DATABRICKS_INSIGHT\\",\\n        \\"AlertUserGroupBizId\\": \\"ADG-0a00d00abb7743ff9f812f1a997f3d87\\",\\n        \\"Periodic\\": true,\\n        \\"ProjectId\\": \\"ProjectId\\",\\n        \\"HostName\\": \\"emr-header-1.cluster-123456\\",\\n        \\"GmtModified\\": 1538017814000,\\n        \\"Description\\": \\"这是一个创建工作流描述\\",\\n        \\"CreateCluster\\": false,\\n        \\"StartSchedule\\": 1538017814000,\\n        \\"EndSchedule\\": 1538017814000,\\n        \\"Graph\\": \\"{\\\\\\"nodes\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"index\\\\\\":0,\\\\\\"spmAnchorId\\\\\\":\\\\\\"0.0.0.i0.766645eb2cmNtQ\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"START\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"startControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":250,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":500},{\\\\\\"id\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"index\\\\\\":1,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i19.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"jobType\\\\\\":\\\\\\"SHELL\\\\\\",\\\\\\"jobId\\\\\\":\\\\\\"FJ-7BE1062897B19D25\\\\\\",\\\\\\"type\\\\\\":\\\\\\"JOB\\\\\\"},\\\\\\"config\\\\\\":{\\\\\\"hostName\\\\\\":\\\\\\"\\\\\\"},\\\\\\"label\\\\\\":\\\\\\"fail_job\\\\\\",\\\\\\"shape\\\\\\":\\\\\\"shellJobNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":398.5,\\\\\\"size\\\\\\":\\\\\\"170*34\\\\\\",\\\\\\"x\\\\\\":470.5},{\\\\\\"id\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"index\\\\\\":2,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i23.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"END\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"endControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":562.5,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":430.5}],\\\\\\"edges\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"28167ea0\\\\\\",\\\\\\"index\\\\\\":3,\\\\\\"source\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"sourceAnchor\\\\\\":0,\\\\\\"target\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"targetAnchor\\\\\\":0},{\\\\\\"id\\\\\\":\\\\\\"e8d5ff52\\\\\\",\\\\\\"index\\\\\\":4,\\\\\\"source\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"sourceAnchor\\\\\\":1,\\\\\\"target\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"targetAnchor\\\\\\":0}]}\\",\\n        \\"AlertDingDingGroupBizId\\": \\"AUG-c917bbfaf6494bbfacdee69c8284967c\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"CategoryId\\": \\"FC-F2495319DA05****\\",\\n        \\"CronExpr\\": \\"0 0 0-23/1 * * ?\\",\\n        \\"Name\\": \\"my_flow_demo\\",\\n        \\"Id\\": \\"F-7A39731FE719****\\",\\n        \\"AlertConf\\": \\"{\\\\\\"items\\\\\\":[{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-210401001\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401015\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401002\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]}]}\\",\\n        \\"ClusterId\\": \\"C-A23BD131A862****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowResponse>\\n    <RequestId>7DDFF4C7-3AE3-485F-BFA1-BAE0AA3689DD</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>1</Total>\\n    <Flow>\\n        <Status>STOP_SCHEDULE</Status>\\n        <Type>DATABRICKS_INSIGHT</Type>\\n        <AlertUserGroupBizId>ADG-0a00d00abb7743ff9f812f1a997f3d87</AlertUserGroupBizId>\\n        <Periodic>false</Periodic>\\n        <ProjectId>ProjectId</ProjectId>\\n        <HostName>emr-header-1.cluster-123456</HostName>\\n        <GmtModified>1538017814000</GmtModified>\\n        <Description>这是一个创建工作流描述</Description>\\n        <CreateCluster>false</CreateCluster>\\n        <StartSchedule>1538017814000</StartSchedule>\\n        <EndSchedule>1538017814000</EndSchedule>\\n        <Graph>{\\"nodes\\":[{\\"id\\":\\"48d474ea\\",\\"index\\":0,\\"spmAnchorId\\":\\"0.0.0.i0.766645eb2cmNtQ\\",\\"attribute\\":{\\"type\\":\\"START\\"},\\"shape\\":\\"startControlNode\\",\\"type\\":\\"node\\",\\"y\\":250,\\"size\\":\\"80*34\\",\\"x\\":500},{\\"id\\":\\"7ba480b3\\",\\"index\\":1,\\"spmAnchorId\\":\\"5176.8250060.0.i19.771e28d0IPNQGE\\",\\"attribute\\":{\\"jobType\\":\\"SHELL\\",\\"jobId\\":\\"FJ-7BE1062897B19D25\\",\\"type\\":\\"JOB\\"},\\"config\\":{\\"hostName\\":\\"\\"},\\"label\\":\\"fail_job\\",\\"shape\\":\\"shellJobNode\\",\\"type\\":\\"node\\",\\"y\\":398.5,\\"size\\":\\"170*34\\",\\"x\\":470.5},{\\"id\\":\\"33202d60\\",\\"index\\":2,\\"spmAnchorId\\":\\"5176.8250060.0.i23.771e28d0IPNQGE\\",\\"attribute\\":{\\"type\\":\\"END\\"},\\"shape\\":\\"endControlNode\\",\\"type\\":\\"node\\",\\"y\\":562.5,\\"size\\":\\"80*34\\",\\"x\\":430.5}],\\"edges\\":[{\\"id\\":\\"28167ea0\\",\\"index\\":3,\\"source\\":\\"48d474ea\\",\\"sourceAnchor\\":0,\\"target\\":\\"7ba480b3\\",\\"targetAnchor\\":0},{\\"id\\":\\"e8d5ff52\\",\\"index\\":4,\\"source\\":\\"7ba480b3\\",\\"sourceAnchor\\":1,\\"target\\":\\"33202d60\\",\\"targetAnchor\\":0}]}</Graph>\\n        <AlertDingDingGroupBizId>AUG-c917bbfaf6494bbfacdee69c8284967c</AlertDingDingGroupBizId>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <CategoryId>FC-F2495319DA05****</CategoryId>\\n        <CronExpr>0 0 0-23/1 * * ?</CronExpr>\\n        <Name>my_flow_demo</Name>\\n        <Id>F-7A39731FE719****</Id>\\n        <AlertConf>{\\"items\\":[{\\"enable\\":true,\\"eventId\\":\\"EMR-210401001\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401015\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401002\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]}]}</AlertConf>\\n        <ClusterId>C-A23BD131A862****</ClusterId>\\n    </Flow>\\n</ListFlowResponse>","errorExample":""}]',
            'title' => '获取工作流列表',
            'summary' => '获取工作流列表。',
        ],
        'DescribeFlow' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'F-7A39731FE719****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
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
                            'Status' => [
                                'description' => '支持状态：'."\n"
                                    ."\n"
                                    .'- STOP_SCHEDULE'."\n"
                                    ."\n"
                                    .'- UNDER_SCHEDULE',
                                'type' => 'string',
                                'example' => 'STOP_SCHEDULE',
                            ],
                            'Type' => [
                                'description' => '目前只支持DDI',
                                'type' => 'string',
                                'example' => 'DDI',
                            ],
                            'AlertUserGroupBizId' => [
                                'description' => '报警用户组信息。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'ADG-0a00d00abb7743ff9f812f1a997f3d87',
                            ],
                            'Periodic' => [
                                'description' => '是否周期执行：'."\n"
                                    .'- true：周期执行。'."\n"
                                    .'- false：非周期行执行。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'EditLockDetail' => [
                                'description' => '编辑锁信息。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Namespace' => [
                                'description' => '保留参数。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'HostName' => [
                                'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
                                'type' => 'string',
                                'example' => 'emr-header-1.cluster-123456',
                            ],
                            'Application' => [
                                'description' => '工作流构造信息，由一组节点定义nodeDefMap组成，多个时以逗号分隔。'."\n"
                                    ."\n"
                                    .'type：类型包括开始节点（:start:）、构建按需集群节点（:Cluster:）、动作节点（:action:）和结束节点（:end:）。'."\n"
                                    ."\n"
                                    .'transitions：下游的节点。',
                                'type' => 'string',
                                'example' => '{"nodeDefMap":{":start:":{"name":":start:","type":":start:","transitions":["cluster"]},"cluster":{"id":"CT-0C74281682CF03B4","name":"cluster","type":":Cluster:","transitions":["job1"]},"job1":{"jobId":"FJ-242AB240DBAF4195","name":"job1","type":":action:","transitions":["end"]},"end":{"name":"end","type":":end:"}}}',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538017814000',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                            'Description' => [
                                'description' => '工作流描述。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '这是一个创建工作流描述',
                            ],
                            'CreateCluster' => [
                                'description' => '是否创建集群：'."\n"
                                    ."\n"
                                    .'- 为true时，ClusterId为集群模板id CT-XXXXXX。'."\n"
                                    ."\n"
                                    .'- 为false时，ClusterId为集群id C-XXXXXX。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'StartSchedule' => [
                                'description' => '开始调度时间。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538017814000',
                            ],
                            'EndSchedule' => [
                                'description' => '结束调度时间。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538018814000',
                            ],
                            'Graph' => [
                                'description' => '图形信息。',
                                'type' => 'string',
                                'example' => '{"nodes":[{"id":"48d474ea","index":0,"spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","attribute":{"type":"START"},"shape":"startControlNode","type":"node","y":250,"size":"80*34","x":500},{"id":"7ba480b3","index":1,"spmAnchorId":"5176.8250060.0.i19.771e28d0IPNQGE","attribute":{"jobType":"SHELL","jobId":"FJ-7BE1062897B19D25","type":"JOB"},"config":{"hostName":""},"label":"fail_job","shape":"shellJobNode","type":"node","y":398.5,"size":"170*34","x":470.5},{"id":"33202d60","index":2,"spmAnchorId":"5176.8250060.0.i23.771e28d0IPNQGE","attribute":{"type":"END"},"shape":"endControlNode","type":"node","y":562.5,"size":"80*34","x":430.5}],"edges":[{"id":"28167ea0","index":3,"source":"48d474ea","sourceAnchor":0,"target":"7ba480b3","targetAnchor":0},{"id":"e8d5ff52","index":4,"source":"7ba480b3","sourceAnchor":1,"target":"33202d60","targetAnchor":0}]}',
                            ],
                            'AlertDingDingGroupBizId' => [
                                'description' => '报警钉钉群信息。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'AUG-c917bbfaf6494bbfacdee69c8284967c',
                            ],
                            'GmtCreate' => [
                                'description' => '创建时间。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538017814000',
                            ],
                            'CategoryId' => [
                                'description' => '工作流目录ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'FC-F2495319DA05****',
                            ],
                            'CronExpr' => [
                                'description' => '调度Cron表达式。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0 0 0-23/1 * * ?',
                            ],
                            'Name' => [
                                'description' => '工作流名称。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'my_flow_demo',
                            ],
                            'Id' => [
                                'description' => '工作流ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'F-7A39731FE719****',
                            ],
                            'AlertConf' => [
                                'description' => '报警通知配置，eventId目前支持：'."\n"
                                    ."\n"
                                    .'- EMR-210401001（工作流失败报警）。'."\n"
                                    ."\n"
                                    .'- EMR-110401002（工作流成功通知）。'."\n"
                                    ."\n"
                                    .'- EMR-110401015（工作流节点失败报警）。'."\n",
                                'type' => 'string',
                                'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
                            ],
                            'ClusterId' => [
                                'description' => '集群/集群模板ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'C-A23BD131A862****',
                            ],
                            'ParentFlowList' => [
                                'type' => 'object',
                                'properties' => [
                                    'ParentFlow' => [
                                        'description' => '依赖的父工作流列表。'."\n",
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParentFlowName' => [
                                                    'description' => '父工作流名称。',
                                                    'type' => 'string',
                                                    'example' => 'parent_flow',
                                                ],
                                                'ParentFlowId' => [
                                                    'description' => '父工作流ID。',
                                                    'type' => 'string',
                                                    'example' => '173659F59685',
                                                ],
                                                'ProjectName' => [
                                                    'description' => '项目名称。',
                                                    'type' => 'string',
                                                    'example' => 'my_project',
                                                ],
                                                'ProjectId' => [
                                                    'description' => '项目ID。',
                                                    'type' => 'string',
                                                    'example' => 'FP-257A173659F59685',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"STOP_SCHEDULE\\",\\n  \\"Type\\": \\"DDI\\",\\n  \\"AlertUserGroupBizId\\": \\"ADG-0a00d00abb7743ff9f812f1a997f3d87\\",\\n  \\"Periodic\\": true,\\n  \\"EditLockDetail\\": \\"{}\\",\\n  \\"Namespace\\": \\"无\\",\\n  \\"HostName\\": \\"emr-header-1.cluster-123456\\",\\n  \\"Application\\": \\"{\\\\\\"nodeDefMap\\\\\\":{\\\\\\":start:\\\\\\":{\\\\\\"name\\\\\\":\\\\\\":start:\\\\\\",\\\\\\"type\\\\\\":\\\\\\":start:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"cluster\\\\\\"]},\\\\\\"cluster\\\\\\":{\\\\\\"id\\\\\\":\\\\\\"CT-0C74281682CF03B4\\\\\\",\\\\\\"name\\\\\\":\\\\\\"cluster\\\\\\",\\\\\\"type\\\\\\":\\\\\\":Cluster:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"job1\\\\\\"]},\\\\\\"job1\\\\\\":{\\\\\\"jobId\\\\\\":\\\\\\"FJ-242AB240DBAF4195\\\\\\",\\\\\\"name\\\\\\":\\\\\\"job1\\\\\\",\\\\\\"type\\\\\\":\\\\\\":action:\\\\\\",\\\\\\"transitions\\\\\\":[\\\\\\"end\\\\\\"]},\\\\\\"end\\\\\\":{\\\\\\"name\\\\\\":\\\\\\"end\\\\\\",\\\\\\"type\\\\\\":\\\\\\":end:\\\\\\"}}}\\",\\n  \\"GmtModified\\": 1538017814000,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\",\\n  \\"Description\\": \\"这是一个创建工作流描述\\",\\n  \\"CreateCluster\\": false,\\n  \\"StartSchedule\\": 1538017814000,\\n  \\"EndSchedule\\": 1538018814000,\\n  \\"Graph\\": \\"{\\\\\\"nodes\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"index\\\\\\":0,\\\\\\"spmAnchorId\\\\\\":\\\\\\"0.0.0.i0.766645eb2cmNtQ\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"START\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"startControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":250,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":500},{\\\\\\"id\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"index\\\\\\":1,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i19.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"jobType\\\\\\":\\\\\\"SHELL\\\\\\",\\\\\\"jobId\\\\\\":\\\\\\"FJ-7BE1062897B19D25\\\\\\",\\\\\\"type\\\\\\":\\\\\\"JOB\\\\\\"},\\\\\\"config\\\\\\":{\\\\\\"hostName\\\\\\":\\\\\\"\\\\\\"},\\\\\\"label\\\\\\":\\\\\\"fail_job\\\\\\",\\\\\\"shape\\\\\\":\\\\\\"shellJobNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":398.5,\\\\\\"size\\\\\\":\\\\\\"170*34\\\\\\",\\\\\\"x\\\\\\":470.5},{\\\\\\"id\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"index\\\\\\":2,\\\\\\"spmAnchorId\\\\\\":\\\\\\"5176.8250060.0.i23.771e28d0IPNQGE\\\\\\",\\\\\\"attribute\\\\\\":{\\\\\\"type\\\\\\":\\\\\\"END\\\\\\"},\\\\\\"shape\\\\\\":\\\\\\"endControlNode\\\\\\",\\\\\\"type\\\\\\":\\\\\\"node\\\\\\",\\\\\\"y\\\\\\":562.5,\\\\\\"size\\\\\\":\\\\\\"80*34\\\\\\",\\\\\\"x\\\\\\":430.5}],\\\\\\"edges\\\\\\":[{\\\\\\"id\\\\\\":\\\\\\"28167ea0\\\\\\",\\\\\\"index\\\\\\":3,\\\\\\"source\\\\\\":\\\\\\"48d474ea\\\\\\",\\\\\\"sourceAnchor\\\\\\":0,\\\\\\"target\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"targetAnchor\\\\\\":0},{\\\\\\"id\\\\\\":\\\\\\"e8d5ff52\\\\\\",\\\\\\"index\\\\\\":4,\\\\\\"source\\\\\\":\\\\\\"7ba480b3\\\\\\",\\\\\\"sourceAnchor\\\\\\":1,\\\\\\"target\\\\\\":\\\\\\"33202d60\\\\\\",\\\\\\"targetAnchor\\\\\\":0}]}\\",\\n  \\"AlertDingDingGroupBizId\\": \\"AUG-c917bbfaf6494bbfacdee69c8284967c\\",\\n  \\"GmtCreate\\": 1538017814000,\\n  \\"CategoryId\\": \\"FC-F2495319DA05****\\",\\n  \\"CronExpr\\": \\"0 0 0-23/1 * * ?\\",\\n  \\"Name\\": \\"my_flow_demo\\",\\n  \\"Id\\": \\"F-7A39731FE719****\\",\\n  \\"AlertConf\\": \\"{\\\\\\"items\\\\\\":[{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-210401001\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401015\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]},{\\\\\\"enable\\\\\\":true,\\\\\\"eventId\\\\\\":\\\\\\"EMR-110401002\\\\\\",\\\\\\"alertUserGroupIdList\\\\\\":[\\\\\\"AUG-b79bb29bb6e14ddd89674a242623851b\\\\\\"],\\\\\\"alertDingDingGroupList\\\\\\":[\\\\\\"ADG-af1f9689d6194e2dbd89927d5c515172\\\\\\"]}]}\\",\\n  \\"ClusterId\\": \\"C-A23BD131A862****\\",\\n  \\"ParentFlowList\\": {\\n    \\"ParentFlow\\": [\\n      {\\n        \\"ParentFlowName\\": \\"parent_flow\\",\\n        \\"ParentFlowId\\": \\"173659F59685\\",\\n        \\"ProjectName\\": \\"my_project\\",\\n        \\"ProjectId\\": \\"FP-257A173659F59685\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowResponse>\\n    <Status>STOP_SCHEDULE</Status>\\n    <Type>DDI</Type>\\n    <AlertUserGroupBizId>ADG-0a00d00abb7743ff9f812f1a997f3d87</AlertUserGroupBizId>\\n    <Periodic>true</Periodic>\\n    <EditLockDetail>{}</EditLockDetail>\\n    <Namespace>无</Namespace>\\n    <HostName>emr-header-1.cluster-123456</HostName>\\n    <Application>{\\"nodeDefMap\\":{\\":start:\\":{\\"name\\":\\":start:\\",\\"type\\":\\":start:\\",\\"transitions\\":[\\"cluster\\"]},\\"cluster\\":{\\"id\\":\\"CT-0C74281682CF03B4\\",\\"name\\":\\"cluster\\",\\"type\\":\\":Cluster:\\",\\"transitions\\":[\\"job1\\"]},\\"job1\\":{\\"jobId\\":\\"FJ-242AB240DBAF4195\\",\\"name\\":\\"job1\\",\\"type\\":\\":action:\\",\\"transitions\\":[\\"end\\"]},\\"end\\":{\\"name\\":\\"end\\",\\"type\\":\\":end:\\"}}}</Application>\\n    <GmtModified>1538017814000</GmtModified>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n    <Description>这是一个创建工作流描述</Description>\\n    <CreateCluster>false</CreateCluster>\\n    <StartSchedule>1538017814000</StartSchedule>\\n    <EndSchedule>1538018814000</EndSchedule>\\n    <Graph>{\\"nodes\\":[{\\"id\\":\\"48d474ea\\",\\"index\\":0,\\"spmAnchorId\\":\\"0.0.0.i0.766645eb2cmNtQ\\",\\"attribute\\":{\\"type\\":\\"START\\"},\\"shape\\":\\"startControlNode\\",\\"type\\":\\"node\\",\\"y\\":250,\\"size\\":\\"80*34\\",\\"x\\":500},{\\"id\\":\\"7ba480b3\\",\\"index\\":1,\\"spmAnchorId\\":\\"5176.8250060.0.i19.771e28d0IPNQGE\\",\\"attribute\\":{\\"jobType\\":\\"SHELL\\",\\"jobId\\":\\"FJ-7BE1062897B19D25\\",\\"type\\":\\"JOB\\"},\\"config\\":{\\"hostName\\":\\"\\"},\\"label\\":\\"fail_job\\",\\"shape\\":\\"shellJobNode\\",\\"type\\":\\"node\\",\\"y\\":398.5,\\"size\\":\\"170*34\\",\\"x\\":470.5},{\\"id\\":\\"33202d60\\",\\"index\\":2,\\"spmAnchorId\\":\\"5176.8250060.0.i23.771e28d0IPNQGE\\",\\"attribute\\":{\\"type\\":\\"END\\"},\\"shape\\":\\"endControlNode\\",\\"type\\":\\"node\\",\\"y\\":562.5,\\"size\\":\\"80*34\\",\\"x\\":430.5}],\\"edges\\":[{\\"id\\":\\"28167ea0\\",\\"index\\":3,\\"source\\":\\"48d474ea\\",\\"sourceAnchor\\":0,\\"target\\":\\"7ba480b3\\",\\"targetAnchor\\":0},{\\"id\\":\\"e8d5ff52\\",\\"index\\":4,\\"source\\":\\"7ba480b3\\",\\"sourceAnchor\\":1,\\"target\\":\\"33202d60\\",\\"targetAnchor\\":0}]}</Graph>\\n    <AlertDingDingGroupBizId>AUG-c917bbfaf6494bbfacdee69c8284967c</AlertDingDingGroupBizId>\\n    <GmtCreate>1538017814000</GmtCreate>\\n    <CategoryId>FC-F2495319DA05****</CategoryId>\\n    <CronExpr>0 0 0-23/1 * * ?</CronExpr>\\n    <Name>my_flow_demo</Name>\\n    <Id>F-7A39731FE719****</Id>\\n    <AlertConf>{\\"items\\":[{\\"enable\\":true,\\"eventId\\":\\"EMR-210401001\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401015\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]},{\\"enable\\":true,\\"eventId\\":\\"EMR-110401002\\",\\"alertUserGroupIdList\\":[\\"AUG-b79bb29bb6e14ddd89674a242623851b\\"],\\"alertDingDingGroupList\\":[\\"ADG-af1f9689d6194e2dbd89927d5c515172\\"]}]}</AlertConf>\\n    <ClusterId>C-A23BD131A862****</ClusterId>\\n    <ParentFlowList>\\n        <ParentFlowName>parent_flow</ParentFlowName>\\n        <ParentFlowId>173659F59685</ParentFlowId>\\n        <ProjectName>my_project</ProjectName>\\n        <ProjectId>FP-257A173659F59685</ProjectId>\\n    </ParentFlowList>\\n</DescribeFlowResponse>","errorExample":""}]',
            'title' => '查询工作流信息',
            'summary' => '查询工作流信息。',
        ],
        'CreateFlowJob' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/25609.htm?spm=a2c4g.11186623.0.0.14c95997qeKkoC)查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-A4FEE10D860*****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业的名称。',
                        'description' => '作业的名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_spark_job',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业的描述。',
                        'description' => '作业的描述。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Job description',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                        'description' => '作业类型，取值如下：'."\n"
                            .'- SPARK：spark作业，使用spark-submit提交'."\n"
                            .'- ZEPPELIN：提交zeppelin notebook，使用该作业类型，作业的params参数为notebook id'."\n"
                            .'- SPARK_STREAMING：提交spark流处理作业',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SPARK',
                    ],
                ],
                [
                    'name' => 'FailAct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                        'description' => '失败策略，取值如下：'."\n"
                            .'- CONTINUE：跳过本次作业'."\n"
                            .'- STOP：停止作业（default）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STOP',
                    ],
                ],
                [
                    'name' => 'RetryPolicy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重试策略，保留参数。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业内容。',
                        'description' => '作业内容，如果是SPARK类型的作业，则该参数即为spark-submit的参数，如果为ZEPPELIN类型的作业，该参数为Notebook的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://bucket_name/jar_to_run.jar',
                    ],
                ],
                [
                    'name' => 'ParamConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '参数设置。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'CustomVariables',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义变量。',
                        'description' => '用户自定义变量。使用json数组存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"name\\":\\"key1\\",\\"value\\":\\"value1\\",\\"properties\\":{\\"password\\":false}}]',
                    ],
                ],
                [
                    'name' => 'EnvConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '环境变量设置。',
                        'description' => '环境变量设置。json格式存储。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"key1\\":\\"value1\\"}',
                    ],
                ],
                [
                    'name' => 'RunConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                        'description' => '运行配置，可选的配置项包括：'."\n"
                            .'- priority：task的优先级'."\n"
                            .'- userName：提交任务的linux用户'."\n"
                            .'- memory：内存，单位为MB'."\n"
                            .'- cores：CPU核心数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"memory\\":1024,\\"cores\\":2,\\"userName\\":\\"hadoop\\"}',
                    ],
                ],
                [
                    'name' => 'MonitorConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                        'description' => '监控配置，仅SPARK_STREAMING类型的作业支持监控配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                        'description' => '运行模式，取值如下：'."\n"
                            .'- YARN：将作业包装成一个launcher提交到YARN中运行'."\n"
                            .'- LOCAL：作业直接在机器上以进程方式运行',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'YARN',
                    ],
                ],
                [
                    'name' => 'ParentCategory',
                    'in' => 'query',
                    'schema' => [
                        'title' => '父目录ID。您可以调用DescribeFlowCategory查看。',
                        'description' => '父目录ID，可以调用DescribeFlowCategory查看目录结构。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FC-5BD9575E3462****',
                    ],
                ],
                [
                    'name' => 'Adhoc',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否临时查询。',
                        'description' => '是否为临时查询。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C-A23BD131A862****',
                    ],
                ],
                [
                    'name' => 'AlertConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ResourceList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'title' => '保留参数。',
                                    'description' => '保留参数。'."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '无',
                                ],
                                'Alias' => [
                                    'title' => '保留参数。',
                                    'description' => '保留参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '无',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '作业ID。',
                                'description' => '作业ID。',
                                'type' => 'string',
                                'example' => 'FJ-A23BD131A862****',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJ-A23BD131A862****\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowJobResponse>\\n    <Id>FJ-A23BD131A862****</Id>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n</CreateFlowJobResponse>","errorExample":""}]',
            'title' => '创建工作流作业',
            'summary' => '创建工作流作业。',
        ],
        'CloneFlowJob' => [
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
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '克隆的目标作业所属项目。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '克隆的目标作业所属项目。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-C62EEC30F773****',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '克隆的目标作业ID。您可以调用ListFlowJob查看。',
                        'description' => '克隆的目标作业ID。您可以调用ListFlowJobs查看。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FJ-244582F1934C****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '克隆的目标作业名称。',
                        'description' => '克隆的目标作业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_clone_job',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
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
                            'Id' => [
                                'title' => '新产生的作业ID。',
                                'description' => '新产生的作业ID。',
                                'type' => 'string',
                                'example' => 'FJ-06D12BA16419****',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BCE475E4-129D-43D2-8595-C80B80CBC114',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJ-06D12BA16419****\\",\\n  \\"RequestId\\": \\"BCE475E4-129D-43D2-8595-C80B80CBC114\\"\\n}","errorExample":""},{"type":"xml","example":"<CloneFlowJobResponse>\\n    <Id>FJ-06D12BA16419****</Id>\\n    <RequestId>BCE475E4-129D-43D2-8595-C80B80CBC114</RequestId>\\n</CloneFlowJobResponse>","errorExample":""}]',
            'title' => '克隆工作流作业',
            'summary' => '克隆作业，对应于项目空间的作业编辑页面，在作业上点击右键 -> 克隆作业。',
        ],
        'SubmitFlowJob' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE5228***',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'description' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FJ-1A2FB31D8295****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'C-F32FB31D8295****',
                    ],
                ],
                [
                    'name' => 'HostName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'Conf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '配置参数信息：{"key1":"value1"}。key为params的参数值会覆盖实际作业中运行的内容。',
                        'description' => '配置参数信息：{"key1":"value1"}。key为params的参数值会覆盖实际作业中运行的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1":"value1"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '运行的作业实例ID。',
                                'description' => '运行的作业实例ID。',
                                'type' => 'string',
                                'example' => 'FJI-9DDAAA3ADA5F****',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FJI-9DDAAA3ADA5F****\\",\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitFlowJobResponse>\\n    <Id>FJI-9DDAAA3ADA5F****</Id>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</SubmitFlowJobResponse>","errorExample":""}]',
            'title' => '提交运行作业',
            'summary' => '提交运行作业。',
        ],
        'KillFlowJob' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE522****',
                    ],
                ],
                [
                    'name' => 'JobInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
                        'description' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FJI-9DDAAA3ADA5F****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回执行结果，包含如下：true（执行成功），false（执行失败）',
                                'description' => '返回执行结果，包含如下：true（执行成功），false（执行失败）',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<KillFlowJobResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</KillFlowJobResponse>","errorExample":""}]',
            'title' => '停止作业实例',
            'summary' => '停止作业实例。',
        ],
        'ModifyFlowJob' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE5228***',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '需要修改的作业的ID。',
                        'description' => '需要修改的作业的ID。您可以调用ListFlowJobs查看ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FJ-1A2FB31D8295****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '修改后的作业名称。',
                        'description' => '修改后的作业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_updated_job_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '修改后的作业描述。',
                        'description' => '修改后的作业描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个修改后的作业描述',
                    ],
                ],
                [
                    'name' => 'FailAct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                        'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CONTINUE',
                    ],
                ],
                [
                    'name' => 'RetryPolicy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重试策略，保留参数。',
                        'description' => '重试策略，保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业内容。如果是spark作业，该参数的内容会作为spark-submit的参数。',
                        'description' => '作业内容。如果是spark作业，该参数的内容会作为spark-submit的参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://bucket_name/jar_to_run.jar',
                    ],
                ],
                [
                    'name' => 'ParamConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '参数设置。',
                        'description' => '参数设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"date":"${yyyy-MM-dd}"}',
                    ],
                ],
                [
                    'name' => 'CustomVariables',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义变量。',
                        'description' => '自定义变量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"scope\\":\\"PROJECT\\",\\"entityId\\":\\"FP-80C2FDDBF35D9CC5\\",\\"variables\\":[{\\"name\\":\\"v1\\",\\"value\\":\\"1\\",\\"properties\\":{\\"password\\":true}}]}',
                    ],
                ],
                [
                    'name' => 'EnvConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '环境变量设置。',
                        'description' => '环境变量设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
                [
                    'name' => 'KnoxUser',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                        'description' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_knox_user_name',
                    ],
                ],
                [
                    'name' => 'KnoxPassword',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                        'description' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_knox_password',
                    ],
                ],
                [
                    'name' => 'RunConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                        'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                    ],
                ],
                [
                    'name' => 'MonitorConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                        'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                        'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'YARN',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'description' => '集群ID。您可以调用ListClusters查看集群的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C-A23BD131A862****',
                    ],
                ],
                [
                    'name' => 'AlertConf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'ResourceList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '保留参数。',
                        'description' => '保留参数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'title' => '保留参数。',
                                    'description' => '保留参数。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '无',
                                ],
                                'Alias' => [
                                    'title' => '保留参数。',
                                    'description' => '保留参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '无',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'MaxRetry',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RetryInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => 'API调用结果：true（修改成功），false（修改失败）',
                                'description' => 'API调用结果：true（修改成功），false（修改失败）',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowJobResponse>\\n    <Data>true</Data>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n</ModifyFlowJobResponse>","errorExample":""}]',
            'title' => '修改工作流作业',
            'summary' => '修改工作流作业。',
        ],
        'DescribeFlowJob' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE5228***',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'description' => '作业ID。您可以调用ListFlowJobs查看作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FJ-1A2FB31D8295****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
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
                            'Type' => [
                                'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                                'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                                'type' => 'string',
                                'example' => 'SPARK',
                            ],
                            'LastInstanceId' => [
                                'title' => '最后一次执行的实例ID。',
                                'description' => '最后一次执行的实例ID。',
                                'type' => 'string',
                                'example' => 'FJI-0BA97D0BB8F3****',
                            ],
                            'EnvConf' => [
                                'title' => '环境变量设置。',
                                'description' => '环境变量设置。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'RetryInterval' => [
                                'title' => '重试间隔 0~300（秒）。',
                                'description' => '重试间隔 0~300（秒）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Mode' => [
                                'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                                'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                                'type' => 'string',
                                'example' => 'YARN',
                            ],
                            'GmtModified' => [
                                'title' => '最后修改时间。',
                                'description' => '最后修改时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538017813000',
                            ],
                            'MonitorConf' => [
                                'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                                'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                                'type' => 'string',
                                'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                            ],
                            'Params' => [
                                'title' => '作业内容。',
                                'description' => '作业内容。',
                                'type' => 'string',
                                'example' => 'oss://bucket_name/jar_to_run.jar',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
                            ],
                            'Description' => [
                                'title' => '作业的描述。',
                                'description' => '作业的描述。',
                                'type' => 'string',
                                'example' => '这是一个作业描述。',
                            ],
                            'RetryPolicy' => [
                                'title' => '重试策略，保留参数。',
                                'description' => '重试策略，保留参数。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Adhoc' => [
                                'title' => '是否临时查询。',
                                'description' => '是否临时查询。',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'Name' => [
                                'title' => '作业名称。',
                                'description' => '作业名称。',
                                'type' => 'string',
                                'example' => 'Job_name_example',
                            ],
                            'MaxRetry' => [
                                'title' => '最大重试次数。',
                                'description' => '最大重试次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'MaxRunningTimeSec' => [
                                'title' => '保留参数。',
                                'description' => '保留参数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                            ],
                            'FailAct' => [
                                'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                'type' => 'string',
                                'example' => 'STOP',
                            ],
                            'CustomVariables' => [
                                'title' => '自定义变量。',
                                'description' => '自定义变量。',
                                'type' => 'string',
                                'example' => '{"scope": "project"}',
                            ],
                            'EditLockDetail' => [
                                'title' => '保留参数。',
                                'description' => '保留参数。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'ParamConf' => [
                                'title' => '参数设置。',
                                'description' => '参数设置。',
                                'type' => 'string',
                                'example' => '{"date":"${yyyy-MM-dd}"}',
                            ],
                            'RunConf' => [
                                'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                'type' => 'string',
                                'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                            ],
                            'KnoxUser' => [
                                'title' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                                'description' => 'Knox的用户名，执行Zeppelin Notebook时必须提供。',
                                'type' => 'string',
                                'example' => 'my_knox_user_name',
                            ],
                            'KnoxPassword' => [
                                'title' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                                'description' => 'Knox的用户密码，执行Zeppelin Notebook时必须提供。',
                                'type' => 'string',
                                'example' => 'my_knox_password',
                            ],
                            'GmtCreate' => [
                                'title' => '创建时间。',
                                'description' => '创建时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1538017814000',
                            ],
                            'CategoryId' => [
                                'title' => '作业所在目录ID。',
                                'description' => '作业所在目录ID。',
                                'type' => 'string',
                                'example' => 'FC-5BD9575E3462****',
                            ],
                            'Id' => [
                                'title' => '作业ID。',
                                'description' => '作业ID。',
                                'type' => 'string',
                                'example' => 'FJ-BCCAE48B90CC****',
                            ],
                            'AlertConf' => [
                                'title' => '报警配置。',
                                'description' => '报警配置。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'ResourceList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Resource' => [
                                        'description' => '资源列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Path' => [
                                                    'title' => '保留参数。',
                                                    'description' => '保留参数。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'Alias' => [
                                                    'title' => '保留参数。',
                                                    'description' => '保留参数。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"SPARK\\",\\n  \\"LastInstanceId\\": \\"FJI-0BA97D0BB8F3****\\",\\n  \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"RetryInterval\\": 200,\\n  \\"Mode\\": \\"YARN\\",\\n  \\"GmtModified\\": 1538017813000,\\n  \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n  \\"Params\\": \\"oss://bucket_name/jar_to_run.jar\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"Description\\": \\"这是一个作业描述。\\",\\n  \\"RetryPolicy\\": \\"无\\",\\n  \\"Adhoc\\": \\"false\\",\\n  \\"Name\\": \\"Job_name_example\\",\\n  \\"MaxRetry\\": 3,\\n  \\"MaxRunningTimeSec\\": 0,\\n  \\"FailAct\\": \\"STOP\\",\\n  \\"CustomVariables\\": \\"{\\\\\\"scope\\\\\\": \\\\\\"project\\\\\\"}\\",\\n  \\"EditLockDetail\\": \\"无\\",\\n  \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n  \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n  \\"KnoxUser\\": \\"my_knox_user_name\\",\\n  \\"KnoxPassword\\": \\"my_knox_password\\",\\n  \\"GmtCreate\\": 1538017814000,\\n  \\"CategoryId\\": \\"FC-5BD9575E3462****\\",\\n  \\"Id\\": \\"FJ-BCCAE48B90CC****\\",\\n  \\"AlertConf\\": \\"无\\",\\n  \\"ResourceList\\": {\\n    \\"Resource\\": [\\n      {\\n        \\"Path\\": \\"无\\",\\n        \\"Alias\\": \\"无\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowJobResponse>\\n    <Type>SPARK</Type>\\n    <LastInstanceId>FJI-0BA97D0BB8F3****</LastInstanceId>\\n    <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n    <RetryInterval>200</RetryInterval>\\n    <Mode>YARN</Mode>\\n    <GmtModified>1538017813000</GmtModified>\\n    <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n    <Params>oss://bucket_name/jar_to_run.jar</Params>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <Description>这是一个作业描述。</Description>\\n    <RetryPolicy>无</RetryPolicy>\\n    <Adhoc>false</Adhoc>\\n    <Name>Job_name_example</Name>\\n    <MaxRetry>3</MaxRetry>\\n    <MaxRunningTimeSec>0</MaxRunningTimeSec>\\n    <FailAct>STOP</FailAct>\\n    <CustomVariables>{\\"scope\\": \\"project\\"}</CustomVariables>\\n    <EditLockDetail>无</EditLockDetail>\\n    <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n    <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n    <KnoxUser>my_knox_user_name</KnoxUser>\\n    <KnoxPassword>my_knox_password</KnoxPassword>\\n    <GmtCreate>1538017814000</GmtCreate>\\n    <CategoryId>FC-5BD9575E3462****</CategoryId>\\n    <Id>FJ-BCCAE48B90CC****</Id>\\n    <AlertConf>无</AlertConf>\\n    <ResourceList>\\n        <Path>无</Path>\\n        <Alias>无</Alias>\\n    </ResourceList>\\n</DescribeFlowJobResponse>","errorExample":""}]',
            'title' => '查询作业信息',
            'summary' => '查询作业信息。',
        ],
        'ListFlowJobs' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE5228***',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'description' => '作业ID。您可以调用ListFlowJobs查看作业ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FJ-1A2FB31D8295****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业名称。',
                        'description' => '作业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_job_name',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业类型。用于过滤作业，支持的类型有：SPARK，SPARK_STREAMING，ZEPPELIN。',
                        'description' => '作业类型。用于过滤作业，支持的类型有：SPARK，SPARK_STREAMING，ZEPPELIN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SPARK',
                    ],
                ],
                [
                    'name' => 'Adhoc',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否为临时查询。用于过滤作业。',
                        'description' => '是否为临时查询。用于过滤作业。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页数。',
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页的作业数量。',
                        'description' => '每页的作业数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ExactName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '精确匹配 job name',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_job_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '当前页数。',
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页的作业数量。',
                                'description' => '每页的作业数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
                            ],
                            'Total' => [
                                'title' => '作业数量。',
                                'description' => '作业数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'JobList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Job' => [
                                        'description' => '作业列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                                                    'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                                                    'type' => 'string',
                                                    'example' => 'SPARK',
                                                ],
                                                'FailAct' => [
                                                    'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                                    'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                                    'type' => 'string',
                                                    'example' => 'STOP',
                                                ],
                                                'CustomVariables' => [
                                                    'title' => '自定义变量。',
                                                    'description' => '自定义变量。',
                                                    'type' => 'string',
                                                    'example' => '{"scope": "project"}',
                                                ],
                                                'RetryInterval' => [
                                                    'title' => '重试间隔 0~300（秒）。',
                                                    'description' => '重试间隔 0~300（秒）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'EnvConf' => [
                                                    'title' => '环境变量设置。',
                                                    'description' => '环境变量设置。',
                                                    'type' => 'string',
                                                    'example' => '{"key":"value"}',
                                                ],
                                                'ParamConf' => [
                                                    'title' => '参数设置。',
                                                    'description' => '参数设置。',
                                                    'type' => 'string',
                                                    'example' => '{"date":"${yyyy-MM-dd}"}',
                                                ],
                                                'Mode' => [
                                                    'title' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                                                    'description' => '模型模式，取值如下：  YARN：将作业包装成一个Launcher提交至YARN中执行，LOCAL：作业直接在机器上以进程方式运行。',
                                                    'type' => 'string',
                                                    'example' => 'YARN',
                                                ],
                                                'GmtModified' => [
                                                    'title' => '最后修改时间。',
                                                    'description' => '最后修改时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017813000',
                                                ],
                                                'MonitorConf' => [
                                                    'title' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                                                    'description' => '监控配置，仅SPARK_STREAMING类型作业支持监控配置。',
                                                    'type' => 'string',
                                                    'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                                                ],
                                                'LastInstanceDetail' => [
                                                    'title' => '最后一次执行的实例ID。',
                                                    'description' => '最后一次执行的实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'FJI-0BA97D0BB8F3****',
                                                ],
                                                'RunConf' => [
                                                    'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                                    'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                                    'type' => 'string',
                                                    'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                                                ],
                                                'Params' => [
                                                    'title' => '作业内容。',
                                                    'description' => '作业内容。',
                                                    'type' => 'string',
                                                    'example' => 'oss://bucket_name/jar_to_run.jar',
                                                ],
                                                'Description' => [
                                                    'title' => '作业的描述。',
                                                    'description' => '作业的描述。',
                                                    'type' => 'string',
                                                    'example' => '这是一个作业描述。',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间。',
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'CategoryId' => [
                                                    'title' => '作业所在目录ID。',
                                                    'description' => '作业所在目录ID。',
                                                    'type' => 'string',
                                                    'example' => 'FC-5BD9575E3462****',
                                                ],
                                                'Adhoc' => [
                                                    'title' => '是否临时查询。',
                                                    'description' => '是否临时查询。',
                                                    'type' => 'string',
                                                    'example' => 'false',
                                                ],
                                                'Name' => [
                                                    'title' => '作业名称。',
                                                    'description' => '作业名称。',
                                                    'type' => 'string',
                                                    'example' => 'Job_name_example',
                                                ],
                                                'Id' => [
                                                    'title' => '作业ID。',
                                                    'description' => '作业ID。',
                                                    'type' => 'string',
                                                    'example' => 'FJ-BCCAE48B90CC****',
                                                ],
                                                'MaxRetry' => [
                                                    'title' => '最大重试次数。',
                                                    'description' => '最大重试次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'AlertConf' => [
                                                    'title' => '报警配置。',
                                                    'description' => '报警配置。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'ResourceList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Resource' => [
                                                            'description' => '资源列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Path' => [
                                                                        'title' => '保留参数。',
                                                                        'description' => '保留参数。',
                                                                        'type' => 'string',
                                                                        'example' => '无',
                                                                    ],
                                                                    'Alias' => [
                                                                        'title' => '保留参数。',
                                                                        'description' => '保留参数。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"Total\\": 3,\\n  \\"JobList\\": {\\n    \\"Job\\": [\\n      {\\n        \\"Type\\": \\"SPARK\\",\\n        \\"FailAct\\": \\"STOP\\",\\n        \\"CustomVariables\\": \\"{\\\\\\"scope\\\\\\": \\\\\\"project\\\\\\"}\\",\\n        \\"RetryInterval\\": 200,\\n        \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n        \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n        \\"Mode\\": \\"YARN\\",\\n        \\"GmtModified\\": 1538017813000,\\n        \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n        \\"LastInstanceDetail\\": \\"FJI-0BA97D0BB8F3****\\",\\n        \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n        \\"Params\\": \\"oss://bucket_name/jar_to_run.jar\\",\\n        \\"Description\\": \\"这是一个作业描述。\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"CategoryId\\": \\"FC-5BD9575E3462****\\",\\n        \\"Adhoc\\": \\"false\\",\\n        \\"Name\\": \\"Job_name_example\\",\\n        \\"Id\\": \\"FJ-BCCAE48B90CC****\\",\\n        \\"MaxRetry\\": 3,\\n        \\"AlertConf\\": \\"无\\",\\n        \\"ResourceList\\": {\\n          \\"Resource\\": [\\n            {\\n              \\"Path\\": \\"无\\",\\n              \\"Alias\\": \\"无\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowJobsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <Total>3</Total>\\n    <JobList>\\n        <Type>SPARK</Type>\\n        <FailAct>STOP</FailAct>\\n        <CustomVariables>{\\"scope\\": \\"project\\"}</CustomVariables>\\n        <RetryInterval>200</RetryInterval>\\n        <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n        <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n        <Mode>YARN</Mode>\\n        <GmtModified>1538017813000</GmtModified>\\n        <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n        <LastInstanceDetail>FJI-0BA97D0BB8F3****</LastInstanceDetail>\\n        <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n        <Params>oss://bucket_name/jar_to_run.jar</Params>\\n        <Description>这是一个作业描述。</Description>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <CategoryId>FC-5BD9575E3462****</CategoryId>\\n        <Adhoc>false</Adhoc>\\n        <Name>Job_name_example</Name>\\n        <Id>FJ-BCCAE48B90CC****</Id>\\n        <MaxRetry>3</MaxRetry>\\n        <AlertConf>无</AlertConf>\\n        <ResourceList>\\n            <Path>无</Path>\\n            <Alias>无</Alias>\\n        </ResourceList>\\n    </JobList>\\n</ListFlowJobsResponse>","errorExample":""}]',
            'title' => '列出所有的工作流作业',
            'summary' => '列出所有的工作流作业。',
        ],
        'ListFlowJobHistory' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE5228***',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'description' => '作业ID。您可以调用ListFlowJob查看作业ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FJ-1A2FB31D8295****',
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                        'description' => '作业的类型，可能的取值有：SPARK，SPARK_STREAMING，ZEPPELIN',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SPARK',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
                        'description' => '作业实例ID。您可以调用DescribeFlowJob查看作业实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FJI-BCCAE48B90CC****',
                    ],
                ],
                [
                    'name' => 'TimeRange',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询的时间范围参数，参数列表：type: range，from: 开始时间（long型时间戳），to: 结束时间（long型时间戳）',
                        'description' => '查询的时间范围参数，参数列表：type: range，from: 开始时间（long型时间戳），to: 结束时间（long型时间戳）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"type":"range","from":1564416000000,"to":1567008000000}',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码。',
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页查询时每页行数。',
                        'description' => '分页查询时每页行数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'StatusList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '状态列表。取值如下：SUBMITTED, RUNNING, SUCCESS, FAILED, KILL_FAILED, KILL_SUCCESS',
                        'description' => '状态列表。取值如下：SUBMITTED, RUNNING, SUCCESS, FAILED, KILL_FAILED, KILL_SUCCESS',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '["FAILED"]',
                        ],
                        'required' => false,
                        'example' => '["FAILED"]',
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5540D8F-06E8-4E3C-B47A-D75CED72A795',
                            ],
                            'PageNumber' => [
                                'title' => '当前页码。',
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '分页查询时设置的每页行数。',
                                'description' => '分页查询时设置的每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Total' => [
                                'title' => '记录总数。',
                                'description' => '记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'NodeInstances' => [
                                'type' => 'object',
                                'properties' => [
                                    'NodeInstance' => [
                                        'title' => '作业实例列表。',
                                        'description' => '作业实例列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '节点类型：JOB：作业，CLUSTER：集群，START：开始，END：结束',
                                                    'description' => '节点类型：JOB：作业，CLUSTER：集群，START：开始，END：结束',
                                                    'type' => 'string',
                                                    'example' => 'START',
                                                ],
                                                'Status' => [
                                                    'title' => '实例的执行状态：PREP：准备启动，SUBMITTING：提交中，RUNNING：运行中DONE：已完成，OK：执行成功，FAILED：执行失败，KILLED：已终止，KILL_FAILED：终止失败，START_RETRY：开始重试',
                                                    'description' => '实例的执行状态：PREP：准备启动，SUBMITTING：提交中，RUNNING：运行中DONE：已完成，OK：执行成功，FAILED：执行失败，KILLED：已终止，KILL_FAILED：终止失败，START_RETRY：开始重试',
                                                    'type' => 'string',
                                                    'example' => 'PREP',
                                                ],
                                                'pending' => [
                                                    'title' => '是否结束。',
                                                    'description' => '是否结束。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'EnvConf' => [
                                                    'title' => '环境变量设置。',
                                                    'description' => '环境变量设置。',
                                                    'type' => 'string',
                                                    'example' => '{"key":"value"}',
                                                ],
                                                'RetryInterval' => [
                                                    'title' => '重试间隔 0-300（秒）。',
                                                    'description' => '重试间隔 0-300（秒）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'ProjectId' => [
                                                    'title' => '项目ID。',
                                                    'description' => '项目ID。',
                                                    'type' => 'string',
                                                    'example' => 'FP-3535FE0BE522****',
                                                ],
                                                'JobType' => [
                                                    'title' => '作业类型。',
                                                    'description' => '作业类型。',
                                                    'type' => 'string',
                                                    'example' => 'SPARK',
                                                ],
                                                'GmtModified' => [
                                                    'title' => '创建时间。',
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796236000',
                                                ],
                                                'ExternalInfo' => [
                                                    'title' => '外部信息。例如，运行作业的错误诊断信息。',
                                                    'description' => '外部信息。例如，运行作业的错误诊断信息。',
                                                    'type' => 'string',
                                                    'example' => 'empty',
                                                ],
                                                'ExternalStatus' => [
                                                    'title' => '实例对应的Container的状态：SUBMITTED, RUNNING, SUCCESS, FAIL, KILL_FAIL, KILL_SUCCESS',
                                                    'description' => '实例对应的Container的状态：SUBMITTED, RUNNING, SUCCESS, FAIL, KILL_FAIL, KILL_SUCCESS',
                                                    'type' => 'string',
                                                    'example' => 'SUBMITTED',
                                                ],
                                                'JobName' => [
                                                    'title' => '作业名称。',
                                                    'description' => '作业名称。',
                                                    'type' => 'string',
                                                    'example' => 'my_job_name',
                                                ],
                                                'ExternalId' => [
                                                    'title' => '启动器的application的ID。',
                                                    'description' => '启动器的application的ID。',
                                                    'type' => 'string',
                                                    'example' => 'application_1541559535023_3****',
                                                ],
                                                'MaxRetry' => [
                                                    'title' => '最大重试次数。',
                                                    'description' => '最大重试次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'ClusterId' => [
                                                    'title' => '集群ID。',
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'C-A6C9F4F1E9EC****',
                                                ],
                                                'FailAct' => [
                                                    'title' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                                    'description' => '失败策略，可能的取值：CONTINUE（提过本次作业），STOP（停止作业）',
                                                    'type' => 'string',
                                                    'example' => 'STOP',
                                                ],
                                                'JobParams' => [
                                                    'title' => '作业内容。',
                                                    'description' => '作业内容。',
                                                    'type' => 'string',
                                                    'example' => 'oss://bucket_name/example.jar',
                                                ],
                                                'ParamConf' => [
                                                    'title' => '参数设置。',
                                                    'description' => '参数设置。',
                                                    'type' => 'string',
                                                    'example' => '{"date":"${yyyy-MM-dd}"}',
                                                ],
                                                'HostName' => [
                                                    'title' => '保留参数。',
                                                    'description' => '保留参数。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'Retries' => [
                                                    'title' => '重试次数。',
                                                    'description' => '重试次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'EndTime' => [
                                                    'title' => '运行结束时间。',
                                                    'description' => '运行结束时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796248000',
                                                ],
                                                'StartTime' => [
                                                    'title' => '运行开始时间。',
                                                    'description' => '运行开始时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796489000',
                                                ],
                                                'RunConf' => [
                                                    'title' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                                    'description' => '运行配置，取值如下：priority（优先级），userName（任务的Linux提交用户），memory（内存，单位为MB），cores（核数）',
                                                    'type' => 'string',
                                                    'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                                                ],
                                                'NodeName' => [
                                                    'title' => '保留参数。',
                                                    'description' => '保留参数。',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'JobId' => [
                                                    'title' => '作业ID。',
                                                    'description' => '作业ID。',
                                                    'type' => 'string',
                                                    'example' => 'FJ-A23BD131A862****',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间。',
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796236000',
                                                ],
                                                'Id' => [
                                                    'title' => '作业实例ID。',
                                                    'description' => '作业实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'FJI-F4FC53D7207E****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5540D8F-06E8-4E3C-B47A-D75CED72A795\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 12,\\n  \\"NodeInstances\\": {\\n    \\"NodeInstance\\": [\\n      {\\n        \\"Type\\": \\"START\\",\\n        \\"Status\\": \\"PREP\\",\\n        \\"pending\\": true,\\n        \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n        \\"RetryInterval\\": 200,\\n        \\"ProjectId\\": \\"FP-3535FE0BE522****\\",\\n        \\"JobType\\": \\"SPARK\\",\\n        \\"GmtModified\\": 1540796236000,\\n        \\"ExternalInfo\\": \\"empty\\",\\n        \\"ExternalStatus\\": \\"SUBMITTED\\",\\n        \\"JobName\\": \\"my_job_name\\",\\n        \\"ExternalId\\": \\"application_1541559535023_3****\\",\\n        \\"MaxRetry\\": 3,\\n        \\"ClusterId\\": \\"C-A6C9F4F1E9EC****\\",\\n        \\"FailAct\\": \\"STOP\\",\\n        \\"JobParams\\": \\"oss://bucket_name/example.jar\\",\\n        \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n        \\"HostName\\": \\"无\\",\\n        \\"Retries\\": 0,\\n        \\"EndTime\\": 1540796248000,\\n        \\"StartTime\\": 1540796489000,\\n        \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n        \\"NodeName\\": \\"无\\",\\n        \\"JobId\\": \\"FJ-A23BD131A862****\\",\\n        \\"GmtCreate\\": 1540796236000,\\n        \\"Id\\": \\"FJI-F4FC53D7207E****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowJobHistoryResponse>\\n    <RequestId>F5540D8F-06E8-4E3C-B47A-D75CED72A795</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <Total>12</Total>\\n    <NodeInstances>\\n        <Type>START</Type>\\n        <Status>PREP</Status>\\n        <pending>true</pending>\\n        <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n        <RetryInterval>200</RetryInterval>\\n        <ProjectId>FP-3535FE0BE522****</ProjectId>\\n        <JobType>SPARK</JobType>\\n        <GmtModified>1540796236000</GmtModified>\\n        <ExternalInfo>empty</ExternalInfo>\\n        <ExternalStatus>SUBMITTED</ExternalStatus>\\n        <JobName>my_job_name</JobName>\\n        <ExternalId>application_1541559535023_3****</ExternalId>\\n        <MaxRetry>3</MaxRetry>\\n        <ClusterId>C-A6C9F4F1E9EC****</ClusterId>\\n        <FailAct>STOP</FailAct>\\n        <JobParams>oss://bucket_name/example.jar</JobParams>\\n        <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n        <HostName>无</HostName>\\n        <Retries>0</Retries>\\n        <EndTime>1540796248000</EndTime>\\n        <StartTime>1540796489000</StartTime>\\n        <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n        <NodeName>无</NodeName>\\n        <JobId>FJ-A23BD131A862****</JobId>\\n        <GmtCreate>1540796236000</GmtCreate>\\n        <Id>FJI-F4FC53D7207E****</Id>\\n    </NodeInstances>\\n</ListFlowJobHistoryResponse>","errorExample":""}]',
            'title' => '查询作业运行实例列表',
            'summary' => '调用ListFlowJobHistory接口，查询作业的运行实例列表。',
        ],
        'RerunFlow' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE522****',
                    ],
                ],
                [
                    'name' => 'FlowInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流实例ID。您可以调用ListFlowInstance查看工作流实例ID。',
                        'description' => '工作流实例ID。您可以调用ListFlowInstance查看工作流实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FI-9DDAAA3ADA5F****',
                    ],
                ],
                [
                    'name' => 'ReRunFail',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否只重试失败节点。',
                        'description' => '是否只重试失败节点。',
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
                            'Data' => [
                                'title' => '返回执行结果，包含如下：true: 重试工作流成功，false: 重试工作流失败。',
                                'description' => '返回执行结果，包含如下：true: 重试工作流成功，false: 重试工作流失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<RerunFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</RerunFlowResponse>","errorExample":""}]',
            'title' => '重跑已经结束的工作流实例',
            'summary' => '重跑已经结束的工作流实例。',
        ],
        'SubmitFlow' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-AC84F265C8E4****',
                    ],
                ],
                [
                    'name' => 'FlowId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
                        'description' => '工作流ID。您可以调用ListFlowInstance查看工作流ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'F-FD06A29AF6D2****',
                    ],
                ],
                [
                    'name' => 'Conf',
                    'in' => 'query',
                    'schema' => [
                        'title' => '配置信息{"key":"value"}格式。  本示例中cyctime表示实际调度运行的时间（长整型时间戳）。',
                        'description' => '配置信息{"key":"value"}格式。  本示例中cyctime表示实际调度运行的时间（长整型时间戳）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"cyctime":"1542783967503"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '过期参数。',
                                'description' => '过期参数。',
                                'type' => 'string',
                                'example' => 'FI-7A39731FE719****',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                            'InstanceId' => [
                                'title' => '过期参数。',
                                'description' => '过期参数。',
                                'type' => 'string',
                                'example' => 'FI-7A39731FE719****',
                            ],
                            'Id' => [
                                'title' => '工作流实例ID。',
                                'description' => '工作流实例ID。',
                                'type' => 'string',
                                'example' => 'FI-7A39731FE719****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"FI-7A39731FE719****\\",\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\",\\n  \\"InstanceId\\": \\"FI-7A39731FE719****\\",\\n  \\"Id\\": \\"FI-7A39731FE719****\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitFlowResponse>\\n    <Data>FI-7A39731FE719****</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n    <InstanceId>FI-7A39731FE719****</InstanceId>\\n    <Id>FI-7A39731FE719****</Id>\\n</SubmitFlowResponse>","errorExample":""}]',
            'title' => '提交运行工作流',
            'summary' => '提交运行工作流。',
        ],
        'ResumeFlow' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'description' => '区域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'description' => '项目ID。您可以调用ListFlowProject查看项目的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE522****',
                    ],
                ],
                [
                    'name' => 'FlowInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流实例ID。您可以调用ListFlowInstance查看工作流ID。',
                        'description' => '工作流实例ID。您可以调用ListFlowInstance查看工作流ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FI-9DDAAA3ADA5F****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回执行结果。',
                                'description' => '返回执行结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B46F8A2A-B46B-415C-8A9C-B01B99B775A2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"B46F8A2A-B46B-415C-8A9C-B01B99B775A2\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeFlowResponse>\\n    <Data>true</Data>\\n    <RequestId>B46F8A2A-B46B-415C-8A9C-B01B99B775A2</RequestId>\\n</ResumeFlowResponse>","errorExample":""}]',
            'title' => '恢复暂停的工作流',
            'summary' => '恢复暂停的工作流。',
        ],
        'CreateFlowProject' => [
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
            'parameters' => [
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品类型，固定值DATABRICKS_DATAINSIGHT',
                        'description' => '项目描述。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个项目描述',
                        'enum' => [
                            'DATABRICKS_DATAINSIGHT',
                        ],
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_project',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目描述',
                        'description' => '项目描述。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '这是一个项目描述',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => 'EMR实例和节点ECS实例所在的企业资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-bp67acfmxazb4p****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '项目ID',
                                'description' => '项目ID',
                                'type' => 'string',
                                'example' => 'FP-257A173659F5****',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": \\"FP-257A173659F5****\\",\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowProjectResponse>\\n    <Id>FP-257A173659F5****</Id>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</CreateFlowProjectResponse>","errorExample":""}]',
            'title' => '创建数据开发项目',
            'summary' => '创建数据开发项目。',
        ],
        'CreateFlowProjectUser' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'User',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'UserId' => [
                                    'description' => '阿里云账号ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '12*****',
                                ],
                                'UserName' => [
                                    'description' => 'RAM用户名。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'subuser1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回执行结果，包含如下：'."\n"
                                    ."\n"
                                    .'- true：添加成功。'."\n"
                                    ."\n"
                                    .'- false：添加失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowProjectUserResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</CreateFlowProjectUserResponse>","errorExample":""}]',
            'title' => '添加项目用户',
            'summary' => '添加项目用户。',
        ],
        'DeleteFlowProject' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2670BCFB-925D-4C3E-9994-8D12F7A9F538',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"2670BCFB-925D-4C3E-9994-8D12F7A9F538\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowProjectResponse>\\n    <Data>true</Data>\\n    <RequestId>2670BCFB-925D-4C3E-9994-8D12F7A9F538</RequestId>\\n</DeleteFlowProjectResponse>","errorExample":""}]',
            'title' => '删除数据开发项目',
            'summary' => '删除数据开发项目。',
        ],
        'DeleteFlowProjectUser' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'subuser1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回执行结果，包含如下：'."\n"
                                    ."\n"
                                    .'- true：删除成功。'."\n"
                                    ."\n"
                                    .'- false：删除失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowProjectUserResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</DeleteFlowProjectUserResponse>","errorExample":""}]',
            'title' => '删除项目用户',
            'summary' => '删除项目用户。',
        ],
        'ModifyFlowProject' => [
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
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_project',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my flow description',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回结果。 取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    ."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '11BAFBD8-8509-4177-A26D-407505E73713',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"11BAFBD8-8509-4177-A26D-407505E73713\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowProjectResponse>\\n    <Data>true</Data>\\n    <RequestId>11BAFBD8-8509-4177-A26D-407505E73713</RequestId>\\n</ModifyFlowProjectResponse>","errorExample":""}]',
            'title' => '修改数据开发项目',
            'summary' => '修改数据开发项目。',
        ],
        'DescribeFlowProject' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-5D55DA9DEDF2****',
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
                                'example' => 'ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D',
                            ],
                            'Description' => [
                                'description' => '项目描述。',
                                'type' => 'string',
                                'example' => 'project description demo',
                            ],
                            'UserId' => [
                                'description' => '主账号ID。',
                                'type' => 'string',
                                'example' => '123456789',
                            ],
                            'GmtCreate' => [
                                'description' => '创建时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1542934807000',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1542934807000',
                            ],
                            'Name' => [
                                'description' => '项目名称。',
                                'type' => 'string',
                                'example' => 'project_name_demo',
                            ],
                            'Id' => [
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => 'FP-5D55DA9DEDF2****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D\\",\\n  \\"Description\\": \\"project description demo\\",\\n  \\"UserId\\": \\"123456789\\",\\n  \\"GmtCreate\\": 1542934807000,\\n  \\"GmtModified\\": 1542934807000,\\n  \\"Name\\": \\"project_name_demo\\",\\n  \\"Id\\": \\"FP-5D55DA9DEDF2****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowProjectResponse>\\n    <RequestId>ACD3A7A5-CD6E-48DA-823B-ACE5B01DA43D</RequestId>\\n    <Description>project description demo</Description>\\n    <UserId>123456789</UserId>\\n    <GmtCreate>1542934807000</GmtCreate>\\n    <GmtModified>1542934807000</GmtModified>\\n    <Name>project_name_demo</Name>\\n    <Id>FP-5D55DA9DEDF2****</Id>\\n</DescribeFlowProjectResponse>","errorExample":""}]',
            'title' => '查询项目详情',
            'summary' => '查询项目详情。',
        ],
        'ListFlowProjects' => [
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
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品类型。固定值DATABIRCKS_DATAINSIGHT',
                        'description' => '产品类型。固定值DATABIRCKS_DATAINSIGHT',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DATABRICKS_DATAINSIGHT',
                        'enum' => [
                            'EMR',
                            'FLINK',
                            'DSW',
                            'FLINK_SPEC',
                            'DATABRICKS_DATAINSIGHT',
                        ],
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域ID',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目ID。您可以调用ListFlowProjects查看项目的ID',
                        'description' => '项目ID。您可以调用ListFlowProjects查看项目的ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FP-CXNDJSCZKXNDC',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目名称，用于过滤项目',
                        'description' => '项目名称，用于过滤项目',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_project',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码，用于分页',
                        'description' => '页码，用于分页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-axndjccbxdj',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '页码',
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页数量',
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '83B256D4-4E95-454B-AD08-799DF31D5556',
                            ],
                            'Total' => [
                                'title' => '总数',
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Projects' => [
                                'type' => 'object',
                                'properties' => [
                                    'Project' => [
                                        'title' => '项目列表',
                                        'description' => '项目列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'title' => '项目描述',
                                                    'description' => '项目描述',
                                                    'type' => 'string',
                                                    'example' => '这是一个项目描述',
                                                ],
                                                'UserId' => [
                                                    'title' => '主账号ID',
                                                    'description' => '主账号ID',
                                                    'type' => 'string',
                                                    'example' => '123456',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间戳',
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796236000',
                                                ],
                                                'GmtModified' => [
                                                    'title' => '修改时间戳',
                                                    'description' => '修改时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1540796236000',
                                                ],
                                                'Name' => [
                                                    'title' => '项目名称',
                                                    'description' => '项目名称',
                                                    'type' => 'string',
                                                    'example' => 'my_project',
                                                ],
                                                'Id' => [
                                                    'title' => '项目ID',
                                                    'description' => '项目ID',
                                                    'type' => 'string',
                                                    'example' => 'FB-SBCXKSDCBDS',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"83B256D4-4E95-454B-AD08-799DF31D5556\\",\\n  \\"Total\\": 1,\\n  \\"Projects\\": {\\n    \\"Project\\": [\\n      {\\n        \\"Description\\": \\"这是一个项目描述\\",\\n        \\"UserId\\": \\"123456\\",\\n        \\"GmtCreate\\": 1540796236000,\\n        \\"GmtModified\\": 1540796236000,\\n        \\"Name\\": \\"my_project\\",\\n        \\"Id\\": \\"FB-SBCXKSDCBDS\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowProjectsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <RequestId>83B256D4-4E95-454B-AD08-799DF31D5556</RequestId>\\n    <Total>1</Total>\\n    <Projects>\\n        <Description>这是一个项目描述</Description>\\n        <UserId>123456</UserId>\\n        <GmtCreate>1540796236000</GmtCreate>\\n        <GmtModified>1540796236000</GmtModified>\\n        <Name>my_project</Name>\\n        <Id>FB-SBCXKSDCBDS</Id>\\n    </Projects>\\n</ListFlowProjectsResponse>","errorExample":""}]',
            'title' => '列出所有的项目空间',
            'summary' => '列出所有的项目空间。',
        ],
        'ListFlowProjectUser' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-3535FE0BE522****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '20',
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
                                'example' => '80F270E8-27BD-4F24-BB2A-CD3FBCC450DA',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Total' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ProjectId' => [
                                                    'description' => '项目ID。',
                                                    'type' => 'string',
                                                    'example' => 'FP-3535FE0BE522****',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1538017814000',
                                                ],
                                                'UserName' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => 'admin',
                                                ],
                                                'AccountUserId' => [
                                                    'description' => '用户ID',
                                                    'type' => 'string',
                                                    'example' => '252016171****',
                                                ],
                                                'OwnerId' => [
                                                    'description' => '阿里云账号ID。',
                                                    'type' => 'string',
                                                    'example' => '123456',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"80F270E8-27BD-4F24-BB2A-CD3FBCC450DA\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Total\\": 20,\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"ProjectId\\": \\"FP-3535FE0BE522****\\",\\n        \\"GmtCreate\\": 1538017814000,\\n        \\"GmtModified\\": 1538017814000,\\n        \\"UserName\\": \\"admin\\",\\n        \\"AccountUserId\\": \\"252016171****\\",\\n        \\"OwnerId\\": \\"123456\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFlowProjectUserResponse>\\n    <RequestId>80F270E8-27BD-4F24-BB2A-CD3FBCC450DA</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <Total>20</Total>\\n    <Users>\\n        <ProjectId>FP-3535FE0BE522****</ProjectId>\\n        <GmtCreate>1538017814000</GmtCreate>\\n        <GmtModified>1538017814000</GmtModified>\\n        <UserName>admin</UserName>\\n        <AccountUserId>252016171****</AccountUserId>\\n        <OwnerId>123456</OwnerId>\\n    </Users>\\n</ListFlowProjectUserResponse>","errorExample":""}]',
            'title' => '查询项目用户列表',
            'summary' => '调用ListFlowProjectUser接口，查询项目用户列表。',
        ],
        'DescribeFlowCategoryTree' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-ABD24A6163D3****',
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录类型，取值如下：'."\n"
                            ."\n"
                            .'- FLOW（工作流）'."\n"
                            ."\n"
                            .'- JOB（作业）'."\n"
                            ."\n"
                            .'- ADHOC（临时查询）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FLOW',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型模式，支持如下取值：'."\n"
                            ."\n"
                            .'- FULL：默认模式,可以不填, 获取完整的目录树。'."\n"
                            ."\n"
                            .'- STEP：获取下一级目录列表, 需要设置父目录id。'."\n"
                            ."\n"
                            .'- LOCATION：定位模式, 获取给定目录的最小展开树。'."\n"
                            ."\n"
                            .'- SEARCH：搜索模式,  过滤包含关键字的目录项目。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FULL',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检索关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SQL',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- STEP模式下：上级目录id, 获取根目录id时不设置'."\n"
                            ."\n"
                            .'- LOCATION模式下：需要定位的目录id'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FC-5BD9575E3462****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '结果， 由node和children构成的树状结构。',
                                'type' => 'string',
                                'example' => '{"node":{"categoryType":"FOLDER","gmtModified":1540344706000,"name":"FLOW","id":"FC-6B5B5BDAD3EFAB67","gmtCreate":1540344706000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"root_parent"},"children":[{"node":{"categoryType":"FILE","gmtModified":1542855766000,"name":"flow2","id":"FC-D30AC9A7795F03A1","gmtCreate":1542855766000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-E9DC5533695C989B","objectType":"FLOW"},"children":[],"childrenMap":{}},{"node":{"categoryType":"FILE","gmtModified":1540796206000,"name":"flow-hive","id":"FC-296E3BB9491E39F2","gmtCreate":1540796206000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-35683D0E45734E34","objectType":"FLOW"},"children":[],"childrenMap":{}}]}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '5C5E4A6F-5140-4627-AB81-F3E0D06C5C36',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FOLDER\\\\\\",\\\\\\"gmtModified\\\\\\":1540344706000,\\\\\\"name\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"gmtCreate\\\\\\":1540344706000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"root_parent\\\\\\"},\\\\\\"children\\\\\\":[{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FILE\\\\\\",\\\\\\"gmtModified\\\\\\":1542855766000,\\\\\\"name\\\\\\":\\\\\\"flow2\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-D30AC9A7795F03A1\\\\\\",\\\\\\"gmtCreate\\\\\\":1542855766000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"objectId\\\\\\":\\\\\\"F-E9DC5533695C989B\\\\\\",\\\\\\"objectType\\\\\\":\\\\\\"FLOW\\\\\\"},\\\\\\"children\\\\\\":[],\\\\\\"childrenMap\\\\\\":{}},{\\\\\\"node\\\\\\":{\\\\\\"categoryType\\\\\\":\\\\\\"FILE\\\\\\",\\\\\\"gmtModified\\\\\\":1540796206000,\\\\\\"name\\\\\\":\\\\\\"flow-hive\\\\\\",\\\\\\"id\\\\\\":\\\\\\"FC-296E3BB9491E39F2\\\\\\",\\\\\\"gmtCreate\\\\\\":1540796206000,\\\\\\"type\\\\\\":\\\\\\"FLOW\\\\\\",\\\\\\"projectId\\\\\\":\\\\\\"FP-7A1018ADE9179EE1\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"FC-6B5B5BDAD3EFAB67\\\\\\",\\\\\\"objectId\\\\\\":\\\\\\"F-35683D0E45734E34\\\\\\",\\\\\\"objectType\\\\\\":\\\\\\"FLOW\\\\\\"},\\\\\\"children\\\\\\":[],\\\\\\"childrenMap\\\\\\":{}}]}\\",\\n  \\"RequestId\\": \\"5C5E4A6F-5140-4627-AB81-F3E0D06C5C36\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowCategoryTreeResponse>\\n    <Data>{\\"node\\":{\\"categoryType\\":\\"FOLDER\\",\\"gmtModified\\":1540344706000,\\"name\\":\\"FLOW\\",\\"id\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"gmtCreate\\":1540344706000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"root_parent\\"},\\"children\\":[{\\"node\\":{\\"categoryType\\":\\"FILE\\",\\"gmtModified\\":1542855766000,\\"name\\":\\"flow2\\",\\"id\\":\\"FC-D30AC9A7795F03A1\\",\\"gmtCreate\\":1542855766000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"objectId\\":\\"F-E9DC5533695C989B\\",\\"objectType\\":\\"FLOW\\"},\\"children\\":[],\\"childrenMap\\":{}},{\\"node\\":{\\"categoryType\\":\\"FILE\\",\\"gmtModified\\":1540796206000,\\"name\\":\\"flow-hive\\",\\"id\\":\\"FC-296E3BB9491E39F2\\",\\"gmtCreate\\":1540796206000,\\"type\\":\\"FLOW\\",\\"projectId\\":\\"FP-7A1018ADE9179EE1\\",\\"parentId\\":\\"FC-6B5B5BDAD3EFAB67\\",\\"objectId\\":\\"F-35683D0E45734E34\\",\\"objectType\\":\\"FLOW\\"},\\"children\\":[],\\"childrenMap\\":{}}]}</Data>\\n    <RequestId>5C5E4A6F-5140-4627-AB81-F3E0D06C5C36</RequestId>\\n</DescribeFlowCategoryTreeResponse>","errorExample":""}]',
            'title' => '获取目录树',
            'summary' => '调用DescribeFlowCategoryTree接口，获取目录树。',
        ],
        'DescribeFlowEntitySnapshot' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'CurrentSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'OrderField',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommitterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Revision',
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
                            'Active' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'EntityId' => [
                                'type' => 'string',
                            ],
                            'EntityType' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'GmtCreate' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'EntityGroupId' => [
                                'type' => 'string',
                            ],
                            'CommitterId' => [
                                'type' => 'string',
                            ],
                            'Revision' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '',
        ],
        'DescribeFlowNodeInstance' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-7A1018ADE917****',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FNI-FE4BD156E939****',
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
                            'Status' => [
                                'description' => '实例的执行状态，取值如下：'."\n"
                                    ."\n"
                                    .'- PREP（等待启动）'."\n"
                                    ."\n"
                                    .'- SUBMITTING（提交中）'."\n"
                                    ."\n"
                                    .'- RUNNING（运行中）'."\n"
                                    ."\n"
                                    .'- DONE（已完成）'."\n"
                                    ."\n"
                                    .'- OK（执行成功）'."\n"
                                    ."\n"
                                    .'- FAILED（执行失败）'."\n"
                                    ."\n"
                                    .'- KILLED（已终止）'."\n"
                                    ."\n"
                                    .'- KILL_FAILED（终止失败）'."\n"
                                    ."\n"
                                    .'- START_RETRY（开始重试）',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Type' => [
                                'description' => '节点类型，取值如下：'."\n"
                                    ."\n"
                                    .'- JOB：作业'."\n"
                                    ."\n"
                                    .'- CLUSTER：集群'."\n"
                                    ."\n"
                                    .'- START：开始'."\n"
                                    ."\n"
                                    .'- END：结束',
                                'type' => 'string',
                                'example' => 'JOB',
                            ],
                            'EnvConf' => [
                                'description' => '环境变量。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'ProjectId' => [
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => 'FP-7A1018ADE917****',
                            ],
                            'RetryInterval' => [
                                'description' => '重试间隔，单位s。',
                                'type' => 'string',
                                'example' => '15',
                            ],
                            'JobType' => [
                                'description' => '作业类型。',
                                'type' => 'string',
                                'example' => 'HIVE_SQL',
                            ],
                            'Mode' => [
                                'description' => '模型模式。支持：YARN和LOCAL YARN。将作业包装成一个 launcher提交至YARN中执行LOCAL。作业直接在主机上以进程方式运行。',
                                'type' => 'string',
                                'example' => 'YARN',
                            ],
                            'ExternalInfo' => [
                                'description' => '外部信息。例如运行作业的错误诊断信息。',
                                'type' => 'string',
                                'example' => 'empty',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1540796247000',
                            ],
                            'ExternalChildIds' => [
                                'description' => '任务的application列表。',
                                'type' => 'string',
                                'example' => 'application_1541559535023_34028',
                            ],
                            'MonitorConf' => [
                                'description' => '监控配置，只有SPARK_STREAMING类型作业支持。',
                                'type' => 'string',
                                'example' => '{"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}',
                            ],
                            'ExternalStatus' => [
                                'description' => '实例对应的Container的状态，取值如下：'."\n"
                                    ."\n"
                                    .'- SUBMITTED（已提交）'."\n"
                                    ."\n"
                                    .'- RUNNING（运行中）'."\n"
                                    ."\n"
                                    .'- SUCCESS（执行成功）'."\n"
                                    ."\n"
                                    .'- FAIL（执行失败）'."\n"
                                    ."\n"
                                    .'- KILL_FAIL（终止失败）'."\n"
                                    ."\n"
                                    .'- KILL_SUCCESS（终止成功）',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1549175a-6d14-4c8a-89f9-5e28300f6d7e',
                            ],
                            'JobName' => [
                                'description' => '作业名称。',
                                'type' => 'string',
                                'example' => 'myJob',
                            ],
                            'RetryPolicy' => [
                                'description' => '重试策略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Adhoc' => [
                                'description' => '是否临时查询。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ExternalId' => [
                                'description' => '启动器的application的ID。',
                                'type' => 'string',
                                'example' => 'application_1541559535023_34027',
                            ],
                            'Pending' => [
                                'description' => '是否结束。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ClusterId' => [
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'C-F32FB31D8295****',
                            ],
                            'MaxRetry' => [
                                'description' => '最大重试次数。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'FailAct' => [
                                'description' => '失败策略，取值如下：'."\n"
                                    ."\n"
                                    .'- STOP（终止工作流）'."\n"
                                    ."\n"
                                    .'- CONTINUE（跳过）',
                                'type' => 'string',
                                'example' => 'STOP',
                            ],
                            'JobParams' => [
                                'description' => '作业内容。',
                                'type' => 'string',
                                'example' => 'ls -l',
                            ],
                            'FlowInstanceId' => [
                                'description' => '工作流实例ID。',
                                'type' => 'string',
                                'example' => 'FI-7CAF9709CD32****',
                            ],
                            'ParamConf' => [
                                'description' => '参数配置。',
                                'type' => 'string',
                                'example' => '{"date":"${yyyy-MM-dd}"}',
                            ],
                            'HostName' => [
                                'description' => '节点实例运行所在主机的名称。您可以登录主机使用hostname命令查看主机名称。',
                                'type' => 'string',
                                'example' => 'emr-header-1.cluster-12345',
                            ],
                            'FlowId' => [
                                'description' => '工作流ID。',
                                'type' => 'string',
                                'example' => 'F-35683D0E4573****',
                            ],
                            'Retries' => [
                                'description' => '重试次数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'EndTime' => [
                                'description' => '运行结束时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1540796248000',
                            ],
                            'StartTime' => [
                                'description' => '运行开始时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1540796237000',
                            ],
                            'RunConf' => [
                                'description' => '运行配置，取值如下：'."\n"
                                    ."\n"
                                    .'- priority：优先级。'."\n"
                                    ."\n"
                                    .'- userName：用于提交作业Linux用户。'."\n"
                                    ."\n"
                                    .'- memory：内存单位为MB。'."\n"
                                    ."\n"
                                    .'- cores： 核数。',
                                'type' => 'string',
                                'example' => '{"priority":1,"userName":"hadoop","memory":2048,"cores":1}',
                            ],
                            'ExternalSubId' => [
                                'description' => '启动器container的ID。',
                                'type' => 'string',
                                'example' => 'container_1541559535023_34027_01_000001',
                            ],
                            'NodeName' => [
                                'description' => '节点名称。',
                                'type' => 'string',
                                'example' => '812589f5',
                            ],
                            'JobId' => [
                                'description' => '作业ID。',
                                'type' => 'string',
                                'example' => 'FJ-A23BD131A862****',
                            ],
                            'ClusterName' => [
                                'description' => '集群名称。',
                                'type' => 'string',
                                'example' => 'myCluster',
                            ],
                            'GmtCreate' => [
                                'description' => '创建时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1540796236000',
                            ],
                            'Duration' => [
                                'description' => '运行持续时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '600',
                            ],
                            'Id' => [
                                'description' => '节点实例ID',
                                'type' => 'string',
                                'example' => 'FNI-FE4BD156E939****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"Type\\": \\"JOB\\",\\n  \\"EnvConf\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"ProjectId\\": \\"FP-7A1018ADE917****\\",\\n  \\"RetryInterval\\": \\"15\\",\\n  \\"JobType\\": \\"HIVE_SQL\\",\\n  \\"Mode\\": \\"YARN\\",\\n  \\"ExternalInfo\\": \\"empty\\",\\n  \\"GmtModified\\": 1540796247000,\\n  \\"ExternalChildIds\\": \\"application_1541559535023_34028\\",\\n  \\"MonitorConf\\": \\"{\\\\\\"inputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\",\\\\\\"consumer.group\\\\\\":\\\\\\"kafka_consumer_group\\\\\\"}],\\\\\\"outputs\\\\\\":[{\\\\\\"type\\\\\\":\\\\\\"KAFKA\\\\\\",\\\\\\"clusterId\\\\\\":\\\\\\"C-1234567\\\\\\",\\\\\\"topics\\\\\\":\\\\\\"kafka_topic\\\\\\"}]}\\",\\n  \\"ExternalStatus\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"1549175a-6d14-4c8a-89f9-5e28300f6d7e\\",\\n  \\"JobName\\": \\"myJob\\",\\n  \\"RetryPolicy\\": \\"无\\",\\n  \\"Adhoc\\": true,\\n  \\"ExternalId\\": \\"application_1541559535023_34027\\",\\n  \\"Pending\\": true,\\n  \\"ClusterId\\": \\"C-F32FB31D8295****\\",\\n  \\"MaxRetry\\": \\"0\\",\\n  \\"FailAct\\": \\"STOP\\",\\n  \\"JobParams\\": \\"ls -l\\",\\n  \\"FlowInstanceId\\": \\"FI-7CAF9709CD32****\\",\\n  \\"ParamConf\\": \\"{\\\\\\"date\\\\\\":\\\\\\"${yyyy-MM-dd}\\\\\\"}\\",\\n  \\"HostName\\": \\"emr-header-1.cluster-12345\\",\\n  \\"FlowId\\": \\"F-35683D0E4573****\\",\\n  \\"Retries\\": 0,\\n  \\"EndTime\\": 1540796248000,\\n  \\"StartTime\\": 1540796237000,\\n  \\"RunConf\\": \\"{\\\\\\"priority\\\\\\":1,\\\\\\"userName\\\\\\":\\\\\\"hadoop\\\\\\",\\\\\\"memory\\\\\\":2048,\\\\\\"cores\\\\\\":1}\\",\\n  \\"ExternalSubId\\": \\"container_1541559535023_34027_01_000001\\",\\n  \\"NodeName\\": \\"812589f5\\",\\n  \\"JobId\\": \\"FJ-A23BD131A862****\\",\\n  \\"ClusterName\\": \\"myCluster\\",\\n  \\"GmtCreate\\": 1540796236000,\\n  \\"Duration\\": 600,\\n  \\"Id\\": \\"FNI-FE4BD156E939****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFlowNodeInstanceResponse>\\n    <Status>OK</Status>\\n    <Type>JOB</Type>\\n    <EnvConf>{\\"key\\":\\"value\\"}</EnvConf>\\n    <ProjectId>FP-7A1018ADE917****</ProjectId>\\n    <RetryInterval>15</RetryInterval>\\n    <JobType>HIVE_SQL</JobType>\\n    <Mode>YARN</Mode>\\n    <ExternalInfo>empty</ExternalInfo>\\n    <GmtModified>1540796247000</GmtModified>\\n    <ExternalChildIds>application_1541559535023_34028</ExternalChildIds>\\n    <MonitorConf>{\\"inputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\",\\"consumer.group\\":\\"kafka_consumer_group\\"}],\\"outputs\\":[{\\"type\\":\\"KAFKA\\",\\"clusterId\\":\\"C-1234567\\",\\"topics\\":\\"kafka_topic\\"}]}</MonitorConf>\\n    <ExternalStatus>SUCCESS</ExternalStatus>\\n    <RequestId>1549175a-6d14-4c8a-89f9-5e28300f6d7e</RequestId>\\n    <JobName>myJob</JobName>\\n    <RetryPolicy>无</RetryPolicy>\\n    <Adhoc>true</Adhoc>\\n    <ExternalId>application_1541559535023_34027</ExternalId>\\n    <Pending>true</Pending>\\n    <ClusterId>C-F32FB31D8295****</ClusterId>\\n    <MaxRetry>0</MaxRetry>\\n    <FailAct>STOP</FailAct>\\n    <JobParams>ls -l</JobParams>\\n    <FlowInstanceId>FI-7CAF9709CD32****</FlowInstanceId>\\n    <ParamConf>{\\"date\\":\\"${yyyy-MM-dd}\\"}</ParamConf>\\n    <HostName>emr-header-1.cluster-12345</HostName>\\n    <FlowId>F-35683D0E4573****</FlowId>\\n    <Retries>0</Retries>\\n    <EndTime>1540796248000</EndTime>\\n    <StartTime>1540796237000</StartTime>\\n    <RunConf>{\\"priority\\":1,\\"userName\\":\\"hadoop\\",\\"memory\\":2048,\\"cores\\":1}</RunConf>\\n    <ExternalSubId>container_1541559535023_34027_01_000001</ExternalSubId>\\n    <NodeName>812589f5</NodeName>\\n    <JobId>FJ-A23BD131A862****</JobId>\\n    <ClusterName>myCluster</ClusterName>\\n    <GmtCreate>1540796236000</GmtCreate>\\n    <Duration>600</Duration>\\n    <Id>FNI-FE4BD156E939****</Id>\\n</DescribeFlowNodeInstanceResponse>","errorExample":""}]',
            'title' => '查询节点实例详情',
            'summary' => '调用DescribeFlowNodeInstance接口，查询节点实例（工作流节点实例和作业运行节点实例）详情。',
        ],
        'ModifyFlowForWeb' => [
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
                        'description' => '	'."\n"
                            .'地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FP-257A173659F5****',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'F-7A39731FE719****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'工作流名称， 长度限制为64个字符，同一个项目中不允许重名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_flow',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流状态， 支持STOP_SCHEDULE和UNDER_SCHEDULE。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STOP_SCHEDULE',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'工作流描述，长度限制为256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个工作流描述',
                    ],
                ],
                [
                    'name' => 'Periodic',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否周期调度。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'StartSchedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度生效时间， 长整型时间戳。例如：System.currentTimeMillis()必须小于EndSchedule。当CronExpr不为空时， 此项必填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '1538017814000',
                    ],
                ],
                [
                    'name' => 'EndSchedule',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度失效时间，长整型时间戳，例如：System.currentTimeMillis()。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '1538018814000',
                    ],
                ],
                [
                    'name' => 'CronExpr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间周期调度的Cron表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0 0-23/1 * * ?',
                    ],
                ],
                [
                    'name' => 'CreateCluster',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否创建集群：'."\n"
                            ."\n"
                            .'为true时，ClusterId为集群模板ID：CT-XXXXXX。'."\n"
                            .'为false时，ClusterId为集群ID：C-XXXXXX。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'C-F32FB31D8295****',
                    ],
                ],
                [
                    'name' => 'HostName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定运行的机器信息，格式为emr-header-1.cluster-123456。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'emr-header-1.cluster-123456',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Graph',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流信息',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"nodes":[{"id":"48d474ea","attribute":{"type":"START"},"type":"node"},{"id":"59065ccd","label":"bep-test","attribute":{"jobId":"FJ-6B0706D041565649","type":"JOB","jobType":"SPARK"},"type":"node","config":{"hostName":"","clusterId":""}},{"id":"aa1557a6","attribute":{"type":"END"},"type":"node"},{"id":"29e683d7","label":"test","attribute":{"jobId":"FJ-A9E1B3AF5B5E28B3","type":"JOB","jobType":"SPARK"},"type":"node","config":{"hostName":"","clusterId":""}}],"edges":[{"sourceAnchor":0,"targetAnchor":0,"index":2,"source":"48d474ea","id":"1acb3290","target":"59065ccd"},{"sourceAnchor":1,"targetAnchor":0,"index":4,"source":"59065ccd","id":"ad0fdda5","target":"aa1557a6"}]}',
                    ],
                ],
                [
                    'name' => 'AlertConf',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警通知配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}',
                    ],
                ],
                [
                    'name' => 'AlertUserGroupBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => '已过期',
                    ],
                ],
                [
                    'name' => 'AlertDingDingGroupBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保留字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => '已过期',
                    ],
                ],
                [
                    'name' => 'ParentFlowList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '依赖的父工作流列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[F-123456]',
                    ],
                ],
                [
                    'name' => 'ParentCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父目录ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FC-F2495319DA05****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回执行结果，包含如下：'."\n"
                                    ."\n"
                                    .'true：成功'."\n"
                                    .'false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '243D5A48-96A5-4C0C-8966-93CBF65635ED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"243D5A48-96A5-4C0C-8966-93CBF65635ED\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowForWebResponse>\\n    <Data>true</Data>\\n    <RequestId>243D5A48-96A5-4C0C-8966-93CBF65635ED</RequestId>\\n</ModifyFlowForWebResponse>","errorExample":""}]',
            'title' => '修改带有图形信息的工作流',
            'summary' => '修改带有图形信息的工作流。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ddi.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ddi.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ddi.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ddi.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ddi.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ddi.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ddi.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ddi.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ddi.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ddi.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ddi.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ddi.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'ddi.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'ddi.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'ddi.aliyuncs.com',
        ],
    ],
];